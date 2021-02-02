
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
<title>Admission Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/9ddc0bba90.js" crossorigin="anonymous"></script>
</head>
<body style="background-color:#dee3e2">
<div class="cintainer-fluid fixed-top mb-5" style="background-color:#07f0b9">
    <img src="{{asset('img/log.png')}}" class="img-fluid ml-4  p-2" style="width:15%">
</div>
<div class="container p-2" style="background-color: #fafffe;margin-top:90px">
    @if(session()->has('save'))
        <div class="alert alert-success my-5">
            {{session()->get('save')}}
            <button class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif
    <h4 style="background-color:#1482db" class="text-truncate text-center text-white p-3">Leads-College Form</h4>
    <h5 style="background-color:#069412" class="text-truncate text-white p-3 mt-4 m-3">Personal Information</h5>
    <hr class="m-3">
    <form class="responsive" action="/student" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <div class="row ">
                <div class="col-sm-6 col-lg-4 mb-4">
                    <label style="font-weight: bold;" class="mb-2">First Name</label>
                    <input type="text" placeholder="first name.." class="form-control" name="fname" value="{{old('fname')}}">
                    <div class="text-danger mt-2">
                        {{$errors->first('fname')}}
                    </div>

                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <label style="font-weight: bold;" class="mb-2">Last Name</label>
                    <input type="text" placeholder="last name.." class="form-control" name="lname" value="{{old('fname')}}">
                    <div class="text-danger mt-2">
                        {{$errors->first('lname')}}</div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <label style="font-weight: bold;" class="mb-2">Gender</label>
                    <select class="form-control" name="gender"  value="{{old('gender')}}">
                        <option >Select gender</option>
                        <option @if(old('gender') =="Male") selected @endif>Male</option>
                        <option @if(old('gender') =="Female") selected @endif>Female</option>
                    </select>
                    <div class="text-danger mt-2">
                        {{$errors->first('gender')}}</div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <label style="font-weight: bold;" class="mb-2">Email</label>
                    <input type="email" placeholder="Enter email address" class="form-control" name="email" value="{{old('email')}}">
                    <div class="text-danger mt-2">
                        {{$errors->first('email')}}</div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <label style="font-weight: bold;" class="mb-2">Personal Mobile</label>
                    <input type="number" placeholder="923000000000" class="form-control" name="number" value="{{old('number')}}">
                    <div class="text-danger mt-2">
                        {{$errors->first('number')}}</div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <label style="font-weight: bold;" class="mb-2">Date of Birth</label>
                    <input type="date" name="date" class="form-control" value="{{old('date')}}">
                    <div class="text-danger mt-2">
                        {{$errors->first('date')}}</div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <label style="font-weight: bold;" class="mb-2">CNIC/B-Form/Smart Card</label>
                    <input type="number" placeholder="99999-9999999-9" class="form-control" name="cnic" value="{{old('cnic')}}">
                    <div class="text-danger mt-2">
                        {{$errors->first('cnic')}}</div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <label style="font-weight: bold;" class="mb-2">Reference</label>
                    <select class="form-control" name="reference" value="{{old('reference')}}">
                        <option >Select Reference</option>
                        <option  @if(old('reference') =="Teacher/Staff") selected @endif>Teacher/Staff</option>
                        <option  @if(old('reference') =="Banner") selected @endif>Banner</option>
                        <option  @if(old('reference') =="Social Media") selected @endif>Social Media</option>
                    </select>
                </div>
            </div>
        </div>
        <h5 style="background-color:#069412" class="text-truncate text-white p-3 mt-4 m-3">Program Information</h5>
        <hr class="m-3">
        <div class="row">
        <div class="col-sm-12 col-lg-4 mb-4">
            <label style="font-weight: bold;" class="mb-2">City</label>
            <select class="form-control" name="city" value="{{old('city')}}">
                <option >Select City</option>
                <option  @if(old('city') =="Lahore") selected @endif>Lahore</option>
                <option  @if(old('city') =="Haveli") selected @endif>Haveli</option>
                <option  @if(old('city') =="Bunga Hayat") selected @endif>Bunga Hayat</option>
            </select>
        </div>
            <div class="col-sm-12 col-lg-4">
                <label style="font-weight: bold;" class="mb-2">Upload Image: </label>
                <input type="file" class="form-control-file" accept="image/*" name="image">

            </div>
        </div>
        <div class="col-sm-12 col-lg-4">
            <label style="font-weight: bold;" class="mb-2">Save Form</label>
            <button class="btn btn-success form-control mb-5">Submit</button>
        </div>
        @csrf
    </form>	</div>
<div class="container mt-3 " style="background-color: #fafffe;">
    <div class="col-sm-12 col-lg-12 d-flex justify-content-center text-truncate flex-column align-items-center">
        <h3 style="font-weight: bold;" class="my-4 mb-2">Contact us</h3>

        <h6 style="font-weight: bold;">For General/Admissions Related Queries:</h6>

        <p style="font-weight: bold;" class="mb-5 mt-2">Email: info@leadscollege.edu.pk Landline: 042-111-00-00-78</p>
        <h6 style="font-weight: bold;">For Technical/LMS Related Queries:</h6>
        <p class="mb-4"><strong> Email:</strong> servicedesk@leads.edu.pk <strong>Landline:</strong> 042-38020206<strong> Ext.</strong> 1800 <strong>Cell:</strong> 0301-0452685</p>
        <h6 style="font-weight: bold;">Students can also contact to Admission/Account Department of his/her Campus</h6>

    </div>

</div>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $(".alert").alert("close");
        },4000);
    });
</script>

</body>
</html>
