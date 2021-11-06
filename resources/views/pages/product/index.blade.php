@extends('home')
@section('product-list')
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 14rem;">
                    <img height="200px" class="card-img-top" src="{{asset('storage/'.$product->image)}}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-text text-center">{{$product->name}}</h3>
                        <h5 class="card-text mt-6"><span >Price: </span>{{$product->price}}</h5>
                        <p class="card-text">{{substr($product->description,0,30) . '...' }}</p>
                        <button type="submit">Thêm Vào Giỏ Hàng</button>                    
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

