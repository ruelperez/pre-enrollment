<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ public_path('css/form.css') }}">
    <title>
    </title>
</head>
<body>
<div>
    <table class="tb1" style="width: 100%; border: solid white 1px;">
        <tr>
            <td style="border: solid white 1px;">
                <img src="{{ public_path('image/aclc_logo.png') }}" alt="Example Image" style="width: 52%; height: 75px; margin-left: 40%;">
                <h3 style="font-family: 'serif'; margin-left: 20%; margin-top: 20px;"><b>REGISTRATION FORM NO.</b></h3>
            </td>
            <td style="text-align: right; padding-bottom: 20px; border: solid white 1px;">
                <h4><b>1x1 PICTURE</b> </h4>
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 40%;">
                <p>Student No. 1700414450000</p>
            </td>
            <td style="width: 15%;">
                <p>Class: <u>{{ucwords($data['class'])}}</u></p>
            </td>
            <td style="width: 20%;">
                <p>Semester: <u>{{$data['sem']}}</u></p>
            </td>
            <td style="width: 25%;">
                <p>School Year: <u>{{$data['start']}}-{{$data['end']}}</u></p>
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 25%;">
                <p>Last Name: <u>{{ucwords($data['lname'])}}</u></p>
            </td>
            <td style="width: 25%;">
                <p>First Name: <u>{{ucwords($data['fname'])}}</u></p>
            </td>
            <td style="width: 25%;">
                <p>Middle Name: <u>{{ucwords($data['mname'])}}</u></p>
            </td>
            <td style="width: 25%;">
                <p>Tel No.: <u>{{ucwords($data['contact'])}}</u></p>
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 45%;">
                <p>Address: <u>{{ucwords($data['address'])}}</u></p>
            </td>
            <td style="width: 30%;">
                <p>Guardian: <u>{{ucwords($data['guardian'])}}</u></p>
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
                <p>Birthdate: <u>{{ucwords($data['birthdate'])}}</u></p>
            </td>
            <td style="width: 50%;">
                <p>Birthplace: <u>{{ucwords($data['birthplace'])}}</u></p>
            </td>
        </tr>
    </table>
    <table style="width: 100%; border-bottom: solid black 1px;">
        <td style="width: 35%;">
            <p>Sex: <u>{{ucwords($data['sex'])}}</u></p>
        </td>
        <td style="width: 30%;">
            <p>Course: <u>{{ucwords($data['course'])}}</u></p>
        </td>
        <td style="width: 35%;">
            <p>Yr.Level: <u>{{ucwords($data['year'])}}</u></p>
        </td>
    </table>

{{--        <div style="display: flex; margin-top: 30px;border: solid black 5px;">--}}
{{--            <div>--}}
{{--                <p>STUDENT NO.</p>--}}
{{--                <div style="display: flex">--}}
{{--                    <div>--}}
{{--                        <p>LAST NAME: <b><u>lname</u></b></p>--}}
{{--                    </div>--}}
{{--                    <div style="margin-left: 40px;">--}}
{{--                        <p>FIRST NAME: <b><u>lname</u></b></p>--}}
{{--                    </div>--}}
{{--                    <div style="margin-left: 40px;">--}}
{{--                        <p>M.I: <b><u>mname</u></b></p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                </div>--}}
{{--                <div>--}}
{{--                    <p>STUDENT CLASS: <b><u>OLD</u></b></p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>
</html>

