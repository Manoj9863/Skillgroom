@extends('Admin.base')

@section('Content')

<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Booking Inquiries</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-sm" id="Classes">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Class Name</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact Number</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>City</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($Classes))
                                    @foreach($Classes as $Class)
                                    <tr>
                                    <th>{{$Class->id}}</th>
                                    <th>{{$Class->class_name}}</th>
                                        <td>{{$Class->first_name}} {{$Class->last_name}}</td>
                                        <td>{{$Class->email}}</td>
                                        <td><span class="badge badge-primary">{{$Class->contact}}</span>
                                        </td>
                                        <td>{{$Class->country}}</td>
                                        <td>{{$Class->state}}</td>
                                        <td>{{$Class->city}}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td>No Data Found</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>

                            {{ $Classes->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection