<section>
    <!-- SLIDER is here! -->
    <!-- FIRST BLOCK -->
    @if(isset($pages) && is_object($pages))
    @foreach($pages as $page)
    <div id="{{ $page->alias }}">
        <div class="line">
            {!! $page->text !!}
            <div class="s-12 m-4 l-2 center"><a class="white-btn" href="#contact">Contact Us</a></div>
        </div>
    </div>
    @endforeach
    @endif
    <!-- FEATURES -->
    @if(isset($features) && is_object($features))
    <div id="features">
        <div class="line">
            <div class="margin">
                @foreach($features as $feature)
                <div class="s-12 m-6 l-3 margin-bottom">
                    <i class="{{ $feature->icon }}"></i>
                    <h2>{{ $feature->name }}</h2>
                    <p>{{ $feature->text }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <!-- ABOUT US -->
    @if(isset($about) && is_object($about))
    @foreach($about as $item)
    <div id="about-us">
        <div class="s-12 m-12 l-6 media-container">
            {!! Html::image('assets/img/'.$item->images) !!}
        </div>
        <article class="s-12 m-12 l-6">
            {!! $item->name !!}
            <p>{{ $item->text }}</p>
            <div class="about-us-icons">
                <i class="icon-paperplane_ico"></i> <i class="icon-trophy"></i> <i class="icon-clock"></i>
            </div>
        </article>
    </div>
    @endforeach
    @endif
    <!-- OUR WORK -->
    @if(isset($filters) && is_object($filters))
        @if(isset($portfolios) && is_object($portfolios))
    <div id="our-work">
        <div class="line">
            <h2 class="section-title">Our Work</h2>
            <div class="tabs">
                @foreach($filters as $filter)
                <div class="tab-item ">
                    <a class="tab-label">{{ $filter->alias }}</a>
                    <div class="tab-content">
                        <div class="margin">
                            @if($filter->alias == 'Development')
                                <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="{{ asset('assets/img/por7.jpg') }}" alt=""></a></div>
                                <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="{{ asset('assets/img/por5.jpg') }}" alt=""></a></div>
                                <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="{{ asset('assets/img/por1.jpg') }}" alt=""></a></div>
                                <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="{{ asset('assets/img/por2.jpg') }}" alt=""></a></div>
                            @elseif($filter->alias == 'Social Campaigns')
                                <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="{{ asset('assets/img/por4.jpg') }}" alt=""></a></div>
                                <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="{{ asset('assets/img/por6.jpg') }}" alt=""></a></div>
                                <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="{{ asset('assets/img/por3.jpg') }}" alt=""></a></div>
                                <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="{{ asset('assets/img/por5.jpg') }}" alt=""></a></div>
                            @elseif($filter->alias == 'Photography')
                                <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="{{ asset('assets/img/por7.jpg') }}" alt=""></a></div>
                                <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="{{ asset('assets/img/por2.jpg') }}" alt=""></a></div>
                                <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="{{ asset('assets/img/por5.jpg') }}" alt=""></a></div>
                                <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="{{ asset('assets/img/por6.jpg') }}" alt=""></a></div>
                            @else
                                <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="{{ asset('assets/img/por1.jpg') }}" alt=""></a></div>
                                <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="{{ asset('assets/img/por4.jpg') }}" alt=""></a></div>
                                <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="{{ asset('assets/img/por6.jpg') }}" alt=""></a></div>
                                <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="{{ asset('assets/img/por3.jpg') }}" alt=""></a></div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    @endif
    <!-- SERVICES -->
    @if(isset($services) && is_object($services))
    <div id="services">
        <div class="line">
            <h2 class="section-title">What we do</h2>
            <div class="margin">
                @foreach($services as $service)
                <div class="s-12 m-6 l-4 margin-bottom">
                    <i class="{{ $service->icon }}"></i>
                    <div class="service-text">
                        <h3>{{ $service->name }}</h3>
                        <p>{{ $service->text }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <!-- LATEST NEWS -->
    <div id="latest-news">
        <div class="line">
            <h2 class="section-title">Latest News</h2>
            <div class="margin">
                <div class="s-12 m-6 l-6">
                    <div class="s-12 l-2">
                        <div class="news-date">
                            <p class="day">28</p><p class="month">AUGUST</p><p class="year">2015</p>
                        </div>
                    </div>
                    <div class="s-12 l-10">
                        <div class="news-text">
                            <h4>First latest News</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="s-12 m-6 l-6">
                    <div class="s-12 l-2">
                        <div class="news-date">
                            <p class="day">12</p><p class="month">JULY</p><p class="year">2015</p>
                        </div>
                    </div>
                    <div class="s-12 l-10">
                        <div class="news-text">
                            <h4>Second latest News</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT -->
    <div id="contact">
        <div class="line">
            <h2 class="section-title">Contact Us</h2>
            <div class="margin">
                <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align">
                    <img src="{{ asset('assets/img/contact.jpg') }}" alt="">
                </div>
                <div class="s-12 m-12 l-4 margin-bottom right-align">
                    <h3>Vision Design - graphic zoo</h3>
                    <address>
                        <p><strong>Adress:</strong> Gallayova 19, 841 02 Bratislava</p>
                        <p><strong>Country:</strong> Slovakia - Europe</p>
                        <p><strong>E-mail:</strong> info@visiondesign.sk</p>
                    </address>
                    <br />
                    <h3>Social</h3>
                    <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/pages/Vision-Design-graphic-ZOO/154664684553091">Vision Design - graphic zoo</a></p>
                    <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/myresponsee">Responsee</a></p>
                    <p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="https://twitter.com/MyResponsee">Responsee</a></p>
                </div>
                <div class="s-12 m-12 l-5">
                    <h3>Example contact form (do not use)</h3>
                    <form class="customform" action="{{ route('home') }}" method="post">
                        <div class="s-12"><input name="email" placeholder="Your e-mail" title="Your e-mail" type="text" /></div>
                        <div class="s-12"><input name="name" placeholder="Your name" title="Your name" type="text" /></div>
                        <div class="s-12"><textarea placeholder="Your massage" name="text" rows="5"></textarea></div>
                        <div class="s-12 m-12 l-4"><button class="color-btn" type="submit">Submit Button</button></div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- MAP -->
    <div id="map-block">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1247814.3661917313!2d16.569872019090596!3d48.23131953825178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8cbf758ecb9f%3A0xddeb1d26bce5eccf!2sGallayova+2150%2F19%2C+841+02+D%C3%BAbravka!5e0!3m2!1ssk!2ssk!4v1440344568394" width="100%" height="450" frameborder="0" style="border:0"></iframe>
    </div>
</section>
<!-- FOOTER -->
<footer>
    <div class="line">
        <div class="s-12 l-6">
            <p>Copyright 2015, Vision Design - graphic zoo</p>
            <p>All images is purchased from Bigstock. Do not use the images in your website.</p>
        </div>
        <div class="s-12 l-6">
            <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding<br> by Responsee Team</a>
        </div>
    </div>
</footer>