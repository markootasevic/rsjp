 
                                function funkcija1() {
                                 if(document.getElementById('check1').checked){
                                var x = document.getElementById("selekt");

                                var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "A[]";
                                    checkbox.value = "Пољопривредна производња, лов и пратеће услужне делатности";
                                    checkbox.id = "id";

                                    var label = document.createElement('label')
                                    label.id = "lbl"
                                    label.htmlFor = "id";
                                    label.appendChild(document.createTextNode('Пољопривредна производња, лов и пратеће услужне делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb"
                                    x.appendChild(linebreak);

                                  var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "A[]";
                                    checkbox.value = "Шумарство и сеча дрвећа";
                                    checkbox.id = "id1";

                                    var label = document.createElement('label')
                                    label.id = "lbl1"
                                    label.htmlFor = "id1";
                                    label.appendChild(document.createTextNode('Шумарство и сеча дрвећа'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb1"
                                    x.appendChild(linebreak);

                                   var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "A[]";
                                    checkbox.value = "Рибарство и аквакултуре";
                                    checkbox.id = "id2";

                                    var label = document.createElement('label')
                                    label.id = "lbl2"
                                    label.htmlFor = "id2";
                                    label.appendChild(document.createTextNode('Рибарство и аквакултуре'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb2"
                                    x.appendChild(linebreak);
                            }
                            else{
                                             $("#id").remove();
                                             $("#lbl").remove();
                                             $("#lb").remove();

                                             $("#id1").remove();
                                             $("#lbl1").remove();
                                             $("#lb1").remove();

                                             $("#id2").remove();
                                             $("#lbl2").remove();
                                             $("#lb2").remove();

                            }
                            }
                             
 
                                function funkcija2() {
                                 if(document.getElementById('check2').checked){

                                var x = document.getElementById("selekt");

                                var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "B[]";
                                    checkbox.value = "Експлоатација угља";
                                    checkbox.id = "id3";

                                    var label = document.createElement('label')
                                    label.id = "lbl3"
                                    label.htmlFor = "id3";
                                    label.appendChild(document.createTextNode('Експлоатација угља'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb3"
                                    x.appendChild(linebreak);

                                  var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "B[]";
                                    checkbox.value = "Експлоатација сирове нафте и природног гаса";
                                    checkbox.id = "id4";

                                    var label = document.createElement('label')
                                    label.id = "lbl4"
                                    label.htmlFor = "id4";
                                    label.appendChild(document.createTextNode('Експлоатација сирове нафте и природног гаса'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb4"
                                    x.appendChild(linebreak);

                                   var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "B[]";
                                    checkbox.value = "Експлоатација руда метала";
                                    checkbox.id = "id5";
                                    checkbox.style = "<>"

                                    var label = document.createElement('label')
                                    label.id = "lbl5"
                                    label.htmlFor = "id5";
                                    label.appendChild(document.createTextNode('Експлоатација руда метала'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb5"
                                    x.appendChild(linebreak);                                    

                                   var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "B[]";
                                    checkbox.value = "Остало рударство";
                                    checkbox.id = "id6";

                                    var label = document.createElement('label')
                                    label.id = "lbl6"
                                    label.htmlFor = "id6";
                                    label.appendChild(document.createTextNode('Остало рударство'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb6"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "B[]";
                                    checkbox.value = "Услужне делатности у рударству и геолошким истраживањима";
                                    checkbox.id = "id7";

                                    var label = document.createElement('label')
                                    label.id = "lbl7"
                                    label.htmlFor = "id7";
                                    label.appendChild(document.createTextNode('Услужне делатности у рударству и геолошким истраживањима'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb7"
                                    x.appendChild(linebreak);                                
                            }
                            else{
                                             $("#id3").remove();
                                             $("#lbl3").remove();
                                             $("#lb3").remove();

                                             $("#id4").remove();
                                             $("#lbl4").remove();
                                             $("#lb4").remove();

                                             $("#id5").remove();
                                             $("#lbl5").remove();
                                             $("#lb5").remove();


                                             $("#id6").remove();
                                             $("#lbl6").remove();
                                             $("#lb6").remove();

                                             $("#id7").remove();
                                             $("#lbl7").remove();
                                             $("#lb7").remove();
                            }
                            }
                             
 
                                function funkcija3() {
                                 if(document.getElementById('check3').checked){
                                var x = document.getElementById("selekt");

                                var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња прехрамбених производа";
                                    checkbox.id = "id8";

                                    var label = document.createElement('label')
                                    label.id = "lbl8"
                                    label.htmlFor = "id8";
                                    label.appendChild(document.createTextNode('Производња прехрамбених производа'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb8"
                                    x.appendChild(linebreak);

                                  var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња пића";
                                    checkbox.id = "id9";

                                    var label = document.createElement('label')
                                    label.id = "lbl9"
                                    label.htmlFor = "id9";
                                    label.appendChild(document.createTextNode('Производња пића'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb9"
                                    x.appendChild(linebreak);

                                   var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња дуванских производа";
                                    checkbox.id = "id11";

                                    var label = document.createElement('label')
                                    label.id = "lbl11"
                                    label.htmlFor = "id11";
                                    label.appendChild(document.createTextNode('Производња дуванских производа'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb11"
                                    x.appendChild(linebreak);                                    

                                   var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња текстила";
                                    checkbox.id = "id12";

                                    var label = document.createElement('label')
                                    label.id = "lbl12"
                                    label.htmlFor = "id12";
                                    label.appendChild(document.createTextNode('Производња текстила'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb12"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња одевних предмета";
                                    checkbox.id = "id13";

                                    var label = document.createElement('label')
                                    label.id = "lbl13"
                                    label.htmlFor = "id13";
                                    label.appendChild(document.createTextNode('Производња одевних предмета'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb13"
                                    x.appendChild(linebreak);

                                     var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "B[]";
                                    checkbox.value = "Производња коже и предмета од коже";
                                    checkbox.id = "id14";

                                    var label = document.createElement('label')
                                    label.id = "lbl14"
                                    label.htmlFor = "id14";
                                    label.appendChild(document.createTextNode('Производња коже и предмета од коже'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb14"
                                    x.appendChild(linebreak);

                                     var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Прерада дрвета и производи од дрвета, плуте, сламе и прућа, осим намештаја";
                                    checkbox.id = "id15";

                                    var label = document.createElement('label')
                                    label.id = "lbl15"
                                    label.htmlFor = "id15";
                                    label.appendChild(document.createTextNode('Прерада дрвета и производи од дрвета, плуте, сламе и прућа, осим намештаја'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb15"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња папира и производа од папира";
                                    checkbox.id = "id16";

                                    var label = document.createElement('label')
                                    label.id = "lbl16"
                                    label.htmlFor = "id16";
                                    label.appendChild(document.createTextNode('Производња папира и производа од папира'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb16"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Штампање и умножавање аудио и видео записа";
                                    checkbox.id = "id17";

                                    var label = document.createElement('label')
                                    label.id = "lbl17"
                                    label.htmlFor = "id17";
                                    label.appendChild(document.createTextNode('Штампање и умножавање аудио и видео записа'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb17"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња кокса и деривата нафте";
                                    checkbox.id = "id18";

                                    var label = document.createElement('label')
                                    label.id = "lbl18"
                                    label.htmlFor = "id18";
                                    label.appendChild(document.createTextNode('Производња кокса и деривата нафте'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb18"
                                    x.appendChild(linebreak);
                              
                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња хемикалија и хемијских производа";
                                    checkbox.id = "id19";

                                    var label = document.createElement('label')
                                    label.id = "lbl19"
                                    label.htmlFor = "id19";
                                    label.appendChild(document.createTextNode('Производња хемикалија и хемијских производа'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb19"
                                    x.appendChild(linebreak);                     
                               
                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња основних фармацеутских производа и препарата";
                                    checkbox.id = "id20";

                                    var label = document.createElement('label')
                                    label.id = "lbl20"
                                    label.htmlFor = "id20";
                                    label.appendChild(document.createTextNode('Производња основних фармацеутских производа и препарата'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb20"
                                    x.appendChild(linebreak);
                                                         
                                     var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња производа од гуме и пластике";
                                    checkbox.id = "id21";

                                    var label = document.createElement('label')
                                    label.id = "lbl21"
                                    label.htmlFor = "id21";
                                    label.appendChild(document.createTextNode('Производња производа од гуме и пластике'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb21"
                                    x.appendChild(linebreak);
                               
                                      var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња производа од осталих неметалних минерала";
                                    checkbox.id = "id22";

                                    var label = document.createElement('label')
                                    label.id = "lbl22"
                                    label.htmlFor = "id22";
                                    label.appendChild(document.createTextNode('Производња производа од осталих неметалних минерала'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb22"
                                    x.appendChild(linebreak);

                                      var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња основних метала";
                                    checkbox.id = "id23";

                                    var label = document.createElement('label')
                                    label.id = "lbl23"
                                    label.htmlFor = "id23";
                                    label.appendChild(document.createTextNode('Производња основних метала'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb23"
                                    x.appendChild(linebreak);

                                      var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња металних производа, осим машина и уређаја";
                                    checkbox.id = "id24";

                                    var label = document.createElement('label')
                                    label.id = "lbl24"
                                    label.htmlFor = "id24";
                                    label.appendChild(document.createTextNode('Производња металних производа, осим машина и уређаја'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb24"
                                    x.appendChild(linebreak);

                                      var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња рачунара, електронских и оптичких производа";
                                    checkbox.id = "id25";

                                    var label = document.createElement('label')
                                    label.id = "lbl25"
                                    label.htmlFor = "id25";
                                    label.appendChild(document.createTextNode('Производња рачунара, електронских и оптичких производа'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb25"
                                    x.appendChild(linebreak);

                                     var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња електричне опреме";
                                    checkbox.id = "id26";

                                    var label = document.createElement('label')
                                    label.id = "lbl26"
                                    label.htmlFor = "id26";
                                    label.appendChild(document.createTextNode('Производња електричне опреме'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb26"
                                    x.appendChild(linebreak);

                                      var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња непоменутих машина и непоменуте опреме";
                                    checkbox.id = "id27";

                                    var label = document.createElement('label')
                                    label.id = "lbl27"
                                    label.htmlFor = "id27";
                                    label.appendChild(document.createTextNode('Производња непоменутих машина и непоменуте опреме'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb27"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња моторних возила, приколица и полуприколица";
                                    checkbox.id = "id28";

                                    var label = document.createElement('label')
                                    label.id = "lbl28"
                                    label.htmlFor = "id28";
                                    label.appendChild(document.createTextNode('Производња моторних возила, приколица и полуприколица'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb28"
                                    x.appendChild(linebreak);

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња осталих саобраћајних средстава";
                                    checkbox.id = "id29";

                                    var label = document.createElement('label')
                                    label.id = "lbl29"
                                    label.htmlFor = "id29";
                                    label.appendChild(document.createTextNode('Производња осталих саобраћајних средстава'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb29"
                                    x.appendChild(linebreak);

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Производња намештаја";
                                    checkbox.id = "id30";

                                    var label = document.createElement('label')
                                    label.id = "lbl30"
                                    label.htmlFor = "id30";
                                    label.appendChild(document.createTextNode('Производња намештаја'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb30"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Остале прерађивачке делатности";
                                    checkbox.id = "id32";

                                    var label = document.createElement('label')
                                    label.id = "lbl32"
                                    label.htmlFor = "id32";
                                    label.appendChild(document.createTextNode('Остале прерађивачке делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb32"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "C[]";
                                    checkbox.value = "Поправка и монтажа машина и опреме";
                                    checkbox.id = "id33";

                                    var label = document.createElement('label')
                                    label.id = "lbl33"
                                    label.htmlFor = "id33";
                                    label.appendChild(document.createTextNode('Поправка и монтажа машина и опреме'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb33"
                                    x.appendChild(linebreak);
                                
                            }
                            else{
                               
                                             $("#id8").remove();
                                             $("#lbl8").remove();
                                             $("#lb8").remove();

                                             $("#id9").remove();
                                             $("#lbl9").remove();
                                             $("#lb9").remove();


                                             $("#id11").remove();
                                             $("#lbl11").remove();
                                             $("#lb11").remove();

                                             $("#id12").remove();
                                             $("#lbl12").remove();
                                             $("#lb12").remove();

                                             $("#id12").remove();
                                             $("#lbl12").remove();
                                             $("#lb12").remove();

                                             $("#id13").remove();
                                             $("#lbl13").remove();
                                             $("#lb13").remove();

                                             $("#id14").remove();
                                             $("#lbl14").remove();
                                             $("#lb14").remove();

                                             $("#id15").remove();
                                             $("#lbl15").remove();
                                             $("#lb15").remove();

                                             $("#id16").remove();
                                             $("#lbl16").remove();
                                             $("#lb16").remove();

                                             $("#id17").remove();
                                             $("#lbl17").remove();
                                             $("#lb17").remove();

                                             $("#id18").remove();
                                             $("#lbl18").remove();
                                             $("#lb18").remove();

                                              $("#id19").remove();
                                             $("#lbl19").remove();
                                             $("#lb19").remove();

                                             $("#id20").remove();
                                             $("#lbl20").remove();
                                             $("#lb20").remove();

                                             $("#id21").remove();
                                             $("#lbl21").remove();
                                             $("#lb21").remove();

                                             $("#id22").remove();
                                             $("#lbl22").remove();
                                             $("#lb22").remove();

                                             $("#id23").remove();
                                             $("#lbl23").remove();
                                             $("#lb23").remove();

                                             $("#id24").remove();
                                             $("#lbl24").remove();
                                             $("#lb24").remove();

                                             $("#id25").remove();
                                             $("#lbl25").remove();
                                             $("#lb25").remove();

                                             $("#id26").remove();
                                             $("#lbl26").remove();
                                             $("#lb26").remove();

                                             $("#id27").remove();
                                             $("#lbl27").remove();
                                             $("#lb27").remove();

                                             $("#id28").remove();
                                             $("#lbl28").remove();
                                             $("#lb28").remove();

                                             $("#id29").remove();
                                             $("#lbl29").remove();
                                             $("#lb29").remove();

                                             $("#id30").remove();
                                             $("#lbl30").remove();
                                             $("#lb30").remove();

                                             
                                             $("#id32").remove();
                                             $("#lbl32").remove();
                                             $("#lb32").remove();

                                             $("#id33").remove();
                                             $("#lbl33").remove();
                                             $("#lb33").remove();

                              }
                            
                            }
                             
 
                                function funkcija4() {
                                 if(document.getElementById('check4').checked){
                                var x = document.getElementById("selekt");


                                var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "D[]";
                                    checkbox.value = "Снабдевање електричном енергијом, гасом, паром и климатизација";
                                    checkbox.id = "id34";

                                    var label = document.createElement('label')
                                    label.id = "lbl34"
                                    label.htmlFor = "id34";
                                    label.appendChild(document.createTextNode('Снабдевање електричном енергијом, гасом, паром и климатизација'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb34"
                                    x.appendChild(linebreak);

                            }
                            else{
                                             $("#id34").remove();
                                             $("#lbl34").remove();
                                             $("#lb34").remove();
                            }
                            }
                             
 
                                function funkcija5() {
                                 if(document.getElementById('check5').checked){ 
                                var x = document.getElementById("selekt");

                                var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "E[]";
                                    checkbox.value = "Скупљање, пречишћавање и дистрибуција воде";
                                    checkbox.id = "id35";

                                    var label = document.createElement('label')
                                    label.id = "lbl35"
                                    label.htmlFor = "id35";
                                    label.appendChild(document.createTextNode('Скупљање, пречишћавање и дистрибуција воде'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb35"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "E[]";
                                    checkbox.value = "Уклањање отпадних вода";
                                    checkbox.id = "id36";

                                    var label = document.createElement('label')
                                    label.id = "lbl36"
                                    label.htmlFor = "id36";
                                    label.appendChild(document.createTextNode('Уклањање отпадних вода'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb36"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "E[]";
                                    checkbox.value = "Сакупљање, третман и одлагање отпада; поновно искоришћавање отпадних материја";
                                    checkbox.id = "id37";

                                    var label = document.createElement('label')
                                    label.id = "lbl37"
                                    label.htmlFor = "id37";
                                    label.appendChild(document.createTextNode('Сакупљање, третман и одлагање отпада; поновно искоришћавање отпадних материја'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb37"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "E[]";
                                    checkbox.value = "Санација, рекултивација и друге услуге у области управљања отпадом";
                                    checkbox.id = "id38";

                                    var label = document.createElement('label')
                                    label.id = "lbl38"
                                    label.htmlFor = "id38";
                                    label.appendChild(document.createTextNode('Санација, рекултивација и друге услуге у области управљања отпадом'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb38"
                                    x.appendChild(linebreak);

                            }
                            else{
                                         $("#id35").remove();
                                             $("#lbl35").remove();
                                             $("#lb35").remove();

                                             $("#id36").remove();
                                             $("#lbl36").remove();
                                             $("#lb36").remove();

                                             $("#id37").remove();
                                             $("#lbl37").remove();
                                             $("#lb37").remove();

                                             $("#id38").remove();
                                             $("#lbl38").remove();
                                             $("#lb38").remove();
                            }
                            }
                             
 
                                function funkcija6() {
                                 if(document.getElementById('check6').checked){
                                var x = document.getElementById("selekt");

                                 var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "F[]";
                                    checkbox.value = "Изградња зграда";
                                    checkbox.id = "id39";

                                    var label = document.createElement('label')
                                    label.id = "lbl39"
                                    label.htmlFor = "id39";
                                    label.appendChild(document.createTextNode('Изградња зграда'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb39"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "F[]";
                                    checkbox.value = "Изградња осталих грађевина";
                                    checkbox.id = "id40";

                                    var label = document.createElement('label')
                                    label.id = "lbl40"
                                    label.htmlFor = "id40";
                                    label.appendChild(document.createTextNode('Изградња осталих грађевина'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb40"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "F[]";
                                    checkbox.value = "Специјализовани грађевински радови";
                                    checkbox.id = "id41";

                                    var label = document.createElement('label')
                                    label.id = "lbl41"
                                    label.htmlFor = "id41";
                                    label.appendChild(document.createTextNode('Специјализовани грађевински радови'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb41"
                                    x.appendChild(linebreak);

                            }
                            else{
                                
                                             $("#id39").remove();
                                             $("#lbl39").remove();
                                             $("#lb39").remove();

                                             $("#id40").remove();
                                             $("#lbl40").remove();
                                             $("#lb40").remove();

                                             $("#id41").remove();
                                             $("#lbl41").remove();
                                             $("#lb41").remove();
                            }
                            }
                             
 
                                function funkcija7() {
                                 if(document.getElementById('check7').checked){
                                var x = document.getElementById("selekt");


                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "G[]";
                                    checkbox.value = "Трговина на велико и трговина на мало и поправка моторних возила и мотоцикала";
                                    checkbox.id = "id42";

                                    var label = document.createElement('label')
                                    label.id = "lbl42"
                                    label.htmlFor = "id42";
                                    label.appendChild(document.createTextNode('Трговина на велико и трговина на мало и поправка моторних возила и мотоцикала'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb42"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "G[]";
                                    checkbox.value = "Трговина на велико, осим трговине моторним возилима и мотоциклима";
                                    checkbox.id = "id43";

                                    var label = document.createElement('label')
                                    label.id = "lbl43"
                                    label.htmlFor = "id43";
                                    label.appendChild(document.createTextNode('Трговина на велико, осим трговине моторним возилима и мотоциклима'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb43"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "G[]";
                                    checkbox.value = "Трговина на мало, осим трговине моторним возилима и мотоциклима";
                                    checkbox.id = "id44";

                                    var label = document.createElement('label')
                                    label.id = "lbl44"
                                    label.htmlFor = "id44";
                                    label.appendChild(document.createTextNode('Трговина на мало, осим трговине моторним возилима и мотоциклима'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb44"
                                    x.appendChild(linebreak);                            }
                            else{
                                    

                                        $("#id42").remove();
                                             $("#lbl42").remove();
                                             $("#lb42").remove();

                                             $("#id43").remove();
                                             $("#lbl43").remove();
                                             $("#lb43").remove();

                                             $("#id44").remove();
                                             $("#lbl44").remove();
                                             $("#lb44").remove()
                            }
                            }
                             
 
                                function funkcija8() {
                                 if(document.getElementById('check8').checked){
                                var x = document.getElementById("selekt");


                                 var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "H[]";
                                    checkbox.value = "Копнени саобраћај и цевоводни транспорт";
                                    checkbox.id = "id45";

                                    var label = document.createElement('label')
                                    label.id = "lbl45"
                                    label.htmlFor = "id45";
                                    label.appendChild(document.createTextNode('Копнени саобраћај и цевоводни транспорт'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb45"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "H[]";
                                    checkbox.value = "Водени саобраћаj";
                                    checkbox.id = "id46";

                                    var label = document.createElement('label')
                                    label.id = "lbl46"
                                    label.htmlFor = "id46";
                                    label.appendChild(document.createTextNode('Водени саобраћаj'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb46"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "H[]";
                                    checkbox.value = "Ваздушни саобраћај";
                                    checkbox.id = "id47";

                                    var label = document.createElement('label')
                                    label.id = "lbl47"
                                    label.htmlFor = "id47";
                                    label.appendChild(document.createTextNode('Ваздушни саобраћај'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb47"
                                    x.appendChild(linebreak);    

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "H[]";
                                    checkbox.value = "Складиштење и пратеће активности у саобраћају";
                                    checkbox.id = "id48";

                                    var label = document.createElement('label')
                                    label.id = "lbl48"
                                    label.htmlFor = "id48";
                                    label.appendChild(document.createTextNode('Складиштење и пратеће активности у саобраћају'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb48"
                                    x.appendChild(linebreak);  

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "H[]";
                                    checkbox.value = "Поштанске активности";
                                    checkbox.id = "id49";

                                    var label = document.createElement('label')
                                    label.id = "lbl49"
                                    label.htmlFor = "id49";
                                    label.appendChild(document.createTextNode('Поштанске активности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb49"
                                    x.appendChild(linebreak); 

                            }
                            else{
                                    $("#id45").remove();
                                             $("#lbl45").remove();
                                             $("#lb45").remove();

                                             $("#id46").remove();
                                             $("#lbl46").remove();
                                             $("#lb46").remove();

                                             $("#id47").remove();
                                             $("#lbl47").remove();
                                             $("#lb47").remove();

                                              $("#id48").remove();
                                             $("#lbl48").remove();
                                             $("#lb48").remove()

                                              $("#id49").remove();
                                             $("#lbl49").remove();
                                             $("#lb49").remove()
                            }
                            }
                             
 
                                function funkcija9() {
                                 if(document.getElementById('check9').checked){
                                var x = document.getElementById("selekt");

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "I[]";
                                    checkbox.value = "Смештај";
                                    checkbox.id = "id50";

                                    var label = document.createElement('label')
                                    label.id = "lbl50"
                                    label.htmlFor = "id50";
                                    label.appendChild(document.createTextNode('Смештај'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb50"
                                    x.appendChild(linebreak);  

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "I[]";
                                    checkbox.value = "Делатност припремања и послуживања хране и пића";
                                    checkbox.id = "id51";

                                    var label = document.createElement('label')
                                    label.id = "lbl51"
                                    label.htmlFor = "id51";
                                    label.appendChild(document.createTextNode('Делатност припремања и послуживања хране и пића'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb51"
                                    x.appendChild(linebreak); 

                            }
                            else{
                                             $("#id50").remove();
                                             $("#lbl50").remove();
                                             $("#lb50").remove()

                                              $("#id51").remove();
                                             $("#lbl51").remove();
                                             $("#lb51").remove()
                            }
                            }
                             

                             
                                function funkcija10() {
                                 if(document.getElementById('check10').checked){
                                var x = document.getElementById("selekt");

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "J[]";
                                    checkbox.value = "Издавачке делатности";
                                    checkbox.id = "id52";

                                    var label = document.createElement('label')
                                    label.id = "lbl52"
                                    label.htmlFor = "id52";
                                    label.appendChild(document.createTextNode('Издавачке делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb52"
                                    x.appendChild(linebreak);  

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "J[]";
                                    checkbox.value = "Кинематографска и телевизијска продукција, снимање звучних записа и издавање музичких";
                                    checkbox.id = "id53";

                                    var label = document.createElement('label');
                                    label.id = "lbl53"
                                    label.htmlFor = "id53";
                                    label.appendChild(document.createTextNode('Кинематографска и телевизијска продукција, снимање звучних записа и издавање музичких'));

                                    var razmak = document.createElement('br');
                                    label.appendChild(razmak);

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var label1 = document.createElement('label');
                                    label1.id = "1lbl53"
                                    label1.htmlFor = "1id53";
                                    label1.appendChild(document.createTextNode('записа'));
                                    x.appendChild(label1);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb53"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "J[]";
                                    checkbox.value = "Програмске активности и емитовање";
                                    checkbox.id = "id54";

                                    var label = document.createElement('label')
                                    label.id = "lbl54"
                                    label.htmlFor = "id54";
                                    label.appendChild(document.createTextNode('Програмске активности и емитовање'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb54"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "J[]";
                                    checkbox.value = "Телекомуникације";
                                    checkbox.id = "id55";

                                    var label = document.createElement('label')
                                    label.id = "lbl55"
                                    label.htmlFor = "id55";
                                    label.appendChild(document.createTextNode('Телекомуникације'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb55"
                                    x.appendChild(linebreak);  

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "J[]";
                                    checkbox.value = "Рачунарско програмирање, консултантске и с тим повезане делатности";
                                    checkbox.id = "id56";

                                    var label = document.createElement('label')
                                    label.id = "lbl56"
                                    label.htmlFor = "id56";
                                    label.appendChild(document.createTextNode('Рачунарско програмирање, консултантске и с тим повезане делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb56"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "J[]";
                                    checkbox.value = "Информационе услужне делатности";
                                    checkbox.id = "id57";

                                    var label = document.createElement('label')
                                    label.id = "lbl57"
                                    label.htmlFor = "id57";
                                    label.appendChild(document.createTextNode('Информационе услужне делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb57"
                                    x.appendChild(linebreak);  

                            }
                            else{
                                             $("#id52").remove();
                                             $("#lbl52").remove();
                                             $("#lb52").remove()

                                              $("#id52").remove();
                                             $("#lbl52").remove();
                                             $("#lb52").remove()

                                             $("#id53").remove();
                                             $("#lbl53").remove();
                                             $("#1lbl53").remove();
                                             $("#lb53").remove()

                                              $("#id54").remove();
                                             $("#lbl54").remove();
                                             $("#lb54").remove()
                                             
                                             $("#id55").remove();
                                             $("#lbl55").remove();
                                             $("#lb55").remove()

                                             $("#id56").remove();
                                             $("#lbl56").remove();
                                             $("#lb56").remove()

                                             $("#id57").remove();
                                             $("#lbl57").remove();
                                             $("#lb57").remove()
                            }
                            }
                             
 
                                  function funkcija11() {
                                 if(document.getElementById('check11').checked){
                                var x = document.getElementById("selekt");

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "K[]";
                                    checkbox.value = "Финансијске услуге, осим осигурања и пензијских фондова";
                                    checkbox.id = "id58";

                                    var label = document.createElement('label')
                                    label.id = "lbl58"
                                    label.htmlFor = "id58";
                                    label.appendChild(document.createTextNode('Финансијске услуге, осим осигурања и пензијских фондова'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb58"
                                    x.appendChild(linebreak);  

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "K[]";
                                    checkbox.value = "Осигурање, реосигурање и пензијски фондови, осим обавезног социјалног осигурања";
                                    checkbox.id = "id59";

                                    var label = document.createElement('label')
                                    label.id = "lbl59"
                                    label.htmlFor = "id59";
                                    label.appendChild(document.createTextNode('Осигурање, реосигурање и пензијски фондови, осим обавезног социјалног осигурања'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb59"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "K[]";
                                    checkbox.value = "Помоћне делатности у пружању финансијских услуга и осигурању";
                                    checkbox.id = "id60";

                                    var label = document.createElement('label')
                                    label.id = "lbl60"
                                    label.htmlFor = "id60";
                                    label.appendChild(document.createTextNode('Помоћне делатности у пружању финансијских услуга и осигурању'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb60"
                                    x.appendChild(linebreak); 

                            }
                            else{
                                             $("#id58").remove();
                                             $("#lbl58").remove();
                                             $("#lb58").remove()

                                             $("#id59").remove();
                                             $("#lbl59").remove();
                                             $("#lb59").remove();

                                             $("#id60").remove();
                                             $("#lbl60").remove();
                                             $("#lb60").remove();
                            }
                            }
                             
 
                                function funkcija12() {
                                 if(document.getElementById('check12').checked){
                                var x = document.getElementById("selekt");

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "L[]";
                                    checkbox.value = "Пословање некретнинама";
                                    checkbox.id = "id61";

                                    var label = document.createElement('label')
                                    label.id = "lbl61"
                                    label.htmlFor = "id61";
                                    label.appendChild(document.createTextNode('Пословање некретнинама'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb61"
                                    x.appendChild(linebreak); 

                            }
                            else{
                                    
                                             $("#id61").remove();
                                             $("#lbl61").remove();
                                             $("#lb61").remove();
                            }
                            }
                             
 
                                function funkcija13() {
                                 if(document.getElementById('check13').checked){
                                var x = document.getElementById("selekt");

                                 var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "M[]";
                                    checkbox.value = "Правни и рачуноводствени послови";
                                    checkbox.id = "id62";

                                    var label = document.createElement('label')
                                    label.id = "lbl62"
                                    label.htmlFor = "id62";
                                    label.appendChild(document.createTextNode('Правни и рачуноводствени послови'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb62"
                                    x.appendChild(linebreak); 

                                     var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "M[]";
                                    checkbox.value = "Управљачке делатности; саветовање у вези са управљањем";
                                    checkbox.id = "id63";

                                    var label = document.createElement('label')
                                    label.id = "lbl63"
                                    label.htmlFor = "id63";
                                    label.appendChild(document.createTextNode('Управљачке делатности; саветовање у вези са управљањем'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb63"
                                    x.appendChild(linebreak); 

                                     var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "M[]";
                                    checkbox.value = "Архитектонске и инжењерске делатности; инжењерско испитивање и анализе";
                                    checkbox.id = "id64";

                                    var label = document.createElement('label')
                                    label.id = "lbl64"
                                    label.htmlFor = "id64";
                                    label.appendChild(document.createTextNode('Архитектонске и инжењерске делатности; инжењерско испитивање и анализе'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb64"
                                    x.appendChild(linebreak); 

                                     var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "M[]";
                                    checkbox.value = "Научно истраживање и развој";
                                    checkbox.id = "id65";

                                    var label = document.createElement('label')
                                    label.id = "lbl65"
                                    label.htmlFor = "id65";
                                    label.appendChild(document.createTextNode('Научно истраживање и развој'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb65"
                                    x.appendChild(linebreak); 

                                     var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "M[]";
                                    checkbox.value = "Рекламирање и истраживање тржишта";
                                    checkbox.id = "id66";

                                    var label = document.createElement('label')
                                    label.id = "lbl66"
                                    label.htmlFor = "id66";
                                    label.appendChild(document.createTextNode('Рекламирање и истраживање тржишта'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb66"
                                    x.appendChild(linebreak); 

                                     var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "M[]";
                                    checkbox.value = "Остале стручне, научне и техничке делатности";
                                    checkbox.id = "id67";

                                    var label = document.createElement('label')
                                    label.id = "lbl67"
                                    label.htmlFor = "id67";
                                    label.appendChild(document.createTextNode('Остале стручне, научне и техничке делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb67"
                                    x.appendChild(linebreak); 

                                      var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "M[]";
                                    checkbox.value = "Ветеринарске делатности";
                                    checkbox.id = "id68";

                                    var label = document.createElement('label')
                                    label.id = "lbl68"
                                    label.htmlFor = "id68";
                                    label.appendChild(document.createTextNode('Ветеринарске делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb68"
                                    x.appendChild(linebreak); 

                            }
                            else{
                                      
                                               $("#id62").remove();
                                             $("#lbl62").remove();
                                             $("#lb62").remove();

                                               $("#id63").remove();
                                             $("#lbl63").remove();
                                             $("#lb63").remove();

                                               $("#id64").remove();
                                             $("#lbl64").remove();
                                             $("#lb64").remove();

                                               $("#id65").remove();
                                             $("#lbl65").remove();
                                             $("#lb65").remove();

                                               $("#id66").remove();
                                             $("#lbl66").remove();
                                             $("#lb66").remove();

                                               $("#id67").remove();
                                             $("#lbl67").remove();
                                             $("#lb67").remove();

                                               $("#id68").remove();
                                             $("#lbl68").remove();
                                             $("#lb68").remove();

                            }
                            }
                             
 
                                function funkcija14() {
                                 if(document.getElementById('check14').checked){
                                var x = document.getElementById("selekt");

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "N[]";
                                    checkbox.value = "Изнајмљивање и лизинг";
                                    checkbox.id = "id69";

                                    var label = document.createElement('label')
                                    label.id = "lbl69"
                                    label.htmlFor = "id69";
                                    label.appendChild(document.createTextNode('Изнајмљивање и лизинг'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb69"
                                    x.appendChild(linebreak); 

                                     var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "N[]";
                                    checkbox.value = "Делатности запошљавања";
                                    checkbox.id = "id70";

                                    var label = document.createElement('label')
                                    label.id = "lbl70"
                                    label.htmlFor = "id70";
                                    label.appendChild(document.createTextNode('Делатности запошљавања'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb70"
                                    x.appendChild(linebreak); 

                                     var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "N[]";
                                    checkbox.value = "Делатност путничких агенција, тур-оператора, услуге резервације и пратеће активности";
                                    checkbox.id = "id71";

                                    var label = document.createElement('label')
                                    label.id = "lbl71"
                                    label.htmlFor = "id71";
                                    label.appendChild(document.createTextNode('Делатност путничких агенција, тур-оператора, услуге резервације и пратеће активности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb71"
                                    x.appendChild(linebreak); 

                                     var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "N[]";
                                    checkbox.value = "Заштитне и истражне делатности";
                                    checkbox.id = "id72";

                                    var label = document.createElement('label')
                                    label.id = "lbl72"
                                    label.htmlFor = "id72";
                                    label.appendChild(document.createTextNode('Заштитне и истражне делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb72"
                                    x.appendChild(linebreak); 

                                     var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "N[]";
                                    checkbox.value = "Услуге одржавања објеката и околине";
                                    checkbox.id = "id73";

                                    var label = document.createElement('label')
                                    label.id = "lbl73"
                                    label.htmlFor = "id73";
                                    label.appendChild(document.createTextNode('Услуге одржавања објеката и околине'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb73"
                                    x.appendChild(linebreak); 

                                      var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "N[]";
                                    checkbox.value = "Канцеларијско-административне и друге помоћне пословне делатности";
                                    checkbox.id = "id74";

                                    var label = document.createElement('label')
                                    label.id = "lbl74"
                                    label.htmlFor = "id74";
                                    label.appendChild(document.createTextNode('Канцеларијско-административне и друге помоћне пословне делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb74"
                                    x.appendChild(linebreak); 
                                                    
                                    }
                            else{
                                    
                                         $("#id69").remove();
                                             $("#lbl69").remove();
                                             $("#lb69").remove();

                                               $("#id70").remove();
                                             $("#lbl70").remove();
                                             $("#lb70").remove();

                                               $("#id71").remove();
                                             $("#lbl71").remove();
                                             $("#lb71").remove();

                                               $("#id72").remove();
                                             $("#lbl72").remove();
                                             $("#lb72").remove();

                                               $("#id73").remove();
                                             $("#lbl73").remove();
                                             $("#lb73").remove();

                                               $("#id74").remove();
                                             $("#lbl74").remove();
                                             $("#lb74").remove();
                            }
                            }
                             
 
                                function funkcija15() {
                                 if(document.getElementById('check15').checked){
                                var x = document.getElementById("selekt");

                                  var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "O[]";
                                    checkbox.value = "Јавна управа и одбрана; обавезно социјално осигурање";
                                    checkbox.id = "id75";

                                    var label = document.createElement('label')
                                    label.id = "lbl75"
                                    label.htmlFor = "id75";
                                    label.appendChild(document.createTextNode('Јавна управа и одбрана; обавезно социјално осигурање'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb75"
                                    x.appendChild(linebreak); 

                            }
                            else{
                                            $("#id75").remove();
                                             $("#lbl75").remove();
                                             $("#lb75").remove();
                            }
                            }
                             
 
                                function funkcija16() {
                                 if(document.getElementById('check16').checked){
                                var x = document.getElementById("selekt");

                                 var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "P[]";
                                    checkbox.value = "Образовање";
                                    checkbox.id = "id76";

                                    var label = document.createElement('label')
                                    label.id = "lbl76"
                                    label.htmlFor = "id76";
                                    label.appendChild(document.createTextNode('Образовање'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb76"
                                    x.appendChild(linebreak); 

                            }
                            else{
                                             $("#id76").remove();
                                             $("#lbl76").remove();
                                             $("#lb76").remove();
                            }
                            }
                             
 
                                function funkcija17() {
                                 if(document.getElementById('check17').checked){
                                var x = document.getElementById("selekt");

                                 var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "Q[]";
                                    checkbox.value = "Здравствене делатности";
                                    checkbox.id = "id77";

                                    var label = document.createElement('label')
                                    label.id = "lbl77"
                                    label.htmlFor = "id77";
                                    label.appendChild(document.createTextNode('Здравствене делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb77"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "Q[]";
                                    checkbox.value = "Социјална заштита са смештајем";
                                    checkbox.id = "id78";

                                    var label = document.createElement('label')
                                    label.id = "lbl78"
                                    label.htmlFor = "id78";
                                    label.appendChild(document.createTextNode('Социјална заштита са смештајем'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb78"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "Q[]";
                                    checkbox.value = "Социјална заштита без смештаја";
                                    checkbox.id = "id79";

                                    var label = document.createElement('label')
                                    label.id = "lbl79"
                                    label.htmlFor = "id79";
                                    label.appendChild(document.createTextNode('Социјална заштита без смештаја'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb79"
                                    x.appendChild(linebreak); 

                            }
                            else{
                                    
                                             $("#id77").remove();
                                             $("#lbl77").remove();
                                             $("#lb77").remove();


                                             $("#id78").remove();
                                             $("#lbl78").remove();
                                             $("#lb78").remove();


                                             $("#id79").remove();
                                             $("#lbl79").remove();
                                             $("#lb79").remove();
                            }
                            }
                             
 
                                function funkcija18() {
                                 if(document.getElementById('check18').checked){
                                var x = document.getElementById("selekt");



                                 var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "R[]";
                                    checkbox.value = "Стваралачке, уметничке и забавне делатности";
                                    checkbox.id = "id80";

                                    var label = document.createElement('label')
                                    label.id = "lbl80"
                                    label.htmlFor = "id80";
                                    label.appendChild(document.createTextNode('Стваралачке, уметничке и забавне делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb80"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "R[]";
                                    checkbox.value = "Делатност библиотека, архива, музеја, галерија и збирки и остале културне делатности";
                                    checkbox.id = "id81";

                                    var label = document.createElement('label')
                                    label.id = "lbl81"
                                    label.htmlFor = "id81";
                                    label.appendChild(document.createTextNode('Делатност библиотека, архива, музеја, галерија и збирки и остале културне делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb81"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "R[]";
                                    checkbox.value = "Коцкање и клађење";
                                    checkbox.id = "id82";

                                    var label = document.createElement('label')
                                    label.id = "lbl82"
                                    label.htmlFor = "id82";
                                    label.appendChild(document.createTextNode('Коцкање и клађење'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb82"
                                    x.appendChild(linebreak); 

                                            var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "R[]";
                                    checkbox.value = "Спортске, забавне и рекреативне делатности";
                                    checkbox.id = "id83";

                                    var label = document.createElement('label')
                                    label.id = "lbl83"
                                    label.htmlFor = "id83";
                                    label.appendChild(document.createTextNode('Спортске, забавне и рекреативне делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb83"
                                    x.appendChild(linebreak); 


                            }
                            else{
                                             $("#id80").remove();
                                             $("#lbl80").remove();
                                             $("#lb80").remove();


                                             $("#id81").remove();
                                             $("#lbl81").remove();
                                             $("#lb81").remove();


                                             $("#id82").remove();
                                             $("#lbl82").remove();
                                             $("#lb82").remove();

                                             $("#id83").remove();
                                             $("#lbl83").remove();
                                             $("#lb83").remove();
                            }
                            }
                             
 
                                function funkcija19() {
                                 if(document.getElementById('check19').checked){
                                var x = document.getElementById("selekt");

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "S[]";
                                    checkbox.value = "Делатности удружења";
                                    checkbox.id = "id84";

                                    var label = document.createElement('label')
                                    label.id = "lbl84"
                                    label.htmlFor = "id84";
                                    label.appendChild(document.createTextNode('Делатности удружења'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb84"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "S[]";
                                    checkbox.value = "Поправка рачунара и предмета за личну употребу и употребу у домаћинству";
                                    checkbox.id = "id85";

                                    var label = document.createElement('label')
                                    label.id = "lbl85"
                                    label.htmlFor = "id85";
                                    label.appendChild(document.createTextNode('Поправка рачунара и предмета за личну употребу и употребу у домаћинству'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb85"
                                    x.appendChild(linebreak); 

                                            var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "S[]";
                                    checkbox.value = "Остале личне услужне делатности";
                                    checkbox.id = "id86";

                                    var label = document.createElement('label')
                                    label.id = "lbl86"
                                    label.htmlFor = "id86";
                                    label.appendChild(document.createTextNode('Остале личне услужне делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb86"
                                    x.appendChild(linebreak);
                              
                            }
                            else{
                                       $("#id84").remove();
                                             $("#lbl84").remove();
                                             $("#lb84").remove();


                                             $("#id85").remove();
                                             $("#lbl85").remove();
                                             $("#lb85").remove();

                                             $("#id86").remove();
                                             $("#lbl86").remove();
                                             $("#lb86").remove();
                            }
                            }
                             
 
                                function funkcija20() {
                                 if(document.getElementById('check20').checked){
                                var x = document.getElementById("selekt");

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "T[]";
                                    checkbox.value = "Делатност домаћинстава која запошљавају послугу";
                                    checkbox.id = "id87";

                                    var label = document.createElement('label')
                                    label.id = "lbl87"
                                    label.htmlFor = "id87";
                                    label.appendChild(document.createTextNode('Делатност домаћинстава која запошљавају послугу'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb87"
                                    x.appendChild(linebreak); 

                                            var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "T[]";
                                    checkbox.value = "Делатност домаћинстава која производе робу и услуге за сопствене потребе";
                                    checkbox.id = "id88";

                                    var label = document.createElement('label')
                                    label.id = "lbl88"
                                    label.htmlFor = "id88";
                                    label.appendChild(document.createTextNode('Делатност домаћинстава која производе робу и услуге за сопствене потребе'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb88"
                                    x.appendChild(linebreak);

                            }
                            else{
                                             $("#id87").remove();
                                             $("#lbl87").remove();
                                             $("#lb87").remove();

                                             $("#id88").remove();
                                             $("#lbl88").remove();
                                             $("#lb88").remove();
                            }
                            }
                             
 
                                function funkcija21() {
                                 if(document.getElementById('check21').checked){
                                var x = document.getElementById("selekt");

                                            var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "U[]";
                                    checkbox.value = "Делатност домаћинстава која производе робу и услуге за сопствене потребе";
                                    checkbox.id = "id89";

                                    var label = document.createElement('label')
                                    label.id = "lbl89"
                                    label.htmlFor = "id89";
                                    label.appendChild(document.createTextNode('Делатност домаћинстава која производе робу и услуге за сопствене потребе'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb89"
                                    x.appendChild(linebreak);


                            }
                            else{
                                    
                                             $("#id89").remove();
                                             $("#lbl89").remove();
                                             $("#lb89").remove();
                            }
                            }
                             

                                function funkcija22() {
                                 if(document.getElementById('check22').checked){
                                var x = document.getElementById("selekt");

                                 var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id90";

                                    var label = document.createElement('label')
                                    label.id = "lbl90"
                                    label.htmlFor = "id90";
                                    label.appendChild(document.createTextNode('Пољопривредна производња, лов и пратеће услужне делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb90"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id91";

                                    var label = document.createElement('label')
                                    label.id = "lbl91"
                                    label.htmlFor = "id91";
                                    label.appendChild(document.createTextNode('Шумарство и сеча дрвећа'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb91"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id92";

                                    var label = document.createElement('label')
                                    label.id = "lbl92"
                                    label.htmlFor = "id92";
                                    label.appendChild(document.createTextNode('Рибарство и аквакултуре'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb92"
                                    x.appendChild(linebreak); 

                                            var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id93";

                                    var label = document.createElement('label')
                                    label.id = "lbl93"
                                    label.htmlFor = "id93";
                                    label.appendChild(document.createTextNode('Експлоатација угља'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb93"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id94";

                                    var label = document.createElement('label')
                                    label.id = "lbl94"
                                    label.htmlFor = "id94";
                                    label.appendChild(document.createTextNode('Експлоатација сирове нафте и природног гаса'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb94"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id95";

                                    var label = document.createElement('label')
                                    label.id = "lbl95"
                                    label.htmlFor = "id95";
                                    label.appendChild(document.createTextNode('Експлоатација руда метала'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb95"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id96";

                                    var label = document.createElement('label')
                                    label.id = "lbl96"
                                    label.htmlFor = "id96";
                                    label.appendChild(document.createTextNode('Остало рударство'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb96"
                                    x.appendChild(linebreak); 

                                            var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id97";

                                    var label = document.createElement('label')
                                    label.id = "lbl97"
                                    label.htmlFor = "id97";
                                    label.appendChild(document.createTextNode('Услужне делатности у рударству и геолошким истраживањима'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb97"
                                    x.appendChild(linebreak); 

                                     var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id98";

                                    var label = document.createElement('label')
                                    label.id = "lbl98"
                                    label.htmlFor = "id98";
                                    label.appendChild(document.createTextNode('Производња прехрамбених производа'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb98"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id99";

                                    var label = document.createElement('label')
                                    label.id = "lbl99"
                                    label.htmlFor = "id99";
                                    label.appendChild(document.createTextNode('Производња пића'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb99"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id100";

                                    var label = document.createElement('label')
                                    label.id = "lbl100"
                                    label.htmlFor = "id100";
                                    label.appendChild(document.createTextNode('Производња дуванских производа'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb100"
                                    x.appendChild(linebreak); 

                                            var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id101";

                                    var label = document.createElement('label')
                                    label.id = "lbl101"
                                    label.htmlFor = "id101";
                                    label.appendChild(document.createTextNode('Производња текстила'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb101"
                                    x.appendChild(linebreak); 

                                     var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id102";

                                    var label = document.createElement('label')
                                    label.id = "lbl102"
                                    label.htmlFor = "id102";
                                    label.appendChild(document.createTextNode('Производња одевних предмета'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb102"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id103";

                                    var label = document.createElement('label')
                                    label.id = "lbl103"
                                    label.htmlFor = "id103";
                                    label.appendChild(document.createTextNode('Производња коже и предмета од коже'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb103"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id104";

                                    var label = document.createElement('label')
                                    label.id = "lbl104"
                                    label.htmlFor = "id104";
                                    label.appendChild(document.createTextNode('Прерада дрвета и производи од дрвета, плуте, сламе и прућа, осим намештаја'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb104"
                                    x.appendChild(linebreak); 

                                            var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id105";

                                    var label = document.createElement('label')
                                    label.id = "lbl105"
                                    label.htmlFor = "id105";
                                    label.appendChild(document.createTextNode('Производња папира и производа од папира'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb105"
                                    x.appendChild(linebreak); 

                                     var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id106";

                                    var label = document.createElement('label')
                                    label.id = "lbl106"
                                    label.htmlFor = "id106";
                                    label.appendChild(document.createTextNode('Штампање и умножавање аудио и видео записа'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb106"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id107";

                                    var label = document.createElement('label')
                                    label.id = "lbl107"
                                    label.htmlFor = "id107";
                                    label.appendChild(document.createTextNode('Производња кокса и деривата нафте'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb107"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id108";

                                    var label = document.createElement('label')
                                    label.id = "lbl108"
                                    label.htmlFor = "id108";
                                    label.appendChild(document.createTextNode('Производња хемикалија и хемијских производа'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb108"
                                    x.appendChild(linebreak); 

                                            var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id109";

                                    var label = document.createElement('label')
                                    label.id = "lbl109"
                                    label.htmlFor = "id109";
                                    label.appendChild(document.createTextNode('Производња основних фармацеутских производа и препарата'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb109"
                                    x.appendChild(linebreak); 

                                     var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id110";

                                    var label = document.createElement('label')
                                    label.id = "lbl110"
                                    label.htmlFor = "id110";
                                    label.appendChild(document.createTextNode('Производња производа од гуме и пластике'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb110"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id111";

                                    var label = document.createElement('label')
                                    label.id = "lbl111"
                                    label.htmlFor = "id111";
                                    label.appendChild(document.createTextNode('Производња производа од осталих неметалних минерала'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb111"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id112";

                                    var label = document.createElement('label')
                                    label.id = "lbl112"
                                    label.htmlFor = "id112";
                                    label.appendChild(document.createTextNode('Производња основних метала'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb112"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id113";

                                    var label = document.createElement('label')
                                    label.id = "lbl113"
                                    label.htmlFor = "id113";
                                    label.appendChild(document.createTextNode('Производња металних производа, осим машина и уређаја'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb113"
                                    x.appendChild(linebreak); 

                                        var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id114";

                                    var label = document.createElement('label')
                                    label.id = "lbl114"
                                    label.htmlFor = "id114";
                                    label.appendChild(document.createTextNode('Производња рачунара, електронских и оптичких производа'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb114"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id115";

                                    var label = document.createElement('label')
                                    label.id = "lbl115"
                                    label.htmlFor = "id116";
                                    label.appendChild(document.createTextNode('Производња електричне опреме'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb117"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id118";

                                    var label = document.createElement('label')
                                    label.id = "lbl118"
                                    label.htmlFor = "id118";
                                    label.appendChild(document.createTextNode('Производња непоменутих машина и непоменуте опреме'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb118"
                                    x.appendChild(linebreak); 

                                            var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id119";

                                    var label = document.createElement('label')
                                    label.id = "lbl119"
                                    label.htmlFor = "id119";
                                    label.appendChild(document.createTextNode('Производња моторних возила, приколица и полуприколица'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb119"
                                    x.appendChild(linebreak); 

                                        var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id120";

                                    var label = document.createElement('label')
                                    label.id = "lbl120"
                                    label.htmlFor = "id120";
                                    label.appendChild(document.createTextNode('Производња осталих саобраћајних средстава'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb120"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id121";

                                    var label = document.createElement('label')
                                    label.id = "lbl121"
                                    label.htmlFor = "id121";
                                    label.appendChild(document.createTextNode('Производња намештаја'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb121"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id122";

                                    var label = document.createElement('label')
                                    label.id = "lbl122"
                                    label.htmlFor = "id122";
                                    label.appendChild(document.createTextNode('Остале прерађивачке делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb122"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id123";

                                    var label = document.createElement('label')
                                    label.id = "lbl123"
                                    label.htmlFor = "id123";
                                    label.appendChild(document.createTextNode('Поправка и монтажа машина и опреме'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb123"
                                    x.appendChild(linebreak); 

                                      var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id124";

                                    var label = document.createElement('label')
                                    label.id = "lbl124"
                                    label.htmlFor = "id124";
                                    label.appendChild(document.createTextNode('Снабдевање електричном енергијом, гасом, паром и климатизација'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb124"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id125";

                                    var label = document.createElement('label')
                                    label.id = "lbl125"
                                    label.htmlFor = "id125";
                                    label.appendChild(document.createTextNode('Скупљање, пречишћавање и дистрибуција воде'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb125"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id126";

                                    var label = document.createElement('label')
                                    label.id = "lbl126"
                                    label.htmlFor = "id126";
                                    label.appendChild(document.createTextNode('Уклањање отпадних вода'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb126"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id127";

                                    var label = document.createElement('label')
                                    label.id = "lbl127"
                                    label.htmlFor = "id127";
                                    label.appendChild(document.createTextNode('Сакупљање, третман и одлагање отпада; поновно искоришћавање отпадних материја'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb127"
                                    x.appendChild(linebreak);                       
                                  
                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id128";

                                    var label = document.createElement('label')
                                    label.id = "lbl128"
                                    label.htmlFor = "id128";
                                    label.appendChild(document.createTextNode('Санација, рекултивација и друге услуге у области управљања отпадом'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb128"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id129";

                                    var label = document.createElement('label')
                                    label.id = "lbl129"
                                    label.htmlFor = "id129";
                                    label.appendChild(document.createTextNode('Изградња зграда'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb129"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id130";

                                    var label = document.createElement('label')
                                    label.id = "lbl130"
                                    label.htmlFor = "id130";
                                    label.appendChild(document.createTextNode('Изградња осталих грађевина'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb130"
                                    x.appendChild(linebreak); 

                                            var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id131";

                                    var label = document.createElement('label')
                                    label.id = "lbl131"
                                    label.htmlFor = "id131";
                                    label.appendChild(document.createTextNode('Специјализовани грађевински радови'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb131"
                                    x.appendChild(linebreak); 

                                          var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id132";

                                    var label = document.createElement('label')
                                    label.id = "lbl132"
                                    label.htmlFor = "id132";
                                    label.appendChild(document.createTextNode('Трговина на велико и трговина на мало и поправка моторних возила и мотоцикала'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb132"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id133";

                                    var label = document.createElement('label')
                                    label.id = "lbl133"
                                    label.htmlFor = "id133";
                                    label.appendChild(document.createTextNode('Трговина на велико, осим трговине моторним возилима и мотоциклима'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb133"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id134";

                                    var label = document.createElement('label')
                                    label.id = "lbl134"
                                    label.htmlFor = "id134";
                                    label.appendChild(document.createTextNode('Трговина на мало, осим трговине моторним возилима и мотоциклима'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb134"
                                    x.appendChild(linebreak); 

                                            var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id135";

                                    var label = document.createElement('label')
                                    label.id = "lbl135"
                                    label.htmlFor = "id135";
                                    label.appendChild(document.createTextNode('Копнени саобраћај и цевоводни транспорт'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb135"
                                    x.appendChild(linebreak); 

                                          var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id136";

                                    var label = document.createElement('label')
                                    label.id = "lbl136"
                                    label.htmlFor = "id136";
                                    label.appendChild(document.createTextNode('Водени саобраћаj'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb136"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id137";

                                    var label = document.createElement('label')
                                    label.id = "lbl137"
                                    label.htmlFor = "id137";
                                    label.appendChild(document.createTextNode('Ваздушни саобраћај'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb137"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id138";

                                    var label = document.createElement('label')
                                    label.id = "lbl138"
                                    label.htmlFor = "id138";
                                    label.appendChild(document.createTextNode('Складиштење и пратеће активности у саобраћају'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb138"
                                    x.appendChild(linebreak); 

                                            var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id139";

                                    var label = document.createElement('label')
                                    label.id = "lbl139"
                                    label.htmlFor = "id139";
                                    label.appendChild(document.createTextNode('Поштанске активности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb139"
                                    x.appendChild(linebreak); 

                                          var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id140";

                                    var label = document.createElement('label')
                                    label.id = "lbl140"
                                    label.htmlFor = "id140";
                                    label.appendChild(document.createTextNode('Смештај'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb140"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id141";

                                    var label = document.createElement('label')
                                    label.id = "lbl141"
                                    label.htmlFor = "id141";
                                    label.appendChild(document.createTextNode('Делатност припремања и послуживања хране и пића'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb141"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id142";

                                    var label = document.createElement('label')
                                    label.id = "lbl142"
                                    label.htmlFor = "id142";
                                    label.appendChild(document.createTextNode('Издавачке делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb142"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id143";

                                    var label = document.createElement('label')
                                    label.id = "lbl143"
                                    label.htmlFor = "id143";
                                    label.appendChild(document.createTextNode('Кинематографска и телевизијска продукција, снимање звучних записа и издавање музичких'));

                                    var razmak = document.createElement('br')
                                    label.appendChild(razmak);

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var label1 = document.createElement('label');
                                    label1.id = "2lbl53"
                                    label1.htmlFor = "2id53";
                                    label1.appendChild(document.createTextNode('записа'));
                                    x.appendChild(label1);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb143"
                                    x.appendChild(linebreak); 
                              
                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id144";

                                    var label = document.createElement('label')
                                    label.id = "lbl144"
                                    label.htmlFor = "id144";
                                    label.appendChild(document.createTextNode('Програмске активности и емитовање'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb144"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id145";

                                    var label = document.createElement('label')
                                    label.id = "lbl145"
                                    label.htmlFor = "id145";
                                    label.appendChild(document.createTextNode('Телекомуникације'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb145"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id146";

                                    var label = document.createElement('label')
                                    label.id = "lbl146"
                                    label.htmlFor = "id146";
                                    label.appendChild(document.createTextNode('Рачунарско програмирање, консултантске и с тим повезане делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb146"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id147";

                                    var label = document.createElement('label')
                                    label.id = "lbl147"
                                    label.htmlFor = "id147";
                                    label.appendChild(document.createTextNode('Информационе услужне делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb147"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id148";

                                    var label = document.createElement('label')
                                    label.id = "lbl148"
                                    label.htmlFor = "id148";
                                    label.appendChild(document.createTextNode('Финансијске услуге, осим осигурања и пензијских фондова'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb148"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id149";

                                    var label = document.createElement('label')
                                    label.id = "lbl149"
                                    label.htmlFor = "id149";
                                    label.appendChild(document.createTextNode('Осигурање, реосигурање и пензијски фондови, осим обавезног социјалног осигурања'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb149"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id150";

                                    var label = document.createElement('label')
                                    label.id = "lbl150"
                                    label.htmlFor = "id150";
                                    label.appendChild(document.createTextNode('Помоћне делатности у пружању финансијских услуга и осигурању'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb150"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id151";

                                    var label = document.createElement('label')
                                    label.id = "lbl151"
                                    label.htmlFor = "id151";
                                    label.appendChild(document.createTextNode('Пословање некретнинама'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb151"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id152";

                                    var label = document.createElement('label')
                                    label.id = "lbl152"
                                    label.htmlFor = "id152";
                                    label.appendChild(document.createTextNode('Правни и рачуноводствени послови'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb152"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id153";

                                    var label = document.createElement('label')
                                    label.id = "lbl153"
                                    label.htmlFor = "id153";
                                    label.appendChild(document.createTextNode('Управљачке делатности; саветовање у вези са управљањем'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb153"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id154";

                                    var label = document.createElement('label')
                                    label.id = "lbl154"
                                    label.htmlFor = "id154";
                                    label.appendChild(document.createTextNode('Архитектонске и инжењерске делатности; инжењерско испитивање и анализе'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb154"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id155";

                                    var label = document.createElement('label')
                                    label.id = "lbl155"
                                    label.htmlFor = "id155";
                                    label.appendChild(document.createTextNode('Научно истраживање и развој'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb155"
                                    x.appendChild(linebreak);                            

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id156";

                                    var label = document.createElement('label')
                                    label.id = "lbl156"
                                    label.htmlFor = "id156";
                                    label.appendChild(document.createTextNode('Рекламирање и истраживање тржишта'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb156"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id157";

                                    var label = document.createElement('label')
                                    label.id = "lbl157"
                                    label.htmlFor = "id157";
                                    label.appendChild(document.createTextNode('Остале стручне, научне и техничке делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb157"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id158";

                                    var label = document.createElement('label')
                                    label.id = "lbl158"
                                    label.htmlFor = "id158";
                                    label.appendChild(document.createTextNode('Ветеринарске делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb158"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id159";

                                    var label = document.createElement('label')
                                    label.id = "lbl159"
                                    label.htmlFor = "id159";
                                    label.appendChild(document.createTextNode('Изнајмљивање и лизинг'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb159"
                                    x.appendChild(linebreak); 
                                
                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id160";

                                    var label = document.createElement('label')
                                    label.id = "lbl160"
                                    label.htmlFor = "id160";
                                    label.appendChild(document.createTextNode('Делатности запошљавања'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb160"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id161";

                                    var label = document.createElement('label')
                                    label.id = "lbl161"
                                    label.htmlFor = "id161";
                                    label.appendChild(document.createTextNode('Делатност путничких агенција, тур-оператора, услуге резервације и пратеће активности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb161"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id162";

                                    var label = document.createElement('label')
                                    label.id = "lbl162"
                                    label.htmlFor = "id162";
                                    label.appendChild(document.createTextNode('Заштитне и истражне делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb162"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id163";

                                    var label = document.createElement('label')
                                    label.id = "lbl163"
                                    label.htmlFor = "id163";
                                    label.appendChild(document.createTextNode('Услуге одржавања објеката и околине'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb163"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id164";

                                    var label = document.createElement('label')
                                    label.id = "lbl164"
                                    label.htmlFor = "id164";
                                    label.appendChild(document.createTextNode('Канцеларијско-административне и друге помоћне пословне делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb164"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id165";

                                    var label = document.createElement('label')
                                    label.id = "lbl165"
                                    label.htmlFor = "id165";
                                    label.appendChild(document.createTextNode('Јавна управа и одбрана; обавезно социјално осигурање'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb165"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id166";

                                    var label = document.createElement('label')
                                    label.id = "lbl166"
                                    label.htmlFor = "id166";
                                    label.appendChild(document.createTextNode('Образовање'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb166"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id167";

                                    var label = document.createElement('label')
                                    label.id = "lbl167"
                                    label.htmlFor = "id167";
                                    label.appendChild(document.createTextNode('Здравствене делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb167"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id168";

                                    var label = document.createElement('label')
                                    label.id = "lbl168"
                                    label.htmlFor = "id168";
                                    label.appendChild(document.createTextNode('Социјална заштита са смештајем'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb168"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id169";

                                    var label = document.createElement('label')
                                    label.id = "lbl169"
                                    label.htmlFor = "id169";
                                    label.appendChild(document.createTextNode('Социјална заштита без смештаја'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb169"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id170";

                                    var label = document.createElement('label')
                                    label.id = "lbl170"
                                    label.htmlFor = "id170";
                                    label.appendChild(document.createTextNode('Стваралачке, уметничке и забавне делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb170"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id171";

                                    var label = document.createElement('label')
                                    label.id = "lbl171"
                                    label.htmlFor = "id171";
                                    label.appendChild(document.createTextNode('Делатност библиотека, архива, музеја, галерија и збирки и остале културне делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb171"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id172";

                                    var label = document.createElement('label')
                                    label.id = "lbl172"
                                    label.htmlFor = "id172";
                                    label.appendChild(document.createTextNode('Коцкање и клађење'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb172"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id173";

                                    var label = document.createElement('label')
                                    label.id = "lbl173"
                                    label.htmlFor = "id173";
                                    label.appendChild(document.createTextNode('Спортске, забавне и рекреативне делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb173"
                                    x.appendChild(linebreak);

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id174";

                                    var label = document.createElement('label')
                                    label.id = "lbl174"
                                    label.htmlFor = "id174";
                                    label.appendChild(document.createTextNode('Делатности удружења'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb174"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id175";

                                    var label = document.createElement('label')
                                    label.id = "lbl175"
                                    label.htmlFor = "id175";
                                    label.appendChild(document.createTextNode('Поправка рачунара и предмета за личну употребу и употребу у домаћинству'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb175"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id176";

                                    var label = document.createElement('label')
                                    label.id = "lbl176"
                                    label.htmlFor = "id176";
                                    label.appendChild(document.createTextNode('Остале личне услужне делатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb176"
                                    x.appendChild(linebreak); 

                                       var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id177";

                                    var label = document.createElement('label')
                                    label.id = "lbl177"
                                    label.htmlFor = "id177";
                                    label.appendChild(document.createTextNode('Делатност домаћинстава која запошљавају послугу'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb177"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id178";

                                    var label = document.createElement('label')
                                    label.id = "lbl178"
                                    label.htmlFor = "id178";
                                    label.appendChild(document.createTextNode('Делатност домаћинстава која производе робу и услуге за сопствене потребе'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb178"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id179";

                                    var label = document.createElement('label')
                                    label.id = "lbl179"
                                    label.htmlFor = "id179";
                                    label.appendChild(document.createTextNode('Делатност екстериторијалних организација и тела'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb179"
                                    x.appendChild(linebreak); 

                                    var checkbox = document.createElement('input');
                                    checkbox.type = "checkbox";
                                    checkbox.name = "name";
                                    checkbox.value = "value";
                                    checkbox.id = "id180";

                                    var label = document.createElement('label')
                                    label.id = "lbl180"
                                    label.htmlFor = "id180";
                                    label.appendChild(document.createTextNode('Све подделатности'));

                                    x.appendChild(checkbox);
                                    x.appendChild(label);

                                    var linebreak = document.createElement("br");
                                    linebreak.id = "lb180"
                                    x.appendChild(linebreak);                    
                               
                            }
                            else{
                                
                                         $("#id90").remove();
                                             $("#lbl90").remove();
                                             $("#lb90").remove();

                                                  $("#id91").remove();
                                             $("#lbl91").remove();
                                             $("#lb91").remove();

                                                  $("#id92").remove();
                                             $("#lbl92").remove();
                                             $("#lb92").remove();

                                                  $("#id93").remove();
                                             $("#lbl93").remove();
                                             $("#lb93").remove();

                                                  $("#id94").remove();
                                             $("#lbl94").remove();
                                             $("#lb94").remove();

                                                  $("#id95").remove();
                                             $("#lbl95").remove();
                                             $("#lb95").remove();

                                                  $("#id96").remove();
                                             $("#lbl96").remove();
                                             $("#lb96").remove();

                                               $("#id97").remove();
                                             $("#lbl97").remove();
                                             $("#lb97").remove();

                                               $("#id98").remove();
                                             $("#lbl98").remove();
                                             $("#lb98").remove();

                                               $("#id99").remove();
                                             $("#lbl99").remove();
                                             $("#lb99").remove();

                                               $("#id100").remove();
                                             $("#lbl100").remove();
                                             $("#lb100").remove();

                                               $("#id101").remove();
                                             $("#lbl101").remove();
                                             $("#lb101").remove();

                                               $("#id102").remove();
                                             $("#lbl102").remove();
                                             $("#lb102").remove();

                                               $("#id103").remove();
                                             $("#lbl103").remove();
                                             $("#lb103").remove();

                                               $("#id104").remove();
                                             $("#lbl104").remove();
                                             $("#lb104").remove();

                                               $("#id105").remove();
                                             $("#lbl105").remove();
                                             $("#lb105").remove();

                                               $("#id106").remove();
                                             $("#lbl106").remove();
                                             $("#lb106").remove();

                                               $("#id107").remove();
                                             $("#lbl107").remove();
                                             $("#lb107").remove();

                                               $("#id108").remove();
                                             $("#lbl108").remove();
                                             $("#lb108").remove();

                                               $("#id109").remove();
                                             $("#lbl109").remove();
                                             $("#lb109").remove();

                                               $("#id110").remove();
                                             $("#lbl110").remove();
                                             $("#lb110").remove();

                                               $("#id111").remove();
                                             $("#lbl111").remove();
                                             $("#lb111").remove();

                                               $("#id112").remove();
                                             $("#lbl112").remove();
                                             $("#lb112").remove();

                                               $("#id113").remove();
                                             $("#lbl113").remove();
                                             $("#lb113").remove();

                                               $("#id114").remove();
                                             $("#lbl114").remove();
                                             $("#lb114").remove();

                                               $("#id115").remove();
                                             $("#lbl115").remove();
                                             $("#lb115").remove();

                                               $("#id116").remove();
                                             $("#lbl116").remove();
                                             $("#lb116").remove();

                                               $("#id117").remove();
                                             $("#lbl117").remove();
                                             $("#lb117").remove();

                                               $("#id118").remove();
                                             $("#lbl118").remove();
                                             $("#lb118").remove();

                                               $("#id119").remove();
                                             $("#lbl119").remove();
                                             $("#lb119").remove();

                                               $("#id120").remove();
                                             $("#lbl120").remove();
                                             $("#lb120").remove();

                                               $("#id121").remove();
                                             $("#lbl121").remove();
                                             $("#lb121").remove();

                                               $("#id122").remove();
                                             $("#lbl122").remove();
                                             $("#lb122").remove();

                                               $("#id123").remove();
                                             $("#lbl123").remove();
                                             $("#lb123").remove();

                                               $("#id124").remove();
                                             $("#lbl124").remove();
                                             $("#lb124").remove();

                                               $("#id125").remove();
                                             $("#lbl125").remove();
                                             $("#lb125").remove();

                                               $("#id126").remove();
                                             $("#lbl126").remove();
                                             $("#lb126").remove();

                                               $("#id127").remove();
                                             $("#lbl127").remove();
                                             $("#lb127").remove();

                                               $("#id128").remove();
                                             $("#lbl128").remove();
                                             $("#lb128").remove();

                                               $("#id129").remove();
                                             $("#lbl129").remove();
                                             $("#lb129").remove();

                                               $("#id130").remove();
                                             $("#lbl130").remove();
                                             $("#lb130").remove();

                                               $("#id131").remove();
                                             $("#lbl131").remove();
                                             $("#lb131").remove();

                                               $("#id132").remove();
                                             $("#lbl132").remove();
                                             $("#lb132").remove();

                                               $("#id133").remove();
                                             $("#lbl133").remove();
                                             $("#lb133").remove();

                                               $("#id134").remove();
                                             $("#lbl134").remove();
                                             $("#lb134").remove();

                                               $("#id135").remove();
                                             $("#lbl135").remove();
                                             $("#lb135").remove();

                                               $("#id136").remove();
                                             $("#lbl136").remove();
                                             $("#lb136").remove();

                                               $("#id137").remove();
                                             $("#lbl137").remove();
                                             $("#lb137").remove();

                                               $("#id138").remove();
                                             $("#lbl138").remove();
                                             $("#lb138").remove();

                                               $("#id139").remove();
                                             $("#lbl139").remove();
                                             $("#lb139").remove();

                                               $("#id140").remove();
                                             $("#lbl140").remove();
                                             $("#lb140").remove();

                                               $("#id141").remove();
                                             $("#lbl141").remove();
                                             $("#lb141").remove();

                                               $("#id142").remove();
                                             $("#lbl142").remove();
                                             $("#lb142").remove();

                                               $("#id143").remove();
                                             $("#lbl143").remove();
                                             $("#lb143").remove();
                                             $("#2lbl53").remove();

                                               $("#id144").remove();
                                             $("#lbl144").remove();
                                             $("#lb144").remove();

                                               $("#id145").remove();
                                             $("#lbl145").remove();
                                             $("#lb145").remove();

                                               $("#id146").remove();
                                             $("#lbl146").remove();
                                             $("#lb146").remove();

                                               $("#id147").remove();
                                             $("#lbl147").remove();
                                             $("#lb147").remove();

                                               $("#id148").remove();
                                             $("#lbl148").remove();
                                             $("#lb148").remove();

                                               $("#id149").remove();
                                             $("#lbl149").remove();
                                             $("#lb149").remove();

                                               $("#id150").remove();
                                             $("#lbl150").remove();
                                             $("#lb150").remove();

                                               $("#id151").remove();
                                             $("#lbl151").remove();
                                             $("#lb151").remove();

                                               $("#id152").remove();
                                             $("#lbl152").remove();
                                             $("#lb152").remove();

                                               $("#id153").remove();
                                             $("#lbl153").remove();
                                             $("#lb153").remove();

                                               $("#id154").remove();
                                             $("#lbl154").remove();
                                             $("#lb154").remove();

                                                 $("#id155").remove();
                                             $("#lbl155").remove();
                                             $("#lb155").remove();

                                               $("#id156").remove();
                                             $("#lbl156").remove();
                                             $("#lb156").remove();

                                               $("#id157").remove();
                                             $("#lbl157").remove();
                                             $("#lb157").remove();

                                               $("#id158").remove();
                                             $("#lbl158").remove();
                                             $("#lb158").remove();

                                               $("#id159").remove();
                                             $("#lbl159").remove();
                                             $("#lb159").remove();

                                               $("#id160").remove();
                                             $("#lbl160").remove();
                                             $("#lb160").remove();

                                               $("#id161").remove();
                                             $("#lbl161").remove();
                                             $("#lb161").remove();

                                               $("#id162").remove();
                                             $("#lbl162").remove();
                                             $("#lb162").remove();

                                               $("#id163").remove();
                                             $("#lbl163").remove();
                                             $("#lb163").remove();

                                               $("#id164").remove();
                                             $("#lbl164").remove();
                                             $("#lb164").remove();

                                               $("#id165").remove();
                                             $("#lbl165").remove();
                                             $("#lb165").remove();

                                               $("#id166").remove();
                                             $("#lbl166").remove();
                                             $("#lb166").remove();

                                               $("#id167").remove();
                                             $("#lbl167").remove();
                                             $("#lb167").remove();

                                               $("#id168").remove();
                                             $("#lbl168").remove();
                                             $("#lb168").remove();

                                               $("#id169").remove();
                                             $("#lbl169").remove();
                                             $("#lb169").remove();

                                               $("#id170").remove();
                                             $("#lbl170").remove();
                                             $("#lb170").remove();

                                               $("#id171").remove();
                                             $("#lbl171").remove();
                                             $("#lb171").remove();

                                               $("#id172").remove();
                                             $("#lbl172").remove();
                                             $("#lb172").remove();

                                               $("#id173").remove();
                                             $("#lbl173").remove();
                                             $("#lb173").remove();

                                               $("#id174").remove();
                                             $("#lbl174").remove();
                                             $("#lb174").remove();

                                               $("#id175").remove();
                                             $("#lbl175").remove();
                                             $("#lb175").remove();

                                               $("#id176").remove();
                                             $("#lbl176").remove();
                                             $("#lb176").remove();


                                                $("#id177").remove();
                                             $("#lbl177").remove();
                                             $("#lb177").remove();

                                               $("#id178").remove();
                                             $("#lbl178").remove();
                                             $("#lb178").remove();


                                             $("#id179").remove();
                                             $("#lbl179").remove();
                                             $("#lb179").remove();

                                              $("#id180").remove();
                                             $("#lbl180").remove();
                                             $("#lb180").remove();

                              
                            }
                            }

                             

                             
                                      $( function() {

                                        var x = document.getElementById("result1"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       

                                       
                                      $( function() {

                                        var x = document.getElementById("result2"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       

                                       
                                      $( function() {

                                        var x = document.getElementById("result3"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       

                                       
                                      $( function() {

                                        var x = document.getElementById("result4"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       

                                       
                                      $( function() {

                                        var x = document.getElementById("result5"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       

                                       
                                      $( function() {

                                        var x = document.getElementById("result6"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       

                                       
                                      $( function() {

                                        var x = document.getElementById("result7"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       

                                       
                                      $( function() {

                                        var x = document.getElementById("result8"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       

                                       
                                      $( function() {

                                        var x = document.getElementById("result9"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       

                                       
                                      $( function() {

                                        var x = document.getElementById("result10"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       

                                       
                                      $( function() {

                                        var x = document.getElementById("result11"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       

                                       
                                      $( function() {

                                        var x = document.getElementById("result12"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       

                                       
                                      $( function() {

                                        var x = document.getElementById("result13"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       

                                       
                                      $( function() {

                                        var x = document.getElementById("result14"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       

                                       
                                      $( function() {

                                        var x = document.getElementById("result15"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       


                                         
                                      $( function() {

                                        var x = document.getElementById("result16"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       

                                       
                                      $( function() {

                                        var x = document.getElementById("result17"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       


                                      $( function() {

                                        var x = document.getElementById("result18"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       
 
                                      $( function() {

                                        var x = document.getElementById("result19"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       
 
                                      $( function() {

                                        var x = document.getElementById("result20"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       
 
                                      $( function() {

                                        var x = document.getElementById("result25"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       
 
                                      $( function() {

                                        var x = document.getElementById("result21"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       
 
                                      $( function() {

                                        var x = document.getElementById("result22"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       
 
                                      $( function() {

                                        var x = document.getElementById("result23"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });
                                       
 
                                      $( function() {

                                        var x = document.getElementById("result24"); 
                                    var availableTags = new Array();
                                    for (i = 0; i < x.length; i++) { 
                                        availableTags.push(x.options[i].text);
                                    }
                                       
                                        
                                      });

                                      
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Нема резултата.'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
   

   
      var max_height = 300;

$(document).ready(function() {
      
  jQuery.each(jQuery('textarea[data-autoresize]'), function() {
    var offset = this.offsetHeight - this.clientHeight;
 
    var resizeTextarea = function(el) {
        jQuery(el).css('height', 'auto').css('height', Math.min(max_height, el.scrollHeight + offset));
    };
    jQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
});

});
      
   

      
    $('#b1').delay(20).hide(0);
    $('#b2').delay(20).hide(0);
    $('#b3').delay(20).hide(0);
    $('#b4').delay(20).hide(0);
    $('#b5').delay(20).hide(0);
    $('#b6').delay(20).hide(0);
    $('#b7').delay(20).hide(0);
    $('#b8').delay(20).hide(0);
    $('#b9').delay(20).hide(0);
    $('#d2').delay(20).hide(0);
    $('#d3').delay(20).hide(0);
    $('#d4').delay(20).hide(0);
    $('#d5').delay(20).hide(0);
    $('#d6').delay(20).hide(0);
    $('#d7').delay(20).hide(0);
    $('#d8').delay(20).hide(0);
    $('#d9').delay(20).hide(0);
    $('#d10').delay(20).hide(0);
      

     
    $(function(){
        $('#menu').slicknav({
            appendTo: '#laravel'
        });

    });
 
                                       