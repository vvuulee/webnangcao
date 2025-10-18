<h1>Chỉnh Sửa Khóa Học: {{ $course->title }}</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Lưu ý action và method --}}
<form action="{{ route('courses.update', $course) }}" method="POST">
    @csrf
    @method('PUT') {{-- Báo cho Laravel biết đây là request UPDATE --}}

    <div>
        <label for="title">Tên khóa học:</label><br>
        <input type="text" id="title" name="title" value="{{ old('title', $course->title) }}" style="width: 100%;">
    </div>
    <br>
    <div>
        <label for="description">Mô tả:</label><br>
        <textarea id="description" name="description" rows="5" style="width: 100%;">{{ old('description', $course->description) }}</textarea>
    </div>
    <br>
    <div>
        <label for="price">Giá tiền:</label><br>
        <input type="number" id="price" name="price" value="{{ old('price', $course->price) }}">
    </div>
    <br>
    <div>
        <label for="instructor">Giảng viên:</label><br>
        <input type="text" id="instructor" name="instructor" value="{{ old('instructor', $course->instructor) }}">
    </div>
    <br>
    <button type="submit">Cập Nhật</button>
</form>