@extends('Admin.base')

@section('Content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Add Courses</h4>
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


                            <form action="/admin/courses/store_courses" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">Course Name</label>
                                        <input type="hidden" class="form-control input-default " name="id" value="">
                                        <input type="text" class="form-control input-default " name="course_name" value="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Teacher Name</label>
                                        <br>
                                        {{-- <input type="text" class="form-control input-default " name="email" value=""> --}}
                                        <select name="teacher_name" id="">
                                            <option selected disabled>Select Teacher Name</option>
                                            @foreach($Teachers as $Teacher)
                                                <option value="{{$Teacher->id}}">{{$Teacher->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">Type</label>
                                        <input type="text" class="form-control input-default " name="type" value="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Fees</label>
                                        <input type="text" class="form-control input-default " name="fees" value="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">Featured Image</label>
                                        <input type="file" class="form-control input-default " id="CheangeImg" name="featured_image" value="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="">Preview</label>
                                        <br>
                                        <img id="img_preview" src="#" alt="your image" style="
                                        width: 250px;
                                    ">
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