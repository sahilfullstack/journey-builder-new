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
        <journey></journey>
        <!-- <section class="main container-fluid">
            <div class="row h-100">
                <aside class="col-md-4 bg-primary d-none d-md-block sidebar">
                    <p class="text-white">Some info about the journey.</p>
                </aside>
                <section class="col-sm-12 col-md-8 offset-md-4">
                    <question--select-many></question--select-many>
                    <div class="question">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1>What is your name?</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque corrupti voluptatum placeat suscipit molestias, voluptates saepe eligendi mollitia, omnis architecto sint officia provident minima maxime porro praesentium repudiandae pariatur aliquam.</p>
                
                                <div class="answerable">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="first-name">First Name</label>
                                            <input type="text" id="first-name">
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="last-name">Last Name</label>
                                            <input type="text" id="last-name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="question">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1>What is your gender?</h1>
                                
                                <div class="linker">
                                    <button class="btn btn-block btn-outline-primary">Male</button>
                                    <button class="btn btn-block btn-outline-primary">Female</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="row navigator">
                <div class="col-sm-12 col-md-8 offset-md-4 p-0">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary btn-back">Back</button>
                        <button type="button" class="btn btn-primary btn-next">Next</button>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <footer class="footer d-block d-md-none">
            <div class="container">
                <span class="text-muted">&copy; SheMatters</span>
            </div>
        </footer> -->
    </div>

        

    <script src="/js/journey.js"></script>
</body>
</html>