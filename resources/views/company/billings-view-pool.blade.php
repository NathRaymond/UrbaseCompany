@extends('company.layout.master')

@section('headlinks')
@endsection

@section('active-menubilling')
active-menu
@endsection

@section('content')
<div class="dashboard-panel">
    <div class="dashboard-panel-nav d-flex justify-content-between align-items-end pt-1">
        <h2 class="fw-bold p-0 m-0">Billing</h2>
        @include('company.layout.active')
    </div>

    <div class="talent-pool-header py-4">
        Talent Pool
    </div>

    <div class="row w-100 talent-pool-parent-container justify-content-around">

        <div class="col-md-8 rounded p-4 talent-pool-parent d-none d-sm-block">
            <div class="talent-pool-no">3 Talent in the pool</div>
            <div class="talent-pool-container d-flex justify-content-between align-items-center py-3">
                <div class="talent-pool-img-container position-relative">
                    <img src="{{ asset('assets/img/talent-pool-img-tag.png') }}" alt=""
                        class="position-absolute talent-pool-img-tag">
                    <img src="{{ asset('assets/img/talent-pool-img.png') }}" alt="" class="">
                </div>
                <div class="talent-pool-details">
                    <p class="talent-pool-name">Joseph</p>
                    <p class="talent-pool-mail">josephmicheal689@gmail.com</p>
                </div>
                <div class="talent-pool-job p-2 px-3"> Product designer</div>
                <div class="talent-pool-month-container d-flex justify-content-around align-items-center">
                    <iconify-icon icon="akar-icons:circle-minus" class=""></iconify-icon>
                    <div class="talent-pool-month"> 1 month</div>
                    <iconify-icon icon="akar-icons:circle-plus" class=""></iconify-icon>

                </div>
                <div class="talent-pool-price"> $8000</div>
                <div class="talent-pool-cancel remove" role="button">
                    <iconify-icon icon="iconoir:cancel" class="fs-4"></iconify-icon>
                </div>
            </div>

            <div class="talent-pool-container d-flex justify-content-between align-items-center py-4">
                <div class="talent-pool-img-container position-relative">
                    <img src="{{ asset('assets/img/talent-pool-img-tag.png') }}" alt=""
                        class="position-absolute talent-pool-img-tag">
                    <img src="{{ asset('assets/img/talent-pool-img.png') }}" alt="" class="">
                </div>
                <div class="talent-pool-details">
                    <p class="talent-pool-name">Joseph</p>
                    <p class="talent-pool-mail">josephmicheal689@gmail.com</p>
                </div>
                <div class="talent-pool-job p-2 px-3"> Product designer</div>
                <div class="talent-pool-month-container d-flex justify-content-around align-items-center">
                    <iconify-icon icon="akar-icons:circle-minus" class=""></iconify-icon>
                    <div class="talent-pool-month"> 1 month</div>
                    <iconify-icon icon="akar-icons:circle-plus" class=""></iconify-icon>

                </div>
                <div class="talent-pool-price"> $8000</div>
                <div class="talent-pool-cancel d-flex align-self-center remove" role="button">
                    <iconify-icon icon="iconoir:cancel" class="fs-4"></iconify-icon>
                </div>
            </div>

            <div class="talent-pool-container d-flex justify-content-between align-items-center py-3">
                <div class="talent-pool-img-container position-relative">
                    <img src="{{ asset('assets/img/talent-pool-img-tag.png') }}" alt=""
                        class="position-absolute talent-pool-img-tag">
                    <img src="{{ asset('assets/img/talent-pool-img.png') }}" alt="" class="">
                </div>
                <div class="talent-pool-details">
                    <p class="talent-pool-name">Joseph</p>
                    <p class="talent-pool-mail">josephmicheal689@gmail.com</p>
                </div>
                <div class="talent-pool-job p-2 px-3"> Product designer</div>
                <div class="talent-pool-month-container d-flex justify-content-around align-items-center">
                    <iconify-icon icon="akar-icons:circle-minus" class=""></iconify-icon>
                    <div class="talent-pool-month"> 1 month</div>
                    <iconify-icon icon="akar-icons:circle-plus" class=""></iconify-icon>

                </div>
                <div class="talent-pool-price"> $8000</div>
                <div class="talent-pool-cancel d-flex align-self-center remove" role="button">
                    <iconify-icon icon="iconoir:cancel" class="fs-4"></iconify-icon>
                </div>
            </div>
            <div class="talent-pool-sub-total-parent d-flex justify-content-between p-2">
                <h3 class="talent-pool-sub-total">Sub Total:</h3>
                <h3 class="talent-pool-sub-total">$15000.00</h3>
            </div>
        </div>

        <div class="talent-pool-parent-mobile p-3 mb-3 d-block d-sm-none">
            <div class="talent-pool-no">3 Talent in the pool</div>
            <div class="py-2 talent-pool-mobile">
                <div class="talent-pool-container-mobile position-relative py-2 d-flex justify-content-between">
                    <div class="talent-pool-img-container position-relative">
                        <img src="{{ asset('assets/img/talent-pool-img-tag.png') }}" alt=""
                            class="position-absolute talent-pool-img-tag-mobile">
                        <img src="{{ asset('assets/img/talent-pool-img.png') }}" alt="" class="talent-pool-img-mobile">
                    </div>
                    <div class="talent-pool-details">
                        <p class="talent-pool-name-mobile">Joseph</p>
                        <p class="talent-pool-mail-mobile">josephmicheal689@gmail.com</p>
                    </div>
                    <div class="talent-pool-job-mobile px-2 rounded d-flex align-items-center">
                        Product designer
                    </div>
                    <div class="talent-pool-cancel remove">
                        <iconify-icon icon="iconoir:cancel" class="fs-4 position-absolute talent-pool-cancel-mobile">
                        </iconify-icon>
                    </div>
                </div>
                <div class="d-flex justify-content-between py-0">
                    <div class="talent-pool-month-container-mobile d-flex justify-content-around align-items-center">
                        <iconify-icon icon="akar-icons:circle-minus" class=""></iconify-icon>
                        <div class="talent-pool-month-mobile"> 1 month</div>
                        <iconify-icon icon="akar-icons:circle-plus" class=""></iconify-icon>

                    </div>
                    <div class="talent-pool-price"> $8000</div>
                </div>
            </div>

            <div class="py-4">
                <div class="talent-pool-container-mobile position-relative py-2 d-flex justify-content-between">
                    <div class="talent-pool-img-container position-relative">
                        <img src="{{ asset('assets/img/talent-pool-img-tag.png') }}" alt=""
                            class="position-absolute talent-pool-img-tag-mobile">
                        <img src="{{ asset('assets/img/talent-pool-img.png') }}" alt="" class="talent-pool-img-mobile">
                    </div>
                    <div class="talent-pool-details">
                        <p class="talent-pool-name-mobile">Joseph</p>
                        <p class="talent-pool-mail-mobile">josephmicheal689@gmail.com</p>
                    </div>
                    <div class="talent-pool-job-mobile px-2 rounded d-flex align-items-center">
                        Product designer
                    </div>
                    <div class="talent-pool-cancel">
                        <iconify-icon icon="iconoir:cancel" class="fs-4 position-absolute talent-pool-cancel-mobile">
                        </iconify-icon>
                    </div>
                </div>
                <div class="d-flex justify-content-between py-0">
                    <div class="talent-pool-month-container-mobile d-flex justify-content-around align-items-center">
                        <iconify-icon icon="akar-icons:circle-minus" class=""></iconify-icon>
                        <div class="talent-pool-month-mobile"> 1 month</div>
                        <iconify-icon icon="akar-icons:circle-plus" class=""></iconify-icon>

                    </div>
                    <div class="talent-pool-price"> $8000</div>
                </div>
            </div>

            <div class="py-4">
                <div class="talent-pool-container-mobile position-relative py-2 d-flex justify-content-between">
                    <div class="talent-pool-img-container position-relative">
                        <img src="{{ asset('assets/img/talent-pool-img-tag.png') }}" alt=""
                            class="position-absolute talent-pool-img-tag-mobile">
                        <img src="{{ asset('assets/img/talent-pool-img.png') }}" alt="" class="talent-pool-img-mobile">
                    </div>
                    <div class="talent-pool-details">
                        <p class="talent-pool-name-mobile">Joseph</p>
                        <p class="talent-pool-mail-mobile">josephmicheal689@gmail.com</p>
                    </div>
                    <div class="talent-pool-job-mobile px-2 rounded d-flex align-items-center">
                        Product designer
                    </div>
                    <div class="talent-pool-cancel">
                        <iconify-icon icon="iconoir:cancel" class="fs-4 position-absolute talent-pool-cancel-mobile">
                        </iconify-icon>
                    </div>
                </div>
                <div class="d-flex justify-content-between py-0">
                    <div class="talent-pool-month-container-mobile d-flex justify-content-around align-items-center">
                        <iconify-icon icon="akar-icons:circle-minus" class=""></iconify-icon>
                        <div class="talent-pool-month-mobile"> 1 month</div>
                        <iconify-icon icon="akar-icons:circle-plus" class=""></iconify-icon>

                    </div>
                    <div class="talent-pool-price"> $8000</div>
                </div>
            </div>

            <div class="talent-pool-sub-total-parent d-flex justify-content-between p-2">
                <h3 class="talent-pool-sub-total">Sub Total:</h3>
                <h3 class="talent-pool-sub-total">$15000.00</h3>
            </div>
        </div>
        <div class="col-md-3 rounded p-3 talent-payment-parent">
            <div class="talent-pool-no">Choose Payment</div>
            <div class="talent-pool-payment-gateway p-2 my-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        <img src="{{ asset('assets/img/perfect-money-billing.png') }}" alt="" class="">
                        Pay with Perfect Money
                    </label>
                </div>
            </div>

            <div class="talent-pool-payment-gateway p-2 my-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        <img src="{{ asset('assets/img/stripe-billing.png') }}" alt="" class="">
                        Pay with Stripe
                    </label>
                </div>
            </div>
            <div class="billings-payment my-2 mt-5">
                <a href="" class="row w-100 d-flex justify-content-center text-decoration-none p-2 text-white">
                    Proceed to Payment
                </a>
            </div>
        </div>

    </div>

    @include('company.layout.include.footer')
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="{{ asset('assets/js/remove-billings-pool.js') }}"></script>
@endsection