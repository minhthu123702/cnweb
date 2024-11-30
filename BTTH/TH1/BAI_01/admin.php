 <?php
    include './functions.php';
    $flowers = getFlowers();
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Quản trị danh sách hoa</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="./style.css">
 </head>
 <style>
     img {
         height: 100px;
         width: 100px;
     }

     table {
         max-width: 90%;
         margin-left: 60px;
     }
 </style>

 <body>
     <header>
         <nav class="logo">
             <a href="./admin.php">Administraction</a>
         </nav>
         <nav>
             <ul>
                 <li><a href="../index.php">Trang chủ</a></li>
                 <li><a href="./index.php">User</a></li>
                 <li><a href="./index.php">Thể loại</a></li>
                 <li><a href="./index.php">Tác giả</a></li>
                 <li><a href="./index.php">Bài Viết</a></li>
             </ul>
         </nav>
     </header>
     <button type="button" class="btn btn-warning" style="margin-left: 10px;"><a href="./add.php">Thêm loại </a></button>
     <table class="table table-striped">
         <thead>
             <tr>
                 <th>Tên hoa</th>
                 <th style="width: 600px;">Mô tả</th>
                 <th>Hình ảnh</th>
                 <th>Hành động</th>
             </tr>
         </thead>
         <tbody>
             <?php foreach ($flowers as $flower): ?>
                 <tr>
                     <td><?php echo htmlspecialchars($flower['name']); ?></td>
                     <td><?php echo htmlspecialchars($flower['description']); ?></td>
                     <td><img src="<?php echo htmlspecialchars($flower['image']); ?>" alt="<?php echo htmlspecialchars($flower['name']); ?>"></td>
                     <td>
                         <a href="edit.php?id=<?php echo $flower['id']; ?>"><button>sửa</button></a>
                         <a href="delete.php?id=<?php echo $flower['id']; ?>" onclick="return confirm('Bạn có chắc muốn xóa không?')"><button>xoá</button></a>
                     </td>
                 </tr>
             <?php endforeach; ?>
         </tbody>
     </table>
 </body>

 </html>