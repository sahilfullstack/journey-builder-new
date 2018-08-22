<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SheMatters Journey</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/journey.css" />
</head>
<body>
    <div id="app">

        <section class="main container-fluid">
            <div class="row node-area">
                <section class="col-sm-6 offset-sm-3">
                    <div class="question">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>General Assessment</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quisquam saepe, distinctio eius incidunt nemo, eos modi reiciendis consequuntur sequi deleniti! Laudantium error reiciendis aliquam consequuntur similique nam pariatur amet!</p>

                                <hr>

                                <a href="{{ route('user.onboard', $tree) }}" class="btn btn-primary btn-lg btn-block">START <i class="fas fa-chevron-right fa-fw"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    
    </div>
</body>
</html>