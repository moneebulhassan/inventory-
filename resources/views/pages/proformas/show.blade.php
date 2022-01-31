@extends('layouts.app')
@section('content')

    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
{{--                <div class="title mb-30">--}}
{{--                    <h2>{{ __('Proforma') }}</h2>--}}
{{--                </div>--}}
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>

{{--    <div class="card-styles">--}}
{{--        <div class="card-style-3 mb-30">--}}
{{--            <div class="card-content">--}}
{{--                <div class="row">--}}
{{--                    <div class="col">--}}
{{--                        <p>--}}
{{--                            <strong>Date:</strong>--}}
{{--                            {{ $proforma->date }}--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <strong>Due Date:</strong>--}}
{{--                            {{ $proforma->due_date }}--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <strong>Country of Origin:</strong>--}}
{{--                            {{ $proforma->country_of_origin }}--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="col">--}}
{{--                        <p>--}}
{{--                            <strong>Port of loading:</strong>--}}
{{--                            {{ $proforma->port_of_loading }}--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <strong>shipment period:</strong>--}}
{{--                            {{ $proforma->shipment_period }}--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <strong>payment terms:</strong>--}}
{{--                            {{ $proforma->payment_terms }}--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <br>--}}
{{--                <div class="row">--}}
{{--                    <div class="col">--}}
{{--                        <p>--}}
{{--                            <strong>Insurance:</strong>--}}
{{--                            {{ $proforma->insurance }}--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <strong>Port of Discharge:</strong>--}}
{{--                            {{ $proforma->port_of_discharge }}--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <strong>Final Destination:</strong>--}}
{{--                            {{ $proforma->final_destination }}--}}
{{--                        </p>--}}
{{--                    </div>--}}

{{--                    <div class="col">--}}
{{--                        <p>--}}
{{--                            <strong>inspection:</strong>--}}
{{--                            {{ $proforma->inspection }}--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <strong>Currency:</strong>--}}
{{--                            {{ $proforma->currency }}--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <strong>Client Name:</strong>--}}
{{--                            {{ $proforma->client->name }}--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
    <br>
{{--    <div class="card-styles">--}}
{{--        <div class="card-style-3 mb-30">--}}
{{--            <div class="card-content">--}}

{{--                <form method="post" action="{{ route('proformas.store') }}">--}}
{{--                    <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
{{--                    <input type="hidden" name="proforma_id" value="{{ $proforma->id }}">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-5">--}}
{{--                            Product--}}
{{--                        </div>--}}
{{--                        <div class="col-2">--}}
{{--                            Quantity--}}
{{--                        </div>--}}
{{--                        <div class="col-3">--}}
{{--                            Price--}}
{{--                        </div>--}}
{{--                        <div class="col-2">--}}
{{--                            Total--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <select name="product_id" class="form-control">--}}
{{--                                    <option value="">Choose product</option>--}}
{{--                                    @foreach($products as $product)--}}
{{--                                        <option value="{{ $product->id }}">{{ $product->name }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="col-2">--}}
{{--                                Quantity--}}
{{--                            </div>--}}
{{--                            <div class="col-3">--}}
{{--                                Price--}}
{{--                            </div>--}}
{{--                            <div class="col-2">--}}
{{--                                Total--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <br>--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="submit" class="btn btn-info" value="Save">--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

    <div class="container">
        <div class="row">
            <!-- BEGIN INVOICE -->
            <div class="col-12">
                <div class="grid invoice">
                    <div class="grid-body">
                        <div class="invoice-title">
                            <div class="row">
                                <div class="col-12">
                                    <img src="http://vergo-kertas.herokuapp.com/assets/img/logo.png"
{{--                                    <img src="http://vergo-kertas.herokuapp.com/assets/img/logo.png"--}}
                                         alt=""
                                         height="35">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-12" >
                                    <h2>Proforma<br>
                                        <span class="small"> {{ $proforma->id }}AR001</span></h2>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">

                            <div class="col-8 ">
                                <address>
                                    <strong> We bring you happiness</strong><br>
                                    55 LIMAN STREET, HALF DIE, BANJUL, THE GAMBIA<br>

                                    (+220) 3532769 / (+220) 2842769<br>
                                    info@mogjfoods.com <br>
                                    www.mogjfoods.com

                                </address>
                            </div>
                            <div class="col-4 ">
                                <address>
                                    <strong>Date To:</strong>
                                    {{ $proforma->date }}<br>

                                    <strong>Reference:</strong>
                                    {{ $proforma->id }}AR001<br>

                                    <strong>Due Date:</strong>
                                    {{ $proforma->due_date }}<br>

                                </address>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-8">
                                <address>
                                    <strong>Bill To:</strong><br>
                                    {{ $proforma->client->name }}<br>
                                </address>

                            </div>

                            <div class="col-4 ">
                                <address>
                                    <strong>Shipping Address:</strong><br>
                                    {{ $proforma->client->country }}<br>
                                </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>ORDER SUMMARY</h3>
                                <table class="table table-striped">
                                    <thead>
                                    <tr class="line">
                                        <td><strong>Product</strong></td>
                                        <td class="text-center"><strong>Quantity</strong></td>
                                        <td class="text-center"><strong>Price</strong></td>
                                        <td class="text-right"><strong>Total</strong></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                        <td><strong>Template Design</strong><br>A website template is a pre-designed webpage, .</td>
                                        <td class="text-center">15</td>
                                        <td class="text-center">$75</td>
                                        <td class="text-right">$1,125.00</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><strong>Template Development</strong><br>Web development is a broad term for the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network).</td>
                                        <td class="text-center">15</td>
                                        <td class="text-center">$75</td>
                                        <td class="text-right">$1,125.00</td>
                                    </tr>
                                    <tr class="line">
                                        <td>3</td>
                                        <td><strong>Testing</strong><br>Take measures to check the quality, performance, or reliability of (something), especially before putting it into widespread use or practice.</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">$75</td>
                                        <td class="text-right">$150.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="text-right"><strong>Taxes</strong></td>
                                        <td class="text-right"><strong>N/A</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                        </td><td class="text-right"><strong>Total</strong></td>
                                        <td class="text-right"><strong>$2,400.00</strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <h3>Details</h3>
                                <table class="table table-striped">
                                    <thead>
                                    <tr class="line">


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td> * </td>
                                        <td><strong>Country Of Origin</strong> :  {{ $proforma->country_of_origin}}.</td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><strong>Port Of Loading</strong> :  {{ $proforma->port_of_loading}}.</td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><strong>Shipment Period</strong> :  {{ $proforma->shipment_period}}.</td>

                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td><strong>payment terms</strong> :  {{ $proforma->payment_terms}}.</td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><strong>insurance</strong> :  {{ $proforma->insurance}}.</td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><strong>port of discharge</strong> :  {{ $proforma->port_of_discharge}}.</td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><strong>final destination</strong> :  {{ $proforma->final_destination}}.</td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><strong>inspection</strong> :  {{ $proforma->inspection}}.</td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><strong>currency</strong> :  {{ $proforma->currency}}.</td>

                                    </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-right identity">
                                <p>THANK YOU FOR YOUR BUSINESS!<br><strong>Mogj Company</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END INVOICE -->
        </div>
    </div>


@endsection
