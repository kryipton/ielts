<?php $this->load->view("front/includes/top_all"); ?>
<?php $lang = $this->session->userdata("dil");?>

<!-- Start Breadcrumbs -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo $blog["name_$lang"]?></h2>
                <ul class="bread-list">
                    <li><a href="<?php echo base_url("$lang/home")?>"><?php echo $this->lang->line("ana_sehife")?><i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a><?php echo $blog["name_$lang"]?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Blog Single -->
<section class="blog b-archives single section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="blog-detailsasdsa">
                    <div class="b-galleradasy">
                        <div class="singasdasle-image">
                            <img src="<?php echo base_url("uploads/blog/$blog[img]");?>" alt="#">
                        </div>

                    </div>

                    <div class="detail-content">
                        <div class="blog-info">
                            <a><i class="fa fa-user"></i>By: Admin</a>
                            <a><i class="fa fa-calendar"></i><?php echo $blog["date"]?></a>
                            <a><i class="fa fa-bolt"></i><?php echo $blog_category["category_name_$lang"]?></a>
                        </div>
                        <h2 class="blog-title"><a><?php echo $blog["name_$lang"]?></a></h2>

                        <?php echo $blog["desc_$lang"]?>

                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="learnedu-sidebar">
                    <div class="single-widget course">
                        <h3><span><?php echo $this->lang->line("kurslar")?></span></h3>

                        <?php foreach ($courses as $item){ ?>
                            <div class="single-course">
                            <img style="object-fit: cover" src="<?php echo base_url("uploads/course/$item[img]") ?>" alt="#">
                            <div class="course-content">
                                <h4><a href="<?php echo base_url("$lang/course/$item[id]")?>"><?php echo $item["name_$lang"]?></a></h4>
                                <div class="meta">$<?php echo $item['price']?>, <span><i class="fa fa-clock-o"></i><?php echo $item["duration"]?></span></div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Blog Single -->



<!-- Footer -->
<?php $this->load->view("front/includes/footer"); ?>
<!--/ End Footer -->

