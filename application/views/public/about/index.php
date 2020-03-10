<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>loremipsum</title>
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
                    <h2>Conheça-nos</h2>
                </div>
                <div class="col-sm-12 inner-breadcrumb">
                    <ul>
                        <li><a href="<?= base_url('home') ?>">Home</a></li>
                        <li>Conheça-nos</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner Wrapper End -->
        <section class="inner-wrapper">
            <div class="container">
                <div class="row">
                    <div class="inner-wrapper-main about-edu">
                        <div class="col-sm-8">
                            <?php
                                if (isset($about) && !empty($about)) {
                                foreach ($about

                                as $key => $item) {
                            ?>
                            <h2><?= $item->title_about ?></h2>
                            <p><?= $item->text_about ?></p>
                        </div>
                        <div class="col-sm-12 col-md-4 no-space-left">
                            <img src="<?= base_url('assets/uploads/about/' . $item->image_about) ?>">
                        </div>
                            <?php
                                }
                                }
                            ?>
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
