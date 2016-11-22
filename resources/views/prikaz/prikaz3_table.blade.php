<!DOCTYPE html>
<html>
  <head>
    <title>Преглед поступака</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="description" content="">
  	<meta name="author" content="">    
    <meta charset="utf-8">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">    
    <link href="{{URL::asset('Privilegije/vendors/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" media="screen">
    <!-- Bootstrap -->
    <link href="{{URL::asset('Privilegije/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- styles -->
    <link href="{{URL::asset('Privilegije/css/styles.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('Privilegije/css/multi-select.css')}}">

    <script src="{{URL::asset('Privilegije/js/jquery-3.1.1.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-10">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="prikaz3-table.html">Преглед поступака</a></h1>
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
                    <!-- Main menu -->
                    <li><a href="prikaz3-index.html"><i class="glyphicon glyphicon-home"></i> Почетна страна</a></li>
                    <li class="current"><a href="prikaz3-table.html"><i class="glyphicon glyphicon-list"></i> Поступци</a></li>
                    <li><a href="prikaz3-zaposleni.html"><i class="glyphicon glyphicon-tasks"></i> Запослени</a></li>
                    
                    </ul>
             </div>
		  </div>

		   <div class="col-md-10">		   
    			<div class="col-md-12">
    			<div class="content-box-large">
    				<form id="form1">
		  				<div class="panel-heading">	
		  				<button type="button" class="btn btn-default btn-md pull-right" data-toggle="collapse" data-target="#collapse1">
  							<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
							</button>
							<div class="panel-title"><h3>УПРАВЉАЊЕ ПОСТУПЦИМА</h3></div>							
						</div>	
						<div id="collapse1" class="panel-collapse collapse in">					
		  				<div class="panel-body">	
		  				<label for="zaposleni"><h5>Изаберите запосленог из падајућег менија како бисте му доделили поступак:</h5></label>
		  				<select class="form-control" id="zaposleni">
		  				<option value="" selected="" hidden disabled="">Изаберите</option>
		  				<option value="Марко Петровић">Марко Петровић</option>
		  				<option value="Митар Мирић">Митар Мирић</option>
		  				<option value="Лука Ивковић">Лука Ивковић</option>
		  				<option value="Ана Говедарица">Ана Говедарица</option>
		  				</select>
		  				<br/>
		  				</form>

		  				<form id="form2">
		  				<select id='public-methods' multiple='multiple' style="width: 100%">
    				<option value='elem_1'>Издавање дозволе</option>
    				<option value='elem_2'>Уписивање у катастар имовинских непокретности</option>
    				<option value='elem_3'>Додељивање јединственог матичног броја грађана</option>
    				<option value='elem_4'>Тестирање пилот пројеката</option>
       				<option value='elem_5'>Достављање документације</option>
       				<option value='elem_6'>Издавање возачке дозволе</option>
    				<option value='elem_7'>Уписивање у војни регистар</option>
    				<option value='elem_8'>Завођење предлога за измену и допуну закона о саобраћају</option>
    				<option value='elem_9'>Сортирање базе података</option>
       				<option value='elem_10'>Решавање спорних случајева</option>       				
  				</select>
  				<br/>

  				<button type="button" id='deselect-all' class="btn btn-danger">Поништи</button>  		  				
  				<button type="button"  class="btn btn-success pull-right">Потврди</button>			</div>  

    			   </form>
    			   </div>
    			   <br/>

    			   </div>
    			   </div>

 			  <div class="col-md-12">
    			   
  			<div class="content-box-large">

  				<div class="panel-heading">
					<div class="panel-title"><h3>ПРЕГЛЕД ДОДЕЉЕНИХ ПОСТУПАКА</h3></div>
				</div>

  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
  					<col align="left">
  					<col align="left">
  					<col align="left">
  					<col align="left">
  					<col align="left">
  					<col align="left">
  					<col align="right">
						<thead>
							<tr>
								<th>Редни број</th>
								<th>Назив поступка</th>
								<th>Шифра поступка</th>
								<th>Име одговорног лица</th>
								<th>Име организационе јединице</th>
								<th>Статус</th>
								<th>Опције</th>
							</tr>
						</thead>
						<tbody>
							
							<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm" id="proba1" onclick="changeColor()">Сачувај</button></td>
								</tr>

								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>Илија Јоксимовић
									
									

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									Управ Лукић
								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">Закон о управном поступку</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									Милена Мирковић

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>
								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>
									
									<select style="border:0; width: 100%">
									<option selected="" hidden disabled="">Изаберите</option>
										<option>Марко</option>
										<option>Милан</option>
									</select>

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Сачувај</button></td>
								</tr>

							
						</tbody>
					</table>
					<br/>
					<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">Додај поступак</button>
					<button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#myModal2">Уклони поступак</button>
  				</div>
  			</div>
  		</div>
  	</div>		  
    </div>

    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Додавање новог поступка</h4>
        </div>
        <div class="modal-body">
        <div class="form-group">
      <label for="usr"><h5>Назив поступка:</h5></label>
      <input type="text" class="form-control" id="usr">
      <br/>
      <label for="zaposleni"><h5>Изаберите запосленог из падајућег менија како бисте му доделили поступак:</h5></label>
		  				<select class="form-control" id="zaposleni">
		  				<option value="" selected="" hidden disabled="">Изаберите</option>
		  				<option value="Марко Петровић">Марко Петровић</option>
		  				<option value="Митар Мирић">Митар Мирић</option>
		  				<option value="Лука Ивковић">Лука Ивковић</option>
		  				<option value="Ана Говедарица">Ана Говедарица</option>
		  				</select>
    </div>        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Додај</button>
        </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Брисање поступка</h4>
        </div>
        <div class="modal-body">

		<label for="usr2"></label><h5>Изаберите поступак из падајућег менија:</label></h5></label>
        <select class="form-control" id="usr2">
		<option value='elem_1'>Издавање дозволе</option>
		<option value='elem_2'>Уписивање у катастар имовинских непокретности</option>
    	<option value='elem_3'>Додељивање јединственог матичног броја грађана</option>
    	<option value='elem_4'>Тестирање пилот пројеката</option>
       	<option value='elem_5'>Достављање документације</option>
       	<option value='elem_6'>Издавање возачке дозволе</option>
    	<option value='elem_7'>Уписивање у војни регистар</option>
    	<option value='elem_8'>Завођење предлога за измену и допуну закона о саобраћају</option>
    	<option value='elem_9'>Сортирање базе података</option>
       	<option value='elem_10'>Решавање спорних случајева</option>
		</select>
    	</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Уклони</button>
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

  <script src="{{URL::asset('Privilegije/js/jquery-3.1.1.js')}}"></script>
  <script src="{{URL::asset('Privilegije/vendors/datatables/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{URL::asset('Privilegije/vendors/datatables/dataTables.bootstrap.js')}}"></script>    
   <script src="{{URL::asset('Privilegije/js/tables.js')}}"></script>
  <script src="{{URL::asset('Privilegije/js/jquery.multi-select.js')}}"></script>
  <script src="{{URL::asset('Privilegije/js/custom.js')}}"></script>

  <script type="text/javascript">
  $('#public-methods').multiSelect({
  selectableHeader: "<div class='custom-header'>Листа недодељених поступака:</div>",
  selectionHeader: "<div class='custom-header'>Листа поступака које се додељују запосленом: </div>"
});

  $('#deselect-all').click(function(){
  $('#public-methods').multiSelect('deselect_all');
  return false;
});
  </script>



    
  </body>
</html>