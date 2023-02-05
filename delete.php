<?php 
include 'link.php';

$id = $_GET['id'];

$deletequery = " DELETE FROM `data` WHERE id=$id ";

$query = mysqli_query($con,$deletequery);

if($query){
	?>
	<script>
		alert("Delete Successfully");
	</script>
	<?php
}else{
	?>
	<script>
		alert("not Delete Successfully");
	</script>
	<?php
}

header('location:table.php');

?>