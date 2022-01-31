@extends('layouts.app')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <form method="post" action="{{ route('products.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <br>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-style-1">
                                    <label for="product_name">{{ __('Product name') }}</label>
                                    <input @error('product_name') class="form-control is-invalid" @enderror type="text" name="product_name" id="product_name" placeholder="{{ __('product Name') }}" required autocomplete="product_name" autofocus>
                                    @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="col-6">
                            <div class="input-style-1">
                                <label for="price">{{ __('Price') }}</label>
                                <input @error('price') class="form-control is-invalid" @enderror type="text" name="price" id="price" placeholder="{{ __('Price') }}" required autocomplete="price" autofocus>
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="description">{{ __('Description') }}</label>
                            <input @error('description') class="form-control is-invalid" @enderror type="text" name="description" id="description" placeholder="{{ __('Description') }}" required autocomplete="description" autofocus>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>




                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="currency">{{ __('Currency') }}</label>
                            <select name="currency" class="form-control">
                                <option selected>Choose Currency</option>
                                <option>Dollar</option>
                                <option>Euro</option>
                                <option>CFA</option>
                            </select>


                        </div>
                    </div>


{{--                    <div class="row-cols-xl-auto">--}}
{{--                    <div >--}}
{{--                        <label for="inputState">Currency</label>--}}
{{--                        <select name="currency" class="form-control">--}}
{{--                            <option selected>Choose Currency</option>--}}
{{--                            <option>Dollar</option>--}}
{{--                            <option>Euro</option>--}}
{{--                            <option>CFA</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    </div>--}}

                    <br>
                </div>



                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
    </section>

@endsection
