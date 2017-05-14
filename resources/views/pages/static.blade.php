@extends('adforest.layout.oldmaster')

@section('content')
    <div id="help">
        <div class="wHeader">
            <div class="container">
                <div class="helpcenter">
                    <i class="fa fa-leaf" aria-hidden="true"></i>
                    <h3>
                        @lang('page.help_center')
                    </h3>
                    <p>
                        @lang('page.help_description')
                    </p>
                </div>

                <ul class="help-breadcrumb">
                    <li>
                        <a href="javascript:;">@lang('common.home')</a>
                    </li>
                    <li>
                        <a href="javascript:;">{{ $page->title }}</a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="container">
            <div class="help-sidemenu">
                <ul>
                    <li class="">
                        <a href="javascript:;">Help Center<i class="icon icon-arrow-right"></i></a>
                        <ul>
                            <li class="active">
                                <ul>

                                    @foreach(\Backpack\PageManager\app\Models\Page::get() as $url)
                                        <li @if(Route::current()->parameters('page')['page'] == $url->slug) class="curr"@endif>
                                            <a href="{{ url($url->slug) }}">{{ $url->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="help-content">
                <div class="title">
                    <h5>{{ $title }}</h5>
                </div>
                <div class="qanda-list">
                    <div class="qanda accordion active">
                        <h6 class="accordion-head" id="H183">
                            <i class="icon icon-arrow-right"></i>
                            {{ $title }}
                        </h6>
                        <div class="qanda-content accordion-content">
                            <div class="desc">

                                {!! nl2br($page->content) !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection