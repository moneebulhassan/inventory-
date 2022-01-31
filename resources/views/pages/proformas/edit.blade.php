@extends('layouts.app')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <form method="post" action="{{ route('proformas.update',$proforma->id) }}">
                @method('PUT')
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">

                    <div class="col-12">

                        <div class="input-style-1">
                            <label for="date">{{ __('Date') }}</label>
                            <input value="{{ $proforma->date }}" @error('date') class="form-control is-invalid" @enderror type="date" name="date" id="date" placeholder="{{ __('Date') }}" required autocomplete="date" autofocus>
                            @error('date')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>



                    </div>

                    <div class="col-12">

                    </div>

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="due_date">{{ __('Due Date') }}</label>
                            <input value="{{ $proforma->due_date }}" @error('due_date') class="form-control is-invalid" @enderror type="date" name="due_date" id="due_date" placeholder="{{ __('Due Date') }}" required autocomplete="due_date" autofocus>
                            @error('due_date')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="country_of_origin">{{ __('Country of Origin') }}</label>
                            <input value="{{ $proforma->country_of_origin }}" @error('country_of_origin') class="form-control is-invalid" @enderror type="text" name="country_of_origin" id="country_of_origin" placeholder="{{ __('country of origin') }}" required autocomplete="country_of_origin" autofocus>
                            @error('country_of_origin')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="port_of_loading">{{ __('Port of Loading') }}</label>
                            <input value="{{ $proforma->port_of_loading }}" @error('port_of_loading') class="form-control is-invalid" @enderror type="text" name="port_of_loading" id="port_of_loading" placeholder="{{ __('port of loading') }}" required autocomplete="port_of_loading" autofocus>
                            @error('port_of_loading')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="shipment_period">{{ __('Shipment Period') }}</label>
                            <input value="{{ $proforma->shipment_period }}" @error('shipment_period') class="form-control is-invalid" @enderror type="text" name="shipment_period" id="shipment_period" placeholder="{{ __('Shipment Period') }}" required autocomplete="shipment_period" autofocus>
                            @error('shipment_period')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="payment_terms">{{ __('Payment Terms') }}</label>
                            <input value="{{ $proforma->payment_terms }}" @error('payment_terms') class="form-control is-invalid" @enderror type="text" name="payment_terms" id="payment_terms" placeholder="{{ __('Payment Terms') }}" required autocomplete="payment_terms" autofocus>
                            @error('payment_terms')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="insurance">{{ __('Insurance') }}</label>
                            <input value="{{ $proforma->insurance }}" @error('insurance') class="form-control is-invalid" @enderror type="text" name="insurance" id="insurance" placeholder="{{ __('Insurance') }}" required autocomplete="insurance" autofocus>
                            @error('insurance')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-style-1">
                            <label  for="port_of_discharge">{{ __('Port of Discharge') }}</label>
                            <input value="{{ $proforma->port_of_discharge }}" @error('port_of_discharge') class="form-control is-invalid" @enderror type="text" name="port_of_discharge" id="port_of_discharge" placeholder="{{ __('Port of Discharge') }}" required autocomplete="port_of_discharge" autofocus>
                            @error('port_of_discharge')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="final_destination">{{ __('Final Destination') }}</label>
                            <input value="{{ $proforma->final_destination }}" @error('final_destination') class="form-control is-invalid" @enderror type="text" name="final_destination" id="final_destination" placeholder="{{ __('Final Destination') }}" required autocomplete="final_destination" autofocus>
                            @error('final_destination')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="inspection">{{ __('Inspection') }}</label>
                            <input value="{{ $proforma->inspection }}" @error('inspection') class="form-control is-invalid" @enderror type="text" name="inspection" id="inspection" placeholder="{{ __('inspection') }}" required autocomplete="inspection" autofocus>
                            @error('inspection')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="currency">{{ __('Currency') }}</label>
                            <input value="{{ $proforma->currency }}" @error('currency') class="form-control is-invalid" @enderror type="text" name="currency" id="currency" placeholder="{{ __('currency') }}" required autocomplete="currency" autofocus>
                            @error('currency')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-3">Client</label>
                            <div class="col-md-6">
                                <select name="client_id" class="form-control">
                                    <option value="">Choose client</option>
                                    @foreach($clients as $client)
                                        <option @if($client->id === $proforma->client_id) selected @endif value="{{ $client->id }}">{{ $client->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>






                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
    </section>

@endsection
