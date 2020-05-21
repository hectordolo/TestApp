@extends('layouts.app')

@section('page-title')
    Client List
@endsection

@section('page-content')
    <h1 class="mt-4">Client List</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Client</li>
        <li class="breadcrumb-item active">Client List</li>
    </ol>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>UUID</th>
                            <th>Name</th>
                            <th>Tin</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
       
                        @if(isset($data))
                            @foreach($data as $key=>$value)
                                <tr>
                                    <td>{{isset($value['uuid'])?$value['uuid']:''}}</td>
                                    <td>{{isset($value['name'])?$value['name']:''}}</td>
                                    <td>{{isset($value['tin'])?$value['tin']:''}}</td>
                                    <td>{{isset($value['email'])?$value['email']:''}}</td>
                                    <td>{{isset($value['phone_no'])?$value['phone_no']:''}}</td>
                                    <td>{{isset($value['address'])?$value['address']:''}}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
