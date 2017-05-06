@extends('site.layout.master')


@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection


@section('content')
    <div class="my-account-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="s-title">
                        <h1>@lang('auth.pleaseActivate')</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form action="#">
                        <div class="form-fields">
                            <h2>@lang('titles.activation')</h2>
                            <p>@lang('auth.regThanks')</p>
                            <p>@lang('auth.anEmailWasSent',['email' => $email, 'date' => $date ])</p>
                            <p>@lang('auth.clickInEmail')</p>

                        </div>
                        <div class="form-action text-right">
                            <a href='/activation' class="btn btn-primary">@lang('auth.clickHereResend')</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection