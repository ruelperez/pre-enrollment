@include('partial.header')
    <div style="display: flex; margin-left: 12%; margin-top: 180px; width: 100%;">
        <div style="margin-left: 8%; width: 30%; margin-top: 4%;">
            <img src="{{url('/image/1973813.png')}}" style="width: 100%; height: 130px; ">
        </div>

        @livewire('student-login')
    </div>

@include('partial.footer')
