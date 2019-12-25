<?php $lang = $this->session->userdata("dil")?>

<footer class="footer overlay section wow fadeIn" style=" background-image:url('<?php echo base_url("public/front/") ?>images/footer.jpg')">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- About -->
                    <div class="single-widget about">
                        <div class="logo"><a href="<?php echo base_url("$lang/home")?>"> <img src="<?php echo base_url("uploads/logo/$logo[img]") ?>" alt="#"></a></div>
                        <ul class="list">
                            <li><i class="fa fa-phone"></i><?php echo $this->lang->line("telefon")?>: <?php echo $contact["phone"]?> </li>
                            <li><i class="fa fa-envelope"></i><?php echo $this->lang->line("mail")?>: <a href="mailto:<?php echo $contact["email"]?>"><?php echo $contact["email"]?></a></li>
                            <li><i class="fa fa-map-o"></i><?php echo $this->lang->line("lokasiya")?>: <?php echo $contact["address_$lang"]?></li>
                        </ul>
                    </div>
                    <!--/ End About -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Useful Links -->
                    <div class="single-widget useful-links">
                        <h2><?php echo $this->lang->line("useful_links")?></h2>
                        <ul>
                            <li ><a href="<?php echo base_url("$lang/home")?>"><i class="fa fa-angle-right"></i><?php echo $this->lang->line("ana_sehife")?></a></li>
                            <li><a href="<?php echo base_url("$lang/about")?>"><i class="fa fa-angle-right"></i><?php echo $this->lang->line("haqqimizda")?></a></li>
                            <li><a href="<?php echo base_url("$lang/teachers")?>"><i class="fa fa-angle-right"></i><?php echo $this->lang->line("muellimler")?></a></li>
                            <li><a href="<?php echo base_url("$lang/events")?>"><i class="fa fa-angle-right"></i><?php echo $this->lang->line("tedbirler")?></a></li>
                            <li><a href="<?php echo base_url("$lang/blogs")?>"><i class="fa fa-angle-right"></i><?php echo $this->lang->line("bloglar")?></a></li>
                            <li><a href="<?php echo base_url("$lang/contact")?>"><i class="fa fa-angle-right"></i><?php echo $this->lang->line("elaqe")?></a></li>
                        </ul>
                    </div>
                    <!--/ End Useful Links -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Latest News -->
                    <div class="single-widget latest-news">
                        <h2><?php echo $this->lang->line("bloglar")?></h2>
                        <div class="news-inner">

                            <?php foreach ($latest_blogs as $item){ ?>
                                <div class="single-news">
                                    <img src="<?php echo base_url("uploads/blog/$item[img]")?>" alt="#">
                                    <h4><a href="<?php echo base_url("$lang/blog/single/$item[id]")?>"><?php echo $item["name_$lang"]?></a></h4>
                                    <p><?php

                                        if (strlen($item["desc_$lang"]) >= 80){
                                            $str = "...";
                                        }else{
                                            $str = "";
                                        }

                                        echo strip_tags(mb_substr($item["desc_$lang"], 0,80) . $str); ?></p>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    <!--/ End Latest News -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Newsletter -->
                    <div class="single-widget newsletter">
                        <h2><?php echo $this->lang->line("elaqe")?></h2>
                        <div class="mail">
                            <p><?php echo $this->lang->line("statik_text")?></p>

                        </div>
                    </div>
                    <!--/ End Newsletter -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bottom-head">
                        <div class="row">
                            <div class="col-12">
                                <!-- Social -->
                                <ul class="social">
                                    <li><a href="<?php echo $contact["twitter"]?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?php echo $contact["facebook"]?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?php echo $contact["instagram"]?>"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="<?php echo $contact["linkedln"]?>"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="<?php echo $contact["youtube"]?>"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                                <!-- End Social -->
                                <!-- Copyright -->
                                <div class="copyright">
                                    <p><?php echo $this->lang->line("footer")?></p>
                                </div>
                                <!--/ End Copyright -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Bottom -->
</footer>


<?php $this->load->view("front/includes/scripts"); ?>
