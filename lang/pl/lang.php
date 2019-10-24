<?php

/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 *
 * @author Bartek S <sadupl@gmail.com>
 */
$lang['menu']                  = 'Farma';
$lang['tab_setup']             = 'Ustawienia Farmy';
$lang['tab_info']              = 'Informacje';
$lang['tab_config']            = 'Konfiguracja';
$lang['tab_plugins']           = 'Zarządzaj pluginami';
$lang['tab_new']               = 'Dodaj nowe zwierzę';
$lang['tab_delete']            = 'Usuń zwierzę';
$lang['preloadPHPForm']        = 'Zainicjuj Farmę';
$lang['farm dir']              = 'Katalog zwierząt';
$lang['htaccess setup']        = 'Dodać kod farmy do .htaccess?';
$lang['submit']                = 'Zatwierdź';
$lang['farmdir_missing']       = 'Proszę podać katalog gdzie Zwierzęta powinny być przechowywane.';
$lang['farmdir_in_dokuwiki']   = 'Katalog Zwierząt (%s) musi być poza Farmą dokuwiki (%s).';
$lang['farmdir_uncreatable']   = 'Katalog Zwierząt (%s) nie został stworzony. Czy uprawnienia są prawidłowe?';
$lang['farmdir_unwritable']    = 'Proszę się upenić, że webserver posiada prawa zapisu do katalogu Zwierząt.';
$lang['farmdir_notEmpty']      = 'Katalog Zwierząt (%s) musi być pusty.';
$lang['preload creation success'] = 'Farma została zainicjowana pomyślnie.';
$lang['preload creation error'] = 'Wystąpił błąd podczas inicjowania Farmy.';
$lang['overwrite_preload']     = 'Uwaga: Dotychczasowy plik inc/preload.php będzie zastąpiony podczas kontynuowania!';
$lang['animal']                = 'Imię Zwierzęta / Domeny';
$lang['thisis']                = 'Instancja to';
$lang['thisis.farmer']         = 'Farmer!';
$lang['thisis.animal']         = 'Zwierzę!';
$lang['baseinstall']           = 'Instalacja Farmera';
$lang['animals']               = 'Zwierzęta';
$lang['confdir']               = 'Katalog konfiguracji instancji';
$lang['savedir']               = 'Katalog danych instancji';
$lang['plugins']               = 'Aktywne pluginy tej instancji';
$lang['base']                  = 'Konfiguracja Bazy';
$lang['farm host']             = 'Host Name Farmera';
$lang['base domain']           = 'Domena podstawowa dla subdomeny Zwierzęta';
$lang['conf_inherit']          = 'Zwierzęta powinny dziedziczyć ustawienia farmera';
$lang['conf_inherit_main']     = 'Ustawienia konfiguracji';
$lang['conf_inherit_acronyms'] = 'Definicje akronimów';
$lang['conf_inherit_entities'] = 'Definicje jednostek';
$lang['conf_inherit_interwiki'] = 'Definicje Interwiki';
$lang['conf_inherit_license']  = 'Definicje licencji';
$lang['conf_inherit_smileys']  = 'Definicje uśmieszków';
$lang['conf_inherit_wordblock'] = 'Wpisy SPAM na czarnej liście';
$lang['conf_inherit_userstyle'] = 'Style użytkownika';
$lang['conf_inherit_userscript'] = 'Skrypty użytkownika';
$lang['conf_inherit_styleini'] = 'Dostosowanie stylu szablonu';
$lang['conf_inherit_users']    = 'Użytkownicy (tylko zwykłe uwierzytelnianie)';
$lang['conf_inherit_plugins']  = 'Stan wtyczki';
$lang['conf_inherit_yes']      = 'odziedziczony po farmerze';
$lang['conf_inherit_no']       = 'niezależny od farmera';
$lang['conf_notfound']         = 'Zachowanie podczas uzyskiwania dostępu do nieistniejących zwierząt';
$lang['conf_notfound_farmer']  = 'Pokaż wiki farmera';
$lang['conf_notfound_404']     = 'Pokaż stronę błędu 404';
$lang['conf_notfound_list']    = 'Pokaż listę dostępnych zwierząt';
$lang['conf_notfound_redirect'] = 'Przekieruj na poniższy adres URL';
$lang['conf_notfound_url']     = 'Adres URL do przekierowania, jeśli wybrano powyżej';
$lang['save']                  = 'Zapisz';
$lang['animal template']       = 'Kopiuj istniejące Zwierzę';
$lang['animal creation success'] = 'Zwierzę "%s" zostało pomyślnie utworzone.';
$lang['animal creation error'] = 'Wystąpił błąd podczas tworzenia zwierzęcia.';
$lang['animal configuration']  = 'Podstawowa konfiguracja Zwierząt';
$lang['inherit user registration'] = 'Dziedzicz ustawienia rejestracji użytkownika od farmera';
$lang['enable user registration'] = 'Pozwól użytkownikom się zarejestrować';
$lang['disable user registration'] = 'Wyłącz rejestrację użytkowników';
$lang['animal administrator']  = 'Administrator zwięrząt';
$lang['noUsers']               = 'Nie twórz żadnych użytkowników';
$lang['importUsers']           = 'Zaimportuj wszystkich użytkowników Farmera do nowego zwierzęcia';
$lang['currentAdmin']          = 'Ustaw bieżącego użytkownika jako admin';
$lang['newAdmin']              = 'Utwórz nowego administratora „admin”';
$lang['admin password']        = 'Hasło dla nowego administratora';
$lang['animalname_missing']    = 'Wprowadź nazwę nowego zwierzęcia.';
$lang['animalname_preexisting'] = 'Zwierzę o tej nazwie już istnieje.';
$lang['adminPassword_empty']   = 'Hasło do nowego konta administratora nie może być puste.';
$lang['bulkSingleSwitcher']    = 'Edytować jedno Zwierzę czy wszystkie naraz?';
$lang['bulkEdit']              = 'Zbiorcza edycja wszystkich Zwierząt';
$lang['singleEdit']            = 'Edytuj jedno Zwierzę';
$lang['bulkEditForm']          = 'Aktywuj lub dezaktywuj wtyczkę we wszystkich Zwierzętach';
$lang['default']               = 'Ustaw na domyślny';
$lang['activate']              = 'Aktywuj';
$lang['deactivate']            = 'Dezaktywuj';
$lang['singleEditForm']        = 'Edytuj wtyczki określonego Zwierzęcia';
$lang['plugindone']            = 'Stany wtyczek zaktualizowane';
$lang['plugin']                = 'Plugin';
$lang['plugin_on']             = 'on
(it means \'włączone\', but in PL we use also ON/OFF)';
$lang['plugin_off']            = 'off
(it means \'wyłączone\', but in PL we use also ON/OFF)';
$lang['plugin_default']        = 'Domyślne';
$lang['plugin_enabled']        = 'Włączone';
$lang['plugin_disabled']       = 'Wyłączone';
$lang['js']['animalSelect']    = 'Wybierz zwierzę';
$lang['js']['pluginSelect']    = 'Wybierz plugin';
$lang['delete_animal']         = 'Wybierz Zwierzę do usunięcia';
$lang['delete_confirm']        = 'Wpisz nazwę Zwierzęcia, aby potwierdzić';
$lang['delete']                = 'Usuń Zwierzę i wszystkie jego dane';
$lang['delete_noanimal']       = 'Proszę wybrać Zwierzę do usunięcia';
$lang['delete_mismatch']       = 'Potwierdzenie nie pasuje do nazwy Zwierzęcia. Nie usunięte.';
$lang['delete_invalid']        = 'Nieprawidłowa nazwa Zwierzęcia. Nie usunięte';
$lang['delete_success']        = 'Zwierzę zostało pomyślnie usunięte.';
