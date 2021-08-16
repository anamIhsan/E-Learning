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
            <div class="row d-flex">
                <div class="col-md-6">
                    <a href="{{ route('admin-dashboard-course') }}"><button class="btn btn-dark ml-3 mb-3">Back</button></a>
                    <div class="card mb-4">
                        <div class="card-header card-header-tabs card-header-primary">
                            <div class="row d-flex justify-content-between align-items-center px-3">
                                <div class="">
                                    <h4 class="card-title">List Chapter</h4>
                                    <p class="card-category">
                                        Upgrade terus ilmu dan pengalaman
                                        terbaru kamu di bidang teknologi
                                    </p>
                                </div>
                                <a href="{{ route('admin-dashboard-chapter-create', $course->id) }}" class="btn btn-success mt-4">Add New Chapter</a>		
                            </div>
                        </div>
                        @php
                            $dataAos = 0
                        @endphp
                        <div class="card-body">
                            {{-- ALERT CHAPTER & VIDEO BERHASIL DI HAPUS / EDIT --}}
                            @if (session('notification-success'))
                                <div class="alert alert-success">{{ session('notification-success') }}</div>
                            @endif
                            {{-- ALERT CHAPTER & VIDEO BERHASIL DI DELETE --}}
                            @if (session('notification-delete'))
                                <div class="alert alert-danger">{{ session('notification-delete') }}</div>
                            @endif
                            @foreach ($chapter as $chapters)
                                <div class="mt-3">
                                    {{-- Chapter --}}
                                    <div class="d-flex justify-content-between align-items-center shadow-sm border-secondary mb-2 px-2">
                                        <h6 
                                            class="text-uppercase text-body text-xs font-weight-bolder my-3"
                                            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="{{ $dataAos+= 100 }}"    
                                        >
                                                # {{ $chapters->title }}
                                        </h6>
                                        <div class="d-flex">
                                            <a href="{{ route('admin-dashboard-chapter-edit', $chapters->id) }}" class="edit text-warning mr-2"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <a href="#deleteChapter-{{ $chapters->id }}" class="delete text-danger" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                        </div>
                                    </div>
                                    {{-- Video --}}
                                    <a href="{{ route('admin-dashboard-video-create', $chapters->id) }}" class="btn btn-success">Add New Video</a>
                                    @foreach ($videos as $video)
                                        @if ($video->chapters_id === $chapters->id)
                                            <ul class="list-group">
                                                <li class="list-group-item border-0 d-flex justify-content-between align-items-center ps-0 mb-2">
                                                    <a href="{{ $video->video }}" target="target" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="{{ $dataAos += 100 }}" data-toggle="tooltip" title="Lihat video">
                                                        <div class="d-flex align-items-center">
                                                            <i class="material-icons text-secondary">play_circle_filled</i>
                                                            <h6 class="text-dark mt-2 ml-2">{{ $video->title }}</h6>
                                                        </div>
                                                    </a>
                                                    <div class="d-flex">
                                                        <a href="{{ route('admin-dashboard-video-edit', $video->id.'/'. $chapters->courses_id) }}" class="edit text-warning mr-2"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                                        <a href="#deleteVideo-{{ $video->id }}" class="delete text-danger" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        @endif
                                        {{-- ALERT DELETE VIDEO --}}
                                        <div id="deleteVideo-{{ $video->id }}" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('admin-dashboard-video-delete', $video->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="modal-header">						
                                                            <h4 class="modal-title">Delete Video</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        </div>
                                                        <div class="modal-body">					
                                                            <p>Are you sure you want to delete these Records?</p>
                                                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                            <input type="submit" class="btn btn-danger" value="Delete">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div> 
                                {{-- ALERT DELETE CHAPTER --}}
                                <div id="deleteChapter-{{ $chapters->id }}" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ route('admin-dashboard-chapter-delete', $chapters->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-header">						
                                                    <h4 class="modal-title">Delete Chapter</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">					
                                                    <p>Are you sure you want to delete these Records?</p>
                                                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                    <input type="submit" class="btn btn-danger" value="Delete">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="">
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <p>CATEGORY</p>
                                <h5 style="margin-top: -15px;">{{ $course->category->name }}</h5>
                            </div>
                            <div class="">
                                <p>TITLE</p>
                                <h5 style="margin-top: -15px;">{{ $course->title }}</h5>
                            </div>
                        </div>
                        <iframe 
                            class="w-100 rounded-lg shadow-xl outline-none" height="350" 
                            src="/profile/{{ $course->thumbnail }}"  title="YouTube video player" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            name="target"
                            allowfullscreen
                        >
                        </iframe>
                        <p class="mt-2">DESCRIPTION</p>
                        <h5 style="margin-top: -3px;">{{ $course->description }}</h5>
                    </div>
                </div>
            </div>
            {{-- ALERT --}}
            <div id="deleteEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">						
                                <h4 class="modal-title">Delete Chapter</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">					
                                <p>Are you sure you want to delete these Records?</p>
                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function(){
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();
            
            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function(){
                if(this.checked){
                    checkbox.each(function(){
                        this.checked = true;                        
                    });
                } else{
                    checkbox.each(function(){
                        this.checked = false;                        
                    });
                } 
            });
            checkbox.click(function(){
                if(!this.checked){
                    $("#selectAll").prop("checked", false);
                }
            });
        });
    </script>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}
@endpush
