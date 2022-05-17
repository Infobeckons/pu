<div class="wrapper">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<!-- Left navbar links -->
<ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
</ul>
    <!-- Primary Navigation Menu -->
            <div class="flex">
                <!-- Navigation Links -->
                <div class="nav-item d-none d-sm-inline-block">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" style="color:black;">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
                </div>

                <div class="nav-item d-none d-sm-inline-block">
                    <x-jet-nav-link href="{{ ('contact') }}" :active="request()->routeIs('contact')" style="color:black;">
                        {{ __('Contacts') }}
                    </x-jet-nav-link>
                </div>
            </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden-options" id="hidden-profile" width="100%" style="display:none;">
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="card-profile">
                <!-- Account Management -->
                <ul style="list-style: none;" class="ulist-profile">
                    <li class="list-profile">
                        <div class="button-text">
                            {{ __('Manage Account') }}

                        </div>
                    </li>
                    <li class="list-profile">
                        <a href="{{ route('profile.show') }}" class="profilelinks" :active="request()->routeIs('profile.show')">
                            <i class="fa fa-user" aria-hidden="true"></i>  {{ __('Profile') }}
                        </a>
                    </li>
                    <li class="list-profile">
                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <a href="{{ route('api-tokens.index') }}" class="profilelinks" :active="request()->routeIs('api-tokens.index')">
                                <i class="fa fa-key" aria-hidden="true"></i>  {{ __('API Tokens') }}
                            </a>
                        @endif
                    </li>
                    <li class="list-profile">
                        <!-- Authentication -->
                        <a href="{{ route('logout') }}" class="profilelinks">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }}

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="nav-item d-sm-inline-block">
        <!-- Settings Dropdown -->
        <div class="ml-3 relative">
            <x-jet-dropdown aligncontent="right">
                <x-slot name="content">
                    <!-- Account Management -->
                    <div class="button-text">
                        {{ __('Manage Account') }}
                    </div>
                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </x-jet-dropdown-link>
                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                            {{ __('API Tokens') }}
                        </x-jet-dropdown-link>
                    @endif
                    <div class="border-t border-gray-100"></div>
                        <!-- Authentication -->
                        <x-jet-dropdown-link href="{{ route('logout') }}">
                            {{ __('Logout') }}
                        </x-jet-dropdown-link>

                        </li>
                    </ul>
                </x-slot>
                <x-slot name="trigger">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    {{-- <div class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out"> --}}
                        <button class="profile-btn" id="clickbtn" name="clickbtn" onclick="show();">
                            <img class="profile-pic-pos" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                    {{-- </div> --}}
                    @else
                        <span class="inline-flex rounded-md">
                            <button type="button">
                                {{ Auth::user()->name }}
                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </span>
                    @endif
                </x-slot>
            </x-jet-dropdown>
        </div>
    </div>




<!-- Right navbar links -->
    <!-- Notifications Dropdown Menu -->
    <div class="fullscreen-div">
        <a class="nav-link-fullscreen" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
        </a>
    </div>
</nav>

<script>
    function show() {
  const x = document.getElementById("hidden-profile");
  if (x.style.display == "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
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
        <a href="{{'amount'}}" class="nav-link">
            <i class="nav-icon fas fa-rupee-sign"></i>
            <p>Amount</p>
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
            Contact
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
            <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ __('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('logout')}}">  {{ __('Logout')}}
                    {{-- <form class="logout" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Logout')}}
                                </a>
                            </form> --}}
                        </a>
                </li>
                </ol> -->
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
                <h3>{{$reg_user}}</h3>
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
                <h3>{{$success_reg}}</h3>
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
                <h3>{{$admin}}</h3>
                <p style="color:black;">User Registrations</p>
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
                <h3>
                <!-- @if(isset($visitor))
                   {{$visitor}}
                   @endif -->
                   10,004
                </h3>
                <p>Total Visitors</p>
                </div>
                <div class="icon">
                <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>

            </div>



