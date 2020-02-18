<?php
	$records = [];
	$records[] = ['name' => 'Ramesh', 'extension' => 124];
	$records[] = ['name' => 'Anjali', 'extension' => 742];
	$records[] = ['name' => 'Kirti', 'extension' => 824];
	$records[] = ['name' => 'Sampad', 'extension' => 112];
?>

<table border="2">
	<tr>
		<td>Names</td>
		<td>Extensions</td>
	</tr>
	<?php
	foreach ($records as $row) {
		echo '<tr>';
			echo '<td>' . $row['name'] . '</td>';
			echo '<td>' . $row['extension'] . '</td>';
		echo '</tr>';
	}
	?>
</table>