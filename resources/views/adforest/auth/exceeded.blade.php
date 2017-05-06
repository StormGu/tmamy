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
                                    @lang('titles.exceeded')
                                </h3>
                            </div>
                            <br>
                            {!! __('auth.tooManyEmails', ['email' => $email, 'hours' => $hours]) !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection