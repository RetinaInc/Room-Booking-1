<?php
/**
* English (en) help translation file.
* This also serves as the base translation file from which to derive
*  all other translations.
*  
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator Arkadiusz Lipiec <arkadiusz.lipiec@gmail.com>
* @version 05-11-09
* @package Languages
*
* Copyright (C) 2003 - 2007 phpScheduleIt
* License: GPL, see LICENSE
*/
///////////////////////////////////////////////////////////
// INSTRUCTIONS
///////////////////////////////////////////////////////////
// This file contains all the help file for phpScheduleit.  Please save the translated
//  file as '2 letter language code'.help.php.  For example, en.help.php.
// 
// To make phpScheduleIt help available in another language, simply translate this
//  file into your language.  If there is no direct translation, please provide the
//  closest translation.
//
// This will be included in the body of the help file.
//
// Please keep the HTML formatting unless you need to change it.  Also, please try
//  to keep the HTML XHTML 1.0 Transitional complaint.
///////////////////////////////////////////////////////////
?>
<div align="center"> 
  <h3><a name="top" id="top"></a>Wprowadzenie do phpScheduleIt</h3>
  <p><a href="http://phpscheduleit.sourceforge.net" target="_blank">http://phpscheduleit.sourceforge.net</a></p>
  <table width="100%" border="0" cellspacing="0" cellpadding="5" style="border: solid #CCCCCC 1px">
    <tr> 
      <td bgcolor="#FAFAFA"> 
        <ul>
          <li><b><a href="#getting_started">Wprowadzenie</a></b></li>
          <ul>
            <li><a href="#registering">Rejestracja</a></li>
            <li><a href="#logging_in">Logowanie</a></li>
            <li><a href="#language">Wyb�r j�zyka</a></li>
            <li><a href="#manage_profile">Zmiana has�a lub informacji o u�ytkowniku</a></li>
            <li><a href="#resetting_password">Zerowanie zapomnianego has�a</a></li>
            <li><a href="#getting_support">Pomoc</a></li>
          </ul>
          <li><a href="#my_control_panel"><b>Panel sterowania</b></a></li>
          <ul>
            <li><a href="#quick_links">Odno�niki</a></li>
			<li><a href="#my_announcements">Moje powiadomienia</a></li>
            <li><a href="#my_reservations">Moje rezerwacje</a></li>
            <li><a href="#my_training">Moje uprawnienia</a></li>
			<li><a href="#my_invitations">Moje zaproszenia</a></li>
			<li><a href="#my_participation">M�j udzia� w rezerwacjach</a></li>         
          </ul>
          <li><a href="#using_the_scheduler"><b>U�ywanie terminarza</b></a></li>
          <ul>
			<li><a href="#read_only">Wersja tylko do odczytu</a></li>
            <li><a href="#making_a_reservation">Tworzenie rezerwacji</a></li>
            <li><a href="#modifying_deleting_a_reservation">Zmiana/usuwanie rezerwacji</a></li>
            <li><a href="#navigating">Nawigowanie po terminarzu</a></li>
          </ul>
        </ul>
		<hr width="95%" size="1" noshade="noshade" />
        <h4><a name="getting_started" id="getting_started"></a>Wprowadzenie</h4>
        <p>Aby u�ywa� systemu rezerwacji phpSheduleIt, nale�y si� najpierw zalogowa�. 
          Je�li posiadasz ju� konto, zalogowanie si� pozwoli na korzystanie funkcji systemu.
		  Na g�rze ka�dej strony (z wyj�tkiem rejestracji i logowania do stron) ujrzysz
		  komunikat powitalny, dzisiejsz� dat� oraz kilka odno�nik�w
          -- odno�nik &quot;Wyloguj&quot; oraz odno�nik &quot;Panel sterowania&quot; poni�ej
		  komunikatu oraz &quot;Pomoc&quot poni�ej daty.</p>
          <p>Je�li poprzednio zalogowany u�ytkownik jest wy�wietlany w komunikacie powitalnym, 
		  kliknij &quot;Wyloguj&quot; aby wyczy�ci� wszystkie pliki cookie u�ywane przez niego 
		  oraz <a href="#logging_in">zaloguj si�</a> do systemu. 
		  Klikni�cie na odno�nik &quot;Panel sterowania&quot; zabierze Ci� do <a href="#my_control_panel">Panelu sterowania</a>, Twojej &quot;strony domowej&quot; terminarza.
          Klikni�cie opcji &quot;Pomoc&quot; spowoduje otwarcie okna pomocy. Klikni�cie &quot;Wy�lij maila administratorowi&quot; spowoduje otwarcie nowej wiadomo�ci email adresowanej do administratora systemu.</p>
          <p><font color="#FF0000">Ostrze�enie:</font> W przypadku u�ywania 
		    Norton Personal Firewall w trakcie korzystania z systemu phpScheduleIt, mo�esz napotka� problemy.
            Przed skorzystaniem z niego nale�y wy��czy� firewall, a po zako�czeniu pracy w��czy� go ponownie.</p>
          <p align="right"><a href="#top">W g�r�</a></p>
        <h5><a name="registering" id="registering"></a>Rejestracja</h5>
        <p>Aby si� zarejestrowa�, najpierw nale�y otworzy� stron� rejestracji. Mo�na tego
		dokona� poprzez odno�nik na g��wnej stronie logowania. Nale�y wype�ni� wszystkie pola.
          Zarejestrowany adres email stanie si� Twoim loginem. Wprowadzone informacje mog�
		  by� usuni�te w dowolnym czasie poprzez opcj� <a href="#quick_links">zmiany swojego profilu</a>. Wybranie opcji &quot;Utrzymuj sesj�&quot; spowoduje u�ycie plik�w cookie przegl�darki (tzw. ciasteczek)
		  przy identyfikacji za ka�dym razem po powrocie z terminarza, dzi�ki czemu u�ytkownik 
		  b�dzie logowany automatycznie podczas ka�dej wizyty.
          <i>Tej opcji nale�y u�ywa� jedynie w przypadku gdy jeste� jedyn� osob� korzystaj�c� z komputera.</i> 
          Po zarejestrowaniu, u�ytkownik zostanie przekierowany do <a href="#my_control_panel">Panelu sterowania</a>.</p>
        <p align="right"><a href="#top">W g�r�</a></p>
        <h5><a name="logging_in" id="logging_in"></a>Logowanie</h5>
        <p>Logowanie polega na wprowadzaniu adresu email i has�a.
		 Nale�y <a href="#registering">zarejestrowa� si�</a> zanim b�dzie mo�na si� zalgoowa�. 
          Mo�na tego dokona� poprzez wybranie odno�nika rejestracji na stronie logowania.
		  Wyb�r opcji &quot;Utrzymuj sesj�&quot; spowoduje u�ycie plik�w cookie w celu
		  identyfikacji za ka�dym razem przy powrocie do terminarza, pomijaj�c konieczno��
		  logowania si� do systemu za ka�dym razem. <i>Tej opcji nale�y u�ywa� jedynie
		  gdy nikt poza u�ytkownikiem nie korzysta z tego komputera.</i> Po zalogowaniu si�
		  u�ytkownik zostanie przekierowany do <a href="#my_control_panel">Panelu sterowania</a>.</p>
        <p align="right"><a href="#top">W g�r�</a></p>
        <h5><a name="language" id="language"></a>Wyb�r j�zyka</h5>
        <p>Na stronie logowania, wy�wietlone zostanie menu rozwijane ze wszystkimi
		dost�pnymi t�umaczeniami jakie s� dost�pne w systemie <a href="#my_control_panel"></a>.
          Wybierz j�zyk, kt�ry preferujesz a wszystkie napisy systemu phpScheduleIt zostan� przet�umaczone. 
		  Ten wyb�r nie spowoduje jednak przet�umaczenia �adnego tekstu wprowadzonego przez
		  g��wnego administratora lub innych u�ytkownik�w, przet�umaczone zostan� jedynie teksty
		  wy�wietlane w aplikacji. Aby zmieni� j�zyk nale�y si� przelogowa�.</p>
        <p align="right"><a href="#top">W g�r�</a></p>        
        <h5><a name="manage_profile" id="manage_profile"></a>Edycja profilu</h5>
        <p>Aby zmieni� informacje na temat swojego profilu (nazwa, adres email, itd.) lub swoje
		has�o, nale�y najpierw zalogowa� si� do systemu.
        Na stronie <a href="#my_control_panel">Panel Sterowania</a>, w menu <a href="#quick_links">Odno�niki</a>, kliknij opcj� &quot;Edycja profilu&quot;. Zostanie wy�wietlony formularz, z wype�nionymi polami
		informacyjnymi. Mo�na je zmodyfikowa� zgodnie ze swoim �yczeniem.
		Ka�de pole pozostawione pustym nie zostanie zamienione. Je�li chcesz zmieni� has�o, nale�y wprowadzi�
		je dwukrotnie. Po zako�czeniu edycji, nale�y klikn�� przycisk &quot;Eycja profilu&quot; 
          i zmiany dokonane przez u�ytkownika zostan� zapisane do bazy danych. System nast�pnie wr�ci do 
		  strony g��wnej panelu sterowania.</p>
        <p align="right"><a href="#top">W g�r�</a></p>
        <h5><a name="resetting_password" id="resetting_password"></a>Resetowanie zapomnianego has�a</h5>
        <p>W przypadku gdyby u�ytkownik zapomnia� has�a, mo�e ono zosta� wygenerowane na nowo i przes�ane 
		za po�rednictwem poczty internetowej. Aby to uczyni�, nale�y przej�� do strony logowania i 
		klikn�� odno�nik &quot;Zapomnia�em has�a&quot; znajduj�cy si� pod formularzem logowania.
		System przekieruje u�ytkownika na now� stron� i poprosi o wprowadzenie adresu email.
		Po klikni�ciu &quot;Zmiana has�a&quot;, nowe, losowo wygenerowane has�o zostanie utworzone. 
		To nowe has�o zostanie ustawione w bazie danych i przes�ane poczt� internetow�. 
		Po otrzymaniu maila, nalezy je skopiowa� i wklei� jako nowe has�o na ekranie, 
          <a href="#logging_in">logowania</a>, a nast�pnie <a href="#manage_profile">zmieni� has�o</a>.</p>
        <p align="right"><a href="#top">Top</a></p>
        <h5><a name="getting_support" id="getting_support"></a>Pomoc</h5>
        <p>Je�li nie posiadasz uprawnie� do u�ywania zasobu, masz jakiekolwiek pytania dotycz�ce
		zasobu, rezerwacji lub swojego konta u�ytkownika, skorzystaj z odno�nika 
		 &quot;Email do administratora&quot; 
          umieszczonego w menu <a href="#quick_links">Odno�niki.</a></p>
        <p align="right"><a href="#top">W g�r�</a></p>        <p align="right">&nbsp;</p>
        <hr width="95%" size="1" noshade="noshade" />
        <h4><a name="my_control_panel" id="my_control_panel"></a>Panel sterowania</h4>
        <p>Panel sterowania to &quot;strona pocz�tkowa&quot; systemu rezerwacji. 
		Za jego pomoc� mo�na przegl�da�, modyfikowa� lub usuwa� swoje rezerwacje.
		Panel sterowania posiada tak�e odno�nik do <a href="#using_the_scheduler">Terminarza</a>, 
          do <a href="#quick_links">Edycji profilu</a> oraz opcj� do wylogowania si� z systemu.</p>
        <p align="right"><a href="#top">W g�r�</a></p>
        <h5><a name="quick_links" id="quick_links"></a>Odno�niki</h5>
        <p>Tabela odno�nik�w dostarcza u�ytkownikowi dost�p do podstawowych funkcji aplikacji.
		Po pierwsze, &quot;Rezerwacje&quot;. U�ycie odno�nika spowoduje przeniesienie do domy�lnego
		 terminarza. Mo�na tu wy�wietli� wszystkie rezerwacje zasob�w, zarezerwowa� je lub
		 zmodyfikowa� aktualne rezerwacje.</p>
        <p>&quot;M�j kalendarz&quot; spodowuje przeniesienie do widoku kalendarza
		rezerwacji, kt�re zosta�y zaplanowane lub u�ytkownik bierze udzia� w innej rezerwacji. 
		Mo�na je obejrze� w zestawieniu dziennym, tygodniowym lub miesi�cznym.</p>
        <p>&quot;Kalendarz termin�w&quot; spowoduje przeniesienie u�ytkownika do widoku kalendarza
		rezerwacji dla wybranego zasoby lub dla wszystkich zasob�w wybranego terminu. 
		Po wybraniu widoku dziennego okre�lonego zasobu, b�dzie mo�na wydrukowa� 
		widok &quot;Arkusza rejestracji&quot; poprzez klikni�cie ikony obok menu rozwijanego wybranego zasobu.</p>
        <p>&quot;Edycja profilu &quot; przeniesienie u�ytkownika na stron�, kt�ra pozwala
		  na edycj� informacji osobistych takich jak adres email, nazwa, numer telefonu i has�o.
		  Wszystkie wprowadzone ju� infromacje b�d� umieszczone w okre�lonych polach.
		  Puste lub niezmienione warto�ci nie zostan� podmienione w systemie.</p>
        <p>&quot;Ustawienia email&quot; przeniesie do strony, gdzie mo�na wybra� w jaki spos�b i kiedy 
		u�ytkownik b�dzie informowany o zdarzeniach maj�cych zwi�zek z terminarzem.
		Domy�lnie u�ytkownik otrzymuje powiadomienie w momencie dodania, modyfikacji lub usuni�cia
		rezerwacji.</p>
        <p>Ostatni odno�nik, &quot;Wyloguj&quot; spowoduje wylogowanie u�ytkownika,
		zamkni�cie aktualnej sesji oraz powr�t do ekranu logowania.</p>
        <p align="right"><a href="#top">W g�r�</a></p>
        <h5><a name="my_announcements" id="my_announcements"></a>Moje powiadomienia</h5>
        <p>Ta tabela wy�wietli wszystkie powiadomienia jakie administrator systemu uzna� za wa�ne.</p>
        <p align="right"><a href="#top">W g�r�</a></p>
        <h5><a name="my_reservations" id="my_reservations"></a>Moje rezerwacje</h5>
        <p>Tabela z rezerwacjami wy�wietla wszystkie przysz�e rezerwacje rozpoczynaj�c
		od dnia dzisiejszego (domy�lnie). Ta tabela zawiera ka�d� dat� rezerwacji,
		zas�b, dzie�/czas jej utworzenia, dzie�/czas jej ostatniej modyfikacji, czas rozpocz�cia
		oraz czas zako�czenia. Z poziomu tej tabeli mo�na zmodyfikowa� lub usun�� rezerwacj� poprzez 
		klikni�cie opcji &quot;Edytuj&quot; lub &quot;Usu�&quot; 
        na ko�cu ka�dego wiersza przegl�du rezerwacji. Obydwie opcje uruchamiaj� wyskakuj�ce
		okienko gdzie mo�na potwierdzi� zmiany zwi�zane z rezerwacj�. Klikni�cie daty rezerwacji przenosi
		u�ytkownika do nowego okna gdzie mo�na przejrze� szczeg�y dotycz�ce rezerwacji.</p>
        <p>Aby uporz�dkowa� rezerwacje wed�ug okre�lonej kolumny, nale�y klikn�� na 
		 &#150; 
          lub odno�nik + znajduj�cy si� u g�ry kolumny. Znak minus uporz�dkuje rezerwacje
		  w kolejno�ci malej�cej, znak plus w kolejno�ci rosn�cej wed�ug parametru okre�lonego przez nazw� kolumny.</p>
        <p align="right"><a href="#top">W g�r�</a></p>
        <h5><a name="my_training" id="my_training"></a>Moje uprawnienia</h5>
        <p>Tabela Moje uprawnienia wy�wietla wszystkie zasoby, do kt�rych u�ytkownik posiada dost�p.
		Zawiera nazw� zasobu, jego lokalizacj� oraz numer telefonu, kt�ry mo�e pos�u�y� do skontaktowania
		si� z jego administratorem.</p>
        <p>Od razu po zako�czeniu rejestracji, u�ytkownik nie posiada uprawnie� do u�ycia �adnego z zasob�w,
		chyba �e administrator zdecyduje na automatyczne nadawanie uprawnie�. Administrator jest jedyn�
		osob�, kt�ra mo�e nada� u�ytkownikowi uprawnienia do danego zasobu. Nie mo�na rezerwowa� terminu
		u�ycia zasobu zanim nie otrzyma si� uprawnie�, lecz b�dzie i tak mo�na przejrze� kalendarz i aktualne
		rezerwacje.</p>
        <p align="right"><a href="#top">W g�r�</a></p>
        <h5><a name="my_invitations" id="my_invitations"></a>My zaproszenia</h5>
        <p>Tabela Moje zaproszenia wy�wietla wszystkei rezerwacje, do kt�rych u�ytkownik
		zosta� zaproszony i pozwala na zaakceptowanie lub odrzucenie wsp�udzia�u w tej
		rezerwacji. Po zaakceptowaniu, u�ytkownik wci�� ma mo�liwo�� do zako�czenia
		partycypacji w czasie p�niejszym. Po odrzuceniu zaproszenia, zniknie ona i nie b�dzie
		mo�na jej zaakceptowa�, chyba �e autor rezerwacji ponownie prze�le zaproszenie.</p>
        <p align="right"><a href="#top">W g�r�</a></p>        
        <h5><a name="my_participation" id="my_participation"></a>M�j udzia� w rezerwacjach</h5>
        <p>Tabela M�j udzia� w rezerwacjach wy�wietla wszystkie rezerwacje, w kt�rych
		u�ytkownik ma wsp�udzia�. Ta opcja nie jest wy�wietlana je�li u�ytkownik jest 
		autorem danej rezerwacji. Z poziomu tej tabeli mo�na zako�czy� udzia� w danej wsp�rezerwacji.
		Po zako�czeniu, nie mo�na bra� wi�cej udzia�u w tej konkretnej rezerwacji, chyba �e jej autor
		ponownie wy�wle zaproszenie.</p>
        <p align="right"><a href="#top">W g�r�</a></p>        <p align="right">&nbsp;</p>
        <hr width="95%" size="1" noshade="noshade" />
        <h4><a name="using_the_scheduler" id="using_the_scheduler"></a>U�ycie terminarza</h4>
        <p>Terminarz to miejsce, w kt�rym mo�na korzysta� z funkcji planowania rezerwacji.
		Wy�wietlany tydzie� rozpoczyna si� aktualnego tygodnia i rozci�ga si� na 7 (domy�lna warto��)
		dni.
		Tutaj mo�na przejrze� zaplanowane terminy, zarezerwowa� zasoby oraz zmodyfikowa� aktualne rezerwacje.
		Rezerwacje s� oznaczane r�nymi kolorami, ka�da z nich jest wy�wietlana, jednak tylko
        <i>Twoje</i> rezerwacje udost�pniaj� odno�nik do modyfikacji ich parametr�w. Wszystkie inne
		rezerwacje udost�pniaj� jedynie mo�liwo�� ich podejrzenia.</p>
        <p>Mo�na zmieni� zaplanowane terminy (je�li istnieje wi�cej ni� jeden) przy u�yciu rozwijanego
		menu u g�ry terminarza.</p>
        <p>Administrator systemu mo�e okre�li� tereminy &quot;niedost�pno�ci&quot;,
          lub okre�li�, kt�re zasoby s� niedost�pne. Rezerwacje nie zostan� umieszczone, je�li
		  koliduj� z czasem niedost�pno�ci.</p>
        <p align="right"><a href="#top">W g�r�</a></p>
        <h5><a name="read_only" id="read_only"></a>Wersja tylko do odczytu</h5>
        <p>Je�li jeszcze nie masz konta lub nie uda�o Ci si� zalogowa�, mo�na zobaczy� wersj�
		tylko do odczytu poprzez klikni�cie odno�nika
		 &quot;Zobacz terminarz&quot; znajduj�cego si� na stronie logowania. 
		 Ta wersja terminarza wy�wietli wszystkie zasoby i rezerwacje, lecz nie b�dzie mo�liwo�ci
		 zobaczenia szczeg��w na ich temat ani zrobienia nowej rezerwacji.</p>
        <p align="right"><a href="#top">W g�r�</a></p>
        <h5><a name="making_a_reservation" id="making_a_reservation"></a>Tworzenie rezerwacji</h5>
        <p>Aby zarezerwowa� zas�b, najpier nale�y przej�� do tabeli reprezentuj�cej dzie�
		na jaki ma by� rezerwacja. Po zlokalizowaniu dnia, nale�y klikn�� na nazw� zasobu.
		Czynno�� ta spowoduje wy�wietlenie wyskakuj�cego okienka gdzie nale�y dokona� wyboru
		daty rozpocz�cia i zako�czenia (o ile dozwolone) oraz czasu na jaki dany zas�b ma zosta�
		zarezerwowany.</p>
        <p>Poni�ej zostanie wy�wietlony komunikat informuj�cy u�ytkownika na jak d�ugo 
		mo�na zarezerwowa� zas�b. Je�li rezerwacja jest d�u�sza lub kr�tsza ni� dozwolona,
		nie zostanie ona zaakceptowana.</p>
        <p>Mo�na tak�e wybra� czy chcesz powt�rzy� t� rezerwacj�. Aby powt�rzy� rezerwacj� nale�y
		wybra� dni, w kt�rych ma zosta� ona powt�rzona, a nast�pnie wybra� co ile czasu ta rezerwacja
		ma by� powielana.
		Rezerwacja b�dzie utworzona dla aktualnie wybranego dnia, plus wszystkie dni
		wybrane jako dni powt�rze�. Wszystkie terminy, kt�re nie b�d� mog�y zosta� zarezerwowane 
		z powodu konfliktu zostan� wy�wietlone. Podczas tworzenia rezerwacji obejmuj�cej wi�cej
		ni� jeden dzie�, opcje powt�rze� nie b�d� dost�pne.</p>
        <p>Mo�na dodawa� uwagi na temat rezerwacji, poprzez wype�nienie odpowiedniego pola tekstowego. 
		Ten tekst b�dzie widoczny dla innych u�ytkownik�w.</p>        
        <p>Po ustawieniu poprawnej daty/czasu rozpocz�cia i zako�czenia rezerwacji i wybrania
		czy ma zosta� ona powtarzana, nale�y nacisn�� przycisk 
		 &quot;Zapisz&quot;.
           Pojawi si� komunikat czy rezerwacja si� powiod�a, informuj�c u�ytkownika o dacie (datach)
		   dokonanych rezerwacji. W przypadku niepowodzenia, nale�y cofn�� si� i zmodyfikowa� termin,
		   kt�ry nie b�dzie kolidowa� z inn� ju� dokonan� rezerwacj�.
		   Po pomy�lnym zarezerwowaniu terminu, terminarz zostanie automatycznie od�wie�ony. Jest
		   to czynno�� niezb�dna do prze�adowania wszystkich informacji o rezerwacjach z bazy danych.</p>
        <p>Nie mo�na zarezerwowa� terminu dla dat przesz�ych, dla zasobu, do kt�rego u�ytkownik nie posiada
		uprawnie� lub dla zasobu, kt�ry aktualnie nie jest aktywny. Te zasoby b�d� wyszarzone i nie b�d�
		udost�pnia�y odno�nika umo�liwiaj�cego dokonanie rezerwacji.</p>
        <p align="right"><a href="#top">W g�r�</a></p>
        <h5><a name="modifying_deleting_a_reservation" id="modifying_deleting_a_reservation"></a>Zmiana/usuwanie rezerwacji</h5>
        <p>Istnieje kilka sposob�w na modyfikacj� lub usuni�cie rezerwacji.
		Jednym z nich jest otwarcie <a href="#my_control_panel">Panelu sterowania</a> jak to ju� zosta�o opisane.
		Inny spos�b to skorzystanie z terminarza internetowego. Zosta� opisany w poprzednim akapicie,
		tylko u�ytkownik, kt�ry dokona� rezerwacj� mo�e j� modyfikowa� (opr�cz administratora).
		Wszystkie inne rezerwacje b�d� widoczne, lecz nie b�d� zawiera�y odno�nika pozwalaj�cego
		na ich modyfikacj�.</p>
        <p>Aby zmodyfikowa� rezerwacj� z u�yciem terminarza, nale�y po prostu klikn��
		na odpowiedni� rezerwacj�. Wy�wietlone zostanie okno dialogowe bardzo podobne do okna rezerwacji.
		U�ytkownik ma 2 mo�liwo�ci: mo�e zmodyfikowa� terminy rozpocz�cia i zako�czenia rezerwacji,
		lub te� zaznaczy� opcj� &quot;Usun��&quot;.
           Po zako�czeniu modyfikacji, naci�nij przycisk &quot;Zapisz&quot; na dole formularza.
		  Twoje nowe opcje b�d� okre�lane w zale�no�ci od aktualnych rezerwacji za� na dole pojawi si�
		  komunikat o aktualnym stanie modyfikacji. Je�li u�ytkownik chce dokona� zmiany terminu,
		  nale�y wr�ci� do okna modyfikacji i wybra� nowe terminy, kt�re nie koliduj� z innymi rezerwacjami.
		  Po pomy�lnym zako�czeniu modyfikacji, terminarz zostanie automatycznie od�wie�ony. Jest to
		  czynno�� niezb�dna do prze�adowania informacji o rezerwacji w bazie danych.</p>
        <p>Aby zmodyfikowa� grup� powtarzaj�cych si� rezerwacji, nale�y zaznaczy� opcj� opisan�
		To modify a group of recurring reservations, check the box labeled
        &quot;Uaktualni� grup� powtarzaj�cych si� rezerwacji?&quot;. Wszystkie koliduj�ce
		daty zostan� wypisane na ekranie.</p>
        <p>Nie mo�na zmodyfikowa� rezerwacji dla daty, kt�ra ju� min�a.</p>
        <p align="right"><a href="#top">W g�r�</a></p>
        <h5><a name="navigating" id="navigating"></a>Nawigowanie po terminarzu</h5>
        <p>Istnieje wiele sposob�w na korzystanie z przegl�darki dat w terminarzu.</p>
        <p>Poruszanie si� tydzie� po tygodniu jest mo�liwe za pomoc� odno�nik�w 
		 &quot;Poprzedni tydz.&quot; oraz &quot;Nast�pny tydz.&quot; 
          znajduj�cych si� w dolnej cz�ci terminarza.</p>
        <p>Skok do dowolnej daty jest mo�liwy po wprowadzeniu jej do formularza w dole terminarza.</p>
        <p>Otwarcie kalendarza nawigacyjnego mo�na dokona� poprzez klikni�cie odno�nika
		 &quot;Obejrzyj miesi�czny kalendarz&quot; Wybierz ��dan� dat� i kliknij na ni� aby przej�� za pomoc�
		 terminarza do tej daty.</p>
        <p align="right"><a href="#top">W g�r�</a></p>
      </td>
    </tr>
  </table>
</div>