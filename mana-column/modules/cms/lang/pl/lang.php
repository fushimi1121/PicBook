<?php return [
  'cms_object' => [
    'invalid_file' => 'Nieprawidłowa nazwa pliku: :name. Nazwy pliku mogą zawierać tylko symbole alfanumeryczne, podkreślenia, kreski i kropki. Przykłady prawidłowych nazw: strona.htm, strona, podfolder/strona',
    'invalid_property' => 'Własność \':name\' nie może zostać ustawiona.',
    'file_already_exists' => 'Plik o nazwie \':name\' już istnieje.',
    'error_saving' => 'Błąd przy zapisywaniu pliku \':name\'. Proszę sprawdzić uprawnienia zapisu/modyfikacji.',
    'error_creating_directory' => 'Błąd przy tworzeniu folderu :name. Proszę sprawdzić uprawnienia zapisu/modyfikacji.',
    'invalid_file_extension' => 'Nieprawidłowe rozszerzenie pliku: :invalid. Dozwolone rozszerzenia to: :allowed.',
    'error_deleting' => 'Błąd przy usuwaniu pliku szablonu \':name\'. Proszę sprawdzić uprawnienia zapisu/modyfikacji.',
    'delete_success' => 'Szablony zostały prawidłowo usunięte: :count.',
    'file_name_required' => 'Pole Nazwa Pliku jest wymagane.',
    'safe_mode_enabled' => 'Safe mode jest obecnie włączony.',
  ],
  'dashboard' => [
    'active_theme' => [
      'widget_title_default' => 'Strona',
      'online' => 'Online',
      'maintenance' => 'W konserwacji',
      'manage_themes' => 'Zarządzaj motywami',
    ],
  ],
  'theme' => [
    'active' => [
      'not_set' => 'Brak aktywnego motywu.',
      'not_found' => 'Aktywny motyw nie został odnaleziony.',
    ],
    'edit' => [
      'not_set' => 'Edytowany motyw nie jest ustawiony.',
      'not_found' => 'Edytowany motyw nie został znaleziony.',
      'not_match' => 'Obiekt który próbujesz edytować nie należy do wybranego motywu. Proszę przeładować stronę.',
    ],
  ],
  'maintenance' => [],
  'page' => [
    'not_found_name' => 'Strona \':name\' nie została znaleziona',
    'not_found' => [
      'label' => 'Nie znaleziono strony',
      'help' => 'Żądana strona nie została znaleziona.',
    ],
    'custom_error' => [
      'label' => 'Błąd strony',
      'help' => 'Bardzo przepraszamy, jednak coś poszło nie tak i strona nie może zostać wyświetlona.',
    ],
    'menu_label' => 'Strony',
    'unsaved_label' => 'Niezapisane strony',
    'no_list_records' => 'Nie znaleziono stron',
    'new' => 'Nowa strona',
    'invalid_url' => 'Nieprawidłowy format URL. Powinien rozpoczynać się od ukośnika (/) i może zawierać cyfry, znaki oraz następujące symbole: ._-[]:?|/+*^$',
    'delete_confirm_multiple' => 'Czy na pewno chcesz usunąć zaznaczone strony?',
    'delete_confirm_single' => 'Czy na pewno chcesz usunąć tę stronę?',
    'no_layout' => '-- brak układu --',
  ],
  'layout' => [
    'not_found_name' => 'Nie znaleziono układu \':name\'',
    'menu_label' => 'Układy',
    'unsaved_label' => 'Niezapisane układy',
    'no_list_records' => 'Nie znaleziono układów',
    'new' => 'Nowy układ',
    'delete_confirm_multiple' => 'Czy na pewno chcesz usunąć zaznaczone układy?',
    'delete_confirm_single' => 'Czy na pewno chcesz usunąć ten układ?',
  ],
  'partial' => [
    'not_found_name' => 'Fragment \':name\' nie został znaleziony.',
    'invalid_name' => 'Nieprawidłowa nazwa fragmentu: :name.',
    'menu_label' => 'Fragmenty',
    'unsaved_label' => 'Niezapisane fragmenty',
    'no_list_records' => 'Nie znaleziono fragmentów',
    'delete_confirm_multiple' => 'Czy na pewno chcesz usunąć zaznaczone fragmenty?',
    'delete_confirm_single' => 'Czy na pewno chcesz usunąć ten fragment?',
    'new' => 'Nowy fragment',
  ],
  'content' => [
    'not_found_name' => 'Plik treści \':name\' nie został znaleziony.',
    'menu_label' => 'Treść',
    'unsaved_label' => 'Niezapisana treść',
    'no_list_records' => 'Nie znaleziono plików treści',
    'delete_confirm_multiple' => 'Czy na pewno chcesz usunąć zaznaczone pliki treści?',
    'delete_confirm_single' => 'Czy na pewno chcesz usunąć ten plik treści?',
    'new' => 'Nowy plik treści',
  ],
  'ajax_handler' => [
    'invalid_name' => 'Nieprawidłowa nazwa handlera AJAX: :name.',
    'not_found' => 'Handler AJAX \':name\' nie został znaleziony.',
  ],
  'cms' => [
    'menu_label' => 'CMS',
  ],
  'sidebar' => [
    'add' => 'Dodaj',
    'search' => 'Szukaj...',
  ],
  'editor' => [
    'settings' => 'Ustawienia',
    'title' => 'Tytuł',
    'new_title' => 'Tytuł nowej strony',
    'url' => 'URL',
    'filename' => 'Nazwa pliku',
    'layout' => 'Układ',
    'description' => 'Opis',
    'preview' => 'Podgląd',
    'meta' => 'Meta',
    'meta_title' => 'SEO Tytuł',
    'meta_description' => 'SEO Opis',
    'markup' => 'Markup',
    'code' => 'Kod',
    'content' => 'Treść',
    'hidden' => 'Ukryta',
    'hidden_comment' => 'Ukryte strony są widoczne tylko dla użytkowników panelu administracyjnego, którzy są zalogowani.',
    'enter_fullscreen' => 'Włącz tryb pełnoekranowy',
    'exit_fullscreen' => 'Wyłącz tryb pełnoekranowy',
    'open_searchbox' => 'Otwórz wyszukiwanie',
    'close_searchbox' => 'Zamknij wyszukiwanie',
    'open_replacebox' => 'Otwórz zamienianie tekstu',
    'close_replacebox' => 'Zamknij zamienianie tekstu',
  ],
  'asset' => [
    'menu_label' => 'Zasoby',
    'unsaved_label' => 'Niezapisane zasoby',
    'drop_down_add_title' => 'Dodaj...',
    'drop_down_operation_title' => 'Akcja...',
    'upload_files' => 'Wyślij plik(i)',
    'create_file' => 'Stwórz plik',
    'create_directory' => 'Stwórz folder',
    'directory_popup_title' => 'Nowy folder',
    'directory_name' => 'Nazwa folderu',
    'rename' => 'Zmień nazwę',
    'delete' => 'Usuń',
    'move' => 'Przenieś',
    'select' => 'Wybierz',
    'new' => 'Nowy plik',
    'rename_popup_title' => 'Zmień nazwę',
    'rename_new_name' => 'Nowa nazwa',
    'invalid_path' => 'Ścieżka może zawierać tylko cyfry, litery alfabetu łacińskiego, spacje oraz następujące znaki: ._-/',
    'error_deleting_file' => 'Błąd przy usuwaniu pliku :name.',
    'error_deleting_dir_not_empty' => 'Błąd przy usuwaniu folderu :name. Katalog nie jest pusty.',
    'error_deleting_dir' => 'Błąd przy usuwaniu pliku :name.',
    'invalid_name' => 'Nazwa może zawierać tylko cyfry, litery alfabetu łacińskiego, spacje oraz następujące znaki: ._-',
    'original_not_found' => 'Oryginalny plik lub ścieżka nie zostały odnalezione',
    'already_exists' => 'Plik lub folder o tej samej nazwie już istnieją',
    'error_renaming' => 'Błąd przy zmianie nazwy pliku lub folderu',
    'name_cant_be_empty' => 'Nazwa nie może być pusta',
    'too_large' => 'Wyślany plik jest zbyt duży. Maksymalny dopuszczalny rozmiar pliku to :max_size',
    'type_not_allowed' => 'Dopuszczalne są tylko następujące formaty plików: :allowed_types',
    'file_not_valid' => 'Plik jest nieprawidłowy',
    'error_uploading_file' => 'Błąd przy wysyłaniu pliku \':name\': :error',
    'move_please_select' => 'proszę wybierz',
    'move_destination' => 'Katalog docelowy',
    'move_popup_title' => 'Przenieś zasoby',
    'move_button' => 'Przenieś',
    'selected_files_not_found' => 'Nie znaleziono wybranych plików',
    'select_destination_dir' => 'Proszę wybrać folder docelowy',
    'destination_not_found' => 'Folder docelowy nie został znaleziony',
    'error_moving_file' => 'Błąd przy przenoszeniu pliku :file',
    'error_moving_directory' => 'Błąd przy przenoszeniu folderu :dir',
    'error_deleting_directory' => 'Błąd przy usuwaniu oryginalnego folderu :dir',
    'path' => 'Ścieżka',
  ],
  'component' => [
    'menu_label' => 'Komponenty',
    'unnamed' => 'Bez nazwy',
    'no_description' => 'Brak opisu',
    'alias' => 'Alias',
    'alias_description' => 'A unique name given to this component when using it in the page or layout code.',
    'validation_message' => 'Component aliases are required and can contain only Latin symbols, digits, and underscores. The aliases should start with a Latin symbol.',
    'invalid_request' => 'The template cannot be saved because of invalid component data.',
    'no_records' => 'Nie znaleziono komponentów',
    'not_found' => 'Komponent \':name\' nie został znaleziony.',
    'method_not_found' => 'Komponent \':name\' nie zawiera metody \':method\'.',
  ],
  'template' => [
    'invalid_type' => 'Nieznany typ szablonu.',
    'not_found' => 'Szablon nie został znaleziony.',
    'saved' => 'Szablon został zapisany pomyślnie.',
  ],
  'permissions' => [
    'name' => 'Cms',
    'manage_content' => 'Zarządzaj treścią',
    'manage_assets' => 'Zarządzaj zasobami',
    'manage_pages' => 'Zarządzaj stronami',
    'manage_layouts' => 'Zarządzaj układami',
    'manage_partials' => 'Zarządzaj blokami',
    'manage_themes' => 'Zarządzaj motywami',
  ],
];
