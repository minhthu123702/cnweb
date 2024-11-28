<?php
$sinhvien = [];

if (isset($_FILES['fileCSV'])) {
    $file = $_FILES['fileCSV']['tmp_name'];
    if (is_uploaded_file($file)) {
        if (($handle = fopen($file, "r")) !== FALSE) {
            $headers = fgetcsv($handle, 1000, ",");
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $sinhvien[] = array_combine($headers, $data);
            }
            fclose($handle);
        }
    } else {
        echo "<script>alert('Không thể đọc file. Vui lòng thử lại!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Danh sách sinh viên</h1>

        <form method="POST" enctype="multipart/form-data" class="mb-4">
            <div class="mb-3">
                <label for="fileCSV" class="form-label">Chọn file CSV:</label>
                <input type="file" class="form-control" id="fileCSV" name="fileCSV" accept=".csv" required>
            </div>
            <button type="submit" class="btn btn-primary">Tải lên và hiển thị</button>
        </form>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                    <th>Lớp</th>
                    <th>Điểm trung bình</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($sinhvien)) {
                    foreach ($sinhvien as $sv) {
                        echo "<tr>";
                        echo "<td>{$sv['ID']}</td>";
                        echo "<td>{$sv['Họ tên']}</td>";
                        echo "<td>{$sv['Ngày sinh']}</td>";
                        echo "<td>{$sv['Lớp']}</td>";
                        echo "<td>{$sv['Điểm trung bình']}</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>Chưa có dữ liệu. Vui lòng tải lên file CSV.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>