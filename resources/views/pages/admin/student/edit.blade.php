@extends('layouts.dashboard-admin')

@section('title')
    Edit Student
@endsection

@section('title.page')
    Edit Student
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Student</h4>
              <p class="card-category">
                Pengaturan akun yang mungkin
                dibutuhkan selama proses belajar
              </p>
            </div>
            <div class="card-body">
              <form>
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">NAME</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">EMAIL ADDRESS</label>
                        <input type="email" class="form-control">
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="">
                      <label class="bmd-label-floating">PHOTO</label>
                      <input type="file" class="form-control">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-success pull-right mt-5">Submit</button>
                <a href="{{ route('admin-dashboard-student') }}"><button class="btn btn-danger pull-right mt-5">Cancel</button></a>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection