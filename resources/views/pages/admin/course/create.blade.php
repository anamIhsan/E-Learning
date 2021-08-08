@extends('layouts.dashboard-admin')

@section('title')
    Add New Course
@endsection

@section('title.page')
    Add New Course
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="d-flex flex-column align-items-start">
            <a href="{{ route('admin-dashboard-course') }}"><button class="btn btn-dark pull-right ml-3 mb-3">Back</button></a>
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Create Course</h4>
                <p class="card-category">
                  Pengaturan akun yang mungkin
                  dibutuhkan selama proses belajar
                </p>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                      <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="form-group">
                          <label class="bmd-label-floating">CATEGORY</label>
                          <select name="" id="" class="pl-2 form-control">
                              <option value="">Html</option>
                              <option value="">Php</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                          <div class="form-group">
                            <label class="bmd-label-floating">TITLE</label>
                            <input type="text" class="form-control">
                          </div>
                      </div>
                  </div>
                  <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                      <div class="col-md-12">
                          <div class="">
                          <label class="bmd-label-floating">THUMBNAIL</label>
                          <input type="file" class="form-control">
                          </div>
                      </div>
                  </div>
                  <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                      <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">DESCRIPTION</label>
                            <input type="longtext" class="form-control">
                          </div>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-success pull-right mt-5">Submit</button>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection