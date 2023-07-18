@extends("layout.user.master_layout")

@section('styles')
@endsection

@section('contents')
<div class="container">
    <div class="sec1">
        <h1>ROAD TO YOUNG JOURNALIST AWARD</h1>
        <p>Media promosi acara Young Journalist Award dan dokumentasi beberapa persiapan acara 
            COMMPRESS 2023 yang dikemas menjadi video dengan 3 episode.</p>
    </div>
    <div class="sec2">
        <div class="row">
            <div class="col">
                <h3>EPS.1</h3>
                <div id="data"></div>
                <input type="hidden" id="eps1" value="{{  $eps1 }}">
            </div>
            <div class="col">
                <h3>EPS.2</h3>
                <div id="data"></div>
                <input type="hidden" id="eps2" value="{{  $eps2 }}">
            </div>
            <div class="col">
                <h3>EPS.3</h3>
                <div id="data"></div>
                <input type="hidden" id="eps3" value="{{  $eps3 }}">
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        function func() {
            var dateValue1 = document.getElementById("eps1").value;
            var dateValue2 = document.getElementById("eps2").value;
            var dateValue3 = document.getElementById("eps3").value;

    
            var date = Math.abs((new Date().getTime() / 1000).toFixed(0));
            var date2 = Math.abs((new Date(dateValue1).getTime() / 1000).toFixed(0));
            var date3 = Math.abs((new Date(dateValue2).getTime() / 1000).toFixed(0));
            var date4 = Math.abs((new Date(dateValue3).getTime() / 1000).toFixed(0));
            
    
            var diff = date2 - date;
    
            var days = Math.floor(diff / 86400);
            var hours = Math.floor(diff / 3600) % 24;
            var minutes = Math.floor(diff / 60) % 60;
            var seconds = diff % 60;
    
            var daysStr = days;
            if (days < 10) {
                daysStr = "0" + days;
            }
    
            var hoursStr = hours;
            if (hours < 10) {
                hoursStr = "0" + hours;
            }
    
            var minutesStr = minutes;
            if (minutes < 10) {
                minutesStr = "0" + minutes;
            }
    
            var secondsStr = seconds;
            if (seconds < 10) {
                secondsStr = "0" + seconds;
            }
    
            if (days < 0 && hours < 0 && minutes < 0 && seconds < 0) {
                daysStr = "00";
                hoursStr = "00";
                minutesStr = "00";
                secondsStr = "00";
    
                console.log("close");
                if (typeof interval !== "undefined") {
                    clearInterval(interval);
                }
            }
    
            document.getElementById("data").innerHTML = daysStr + " days, " + hoursStr + ":" + minutesStr + ":" + secondsStr;
        }
    
        func();
        var interval = setInterval(func, 1000);
    </script>
@endsection