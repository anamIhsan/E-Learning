@extends('layouts.dashboard')

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
              <form>
                <!-- <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="bmd-label-floating">Company (disabled)</label>
                      <input type="text" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Username</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email address</label>
                      <input type="email" class="form-control">
                    </div>
                  </div>
                </div> -->
                <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                  <div class="col-md-12">
                    <div class="">
                      <label class="bmd-label-floating">PROFILE</label>
                      <input type="file" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">NAME</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">EMAIL ADDRESS</label>
                      <input type="email" class="form-control">
                    </div>
                  </div>
                </div>
                <h4 class="text-center pt-2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">Change Password</h4>
                <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">NEW PASSWORD</label>
                      <input type="password" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">RE-TYPE NEW PASSWORD</label>
                      <input type="password" class="form-control">
                    </div>
                  </div>
                </div>
                <!-- <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">City</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Country</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Postal Code</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div> -->
                <!-- <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>About Me</label>
                      <div class="form-group">
                        <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                        <textarea class="form-control" rows="5"></textarea>
                      </div>
                    </div>
                  </div>
                </div> -->
                <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
        {{-- <div class="col-md-4">
          <div class="card card-profile">
            <div class="card-avatar">
              <a href="javascript:;">
                <img class="img" src="{{ asset('images/faces/marc.jpg') }}" />
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category text-gray">Peped Markoped</h6>
              <h4 class="card-title">pepedmarkoped@gmail.com</h4>
              <p class="card-description">
                Milikilah tujuan untuk sukses, bukan kesempurnaan. Jangan pernah melepaskan hakmu untuk melakukan kesalahan, karena dengan begitu kamu akan kehilangan kemampuan untuk mempelajari hal-hal baru dan melanjutkan hidup. Ingatlah bahwa ketakutan selalu bersembunyi di balik perfeksionisme.
              </p>
              <!-- <a href="javascript:;" class="btn btn-primary btn-round">Follow</a> -->
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
@endsection