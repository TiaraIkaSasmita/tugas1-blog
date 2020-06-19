
<h2 align="center">DATA USER</h2>

<?php 
require_once "app/user.php";


$cat = new App\User();
$rows = $cat->tampil();

?>

<table align="center">
	<tr>
		<th>NO</th>
		<th>NAMA LENGKAP</th>
		<th>USERNAME</th>
		<th>ROLE</th>
		<th>EDIT</th>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><?php echo $row['user_id']; ?></td>
			<td><?php echo $row['user_nama_lengkap']; ?></td>
			<td><?php echo $row['username']; ?></td>
			<td>
				<?php 
				if($row['user_role'] == 1) {
					echo "Administrator";
				} else {
					echo "Operator";
				}
				?>				
			</td>
			<td><a href="dashboard.php?page=user_edit&id=<?php echo $row['user_id']; ?>" class="btn">Edit</a></td>
		</tr>
	<?php } ?>
</table>

<div>
	<center>
	<a href="dashboard.php?page=user_input" class="btn">Tambah</a>
</center>
	</div>