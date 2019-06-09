<html>
    <head>
    <style>
   input[type=text] {
    width: 40%; /* Ширина поля в пикселах */
    height: 30px;
    background-color: #FFFFFF;
    border: 1px solid #CCCCCC;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
        border-radius: 0px;
    color: #555555;
    font-size: 14px;
    margin-bottom: 10px;
    padding: 4px 6px;
        text-decoration:none;
   } 
      input[type=submit] {
  background-color: #FFFFFF;
    border: 1px solid #CCCCCC;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
        border-radius: 0px;
    color: #555555;
        width:85px;
    font-size: 14px;        
    height: 30px;
    margin-bottom: 10px;
    padding: 4px 6px;
} 
  input[type=submit]:hover {
   border-color: rgba(82, 168, 236, 0.8);
   box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(82, 168, 236, 0.6);
   outline: 0 none;
   }
   input[type=submit]:focus {
   background: #d0d3d6;
}
TABLE { 

border: 0px solid #FF0000; /*Граница вокруг таблицы */ 
border-spacing: 0px 0px; /* Расстояние между границ */ 
} 

} 
TD, TH { 
padding: 5px; /* Поля вокруг текста */ 
border: 1px solid #b8b5bd; /* Рамка вокруг ячеек */ 
}
h1 { 
    font-size: 200%; 
    font-family: SegoeUI, 'Segoe UI'; 
    color: MidnightBlue;
   }
   h2 { 
    font-size: 150%; 
    font-family: Arial, sans-serif; 
    color: black;
   }
   h3 { 
    font-size: 120%; 
    font-family: Arial, sans-serif; 
    color: black;
   }
   body {
  font-family: Arial;
  font-size = 3;
}
    </style> 
        <link rel="stylesheet" href="style.css">
        <title>Личный кабинет</title>
</head>
<body>
    <table border = 0 width = "100%" height = 24% style = "background-image:url(images/bg.png); repeat-x;">
    <tr width = "100%"><td><img height = '74px' src = "images/shapka.png"/></td></tr></table>
    <H3>Добро пожаловать в личный Кабинет!</H3>
    <H3>Информация обо мне:</H3>
<?php
$query = "SELECT * FROM `table`";
$mysqli = new mysqli("localhost", "id9871309_admin", "zaq12wsx", "id9871309_base");
$result_set = $mysqli->query($query);
echo "<form action = 'save_info.php' method = 'POST'>";
echo "<table>";
while($row = $result_set->fetch_assoc()){
echo "<tr><td><font size='3' face='Arial'>Наименование:</td>";
echo "<td><input class = 'text' type = 'text' name = 'name' size = 40 value = '".$row['name']."'/></td>";
echo "<tr><td><font size='3' face='Arial'>Расположение:</td>";
echo "<td><input type = 'text' name = 'location' size = 40 value = '".$row['location']."'/></td>";
echo "<tr><td><font size='3' face='Arial'>Почта:</td>";
echo "<td><input type = 'text' size = 40 name = 'post' value = '".$row['post']."'/></td>";
echo "<tr><td><font size='3' face='Arial'>Телефон:</td>";
echo "<td><input type = 'text' size = 40 name = 'phone' value = '".$row['phone']."'/></td>";
echo "<tr><td><font size='3' face='Arial'>Факс:</td>";
echo "<td><input type = 'text' size = 40 name = 'fax' value = '".$row['fax']."'/></td>";
echo "<tr><td><font size='3' face='Arial'>Mail:</td>";
echo "<td><input type = 'text' size = 40 name = 'mail' value = '".$row['mail']."'/></td>";
echo "<tr><td><font size='3' face='Arial'>Ответственное лицо:</td>";
echo "<td><input type = 'text' size = 40 name = 'face' value = '".$row['face']."'/></td>";
}
echo "</table>";
?>
<br>
<input type = "submit" class = "button" value = "Сохранить" />
</form>
<?php
$query = "SELECT * FROM `square`";
$result_set = $mysqli->query($query);
echo "<H2>Мои электронные площадки:</H2>";
echo "<table width = '50%' ><tr><td style = 'border: 1px solid #b8b5bd;' width = '40%' >Имя</td><td style = 'border: 1px solid #b8b5bd;' width = '50%'>Адресс</td></tr>";
while($row = $result_set->fetch_assoc()){
    echo "<tr><td style = 'border: 1px solid #b8b5bd;' width = '40%' >".$row['name']."</td><td style = 'border: 1px solid #b8b5bd;' width = '50%'>".$row['address']."<form action = 'del2.php' method = 'GET'><input type = 'submit' value = 'Удалить ".($row['num']+1)."' name = 'del'/></form></td></tr>";
}
echo "</table>";
?>
<br>
<form action = "add_to_square.php" method = "POST">
<input type = "submit" value = "Добавить"></input>
</form>
<H2>Мои контрактные управляющие:</H2>
<?php
$query = "SELECT * FROM `contract`";
$result_set = $mysqli->query($query);
$mysqli->close();
echo "<table width = '50%'><tr><td style = 'border: 1px solid #b8b5bd;' width = '20%' >Управляющий</td><td style = 'border: 1px solid #b8b5bd;' width = '30%'>Телефон</td><td style = 'border: 1px solid #b8b5bd;' width = '30%'>Mail</td></tr></tr>";
while($row = $result_set->fetch_assoc()){
    echo "<tr><td style = 'border: 1px solid #b8b5bd;' width = '20%' >".$row['manager']."</td><td style = 'border: 1px solid #b8b5bd;' width = '30%'>".$row['phone']."</td><td style = 'border: 1px solid #b8b5bd;' width = '30%'>".$row['mail']."<form action = 'del1.php' method = 'GET'><input type = 'submit' value = 'Удалить ".($row['num']+1)."' name = 'del'/></form></td></tr>";
}
echo "</table>";
?>
<br>
<form action = "add_to_contracts.php" method = "POST">
<input type = "submit" class = "btn_blue" height = "40" value = "Добавить" />
</form>
</body>
</htlm>