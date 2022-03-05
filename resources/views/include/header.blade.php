
<div class="wrapper">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<!-- Left navbar links -->
<ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
    <a href="report" class="nav-link">Home</a>
    <label class="bottom-line"></label>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
    <a href="contact" class="nav-link">Contact</a>
    <label class="bottom-line"></label>
    </li>
</ul>

<!-- SEARCH FORM -->
<!-- <form class="form-inline ml-3" method="get" action="{{'search'}}">
    <div class="input-group input-group-sm">
    <input class="form-control form-control-navbar" type="search" name="search" placeholder="Search" aria-label="Search">
    <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
        <i class="fas fa-search"></i>
        </button>
    </div>
    </div>
</form> -->

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    
    <!-- Notifications Dropdown Menu -->
    
    <li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
    </a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
        </a>
    <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="http://localhost:8000/logout" onclick="event.preventDefault();
            this.closest('form').submit();">Logout</a>
    </li> -->
</ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<div class="logobar" height="60px" width="200px">
    <img src="dist/img/panjab-university-logo-1.jpg" height="50px" width="50px" style="margin:10px;" alt="PunjabUniversity Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light" style="color:#fff;"><b>PU-Admin_Block</b></span>
    </div>
<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    
    <!-- Sidebar Menu -->
    <nav class="mt-2 mb-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="{{'report'}}" class="nav-link">
                <i class="nav-icon fas fa-clipboard-list"></i>
                <p>
                Report
                <span class="right badge badge-danger">New</span>
                </p>
            </a>
            </li>
        <!-- <li class="nav-item">
        <a href="{{'welcome'}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
            Widgets
            </p>
        </a>
        </li> -->
        <li class="nav-item">
        <a href="{{'find'}}" class="nav-link">
            <i class="nav-icon fas fa-search"></i>
            <p>
            Find
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-pencil-ruler"></i>
            <p>
            Rules
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{'paintingcompitition'}}" class="nav-link">
                <p>Painting Competition</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{'collarge'}}" class="nav-link">
                <p>Collarge Making Competition</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{'dancing'}}" class="nav-link">
                <p>Dancing Competition</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{'fa_paint'}}" class="nav-link">
                <p>Face Painting Competition</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{'fe_dress'}}" class="nav-link">
                <p>Fancy Dress Competition</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{'fc'}}" class="nav-link">
                <p>Fashion Competition</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{'pcm'}}" class="nav-link">
                <p>Paint Competition(Mentally Chellenged)</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{'ptc'}}" class="nav-link">
                <p>Photography Competition</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{'pr'}}" class="nav-link">
                <p>Poetic Recitation</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{'rc'}}" class="nav-link">
                <p>Rangoli Competition</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{'rp&s'}}" class="nav-link">
                <p>Rose Prince and Rose Princess</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{'sing'}}" class="nav-link">
                <p>Singing Competition</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{'slog'}}" class="nav-link">
                <p>Slogan Writing Competition</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{'band'}}" class="nav-link">
                <p>Band Competition</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{'cmc'}}" class="nav-link">
                <p>Ceative Mehandi Competition</p>
            </a>
            </li>
        </ul>
        </li>
        <li class="nav-item">
        <a href="{{'registeration'}}" class="nav-link">
            <i class="nav-icon fas fa-registered"></i>
            <p>
            Registeration
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{'booking'}}" class="nav-link">
            <i class="nav-icon fas fa-bookmark"></i>
            <p>
            Booking of Stalls
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{'event'}}" class="nav-link">
            <i class="nav-icon fas fa-tasks"></i>
            <p>
            Event Schedule
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
            Gallery
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="pur-1" class="nav-link">
            <i class="nav-icon fas fa-award"></i>
                <p>1st PU Rose Festival</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="pur-2" class="nav-link">
            <i class="nav-icon fas fa-award"></i>
                <p>2nd PU Rose Festival</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="pur-3" class="nav-link">
            <i class="nav-icon fas fa-award"></i>
                <p>3rd PU Rose Festival</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="pur-4" class="nav-link">
            <i class="nav-icon fas fa-award"></i>
                <p>4th PU Rose Festival</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="pur-5" class="nav-link">
            <i class="nav-icon fas fa-award"></i>
                <p>5th PU Rose Festival</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="pur-6" class="nav-link">
            <i class="nav-icon fas fa-award"></i>
                <p>6th PU Rose Festival</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="pur-7" class="nav-link">
            <i class="nav-icon fas fa-award"></i>
                <p>7th PU Rose Festival</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="pur-8" class="nav-link">
            <i class="nav-icon fas fa-award"></i>
                <p>8th PU Rose Festival</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="pur-9" class="nav-link">
            <i class="nav-icon fas fa-award"></i>
                <p>9th PU Rose Festival</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="pur-10" class="nav-link">
            <i class="nav-icon fas fa-award"></i>
                <p>10th PU Rose Festival</p>
            </a>
            </li>
        </ul>
        </li>
        <li class="nav-item">
        <a href="{{'contact'}}" class="nav-link">
        <i class="nav-icon fas fa-address-book"></i>
            <p>
            Contect
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-poll-h"></i>
            <p>
            Result
            <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{'result'}}" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>Result 2021</p>
            </a>
        </li>
        </ul>
    </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon far fa-file"></i>
            <p>
            Page
            <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{'p_home'}}" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
                <p>Home Page</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{'p_about'}}" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
                <p>About us</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{'p_header'}}" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
                <p>Header</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{'p_event'}}" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
                <p>Event Rules Title</p>
            </a>
            </li>
        </ul>
        </li>
        
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ __('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a><form class="logout" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Logout')}}
                                </a>
                            </form></a>
                </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                <h3>5</h3>
                <p>Total Registeration</p>
                </div>
                <div class="icon">
                <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                <h3>5</h3>
              
                <p>Success Registeration</p>
                </div>
                <div class="icon">
                <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                <h3>44</h3>
                <p>User Registrations</p>
                </div>
                <div class="icon">
                <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                <h3>10,008</h3>
                <p>Total Visitors</p>
                </div>
                <div class="icon">
                <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>

            

