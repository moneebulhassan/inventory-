@extends('layouts.app')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <form method="post" action="{{ route('clients.update',$client->id) }}">
                @method('PUT')
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">

                    <div class="row">

                    <div class="col-6">
                        <div class="input-style-1">
                            <label for="name">{{ __('Client name') }}</label>
                            <input value="{{ $client->name }}" @error('name') class="form-control is-invalid" @enderror type="text" name="name" id="name" placeholder="{{ __('Client Name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                        <div class="col-6">
                            <div class="input-style-1">
                                <label for="email">{{ __('Client email') }}</label>
                                <input value="{{ $client->email }}" @error('email') class="form-control is-invalid" @enderror type="email" name="email" id="email" placeholder="{{ __('Client email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                @enderror
                            </div>
                        </div>

                        </div>


                    <div class="row">
                        <div class="col-6">
                            <div class="input-style-1">
                                <label for="phone_number">{{ __('Client phone_number') }}</label>
                                <input value="{{ $client->phone_number }}" @error('phone_number') class="form-control is-invalid" @enderror type="number" name="phone_number" id="phone_number" placeholder="{{ __('Client phone number') }}" required autocomplete="phone_number" autofocus>
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="input-style-1">
                                <label for="country">{{ __('Client country') }}</label>
                                <input value="{{ $client->country }}" @error('country') class="form-control is-invalid" @enderror type="text" name="country" id="country" placeholder="{{ __('Client country') }}" required autocomplete="country" autofocus>
                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                @enderror
                            </div>
                        </div>



                    </div>
                    <div class="row">

                        <div class="col-6">
                            <div class="input-style-1">
                                <label for="company_name">{{ __('Client company_name') }}</label>
                                <input value="{{ $client->company_name }}" @error('company_name') class="form-control is-invalid" @enderror type="text" name="company_name" id="company_name" placeholder="{{ __('Client company name') }}" required autocomplete="company_name" autofocus>
                                @error('company_name')
                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                @enderror
                            </div>
                        </div>

                    <div class="col-6">
                        <div class="input-style-1">
                            <label for="shipment_address">{{ __('Client shipment_address') }}</label>
                            <input value="{{ $client->shipment_address }}" @error('shipment_address') class="form-control is-invalid" @enderror type="text" name="shipment_address" id="shipment_address" placeholder="{{ __('Client company name') }}" required autocomplete="shipment_address" autofocus>
                            @error('shipment_address')
                            <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                            @enderror
                        </div>
                    </div>
                    </div>


                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Save" >
                </div>
            </form>
        </div>
    </section>

@endsection
