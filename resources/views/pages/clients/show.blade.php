@extends('layouts.app')
@section('content')


    <div class="col-lg-12">
        <h1 class="page-header">
            Client Details
            <div class="fa-pull-right">
                <a class="btn btn-primary btn-outline" href="{{ route('clients.index') }}">
                    <i class="fa fa-credit-card">

                    </i> Back</a>
            </div>
        </h1>

    </div>
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">



            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>Name</td>
                            <th>{{ $client->name }}</th>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <th>{{ $client->email }}</th>
                        </tr>
                        <tr>
                            <td>Phone Number:</td>
                            <th>{{ $client->phone_number }}</th>
                        </tr>

                        <tr>
                            <td>Country :</td>
                            <th>{{ $client->country }}</th>
                        </tr>

                        <tr>
                            <td>Company Name:</td>
                            <th>{{ $client->company_name }}</th>
                        </tr>


                        <tr>
                            <td>Shipment Address:</td>
                            <th>{{ $client->shipment_address }}</th>
                        </tr>



                    </table>
                </div>


            </div>
        </div>
    </div>

@endsection



