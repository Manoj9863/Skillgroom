@extends('Admin.base')

@section('Content')

<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Courses List</h4>
                    </div>

                    <div>
                        <a href="/admin/courses/add_courses" class="btn btn-primary">Add Courses</a>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-sm" id="Classes">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Course Name</th>
                                        <th>Teacher Name</th>
                                        <th>Type</th>
                                        <th>Fees</th>
                                        <th>Featured Image</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($Courses))
                                    @foreach($Courses as $Course)
                                    <tr>
                                    <th>{{$Course->id}}</th>
                                        <td>{{$Course->course_name}}</td>
                                        <td>{{$Course->name}}</td>
                                        <td>{{$Course->type}}</td>
                                        <td>Rs. {{$Course->fees}}</td>
                                        <td><img src="/Admin/featured_image/{{$Course->featured_image}}" alt="" style="
                                            width: 150px;
                                        "></td>

                                        <td>
                                            <input data-id="{{$Course->id}}" class="toggle-class_course" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $Course->status ? 'checked' : '' }}>
                                        </td>
                                        
                                        <td>
                                            <span>
                                                <a href="/admin/courses/edit_courses/{{$Course->id}}" class="mr-4" data-toggle="tooltip" data-placement="top" target="_blank" title="Edit"><i class="fa fa-pencil color-muted"></i> </a>
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
      $('.toggle-class_course').change(function() {
          var status = $(this).prop('checked') == true ? 1 : 0; 
          var id = $(this).data('id'); 
           console.log(status);
          $.ajax({
              type: "POST",
              dataType: "json",
              url: '/admin/courses/change_status',
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