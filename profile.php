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
        <style>
            html, body, .block {
                height: 100%;
                
            }
            nav ul li a:hover, nav ul li a.active {
                background-color: rgba(0,0,0,.10);
            }
            footer {
                padding-left: 0;
            }
    </style>
    </head>

    <body>
        <!------------------Preloader---------------->
        <!-- <div class="spinner-wrapper">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div> -->
        <!----------------------Navigation Bar------------------------------>
        <div class="navbar-fixed">
            <nav class="nav-color z-depth-5 black">
                <div class="container nav-wrapper">
                    <a href="index.html" class="brand-logo"><i class="material-icons" style="font-size: 40px">directions_car</i>BIG BOY TOYZ</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down" id="nav-list">
                        <li data-target="loginModal" class="modal-trigger" id="loginModal-id"><a href="#"><i class="material-icons right">tag_faces</i>Login/Register</a></li>
                        <li data-target="dropdown1" class="dropdown-trigger" id="user-id"><a id="userl" href="#"><i class="material-icons right">person</i></a></li>
                        <li data-target="choose-city" class="modal-trigger" id="city-id"><a id="cityli"><i class="material-icons right">my_location</i>choose city</a></li>
                        <li data-target="search-mod" class="modal-trigger"><a><i class="material-icons right">search</i>Search</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <ul class="sidenav" id="mobile-demo">
            <li data-target="loginModal" class="modal-trigger" id="loginModal-id"><a href="#"><i class="material-icons right">tag_faces</i>Login/Register</a></li>
            <li data-target="choose-city" class="modal-trigger" id="city-id"><a href="#"><i class="material-icons right">my_location</i>choose city</a></li>
        </ul>
        <!-------Dropdown Structure------------------>
        <ul id='dropdown1' class='dropdown-content'>
            <li><a href="profile.php">My profile</a></li>
            <li><a data-target="car-mod" class="modal-trigger">Add car</a></li>
            <li><a onclick="logout()">Logout</a></li>
        </ul>
        <!----------------------Modal for login and register-------------------------------->
        <div id="loginModal" class="modal" id="login-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row col-row" style="height: 440px" id="log-content">
                        <div class="col s12 m5 col-log white-text" id="modal-log-content">
                            <h5>Login</h5>
                            <p>Get access to your Orders, Wishlists and Recommendations</p>
                        </div>
                        <div class="col s12 m6">
                            <div class="row row-log-fields">
                                <form class="col s12" id="login-form" method="post" action="php/login.php">
                                    <div class="input-field col s12">
                                        <input id="username" type="text" class="validate" name="username" required>
                                        <label for="username">Username</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate" name="password" required>
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <button class="btn waves-effect waves-light orange" style="width: 100%">Submit</button>
                                    </div>
                                    <div class="input-field col s12 ">
                                        <a class="waves-effect waves-light white blue-text btn" style="width: 100%" id="register">New to site? Sign up</a>
                                    </div>
                                </form>
                            </div>  
                        </div>
                    </div>
                    <!-------register------------>
                    <div class="row col-row" style="height: 450px" id="reg-content">
                        <div class="col s12 m5 col-log white-text" id="modal-log-content">
                            <h5>Signup</h5>
                            <p>We don not share your personal details with anyone.</p>
                            <a class="white-text" style="font-size: 10px"><p class="aluser">Already a user?Click here!</p></a>
                        </div>
                        <div class="col s12 m6">
                            <div class="row row-log-fields">
                                <form class="col s12" id="register-form" method="post" action="php/register.php">
                                    <div class="input-field col s12">
                                        <input id="uname" type="text" class="validate" name="uname">
                                        <label for="uname">Username</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="pass" type="password" class="validate" name="pass">
                                        <label for="pass">Password</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="name" type="text" class="validate" name="name">
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate" name="email">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <button class="btn waves-effect waves-light orange" type="submit" name="action" style="width: 100%">Submit</button>
                                    </div>
                                    <div class="input-field col s12 show-on-medium-and-down">
                                        <a class="black-text" style="font-size: 10px"><p class="aluser">Already a user?Click here!</p></a>
                                    </div>
                                </form>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----------------------City modal--------------------------------------->
        <div id="choose-city" class="modal transparent">
            <div class="modal-content">
                <div class="row city-cards">
                     <div class="col s12 m3 city1" value="Mumbai">
                        <div class="card-panel transparent" style="padding: 0px;margin: 0px">
                            <img src="img\Mum.PNG" class="img_size"><p hidden="trur">Mumbai</p>
                        </div>
                    </div>
                    <div class="col s12 m3 city1" id="c1" value="Chennai">
                        <div class="card-panel transparent" style="padding: 0px;margin: 0px">
                            <img src="img\chennai.PNG" class="img_size"><p hidden="trur">Chennai</p>
                        </div>
                    </div>
                    <div class="col s12 m3 city1" value="Kolkata">
                        <div class="card-panel transparent" style="padding: 0px;margin: 0px">
                            <img src="img\kol.PNG" class="img_size"><p hidden="trur">Kolkata</p>
                        </div>
                    </div>
                    <div class="col s12 m3 city1" value="Delhi">
                        <div class="card-panel transparent" style="padding: 0px;margin: 0px">
                            <img src="img\Delhi.PNG" class="img_size"><p hidden="trur">Delhi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!----------------------Search Modal--------------------------------->
        <div id="search-mod" class="modal transparent search-modal" >
            <div class="modal-content">
                <div class="row">
                    <nav>
                        <div class="nav-wrapper blue">
                            <form autocomplete="off">
                                <div class="input-field">
                                    <input id="searchf" type="search" required style="margin: 0px">
                                    <label class="label-icon" for="searchf" id="closemodal"><i class="material-icons" >search</i></label>
                                    <i class="material-icons">close</i>
                                    <div class="collection" id="search-results" style="margin: 0px">
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <!----------------------Add car data modal------------------------------>
        <div id="car-mod" class="modal " >
            <div class="modal-content" style="margin : 10px">
                <div class="row">
                    <h4>Add car details</h4>
                    <form class="col s12" id="car-detail-form" method="post" action="php/addcar.php" enctype = "multipart/form-data">
                        <div class="input-field col s6">
                            <input id="company" type="text" class="validate" name="company">
                            <label for="company">Company</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="model" type="text" class="validate" name="model">
                            <label for="model">Model</label>
                        </div>
                        <div class="input-field col s3">
                            <input id="fuel" type="text" class="validate" name="fuel">
                            <label for="fuel">Fuel type</label>
                        </div>
                        <div class="input-field col s3">
                            <input id="kms" type="text" class="validate" name="kilom">
                            <label for="kms">KMs</label>
                        </div>
                        <div class="input-field col s3">
                            <input id="year" type="text" class="validate" name="year">
                            <label for="year">Year</label>
                        </div>
                        <div class="input-field col s3">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name = "image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="input-field col s6">
                            <input id="state" type="text" class="validate" name="state">
                            <label for="state">State</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="city" type="text" class="validate" name="city">
                            <label for="city">City</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="detail" type="text" class="validate" name="detail">
                            <label for="detail">Detail</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="pno" type="text" class="validate" name="pno">
                            <label for="pno">Phone number</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="price" type="text" class="validate" name="price">
                            <label for="price">Price</label>
                        </div>
                        <div class="input-field col s3">
                            <button class="btn waves-effect waves-light orange" type="submit" name="action" style="width: 100%">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!---------------------------Content----------------------------------->
        <div class="row container">
            <h3>Uploaded car ads</h3>
            <?php
                include_once("php/database.php");
                $usernn = "";
                if(!isset($_COOKIE["username"])) {
                    $sql = "SELECT * FROM car_info";
                }else{
                    $usernn =$_COOKIE["username"];
                    //echo $usernn;
                    $sql = "SELECT * FROM car_info where username='$usernn'";
                }
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<div class='row'>";
                        while($row = $result->fetch_assoc()) {
                            
                            //card col
                            echo "<div class='col s4'>";
                            //image
                            echo "<div class='card' id='".$row['id']."'> <div class='card-image waves-effect waves-block waves-light img-card'><img class='activator' style='height:200px' src='php/img/".$row['img']."'></div>";
                            //content
                            echo "<div class='card-content' style='height:100px'><span class='card-title activator grey-text text-darken-4'>".$row['model']."<i class='material-icons right'>more_vert</i></span></div><div class='card-action'><a onclick='removeads(".$row['id'].")'>REMOVE AD</a></div>";
                            //reveal
                            echo "<div class='card-reveal'><span class='card-title grey-text text-darken-4'>".$row['model']."<i class='material-icons right'>close</i></span><p>Company :".$row['company']."</p><p>Fuel :".$row['fuel']."</p><p>KM :".$row['kms']."</p><p>Price :".$row['price']."</p></div>";
                            //close
                            echo "</div></div>";
                        }
                    echo "</div>";
                }else{

                }
            ?>
        </div>



        <!--------------------------Footer------------------------------------>
        <footer class="page-footer black">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Brands</h5>
                        <p class="grey-text text-lighten-4">Volvo</p>
                        <p class="grey-text text-lighten-4">Volkswagen</p>
                        <p class="grey-text text-lighten-4">Maruti Suzuki</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">About us</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Terms and conditions</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2019 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#!"></a>
                </div>
            </div>
        </footer>
        
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/mi.js"></script>
        <script type="text/javascript" src="js/jquery.cookie.js"></script>
        <script>

            function search(va){
                // var xhttp = new XMLHttpRequest();
                // xhttp.onreadystatechange = function() {
                //     if (this.readyState == 4 && this.status == 200) {
                //         //document.getElementById("demo").innerHTML = this.responseText;
                //         console.log("hi"+this.responseText);
                //         $("#search-results").empty();
                //         $("#search-results").prepend(this.responseText);
                //     }
                // };
                // xhttp.open("GET", "search.php?q="+va, true);
                // xhttp.send();
                $("#search-results").empty();
                $.getJSON("search.php?q="+va, function(data){
                    $("#search-results").empty();
                    $.each(data, function () {
                        if(this.modelname != '-1' && this.id != '-1'){
                            $("#search-results").prepend("<a href='showproduct.php?id="+this.id+"' class='collection-item black-text'>"+ this.modelname +"</a>");
                        }else{
                            $("#search-results").prepend("<a class='collection-item black-text'>No suggestions</a>");
                        }
                        //console.log(value);
                    });
                });
            }
            //logout function
            function logout(){
                $.removeCookie('username', { path: '/' });
                $("#user-id").hide();
                $("#loginModal-id").show();
                $("#userl").empty();
                M.toast({html: 'Logged out', classes: 'rounded toast-mod'});
                window.location.replace("index.html");
            }

            //sendmail function
            function removeads(d){
                console.log(d);
                $.post("php/removead.php",
                {
                    id: d
                },
                function(data, status){
                    $("#"+d).remove();
                    console.log(data);
                });
            }

            //login function
            $(document).ready(function() {
                //console.log("username : "+ $.cookie("username"));

                //search-field keypress event
                $("#searchf").keyup(function(){
                    var q = $("#searchf").val();
                    console.log("keypress event fired"+ $("#searchf").val());
                    search(q);
                });

                //close modal on click
                $('#closemodal').on('click',function(){
                    console.log("close");
                    $('.modal').modal('close');                   
                });

                $('.aluser').on('click',function(){
                    console.log("cliock");
                    $('#reg-content').hide();
                    $('#log-content').show();
                    
                });

                if (document.cookie.indexOf('city') == -1 ) {
                    console.log("empty");
                }else{
                    $('#cityli').empty();
                    $('#cityli').prepend("<i class='material-icons right'>my_location</i>" +$.cookie("city"));
                }

                //city card on click listener
                $(".city1").click(function(){
                    var cname = $(this).text().trim();
                    if (cname.indexOf("Mumbai") != -1 ){
                        console.log("m");
                        $.cookie("city", cname , { path : '/' });
                        $('#cityli').empty();
                        $('#cityli').prepend("<i class='material-icons right'>my_location</i>" +cname);
                    }else if(cname==="Chennai"){
                        console.log("ch");
                        $.cookie("city", cname , { path : '/' });
                        $('#cityli').empty();
                        $('#cityli').prepend("<i class='material-icons right'>my_location</i>" +cname);
                    }else if(cname==="Kolkata"){
                        console.log("ko");
                        $.cookie("city", cname , { path : '/' });
                        $('#cityli').empty();
                        $('#cityli').prepend("<i class='material-icons right'>my_location</i>" +cname);
                    }else if(cname==="Delhi"){
                        console.log("del");
                        $.cookie("city", cname , { path : '/' });
                        $('#cityli').empty();
                        $('#cityli').prepend("<i class='material-icons right'>my_location</i>" +cname);
                    }else{
                        console.log("fuck");
                    }
                    console.log("fuck");
                    $('.modal').modal('close');
                });
                //login function
                function login(){
                    if (document.cookie.indexOf('username') == -1 ) {
                        //console.log("empty");
                        $("#user-id").hide();
                    }else{
                        $("#loginModal-id").hide();
                        $("#user-id").show();
                        $("#userl").prepend($.cookie("username"));
                    }
                }
                login();

                //Preloader
                $(window).on("load", function() {
                    preloaderFadeOutTime = 1000;
                    function hidePreloader() {
                        var preloader = $('.spinner-wrapper');
                        preloader.fadeOut(preloaderFadeOutTime);
                    }
                    hidePreloader();
                });

                //ajax login form submit
                $('#login-form').submit(function (e) {
                    e.preventDefault();

                    $.ajax({
                        type: $('#login-form').attr('method'),
                        url: $('#login-form').attr('action'),
                        data: $('#login-form').serialize(),
                        success: function (data) {
                            //console.log('Submission was successful.');
                            //console.log(data);
                            if(data==="found"){
                                $("#loginModal-id").hide();
                                $("#user-id").show();
                                M.toast({html: 'Login successfully', classes: 'rounded toast-mod'});
                                //$("#userl").prepend($.cookie("username"));
                                login();
                                $('.modal').modal('close');
                            }else{
                                M.toast({html: 'Invalid username or passwords', classes: 'rounded toast-mod'});
                            }
                        },
                        error: function (data) {
                            console.log('An error occurred.');
                            console.log(data);
                        },
                    });
                });


                //ajax add ccar form submit
                $('#car-detail-form').submit(function (e) {
                    e.preventDefault();

                    $.ajax({
                        type: $('#car-detail-form').attr('method'),
                        url: $('#car-detail-form').attr('action'),
                        data: $('#car-detail-form').serialize(),
                        success: function (data) {
                            //console.log('Submission was successful.');
                            console.log(data);
                            if(data==="done"){
                                
                                M.toast({html: 'Car details added successfully', classes: 'rounded toast-mod'});
                                $('.modal').modal('close');
                            }else{
                                M.toast({html: 'Invalid username or passwords', classes: 'rounded toast-mod'});
                            }
                        },
                        error: function (data) {
                            console.log('An error occurred.');
                            console.log(data);
                        },
                    });
                });


                //ajax register form submit
                $('#register-form').submit(function (e) {
                    e.preventDefault();

                    $.ajax({
                        type: $('#register-form').attr('method'),
                        url: $('#register-form').attr('action'),
                        data: $('#register-form').serialize(),
                        success: function (data) {
                            //console.log('Submission was successful.');
                            //console.log(data);
                            if(data==="done"){
                                M.toast({html: 'Registered successfully', classes: 'rounded toast-mod'});
                                M.toast({html: 'Login to continue...', classes: 'rounded toast-mod'});
                                $('#reg-content').hide();
                                $('#log-content').show();
                            }else{
                                alert("Try again later...!");
                                $('.modal').modal().close();
                            }
                        },
                        error: function (data) {
                            console.log('An error occurred.');
                            console.log(data);
                        },
                    });
                });
            });

        </script>
    </body>
</html>