<!-- Faculty Wrapper Start -->
<div class="team-wrapper">
    <div class="container">
        <div class="row">
                <h2>Conheça Nossa <span>Equipe</span></h2>
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                        <?php
                            if (isset($team) && !empty($team)) {
                                foreach ($team as $key => $item) {
                        ?>
                        <div class="img-box"><img src="<?= base_url('assets/uploads/teams/' . $item->image_team) ?>" alt="Team1" title="Team1" />
                            <div class="text-center">
                                <h4><?= $item->name_team ?></h4>
                                <p><i><?= $item->office_team ?></i></p>
                            </div>
                        </div>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
        </div>
    </div>
</div>
<!-- Faculty Wrapper End -->