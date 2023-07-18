@extends("layout.user.master_layout")

@section('styles')

@endsection

@section("contents")
<div class="container">
    <div class="sec1">
        <h1 class="d-flex justify-content-center align-items-center">WORKSHOP</h1>
        <p>Workshop akan menjadi kegiatan awal atau pembuka acara COMMPRESS 2023 yang akan digelar secara luring atau on site. 
            Dengan memaparkan materi dan praktik langsung, diharapkan workshop dapat memberikan informasi dan pengalaman mengolah 
            konten jurnalistik sesuai dengan kaidahnya kepada peserta workshop COMMPRESS 2023. Hasil dari praktik langsung workshop 
            COMMPRESS 2023 akan dipamerkan sebagai bentuk apresiasi sekaligus dinilai oleh para pengunjung pameran.</p><br>

        <p>Mengangkat tema besar modernisasi media, COMMPRESS 2023 akan menyajikan acara yang menunjukkan beragamnya karya 
            jurnalistik seturut berkembangnya teknologi dan zaman, salah satunya adalah komik jurnalistik digital. 
            Maka dari itu, workshop akan mengangkat topik komik jurnalistik digital yang nantinya akan menghadirkan dua 
            pembicara yang sudah diakui kompetensi dan kredibilitasnya pada bidang terkait.</p>
    </div>
    <div class="d-flex justify-content-center align-items-center"id="data"></div>
 
    <input type="hidden" id="time" value="{{  $time }}">
</div>

<div class="container">
    
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
