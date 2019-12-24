<?php $this->load->view("front/includes/top_all"); ?>

<?php $lang = $this->session->userdata("dil");?>

<!-- Start Breadcrumbs -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo $this->lang->line("bloglar")?></h2>
                <ul class="bread-list">
                    <li><a href="<?php echo base_url("$lang/home")?>"><?php echo $this->lang->line("ana_sehife")?><i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a ><?php echo $this->lang->line("bloglar")?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Blogs -->
<section class="blog b-archives section">
    <div class="container">
        <div class="row masonry">

            <?php foreach ($blogs as $item){?>

                <div class="col-lg-4 col-12 grid-item">
                    <!-- Single Blog -->
                    <div class="single-blog">
                    <div class="blog-head overlay">
<!--                        <div class="date">-->
<!--                            <h4>05<span>May</span></h4>-->
<!--                        </div>-->
                        <img src="<?php echo base_url("uploads/blog/$item[img]") ?>" alt="#">
                    </div>
                    <div class="blog-content">
                        <h4 class="blog-title"><a href="<?php echo base_url("$lang/blog/single/$item[id]")?>"><?php echo $item["name_$lang"]?></a></h4>
                        <div class="blog-info">
                            <a><i class="fa fa-user"></i>By: Admin</a>
                            <a><i class="fa fa-list"></i><?php echo $item["category_name_$lang"]?></a>
                        </div>
                        <p>

                            <?php

                            if (strlen($item["desc_$lang"]) >= 100){
                                $str = "...";
                            }else{
                                $str = "";
                            }

                            echo strip_tags(mb_substr($item["desc_$lang"], 0,100) . $str); ?>

                        </p>
                        <div class="button">
                            <a href="<?php echo base_url("$lang/blog/single/$item[id]")?>" class="btn"><?php echo $this->lang->line("etrafli")?><i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                    <!-- End Single Blog -->
                </div>
            <?php }?>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Start Pagination -->
                <div class="pagination-main">
                    <?php print_r($links)?>
                </div>
                <!--/ End Pagination -->
            </div>
        </div>
    </div>
</section>
<!--/ End Blogs -->




<!-- Footer -->
<?php $this->load->view("front/includes/footer"); ?>
<!--/ End Footer -->

