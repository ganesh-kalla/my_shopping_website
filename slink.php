<?php
 $server = 'localhost';
 $username = "root";
 $password = "";
 $db = 'bgs';

$con = mysqli_connect($server,$username,$password,$db);
//$con = mysqli_connect("localhost","root","","class1");

if($con){
	echo "connection successfull";
?>
<script>
	 //alert('connection successfull');
</script>
<?php
}else{
	echo "no connection";
	die("no connection". mysqli_connect_error());
}


?>