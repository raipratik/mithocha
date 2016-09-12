<!-- Web Font Loader -->
<script type="text/javascript">
    WebFontConfig = {
        google: { families: [
            'Playfair+Display:900:latin',
            'Roboto:400,700:latin'
        ]}
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>



<!-- Javascripts -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/vendor/modernizr-custom.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/app.min.js?ver=<?php echo filemtime(get_stylesheet_directory() . '/assets/js/app.min.js'); ?>"></script>



<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-XXXXXXXXX', 'auto');
    ga('send', 'pageview');
</script>




