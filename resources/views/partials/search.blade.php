<form action="{{route('products.search')}}" class="d-flex mr-3">
    <div class="form-group mb-0 mr-1">
        <input type="text" name="q" class="form-control" value=" {{request()->q ?? ''}} " style="height:35px">


    </div>
    <button type="submit" style="background-color: #9f78ff; border:0"><i class="fa fa-search" aria-hidden="true"></i></button>

</form>