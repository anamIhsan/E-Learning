@extends('layouts.dashboard-admin')

@section('title')
    Admin Dashboard
@endsection

@section('title.page')
    Dashboard
@endsection

@php
$categories = App\Models\Category::all();

@endphp

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">school</i>
                            </div>
                            <p class="card-category">Students</p>
                            <h3 class="card-title">{{ $student->count() }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i> Jadwalkan Waktu Belajar Anda
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">category</i>
                            </div>
                            <p class="card-category">Categories</p>
                            <h3 class="card-title">{{ $category }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">travel_explore</i>Pilih Kategori Kesukaan Anda
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">library_books</i>
                            </div>
                            <p class="card-category">Courses</p>
                            <h3 class="card-title">{{ $course }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i> Dapatkan Lebih Banyak Kursus
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">video_library</i>
                            </div>
                            <p class="card-category">Videos</p>
                            <h3 class="card-title">+{{ $video }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">update</i> Baru saja Diperbarui
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card card-chart">
                        <div class="card-header card-header-success">
                            {{-- script baris 800an --}}
                            <div class="ct-chart" id="categoryChart"></div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"> Category Terpopuler </h4>
                            <p class="card-category">peningkatan belajar hari ini.</p>
                        </div>
                        <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> baru saja diperbarui
                        </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="card card-chart">
                        <div class="card-header card-header-warning">
                        <div class="ct-chart" id="websiteViewsChart"></div>
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">Email Subscriptions</h4>
                        <p class="card-category">Last Campaign Performance</p>
                        </div>
                        <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                        </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-md-4">
                    <div class="card card-chart">
                        <div class="card-header card-header-danger">
                        <div class="ct-chart" id="completedTasksChart"></div>
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">Completed Tasks</h4>
                        <p class="card-category">Last Campaign Performance</p>
                        </div>
                        <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                        </div>
                        </div>
                    </div>
                </div> --}}
            </div>

            {{-- <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-tabs card-header-primary">
                            <h4 class="card-title">Kursus yang Sedang Berlangsung</h4>
                            <p class="card-category">
                                Upgrade terus ilmu dan pengalaman
                                terbaru kamu di bidang teknologi
                            </p>
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                <span class="nav-tabs-title">Tasks:</span>
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item">
                                    <a class="nav-link active" href="#profile" data-toggle="tab">
                                        <i class="material-icons">bug_report</i> Bugs
                                        <div class="ripple-container"></div>
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="#messages" data-toggle="tab">
                                        <i class="material-icons">code</i> Website
                                        <div class="ripple-container"></div>
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="#settings" data-toggle="tab">
                                        <i class="material-icons">cloud</i> Server
                                        <div class="ripple-container"></div>
                                    </a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Terakhir Aktif</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dakota Rice</td>
                                        <td>Hari ini</td>
                                        <td class="td-actions">
                                            <button type="button" rel="tooltip" title="Lanjutkan Belajar" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">library_books</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Batalkan Belajar" class="btn btn-danger btn-link btn-sm">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Minerva Hooper</td>
                                        <td>Kemarin</td>
                                        <td class="td-actions">
                                            <button type="button" rel="tooltip" title="Lanjutkan Belajar" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">library_books</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Batalkan Belajar" class="btn btn-danger btn-link btn-sm">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sage Rodriguez</td>
                                        <td>1 hari yang lalu</td>
                                        <td class="td-actions">
                                            <button type="button" rel="tooltip" title="Lanjutkan Belajar" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">library_books</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Batalkan Belajar" class="btn btn-danger btn-link btn-sm">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Philip Chaney</td>
                                        <td>2 hari yang lalu</td>
                                        <td class="td-actions">
                                            <button type="button" rel="tooltip" title="Lanjutkan Belajar" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">library_books</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Batalkan Belajar" class="btn btn-danger btn-link btn-sm">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="messages">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="" checked>
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                        </label>
                                    </div>
                                    </td>
                                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                    </td>
                                    <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                        <i class="material-icons">close</i>
                                    </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                        </label>
                                    </div>
                                    </td>
                                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                                    <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                        <i class="material-icons">close</i>
                                    </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="tab-pane" id="settings">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                        </label>
                                    </div>
                                    </td>
                                    <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                    <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                        <i class="material-icons">close</i>
                                    </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="" checked>
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                        </label>
                                    </div>
                                    </td>
                                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                    </td>
                                    <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                        <i class="material-icons">close</i>
                                    </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="" checked>
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                        </label>
                                    </div>
                                    </td>
                                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                                    <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                        <i class="material-icons">close</i>
                                    </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-warning">
                        <h4 class="card-title">Kursus yang di selesaikan</h4>
                        <p class="card-category">
                            Upgrade terus ilmu dan pengalaman
                            terbaru kamu di bidang teknologi
                        </p>
                        </div>
                        <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning text-center">
                                <th>No</th>
                                <th>Judul</th>
                                <th>Tanggal Penyelesaian</th>
                            </thead>
                            <tbody class="text-center">
                            <tr>
                                <td>1</td>
                                <td>Dakota Rice</td>
                                <td>30 - 07 - 2021</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Minerva Hooper</td>
                                <td>30 - 07 - 2021</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sage Rodriguez</td>
                                <td>30 - 07 - 2021</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Philip Chaney</td>
                                <td>30 - 07 - 2021</td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection

@push('scripts')
    {{-- <script>
        initDashboardPageCharts: function() {

        if ($('#dailySalesChart').length != 0 || $('#completedTasksChart').length != 0 || $('#websiteViewsChart').length != 0) {
        /* ----------==========     Daily Sales Chart initialization    ==========---------- */

        dataDailySalesChart = {
            labels: ['HTML', 'PHP', 'JS', 'PYTHON', 'C++', 'FLUTTER', 'JAVA'],
            series: [
            [12, 17, 7, 17, 23, 18, 38]
            ]
        };

        optionsDailySalesChart = {
            lineSmooth: Chartist.Interpolation.cardinal({
            tension: 0
            }),
            low: 0,
            high: 50, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            chartPadding: {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0
            },
        }

        var dailySalesChart = new Chartist.Line('#dailySalesChart', dataDailySalesChart, optionsDailySalesChart);

        md.startAnimationForLineChart(dailySalesChart);



        /* ----------==========     Completed Tasks Chart initialization    ==========---------- */

        dataCompletedTasksChart = {
            labels: ['12p', '3p', '6p', '9p', '12p', '3a', '6a', '9a'],
            series: [
            [230, 750, 450, 300, 280, 240, 200, 190]
            ]
        };

        optionsCompletedTasksChart = {
            lineSmooth: Chartist.Interpolation.cardinal({
            tension: 0
            }),
            low: 0,
            high: 1000, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            chartPadding: {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0
            }
        }

        var completedTasksChart = new Chartist.Line('#completedTasksChart', dataCompletedTasksChart, optionsCompletedTasksChart);

        // start animation for the Completed Tasks Chart - Line Chart
        md.startAnimationForLineChart(completedTasksChart);


        /* ----------==========     Emails Subscription Chart initialization    ==========---------- */

        var dataWebsiteViewsChart = {
            labels: ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
            series: [
            [542, 443, 320, 780, 553, 453, 326, 434, 568, 610, 756, 895]

            ]
        };
        var optionsWebsiteViewsChart = {
            axisX: {
            showGrid: false
            },
            low: 0,
            high: 1000,
            chartPadding: {
            top: 0,
            right: 5,
            bottom: 0,
            left: 0
            }
        };
        var responsiveOptions = [
            ['screen and (max-width: 640px)', {
            seriesBarDistance: 5,
            axisX: {
                labelInterpolationFnc: function(value) {
                return value[0];
                }
            }
            }]
        ];
        var websiteViewsChart = Chartist.Bar('#websiteViewsChart', dataWebsiteViewsChart, optionsWebsiteViewsChart, responsiveOptions);

        //start animation for the Emails Subscription Chart
        md.startAnimationForBarChart(websiteViewsChart);
        }
     },
    </script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}
    <script>

        (function() {
        isWindows = navigator.platform.indexOf('Win') > -1 ? true : false;

        if (isWindows) {
            // if we are on windows OS we activate the perfectScrollbar function
            $('.sidebar .sidebar-wrapper, .main-panel, .main').perfectScrollbar();

            $('html').addClass('perfect-scrollbar-on');
        } else {
            $('html').addClass('perfect-scrollbar-off');
        }
        })();


        var breakCards = true;

        var searchVisible = 0;
        var transparent = true;

        var transparentDemo = true;
        var fixedTop = false;

        var mobile_menu_visible = 0,
        mobile_menu_initialized = false,
        toggle_initialized = false,
        bootstrap_nav_initialized = false;

        var seq = 0,
        delays = 80,
        durations = 500;
        var seq2 = 0,
        delays2 = 80,
        durations2 = 500;

        $(document).ready(function() {

        $('body').bootstrapMaterialDesign();

        $sidebar = $('.sidebar');

        md.initSidebarsCheck();

        window_width = $(window).width();

        // check if there is an image set for the sidebar's background
        md.checkSidebarImage();

        //    Activate bootstrap-select
        if ($(".selectpicker").length != 0) {
            $(".selectpicker").selectpicker();
        }

        //  Activate the tooltips
        $('[rel="tooltip"]').tooltip();

        $('.form-control').on("focus", function() {
            $(this).parent('.input-group').addClass("input-group-focus");
        }).on("blur", function() {
            $(this).parent(".input-group").removeClass("input-group-focus");
        });

        // remove class has-error for checkbox validation
        $('input[type="checkbox"][required="true"], input[type="radio"][required="true"]').on('click', function() {
            if ($(this).hasClass('error')) {
            $(this).closest('div').removeClass('has-error');
            }
        });

        });

        $(document).on('click', '.navbar-toggler', function() {
        $toggle = $(this);

        if (mobile_menu_visible == 1) {
            $('html').removeClass('nav-open');

            $('.close-layer').remove();
            setTimeout(function() {
            $toggle.removeClass('toggled');
            }, 400);

            mobile_menu_visible = 0;
        } else {
            setTimeout(function() {
            $toggle.addClass('toggled');
            }, 430);

            var $layer = $('<div class="close-layer"></div>');

            if ($('body').find('.main-panel').length != 0) {
            $layer.appendTo(".main-panel");

            } else if (($('body').hasClass('off-canvas-sidebar'))) {
            $layer.appendTo(".wrapper-full-page");
            }

            setTimeout(function() {
            $layer.addClass('visible');
            }, 100);

            $layer.click(function() {
            $('html').removeClass('nav-open');
            mobile_menu_visible = 0;

            $layer.removeClass('visible');

            setTimeout(function() {
                $layer.remove();
                $toggle.removeClass('toggled');

            }, 400);
            });

            $('html').addClass('nav-open');
            mobile_menu_visible = 1;

        }

        });

        // activate collapse right menu when the windows is resized
        $(window).resize(function() {
        md.initSidebarsCheck();

        // reset the seq for charts drawing animations
        seq = seq2 = 0;

        setTimeout(function() {
            md.initDashboardPageCharts();
        }, 500);
        });

        md = {
        misc: {
            navbar_menu_visible: 0,
            active_collapse: true,
            disabled_collapse_init: 0,
        },

        checkSidebarImage: function() {
            $sidebar = $('.sidebar');
            image_src = $sidebar.data('image');

            if (image_src !== undefined) {
            sidebar_container = '<div class="sidebar-background" style="background-image: url(' + image_src + ') "/>';
            $sidebar.append(sidebar_container);
            }
        },

        showNotification: function(from, align) {
            type = ['', 'info', 'danger', 'success', 'warning', 'rose', 'primary'];

            color = Math.floor((Math.random() * 6) + 1);

            $.notify({
            icon: "add_alert",
            message: "Welcome to <b>Material Dashboard Pro</b> - a beautiful admin panel for every web developer."

            }, {
            type: type[color],
            timer: 3000,
            placement: {
                from: from,
                align: align
            }
            });
        },

        initDocumentationCharts: function() {
            if ($('#categoryChart').length != 0 && $('#websiteViewsChart').length != 0) {
            /* ----------==========     Daily Sales Chart initialization For Documentation    ==========---------- */

            datacategoryChart = {
                labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
                series: [
                [12, 17, 7, 17, 23, 18, 38]
                ]
            };

            optionscategoryChart = {
                lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
                }),
                low: 0,
                high: 50, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
                chartPadding: {
                top: 0,
                right: 0,
                bottom: 0,
                left: 0
                },
            }

            var categoryChart = new Chartist.Line('#categoryChart', datacategoryChart, optionscategoryChart);

            var animationHeaderChart = new Chartist.Line('#websiteViewsChart', datacategoryChart, optionscategoryChart);
            }
        },


        initFormExtendedDatetimepickers: function() {
            $('.datetimepicker').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
            });

            $('.datepicker').datetimepicker({
            format: 'MM/DD/YYYY',
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
            });

            $('.timepicker').datetimepicker({
            //          format: 'H:mm',    // use this format if you want the 24hours timepicker
            format: 'h:mm A', //use this format if you want the 12hours timpiecker with AM/PM toggle
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'

            }
            });
        },


        initSliders: function() {
            // Sliders for demo purpose
            var slider = document.getElementById('sliderRegular');

            noUiSlider.create(slider, {
            start: 40,
            connect: [true, false],
            range: {
                min: 0,
                max: 100
            }
            });

            var slider2 = document.getElementById('sliderDouble');

            noUiSlider.create(slider2, {
            start: [20, 60],
            connect: true,
            range: {
                min: 0,
                max: 100
            }
            });
        },

        initSidebarsCheck: function() {
            if ($(window).width() <= 991) {
            if ($sidebar.length != 0) {
                md.initRightMenu();
            }
            }
        },

        checkFullPageBackgroundImage: function() {
            $page = $('.full-page');
            image_src = $page.data('image');

            if (image_src !== undefined) {
            image_container = '<div class="full-page-background" style="background-image: url(' + image_src + ') "/>'
            $page.append(image_container);
            }
        },

        initDashboardPageCharts: function() {

            if ($('#categoryChart').length != 0 || $('#completedTasksChart').length != 0 || $('#websiteViewsChart').length != 0) {
            /* ----------==========     Daily Sales Chart initialization    ==========---------- */

            datacategoryChart = {
                labels: [
                    @foreach ($categories as $data)
                        '{{ $data->name }}',
                    @endforeach
                ],
                series: [
                [7, 17, 7, 17, 7, 17]
                ]
            };

            optionscategoryChart = {
                lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
                }),
                low: 0,
                high: 50, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
                chartPadding: {
                top: 0,
                right: 0,
                bottom: 0,
                left: 0
                },
            }

            var categoryChart = new Chartist.Line('#categoryChart', datacategoryChart, optionscategoryChart);

            md.startAnimationForLineChart(categoryChart);



            /* ----------==========     Completed Tasks Chart initialization    ==========---------- */

            dataCompletedTasksChart = {
                labels: ['12p', '3p', '6p', '9p', '12p', '3a', '6a', '9a'],
                series: [
                [230, 750, 450, 300, 280, 240, 200, 190]
                ]
            };

            optionsCompletedTasksChart = {
                lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
                }),
                low: 0,
                high: 1000, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
                chartPadding: {
                top: 0,
                right: 0,
                bottom: 0,
                left: 0
                }
            }

            var completedTasksChart = new Chartist.Line('#completedTasksChart', dataCompletedTasksChart, optionsCompletedTasksChart);

            // start animation for the Completed Tasks Chart - Line Chart
            md.startAnimationForLineChart(completedTasksChart);


            /* ----------==========     Emails Subscription Chart initialization    ==========---------- */

            var dataWebsiteViewsChart = {
                labels: ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
                series: [
                [542, 443, 320, 780, 553, 453, 326, 434, 568, 610, 756, 895]

                ]
            };
            var optionsWebsiteViewsChart = {
                axisX: {
                showGrid: false
                },
                low: 0,
                high: 1000,
                chartPadding: {
                top: 0,
                right: 5,
                bottom: 0,
                left: 0
                }
            };
            var responsiveOptions = [
                ['screen and (max-width: 640px)', {
                seriesBarDistance: 5,
                axisX: {
                    labelInterpolationFnc: function(value) {
                    return value[0];
                    }
                }
                }]
            ];
            var websiteViewsChart = Chartist.Bar('#websiteViewsChart', dataWebsiteViewsChart, optionsWebsiteViewsChart, responsiveOptions);

            //start animation for the Emails Subscription Chart
            md.startAnimationForBarChart(websiteViewsChart);
            }
        },

        initMinimizeSidebar: function() {

            $('#minimizeSidebar').click(function() {
            var $btn = $(this);

            if (md.misc.sidebar_mini_active == true) {
                $('body').removeClass('sidebar-mini');
                md.misc.sidebar_mini_active = false;
            } else {
                $('body').addClass('sidebar-mini');
                md.misc.sidebar_mini_active = true;
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function() {
                window.dispatchEvent(new Event('resize'));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function() {
                clearInterval(simulateWindowResize);
            }, 1000);
            });
        },

        checkScrollForTransparentNavbar: debounce(function() {
            if ($(document).scrollTop() > 260) {
            if (transparent) {
                transparent = false;
                $('.navbar-color-on-scroll').removeClass('navbar-transparent');
            }
            } else {
            if (!transparent) {
                transparent = true;
                $('.navbar-color-on-scroll').addClass('navbar-transparent');
            }
            }
        }, 17),


        initRightMenu: debounce(function() {
            $sidebar_wrapper = $('.sidebar-wrapper');

            if (!mobile_menu_initialized) {
            $navbar = $('nav').find('.navbar-collapse').children('.navbar-nav');

            mobile_menu_content = '';

            nav_content = $navbar.html();

            nav_content = '<ul class="nav navbar-nav nav-mobile-menu">' + nav_content + '</ul>';

            navbar_form = $('nav').find('.navbar-form').get(0).outerHTML;

            $sidebar_nav = $sidebar_wrapper.find(' > .nav');

            // insert the navbar form before the sidebar list
            $nav_content = $(nav_content);
            $navbar_form = $(navbar_form);
            $nav_content.insertBefore($sidebar_nav);
            $navbar_form.insertBefore($nav_content);

            $(".sidebar-wrapper .dropdown .dropdown-menu > li > a").click(function(event) {
                event.stopPropagation();

            });

            // simulate resize so all the charts/maps will be redrawn
            window.dispatchEvent(new Event('resize'));

            mobile_menu_initialized = true;
            } else {
            if ($(window).width() > 991) {
                // reset all the additions that we made for the sidebar wrapper only if the screen is bigger than 991px
                $sidebar_wrapper.find('.navbar-form').remove();
                $sidebar_wrapper.find('.nav-mobile-menu').remove();

                mobile_menu_initialized = false;
            }
            }
        }, 200),

        startAnimationForLineChart: function(chart) {

            chart.on('draw', function(data) {
            if (data.type === 'line' || data.type === 'area') {
                data.element.animate({
                d: {
                    begin: 600,
                    dur: 700,
                    from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                    to: data.path.clone().stringify(),
                    easing: Chartist.Svg.Easing.easeOutQuint
                }
                });
            } else if (data.type === 'point') {
                seq++;
                data.element.animate({
                opacity: {
                    begin: seq * delays,
                    dur: durations,
                    from: 0,
                    to: 1,
                    easing: 'ease'
                }
                });
            }
            });

            seq = 0;
        },
        startAnimationForBarChart: function(chart) {

            chart.on('draw', function(data) {
            if (data.type === 'bar') {
                seq2++;
                data.element.animate({
                opacity: {
                    begin: seq2 * delays2,
                    dur: durations2,
                    from: 0,
                    to: 1,
                    easing: 'ease'
                }
                });
            }
            });

            seq2 = 0;
        },


        initFullCalendar: function() {
            $calendar = $('#fullCalendar');

            today = new Date();
            y = today.getFullYear();
            m = today.getMonth();
            d = today.getDate();

            $calendar.fullCalendar({
            viewRender: function(view, element) {
                // We make sure that we activate the perfect scrollbar when the view isn't on Month
                if (view.name != 'month') {
                $(element).find('.fc-scroller').perfectScrollbar();
                }
            },
            header: {
                left: 'title',
                center: 'month,agendaWeek,agendaDay',
                right: 'prev,next,today'
            },
            defaultDate: today,
            selectable: true,
            selectHelper: true,
            views: {
                month: { // name of view
                titleFormat: 'MMMM YYYY'
                // other view-specific options here
                },
                week: {
                titleFormat: " MMMM D YYYY"
                },
                day: {
                titleFormat: 'D MMM, YYYY'
                }
            },

            select: function(start, end) {

                // on select we show the Sweet Alert modal with an input
                swal({
                    title: 'Create an Event',
                    html: '<div class="form-group">' +
                    '<input class="form-control" placeholder="Event Title" id="input-field">' +
                    '</div>',
                    showCancelButton: true,
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false
                }).then(function(result) {

                    var eventData;
                    event_title = $('#input-field').val();

                    if (event_title) {
                    eventData = {
                        title: event_title,
                        start: start,
                        end: end
                    };
                    $calendar.fullCalendar('renderEvent', eventData, true); // stick? = true
                    }

                    $calendar.fullCalendar('unselect');

                })
                .catch(swal.noop);
            },
            editable: true,
            eventLimit: true, // allow "more" link when too many events


            // color classes: [ event-blue | event-azure | event-green | event-orange | event-red ]
            events: [{
                title: 'All Day Event',
                start: new Date(y, m, 1),
                className: 'event-default'
                },
                {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d - 4, 6, 0),
                allDay: false,
                className: 'event-rose'
                },
                {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d + 3, 6, 0),
                allDay: false,
                className: 'event-rose'
                },
                {
                title: 'Meeting',
                start: new Date(y, m, d - 1, 10, 30),
                allDay: false,
                className: 'event-green'
                },
                {
                title: 'Lunch',
                start: new Date(y, m, d + 7, 12, 0),
                end: new Date(y, m, d + 7, 14, 0),
                allDay: false,
                className: 'event-red'
                },
                {
                title: 'Md-pro Launch',
                start: new Date(y, m, d - 2, 12, 0),
                allDay: true,
                className: 'event-azure'
                },
                {
                title: 'Birthday Party',
                start: new Date(y, m, d + 1, 19, 0),
                end: new Date(y, m, d + 1, 22, 30),
                allDay: false,
                className: 'event-azure'
                },
                {
                title: 'Click for Creative Tim',
                start: new Date(y, m, 21),
                end: new Date(y, m, 22),
                url: 'http://www.creative-tim.com/',
                className: 'event-orange'
                },
                {
                title: 'Click for Google',
                start: new Date(y, m, 21),
                end: new Date(y, m, 22),
                url: 'http://www.creative-tim.com/',
                className: 'event-orange'
                }
            ]
            });
        },

        initVectorMap: function() {
            var mapData = {
            "AU": 760,
            "BR": 550,
            "CA": 120,
            "DE": 1300,
            "FR": 540,
            "GB": 690,
            "GE": 200,
            "IN": 200,
            "RO": 600,
            "RU": 300,
            "US": 2920,
            };

            $('#worldMap').vectorMap({
            map: 'world_mill_en',
            backgroundColor: "transparent",
            zoomOnScroll: false,
            regionStyle: {
                initial: {
                fill: '#e4e4e4',
                "fill-opacity": 0.9,
                stroke: 'none',
                "stroke-width": 0,
                "stroke-opacity": 0
                }
            },

            series: {
                regions: [{
                values: mapData,
                scale: ["#AAAAAA", "#444444"],
                normalizeFunction: 'polynomial'
                }]
            },
            });
        }
        }

        // Returns a function, that, as long as it continues to be invoked, will not
        // be triggered. The function will be called after it stops being called for
        // N milliseconds. If `immediate` is passed, trigger the function on the
        // leading edge, instead of the trailing.

        function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this,
            args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
            }, wait);
            if (immediate && !timeout) func.apply(context, args);
        };
        };
    </script>
@endpush

