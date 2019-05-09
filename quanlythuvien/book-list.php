<?php
require './libs/library.php';
$books = get_all_books();
disconnect_db();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sách</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Danh sách sách</h1>

<a href="book-add.php">Thêm sinh viên</a> <br/> <br/>

<table width="100%" border="1" cellspacing="0" cellpadding="10">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Gender</td>
        <td>Birthday</td>
        <td>Options</td>
    </tr>

    <?php foreach ($books as $item){ ?>
        <tr>
            <td><?php echo $item['sach_id']; ?></td>

            <td><?php echo $item['sach_name']; ?></td>

            <td><?php echo $item['sach_author']; ?></td>

            <td><?php echo $item['sach_dayBorrow']; ?></td>

            <td>
                <form method="post" action="book-delete.php">
                    <input onclick="window.location = 'student-edit.php?id=<?php echo $item['sach_id']; ?>'" type="button" value="Sửa"/>
                    <input type="hidden" name="id" value="<?php echo $item['sach_id']; ?>"/>
                    <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
