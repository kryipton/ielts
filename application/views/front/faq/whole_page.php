<?php $this->load->view("front/includes/top_all"); ?>
<?php $lang = $this->session->userdata("dil") ; ?>

<!-- Start Breadcrumbs -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Faqs</h2>
                <ul class="bread-list">
                    <li><a href="<?php echo base_url("$lang/home") ?>"><?php echo $this->lang->line("ana_sehife")?><i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a >Faqs</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Faqs -->
<section class="faq page section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2><?php echo $faqs_about["name_$lang"] ?></h2>
                    <?php echo $faqs_about["desc_$lang"] ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-12">
                <div class="faq-content">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php $i=1; foreach ($faqs as $item) { ?>
                        <div class="panel panel-default">
                            <!-- Single Faq -->
                            <div class="faq-heading"  id="FaqTitle<?php echo $i?>">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq<?php echo $i?>"><?php echo $item["name_$lang"]?></a>
                                </h4>
                            </div>
                            <div id="faq<?php echo $i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle1">
                                <div class="faq-body"><?php echo $item["desc_$lang"]?></div>
                            </div>
                            <!--/ End Single Faq -->
                        </div>
                        <?php $i++; } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Faqs -->


<!-- Footer -->
<?php $this->load->view("front/includes/footer"); ?>
<!--/ End Footer -->

