@extends('master.layout')
@section('content')
<body>
<div style="background-color: #a81103" class="p-4">
    <h1 class="text-center text-truncate text-white" style="font-weight: bold;">CONTACT US</h1>
</div>
<div  class="container p-5" style="background-color: #fafffe;margin-top:25px">
    @if(session()->has('save'))
        <div class="alert alert-success my-5">
            {{session()->get('save')}}
            <button class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif
    <form method="post" action="/contact">
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <h2 style="font-weight: bold;">Contact Us</h2>
            <hr style="border:2px solid #ad180a; width:20%     ">
            <div class="row ">

                <div class="col-6 mt-3">
                    <label style="font-weight: bold;" class="mb-2">First Name</label>
                    <input type="text" placeholder="first name.." class="form-control @error('fname')is-invalid @enderror" name="fname" value="{{old('fname')}}">
                </div>
                <div class="col-6 mt-3">
                    <label style="font-weight: bold;" class="mb-2">Last Name</label>
                    <input type="text" placeholder="last name.." class="form-control @error('lname')is-invalid @enderror" name="lname" value="{{old('lname')}}">
                </div>
                <div class="col-12 mt-3">
                    <label style="font-weight: bold;" class="mb-2">Email</label>
                    <input type="text" placeholder="Enter Email Address" class="form-control @error('email')is-invalid @enderror" name="email" value="{{old('email')}}">
                </div>
                <div class="col-12 mt-3">
                    <label style="font-weight: bold;" class="mb-2">Comment or Message </label>
                    <textarea class="form-control @error('remarks')is-invalid @enderror" placeholder="Type Message..." style="resize: none;" rows="5" name="remarks" >{{old('remarks')}}</textarea>
                </div>
                    <button class="btn btn-success mt-3 ml-4">Submit</button>
                    @csrf


            </div>
        </div>


        <div class="col-sm-12 col-lg-6 d-flex justify-content-center text-truncate flex-column align-items-center mt-5">
            <h6 class="mb-4">Phone: 042-111-00-00-78</h6>
            <h6 class="mb-4">Email: info@superiorcolleges.edu.pk</h6>
            <h6 class="mb-5">Superior Group Corporate Office 44-L <br>Gulberg 3</h6>
            <h3 class="mb-4">NEED HELP? CALL OUR HOT LINE</h3>
            <h1>111-00-00-78</h1>
        </div>

    </div>
    </form>
</div>
</body>
@endsection
@section('title','Contact_us')
@section('nava','active')
