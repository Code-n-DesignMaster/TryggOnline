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
                        {{-- <h3 class="multisteps-form__title">Your User Info</h3> --}}
                        <div class="multisteps-form__content">
                                @php echo do_shortcode('[products]'); @endphp
                          <div class="button-row d-flex mt-4">
                            <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                          </div>
                        </div>
                      </div>
                      <!--single form panel-->
                      <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        {{-- <h3 class="multisteps-form__title">Your Order Info</h3> --}}
                        <div class="multisteps-form__content">
                          <div class="row">
                            <div class="col-12 col-md-6 mt-4">
                              <div class="card shadow-sm">
                                <div class="card-body">
                                  <h5 class="card-title">Item Title</h5>
                                  <p class="card-text">Small and nice item description</p><a class="btn btn-primary" href="#" title="Item Link">Item Link</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-12 col-md-6 mt-4">
                              <div class="card shadow-sm">
                                <div class="card-body">
                                  <h5 class="card-title">Item Title</h5>
                                  <p class="card-text">Small and nice item description</p><a class="btn btn-primary" href="#" title="Item Link">Item Link</a>
                                </div>
                              </div>
                            </div>
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