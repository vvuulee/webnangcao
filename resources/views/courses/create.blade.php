<h1>Thêm Khóa Học Mới</h1>


@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('courses.store') }}" method="POST">
    @csrf  {{-- Bắt buộc phải có để bảo mật --}}

    <div>
        <label for="title">Tên khóa học:</label><br>
        <input type="text" id="title" name="title" value="{{ old('title') }}" style="width: 100%;">
    </div>
    <br>
    <div>
        <label for="description">Mô tả:</label><br>
        <textarea id="description" name="description" rows="5" style="width: 100%;">{{ old('description') }}</textarea>
    </div>
    <br>
    <div>
        <label for="price">Giá tiền:</label><br>
        <input type="number" id="price" name="price" value="{{ old('price') }}">
    </div>
    <br>
    <div>
        <label for="instructor">Giảng viên:</label><br>
        <input type="text" id="instructor" name="instructor" value="{{ old('instructor') }}">
    </div>
    <br>
    <button type="submit">Lưu Khóa Học</button>
</form>