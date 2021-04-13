<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>SAVAN</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--css externes-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- mes css -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">


</head>

<body>
  <!-- **********************************************************************************************************************************************************
     ##################### PRINCIPAL
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" method="POST" action="{{ route('login') }}">
        @csrf
        <h2 class="form-login-heading">se connecter</h2>
        <div class="login-wrap">
          <input id="email"  type="email" class="form-control @error('email') is-invalid @enderror"   name="email" value="{{ old('email') }}" placeholder="Email"  autofocus>
          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <br>
          <input id="password"  type="password"  name="password"class="form-control"  @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password">

          @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
          <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
            <span class="pull-right">
            <a data-toggle="modal" href="{{ route('login') }}"> Forgot Password?</a>
            </span>
            </label>
            {{-- partie à supprimer après la creation du compte du super admin --}}
            <div class="registration">
                vous n'avez pas de compte ?<br/>
                <a class="" href="{{ route('register') }}">
                  cliquer ici pou le créer
                  </a>
              </div>
          <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> connexion</button>
          <hr>


        </div>
      </form>
    </div>
  </div>
  <!-- je place les script à la fin de la page pour que le document puisse se charger rapidement -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/etagere7.png", {
      speed: 100
    });
  </script>
</body>

</html>
