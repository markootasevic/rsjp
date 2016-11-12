<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  

    <title>Формулар за прикупљање података о административним прoцедурама</title>

    <link rel="stylesheet" href="{{URL::asset('SlickNav-master/dist/slicknav.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('chosen/docsupport/prism.css')}}">
    <link rel="stylesheet" href="{{URL::asset('chosen/chosen.css')}}">
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
    <script src="{{URL::asset('js/jquery.min.js')}}"></script> 
    <script src="{{URL::asset('SlickNav-master/dist/jquery.slicknav.min.js')}}"></script> 
    
      </head>
    
    </style>

<body>

    <div id="navigacija">
    <a href="#" id="back-to-top" title="Врх стране"><img src="{{URL::asset('images/arrow-up.png')}}" height="60px" width="60px"></a>

    <a href="#" id="back-to-top2" title="Дно стране"><img src="{{URL::asset('images/arrow-down.png')}}" height="60px" width="60px"></a>
    </div>

   
        <div class="container">
                  
                  <form method="post" action="{{url('/postFormular')}}">
                      

                      {!! csrf_field() !!}
                  
                
                	<div class="row">
                		<div class="col-lg-12" style="text-align:center">
                			<h3>
                				Формулар за попис административних поступака који се односе на пословање
                			</h3>
                		</div>
                    </div>

                    <div class="jafa" id="laravel">                	


                    <div class="row">
                        <div class="col-lg-12" id = "tooltip1">
                            <br></br>
                             <h5><span class="labelNazivi">Назив административног поступка</span></h5>
                            <textarea data-autoresize  name="nazivPostupka"></textarea>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси назив административног поступка, на начин како је унет у претходно припремљеној листи административних поступака. Смернице о именовању административних поступака погледати у одељку 4.4.3 Инструкције за спровођење пописа административних поступака.</span>

                        </br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" id = "tooltip2">
                             <h5><span class="labelNazivi">Шифра поступка</span></h5>
                             <input type="text" class='form-control
                             ' name='sifraPostupka' placeholder="Не попуњавати, ово поље се аутоматски генерише">
                             <span class="tooltiptext" id = "tooltiptext1">Ово поље није потребно попуњавати. Поље се аутоматски генерише.</span>

                         </br>
                        </div>

                        <div class="col-lg-6" id = "tooltip2">
                             <h5><span class="labelNazivi">Датум попуњавања формулара</span></h5>
                             <input type="text" id="datepicker1" class='form-control' value="{{ date('d/m/Y') }}" name='datumPopunjavanjaPostupka' value='' disabled="">
                             <span class="tooltiptext" id = "tooltiptext1">Ово поље није потребно попуњавати. Поље се аутоматски генерише.</span>

                         </br>
                        </div>
                    </div> 




                    
                    </div>
                
                    
                    
                    <section id="section_A">

                        <div class="row">
                        <div class="col-lg-12" style="text-align:center">

                             <h2><span class="text" >А. Општи подаци</span></h2>
                        </div>
                    </div>
                    

                    <div class="a">
                	<div class="row">
                		<div class="col-lg-1">
                            <span class="labelBrojevi">a1.</span>
                		</div>
                		
                		<div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Надлежни орган/организација за спровођење административног поступка</span>
                            <br></br><select class="form-control" id="danijel" name="nadlezniOrgan" >
                            <option value="" disabled selected hidden>Изаберите</option>
                                <option value="Министарство државне управе и локалне самоуправе">Министарство државне управе и локалне самоуправе</option>
                                 <option value="Министарство финансија">Министарство финансија</option>
                                 <option value="Министарство привреде">Министарство привреде</option>
                                 <option value="Министарство пољопривреде и заштите животне средине">Министарство пољопривреде и заштите животне средине</option>
                                 <option value="Министарство грађевинарства, саобраћаја и инфраструктуре">Министарство грађевинарства, саобраћаја и инфраструктуре</option>
                                 <option value="Министарство рударства и енергетике">Министарство рударства и енергетике</option>
                                 <option value="Министарство трговине, туризма и телекомуникација">Министарство трговине, туризма и телекомуникација</option>
                                 <option value="Министарство правде">Министарство правде</option>
                                 <option value="Министарство унутрашњих послова">Министарство унутрашњих послова</option>
                                 <option value="Министарство одбране">Министарство одбране</option>
                                 <option value="Министарство спољних послова">Министарство спољних послова</option>
                                 <option value="Министарство просвете, науке и технолошког развоја">Министарство просвете, науке и технолошког развоја</option>
                                 <option value="Министарство здравља">Министарство здравља</option>
                                 <option value="Министарство за рад, запошљавање, борачка и социјална питања">Министарство за рад, запошљавање, борачка и социјална питања</option>
                                 <option value="Министарство омладине и спорта">Министарство омладине и спорта</option>
                                 <option value="Министарство културе и информисања">Министарство културе и информисања</option>
                                 <option value="Пореска управа">Пореска управа </option>
                                 <option value="Управа царина">Управа царина</option>
                                 <option value="Управа за трезор">Управа за трезор </option>
                                 <option value="Управа за јавни дуг">Управа за јавни дуг</option>
                                 <option value="Управа за дуван">Управа за дуван</option>
                                 <option value="Управа за спречавање прање новца">Управа за спречавање прање новца </option>
                                 <option value="Управа за слободне зоне">Управа за слободне зоне </option>
                                 <option value="Управа за биомедицину">Управа за биомедицину</option>
                                 <option value="Управа за утврђивање способности бродова за пловидбу">Управа за утврђивање способности бродова за пловидбу</option>
                                 <option value="Управа за транспорт опасног терета">Управа за транспорт опасног терета</option>
                                 <option value="Дирекција за водене путеве">Дирекција за водене путеве</option>
                                 <option value="Дирекција за електронску управу">Дирекција за електронску управу </option>
                                 <option value="Управни инспекторат">Управни инспекторат</option>
                                 <option value="Дирекција за мере и драгоцене метале">Дирекција за мере и драгоцене метале</option>
                                 <option value="Управа за брзи одговор">Управа за брзи одговор</option>
                                 <option value="Инспекторат за рад">Инспекторат за рад</option>
                                 <option value="Управа за безбедност и здравље на раду">Управа за безбедност и здравље на раду</option>
                                 <option value="Управа за ветерину">Управа за ветерину</option>
                                 <option value="Управа за заштиту биља">Управа за заштиту биља</option>
                                 <option value="Републичка дирекција за воде">Републичка дирекција за воде</option>
                                 <option value="Управа за шуме">Управа за шуме</option>
                                 <option value="Управа за аграрна плаћања">Управа за аграрна плаћања</option>
                                 <option value="Управа за пољопривредно земљиште">Управа за пољопривредно земљиште</option>
                                 <option value="Дирекција за националне реферетне лабораторије">Дирекција за националне реферетне лабораторије</option>
                                 <option value="Управа за сарадњу с дијаспором и Србима у региону">Управа за сарадњу с дијаспором и Србима у региону</option>
                                 <option value="Агенција за реституцију">Агенција за реституцију</option>
                                 <option value="Агенција за акредитацији здравствених установа Србије">Агенција за акредитацији здравствених установа Србије</option>
                                 <option value="Агенција за лекове и медицинска средста Србије">Агенција за лекове и медицинска средста Србије</option>
                                 <option value="Агенција за безбедност саобраћаја">Агенција за безбедност саобраћаја</option>
                                 <option value="Директорат цивилног ваздухопловства Србије">Директорат цивилног ваздухопловства Србије </option>
                                 <option value="Агенција за управљање лукама">Агенција за управљање лукама</option>
                                 <option value="Републичка агенција за становање">Републичка агенција за становање</option>
                                 <option value="Агенција за привредне регистре">Агенција за привредне регистре</option>
                                 <option value="Агенција за лиценцирање стечајних управника">Агенција за лиценцирање стечајних управника</option>
                                 <option value="Развојна агенција Србије">Развојна агенција Србије </option>
                                 <option value="Агенција за осигурање и финансирање извоза Републике Србије">Агенција за осигурање и финансирање извоза Републике Србије</option>
                                 <option value="Агенција за вођење спорова у поступку приватизације">Агенција за вођење спорова у поступку приватизације</option>
                                 <option value="Републичка агенција за електронске комуникације и поштанске услуге">Републичка агенција за електронске комуникације и поштанске услуге</option>
                                 <option value="Агенција за заштиту од јонизујећег зрачења и нуклеарну сигурност Србије">Агенција за заштиту од јонизујећег зрачења и нуклеарну сигурност Србије </option>
                                 <option value="Агенција за заштиту животне средине">Агенција за заштиту животне средине</option>
                                 <option value="Државна лутрија Србије д.о.о.">Државна лутрија Србије д.о.о.</option>
                                 <option value="ЈП „Електромрежа Србије“">ЈП „Електромрежа Србије“</option>
                                 <option value="ЈП ПЕУ „Ресавица“">ЈП ПЕУ „Ресавица“</option>
                                 <option value="ЈП „Транснафта“">ЈП „Транснафта“</option>
                                 <option value="ЈП „Србијагас“">ЈП „Србијагас“</option>
                                 <option value="ЈП „Електропривреда Србије“">ЈП „Електропривреда Србије“</option>
                                 <option value="ЈП за склоништа">ЈП за склоништа</option>
                                 <option value="ЈП „Путеви Србије“">ЈП „Путеви Србије“ </option>
                                 <option value="„Железнице Србије“ а.д.">„Железнице Србије“ а.д.</option>
                                 <option value="„Србија Воз“ а.д.">„Србија Воз“ а.д.</option>
                                 <option value="„Србија Карго“ а.д.">„Србија Карго“ а.д.</option>
                                 <option value="„Инфраструктура Железнице Србије“ а.д.">„Инфраструктура Железнице Србије“ а.д.</option>
                                 <option value="„Јат-Техника“ д.о.о.">„Јат-Техника“ д.о.о.</option>
                                 <option value="„Коридори Србије“ д.о.о.">„Коридори Србије“ д.о.о.</option>
                                 <option value="ЈП „Завод за уџбенике“">ЈП „Завод за уџбенике“ </option>
                                 <option value="ЈП „Нуклеарни објекти Србије“">ЈП „Нуклеарни објекти Србије“ </option>
                                 <option value="„Просветни Преглед“ д.о.о.">„Просветни Преглед“ д.о.о.</option>
                                 <option value="ЈП „Мрежа Мост“">ЈП „Мрежа Мост“</option>
                                 <option value="ЈП „Службени гласник“">ЈП „Службени гласник“ </option>
                                 <option value="ЈП „Пошта Србије“">ЈП „Пошта Србије“ </option>
                                 <option value="ЈП „Стара планина“">ЈП „Стара планина“</option>
                                 <option value="ЈП „Емисиона техника и везе“">ЈП „Емисиона техника и везе“</option>
                                 <option value="ЈП „Скијалишта Србије“">ЈП „Скијалишта Србије“</option>
                                 <option value="„Тврђава Голубачки град“ д.о.о.">„Тврђава Голубачки град“ д.о.о. </option>
                                 <option value="ЈП „Југоимпорт – СДПР“">ЈП „Југоимпорт – СДПР“</option>
                                 <option value="ЈВП „Србијаводе“">ЈВП „Србијаводе“</option>
                                 <option value="ЈП „Србијашуме“">ЈП „Србијашуме“ </option>
                                 <option value="ЈП „Национални парк Копаоник“">ЈП „Национални парк Копаоник“ </option>
                                 <option value="ЈП „Национални парк Тара“">ЈП „Национални парк Тара“</option>
                                 <option value="ЈП „Национални парк Фрушка гора“">ЈП „Национални парк Фрушка гора“</option>
                                 <option value="ЈП „Национални парк Ђердап“">ЈП „Национални парк Ђердап“</option>
                                 <option value="ЈП „Национални парк Шар планина“">ЈП „Национални парк Шар планина“</option>
                                 <option value="„Метохија“ д.о.о.">„Метохија“ д.о.о.</option>
                                 <option value="Парк природе „Мокра Гора“ д.о.о.">Парк природе „Мокра Гора“ д.о.о.</option>
                                 <option value="„Парк Палић“ д.о.о.">„Парк Палић“ д.о.о.</option>
                                 <option value="Резерват „Увац“ д.о.о.">Резерват „Увац“ д.о.о.</option>
                                 <option value="Фонд за развој Републике Србије">Фонд за развој Републике Србије</option>
                                 <option value="Комисија за контролу државне помоћи">Комисија за контролу државне помоћи</option>
                                 <option value="Национална корпорација за осигурање стамбених кредита">Национална корпорација за осигурање стамбених кредита</option>
                                 <option value="Централни регистар обавезног социјалног осигурања">Централни регистар обавезног социјалног осигурања</option>
                                 <option value="Центар за разминирање">Центар за разминирање</option>
                                 <option value="Комесаријат за избеглице и миграције">Комесаријат за избеглице и миграције</option>
                                 <option value="Дирекција за железнице">Дирекција за железнице</option>
                                 <option value="Центар за истраживање несрећа у саобраћају">Центар за истраживање несрећа у саобраћају</option>
                                 <option value="Дирекција за изградњу и развој колубарског округа погођеног земљотресом">Дирекција за изградњу и развој колубарског округа погођеног земљотресом</option>
                                 <option value="Грађевинска дирекција Србије">Грађевинска дирекција Србије</option>
                                 <option value="Контрола летења Србије и Црне Горе (SMACA)">Контрола летења Србије и Црне Горе (SMACA)</option>
                                 <option value="Републички геодетски завод">Републички геодетски завод</option>
                                 <option value="Завод за интелектуалну својину">Завод за интелектуалну својину</option>
                                 <option value="Акредитационо тело Србије">Акредитационо тело Србије</option>
                                 <option value="Институт за стандардизацију Србије">Институт за стандардизацију Србије</option>
                                 <option value="Акционарски фонд">Акционарски фонд</option>
                                 <option value="Туристичка организација Србије">Туристичка организација Србије</option>
                                 <option value="Републичка дирекција за робне резерве">Републичка дирекција за робне резерве</option>
                                 <option value="Републички завод за социјалну заштиту">Републички завод за социјалну заштиту</option>
                                 <option value="Фонд солидарности">Фонд солидарности</option>
                                 <option value="Завод за социјално осигурање">Завод за социјално осигурање</option>
                                 <option value="Национална служба за запошљавање">Национална служба за запошљавање</option>
                                 <option value="Геолошки завод Србије">Геолошки завод Србије</option>
                                 <option value="Компензациони фонд">Компензациони фонд</option>
                                 <option value="Завод за заштиту природе Србије">Завод за заштиту природе Србије</option>
                                 <option value="Републички хидрометеоролошки завод">Републички хидрометеоролошки завод</option>
                                 <option value="Републичка агенција за мирно решавање радних спорова">Републичка агенција за мирно решавање радних спорова</option>
                                 <option value="Агенција за осигурање депозита -независно тело">Агенција за осигурање депозита -независно тело</option>
                                 <option value="Агенција за борбу против корупције">Агенција за борбу против корупције </option>
                                 <option value="Повереник за информације од јавног значаја и заштиту података">Повереник за информације од јавног значаја и заштиту података</option>
                                 <option value="Републичка комисија за заштиту права у поступцима јавних набавки">Републичка комисија за заштиту права у поступцима јавних набавки</option>
                                 <option value="Комисија за заштиту конкуренције">Комисија за заштиту конкуренције </option>
                                 <option value="Регулаторно тело за електронске медије">Регулаторно тело за електронске медије</option>
                                 <option value="Агенција за енергетику">Агенција за енергетику</option>
                                 <option value="Комисија за хартије од вредности">Комисија за хартије од вредности</option>
                                 <option value="Народна банка Србије">Народна банка Србије</option>
                                 <option value="Заштитник грађана (републички)">Заштитник грађана (републички)</option>
                                 <option value="Повереник за заштиту равноправности">Повереник за заштиту равноправности</option>
                                 <option value="Републички завод за статистику">Републички завод за статистику</option>
                                 <option value="Републичка дирекција за имовину Републике Србије">Републичка дирекција за имовину Републике Србије</option>
                                 <option value="Републички фонд за пензијско и инвалидско осигурање">Републички фонд за пензијско и инвалидско осигурање</option>
                                 <option value="Управа за јавне набавке">Управа за јавне набавке</option>
                                 <option value="Регулационо тело за телекомуникационе и електронске услуге (РАТЕЛ)">Регулационо тело за телекомуникационе и електронске услуге (РАТЕЛ)</option>
                                 <option value="Дипос д.о.о.">Дипос д.о.о.</option>

                            </select>
                             <span class="tooltiptext" id = "tooltiptext1">У оквиру падајућег менија означава се надлежни орган/организација, који решава по захтеву у оквиру административног поступка.</span>

                		</div>
                	</div>
                	<div class="row">
                		<div class="col-lg-1">
                			 <span class="labelBrojevi">a2.</span>
                		</div>
                		
                        <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Надлежни орган/организација која врши надзор над надлежним органом/организацијом за спровођење административног поступка</span>
                            <br></br><select class="form-control" name="nadlezniOrgan2">
                            <option value="" disabled selected hidden>Изаберите</option>
                                 <option value="Влада">Влада</option>
                                 <option value="Министарство државне управе и локалне самоуправе">Министарство државне управе и локалне самоуправе</option>
                                 <option value="Министарство финансија">Министарство финансија</option>
                                 <option value="Министарство привреде">Министарство привреде</option>
                                 <option value="Министарство пољопривреде и заштите животне средине">Министарство пољопривреде и заштите животне средине</option>
                                 <option value="Министарство грађевинарства, саобраћаја и инфраструктуре">Министарство грађевинарства, саобраћаја и инфраструктуре</option>
                                 <option value="Министарство рударства и енергетике">Министарство рударства и енергетике</option>
                                 <option value="Министарство трговине, туризма и телекомуникација">Министарство трговине, туризма и телекомуникација</option>
                                 <option value="Министарство правде">Министарство правде</option>
                                 <option value="Министарство унутрашњих послова">Министарство унутрашњих послова</option>
                                 <option value="Министарство одбране">Министарство одбране</option>
                                 <option value="Министарство спољних послова">Министарство спољних послова</option>
                                 <option value="Министарство просвете, науке и технолошког развоја">Министарство просвете, науке и технолошког развоја</option>
                                 <option value="Министарство здравља">Министарство здравља</option>
                                 <option value="Министарство за рад, запошљавање, борачка и социјална питања">Министарство за рад, запошљавање, борачка и социјална питања</option>
                                 <option value="Министарство омладине и спорта">Министарство омладине и спорта</option>
                                 <option value="Министарство културе и информисања">Министарство културе и информисања</option>
                                 <option value="Народна Скупштина">Народна Скупштина</option>
                                 <option value="Народна банка Србије">Народна банка Србије</option>
                   
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">У оквиру падајућег менија означава се надлежни орган/организација, који/а спроводи надзор над надлежним органом/организацијом,који решава по захтеву у оквиру административног поступка.</span>

                	</div>
                    </div>
                	<div class="row">
                		<div class="col-lg-1">
                			 <span class="labelBrojevi">a3.</span>
                		</div>
                		
                		<div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Организациона јединица у чијој је надлежности административни поступак</span>
                            <br></br><textarea data-autoresize  name="organizacionaJedinica"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси назив организационе јединице у оквиру органа/организације(сектор, одељење, одсек и сл.), надлежне за решавање по захтеву у оквиру административног поступка. Потребно је унети назив и више и ниже (шире и уже) организационе јединице (Нпр. Назив одељења, Назив одсека у оквиру одељења).</span>


                		</div>
                	</div>

                	<div class="row">
                		<div class="col-lg-1">
                			 </div>
                		<div class="col-lg-11" style="text-align:center">
                			 <h3>Подаци о лицу које попуњава формулар</h3>
                		</div>
                        </div>

                			<div class="row">
                				<div class="col-lg-1">
                					<span class="labelBrojevi">a4.1</span>
                				</div>
                				<div class="col-lg-11" id = "tooltip1">
                					 <span class="labelNazivi">Име и презиме</span>
                                     <br><br> <input type="text" class='form-control' name='imePrezime' id="a41" ></br>
                                        <span class="tooltiptext" id = "tooltiptext1">Лице, које попуњава формулар, уноси податке о свом имену и презимену, позицији/ радном месту, телефону и електронској пошти. Имејл адресу унети у латиничном писму.</span>

                				</div>
                			</div>

                			<div class="row">
                				<div class="col-lg-1">
                                    <span class="labelBrojevi">a4.2</span>
                				</div>
                				<div class="col-lg-11" id = "tooltip1">
                                    <span class="labelNazivi">Позиција/радно место</span>
                                    <br><br> <input type="text" class='form-control' name='radnoMesto' id="a42" ></br>

                				</div>
                			</div>

                			<div class="row">
                				<div class="col-lg-1">
                                    <span class="labelBrojevi">a4.3</span>
                				</div>
                				<div class="col-lg-11" id = "tooltip1">
                                    <span class="labelNazivi">Телефон</span>
                                    <br><br> <input type="number" class='form-control' name='telefon'  placeholder="+381 11 XX XX XXX"></br>

                				</div>
                			</div>

                			<div class="row">
                				<div class="col-lg-1">
                                    <span class="labelBrojevi">a4.4</span>
                				</div>
                				<div class="col-lg-11" id = "tooltip1">
                                    <span class="labelNazivi">Електронска пошта</span>
                                    <br><br><input type="text" id="e-mail" class='form-control' name='a44ElPosta' ></br>

                				</div>
                			
                	</div>
                	<div class="row" id = "tooltip1">
                		<div class="col-lg-1">
                            <span class="labelBrojevi">a5.</span>
                		</div>
                		<div class="col-lg-11">
                            <span class="labelNazivi">Субјекти на које се односи административни поступак</span>
                            
                            <div class="checkbox">
                                <label><input type="checkbox" name="subjekti[]" value="Грађани">Грађани</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="subjekti[]" value="Предузетници">Предузетници</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="subjekti[]" value="Привредна друштва">Привредна друштва</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="subjekti[]" value="Други привредни субјекти">Други привредни субјекти</label>
                            </div>
                            
                		</div>
                        <span class="tooltiptext" id = "tooltiptext1">У зависности од тога да ли захтев подносе грађани, привредна друштва, предузетници и/или други привредни субјекти, одабира се понуђена опција. Уколико се административни поступак односи на више субјеката,бирају се сви субјекти, на које се административни поступак односи.</span>

                	</div>
                	<div class="row" id = "tooltip1">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">a6.</span>
                        </div>
                        <div class="col-lg-11">
                            <span class="labelNazivi">Делатност/и на коју/е се административни поступак односи</span>
                            <br><br>

                                <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" id = "check1" value="А - Пољопривреда, шумарство и рибарство" name="?" onclick="funkcija1()">А - Пољопривреда, шумарство и рибарство</label>
                            </div>

                            

                            <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="B - Рударство" id = "check2" onclick="funkcija2()">B - Рударство</label>
                            </div>

                             

                            <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="C - Прерађивачка индустрија" id = "check3"  onclick="funkcija3()">C - Прерађивачка индустрија</label>
                            </div>
                              

                            <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="D - Снабдевање електричном енергијом, гасом, паром и климатизација" id = "check4" onclick = "funkcija4()">D - Снабдевање електричном енергијом, гасом, паром и климатизација</label>


                                 

                            </div>

                                <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="E - Снабдевање водом; управљање отпадним водама, контролисање процеса уклањања отпада и сличне активности" id = "check5" onclick = "funkcija5()">E - Снабдевање водом; управљање отпадним водама, контролисање процеса уклањања отпада и сличне активности</label>

                                     



                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="F - Грађевинарство" id = "check6" onclick = "funkcija6()">F - Грађевинарство</label>

                                     

                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="G - Трговина на велико и трговина на мало; поправка моторних возила и мотоцикала" id = "check7" onclick = "funkcija7()">G - Трговина на велико и трговина на мало; поправка моторних возила и мотоцикала</label>

                                     

                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="H - Саобраћај и складиштење" id = "check8" onclick = "funkcija8()">H - Саобраћај и складиштење</label>

                                    

                            </div>

                               <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="I - Услуге смештаја и исхране" id = "check9" onclick = "funkcija9()" >I - Услуге смештаја и исхране</label>

                                      

                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="J - Информисање и комуникације" id = "check10" onclick = "funkcija10()">J - Информисање и комуникације</label>

                          
                                 

                            </div> 

                            <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="K - Финансијске делатности и делатност осигурања" id = "check11" onclick = "funkcija11()">K - Финансијске делатности и делатност осигурања</label>

                                    

                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="L - Пoсловање некретнинама" id = "check12" onclick = "funkcija12()">L - Пoсловање некретнинама</label>

                                       

                            </div>

                                <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="M - Стручне, научне, иновационе и техничке делатности" id = "check13" onclick = "funkcija13()" >M - Стручне, научне, иновационе и техничке делатности</label>

                                    


                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="N - Административне и помоћне услужне делатности" id = "check14" onclick = "funkcija14()">N - Административне и помоћне услужне делатности</label>

                                    


                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="O - Државна управа и одбрана; обавезно социјално осигурање" id = "check15" onclick = "funkcija15()">O - Државна управа и одбрана; обавезно социјално осигурање</label>

                              

                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="P - Образовање" id = "check16" onclick = "funkcija16()">P - Образовање</label>

                           

                            </div>


                                 <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="Q - Здравствена и социјална заштита" id = "check17" onclick = "funkcija17()">Q - Здравствена и социјална заштита</label>

                                     


                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="R - Уметност; забава и рекреација" id = "check18" onclick = "funkcija18()">R - Уметност; забава и рекреација</label>


                                       


                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="S - Остале услужне делатности" id = "check19" onclick = "funkcija19()">S - Остале услужне делатности</label>


                                     

                            </div>
                             <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="T - Делатност домаћинства као послодавца; делатност домаћинстава која производе робу и услуге за сопствене потребе" id = "check20" onclick = "funkcija20()">T - Делатност домаћинства као послодавца; делатност домаћинстава која производе робу и услуге за сопствене потребе</label>

                                       


                            </div>

                            <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="U - Делатност екстериторијалних организација и тела" id = "check21" onclick = "funkcija21()">U - Делатност екстериторијалних организација и тела</label>
                                           


                            </div>

                            <div class="checkbox">
                                <label><input type="checkbox" name="delatnost[]" value="СВЕ" id = "check22" onclick = "funkcija22()">СВЕ</label>

                            
                            </div>
                              
                        </div>
                       <span class="tooltiptext" id = "tooltiptext1">У оквиру падајућег менија, бира се делатност на коју се административни поступак односи. Ако административни поступак обухвата више делатности, одабрати више одговора.</span>

                    </div>

                    <div class="row">
                        <div class="col-lg-1">
                            <span class="labelNazivi">a7.</span>
                        </div>


                        <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Подделатност/и на коју/е се административни поступак односи</span>

                            <div id = "selekt" ></div>
                            <!--<select class="form-control" id = "selekt">
                        -->
                            <option value="" disabled selected hidden name="poddelatnost">Изаберите</option>
    
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">У оквиру сваке одабране делатности, бира се под-делатност на коју се административни поступак односи. Ако се административни поступак односи на више под-делатности, одабрати сваку од њих.</span>
                            
                        </div>
                    </div>
                	
                	<div class="row">
                		<div class="col-lg-1">
                            <span class="labelBrojevi">a8.</span>
                		</div>
                		<div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Врста јавног овлашћења које има надлежни орган/организација</span>
                            <div class="radio">
                                <label><input type="radio" name="vrstaOvlascenja" value="Изворни">Изворни</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="vrstaOvlascenja" value="Поверени">Поверени</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога да ли је поступак, који надлежни орган / организација спроводи,изворни или поверени, бира се једна од понуђених опција.</span>

                		</div>
                	</div>

                    <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">a9.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Ниво власти на коме се спроводи административни поступак</span>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Републички" name="nivoVlasti[]">Републички</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Покрајински" name="nivoVlasti[]">Покрајински</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Локални" name="nivoVlasti[]">Локални</label>
                            </div>
                             <span class="tooltiptext" id = "tooltiptext1">Oзначити ниво власти (републички, покрајински, локални),на коме се спроводи административни поступак. За случај да се поступак за различите случајеве спроводи на више нивоа, означити све нивое на којима се спроводи. </span>

                        </div>
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">a10.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip3">
                            <span class="labelNazivi">Уколико се поступак спроводи на више нивоа, образложити специфичности спровођења на сваком нивоу</span>
                            <br></br><textarea data-autoresize name="viseNivoa"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је описати за које случајеве се поступак спроводи на једном, а за које на другом нивоу власти. Пример томе може бити поступак „Грађевинска дозвола“, који се спроводи на републичком, покрајинском и локалном нивоу. На републичком нивоу, министарство надлежно за послове изградње издаје грађевинску дозволу за изградњу комплекснијих објеката из члана 133. Закона о планирању и изградњи. Чланом 134. истог Закона, Аутономној Покрајини је поверено издавање грађевинске дозволе за комплексније објекте из члана 133. који се у целини граде на територији Покрајине (надлежан покрајински секретаријат у чијем делокругу рада је изградња објеката). Јединицама локалне самоуправе је, чланом 134. Закона, поверено издавање грађевинских дозвола за изградњу мање сложених објеката, који нису одређени у члану 133.</span>

                        </div>
                        </div>

                	   <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">a11.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip3">
                            <span class="labelNazivi">Административни поступак се спроводи:</span>
                            <div class="checkbox">
                                <label><input type="checkbox" name="sprovodjenjePostupka[]" value="Пре регистрације">Пре регистрације</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="sprovodjenjePostupka[]" value="Након регистрације">Након регистрације</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="sprovodjenjePostupka[]" value="У току пословања">У току пословања</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Ово поље се попуњава само у случају када су подносиоци захтева предузетници и/или привредна друштва и/или други субјекти. У овом одељку потребно је навести у ком тренутку се административни поступак спроводи, одабиром понуђених опција:<br>
   <b>Пре регистрације</b> - случај када се административни поступак спроводи пре него што је привредни субјекат / предузетник / други субјекат регистрован код надлежног органа, а представља услов за регистрацију.<br>
   <b>Након регистрације</b> - случај када се спровођење административног поступка обавља након што је привредни субјекат / предузетник / други субјекат регистрован код надлежног органа, а административни поступак представља услов за отпочињање пословања.<br>
   <b>У току пословања</b> -случај када се административни поступак спроводи у току пословања привредног субјекта / предузетника / другог субјекта.
</span>

                        </div>
                        </div>

                    <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">a12.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip3">
                            <span class="labelNazivi">Врста административног поступка по учесталости обављања</span>
                            <div class="radio">
                                <label><input type="radio" name="vrstaPostupka" value="Једнократни" id="jednokratni">Једнократни</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="vrstaPostupka" value="Понављајући, учесталост зависи од врсте пословне активности" id="ponavljajuci2">Понављајући, учесталост зависи од врсте пословне активности</label>
                            </div>
                             <div class="radio">
                                <label><input type="radio" name="vrstaPostupka" value="Понављајући, услед законске обавезе" id="ponavljajuci">Понављајући, услед законске обавезе</label>
                            </div>
                         <span class="tooltiptext" id = "tooltiptext1">Бира се једна од следећих опција:<br>
   <b>Једнократни</b> – када се захтев подноси само једном (нпр. оснивање друштва);<br>
   <b>Понављајући, учесталост зависи од врсте пословне активности</b> – када нема законске обавезе, већ се захтев подноси по потреби субјекта (нпр. промена директора, пријава радника и сл.);><br>
   <b>Понављајући, услед законске обавезе</b> -када је потребно подносити захтев периодично (месечно, на 6 месеци, годишње, на више година и сл.), услед законске обавезе (нпр.достављање финансијских извештаја, овера здравствених књижица, обнављање лиценце и сл.).
</span>

                        </div>
                        </div>



                    <div class="row">
                        <div class="col-lg-1">
                             <span class="labelBrojevi">a13.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Учесталост понављања административног поступка</span>
                            <br></br><select class="form-control" id="ucestalost" disabled="" name="ucestalostPostupka">
                            <option value="" disabled selected hidden>Изаберите</option>
                                <option value="месечно">месечно</option>
                                <option value="на 3 месеца">на 3 месеца</option>
                                <option value="на 6 месеци">на 6 месеци</option>
                                <option value="годишње">годишње</option>
                                <option value="на 2 године">на 2 године</option>
                                <option value="на 3 године">на 3 године</option>
                                <option value="на 4 године">на 4 године</option>
                                <option value="на 5 година">на 5 година</option>
                                <option value="на више од 5 година">на више од 5 година</option>
                                <option value="зависно од пословне активности">зависно од пословне активности</option>
                                <option value="друго">друго</option>
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">Ово поље се попуњава само у случају када је поступак „Понављајући, услед законске обавезе“. У оквиру падајућег менија, бира се једна од понуђених опција, у зависности од учесталости подношења захтева у оквиру административног поступка. </span>

                    </div>  
                    </div>

                    <div class="row" style="display:none">
                        <div class="col-lg-1">
                            
                        </div>
                        <div class="col-lg-11">
                            <span class="labelNazivi">Крајњи резултат позитивно решеног административног поступка</span>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Дозвола" name="sprovodjenjePostupka[]">Дозвола</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Регистрација" name="sprovodjenjePostupka[]">Регистрација</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Сагласност" name="sprovodjenjePostupka[]">Сагласност</label>
                            </div>

                            <div class="checkbox">
                                <label><input type="checkbox" value="Одобрење" name="sprovodjenjePostupka[]">Одобрење</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Сертификат" name="sprovodjenjePostupka[]">Сертификат</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Лиценца" name="sprovodjenjePostupka[]">Лиценца</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Уверење" name="sprovodjenjePostupka[]">Уверење</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Евиденција" name="sprovodjenjePostupka[]">Евиденција</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Друго" name="sprovodjenjePostupka[]">Друго</label>
                            </div>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                             <span class="labelBrojevi">a14.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Период највећег интензитета подношења захтева</span>
                            <br></br><select class="form-control" name="intenzitetPodnosenja">
                            <option value="" disabled selected hidden>Изаберите</option>
                                <option value="први квартал године">први квартал године</option>
                                <option value="други квартал године">други квартал године</option>
                                <option value="трећи квартал године">трећи квартал године</option>
                                <option value="четврти квартал године">четврти квартал године</option>
                                <option value="континуирано">континуирано</option>
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">У оквиру падајућег менија бира се једна од понуђених опција, у зависности од тога у ком периоду је највећи интензитет подношења захтева или опција„континиурано“, уколико не постоји периодична учесталост.</span>

                    </div> 
                    </div>

                    <div class="row">
                        <div class="col-lg-1">
                             <span class="labelBrojevi">a15.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Пун назив издатог акта у случају позитивно решеног административног поступка</span>
                            <br></br><textarea data-autoresize name="punNazivAkta"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Навести пун назив акта, којим се окончава административни поступак, односно који издаје надлежни орган / организација, након спроведеног поступка. Навести тачан назив акта, уколико је дефинисан прописом. Уколико акт није дефинисан прописом, навести тачан назив, који се налази на обрасцу самог акта.</span>


                        </div>
                    </div>

                <div class="row">
                <div class="col-lg-1">
                             <span class="labelBrojevi">a16.</span>
                        </div>
                    <div class="col-lg-11" >                     
                    <span class="labelNazivi">Укупан број поднетих захтева од стране привредних друштава, предузетника и других привредних субјеката (не обухвата захтеве грађана)</span>

                    </div>
                    </div>

                <div class="row">
                <div class="col-lg-1">                
                    </div>
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>2014. година</p></h4>
                </div>
                <div class="col-lg-1">
                                                     </div>
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>2015. година</p></h4>
                </div>
                </div>
                

                <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-5" id = "tooltip4">
                <input type="number" min="0" class='form-control' name='podneti2014' >
                <span class="tooltiptext1" id = "tooltiptext1">Навести број захтева, које су привредна друштва, предузетници и други привредни субјекти поднели надлежном органу / организацији у 2014. и 2015. години. Овај податак не обухвата број захтева, поднетих од стране грађана, уколико је у питању мешовит поступак. </span>

                </div>
                    <div class="col-lg-1">
                    </div>                    
                    <div class="col-lg-5" id = "tooltip4">                        
                    <input type="number" min="0" class='form-control' name='podneti2015' >
                    <span class="tooltiptext1" id = "tooltiptext1">Навести број захтева, које су привредна друштва, предузетници и други привредни субјекти поднели надлежном органу / организацији у 2014. и 2015. години. Овај податак не обухвата број захтева, поднетих од стране грађана, уколико је у питању мешовит поступак. </span>

                    </div>
                        </div>

                        <div class="row">
                <div class="col-lg-1">
                             <span class="labelBrojevi">a17.</span>
                        </div>
                    <div class="col-lg-11">                     
                    <span class="labelNazivi">Укупан број издатих аката привредним друштвима, предузетницима и другим привредним субјектима</span>
                    </div>
                    </div>

                    <div class="row">
                <div class="col-lg-1">
                
                    </div>
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>2014. година</p></h4>
                </div>
                <div class="col-lg-1">
                                    </div>
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>2015. година</p></h4>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-5" id = "tooltip4">
                <span class="labelNazivi">Позитивно решени</span>
                <input type="number" style="height: 40px" min="0" class='form-control' name='pozitivni2014' >
                <span class="tooltiptext" id = "tooltiptext1">Потребно је унети број издатих аката привредним друштвима, предузетницима и другим привредним субјектима у оквиру овог АП у 2014. и 2015. години, и то посебно број:
   Позитивно решених аката;
   Негативно решених аката.
</span>

                </div>
                    <div class="col-lg-1">
                    </div>                    
                    <div class="col-lg-5" id = "tooltip4">
                    <span class="labelNazivi">Позитивно решени</span>                        
                    <input type="number" style="height: 40px" min="0" class='form-control' name='pozitivni2015' >
                    <span class="tooltiptext" id = "tooltiptext1">Потребно је унети број издатих аката привредним друштвима, предузетницима и другим привредним субјектима у оквиру овог АП у 2014. и 2015. години, и то посебно број:
   Позитивно решених аката;
   Негативно решених аката.
</span>

                    </div>
                        </div>

                        <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-5" >
                <span class="labelNazivi">Негативно решени</span>
                <input type="number" style="height: 40px" min="0" class='form-control' name='negativni2014' >

                </div>
                    <div class="col-lg-1">
                    </div>                    
                    <div class="col-lg-5">
                    <span class="labelNazivi">Негативно решени</span>                       
                    <input type="number" style="height: 40px" min="0" class='form-control' name='negativni2015' >

                    </div>
                        </div>
                	




                     <div class="row">
                        <div class="col-lg-1">
                             <span class="labelBrojevi">a18.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Навести извор унетих података за поља а16. и а17.</span>
                            <br></br><textarea data-autoresize name="изворУнетихПодатака"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Облачић за а18.</span>


                        </div>
                    </div>
                    </div>


                    </section>

                    <section id="section_B">
                	<div class="row">
                		<div class="col-lg-12" style="text-align:center" id = "tooltip1">
                             <h2><span class="text" >Б. Правни основ административног поступка </span></h2>
                             <span class="tooltiptext" id = "tooltiptext1">У овом делу формулара уносе се подаци о законима, подзаконским и другим актима, који уређују административни поступак. Ако је административни поступак регулисан у више прописа, уносе се сви закони, подзаконска и друга акта, који уређују поступак (опција „Додај пропис“).</span>
                        </div>
                	</div>          
                   
                <div id="b0">

                    <div class="b">

                <div class="row">
                
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б1.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">

                            <span class="labelNazivi">Врста прописа</span>
                            <br><br><select class="form-control" name='vrstaPropisa'>
                                <option value="Закон">Закон</option>
                                <option value="Подзаконски акт">Подзаконски акт</option>
                                <option value="Друго">Друго</option>
                                
                            </select>

                            <span class="tooltiptext" id = "tooltiptext1">Избором из падајућег менија, означава се да ли је административни поступак регулисан законом, подзаконским или другим актом.</span>

                            </div>
                            <div class="col-lg-1">
                                
                                </div>
                            </div>

                    <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б2.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Назив прописа и број службеног гласила</span>
                           <br><br>


                                    <?php

                                    $url='http://www.pravno-informacioni-sistem.rs/rfp/api';
                                    $curl = curl_init($url);

                                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                    curl_setopt($curl, CURLOPT_POST, false);
                                    $curl_odgovor = curl_exec($curl);
                                    curl_close($curl);
                                    $parsiran_json = json_decode ($curl_odgovor);
                                    ?>
                                    <!-- <div class="ui-widget">
                                      <label for="tags">Претрага: </label>
                                      <input id="tags">
                                    </div> -->

                                    <select id="result1" name="nazivPropisa1" data-placeholder="Изаберите..." class="chosen-select" style="width: 100%" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>      
                         
                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">б3.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                         <textarea data-autoresize id="opis" name="nazivPropisaOpt1"></textarea>
                        <br>

    
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl1">
                <input type="text" class="form-control fajl1-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl1-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl1-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl1-input-title">Додај датотеку</span>
                        <input type="file" name="b_fajl1" accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    </div>


                    </br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>

                        </div>
                        </div>

                         <div class="row">
                            <div class="col-lg-1" >
                            <span class="labelBrojevi">б4.</span>
                            </div>
                                <div class="col-lg-11" id = "tooltip1">
                                    <span class="labelNazivi">Члан/ови у пропису: </span>
                                    <br></br><input type="text" id="b41" class='form-control' name="clanoviPropisa" >
                                    <span class="tooltiptext" id = "tooltiptext1">Уносе се члан/ови закона, подзаконског или другог акта, који уређују административни поступак.</span>

                                </div>
                                </div>

                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dete1" type="button" value="Додај пропис" onclick="b1_show()">
                 </div>
              
                        </div>  


                    </div>
                    <br></br>
            
                </div>        
                
                <div id="b1">

                     <div class="b">
                <div class="row">
                
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б1.</span>
                        </div>
                        <div class="col-lg-11"  id = "tooltip1">

                            <span class="labelNazivi">Врста прописа</span>
                            <br><br><select class="form-control" name='vrstaPropisa1'>
                                <option value="Закон">Закон</option>
                                <option value="Подзаконски акт">Подзаконски акт</option>
                                <option value="Друго">Друго</option>
                                
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">Избором из падајућег менија, означава се да ли је административни поступак регулисан законом, подзаконским или другим актом.</span>
                            </div>
                            <div class="col-lg-1">
                                
                                </div>
                            </div>                            

                            <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б2.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Назив прописа и број службеног гласила</span>
                           <br><br>

                                    
                                    <select id="result2" name="nazivPropisa2" data-placeholder="Изаберите..." class="chosen-select" style="width:100%;" tabindex="2">


                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>      
                    

                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">б3.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>

                          <textarea data-autoresize id="opis" name="nazivPropisaOpt2"></textarea>

                        <br>
                                          
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl2">
                <input type="text" class="form-control fajl2-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl2-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl2-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl2-input-title">Додај датотеку</span>
                        <input type="file" name="b_fajl2" accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>
                        </div>
                        </div>


                         <div class="row">
                            <div class="col-lg-1">
                            <span class="labelBrojevi">б4.</span>
                            </div>
                                <div class="col-lg-11" id = "tooltip1">
                                    <span class="labelNazivi">Члан/ови у пропису: </span>
                                    <br></br><input type="text" id="b42" class='form-control' name="clanoviPropisa1" >
                                    <span class="tooltiptext" id = "tooltiptext1">Уносе се члан/ови закона, подзаконског или другог акта, који уређују административни поступак.</span>
                                </div>
                                </div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="remove2" type="button" value="Уклони" onclick="b1_hide()"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dete2" type="button" value="Додај пропис" onclick="b2_show()">
                 </div>
              
                        </div>  
                    </div>
                    <br></br>
                    </div>




                <div id="b2">

                     <div class="b">
                <div class="row">
                
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б1.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">

                            <span class="labelNazivi">Врста прописа</span>
                            <br><br><select class="form-control" name="vrstaPropisa2">
                                <option value="Закон">Закон</option>
                                <option value="Подзаконски акт">Подзаконски акт</option>
                                <option value="Друго">Друго</option>
                                
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">Избором из падајућег менија, означава се да ли је административни поступак регулисан законом, подзаконским или другим актом.</span>

                            </div>
                            <div class="col-lg-1">
                                
                                </div>
                            </div>

                            <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б2.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Назив прописа и број службеног гласила</span>
                           <br><br>

                                    <select id="result3" name="nazivPropisa3" data-placeholder="Изаберите..." class="chosen-select" style="width:100%;" tabindex="2" value="">


                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>
                                    
                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">б3.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                         <textarea data-autoresize id="opis" name="nazivPropisaOpt3"></textarea>
                        <br>
                                          
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl3">
                <input type="text" class="form-control fajl3-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl3-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl3-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl3-input-title">Додај датотеку</span>
                        <input type="file" name="b_fajl3" accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>

                        </div>
                        </div>


                         <div class="row">
                            <div class="col-lg-1">
                            <span class="labelBrojevi">б4.</span>
                            </div>
                                <div class="col-lg-11" id = "tooltip1">
                                    <span class="labelNazivi">Члан/ови у пропису: </span>
                                    <br></br><input type="text" id="b43" class='form-control' name="clanoviPropisa2" >
                                    <span class="tooltiptext" id = "tooltiptext1">Уносе се члан/ови закона, подзаконског или другог акта, који уређују административни поступак.</span>
                                </div>
                                </div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="remove3" type="button" value="Уклони" onclick="b2_hide()"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dete3" type="button" value="Додај пропис" onclick="b3_show()">
                 </div>
              
                        </div>  
                    </div>
                      <br></br>

                    </div>

                 <div id="b3">

                     <div class="b">
                <div class="row">
                
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б1.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">

                            <span class="labelNazivi">Врста прописа</span>
                            <br><br><select class="form-control" name="vrstaPropisa3">
                                <option value="Закон">Закон</option>
                                <option value="Подзаконски акт">Подзаконски акт</option>
                                <option value="Друго">Друго</option>
                                
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">Избором из падајућег менија, означава се да ли је административни поступак регулисан законом, подзаконским или другим актом.</span>
                            </div>
                            <div class="col-lg-1">
                                
                                </div>
                            </div>

                            <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б2.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Назив прописа и број службеног гласила</span>
                           <br><br>

                                    <select id="result4" name="nazivPropisa4" data-placeholder="Изаберите..." class="chosen-select" style="width:100%;" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>

                          

                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">б3.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                         <textarea data-autoresize id="opis" name="nazivPropisaOpt4"></textarea>
                        <br>
                                          
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl4">
                <input type="text" class="form-control fajl4-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl4-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl4-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl4-input-title">Додај датотеку</span>
                        <input type="file" name="b_fajl4" accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
   
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>
                        </div>
                        </div>


                         <div class="row">
                            <div class="col-lg-1">
                            <span class="labelBrojevi">б4.</span>
                            </div>
                                <div class="col-lg-11" id = "tooltip1">
                                    <span class="labelNazivi">Члан/ови у пропису: </span>
                                    <br></br><input type="text" id="b44" class='form-control' name="clanoviPropisa3" >
                                    <span class="tooltiptext" id = "tooltiptext1">Уносе се члан/ови закона, подзаконског или другог акта, који уређују административни поступак.</span>
                                </div>
                                </div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="remove4" type="button" value="Уклони" onclick="b3_hide()"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dete4" type="button" value="Додај пропис" onclick="b4_show()">
                 </div>
              
                        </div>  
                    </div>
                                        <br></br>

                    </div>
                           

                   <div id="b4">

                     <div class="b">
                <div class="row">
                
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б1.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">

                            <span class="labelNazivi">Врста прописа</span>
                            <br><br><select class="form-control" name="vrstaPropisa4">
                                <option value="Закон">Закон</option>
                                <option value="Подзаконски акт">Подзаконски акт</option>
                                <option value="Друго">Друго</option>
                                
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">Избором из падајућег менија, означава се да ли је административни поступак регулисан законом, подзаконским или другим актом.</span>
                            </div>
                            <div class="col-lg-1">
                                
                                </div>
                            </div>

                            <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б2.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Назив прописа и број службеног гласила</span>
                           <br><br>

                                    <select id="result5" name="nazivPropisa5" data-placeholder="Изаберите..." class="chosen-select" style="width:100%;" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">б3.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                         <textarea data-autoresize id="opis" name="nazivPropisaOpt5" ></textarea>
                        <br>
                              
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl5">
                <input type="text" class="form-control fajl5-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl5-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl5-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl5-input-title">Додај датотеку</span>
                        <input type="file" name="b_fajl5" accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>
                        </div>
                        </div>


                         <div class="row">
                            <div class="col-lg-1">
                            <span class="labelBrojevi">б4.</span>
                            </div>
                                <div class="col-lg-11" id = "tooltip1">
                                    <span class="labelNazivi">Члан/ови у пропису: </span>
                                    <br></br><input type="text" id="b45" class='form-control' name="clanoviPropisa4" >
                                    <span class="tooltiptext" id = "tooltiptext1">Уносе се члан/ови закона, подзаконског или другог акта, који уређују административни поступак.</span>
                                </div>
                                </div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="remove5" type="button" value="Уклони" onclick="b4_hide()"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dete5" type="button" value="Додај пропис" onclick="b5_show()" >
                 </div>
              
                        </div>  
                    </div>
                                        <br></br>

                    </div>
                           

                 <div id="b5">

                     <div class="b">
                <div class="row">
                
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б1.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">

                            <span class="labelNazivi">Врста прописа</span>
                            <br><br><select class="form-control" name="vrstaPropisa5">
                                <option value="Закон">Закон</option>
                                <option value="Подзаконски акт">Подзаконски акт</option>
                                <option value="Друго">Друго</option>
                                
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">Избором из падајућег менија, означава се да ли је административни поступак регулисан законом, подзаконским или другим актом.</span>
                            </div>
                            <div class="col-lg-1">
                                
                                </div>
                            </div>

                            <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б2.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Назив прописа и број службеног гласила</span>
                           <br><br>

                                    <select id="result6" name="nazivPropisa6" data-placeholder="Изаберите..." class="chosen-select" style="width:100%;" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">б3.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                         <textarea data-autoresize id="opis" name="nazivPropisaOpt6"></textarea>
                        <br>
                                          
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl6">
                <input type="text" class="form-control fajl6-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl6-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl6-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl6-input-title">Додај датотеку</span>
                        <input type="file" name="b_fajl6" accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>
                        </div>
                        </div>


                         <div class="row">
                            <div class="col-lg-1">
                            <span class="labelBrojevi">б4.</span>
                            </div>
                                <div class="col-lg-11" id = "tooltip1">
                                    <span class="labelNazivi">Члан/ови у пропису: </span>
                                    <br></br><input type="text" id="b46" class='form-control' name="clanoviPropisa5" >
                                    <span class="tooltiptext" id = "tooltiptext1">Уносе се члан/ови закона, подзаконског или другог акта, који уређују административни поступак.</span>
                                </div>
                                </div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="remove6" type="button" value="Уклони" onclick="b5_hide()"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dete6" type="button" value="Додај пропис" onclick="b6_show()" >
                 </div>
              
                        </div>  
                    </div>
                                        <br></br>

                    </div>
                           
                   <div id="b6">

                     <div class="b">
                <div class="row">
                
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б1.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">

                            <span class="labelNazivi">Врста прописа</span>
                            <br><br><select class="form-control" name="vrstaPropisa6">
                                <option value="Закон">Закон</option>
                                <option value="Подзаконски акт">Подзаконски акт</option>
                                <option value="Друго">Друго</option>
                                
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">Избором из падајућег менија, означава се да ли је административни поступак регулисан законом, подзаконским или другим актом.</span>
                            </div>
                            <div class="col-lg-1">
                                
                                </div>
                            </div>

                            <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б2.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Назив прописа и број службеног гласила</span>
                           <br><br>

                                    <select id="result7" name="nazivPropisa7" data-placeholder="Изаберите..." class="chosen-select" style="width:100%;" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>
                          

                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">б3.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                         <textarea data-autoresize id="opis" name="nazivPropisaOpt7"></textarea>
                        <br>
                                          
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl7">
                <input type="text" class="form-control fajl7-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl7-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl7-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl7-input-title">Додај датотеку</span>
                        <input type="file" name="b_fajl7" accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>
                        </div>
                        </div>


                         <div class="row">
                            <div class="col-lg-1">
                            <span class="labelBrojevi">б4.</span>
                            </div>
                                <div class="col-lg-11" id = "tooltip1">
                                    <span class="labelNazivi">Члан/ови у пропису: </span>
                                    <br></br><input type="text" id="b47" class='form-control' name="clanoviPropisa6" >
                                    <span class="tooltiptext" id = "tooltiptext1">Уносе се члан/ови закона, подзаконског или другог акта, који уређују административни поступак.</span>
                                </div>
                                </div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="remove7" type="button" value="Уклони" onclick="b6_hide()"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dete7" type="button" value="Додај пропис" onclick="b7_show()">
                 </div>
              
                        </div>  
                </div>
                  <br></br>
                  </div>
                           
                 <div id="b7">

                     <div class="b">
                <div class="row">
                
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б1.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">

                            <span class="labelNazivi">Врста прописа</span>
                            <br><br><select class="form-control" name="vrstaPropisa7">
                                <option value="Закон">Закон</option>
                                <option value="Подзаконски акт">Подзаконски акт</option>
                                <option value="Друго">Друго</option>
                                
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">Избором из падајућег менија, означава се да ли је административни поступак регулисан законом, подзаконским или другим актом.</span>
                            </div>
                            <div class="col-lg-1">
                                
                                </div>
                            </div>

                            <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б2.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Назив прописа и број службеног гласила</span>
                           <br><br>

                                    <select id="result8" name="nazivPropisa8" data-placeholder="Изаберите..." class="chosen-select" style="width:100%;" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">б3.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                         <textarea data-autoresize id="opis" name="nazivPropisaOpt8"></textarea>
                        <br>
                                          
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl8">
                <input type="text" class="form-control faj8l-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl8-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl8-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl8-input-title">Додај датотеку</span>
                        <input type="file" name="b_fajl8" accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
   
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>
                        </div>
                        </div>


                         <div class="row">
                            <div class="col-lg-1">
                            <span class="labelBrojevi">б4.</span>
                            </div>
                                <div class="col-lg-11" id = "tooltip1">
                                    <span class="labelNazivi">Члан/ови у пропису: </span>
                                    <br></br><input type="text" id="b48" class='form-control' name="clanoviPropisa7" >
                                    <span class="tooltiptext" id = "tooltiptext1">Уносе се члан/ови закона, подзаконског или другог акта, који уређују административни поступак.</span>
                                </div>
                                </div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="remove8" type="button" value="Уклони" onclick="b7_hide()"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dete8" type="button" value="Додај пропис" onclick="b8_show()" >
                 </div>
              
                        </div>  
                    </div>
                     <br></br>

                    </div>
                           


                <div id="b8">

                     <div class="b">
                <div class="row">
                
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б1.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">

                            <span class="labelNazivi">Врста прописа</span>
                            <br><br><select class="form-control" name="vrstaPropisa8">
                                <option value="Закон">Закон</option>
                                <option value="Подзаконски акт">Подзаконски акт</option>
                                <option value="Друго">Друго</option>
                                
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">Избором из падајућег менија, означава се да ли је административни поступак регулисан законом, подзаконским или другим актом.</span>
                            </div>
                            <div class="col-lg-1">
                                
                                </div>
                            </div>

                            <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б2.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Назив прописа и број службеног гласила</span>
                           <br><br>

                                    <select id="result9" name="nazivPropisa9" data-placeholder="Изаберите..." class="chosen-select" style="width:100%;" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">б3.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                         <textarea data-autoresize id="opis" name="nazivPropisaOpt9" ></textarea>
                        <br>
                                          
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl9">
                <input type="text" class="form-control fajl9-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl9-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl9-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl9-input-title">Додај датотеку</span>
                        <input type="file" name="b_fajl9" accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>
                        </div>
                        </div>


                         <div class="row">
                            <div class="col-lg-1">
                            <span class="labelBrojevi">б4.</span>
                            </div>
                                <div class="col-lg-11" id = "tooltip1">
                                    <span class="labelNazivi">Члан/ови у пропису: </span>
                                    <br></br><input type="text" id="b49" class='form-control' name="clanoviPropisa8" >
                                    <span class="tooltiptext" id = "tooltiptext1">Уносе се члан/ови закона, подзаконског или другог акта, који уређују административни поступак.</span>
                                </div>
                                </div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="remove9" type="button" value="Уклони" onclick="b8_hide()"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dete9" type="button" value="Додај пропис" onclick="b9_show()" >
                 </div>
              
                        </div>  
                    </div>
                                        <br></br>

                    </div>
                           

                 <div id="b9">

                     <div class="b">
                <div class="row">
                
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б1.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">

                            <span class="labelNazivi">Врста прописа</span>
                            <br><br><select class="form-control" name="vrstaPropisa9">
                                <option value="Закон">Закон</option>
                                <option value="Подзаконски акт">Подзаконски акт</option>
                                <option value="Друго">Друго</option>
                                
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">Избором из падајућег менија, означава се да ли је административни поступак регулисан законом, подзаконским или другим актом.</span>
                            </div>
                            <div class="col-lg-1">
                                
                                </div>
                            </div>

                     <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">б2.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Назив прописа и број службеног гласила</span>
                           <br><br>

                                    <select id="result10" name="nazivPropisa10" data-placeholder="Изаберите..." class="chosen-select" style="width:100%;" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">б3.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                         <textarea data-autoresize id="opis" name="nazivPropisaOpt10" ></textarea>
                        <br>
                                          
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl10">
                <input type="text" class="form-control fajl10-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl10-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl10-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl10-input-title">Додај датотеку</span>
                        <input type="file" name="b_fajl10" accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>
                        </div>
                        </div>


                         <div class="row">
                            <div class="col-lg-1">
                            <span class="labelBrojevi">б4.</span>
                            </div>
                                <div class="col-lg-11" id = "tooltip1">
                                    <span class="labelNazivi">Члан/ови у пропису: </span>
                                    <br></br><input type="text" id="b410" class='form-control' name="clanoviPropisa9" >
                                    <span class="tooltiptext" id = "tooltiptext1">Уносе се члан/ови закона, подзаконског или другог акта, који уређују административни поступак.</span>
                                </div>
                                </div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="remove10" type="button" value="Уклони" onclick="b9_hide()"> 
                </div>
            </div>
                        <hr>
                           
                    </div>
                     <br></br>

                    </div>
                    </section>
                           
                    <section id="section_C">
                    <div class="row">
                		<div class="col-lg-12">
                            <div class="col-lg-12" style="text-align:center">
                             <h2><span class="text" >В. Сврха и опис административног поступка</span></h2>
                        </div>
                		</div>
                	</div>
                    <div class="c">
                    <div class="row">
                		<div class="col-lg-1">
                            <span class="labelBrojevi">в1.</span>
                		</div>
                		<div class="col-lg-11" id = "tooltip5">
                            <span class="labelNazivi">Сврха и опис административног поступка</span>
                            <br></br><textarea data-autoresize name="svrhaIOpis"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Приликом попуњавања овог одељка, навести информације, које би биле од значаја за подносиоца захтева, приликом упознавања са поступком. Кратко одговорити на следећа питања:<br>
•   Шта је сврха административног поступка? Овај одговор треба да послужи подносиоцу захтева да разуме шта се овим поступком постиже, зашто је он прописан и шта су његови ефекти (даје одговор на питање ЗАШТО). Одговори се генерално односе на: остваривање јавног интереса, остваривање конкретног права, спречавање негативних ефеката и сл. Наравно, овакве одговоре је потребно конкретизовати за сам административни поступак, односно избегавати уопштен опис. Избегавати одговоре типа: „Сврха поступка је поштовање прописа“, с обзиром да се поштовање прописа подразумева.<br>
•   Како изгледа спровођење административног поступка? Овај одговор треба да послужи подносиоцу захтева да разуме процес подношења и решавања. Он даје кратак одговор на питања КО подноси захтев, КАДА се подноси захтев, НА КОЈИ НАЧИН се захтев подноси и решава. Такође, потребно је навести најважније кораке у поступку, као и друге органе / организације, које учествују у решавању (ако је то случај). 
</span>

                        </div>
                    </div>

                <div class="row">

                        <div class="col-lg-1">
                            <span class="labelBrojevi">в2.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Да ли у току спровођења административног поступка надлежни орган/организација комуницира са другим органима или организацијама?</span>
                            <br>
                            <div class="radio">
                                <label><input type="radio" name="organKomunikacija[]" id="organKomunikacijaDa" value="Да">Да</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="organKomunikacija[]" id="organKomunikacijaNe" value="Не">Не</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Уколико у поступку учествују и други органи или организације, потребно је одговорити ДА. У супротном, обележити одговор НЕ.</span>

                        </div>
                </div>

                                <div id="preklapanjeOrganizacija" hidden="">
                               <div class="row">
                <div class="col-lg-1">
                             <span class="labelBrojevi">в3.</span>
                        </div>
                    <div class="col-lg-11">                     
                    <span class="labelNazivi">Други органи/организације којe учествују у спровођењу административног поступка</span>
                    </div>
                    </div>
                                <div id = "v1">

                <div class="row">
                <div class="col-lg-1">
                </div>

                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Назив органа/организације</p></h4>
                </div>
                
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Активност</p></h4>
                </div>
                <div class="col-lg-1"></div>
                </div>
                

                <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-5" id = "tooltip4">
                <textarea data-autoresize name="organizacijaPreklapanje1"></textarea>
                <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>

                </div>
                      

                    <div class="col-lg-5" id = "tooltip4">                        
                    <textarea data-autoresize name="aktivnostPreklapanje1"></textarea>
                    <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>

                    </div>
                    <div class="col-lg-1">
                    </div>  
                        </div>
                      

                         <div class="row">
                        <div class="col-lg-10"></div>
                    <div class="col-lg-2">
                                
                                </div>
                            </div>
                            <hr>
                      <div class="row">
                        <div class="col-lg-2">
                  <input class="button" id = "dodajv1" type="button" value="Додај">
                     
                </div>
                </div>

</div>


                <div id = "v2" hidden = "">

                     <div class="row">
                <div class="col-lg-1">
                                    </div>
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Назив органа/организације</p></h4>
                </div>
                
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Активност</p></h4>
                </div>
                <div class="col-lg-1"></div>
                </div>
                

                <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-5" id = "tooltip4">
                <textarea data-autoresize name="organizacijaPreklapanje2"></textarea>
                <span class="tooltiptext" id = "tooltiptext1" >Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                </div>
                                      
                    <div class="col-lg-5" id = "tooltip4">                        
                    <textarea data-autoresize name="aktivnostPreklapanje2"></textarea>
                    <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                    </div>
                    <div class="col-lg-1">
                    </div>  
                        </div>



                         <div class="row">
                        <div class="col-lg-10"></div>
                    <div class="col-lg-2">
                        <input class="button-add" id = "removev2" type="button" value="Уклони" >
                                
                                </div>
                            </div>
                            <hr>
                      <div class="row">
                        <div class="col-lg-2">
                  <input class="button-remove" id = "dodajv2" type="button" value="Додај">
                     
                </div>
                </div>


                </div>



                <div id = "v3" hidden = "">

                     <div class="row">
                <div class="col-lg-1">
                                    </div>
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Назив органа/организације</p></h4>
                </div>
                
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Активност</p></h4>
                </div>
                <div class="col-lg-1"></div>
                </div>
                

                <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-5" id = "tooltip4">
                <textarea data-autoresize name="organizacijaPreklapanje3"></textarea>
                <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                </div>
                                      
                    <div class="col-lg-5" id = "tooltip4">                        
                    <textarea data-autoresize name="aktivnostPreklapanje3"></textarea>
                    <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                    </div>
                    <div class="col-lg-1">
                    </div>  
                        </div>



                         <div class="row">
                        <div class="col-lg-10"></div>
                    <div class="col-lg-2">
                        <input class="button-add" id = "removev3" type="button" value="Уклони" >
                                
                                </div>
                            </div>
                            <hr>
                      <div class="row">
                        <div class="col-lg-2">
                  <input class="button-remove" id = "dodajv3" type="button" value="Додај">
                     
                </div>
                </div>


                </div>


 <div id = "v4" hidden = "">

                     <div class="row">
                <div class="col-lg-1">
                                    </div>
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Назив органа/организације</p></h4>
                </div>
                
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Активност</p></h4>
                </div>
                <div class="col-lg-1"></div>
                </div>
                

                <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-5" id = "tooltip4">
                <textarea data-autoresize name="organizacijaPreklapanje4"></textarea>
                <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                </div>
                                      
                    <div class="col-lg-5" id = "tooltip4">                        
                    <textarea data-autoresize name="aktivnostPreklapanje4"></textarea>
                    <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                    </div>
                    <div class="col-lg-1">
                    </div>  
                        </div>



                         <div class="row">
                        <div class="col-lg-10"></div>
                    <div class="col-lg-2">
                        <input class="button-add" id = "removev4" type="button" value="Уклони" >
                                
                                </div>
                            </div>
                            <hr>
                      <div class="row">
                        <div class="col-lg-2">
                  <input class="button-remove" id = "dodajv4" type="button" value="Додај">
                     
                </div>
                </div>


                </div>




 <div id = "v5" hidden = "">

                     <div class="row">
                <div class="col-lg-1">
                                    </div>
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Назив органа/организације</p></h4>
                </div>
                
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Активност</p></h4>
                </div>
                <div class="col-lg-1"></div>
                </div>
                

                <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-5" id = "tooltip4">
                <textarea data-autoresize name="organizacijaPreklapanje5"></textarea>
                <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                </div>
                                      
                    <div class="col-lg-5" id = "tooltip4">                        
                    <textarea data-autoresize name="aktivnostPreklapanje5"></textarea>
                    <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                    </div>
                    <div class="col-lg-1">
                    </div>  
                        </div>



                         <div class="row">
                        <div class="col-lg-10"></div>
                    <div class="col-lg-2">
                        <input class="button-add" id = "removev5" type="button" value="Уклони" >
                                
                                </div>
                            </div>
                            <hr>
                      <div class="row">
                        <div class="col-lg-2">
                  <input class="button-remove" id = "dodajv5" type="button" value="Додај">
                     
                </div>
                </div>


                </div>


                 <div id = "v6" hidden = "">

                     <div class="row">
                <div class="col-lg-1">
                                    </div>
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Назив органа/организације</p></h4>
                </div>
                
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Активност</p></h4>
                </div>
                <div class="col-lg-1"></div>
                </div>
                

                <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-5" id = "tooltip4">
                <textarea data-autoresize name="organizacijaPreklapanje6"></textarea>
                <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                </div>
                                      
                    <div class="col-lg-5" id = "tooltip4">                        
                    <textarea data-autoresize name="aktivnostPreklapanje6"></textarea>
                    <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                    </div>
                    <div class="col-lg-1">
                    </div>  
                        </div>



                         <div class="row">
                        <div class="col-lg-10"></div>
                    <div class="col-lg-2">
                        <input class="button-add" id = "removev6" type="button" value="Уклони" >
                                
                                </div>
                            </div>
                            <hr>
                      <div class="row">
                        <div class="col-lg-2">
                  <input class="button-remove" id = "dodajv6" type="button" value="Додај">
                     
                </div>
                </div>


                </div>




 <div id = "v7" hidden = "">

                     <div class="row">
                <div class="col-lg-1">
                                    </div>
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Назив органа/организације</p></h4>
                </div>
                
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Активност</p></h4>
                </div>
                <div class="col-lg-1"></div>
                </div>
                

                <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-5" id = "tooltip4">
                <textarea data-autoresize name="organizacijaPreklapanje7"></textarea>
                <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                </div>
                                      
                    <div class="col-lg-5" id = "tooltip4">                        
                    <textarea data-autoresize name="aktivnostPreklapanje7"></textarea>
                    <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                    </div>
                    <div class="col-lg-1">
                    </div>  
                        </div>



                         <div class="row">
                        <div class="col-lg-10"></div>
                    <div class="col-lg-2">
                        <input class="button-add" id = "removev7" type="button" value="Уклони" >
                                
                                </div>
                            </div>
                            <hr>
                      <div class="row">
                        <div class="col-lg-2">
                  <input class="button-remove" id = "dodajv7" type="button" value="Додај">
                     
                </div>
                </div>


                </div>

                 <div id = "v8" hidden = "">

                     <div class="row">
                <div class="col-lg-1">
                                    </div>
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Назив органа/организације</p></h4>
                </div>
                
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Активност</p></h4>
                </div>
                <div class="col-lg-1"></div>
                </div>
                

                <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-5" id = "tooltip4">
                <textarea data-autoresize name="organizacijaPreklapanje8"></textarea>
                <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                </div>
                                      
                    <div class="col-lg-5" id = "tooltip4">                        
                    <textarea data-autoresize name="aktivnostPreklapanje8"></textarea>
                    <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                    </div>
                    <div class="col-lg-1">
                    </div>  
                        </div>



                         <div class="row">
                        <div class="col-lg-10"></div>
                    <div class="col-lg-2">
                        <input class="button-add" id = "removev8" type="button" value="Уклони" >
                                
                                </div>
                            </div>
                            <hr>
                      <div class="row">
                        <div class="col-lg-2">
                  <input class="button-remove" id = "dodajv8" type="button" value="Додај">
                     
                </div>
                </div>


                </div>





                 <div id = "v9" hidden = "">

                     <div class="row">
                <div class="col-lg-1">
                                    </div>
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Назив органа/организације</p></h4>
                </div>
                
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Активност</p></h4>
                </div>
                <div class="col-lg-1"></div>
                </div>
                

                <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-5" id = "tooltip4">
                <textarea data-autoresize name="organizacijaPreklapanje9"></textarea>
                <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                </div>
                                      
                    <div class="col-lg-5" id = "tooltip4">                        
                    <textarea data-autoresize name="aktivnostPreklapanje9"></textarea>
                    <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                    </div>
                    <div class="col-lg-1">
                    </div>  
                        </div>



                         <div class="row">
                        <div class="col-lg-10"></div>
                    <div class="col-lg-2">
                        <input class="button-add" id = "removev9" type="button" value="Уклони" >
                                
                                </div>
                            </div>
                            <hr>
                      <div class="row">
                        <div class="col-lg-2">
                  <input class="button-remove" id = "dodajv9" type="button" value="Додај">
                     
                </div>
                </div>


                </div>

                 <div id = "v10" hidden = "">

                     <div class="row">
                <div class="col-lg-1">
                                    </div>
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Назив органа/организације</p></h4>
                </div>
                
                <div class="col-lg-5" style=" text-align: center;">
                 <h4><p>Активност</p></h4>
                </div>
                <div class="col-lg-1"></div>
                </div>
                

                <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-5" id = "tooltip4">
                <textarea data-autoresize name="organizacijaPreklapanje10"></textarea>
                <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                </div>
                                      
                    <div class="col-lg-5" id = "tooltip4">                        
                    <textarea data-autoresize name="aktivnostPreklapanje10"></textarea>
                    <span class="tooltiptext" id = "tooltiptext1">Навести називе других органа/организација, који/е решавају у једном делу поступка или којима надлежни орган / организација доставља неопходне податке током спровођења поступка. Описати активности сваког органа/ организације.</span>
                    </div>
                    <div class="col-lg-1">
                    </div>  
                        </div>



                         <div class="row">
                        <div class="col-lg-10"></div>
                    <div class="col-lg-2">
                        <input class="button-add" id = "removev10" type="button" value="Уклони" >
                                
                                </div>
                            </div>
                            <hr>
                      <div class="row">
                        <div class="col-lg-2">
                  <input class="button-remove" id = "dodajv10" type="button" value="Додај">
                     
                </div>
                </div>


                </div>

</div>
</div>
</section>
                    <section id="section_D">
                    <div class="row">
                		<div class="col-lg-12" style="text-align:center" id = "tooltip1">
                             <h2><span class="text" >Г. Потребна документација</span></h2>
                             <span class="tooltiptext" id = "tooltiptext1">У овом делу, потребно је навести сва појединачна документа, односно доказе, које је подносилац захтева у обавези да достави надлежном органу / организацији, приликом подношења захтева или у току спровођења административног поступка. Наводе се сва документа, која се у пракси потражују од подносиоца захтева, без обзира да ли су јасно дефинисана прописом или не (опција „Додај документ“).</span>

                            
                            
                        </div>
                	</div>


<div id = "g1">
                    <div class="d">

                    <div class="row">
                		<div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                		</div>
                		
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>

                            
                		</div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                		
                		<div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>

                        
                                                        
                		</div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>

                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>

                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije[]" id="izbor1g1" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije[]" id="izbor2g1" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g1" name="pribavljanjePoSlDuz[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g1" name="pribavljanjePoSlDuz[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g1" name="pribavljanjePoSlDuz[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g1" name="pribavljanjePoSlDuz[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>

                       


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg1" type="button" value="Додај документ">
                 </div>

                        </div> 

                        
              </div>
                <br id = "razmakg1" >

          </div>


          <div id = "g2" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument2"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument2"></textarea></br>
                             <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument2"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument2"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument2[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument2[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument2[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument2[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije2[]" id="izbor1g2" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije2[]" id="izbor2g2" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g2" name="pribavljanjePoSlDuz2[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g2" name="pribavljanjePoSlDuz2[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g2" name="pribavljanjePoSlDuz2[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g2" name="pribavljanjePoSlDuz2[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig2" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg2" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg2" hidden = "">

                <div id = "g3" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument3"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>

                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument3"></textarea></br>
                             <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument3"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument3"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument3[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument3[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument3[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument3[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije3[]" id="izbor1g3" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije3[]" id="izbor2g3" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g3" name="pribavljanjePoSlDuz3[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g3" name="pribavljanjePoSlDuz3[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g3" name="pribavljanjePoSlDuz3[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g3" name="pribavljanjePoSlDuz3[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig3" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg3" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg3" hidden = "">

                <div id = "g4" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument4"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument4"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument4"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument4"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument4[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument4[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument4[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument4[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije4[]" id="izbor1g4" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije4[]" id="izbor2g4" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g4" name="pribavljanjePoSlDuz4[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g4" name="pribavljanjePoSlDuz4[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g4" name="pribavljanjePoSlDuz4[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g4" name="pribavljanjePoSlDuz4[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig4" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg4" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg4" hidden = "">

                <div id = "g5" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument5"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument5"></textarea></br>
                             <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument5"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument5"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument5[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument5[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument5[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument5[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije5[]" id="izbor1g5" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije5[]" id="izbor2g5" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g5" name="pribavljanjePoSlDuz5[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g5" name="pribavljanjePoSlDuz5[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g5" name="pribavljanjePoSlDuz5[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g5" name="pribavljanjePoSlDuz5[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig5" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg5" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg5"hidden = "">


                   <div id = "g6" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument6"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument6"></textarea></br>
                             <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument6"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument6"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument6[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument6[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument6[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument6[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije6[]" id="izbor1g6" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije6[]" id="izbor2g6" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g6" name="pribavljanjePoSlDuz6[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g6" name="pribavljanjePoSlDuz6[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g6" name="pribavljanjePoSlDuz6[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g6" name="pribavljanjePoSlDuz6[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig6" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg6" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg6" hidden = "">

                <div id = "g7" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument7"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument7"></textarea></br>
                             <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument7"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument7"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument7[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument7[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument7[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument7[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije7[]" id="izbor1g7" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije7[]" id="izbor2g7" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g7" name="pribavljanjePoSlDuz7[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g7" name="pribavljanjePoSlDuz7[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g7" name="pribavljanjePoSlDuz7[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g7" name="pribavljanjePoSlDuz7[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig7" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg7" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg7" hidden = "">


                    <div id = "g8" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument8"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument8"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument8"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument8"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument8[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument8[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument8[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument8[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije8[]" id="izbor1g8" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije8[]" id="izbor2g8" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g8" name="pribavljanjePoSlDuz8[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g8" name="pribavljanjePoSlDuz8[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g8" name="pribavljanjePoSlDuz8[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g8" name="pribavljanjePoSlDuz8[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig8" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg8" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg8" hidden = "">

                 <div id = "g9" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument9"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument9"></textarea></br>
                             <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument9"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument9"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument9[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument9[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument9[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument9[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije9[]" id="izbor1g9" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije9[]" id="izbor2g9" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g9" name="pribavljanjePoSlDuz9[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g9" name="pribavljanjePoSlDuz9[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g9" name="pribavljanjePoSlDuz9[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g9" name="pribavljanjePoSlDuz9[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig9" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg9" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg9" hidden = "">



                     <div id = "g10" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument10"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument10"></textarea></br>
                             <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument10"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument10"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument10[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument10[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument10[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument10[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije10[]" id="izbor1g10" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije10[]" id="izbor2g10" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g10" name="pribavljanjePoSlDuz10[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g10" name="pribavljanjePoSlDuz10[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g10" name="pribavljanjePoSlDuz10[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g10" name="pribavljanjePoSlDuz10[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig10" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg10" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg10" hidden = "">


                 <div id = "g11" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument11"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument11"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument11"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument11"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument11[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument11[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument11[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument11[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije11[]" id="izbor1g11" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije11[]" id="izbor2g11" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g11" name="pribavljanjePoSlDuz11[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g11" name="pribavljanjePoSlDuz11[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g11" name="pribavljanjePoSlDuz11[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g11" name="pribavljanjePoSlDuz11[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig11" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg11" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg11" hidden = "">


                     <div id = "g12" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument12"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument12"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument12"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument12"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument12[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument12[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument12[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument12[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije12[]" id="izbor1g12" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije12[]" id="izbor2g12" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g12" name="pribavljanjePoSlDuz12[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g12" name="pribavljanjePoSlDuz12[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g12" name="pribavljanjePoSlDuz12[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g12" name="pribavljanjePoSlDuz12[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig12" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg12" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg12" hidden = "">


  <div id = "g13" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument13"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument13"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument13"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument13"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument13[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument13[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument13[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument13[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije13[]" id="izbor1g13" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije13[]" id="izbor2g13" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g13" name="pribavljanjePoSlDuz13[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g13" name="pribavljanjePoSlDuz13[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g13" name="pribavljanjePoSlDuz13[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g13" name="pribavljanjePoSlDuz13[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig13" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg13" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg13" hidden = "">


 <div id = "g14" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument14"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument14"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument14"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument14"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument14[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument14[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument14[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument14[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije14[]" id="izbor1g14" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije14[]" id="izbor2g14" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g14" name="pribavljanjePoSlDuz14[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g14" name="pribavljanjePoSlDuz14[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g14" name="pribavljanjePoSlDuz14[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g14" name="pribavljanjePoSlDuz14[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig14" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg14" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg14" hidden = "">

 <div id = "g15" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument15"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument15"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument15"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument15"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument15[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument15[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument15[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument15[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije15[]" id="izbor1g15" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije15[]" id="izbor2g15" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g15" name="pribavljanjePoSlDuz15[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g15" name="pribavljanjePoSlDuz15[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g15" name="pribavljanjePoSlDuz15[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g15" name="pribavljanjePoSlDuz15[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig15" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg15" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg15" hidden = "">


 <div id = "g16" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument16"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument16"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument16"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument16"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument16[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument16[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument16[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument16[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije16[]" id="izbor1g16" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije16[]" id="izbor2g16" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g16" name="pribavljanjePoSlDuz16[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g16" name="pribavljanjePoSlDuz16[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g16" name="pribavljanjePoSlDuz16[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g16" name="pribavljanjePoSlDuz16[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig16" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg16" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg16" hidden = "">


 <div id = "g17" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument17"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument17"></textarea></br>
                           <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument17"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument17"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument17[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument17[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument17[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument17[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije17[]" id="izbor1g17" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije17[]" id="izbor2g17" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g17" name="pribavljanjePoSlDuz17[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g17" name="pribavljanjePoSlDuz17[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g17" name="pribavljanjePoSlDuz17[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g17" name="pribavljanjePoSlDuz17[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig17" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg17" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg17" hidden = "">

 <div id = "g18" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument18"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument18"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument18"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument18"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument18[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument18[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument18[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument18[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije18[]" id="izbor1g18" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije18[]" id="izbor2g18" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g18" name="pribavljanjePoSlDuz18[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g18" name="pribavljanjePoSlDuz18[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g18" name="pribavljanjePoSlDuz18[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g18" name="pribavljanjePoSlDuz18[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig18" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg18" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg18" hidden = "">

 <div id = "g19" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument19"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                             
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument19"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument19"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument19"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument19[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument19[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument19[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument19[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije19[]" id="izbor1g19" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije19[]" id="izbor2g19" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g19" name="pribavljanjePoSlDuz19[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g19" name="pribavljanjePoSlDuz19[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g19" name="pribavljanjePoSlDuz19[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g19" name="pribavljanjePoSlDuz19[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig19" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg19" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg19" hidden = "">

 <div id = "g20" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument20"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument20"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument20"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument20"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument20[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument20[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument20[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument20[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije20[]" id="izbor1g20" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije20[]" id="izbor2g20" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g20" name="pribavljanjePoSlDuz20[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g20" name="pribavljanjePoSlDuz20[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g20" name="pribavljanjePoSlDuz20[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g20" name="pribavljanjePoSlDuz20[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig20" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg20" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg20" hidden = "">

<div id = "g21" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument21"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument21"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument21"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument21"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument21[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument21[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument21[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument21[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije21[]" id="izbor1g21" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije21[]" id="izbor2g21" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g21" name="pribavljanjePoSlDuz21[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g21" name="pribavljanjePoSlDuz21[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g21" name="pribavljanjePoSlDuz21[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g21" name="pribavljanjePoSlDuz21[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig21" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg21" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg21" hidden = "">

<div id = "g22" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument22"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument22"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument22"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument22"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument22[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument22[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument22[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument22[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije22[]" id="izbor1g22" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije22[]" id="izbor2g22" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g22" name="pribavljanjePoSlDuz22[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g22" name="pribavljanjePoSlDuz22[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g22" name="pribavljanjePoSlDuz22[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g22" name="pribavljanjePoSlDuz22[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig22" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg22" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg22" hidden = "">

<div id = "g23" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument23"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument23"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument23"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument23"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument23[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument23[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument23[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument23[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije23[]" id="izbor1g23" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije23[]" id="izbor2g23" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g23" name="pribavljanjePoSlDuz23[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g23" name="pribavljanjePoSlDuz23[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g23" name="pribavljanjePoSlDuz23[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g23" name="pribavljanjePoSlDuz23[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig23" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg23" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg23" hidden = "">

<div id = "g24" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument24"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument24"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument24"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument24"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument2425[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument2425[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument2425[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument2425[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije2425[]" id="izbor1g24" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije2425[]" id="izbor2g24" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g24" name="pribavljanjePoSlDuz2425[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g24" name="pribavljanjePoSlDuz2425[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g24" name="pribavljanjePoSlDuz2425[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g24" name="pribavljanjePoSlDuz2425[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig24" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg24" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg24" hidden = "">

<div id = "g25" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument25"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument25"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument25"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument25"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument25[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument25[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument25[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument25[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije25[]" id="izbor1g25" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije25[]" id="izbor2g25" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g25" name="pribavljanjePoSlDuz25[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g25" name="pribavljanjePoSlDuz25[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g25" name="pribavljanjePoSlDuz25[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g25" name="pribavljanjePoSlDuz25[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig25" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg25" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg25" hidden = "">

<div id = "g26" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument26"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument26"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument26"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument26"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument26[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument26[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument26[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument26[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije26[]" id="izbor1g26" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije26[]" id="izbor2g26" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g26" name="pribavljanjePoSlDuz26[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g26" name="pribavljanjePoSlDuz26[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g26" name="pribavljanjePoSlDuz26[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g26" name="pribavljanjePoSlDuz26[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig26" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg26" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg26" hidden = "">

<div id = "g27" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument27"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument27"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument27"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument27"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument27[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument27[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument27[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument27[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije27[]" id="izbor1g27" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije27[]" id="izbor2g27" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g27" name="pribavljanjePoSlDuz27[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g27" name="pribavljanjePoSlDuz27[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g27" name="pribavljanjePoSlDuz27[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g27" name="pribavljanjePoSlDuz27[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig27" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg27" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg27" hidden = "">

<div id = "g28" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument28"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument28"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument28"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument28"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument28[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument28[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument28[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument28[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije28[]" id="izbor1g28" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije28[]" id="izbor2g28" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g28" name="pribavljanjePoSlDuz28[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g28" name="pribavljanjePoSlDuz28[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g28" name="pribavljanjePoSlDuz28[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g28" name="pribavljanjePoSlDuz28[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig28" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg28" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg28" hidden = "">

<div id = "g29" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument29"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument29"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument29"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument29"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument29[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument29[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument29[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument29[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije29[]" id="izbor1g29" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije29[]" id="izbor2g29" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g29" name="pribavljanjePoSlDuz29[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g29" name="pribavljanjePoSlDuz29[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g29" name="pribavljanjePoSlDuz29[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g29" name="pribavljanjePoSlDuz29[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig29" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg29" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
<br id = "razmakg29" hidden = "">

<div id = "g30" hidden = "">
                    <div class="d">

                    <div class="row">
                        <div class="col-lg-1">
                          <span class="labelBrojevi">г1.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Назив документа:</span>
                            <br></br><textarea data-autoresize name="nazivDokument30"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Наводи се пун назив документа-доказа, који је истакнут на самом документу-доказу. Нпр. уколико је у одређеном административном поступку потребно доставити доказ о положеном државном испиту, наводи се: „Уверење о положеном државном стручном испиту по програму за високо образовање“. Уколико се за различите категорије потражују различита документа, потребно је сваки посебно навести, уз прецизирање категорије на коју се односи (следи опис у следећој тачки).</span>
                            
                        </div>
                        </div>

                        <div class="row">
                        

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г2.</span>
                        </div>
                        
                        <div class="col-lg-11" id = "tooltip6">
                            
                            <span class="labelNazivi">Категорије или услови за које се тражи документ</span>
                            <br></br><textarea data-autoresize name="usloviDokument30"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уносе све специфичне напомене (о категоријама, условима и слично), које се односе на конкретан документ, као што су: <br>
•   врсте подносилаца захтева, на које се односи документ (навести нпр. „Само за предузетнике“);<br>
•   услов старости документа до 6 месеци (навести нпр. „Документ стар не више од 6 месеци“);<br>
•   број примерака документа.
</span>
                        
                                                        
                        </div>
                        
                        </div>

                        <div class="row">
                        <div class="col-lg-1">
                        <span class="labelBrojevi">г3.</span>
                        </div>                        
                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Издавалац документа</span>
                            <br></br><textarea data-autoresize name="izdavalacDokument30"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу се наводи назив органа или организације, која поменути документ издаје. На пример, у случају када орган/организација, који/аспроводи поступак, захтева достављање Потврде о измиреним пореским обавезама, у овој колони се наводи „Пореска управа – Министарство финансија“). У овом пољу је потребно навести пун назив органа или организације, који/а је надлежан/на за издавање документа, не само акрониме.</span>
                            
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-lg-1">
                        <span class="labelBrojevi">г4.</span>
                        </div>

                        <div class="col-lg-11" id = "tooltip6">
                        <span class="labelNazivi">Који подаци из документа се користе за спровођење администрaтивног поступка</span>
                            <br></br><textarea data-autoresize name="podaciDokument30"></textarea></br>
                            <span class="tooltiptext" id = "tooltiptext1">Потребно је навести који су подаци у конкретном документу неопходни за спровођење административног поступка. На пример, ако је у административном поступку потребно доставити Решење о регистрацији друштва, које служи за утврђивање висине оснивачког капитала, у пољу је потребно навести само „Висина оснивачког капитала“. </span>
                            
                        </div>

                        </div>

                    <div class="row">
                    <div class="col-lg-1">
                        <span class="labelBrojevi">г5.</span>
                        </div>                   
                    <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Форма документа:</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument30[]" value="Оригинал">Оригинал</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument30[]" value="Копија">Копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument30[]" value="Оверена копија">Оверена копија</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="formaDokument30[]" value="Копија уз оригинал на увид">Копија уз оригинал на увид</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција, којом се утврђује форма у којој се документ доставља надлежном органу / организацији, тј. да ли је потребно доставити оригинал, копију, оверену копију или се документ доставља у копији, уз оригинал на увид. У случају да је могуће алтернативно достављање различитих форми (примера ради: оригинал или оверена копија), потребно је обележити све могуће форме.</span>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-1">
                        <span class="labelBrojevi">г6.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip6">
                            <span class="labelNazivi">Начин прибављања документа</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije30[]" id="izbor1g30" value="Подносилац захтева">Подносилац захтева</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="pribavljanjeDokumentacije30[]" id="izbor2g30" value="Орган по службеној дужности:">Орган по службеној дужности:</label>
                            </div>
                            
                            
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-11" >
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor3g30" name="pribavljanjePoSlDuz30[]" disabled="">Eлектронски увид</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor4g30" name="pribavljanjePoSlDuz30[]" disabled="">Електронски допис</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor5g30" name="pribavljanjePoSlDuz30[]" disabled="">Редовна пошта</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="izbor6g30" name="pribavljanjePoSlDuz30[]" disabled="">Други начин</label>
                            </div>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У овом пољу означити, пре свега, да ли документ прилаже подносилац захтева или га надлежни орган прибавља од других органа / организација, по службеној дужности. Уколико се документ у пракси прибавља по службеној дужности, потребно је означити на који начин надлежни орган прибавља потребни документ (електронски увид, електронски допис, редовна пошта, други начин).</span>

                            </div>
                       
</div>


                                        <div class="row">
                                   <div class="col-lg-10"></div>
                 <div class="col-lg-2" id = "child1">
                <input id="uklonig30" type="button" value="Уклони"> 
                </div>
            </div>
                        <hr>
                            <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajg30" type="button" value="Додај документ">
                 </div>
              
                        </div> 
                        
              </div>
          </div>
          </section>
<br id = "razmakg30" hidden = "">

<div id = "d1">

                    <section id="section_E">
                    <div class="row">
                        <div class="col-lg-12" style="text-align:center">
                             <h2><span class="text" >Д. Финансијски издаци подносиоца захтева</span></h2>
                        </div>
                    
                </div>
                    <div class="e">
                     <div class="row"> 
                        <div class="col-lg-1">
                        <span class="labelBrojevi">д1.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">                    
                            <span class="labelNazivi" >Врста издатака</span>
                            <br></br><select class="form-control" name="vrstaIzdatka1">
                            <option value="" disabled selected hidden>Изаберите</option>
                                <option value="one">Републичка административна такса</option>
                                <option value="Накнада">Накнада</option>
                                <option value="Допринос">Допринос</option>
                                <option value="Друго">Друго</option>
                            </select>
                        <span class="tooltiptext" id = "tooltiptext1">У зависности од тога да ли је подносилац захтева обавезан да плати републичку административну таксу, накнаду, допринос или друго, из падајућег менија се бира једна од понуђених опција. Уколико постоји више врста издатака, уноси се свака врста појединачно (опција „Додај издатак“ на крају одељка Д).</span>

                    </div> 
                    </div>
                  
                  <div class="row"> 
                       <div class="col-lg-1">
                        <span class="labelBrojevi">д2.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">
                                <span class="labelNazivi">Пун назив издатка </span>
                                <br></br><textarea data-autoresize name="punNazivIzdatka1"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се назив финансијског издатка (нпр. накнада за регистрацију предузетника, републичка административна такса за решење, допринос за уређивање грађевинског земљишта и сл.).</span>


                    </div>
                  </div>

                 <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">д3.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Нaзив прописа, кojим се утврђуjе издатак и број службеног гласила</span>
                           <br><br>


                                    
                                    <select id="result11" name="nazivPropisa11" data-placeholder="Изаберите..." class="chosen-select" style="width: 100%" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>                          

                         

                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">д4.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                        <textarea data-autoresize id="opis" name="opisPropisIzdatak1"></textarea>
                        <br>
                                          
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl11">
                <input type="text" class="form-control fajl11-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl11-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl11-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl11-input-title">Додај датотеку</span>
                        <input type="file" name="d_fajl1" accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>

                        </div>
                        
                    </div>


                       <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д5.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Члан/ови прописа којим/а се утврђује издатак</span>
                                <br></br><input type="text" id="d51" class='form-control' name="clanPropisIzdatak1" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси/е се члан/ови прописа, којим/а се дефинише овај финансијски издатак. </span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д6.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Тарифни број/еви</span>
                                <br></br><input type="text" id="d61" class='form-control' name="tarifniBroj1" ></br>
                                 <span class="tooltiptext" id = "tooltiptext1">Уноси се сви тарифни бројеви, ако постоје.</span>


                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д7.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Износ (РСД)</span>
                                        <textarea data-autoresize name="iznos1"></textarea></br>
                                        <span class="tooltiptext" id = "tooltiptext1">Уноси се тачан износ издатка у РСД. Ако је износ процентуално дефинисан,  навести како се одређује тај износ. Уколико за различите категорије постоје различити износи издатака, навести све износе, уз образложење на коју категорију се који износ односи.</span>


                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д8.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Сврха плаћања</span>
                                <br></br><textarea data-autoresize id="opis" name="svrhaPlacanja1"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Навести сврху плаћања, коју подносилац захтева уноси у уплатницу.</span>


                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д9.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Прималац</span>
                                <br></br><textarea data-autoresize id="opis" name="primalac1"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси назив примаоца и адреса, које је потребно унети у уплатницу.</span>


                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д10.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Број рачуна за уплату</span> <!-- Tri polja za racun -->
                                <br></br><input type="text" id="d101" class='form-control' name="brojRacuna1" ></br>
                            <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси број рачуна за уплату, који је потребно унети у уплатницу.</span>


                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д11.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Позив на број</span> <!-- Dva polja -->
                                <br></br><input type="text" id="d111" class='form-control' name="pozivNaBroj1" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси позив на број (уколико постоји), који је потребно унети у уплатницу.</span>


                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д12.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Коментар (ослобођења од издатака, друге специфичности од значаја)</span>
                                <br></br><textarea data-autoresize name="komentarIzdatak1"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље је потребно унети напомену о било којим специфичностима овог издатка, које могу укључивати ослобођење појединих подносилаца од плаћања и сл.</span>

                </div>
                
</div>
                     <div class="row">
                                   <div class="col-lg-10"></div>
                <div class="col-lg-2" id = "child1">
                </div>
            </div>
                        <hr>
                <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajd1" type="button" value="Додај издатак" onclick="d2_show()">
                </div>

</div>
</div>
<br></br>
</div>

<div id = "d2">

                    <div class="e">
                     <div class="row"> 
                        <div class="col-lg-1">
                        <span class="labelBrojevi">д1.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">                    
                            <span class="labelNazivi">Врста издатака</span>
                            <br></br><select class="form-control" name="vrstaIzdatka2">
                            <option value="" disabled selected hidden>Изаберите</option>
                                <option value="one">Републичка административна такса</option>
                                <option value="Накнада">Накнада</option>
                                <option value="Допринос">Допринос</option>
                                <option value="Друго">Друго</option>
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога да ли је подносилац захтева обавезан да плати републичку административну таксу, накнаду, допринос или друго, из падајућег менија се бира једна од понуђених опција. Уколико постоји више врста издатака, уноси се свака врста појединачно (опција „Додај издатак“ на крају одељка Д).</span>

                    </div> 
                    </div>
                  
                  <div class="row"> 
                       <div class="col-lg-1">
                        <span class="labelBrojevi">д2.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">
                                <span class="labelNazivi">Пун назив издатка </span>
                                <br></br><textarea data-autoresize name="punNazivIzdatka2"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се назив финансијског издатка (нпр. накнада за регистрацију предузетника, републичка административна такса за решење, допринос за уређивање грађевинског земљишта и сл.).</span>
                    </div>
                  </div>

                 <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">д3.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Нaзив прописа, кojим се утврђуjе издатак и број службеног гласилаа</span>
                           <br><br>


                                    <select id="result12" name="nazivPropisa12" data-placeholder="Изаберите..." class="chosen-select" style="width: 100%" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>   

                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">д4.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                        <br></br><input type="text" id="d52" class='form-control' name="clanPropisIzdatak2" ></br>
                        <br>
                                         
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl12">
                <input type="text" class="form-control fajl12-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl12-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl12-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl12-input-title">Додај датотеку</span>
                        <input type="file" name="d_fajl2"  accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>

                        </div>
                        
                    </div>                       

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д5.</span>
                    </div>
                            <div class="col-lg-11">
                            <span class="labelNazivi">Члан/ови прописа којим/а се утврђује издатак</span>
                                <br></br><input type="text" class='form-control' name="clanPropisIzdatak2" ></br>

                            </div>
                            </div>

                    

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д6.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Тарифни број/еви</span>
                                <br></br><input type="text" id="d62" class='form-control' name="tarifniBroj2" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се сви тарифни бројеви, ако постоје.</span>


                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д7.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Износ (РСД)</span>
                                        <textarea data-autoresize name="iznos2"></textarea></br>
                                        <span class="tooltiptext" id = "tooltiptext1">Уноси се тачан износ издатка у РСД. Ако је износ процентуално дефинисан,  навести како се одређује тај износ. Уколико за различите категорије постоје различити износи издатака, навести све износе, уз образложење на коју категорију се који износ односи.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д8.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Сврха плаћања</span>
                                <br></br><textarea data-autoresize id="opis" name="svrhaPlacanja2"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Навести сврху плаћања, коју подносилац захтева уноси у уплатницу.</span>


                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д9.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Прималац</span>
                                <br></br><textarea data-autoresize id="opis" name="primalac2"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси назив примаоца и адреса, које је потребно унети у уплатницу.</span>


                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д10.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Број рачуна за уплату</span> <!-- Tri polja za racun -->
                                <br></br><input type="text" id="d102" class='form-control' name="brojRacuna2" ></br>
                                 <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси број рачуна за уплату, који је потребно унети у уплатницу.</span>


                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д11.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Позив на број</span> <!-- Dva polja -->
                                <br></br><input type="text" id="d112" class='form-control' name="pozivNaBroj2" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси позив на број (уколико постоји), који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д12.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Коментар (ослобођења од издатака, друге специфичности од значаја)</span>
                                <br></br><textarea data-autoresize name="komentarIzdatak2"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље је потребно унети напомену о било којим специфичностима овог издатка, које могу укључивати ослобођење појединих подносилаца од плаћања и сл.</span>

                </div>
                

</div>


                     <div class="row">
                                   <div class="col-lg-10"></div>
                <div class="col-lg-2" id = "child1">
                <input id="uklonid2" type="button" value="Уклони" onclick="d2_hide()"> 
                </div>
            </div>
                        <hr>
                <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajd2" type="button" value="Додај издатак" onclick="d3_show()">
                </div>

</div>
</div>

<br></br>
</div>


                <div id = "d3">

                    <div class="e">
                     <div class="row"> 
                        <div class="col-lg-1">
                        <span class="labelBrojevi">д1.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">                    
                            <span class="labelNazivi">Врста издатака</span>
                            <br></br><select class="form-control" name="vrstaIzdatka3">
                            <option value="" disabled selected hidden>Изаберите</option>
                                <option value="one">Републичка административна такса</option>
                                <option value="Накнада">Накнада</option>
                                <option value="Допринос">Допринос</option>
                                <option value="Друго">Друго</option>
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога да ли је подносилац захтева обавезан да плати републичку административну таксу, накнаду, допринос или друго, из падајућег менија се бира једна од понуђених опција. Уколико постоји више врста издатака, уноси се свака врста појединачно (опција „Додај издатак“ на крају одељка Д).</span>

                    </div> 
                    </div>
                  
                  <div class="row"> 
                       <div class="col-lg-1">
                        <span class="labelBrojevi">д2.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">
                                <span class="labelNazivi">Пун назив издатка </span>
                                <br></br><textarea data-autoresize name="punNazivIzdatka3"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се назив финансијског издатка (нпр. накнада за регистрацију предузетника, републичка административна такса за решење, допринос за уређивање грађевинског земљишта и сл.).</span>
                    </div>
                  </div>

                 <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">д3.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Нaзив прописа, кojим се утврђуjе издатак и број службеног гласила</span>
                           <br><br>


                                    <select id="result13" name="nazivPropisa13" data-placeholder="Изаберите..." class="chosen-select" style="width: 100%" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>  
                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">д4.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                        <br></br><input type="text" id="d53" class='form-control' name="clanPropisIzdatak3" ></br>
                        <br>
                                          
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl13">
                <input type="text" class="form-control fajl13-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl13-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl13-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl13-input-title">Додај датотеку</span>
                        <input type="file"  name="d_fajl3"  accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>

                        </div>
                        
                    </div>                        

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д5.</span>
                    </div>
                            <div class="col-lg-11">
                            <span class="labelNazivi">Члан/ови прописа којим/а се утврђује издатак</span>
                                <br></br><input type="text" class='form-control' name="clanPropisIzdatak3" ></br>

                            </div>
                            </div>

                    

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д6.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Тарифни број/еви</span>
                                <br></br><input type="text" id="d63" class='form-control' name="tarifniBroj3" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се сви тарифни бројеви, ако постоје.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д7.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Износ (РСД)</span>
                                        <textarea data-autoresize name="iznos3"></textarea></br>
                                        <span class="tooltiptext" id = "tooltiptext1">Уноси се тачан износ издатка у РСД. Ако је износ процентуално дефинисан,  навести како се одређује тај износ. Уколико за различите категорије постоје различити износи издатака, навести све износе, уз образложење на коју категорију се који износ односи.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д8.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Сврха плаћања</span>
                                <br></br><textarea data-autoresize id="opis" name="svrhaPlacanja3"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Навести сврху плаћања, коју подносилац захтева уноси у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д9.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Прималац</span>
                                <br></br><textarea data-autoresize id="opis" name="primalac3"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси назив примаоца и адреса, које је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д10.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Број рачуна за уплату</span> <!-- Tri polja za racun -->
                                <br></br><input type="text" id="d103" class='form-control' name="brojRacuna3" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси број рачуна за уплату, који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д11.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Позив на број</span> <!-- Dva polja -->
                                <br></br><input type="text" id="d113" class='form-control' name="pozivNaBroj3" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси позив на број (уколико постоји), који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д12.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Коментар (ослобођења од издатака, друге специфичности од значаја)</span>
                                <br></br><textarea data-autoresize name="komentarIzdatak3"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље је потребно унети напомену о било којим специфичностима овог издатка, које могу укључивати ослобођење појединих подносилаца од плаћања и сл.</span>

                </div>
                

</div>


                     <div class="row">
                                   <div class="col-lg-10"></div>
                <div class="col-lg-2" id = "child1">
                <input id="uklonid3" type="button" value="Уклони" onclick="d3_hide()"> 
                </div>
            </div>
                        <hr>
                <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajd3" type="button" value="Додај издатак" onclick="d4_show()">
                </div>

</div>
</div>

<br></br>
</div>

             <div id = "d4">

                    <div class="e">
                     <div class="row"> 
                        <div class="col-lg-1">
                        <span class="labelBrojevi">д1.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">                    
                            <span class="labelNazivi">Врста издатака</span>
                            <br></br><select class="form-control" name="vrstaIzdatka4">
                            <option value="" disabled selected hidden>Изаберите</option>
                                <option value="one">Републичка административна такса</option>
                                <option value="Накнада">Накнада</option>
                                <option value="Допринос">Допринос</option>
                                <option value="Друго">Друго</option>
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога да ли је подносилац захтева обавезан да плати републичку административну таксу, накнаду, допринос или друго, из падајућег менија се бира једна од понуђених опција. Уколико постоји више врста издатака, уноси се свака врста појединачно (опција „Додај издатак“ на крају одељка Д).</span>

                    </div> 
                    </div>
                  
                  <div class="row"> 
                       <div class="col-lg-1">
                        <span class="labelBrojevi">д2.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">
                                <span class="labelNazivi">Пун назив издатка </span>
                                <br></br><textarea data-autoresize name="punNazivIzdatka4"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се назив финансијског издатка (нпр. накнада за регистрацију предузетника, републичка административна такса за решење, допринос за уређивање грађевинског земљишта и сл.).</span>
                    </div>
                  </div>

                 <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">д3.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Нaзив прописа, кojим се утврђуjе издатак и број службеног гласила</span>
                           <br><br>


                                    <select id="result14" name="nazivPropisa14" data-placeholder="Изаберите..." class="chosen-select" style="width: 100%" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>      

                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">д4.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                        <br></br><input type="text" id="d54" class='form-control' name="clanPropisIzdatak4" ></br>
                        <br>
                                         
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl14">
                <input type="text" class="form-control fajl14-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl14-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl14-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl14-input-title">Додај датотеку</span>
                        <input type="file"  name="d_fajl4"  accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
   
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>

                        </div>
                        
                    </div>                     

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д5.</span>
                    </div>
                            <div class="col-lg-11">
                            <span class="labelNazivi">Члан/ови прописа којим/а се утврђује издатак</span>
                                <br></br><input type="text" class='form-control' name="clanPropisIzdatak4" ></br>

                            </div>
                            </div>

                    

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д6.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Тарифни број/еви</span>
                                <br></br><input type="text" id="d64" class='form-control' name="tarifniBroj4" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се сви тарифни бројеви, ако постоје.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д7.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Износ (РСД)</span>
                                        <textarea data-autoresize name="iznos4"></textarea></br>
                                        <span class="tooltiptext" id = "tooltiptext1">Уноси се тачан износ издатка у РСД. Ако је износ процентуално дефинисан,  навести како се одређује тај износ. Уколико за различите категорије постоје различити износи издатака, навести све износе, уз образложење на коју категорију се који износ односи.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д8.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Сврха плаћања</span>
                                <br></br><textarea data-autoresize id="opis" name="svrhaPlacanja4"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Навести сврху плаћања, коју подносилац захтева уноси у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д9.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Прималац</span>
                                <br></br><textarea data-autoresize id="opis" name="primalac4"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси назив примаоца и адреса, које је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д10.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Број рачуна за уплату</span> <!-- Tri polja za racun -->
                                <br></br><input type="text" id="d104" class='form-control' name="brojRacuna4" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси број рачуна за уплату, који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д11.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Позив на број</span> <!-- Dva polja -->
                                <br></br><input type="text" id="d114" class='form-control' name="pozivNaBroj4" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси позив на број (уколико постоји), који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д12.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Коментар (ослобођења од издатака, друге специфичности од значаја)</span>
                                <br></br><textarea data-autoresize name="komentarIzdatak4"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље је потребно унети напомену о било којим специфичностима овог издатка, које могу укључивати ослобођење појединих подносилаца од плаћања и сл.</span>

                </div>
                

</div>


                     <div class="row">
                                   <div class="col-lg-10"></div>
                <div class="col-lg-2" id = "child1">
                <input id="uklonid4" type="button" value="Уклони" onclick="d4_hide()"> 
                </div>
            </div>
                        <hr>
                <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajd4" type="button" value="Додај издатак" onclick="d5_show()">
                </div>

</div>
</div>

<br></br>
</div>


            <div id = "d5">

                    <div class="e">
                     <div class="row"> 
                        <div class="col-lg-1">
                        <span class="labelBrojevi">д1.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">                    
                            <span class="labelNazivi">Врста издатака</span>
                            <br></br><select class="form-control" name="vrstaIzdatka5">
                            <option value="" disabled selected hidden>Изаберите</option>
                                <option value="one">Републичка административна такса</option>
                                <option value="Накнада">Накнада</option>
                                <option value="Допринос">Допринос</option>
                                <option value="Друго">Друго</option>
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога да ли је подносилац захтева обавезан да плати републичку административну таксу, накнаду, допринос или друго, из падајућег менија се бира једна од понуђених опција. Уколико постоји више врста издатака, уноси се свака врста појединачно (опција „Додај издатак“ на крају одељка Д).</span>

                    </div> 
                    </div>
                  
                  <div class="row"> 
                       <div class="col-lg-1">
                        <span class="labelBrojevi">д2.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">
                                <span class="labelNazivi">Пун назив издатка </span>
                                <br></br><textarea data-autoresize name="punNazivIzdatka5"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се назив финансијског издатка (нпр. накнада за регистрацију предузетника, републичка административна такса за решење, допринос за уређивање грађевинског земљишта и сл.).</span>
                    </div>
                  </div>

                 <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">д3.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Нaзив прописа, кojим се утврђуjе издатак и број службеног гласила</span>
                           <br><br>



                                    <select id="result15" name="nazivPropisa15" data-placeholder="Изаберите..." class="chosen-select" style="width: 100%" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      
                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>   

                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">д4.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                        <br></br><input type="text" id="d55" class='form-control' name="clanPropisIzdatak5" ></br>
                        <br>
                                          
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl15">
                <input type="text" class="form-control fajl15-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl15-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl15-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl15-input-title">Додај датотеку</span>
                        <input type="file"  name="d_fajl5"  accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>

                        </div>
                        
                    </div>                        

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д5.</span>
                    </div>
                            <div class="col-lg-11">
                            <span class="labelNazivi">Члан/ови прописа којим/а се утврђује издатак</span>
                                <br></br><input type="text" class='form-control' name="clanPropisIzdatak5" ></br>

                            </div>
                            </div>

                    

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д6.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Тарифни број/еви</span>
                                <br></br><input type="text" id="d65" class='form-control' name="tarifniBroj5" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се сви тарифни бројеви, ако постоје.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д7.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Износ (РСД)</span>
                                        <textarea data-autoresize name="iznos5"></textarea></br>
                                        <span class="tooltiptext" id = "tooltiptext1">Уноси се тачан износ издатка у РСД. Ако је износ процентуално дефинисан,  навести како се одређује тај износ. Уколико за различите категорије постоје различити износи издатака, навести све износе, уз образложење на коју категорију се који износ односи.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д8.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Сврха плаћања</span>
                                <br></br><textarea data-autoresize id="opis" name="svrhaPlacanja5"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Навести сврху плаћања, коју подносилац захтева уноси у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д9.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Прималац</span>
                                <br></br><textarea data-autoresize id="opis" name="primalac5"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси назив примаоца и адреса, које је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д10.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Број рачуна за уплату</span> <!-- Tri polja za racun -->
                                <br></br><input type="text" id="d105" class='form-control' name="brojRacuna5" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси број рачуна за уплату, који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д11.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Позив на број</span> <!-- Dva polja -->
                                <br></br><input type="text" id="d115" class='form-control' name="pozivNaBroj5" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси позив на број (уколико постоји), који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д12.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Коментар (ослобођења од издатака, друге специфичности од значаја)</span>
                                <br></br><textarea data-autoresize name="komentarIzdatak5"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље је потребно унети напомену о било којим специфичностима овог издатка, које могу укључивати ослобођење појединих подносилаца од плаћања и сл.</span>

                </div>
                

</div>


                     <div class="row">
                                   <div class="col-lg-10"></div>
                <div class="col-lg-2" id = "child1">
                <input id="uklonid5" type="button" value="Уклони" onclick="d5_hide()"> 
                </div>
            </div>
                        <hr>
                <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajd5" type="button" value="Додај издатак" onclick="d6_show()">
                </div>

</div>
</div>

<br></br>
</div>

                <div id = "d6">

                    <div class="e">
                     <div class="row"> 
                        <div class="col-lg-1">
                        <span class="labelBrojevi">д1.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">                    
                            <span class="labelNazivi">Врста издатака</span>
                            <br></br><select class="form-control" name="vrstaIzdatka6">
                            <option value="" disabled selected hidden>Изаберите</option>
                                <option value="one">Републичка административна такса</option>
                                <option value="Накнада">Накнада</option>
                                <option value="Допринос">Допринос</option>
                                <option value="Друго">Друго</option>
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога да ли је подносилац захтева обавезан да плати републичку административну таксу, накнаду, допринос или друго, из падајућег менија се бира једна од понуђених опција. Уколико постоји више врста издатака, уноси се свака врста појединачно (опција „Додај издатак“ на крају одељка Д).</span>

                    </div> 
                    </div>
                  
                  <div class="row"> 
                       <div class="col-lg-1">
                        <span class="labelBrojevi">д2.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">
                                <span class="labelNazivi">Пун назив издатка </span>
                                <br></br><textarea data-autoresize name="punNazivIzdatka6"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се назив финансијског издатка (нпр. накнада за регистрацију предузетника, републичка административна такса за решење, допринос за уређивање грађевинског земљишта и сл.).</span>
                    </div>
                  </div>

                 <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">д3.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Нaзив прописа, кojим се утврђуjе издатак и број службеног гласила</span>
                           <br><br>



                                    <select id="result16" name="nazivPropisa16" data-placeholder="Изаберите..." class="chosen-select" style="width: 100%" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                     

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>  

                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">д4.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                        <br></br><input type="text" id="d56" class='form-control' name="clanPropisIzdatak6" ></br>
                        <br>
                                          
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl16">
                <input type="text" class="form-control fajl16-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl16-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl16-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl16-input-title">Додај датотеку</span>
                        <input type="file" name="d_fajl6" accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>

                        </div>
                        
                    </div>                        

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д5.</span>
                    </div>
                            <div class="col-lg-11">
                            <span class="labelNazivi">Члан/ови прописа којим/а се утврђује издатак</span>
                                <br></br><input type="text" class='form-control' name="clanPropisIzdatak6" ></br>

                            </div>
                            </div>

                    

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д6.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Тарифни број/еви</span>
                                <br></br><input type="text" id="d66" class='form-control' name="tarifniBroj6" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се сви тарифни бројеви, ако постоје.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д7.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Износ (РСД)</span>
                                        <textarea data-autoresize name="iznos"></textarea></br>
                                        <span class="tooltiptext" id = "tooltiptext1">Уноси се тачан износ издатка у РСД. Ако је износ процентуално дефинисан,  навести како се одређује тај износ. Уколико за различите категорије постоје различити износи издатака, навести све износе, уз образложење на коју категорију се који износ односи.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д8.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Сврха плаћања</span>
                                <br></br><textarea data-autoresize id="opis" name="svrhaPlacanja6"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Навести сврху плаћања, коју подносилац захтева уноси у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д9.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Прималац</span>
                                <br></br><textarea data-autoresize id="opis" name="primalac6"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси назив примаоца и адреса, које је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д10.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Број рачуна за уплату</span> <!-- Tri polja za racun -->
                                <br></br><input type="text" id="d106" class='form-control' name="brojRacuna6" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси број рачуна за уплату, који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д11.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Позив на број</span> <!-- Dva polja -->
                                <br></br><input type="text" id="d116" class='form-control' name="pozivNaBroj6" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси позив на број (уколико постоји), који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д12.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Коментар (ослобођења од издатака, друге специфичности од значаја)</span>
                                <br></br><textarea data-autoresize name="komentarIzdatak6"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље је потребно унети напомену о било којим специфичностима овог издатка, које могу укључивати ослобођење појединих подносилаца од плаћања и сл.</span>

                </div>
                

</div>


                     <div class="row">
                                   <div class="col-lg-10"></div>
                <div class="col-lg-2" id = "child1">
                <input id="uklonid6" type="button" value="Уклони" onclick="d6_hide()"> 
                </div>
            </div>
                        <hr>
                <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajd6" type="button" value="Додај издатак" onclick="d7_show()">
                </div>

</div>
</div>

<br></br>
</div>

                 <div id = "d7">

                    <div class="e">
                     <div class="row"> 
                        <div class="col-lg-1">
                        <span class="labelBrojevi">д1.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">                    
                            <span class="labelNazivi">Врста издатака</span>
                            <br></br><select class="form-control" name="vrstaIzdatka7">
                            <option value="" disabled selected hidden>Изаберите</option>
                                <option value="one">Републичка административна такса</option>
                                <option value="Накнада">Накнада</option>
                                <option value="Допринос">Допринос</option>
                                <option value="Друго">Друго</option>
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога да ли је подносилац захтева обавезан да плати републичку административну таксу, накнаду, допринос или друго, из падајућег менија се бира једна од понуђених опција. Уколико постоји више врста издатака, уноси се свака врста појединачно (опција „Додај издатак“ на крају одељка Д).</span>

                    </div> 
                    </div>
                  
                  <div class="row"> 
                       <div class="col-lg-1">
                        <span class="labelBrojevi">д2.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">
                                <span class="labelNazivi">Пун назив издатка </span>
                                <br></br><textarea data-autoresize name="punNazivIzdatka7"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се назив финансијског издатка (нпр. накнада за регистрацију предузетника, републичка административна такса за решење, допринос за уређивање грађевинског земљишта и сл.).</span>
                    </div>
                  </div>

                 <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">д3.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Нaзив прописа, кojим се утврђуjе издатак и број службеног гласила</span>
                           <br><br>


                                    

                                    <select id="result17" name="nazivPropisa17" data-placeholder="Изаберите..." class="chosen-select" style="width: 100%" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>      

                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">д4.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                        <br></br><input type="text" id="d57" class='form-control' name="clanPropisIzdatak7" ></br>
                        <br>
                                          
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl17">
                <input type="text" class="form-control fajl17-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl17-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl17-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl17-input-title">Додај датотеку</span>
                        <input type="file"  name="d_fajl7"  accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>

                        </div>
                        
                    </div>                     

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д5.</span>
                    </div>
                            <div class="col-lg-11">
                            <span class="labelNazivi">Члан/ови прописа којим/а се утврђује издатак</span>
                                <br></br><input type="text" class='form-control' name="clanPropisIzdatak7" ></br>

                            </div>
                            </div>

                    

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д6.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Тарифни број/еви</span>
                                <br></br><input type="text" id="d67" class='form-control' name="tarifniBroj7" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се сви тарифни бројеви, ако постоје.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д7.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Износ (РСД)</span>
                                        <textarea data-autoresize name="iznos7"></textarea></br>
                                        <span class="tooltiptext" id = "tooltiptext1">Уноси се тачан износ издатка у РСД. Ако је износ процентуално дефинисан,  навести како се одређује тај износ. Уколико за различите категорије постоје различити износи издатака, навести све износе, уз образложење на коју категорију се који износ односи.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д8.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Сврха плаћања</span>
                                <br></br><textarea data-autoresize id="opis" name="svrhaPlacanja7"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Навести сврху плаћања, коју подносилац захтева уноси у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д9.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Прималац</span>
                                <br></br><textarea data-autoresize id="opis" name="primalac7"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси назив примаоца и адреса, које је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д10.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Број рачуна за уплату</span> <!-- Tri polja za racun -->
                                <br></br><input type="text" id="d107" class='form-control' name="brojRacuna7" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси број рачуна за уплату, који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д11.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Позив на број</span> <!-- Dva polja -->
                                <br></br><input type="text" id="d117" class='form-control' name="pozivNaBroj7" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси позив на број (уколико постоји), који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д12.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Коментар (ослобођења од издатака, друге специфичности од значаја)</span>
                                <br></br><textarea data-autoresize name="komentarIzdatak7"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље је потребно унети напомену о било којим специфичностима овог издатка, које могу укључивати ослобођење појединих подносилаца од плаћања и сл.</span>

                </div>
                

</div>


                     <div class="row">
                                   <div class="col-lg-10"></div>
                <div class="col-lg-2" id = "child1">
                <input id="uklonid7" type="button" value="Уклони" onclick="d7_hide()"> 
                </div>
            </div>
                        <hr>
                <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajd7" type="button" value="Додај издатак" onclick="d8_show()">
                </div>

</div>
</div>

<br></br>
</div>

            
                 <div id = "d8">

                    <div class="e">
                     <div class="row"> 
                        <div class="col-lg-1">
                        <span class="labelBrojevi">д1.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">                    
                            <span class="labelNazivi">Врста издатака</span>
                            <br></br><select class="form-control" name="vrstaIzdatka8">
                            <option value="" disabled selected hidden>Изаберите</option>
                                <option value="one">Републичка административна такса</option>
                                <option value="Накнада">Накнада</option>
                                <option value="Допринос">Допринос</option>
                                <option value="Друго">Друго</option>
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога да ли је подносилац захтева обавезан да плати републичку административну таксу, накнаду, допринос или друго, из падајућег менија се бира једна од понуђених опција. Уколико постоји више врста издатака, уноси се свака врста појединачно (опција „Додај издатак“ на крају одељка Д).</span>

                    </div> 
                    </div>
                  
                  <div class="row"> 
                       <div class="col-lg-1">
                        <span class="labelBrojevi">д2.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">
                                <span class="labelNazivi">Пун назив издатка </span>
                                <br></br><textarea data-autoresize name="punNazivIzdatka8"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се назив финансијског издатка (нпр. накнада за регистрацију предузетника, републичка административна такса за решење, допринос за уређивање грађевинског земљишта и сл.).</span>
                    </div>
                  </div>

                 <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">д3.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Нaзив прописа, кojим се утврђуjе издатак и број службеног гласила</span>
                           <br><br>


                                <select id="result18" name="nazivPropisa18" data-placeholder="Изаберите..." class="chosen-select" style="width: 100%" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>  

                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">д4.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                        <br></br><input type="text" id="d58" class='form-control' name="clanPropisIzdatak8" ></br>
                        <br>
                                         
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl18">
                <input type="text" class="form-control fajl18-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl18-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl18-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl18-input-title">Додај датотеку</span>
                        <input type="file"  name="d_fajl8"  accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>

                        </div>
                        
                    </div>                        

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д5.</span>
                    </div>
                            <div class="col-lg-11">
                            <span class="labelNazivi">Члан/ови прописа којим/а се утврђује издатак</span>
                                <br></br><input type="text" class='form-control' name="clanPropisIzdatak8" ></br>

                            </div>
                            </div>

                    

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д6.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Тарифни број/еви</span>
                                <br></br><input type="text" id="d68" class='form-control' name="tarifniBroj8" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се сви тарифни бројеви, ако постоје.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д7.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Износ (РСД)</span>
                                        <textarea data-autoresize name="iznos8"></textarea></br>
                                        <span class="tooltiptext" id = "tooltiptext1">Уноси се тачан износ издатка у РСД. Ако је износ процентуално дефинисан,  навести како се одређује тај износ. Уколико за различите категорије постоје различити износи издатака, навести све износе, уз образложење на коју категорију се који износ односи.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д8.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Сврха плаћања</span>
                                <br></br><textarea data-autoresize id="opis" name="svrhaPlacanja8"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Навести сврху плаћања, коју подносилац захтева уноси у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д9.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Прималац</span>
                                <br></br><textarea data-autoresize id="opis" name="primalac8"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси назив примаоца и адреса, које је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д10.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Број рачуна за уплату</span> <!-- Tri polja za racun -->
                                <br></br><input type="text" id="d108" class='form-control' name="brojRacuna8" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси број рачуна за уплату, који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д11.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Позив на број</span> <!-- Dva polja -->
                                <br></br><input type="text" id="d118" class='form-control' name="pozivNaBroj8" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси позив на број (уколико постоји), који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д12.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Коментар (ослобођења од издатака, друге специфичности од значаја)</span>
                                <br></br><textarea data-autoresize name="komentarIzdatak8"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље је потребно унети напомену о било којим специфичностима овог издатка, које могу укључивати ослобођење појединих подносилаца од плаћања и сл.</span>

                </div>
                

</div>


                     <div class="row">
                                   <div class="col-lg-10"></div>
                <div class="col-lg-2" id = "child1">
                <input id="uklonid8" type="button" value="Уклони" onclick="d8_hide()"> 
                </div>
            </div>
                        <hr>
                <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajd8" type="button" value="Додај издатак" onclick="d9_show()">
                </div>

</div>
</div>

<br></br>
</div>


            <div id = "d9">

                    <div class="e">
                     <div class="row"> 
                        <div class="col-lg-1">
                        <span class="labelBrojevi">д1.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">                    
                            <span class="labelNazivi">Врста издатака</span>
                            <br></br><select class="form-control" name="vrstaIzdatka9">
                            <option value="" disabled selected hidden>Изаберите</option>
                                <option value="one">Републичка административна такса</option>
                                <option value="Накнада">Накнада</option>
                                <option value="Допринос">Допринос</option>
                                <option value="Друго">Друго</option>
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога да ли је подносилац захтева обавезан да плати републичку административну таксу, накнаду, допринос или друго, из падајућег менија се бира једна од понуђених опција. Уколико постоји више врста издатака, уноси се свака врста појединачно (опција „Додај издатак“ на крају одељка Д).</span>

                    </div> 
                    </div>
                  
                  <div class="row"> 
                       <div class="col-lg-1">
                        <span class="labelBrojevi">д2.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">
                                <span class="labelNazivi">Пун назив издатка </span>
                                <br></br><textarea data-autoresize name="punNazivIzdatka9"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се назив финансијског издатка (нпр. накнада за регистрацију предузетника, републичка административна такса за решење, допринос за уређивање грађевинског земљишта и сл.).</span>
                    </div>
                  </div>

                 <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">д3.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Нaзив прописа, кojим се утврђуjе издатак и број службеног гласила</span>
                           <br><br>


                                    <select id="result19" name="nazivPropisa19" data-placeholder="Изаберите..." class="chosen-select" style="width: 100%" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>   

                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">д4.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                        <br></br><input type="text" id="d59" class='form-control' name="clanPropisIzdatak9" ></br>
                        <br>
                                          
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl19">
                <input type="text" class="form-control fajl19-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl19-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl19-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl19-input-title">Додај датотеку</span>
                        <input type="file" name="d_fajl9"  accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>

                        </div>
                        
                    </div>                        

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д5.</span>
                    </div>
                            <div class="col-lg-11">
                            <span class="labelNazivi">Члан/ови прописа којим/а се утврђује издатак</span>
                                <br></br><input type="text" class='form-control' name="clanPropisIzdatak9" ></br>

                            </div>
                            </div>

                    

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д6.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Тарифни број/еви</span>
                                <br></br><input type="text" id="d69" class='form-control' name="tarifniBroj9" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се сви тарифни бројеви, ако постоје.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д7.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Износ (РСД)</span>
                                        <textarea data-autoresize name="iznos9"></textarea></br>
                                        <span class="tooltiptext" id = "tooltiptext1">Уноси се тачан износ издатка у РСД. Ако је износ процентуално дефинисан,  навести како се одређује тај износ. Уколико за различите категорије постоје различити износи издатака, навести све износе, уз образложење на коју категорију се који износ односи.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д8.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Сврха плаћања</span>
                                <br></br><textarea data-autoresize id="opis" name="svrhaPlacanja9"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Навести сврху плаћања, коју подносилац захтева уноси у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д9.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1"> 
                            <span class="labelNazivi">Прималац</span>
                                <br></br><textarea data-autoresize id="opis" name="primalac9"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси назив примаоца и адреса, које је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д10.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Број рачуна за уплату</span> <!-- Tri polja za racun -->
                                <br></br><input type="text" id="d109" class='form-control' name="brojRacuna9" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси број рачуна за уплату, који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д11.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Позив на број</span> <!-- Dva polja -->
                                <br></br><input type="text" id="d119" class='form-control' name="pozivNaBroj9" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси позив на број (уколико постоји), који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д12.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Коментар (ослобођења од издатака, друге специфичности од значаја)</span>
                                <br></br><textarea data-autoresize name="komentarIzdatak9"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље је потребно унети напомену о било којим специфичностима овог издатка, које могу укључивати ослобођење појединих подносилаца од плаћања и сл.</span>

                </div>
                

</div>


                     <div class="row">
                                   <div class="col-lg-10"></div>
                <div class="col-lg-2" id = "child1">
                <input id="uklonid9" type="button" value="Уклони" onclick="d9_hide()"> 
                </div>
            </div>
                        <hr>
                <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajd9" type="button" value="Додај издатак" onclick="d10_show()">
                </div>

</div>
</div>

<br></br>
</div>

              <div id = "d10">

                    <div class="e">
                     <div class="row"> 
                        <div class="col-lg-1">
                        <span class="labelBrojevi">д1.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">                    
                            <span class="labelNazivi">Врста издатака</span>
                            <br></br><select class="form-control" name="vrstaIzdatka10">
                            <option value="" disabled selected hidden>Изаберите</option>
                                <option value="one">Републичка административна такса</option>
                                <option value="Накнада">Накнада</option>
                                <option value="Допринос">Допринос</option>
                                <option value="Друго">Друго</option>
                            </select>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога да ли је подносилац захтева обавезан да плати републичку административну таксу, накнаду, допринос или друго, из падајућег менија се бира једна од понуђених опција. Уколико постоји више врста издатака, уноси се свака врста појединачно (опција „Додај издатак“ на крају одељка Д).</span>

                    </div> 
                    </div>
                  
                  <div class="row"> 
                       <div class="col-lg-1">
                        <span class="labelBrojevi">д2.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">
                                <span class="labelNazivi">Пун назив издатка </span>
                                <br></br><textarea data-autoresize name="punNazivIzdatka10"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се назив финансијског издатка (нпр. накнада за регистрацију предузетника, републичка административна такса за решење, допринос за уређивање грађевинског земљишта и сл.).</span>
                    </div>
                  </div>

                 <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">д3.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Нaзив прописа, кojим се утврђуjе издатак и број службеног гласила</span>
                           <br><br>

                            <select id="result20" name="nazivPropisa20" data-placeholder="Изаберите..." class="chosen-select" style="width: 100%" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>   

                    <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">д4.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                        <br></br><input type="text" id="d510" class='form-control' name="clanPropisIzdatak10" ></br>
                        <br>
                                          
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl20">
                <input type="text" class="form-control fajl20-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl20-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl20-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl20-input-title">Додај датотеку</span>
                        <input type="file"  name="d_fajl10"  accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>

                        </div>
                        
                    </div>                        

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д5.</span>
                    </div>
                            <div class="col-lg-11">
                            <span class="labelNazivi">Члан/ови прописа којим/а се утврђује издатак</span>
                                <br></br><input type="text" class='form-control' name="clanPropisIzdatak10" ></br>

                            </div>
                            </div>

                    

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д6.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Тарифни број/еви</span>
                                <br></br><input type="text" id="d610" class='form-control' name="tarifniBroj10" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се сви тарифни бројеви, ако постоје.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д7.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Износ (РСД)</span>
                                        <textarea data-autoresize name="iznos10"></textarea></br>
                                        <span class="tooltiptext" id = "tooltiptext1">Уноси се тачан износ издатка у РСД. Ако је износ процентуално дефинисан,  навести како се одређује тај износ. Уколико за различите категорије постоје различити износи издатака, навести све износе, уз образложење на коју категорију се који износ односи.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д8.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Сврха плаћања</span>
                                <br></br><textarea data-autoresize id="opis" name="svrhaPlacanja10"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Навести сврху плаћања, коју подносилац захтева уноси у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д9.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Прималац</span>
                                <br></br><textarea data-autoresize id="opis" name="primalac10"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси назив примаоца и адреса, које је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д10.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Број рачуна за уплату</span> <!-- Tri polja za racun -->
                                <br></br><input type="text" id="d1010" class='form-control' name="brojRacuna10" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси број рачуна за уплату, који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д11.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1"> 
                            <span class="labelNazivi">Позив на број</span> <!-- Dva polja -->
                                <br></br><input type="text" id="d1110" class='form-control' name="pozivNaBroj10" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси позив на број (уколико постоји), који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                        <span class="labelBrojevi">д12.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Коментар (ослобођења од издатака, друге специфичности од значаја)</span>
                                <br></br><textarea data-autoresize name="komentarIzdatak10"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље је потребно унети напомену о било којим специфичностима овог издатка, које могу укључивати ослобођење појединих подносилаца од плаћања и сл.</span>

                </div>
                

</div>


                     <div class="row">
                                   <div class="col-lg-10"></div>
                <div class="col-lg-2" id = "child1">
                <input id="uklonid10" type="button" value="Уклони" onclick="d10_hide()"> 
                </div>
            </div>
                        <hr>
                <!-- <div class="row">
                 <div class="col-lg-2">
                 <input id="dodajd10" type="button" value="Додај издатак">
                </div>

</div> -->
</div>

<br></br>
</div>
</section>

                <section id="section_F">
                <div class="row">
                    <div class="col-lg-12" style="text-align:center">
                             <h2><span class="text" >Ђ. Остали елементи административног поступка</span></h2>
                        </div>
                </div>

                <div class="f">
                <div class="row"> 
                           <div class="col-lg-12" style="text-align:center">
                             <h3>Рокови</h3>
                        </div>
                        </div>

                <div class="row">
                <div class="col-lg-1">
                            <span class="labelBrojevi">ђ1.</span>
                    </div> 
                <div class="col-lg-11" id = "tooltip1">
                <span class="labelNazivi">Да ли је прописом предвиђен рок за решавање захтева?</span>
                            <br>
                            <div class="radio">
                                <label><input type="radio" value="Да" name="rokPredmeta">Да</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="Не" name="rokPredmeta">Не</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога да ли је прописан рок за решавање поступка, бира се једна од понуђених опција.</span>

                </div>
                </div>

                <div class="row">
                <div class="col-lg-1">
                            <span class="labelBrojevi">ђ2.</span>
                    </div> 
                <div class="col-lg-11" id = "tooltip1">
                <span class="labelNazivi">Врста прописа којим је утврђен рок за решавање захтева</span>
                            <br>
                            <div class="radio">
                                <label><input type="radio" value="Општи пропис" name="rokPredmeta1">Општи пропис</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="Посебан пропис" name="rokPredmeta1">Посебан пропис</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога да ли је рок утврђен општим или посебним прописом, бира се једна од понуђених опција.</span>

                </div>
                </div>

               
                <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">ђ3.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Рок за решавање захтева утврђен прописом</span>
                                <br></br><input type="text" id="đ3" class='form-control' name="rokZaResavanje" ></br>
                             <span class="tooltiptext" id = "tooltiptext1">Наводи се рок на начин на који је дефинисан у конкретном пропису.</span>


                </div>
                </div>

                <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">ђ4.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Назив прописа, којим се утврђује рок и број службеног гласила</span>
                           <br><br>

                                    <select id="result25" data-placeholder="Изаберите..." class="chosen-select" style="width: 100%" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>

                      <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">ђ5.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                        <br></br>
                        <textarea data-autoresize id="opis" name="rokPropisOpis" ></textarea>
                        <br>
                                         
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl21">
                <input type="text" class="form-control fajl21-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl21-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl21-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl21-input-title">Додај датотеку</span>
                        <input type="file"  name="dj_fajl1"  accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>

                        </div>
                        
                    </div>


                              <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">ђ6.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Члан/ови прописа којим/а се утврђује рок</span> 
                                <br></br><input type="text" id="đ6" class='form-control' name='propisRok'>                        
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се члан прописа, којим се утврђује рок.</span>

</br>

                </div>
                </div>



                <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">ђ7.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Рок за уређење неуредног захтева</span>
                                <br></br><input type="text" id="đ7" class='form-control' name="rokNeuredni" ></br>
                                 <span class="tooltiptext" id = "tooltiptext1">Навести рок, који је прописан за уређење неуредног захтева од стране подносиоца.</span>


                </div>
                </div>

                <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">ђ8.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Просечан рок за решавање уредног захтева</span>
                                <br></br><input type="text" id="đ8" class='form-control' name="rokUredni_Avg" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се просечан рок, који је надлежном органу/организацији потребан за решавање <b><u>уредног</u></b> захтева у пракси (када су испуњени сви процедурални услови: сва документација обезбеђена, све уплате извршене и све потребне информације дате), независно од рока, који је прописан законом.</span>


                </div>
                </div>


                <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">ђ9.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Време важења акта, добијеног по окончању административног поступка</span>
                                <br></br><textarea data-autoresize id="opis" name="vremeVazenja"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Навести рок важења акта (нпр. неограничено, 2 године и сл.).</span>


                </div>
                </div>

                <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">ђ10.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Назив прописа, којим се утврђује време важења издатог акта и број службеног гласила</span>
                           <br><br>


                                    <select id="result21" data-placeholder="Изаберите..." class="chosen-select" style="width: 100%" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>


                  <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">ђ11.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                        <br></br>
                        <textarea data-autoresize id="opis" name="vazenjePropisOpis"></textarea>
                        <br>
                                        
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl22">
                <input type="text" class="form-control fajl22-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl22-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl22-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl22-input-title">Додај датотеку</span>
                        <input type="file"  name="dj_fajl2"  accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>

                        </div>
                        
                    </div>


                <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">ђ12.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Члан прописа којим се утврђује време важења издатог акта</span> 
                                <br></br><input type="text" id="đ12" class='form-control' name="vremeVazenjaIzdatog">
                                <span class="tooltiptext" id = "tooltiptext1">Одговор на ово питање се уноси, уколико је време важења издатог акта прописано. Уноси се члан прописа, којим се утврђује време важења.</span>

</br>

                </div>
                </div>

              

                <div class="row"> 
                        <div class="col-lg-1">
                            </div> 
                    
                           <div class="col-lg-11" style="text-align:center">
                             <h3>Образац за подношење захтева</h3>
                        </div>
                        </div>


                <div class="row">
                <div class="col-lg-1">
                            <span class="labelBrojevi">ђ13.</span>
                    </div>
                <div class="col-lg-11" id = "tooltip1">
                <span class="labelNazivi">Форма подношења захтева</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Усмено" name="zahtevPodnosenje[]">Усмено</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Писмено - у слободној форми" name="zahtevPodnosenje[]">Писмено - у слободној форми</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Писмено - у форми обрасца" name="zahtevPodnosenje[]">Писмено - у форми обрасца</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Електронски, на порталу" name="zahtevPodnosenje[]">Електронски, на порталу</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога на који начин странка може да поднесе захтев за административни поступак, врши се одабир између понуђених опција. Ако постоји више начина за подношење захтева, бира се свака могућа опција.</span>

                </div>
                </div>
                <div class="row">
                <div class="col-lg-1">
                            <span class="labelBrojevi">ђ14.</span>
                    </div>
                <div class="col-lg-11" id = "tooltip3">
                <span class="labelNazivi">Врста обрасца за подношење захтева</span>
                            <br>
                            <div class="radio" >
                                <label><input type="radio" value="Самостално припремљен од стране организационе јединице" name="tipObrasca" id = "test">Самостално припремљен од стране организационе јединице</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="Припремљен од стране организационе јединице, на основу елемената дефинисаних прописом" name="tipObrasca" id = "test1">Припремљен од стране организационе јединице, на основу елемената дефинисаних прописом</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="Објављен прописом" name="tipObrasca" id = "test2">Објављен прописом</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција:<br>
                             <b><i>- Самостално припремљен од стране организационе јединице</i></b> – у случају да комплетан образац није објављен у пропису, нити су прописом дефинисани елементи обрасца, већ је образац потпуно самостално припремљен од стране организационе јединице надлежног органа / организације, која спроводи поступак;<br>
                             <b><i>- Припремљен од стране организационе јединице, на основу елемената дефинисаних прописом</i></b>– уколико је пропис дефинисао елементе, које образац мора да садржи, а организациона јединица припремила образац, на основу прописаних елемената;<br>
                             <b><i>- Објављен прописом </i></b>- уколико је комплетан образац објављен у пропису.
</span>

                </div>
                </div>

                <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">ђ15.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Назив прописа, којим је објављен образац или дефинисани његови елементи и број службеног гласила</span>
                           <br><br>


                                    

                                    <select id="result22" data-placeholder="Изаберите..." class="chosen-select" style="width: 100%" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>

               

                <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">ђ16.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                        <br></br>
                            <textarea data-autoresize id="opis" name="obrazacPropisOpis"></textarea>
                        <br>
                                          
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl23">
                <input type="text" class="form-control fajl23-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl23-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl23-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl23-input-title">Додај датотеку</span>
                        <input type="file"  name="dj_fajl3"  accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>

                        </div>
                        
                    </div>

                     <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">ђ17.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Члан прописа којим је објављен образац или дефинисани његови елементи</span> 
                                <br></br><input type="text" id="đ17" class='form-control' name="obrazacPropisClan" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">Одговор на ово питање се уноси, уколико су образац или његови елементи прописани.</span>


                </div>
                </div>

                

                <div class="row">
                <div class="col-lg-1">
                            <span class="labelBrojevi">ђ18.</span>
                    </div>
                <div class="col-lg-11" id = "tooltip1">
                <span class="labelNazivi">Начин на који подносилац преузима образац за подношење захтева</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Лично" name="obrazacPreuzimanje[]">Лично</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Електронским путем" name="obrazacPreuzimanje[]">Електронским путем</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна или обе понуђене опције, зависно од случаја.</span>

                    </div>
                    </div>

                    <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">ђ19.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Линк са којег се образац може преузети</span> 
                                <br></br><input type="text" class='form-control' name="linkObrazac" id="link1"></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уколико се образац може преузети електронским путем, навести тачан линк за преузимање. Унети одговор латиничним писмом.</span>


                </div>
                </div>



                     <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">ђ20.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip7">
                            <span class="labelNazivi">Приложити образац за подношење захтева</span> 
                                <br></br>
                                
                                          
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl24">
                <input type="text" class="form-control fajl24-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl24-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl24-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl24-input-title">Додај датотеку</span>
                        <input type="file"  name="dj_fajl4" accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div>
                                <span class="tooltiptext" id = "tooltiptext1">Потребно је приложити образац.</span>

                            

                </div>
                </div>

                <div class="row">
                <div class="col-lg-1">
                            <span class="labelBrojevi">ђ21.</span>
                    </div>
                <div class="col-lg-11" id = "tooltip1">
                <span class="labelNazivi">Начин на који подносилац доставља захтев надлежном органу/организацији</span>
                            <br>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Лично" name="obrazacDostava[]">Лично</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Електронским путем - са електронским потписом" name="obrazacDostava[]">Електронским путем - са електронским потписом</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Електронским путем - без електронског потписа" name="obrazacDostava[]">Електронским путем - без електронског потписа</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Поштом" name="obrazacDostava[]">Поштом</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога на који начин подносилац може предати захтев, бира се једна или више понуђених опција.</span>
                </div>
                </div>


                    <div class="row"> 
                        <div class="col-lg-12">
                            <span style="text-align:center"><h3>Издата акта</h3></span>
                    </div> 
                    </div>

                <div class="row"> 
                        <div class="col-lg-1">
                            <span class="labelBrojevi">ђ22.</span>
                    </div>

                <div class="col-lg-11" id = "tooltip1">
                <span class="labelNazivi">Начин на који надлежни орган/организација доставља акт подносиоцу захтева</span>
                            
                            <div class="checkbox">
                                <label><input type="checkbox" value="Лично" name="nacinDostave[]">Лично</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Електронским" name="nacinDostave[]">Електронским путем</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Поштом" name="nacinDostave[]">Поштом</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="На други начин" name="nacinDostave[]">На други начин</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога на који начин надлежни орган / организација доставља издати акт подносиоцу захтева, бира се једна или више понуђених опција. </span>
                </div>
                </div>


                    <div class="row"> 
                       <div class="col-lg-1">
                            <span class="labelBrojevi">ђ23.</span>
                    </div>
                <div class="col-lg-11" id = "tooltip1">
                <span class="labelNazivi">Да ли постоји регистар издатих аката?</span>
                            
                            <div class="radio">
                                <label><input type="radio" value="Да" name="postojiRegistar[]">Да</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="Не" name="postojiRegistar[]">Не</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="У поступку израде" name="postojiRegistar[]">У поступку израде</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога да ли регистар издатих аката постоји или не или је у поступку израде, бира се једна од понуђених опција.</span>

                </div>
                </div>


                <div class="row"> 
                        <div class="col-lg-1">
                            <span class="labelBrojevi">ђ24.</span>
                    </div>
                <div class="col-lg-11" id = "tooltip1">
                <span class="labelNazivi">Да ли је регистар издатих аката јавно доступан?</span>
                            
                            <div class="radio">
                                <label><input type="radio" value="Да" name="aktDostupan">Да</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="Не" name="aktDostupan">Не</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="У поступку објављивања" name="aktDostupan">У поступку објављивања</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога да ли је регистар издатих аката јавно доступан или не, или је објављивање у поступку, бира се једна од понуђених опција.</span>

                </div>
                </div>

            <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">ђ25.</span>
                    </div>
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Навести линк јавног регистра</span>     <br></br><input type="text" class='form-control' name="linkJavniRegistar" id="link2"></br>                        
                                <span class="tooltiptext" id = "tooltiptext1">Одговор на ово питање се уноси, уколико постоји јавно доступан регистар издатих аката. Навести латиничним писмом линк на јавни регистар.</span>
                </div>
                </div>
                </div>
                </section>
                
                <section id="section_G">

                <div class="row">
                    <div class="col-lg-12" style="text-align:center">
                             <h2><span class="text" >Е. Жалбени поступак</span></h2>
                        </div>
                </div>

                <div class="e">
                <div class="row"> 
                        <div class="col-lg-1">
                            <span class="labelBrojevi">е1.</span>
                    </div> 

                <div class="col-lg-11" id = "tooltip1">
                <span class="labelNazivi">Против акта донетог у административном поступку</span>
                            
                            <div class="radio">
                                <label><input type="radio" value="Може се изјавити жалба" name="protivAkt[]">Може се изјавити жалба</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="Може се изјавити приговор" name="protivAkt[]">Може се изјавити приговор</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="Није дозвољена ни жалба ни приговор" name="protivAkt[]">Није дозвољена ни жалба ни приговор</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога да ли је могуће изјављивање жалбе / приговора или не, бира се једна од понуђених опција. </span>
                            
                </div>
                </div>

                <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">е2.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Назив прописа, којим се утврђује право жалбе/приговора и број службеног гласила</span>
                           <br><br>



                                    <select id="result23" data-placeholder="Изаберите..." class="chosen-select" style="width: 100%" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>



                <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">е3.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                            <textarea data-autoresize id="opis" name="zalbaPropisOpis"></textarea>
                        <br>
                                         
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl25">
                <input type="text" class="form-control fajl25-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl25-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl25-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl25-input-title">Додај датотеку</span>
                        <input type="file"  name="e_fajl1" accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
 
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>
                        </div>
                        
                    </div>

                <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">е4.</span>
                    </div> 
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Члан прописа којим се утврђује право жалбе/приговора</span> 
                                <br></br><textarea data-autoresize id="opis" name="zalbaPropisClan"></textarea>
                                <span class="tooltiptext" id = "tooltiptext1">Одговор на ово питање се уноси, уколико је могуће изјављивање жалбе / приговора. Уноси се члан прописа.</span>
</br>

                </div>
                </div>


                <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">е5.</span>
                    </div> 
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Орган коме се доставља жалба/приговор</span> 
                                <br></br><textarea data-autoresize id="opis" name="zalbaOrganDostava"></textarea>
                                <span class="tooltiptext" id = "tooltiptext1">Навести назив органа, коме се доставља жалба/приговор.</span>
</br>

                </div>
                </div>

                <div class="row"> 
                           <div class="col-lg-1">
                            <span class="labelBrojevi">е6.</span>
                    </div> 
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Рок за достављање жалбе/приговора</span> 
                                <br></br><input type="text" id="e6" class='form-control' name="zalbaRok" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">Навести прописани рок за достављање жалбе/приговора од стране подносиоца захтева.</span>

                </div>
                </div>



                <div class="row"> 
                        <div class="col-lg-1">
                            <span class="labelBrojevi">е7.</span>
                    </div> 
                <div class="col-lg-11" id = "tooltip1">
                <span class="labelNazivi">Начин на који се жалба/приговор подноси</span>
                            
                            <div class="checkbox">
                                <label><input type="checkbox" value="Лично" name="zalbaPodnosenje[]">Лично</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Поштом" name="zalbaPodnosenje[]">Поштом</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Електронски" name="zalbaPodnosenje[]">Електронски</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од тога на који начин подносилац захтева подноси жалбу/приговор, бира се једна или више понуђених опција. </span>
                            
                </div>
                </div>


                    <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">е8.</span>
                    </div> 
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Орган надлежан за одлучивање по жалби/приговору</span> 
                                <br></br><textarea data-autoresize id="opis" name="zalbaOrganOdluka"></textarea>
                                <span class="tooltiptext" id = "tooltiptext1">Навести назив органа, који је надлежан за одлучивање о жалби/приговору.</span>
</br>

                </div>
                </div>


                    <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">е9.</span>
                    </div> 
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Рок за одлучивање по жалби/приговору</span> 
                                <br></br><textarea data-autoresize id="opis" name="rokZaOdlucivanjeZalbe" ></textarea>
                                <span class="tooltiptext" id = "tooltiptext1">Навести прописани рок за одлучивање надлежног органа о жалби/приговору. </span>
</br>

                </div>
                </div>

                    <div class="row"> 
                    <div class="col-lg-1"></div> 
                        <div class="col-lg-11">
                            <span style="text-align:center"><h3>Трошкови жалбеног поступка</h3></span>
                    </div> 
                    </div>

            <div class="row"> 
                        <div class="col-lg-1">
                            <span class="labelBrojevi">е10.</span>
                    </div> 
                    <div class="col-lg-11" id = "tooltip1">
                                <span class="labelNazivi">Пун назив трошка</span>
                                <br></br><textarea data-autoresize name="zalbaNazivTrosak"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се назив финансијског трошка који подносилац има у жалбеном поступку.</span>
                    </div>
                  </div>

                <div class="row">
                        <div class="col-lg-1">
                            <span class="labelBrojevi">е11.</span>
                        </div>
                        <div class="col-lg-11" id = "tooltip1">
                            
                            <span class="labelNazivi">Назив прописа и број службеног гласила</span>
                           <br><br>


                                    <select id="result24" data-placeholder="Изаберите..." class="chosen-select" style="width: 100%" tabindex="2">

                                    

                                    <?php
                                    foreach($parsiran_json->acts as $vrednost){
                                    ?>

                                    <?php echo '<option value="'.$vrednost->title. '">' .$vrednost->title . "</option>";


                                     ;?>


                                    <?php
                                    }
                                    ?>


                                      

                                    </select>

                           <span class="tooltiptext" id = "tooltiptext1">Онлајн формулар је повезан са порталом Службеног гласника, тако да је могућ одабир назива релевантног прописа и бројева службеног гласила. Уколико постоји два или више прописа са истим називом, али различитим бројевима службених гласила, навести таксативно сваки од њих.</span>    
                        </div>

                    </div>

                     <div class="row">
                        <div class="col-lg-1">
                         <span class="labelBrojevi">е12.</span>
                         </div>

                        <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Уколико пропис није објављен у службеном гласилу, навести назив прописа и приложити пропис</span>
                        <textarea data-autoresize id="opis" name="zalbaTrosakPropisOpis"></textarea>
                        <br>
                                         
    <div class="row">    
        <div class="col-xs-12 col-md-6  col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group fajl26">
                <input type="text" class="form-control fajl26-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default fajl26-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Уклони
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default fajl26-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="fajl26-input-title">Додај датотеку</span>
                        <input type="file"  name="e_fajl2"  accept="image/png, image/jpeg, image/gif, application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    
</div></br>
                        <span class="tooltiptext" id = "tooltiptext1">Уколико пропис није објављен, потребно је навести његов назив и приложити пропис.</span>
                        </div>
                        
                    </div>       


                            <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">е13.</span>
                    </div> 
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Члан/ови прописа којим/а се утврђује трошак</span>
                                <br></br><input type="text" id="e13" class='form-control' name="zalbaTrosakPropisClan" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси/е се члан/ови прописа, којим/а се дефинише овај финансијски трошак.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">е14.</span>
                    </div> 
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Тарифни број/еви</span>
                                <br></br><input type="text" id="e14" class='form-control' name="zalbaTarifniBroj" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се сви тарифни бројеви, ако постоје.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">е15.</span>
                    </div> 
                            <div class="col-lg-11" id = "tooltip1"> 
                            <span class="labelNazivi">Износ (РСД)</span>
                                        <textarea data-autoresize name="zalbaIznos"></textarea>
                                        <span class="tooltiptext" id = "tooltiptext1">Уноси се тачан износ трошка у РСД. Ако је износ процентуално дефинисан,  навести како се одређује тај износ. Уколико за различите категорије постоје различити износи трошка, навести све износе, уз образложење на коју категорију се који износ односи.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">е16.</span>
                    </div> 
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Сврха плаћања</span>
                                <br></br><textarea data-autoresize id="opis" name="zalbaSvrhaPlacanja"></textarea>
                                <span class="tooltiptext" id = "tooltiptext1">Навести сврху плаћања, коју подносилац захтева уноси у уплатницу.</span>
</br>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">е17.</span>
                    </div> 
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Прималац</span>
                                <br></br><textarea data-autoresize id="opis" name="zalbaPrimalac"></textarea>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси назив примаоца и адреса, које је потребно унети у уплатницу.</span>
</br>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">е18.</span>
                    </div> 
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Број рачуна за уплату</span> <!-- Tri polja za racun -->
                                <br></br><input type="number" class='form-control' name="zalbaBrojRacuna" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси број рачуна за уплату, који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

                            <div class="row"> 
                            <div class="col-lg-1">
                            <span class="labelBrojevi">е19.</span>
                    </div> 
                            <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Позив на број</span> <!-- Dva polja -->
                                <br></br><input type="number" class='form-control' name="zalbaPozivNaBroj" ></br>
                                <span class="tooltiptext" id = "tooltiptext1">У ово поље се уноси позив на број (уколико постоји), који је потребно унети у уплатницу.</span>

                            </div>
                            </div>

</div>
</section>

                <section id="section_H">

                <div class="row">
                    <div class="col-lg-12" style="text-align:center">
                             <h2><span class="text" >Ж. Предлози за поједностављење, измену, допуну или укидање административног поступка</span></h2>
                        </div>
                </div>

                <div class="g">
                <div class="row"> 
                <div class="col-lg-1">
                            <span class="labelBrojevi">ж1.</span>
                    </div> 
                <div class="col-lg-10" id = "tooltip1">
                <span class="labelNazivi">Да ли сматрате да је административни поступак застарео?</span>
                            <br>
                            <div class="radio">
                                <label><input type="radio" value="Да" name="rokPredmeta" id="postojiZastarelost">Да</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="Не" name="rokPredmeta" id="nePostojiZastarelost">Не</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од мишљења и искуства службеника, бира се једна од понуђених опција.</span>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-1">
                    <span class="labelBrojevi">ж2.</span>
                </div>
                       <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Образложите застарелост административног поступка</span>
                             <br></br><textarea data-autoresize id="opisZastarelosti" disabled="" name="zastarelostObrazlozenje"></textarea>
                                  <span class="tooltiptext" id = "tooltiptext1">Уноси се објашњење из ког разлога је административни поступак застарео.</span>

                            </br>
                        </div>

                </div>

                <div class="row">
                    <div class="col-lg-1">
                            <span class="labelBrojevi">ж3.</span>
                    </div>
                    <div class="col-lg-11" id = "tooltip1">
                        <span class="labelNazivi">Административни поступак је потребно</span>
                            
                            <div class="radio">
                                <label><input type="radio" name="izmenaPostupak[]" id="ukinutiPostupak">Укинути</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="izmenaPostupak[]" id="izmenitiPostupak">Изменити</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="izmenaPostupak[]" id="neMenjati">Није потребно изменити нити укинути</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од искуства службеника, бира се једна од понуђених опција.</span>
                    </div>
                </div>

<div id = "z4">
                <div class="row">
                <div class="col-lg-1">
                    <span class="labelBrojevi">ж4.</span>
                </div>
                <div class="col-lg-11" id = "tooltip1"> 
                            <span class="labelNazivi">Образложите потребу за укидањем поступка</span>
                                <br></br><textarea data-autoresize id="ukinutiPostupakInput" disabled="" name="potrebaUkidanje"></textarea></br>
                                <span class="tooltiptext" id = "tooltiptext1">Уноси се објашњење разлога за укидање административног поступка.</span>
                        </div>
                </div>
            </div>
<div id = "z5">
                <div class="row" id="izmenitiPostupakInput">
                <div class="col-lg-1">
                    <span class="labelBrojevi">ж5.</span>
                </div>
                <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Наведите предлог за измену административног поступка и дајте образложење</span>
                                <span class="tooltiptext" id = "tooltiptext1">Бира се једна или више понуђених опција, уз образложење предлога за измену. У случају више предлога, одабрати више понуђених опција и образложити.</span>
                                   </div> 
                                <br></br> 
                                <div class="col-lg-1"></div>
                                <div class="col-lg-11"> 

                            <div class="checkbox1" >
                                <label><input type="checkbox" value="Поједностављење прописа" name="izmenaPredlog[]" id="izbor-1">Поједностављење прописа</label>
                                <textarea data-autoresize id="izmenaInput1" disabled="" name="pojednostavljenje"></textarea>

                            </div>

                            <div class="checkbox1">
                                <label><input type="checkbox" value="Смањење броја регулисаних субјеката" name="izmenaPredlog[]" id="izbor-2">Смањење броја регулисаних субјеката</label>
                                <textarea data-autoresize id="izmenaInput2" disabled="" name="smanjenjeBroja"></textarea>
                            </div>
                            <div class="checkbox1">
                                <label><input type="checkbox" value="Смањење учесталости подношења захтева - дужи интервали" name="izmenaPredlog[]" id="izbor-3">Смањење учесталости подношења захтева - дужи интервали</label>
                                <textarea data-autoresize id="izmenaInput3" disabled="" name="smanjenjeUcestalosti"></textarea>
                            </div>
                            <div class="checkbox1">
                                <label><input type="checkbox" value="Елиминација докумената које подноси подносилац" name="izmenaPredlog[]" id="izbor-4">Елиминација докумената које подноси подносилац</label>
                                <textarea data-autoresize id="izmenaInput4" disabled="" name="eliminacijaDok"></textarea>
                            </div>
                            <div class="checkbox1">
                                <label><input type="checkbox" value="Елиминација информација које даје подносилац" name="izmenaPredlog[]" id="izbor-5">Елиминација информација које даје подносилац</label>
                                <textarea data-autoresize id="izmenaInput5" disabled="" name="eliminacijaInfo"></textarea>
                            </div>
                            <div class="checkbox1">
                                <label><input type="checkbox" value="Скраћење рока за решавање захтева" name="izmenaPredlog[]" id="izbor-6">Скраћење рока за решавање захтева </label>
                                <textarea data-autoresize id="izmenaInput6" disabled="" name="skracenjeRoka"></textarea>
                            </div>
                            <div class="checkbox1">
                                <label><input type="checkbox" value="Смањење или укидање трошкова" name="izmenaPredlog[]" id="izbor-7">Смањење или укидање трошкова</label>
                                <textarea data-autoresize id="izmenaInput7" disabled="" name="smanjenjeTroskova"></textarea>
                            </div>
                            <div class="checkbox1">
                                <label><input type="checkbox" value="Идентификација и елиминисање дуплих захтева" name="izmenaPredlog[]" id="izbor-8">Идентификација и елиминисање дуплих захтева</label>
                                <textarea data-autoresize id="izmenaInput8" disabled="" name="eliminacijaDupli"></textarea>
                            </div>
                            <div class="checkbox1">
                                <label><input type="checkbox" value="Поједностављење обрасца за подношење захтева" name="izmenaPredlog[]" id="izbor-9">Поједностављење обрасца за подношење захтева</label>
                                <textarea data-autoresize id="izmenaInput9" disabled="" name="pojednostavljenjeObrasca"></textarea>
                            </div>
                            <div class="checkbox1">
                                <label><input type="checkbox" value="Увођење онлајн формулара за подношење захтева" name="izmenaPredlog[]" id="izbor-10">Увођење онлајн формулара за подношење захтева</label>
                                <textarea data-autoresize id="izmenaInput10" disabled="" name="uvodjenjeOnline"></textarea>
                            </div>
                            <div class="checkbox1">
                                <label><input type="checkbox" value="Прописивање обрасца, уколико није прописан" name="izmenaPredlog[]" id="izbor-11">Прописивање обрасца, уколико није прописан</label>
                                <textarea data-autoresize id="izmenaInput11" disabled="" name="propisivanjeObrasca"></textarea>
                            </div>
                            <div class="checkbox1">
                                <label><input type="checkbox" value="Продужење рока подносиоцу захтева за поступање по обавези" name="izmenaPredlog[]" id="izbor-12">Продужење рока подносиоцу захтева за поступање по обавези</label>
                                <textarea data-autoresize id="izmenaInput12" disabled="" name="produzenjePodnosiocu"></textarea>
                            </div>
                            <div class="checkbox1">
                                <label><input type="checkbox" value="Продужење рока подносиоцу захтева за поступање по обавези" name="izmenaPredlog[]" id="izbor-13">Припрема корисничког упутства</label>
                                <textarea data-autoresize id="izmenaInput13" disabled="" name="pripremaUputstva"></textarea>
                            </div>
                            <div class="checkbox1">
                                <label><input type="checkbox" value="Друго" name="izmenaPredlog[]" id="izbor-14">Друго</label>
                                <textarea data-autoresize id="izmenaInput14" disabled="" name="drugo"></textarea>
                            </div>
                            </div>
                         </div> 

                  </br>
                       
                </div>
                <div id = "z6">
                <div class="row">
                <div class="col-lg-1">
                    <span class="labelBrojevi">ж6.</span>
                </div>
                <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Наведите прописе и њихове чланове које је потребно изменити</span>
                                <br></br><textarea data-autoresize name="clanoviIzmena"></textarea> </br>
                                <span class="tooltiptext" id = "tooltiptext1">Наводи се тачан назив прописа и чланова, које је потребно изменити.</span>
                        </div>
                </div>
            </div>


                <div class="row"> 
                <div class="col-lg-1">
                            <span class="labelBrojevi">ж7.</span>
                    </div> 
                <div class="col-lg-11" id = "tooltip1">
                <span class="labelNazivi">Да ли сматрате да постоји преклапање надлежности више органа/организација у спровођењу административног поступка?</span>
                            <br>
                            <div class="radio">
                                <label><input type="radio" value="Да" name="preklapanjeNadleznosti" id="postojiPreklapanje">Да</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="Не" name="preklapanjeNadleznosti" id="nePostojiPreklapanje">Не</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">Бира се једна од понуђених опција.</span>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-1">
                    <span class="labelBrojevi">ж8.</span>
                </div>
                <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Образложити између којих органа/организација постоји преклапање надлежности и у чему се састоји</span>
                                <br></br>
                                 <textarea data-autoresize id="opisPreklapanja" disabled="" name="organiPreklapanje"></textarea>
                                 <span class="tooltiptext" id = "tooltiptext1">Навести називе органа/ организација, код којих постоји преклапање надлежности и у чему се то преклапање састоји.</span>
                             
                        </div>
                </div>

                <div class="row"> 
                <div class="col-lg-1">
                            <span class="labelBrojevi">ж9.</span>
                    </div> 
                <div class="col-lg-11" id = "tooltip1">
                <span class="labelNazivi">Да ли је могуће обављање административног поступка електронским путем у целости, уколико то већ није случај?</span>
                            <br>
                            <div class="radio">
                                <label><input type="radio" value="Да" name="digitalizacijaPostupka" id="digitalizacijaPostupka1">Да</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="Не" name="digitalizacijaPostupka" id="digitalizacijaPostupka2">Не</label>
                            </div>
                            <span class="tooltiptext" id = "tooltiptext1">У зависности од мишљења и искуства службеника, бира се једна од понуђених опција.</span>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-1">
                    <span class="labelBrojevi">ж10.</span>
                </div>
                <div class="col-lg-11" id = "tooltip1">
                            <span class="labelNazivi">Наведите предуслов/е за обављање административног поступка електронским путем у целости</span>
                                <br></br>
                                 <textarea data-autoresize id="opisDigitalizacije" disabled="" name="preduslovE-Postupak" ></textarea>
                                <span class="tooltiptext" id = "tooltiptext1">Навести које предуслове треба обезбедити за обављање административног поступка електронским путем у целости.</span>
                        </div>
                </div>
                </div>
                </section>

                <section id="section_I">                
                <div class="row">
                    <div class="col-lg-12" style="text-align:center">
                             <h2><span class="text" >З. Напомене</span></h2>
                        </div>
                </div>

                <div class="h">
                <div class="row">
                <div class="col-lg-12" id = "tooltip1">                    
                <textarea data-autoresize name="napomene"></textarea>  
                <span class="tooltiptext" id = "tooltiptext1">Овај део формулара предвиђен је за све додатне напомене у вези са административним поступком, ако постоје.</span>                           
                </div>
                </div>
                    </div> <!--zatvara container-->


        
<div class="row">
<div class="col-lg-2" id = "tooltip4">

<button>Сачувај</button>
<span class="tooltiptext" id = "tooltiptext1">Одабиром ове опције, омогућава се чување формулара, уколико није спреман за коначно слање, већ је потребно накнадно наставити са попуњавањем. Систем ће омогућити чување свих података, који су унети. Уколико се затвори прозор претраживача, без претходног чувања унетих података (опција „Сачувај“), подаци неће бити сачувани.
</span>

</div>
<div class="col-lg-8"></div>
<div class="col-lg-2" id = "laza"> 
</section> 
                           

<div id = "tooltip4">
<input type="submit" value="Пошаљи"></input>
<span class="tooltiptext" id = "tooltiptext1">Одабиром ове опције, попуњен формулар се шаље надлежнима и „закључава“ за службеника, који пописује овај поступак. Пре него што се одабере опција „Пошаљи“, пажљиво проверити тачност и свеобухватност свих унетих података, јер поновне измене од стране службеника, надлежног за попис поступка, неће бити могуће.</span>
</div>
</div>


</div> <!--zatvara srednju kolonu (glavnu)-->
</form>
</div>  <!-- zatvara ceo omotac -->
     

<ul id="menu" hidden="">
    <li><a href="#section_A" style="color: black">А. Општи подаци</a></li>
    <li><a href="#section_B" style="color: black">Б. Правни основ административног поступка</a></li>
    <li><a href="#section_C" style="color: black">В. Сврха и опис административног поступка</a></li>
    <li><a href="#section_D" style="color: black">Г. Потребна документација</a></li>
    <li><a href="#section_E" style="color: black">Д. Финансијски издаци подносиоца захтева</a></li>
    <li><a href="#section_F" style="color: black">Ђ. Остали елементи административног поступка</a></li>
    <li><a href="#section_G" style="color: black">Е. Жалбени поступак</a></li>
    <li><a href="#section_H" style="color: black">Ж. Предлози за поједностављење, измену, допуну или укидање административног поступка</a></li>
    <li><a href="#section_I" style="color: black">З. Напомене</a></li>
</ul>



<script src="{{URL::asset('js/scripts.js')}}"></script>  
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script> 
    
    <script src="{{URL::asset('js/jquery-input-file-text.js')}}"></script> 
    <script type="text/javascript" src="{{URL::asset('js/bootstrap-filestyle.min.js')}}"> </script> 
    <script src="{{URL::asset('chosen/chosen.jquery.js')}}" type="text/javascript"></script> 
    <script src="{{URL::asset('chosen/docsupport/prism.js')}}" type="text/javascript" charset="utf-8"></script> 
    <script src="{{URL::asset('js/skripte.js')}}"></script> 

    

  </body>
</html>