<!-- Callouts Wrapper Start -->
<div class="callouts-wrapper">
    <div class="container">
        <h2>Bem Vindos a <span>loremipsum</span></h2>
        <p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="row">
            <?php
                if (isset($service) && !empty($service)) {
                    foreach ($service as $key => $item) {
            ?>
                <div class="col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="1.5s">
                    <div class="callouts">
                        <div class="icon">
                            <img src="<?= base_url('assets/uploads/services/' . $item->image_service) ?>" alt="image service">
                        </div>
                        <div class="content">
                            <h3><?= $item->title_service ?></h3>
                            <p><?= $item->text_service ?></p>
                        </div>
                    </div>
                </div>
            <?php
                    }
                }
            ?> 
        </div>
    </div>
</div>
<!-- Callouts Wrapper End -->