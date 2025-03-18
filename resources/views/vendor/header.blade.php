@if(session()->has('vendor_id'))
    
@else 
<script>window.location = "{{URL::to('/vendor')}}"</script>
@endif
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('logo/logo.png') }}">
    <title>YES</title>
    <!-- Custom CSS -->
    <link href="{{asset('admin/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css"  href="https://cdn.datatables.net/buttons/1.4.0/css/buttons.dataTables.min.css" />
        
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('admin/assets/extra-libs/multicheck/multicheck.css') }}">
    <link href="{{ URL::asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('admin/assets/libs/select2/dist/css/select2.min.css') }}">
    <link href="{{ URL::asset('admin/dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/editors/editor.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        
    <style type="text/css">
        i.fa.fa-times,i.fa.fa-edit,i.fa.fa-toggle-on,i.fa.fa-toggle-off,i.fa.fa-plus,i.fa.fa-eye,i.fa.fa-image,i.fa.fa-trash{
            border: 1px solid white;
            padding: 4px;
            margin: 1px 1px 1px 1px;
            cursor: pointer;
            color:#fff;
        }
        i.fa.fa-toggle-on{
            color: green;
        }
        #main-wrapper .left-sidebar[data-sidebarbg=skin5], #main-wrapper .left-sidebar[data-sidebarbg=skin5] ul {
            background: #80f9b7;
        }
        
        /*.card*/
        /*{*/
        /*    border-radius:10px;*/
        /*}*/
        
        /*.card .card-body*/
        /*{*/
        /*    background: linear-gradient(180deg, #0d4683, black);*/
        /*    box-shadow: 0px 5px 17px 5px #000;*/
        /*    border-radius: 10px;*/
        /*    color:#fff;*/
        /*}*/
        
        /*.card.card-hover*/
        /*{*/
        /*    box-shadow: 0px 3px 10px 5px #0e4785;*/
        /*    border-radius: 10px;*/
        /*}*/
        
        /*.box*/
        /*{*/
        /*    border-radius:10px;*/
        /*    background-color: #082748f2!important;*/
        /*}*/
        
        /*.note-editing-area .note-editable */
        /*{*/
        /*    background:#fff;*/
        /*}*/
        
        /*.note-editor.note-airframe .note-statusbar .note-resizebar, .note-editor.note-frame .note-statusbar .note-resizebar */
        /*{*/
        /*    display:none;*/
        /*}*/
        
        /*.dropzone, .note-editor.note-frame */
        /*{*/
        /*    border-color: #00000000;*/
        /*}*/
        
        /*.table-striped tbody tr:nth-of-type(odd) */
        /*{*/
        /*    background-color: rgb(12 66 123 / 0%);*/
        /*}*/
        
        /*table.dataTable tbody tr */
        /*{*/
        /*    background-color: #0000005e;*/
        /*}*/
        
        /*table*/
        /*{*/
        /*    color:#fff;*/
        /*}*/
        
        /*.table-bordered {*/
        /*     border: none; */
        /*}*/
        
        /*.table-bordered td, .table-bordered th */
        /*{*/
        /*    border: 1px solid #0b243eb8;*/
        /*}*/
        
        /*thead*/
        /*{*/
        /*    background:#000;*/
        /*}*/
        
        /*label */
        /*{*/
        /*    color: #fff;*/
        /*}*/
        
        /*.dataTables_info {*/
        /*    color: #fff!important;*/
        /*}*/
    </style>
    <style>
        .sidebar-nav ul .sidebar-item.selected>.sidebar-link {
            background: linear-gradient(358deg, #80f9b7, #9abdeb);
            opacity: 1;
        }
        span.hide-menu {
            color: #000!important;
        }
        i.mdi {
            color: #000!important;
        }
    </style>
</head>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5" style="background:#88e6c7">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <center>
                        <a class="navbar-brand" href="index.html">
                            <span class="logo-text" style="width:100%">
                                 <img src="{{ URL::asset('logo/logo.png') }}" alt="homepage" class="light-logo" style="width:170px;" />
                            </span>
                        </a>
                    </center>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5" style="background: linear-gradient(358deg, #9abdeb, #80f9b7)!important;">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                             <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> -->
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                            </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> -->
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                     
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('admin/assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="{{URL::to('vendor/vendor-profile')}}"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="{{URL::to('vendor/logout')}}"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->