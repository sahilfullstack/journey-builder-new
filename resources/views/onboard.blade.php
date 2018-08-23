<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SheMatters Journey</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="/css/journey.css" /> -->
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
    <script src="/js/smoothscroll.js"></script>

    <style>
        body {
            background-color: #fefefe;
            color: #212121;
            font-family: 'Roboto Condensed', Arial, sans-serif;
            font-size: 20px;

            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;

        }
        .question {
            margin: 0 auto;
            max-width: 800px;
            padding: 40px;
            overflow: hidden;
            position: relative;
            height: 500px;
        }
    </style>
</head>
<body>
    <div class="question" id="q1">
        <a href id="goto3">1. Go to 3</a>
    </div>

    <div class="question" id="q2">
        <a href id="goto1">2. Go to 1</a>
    </div>

    <div class="question" id="q3">
        <a href id="goto2">3. Go to 2</a>
    </div>
    <script>
        
        // add event listener on load
        window.addEventListener('load', function() {

        document.querySelector('#goto1').addEventListener('click', function(e) {
            e.preventDefault();
            // document.querySelector('#q1').scrollIntoView({ behavior: 'smooth' });
            window.scrollBy({ top: 100, left: 0, behavior: 'smooth' });

        });

        document.querySelector('#goto2').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector('#q2').scrollIntoView({ behavior: 'smooth' });
        });

        document.querySelector('#goto3').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector('#q3').scrollIntoView({ behavior: 'smooth' });
        });
    });
   
    </script>
</body>
</html>