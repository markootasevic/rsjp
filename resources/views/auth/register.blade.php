@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Додај кориснички налог</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Име и презиме</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="telefon" class="col-md-4 control-label">Контакт телефон</label>

                            <div class="col-md-6">
                                <input id="telefon" type="text" class="form-control" name="telefon" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Eлектронска пошта</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Шифра</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Потврди шифру</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="institucija" class="col-md-4 control-label">Институција</label>

                            <div class="col-md-6">
                                <select id="institucija" type="text" class="form-control" name="institucija" required>
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
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sektor" class="col-md-4 control-label">Унутрашња организациона јединица</label>

                            <div class="col-md-6">
                                <input id="sektor" type="text" class="form-control" name="sektor" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="korisnik" class="col-md-4 control-label">Корисник</label>

                            <div class="col-md-6">
                                <select id="korisnik" type="text" class="form-control" name="korisnik" required>
                                <option value="" disabled selected hidden>Изаберите</option>
                                    <option>Одговорно лице за институцију</option>
                                    <option>Лице одговорно за попуњавање формулара</option>
                                </select> 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Направи налог
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
