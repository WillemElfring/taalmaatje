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

    	<div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <h1>I want to...</h1>
                    
                    <div id="pop">

                        <form>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" value="option1" checked>
                                    ...find a Taalmaatje
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" value="option2">
                                    ...become a Taalmaatje
                                </label>
                            </div>
                            
                            <div class="form-group">
                                <input type="firstname" class="form-control" placeholder="first name">
                            </div>
                            <div class="form-group">
                                <input type="lastname" class="form-control" placeholder="last name">
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
                        </form>

                    </div>   

                </div>
            </div>
    	</div>

    </body>
</html>
