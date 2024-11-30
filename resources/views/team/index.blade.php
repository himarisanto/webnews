@extends('layouts.master')

@section('content')


<div class="rs-breadcrumbs sec-color">
    <img src="{{ asset('template_wbfc/images/breadcrumbs/team.jpg') }}" alt="Breadcrumbs" />
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Our Team</h1>
                    <ul>
                        <li>
                            <a class="active" href="index-2.html">Home</a>
                        </li>
                        <li>Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="our-team-section team-inner-page sec-spacer">
    <div class="container">
        <div class="row">
            @foreach($teams as $team)
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="our-team">
                    <img src="{{ asset('storage/' . $team->image) }}" alt="Photo of {{ $team->name }}" class="img-fluid" />
                    <div class="person-details">
                        <div class="overly-bg"></div>
                            <h5 class="person-name">{{ $team->name }}</h5>
                        </a>
                        <table class="person-info">
                            <tbody>
                                <!-- <tr>
                                    <td>Born</td>
                                    <td>{{ $team->birth_date }}</td>
                                </tr> -->
                                <tr>
                                    <td>Position</td>
                                    <td>{{ $team->position }}</td>
                                </tr>
                                <tr>
                                    <td>Squad number</td>
                                    <td>{{ $team->squad_number }}</td>
                                </tr>
                                <tr>
                                    <td>Previous Club</td>
                                    <td>{{ $team->previous_club }}</td>
                                </tr>
                                <tr>
                                   <td>Jumlah Gol</td>
                                   <td>{{ $team->jumlah_gol}}</td>
                                </tr>
                                <!-- <tr>
                                    <td>Follow us on</td>
                                    <td>
                                        <ul class="person-social-icons">
                                            <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection 

	