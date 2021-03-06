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

    <style type="text/css">
    	.optionGroup {
    font-weight: bold;

}
    </style>

 
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
                    <li><a href="prikaz1_home"><i class="glyphicon glyphicon-home"></i> Почетна страна</a></li>
                    <li class="current"><a href="prikaz1_table"><i class="glyphicon glyphicon-list"></i> Поступци</a></li>
                    <li><a href="prikaz1_zaposleni"><i class="glyphicon glyphicon-tasks"></i> Запослени</a></li>
                    
                    </ul>
             </div>
		  </div>

		   <div class="col-md-10">	

    			<div class="col-md-12">


    			<div class="content-box-large">    				

		  				<button type="button" class="btn btn-default btn-md pull-right" data-toggle="collapse" data-target="#collapse1">
  							<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
							</button>
		  				
							<div class="panel-title" style="text-align: center"><h3>ИНСТИТУЦИЈЕ КОЈЕ ВРШЕ ПОПИС АДМИНИСТРАТИВИХ ПОСТУПАКА</h3></div>
							<br/>							
							<div class="panel-body">
							<div id="collapse1" class="panel-collapse collapse in">	
			  						<h5>Изаберите институцију</h5>
			  							<select class="form-control">
			  								<option value="" selected="" hidden disabled="">Изаберите</option>
			  								<option>Министарство</option>
										    <option>Сателит 1</option>
										    <option>Сателит 2</option>
										    <option>Сателит 3</option>
										    
										  </select>	

										  <br/>

										  <div class="panel-title" style="text-align: center"><h4>ПОДОРГАНИЗАЦИОНЕ ЈЕДИНИЦЕ У ОКВИРУ ИНСТИТУЦИЈЕ</h4></div>
							<br/>							
			  						<h5>Изаберите подорганизациону јединицу</h5>
			  							<select class="form-control">
			  								<option value="" selected="" hidden disabled="">Изаберите</option>
			  								<option>Министарство</option>
										    <option>Сателит 1</option>
										    <option>Сателит 2</option>
										    <option>Сателит 3</option>
										    
										  </select>	

										  <br/>
										  </div>
										  </div>




						<!-- <div class="panel-body">
						<div id="collapse1" class="panel-collapse collapse in">					
		  					<div class="panel-title" style="text-align: center"><h3>УПРАВЉАЊЕ ПОСТУПЦИМА</h3></div>
		  				<label for="zaposleni"><h4>Изаберите запосленог из падајућег менија како бисте му доделили поступак:</h4></label>
		  				<select class="form-control" id="zaposleni">
		  				<option value="" selected="" hidden disabled="">Изаберите</option>
		  				<option value="Марко Петровић">Марко Петровић</option>
		  				<option value="Митар Мирић">Митар Мирић</option>
		  				<option value="Лука Ивковић">Лука Ивковић</option>
		  				<option value="Ана Говедарица">Ана Говедарица</option>
		  				</select>
		  				<br/>
		  				

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
  					<button type="button"  class="btn btn-success pull-right">Потврди</button>	
  					</form>
  					</div>    			   
    			   </div> -->
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
								<td>Марко Марковић
								</td>
								<td class="center">A</td>
								<td class="center" style="color: orange;" id="td1">Попуњен, чека одобрење</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm" id="proba1" onclick="changeColor()">Одобри</button></td>
								</tr>

								<tr class="gradeA">
								<td>Gecko</td>
								<td><a href="http://www.mozilla.org">Firefox 1.0</a></td>
								<td>Win 98+ / OSX.2+</td>
								<td>Илија Јоксимовић
									
									

								</td>
								<td class="center">A</td>
								<td class="center">1.7</td>
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
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
								<td class="center"> <button type="button" class="btn btn-info btn-sm">Одобри</button></td>
								</tr>

							
						</tbody>
					</table>
					<br/>
  				</div>
  			</div>
  		</div>
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
  <script src="{{URL::asset('Privilegije/vendors/select/bootstrap-select.min.js')}}"></script>

  <script src="{{URL::asset('Privilegije/vendors/form-helpers/js/bootstrap-formhelpers.min.js')}}"></script>

    <script src="{{URL::asset('Privilegije/vendors/select/bootstrap-select.min.js')}}"></script>

  <script src="{{URL::asset('Privilegije/js/forms.js')}}"></script>

  <link href="{{URL::asset('Privilegije/vendors/form-helpers/css/bootstrap-formhelpers.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('Privilegije/vendors/select/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('Privilegije/vendors/tags/css/bootstrap-tags.css')}}" rel="stylesheet">

    <link href="{{URL::asset('Privilegije/css/forms.css')}}" rel="stylesheet">

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

  <script type="text/javascript">
  	
  	function changeColor() {
  		document.getElementById('td1').innerHTML = "Одобрен";
  		document.getElementById('td1').style.color = "green";
  		document.getElementById('proba1').disabled = "true";

  	}
  </script>



    
  </body>
</html>