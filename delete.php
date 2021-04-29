<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($con,"delete from employee where id=$id");
?>
<script type="text/javascript">
	window.location="display.php"
</script>
