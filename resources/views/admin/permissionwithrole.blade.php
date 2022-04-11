@extends('layouts.layout')
@section('content')

  <div class="container-fluid">        
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Role with permissions</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Default</li>
          </ol>
        </div>
      </div>
    </div>
  </div>  

  <form action="{{route('admin.assignpermission')}}" method="POST">
    @csrf
    <div class="container row">
    <div class="col-sm-4">
        <div class="col-form-label">Select Role</div>
        <select class="js-example-basic-single col-sm-12" name="role">
            <option value="">Select Role</option>
            @foreach($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-4">
        <div class="col-form-label">Select Permissions</div>
        <select class="js-example-basic-multiple col-sm-12" name="permission[]" multiple="multiple">
            <option value="">Select Permisiion</option>
            @foreach($permissions as $permission)
                <option value="{{$permission->name}}">{{$permission->name}}</option>
            @endforeach
        </select>
      </div>
      <div class="col-sm-4">
        <div class="col-form-label mt-4"></div>
        <button class="btn btn-primary-gradien" type="submit">Assign Role</button>
    </div>
    </div>
  </form>
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>View Permissions</h3>
        </div>
      </div>
    </div>
  </div>  

  <form id="data">
    <div class="container row">
    <div class="col-sm-4">
        <div class="col-form-label">Select Role</div>
        <select class="js-example-basic-single col-sm-12" id="role_id">
            <option value="">Select Role</option>
            @foreach($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select>
    </div>
      <div class="col-sm-4">
        <div class="col-form-label mt-4"></div>
        <button class="btn btn-primary-gradien" id="viewpermission" type="submit" >View</button>
    </div>
    </div>
  </form>

  <div class="card-body">
    <div class="table-responsive">
      <table class="display" id="basic-1">
        <thead class="bg-primary">
          <tr>
            <th>Sr.No.</th>
            <th>Permissions</th>
            <th>Created_at</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="permissiontable">
               
        </tbody>
      </table>

      
    </div>
  </div>

@endsection
@section('script')
<script type = "text/javascript" language = "javascript">
    $(document).ready(function() {
        var newurl='{{route('admin.viewpermission')}}';
        $("#viewpermission").click(function(e) {
        e.preventDefault();
        var role_id = $('#role_id').val();
        if(role_id != '') {
            $.ajax({
                url: newurl,
                data: {
                    'role_id' : role_id
                },
                method: "GET",
                success: function(data) {
                   
                    $('#permissiontable').html(data);
            
                }
                });

                
        }
        else {
            alert('error');
        }
    });
    });
 </script>
@if(Session::has('msg'))
<script>
    $.notify({
       title:'Notification',
       message:"{!!session::get('msg')!!}" },
    {
       type:'primary',
       allow_dismiss:true,
      mouse_over:true,
      showProgressbar:true,
      spacing:10,
      timer:2000,
       placement:{
         from:'top',
         align:'right'
       },
       offset:{
         x:30,
         y:30
       },
       delay:1000 ,
       z_index:10000,
       animate:{
        enter:'animated slideInRight',
        exit:'animated slideOutRight'
     }
   });
  </script>
@endif
@endsection