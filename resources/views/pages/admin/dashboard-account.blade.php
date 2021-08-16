@extends('layouts.dashboard-admin')

@section('title')
    Account Settings
@endsection

@section('title.page')
    Account Settings
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Profile</h4>
              <p class="card-category">
                Pengaturan akun yang mungkin
                dibutuhkan selama proses belajar
              </p>
            </div>
            <div class="card-body">
              {{-- ALERT PROFILE BERHASIL DI EDIT --}}
              @if (session('notification-success'))
                <div class="alert alert-success">{{ session('notification-success') }}</div>
              @endif
              <form action="{{ route('admin-dashboard-account-update', $users->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                  <div class="col-md-12">
                    <div class="">
                      <label class="bmd-label-floating">PROFILE</label>
                      <input 
                        type="file" 
                        class="form-control"
                        name="profile_file"  
                      >
                    </div>
                  </div>
                </div>
                <div class="row mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">NAME</label>
                      <input 
                        type="text" 
                        class="form-control"
                        name="name"
                        value="{{ $users->name }}"  
                      >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">EMAIL ADDRESS</label>
                      <input 
                        type="email" 
                        class="form-control"
                        name="email"
                        value="{{ $users->email }}"  
                      >
                    </div>
                  </div>
                </div>
                <h4 class="text-center pt-2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">Change Password</h4>
                <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">NEW PASSWORD</label>
                      <input 
                        type="password" 
                        class="form-control @error('password') is-invalid @enderror"
                        name="password"  
                      >
                      @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">RE-TYPE NEW PASSWORD</label>
                      <input 
                        type="password" 
                        class="form-control @error('retype_password') is-invalid @enderror"
                        name="retype_password"  
                      >
                      @error('retype_password')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection