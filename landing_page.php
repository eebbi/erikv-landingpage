<?php
/* Template Name: LandingPage */ 

/* get_header();*/
?>

<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/landing-styles.css">

<link rel="icon" href="https://www.erikv.fi/wp-content/uploads/2019/05/favicon-150x150.png" sizes="32x32" />
<link rel="icon" href="https://www.erikv.fi/wp-content/uploads/2019/05/favicon.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://www.erikv.fi/wp-content/uploads/2019/05/favicon.png" />
<meta name="msapplication-TileImage" content="https://www.erikv.fi/wp-content/uploads/2019/05/favicon.png" />
<title>Erik Vänttinen</title>

</head>

<body>

    <div class="loadbg">
        <div id="pagePreloadLoading" class="page-loading">
            <img src="https://www.erikv.fi/wp-content/uploads/2019/05/siteLogo.png" alt="Loading" >
        </div>
    </div>

    <section class="landing">
        <div class="lcontainer">
            <div class="heading">
                <h2 class="stack">Erik</h2>
                <h2 class="stack">Vänttinen</h2>
            </div>
            <i>Front-end verkkokehittäjä innokkaalla asenteella</i>
            <div class="flex-center">
                <div class="lmenu">
                    <div data-tilt data-tilt-disableAxis="Y" data-tilt-perspective="999" data-tilt-speed="50" data-tilt-reset="false">
                        <a id="f" class="link" href="https://www.facebook.com/erik-vanttinen" target="_blank">Facebook</a>
                    </div>
                    <div>
                        <a id="s" class="link" href="https://www.erikv.fi/mina">Sivuille</a>
                    </div>
                    <div data-tilt data-tilt-disableAxis="Y" data-tilt-perspective="999" data-tilt-speed="50" data-tilt-reset="false">
                        <a id="t" class="link" href="https://www.linkedin.com/in/erik-v%C3%A4nttinen/" target="_blank">Linkedin</a>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <a href="mailto:moikka@erikv.fi">Moikka@erikv.fi</a>
            </div>
        </div>
    </section>

</body>

<script>
(function() {

    $(document).ready(function() {
        $(".stack").lettering();
    });

    $(document).ready(function() {
        animation();
    }, 1000);

    function animation() {
      var title1 = new TimelineMax();
      title1.staggerFromTo(".stack span", 0.6, 
      {ease: Back.easeOut.config(1.7), opacity: 0, top: 80},
      {ease: Back.easeOut.config(1.7), opacity: 1, top: 0}, 0.06);
    }

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
     $('.link').css('font-size', '100px');
     $('.bottom').css('font-size', '40px');
     $('.stack').css('font-size', '80px');
     $('i').css('font-size', '36px');
     $('.lcontainer').css('width', '95vw');
    }

    $('#s').click(function(e) {
        e.preventDefault();
        var url = this.href;
        // Update the UI here
        $('.loadbg').css({
            'opacity' : '1',
            'z-index' : '10002',
        });
        setTimeout(function() {
            // This is a trick to force a repaint
            window.location.href = url;
        },0);
    });
        

    $('.lmenu').on('mousemove', function(e){
        $(this).css({'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% '});
    });


    $('#f').hover(function(){
        $('.lcontainer').addClass('blue');
        $('.lcontainer').removeClass('green');
        $('.lcontainer').removeClass('red');
    });

    $('#s').hover(function(){
        $('.lcontainer').addClass('green');
        $('.lcontainer').removeClass('blue');
        $('.lcontainer').removeClass('red');
    });

    $('#t').hover(function(){
        $('.lcontainer').addClass('red');
        $('.lcontainer').removeClass('blue');
        $('.lcontainer').removeClass('green');
    });


})();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>

<!-- https://github.com/gijsroge/tilt.js -->
<script src="https://unpkg.com/tilt.js@1.1.21/dest/tilt.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>

<?php
/*get_footer();*/
