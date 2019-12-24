<?php $this->load->view("front/includes/top_all"); ?>
<?php $lang = $this->session->userdata("dil")?>


<!-- Contact Us -->
<section id="contact" class="contact section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2><?php echo $contact["name_$lang"]?></h2>
                    <p><?php echo $contact["desc_$lang"]?></p>
                </div>
            </div>
        </div>
        <div class="contact-head">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="contact-map">
                        <!-- Map -->
                        <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.37994113188!2d49.86989381463283!3d40.378271165902994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307df60aace273%3A0x9b21362f9d864019!2sIELTS%20Coaching!5e0!3m2!1saz!2s!4v1574538228967!5m2!1saz!2s" width="100%" height="100%" frameborder="0" style="border:0" ></iframe>
                        </div>
                        <!--/ End Map -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-head">
                        <!-- Form -->
                        <form class="form">
                            <div class="form-group">
                                <input name="name" type="text" placeholder="<?php echo $this->lang->line("ad_soyad")?>">
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" placeholder="<?php echo $this->lang->line("mail")?>">
                            </div>
                            <div class="form-group">
                                <input name="subject" type="text" placeholder="<?php echo $this->lang->line("telefon")?>">
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="<?php echo $this->lang->line("mesajiniz")?>"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn primary"><?php echo $this->lang->line("gonder")?></button>
                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-bottom">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Contact-Info -->
                    <div class="contact-info">
                        <div class="icon"><i class="fa fa-map"></i></div>
                        <h3><?php echo $this->lang->line("lokasiya")?></h3>
                        <?php echo $contact["address_$lang"]?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Contact-Info -->
                    <div class="contact-info">
                        <div class="icon"><i class="fa fa-envelope"></i></div>
                        <h3><?php echo $this->lang->line("mail")?></h3>
                        <a href="mailto:<?php echo $contact["email"]?>"><?php echo $contact["email"]?></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Contact-Info -->
                    <div class="contact-info">
                        <div class="icon"><i class="fa fa-phone"></i></div>
                        <h3><?php echo $this->lang->line("telefon")?></h3>
                        <p><?php echo $contact["phone"]?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Contact Us -->




















<!-- Footer -->
<?php $this->load->view("front/includes/footer"); ?>
<!--/ End Footer -->
