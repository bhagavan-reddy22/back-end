<html>
<body> 

<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student69-35303135ecb2", "ua92-studentAc", "student69-35303135ecb2");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Parents</h3>
	
		<table>
		
			<tr>
				<th width="150px">Parent ID<br><hr></th>
				<th width="250px">pName<br><hr></th>
                <th width="250px">lName<br><hr></th>
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT pid, pname,lname FROM p1");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['pid']}</th>
				<th>{$row['pname']}</th>
                <th>{$row['lname']}</th>
			</tr>";

			}
			?>
            </table>
        </body>
        </html>

