@extends('layouts.layout')
@section('content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Fee Tracking</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#"><i data-feather="home"></i></a>
            </li>
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Fee Tracking</li>
          </ol>
        </div>
      </div>
    </div>
</div>

 <!-- Container-fluid starts-->
 <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <form class="needs-validation" novalidate="">
                <div class="row g-3 mb-3">
                    <div class="col-md-3 ">
                        <label class="form-label" for="validationCustom04">Session</label>
                        <select class="form-select" id="validationCustom04" required="">
                            <option selected="" disabled="" value="">Choose Session</option>
                            <option>2022/2023</option>
                        </select>
                        <div class="invalid-feedback">Please select a session.</div>
                    </div>
                    <div class="col-md-3 ">
                        <label class="form-label" for="validationCustom04">Month</label>
                        <select class="form-select" id="validationCustom04" required="">
                            <option selected="" disabled="" value="">Choose Month</option>
                            <option>January</option>
                        </select>
                        <div class="invalid-feedback">Please select a month.</div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label" for="validationCustom04">Fee Type</label>
                        <select class="form-select" id="validationCustom04" required="">
                            <option selected="" disabled="" value="">Choose Fee Type</option>
                            <option>Tution Fees</option>
                        </select>
                        <div class="invalid-feedback">Please select a fee type.</div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label" for="validationCustom01">Total Amount</label>
                        <input class="form-control" id="validationCustom01" type="text" value="Mark" required="">
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-md-4">
                        <label class="form-label" for="validationCustom04">Discount Type</label>
                        <select class="form-select" id="validationCustom04" required="">
                            <option selected="" disabled="" value="">Choose Discount Type</option>
                            <option>%</option>
                            <option>Rs.</option>
                        </select>
                        <div class="invalid-feedback">Please select a discount type.</div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="validationCustom01">Actual Amount</label>
                        <input class="form-control" id="validationCustom01" type="text" value="Mark" required="">
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="validationCustom01">Actual Amount<em>(inclusive GST)</em></label>
                        <input class="form-control" id="validationCustom01" type="text" value="Mark" required="">
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                </div>
              <button class="btn btn-primary" type="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->


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
