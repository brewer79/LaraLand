<!-- CAROUSEL -->
@if(isset($sliders) && is_object($sliders))
<div id="carousel">
    <div id="owl-demo" class="owl-carousel owl-theme">
        @foreach($sliders as $slider)
        <div class="item">
            {!! Html::image('assets/img/'.$slider->image) !!}
            <div class="line">
                <div class="text hide-s">
                    <div class="line">
                        <div class="prev-arrow hide-s hide-m">
                            <i class="icon-chevron_left"></i>
                        </div>
                        <div class="next-arrow hide-s hide-m">
                            <i class="icon-chevron_right"></i>
                        </div>
                    </div>
                    <h2>{{ $slider->name }}</h2>
                    <p>{{ $slider->text }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif