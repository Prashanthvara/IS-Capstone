<?php include("connection.php");
if (isset($_POST['c_id'])) {
    $sql = "select doctor_id, sp_id, doctor_name  from `doctor` where `sp_id`=" . mysqli_real_escape_string($db, $_POST['c_id']);
    $res = mysqli_query($db, $sql);
    if (mysqli_num_rows($res) > 0) {
        echo "<option value=''>------- Select --------</option>";
        while ($row = mysqli_fetch_object($res)) {
            echo "<option value='" . $row->doctor_id . "'>" . $row->doctor_name . "</option>";
        }
    }
} else {
    header('location: ./');
}
?>