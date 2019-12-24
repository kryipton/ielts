<?php $lang = $this->session->userdata("dil")?>
<!-- Header -->
<header class="header">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <!-- Contact -->
                    <ul class="content">
                        <li><i class="fa fa-phone"></i><?php echo $contact["phone"]?></li>
                        <li><a href="mailto:<?php echo $contact["email"]?>"><i class="fa fa-envelope-o"></i><?php echo $contact["email"]?></a></li>
                        <li><i class="fa fa-clock-o"></i><?php echo substr($contact["start_time"], 0, 5)?> - <?php echo substr($contact["end_time"], 0, 5)?> </li>
                    </ul>
                    <!-- End Contact -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Social -->
                    <ul class="social">
                        <li><a href="<?php

                            $segment2 = $this->uri->segment(2);
                            $segment3 = $this->uri->segment(3);
                            $segment4 = $this->uri->segment(4);

                            if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                echo base_url("az/" . $segment2   . "/" .  $segment3  . "/" . $segment4);
                            }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                echo base_url("az/" . $segment2   . "/" .  $segment3);
                            }elseif(!empty($this->uri->segment(2))){
                                echo base_url("az/" . $segment2);
                            }else{
                                echo base_url("az/home");
                            }

                            ?>">Az</a></li>
                        <li><a href="<?php

                            if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                echo base_url("en/" . $segment2   . "/" .  $segment3   . "/" . $segment4);
                            }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                echo base_url("en/" . $segment2   . "/" .  $segment3);
                            }elseif(!empty($this->uri->segment(2))){
                                echo base_url("en/" . $segment2);
                            }else{
                                echo base_url("en/home");
                            }

                            ?>">En</a></li>
                        <li><a href="<?php

                            if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                echo base_url("ru/" . $segment2   . "/" .  $segment3   . "/" . $segment4);
                            }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                echo base_url("ru/" . $segment2   . "/" .  $segment3);
                            }elseif(!empty($this->uri->segment(2))){
                                echo base_url("ru/" . $segment2);
                            }else{
                                echo base_url("ru/Home");
                            }

                            ?>">Ru</a></li>
                    </ul>
                    <!-- End Social -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="logo">
                        <a href="<?php echo base_url("$lang/home")?>"> <img src="<?php echo base_url("uploads/logo/$logo[img]") ?>" alt="#"></a>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-lg-9 col-md-9 col-12">
                    <!-- Header Widget -->
                    <div class="header-widget">
                        <div class="single-widget">
                            <i class="fa fa-phone"></i>
                            <h4><?php echo $this->lang->line("telefon")?><span><?php echo $contact["phone"]?></span></h4>
                        </div>
                        <div class="single-widget">
                            <i class="fa fa-envelope-o"></i>
                            <h4><?php echo $this->lang->line("mail")?><a href="mailto:<?php echo $contact["email"]?>"><span><?php echo $contact["email"]?></span></a></h4>
                        </div>
                        <div class="single-widget">
                            <i class="fa fa-map-marker"></i>
                            <h4><?php echo $this->lang->line("lokasiya")?>
                                <span>
                                    <?php echo $contact["address_$lang"]?>
                                </span>
                            </h4>
                        </div>
                    </div>
                    <!--/ End Header Widget -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->

    <!-- Header Menu -->
    <?php $this->load->view("front/includes/navbar")?>
    <!--/ End Header Menu -->
</header>
<!-- End Header -->