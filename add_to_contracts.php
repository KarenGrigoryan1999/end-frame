<html>
    <head>
        <style>
   input[type=text] {
    width: 70%; /* Ширина поля в пикселах */
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
    <title>Добавить контрактного управляющего</title>    
    </head>
    <body>
        <H3>Добавить контрактного управляющего</H3>
        <form action = "add_to_base_of_contracts.php" method = "POST">
            <table>
                <tr>
                <td width = "30%">Введите управляющего:</td>
                <td width = "40%"><input type = 'text' name = "name" value = ""/></td>
            </tr>
            <tr>
                <td width = "30%">Введите телефон:</td>
                <td width = "40%"><input type = 'text' name = "phone" value = ""/></td>
            </tr>
            <tr>
                <td width = "30%">Введите Mail:</td>
                <td width = "40%"><input type = 'text' name = "mail" value = ""/></td>
            </tr>
            </table>
            <input type = "submit" value = "Добавить"/>
        </form>
    </body>
</html>