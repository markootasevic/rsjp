    <!DOCTYPE html>
    <html>
    <head>
  
    <title>Преглед поступака</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
    <meta charset="utf-8">

    <!-- Bootstrap -->
    <link href="{{URL::asset('Privilegije/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- styles -->
    <link href="{{URL::asset('Privilegije/css/styles.css')}}" rel="stylesheet">
    <link href="{{URL::asset('Privilegije/vendors/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('Privilegije/bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="{{URL::asset('Privilegije/vendors/datatables/js/jquery.dataTables.min.js')}}"></script>

    <script src="{{URL::asset('Privilegije/vendors/datatables/dataTables.bootstrap.js')}}"></script>

    <script src="{{URL::asset('Privilegije/js/custom.js')}}"></script>
    <script src="{{URL::asset('Privilegije/js/tables.js')}}"></script>

  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-10">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="prikaz4-table.html">Преглед поступака</a></h1>
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
                    <li><a href="prikaz4-index.html"><i class="glyphicon glyphicon-home"></i> Почетна страна</a></li>
                    <li class="current"><a href="prikaz4-table.html"><i class="glyphicon glyphicon-list"></i> Поступци</a></li>
                    </ul>
             </div>
		  </div>
		   <div class="col-md-10">

  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title"><h3>ПРЕГЛЕД ДОДЕЉЕНИХ ПОСТУПАКА</h3></div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Редни број</th>
								<th>Назив поступка</th>
								<th>Шифра поступка</th>
								<th>Статус</th>
								<th>Опције</th>
							</tr>
						</thead>
						<tbody>
							<tr class="gradeA" id="row1">
								<td>1</td>
								<td><a href="">Административни поступак</a></td>
								<td>001-145-07</td>
								<td class="center" style="color: orange" id="status1" >У изради</td>
								<td class="center"> <button type="button" id="button1" class="btn btn-info btn-sm" onclick="test()">Сачувај</button></td>
								</tr>
						</tbody>
					</table>
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
  </body>

  <script type="text/javascript">
	
	function test(){	
	document.getElementById('status1').style.color = "green";
	document.getElementById('status1').innerHTML = "Попуњен, чека одобрење";
	document.getElementById('button1').style.visibility = "hidden";
	};
</script>

  </html>