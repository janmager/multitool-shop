# Dokumentacja techniczna
Stajnia vs. Łącznik vs. Automaty<br>
Projekt innowacji zawodowych 2017/2018<br>
Jan Mager 2B1T.<br>
www.zslmultitool.pl/shop

# Spis treści
[1. Początek](#dokumentacja-techniczna)<br>
[2. Założenia i cel projektu](#założenia-i-cel-projektu)<br>
[3. Określenie wymagań](#określenie-wymagań)<br>
[4. Projektowanie](#projektowanie)<br>
[5. Implementacja](#implementacja)<br>
[6. Użyte technologie](#użyte-technologie)<br>
[7. Użyte aplikacje](#użyte-aplikacje)<br>
[8. Instrukcja obsługi](#instrukcja-obsługi)<br>
[9. Zaplecze administracyjne](#zaplecze-administracyjne)<br>
[10. Literatura](#literatura)<br>
[11. Załączniki](#załączniki)<br>

# Założenia i cel projektu
**Stajnia vs. Łącznik vs. Automaty** - głównym celem przed wykonaniem tego serwisu było zebranie w jednym miejscu wszystkich niezbędnych informacji na temat sprzedaży przedmiotów spożywczych na terenie Zespołu Szkół Łączności w Poznaniu. Tworząc ten projekt wiodącym założeniem była przede wszystkim szybkość działania oraz czytelnośc i intuicyjność obługi strony, aby każda osoba używająca aplikacji, bez znaczenia czy to na telefonie, tablecie czy komputerze, mogła w bezproblemowy sposób znaleźć szukany produkt lub porównać go z innym.

# Określenie wymagań
-> Responsywność serwisu - poprawne, czytelne i pełne pod względem funkcjonalności działanie strony na wszystkim możliwych urządzeniach odczytujących (telefon, tablet, laptop, pc, telewizor) oraz wszystkich przeglądarkach internetowych (Google Chrome, Mozilla, Opera, IE, Safari oraz pozostałe mobilne)<br><br>
-> Szybkość działania - zapewnienie jak najkrótszego czasu oczekiwania na wyniki zapytań czy też załadowanie strony<br><br>
-> Czytelność, intuicyjność obsługi - stworzenie serwisu jak najbardziej czytelnego i intuicyjnego jak tylko to będzie możliwe, aby każda osoba, bez względu na wiek wchodząc na stronę nie miała problemów oraz wątplilowości podczas używania apliakcji<br><br>
-> Administracja bazą danych produktów, panel administracyjny - zaimplementowanie panelu administracyjnego w celu możliwości edycji bazy danych z każdego miejsca, przy użyciu tylko przeglądarki internetowej oraz dostępu do internetu<br><br>
-> Udział użytkownika - możliwość zgłaszania błędów strony, aktualizacji cen, dodawania czy też usuwania produktów<br><br>
-> Minimalizm - stworzenie idealistycznej strony opartej o najnowsze trendy designerskie

# Projektowanie
### 1. Stworzenie projektu graficznego/wizualizacji w aplikacji Adobe Photoshop<br>
![Projektowanie-1](https://github.com/janmager/multitool-shop/blob/master/readme-images/projektowanie-1.png)<br><br>
### 2. Stworzenie wizualizacji projektu<br>
![Projektowanie-2](https://github.com/janmager/multitool-shop/blob/master/readme-images/projektowanie-2.png)<br><br>
### 3. Stworzenie struktury folderów i plików<br>
![Projektowanie-3](https://github.com/janmager/multitool-shop/blob/master/readme-images/projektowanie-3.png)<br><br>

# Implementacja
### 1. Stworzenie w pliku ze stylami stałych zmiennych<br>
![Projektowanie-4](https://github.com/janmager/multitool-shop/blob/master/readme-images/projektowanie-4.png)<br><br>
### 2. Podpięcie używanych frameworków<br>
![Projektowanie-5](https://github.com/janmager/multitool-shop/blob/master/readme-images/projektowanie-5.png)<br><br>
### 3. Bieżące pisanie strony oraz naprawa błędów<br>
![Projektowanie-6](https://github.com/janmager/multitool-shop/blob/master/readme-images/projektowanie-6.png)<br><br>
### 4. Dostosowywanie serwisu pod urządzenia mobilne<br>
![Projektowanie-7](https://github.com/janmager/multitool-shop/blob/master/readme-images/projektowanie-7.png)<br><br>

# Użyte technologie
* HTML5 - strona merytoryczna
* CSS3 - strona wizualna
* CSS Variables - czytelność kodu
* JavaScript - animacje oraz elementy interaktywne
* jQuery - optymalizacja kody JS
* JavaScript AJAX - obługa aplikacji bez konieczności odświeżania witryny
* PHP - łączenie z bazą danych oraz działanie na rekordach
* Github - repozytorium
* MySQL - baza danych produktów

# Użyte aplikacje
* Adobe Photoshop - wykonanie projektu aplikacji oraz potrzebnych elementów graficznych
* Atom.io - edycja kodu
* XAMPP - localhost na systemie Windows
* MAMP - localhost na systemie MacOS
* Git Bash - przesyłanie plików do repozytorium na systemie Windows
* Terminal - przesyłanie plików do repozytorium na systemie MacOS
* FileZilla - przesyłanie plików na hosting

# Instrukcja obsługi
*Stajnia vs. Łącznik vs. Automaty* - aplikacja, dzięki której możemy wyszukać wszystkiego produkty spożywcze dostępne na terenie Zespołu Szkół Łączności w Poznaniu. Od przekąsek i słodkich napojów znajdujących się w automatach aż po bardziej wykwintne produktu możliwe do zakupienia w bufetach takie jak bułki czy też dania obiadowe.

Użytkownik ma możliwość przeglądania listy produktów, wyszczególniając je na znajdujące się w stajni, łączniku, automacie oraz pokazanie wszystkich.

Po wejściu na główną stronę użytkonik ma możliwość wybrania jednej z trzech opcji:
- wszyskie produkty<br><br>
![Wszystkie produkty](https://github.com/janmager/multitool-shop/blob/master/readme-images/multitool-2.png)<br><br>
- losowy produkt<br><br>
![Losowy produkt](https://github.com/janmager/multitool-shop/blob/master/readme-images/multitool-1.png)<br><br>
- wyszukiwarka produktów<br><br>
![Wyszukiwarka produktów](https://github.com/janmager/multitool-shop/blob/master/readme-images/multitool-4.png)<br><br>

Kiedy nie może się zdecydować jaki produkt zakupić, specjalnie dla niego została przygotowana opcja 'losowy produkt'.

Kiedy znam nazwę produktu lub jej część skorzystaj z wyszukiwarki.

Kiedy chcesz przejrzeć całą bazę danych sprawdź 'wszystkie produkty'.

# Zaplecze administracyjne
Po zalogowaniu do panelu administracyjnego (login: admin, hasło: admin) masz dostępne 4 opcje.<br><br>
![Panel Admina](https://github.com/janmager/multitool-shop/blob/master/readme-images/multitool-6.png)<br><br>

1. Pierwszą z nich jest przeglądanie zgłoszony błędnych cen, proponowanych poprawek/aktualizacji oraz sugerowanych nowych produktów. Możesz z tego miejsca zaakakcpetować zmianę lub odrzucić i usunąć propozycję.<br><br>

2. Druga opcja jest to dodanie nowego produktu do bazy danych, bez konieczności ręcznej edycji kody MySQL. Prosty oraz intuicyjny formularz wymaga podania nazwy produktu, ceny oraz miejsca, w którym możemy go kupić.<br><br>
![Dodaj nowy produkt](https://github.com/janmager/multitool-shop/blob/master/readme-images/multitool-7.png)<br><br>

3. Trzecie opcja jest to edycja wpisanych już produktów do bazy danych. Podobnie jak w fukncji wyżej, mamy możliwość edycji nazwy, ceny i miejsca bez konieczności logowania się do phpmyadmin. Możemy również z tego poziomu permamentnie usuwać produkty z bazy danych.<br><br>
![Edycja produktu](https://github.com/janmager/multitool-shop/blob/master/readme-images/multitool-9.png)<br><br>

4. Czwarta opcja są to statystyki bazy danych, wyświetlana jest obecna liczba wszystkich produktów znajdujących się w bazie danych, najdroższy produkt oraz najtańszy.<br><br>
![Statystyki bazy danych](https://github.com/janmager/multitool-shop/blob/master/readme-images/multitool-8.png)<br><br>

# Plany rozwoju
- Przekodowanie strony na aplikację mobilną
- Rozszerzenie bazy danych produktów
- Napisanie skryptu wysyłającego powiadomienia na żywo w przeglądarce

# Literatura
- https://w3schools.com
- https://php.net/docs
- https://api.jquery.com/category/ajax/
- https://devdocs.io/javascript

# Załączniki
Folder wyżej (src)
