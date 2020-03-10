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
                    <h2>Detalhes da Notícia</h2>
                </div>
                <div class="col-sm-12 inner-breadcrumb">
                    <ul>
                        <li><a href="<?= base_url('home') ?>">Home</a></li>
                        <li>Notícias</li>
                        <li>Detalhes</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Inner Banner Wrapper End -->
        <section class="inner-wrapper">
            <div class="container">
                <div class="row">
                    <div class="inner-wrapper-main news news-post">
                        <?php
                            if (isset($newspost) && !empty($newspost)) {
                            foreach ($newspost

                            as $key => $item) {
                        ?>
                        <div class="col-sm-7 col-md-8">
                            <div class="news-info">
                                <h3><?= $item->title_news ?></h3>
                                <div class="news-tags">
                                    <ul class="time">
                                        <li><i class="fa fa-user" aria-hidden="true"></i><?= $item->origin_news ?></li>
                                        <li>
                                            <i class="fa fa-clock-o" aria-hidden="true"></i><?= str_replace('-', '/', (date('d-m-Y', strtotime($item->registered)))); ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="news-thumb">
                                    <img src="<?= base_url('assets/uploads/news/' . $item->image_news) ?>" alt="News Image">
                                </div>
                                <div class="news-cnt">
                                    <p><?= $item->text_news ?></p>
                                </div>
                                <?php
                                    }
                                    }
                                ?>

                            </div>
                        </div>
                        <div class="col-sm-5 col-md-4">
                            <div class="sidebar">
                                <div class="latest-blogs">
                                    <h2>Últimas notícias</h2>
                                    <div class="latest-blog">
                                        <?php
                                            if (isset($newslim) && !empty($newslim)) {
                                                foreach ($newslim as $key => $item) {
                                                    ?>
                                                    <div class="row">
                                                        <a class="hover-img" href="<?= base_url('novidades/') . $item->id_news; ?>">
                                                            <div class="col-sm-4">
                                                                <img alt="image" src="<?= base_url('assets/uploads/news/' . $item->image_news) ?>">
                                                            </div>
                                                            <div class="col-sm-8 meta-info">
                                                                <h3><?= $item->title_news ?></h3>
                                                                <div class="meta">
                                                                    <?= str_replace('-', '/', (date('d-m-Y', strtotime($item->registered)))); ?>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <br />
                                                    <?php
                                                }
                                            }
                                        ?>
                                    </div>
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
