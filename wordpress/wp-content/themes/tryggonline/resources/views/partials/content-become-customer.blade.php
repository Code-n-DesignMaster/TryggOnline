@if(!is_user_logged_in())
        @include('woocommerce.partials.form-login.content')
@else
{{-- <a href="?add-to-cart=12" data-quantity="1" class="button product_type_subscription add_to_cart_button ajax_add_to_cart" data-product_id="12" data-product_sku="" aria-label="Add “TestProduct” to your cart" rel="nofollow">Sign up now</a> --}}
        <div class="multisteps-form mt-5">
                <!--progress bar-->
                <div class="row">
                  <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                    <div class="multisteps-form__progress">
                      <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Choose Subscription</button>
                      <button class="multisteps-form__progress-btn" type="button" title="Address">Pay</button>
                      <button class="multisteps-form__progress-btn" type="button" title="Comments">Confirm</button>
                    </div>
                  </div>
                </div>
                <!--form panels-->
                <div class="row">
                  <div class="col-12 col-lg-8 m-auto">
                    <form class="multisteps-form__form">
                      <!--single form panel-->
                      <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                        <div class="multisteps-form__content">
                          @include('woocommerce.partials.archive-product.content')
                          <div class="button-row d-flex mt-4">
                            <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                          </div>
                        </div>
                      </div>
                      <!--single form panel-->
                      <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <div class="multisteps-form__content">
                          <div class="row">
                            @php echo do_shortcode('[woocommerce_checkout]'); @endphp
                            {{-- @php echo  @endphp --}}
                          </div>
                          <div class="row">
                            <div class="button-row d-flex mt-4 col-12">
                              <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                              <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--single form panel-->
                      <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        {{-- <h3 class="multisteps-form__title">Confirm</h3> --}}
                        <div class="multisteps-form__content text-center">
                          <h2>Have a Good Day :)</h2>
                          <div class="button-row d-flex mt-4">
                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                            <button class="btn btn-success ml-auto" type="button" title="Send">Send</button>
                          </div>
                        </div>
                      </div>
                    </form>
                   </div>
                </div>
              </div>
              {{-- <pre>
              {{print_r($choose_subscription)}}
            </pre> --}}
@endif