@extends('master-layout')
@section('title','Kết quả tìm kiếm')
@section('content')
    @include('carosel_home')
    <link rel="stylesheet" type="text/css" href="{{asset('css/tour/chitietdiemden.css')}}">
    <!-- Link font GG -->
    <link href="https://fonts.googleapis.com/css?family=Baloo|Charm|IBM+Plex+Serif|Lobster|Playfair+Display&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo|Baloo+Paaji|Charm|IBM+Plex+Serif|Lobster|Pattaya|Playfair+Display&display=swap"
          rel="stylesheet">

    <div id="content">
        <div class="container detail-des">
            <h3>Kết quả tìm kiếm</h3><br><br>
            @if(Session::has('err'))
                <div class="alert alert-danger">
                    <p>{{Session::get('err')}}</p>
                </div>
            @endif

            <div class="row" id="list">
                <div class="col-lg-9 col-md-12" id="tour-list">
                    @foreach($search as $stt => $tour)
                        <div class="tour row">
                            <div class="image-2 col-md-4">
                                <img src="storage/tour/avatar/{{$tour->avatar}}" alt="">
                            </div>
                            <div class="info col-md-8">
                                <h5>
                                    <a href="{{route('chitiettour',$tour->id)}}"><b>{{$tour->name}}</b>
                                    </a>
                                </h5>
                                <div class="row">
                                    <div class="left col-md-6">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i><br>
                                        <span>Mã: {{$tour->id}}</span><br>
                                        <span>Thời gian: {{$tour->songay}} ngày<br>
                                        <span>Khởi hành: {{$tour->noikhoihanh}}</span><br>
                                        <span>Ngày khởi hành: {{$tour->ngaykhoihanh}}</span>
                                    </div>
                                    <div class="right col-md-6 ml-auto">
                                        <br>
                                        <span>Số chỗ còn: {{$tour->socho}}</span><br>
                                        <span>Giá 1 khách:</span><br>
                                        <span style="color: red; font-size: 22px"><b>{{number_format($tour->giamoi)}}đ</b></span>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    @endforeach
                    <div class="justify-content-center row ">
                    <div class="col-md-4">{{$search->links()}}</div></div>
                </div>

                <div class="col-lg-3 col-md-12" id="list-news">
                    <h4>Tin tức</h4>
                    @foreach($listnews as $stt => $news)
                    <div class="row news pt-2">
                        <a href="{{route('chitiet',$news->id)}}">
                        <p>
                            <img src="storage/news/avatar/{{$news->avatar}}"style="border: 1px solid blue" alt="">
                        </p>
                        <b class="btn-primary">{{$news->tieude}}</b>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
@endsection
