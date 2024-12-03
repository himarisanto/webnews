@extends('layouts.master')

@section('content')

    <div class="slider-main">
        <div id="main-slider" class="owl-carousel">
            <div class="item">
                <img src="{{ asset('template_wbfc/images/full-slider/3.jpg') }}" alt="Slider image">
                <div class="dsc">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-xs-8">
                                <div class="slider-text">
                                    <h1 data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">WBFC MENARIK</h1>
                                    <div data-animation-in="slideInRight" data-animation-out="animate-out fadeOut" class="btm-date">
                                        There are many variations of passages of Lorem Ipsum available but the majority have <br class="hidden-xs hidden-sm" />suffered alteration in some form
                                    </div>
                                    <!-- <div class="btn-slider">
                                        <a href="#" class="btn1" data-animation-in="slideInUp" data-animation-out="animate-out slideOutDown">Read More</a>
                                        <a href="#" class="btn2" data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">Book a Ticket</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-4 hidden-420">
                                <div class="slider-image">
                                    <img data-animation-in="bounceInRight" data-animation-out="animate-out fadeOut" src="{{ asset('template_wbfc/images/full-slider/image-layer2.png') }}" alt="layer image">
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="upcoming-section">
        <div class="container">
            <h2>Upcoming Match</h2>
            <div id="upcoming" class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="false" data-md-device-dots="false">
                <div class="item">
                    <div class="col-md-4 col-sm-4 col-xs-12 first">
                        <img src="{{ asset('template_wbfc/images/upcoming/4.png') }}" alt="">
                        <h4>Mirpur Club</h4>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <span class="date">JUNE 16, 17:00</span>
                        <span class="vs">VS</span>
                        <span>Central Olympic Stadium</span>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 last">
                        <img src="{{ asset('template_wbfc/images/upcoming/3.png') }}" alt="">
                        <h4>Trisal Club</h4>
                    </div>
                </div>

                <div class="item">
                    <div class="col-md-4 col-sm-4 col-xs-12 first">
                        <img src="{{ asset('template_wbfc/images/upcoming/7.png') }}" alt="">
                        <h4>Kapa Club</h4>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <span class="date">JUNE 16, 17:00</span>
                        <span class="vs">VS</span>
                        <span>Central Olympic Stadium</span>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 last">
                        <img src="{{ asset('template_wbfc/images/upcoming/6.png') }}" alt="">
                        <h4>Dhoar Club</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="all-news-area sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="title-bg">Latest News</h3>
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="latest-news-slider">
                                <div>
                                    <div class="news-normal-block">
                                        <div class="news-img">
                                            <a href="#">
                                                <img src="template_wbfc/images/latest/1.jpg" alt="" />
                                            </a>
                                        </div>
                                        <h4 class="news-title"><a href="blog-single.html">FC Club Score Seven in CL Rout Match</a></h4>
                                        <div class="news-desc">
                                            <p>
                                                Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from repetitionetc.
                                            </p>
                                        </div>
                                        <div class="news-btn">
                                            <a class="primary-btn" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="news-normal-block">
                                        <div class="news-img">
                                            <a href="#">
                                                <img src="template_wbfc/images/latest/2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <h4 class="news-title"><a href="blog-single.html">FC Club Score Seven in CL Rout Match</a></h4>
                                        <div class="news-desc">
                                            <p>
                                                Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from repetitionetc.
                                            </p>
                                        </div>
                                        <div class="news-btn">
                                            <a class="primary-btn" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="news-normal-block">
                                        <div class="news-img">
                                            <a href="#">
                                                <img src="template_wbfc/images/latest/3.jpg" alt="" />
                                            </a>
                                        </div>
                                        <h4 class="news-title"><a href="blog-single.html">FC Club Score Seven in CL Rout Match</a></h4>
                                        <div class="news-desc">
                                            <p>
                                                Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from repetitionetc.
                                            </p>
                                        </div>
                                        <div class="news-btn">
                                            <a class="primary-btn" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="latest-news-nav">
                                <div><img src="template_wbfc/images/latest/tb1.jpg" alt="" /></div>
                                <div><img src="template_wbfc/images/latest/tb2.jpg" alt="" /></div>
                                <div><img src="template_wbfc/images/latest/tb3.jpg" alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar-area right-side-area">
                        <h3 class="title-bg">Recent Results</h3>
                        <div class="today-match-teams text-center">
                            <div class="overly-bg"></div>
                            <div class="title-head">
                                <h4>Last Match Result</h4>
                                <span class="date">Sunday, March 20th,2017</span>
                            </div>
                            <div class="today-score">
                                <div class="today-match-team">
                                    <img src="template_wbfc/images/today-match/1.png" alt="" />
                                    <h4>Trisal King</h4>
                                    <span>SKFC</span>
                                </div>
                                <div class="today-final-score">
                                    07 <span>-</span> 02
                                    <h4>final score</h4>
                                </div>
                                <div class="today-match-team">
                                    <img src="template_wbfc/images/today-match/2.png" alt="" />
                                    <h4>Mirpur King</h4>
                                    <span>SWFC</span>
                                </div>
                            </div>
                            <div class="title-head">
                                <h4>Previous Results</h4>
                            </div>
                            <div class="recent-match-results">
                                <div class="single-result">
                                    <div class="team-result clearfix">
                                        <div class="text-left match-result-list single-part"><img class="result-img" src="template_wbfc/images/today-match/1.png">Badda FC</div>
                                        <div class="text-center match-score single-part">
                                            <span class="score">3</span> - <span class="score">2</span>
                                        </div>
                                        <div class="text-left match-result-list single-part"><img class="result-img" src="template_wbfc/images/today-match/2.png" alt="Spain">Trisal FC</div>
                                    </div>
                                </div>
                                <div class="single-result">
                                    <div class="team-result clearfix">
                                        <div class="text-left match-result-list single-part"><img class="result-img" src="template_wbfc/images/today-match/1.png">Banani FC</div>
                                        <div class="text-center match-score single-part">
                                            <span class="score">4</span> - <span class="score">3</span>
                                        </div>
                                        <div class="text-left match-result-list single-part"><img class="result-img" src="template_wbfc/images/today-match/2.png" alt="Spain">Mirpur FC</div>
                                    </div>
                                </div>
                                <!-- More results here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="latest-video-section sec-spacer">
        <div class="overly-bg"></div>
        <div class="container">
            <h3 class="title-bg">Latest video</h3>
            <div class="row">
                <div class="col-md-8">
                    <div class="video-area mmb-40">
                        <img src="template_wbfc/images/latest-video/video.jpg" alt="Video" />
                        <div class="videos-icon">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=t17O6JoU2Ew">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 latest-news">
                    <div class="inner-news small-news">
                        <div class="news-img">
                            <a href="blog-single.html"><img src="template_wbfc/images/latest-video/1.jpg" alt="News" /></a>
                        </div>
                        <div class="news-text">
                            <h5><a href="blog-single.html">Badda FC vs Banni FC Highlights 1-1</a></h5>
                            <span class="date">May 30, 2017</span>
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner-news small-news">
                        <div class="news-img">
                            <a href="blog-single.html"><img src="template_wbfc/images/latest-video/2.jpg" alt="News" /></a>
                        </div>
                        <div class="news-text">
                            <h5><a href="blog-single.html">Badda FC vs Banni FC Highlights 1-1</a></h5>
                            <span class="date">May 30, 2017</span>
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner-news small-news">
                        <div class="news-img">
                            <a href="blog-single.html"><img src="template_wbfc/images/latest-video/3.jpg" alt="News" /></a>
                        </div>
                        <div class="news-text">
                            <h5><a href="blog-single.html">Badda FC vs Banni FC Highlights 1-1</a></h5>
                            <span class="date">May 30, 2017</span>
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="our-team-section pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <h3 class="title-bg">Top players</h3>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="our-team">
                            <img src="{{ asset('template_wbfc/images/team/2.jpg') }}" alt="Top Player Eyamin Hossain" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="team-single.html">
                                    <h5 class="person-name">NOVAL</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Born</td>
                                            <td>Sep 30, 1988</td>
                                        </tr>
                                        <tr>
                                            <td>Position</td>
                                            <td>Forward</td>
                                        </tr>
                                        <tr>
                                            <td>Squad number</td>
                                            <td>11</td>
                                        </tr>
                                        <tr>
                                            <td>Previous Club</td>
                                            <td>Badda</td>
                                        </tr>
                                        <tr>
                                            <td>Follow us on</td>
                                            <td>
                                                <ul class="person-social-icons">
                                                    <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="our-team">
                            <img src="{{ asset('template_wbfc/images/team/3.jpg') }}" alt="Top Player Istiak Ahmed" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="team-single.html">
                                    <h5 class="person-name">BOAS</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Born</td>
                                            <td>Sep 30, 1988</td>
                                        </tr>
                                        <tr>
                                            <td>Position</td>
                                            <td>Goalkeeper</td>
                                        </tr>
                                        <tr>
                                            <td>Squad number</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Previous Club</td>
                                            <td>Badda</td>
                                        </tr>
                                        <tr>
                                            <td>Follow us on</td>
                                            <td>
                                                <ul class="person-social-icons">
                                                    <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="our-team">
                            <img src="{{ asset('template_wbfc/images/team/1.jpg') }}" alt="Top Player Istiak Ahmed" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="team-single.html">
                                    <h5 class="person-name">Desman</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Born</td>
                                            <td>Sep 30, 1988</td>
                                        </tr>
                                        <tr>
                                            <td>Position</td>
                                            <td>Goalkeeper</td>
                                        </tr>
                                        <tr>
                                            <td>Squad number</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Previous Club</td>
                                            <td>Badda</td>
                                        </tr>
                                        <tr>
                                            <td>Follow us on</td>
                                            <td>
                                                <ul class="person-social-icons">
                                                    <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="our-team">
                            <img src="{{ asset('template_wbfc/images/team/4.jpg') }}" alt="Top Player Istiak Ahmed" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="team-single.html">
                                    <h5 class="person-name">KOLO</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Born</td>
                                            <td>Sep 30, 1988</td>
                                        </tr>
                                        <tr>
                                            <td>Position</td>
                                            <td>Goalkeeper</td>
                                        </tr>
                                        <tr>
                                            <td>Squad number</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Previous Club</td>
                                            <td>Badda</td>
                                        </tr>
                                        <tr>
                                            <td>Follow us on</td>
                                            <td>
                                                <ul class="person-social-icons">
                                                    <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
 
                        <div class="our-team">
                            <img src="{{ asset('template_wbfc/images/team/5.jpg') }}" alt="Top Player Istiak Ahmed" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="team-single.html">
                                    <h5 class="person-name">NUR</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Born</td>
                                            <td>Sep 30, 1988</td>
                                        </tr>
                                        <tr>
                                            <td>Position</td>
                                            <td>Goalkeeper</td>
                                        </tr>
                                        <tr>
                                            <td>Squad number</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Previous Club</td>
                                            <td>Badda</td>
                                        </tr>
                                        <tr>
                                            <td>Follow us on</td>
                                            <td>
                                                <ul class="person-social-icons">
                                                    <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
 
                        <div class="our-team">
                            <img src="{{ asset('template_wbfc/images/team/4.jpg') }}" alt="Top Player Istiak Ahmed" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="team-single.html">
                                    <h5 class="person-name">ONCO</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Born</td>
                                            <td>Sep 30, 1988</td>
                                        </tr>
                                        <tr>
                                            <td>Position</td>
                                            <td>Goalkeeper</td>
                                        </tr>
                                        <tr>
                                            <td>Squad number</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Previous Club</td>
                                            <td>Badda</td>
                                        </tr>
                                        <tr>
                                            <td>Follow us on</td>
                                            <td>
                                                <ul class="person-social-icons">
                                                    <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
 
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 best-player">
                    <h3 class="title-bg">Our Polls</h3>
                    <div class="best-footballer">
                        <h4>Who is the best footballer in 2018</h4>
                        <ul id="player-list">
                            <li>
                                <input type="radio" id="player1" name="player" value="1">
                                <span>Abdur Rashid</span>
                            </li>
                            <li>
                                <input type="radio" id="player2" name="player" value="2">
                                <span>Mahabub Alam</span>
                            </li>
                            <li>
                                <input type="radio" id="player3" name="player" value="3">
                                <span>Istiak Ahmed</span>
                            </li>
                            <li>
                                <input type="radio" id="player4" name="player" value="4">
                                <span>Riaz Ahmed</span>
                            </li>
                            <li>
                                <input type="radio" id="player5" name="player" value="5">
                                <span>Deluar Hosen</span>
                            </li>
                        </ul>
                        <div class="submit-area">
                            <input type="button" name="vote" value="Vote" class="btn btn1">
                            <input type="button" name="view" value="View Results" class="btn btn2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="gallery-section-area pb-70">
        <div class="container" id="grid">
            <h3 class="title-bg">match gallery</h3>
            <div id="gallery-items">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-gallery">
                            <img src="template_wbfc/images/gallery2/1.jpg" alt="" />
                            <div class="heading-conent">
                                <h4>Photo Title Here</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="bottom-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="image-popup" href="template_wbfc/images/gallery2/1.jpg"><i class="fa fa-power-off"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-gallery">
                            <img src="template_wbfc/images/gallery2/2.jpg" alt="" />
                            <div class="heading-conent">
                                <h4>Photo Title Here</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="bottom-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="image-popup" href="template_wbfc/images/gallery2/2.jpg"><i class="fa fa-power-off"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-gallery">
                            <img src="template_wbfc/images/gallery2/3.jpg" alt="" />
                            <div class="heading-conent">
                                <h4>Photo Title Here</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="bottom-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="image-popup" href="template_wbfc/images/gallery2/3.jpg"><i class="fa fa-power-off"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-gallery">
                            <img src="template_wbfc/images/gallery2/4.jpg" alt="" />
                            <div class="heading-conent">
                                <h4>Photo Title Here</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="bottom-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="image-popup" href="template_wbfc/images/gallery2/4.jpg"><i class="fa fa-power-off"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-gallery">
                            <img src="template_wbfc/images/gallery2/5.jpg" alt="" />
                            <div class="heading-conent">
                                <h4>Photo Title Here</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="bottom-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="image-popup" href="template_wbfc/images/gallery2/5.jpg"><i class="fa fa-power-off"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-gallery">
                            <img src="template_wbfc/images/gallery2/6.jpg" alt="" />
                            <div class="heading-conent">
                                <h4>Photo Title Here</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="bottom-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="image-popup" href="template_wbfc/images/gallery2/6.jpg"><i class="fa fa-power-off"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="champion-awards-section sec-spacer">
        <div class="overly-bg"></div>
        <div class="container">
            <h3 class="title-bg">champion awards</h3>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="1500" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false" data-md-device-dots="false">
                <div class="champion-list">
                    <img src="template_wbfc/images/awards/1.png" alt="" />
                    <div class="awards-content">
                        <h4 class="awards-title">Club 2017 champion</h4>
                    </div>
                </div>
                <div class="champion-list">
                    <img src="template_wbfc/images/awards/2.png" alt="" />
                    <div class="awards-content">
                        <h4 class="awards-title">Club 2017 champion</h4>
                    </div>
                </div>
                <div class="champion-list">
                    <img src="template_wbfc/images/awards/3.png" alt="" />
                    <div class="awards-content">
                        <h4 class="awards-title">Club 2017 champion</h4>
                    </div>
                </div>
                <div class="champion-list">
                    <img src="template_wbfc/images/awards/4.png" alt="" />
                    <div class="awards-content">
                        <h4 class="awards-title">Club 2017 champion</h4>
                    </div>
                </div>
                <div class="champion-list">
                    <img src="template_wbfc/images/awards/3.png" alt="" />
                    <div class="awards-content">
                        <h4 class="awards-title">Club 2017 champion</h4>
                    </div>
                </div>
                <div class="champion-list">
                    <img src="template_wbfc/images/awards/4.png" alt="" />
                    <div class="awards-content">
                        <h4 class="awards-title">Club 2017 champion</h4>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="our-products-section sec-spacer">
        <div class="container">
            <h3 class="title-bg">Top Products</h3>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false" data-md-device-dots="false">
                <div class="single-product text-center">
                    <div class="product-image">
                        <div class="overly"></div>
                        <a href="#"><img src="{{ asset('template_wbfc/images/product/1.jpg') }}" alt="Product" /></a>
                    </div>
                    <div class="product-details">
                        <div class="product-tile">
                            <a href="shop-single.html">Product Title Here</a>
                            <span>$55.00</span>
                        </div>
                        <div class="product-cart">
                            <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="single-product text-center">
                    <div class="product-image">
                        <div class="overly"></div>
                        <a href="#"><img src="{{ asset('template_wbfc/images/product/2.jpg') }}" alt="Product" /></a>
                    </div>
                    <div class="product-details">
                        <div class="product-tile">
                            <a href="shop-single.html">Product Title Here</a>
                            <span>$55.00</span>
                        </div>
                        <div class="product-cart">
                            <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="single-product text-center">
                    <div class="product-image">
                        <div class="overly"></div>
                        <a href="#"><img src="{{ asset('template_wbfc/images/product/3.jpg') }}" alt="Product" /></a>
                    </div>
                    <div class="product-details">
                        <div class="product-tile">
                            <a href="shop-single.html">Product Title Here</a>
                            <span>$55.00</span>
                        </div>
                        <div class="product-cart">
                            <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="single-product text-center">
                    <div class="product-image">
                        <div class="overly"></div>
                        <a href="#"><img src="{{ asset('template_wbfc/images/product/4.jpg') }}" alt="Product" /></a>
                    </div>
                    <div class="product-details">
                        <div class="product-tile">
                            <a href="shop-single.html">Product Title Here</a>
                            <span>$55.00</span>
                        </div>
                        <div class="product-cart">
                            <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="clicent-logo-section sec-spacer">
        <div class="overly-bg"></div>
        <div class="container">
            <div id="upcoming" class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="20" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false" data-md-device-dots="false">
                <div class="item">
                    <div class="single-logo">
                        <a href="#"><img src="{{ asset('template_wbfc/images/logo/1.png') }}" alt="Client Logo 1"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="single-logo">
                        <a href="#"><img src="{{ asset('template_wbfc/images/logo/2.png') }}" alt="Client Logo 2"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="single-logo">
                        <a href="#"><img src="{{ asset('template_wbfc/images/logo/3.png') }}" alt="Client Logo 3"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="single-logo">
                        <a href="#"><img src="{{ asset('template_wbfc/images/logo/4.png') }}" alt="Client Logo 4"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer End -->

    <!-- Footer End -->

    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="fa fa-close"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="eg: Soccer News" type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="return-to-top">
        <span>Top</span>
    </div>
    <!-- @yield('content') -->

    @endsection
