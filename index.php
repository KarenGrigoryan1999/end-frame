<html>
    <head>
        <style>
            a.button15 {
  display: inline-block;
  font-family: arial,sans-serif;
  font-size: 25px;
  font-weight: bold;
  color: rgb(68,68,68);
  text-decoration: none;
  user-select: none;
  padding: .2em 1.2em;
  outline: none;
  border: 1px solid rgba(0,0,0,.1);
  border-radius: 2px;
  background: rgb(245,245,245) linear-gradient(#f4f4f4, #f1f1f1);
  transition: all .218s ease 0s;
  height:50px;
}
a.button15:hover {
  color: rgb(24,24,24);
  border: 1px solid rgb(198,198,198);
  background: #f7f7f7 linear-gradient(#f7f7f7, #f1f1f1);
  box-shadow: 0 1px 2px rgba(0,0,0,.1);
}
a.button15:active {
  color: rgb(51,51,51);
  border: 1px solid rgb(204,204,204);
  background: rgb(238,238,238) linear-gradient(rgb(238,238,238), rgb(224,224,224));
  box-shadow: 0 1px 2px rgba(0,0,0,.1) inset;
}
        </style>
        <title>Добро пожаловать на конструктор документов для закупок!</title>
    </head>
    <body>
        <table height = 90%>
            <tr><td width = 30%></td>
                <td>
        <a href = "/cabinet.php" class="button15">В личный кабинет</a>
        <a href = "/make_document.php" class="button15">Создать документ!</a>
        <?php
        $current_version = "";
        $query = "SELECT * FROM `config`";
$mysqli = new mysqli("localhost", "id9871309_admin", "zaq12wsx", "id9871309_base");
$result_set = $mysqli->query($query);
while($row = $result_set->fetch_assoc()){
    $current_version = $row['config'];
}
        $ch = curl_init('http://www.consultant.ru/document/cons_doc_LAW_151681/96124763916c669315230fd284a0964177ba6e00/#dst100058');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $html = curl_exec($ch);
        $html = iconv('windows-1251', 'UTF-8', $html);
        curl_close($ch);
        preg_match('|<title>([^\<]+)<|Uis', $html, $ttl);
        $ttl = $ttl[1];
        if($ttl != $current_version){
        echo "<H2>Изменение Федерального закона №44-ФЗ</H2>";
        echo "<strong>Старая версия: </strong>".$current_version; 
        echo "<br><strong>Новая версия: </strong>".$ttl;
        echo "<br><a href = 'http://www.consultant.ru/document/cons_doc_LAW_151681/96124763916c669315230fd284a0964177ba6e00/#dst100058'>Подробнее</a>";
        }
        ?>
        </td>
        <td width = 10%></td></tr></table>
    </body>
</html>