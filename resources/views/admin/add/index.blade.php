<x-movie-layout>
    <x-slot name="title">Thêm phim mới</x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center text-primary mt-3"><b>THÊM PHIM</b></h4>
                @if(session('status'))
                <div class="alert alert-success text-center">
                    {{ session('status') }}
                </div>
                @endif
                <form action="{{ route('admin.movie.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label>Tên tiếng Anh</label>
                        <input type="text" name="movie_name_en" class="form-control" value="{{ old('movie_name_en') }}">
                        @error('movie_name_en') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Tên tiếng Việt</label>
                        <input type="text" name="movie_name_vn" class="form-control" value="{{ old('movie_name_vn') }}">
                        @error('movie_name_vn') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Ngày phát hành (yyyy-mm-dd)</label>
                        <input type="text" name="release_date" class="form-control" placeholder="2024-04-07" value="{{ old('release_date') }}">
                        @error('release_date') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Mô tả</label>
                        <textarea name="overview_vn" class="form-control" rows="4">{{ old('overview_vn') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label>Ảnh đại diện</label>
                        <input type="file" name="image" class="form-control">
                        @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-movie-layout>