@extends('layouts.app')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <form method="post" action="{{ route('products.update',$product->id) }}">
                @method('PUT')
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">


                <div class="row">
                    <div class="col-6">
                        <div class="input-style-1">
                            <label for="product_name">{{ __(' product_name') }}</label>
                            <input value="{{ $product->product_name }}" @error('product_name') class="form-control is-invalid" @enderror type="text" name="product_name" id="product_name" placeholder="{{ __(' product_name') }}" required autocomplete="product_name" autofocus>
                            @error('product_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="input-style-1">
                            <label for="description">{{ __(' description') }}</label>
                            <input value="{{ $product->description }}" @error('description') class="form-control is-invalid" @enderror type="text" name="description" id="description" placeholder="{{ __(' description') }}" required autocomplete="description" autofocus>
                            @error('description')
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
                                <label for="price">{{ __(' price') }}</label>
                                <input value="{{ $product->price }}" @error('price') class="form-control is-invalid" @enderror type="text" name="price" id="price" placeholder="{{ __(' price') }}" required autocomplete="price" autofocus>
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <label class="col-md-3">Currency</label>
                            <select name="currency" class="form-control">
                                <option selected>Choose...</option>
                                <option {{$product->currency == 'Dollar' ? 'selected' : ''}} value="Dollar">Dollar</option>
                                <option {{$product->currency == 'Euro' ? 'selected' : ''}} value="Euro">Euro</option>
                                <option {{$product->currency == 'CFA' ? 'selected' : ''}} value="CFA">CFA</option>
                            </select>
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
