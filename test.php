<?php
include_once('connection.php');
$sql = "SELECT doctor.doctor_name, specialty.sp_type, appointment.appointment_patient_name, appointment.appointment_start, appointment.appointment_status, appointment.appointment_id, doctor.webex_link FROM appointment, specialty, doctor WHERE specialty.sp_id = doctor.sp_id AND doctor.doctor_id = appointment.doctor_id AND appointment.appointment_status IN('confirmed', 'waiting') AND appointment.appointment_start >= CURRENT_TIME";
$res = mysqli_query($db, $sql);

$sql1 = "UPDATE appointment SET appointment_status = \"free\" WHERE appointment_id=".$_GET['view_id'];
$result = mysqli_query($db,$sql1);

if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_object($res)) {
        echo "<tr><td>" . $row->doctor_name . "</td><td>" . $row->sp_type . "</td><td>" . $row->appointment_patient_name . "</td><td>" . $row->appointment_start . "</td><td>" . $row->appointment_status . "</td><td><p><a href=\"\" class=\"btn btn-primary btn-sm\" style=\"width: 7em;\">Finish</a></p></td>
<td><p><a href=\"javascript:view_id($row->appointment_id) \" class=\"btn btn-primary btn-sm\" >Cancel</a></p></td>
<td><p><a href=\"  $row->webex_link\" class=\"btn btn-primary btn-sm\">Join</a></p></td></tr>";
    }
}
?>

<script>
    function view_id(id)
    {
        if(confirm('Are you sure you want to accept this member request? '))
        {
            window.location='test.php?view_id='+id;

        }
    }
</script>