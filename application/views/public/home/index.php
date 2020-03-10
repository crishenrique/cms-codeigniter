<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cursos de Qualidade</title>
    <!--INCLUINDO CSS -->
    <?php include_once(VIEWPATH . "public/includes/css.php") ?>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url ("assets/images/favloremipsum.png") ?>">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <!-- PRE LOADER -->
    <div id="dvLoading"></div>

    <!-- INCLUINDO HEADER-->
    <?php include_once(VIEWPATH . "public/includes/header.php") ?>

    <!-- INCLUINDO BANNERS-->
    <?php include_once VIEWPATH . 'public/banners/index.php'; ?>

    <!-- SOBRE loremipsum -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <?php
                    if (isset($about) && !empty($about)) {
                        foreach ($about as $key => $item) {
                ?>
                            <div class="col-sm-12 col-md-8">
                                <h2>Algumas palavras <br>
                                    Sobre a <span>loremipsum</span>
                                </h2>
                                <p>
                                <?= $item->title_about?>
                                </p>
                                <p>
                                <?= mb_substr( $item->text_about, 0, 98) ?> ...
                                </p>
                                <a href="<?= base_url('sobre-loremipsum') ?>">Ler +</a>
                            </div>
                            <div class="col-sm-12 col-md-4 pull-right hidden-sm">
                                <img src="<?= base_url('assets/uploads/about/' . $item->image_about) ?>" alt="image about">
                            </div>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- INCLUINDO SERVIÇOS -->
    <?php include_once VIEWPATH . 'public/services/index.php'; ?>

    <!-- FUN FACTS SECTION-->
    <?php include_once VIEWPATH . 'public/funfacts/index.php' ?>
    
    <!-- INCLUINDO EQUIPE -->
    <?//php include_once VIEWPATH . 'public/teams/index.php' ?>
    
    <!-- INCLUINDO COMENTÁRIOS -->
    <?php include_once VIEWPATH . 'public/testimonials/index.php' ?>
    
    <!-- INCLUINDO PARCEIROS -->
    <?php include_once VIEWPATH . 'public/portfolios/index.php' ?>
    
    <!-- INCLUINDO BOTÃO ACTION -->
    <?php include_once VIEWPATH . 'public/actionbtn/index.php' ?>

    <!-- INÍCIO GALERIA -->
    <div class="gal-container full-width">
        <?php
            if (isset($photos) && !empty($photos)) {
                foreach ($photos as $key => $item) {
        ?>
                <div class="col-md-3 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a href="#" data-toggle="modal" data-target="#<?= $key; ?>">
                            <div class="caption">
                                <h4><?= $item->title_photo ?></h4>
                                <p><?= $item->description_photo ?></p>
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                            <img src="<?= base_url('assets/uploads/photos/' . $item->image_photo) ?>" alt="Gallery Image">
                        </a>
                        <div class="modal fade" id="<?= $key; ?>" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <div class="modal-body">
                                        <img src="<?= base_url('assets/uploads/photos/' . $item->image_photo) ?>" alt="Gallery Image">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4><?= $item->title_photo ?></h4> <br>
                                        <a href="<?= base_url('galeria') ?>">
                                            <h2 style="color:#0788c0">Veja a galeria completa</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
                }
            }
        ?>
    </div>
    <!-- FINAL GALERIA -->

    <!-- INCLUINDO FOOTER -->
    <?php include_once(VIEWPATH . "public/includes/footer.php") ?>

    <!-- INCLUINDO JS -->
    <?php include_once(VIEWPATH . "public/includes/js.php") ?>

</body>

</html>
