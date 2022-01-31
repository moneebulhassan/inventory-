@extends('layouts.app')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <form method="post" action="{{ route('contracts.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br>
                <div class="form-group">

                    <div class="row">

                        <div class="col-4">
                            <div class="input-style-1">
                                <label for="date">{{ __('Date') }}</label>
                                <input @error('date') class="form-control is-invalid" @enderror type="date" name="date" id="date" placeholder="{{ __('Date') }}" required autocomplete="date" autofocus>
                                @error('date')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                            <div class="col-4">
                                <label class="">Client Name</label>
                                <div class="">
                                    <select name="client_id" class="form-control">
                                        <option value="">Choose client</option>
                                        @foreach($clients as $client)
                                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div>


                        <div class="col-4">
                            <label class="">Invoice Number</label>
                            <div class="">
                                <select name="invoice_id" class="form-control">
                                    <option value="">Choose Invoice ID</option>
                                    @foreach($invoice as $invoice)
                                        <option value="{{ $invoice->id }}">{{ $invoice->bl_num }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="clearfix"></div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="input-style-1">
                                <label for="governing_law">{{ __('Governing Laws') }}</label>
                                <input @error('governing_law') class="form-control is-invalid" @enderror type="text" name="governing_law" id="governing_law" placeholder="{{ __('Governing Laws') }}" required autocomplete="governing_law" autofocus>
                                @error('governing_law')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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
