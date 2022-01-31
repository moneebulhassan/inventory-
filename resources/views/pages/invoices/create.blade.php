@extends('layouts.app')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <form method="post" action="{{ route('invoices.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <br>
                    <div class="row">

                        <div class="col-4">
                            <div class="input-style-1">
                                <label for="bl_num">{{ __('BL Number') }}</label>
                                <input @error('bl_num') class="form-control is-invalid" @enderror type="number" name="bl_num" id="bl_num" placeholder="{{ __('BL Number') }}" required autocomplete="bl_num" autofocus>
                                @error('bl_num')
                                <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="input-style-1">
                                <label for="vessel">{{ __('Vessel') }}</label>
                                <input @error('vessel') class="form-control is-invalid" @enderror type="text" name="vessel" id="vessel" placeholder="{{ __('Vessel') }}" required autocomplete="vessel" autofocus>
                                @error('vessel')
                                <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="input-style-1">
                                <label for="no_of_container">{{ __('No of container') }}</label>
                                <input @error('no_of_container') class="form-control is-invalid" @enderror type="number" name="no_of_container" id="no_of_container" placeholder="{{ __('number of container') }}" required autocomplete="no_of_container" autofocus>
                                @error('no_of_container')
                                <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-4">
                            <div class="input-style-1">
                                <label for="port_of_loading">{{ __('port of loading') }}</label>
                                <input @error('port_of_loading') class="form-control is-invalid" @enderror type="text" name="port_of_loading" id="port_of_loading" placeholder="{{ __('port of loading') }}" required autocomplete="port_of_loading" autofocus>
                                @error('port_of_loading')
                                <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="input-style-1">
                                <label for="port_of_discharge">{{ __('port of discharge') }}</label>
                                <input @error('port_of_discharge') class="form-control is-invalid" @enderror type="text" name="port_of_discharge" id="port_of_discharge" placeholder="{{ __('port of discharge') }}" required autocomplete="port_of_discharge" autofocus>
                                @error('port_of_discharge')
                                <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="input-style-1">
                                <label for="final_destination">{{ __('Final Destination') }}</label>
                                <input @error('final_destination') class="form-control is-invalid" @enderror type="text" name="final_destination" id="final_destination" placeholder="{{ __('Final Destination') }}" required autocomplete="final_destination" autofocus>
                                @error('final_destination')
                                <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="input-style-1">
                                <label for="payment_terms">{{ __('Payment Terms') }}</label>
                                <input @error('payment_terms') class="form-control is-invalid" @enderror type="text" name="payment_terms" id="payment_terms" placeholder="{{ __('Payment Terms') }}" required autocomplete="payment_terms" autofocus>
                                @error('payment_terms')
                                <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-3">Proforma</label>
                            <div class="col-md-6">
                                <select name="proforma_id" class="form-control">
                                    <option value="">Choose Proforma</option>
                                    @foreach( $proformas as $proforma)
                                        <option value="{{ $proforma->id }}"></option>
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
