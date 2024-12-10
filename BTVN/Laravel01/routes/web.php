<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Đây là nơi bạn có thể đăng ký các route cho ứng dụng của bạn.
| Các route này được tải bởi RouteServiceProvider trong nhóm middleware "web".
| Hãy tạo ra điều gì đó tuyệt vời!
|
*/

// Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('home');

// Trang hiển thị danh sách bài viết
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Trang tạo bài viết mới
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Lưu bài viết mới
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Trang chỉnh sửa bài viết
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Cập nhật bài viết
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

// Xóa bài viết
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
