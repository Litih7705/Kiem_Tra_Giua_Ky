<x-movie-layout>
    <x-slot name="title">
        Trang chủ - Danh sách Phim
    </x-slot>

    <div class="list-movie">
        @foreach($movies as $row)
            <div class="movie">
                <a href="{{ route('movie.detail', ['id' => $row->id]) }}">
                    
                    <img src="{{ asset('storage/' . $row->image) }}" alt="{{ $row->movie_name_vn }}" style="width: 100%;">
                    <div style="padding: 10px;">
                        <h4>{{ $row->movie_name_vn }}</h4>
                        <p style="color: gray; font-size: 14px;">Ngày phát hành: {{ $row->release_date }}</p>
                    </div>

                </a>
                </div>
        @endforeach
    </div>
</x-movie-layout>