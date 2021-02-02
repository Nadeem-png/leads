@extends('master/layout')
@section('content')
    <body>
    <div style="background-color: #a81103" class="p-4">
        <h1 class="text-center text-truncate text-white" style="font-weight: bold;">ADMISSION SCHEDULE</h1>
    </div>
    <table class=" table container mt-5 mb-5 table-hover table-striped table-borderless">
        <thead class="table-dark">
        <tr>
            <th>S.NO</th>
            <th>Activity</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Admissions Open</td>
            <td>10th March 2020 TUESDAY</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Last Date for Registration</td>
            <td>31st March 2020 TUESDAY</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Commencement of Classes</td>
            <td>6th April 2020 MONDAY</td>
        </tr>
        </tbody>

    </table>
    </body>
@endsection
@section('title','ADMISSION SCHEDULE')
@section('nava','active')
