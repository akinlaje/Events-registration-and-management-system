<?php
include'connection.php';

if(isset($_POST['region_id'])){
	$region_id = $_POST['region_id'];
	$sql = mysqli_query($conn, "SELECT * FROM rgroup where region_id='$region_id' order by group_name");
	?>
	<select name="Rgroup" class="form-control">
		<option value="" selected="selected">Select Group</option>
		<?php
		while ($row = mysqli_fetch_array($sql)) {
		?>
		<option value="<?php echo $row['id']; ?>"><?php echo $row['group_name']; ?></option>
		<?php
		}
		?>
	</select>
<?php
}

if (isset($_POST['s_region_id']) && isset($_POST['group_id'])) {
	$s_region_id = $_POST['s_region_id'];
	$group_id = $_POST['group_id'];

	$sql1 = mysqli_query($conn, "SELECT * FROM districts where group_id='$group_id' and region_id='$s_region_id' order by district_name desc ");
	?>
	<select name="District" class="form-control">
		<option value="" selected="selected">Select District</option>
		<?php
		while ($row1 = mysqli_fetch_array($sql1)) {
			?>
			<option value="<?php echo $row1['id']; ?>"><?php echo $row1['district_name']; ?></option>
			<?php
		}
		?>
	</select>
	<?php
}
?>	