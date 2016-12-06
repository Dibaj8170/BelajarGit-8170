<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/age.php');

$siswa = new Siswa();
$hitungAge = new Age();
$data = $siswa->readAllSiswa();

?>

<table border="1">
	<tr>
		<th>ID SISWA</th>
		<th>FULL NAME</th>
		<th>Date Birth</th>
		<th>AGE</th>
		<th>Nationality</th>
		<th></th>
	</tr>
	<?php foreach($data as $a):?>
	<tr>
		<td><?php echo $a['id_siswa']?></td>
		<td><?php echo $a['full_name']?></td>
		<td><?php echo $a['date_ob']?></td>
		<td>
			<?php
				$tanggal = $a['date_ob'];
				$exec = $hitungAge->age($tanggal);
				echo $exec->y."tahun ".$exec->m." Bulan ".$exec->d."hari";
			?>
		</td>
		<td><?php echo $a['nationality']?></td>
		<td><a href="desiswa.php?id=<?php echo $a['id_siswa']?>">Detail</td>
		<td><a href="upsiswa.php?id=<?php echo $a['id_siswa']?>">Edit</td>
		<td><a href="delsiswa.php?id=<?php echo $a['id_siswa']?>">Delete</td>
	</tr>
	<?php endforeach?>
</table>

