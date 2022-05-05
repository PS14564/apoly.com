@extends('frontend.layouts.master')

@section('title','Checkout page')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0)">VnPay Payment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <div class="section">
        <div class="container">
            <div class="header clearfix">
                <h3 class="text-muted mb-5">Payment</h3>
            </div>
            @if(!empty($order))
            <form action="{{ route('payment.create') }}" id="create_form" method="post">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Order Type<span>*</span></label>
                            <select name="order_type" id="order_type" class="form-control w-100">
                                <option value="billpayment">Bill Payment</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Order Number<span>*</span></label>
                            <input disabled class="form-control p-2" id="order_id" name="order_id" type="text" value="{{ $order->order_number }}" required/>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="amount">Amount<span>*</span></label>
                            <input disabled class="form-control p-2" id="amount" name="amount" type="number" value="{{number_format($order->total_amount,2)}}" required/>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="order_desc">Order Description</label>
                            <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2"></textarea>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="bank_code">Banks</label>
                            <select name="bank_code" id="bank_code" class="form-control w-100">
                                <option value="">Not selected</option>
                                <option value="NCB"> Ngan hang NCB</option>
                                <option value="AGRIBANK"> Ngan hang Agribank</option>
                                <option value="SCB"> Ngan hang SCB</option>
                                <option value="SACOMBANK">Ngan hang SacomBank</option>
                                <option value="EXIMBANK"> Ngan hang EximBank</option>
                                <option value="MSBANK"> Ngan hang MSBANK</option>
                                <option value="NAMABANK"> Ngan hang NamABank</option>
                                <option value="VNMART"> Vi dien tu VnMart</option>
                                <option value="VIETINBANK">Ngan hang Vietinbank</option>
                                <option value="VIETCOMBANK"> Ngan hang VCB</option>
                                <option value="HDBANK">Ngan hang HDBank</option>
                                <option value="DONGABANK"> Ngan hang Dong A</option>
                                <option value="TPBANK"> Ngân hàng TPBank</option>
                                <option value="OJB"> Ngân hàng OceanBank</option>
                                <option value="BIDV"> Ngân hàng BIDV</option>
                                <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                                <option value="VPBANK"> Ngan hang VPBank</option>
                                <option value="MBBANK"> Ngan hang MBBank</option>
                                <option value="ACB"> Ngan hang ACB</option>
                                <option value="OCB"> Ngan hang OCB</option>
                                <option value="IVB"> Ngan hang IVB</option>
                                <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" style="border-radius: 3px;" class="btn btn-primary" id="btnPopup">Payment Post</button>
                        <button type="submit" style="border-radius: 3px;" name="redirect" id="redirect" class="btn btn-default">Payment Redirect</button>
                    </div>
                </div>
            </form>
            @else
                <div>The order has expired!</div>
            @endif
        </div>
    </div>
    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        <div class="inner">
                            <h4>Newsletter</h4>
                            <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                <button class="btn">Subscribe</button>
                            </form>
                        </div>
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush
