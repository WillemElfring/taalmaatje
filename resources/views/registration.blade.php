<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/app.css">

        
    </head>
    <body id="template-register">

        <div id="app">

        	<div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">

                        <h1 class="welcome">I want to...</h1>
                        
                        <div class="pop">

                            <form id="form-register">
                                <div class="form-header">
                                    <div class="radio selected">
                                        <label>
                                            <input type="radio" name="optionsRadios" value="findTaalmaatje" checked>
                                            ...find a Taalmaatje
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" value="becomeTaalmaatje">
                                            ...become a Taalmaatje
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="form-body">
                                    <div class="form-group">
                                        <input type="firstname" class="form-control" placeholder="first name">
                                    </div>
                                    <div class="form-group">
                                        <input type="lastname" class="form-control" placeholder="last name">
                                    </div>
                                    <div class="form-group">
                                        <!-- <input type="dateOfBirth" class="form-control" placeholder="date of birth"> -->
                                        <select class="form-control">
                                            <option>day</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <select class="form-control">
                                            <option>month</option>
                                            <option>januari</option>
                                            <option>februari</option>
                                            <option>march</option>
                                        </select>
                                        <select class="form-control">
                                            <option>year</option>
                                            <option>2018</option>
                                            <option>2017</option>
                                            <option>2016</option>
                                            <option>2015</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="e-mail">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="repeat password">
                                    </div>

                                    <button type="submit" class="btn btn-default">register</button>
                                </div>
                            </form>

                        </div>   

                    </div>
                </div>
        	</div>

        </div>

        <script src="js/app.js"></script>

    </body>
</html>
