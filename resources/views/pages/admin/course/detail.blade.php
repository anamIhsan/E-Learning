@extends('layouts.dashboard-admin')

@section('title')
    Detail Course
@endsection

@section('title.page')
    Detail Course
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card text-center">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Detail Course</h4>
                            <p class="card-category">
                                Pengaturan akun yang mungkin
                                dibutuhkan selama proses belajar
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                <h6 class="">Category</h6>
                                <p class="text-sm">
                                    Programing
                                </p>
                            </div>
                            <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <h6 class="">Chapter</h6>
                                <p class="text-sm">
                                    Materi Dasar
                                </p>
                            </div>
                            <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <h6 class="">Thumbnail</h6>
                                <img src="{{ asset('images/iklan1.png') }}" witdh="150" height="150" class="rounded-lg mb-2">
                            </div>
                            <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <h6 class="">Title</h6>
                                <p class="text-sm">
                                    html & css
                                </p>
                            </div>
                            <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                                <h6 class="">Description</h6>
                                <p class="text-sm">
                                    html & cssfbvifdub udsgsd isduyg diuh sdivgsdi sdiu 
                                    html & cssfbvifdub udsgsd isduyg diuh sdivgsdi sdiu 
                                    html & cssfbvifdub udsgsd isduyg diuh sdivgsdi sdiu 
                                    html & cssfbvifdub udsgsd isduyg diuh sdivgsdi sdiu 
                                    html & cssfbvifdub udsgsd isduyg diuh sdivgsdi sdiu 
                                </p>
                            </div>
                            <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <h6 class="">Video</h6>
                                <video controls class="rounded-lg" witdh="150" height="150">
                                    <source src="{{ asset('videos/sombong.mp4') }}" type="video/mp4">
                                </video>
                            </div>
                            <a href="{{ route('admin-dashboard-course') }}"><button class="btn btn-danger mt-5">CANCEl</button></a>
                            <a href="{{ route('admin-dashboard-course-edit') }}"><button class="btn btn-warning mt-5">EDIT</button></a>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
