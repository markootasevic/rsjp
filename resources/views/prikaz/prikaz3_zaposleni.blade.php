<!DOCTYPE html>
<html>
  <head>
    <title>Запослени</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('Privilegije/js/jquery-3.1.1.js')}}">
    <link href="https://code.jquery.com/ui/1.8.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
    <!-- Bootstrap -->
    <link href="{{URL::asset('Privilegije/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- styles -->
    <link href="{{URL::asset('Privilegije/css/styles.css')}}" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="{{URL::asset('Privilegije/vendors/form-helpers/css/bootstrap-formhelpers.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('Privilegije/vendors/select/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('Privilegije/vendors/tags/css/bootstrap-tags.css')}}" rel="stylesheet">

    <link href="{{URL::asset('Privilegije/css/forms.css')}}" rel="stylesheet">



  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Одговорна лица</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.html">Logout</a></li>
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
                    <!-- Main menu -->
                    <li><a href="prikaz3-index.html"><i class="glyphicon glyphicon-home"></i> Почетна страна</a></li>
                    <li><a href="prikaz3-table.html"><i class="glyphicon glyphicon-list"></i> Поступци</a></li>
                    <li class="current"><a href="prikaz3-zaposleni.html"><i class="glyphicon glyphicon-tasks"></i> Запослени</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-12">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title"><h4>ОДГОВОРНА ЛИЦА ЗА ПОПУЊАВАЊЕ ОБРАСЦА</h4></div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form">
			  					<div class="form-group">
			  					<div class="col-sm-2">
			  					<input type="button" class="btn btn-primary" id="prethodniZaposleni" value="Претходни">
			  					</div>				  
								  <div class="col-sm-8">
					  				<select class="form-control" id="zaposleni">		  				
					  				<option value="Марко Петровић">Марко Петровић</option>
					  				<option value="Митар Мирић">Митар Мирић</option>
					  				<option value="Лука Ивковић">Лука Ивковић</option>
					  				<option value="Ана Говедарица">Ана Говедарица</option>
					  				</select>
					  				</div>
					  				<div class="col-sm-2">
			  					<input type="button" class="btn btn-primary" id="sledeciZaposleni" value="Следећи">
			  					</div>
								  </div>
								  <br/>
								  <br/>

								  <div class="form-group">
								    <label class="col-sm-2 control-label">Контакт телефон</label>
								    <div class="col-sm-8">
								      <span class="form-control"></span>
								    </div>
								  </div>
								  
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Број поступака за које је задужен</label>
								    <div class="col-sm-8">
								      <span class="form-control"></span>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Број решених поступака</label>
								    <div class="col-sm-8">
								      <span class="form-control"></span>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Број нерешених поступака</label>
								    <div class="col-sm-8">
								      <span class="form-control"></span>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Датум последње активности</label>
								    <div class="col-sm-8">
								      <span class="form-control"></span>
								    </div>
								  </div>
								 </form>
			  				</div>
			  			</div>
	  				</div>
	  			</div>

	  			


	  		<!--  Page content -->
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">         
            <div class="copy text-center">
               Београд, 2016<br> <a href='http://www.rsjp.gov.rs'>Републички секретаријат за јавне политике</a>
            </div>            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.8.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('Privilegije/bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="{{URL::asset('Privilegije/vendors/form-helpers/js/bootstrap-formhelpers.min.js')}}"></script>

    <script src="{{URL::asset('Privilegije/vendors/select/bootstrap-select.min.js')}}"></script>

    <script src="{{URL::asset('Privilegije/vendors/tags/js/bootstrap-tags.min.js')}}"></script>

    <script src="{{URL::asset('Privilegije/vendors/mask/jquery.maskedinput.min.js')}}"></script>

    <script src="{{URL::asset('Privilegije/vendors/moment/moment.min.js')}}"></script>

    <script src="{{URL::asset('Privilegije/vendors/wizard/jquery.bootstrap.wizard.min.js')}}"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="{{URL::asset('Privilegije/vendors/bootstrap-datetimepicker/datetimepicker.css')}}" rel="stylesheet">
     <script src="{{URL::asset('Privilegije/vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js')}}"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="{{URL::asset('Privilegije/js/custom.js')}}"></script>
    <script src="{{URL::asset('Privilegije/js/forms.js')}}"></script>

    <script type="text/javascript">

    </script>


  </body>
</html>