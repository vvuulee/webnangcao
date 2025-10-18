<h1>Tất Cả Khóa Học</h1>

<a href="{{ route('courses.create') }}" style="background-color: #007bff; color: white; padding: 10px; text-decoration: none; border-radius: 5px;">
    + Thêm khóa học mới
</a>
<hr>


@if ($message = Session::get('success'))
    <div style="padding: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 20px;">
        {{ $message }}
    </div>
@endif

<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
    @forelse ($courses as $course)
        <div style="border: 1px solid #ccc; padding: 15px; border-radius: 8px;">
            <img src="{{ $course->image_path ?? 'https://via.placeholder.com/300' }}" alt="{{ $course->title }}" style="width: 100%;">
            <h3>
                <a href="{{ route('courses.show', $course) }}">
                    {{ $course->title }}
                </a>
            </h3>
            <p>Giảng viên: {{ $course->instructor }}</p>
            <strong>Giá: {{ number_format($course->price) }} VNĐ</strong>
          
            <hr>
            <div style="display: flex;gap: 10px;">
             
                <a href="{{ route('courses.edit', $course) }}" style="background: #ffc107; padding: 5px 10px; color: black; text-decoration:none; border-radius: 3px;">Sửa</a>
               
                <form action="{{ route('courses.destroy', $course) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa không?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: #dc3545; color: white; border: none; padding: 5px 10px; border-radius: 3px; cursor: pointer;">Xóa</button>
                </form>
            </div>
          
        </div>
    @empty
        <p>Chưa có khóa học nào để hiển thị.</p>
    @endforelse
</div>

<div style="margin-top: 20px;">
    {{ $courses->links() }}
</div>