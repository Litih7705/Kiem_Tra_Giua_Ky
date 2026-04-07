<x-movie-layout>
    <x-slot name="title">Thêm mới bộ phim</x-slot>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <b>THÊM BỘ PHIM MỚI</b>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.movie.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Tên tiếng Việt</label>
                            <input type="text" name="movie_name_vn" class="form-control" value="{{ old('movie_name_vn') }}">
                            @error('movie_name_vn') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Tên tiếng Anh</label>
                            <input type="text" name="movie_name_en" class="form-control" value="{{ old('movie_name_en') }}">
                            @error('movie_name_en') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Ngày phát hành (yyyy-mm-dd)</label>
                            <input type="text" name="release_date" class="form-control" placeholder="Ví dụ: 2024-04-07" value="{{ old('release_date') }}">
                            @error('release_date') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Ảnh đại diện</label>
                            <input type="file" name="image" class="form-control">
                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Độ phổ biến</label>
                            <input type="number" name="popularity" class="form-control" value="{{ old('popularity') }}">
                            @error('popularity') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Điểm bình chọn (0 - 10)</label>
                            <input type="text" name="vote_average" class="form-control" value="{{ old('vote_average') }}">
                            @error('vote_average') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success">Lưu bộ phim</button>
                    <a href="{{ url('/admin/movies') }}" class="btn btn-secondary">Hủy bỏ</a>
                </form>
            </div>
        </div>
    </div>
</x-movie-layout>