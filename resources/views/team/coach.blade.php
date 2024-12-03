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
                        <li>Coach</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="our-team-section team-inner-page sec-spacer">
    <div class="container">
        <div class="row">
            @foreach($coaches as $coach)
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="our-team" style="position: relative;">
                    <img src="{{ asset('storage/' . $coach->image) }}" alt="Photo of {{ $coach->name }}" class="img-fluid" style="width: 100%; height: auto; object-fit: cover;" />
                    <div class="footer" style="position: absolute; bottom: 0; left: 0; width: 100%; background-color: #FFB200; padding: 2px 15px;">
                        <h5 class="person-name" style="margin: 0; font-weight: bold; font-size: 16px; text-align: left;">
                            {{ $coach->name }}
                        </h5>
                        <table class="person-info" style="margin: 5px 0 0 0; width: auto;">
                            <tbody>
                                <tr>
                                    <td style="padding-right: 10px; font-weight: normal;">Jabatan</td>
                                    <td style="font-weight: normal;">{{ $coach->jabatan }}</td>
                                </tr>
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