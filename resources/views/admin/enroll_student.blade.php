@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Enroll Student</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#"><i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Enroll Student</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form class="f1" method="post">
                            <div class="f1-steps">
                                <div class="f1-progress">
                                    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3"></div>
                                </div>
                                <div class="f1-step active">
                                    <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                    <p>Child Particulars</p>
                                </div>
                                <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                                    <p>Parent Particulars</p>
                                </div>
                                <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                                    <p>Upload Documents</p>
                                </div>
                            </div>
                            <fieldset>
                                <div class="row g-3 mb-3">
                                    <div class="col-md-5">
                                        <label class="form-label" for="validationCustom01">Name</label>
                                        <input class="form-control" id="validationCustom01" type="text" value="Mark" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2 ">
                                        <label class="form-label" for="validationCustom04">Class</label>
                                        <select class="form-select" id="validationCustom04" required="">
                                            <option selected="" disabled="" value="">Choose Class</option>
                                            <option>1</option></option>
                                        </select>
                                        <div class="invalid-feedback">Please select a class.</div>
                                    </div>
                                    <div class="col-md-2 ">
                                        <label class="form-label" for="validationCustom04">Section</label>
                                        <select class="form-select" id="validationCustom04" required="">
                                            <option selected="" disabled="" value="">Choose Section</option>
                                            <option>A</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a section.</div>
                                    </div>
                                    <div class="col-md-3 ">
                                        <label class="form-label" for="validationCustom04">Date of birth</label>
                                        <input class="form-control" id="validationCustom01" type="date" required="">
                                        <div class="invalid-feedback">Please select a section.</div>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-md-3 ">
                                        <label class="form-label" for="validationCustom04">Gender</label>
                                        <select class="form-select" id="validationCustom04" required="">
                                            <option selected="" disabled="" value="">Choose Gender</option>
                                            <option>Male</option></option>
                                        </select>
                                        <div class="invalid-feedback">Please select a gender.</div>
                                    </div>
                                    <div class="col-md-3 ">
                                        <label class="form-label" for="validationCustom04">Category</label>
                                        <select class="form-select" id="validationCustom04" required="">
                                            <option selected="" disabled="" value="">Choose Category</option>
                                            <option>Gen</option></option>
                                        </select>
                                        <div class="invalid-feedback">Please select a category.</div>
                                    </div>
                                    <div class="col-md-3 ">
                                        <label class="form-label" for="validationCustom04">Religion</label>
                                        <select class="form-select" id="validationCustom04" required="">
                                            <option selected="" disabled="" value="">Choose religion</option>
                                            <option>A</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a religion.</div>
                                    </div>
                                    <div class="col-md-3 ">
                                        <label class="form-label" for="validationCustom04">Caste</label>
                                        <select class="form-select" id="validationCustom04" required="">
                                            <option selected="" disabled="" value="">Choose caste</option>
                                            <option>Hindu</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a caste.</div>
                                    </div>
                                </div>
                                <div class="f1-buttons">
                                    <button class="btn btn-primary btn-next" type="button">Next</button>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="row g-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="validationCustom01">Father's Name</label>
                                        <input class="form-control" id="validationCustom01" type="text" value="Mark" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="validationCustom01">Mother's Name</label>
                                        <input class="form-control" id="validationCustom01" type="text" value="Mark" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-md-4">
                                        <label class="form-label" for="validationCustom01">Father's Occupation</label>
                                        <input class="form-control" id="validationCustom01" type="text" value="Mark" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="validationCustom01">Mobile No.</label>
                                        <input class="form-control" id="validationCustom01" type="text" value="Mark" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="validationCustom01">Email <em>(Optional)</em></label>
                                        <input class="form-control" id="validationCustom01" type="text" value="Mark" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="validationCustom01">Address</label>
                                        <textarea class="form-control" id="validationCustom01" ></textarea>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                </div>
                                <div class="f1-buttons">
                                    <button class="btn btn-primary btn-previous" type="button">Previous</button>
                                    <button class="btn btn-primary btn-next" type="button">Next</button>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="mb-2">
                                    <label class="sr-only">DD</label>
                                    <input class="form-control" id="dd" type="number" placeholder="dd" required="">
                                </div>
                                <div class="mb-2">
                                    <label class="sr-only">MM</label>
                                    <input class="form-control" id="mm" type="number" placeholder="mm" required="">
                                </div>
                                <div class="mb-2">
                                    <label class="sr-only">YYYY</label>
                                    <input class="form-control" id="yyyy" type="number" placeholder="yyyy" required="">
                                </div>
                                <div class="f1-buttons">
                                    <button class="btn btn-primary btn-previous" type="button">Previous</button>
                                    <button class="btn btn-primary btn-submit" type="submit">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
