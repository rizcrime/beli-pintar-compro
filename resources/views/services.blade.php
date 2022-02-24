@extends('layouts.main')

@section('main_content')
<section class="probootstrap-section proboostrap-clients probootstrap-bg-white">
  <div class="container">

    <div class="row probootstrap-gutter60">
      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
        <div class="service hover_service text-center">
          <div class="icon"><i class="icon-mobile3"></i></div>
          <div class="text">
            <h3>Responsive Design</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos
              quibusdam soluta at.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
        <div class="service hover_service text-center">
          <div class="icon"><i class="icon-presentation"></i></div>
          <div class="text">
            <h3>Business Solutions</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos
              quibusdam soluta at.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
        <div class="service hover_service text-center">
          <div class="icon"><i class="icon-circle-compass"></i></div>
          <div class="text">
            <h3>Brand Identity</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos
              quibusdam soluta at.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
        <div class="service hover_service text-center">
          <div class="icon"><i class="icon-lightbulb"></i></div>
          <div class="text">
            <h3>Creative Ideas</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos
              quibusdam soluta at.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
        <div class="service hover_service text-center">
          <div class="icon"><i class="icon-magnifying-glass2"></i></div>
          <div class="text">
            <h3>Search Engine Friendly</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos
              quibusdam soluta at.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
        <div class="service hover_service text-center">
          <div class="icon"><i class="icon-browser2"></i></div>
          <div class="text">
            <h3>Easy Customization</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos
              quibusdam soluta at.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- END row -->
  </div>
</section>

<section class="probootstrap-section probootstrap-bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center section-heading">
        <h2>Testimonial</h2>
      </div>
    </div>
    <!-- END row -->
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel owl-carousel-fullwidth">
          <div class="item">

            <div class="probootstrap-testimony-wrap text-center">
              <figure>
                <img src="img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com">
              </figure>
              <blockquote class="quote">&ldquo;Design must be functional and functionality must be translated into
                visual aesthetics, without any reliance on gimmicks that have to be explained.&rdquo; <cite
                  class="author">&mdash; Ferdinand A. Porsche <br> <span>Design Lead at AirBNB</span></cite>
              </blockquote>
            </div>

          </div>
          <div class="item">
            <div class="probootstrap-testimony-wrap text-center">
              <figure>
                <img src="img/person_2.jpg" alt="Free Bootstrap Template by uicookies.com">
              </figure>
              <blockquote class="quote">&ldquo;Creativity is just connecting things. When you ask creative people how
                they did something, they feel a little guilty because they didn’t really do it, they just saw
                something. It seemed obvious to them after a while.&rdquo; <cite class="author">&mdash; Steve Jobs
                  <br> <span>Co-Founder Square</span></cite></blockquote>
            </div>
          </div>
          <div class="item">
            <div class="probootstrap-testimony-wrap text-center">
              <figure>
                <img src="img/person_3.jpg" alt="Free Bootstrap Template by uicookies.com">
              </figure>
              <blockquote class="quote">&ldquo;I think design would be better if designers were much more skeptical
                about its applications. If you believe in the potency of your craft, where you choose to dole it out
                is not something to take lightly.&rdquo; <cite class="author">&mdash; Frank Chimero <br>
                  <span>Creative Director at Twitter</span></cite></blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- END row -->
  </div>
</section>


<section class="probootstrap-cta">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">We'd like to help and talk with you</h2>
        <a href="#" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate"
          data-animate-effect="fadeInLeft">Contact Us</a>
      </div>
    </div>
  </div>
</section>
@endsection