@extends('layouts.dashboard')

@section('title')
    My Course
@endsection

@section('title.page')
    My Course
@endsection

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Simple Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                  <div class="position-relative">
                    <a class="d-block shadow-xl border-radius-xl">
                      <img src="{{ asset('images/iklan1.png') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                    </a>
                  </div>
                  <div class="card-body px-1 pb-0">
                    <p class="text-gradient text-dark mb-2 text-sm">Personal Development</p>
                    <a href="javascript:;">
                      <h5>
                        Nvidia and UE4 Technologies Practice
                      </h5>
                    </a>
                    <div class="d-flex align-items-center justify-content-between">
                      <button type="button" class="btn btn-primary btn-md">Learn Again</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                  <div class="position-relative">
                    <a class="d-block shadow-xl border-radius-xl">
                      <img src="{{ asset('images/iklan1.png') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                    </a>
                  </div>
                  <div class="card-body px-1 pb-0">
                    <p class="text-gradient text-dark mb-2 text-sm">Personal Development</p>
                    <a href="javascript:;">
                      <h5>
                        Nvidia and UE4 Technologies Practice
                      </h5>
                    </a>
                    <div class="d-flex align-items-center justify-content-between">
                      <button type="button" class="btn btn-primary btn-md">Learn Again</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                  <div class="position-relative">
                    <a class="d-block shadow-xl border-radius-xl">
                      <img src="{{ asset('images/iklan1.png') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                    </a>
                  </div>
                  <div class="card-body px-1 pb-0">
                    <p class="text-gradient text-dark mb-2 text-sm">Personal Development</p>
                    <a href="javascript:;">
                      <h5>
                        Nvidia and UE4 Technologies Practice
                      </h5>
                    </a>
                    <div class="d-flex align-items-center justify-content-between">
                      <button type="button" class="btn btn-primary btn-md">Learn Again</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                  <div class="position-relative">
                    <a class="d-block shadow-xl border-radius-xl">
                      <img src="{{ asset('images/iklan1.png') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                    </a>
                  </div>
                  <div class="card-body px-1 pb-0">
                    <p class="text-gradient text-dark mb-2 text-sm">Personal Development</p>
                    <a href="javascript:;">
                      <h5>
                        Nvidia and UE4 Technologies Practice
                      </h5>
                    </a>
                    <div class="d-flex align-items-center justify-content-between">
                      <button type="button" class="btn btn-primary btn-md">Learn Again</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection