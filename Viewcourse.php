<html>
<body> 

<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student69-35303135ecb2", "ua92-studentAc", "student69-35303135ecb2");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all courses</h3>
	
		<table>
		
			<tr>
				<th width="150px">coname<br><hr></th>
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT coname FROM course");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['coname']}</th>
			</tr>";

			}
			?>
            </table>
        </body>
        </html>

