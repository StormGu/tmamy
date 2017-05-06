@extends('adforest.layout.master')

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')
    <div class="main-content-area clearfix">
        <section class="section-padding pattern_dots">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-us-content">
                            <div class="heading-panel">
                                <h3 class="main-title text-left">
                                    @lang('auth.pleaseActivate')
                                </h3>
                            </div>
                            <h2>@lang('titles.activation')</h2>
                            <br>
                            <p>@lang('auth.regThanks')</p>
                            <p>@lang('auth.anEmailWasSent',['email' => $email, 'date' => $date ])</p>
                            <p>@lang('auth.clickInEmail')</p>

                            <div class="text-right">
                                <a href="{{ url('activation') }}" class="btn btn-success">@lang('auth.clickHereResend')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection