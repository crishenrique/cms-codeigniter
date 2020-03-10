
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <style>
        .counter {
            text-align: center;
        }

        .employees,
        .customer,
        .design,
        .order {
            margin-top: 70px;
            margin-bottom: 70px;
        }

        .counter-count {
            font-size: 18px;
            background-color: #0788c0;
            border-radius: 50%;
            position: relative;
            color: #ffffff;
            text-align: center;
            line-height: 92px;
            width: 92px;
            height: 92px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            display: inline-block;
        }

        .employee-p,
        .customer-p,
        .order-p,
        .design-p {
            font-size: 24px;
            color: #000000;
            line-height: 34px;
        }
    </style>


<div class="counter">
    <div class="satisfied-wrapper">
        <div class="container">
            <div class="statistics">
                <h2>Satisfação com a <span>loremipsum</span></h2>
                <p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="row">
                    <?php
                        if (isset($funfact) && !empty($funfact)) {
                            foreach ($funfact as $key => $item) {
                    ?>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="employees">
                            <p class="counter-count"><?= $item->value_funfact ?></p>
                            <p class="employee-p"><?= $item->title_funfact ?></p>
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

    <script>
        $('.counter-count').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 5000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>



