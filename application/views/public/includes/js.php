<script src="<?= base_url(); ?>assets/js/list.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url() ?>assets/js/jquery-3.1.1.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.animateNumber.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= base_url() ?>assets/js/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/wow.min.js"></script>
<script src="<?= base_url() ?>assets/js/owl.carousel.js"></script>
<script src="<?= base_url() ?>assets/js/custom.js"></script>

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83282272-3"></script>

<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments)
    };
    gtag('js', new Date());

    gtag('config', 'UA-83282272-3');
</script>

<script>
    var monkeyList = new List('test-list', {
        valueNames: ['name'],
        page: 6,
        pagination: true
    });
</script>

<script>
    $(function() {
        $('.smoothScroll').mouseover(function() {
            $(this).addClass('animated pulse fast');
        }).mouseout(function() {
            $(this).removeClass('animated pulse fast');
        });
    });

    $(function() {
        $('.pagination-bar').click(function() {
            $('html,body').animate({
                scrollTop: 0
            }, 'slow');
        });
    });
</script>