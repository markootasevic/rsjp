
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 
<link href="{{URL::asset('Privilegije/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- styles -->
    <link href="{{URL::asset('Privilegije/css/styles.css')}}" rel="stylesheet">

      <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('Privilegije/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('/Privilegije/js/custom.js')}}"></script>
    </head>
<body>
<div class="header">
       <div class="container">
          <div class="row">
             <div class="col-md-10">
                <!-- Logo -->
                <div class="logo">
                   <h1><a href="prikaz4-index.html">Добродошли!</a></h1>
                </div>
             </div>
              <div class="col-md-2">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                      <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Мој налог <b class="caret"></b></a>
                          <ul class="dropdown-menu animated fadeInUp">
                            <!-- <li><a href="profile.html">Профил</a></li> -->
                            <li><a href="login.html">Одјава</a></li>
                          </ul>
                        </li>
                      </ul>
                    </nav>
                </div>
             </div>
          </div>
       </div>
  </div>


    <div class="page-content">
      <div class="row">
      <div class="col-md-2">
        <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- !!! Srediti rute da vode na odgovarajuce strane !!! -->
                    <li class="current"><a href="prikaz4_home.php"><i class="glyphicon glyphicon-home"></i> Почетна страна</a></li>
                    <li><a href="prikaz4_table.php"><i class="glyphicon glyphicon-list"></i> Поступци</a></li>
                </ul>
             </div>
      </div>
      <div class="col-md-10">
        

        <div class="row">
          <div class="col-md-12 panel-warning">
            <div class="content-box-header panel-heading">
              <div class="panel-title">Информације</div>
            </div>
            <div class="content-box-large box-with-header">
              Информације, контакт телефон, рокови, новости...штагод 
            <br /><br />
          </div>
          </div>
        </div>

        <div class="content-box-large">
        Овде ће нити приказане инструкције за попуњавање обрасца.
        <br /><br />
        </div>
      </div>
    </div>
    </div>

    <footer style="width: 100%">
         <div class="container">         
            <div class="copy text-center">
               Београд, 2016<br> <a href='http://www.rsjp.gov.rs'>Републички секретаријат за јавне политике</a>
            </div>            
         </div>
    </footer>

</body>

</html>



