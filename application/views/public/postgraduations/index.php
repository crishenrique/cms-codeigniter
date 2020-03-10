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
          <h2>Cursos</h2>
        </div>
        <div class="col-sm-12 inner-breadcrumb">
          <ul>
            <li><a href="<?= base_url('home') ?>">Home</a></li>
            <li>Cursos</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Inner Banner Wrapper End -->
    <section class="inner-wrapper">
      <div class="container">
        <div class="row">
          <div class="inner-wrapper-main">
            <div class="col-sm-12">
              <div class="row">
                <?php
                  if (isset($postgraduationslim) && !empty($postgraduationslim)) {
                    foreach ($postgraduationslim as $key => $item) {
                ?>
                  <div class="col-sm-4">
                    <div class="courses">
                      <a href="<?= base_url('posgraduacoes/') . $item->id_postgraduate; ?>">
                        <div class="course-thumb"> 
                          <img src="<?= base_url('assets/uploads/postgraduations/' . $item->image_postgraduate) ?>" alt="Course Image"> 
                        </div>
                        <div class="course-cnt">
                          <div>
                            <h3 style="max-height:100px; min-height:100px;"><?= mb_substr( $item->title_postgraduate, 0, 50) ?></h3>
                        </div>
                          <!-- <ul class="area-period">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> João Pessoa</li>
                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 1 Ano</li>
                          </ul> -->
                          <div>
                            <h4 style="max-height:100px; min-height:100px;">       
                                <?= mb_substr( $item->text_postgraduate, 0, 100) ?> ...
                            </h4> Ver+
                          </div>
                          <div>
                            <ul class="price-and-seats">
                              <!-- <li><strong>R$ <?= $item->price_postgraduate ?></strong></li> -->
                              <!-- <li class="pull-right"><i class="fa fa-tasks" aria-hidden="true"></i> 18 Vagas</li> -->
                            </ul>
                        </div>
                        </div>
                      </a>
                    </div>
                  </div>
                <?php
                    }
                  }
                ?>
              </div> <!-- FECHAMENTO DA DIV ROW  -->
<!--                <div class="course-pagination">-->
<!--                  <ul class="pagination">-->
<!--                    <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">Anterior</span> </a> </li>-->
<!--                    <li><a href="#">1</a></li>-->
<!--                    <li><a href="#">2</a></li>-->
<!--                    <li><a href="#">3</a></li>-->
<!--                    <li><a href="#">4</a></li>-->
<!--                    <li><a href="#">5</a></li>-->
<!--                    <li> <a href="#" aria-label="Next"> <span aria-hidden="true">Próxima</span> </a> </li>-->
<!--                  </ul>-->
<!--                </div>-->
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
