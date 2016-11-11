var getJSON = function(url) {
  return new Promise(function(resolve, reject) {
    var xhr = new XMLHttpRequest();
    xhr.open('get', url, true);
    xhr.responseType = 'json';
    xhr.onload = function() {
      var status = xhr.status;
      if (status == 200) {
        resolve(xhr.response);
      } else {
        reject(status);
      }
    };
    xhr.send();
  });
};


getJSON('http://www.pravno-informacioni-sistem.rs/rfp/api').then(function(data) {

for (var i = 0; i < data.acts.length; i++) {
    // result.innerText = result.innerText + data.acts[i].title;

    var option = document.createElement("option");
    option.text = data.acts[i].title;
    option.value = i;
    var select7 = document.getElementById("result7");
    select7.appendChild(option);
    $("#result7").select2({
                  data: option
                });


    } 


for (var i = 0; i < data.acts.length; i++) {
    // result.innerText = result.innerText + data.acts[i].title;

    var option = document.createElement("option");
    option.text = data.acts[i].title;
    option.value = i;
    var select6 = document.getElementById("result6");
    select6.appendChild(option);
    $("#result6").select2({
                  data: option
                });


    } 



for (var i = 0; i < data.acts.length; i++) {
    // result.innerText = result.innerText + data.acts[i].title;

    var option = document.createElement("option");
    option.text = data.acts[i].title;
    option.value = i;
    var select5 = document.getElementById("result5");
    select5.appendChild(option);
    $("#result5").select2({
                  data: option
                });


    } 

 for (var i = 0; i < data.acts.length; i++) {
    // result.innerText = result.innerText + data.acts[i].title;

    var option = document.createElement("option");
    option.text = data.acts[i].title;
    option.value = i;
    var select4 = document.getElementById("result4");
    select4.appendChild(option);
    $("#result4").select2({
                  data: option
                });


    } 





  for (var i = 0; i < data.acts.length; i++) {
    // result.innerText = result.innerText + data.acts[i].title;

    var option = document.createElement("option");
    option.text = data.acts[i].title;
    option.value = i;
    var select3 = document.getElementById("result3");
    select3.appendChild(option);
    $("#result3").select2({
                  data: option
                });


    } 




  for (var i = 0; i < data.acts.length; i++) {
    // result.innerText = result.innerText + data.acts[i].title;

    var option = document.createElement("option");
    option.text = data.acts[i].title;
    option.value = i;
    var select2 = document.getElementById("result2");
    select2.appendChild(option);
    $("#result2").select2({
                  data: option
                });


    } 




    for (var i = 0; i < data.acts.length; i++) {
    // result.innerText = result.innerText + data.acts[i].title;

    var option = document.createElement("option");
    option.text = data.acts[i].title;
    option.value = i;
    var select = document.getElementById("result1");
    select.appendChild(option);
    $("#result1").select2({
                  data: option
                });




    } 



  //display the result in an HTML element
}, function(status) { //error detection....
  alert('Something went wrong.');
});

//https://api.myjson.com/bins/3y43o