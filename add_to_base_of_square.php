<?php
$mysqli = new mysqli("localhost", "id9871309_admin", "zaq12wsx", "id9871309_base");
$query = "SELECT * FROM `square`";
$result_set = $mysqli->query($query);
$i = 0;
while($row = $result_set->fetch_assoc()){
    $i++;
}
$query = "INSERT INTO `square` (`name`, `address`, `num`) VALUES ('".$_POST['name']."', '".$_POST['address']."', '".$i."');";
$result_set = $mysqli->query($query);
?>
<script>
  setTimeout( 'location="https://end-frame.000webhostapp.com/cabinet.php";', 1000 );
</script>