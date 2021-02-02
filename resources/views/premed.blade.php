@extends('master/layout')
@section('content')
    <style>

        .abc:hover{
            transform: translate(-6px,-6px);

        }
    </style>

    <body>
    <div class="text-center text-truncate mt-5">
        <h2 class="" style="font-weight: bold;font-family: serif;">FSc Pre-Medical</h2>
        <hr style="width:12%;border-top:3px solid red;margin-left:590px" class="text-center  mt-5">
        <p class="mt-5 mb-5">
            F.Sc Pre-Medical is first step of the amazing journey of a medical career. Future Doctors are made through<br> F.Sc Pre-Medical.We have state of the art labs, modern facilities and highly experienced teachers to set this<br>foundation.</p>
    </div>
    <hr class="mt-5">
    <div class="container mt-5">
        <h3  style="font-weight: bold;font-family: serif;">Eligibility</h3>
        <hr style="width:6%;border-top:3px solid red;">
        <p>Matric or equivalent</p>
        <p class="mt-5">ROAD MAP</p>
        <hr>
        <div class="row mt-4">
            <div class=" col-lg-3 col-sm-3 center mb-4  ">
                <div class=" py-5 abc" style="background-color:#00bf9c;border-radius: 10px 10px ">
                    <h3 class="mb-4 text-white ms-2">PART 1</h3>
                    <ul class="text-white">
                        <li class="mb-2">Urdu</li>
                        <li class="mb-2">English</li>
                        <li class="mb-2">Islamic Studies</li>
                        <li class="mb-2">Physics</li>
                        <li class="mb-2">Chemistry</li>
                        <li class="mb-2">Biology</li>
                    </ul>
                </div>
            </div>
            <div class=" col-lg-3 center  mb-5 col-sm-3">
                <div class=" py-5 abc" style="background-color:#00bf9c;border-radius: 10px 10px ">
                    <h3 class="mb-4 text-white ms-2">PART 2</h3>
                    <ul class="text-white">
                        <li class="mb-2">Urdu</li>
                        <li class="mb-2">English</li>
                        <li class="mb-2">Pakistan Studies</li>
                        <li class="mb-2">Physics</li>
                        <li class="mb-2">Chemistry</li>
                        <li class="mb-2">Biology</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>
@endsection
@section('title','FSc Pre-Medical')
@section('nava','active')
