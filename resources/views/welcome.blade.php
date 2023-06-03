<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="{{ asset('image/icon.jpg') }}">
    <title>ÀPES - Welcome Page</title>
</head>
<body class="body-home">
<nav>
    <div class="nav-bar">
        <i class='bx bx-menu sidebarOpen' ></i>
        <span class="logo navLogo"><a href="https://www.facebook.com/ACLCCollegeIRIGA">  <img src="{{ asset('image/aclc_logo.png') }}" style="width: 200px" > </a></span>

        <div class="menu">
            <div class="logo-toggle">
                <span class="logo"><a href="#">ACLC Pre-Erollment System</a></span>
                <i class='bx bx-x siderbarClose'></i>
            </div>

            <ul class="nav-links">
                <li><a href="{{ url('/') }}">Home</a></li>
{{--                <li><a href="{{ url('/about') }}">About</a></li>--}}
                <li><a href="{{ route('login') }}">Login</a></li>

            </ul>
        </div>

        <div class="darkLight-searchBox">
            <div class="dark-light">
                <i class='bx bx-moon moon'></i>
                <i class='bx bx-sun sun'></i>
            </div>

            <div class="searchBox">
                <div class="searchToggle">
{{--                    <i class='bx bx-x cancel'></i>--}}
{{--                    <i class='bx bx-search search'></i>--}}
                </div>

                <div class="search-field">
{{--                    <input type="text" placeholder="Search...">--}}
{{--                    <i class='bx bx-search'></i>--}}
                </div>
            </div>
        </div>
    </div>
</nav>

<script>

    const body = document.querySelector("body"),
        nav = document.querySelector("nav"),
        modeToggle = document.querySelector(".dark-light"),
        searchToggle = document.querySelector(".searchToggle"),
        sidebarOpen = document.querySelector(".sidebarOpen"),
        siderbarClose = document.querySelector(".siderbarClose");

    let getMode = localStorage.getItem("mode");
    if(getMode && getMode === "dark-mode"){
        body.classList.add("dark");
    }

    // js code to toggle dark and light mode
    modeToggle.addEventListener("click" , () =>{
        modeToggle.classList.toggle("active");
        body.classList.toggle("dark");

        // js code to keep user selected mode even page refresh or file reopen
        if(!body.classList.contains("dark")){
            localStorage.setItem("mode" , "light-mode");
        }else{
            localStorage.setItem("mode" , "dark-mode");
        }
    });

    // js code to toggle search box
    searchToggle.addEventListener("click" , () =>{
        searchToggle.classList.toggle("active");
    });


    //   js code to toggle sidebar
    sidebarOpen.addEventListener("click" , () =>{
        nav.classList.add("active");
    });

    body.addEventListener("click" , e =>{
        let clickedElm = e.target;

        if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
            nav.classList.remove("active");
        }
    });

</script>

<div class="d-flex">
    <span style="font-size:30px;cursor:pointer; width: 5%; text-align: center;padding-top: 20px;" onclick="openNav()">&#9776; </span>
    <div class="container-fluid" style="background-color: transparent; height: 94px; margin-bottom: 30px;">
{{--                <h2 style="color: transparent; margin-left: 38%; margin-top: 15px; position: absolute; font-style: italic"></h2>--}}
{{--                <img src="{{url('/image/aclc_logo.png')}}" style="width: 25%; height: 80px; margin-left: 33%;">--}}
    </div>
</div>

<div class="welcome-text d-flex justify-content-center align-items-center flex-column" style="text-align: center; color: #001aff;">
    <img src="{{ asset('image/transparent.png') }}" style="width: 500px; outline-color: #001aff " >

    <h4 style="font-size: 50px;  font-family: 'sans-serif'">ACLC College of Iriga, Inc.</h4>
{{--    <p style="font-size: 20px; color: transparent"> hidden </p>--}}
{{--    <p style="font-size: 25px; font-family: 'sans-serif'">is a member of the AMA Education System and is one of the leading computer schools in the country.</p>--}}
    <h6 style="font-size: 50px;  font-family: 'sans-serif'">Pre-Enrollment Sytem</h6>
</div>
</body>

<footer class="main-footer text-sm" >
    <a href="https://www.facebook.com/ACLCCollegeIRIGA" target="_blank">
        <img style="margin-top: 30%; margin-left: 5%;" src="{{ asset('image/fbicon.png') }}" alt="Facebook" width="75" height="75" class="facebook-icon">

    </a>
    <span class="follow-text" style="font-size: 16px; color: #008aff; margin-left: 5px;">Message us on Facebook</span>

</footer>



</html>

@include('footer')

