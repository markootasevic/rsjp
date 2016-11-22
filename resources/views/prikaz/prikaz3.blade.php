
@extends('layouts.app')
@section('style')

<link href="{{URL::asset('css/prikaz3.css')}}" media="all" rel="stylesheet" type="text/css" />

@stop
@section('content')

<style type="text/css">  
tbody {
    display:block;
    height:500px;
    overflow:auto;
}
thead, tbody tr {
    display:table;
    width:100%;
    table-layout:fixed;
}

thead {
    width: calc( 100% - 1em )
}
</style>

<body>

<div class="container">
<div id="demo">
  <h1>Добродошли, [user].</h1>
  
  
  <ul class="nav nav-tabs ">
  <li><a href="#" class="tablinks" onclick="openTab(event, 'nedodeljene')">Листа процедура</a></li>
    <li><a href="#" class="tablinks" onclick="openTab(event, 'proba143')">Додељене процедуре</a></li>

  </ul>
  </div>
  
  <!-- Responsive table starts here -->
  <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
  <div class="tabcontent" id="nedodeljene" hidden="" >
  <div class="table-responsive-vertical shadow-z-1">
  <div class="panel panel-default">
  <!-- Table starts here -->
  <table id="table" class="table table-hover table-mc-light-blue" >
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

  <div class="tabcontent" id="proba143" hidden="">lol</div>

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

</div>
</div>

</div>

</body>

@stop


