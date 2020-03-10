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
          <h2>Pós Graduação</h2>
        </div>
        <div class="col-sm-12 inner-breadcrumb">
          <ul>
            <li><a href="<?= base_url('home') ?>">Home</a></li>
            <li>Pós Graduação</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Inner Banner Wrapper End -->
    <section class="inner-wrapper">
      <div class="container">
        <div class="row">
          <?php
            if (isset($postgraduate) && !empty($postgraduate)) {
              foreach ($postgraduate as $key => $item) {
          ?>
            <div class="inner-wrapper-main">
              <div class="col-sm-12">
                <a href="https://www.faculdadeide.edu.br/" target="_blank"> 
                  <div class="courses course-details">
                    <div class="col-sm-5 course-thumb"> <img src="<?= base_url('assets/uploads/postgraduations/' . $item->image_postgraduate) ?>" alt="Course Image"> </div>
                    <div class="col-sm-7 course-cnt">
                      <h3><?= $item->title_postgraduate ?></h3>
                      <ul class="area-period">
                        <!-- <li>Location <strong>Canada</strong></li> -->
                        <!-- <li>Duration <strong>2 Years</strong></li> -->
                        <!-- <li>Valor do curso <strong>R$ <?= $item->price_postgraduate ?> </strong></li> -->
                        <!-- <li>Total de Vagas <strong>12 Vagas</strong></li> -->
                      </ul>
                      <p><?= $item->text_postgraduate ?></p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          <?php
                }
              }
          ?>
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