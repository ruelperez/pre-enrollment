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
    <table style="width: 100%; border: solid white 1px;margin-top: 1px;">
        <tr>
            <td style="border: solid white 1px;">
                <img src="{{ public_path('image/aclc_logo.png') }}" alt="Example Image" style="width: 50%; height: 60px; margin-left: 37%;">
            </td>
            <td style="text-align: center; padding-bottom: 20px; border: solid white 1px;">
                <h4><b>1x1 PICTURE</b> </h4>
            </td>
        </tr>
    </table>
    <table style="width: 100%; margin-top: 10px;">
        <tr>
            <td style="width: 40%; text-align: left; ">
                Student No. {{$data['student_number']}}
            </td>
            <td style="width: 15%; text-align: left;">
                Class: {{ucwords($data['class'])}}
            </td>
            <td style="width: 20%; text-align: left;">
                Semester: {{$data['sem']}}
            </td>
            <td style="width: 25%; text-align: left;">
                School Year: {{$data['start']}}-{{$data['end']}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 25%; text-align: left;">
               Last Name: {{ucwords($data['lname'])}}
            </td>
            <td style="width: 25%; text-align: left;">
                First Name: {{ucwords($data['fname'])}}
            </td>
            <td style="width: 25%; text-align: left;">
                Middle Name: {{ucwords($data['mname'])}}
            </td>
            <td style="width: 25%; text-align: left;">
                Tel No.: {{ucwords($data['contact'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 45%; text-align: left;">
                Address: {{ucwords($data['address'])}}
            </td>
            <td style="width: 30%; text-align: left;">
                Guardian: {{ucwords($data['guardian'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%; text-align: left;">
                Birthdate: {{ucwords($data['birthdate'])}}
            </td>
            <td style="width: 50%; text-align: left;">
                Birthplace: {{ucwords($data['birthplace'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%; border-bottom: solid black 1px; margin-bottom: 15px;">
        <td style="width: 35%; text-align: left;">
            Sex: {{ucwords($data['sex'])}}
        </td>
        <td style="width: 30%; text-align: left;">
            Course: {{ucwords($data['course'])}}
        </td>
        <td style="width: 35%; text-align: left;">
            Yr.Level: {{ucwords($data['year'])}}
        </td>
    </table>

    <table class="tbl2" style="width: 100%; margin-top: 25px;">
        <thead>
            <th>
                <tr>
                    <th>CODE</th>
                    <th>COURSE DESCRIPTION</th>
                    <th>SEC</th>
                    <th>UNIT</th>
                    <th>DAY</th>
                    <th>TIME</th>
                    <th>ROOM</th>
                    <th colspan="2">FEES</th>
                </tr>
            </th>
        </thead>

        <tbody style="border-bottom: solid black 1px; ">
            @foreach($sub as $subs)
                <tr >
                    <td style="width: 12%; font-size: 11px; ">
                        {{$subs->subject_code}}
                    </td>
                    <td style="width: 30%; font-size: 11px;">
                        {{$subs->name}}
                    </td>
                    <td style="width: 6%; font-size: 11px;">

                    </td>
                    <td style="width: 6%; font-size: 11px;">
                        {{$subs->unit}}
                    </td>
                    <td style="width: 10%; font-size: 11px;">
                        {{$subs->day}}
                    </td>
                    <td style="width: 13%; font-size: 11px;">
                        {{$subs->time}}
                    </td>
                    <td style="width: 8%; font-size: 11px;">
                        {{$subs->room}}
                    </td>
                    <td colspan="2" style="width: 6%; font-size: 11px;">

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p style="margin-left: 33%; font-size: 16px;">
        TOTAL UNITS = <b style="font-size: 17px">{{$data['total_unit']}}</b>
    </p>

    <table class="tbl">
        <tr>
            <td style="width: 50%;"><b>CHECKED BY: ____________ </b></td>
            <td style="width: 50%;">TERMS____CASH____INSTALLMENT____PAYMENTS </td>
        </tr>
        <tr>
            <td style="width: 50%;"><b>ENROLLMENT APPROVED:</b></td>
            <td style="width: 50%;">ASSESSED BY/DATE___________________</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right"><b>PAYMENT:</b> UPON ENROLLMENT_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right">PRELIMS:_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td style="width: 30%;">SCHOOL DIRECTOR _______________</td>
            <td style="width: 70%; text-align: right">MIDTERMS:_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td style="width: 50%;">DATE _______________</td>
            <td style="width: 50%; text-align: right;">PREFINALS:_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td COLSPAN="2" style="text-align: right;">FINALS:_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: left;"><b>STUDENT'S COPY</b></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right;"><b>STUDENT SIGNATURE ________________</b></td>
        </tr>
    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>

<body>
<div>
    <table style="width: 100%; border: solid white 1px;margin-top: 1px;">
        <tr>
            <td style="border: solid white 1px;">
                <img src="{{ public_path('image/aclc_logo.png') }}" alt="Example Image" style="width: 50%; height: 60px; margin-left: 37%;">
            </td>
            <td style="text-align: center; padding-bottom: 20px; border: solid white 1px;">
                <h4><b>1x1 PICTURE</b> </h4>
            </td>
        </tr>
    </table>
    <table style="width: 100%; margin-top: 10px;">
        <tr>
            <td style="width: 40%; text-align: left; ">
                Student No. {{$data['student_number']}}
            </td>
            <td style="width: 15%; text-align: left;">
                Class: {{ucwords($data['class'])}}
            </td>
            <td style="width: 20%; text-align: left;">
                Semester: {{$data['sem']}}
            </td>
            <td style="width: 25%; text-align: left;">
                School Year: {{$data['start']}}-{{$data['end']}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 25%; text-align: left;">
                Last Name: {{ucwords($data['lname'])}}
            </td>
            <td style="width: 25%; text-align: left;">
                First Name: {{ucwords($data['fname'])}}
            </td>
            <td style="width: 25%; text-align: left;">
                Middle Name: {{ucwords($data['mname'])}}
            </td>
            <td style="width: 25%; text-align: left;">
                Tel No.: {{ucwords($data['contact'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 45%; text-align: left;">
                Address: {{ucwords($data['address'])}}
            </td>
            <td style="width: 30%; text-align: left;">
                Guardian: {{ucwords($data['guardian'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%; text-align: left;">
                Birthdate: {{ucwords($data['birthdate'])}}
            </td>
            <td style="width: 50%; text-align: left;">
                Birthplace: {{ucwords($data['birthplace'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%; border-bottom: solid black 1px; margin-bottom: 15px;">
        <td style="width: 35%; text-align: left;">
            Sex: {{ucwords($data['sex'])}}
        </td>
        <td style="width: 30%; text-align: left;">
            Course: {{ucwords($data['course'])}}
        </td>
        <td style="width: 35%; text-align: left;">
            Yr.Level: {{ucwords($data['year'])}}
        </td>
    </table>

    <table class="tbl2" style="width: 100%; margin-top: 25px;">
        <thead>
        <th>
            <tr>
                <th>CODE</th>
                <th>COURSE DESCRIPTION</th>
                <th>SEC</th>
                <th>UNIT</th>
                <th>DAY</th>
                <th>TIME</th>
                <th>ROOM</th>
                <th colspan="2">FEES</th>
            </tr>
        </th>
        </thead>

        <tbody style="border-bottom: solid black 1px; ">
        @foreach($sub as $subs)
            <tr >
                <td style="width: 12%; font-size: 11px; ">
                    {{$subs->subject_code}}
                </td>
                <td style="width: 30%; font-size: 11px;">
                    {{$subs->name}}
                </td>
                <td style="width: 6%; font-size: 11px;">

                </td>
                <td style="width: 6%; font-size: 11px;">
                    {{$subs->unit}}
                </td>
                <td style="width: 10%; font-size: 11px;">
                    {{$subs->day}}
                </td>
                <td style="width: 13%; font-size: 11px;">
                    {{$subs->time}}
                </td>
                <td style="width: 8%; font-size: 11px;">
                    {{$subs->room}}
                </td>
                <td colspan="2" style="width: 6%; font-size: 11px;">

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p style="margin-left: 33%; font-size: 16px;">
        TOTAL UNITS = <b style="font-size: 17px">{{$data['total_unit']}}</b>
    </p>

    <table class="tbl">
        <tr>
            <td style="width: 50%;"><b>CHECKED BY: ____________ </b></td>
            <td style="width: 50%;">TERMS____CASH____INSTALLMENT____PAYMENTS </td>
        </tr>
        <tr>
            <td style="width: 50%;"><b>ENROLLMENT APPROVED:</b></td>
            <td style="width: 50%;">ASSESSED BY/DATE___________________</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right"><b>PAYMENT:</b> UPON ENROLLMENT_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right">PRELIMS:_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td style="width: 30%;">SCHOOL DIRECTOR _______________</td>
            <td style="width: 70%; text-align: right">MIDTERMS:_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td style="width: 50%;">DATE _______________</td>
            <td style="width: 50%; text-align: right;">PREFINALS:_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td COLSPAN="2" style="text-align: right;">FINALS:_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: left;"><b>REGISTRAR'S COPY</b></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right;"><b>STUDENT SIGNATURE ________________</b></td>
        </tr>
    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

<body>
<div>
    <table style="width: 100%; border: solid white 1px;margin-top: 1px;">
        <tr>
            <td style="border: solid white 1px;">
                <img src="{{ public_path('image/aclc_logo.png') }}" alt="Example Image" style="width: 50%; height: 60px; margin-left: 37%;">
            </td>
            <td style="text-align: center; padding-bottom: 20px; border: solid white 1px;">
                <h4><b>1x1 PICTURE</b> </h4>
            </td>
        </tr>
    </table>
    <table style="width: 100%; margin-top: 10px;">
        <tr>
            <td style="width: 40%; text-align: left; ">
                Student No. {{$data['student_number']}}
            </td>
            <td style="width: 15%; text-align: left;">
                Class: {{ucwords($data['class'])}}
            </td>
            <td style="width: 20%; text-align: left;">
                Semester: {{$data['sem']}}
            </td>
            <td style="width: 25%; text-align: left;">
                School Year: {{$data['start']}}-{{$data['end']}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 25%; text-align: left;">
                Last Name: {{ucwords($data['lname'])}}
            </td>
            <td style="width: 25%; text-align: left;">
                First Name: {{ucwords($data['fname'])}}
            </td>
            <td style="width: 25%; text-align: left;">
                Middle Name: {{ucwords($data['mname'])}}
            </td>
            <td style="width: 25%; text-align: left;">
                Tel No.: {{ucwords($data['contact'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 45%; text-align: left;">
                Address: {{ucwords($data['address'])}}
            </td>
            <td style="width: 30%; text-align: left;">
                Guardian: {{ucwords($data['guardian'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%; text-align: left;">
                Birthdate: {{ucwords($data['birthdate'])}}
            </td>
            <td style="width: 50%; text-align: left;">
                Birthplace: {{ucwords($data['birthplace'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%; border-bottom: solid black 1px; margin-bottom: 15px;">
        <td style="width: 35%; text-align: left;">
            Sex: {{ucwords($data['sex'])}}
        </td>
        <td style="width: 30%; text-align: left;">
            Course: {{ucwords($data['course'])}}
        </td>
        <td style="width: 35%; text-align: left;">
            Yr.Level: {{ucwords($data['year'])}}
        </td>
    </table>

    <table class="tbl2" style="width: 100%; margin-top: 25px;">
        <thead>
        <th>
            <tr>
                <th>CODE</th>
                <th>COURSE DESCRIPTION</th>
                <th>SEC</th>
                <th>UNIT</th>
                <th>DAY</th>
                <th>TIME</th>
                <th>ROOM</th>
                <th colspan="2">FEES</th>
            </tr>
        </th>
        </thead>

        <tbody style="border-bottom: solid black 1px; ">
        @foreach($sub as $subs)
            <tr >
                <td style="width: 12%; font-size: 11px; ">
                    {{$subs->subject_code}}
                </td>
                <td style="width: 30%; font-size: 11px;">
                    {{$subs->name}}
                </td>
                <td style="width: 6%; font-size: 11px;">

                </td>
                <td style="width: 6%; font-size: 11px;">
                    {{$subs->unit}}
                </td>
                <td style="width: 10%; font-size: 11px;">
                    {{$subs->day}}
                </td>
                <td style="width: 13%; font-size: 11px;">
                    {{$subs->time}}
                </td>
                <td style="width: 8%; font-size: 11px;">
                    {{$subs->room}}
                </td>
                <td colspan="2" style="width: 6%; font-size: 11px;">

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p style="margin-left: 33%; font-size: 16px;">
        TOTAL UNITS = <b style="font-size: 17px">{{$data['total_unit']}}</b>
    </p>

    <table class="tbl">
        <tr>
            <td style="width: 50%;"><b>CHECKED BY: ____________ </b></td>
            <td style="width: 50%;">TERMS____CASH____INSTALLMENT____PAYMENTS </td>
        </tr>
        <tr>
            <td style="width: 50%;"><b>ENROLLMENT APPROVED:</b></td>
            <td style="width: 50%;">ASSESSED BY/DATE___________________</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right"><b>PAYMENT:</b> UPON ENROLLMENT_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right">PRELIMS:_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td style="width: 30%;">SCHOOL DIRECTOR _______________</td>
            <td style="width: 70%; text-align: right">MIDTERMS:_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td style="width: 50%;">DATE _______________</td>
            <td style="width: 50%; text-align: right;">PREFINALS:_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td COLSPAN="2" style="text-align: right;">FINALS:_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: left;"><b>ACCOUNTING DEPARTMENT'S COPY</b></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right;"><b>STUDENT SIGNATURE ________________</b></td>
        </tr>
    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>

<body>
<div>
    <table style="width: 100%; border: solid white 1px;margin-top: 1px;">
        <tr>
            <td style="border: solid white 1px;">
                <img src="{{ public_path('image/aclc_logo.png') }}" alt="Example Image" style="width: 50%; height: 60px; margin-left: 37%;">
            </td>
            <td style="text-align: center; padding-bottom: 20px; border: solid white 1px;">
                <h4><b>1x1 PICTURE</b> </h4>
            </td>
        </tr>
    </table>
    <table style="width: 100%; margin-top: 10px;">
        <tr>
            <td style="width: 40%; text-align: left; ">
                Student No. {{$data['student_number']}}
            </td>
            <td style="width: 15%; text-align: left;">
                Class: {{ucwords($data['class'])}}
            </td>
            <td style="width: 20%; text-align: left;">
                Semester: {{$data['sem']}}
            </td>
            <td style="width: 25%; text-align: left;">
                School Year: {{$data['start']}}-{{$data['end']}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 25%; text-align: left;">
                Last Name: {{ucwords($data['lname'])}}
            </td>
            <td style="width: 25%; text-align: left;">
                First Name: {{ucwords($data['fname'])}}
            </td>
            <td style="width: 25%; text-align: left;">
                Middle Name: {{ucwords($data['mname'])}}
            </td>
            <td style="width: 25%; text-align: left;">
                Tel No.: {{ucwords($data['contact'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 45%; text-align: left;">
                Address: {{ucwords($data['address'])}}
            </td>
            <td style="width: 30%; text-align: left;">
                Guardian: {{ucwords($data['guardian'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%; text-align: left;">
                Birthdate: {{ucwords($data['birthdate'])}}
            </td>
            <td style="width: 50%; text-align: left;">
                Birthplace: {{ucwords($data['birthplace'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%; border-bottom: solid black 1px; margin-bottom: 15px;">
        <td style="width: 35%; text-align: left;">
            Sex: {{ucwords($data['sex'])}}
        </td>
        <td style="width: 30%; text-align: left;">
            Course: {{ucwords($data['course'])}}
        </td>
        <td style="width: 35%; text-align: left;">
            Yr.Level: {{ucwords($data['year'])}}
        </td>
    </table>

    <table class="tbl2" style="width: 100%; margin-top: 25px;">
        <thead>
        <th>
            <tr>
                <th>CODE</th>
                <th>COURSE DESCRIPTION</th>
                <th>SEC</th>
                <th>UNIT</th>
                <th>DAY</th>
                <th>TIME</th>
                <th>ROOM</th>
                <th colspan="2">FEES</th>
            </tr>
        </th>
        </thead>

        <tbody style="border-bottom: solid black 1px; ">
        @foreach($sub as $subs)
            <tr >
                <td style="width: 12%; font-size: 11px; ">
                    {{$subs->subject_code}}
                </td>
                <td style="width: 30%; font-size: 11px;">
                    {{$subs->name}}
                </td>
                <td style="width: 6%; font-size: 11px;">

                </td>
                <td style="width: 6%; font-size: 11px;">
                    {{$subs->unit}}
                </td>
                <td style="width: 10%; font-size: 11px;">
                    {{$subs->day}}
                </td>
                <td style="width: 13%; font-size: 11px;">
                    {{$subs->time}}
                </td>
                <td style="width: 8%; font-size: 11px;">
                    {{$subs->room}}
                </td>
                <td colspan="2" style="width: 6%; font-size: 11px;">

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p style="margin-left: 33%; font-size: 16px;">
        TOTAL UNITS = <b style="font-size: 17px">{{$data['total_unit']}}</b>
    </p>

    <table class="tbl">
        <tr>
            <td style="width: 50%;"><b>CHECKED BY: ____________ </b></td>
            <td style="width: 50%;">TERMS____CASH____INSTALLMENT____PAYMENTS </td>
        </tr>
        <tr>
            <td style="width: 50%;"><b>ENROLLMENT APPROVED:</b></td>
            <td style="width: 50%;">ASSESSED BY/DATE___________________</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right"><b>PAYMENT:</b> UPON ENROLLMENT_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right">PRELIMS:_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td style="width: 30%;">SCHOOL DIRECTOR _______________</td>
            <td style="width: 70%; text-align: right">MIDTERMS:_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td style="width: 50%;">DATE _______________</td>
            <td style="width: 50%; text-align: right;">PREFINALS:_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td COLSPAN="2" style="text-align: right;">FINALS:_________ OR. NO.________ DATE:_________</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: left;"><b>HEAD OFFICE'S COPY</b></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right;"><b>STUDENT SIGNATURE ________________</b></td>
        </tr>
    </table>

</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>





<body style="text-align: justify">
<h2 style="text-align: center">POLICY ON REFUND</h2>
<h1 style="font-size: 15px; text-transform: initial ">
    Tuition fee refund is granted to the student upon written request of the parent. This request
    must be certified by the Branch School Director. School Director indicates in the request
    the student's last attendance as this is relevant in the computation.
</h1>
<h1 style="font-size: 15px; text-transform: initial">
    The following shall be deductible on the assessed fees. These will based on the date
    of filing of the withdrawal form of the Accounting Office whether the student has attended
    classes or not.
</h1>

<h1 style="font-size: 15px; margin-left: 9%; text-transform: initial">
    A. Before the start of classes, 100% refund of tuition fees, laboratory fees and miscellaneous fees.
</h1>

<h1 style="font-size: 15px; margin-left: 9%; text-transform: initial">
    B. Within the first week of classes, 10% of the tuition, laboratory and miscellaneous fees.
</h1>

<h1 style="font-size: 15px; margin-left: 9%; text-transform: initial">
    C. Within the first week of classes, 20% of the tuition, laboratory and miscellaneous fees.
</h1>

<h1 style="font-size: 15px; margin-left: 9%; text-transform: initial">
    D. After the 2nd week of classes, 100% of the tuition, laboratory and miscellaneous fees.
</h1>


<h2 style="font-size: 19px; text-transform: initial; margin-top: 20px;">
    Note: Registration, other fees and application fees are not refundable.
</h2>


<h1 style="font-size: 15px; margin-left: 75%; text-transform: initial; margin-top: 20px;">
    Conforme:
</h1>

<h6 style="margin-left: 65%; margin-top: 35px;">
    <u> {{$data['fullname']}}</u>
</h6>

<h6 style="margin-left: 65%; margin-top: 1px; text-transform: initial">
     Signature over printed name
</h6>

</body>

<body>

<h2 style="text-align: center">BIO-DATA</h2>
<table style="width: 100%; margin-top: 25px; padding: 2%;">
    <tr>
        <td style="width: 40%;border: solid white 1px; text-align: left; font-size: 15px">
            Name of Student: <u>{{$data['fullname']}}</u>
        </td>
        <td style="width: 20%;border: solid white 1px; text-align: left; font-size: 15px">
            Tel No.<u> {{ucwords($data['contact'])}}</u>
        </td>
        <td style="width: 20%;border: solid white 1px; text-align: left; font-size: 15px">
            Age: <u>{{$data['age']}}</u>
        </td>
    </tr>
</table>
<table style="width: 100%;">
    <tr>
        <td style="width: 23%;text-align: left;border: solid white 1px; font-size: 15px">
            Sex: <u>{{$data['sex']}}</u>
        </td>
        <td style="width: 23%;text-align: left;border: solid white 1px; font-size: 15px">
            Height: <u>{{ucwords($data['height'])}}</u>
        </td>
        <td style="width: 23%;text-align: left;border: solid white 1px; font-size: 15px">
            Weight: <u>{{ucwords($data['weight'])}}</u>
        </td>
        <td style="width: 30%;text-align: right;border: solid white 1px; font-size: 15px">
            Citizenship: <u>{{ucwords($data['citizen'])}}</u>
        </td>

    </tr>
</table>
<table style="width: 100%; margin-top: 2%;">
    <tr>
        <td style="width: 50%;text-align: left;border: solid white 1px; font-size: 15px">
            Place: <u>{{ucwords($data['address'])}}</u>
        </td>
        <td style="width: 30%;text-align: left;border: solid white 1px; font-size: 15px">
            Birthday: <u>{{ucwords($data['birthdate'])}}</u>
        </td>
        <td style="width: 25%;text-align: right;border: solid white 1px;font-size: 15px">
            Status <u>{{ucwords($data['status'])}}</u>
        </td>
    </tr>
</table>
<table style="width: 100%; margin-top: 2%;">
    <tr>
        <td style="width: 45%;text-align: left;border: solid white 1px; font-size: 15px">
            Father's Name: <u>{{ucwords($data['father'])}}</u>
        </td>
        <td style="width: 35%;text-align: left;border: solid white 1px; font-size: 15px">
            Occupation: <u>{{ucwords($data['father_occupation'])}}</u>
        </td>
        <td style="width: 10%;text-align: left;border: solid white 1px; font-size: 15px">
            Age: <u>{{ucwords($data['father_age'])}}</u>
        </td>
    </tr>
</table>
<table style="width: 100%; margin-top: 2%;">
    <tr>
        <td style="width: 45%;text-align: left;border: solid white 1px; font-size: 15px">
            Mother's Name:<u> {{ucwords($data['mother'])}}</u>
        </td>
        <td style="width: 35%;text-align: left;border: solid white 1px; font-size: 15px">
            Occupation: <u>{{ucwords($data['mother_occupation'])}}</u>
        </td>
        <td style="width: 10%;text-align: left;border: solid white 1px; font-size: 15px">
            Age: <u>{{ucwords($data['mother_age'])}}</u>
        </td>
    </tr>
</table>
<table style="width: 100%; margin-top: 2%;">
    <tr>
        <td style="width: 45%;text-align: left;border: solid white 1px; font-size: 15px">
            Provincial Address: <u>{{ucwords($data['provincial_address'])}}</u>
        </td>
        <td style="width: 30%;text-align: left;border: solid white 1px; font-size: 15px">
            City Address: <u>{{ucwords($data['city_address'])}}</u>
        </td>
        <td style="width: 25%;text-align: right;border: solid white 1px; font-size: 15px">
            Telephone: <u>{{ucwords($data['parent_contact'])}}</u>
        </td>
    </tr>
</table>
<table style="width: 100%; margin-top: 2%;">
    <tr>
        <td style="width: 40%;text-align: left;border: solid white 1px; font-size: 15px">
            Guardian: <u>{{ucwords($data['guardian'])}}</u>
        </td>
        <td style="width: 35%;text-align: left;border: solid white 1px; font-size: 15px">
            Address:<u> {{ucwords($data['guardian_address'])}}</u>
        </td>
        <td style="width: 25%;text-align: right;border: solid white 1px; font-size: 15px">
            Tel. No.: <u>{{ucwords($data['guardian_contact'])}}</u>
        </td>
    </tr>
</table>
<table style="width: 100%; margin-top: 2%;">
    <tr>
        <td style="width: 70%;text-align: left;border: solid white 1px; font-size: 15px">
            Person to Contact In Case of Emergency: <u>{{ucwords($data['personToContact'])}}</u>
        </td>
        <td style="width: 30%;text-align: left;border: solid white 1px; font-size: 15px">
            Tel. No.: <u>{{ucwords($data['emergency_contact'])}}</u>
        </td>
    </tr>
</table>
<table style="width: 100%; margin-top: 2%;">
    <tr>
        <td style="width: 100%;text-align: left;border: solid white 1px; font-size: 15px">
            Address: <u>{{ucwords($data['emergency_address'])}}</u>
        </td>
    </tr>
</table>

<div style="width: 23%; border: solid black 1px; margin-left: 75%; margin-top: 15%;"></div>
<h6 style="margin-left: 80%; margin-top: 1%">Signature</h6>

</div>
</body>

<body>

<h2 style="text-align: center">
    STUDENT LEDGER
</h2>
<table style="width: 100%; margin-top: 25px; padding: 2%;">
    <tr>
        <td style="width: 40%;border: solid white 1px; text-align: left; font-size: 15px">
            STUDENT NO.: <u>{{$data['student_number']}}</u>
        </td>
        <td style="width: 20%;border: solid white 1px; text-align: left; font-size: 15px">
            S.Y.<u> {{$data['start']}}-{{$data['end']}}</u>
        </td>
        <td style="width: 20%;border: solid white 1px; text-align: left; font-size: 15px">
            Semester: <u>{{$data['sem']}}</u>
        </td>
    </tr>
</table>
<h6 style="font-size: 16px; margin-left: 2%">NAME: <u>{{$data['fullname']}}</u>
</h6>
<div>



    <table style="width: 100%; margin-top: 25px;">
        <thead>
        <th>
            <tr>
                <th>PARTICULARS</th>
                <th>DEBIT</th>
                <th>CREDIT</th>
                <th>BALANCE</th>
                <th>INITIAL</th>

            </tr>
        </th>
        </thead>

        <tbody style="border-bottom: solid black 1px;">
        <tr>
            <td style="width: 30%; color: transparent; font-size: 25px;">
                1
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                2
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                3
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                4
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                5
            </td>

        </tr>
        </tbody>

        <tbody style="border-bottom: solid black 1px;">
        <tr>
            <td style="width: 30%; color: transparent; font-size: 25px;">
                1
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                2
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                3
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                4
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                5
            </td>

        </tr>
        </tbody>

        <tbody style="border-bottom: solid black 1px;">
        <tr>
            <td style="width: 30%; color: transparent; font-size: 25px;">
                1
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                2
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                3
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                4
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                5
            </td>

        </tr>
        </tbody>

        <tbody style="border-bottom: solid black 1px;">
        <tr>
            <td style="width: 30%; color: transparent; font-size: 25px;">
                1
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                2
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                3
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                4
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                5
            </td>

        </tr>
        </tbody>

        <tbody style="border-bottom: solid black 1px;">
        <tr>
            <td style="width: 30%; color: transparent; font-size: 25px;">
                1
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                2
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                3
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                4
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                5
            </td>

        </tr>
        </tbody>

        <tbody style="border-bottom: solid black 1px;">
        <tr>
            <td style="width: 30%; color: transparent; font-size: 25px;">
                1
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                2
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                3
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                4
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                5
            </td>

        </tr>
        </tbody>


    </table>

    <h6 style="margin-top: 20px">REMARKS:</h6>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>

<body>

<h2 style="text-align: center">
    STUDENT LEDGER
</h2>
<table style="width: 100%; margin-top: 25px; padding: 2%;">
    <tr>
        <td style="width: 40%;border: solid white 1px; text-align: left; font-size: 15px">
            STUDENT NO.: <u>{{$data['student_number']}}</u>
        </td>
        <td style="width: 20%;border: solid white 1px; text-align: left; font-size: 15px">
            S.Y.<u> {{$data['start']}}-{{$data['end']}}</u>
        </td>
        <td style="width: 20%;border: solid white 1px; text-align: left; font-size: 15px">
            Semester: <u>{{$data['sem']}}</u>
        </td>
    </tr>
</table>
<h6 style="font-size: 16px; margin-left: 2%">NAME: <u>{{$data['fullname']}}</u>
</h6>
<div>



    <table style="width: 100%; margin-top: 25px;">
        <thead>
        <th>
            <tr>
                <th>PARTICULARS</th>
                <th>DEBIT</th>
                <th>CREDIT</th>
                <th>BALANCE</th>
                <th>INITIAL</th>

            </tr>
        </th>
        </thead>

        <tbody style="border-bottom: solid black 1px;">
        <tr>
            <td style="width: 30%; color: transparent; font-size: 25px;">
                1
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                2
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                3
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                4
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                5
            </td>

        </tr>
        </tbody>

        <tbody style="border-bottom: solid black 1px;">
        <tr>
            <td style="width: 30%; color: transparent; font-size: 25px;">
                1
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                2
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                3
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                4
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                5
            </td>

        </tr>
        </tbody>

        <tbody style="border-bottom: solid black 1px;">
        <tr>
            <td style="width: 30%; color: transparent; font-size: 25px;">
                1
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                2
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                3
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                4
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                5
            </td>

        </tr>
        </tbody>

        <tbody style="border-bottom: solid black 1px;">
        <tr>
            <td style="width: 30%; color: transparent; font-size: 25px;">
                1
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                2
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                3
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                4
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                5
            </td>

        </tr>
        </tbody>

        <tbody style="border-bottom: solid black 1px;">
        <tr>
            <td style="width: 30%; color: transparent; font-size: 25px;">
                1
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                2
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                3
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                4
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                5
            </td>

        </tr>
        </tbody>

        <tbody style="border-bottom: solid black 1px;">
        <tr>
            <td style="width: 30%; color: transparent; font-size: 25px;">
                1
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                2
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                3
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                4
            </td>
            <td style="width: 10%; color: transparent; font-size: 25px;">
                5
            </td>

        </tr>
        </tbody>


    </table>

    <h6 style="margin-top: 20px">REMARKS:</h6>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>
</html>

