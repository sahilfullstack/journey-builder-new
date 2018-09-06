<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SheMatters Journey</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/journey.css" />
</head>
<body>
    <div id="app">

        <journey :journey-id="{{ $journey->getRouteKey() }}"></journey>

        <!-- <footer class="footer d-block d-md-none">
            <div class="container">
                <span class="text-muted">&copy; SheMatters</span>
            </div>
        </footer> -->
    </div>

        
    <script>
            // http://paulirish.com/2011/requestanimationframe-for-smart-animating/
            // http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating

            // requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel

            // MIT license

            (function() {
                var lastTime = 0;
                var vendors = ['ms', 'moz', 'webkit', 'o'];
                for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
                    window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
                    window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame']
                                            || window[vendors[x]+'CancelRequestAnimationFrame'];
                }

                if (!window.requestAnimationFrame)
                    window.requestAnimationFrame = function(callback, element) {
                        var currTime = new Date().getTime();
                        var timeToCall = Math.max(0, 16 - (currTime - lastTime));
                        var id = window.setTimeout(function() { callback(currTime + timeToCall); },
                        timeToCall);
                        lastTime = currTime + timeToCall;
                        return id;
                    };

                if (!window.cancelAnimationFrame)
                    window.cancelAnimationFrame = function(id) {
                        clearTimeout(id);
                    };
            }());
    </script>
    <script src="/js/journey.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
    $(document).ready(function(){
		$('.card-deck').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: false,
			centerMode: true,
			// centerPadding: '30px',
			autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            prevArrow: '<i class="fas fa-chevron-left slick-prev"></i>',
			nextArrow: '<i class="fas fa-chevron-right slick-next"></i>',
			responsive: [
			{
				breakpoint: 769,
				settings: {
					// arrows: true,
					slidesToShow: 3,
					slidesToScroll: 1
				}
			}
			,
			{
				breakpoint: 577,
				settings: {
					// arrows: true,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			]
		});
	});
    </script>
</body>
</html>