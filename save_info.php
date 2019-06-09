<html>
    <head>
        <title>Готово!</title>
</head>
<body>
<?php
$query = "UPDATE `table` SET name = '".$_POST['name']."', location = '".$_POST['location']."', post = '".$_POST['post']."', phone = '".$_POST['phone']."',fax = '".$_POST['fax']."', mail = '".$_POST['mail']."', face = '".$_POST['face']."'";
$mysqli = new mysqli("localhost", "id9871309_admin", "zaq12wsx", "id9871309_base");
$result_set = $mysqli->query($query);
$mysqli->close();
?>
<H1>Готово!</H1>
<H2>Изменения сохранены!</H2>
<script>
  setTimeout( 'location="https://end-frame.000webhostapp.com/cabinet.php";', 2000 );
</script>
</body>
</html>