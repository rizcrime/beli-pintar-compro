@extends('layouts.main')

@section('main_content')
<section class="probootstrap-section proboostrap-clients probootstrap-bg-white probootstrap-zindex-above-showcase">
  <div class="container">

    <div class="row mb50">
      <div class="col-md-4">
        <h1 class="mt0">This Is A Nice Title For Your Project</h1>
      </div>
      <div class="col-md-7 col-md-push-1">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum est incidunt dolorem earum doloremque quasi
          mollitia magnam debitis eos eligendi ratione a illo ipsam aspernatur quas odio dicta! Neque ullam reiciendis
          numquam architecto eius reprehenderit aperiam dicta voluptates laborum a fugit sit non omnis perferendis
          magni suscipit dolorum cumque obcaecati autem. Explicabo odit veritatis quae porro praesentium veniam
          delectus itaque expedita cumque minus necessitatibus quia assumenda illum! Vitae doloribus nemo esse alias
          autem debitis facilis quae pariatur voluptatum eaque perspiciatis animi accusantium cupiditate at molestias
          optio assumenda hic fuga. Consequatur vero cupiditate ea dolorum sit cum odio ipsam aliquam sed!</p>
        <p>Explicabo odit veritatis quae porro praesentium veniam delectus itaque expedita cumque minus necessitatibus
          quia assumenda illum! Vitae doloribus nemo esse alias autem debitis facilis quae pariatur voluptatum eaque
          perspiciatis animi accusantium cupiditate at molestias optio assumenda hic fuga. Consequatur vero cupiditate
          ea dolorum sit cum odio ipsam aliquam sed!</p>
      </div>
    </div>
    <!-- END row -->
    <div class="row">
      <div class="col-md-12">
        <p><img src="img/slider_1.jpg" class="img-responsive" alt="Free Bootstrap Template by uicookies.com"></p>
      </div>
    </div>
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

<section class="probootstrap-section probootstrap-bg-white ">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center section-heading">
        <h2>More Project</h2>
      </div>
    </div>
  </div>
  <div class="owl-carousel owl-work">
    <div class="item">
      <a href="/portfolio-single">
        <img src="img/work_1.jpg" alt="Free Bootstrap Template by uicookies.com">
      </a>
    </div>
    <div class="item">
      <a href="/portfolio-single">
        <img src="img/work_2.jpg" alt="Free Bootstrap Template by uicookies.com">
      </a>
    </div>
    <div class="item">
      <a href="/portfolio-single">
        <img src="img/work_3.jpg" alt="Free Bootstrap Template by uicookies.com">
      </a>
    </div>
    <div class="item">
      <a href="/portfolio-single">
        <img src="img/work_4.jpg" alt="Free Bootstrap Template by uicookies.com">
      </a>
    </div>
    <div class="item">
      <a href="/portfolio-single">
        <img src="img/work_5.jpg" alt="Free Bootstrap Template by uicookies.com">
      </a>
    </div>
    <div class="item">
      <a href="/portfolio-single">
        <img src="img/work_6.jpg" alt="Free Bootstrap Template by uicookies.com">
      </a>
    </div>
    <div class="item">
      <a href="/portfolio-single">
        <img src="img/work_7.jpg" alt="Free Bootstrap Template by uicookies.com">
      </a>
    </div>
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