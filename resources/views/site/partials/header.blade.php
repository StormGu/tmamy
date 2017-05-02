<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ url(config('settings.site_logo')) }}" alt="Stepre"></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                <div class="search-form">
                    <form id="search-form" action="#">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="categories">
                            <div class="box-search-select">
                                <a data-toggle="modal" data-target="#myModal" class="mdl">Advance Search</a>
                            </div>
                        </div>

                        <input type="search" placeholder="What do you want to search  . ." name="s"/>
                        <button type="submit"><i class="fa fa-search"></i>Search</button>
                    </form>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Search</h4>
                        </div>
                        <div class="modal-body">
                            @include('site.partials.search')
                            @include('site.partials.menu')

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-modal" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="header-right-menu">
                    <ul class="header-r-cart">
                        <li>
                            @if (Auth::check())
                                <a class="cart" href="{{ url('/profile') }}">
                                    @lang('auth.hello') {{ Auth::user()->name }}
                                </a>
                            @else
                                <a class="cart" href="">
                                    <i class="fa fa-power-off"></i> @lang('auth.login')
                                </a>
                                <div class="mini-cart-content">
                                    @include('site.auth.login_form')
                                </div>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>