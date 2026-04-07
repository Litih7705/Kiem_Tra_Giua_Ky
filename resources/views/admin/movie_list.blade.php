<x-movie-layout>
    <x-slot name="title">Quản lý Phim</x-slot>


    <div class="container mt-3">
        <div style='text-align:center; color:#15c; font-weight:bold; font-size:20px; margin-bottom:15px;'>
            QUẢN LÝ DANH SÁCH PHIM
        </div>


        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif


        <table id="movie-table" class="table table-striped table-bordered" width="100%">
            <thead>
                <tr>
                    <th style="width: 100px;">Ảnh đại diện</th>
                    <th style="width: 180px;">Tiêu đề</th>
                    <th>Giới thiệu</th>
                    <th style="width: 120px;">Ngày phát hành</th>
                    <th style="width: 80px;">Điểm đánh giá</th>
                    <th width="120px">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $row)
                <tr>
                    <td><img src="{{ asset('storage/' . $row->image) }}" width="120px"></td>
                    <td><b>{{ $row->movie_name_vn }}</b></td>
                    <td>{{ $row-> overview_vn }}</td>
                    <td>{{ $row->release_date }}</td>
                    <td>{{ $row->vote_average }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('movie.detail', ['id' => $row->id]) }}" class='btn btn-sm btn-info'>Xem</a>
                            &nbsp;
                            <form method="POST" action="{{ route('movie.delete') }}" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?');">
                                @csrf
                                <input type="hidden" name="id" value="{{ $row->id }}">
                                <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script>
        $(document).ready(function() {
            $('#movie-table').DataTable({
                responsive: true,
                pageLength: 5, // 5 bộ phim mỗi trang
                lengthMenu: [5, 10, 25, 50, 100],
                bStateSave: true,
            });
        });
    </script>
</x-movie-layout>

