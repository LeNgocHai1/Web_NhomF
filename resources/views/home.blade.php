@extends('pages.customer.main')
@section('content')
</div>
<div class="row mt-5 no-gutters">
    <div class="col-md-2">
        <h4 style='color:blue'>CATEGOGY</h4>
        <div class="col-12" style='display: inline-grid;'>
            @foreach($listCat as $category)

                <a href="{{route('home.category.show',
                    ['category_name'=>\Illuminate\Support\Str::slug($category->category_name,'-'),
                    'id'=>$category->id])}}"> {{data_get($category,'category_name')}}
                </a>

            @endforeach

        </div>
    </div>
    <div class="col-md-10">
        @yield('product-list')
    </div>

</div>
</div>

@endsection

