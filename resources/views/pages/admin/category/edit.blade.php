@extends('layouts.dashboard-admin')

@section('title')
    Edit Category
@endsection

@section('title.page')
    Edit Category
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <div class="row">
        <div class="col-md-8">
          <div class="d-flex flex-column align-items-start">
            <a href="{{ route('admin-dashboard-category') }}"><button class="btn btn-dark pull-right ml-3 mb-3">Back</button></a>
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Create Category</h4>
                <p class="card-category">
                  Pengaturan akun yang mungkin
                  dibutuhkan selama proses belajar
                </p>
              </div>
              <div class="card-body">
                <form action="{{ route('admin-dashboard-category-update', $data->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">NAME</label>
                          <input 
                            type="text" 
                            class="form-control"
                            name="name"
                            value="{{ $data->name }}"
                          >
                        </div>
                      </div>
                    </div>
                  <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="col-md-12">
                      <div class="">
                        <label class="bmd-label-floating">PHOTO</label>
                        <input 
                          type="file" 
                          class="form-control"
                          name="photo_file"  
                        >
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