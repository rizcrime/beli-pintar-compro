@extends('layouts.main')

@section('main_content')
<section class="probootstrap-section probootstrap-bg-white probootstrap-zindex-above-showcase">
  <div id="services" class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate"
        data-animate-effect="fadeIn">
        <h2>Our Services</h2>
      </div>
    </div>
    <!-- END row -->
    <div class="row probootstrap-gutter60">
      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
        <div class="service hover_service text-center">
          <div class="icon"><i class="icon-mobile3"></i></div>
          <div class="text">
            <h3>ISO COMPLIANT</h3>
            <p>We are ISO and OSAS certified since 2004 and has won numerous awards and accolades over the years.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
        <div class="service hover_service text-center">
          <div class="icon"><i class="icon-lightbulb"></i></div>
          <div class="text">
            <h3>DEDICATED & PROFESSIONAL SALES</h3>
            <p>Our team delivers for every sectors from government to corporate and retail. Our professional and dedicated sales people will assist you in seamless integration and after sales.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
        <div class="service hover_service text-center">
          <div class="icon"><i class="icon-presentation"></i></div>
          <div class="text">
            <h3>PHYSICAL STORAGE SOLUTION</h3>
            <p>For Enterprises seeking physical storage solution onsite within their office premises, we are the go-to experts. We help to consult on the most cost efficient solution, build, maintain and service your physical storage and server.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
        <div class="service hover_service text-center">
          <div class="icon"><i class="icon-circle-compass"></i></div>
          <div class="text">
            <h3>MANAGED IT SERVICES</h3>
            <p>Streamline your IT services to increase productivity and efficiency within the workplace with our specialized solutions catered to safe cost up to 60%.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
        <div class="service hover_service text-center">
          <div class="icon"><i class="icon-magnifying-glass2"></i></div>
          <div class="text">
            <h3>NETWORK SOLUTIONS</h3>
            <p>We are the leading expert in any network solutionsincluding TCP/IP and star topology build up supported by the most advanced technology in cabling and fiber optic.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
        <div class="service hover_service text-center">
          <div class="icon"><i class="icon-browser2"></i></div>
          <div class="text">
            <h3>SUPPORT CONSULTING</h3>
            <p>We understand that not everyone is adept in IT. We are here for you to be consulted and provide solution from the simplest troubleshooting to the most complex configuration. Our trusted service centre had been appointed by international brands to be the authorized service point in Indonesia.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- END row -->
    {{-- <div class="row mt50">
      <div class="col-md-12 text-center">
        <a href="/services" class="btn btn-primary btn-lg" role="button">View all our services</a>
      </div>
    </div> --}}
  </div>
</section>

{{-- <section id="about-us" class="probootstrap-section probootstrap-bg-white">
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
</section> --}}

{{-- <section id="loyal-partner" class="probootstrap-section proboostrap-clients probootstrap-bg-white probootstrap-zindex-above-showcase">
  <div class="container">

    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
        <h2>Big Company Trusts Us</h2>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus
          quos quibusdam soluta at.</p>
      </div>
    </div>
    <!-- END row -->
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-6 text-center client-logo probootstrap-animate" data-animate-effect="fadeIn">
        <img src="img/client_1.png" class="img-responsive" alt="Free Bootstrap Template by uicookies.com">
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 text-center client-logo probootstrap-animate" data-animate-effect="fadeIn">
        <img src="img/client_2.png" class="img-responsive" alt="Free Bootstrap Template by uicookies.com">
      </div>
      <div class="clearfix visible-sm-block visible-xs-block"></div>
      <div class="col-md-3 col-sm-6 col-xs-6 text-center client-logo probootstrap-animate" data-animate-effect="fadeIn">
        <img src="img/client_3.png" class="img-responsive" alt="Free Bootstrap Template by uicookies.com">
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 text-center client-logo probootstrap-animate" data-animate-effect="fadeIn">
        <img src="img/client_4.png" class="img-responsive" alt="Free Bootstrap Template by uicookies.com">
      </div>

    </div>
  </div>
</section> --}}


{{-- <section class="probootstrap-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
          <div class="icon"><i class="icon-mobile3"></i></div>
          <div class="text">
            <h3>Responsive Design</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit iusto provident.</p>
          </div>
        </div>
        <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
          <div class="icon"><i class="icon-presentation"></i></div>
          <div class="text">
            <h3>Business Solutions</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit iusto provident.</p>
          </div>
        </div>
        <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
          <div class="icon"><i class="icon-circle-compass"></i></div>
          <div class="text">
            <h3>Brand Identity</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit iusto provident.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
          <div class="icon"><i class="icon-lightbulb"></i></div>
          <div class="text">
            <h3>Creative Ideas</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos
              quibusdam soluta at.</p>
          </div>
        </div>

        <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
          <div class="icon"><i class="icon-magnifying-glass2"></i></div>
          <div class="text">
            <h3>Search Engine Friendly</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos
              quibusdam soluta at.</p>
          </div>
        </div>

        <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
          <div class="icon"><i class="icon-browser2"></i></div>
          <div class="text">
            <h3>Easy Customization</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos
              quibusdam soluta at.</p>
          </div>
        </div>

      </div>
    </div> --}}
    <!-- END row -->
  </div>
</section>

{{-- <section id="testimony" class="probootstrap-section probootstrap-border-top probootstrap-bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
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
  </div> --}}
</section>
@endsection