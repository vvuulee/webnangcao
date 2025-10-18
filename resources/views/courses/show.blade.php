<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $course->title }}</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; margin: 40px; }
        .container { max-width: 800px; margin: auto; }
        img { max-width: 100%; height: auto; border-radius: 8px; }
        .btn { display: inline-block; padding: 10px 20px; text-decoration: none; background-color: #007bff; color: white; border-radius: 5px; }
        .price { font-size: 1.5em; color: #28a745; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('courses.index') }}" class="btn" style="background-color: #6c757d; margin-bottom: 20px;">
            &laquo; Quay Lại Danh Sách
        </a>

        <h1>{{ $course->title }}</h1>
        <p><strong>Giảng viên:</strong> {{ $course->instructor ?? 'Chưa cập nhật' }}</p>

        <img src="{{ $course->image_path ?? 'https://via.placeholder.com/800x400.png?text=Course+Image' }}" alt="Hình ảnh khóa học {{ $course->title }}">

        <div style="margin-top: 20px;">
            <h2>Mô tả chi tiết</h2>
           
            <p>{!! nl2br(e($course->description)) !!}</p>
        </div>
        
        <hr>

        <p class="price">Giá: {{ number_format($course->price) }} VNĐ</p>

        <a href="#" class="btn">Đăng Ký Học Ngay</a>
    </div>
</body>
</html>