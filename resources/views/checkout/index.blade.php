@extends('layouts.master')
@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
 @section('extra-script')

 <script src="https://js.stripe.com/v3/"></script>

 @endsection
@section('content')
<div class="col-md-12 p-100"  style="border: 1px solid black">

    <div class="row  justify-content-md-center">
        <div class="col-md-6">
        <div> <h1 style="text-align: center" class="p-5">Procéder au paiement</h1> </div>   

            <form action="{{route('checkout.store')}}" method="POST" id="payment-form" class="my-4">
                @csrf
                <div id="card-element">
                  <!-- Elements will create input elements here -->
                </div>
              
                <!-- We'll put the error messages in this element -->
                <div id="card-errors" role="alert"></div>
              
               <div class="col-md-12"><button class="btn btn-success mt-4" id="submit">Payer maintenent({{getPrice($total)}})</button></div> 
           </form>                 
            
        </div>
    </div>
</div>


@endsection


@section('extra-js')
    <script>
            var stripe = Stripe('pk_test_O1OBAdivLfYwndM6GvgZG7k300K6kJKIzc');
            var elements = stripe.elements();

            // client.js****************************

            var style = {
                            base: {
                            color: "#32325d",
                            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                            fontSmoothing: "antialiased",
                            fontSize: "16px",
                            "::placeholder": {
                            color: "#aab7c4"
                            }
                            },
                            invalid: {
                            color: "#fa755a",
                            iconColor: "#fa755a"
                            }
                        };
                        var card = elements.create("card", { style: style });
                        card.mount("#card-element");
            // client.js****************************

            // Postal code validation****************
             
                        card.addEventListener('change', ({error}) => {
                        const displayError = document.getElementById('card-errors');
                        if (error) {
                            displayError.classList.add('alert','alert-warning');
                            displayError.textContent = error.message;
                        } else {
                            displayError.classList.remove('alert','alert-warning');
                            displayError.textContent = '';
                        }
                        });
            // Postal code validation****************


            // var form = document.getElementById('payment-form');
            var submitButton = document.getElementById('submit');

            submitButton.addEventListener('click', function(ev) {
                    ev.preventDefault();
                    submitButton.disabled=true;
                    stripe.confirmCardPayment("{{$clientSecret}}", {
                        payment_method: {
                        card: card
                        // billing_details: {
                        //     name: 'Jenny Rosen'
                        // }
                        }
                    }).then(function(result) {
                        if (result.error) {
                            submitButton.disabled=false;
                        // Show error to your customer (e.g., insufficient funds)
                        console.log(result.error.message);
                        } else {
                        // The payment has been processed!
                        if (result.paymentIntent.status === 'succeeded') {
                           var paymentIntent=result.paymentIntent;
                           var token=document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                           var form=document.getElementById('payment-form');
                           var url=form.action;//Ajax
                        //    var redirect='/merci';
                           fetch(

                               url,
                               {
                                headers: {
                                           "Content-Type": "application/json",
                                           "Accept": "application/json,text-plain,*/*",
                                           "X-Requested-With": "XMLHttpRequest",
                                           "X-CSRF-TOKEN":token
                                         },
                                         method: 'post',
                                         body: JSON.stringify({

                                            paymentIntent:paymentIntent
                                         })


                           })
                           .then((data)=>{
                               if (data.status==400) {
                                var redirect='/boutique';
                               } else {
                                var redirect='/merci';
                               }
                            //    console.log(data)
                               window.location.href=redirect;
                           })
                           .catch((error)=>{
                               console.log(error)
                           })
                            // console.log(result.paymentIntent);
                        }
                        }
                    });
                    });
    </script>
@endsection