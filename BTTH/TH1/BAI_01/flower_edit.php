<?php
include './function.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id']; 
    $flower = getFlowerById($id);
    
    if (!$flower) {
        header("Location: admin.php");
        exit();
    }
} else {
    header("Location: admin.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    if (updateFlower($id, $name, $description, $image)) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Có lỗi xảy ra khi cập nhật thông tin hoa.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin hoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Sửa thông tin hoa</h1>
        
        <form action="flower_edit.php?id=<?php echo $id; ?>" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Tên hoa:</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($flower['name']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Mô tả:</label>
                <input type="text" id="description" name="description" class="form-control" value="<?php echo htmlspecialchars($flower['description']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Ảnh:</label>
                <input type="text" id="image" name="image" class="form-control" value="<?php echo htmlspecialchars($flower['image']); ?>" required>
            </div>

            <button type="submit" class="btn btn-warning">Cập nhật</button>
        </form>
        
        <a href="./admin.php" class="btn btn-success mt-3">Quay lại trang quản lý</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-QJHtvGhmr9K7P2vH8FQH5f0PmL2C0yUABwBPgLhVu4gynmnvJxJrKz3tTQ7F5lmv" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0xZj0qfU1f3XT+dSaFDR1A21Bv43en9XTfhv66zP5shvPBxD" crossorigin="anonymous"></script>
</body>

</html>
