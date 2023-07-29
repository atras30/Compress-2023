@extends("layout.user.master_layout")

@section('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
        @font-face{
            font-family: 'Bazinga';
            font-style: normal;
            font-weight: 400;
            src: url('fonts/Bazinga-Regular.ttf');
        }
        .purple {
            background-color: #745AA1;
        }

        .green {
            background-color: #3395A9;
        }

        .spiral-bg {
            background-image: url('images/workshop/base/spiral-bright.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            /* background-attachment: fixed; */
        }

        .mh-90vh {
            min-height: 90vh;
        }

        .mh-100vh{
            min-height: 100vh;
        }

        .mw-100 {
        max-width: 80%;
        }

        .ptop-5 {
            padding-top: 5rem;
        }

        .h-2 {
            height: 2rem;
        }

        .w-max-3 {
            width: 3rem;
        }

        .h-max-10{
            height: 10rem;
        }

        .w-max-50{
            width: 50rem;
        }

        .w-max-21vw{
            width: 21vw;
        }

        .base-right{
            right: 1rem;
        }

        .base-left{
            left: 1rem;
        }

        .hero-title{
            font-family: Bazinga;
            text-shadow: 1px -2px 0 #000, 2px 4px 0 #000, 3px 6px 0 #000;
            -webkit-text-stroke: 2px #000;
            font-size: 500px;
        }

        .title-content{
            font-family: 'Inter', sans-serif;
            max-width: 80rem;
        }

        .fs-4rem{
            font-size: 4rem;
        }

        .timer{
            font-family: 'Inter', sans-serif;
        }

        .base-top-left{
            left: 2.4rem;
        }

        .w-max-95vw{
            width: 95vw;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
@endsection

@section("contents")
    <div class="main-content mh-90vh position-relative purple">
        <section class="h-100">
            <img class="position-absolute start-0 w-100 h-100" src="{{ asset('images/workshop/base/Pattern.png') }}" alt="pattern">
            <img class="position-absolute h-100 w-max-95vw" src="{{ asset('images/workshop/base/red-top-bottom.png') }}" alt="pattern">
            <img class="position-absolute base-top-left h-max-10 w-max-21vw" src="{{ asset('images/workshop/base/top-left.png') }}" alt="pattern">
            <img class="position-absolute end-0 bottom-0 h-max-10 w-max-21vw" src="{{ asset('images/workshop/base/bottom-right.png') }}" alt="pattern">
            <img class="position-absolute start-0 h-100 w-max-3" src="{{ asset('images/workshop/base/yellow-right.png') }}" alt="pattern">
            <img class="position-absolute end-0 h-100 w-max-3" src="{{ asset('images/workshop/base/blue-right.png') }}" alt="pattern">
            <img class="position-absolute base-left h-100 w-max-3" src="{{ asset('images/workshop/base/left.png') }}" alt="left">
            <img class="position-absolute base-right h-100 w-max-3" src="{{ asset('images/workshop/base/right.png') }}" alt="right">
            <img class="position-absolute start-0 w-100 h-2" src="{{ asset('/images/workshop/base/Top.png') }}" alt="top">
            <img class="position-absolute bottom-0 w-100 h-2" src="{{ asset('/images/workshop/base/bottom.png') }}" alt="bottom">
        </section>

        <section class="position-relative text-center ptop-5 mw-100 mx-3">
            <div class="hero-title px-5 mb-4">
                <h1 class="text-white fs-4rem">WORKSHOP</h1>
            </div>
            <div class="text-center mx-3 title-content mx-auto">
                <p class="px-5 fw-semibold mb-3 text-white">Workshop akan menjadi kegiatan awal atau pembuka acara COMMPRESS 2023 yang akan digelar secara luring atau on site. 
                    Dengan memaparkan materi dan praktik langsung, diharapkan workshop dapat memberikan informasi dan pengalaman mengolah 
                    konten jurnalistik sesuai dengan kaidahnya kepada peserta workshop COMMPRESS 2023. Hasil dari praktik langsung workshop 
                    COMMPRESS 2023 akan dipamerkan sebagai bentuk apresiasi sekaligus dinilai oleh para pengunjung pameran.</p><br>

                <p class="px-5 fw-semibold mb-5 text-white">Mengangkat tema besar modernisasi media, COMMPRESS 2023 akan menyajikan acara yang menunjukkan beragamnya karya 
                    jurnalistik seturut berkembangnya teknologi dan zaman, salah satunya adalah komik jurnalistik digital. 
                    Maka dari itu, workshop akan mengangkat topik komik jurnalistik digital yang nantinya akan menghadirkan dua 
                    pembicara yang sudah diakui kompetensi dan kredibilitasnya pada bidang terkait.</p>
            </div>
        </section>

        <div class="d-flex justify-content-center px-5 pb-5">
            <div class="position-relative">
                <img class="w-max-50 w-100" src="{{ asset('/images/workshop/base/button.png') }}" alt="left inner">
                <p class="position-absolute timer start-50 top-50 translate-middle px-4 w-100 text-center fw-bold fs-3" id="data"></p>
            </div>
        </div>
    </div>

    <div class="mh-100vh green spiral-bg position-relative d-flex justify-content-center align-items-center">
        <section class="h-100">
              <img class="position-absolute bottom-0 start-0 w-100 h-2" src="{{ asset('/images/workshop/base/bottom.png') }}" alt="bottom">
        </section>
        <section class="position-relative text-center ptop-5 mw-100">
            <div class="px-5 mb-4">
                <h1 class="fw-bold fs-4">FOTO ON PROGRESS DARI DOKUM</h1>
            </div>
        </section>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        const fetchData = async () => {
        const parsedDateRoute = "{{ route('time.diff') }}";

        const times = [
            "{{ $time }}",
        ];

        fetch(`${parsedDateRoute}?startDates=${times}`)
            .then(response => response.json())
            .then(response => {
            document.getElementById("data").textContent = response.parsedDates[0];
            });
        }

        fetchData();

        setInterval(() => {
        fetchData();
        }, 1000);
    </script>
@endsection
