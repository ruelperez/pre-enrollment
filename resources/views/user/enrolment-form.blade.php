@include('partial.header')

@livewire('enrolment-form',['courseID' => $courseID, 'semesterID' => $semesterID, 'yearID' => $yearID])


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

@include('partial.footer')
