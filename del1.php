<?php
echo "<H1>Строка удалена из базы данных!</H1>";
$query = "DELETE FROM `contract` WHERE num = ".(str_replace("Удалить ","",$_GET['del'])-1);
$mysqli = new mysqli("localhost", "id9871309_admin", "zaq12wsx", "id9871309_base");
$result_set = $mysqli->query($query);
?>
<script>
  setTimeout( 'location="https://end-frame.000webhostapp.com/";', 1000 );
</script>