<div id="topbar">
    <div class="line">
        <div class="s-12 m-6 l-6">
            <p>CONTACT US: <strong>0800 200 200</strong> | <strong>contact@sampledomain.com</strong></p>
        </div>
        <div class="s-12 m-6 l-6">
            <div class="social right">
                <a><i class="icon-facebook_circle"></i></a> <a><i class="icon-twitter_circle"></i></a> <a><i class="icon-google_plus_circle"></i></a> <a><i class="icon-instagram_circle"></i></a>
            </div>
        </div>
    </div>
</div>

@if(isset($menu))
    <nav>
        <div class="line">
            <div class="s-12 l-2">
                <p class="logo"><strong>One</strong>page</p>
            </div>
            <div class="top-nav s-12 l-10">
                <p class="nav-text">Custom menu text</p>
                <ul class="right">
                    @foreach($menu as $item)
                        <li><a href="#{{ $item['alias'] }}">{{ $item['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
@endif

@if(session('status'))
    <div>
        {{ session('status') }}
    </div>
@endif

@if(count($errors) > 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

