<section class="cta" id="action">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="heading text-center">
                    <p class="heading-subtitle">Have a questation</p>
                    <h2 class="heading-title">Get in touch</h2>
                </div>
                <form class="contactForm" method="post" action="assets/php/contact.php">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <input class="form-control" type="text" id="#contact-name" name="contact-name" placeholder="Name" required=""/>
                        </div>
                        <div class="col-12 col-md-6">
                            <input class="form-control" type="email" id="#contact-email" name="contact-email" placeholder="Email" required=""/>
                        </div>
                        <div class="col-12 col-md-6">
                            <input class="form-control" type="text" id="#contact-phone" name="contact-phone" placeholder="Phone" required=""/>
                        </div>
                        <div class="col-12 col-md-6">
                            <input class="form-control" type="text" id="#contact-company" name="contact-company" placeholder="Company" required=""/>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" id="contact-infos" placeholder="request details" name="contact-infos" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn--secondary">send message</button>
                        </div>
                        <div class="col-12">
                            <div class="contact-result"></div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End .col-12-->
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>