@extends('layouts.layout')
@section('content')

  <div class="container-fluid">        
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Dashboard</h3>
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
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-xl-3 col-lg-6">
        <div class="card o-hidden">
          <div class="bg-primary b-r-4 card-body">
            <div class="media static-top-widget">
              <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg></div>
              <div class="media-body"><span class="m-0">Earnings</span>
                <h4 class="mb-0 counter">6659</h4><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database icon-bg"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3 col-lg-6">
        <div class="card o-hidden">
          <div class="bg-secondary b-r-4 card-body">
            <div class="media static-top-widget">
              <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></div>
              <div class="media-body"><span class="m-0">Products</span>
                <h4 class="mb-0 counter">9856</h4><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag icon-bg"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3 col-lg-6">
        <div class="card o-hidden">
          <div class="bg-primary b-r-4 card-body">
            <div class="media static-top-widget">
              <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg></div>
              <div class="media-body"><span class="m-0">Messages</span>
                <h4 class="mb-0 counter">893</h4><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle icon-bg"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3 col-lg-6">
        <div class="card o-hidden">
          <div class="bg-primary b-r-4 card-body">
            <div class="media static-top-widget">
              <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg></div>
              <div class="media-body"><span class="m-0">New User</span>
                <h4 class="mb-0 counter">45631</h4><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus icon-bg"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 xl-100 box-col-12">
        <div class="widget-joins card widget-arrow">
          <div class="row">
            <div class="col-sm-6 pe-0">
              <div class="media border-after-xs">
                <div class="align-self-center me-3 text-start"><span class="mb-1">Sale</span>
                  <h5 class="mb-0">Today</h5>
                </div>
                <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down font-primary"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></div>
                <div class="media-body">
                  <h5 class="mb-0">$<span class="counter">25698</span></h5><span class="mb-1">-$2658(36%)</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 ps-0">
              <div class="media">
                <div class="align-self-center me-3 text-start"><span class="mb-1">Sale</span>
                  <h5 class="mb-0">Month</h5>
                </div>
                <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up font-primary"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></div>
                <div class="media-body ps-2">
                  <h5 class="mb-0">$<span class="counter">6954</span></h5><span class="mb-1">+$369(15%)</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 pe-0">
              <div class="media border-after-xs">
                <div class="align-self-center me-3 text-start"><span class="mb-1">Sale</span>
                  <h5 class="mb-0">Week</h5>
                </div>
                <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up font-primary"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></div>
                <div class="media-body">
                  <h5 class="mb-0">$<span class="counter">63147</span></h5><span class="mb-1">+$69(65%)</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 ps-0">
              <div class="media">
                <div class="align-self-center me-3 text-start"><span class="mb-1">Sale</span>
                  <h5 class="mb-0">Year</h5>
                </div>
                <div class="media-body align-self-center ps-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up font-primary"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></div>
                <div class="media-body ps-2">
                  <h5 class="mb-0">$<span class="counter">963198</span></h5><span class="mb-1">+$3654(90%)          </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row second-chart-list third-news-update">
      <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
        <div class="card o-hidden profile-greeting">
          <div class="card-body">
            <div class="media">
              <div class="badge-groups w-100">
                <div class="badge f-12"><i class="me-1" data-feather="clock"></i><span id="txt"></span></div>
                <div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
              </div>
            </div>
            <div class="greeting-user text-center">
              <div class="profile-vector"><img class="img-fluid" src="../assets/images/dashboard/welcome.png" alt=""></div>
              <h4 class="f-w-600"><span id="greeting">Good Morning</span> <span class="right-circle"><i class="fa fa-check-circle f-14 middle"></i></span></h4>
              <p><span> Today's earrning is $405 & your sales increase rate is 3.7 over the last 24 hours</span></p>
              <div class="whatsnew-btn"><a class="btn btn-primary">Whats New !</a></div>
              <div class="left-icon"><i class="fa fa-bell"> </i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-12 xl-50 calendar-sec box-col-6">
        <div class="card gradient-primary o-hidden">
          <div class="card-body">
            <div class="setting-dot">
              <div class="setting-bg-primary date-picker-setting position-set pull-right"><i class="fa fa-spin fa-cog"></i></div>
            </div>
            <div class="default-datepicker">
              <div class="datepicker-here" data-language="en"></div>
            </div><span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">                </span></span></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
@endsection
@section('script')
<script src="{{asset('adminasset/assets/js/notify/index.js')}}"></script>
@endsection