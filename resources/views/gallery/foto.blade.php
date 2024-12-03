@extends('layouts.master')

@section('content')
<div class="rs-breadcrumbs sec-color">
    <img src="images/breadcrumbs/gallery1.jpg" alt="Breadcrubs" />
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Gallery WBFC</h1>
                    <ul>
                        <li>
                            <a class="active" href="index-2.html">Home</a>
                        </li>
                        <li>Gallery WBFC</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gallery-section-area pb-70 sec-spacer">
    <div class="container" id="grid">
        <h3 class="title-bg">Instagram Photos</h3>
        <div id="gallery-items">
            <div class="row">
                @if($photos)
                @foreach($photos as $photo)
                <div class="col-md-4 col-sm-6">
                    <div class="single-gallery">
                        <img src="{{ $photo[''] }}" alt="https://www.instagram.com/waanalbfc/?igsh=ZWo0d3ZwanBxdnM1{{ $photo['caption'] ?? 'Instagram Photo' }}" />
                        <div class="heading-conent">
                            <h4>{{ $photo['caption'] ?? 'No Caption' }}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <p>No photos available to display.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection