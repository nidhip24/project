<!DOCTYPE html>
<html>
    <head>
      
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/mi.css"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

            <div class="row">
                <div class="col s4">
                    <nav>
                        <div class="nav-wrapper grey">
                            <form>
                                <div class="input-field">
                                    <input id="search" type="search" required>
                                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
      <div class="grid-example col s12 grey"><span class="flow-text">I am always full-width (col s12)</span></div>
      <div class="grid-example col s12 m6 grey"><span class="flow-text">I am full-width on mobile (col s12 m6)</span></div>
    </div>
    <form class="col s12" id="login-form">
                                    <div class="input-field col s12">
                                        <input id="username" type="text" class="validate" required>
                                        <label for="username">Username</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate" required>
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <button class="btn waves-effect waves-light orange" type="submit" name="action" style="width: 100%">Submit</button>
                                    </div>
                                    <div class="input-field col s12">
                                        
                                            <a class="waves-effect waves-light white blue-text btn" style="width: 100%" id="register">New to site? Sign up</a>
                                    </div>
                                </form>


        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/mi.js"></script>
    </body>
</html>