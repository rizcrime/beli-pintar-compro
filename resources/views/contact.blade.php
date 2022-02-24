@extends('layouts.main')

@section('main_content')
<section class="probootstrap-section probootstrap-bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-5 probootstrap-animate" data-animate-effect="fadeIn">
        <h2>Drop us a line</h2>
        <form action="#" method="post" class="probootstrap-form">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Submit Form">
          </div>
        </form>
      </div>
      <div class="col-md-6 col-md-push-1 probootstrap-animate" data-animate-effect="fadeIn">
        <h2>Get in touch</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam
          soluta at.</p>

        <h4>USA</h4>
        <ul class="probootstrap-contact-info">
          <li><i class="icon-pin"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
          <li><i class="icon-email"></i><span>info@domain.com</span></li>
          <li><i class="icon-phone"></i><span>+123 456 7890</span></li>
        </ul>

        <h4>Europe</h4>
        <ul class="probootstrap-contact-info">
          <li><i class="icon-pin"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
          <li><i class="icon-email"></i><span>info@domain.com</span></li>
          <li><i class="icon-phone"></i><span>+123 456 7890</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection