@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Class</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Class</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalmdo"
        data-whatever="@fat">Add Class</button>

    <div class="modal fade" id="exampleModalmdo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Class</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.addclass') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="col-form-label" for="name">Class Name:</label>
                            <input class="form-control" id="name" type="text" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="description">Choose Section:</label>
                            <div class="m-t-15 m-checkbox-inline">
                                <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
                                    <input class="form-check-input" id="inline-1" type="checkbox">
                                    <label class="form-check-label" for="inline-1">Section<span class="digits"> A</span></label>
                                  </div>
                                <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
                                    <input class="form-check-input" id="inline-2" type="checkbox">
                                    <label class="form-check-label" for="inline-2">Section<span class="digits">
                                            B</span></label>
                                </div>
                                <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
                                    <input class="form-check-input" id="inline-3" type="checkbox">
                                    <label class="form-check-label" for="inline-3">Section<span class="digits">
                                            C</span></label>
                                </div>
                            </div>

                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="description">Class Description:</label>
                            <input class="form-control" id="description" type="text" name="description">
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


    <div class="card-body">
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
