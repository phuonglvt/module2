<?php

require './libs/library.php';

// Nếu người dùng submit form
if (!empty($_POST['add_book']))
{
    // Lay data
    $data['sach_name']        = isset($_POST['name']) ? $_POST['name'] : '';
    $data['sach_author']         = isset($_POST['author']) ? $_POST['author'] : '';
    $data['sach_dayBorrow']    = isset($_POST['dayBorrow']) ? $_POST['dayBorrow'] : '';

    // Validate thong tin
    $errors = array();
    if (empty($data['sach_name'])){
        $errors['sach_name'] = 'Chưa nhập tên sách';
    }

    if (empty($data['sach_author'])){
        $errors['sach_author'] = 'Chưa nhập tên tác giả';
    }

    // Neu ko co loi thi insert
    if (!$errors){
        add_book($data['sach_name'], $data['sach_author'], $data['sach_dayBorrow']);
        // Trở về trang danh sách
        header("location: book-list.php");
    }
}

disconnect_db();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thêm sách</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Thêm sách </h1>

<a href="book-list.php">Trở về</a> <br/> <br/>

<form method="post" action="book-add.php">
    <table width="50%" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name="name" value="
                <?php
                echo !empty($data['sach_name']) ? $data['sach_name'] : ''; ?>"
                />

                <?php
                if (!empty($errors['sach_name']))
                    echo $errors['sach_name']; ?>
            </td>
        </tr>

        <tr>
            <td>Author</td>
            <td>
                <select name="author">
                    <input type="text" name="author" value="
                    <?php
                    echo !empty($data['sach_author']) ? $data['sach_author'] : ''; ?>"
                    />
                </select>

                <?php if (!empty($errors['sach_author']))
                    echo $errors['sach_author']; ?>
            </td>
        </tr>

        <tr>
            <td>DayBorrow</td>
            <td>
                <input type="text" name="dayBorrow" value="
                <?php
                echo !empty($data['sach_dayBorrow']) ? $data['sach_dayBorrow'] : ''; ?>"
                />
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" name="add_book" value="Lưu"/>
            </td>
        </tr>
    </table>
</form>
</body>
</html>