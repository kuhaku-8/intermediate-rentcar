@extends('layouts.app')

@section('page')
    Client
@endsection

@section('header')
    <li class="breadcrumb-item active">Client</li>
@endsection

@section('content')
    <h4>Client</h4>
    <div class="card card-transparent">
        <div class="card-header ">
            <div class="pull-left">
                <div class="col-xs-12">
                    <input type="text" id="search-table" class="form-control pull-left" placeholder="Search">
                </div>
            </div>
            <div class="pull-right">
                <a href="{{route('client.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="card-body">
            <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                <thead>
                    <tr>
                        <th style="width:5%">No</th>
                        <th style="width:5%">NIK</th>
                        <th>Name</th>
                        <th style="width:15%">DOB</th>
                        <th style="width:10%">Phone</th>
                        <th style="width:20%">Address</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <td class="v-align-middle semi-bold">
                                <p>{{$loop->iteration}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$client->nik}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$client->name}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$client->dob}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$client->phone}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$client->address}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$client->gender}}</p>
                            </td>
                            <td class="v-align-middle" align="center">
                                <p><a href="#" class="btn">Edit</a> <a href="#" class="btn">Hapus</a></p>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection