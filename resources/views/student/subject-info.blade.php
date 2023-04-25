@include('partial.header')

<div class="d-flex">
    <div class="container-fluid" style="background-color: white; height: 94px; margin-bottom: 30px;">
        <h2 style="color: white; margin-left: 38%; margin-top: 15px; position: absolute; font-style: italic"></h2>
        <img src="{{url('/image/1973813.png')}}" style="width: 25%; height: 80px; margin-left: 33%;">
    </div>
</div>

@livewire('subject-info')


<script type="text/javascript">
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

</script>

@include('partial.footer')
