@extends("layout.user.master_layout")

@section('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
        @font-face{
            font-family: 'Bazinga';
            font-style: normal;
            font-weight: 400;
            src: url('../fonts/Bazinga-Regular.ttf');
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

            .frame-width{
                width: 50%;
                height: auto;
            }

            .dialog-width{
                width: 25%;
                height: 50%;
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

        .mh-120vh{
            min-height: 120vh;
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
            <img class="position-absolute start-0 w-100 h-100" style="z-index:0;" src="{{ asset('images/talkshow/spiral-bg.png') }}" alt="pattern">
            <img class="position-absolute start-0 w-100 h-2" src="{{ asset('/images/workshop/base/Top.png') }}" alt="top">
            <img class="position-absolute bottom-0 w-100 h-2" src="{{ asset('/images/workshop/base/bottom.png') }}" alt="bottom">
        </section>

        <section class="position-relative text-center ptop-5 mw-100 mx-3">
            <div class="hero-title px-5 mb-2">
                <h1 class="text-white fs-4rem">TALKSHOW</h1>
            </div>
            <div class="mb-2 hero-title">
                <h1 class="text-white fs-4rem">....</h1>
            </div>
            <div class="text-center mx-3 title-content mx-auto">
                <p class="px-5 fw-semibold mb-5 text-white fs-5">Media promosi acara Young Journalist Award dan dokumentasi beberapa persiapan acara COMMPRESS 2023 yang dikemas menjadi video dengan 3 episode.</p>
            </div>
        </section>

        <div class="d-flex justify-content-center px-5 pb-5">
            <div class="position-relative mb-5">
                <a id="btn-daftar" href="#"><img class="w-max-50 w-100" src="{{ asset('/images/workshop/base/button.png') }}" alt="left inner">
                <p class="position-absolute start-50 top-50 translate-middle px-4 w-100 text-center fw-bold fs-3 text-black text-decoration-none" id="data">KESERUAN COMMPRESS TAHUN-TAHUN SEBELUMNYA..</p></a>
            </div>
        </div>

        <div class="position-relative">
            <div class="px-5 mw-100">
                <div class="row">
                    <div class="col d-flex align-items-center" style="z-index:2; width:50%;">
                        <img class="frame-width" src="{{ asset('/images/talkshow/frame-1.png') }}" alt="">
                        <img class="dialog-width" src="{{ asset('/images/talkshow/dialog-1.png') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-center justify-content-end" style="z-index:2;">
                        <img class="dialog-width" src="{{ asset('/images/talkshow/dialog-2.png') }}" alt="">
                        <img class="frame-width" src="{{ asset('/images/talkshow/frame-2.png') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-center" style="z-index:2; width:50%;">
                        <img class="frame-width" src="{{ asset('/images/talkshow/frame-1.png') }}" alt="">
                        <img class="dialog-width" src="{{ asset('/images/talkshow/dialog-3.png') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-center justify-content-end" style="z-index:2;">
                        <img class="dialog-width" src="{{ asset('/images/talkshow/dialog-4.png') }}" alt="">
                        <img class="frame-width" src="{{ asset('/images/talkshow/frame-2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection
