@extends('Admin.base')

@section('Content')

<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Inquiry Lists</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-sm" id="Inquiries">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile Number</th>
                                        <th>Location</th>
                                        <th>Category</th>
                                        <th>Inquiry</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($Inquiry))
                                    @foreach($Inquiry as $Inquiries)
                                    <tr>
                                    <th>{{$Inquiries->id}}</th>
                                        <td>{{$Inquiries->name}}</td>
                                        <td>{{$Inquiries->email}}</td>
                                        <td><span class="badge badge-primary">{{$Inquiries->mobile}}</span>
                                        </td>
                                        <td>{{$Inquiries->location}}</td>
                                        <td>{{$Inquiries->category}}</td>
                                        <td>{{$Inquiries->inquiry}}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td>No Data Found</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>

                            {{ $Inquiry->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection