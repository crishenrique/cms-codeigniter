<!-- Testimonials Wrapper Start -->
<div class="testimonials-wrapper">
    <div class="container">
        <h2><span>Comentários</span> Sobre a loremipsum</h2>
        <div id="testimonials" class="owl-carousel owl-theme">
            <?php
                if (isset($comentario) && !empty($comentario)) {
                    foreach ($comentario as $key => $item) {
                        
            ?>
                
                <div class="item">
                    <img src="<?= base_url('assets/uploads/testimonials/' . $item->image_testimonial) ?>" alt="Testimonials">
                    <p><?= $item->text_testimonial ?></p>
                    <h3><?= $item->name_testimonial ?>
                    <span><?= $item->city_testimonial ?></span></h3>
                </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</div>
<!-- Testimonials Wrapper End -->