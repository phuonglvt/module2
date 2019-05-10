<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <head>
        <style> 
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc; 
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
        </style>
    </head>
    <body>
       <h2>Từ Điển Anh - Việt</h2>
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
       @csrf
          <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
          <input type = "submit" id = "submit" value = "Tìm"/>
       </form>
    </body>
    </html>