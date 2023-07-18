@extends("layout.user.master_layout")

@section('styles')
@endsection

@section('contents')
<div class="container">
    <h1 class="d-flex justify-content-center align-items-center">YOUNG JOURNALIST AWARD</h1>
    <p>Young Journalist Award (YJA) hadir sebagai puncak sekaligus penutup rangkaian acara COMMPRESS. 
        Acara terakhir ini dihadirkan sebagai bentuk apresiasi atas kontribusi peserta COMMPRESS 2023 dan 
        Ruang Indi(e)penden 2023. Pada acara puncak ini, COMMPRESS 2023 akan memberikan apresiasi peserta 
        dengan memberikan hadiah kepada para pemenang lomba dan karya terbaik. Tidak lupa, COMMPRESS 2023 menyajikan 
        penampilan guest star sebagai penutup rangkaian acara Young Journalist Award COMMPRESS 2023.</p>
    <div class="d-flex justify-content-center align-items-center"id="data"></div>
 
    <input type="hidden" id="time" value="{{  $time }}">
</div>
    
@endsection

@section('scripts')
<script>
        function func() {
            var dateValue = document.getElementById("time").value;
    
            var date = Math.abs((new Date().getTime() / 1000).toFixed(0));
            var date2 = Math.abs((new Date(dateValue).getTime() / 1000).toFixed(0));
    
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

