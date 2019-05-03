<?php
global $conn;

// Hàm kết nối database
function connect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;

    // Nếu chưa kết nối thì thực hiện kết nối
    if (!$conn){
        $conn = mysqli_connect('localhost', 'root', 'vertrigo', 'qlsv_db') or die ('Can\'t not connect to database');
        // Thiết lập font chữ kết nối
        mysqli_set_charset($conn, 'utf8');
    }
}

// Hàm ngắt kết nối
function disconnect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;

    // Nếu đã kêt nối thì thực hiện ngắt kết nối
    if ($conn){
        mysqli_close($conn);
    }
}

// Hàm lấy tất cả sách
function get_all_books()
{
    // Gọi tới biến toàn cục $conn
    global $conn;

    // Hàm kết nối
    connect_db();

    // Câu truy vấn lấy tất cả sách
    $sql = "select * from tb_sach";

    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);

    // Mảng chứa kết quả
    $result = array();

    // Lặp qua từng record và đưa vào biến kết quả
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }

    // Trả kết quả về
    return $result;
}

// Hàm lấy sách theo ID
function get_book($book_id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;

    // Hàm kết nối
    connect_db();

    // Câu truy vấn lấy tất cả sách
    $sql = "select * from tb_book where sach_id = {$book_id}";

    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);

    // Mảng chứa kết quả
    $result = array();

    // Nếu có kết quả thì đưa vào biến $result
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }

    // Trả kết quả về
    return $result;
}

// Hàm thêm sách
function add_book($book_name, $book_author, $book_dayBorrow)
{
    // Gọi tới biến toàn cục $conn
    global $conn;

    // Hàm kết nối
    connect_db();

    // Chống SQL Injection
    $book_name = addslashes($book_name);
    $book_author = addslashes($book_author);
    $book_dayBorrow = addslashes($book_dayBorrow);

    // Câu truy vấn thêm
    $sql = "
            INSERT INTO tb_sach(sach_name, sach_author, sach_ngaymuuon) VALUES
            ('$book_name','$book_author','$book_dayBorrow')
    ";

    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);

    return $query;
}


// Hàm sửa sinh viên
function edit_student($book_id, $book_name, $book_author, $book_dayBorrow)
{
    // Gọi tới biến toàn cục $conn
    global $conn;

    // Hàm kết nối
    connect_db();

    // Chống SQL Injection
    $book_name       = addslashes($book_name);
    $book_author        = addslashes($book_author);
    $book_dayBorrow   = addslashes($book_dayBorrow);

    // Câu truy sửa
    $sql = "
            UPDATE tb_sach SET
            sach_name = '$book_name',
            sach_author = '$book_author',
            sach_dayborrow = '$book_dayBorrow'
            WHERE sach_id = $book_id
    ";

    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);

    return $query;
}


// Hàm xóa sinh viên
function delete_sach($book_id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;

    // Hàm kết nối
    connect_db();

    // Câu truy sửa
    $sql = "
            DELETE FROM tb_sinhvien
            WHERE sach_id = $book_id
    ";

    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);

    return $query;
}