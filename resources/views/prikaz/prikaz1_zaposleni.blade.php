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
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Мој налог <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
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
                    <!-- Main menu -->
                    <li><a href="prikaz1_home"><i class="glyphicon glyphicon-home"></i> Почетна страна</a></li>
                    <li><a href="prikaz1_table"><i class="glyphicon glyphicon-list"></i> Поступци</a></li>
                    <li class="current"><a href="prikaz1_zaposleni"><i class="glyphicon glyphicon-tasks"></i> Запослени</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-12">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title"><h3>ОДГОВОРНА ЛИЦА ЗА ПОПУЊАВАЊЕ ОБРАСЦА</h3></div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form">

			  					<div class="form-group">
			  					<div class="col-md-2"></div>
			  					<div class="col-md-8">
			  						<h4>Изаберите институцију:</h4>
			  								<select class="form-control" style="width: 100%;">
										      <option>Запослени 1</option>
										      <option>Запослени 2</option>
										      <option>Запослени 3</option>
										      <option>Запослени 4</option>
										      <option>Запослени 5</option>
										      <option>Запослени 6</option>
										      <option>Запослени 7</option>
										      <option>Запослени 8</option>
										      <option>Запослени 9</option>
										      <option>Запослени 10</option>
										      <option>Запослени 11</option>
										      <option>Запослени 12</option>
										   
										  </select>	
								</div>
								  </div>


			  					<div class="form-group">
			  					<div class="col-md-2"></div>
			  					<div class="col-md-8">
			  						<h4>Изаберите запосленог:</h4>
			  								<select class="form-control" style="width: 100%;">
										    <optgroup label="Министарство">
										      <option>Запослени 1</option>
										      <option>Запослени 2</option>
										      <option>Запослени 3</option>
										    </optgroup>
										    <optgroup label="Подорганизациона јединица 1">
										      <option>Запослени 4</option>
										      <option>Запослени 5</option>
										      <option>Запослени 6</option>
										    </optgroup>
										    <optgroup label="Подорганизациона јединица 2">
										      <option>Запослени 7</option>
										      <option>Запослени 8</option>
										      <option>Запослени 9</option>
										    </optgroup>
										    <optgroup label="Подорганизациона јединица 3">
										      <option>Запослени 10</option>
										      <option>Запослени 11</option>
										      <option>Запослени 12</option>
										    </optgroup>
										  </select>	
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

    <script src="{{URL::asset('Privilegije/vendors/select/bootstrap-select.min.js')}}"></script>

    <script src="{{URL::asset('Privilegije/js/custom.js')}}"></script>
    <script src="{{URL::asset('Privilegije/js/forms.js')}}"></script>

    <script src="{{URL::asset('Privilegije/vendors/form-helpers/js/bootstrap-formhelpers.min.js')}}"></script>

    <script src="{{URL::asset('Privilegije/vendors/select/bootstrap-select.min.js')}}"></script>

  <script src="{{URL::asset('Privilegije/js/forms.js')}}"></script>

    <link href="{{URL::asset('Privilegije/css/forms.css')}}" rel="stylesheet">

</body>

  <link href="{{URL::asset('Privilegije/vendors/select/bootstrap-select.min.css')}}" rel="stylesheet">
</html>								