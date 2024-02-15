@extends("layouts.app")
@section("Contact")


<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Get 24/7 Support</p>
                    <h1>Contact us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- contact form -->
<div class="contact-from-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="form-title">
                    <h2>Have you any question?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!</p>
                </div>
                 <div id="form_status"></div>
                <div class="contact-form">
                    <form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
                        <p>
                            <input type="text" placeholder="Name" name="name" id="name">
                            <input type="email" placeholder="Email" name="email" id="email">
                        </p>
                        <p>
                            <input type="tel" placeholder="Phone" name="phone" id="phone">
                            <input type="text" placeholder="Subject" name="subject" id="subject">
                        </p>
                        <p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
                        <input type="hidden" name="token" value="FsWga4&@f6aw" />
                        <p><input type="submit" value="Submit"></p>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-form-wrap">
                    <div class="contact-form-box">
                        <h4><i class="fas fa-map"></i> Shop Address</h4>
                        <p>Algeria, Alger City. <br>  We operate as an online E-commerce business .</p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="far fa-clock"></i> Shop Hours</h4>
                        <p> 24h / 24h for all the week  </p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="fas fa-address-book"></i> Contact</h4>
                        <p>Phone: +213 658 89 05 01 <br> Email: ms7mosbah@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end contact form -->

<!-- find our location -->
<div class="find-location blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p> <i class="fas fa-map-marker-alt"></i> Our Location</p>
            </div>
        </div>
    </div>
</div>
<!-- end find our location -->

<!-- google map section -->
<div class="embed-responsive embed-responsive-21by9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102286.38397061841!2d3.218954310322079!3d36.75978277287426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fad6795639515%3A0x4ba4b4c9d0a7e602!2z2YXYr9mK2YbYqSDYp9mE2KzYstin2KbYsQ!5e0!3m2!1sar!2sdz!4v1707247508843!5m2!1sar!2sdz" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- end google map section -->

@endsection
