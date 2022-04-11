@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>All Students</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#"><i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Fee Master</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="card p-4">
        <div class="table-responsive">
            <table class="display" id="basic-1">
                {{-- <thead class="bg-primary">
          <tr>
            <th>Sr.No.</th>
            <th>Role</th>
            <th>Created at</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @php $sn=1; @endphp
          @foreach ($roles as $role)
              <tr>
                  <td>{{ $sn }}</td>
                  <td>{{ $role->name }}</td>
                  <td>{{ $role->created_at }}</td>
                  <td>Edit Del</td>
              </tr>
              @php $sn+=1; @endphp
          @endforeach
      </tbody> --}}
                <thead class="bg-primary">
                    <tr>
                        <th>Sr.No.</th>
                        <th>Role</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Edit Del</td>
                        <td>Edit Del</td>
                        <td>Edit Del</td>
                        <td>Edit Del</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
@endsection
