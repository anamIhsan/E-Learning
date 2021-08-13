@extends('layouts.dashboard-admin')

@section('title')
    Edit Video
@endsection

@section('title.page')
    Edit Video
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="d-flex flex-column align-items-start">
            <a href="{{ route('admin-dashboard-course-detail') }}"><button class="btn btn-dark pull-right ml-3 mb-3">Back</button></a>
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Edit Video</h4>
                <p class="card-category">
                  Pengaturan akun yang mungkin
                  dibutuhkan selama proses belajar
                </p>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="">
                          <label class="bmd-label-floating">VIDEO</label>
                          <input type="file" class="form-control">
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