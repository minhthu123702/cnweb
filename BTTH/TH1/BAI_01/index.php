<?php
// Chỉnh sửa đường dẫn để đúng với cấu trúc thư mục
include 'functions.php';

// Lấy danh sách các loại hoa từ hàm getFlowers()
$flowers = getFlowers();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách các loại hoa</title>
    <!-- Thêm liên kết tới Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: #333;
    }

    .flower_container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        width: 100%;
        margin: 20px auto;
        padding: 20px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .flower_item {
        flex: 1 0 calc(33.33% - 20px);
        max-width: calc(33.33% - 20px);
        min-height: 300px;
        background: #ffffff;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        text-align: center;
        padding: 10px;
    }

    .flower_item img {
        width: 100%;
        height: 50%;
        object-fit: cover;
    }

    h1 {
        text-align: center;
        margin-top: 20px;
    }

    header {
        background: #333;
        color: white;
        padding: 10px 20px;
    }

    header nav a {
        color: white;
        text-decoration: none;
        margin-right: 15px;
    }

    header nav ul {
        list-style: none;
        padding: 0;
        display: flex;
        gap: 10px;
    }

    header nav ul li {
        display: inline;
    }
</style>

<body>
    <header>
        <nav class="logo">
            <a href="./admin.php">Administration</a>
        </nav>
        <nav>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="#">User</a></li>
                <li><a href="#">Thể loại</a></li>
                <li><a href="#">Tác giả</a></li>
                <li><a href="#">Bài Viết</a></li>
            </ul>
        </nav>
    </header>

    <!-- Danh sách hoa -->
    <h1>Danh sách các loại hoa</h1>
    <div class="flower_container">
        <?php foreach ($flowers as $flower): ?>
            <div class="flower_item">
                <h2 class="card-title"><?php echo $flower['name']; ?></h2>
                <img class="card-img-top" src="./<?php echo $flower['image']; ?>" alt="<?php echo $flower['name']; ?>">
                <p class="card-text"><?php echo $flower['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>