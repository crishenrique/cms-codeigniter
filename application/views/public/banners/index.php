<!-- Banner Wrapper Start -->
<div class="banner-wrapper">
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay">
        </div>
        
         <!-- Banner Wrapper Start -->
         <div class="banner-wrapper">
            <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
                <!-- Overlay -->
                <div class="overlay"></div>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <?php
                    if (isset($banner) && !empty($banner)) {
                        foreach ($banner as $key => $item) {
                ?>
                    <li data-target="#bs-carousel" data-slide-to="<?= $key; ?>" class="<?php if ($key == 0) echo 'active' ?>"></li>
                <?php
                        }
                    }
                ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                <?php
                    if (isset($banner) && !empty($banner)) {
                        foreach ($banner as $key => $item) {
                ?>
                    <div class="item slides <?php if ($key == 0) echo 'active' ?>">
                        <div class="slide-<?= $key+1; ?>" style="background-image: url(<?= base_url("assets/uploads/banners/" . $item->image_banner) ?>);">
                        </div>
                        <!-- <div class="hero">
                            <h1 class="animated1"><?= $item->title_banner ?></h1>
                            <h3 class="animated2"><?= $item->text_banner ?></h3>
                        </div> -->
                    </div>
                <?php
                        }
                    }
                ?>
                </div>
            </div>
        </div>
        <!-- Banner Wrapper End -->

    </div>
</div>
<!-- Banner Wrapper End -->