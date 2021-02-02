@extends('master/layout')
@section('content')
    <body>
<div class="container-fluid" style="background-image: url({{asset('img/d3.jpg')}});height:550px">

</div>
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <h2>Vision</h2>
            <hr style="border: 2px solid red">
            <p class="mt-3">To become the first choice of students and a Superior educational institute of<br> Pakistan.</p>
        </div>
        <div class="col-sm-12 col-lg-6">
            <h2>Mission</h2>
            <hr style="border:2px solid red">
            <p class="mt-3">We are committed to transform the lives of students, faculty and staff by<br> providing them a Superior learning experience. Our plan EQ & IQ enables them to lead a meaningful & rewarding life.</p>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5">
    <h2 class="text-center">OUR VALUES</h2>
    <hr style="border: 2px solid green;">
    <p class="text-center">Student Success | Excellence | Innovation & Creativity | Team Work | Agility  | Fairness</p>
    <div class="row">
        <div class="col-sm-12 col-lg-2 text-center">
            <li class="fa fa-user-alt fa-4x mb-3" style="color: #990615"></li>
            <h6>Student Success</h6>
        </div>
        <div class="col-sm-12 col-lg-2 text-center">
            <li class="fa fa-thumbs-up fa-4x mb-3" style="color: #990615"></li>
            <h6>Excellence</h6>
        </div>
        <div class="col-sm-12 col-lg-2 text-center">
            <li class="fa fa-lightbulb fa-4x mb-3" style="color: #990615"></li>
            <h6>Innovation</h6>
        </div>
        <div class="col-sm-12 col-lg-2 text-center">
            <li class="fa fa-user-friends fa-4x mb-3" style="color: #990615"></li>
            <h6>Team Work</h6>
        </div>
        <div class="col-sm-12 col-lg-2 text-center">
            <li class="fa fa-magic fa-4x mb-3" style="color: #990615"></li>
            <h6>Agility</h6>
        </div>
        <div class="col-sm-12 col-lg-2 text-center">
            <li class="fa fa-star fa-4x mb-3" style="color: #990615"></li>
            <h6>Fairness</h6>
        </div>
    </div>

</div>
    </body>
@endsection
@section('title','mission')
@section('nava','active')
