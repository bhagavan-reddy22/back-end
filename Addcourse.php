<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student69-35303135ecb2", "ua92-studentAc", "student69-35303135ecb2");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $coname = $_POST['coname'];
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];
   

    $sql = "INSERT INTO course(coname,sdate,edate) VALUES ('$coname','$sdate,'$edate')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>