@extends('layouts.master')

@section('content')

<div class="rs-breadcrumbs sec-color">
    <img src="{{ asset('template_wbfc/images/breadcrumbs/blog.jpg') }}" alt="Breadcrubs" />
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">News</h1>
                    <ul>
                        <li>
                            <a class="active" href="index-2.html">Home</a>
                        </li>
                        <li>News</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container sec-spacer">
    <div class="row">
        @foreach($news as $item)
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="single-blog-slide">
                <div class="images">
                    <a href="#"><img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"></a>
                </div>
                <div class="blog-details">
                    <span class="date">
                        <i class="fa fa-calendar-check-o"></i>
                        {{ $item->date ? $item->date->format('d-m-Y') : 'Unpublished' }}
                    </span>
                    <h3><a href="#">{{ $item->title }}</a></h3>
                    <p>{{ Str::limit($item->content, 100) }}</p>
                    <div class="read-more">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="pagination" style="margin-top: 20px;">
        {{ $news->links() }}
    </div>
</div> -->
<div class="container sec-spacer">
    <div class="row">
        @foreach($news as $item)
        <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
            <div class="single-blog-slide">
                <div class="images">
                    <a href="#"><img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="img-fluid" style="border-radius: 8px;"></a>
                </div>
                <div class="blog-details">
                    <span class="date">
                        <i class="fa fa-calendar-check-o"></i>
                        {{ $item->date ? \Carbon\Carbon::parse($item->date)->format('d-m-Y') : 'Unpublished' }}
                    </span>
                    <h3><a href="#">{{ $item->title }}</a></h3>
                    <p>{{ Str::limit($item->description, 100) }}</p> <!-- Pastikan menggunakan description, bukan content -->
                    <div class="read-more">
                        <a href="{{ route('news.show', $item->id) }}" class="btn-read-more" style="display: inline-block; padding: 10px 20px; background-color: transparent; border: 2px solid #ffa500; color: #ffa500; text-decoration: none; border-radius: 5px; font-size: 14px; transition: all 0.3s ease;">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="pagination" style="margin-top: 20px;">
        {{ $news->links() }}
    </div>
</div>

@endsection