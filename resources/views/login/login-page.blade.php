@include('partial.header')
    <div style="display: flex; margin-top: 180px; width: 100%;">
        <div style="margin-left: 8%; width: 30%; margin-top: 4%;">
            <img src="{{url('/image/aclc_logo.png')}}" style="width: 100%; height: 130px; ">
        </div>

        @livewire('login-page')
        @livewire('admin-login')
    </div>

@include('partial.footer')