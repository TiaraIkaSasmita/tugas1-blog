<h2 align="center">DATA ALBUM</h2>

<?php 
require_once "app/album.php";


$alb = new App\Album();
$rows = $alb->tampil();

?>

<table align="center">
	<tr>
		<th>NO</th>
		<th>NAMA</th>
		<th>PHOTO</th>
		<th>KETERANGAN</th>
		<th>EDIT</th>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row['album_name']; ?></td>
			<td><?php echo $row['PHO']; ?></td>
			<td><?php echo $row['album_text']; ?></td>
			<td><a href="dashboard.php?page=album_edit&id=<?php echo $row['album_id']; ?>" class="btn">Edit</a></td>
		</tr>
	<?php } ?>
</table>
<center>
	<a href="dashboard.php?page=album_input" class="btn">Tambah</a>
</center>
