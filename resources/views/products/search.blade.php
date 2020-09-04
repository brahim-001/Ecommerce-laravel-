@extends('layouts.master')


@section('content1')

{{-- @foreach ($products as $product)
<div class="col-md-6">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-info">
          @foreach ($product->categories as $category)
              {{$category->name}}{{ $loop->last ? '' : ', '}}
          @endforeach
        </strong>
        <h5 class="mb-0">{{$product->title}}</h5>
        <p class="mb-auto"> {{$product->subtitle}} </p>
        <strong class="display-4 mb-4 text-secondary"> {{$product->getPrice()}} </strong>
      <a href="{{route('products.show',$product->slug)}}" class="stretched-link btn btn-primary"><i class="fa fa-location-arrow" aria-hidden="true"></i> Consulter le produit</a>
      </div>
      <div class="col-auto d-none d-lg-block">
     
        <img src=" {{asset('storage/'.$product->image)}} " >
      </div>
    </div>
  </div>
@endforeach
{{$products->appends(request()->input())->links()}} --}}


<div class="popular-product pt-50">
  <div class="container-fluid">
      <div class="row">
        @foreach ($products as $product)

          <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="single-product mb-50">
                  <div class="location-img" style="height: 500px">
                      <img src="{{asset('storage/'.$product->image)}}" alt="" style="height: 100%">
                  </div>
                  <div class="location-details">
                      <p>{{$product->title}} </p>
                       <div class=" pb-3">
                          <strong class="display-4 text-white"> {{$product->getPrice()}} </strong>

                       </div>
                      <a href="{{route('products.show',$product->slug)}}" class="btn">Consulter le produit</a>
                  </div>
              </div>
          </div>
          @endforeach

      </div>
  </div>
</div>

{{$products->appends(request()->input())->links()}}
@endsection