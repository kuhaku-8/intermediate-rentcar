@extends('layouts.app')

@section('page')
    Create Car
@endsection

@push('header')
    <link href="{{asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
@endpush

@section('header')
    <li class="breadcrumb-item">Asset</li>
    <li class="breadcrumb-item">Car</li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <h5>Create Car</h5>
            <div id="card-advance" class="card card-default">
                <div class="card-body">
                    <form action="{{route('car.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-default required">
                                    <label>Name</label>
                                    <span class="help"></span>
                                    <input type="text" name="name" class="form-control" placeholder="Put Name!" value="{{old('name')}}" required>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Year</label>
                                    <span class="help"></span>
                                    <input type="text" name="year" class="form-control year" placeholder="Put Year!" value="{{old('year')}}">
                                </div>
                                <div class="form-group form-group-default form-group-default-select2 required">
                                    <label>Type</label>
                                    <span class="help"></span>
                                    <select name="type" class="full-width" data-placeholder="Select Type!" data-init-plugin="select2" required>
                                        <option value=""></option>
                                        <option value="MANUAL" @if(old('type')=="MANUAL") selected @endif>Manual</option>
                                        <option value="MATIC" @if(old('type')=="MATIC") selected @endif>Matic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-default required">
                                    <label>License</label>
                                    <span class="help"></span>
                                    <input type="text" name="license_plat" class="form-control" placeholder="Put License!" maxlength="12" value="{{old('license_plat')}}" required>
                                </div>
                                <div class="form-group form-group-default required">
                                    <label>Price</label>
                                    <span class="help"></span>
                                    <input type="number" name="price" class="form-control gone" placeholder="Put Price!" value="{{old('price')}}" required>
                                </div>            
                                <div class="form-group form-group-default form-group-default-select2 required">
                                    <label>Brand</label>
                                    <span class="help"></span>
                                    <select name="brand_id" class="full-width" data-placeholder="Select Brand!" data-init-plugin="select2" required>
                                        <option value=""></option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}" @if(old('brand_id')=="$brand->id") selected @endif>{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success btn-con">Save</button>
                        <a href="{{route('car.index')}}" class="btn btn-default btn-con">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('footer')
    <script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <script>
        $('.year').datepicker({
            autoclose: true,
            format: 'yyyy',
            orientation: 'top auto',
            minViewMode: 2,
        });
    </script>
@endpush