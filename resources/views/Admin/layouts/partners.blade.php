@extends('Admin.base')

@section('Content')

<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Partners List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-sm" id="Partners">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile Number</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Tution</th>
                                        <th>Subjects</th>
                                        <th>Standard</th>
                                        <th>Education</th>
                                        <th>No of Students</th>
                                        <th>website</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($Partners))
                                    @foreach($Partners as $Partner)
                                    <tr>
                                    <th>{{$Partner->id}}</th>
                                        <td>{{$Partner->name}}</td>
                                        <td>{{$Partner->email}}</td>
                                        <td><span class="badge badge-primary">{{$Partner->mobile}}</span>
                                        </td>
                                        <td>{{$Partner->state}}</td>
                                        <td>{{$Partner->city}}</td>
                                        <td>{{$Partner->tution}}</td>
                                        <td>{{$Partner->subjects}}</td>
                                        <td>{{$Partner->standard}}</td>
                                        <td>{{$Partner->education}}</td>
                                        <td>{{$Partner->no_of_students}}</td>
                                        <td>{{$Partner->website}}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td>No Data Found</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>

                            {{ $Partners->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection