<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Galeria</title>
    <!--INCLUINDO CSS -->
    <?php include_once(VIEWPATH . "public/includes/css.php") ?>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url ("assets/images/favloremipsum.png") ?>">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
  </head>

  <body>
    <!-- Pre Loader -->
    <div id="dvLoading"></div>

    <!-- INCLUINDO HEADER-->
    <?php include_once(VIEWPATH . "public/includes/header.php") ?>

    <!-- Inner Banner Wrapper Start -->
    <div class="inner-banner">
      <div class="container">
        <div class="col-sm-12">
          <h2>Fotos</h2>
        </div>
        <div class="col-sm-12 inner-breadcrumb">
          <ul>
            <li><a href="<?= base_url('home') ?>">Home</a></li>
            <li>Fotos</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Inner Banner Wrapper End -->
    <section class="inner-wrapper">
  <div class="container">
      <div class="row">
        <div class="inner-wrapper-main">
          <div class="container gal-container">
            <?php
                if (isset($photos) && !empty($photos)) {
                    foreach ($photos as $key => $item) {
            ?>
              <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                <div class="box"> <a href="#" data-toggle="modal" data-target="#<?= $key; ?>">
                  <div class="caption">
                    <h4><?= $item->title_photo ?></h4>
                    <p><?= $item->description_photo ?></p>
                    <i class="fa fa-search" aria-hidden="true"></i> </div>
                  <img src="<?= base_url('assets/uploads/photos/' . $item->image_photo) ?>" alt="Gallery Image"> </a>
                  <div class="modal fade" id="<?= $key; ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="modal-body"> <img src="<?= base_url('assets/uploads/photos/' . $item->image_photo) ?>" alt="Gallery Image"> </div>
                        <div class="col-md-12 description">
                          <h4><?= $item->description_photo ?></h4>
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
        </div>
      </div>
  </div>
</section>
    
    <!-- INCLUINDO BOTÃO ACTION -->
    <?php include_once VIEWPATH . 'public/actionbtn/index.php' ?>

    <!-- INCLUINDO FOOTER -->
    <?php include_once(VIEWPATH . "public/includes/footer.php") ?>

    <!-- INCLUINDO JS -->
    <?php include_once(VIEWPATH . "public/includes/js.php") ?>

  </body>

</html>