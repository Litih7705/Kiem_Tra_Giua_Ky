<x-movie-layout title="Phim: {{ $movie->movie_name_vn }}">
    <div class="container bg-white p-4 shadow rounded">
        <div class="row">
            <div class="col-md-4">
    {{-- Hiển thị ảnh bìa phim dùng asset và storage --}}
                <img src="{{ asset('storage' . $movie->image) }}"
                    class="img-fluid rounded shadow-lg w-100"
                    alt="{{ $movie->movie_name_vn }}"
                    onerror="this.src='{{ $movie->image_link }}'">
               
               {{-- <div class="mt-3 p-3 bg-light border-left border-primary">


                     <h5 class="text-primary"><i class="fa fa-star"></i> Đánh giá: {{ $movie->vote_average }}/10</h5>
                   
                    <small class="text-muted">Từ {{ number_format($movie->vote_count) }} lượt bình chọn</small>
                </div> --}}
            </div>
   <div class="col-md-8">
    <h2 class="text-uppercase font-weight-bold">{{ $movie->movie_name_vn }}</h2>
    <h5 class="text-muted italic">{{ $movie->tagline_vn }}</h5>
    <hr>


    <div class="movie-info-list">
        <p>Ngày phát hành: <b>{{ date('Y/m/d', strtotime($movie->release_date)) }}</b></p>
        <p>Quốc gia: <b>{{ $movie->country_name }}</b></p>
        <p>Thời gian: <b>{{ $movie->runtime }} phút</b></p>
        <p>Doanh Thu: <b>{{ number_format($movie->revenue) }}</b></p>
    </div>


               
                <p class="text-justify leading-relaxed"><b>Mô tả: </b> {{ !empty($movie->overview_vn) ? $movie->overview_vn : ($movie->overview ?: 'Nội dung phim đang được cập nhật.') }}</p>
                @if($movie->trailer)
                    <a href="{{ $movie->trailer }}" target="_blank" class="btn btn-success btn-lg mt-3">
                        <i class="fa fa-play"></i> Xem Trailer
                    </a>
                @endif
            </div>
        </div>
    </div>
</x-movie-layout>



