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

        @media(max-width:520px){
            .fotokanan{
                margin-top:5rem!important;
            }
        }

        @media(max-width:1050px){
            .textatas{
                margin-top:3.5rem!important;
            }
            .textbawah{
                margin-top:8rem!important;
            }
        }

        @media(max-width:642px){
            .textatas{
                margin-top:5rem!important;
                margin-left:2rem!important;
            }
            .textbawah{
                margin-top:5rem!important;
                margin-left:1rem!important;
            }
        }

        @media(max-width:495px){
            .textatas{
                margin-left:2rem!important;
            }
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
            padding-top: 10rem;
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
            <div class="hero-title px-5 mb-5">
                <h1 class="text-white fs-4rem">TALKSHOW</h1>
            </div>
            <div class="text-center mx-3 title-content mx-auto">
                <p class="px-5 fw-semibold mb-5 text-white fs-5">Talkshow menjadi kegiatan pembuka acara COMMPRESS 2023 yang akan digelar secara luring. Pembahasan bertemakan Pemilihan Umum 2024 
                    dan proses pengecekan informasi pada masa Pemilu menjadi titik berat dalam acara ini sebab akan diulas bersama dengan narasumber pilihan yang kredibel. 
                    Bersamaan dengan itu, Talkshow juga akan mengumumkan para pemenang lomba jurnalistik COMMPRESS 2023 sebelum karyanya dipamerkan di pameran Ruang Indi(e)penden.</p><br>

            </div>
        </section>

        <div class="d-flex justify-content-center px-5 pb-5">
            <div class="position-relative">
                <a id="btn-daftar" href="#"><img class="w-max-50 w-100" src="{{ asset('/images/workshop/base/button.png') }}" alt="left inner">
                <p class="position-absolute timer start-50 top-50 translate-middle px-4 w-100 text-center fw-bold fs-2 text-black text-decoration-none" id="data"></p></a>
            </div>
        </div>
    </div>

    <div class="mh-100vh green spiral-bg position-relative d-flex justify-content-center align-items-center">
        <section class="h-100">
              <img class="position-absolute bottom-0 start-0 w-100 h-2" src="{{ asset('/images/workshop/base/bottom.png') }}" alt="bottom">
        </section>
        <section class="position-relative">
            <div class="px-5 mw-100">
                <div class="row">
                    <div class="col"style="">
                        <div class="row">
                            <img class="" style="width:700px" src="{{ asset('/images/workshop/fotokiriatas.png') }}" alt="bottom">
                        </div>
                        <div class="row pt-5">
                            <img class="position-relative" style="width:700px z-index:1;" src="{{ asset('/images/workshop/fotokiribawah.png') }}" alt="bottom">
                            <img class="textbawah position-absolute" style="z-index:2; width:40%; margin-top:12rem;margin-left:4rem;" src="{{ asset('/images/workshop/textbawah.png') }}" alt="bottom">
                        </div>
                    </div>
                    <div class="col" style="mind-width:100rem;">
                        <img class="textatas position-absolute" style="z-index:2; width:25%; margin-left:4rem;" src="{{ asset('/images/workshop/textatas.png') }}" alt="bottom">
                        <img class="fotokanan position-relative" style="z-index:1; width:100%; margin-top:150px; margin-left:20px;" src="{{ asset('/images/workshop/fotokanan.png') }}" alt="bottom">
                    </div>
                </div>
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
            if(document.getElementById("data").textContent.match("00 Days, 00:00:00")){
                document.getElementById("data").innerHTML = "To Be Announce";
                document.getElementById("btn-daftar").href = "#";
            }
            });
        }

        fetchData();

        setInterval(() => {
        fetchData();
        }, 1000);
    </script>
@endsection
