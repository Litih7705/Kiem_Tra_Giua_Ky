<x-movie-layout title="Danh sách phim theo thể loại">
    <div class="list-movie"> @foreach($movies as $movie)
            <div class="movie"> <a href="{{ route('movie.detail', $movie->id) }}">
                    <img src="{{ $movie->image_link }}" width="100%">
                    <div class="movie-info p-2"> <h6>{{ $movie->movie_name_vn }}</h6>
                        <small class="text-muted">{{ $movie->release_date }}</small>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</x-movie-layout>