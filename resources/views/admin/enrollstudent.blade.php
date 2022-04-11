@extends('layouts.layout')
@section('content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Permission</h3>
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

<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalmdo" data-whatever="@fat">Add Permission</button>

<div class="modal fade" id="exampleModalmdo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Enroll Student</h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="POST">
            @csrf
        <div class="modal-body">
            <div class="mb-3">
              <label class="col-form-label" for="name">Permission Name:</label>
              <input class="form-control" id="name" type="text" name="name">
            </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit">Add</button>
        </div>
    </form>
      </div>
    </div>
  </div>




@endsection

@section('script')

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
