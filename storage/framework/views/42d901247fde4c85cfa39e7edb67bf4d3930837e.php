<div class="contact-modal">
    <div class="modal fade" id="myModalContact">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-3">
                                <div class="contact-form">
                                    <div class="section-title">
                                        <h2>Contact Us</h2>
                                        <p>
                                        Thank you for contacting us , We will answer you as soon as possible</p>
                                    </div>
                                    <div class="row">
                                        
                                        <!-- FORM -->
                                        <form class="contact-form" id="contact" role="form" method="POST" action="<?php echo e(url('/contact-us')); ?>">

                                            <!-- IF MAIL SENT SUCCESSFULLY -->
                                            <h6 class="success">
													<span class="olored-text icon_check"></span> Your message has been sent successfully. </h6>

                                            <!-- IF MAIL SENDING UNSUCCESSFULL -->
                                            <h6 class="error">
													<span class="colored-text icon_error-circle_alt"></span> E-mail must be valid and message must be longer than 1 character. </h6>

                                            <div class="field-wrapper col-md-6">
                                                <input class="form-control input-box" id="cf-name" type="text" name="cf-name" placeholder="Your Name">
                                            </div>

                                            <div class="field-wrapper col-md-6">
                                                <input class="form-control input-box" id="cf-email" type="email" name="cf-email" placeholder="Email">
                                            </div>

                                            <div class="field-wrapper col-md-12">
                                                <input class="form-control input-box" id="cf-subject" type="text" name="cf-subject" placeholder="Subject">
                                            </div>

                                            <div class="field-wrapper col-md-12">
                                                <textarea class="form-control textarea-box" id="cf-message" rows="4" name="cf-message" placeholder="Your Message"></textarea>
                                            </div>

                                            <div class="field-wrapper col-md-12">
                                                <button class="btn button" type="submit" id="cf-submit" name="submit">Send Message</button>
                                            </div>
                                        </form>
                                        <!-- /END FORM -->
                                    </div>
                                    <!-- /End Row -->
                                </div>
                                <!-- /End Contact Form -->
                            </div>
                            <!-- /End Column -->
                        </div>
                        <!-- /End Row -->
                    </div>
                    <!-- /End Container -->
                </div>
                <!-- /End Modal Body -->
            </div>
            <!-- /End Content -->
        </div>
        <!-- /End Modal Dialog -->
    </div>

</div>