<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GT_NZENG-AYONG</title>
	<link rel="stylesheet" href="">
         
    <!-- Mon style bootstrap -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Mon style perso 
    <link rel="stylesheet" href="http://resources/sass/style2.css"/>-->
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}"/>
    
     <!-- Mon style glyphicon-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.css') }}" />
    <link href="http://resources/sass/Normalize.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="page">
        <div class="menu">
            <div class="brand">
                <div class="reduit logo_link">
                    <img style="width: 80px; height: 80px;" src="{{ 'img/gt.png' }}">
                </div>
                <div class="logo_link">
                    <a href="#" style="font-size: 16px; font-family: sans-serif;">Centre Technique de Nzeng-Ayong</a>
                </div>
            </div>
            <a href="/accueil"><span class="glyphicon glyphicon-home"></span>Accueil</a>
            <a href="/derangement">Les Dérangements</a>
            <a href="#">Les Abonnés</a>
            <a href="index.php?page=TSI">Taux de signalisation</a>
            <a href="index.php?page=carte"><span class="glyphicon glyphicon-map-marker"></span>Carte</a>
        </div>

        <div class="main" >
            <div class="container">
                @yield('container')
            </div>
        </div>

        <div class="sidebar">
            <h1 style="color: #0080ca;">
                @php
                    if(isset($sidebar) AND $sidebar=='accueil'){
                        echo '<span class="glyphicon glyphicon-home"></span>';
                    }
                @endphp
                @yield('sidebar')
            </h1>
            <div class="link">
                    <div class="link_div">
                        <span>RTC</span>
                    </div>
                    <div class="link_div">
                        <span>RNIS</span>
                    </div>
                    <div class="link_div">
                        <span>ADSL</span>
                    </div>
                    <div class="link_div">
                        <span>Les équipements</span>
                    </div>
                    <div class="link_div">
                        <span>Le personnel</span>
                    </div>
                    <div class="link_div">
                        <span>A propos</span>
                    </div>
            </div>
        </div>
        <div class="footer">
            <span> GABON TELECOM S.A </span>    
        </div>

        
    </div>

	
    <!--code jquery pour le menu déroulant-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!--Clé de géolocalisation-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPBsEwgGYg6bd66KKX2t0vS6HDp5td1zs"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.waterwheelCarousel.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual
    files as needed -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Mon Script -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</body>
</html>