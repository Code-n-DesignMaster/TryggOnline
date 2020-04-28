@if(!is_user_logged_in())
        @include('woocommerce.partials.form-login.content')
@else
<div class="products-wrapper">
        <div class="container">
                <div class="row justify-content-around">
@foreach ($get_subscr_products as $productItem)
@php $currentProduct = wc_get_product( $productItem->ID );  @endphp
                <div class="card col-5 position-relative" data-subscription-id="{{$productItem->ID}}">
        <span class="price-budge position-absolute">
                {{ get_woocommerce_currency() . $currentProduct->get_price() }}
        </span>
        <div class="row">
                <img class="card-img-top" 
                src="{{ !empty(wp_get_attachment_url( get_post_thumbnail_id( $productItem->ID ) )) ? wp_get_attachment_url( get_post_thumbnail_id( $productItem->ID ) ) : ASSETS_IMAGES . '250x200.png' }}" 
                alt="Subscription">
                <div class="card-body">
                        <h5 class="card-title">{{get_the_title($productItem->ID)}}</h5>
                <p class="card-text">{{$currentProduct->get_short_description()}}</p>
                        <div class="select-subscription__wrapper">
                        <label for="ss-button-{{$productItem->ID}}" class="select-subscription__button btn btn-primary">
                                        <span>Choose</span>
                                <input type="radio" name="ss-button" id="ss-button-{{$productItem->ID}}">
                                </label>
                        </div>
                {{-- <a href="?add-to-cart={{$productItem->ID}}" data-quantity="1" class="btn btn-primary button product_type_subscription add_to_cart_button ajax_add_to_cart" data-product_id="12" data-product_sku="" aria-label="Add “TestProduct” to your cart" rel="nofollow">Sign up now</a> --}}
                </div>
        </div>
      </div>
@endforeach
</div>
</div>
</div>
@endif