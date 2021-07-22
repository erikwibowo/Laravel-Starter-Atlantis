<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>{{ $title." - ".ENV('APP_NAME') }}</title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <link rel="icon" href="{{ asset('template/admin/assets/img/icon.ico') }}" type="image/x-icon"/>

        <!-- Fonts and icons -->
        <script src="{{ asset('template/admin/assets/js/plugin/webfont/webfont.min.js') }}"></script>
        <script>
            WebFont.load({
                google: {"families":["Lato:300,400,700,900"]},
                custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('template/admin/assets/css/fonts.min.css') }}']},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>

        <!-- CSS Files -->
        <link rel="stylesheet" href="{{ asset('template/admin/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/admin/assets/css/atlantis.css') }}">

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link rel="stylesheet" href="{{ asset('template/admin/assets/css/demo.css') }}">
    </head>
    <body>
        <div class="wrapper">
            @include('admin.layouts.header')
            <!-- Sidebar -->
            @include('admin.layouts.sidebar')
            <!-- End Sidebar -->

            <div class="main-panel">
                @yield('content')
                @include('admin.layouts.footer')
            </div>
            <!-- Custom template | don't include it in your project! -->
            {{-- @include('admin.layouts.custom') --}}
            <!-- End Custom template -->
            {{-- Modal --}}
            <div class="modal fade" id="modal-logout" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Keluar?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah anda yakin akan keluar?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            <a href="{{ route('admin.logout') }}" type="button" class="btn btn-danger">Ya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="modal-loading" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Sedang memuat data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <center>
                                <img src="{{ asset('loading.gif') }}" alt="Loading gif" width="20%">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End of modal --}}
            @yield('modal')
        </div>
        <!--   Core JS Files   -->
        <script src="{{ asset('template/admin/assets/js/core/jquery.3.2.1.min.js') }}"></script>
        <script src="{{ asset('template/admin/assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('template/admin/assets/js/core/bootstrap.min.js') }}"></script>
        @yield('js')
        <!-- jQuery UI -->
        <script src="{{ asset('template/admin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('template/admin/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

        <!-- jQuery Scrollbar -->
        <script src="{{ asset('template/admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

        <!-- Moment JS -->
        <script src="{{ asset('template/admin/assets/js/plugin/moment/moment.min.js') }}"></script>

        <!-- Chart JS -->
        <script src="{{ asset('template/admin/assets/js/plugin/chart.js/chart.min.js') }}"></script>

        <!-- jQuery Sparkline -->
        <script src="{{ asset('template/admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- Chart Circle -->
        <script src="{{ asset('template/admin/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

        <!-- Datatables -->
        <script src="{{ asset('template/admin/assets/js/plugin/datatables/datatables.min.js') }}"></script>

        <!-- Bootstrap Notify -->
        <script src="{{ asset('template/admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

        <!-- Bootstrap Toggle -->
        <script src="{{ asset('template/admin/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>

        <!-- jQuery Vector Maps -->
        <script src="{{ asset('template/admin/assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('template/admin/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

        <!-- Google Maps Plugin -->
        <script src="{{ asset('template/admin/assets/js/plugin/gmaps/gmaps.js') }}"></script>

        <!-- Dropzone -->
        <script src="{{ asset('template/admin/assets/js/plugin/dropzone/dropzone.min.js') }}"></script>

        <!-- Fullcalendar -->
        <script src="{{ asset('template/admin/assets/js/plugin/fullcalendar/fullcalendar.min.js') }}"></script>

        <!-- DateTimePicker -->
        <script src="{{ asset('template/admin/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js') }}"></script>

        <!-- Bootstrap Tagsinput -->
        <script src="{{ asset('template/admin/assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>

        <!-- Bootstrap Wizard -->
        <script src="{{ asset('template/admin/assets/js/plugin/bootstrap-wizard/bootstrapwizard.js') }}"></script>

        <!-- jQuery Validation -->
        <script src="{{ asset('template/admin/assets/js/plugin/jquery.validate/jquery.validate.min.js') }}"></script>

        <!-- Summernote -->
        <script src="{{ asset('template/admin/assets/js/plugin/summernote/summernote-bs4.min.js') }}"></script>

        <!-- Select2 -->
        <script src="{{ asset('template/admin/assets/js/plugin/select2/select2.full.min.js') }}"></script>

        <!-- Sweet Alert -->
        <script src="{{ asset('template/admin/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

        <!-- Owl Carousel -->
        <script src="{{ asset('template/admin/assets/js/plugin/owl-carousel/owl.carousel.min.js') }}"></script>

        <!-- Magnific Popup -->
        <script src="{{ asset('template/admin/assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js') }}"></script>

        <!-- Atlantis JS -->
        <script src="{{ asset('template/admin/assets/js/atlantis.min.js') }}"></script>

        <!-- Atlantis DEMO methods, don't include it in your project! -->
        <script src="{{ asset('template/admin/assets/js/setting-demo.js') }}"></script>
        <script>
            $('.datatable').DataTable();
        </script>
        @if (session('notif'))
            @if (session('type') == 'success')
                <script>
                    $.notify({
                        icon: 'flaticon-alarm-1',
                        title: 'Pemberitahuan',
                        message: '{{ session('notif') }}',
                    },{
                        type: 'success',
                        placement: {
                            from: "top",
                            align: "right"
                        },
                        time: 5000,
                    });
                </script>
            @else
                <script>
                    $.notify({
                        icon: 'flaticon-alarm-1',
                        title: 'Pemberitahuan',
                        message: '{{ session('notif') }}',
                    },{
                        type: 'error',
                        placement: {
                            from: "top",
                            align: "right"
                        },
                        time: 1000,
                    });
                </script>
            @endif
        @endif
        @if (!$errors->isEmpty())
            <script>
                $.notify({
                    icon: 'flaticon-alarm-1',
                    title: 'Pemberitahuan',
                    message: '{{ implode(' ', $errors->all()) }}',
                },{
                    type: 'danger',
                    placement: {
                        from: "top",
                        align: "right"
                    },
                    time: 5000,
                });
            </script>
        @endif
    </body>
</html>