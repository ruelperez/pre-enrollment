<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>ÀCLC Pre-enrollment system</title>
</head>
<body>
<nav>
    <div class="nav-bar">
        <i class='bx bx-menu sidebarOpen' ></i>
        <span class="logo navLogo"><a href="{{url('/admin/home')}}">  <img src="{{ asset('image/aclc_logo.png') }}" style="width: 200px" > </a></span>

        <div class="menu">
            <div class="logo-toggle">
                <span class="logo"><a href="{{url('/admin/home')}}">ACLC Pre-Erollment System</a></span>
                <i class='bx bx-x siderbarClose'></i>
            </div>

            <ul class="nav-links">
                <li><a href="{{url('/admin/home')}}">Home</a></li>
{{--                <li><a href="{{url('/admin/about')}}">About</a></li>--}}
                <li><a href="{{url('/admin/new-student')}}">New Student Info</a></li>
                <li><a href="{{url('/admin/student-info')}}">Student Info</a></li>
                <form action="/admin/logout" method="POST">
                    @csrf
                    <button style="border: none; background-color: transparent; color:white; padding: 0px;font-size: 18px;">Logout</button>
                </form>

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

</body>
</html>
@include('footer')
