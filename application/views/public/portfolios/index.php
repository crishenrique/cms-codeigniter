<!-- sponsers Start -->
<div class="sponsers">
    <div class="container">
        <h2>Nossos <span>Parceiros</span></h2>
        <div id="sponsers" class="owl-carousel owl-theme">
            <?php
                if (isset($portfolio) && !empty($portfolio)) {
                    foreach ($portfolio as $key => $item) {
            ?>
                <div class="item">
                    <img src="<?= base_url('assets/uploads/portfolios/' . $item->image_portfolio) ?>" alt="Education Logos">
                </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</div>
<!-- sponsers End -->