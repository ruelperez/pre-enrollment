@include('partial.header')

<div class="d-flex">
    <span style="font-size:30px;cursor:pointer; width: 5%; text-align: center;padding-top: 20px;" onclick="openNav()">&#9776; </span>
    <div class="container-fluid" style="background-color: white; height: 94px; margin-bottom: 30px;">
        <h2 style="color: white; margin-left: 38%; margin-top: 15px; position: absolute; font-style: italic"></h2>
        <img src="{{url('/image/aclc_logo.png')}}" style="width: 25%; height: 80px; margin-left: 33%;">
    </div>


</div>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div style=" height: 94px; width: 80%; padding-left: 10px; color: white;">
        <h5>{{ucwords(auth()->user()->name)}}</h5> <h6>Admin #{{auth()->user()->id}}</h6>
        <form action="/admin/logout" method="POST">
            @csrf
            <button style="border: none; background-color: black; color:white; padding: 0px;font-size: 13px;">Logout</button>
        </form>
{{--        <form method="POST" action="{{ route('admin/import') }}" enctype="multipart/form-data">--}}
{{--            @csrf--}}
{{--            <div class="form-group">--}}
{{--                <label for="csv_file">CSV File</label>--}}
{{--                <input type="file" name="csv_file" id="csv_file" class="form-control-file">--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn btn-primary">Import</button>--}}
{{--        </form>--}}
{{--        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">--}}
{{--            @csrf--}}
{{--            <input type="file" name="file">--}}
{{--            <button type="submit">Import CSV</button>--}}
{{--        </form>--}}
        <form action="import" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <button type="submit">Import</button>
        </form>


    </div>



</div>

    @livewire('show-subject')


<script type="text/javascript">
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

</script>

@include('partial.footer')
