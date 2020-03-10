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
          <h2>Novidades</h2>
        </div>
        <div class="col-sm-12 inner-breadcrumb">
          <ul>
            <li><a href="<?= base_url('home') ?>">Home</a></li>
            <li>Novidades</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Inner Banner Wrapper End -->
    <section class="inner-wrapper">
      <div class="container">
        <div class="row">
          <div class="inner-wrapper-main news grid-news">
            <div class="col-sm-12 col-md-12">
              <div class="row">
                <div id="test-list">
                  <ul class="list">
                    <?php
                      if (isset($news) && !empty($news)) {
                        foreach ($news as $key => $item) {
                    ?>
                      <div class="col-sm-4">
                        <li class="name animated slideInLeft faster" style=" list-style-type: none;">
                          <div class="news-info">
                            <a href="<?= base_url('novidades/') . $item->id_news; ?>">
                              <div class="news-thumb">
                                <img src="<?= base_url('assets/uploads/news/' . $item->image_news) ?>" alt="News Image">
                              </div>
                              <div class="news-cnt">
                                <h3><?= $item->title_news ?></h3>
                                <div class="news-tags">
                                  <ul class="time">
                                    <li><i class="fa fa-user" aria-hidden="true"></i><?= $item->origin_news ?></li>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i><?= str_replace('-', '/', (date('d-m-Y', strtotime($item->registered)))); ?></li>
                                  </ul>
                                </div>
                                <p><?= $item->abstract_news ?></p>
                              </div>
                            </a>
                          </div>
                        </li>
                      </div>
                    <?php
                        }
                      }
                    ?>
                  </ul>
                  <!-- PAGINATION BAR -->
                  <div class="news-pagination">
                    <ul class="pagination">
                      <!-- <li> 
                        <a href="#" aria-label="Previous"> 
                          <span aria-hidden="true">Anterior</span>
                        </a> 
                      </li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li> 
                        <a href="#" aria-label="Next"> 
                          <span aria-hidden="true">Próximo</span> 
                        </a> 
                    </li> -->
                    </ul>
                  </div>

                </div>
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
