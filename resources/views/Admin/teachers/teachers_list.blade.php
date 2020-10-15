@extends('Admin.base')

@section('Content')

<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Teachers List</h4>
                    </div>

                    <div>
                        <a href="/admin/teachers/add_teacher" class="btn btn-primary">Add Teachers</a>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-sm" id="Classes">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact Number</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($Teachers))
                                    @foreach($Teachers as $Teacher)
                                    <tr>
                                    <th>{{$Teacher->id}}</th>
                                        <td>{{$Teacher->name}}</td>
                                        <td>{{$Teacher->email}}</td>
                                        <td><span class="badge badge-primary">{{$Teacher->mobile}}</span>
                                        </td>

                                        <td>
                                            <input data-id="{{$Teacher->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $Teacher->status ? 'checked' : '' }}>
                                         </td>

                                         <td>
                                            <span>
                                                <a href="/admin/teachers/edit_teacher/{{$Teacher->id}}" class="mr-4" data-toggle="tooltip" data-placement="top" target="_blank" title="Edit"><i class="fa fa-pencil color-muted"></i> </a>
                                                {{-- <a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a> --}}
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td>No Data Found</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>

                            {{-- {{ $Teachers->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



@section('JSScript')
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  


    $(function() {
      $('.toggle-class').change(function() {
          var status = $(this).prop('checked') == true ? 1 : 0; 
          var id = $(this).data('id'); 
           console.log(status);
          $.ajax({
              type: "POST",
              dataType: "json",
              url: '/admin/teachers/change_status',
              data: {'status': status, 'id': id},
              success: function(data){
                console.log(data.success)
                alert(data.success);
              }
          });
      })
    })
  </script>
@endsection