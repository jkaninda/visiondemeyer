<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-up">{{__('lang.contact.contact_us')}}</h2>
        <p data-aos="fade-up">{{__('lang.contact.contact_us_desc')}}</p>
      </div>

      <div class="row justify-content-center">

        <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>{{__('lang.contact.our_address')}}</h3>
            <p>
              23, avenue Militants<br>
              Quartier Funa<br>
              Commune de Limete<br>
              Kinshasa – Rdc<br><br>
            </p>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>{{__('lang.contact.email_us')}}</h3>
            <p>{{__('lang.system.email')}}<br></p>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>{{__('lang.contact.call_us')}}</h3>
            <p>{{__('lang.system.phone')}}<br></p>
          </div>
        </div>
      </div>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
        <div class="col-xl-9 col-lg-12 mt-4">
          <form action="#" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="{{__('lang.contact.your_name')}}" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="{{__('lang.contact.your_email')}}" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="{{__('lang.contact.subject')}}" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">{{__('lang.contact.send_message')}}</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->