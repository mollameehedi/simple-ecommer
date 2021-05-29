<ul class="row">
    @foreach ($products as $product)


    <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
        <div class="product-wrap">
            <div class="product-img">
                <img src="{{ asset('frontend_asset') }}/images/product/{{ $product->product_thambnaill_photo }}" alt="">
                <div class="product-icon flex-style">

                </div>
            </div>
            <div class="product-content">
                <h3><a href="{{ route('product.details',$product->slug_link) }}">{{ $product->product_name }}</a></h3>
                <p class="pull-left">${{ $product->product_price }}

                </p>
                <ul class="pull-right d-flex">
                    @if (average_stars($product->id) == 0)
                    no review yet
                @endif
                @for ($i = 1; $i <= average_stars($product->id); $i++)
                <li><i class="fa fa-star"></i></li>
                @endfor
                </ul>
            </div>
        </div>
    </li>
    @endforeach
    @foreach ($products as $product)
    <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
        <div class="product-wrap">
            <div class="product-img">
                <img src="{{ asset('frontend_asset') }}/images/product/{{ $product->product_thambnaill_photo }}" alt="">
                <div class="product-icon flex-style">

                </div>
            </div>
            <div class="product-content">
                <h3><a href="{{ route('product.details',$product->slug_link) }}">{{ $product->product_name }}</a></h3>
                <p class="pull-left">${{ $product->product_price }}
                </p>
                <ul class="pull-right d-flex">
                    @if (average_stars($product->id) == 0)
                    no review yet
                @endif
                @for ($i = 1; $i <= average_stars($product->id); $i++)
                <li><i class="fa fa-star"></i></li>
                @endfor
                </ul>
            </div>
        </div>
    </li>
    @endforeach
</ul>
