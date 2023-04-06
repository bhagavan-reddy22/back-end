<html>
<body> 

<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student69-35303135ecb2", "ua92-studentAc", "student69-35303135ecb2");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all classes</h3>
	
		<table>
		
			<tr>
				<th width="150px">Cid<br><hr></th>
				<th width="250px">Cname<br><hr></th>
                <th width="250px">capacity<br><hr></th>
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT Cid, Cname,capacity FROM c1");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['Cid']}</th>
				<th>{$row['Cname']}</th>
                <th>{$row['capacity']}</th>
			</tr>";

			}
			?>
            </table>
        </body>
        </html>

