@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <h1 style="text-align: center; padding:40px">Liste des produits</h1>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                      @foreach (Auth()->user()->orders as $order)
                         <div class="row">
                            <div class="col-12 card">
                                <div class="card-header">
                                Commande passée le {{Carbon\Carbon::parse($order->created_at)->format('d/m/Y à H:i')}} d'un montant de <strong>{{getPrice($order->amount)}}</strong>
                                </div>
                                  <div class="card-body">
                                       @foreach (unserialize($order->products) as $product)
                                           <div><strong>Nom du produit</strong> : {{$product[0]}} </div>
                                           <div><strong>Prix</strong> : {{getPrice($product[1])}}</div>
                                           <div><strong>Qantité </strong>: {{$product[2]}}</div>
                                           {{-- <div>Tax:{{$product[3]}}</div> --}}
                                       @endforeach
                                </div>
  
                            </div>
                         </div>
                      @endforeach
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
