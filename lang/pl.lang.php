<?php
/**
* Polish (en) translation file.
* This also serves as the base translation file from which to derive
*  all other translations.
*  
* @author Arkadiusz Lipiec arkadiusz.lipiec@gmail.com
* @version 05-11-09
* @package Languages
*
* Copyright (C) 2003 - 2007 phpScheduleIt
* License: GPL, see LICENSE
*/
///////////////////////////////////////////////////////////
// INSTRUCTIONS
///////////////////////////////////////////////////////////
// This file contains all of the strings that are used throughout phpScheduleit.
// Please save the translated file as '2 letter language code'.lang.php.  For example, en.lang.php.
// 
// To make phpScheduleIt available in another language, simply translate each
//  of the following strings into the appropriate one for the language.  If there
//  is no direct translation, please provide the closest translation.  Please be sure
//  to make the proper additions the /config/langs.php file (instructions are in the file).
//  Also, please add a help translation for your language using en.help.php as a base.
//
// You will probably keep all sprintf (%s) tags in their current place.  These tags
//  are there as a substitution placeholder.  Please check the output after translating
//  to be sure that the sentences make sense.
//
// + Please use single quotes ' around all $strings.  If you need to use the ' character, please enter it as \'
// + Please use double quotes " around all $email.  If you need to use the " character, please enter it as \"
//
// + For all $dates please use the PHP strftime() syntax
//    http://us2.php.net/manual/en/function.strftime.php
//
// + Non-intuitive parts of this file will be explained with comments.  If you
//    have any questions, please email lqqkout13@users.sourceforge.net
//    or post questions in the Developers forum on SourceForge
//    http://sourceforge.net/forum/forum.php?forum_id=331297
///////////////////////////////////////////////////////////

////////////////////////////////
/* Do not modify this section */
////////////////////////////////
global $strings;			  //
global $email;				  //
global $dates;				  //
global $charset;			  //
global $letters;			  //
global $days_full;			  //
global $days_abbr;			  //
global $days_two;			  //
global $days_letter;		  //
global $months_full;		  //
global $months_abbr;		  //
global $days_letter;		  //
/******************************/

// Charset for this language
// 'iso-8859-1' will work for most languages
$charset = 'windows-1250';

/***
  DAY NAMES
  All of these arrays MUST start with Sunday as the first element 
   and go through the seven day week, ending on Saturday
***/
// The full day name
$days_full = array('Niedziela', 'Poniedzia�ek', 'Wtorek', '�roda', 'Czwartek', 'Pi�tek', 'Sobota');
// The three letter abbreviation
$days_abbr = array('Nie', 'Pon', 'Wto', '�ro', 'Czw', 'Pt', 'Sob');
// The two letter abbreviation
$days_two  = array('Ni', 'Po', 'Wt', '�r', 'Cz', 'Pt', 'So');
// The one letter abbreviation
$days_letter = array('N', 'P', 'W', '�', 'C', 'P', 'S');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('Stycze�', 'Luty', 'Marzec', 'Kwiecie�', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpie�', 'Wrzesie�', 'Pa�dziernik', 'Listopad', 'Grudzie�');
// The three letter month name
$months_abbr = array('Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Pa�', 'Lis', 'Gru');

// All letters of the alphabet starting with A and ending with Z
$letters = array ('A', '�', 'B', 'C', '�', 'D', 'E', '�', 'F', 'G', 'H', 'I', 'J', 'K', 'L', '�', 'M', 'N', '�', 'O', '�', 'P', 'Q', 'R', 'S', '�', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '�', '�');

/***
  DATE FORMATTING
  All of the date formatting must use the PHP strftime() syntax
  You can include any text/HTML formatting in the translation
***/
// General date formatting used for all date display unless otherwise noted
$dates['general_date'] = '%d/%m/%Y';
// General datetime formatting used for all datetime display unless otherwise noted
// The hour:minute:second will always follow this format
$dates['general_datetime'] = '%d/%m/%Y @';
// Date in the reservation notification popup and email
$dates['res_check'] = '%A %d/%m/%Y';
// Date on the scheduler that appears above the resource links
$dates['schedule_daily'] = '%A,<br/>%d/%m/%Y';
// Date on top-right of each page
$dates['header'] = '%A, %B %d, %Y';
// Jump box format on bottom of the schedule page
// This must only include %m %d %Y in the proper order,
//  other specifiers will be ignored and will corrupt the jump box 
$dates['jumpbox'] = '%d %m %Y';

/***
  STRING TRANSLATIONS
  All of these strings should be translated from the English value (right side of the equals sign) to the new language.
  - Please keep the keys (between the [] brackets) as they are.  The keys will not always be the same as the value.
  - Please keep the sprintf formatting (%s) placeholders where they are unless you are sure it needs to be moved.
  - Please keep the HTML and punctuation as-is unless you know that you want to change it.
***/
$strings['hours'] = 'godzin(y)';
$strings['minutes'] = 'minut(y)';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'mm';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'dd';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'rrrr';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = 'Administrator';
$strings['Welcome Back'] = 'Witaj znowu, %s';
$strings['Log Out'] = 'Wyloguj';
$strings['My Control Panel'] = 'Panel sterowania';
$strings['Help'] = 'Pomoc';
$strings['Manage Schedules'] = 'Terminy';
$strings['Manage Users'] ='U�ytkownicy';
$strings['Manage Resources'] ='Zasoby';
$strings['Manage User Training'] ='Szkolenie u�ytkownik�w';
$strings['Manage Reservations'] ='Rezerwacje';
$strings['Email Users'] ='Email do u�ytkownik�w';
$strings['Export Database Data'] = 'Eksport danych z bazy';
$strings['Reset Password'] = 'Wyzeruj has�o';
$strings['System Administration'] = 'Administracja systemem';
$strings['Successful update'] = 'Aktualizacja powiod�a si�';
$strings['Update failed!'] = 'Aktualizacja zako�czona niepowodzeniem!';
$strings['Manage Blackout Times'] = 'Czasy niedost�pno�ci';
$strings['Forgot Password'] = 'Zapomnia�em has�a';
$strings['Manage My Email Contacts'] = 'Zarz�dzaj kontaktami email';
$strings['Choose Date'] = 'Wybierz dat�';
$strings['Modify My Profile'] = 'Modyfikacja profilu';
$strings['Register'] = 'Zarejestruj';
$strings['Processing Blackout'] = 'Przetwarzanie termin�w niedost�pno�ci';
$strings['Processing Reservation'] = 'Przetwarzanie rezerwacji';
$strings['Online Scheduler [Read-only Mode]'] = 'Terminarz online [tylko do odczytu]';
$strings['Online Scheduler'] = 'Terminarz online';
$strings['phpScheduleIt Statistics'] = 'Statystyki phpScheduleIt';
$strings['User Info'] = 'Informacje o u�ytkowniku:';

$strings['Could not determine tool'] = 'Nie mo�na znale�� narz�dzia. Wr�� do panelu administracyjnego i spr�buj ponownie.';
$strings['This is only accessable to the administrator'] = 'Ta opcja jest dost�pna tylko dla administratora';
$strings['Back to My Control Panel'] = 'Powr�t do panelu administracyjnego';
$strings['That schedule is not available.'] = 'Ten termin nie jest dost�pny.';
$strings['You did not select any schedules to delete.'] = 'Nie wybrano termin�w do usuni�cia.';
$strings['You did not select any members to delete.'] = 'Nie wybrano u�ytkownik�w do usuni�cia.';
$strings['You did not select any resources to delete.'] = 'Nie wybrano �adnych zasob�w do usuni�cia.';
$strings['Schedule title is required.'] = 'Wymagany jest tytu� terminu.';
$strings['Invalid start/end times'] = 'Niepoprawna data pocz�tkowa/ko�cowa.';
$strings['View days is required'] = 'Wymagane jest pole wy�wieltlanych dni';
$strings['Day offset is required'] = 'Wymagane jest stworzenie odcink�w czasu';
$strings['Admin email is required'] = 'Wymagany jest adres email administratora';
$strings['Resource name is required.'] = 'Wymagana jest nazwa zasobu.';
$strings['Valid schedule must be selected'] = 'Nale�y wybra� poprawny termin';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = 'Miminalna d�ugo�� rezerwacji musi by� mniejsza lub co najmniej r�wna maksymalnej.';
$strings['Your request was processed successfully.'] = 'Twoje ��danie zosta�o pomy�lnie przetworzone.';
$strings['Go back to system administration'] = 'Powr�t do administracji systemem';
$strings['Or wait to be automatically redirected there.'] = 'Lub poczekaj na automatyczne przekierowanie.';
$strings['There were problems processing your request.'] = 'Wyst�pi� problem z przetworzeniem ��dania.';
$strings['Please go back and correct any errors.'] = 'Wr�� i popraw wszystkie b��dy.';
$strings['Login to view details and place reservations'] = 'Zaloguj si� aby zobaczy� szczeg�y oraz zarezerwowa� termin';
$strings['Memberid is not available.'] = 'Memberid: %s nie jest dost�pny.';

$strings['Schedule Title'] = 'Nazwa terminu';
$strings['Start Time'] = 'Czas rozpocz�cia';
$strings['End Time'] = 'Czas zako�czenia';
$strings['Time Span'] = 'Odcinki czasu';
$strings['Weekday Start'] = 'Pierwszy dzie� tygodnia';
$strings['Admin Email'] = 'Email administratora';

$strings['Default'] = 'Domy�lny';
$strings['Reset'] = 'Wyczy��';
$strings['Edit'] = 'Edycja';
$strings['Delete'] = 'Usu�';
$strings['Cancel'] = 'Anuluj';
$strings['View'] = 'Wy�wietl';
$strings['Modify'] = 'Zmie�';
$strings['Save'] = 'Zapisz';
$strings['Back'] = 'Powr�t';
$strings['Next'] = 'Dalej';
$strings['Close Window'] = 'Zamknij okno';
$strings['Search'] = 'Wyszukaj';
$strings['Clear'] = 'Wyczy��';

$strings['Days to Show'] = 'Wy�wieltane dni';
$strings['Reservation Offset'] = 'Margines czasu rezerwacji';
$strings['Hidden'] = 'Ukryty';
$strings['Show Summary'] = 'Wy�wietlanie informacji';
$strings['Add Schedule'] = 'Dodaj termin';
$strings['Edit Schedule'] = 'Zmodyfikuj termin';
$strings['No'] = 'Nie';
$strings['Yes'] = 'Tak';
$strings['Name'] = 'Nazwa';
$strings['First Name'] = 'Imi�';
$strings['Last Name'] = 'Nazwisko';
$strings['Resource Name'] = 'Nazwa zasobu';
$strings['Email'] = 'Email';
$strings['Institution'] = 'Instytucja';
$strings['Phone'] = 'Telefon';
$strings['Password'] = 'Has�o';
$strings['Permissions'] = 'Uprawnienia';
$strings['View information about'] = 'Wy�wietl informacje o %s %s';
$strings['Send email to'] = 'Wy�lij maila do %s %s';
$strings['Reset password for'] = 'Wyzeruj has�o dla %s %s';
$strings['Edit permissions for'] = 'Zmodyfikuj uprawnienia dla %s %s';
$strings['Position'] = 'Pozycja';
$strings['Password (6 char min)'] = 'Has�o (%s min znak�w)';	// @since 1.1.0
$strings['Re-Enter Password'] = 'Powt�rz has�o';

$strings['Sort by descending last name'] = 'Sortowanie malej�ce po nazwisku';
$strings['Sort by descending email address'] = 'Sortowanie malej�ce po adresie email';
$strings['Sort by descending institution'] = 'Sortowanie malej�ce po instytucji';
$strings['Sort by ascending last name'] = 'Sortowanie rosn�ce po nazwisku';
$strings['Sort by ascending email address'] = 'Sortowanie rosn�ce po adresie email';
$strings['Sort by ascending institution'] = 'Sortowanie rosn�co po instytucji';
$strings['Sort by descending resource name'] = 'Sortowanie malej�co po nazwie zasobu';
$strings['Sort by descending location'] = 'Sortowanie malej�co po lokalizacji';
$strings['Sort by descending schedule title'] = 'Sortowanie malej�co po tytule terminu';
$strings['Sort by ascending resource name'] = 'Sortowanie rosn�co po nazwie zasobu';
$strings['Sort by ascending location'] = 'Sortowanie rosn�co po lokalizacji';
$strings['Sort by ascending schedule title'] = 'Sortowanie rosn�co po tytule terminu';
$strings['Sort by descending date'] = 'Sortowanie malej�co po dacie';
$strings['Sort by descending user name'] = 'Sortowanie malej�co po nazwie u�ytkownika';
$strings['Sort by descending start time'] = 'Sortowanie malej�co po czasie rozpocz�cia';
$strings['Sort by descending end time'] = 'Sortowanie malej�co po czasie zako�czenia';
$strings['Sort by ascending date'] = 'Sortowanie rosn�co po dacie';
$strings['Sort by ascending user name'] = 'Sortowanie rosn�co po nazwie u�ytkownika';
$strings['Sort by ascending start time'] = 'Sortowanie rosn�co po czasie rozpocz�cia';
$strings['Sort by ascending end time'] = 'Sortowanie rosn�co po czasie zako�czenia';
$strings['Sort by descending created time'] = 'Sortowanie malej�co po czasie utworzenia';
$strings['Sort by ascending created time'] = 'Sortowanie rosn�co po czasie utworzenia';
$strings['Sort by descending last modified time'] = 'Sortowanie malej�co po czasie ostatniej modyfikacji';
$strings['Sort by ascending last modified time'] = 'Sortowanie rosn�co po czasie ostatniej modyfikacji';

$strings['Search Users'] = 'Wyszukaj u�ytkownik�w';
$strings['Location'] = 'Lokalizacja';
$strings['Schedule'] = 'Termin';
$strings['Phone'] = 'Telefon';
$strings['Notes'] = 'Uwagi';
$strings['Status'] = 'Status';
$strings['All Schedules'] = 'Wszystkie terminy';
$strings['All Resources'] = 'Wszystkie zasoby';
$strings['All Users'] = 'Wszyscy u�ytkownicy';

$strings['Edit data for'] = 'Zmodyfikuj dane dla %s';
$strings['Active'] = 'Aktywny';
$strings['Inactive'] = 'Nieaktywny';
$strings['Toggle this resource active/inactive'] = 'Prze��cz ten zas�b na aktywny/nieaktywny';
$strings['Minimum Reservation Time'] = 'Minimalny czas rezerwacji';
$strings['Maximum Reservation Time'] = 'Maksymalny czas rezerwacji';
$strings['Auto-assign permission'] = 'Automatyczny przydzia� uprawnie�';
$strings['Add Resource'] = 'Dodaj zas�b';
$strings['Edit Resource'] = 'Zmodyfikuj zas�b';
$strings['Allowed'] = 'Dost�pne';
$strings['Notify user'] = 'Powiadom u�ytkownika';
$strings['User Reservations'] = 'Rezerwacje u�ytkownika';
$strings['Date'] = 'Data';
$strings['User'] = 'U�ytkownik';
$strings['Email Users'] = 'Wy�lij maila u�ytkownikom';
$strings['Subject'] = 'Temat';
$strings['Message'] = 'Wiadomo��';
$strings['Please select users'] = 'Wybierz u�ytkownik�w';
$strings['Send Email'] = 'Wy�lij email';
$strings['problem sending email'] = 'Niestety, nie uda�o si� wys�a� emaila. Spr�buj jeszcze raz p�niej.';
$strings['The email sent successfully.'] = 'Wys�ano pomy�lnie emaila.';
$strings['do not refresh page'] = 'Prosz� <u>nie od�wie�a�</u> tej strony. Ta akcja spowoduje ponowne wys�anie emaila.';
$strings['Return to email management'] = 'Wr�� do zarz�dzania emailami';
$strings['Please select which tables and fields to export'] = 'Wybierz kt�re tabele i kt�re pola maj� zosta� wyekportowane:';
$strings['all fields'] = '- wszystkie pola -';
$strings['HTML'] = 'HTML';
$strings['Plain text'] = 'Zwyk�y tekst';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = 'Export Data';
$strings['Reset Password for'] = 'Wyzeruj has�o dla %s';
$strings['Please edit your profile'] = 'Prosz� zmodyfikowa� sw�j profil';
$strings['Please register'] = 'Zarejestruj si�';
$strings['Keep me logged in'] = 'Utrzymuj sesj� <br/>(wymaga cookie)';
$strings['Edit Profile'] = 'Edycja profilu';
$strings['Register'] = 'Rejestracja';
$strings['Please Log In'] = 'Prosz� si� zalogowa�';
$strings['Email address'] = 'Adres email';
$strings['Password'] = 'Has�o';
$strings['First time user'] = 'Jeste� tu pierwszy raz?';
$strings['Click here to register'] = '<br>Kliknij tu aby si� zarejestrowa�';
$strings['Register for phpScheduleIt'] = 'Zarejestruj w systemie';
$strings['Log In'] = 'Zaloguj';
$strings['View Schedule'] = 'Zobacz terminy';
$strings['View a read-only version of the schedule'] = 'Wy�wietl wersj� terminarza tylko do odczytu';
$strings['I Forgot My Password'] = 'Zapomnia�em has�a';
$strings['Retreive lost password'] = 'Przywr�� utracone has�o';
$strings['Get online help'] = 'Pomoc internetowa';
$strings['Language'] = 'J�zyk';
$strings['(Default)'] = '(Domy�lny)';

$strings['My Announcements'] = 'Moje powiadomienia';
$strings['My Reservations'] = 'Moje rezerwacje';
$strings['My Permissions'] = 'Uprawnienia';
$strings['My Quick Links'] = 'Odno�niki';
$strings['Announcements as of'] = 'Powiadomienia do dnia %s';
$strings['There are no announcements.'] = 'Brak powiadomie�.';
$strings['Resource'] = 'Zas�b';
$strings['Created'] = 'Utworzono';
$strings['Last Modified'] = 'Ost. modyfikacja';
$strings['View this reservation'] = 'Wy�wietl t� rezerwacj�';
$strings['Modify this reservation'] = 'Zmie� t� rezerwacj�';
$strings['Delete this reservation'] = 'Usu� t� rezerwacj�';
$strings['Bookings'] = 'Rezerwacje';										// @since 1.2.0
$strings['Change My Profile Information/Password'] = 'Edycja profilu';		// @since 1.2.0
$strings['Manage My Email Preferences'] = 'Ustawienia email';				// @since 1.2.0
$strings['Mass Email Users'] = 'Masowa wysy�ka maili';
$strings['Search Scheduled Resource Usage'] = 'Wyszukaj rezerwacje';		// @since 1.2.0
$strings['Export Database Content'] = 'Wyeksportuj zawarto�� bazy danych';
$strings['View System Stats'] = 'Statystyki systemu';
$strings['Email Administrator'] = 'Email do administratora';

$strings['Email me when'] = 'Wy�lij emaila gdy:';
$strings['I place a reservation'] = 'Utworzona zostanie nowa rezerwacja';
$strings['My reservation is modified'] = 'Moja rezerwacja zostanie zmieniona';
$strings['My reservation is deleted'] = 'Moja rezerwacja zostanie usuni�ta';
$strings['I prefer'] = 'Format wiadomo�ci:';
$strings['Your email preferences were successfully saved'] = 'Twoje ustawienia email zosta�y pomy�lnie zapisane!';
$strings['Return to My Control Panel'] = 'Powr�t do panelu sterowania';

$strings['Please select the starting and ending times'] = 'Wybierz czas rozpocz�cia i zako�czenia:';
$strings['Please change the starting and ending times'] = 'Zmie� czas rozpocz�cia i zako�czenia:';
$strings['Reserved time'] = 'Czas rezerwacji:';
$strings['Minimum Reservation Length'] = 'Minimalna d�ugo�� rezerwacji:';
$strings['Maximum Reservation Length'] = 'Maksymalna d�ugo�� rezerwacji:';
$strings['Reserved for'] = 'Rezerwacja dla:';
$strings['Will be reserved for'] = 'B�dzie zarezerwowany dla:';
$strings['N/A'] = 'N/A';
$strings['Update all recurring records in group'] = 'Uaktualni� wszystkie powi�zane rekordy w grupie?';
$strings['Delete?'] = 'Usun��?';
$strings['Never'] = '-- Nigdy --';
$strings['Days'] = 'Dni';
$strings['Weeks'] = 'Tygodnie';
$strings['Months (date)'] = 'Miesi�ce (data)';
$strings['Months (day)'] = 'Miesi�ce (dzie�)';
$strings['First Days'] = 'Pierwsze dni';
$strings['Second Days'] = 'Drugie dni';
$strings['Third Days'] = 'Trzecie dni';
$strings['Fourth Days'] = 'Czwarte dni';
$strings['Last Days'] = 'Ostatnie dni';
$strings['Repeat every'] = 'Powtarzaj co:';
$strings['Repeat on'] = 'Powtarzaj od:';
$strings['Repeat until date'] = 'Powtarzaj do daty:';
$strings['Choose Date'] = 'Wybierz dat�';
$strings['Summary'] = 'Informacje';

$strings['View schedule'] = 'Widok termin�w:';
$strings['My Reservations'] = 'Moje rezerwacje';
$strings['My Past Reservations'] = 'Moje przesz�e rezerwacje';
$strings['Other Reservations'] = 'Inne rezerwacje';
$strings['Other Past Reservations'] = 'Inne przesz�e rezerwacje';
$strings['Blacked Out Time'] = 'Czas niedost�pno�ci';
$strings['Set blackout times'] = 'Ustaw czas niedost�pno�ci dla %s na %s'; 
$strings['Reserve on'] = 'Zarezerwuj %s na %s';
$strings['Prev Week'] = '&laquo; Pop. tydzie�';
$strings['Jump 1 week back'] = 'Skocz 1 tydzie� wstecz';
$strings['Prev days'] = '&#8249; Poprz. %d dni';
$strings['Previous days'] = '&#8249; Poprz. %d dni';
$strings['This Week'] = 'Ten tydzie�';
$strings['Jump to this week'] = 'Skocz do tego tygodnia';
$strings['Next days'] = 'Nast. %d dni &#8250;';
$strings['Next Week'] = 'Nast. tydzie� &raquo;';
$strings['Jump To Date'] = 'Skocz do daty';
$strings['View Monthly Calendar'] = 'Obejrzyj miesi�czny kalendarz';
$strings['Open up a navigational calendar'] = 'Otw�rz kalendarz nawigacyjny';

$strings['View stats for schedule'] = 'Zobacz statystyki dla terminu:';
$strings['At A Glance'] = 'Przegl�d';
$strings['Total Users'] = 'Wszyscy u�ytkownicy:';
$strings['Total Resources'] = 'Wszystkie zasoby:';
$strings['Total Reservations'] = 'Ca�kowite rezerwacje:';
$strings['Max Reservation'] = 'Maksymalna rezerwacja:';
$strings['Min Reservation'] = 'Najkr�tsza rezerwacja:';
$strings['Avg Reservation'] = '�rednia rezerwacja:';
$strings['Most Active Resource'] = 'Najaktywniejszy zas�b:';
$strings['Most Active User'] = 'Najaktywniejszy u�ytkownik:';
$strings['System Stats'] = 'Statystyki systemu';
$strings['phpScheduleIt version'] = 'Wersja phpScheduleIt:';
$strings['Database backend'] = 'Proces t�a bazy danych:';
$strings['Database name'] = 'Nazwa bazy danych:';
$strings['PHP version'] = 'Wersja PHP:';
$strings['Server OS'] = 'System OS serwera:';
$strings['Server name'] = 'Nazwa serwera:';
$strings['phpScheduleIt root directory'] = 'Katalog g��wny phpScheduleIt:';
$strings['Using permissions'] = 'U�ywanie uprawnie�:';
$strings['Using logging'] = 'U�ywanie dziennika:';
$strings['Log file'] = 'Pik dziennika:';
$strings['Admin email address'] = 'Administracyjne adresy email:';
$strings['Tech email address'] = 'Techniczne adresy email:';
$strings['CC email addresses'] = 'Adresy email CC:';
$strings['Reservation start time'] = 'Pocz�tek rezerwacji:';
$strings['Reservation end time'] = 'Koniec rezerwacji:';
$strings['Days shown at a time'] = 'Days shown at a time:';
$strings['Reservations'] = 'Rezerwacje';
$strings['Return to top'] = 'Powr�t do g�ry';
$strings['for'] = 'dla';

$strings['Select Search Criteria'] = 'Wybierz kryteria wyszukiwania';
$strings['Schedules'] = 'Terminy:';
$strings['All Schedules'] = 'Wszystkie terminy';
$strings['Hold CTRL to select multiple'] = 'Przytrzymaj CTRL aby wybra� wiele pozycji';
$strings['Users'] = 'U�ytkownicy:';
$strings['All Users'] = 'Wszyscy u�ytkownicy';
$strings['Resources'] = 'Zasoby';		// @since 1.2.0
$strings['All Resources'] = 'Wszystkie zasoby';
$strings['Starting Date'] = 'Data pocz�tkowa:';
$strings['Ending Date'] = 'Data ko�cowa:';
$strings['Starting Time'] = 'Czas pocz�tkowy:';
$strings['Ending Time'] = 'Czas ko�cowy:';
$strings['Output Type'] = 'Typ wyj�cia:';
$strings['Manage'] = 'Zarz�dzaj';
$strings['Total Time'] = 'Ca�kowity czas';
$strings['Total hours'] = 'W sumie godzin:';
$strings['% of total resource time'] = '% ca�kowitego czasu zasob�w';
$strings['View these results as'] = 'Przejrzyj wyniki jako:';
$strings['Edit this reservation'] = 'Zmodyfikuj t� rezerwacj�';
$strings['Search Results'] = 'Rezultaty wyszukiwania';
$strings['Search Resource Usage'] = 'U�ycie wyszkukiwarki';
$strings['Search Results found'] = 'Wyniki wyszukiwania: znaleziono %d rezerwacji';
$strings['Try a different search'] = 'Spr�buj wyszuka� z innymi warunkami';
$strings['Search Run On'] = 'Wyszukiwanie na:';
$strings['Member ID'] = 'ID u�ytkownika';
$strings['Previous User'] = '&laquo; Poprzedni u�ytkownik';
$strings['Next User'] = 'Nast�pny u�ytkownik &raquo;';

$strings['No results'] = 'No results';
$strings['That record could not be found.'] = 'Noe mo�na znale�� tego rekordu.';
$strings['This blackout is not recurring.'] = 'Ten czas niedost�pno�ci si� nie powtarza.';
$strings['This reservation is not recurring.'] = 'Ta rezerwacja si� nie powtarza.';
$strings['There are no records in the table.'] = 'Brak rekord�w w tabeli %s.';
$strings['You do not have any reservations scheduled.'] = 'Nie masz �adnych zaplanowanych rezerwacji.';
$strings['You do not have permission to use any resources.'] = 'Nie masz uprawnie� aby u�ywa� jakichkolwiek zasob�w.';
$strings['No resources in the database.'] = 'Brak zasob�w w bazie danych.';
$strings['There was an error executing your query'] = 'Wyst�pi� b��d przy przetwarzaniu polecenia:';

$strings['That cookie seems to be invalid'] = 'Ten plik cookie nie wygl�da na prawid�owy';
$strings['We could not find that logon in our database.'] = 'Nie mo�na znale�� tego loginu w bazie danych.';	// @since 1.1.0
$strings['That password did not match the one in our database.'] = 'To has�o nie zgadza si� z has�em z bazy danych.';
$strings['You can try'] = '<br />Spr�buj:<br />Zarejestrowa� adres email.<br />Or:<br />Ponowi� pr�b� logowania.';
$strings['A new user has been added'] = 'Dodano nowego u�ytkownika';
$strings['You have successfully registered'] = 'Rejestracja zako�czona pomy�lnie!';
$strings['Continue'] = 'Kontynuuj...';
$strings['Your profile has been successfully updated!'] = 'Tw�j profil zosta� poprawnie uaktualniony!';
$strings['Please return to My Control Panel'] = 'Wr�� do panelu sterowania';
$strings['Valid email address is required.'] = '- Wymagany jest poprawny adres email.';
$strings['First name is required.'] = '- Wymagane imi�.';
$strings['Last name is required.'] = '- Wymagane nazwisko.';
$strings['Phone number is required.'] = '- Wymagany numer telefonu.';
$strings['That email is taken already.'] = '- Ten adres email jest ju� u�ywany.<br />Spr�buj ponownie z innym adresem email.';
$strings['Min 6 character password is required.'] = '- Potrzebna min. liczba %s znak�w has�a.';
$strings['Passwords do not match.'] = '- Has�a nie s� zgodne.';

$strings['Per page'] = 'Na stronie:';
$strings['Page'] = 'Strona:';

$strings['Your reservation was successfully created'] = 'Pomy�lnie utworzono rejestracj�';
$strings['Your reservation was successfully modified'] = 'Pomy�lnie zmodyfikowano rejestracj�';
$strings['Your reservation was successfully deleted'] = 'Pomy�lnie usuni�to rejestracj�';
$strings['Your blackout was successfully created'] = 'Czas niedost�pno�ci zosta� pomy�lnie utworzony';
$strings['Your blackout was successfully modified'] = 'Czas niedost�pno�ci zosta� pomy�lnie zmodyfikowany';
$strings['Your blackout was successfully deleted'] = 'Czas niedost�pno�ci zosta� pomy�lnie usuni�ty';
$strings['for the follwing dates'] = 'dla nast�puj�cych dat:';
$strings['Start time must be less than end time'] = 'Czas rozpocz�cia musi by� mniejszy ni� czas zako�czenia.';
$strings['Current start time is'] = 'Aktualny czas rozpocz�cia:';
$strings['Current end time is'] = 'Aktualny czas zako�czenia:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = 'D�ugo�� czasu rezerwacji nie zgadza si� z dozwolon� d�ugo�ci� rezerwacji tego zasobu.';
$strings['Your reservation is'] = 'Twoja rezerwacja to:';
$strings['Minimum reservation length'] = 'Minimalna d�ugo�� rezerwacji:';
$strings['Maximum reservation length'] = 'Maksymalna d�ugo�� rezerwacji:';
$strings['You do not have permission to use this resource.'] = 'Nie masz uprawnie� do u�ycia tego zasobu.';
$strings['reserved or unavailable'] = '%s do %s jest zarejestrowany lub niedost�pny.';	// @since 1.1.0
$strings['Reservation created for'] = 'Rezerwacja utworzona dla %s';
$strings['Reservation modified for'] = 'Rezerwacja zmodyfikowana dla %s';
$strings['Reservation deleted for'] = 'Rezerwacja usuni�ta dla %s';
$strings['created'] = 'utworzona';
$strings['modified'] = 'zmieniona';
$strings['deleted'] = 'usuni�ta';
$strings['Reservation #'] = 'Rezerwacja #';
$strings['Contact'] = 'Kontakt';
$strings['Reservation created'] = 'Utworzono rezerwacj�';
$strings['Reservation modified'] = 'Uaktualniono rezerwacj�';
$strings['Reservation deleted'] = 'Usuni�to rezerwacj�';

$strings['Reservations by month'] = 'Rezerwacje miesi�cznie';
$strings['Reservations by day of the week'] = 'Rezerwacje wed�ug dnia tygodnia';
$strings['Reservations per month'] = 'Rezerwacje miesi�cznie';
$strings['Reservations per user'] = 'Rezerwacje wed�ug u�ytkownika';
$strings['Reservations per resource'] = 'Rezerwacje wed�ug zasobu';
$strings['Reservations per start time'] = 'Rezerwacje wed�ug czasu pocz�tkowego';
$strings['Reservations per end time'] = 'Rezerwacje wed�ug czasu ko�cowego';
$strings['[All Reservations]'] = '[Wszystkie rezerwacje]';

$strings['Permissions Updated'] = 'Uaktualniono uprawnienia';
$strings['Your permissions have been updated'] = 'Twoje uprawnienia %s zosta�y zaktualizowane';
$strings['You now do not have permission to use any resources.'] = 'Nie masz uprawnie� do u�ywania jakichkolwiek zasob�w.';
$strings['You now have permission to use the following resources'] = 'Masz teraz uprawnienia do korzystania z nast�puj�cych zasob�w:';
$strings['Please contact with any questions.'] = 'Skontaktuj si� z %s w przypadku jakichkolwiek kwestii.';
$strings['Password Reset'] = 'Reset has�a';

$strings['This will change your password to a new, randomly generated one.'] = 'Ta operacja zmieni has�o na nowe, losowo wygenerowane.';
$strings['your new password will be set'] = 'Po wprowadzeniu adresu email oraz klikni�ciu "Zmiana has�a", Twoje nowe has�o zostanie ustawione w systemie i przes�ane Ci na adres email.';
$strings['Change Password'] = 'Zmiana has�a';
$strings['Sorry, we could not find that user in the database.'] = 'Niestety nie mo�na znale�� tego u�ytkownika w bazie danych.';
$strings['Your New Password'] = 'Twoje nowe has�o %s';
$strings['Your new passsword has been emailed to you.'] = 'Sukces!<br />'
    			. 'Twoje nowe has�o zostanie Ci przes�ane.<br />'
    			. 'Sprawd� swoj� skrzynk� pocztow� czy zawiera nowe has�o na nast�pnie <a href="index.php">Zaloguj si�</a>'
    			. ' za jego pomoc� i zmie� je za po�rednictwem opcji &quot;Zmiana inoformacji profilu/has�a&quot;'
    			. ' znajduj�cej si� w panelu sterowania.';

$strings['You are not logged in!'] = 'Nie jeste� zalogowana/zalogowany!';

$strings['Setup'] = 'Konfiguracja';
$strings['Please log into your database'] = 'Zaloguj si� do swojej bazy danych';
$strings['Enter database root username'] = 'Enter database root username:';
$strings['Enter database root password'] = 'Enter database root password:';
$strings['Login to database'] = 'Login to database';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = 'Root user is <b>not</b> required. Any database user who has permission to create tables is acceptable.';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = 'This will set up all the necessary databases and tables for phpScheduleIt.';
$strings['It also populates any required tables.'] = 'It also populates any required tables.';
$strings['Warning: THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!'] = 'Warning: THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!';
$strings['Not a valid database type in the config.php file.'] = 'Not a valid database type in the config.php file.';
$strings['Database user password is not set in the config.php file.'] = 'Database user password is not set in the config.php file.';
$strings['Database name not set in the config.php file.'] = 'Database name not set in the config.php file.';
$strings['Successfully connected as'] = 'Successfully connected as';
$strings['Create tables'] = 'Create tables &gt;';
$strings['There were errors during the install.'] = 'There were errors during the install. It is possible that phpScheduleIt will still work if the errors were minor.<br/><br/>'
	. 'Please post any questions to the forums on <a href="http://sourceforge.net/forum/?group_id=95547">SourceForge</a>.';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = 'You have successfully finished setting up phpScheduleIt and are ready to begin using it.';
$strings['Thank you for using phpScheduleIt'] = 'Please be sure to COMPLETELY REMOVE THE \'install\' DIRECTORY.'
	. ' This is critical because it contains database passwords and other sensitive information.'
	. ' Failing to do so leaves the door wide open for anyone to break into your database!'
	. '<br /><br />'
	. 'Thank you for using phpScheduleIt!';
$strings['There is no way to undo this action'] = 'Nie da si� cofn�� tej operacji!';
$strings['Click to proceed'] = 'Kliknij aby kontynuowa�';
$strings['Please delete this file.'] = 'Prosz� usun�� ten plik.';
$strings['Successful update'] = 'Aktualizacja powiod�a si� w pe�ni';
$strings['Patch completed successfully'] = 'Pomy�lne zako�czenie aktualizacji �aty';

// @since 1.0.0 RC1
$strings['If no value is specified, the default password set in the config file will be used.'] = 'If no value is specified, the default password set in the config file will be used.';
$strings['Notify user that password has been changed?'] = 'Powiadamia� u�ytkownika, �e has�o zosta�o zaktualizowane?';

// @since 1.1.0
$strings['This system requires that you have an email address.'] = 'Ten system wymaga posiadania adresu email.';
$strings['Invalid User Name/Password.'] = 'Nieprawid�owa nazwa u�ytkownika/has�o.';
$strings['Pending User Reservations'] = 'Oczekuj�ce rezerwacje u�ytkownik�w';
$strings['Approve'] = 'Zaakceptuj';
$strings['Approve this reservation'] = 'Akceptacja tej rezerwacji';
$strings['Approve Reservations'] ='Akceptacja rezerwacji';

$strings['Announcement'] = 'Powiadomienie';
$strings['Number'] = 'Liczba';
$strings['Add Announcement'] = 'Dodaj powiadomienie';
$strings['Edit Announcement'] = 'Zmodyfikuj powiadomienie';
$strings['All Announcements'] = 'Wszystkie powiadomienia';
$strings['Delete Announcements'] = 'Usu� powiadomienia';
$strings['Use start date/time?'] = 'U�y� pocz�tkowej daty/czasu?';
$strings['Use end date/time?'] = 'U�y� ko�cowej daty/czasu?';
$strings['Announcement text is required.'] = 'Tekst powiadomienia jest wymagany.';
$strings['Announcement number is required.'] = 'Numer powiadomienia jest wymagany.';

$strings['Pending Approval'] = 'Oczekuj�ce akceptacje';
$strings['My reservation is approved'] = 'Moja rezerwacja zosta�a zaakceptowana';
$strings['This reservation must be approved by the administrator.'] = 'Ta rezerwacja musi zosta� zaakceptowana przez administratora.';
$strings['Approval Required'] = 'Wymagana akceptacja';
$strings['No reservations requiring approval'] = 'Brak rezerwacji wymagaj�cych akceptacji';
$strings['Your reservation was successfully approved'] = 'Twoja rezerwacja zosta�a pomy�lnie zaakceptowana';
$strings['Reservation approved for'] = 'Zaakceptowano rezerwacj� dla %s';
$strings['approved'] = 'zaakceptowane';
$strings['Reservation approved'] = 'Rezerwacja zaakceptowana';

$strings['Valid username is required'] = 'Wymagana jest poprawna nazwa u�ytkownika';
$strings['That logon name is taken already.'] = 'Ta nazwa u�ytkownika jest ju� zaj�ta.';
$strings['this will be your login'] = '(to b�dzie Tw�j login)';
$strings['Logon name'] = 'Nazwa u�ytkownika';
$strings['Your logon name is'] = 'Tw�j login to %s';

$strings['Start'] = 'Pocz�tek';
$strings['End'] = 'Koniec';
$strings['Start date must be less than or equal to end date'] = 'Data pocz�tkowa musi by� wcze�niejsza lub r�wna dacie ko�cowej';
$strings['That starting date has already passed'] = 'Ta data pocz�tkowa ju� min�a';
$strings['Basic'] = 'Podstawowy';
$strings['Participants'] = 'Cz�onkowie';
$strings['Close'] = 'Zamknij';
$strings['Start Date'] = 'Data pocz.';
$strings['End Date'] = 'Data ko�c.';
$strings['Minimum'] = 'Minimum';
$strings['Maximum'] = 'Maksimum';
$strings['Allow Multiple Day Reservations'] = 'Mo�liwe wielokrotne rezerwacje';
$strings['Invited Users'] = 'Zaproszeni u�ytkownicy';
$strings['Invite Users'] = 'Zapro� u�ytkownik�w';
$strings['Remove Participants'] = 'Usu� wsp�u�ytkownik�w';
$strings['Reservation Invitation'] = 'Zaproszenie do rezerwacji';
$strings['Manage Invites'] = 'Zarz�dzaj zaproszeniami';
$strings['No invite was selected'] = 'Nie wybrano zaproszenia';
$strings['reservation accepted'] = 'U�ytkownik %s zaakceptowa� twoje zaproszenie na %s';
$strings['reservation declined'] = 'U�ytkownik %s odrzuci� twoje zaproszenie na %s';
$strings['Login to manage all of your invitiations'] = 'Zaloguj si� aby zarz�dza� wszystkimi swoimi zaproszeniami';
$strings['Reservation Participation Change'] = 'Zmiana wsp�udzia�u rezerwacji';
$strings['My Invitations'] = 'Moje zaproszenia';
$strings['Accept'] = 'Zaakceptuj';
$strings['Decline'] = 'Odrzu�';
$strings['Accept or decline this reservation'] = 'Zaakceptuj lub odrzu� t� rezerwacj�';
$strings['My Reservation Participation'] = 'M�j udzia� w rezerwacjach';
$strings['End Participation'] = 'Zako�cz udzia�';
$strings['Owner'] = 'W�a�ciciel';
$strings['Particpating Users'] = 'U�ytkownicy bior�cy udzia�';
$strings['No advanced options available'] = 'Brak opcji zaawansowanych';
$strings['Confirm reservation participation'] = 'Potwierd� udzia� w rezerwacji';
$strings['Confirm'] = 'Potwierd�';
$strings['Do for all reservations in the group?'] = 'Zrobi� to samo ze wszystkimi rezerwacjami w grupie?';

$strings['My Calendar'] = 'M�j kalendarz';
$strings['View My Calendar'] = 'Zobacz m�j kalendarz';
$strings['Participant'] = 'Cz�onek';
$strings['Recurring'] = 'Powt�rzenie';
$strings['Multiple Day'] = 'Wiele dni';
$strings['[today]'] = '[dzisiaj]';
$strings['Day View'] = 'Widok dzienny';
$strings['Week View'] = 'Widok tygodniowy';
$strings['Month View'] = 'Widok miesi�czny';
$strings['Resource Calendar'] = 'Kalendarz zasob�w';
$strings['View Resource Calendar'] = 'Kalendarz termin�w';	// @since 1.2.0
$strings['Signup View'] = 'Widok logowania';

$strings['Select User'] = 'Wybierz u�ytkownika';
$strings['Change'] = 'Zmie�';

$strings['Update'] = 'Uaktualnij';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'Aktualizacja phpScheduleIt Update jest dost�pna dopiero od wersji 1.0.0 lub wy�szych';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt jest w najnowszej wersji';
$strings['Migrating reservations'] = 'Migrowanie rezerwacji';

$strings['Admin'] = 'Administracja';
$strings['Manage Announcements'] = 'Powiadomienia';
$strings['There are no announcements'] = 'Brak powiadomie�';
// end since 1.1.0

// @since 1.2.0
$strings['Maximum Participant Capacity'] = 'Maksymalna pojemno�� udzia�u';
$strings['Leave blank for unlimited'] = 'Puste pole przy braku ogranicze�';
$strings['Maximum of participants'] = 'Ten zas�b posiada maksymaln� pojemno�� %s dla os�b';
$strings['That reservation is at full capacity.'] = 'Ta rezerwacja ma ju� pe�n� pojemno��.';
$strings['Allow registered users to join?'] = 'Pozwoli� zarejestrowanym u�ytkownikom przy��czy� si�?';
$strings['Allow non-registered users to join?'] = 'Pozwoli� niezarejestrowanym u�ytkownikom przy��czy� si�??';
$strings['Join'] = 'Przy��cz';
$strings['My Participation Options'] = 'Opcje mojego udzia�u';
$strings['Join Reservation'] = 'Po��cz rezerwacj�';
$strings['Join All Recurring'] = 'Po��cz wszystkie powt�rzenia';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = 'You are not participating on the following reservation dates because they are at full capacity.';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = 'You are already invited to this reservation. Please follow participation instructions previously sent to your email.';
$strings['Additional Tools'] = 'Dodatkowe narz�dzia';
$strings['Create User'] = 'Utw�rz u�ytkownika';
$strings['Check Availability'] = 'Sprawd� dost�pno��';
$strings['Manage Additional Resources'] = 'Zarz�dzaj sprz�tem';
$strings['All Additional Resources'] = 'Ca�e wyposa�enie';
$strings['Number Available'] = 'Dost�pna liczba';
$strings['Unlimited'] = 'Bez ogranicze�';
$strings['Add Additional Resource'] = 'Dodaj sprz�t';
$strings['Edit Additional Resource'] = 'Modyfikuj sprz�t';
$strings['Checking'] = 'Sprawdzanie';
$strings['You did not select anything to delete.'] = 'Nie wybrano pozycji do usuni�cia.';
$strings['Added Resources'] = 'Dodane zasoby';
$strings['Additional resource is reserved'] = 'Dodatkowy zas�b %s posiada dost�pnych tylko %s w tym czasie';
$strings['All Groups'] = 'Wszystkie grupy';
$strings['Group Name'] = 'Nazwa grupy';
$strings['Delete Groups'] = 'Usu� grupy';
$strings['Manage Groups'] = 'Zarz�dzanie grupami';
$strings['None'] = 'Brak';
$strings['Group name is required.'] = 'Nazwa grupy jest wymagana.';
$strings['Groups'] = 'Grupy';
$strings['Current Groups'] = 'Aktualne grupy';
$strings['Group Administration'] = 'Administracja grupami';
$strings['Reminder Subject'] = 'Przypomnienie o rezerwacji- %s, %s %s';
$strings['Reminder'] = 'Przypomnienie';
$strings['before reservation'] = 'przed rezerwacj�';
$strings['My Participation'] = 'M�j udzia�';
$strings['My Past Participation'] = 'M�j przesz�y udzia�';
$strings['Timezone'] = 'Strefa czasowa';
$strings['Export'] = 'Wyeksportuj';
$strings['Select reservations to export'] = 'Wybierz rezerwacje do wyeksportowania';
$strings['Export Format'] = 'Format eksportu';
$strings['This resource cannot be reserved less than x hours in advance'] = 'Ten zas�b nie mo�e zosta� zarezerwowany mniej ni� %s godzin naprz�d';
$strings['This resource cannot be reserved more than x hours in advance'] = 'Ten zas�b nie mo�e zosta� zarejestrowany wcze�niej ni� %s godzin naprz�d';
$strings['Minimum Booking Notice'] = 'Uwaga o minimalnym czasie rezerwacji';
$strings['Maximum Booking Notice'] = 'Uwaga o maksymalnym czasie rezerwacji';
$strings['hours prior to the start time'] = 'godzin przed pocz�tkiem';
$strings['hours from the current time'] = 'godzin od aktualnego czasu';
$strings['Contains'] = 'Zawiera';
$strings['Begins with'] = 'Zaczyna si� od';
$strings['Minimum booking notice is required.'] = 'Uwaga o minimalnym czasie rezerwacji jest wymagana.';
$strings['Maximum booking notice is required.'] = 'Uwaga o maksymalnym czasie rezerwacji jest wymagana.';
$strings['Accessory Name'] = 'Nazwa sprz�tu';
$strings['Accessories'] = 'Sprz�t';
$strings['All Accessories'] = 'Dost�pny sprz�t';
$strings['Added Accessories'] = 'Dodany sprz�t';
// end since 1.2.0

/***
  EMAIL MESSAGES
  Please translate these email messages into your language.  You should keep the sprintf (%s) placeholders
   in their current position unless you know you need to move them.
  All email messages should be surrounded by double quotes "
  Each email message will be described below.
***/
// @since 1.1.0
// Email message that a user gets after they register
$email['register'] = "%s, %s \r\n"
				. "U�ytkownik zosta� dodany z nast�puj�cymi informacjami\r\n"
				. "Login: %s\r\n"
				. "Nazwa: %s %s \r\n"
				. "Telefon: %s \r\n"
				. "Instytucja: %s \r\n"
				. "Pozycja: %s \r\n\r\n"
				. "Prosz� si� zalogowa� pod tym adresem:\r\n"
				. "%s \r\n\r\n"
				. "Mo�na znale�� odno�niki do internetowego terminarza aby zaktualizowa� sw�j profil w Panelu administracyjnym.\r\n\r\n"
				. "Wszelkie pytania dotycz�ce zasob�w lub rezerwacji kierowa� do %s";

// Email message the admin gets after a new user registers
$email['register_admin'] = "Administratorze,\r\n\r\n"
					. "Nowy u�ytkownik z nast�puj�cymi informacjami:\r\n"
					. "Email: %s \r\n"
					. "Nazwa: %s %s \r\n"
					. "Telefon: %s \r\n"
					. "Instytucja: %s \r\n"
					. "Pozycja: %s \r\n\r\n";

// First part of the email that a user gets after they create/modify/delete a reservation
// 'reservation_activity_1' through 'reservation_activity_6' are all part of one email message
//  that needs to be assembled depending on different options.  Please translate all of them.
// @since 1.1.0
$email['reservation_activity_1'] = "%s,\r\n<br />"
			. "Pusiadasz pomy�lnie %s rezerwacj� #%s.\r\n\r\n<br/><br/>"
			. "U�yj tego numeru rezerwacji podczas kontaktu z administratorem lub w razie posiadania jakich� pyta�.\r\n\r\n<br/><br/>"
			. "Rezerwacja pomi�dzy %s %s i %s %s dla %s"
			. " opisana jako %s zosta�a %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "Ta rezerwacja zosta�a powt�rzona dla nast�puj�cych dat:\r\n<br/>";
$email['reservation_activity_3'] = "Wszystkie powt�rzone rezerwacje w tej grupie s� tak�e %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "Poni�sze zestawienie zosta�o wypisane dla tej rezerwacji:\r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "Je�li to b��d, skontaktuj si� z administratorem pod adresem: %s"
			. " lub telefonicznie pod numerem %s.\r\n\r\n<br/><br/>"
			. "Mo�na przejrze� lub zmodyfikowa� dowoln� informacj� w dowolnym czasie poprzez "
			. " zalogowanie si� do %s pod adresem:\r\n<br/>"
			. "<a href=\"%s\" target=\"_blank\">%s</a>.\r\n\r\n<br/><br/>";
$email['reservation_activity_6'] = "Kwestie techniczne nale�y kierowa� do: <a href=\"mailto:%s\">%s</a>.\r\n\r\n<br/><br/>";
// @since 1.1.0
$email['reservation_activity_7'] = "%s,\r\n<br />"
			. "Rezerwacja #%s zosta�a zaakceptowana.\r\n\r\n<br/><br/>"
			. "U�yj tego numeru rejestracyjnego podczas kontaktu z administratorem.\r\n\r\n<br/><br/>"
			. "Rezerwacja pomi�dzy %s %s oraz %s %s dla %s"
			. " opisana jako %s zosta�a %s.\r\n\r\n<br/><br/>";

// Email that the user gets when the administrator changes their password
$email['password_reset'] = "Twoje has�o %s zosta�o zresetowane przez administratora.\r\n\r\n"
			. "Twoje has�o tymczasowe to:\r\n\r\n %s\r\n\r\n"
			. "U�yj tego tymczasowego has�a (skopiuj i wklej aby si� upewni�, �e jest ono poprawne) i zaloguj si� na %s pod adresem %s"
			. " nast�pnie natychmiast zmie� to has�o przy u�yciu zak�adki 'Edycja profilu' w tabeli Odno�niki.\r\n\r\n"
			. "Skontaktuj si� z administratorem %s w razie w�tpliwo�ci.";

// Email that the user gets when they change their lost password using the 'Password Reset' form
$email['new_password'] = "%s,\r\n"
            . "Twoje nowe has�o dla konta %s zosta�o:\r\n\r\n"
            . "%s\r\n\r\n"
            . "Zaloguj si� pod adres %s "
            . "za pomoc� tego has�a "
            . "(skopiuj je i wklej aby si� upewni�, �e jest poprawne) "
            . "i zmie� to has�o poprzez klikni�cie opcji "
            . "Edycja profilu "
            . "znajduj�c� si� w panelu sterowania.\r\n\r\n"
            . "Wszystkie pytania kieruj bezpo�rednio na adres %s.";

// @since 1.1.0
// Email that is sent to invite users to a reservation
$email['reservation_invite'] = "U�ytkownik %s zaprosi� Ci� do udzia�u w poni�szej rezerwacji:\r\n\r\n"
		. "Zas�b: %s\r\n"
		. "Data rozpocz�cia: %s\r\n"
		. "Czas rozpocz�cia: %s\r\n"
		. "Data zako�czenia: %s\r\n"
		. "Czas zako�czenia: %s\r\n"
		. "Podsumowanie: %s\r\n"
		. "Powtarzaj�ce si� daty (je�li obecne): %s\r\n\r\n"
		. "Aby zaakceptowa� to zaproszenie kliknij ten link (skopiuj i wklej je�li jest pod�wietlony) %s\r\n"
		. "Aby odrzuci� to zaproszenie kliknij ten link (skopiuj i wklej je�li jest pod�wietlony) %s\r\n"
		. "Aby zaakceptowa� wybrane daty i zarz�dza� swoimi zaproszeniami w czasie p�niejszym, zaloguj si� do systemu %s pod adresem %s";

// @since 1.1.0
// Email that is sent when a user is removed from a reservation
$email['reservation_removal'] = "Usuni�to nast�puj�c� rezerwacj�:\r\n\r\n"
		. "Zas�b: %s\r\n"
		. "Data rozpocz�cia: %s\r\n"
		. "Czas rozpocz�cia: %s\r\n"
		. "Data zako�czenia: %s\r\n"
		. "Czas zako�czenia: %s\r\n"
		. "Podsumowanie: %s\r\n"
		. "Powtarzaj�ce si� daty (je�li obecne): %s\r\n\r\n";	

// @since 1.2.0
// Email body that is sent for reminders
$email['Reminder Body'] = "Twoja rezerwacja dla %s od %s %s do %s %s wkr�tce si� zbli�a.";
?>