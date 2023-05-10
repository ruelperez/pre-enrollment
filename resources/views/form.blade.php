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
    <table style="width: 100%; margin-top: 25px;">
        <tr>
            <td style="width: 40%;">
                Student No. {{$data['student_number']}}
            </td>
            <td style="width: 15%;">
                Class: {{ucwords($data['class'])}}
            </td>
            <td style="width: 20%;">
                Semester: {{$data['sem']}}
            </td>
            <td style="width: 25%;">
                School Year: {{$data['start']}}-{{$data['end']}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 25%;">
               Last Name: {{ucwords($data['lname'])}}
            </td>
            <td style="width: 25%;">
                First Name: {{ucwords($data['fname'])}}
            </td>
            <td style="width: 25%;">
                Middle Name: {{ucwords($data['mname'])}}
            </td>
            <td style="width: 25%;">
                Tel No.: {{ucwords($data['contact'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 45%;">
                Address: {{ucwords($data['address'])}}
            </td>
            <td style="width: 30%;">
                Guardian: {{ucwords($data['guardian'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
                Birthdate: {{ucwords($data['birthdate'])}}
            </td>
            <td style="width: 50%;">
                Birthplace: {{ucwords($data['birthplace'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%; border-bottom: solid black 1px; margin-bottom: 15px;">
        <td style="width: 35%;">
            Sex: {{ucwords($data['sex'])}}
        </td>
        <td style="width: 30%;">
            Course: {{ucwords($data['course'])}}
        </td>
        <td style="width: 35%;">
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

        <tbody style="border-bottom: solid black 1px;">
            @foreach($sub as $subs)
                <tr>
                    <td style="width: 12%">
                        {{$subs->subject_code}}
                    </td>
                    <td style="width: 30%">
                        {{$subs->name}}
                    </td>
                    <td style="width: 6%;">

                    </td>
                    <td style="width: 6%;">
                        {{$subs->unit}}
                    </td>
                    <td style="width: 10%;">
                        {{$subs->day}}
                    </td>
                    <td style="width: 13%;">
                        {{$subs->time}}
                    </td>
                    <td style="width: 8%;">
                        {{$subs->room}}
                    </td>
                    <td colspan="2" style="width: 6%;">

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
    <table style="width: 100%; margin-top: 25px;">
        <tr>
            <td style="width: 40%;">
                Student No. {{$data['student_number']}}
            </td>
            <td style="width: 15%;">
                Class: {{ucwords($data['class'])}}
            </td>
            <td style="width: 20%;">
                Semester: {{$data['sem']}}
            </td>
            <td style="width: 25%;">
                School Year: {{$data['start']}}-{{$data['end']}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 25%;">
                Last Name: {{ucwords($data['lname'])}}
            </td>
            <td style="width: 25%;">
                First Name: {{ucwords($data['fname'])}}
            </td>
            <td style="width: 25%;">
                Middle Name: {{ucwords($data['mname'])}}
            </td>
            <td style="width: 25%;">
                Tel No.: {{ucwords($data['contact'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 45%;">
                Address: {{ucwords($data['address'])}}
            </td>
            <td style="width: 30%;">
                Guardian: {{ucwords($data['guardian'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
                Birthdate: {{ucwords($data['birthdate'])}}
            </td>
            <td style="width: 50%;">
                Birthplace: {{ucwords($data['birthplace'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%; border-bottom: solid black 1px; margin-bottom: 15px;">
        <td style="width: 35%;">
            Sex: {{ucwords($data['sex'])}}
        </td>
        <td style="width: 30%;">
            Course: {{ucwords($data['course'])}}
        </td>
        <td style="width: 35%;">
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

        <tbody style="border-bottom: solid black 1px;">
        @foreach($sub as $subs)
            <tr>
                <td style="width: 12%">
                    {{$subs->subject_code}}
                </td>
                <td style="width: 30%">
                    {{$subs->name}}
                </td>
                <td style="width: 6%;">

                </td>
                <td style="width: 6%;">
                    {{$subs->unit}}
                </td>
                <td style="width: 10%;">
                    {{$subs->day}}
                </td>
                <td style="width: 13%;">
                    {{$subs->time}}
                </td>
                <td style="width: 8%;">
                    {{$subs->room}}
                </td>
                <td colspan="2" style="width: 6%;">

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
    <table style="width: 100%; margin-top: 25px;">
        <tr>
            <td style="width: 40%;">
                Student No. {{$data['student_number']}}
            </td>
            <td style="width: 15%;">
                Class: {{ucwords($data['class'])}}
            </td>
            <td style="width: 20%;">
                Semester: {{$data['sem']}}
            </td>
            <td style="width: 25%;">
                School Year: {{$data['start']}}-{{$data['end']}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 25%;">
                Last Name: {{ucwords($data['lname'])}}
            </td>
            <td style="width: 25%;">
                First Name: {{ucwords($data['fname'])}}
            </td>
            <td style="width: 25%;">
                Middle Name: {{ucwords($data['mname'])}}
            </td>
            <td style="width: 25%;">
                Tel No.: {{ucwords($data['contact'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 45%;">
                Address: {{ucwords($data['address'])}}
            </td>
            <td style="width: 30%;">
                Guardian: {{ucwords($data['guardian'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
                Birthdate: {{ucwords($data['birthdate'])}}
            </td>
            <td style="width: 50%;">
                Birthplace: {{ucwords($data['birthplace'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%; border-bottom: solid black 1px; margin-bottom: 15px;">
        <td style="width: 35%;">
            Sex: {{ucwords($data['sex'])}}
        </td>
        <td style="width: 30%;">
            Course: {{ucwords($data['course'])}}
        </td>
        <td style="width: 35%;">
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

        <tbody style="border-bottom: solid black 1px;">
        @foreach($sub as $subs)
            <tr>
                <td style="width: 12%">
                    {{$subs->subject_code}}
                </td>
                <td style="width: 30%">
                    {{$subs->name}}
                </td>
                <td style="width: 6%;">

                </td>
                <td style="width: 6%;">
                    {{$subs->unit}}
                </td>
                <td style="width: 10%;">
                    {{$subs->day}}
                </td>
                <td style="width: 13%;">
                    {{$subs->time}}
                </td>
                <td style="width: 8%;">
                    {{$subs->room}}
                </td>
                <td colspan="2" style="width: 6%;">

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
            <td colspan="2" style="text-align: left;"><b>ACCOUNTING DEPARTMENT'S COPY BRANCH</b></td>
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
    <table style="width: 100%; margin-top: 25px;">
        <tr>
            <td style="width: 40%;">
                Student No. {{$data['student_number']}}
            </td>
            <td style="width: 15%;">
                Class: {{ucwords($data['class'])}}
            </td>
            <td style="width: 20%;">
                Semester: {{$data['sem']}}
            </td>
            <td style="width: 25%;">
                School Year: {{$data['start']}}-{{$data['end']}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 25%;">
                Last Name: {{ucwords($data['lname'])}}
            </td>
            <td style="width: 25%;">
                First Name: {{ucwords($data['fname'])}}
            </td>
            <td style="width: 25%;">
                Middle Name: {{ucwords($data['mname'])}}
            </td>
            <td style="width: 25%;">
                Tel No.: {{ucwords($data['contact'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 45%;">
                Address: {{ucwords($data['address'])}}
            </td>
            <td style="width: 30%;">
                Guardian: {{ucwords($data['guardian'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
                Birthdate: {{ucwords($data['birthdate'])}}
            </td>
            <td style="width: 50%;">
                Birthplace: {{ucwords($data['birthplace'])}}
            </td>
        </tr>
    </table>
    <table style="width: 100%; border-bottom: solid black 1px; margin-bottom: 15px;">
        <td style="width: 35%;">
            Sex: {{ucwords($data['sex'])}}
        </td>
        <td style="width: 30%;">
            Course: {{ucwords($data['course'])}}
        </td>
        <td style="width: 35%;">
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

        <tbody style="border-bottom: solid black 1px;">
        @foreach($sub as $subs)
            <tr>
                <td style="width: 12%">
                    {{$subs->subject_code}}
                </td>
                <td style="width: 30%">
                    {{$subs->name}}
                </td>
                <td style="width: 6%;">

                </td>
                <td style="width: 6%;">
                    {{$subs->unit}}
                </td>
                <td style="width: 10%;">
                    {{$subs->day}}
                </td>
                <td style="width: 13%;">
                    {{$subs->time}}
                </td>
                <td style="width: 8%;">
                    {{$subs->room}}
                </td>
                <td colspan="2" style="width: 6%;">

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

<body>

</body>
</html>

