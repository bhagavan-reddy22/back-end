<html>
<body> 

<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student69-35303135ecb2", "ua92-studentAc", "student69-35303135ecb2");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all teachers</h3>
	
		<table>
		
			<tr>
				<th width="150px">teacher ID<br><hr></th>
				<th width="250px">tname<br><hr></th>
                <th width="250px">lname<br><hr></th>
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT tid, tname,lname  FROM t1");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['tid']}</th>
				<th>{$row['tname']}</th>
                <th>{$row['lname']}</th>
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


