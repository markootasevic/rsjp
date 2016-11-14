
@extends('layouts.app')
@section('style')

<link href="{!! asset('css/prikaz3.css') !!}" media="all" rel="stylesheet" type="text/css" />

@stop
@section('content')

<body>


<div id="demo">
  <h1>Добродошли, [user].</h1>
  <h2>Изаберите поступак и доделите га запосленом:</h2>
  <div class="col-md-3"></div>
  <div class="container">
  <ul class="nav nav-tabs ">
  <li><a href="#" class="tablinks" onclick="openTab(event, 'nedodeljene')">Листа процедура</a></li>
    <li><a href="#" class="tablinks" onclick="openTab(event, 'proba143')">Додељене процедуре</a></li>
    
  </ul>
  </div>
  <div class="col-md-3"></div>
  <!-- Responsive table starts here -->
  <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
  <div class="tabcontent" id="nedodeljene" hidden="">
  <div class="table-responsive-vertical shadow-z-1">
  <div class="panel panel-default">
  <!-- Table starts here -->
  <table id="table" class="table table-hover table-mc-light-blue">
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
        <tr>
          <td data-title="ID">1</td>
          <td data-title="Name">Издавање дозволе за градњу</td>
          <td data-title="Link">
            <a href="https://github.com/zavoloklom/material-design-color-palette" target="_blank">GitHub</a>
          </td>
          <td><select>
          <option>jedan</option>
          <option>dva</option>
          </select>
          </td>
          
          <td data-title="Status">тест</td>
          <td data-title="Status">123</td>
          <td><button class="btn btn-info">Додели</button></td>
        </tr>      
        
      </tbody>
    </table>


      </div>
    </div>
  </div>

  <div class="tabcontent" id="proba143" hidden="">proba</div>

  <script>
function openTab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tabcontent.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>


  

 <!--  <div id="demo">
  <h1>Додељени поступци:</h1> -->
  
  <!-- Responsive table starts here -->
  <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
  <!-- <div class="table-responsive-vertical shadow-z-1"> -->

  <!-- <div class="panel panel-default"> -->
  <!-- Table starts here -->
  <!-- <table id="table" class="table table-hover table-mc-light-blue">
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


        <tr>
          <td data-title="ID">1</td>
          <td data-title="Name">Издавање дозволе за градњу</td>
          <td data-title="Link">
            <a href="https://github.com/zavoloklom/material-design-color-palette" target="_blank">GitHub</a>
          </td>
          <td><select>

          <option>jedan</option>
          <option>dva</option>
          </select></td>
          
          <td data-title="Status">тест</td>
          <td data-title="Status">123</td>
          <td><button class="btn btn-info">Додели</button></td>
        </tr>
        <tr> -->

          <!--  -->
        
      <!-- </tbody>
    </table>
  </div> -->

  <!-- Table Constructor change table classes, you don't need it in your project -->
  <!-- <div style="width: 45%; display: inline-block; vertical-align: top">
  <h2>Table Constructor</h2>
  <p>
    <label for="table-bordered">Style: bordered</label>
    <select id="table-bordered" name="table-bordered">
      <option selected value="">No</option>
      <option value="table-bordered">Yes</option>
    </select>
  </p>
  <p>
    <label for="table-striped">Style: striped</label>
    <select id="table-striped" name="table-striped">
      <option selected value="">No</option>
      <option value="table-striped">Yes</option>
    </select>
  </p>
  <p>
    <label for="table-hover">Style: hover</label>
    <select id="table-hover" name="table-hover">
      <option value="">No</option>
      <option selected value="table-hover">Yes</option>
    </select>
  </p>
  <p>
    <label for="table-color">Style: color</label>
    <select id="table-color" name="table-color">
      <option value="">Default</option>
      <option value="table-mc-red">Red</option>
      <option value="table-mc-pink">Pink</option>
      <option value="table-mc-purple">Purple</option>
      <option value="table-mc-deep-purple">Deep Purple</option>
      <option value="table-mc-indigo">Indigo</option>
      <option value="table-mc-blue">Blue</option>
      <option selected value="table-mc-light-blue">Light Blue</option>
      <option value="table-mc-cyan">Cyan</option>
      <option value="table-mc-teal">Teal</option>
      <option value="table-mc-green">Green</option>
      <option value="table-mc-light-green">Light Green</option>
      <option value="table-mc-lime">Lime</option>
      <option value="table-mc-yellow">Yellow</option>
      <option value="table-mc-amber">Amber</option>
      <option value="table-mc-orange">Orange</option>
      <option value="table-mc-deep-orange">Deep Orange</option>
    </select>
  </p>  
  </div>
  <div style="width: 45%; display: inline-block; vertical-align: top; margin-left: 30px;">
    <h2>Description</h2>
    <p>Tested on Win8.1 with browsers: Chrome 37, Firefox 32, Opera 25, IE 11, Safari 5.1.7</p>
    <p>You can use this table in Bootstrap (v3) projects. Material Design Responsive Table CSS-style will override basic bootstrap style.</p>
    <p class="mdt-subhead-2"><strong>Donate:</strong> You can support me via <a class="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&amp;business=s%2ekupletsky%40gmail%2ecom&amp;lc=US&amp;item_name=Material%20Design%20Responsive%20Table&amp;currency_code=USD&amp;bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted">PayPal</a>, <a class="webmoney" href="https://funding.webmoney.ru/material-design-iconic-font/donate">WebMoney</a> or <a class="gratipay" href="http://gratipay.com/zavoloklom/" target="_blank">Gratipay</a></p>
  </div>
   -->
</div>
</div>



</body>

@stop


