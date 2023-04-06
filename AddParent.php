<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student69-35303135ecb2", "ua92-studentAc", "student69-35303135ecb2");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $pname = $_POST['parentName'];
    $lname = $_POST['lastname'];
   

    $sql = "INSERT INTO p1(pname,lname) VALUES ('$pname','$lname')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>