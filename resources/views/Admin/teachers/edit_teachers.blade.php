@extends('Admin.base')

@section('Content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Edit Teachers</h4>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            @if(session('message'))
                                <div class="alert alert-success">
                                    <ul>
                                        <li>{!! session('message') !!}</li>
                                    </ul>
                                </div>
                            @endif


                            <form action="/admin/teachers/update_teachers" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">Name</label>
                                    <input type="hidden" class="form-control input-default " name="id" value="{{$Teachers->id}}">
                                        <input type="text" class="form-control input-default " name="name" value="{{$Teachers->name}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control input-default " name="email" value="{{$Teachers->email}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">Mobile</label>
                                        <input type="text" class="form-control input-default " name="mobile" value="{{$Teachers->mobile}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Password</label>
                                        <input type="text" class="form-control input-default " name="password" value="{{$Teachers->password}}" disabled>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection