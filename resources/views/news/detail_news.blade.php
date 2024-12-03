@extends('layouts.master')

@section('content')

<!-- Breadcrumbs Section -->
<div class="rs-breadcrumbs sec-color">
    <img src="images/breadcrumbs/blog-left.jpg" alt="Breadcrubs-image" />
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">News Single</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>News</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Detail News Section -->
<div class="single-blog-details sec-spacer">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <!-- Single Image -->
                <div class="single-image">
                    <img src="{{ asset('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" class="img-fluid custom-size-img">
                </div>

                <!-- News Title -->
                <h3>{{ $newsItem->title }}</h3>

                <!-- News Content -->
                <p>{{ $newsItem->content }}</p>
                <blockquote>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    {{ $newsItem->quote }}
                </blockquote>

                <p>{{ $newsItem->description }}</p>

                <!-- Author, Date, Category, and Tags Section -->
                <div class="share-section">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12 life-style">
                            <span class="author">
                                <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> {{ $newsItem->author ?? 'Admin' }}</a>
                            </span>
                            <span class="comment">
                                <a href="#">
                                    <i class="fa fa-commenting-o" aria-hidden="true"></i> 12
                                </a>
                            </span>
                            <span class="date">
                                <i class="fa fa-calendar" aria-hidden="true"></i> {{ \Carbon\Carbon::parse($newsItem->date)->format('d-m-Y') }}
                            </span>
                            <span class="cat">
                                <a href="#"><i class="fa fa-folder-o" aria-hidden="true"></i> {{ $newsItem->category }}</a>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Back Button -->
                <a href="{{ route('news.index') }}" class="btn btn-secondary">Back to News List</a>
            </div>
        </div>
    </div>
</div>

@endsection