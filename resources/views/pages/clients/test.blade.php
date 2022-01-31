@extends('layouts.app')
@section('content')

    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Client') }}</h2>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>


    <div class="card-styles">
        <div class="card-style-3 mb-30">
            <div class="card-content">
                <div class="table-responsive">
                    <table class="table clients-table-card">
                        <thead>
                        <tr>
                            <td>Name</td>
                            <th>{{ $client->name }}</th>

                            <td>Email:</td>
                            <th>{{ $client->email }}</th>


                        </tr>

                        <tr>
                            <td>Phone Number:</td>
                            <th>{{ $client->phone_number }}</th>

                            <td>Country :</td>
                            <th>{{ $client->country }}</th>


                        </tr>
                        <tr>
                            <td>Country :</td>
                            <th>{{ $client->country }}</th>

                            <td>Company Name:</td>
                            <th>{{ $client->company_name }}</th>


                        </tr>

                        <tr>


                            <td>Shipment Address:</td>
                            <th>{{ $client->shipment_address }}</th>
                        </tr>

                        </thead>


                        <tbody>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <br>




@endsection
