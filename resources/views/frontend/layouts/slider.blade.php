<div class="tm-heroslider-area bg-grey">
    <div class="tm-heroslider-slider">

        @foreach ($sliders as $slider)
        <!-- Heroslider Item -->
        <div class="tm-heroslider" data-bgimage="{{ asset('slider/' . $slider->image) }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-8 col-12">
                        <div class="tm-heroslider-contentwrapper">
                            <div class="tm-heroslider-content">
                                <h1>{{ $slider->title}}</h1>
                                <p>{{ $slider->description}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>