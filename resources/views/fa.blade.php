@extends('master/layout')
@section('content')
    <style>

        .abc:hover{
            transform: translate(-6px,-6px);

        }
    </style>

    <body>
    <div class="text-center text-truncate mt-5">
        <h2 class="" style="font-weight: bold;font-family: serif;">F.A</h2>
        <hr style="width:12%;border-top:3px solid red;margin-left:590px" class="text-center  mt-5">
        <p class="mt-5 mb-5">

            F.A is the first qualification in Humanities. With a great range of subjects, its widely chosen by students<br> who want career in fine arts, Humanities and social sciences.</p>
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
                    <h3 class="mb-4 text-white ms-2">Compulsory Subjects</h3>
                    <ul class="text-white">
                        <li class="mb-2">Urdu</li>
                        <li class="mb-2">English</li>
                        <li class="mb-2">Islamiat (Part-I)</li>
                        <li class="mb-5">Pak. Studies (Part-II)</li>

                    </ul>
                </div>
            </div>
            <div class=" col-lg-3 center  mb-5 col-sm-3">
                <div class=" py-5 abc" style="background-color:#00bf9c;border-radius: 10px 10px ">
                    <h3 class="mb-4 text-white ms-2">Elective Subjects</h3>
                    <ul class="text-white">
                        <li class="mb-1">Civics</li>
                        <li class="mb-1">Phy. Education</li>
                        <li class="mb-1">Economics</li>
                        <li class="mb-1">Fine Arts</li>
                        <li class="mb-1">English Literature</li>
                        <li class="">Home Economics</li>
                        <li class="">Islamiyat Elective</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    </body>
@endsection
@section('title','F.A')
@section('nava','active')
