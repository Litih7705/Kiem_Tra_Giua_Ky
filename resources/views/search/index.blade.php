<x-movie-layout>
    <x-slot name="title">Kết quả tìm kiếm: {{ $keyword }}</x-slot>

    <h4>Kết quả tìm kiếm cho: "<span class="text-info">{{ $keyword }}</span>"</h4>
    <hr>

    @if(count($movies) > 0)
        <div class='list-movie'>
            @foreach($movies as $row)
                <div class='movie'>
                    <a href="{{ url('movie/detail/'.$row->id) }}">
                        <img src="{{ asset('storage/' . $row->image) }}" width='200px' height='200px'>
                        <div class="p-2">
                            <b>{{ $row->movie_name_vn }}</b><br>
                            <small class="text-muted">{{ $row->release_date }}</small>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-warning">
            Không tìm thấy bộ phim nào phù hợp với từ khóa "{{ $keyword }}".
        </div>
    @endif
</x-movie-layout>