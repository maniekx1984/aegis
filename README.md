Cześć - w tym repozytorium znajdziecie rozwiązanie zadania.

Pliki, w których coś napisałem:
1. Controller w src/Controller: AegisController.php - tutaj jest logika aplikacji
2. Entities w src/Entity: Comment.php i Post.php - tutaj m.in. asocjacje
3. Repositories, oba wygenerowane, to które wymieniam zmodyfikowane: src/Repository: PostRepository.php - tutaj m.in. query do wyszukiwania
4. Templates w templates/aegis: głównie: import i show, index jest tylko technicznie - tutaj poprostu wyświetlanie. Nie stosowałem jakiegoś ładnego CSS, bo zakładam, że nie to było zadaniem :) Jeżeli trzeba, zawsze mogę wrzucić np. w Bootstrap (tak jak to ma miejsce w show)
5. Routes w config/routes.yaml - skonfigurowane routes

Aplikację uruchamiałem na serwerze Windows: XAMPP v 3.2.2 z PHP 7.2.0

Komentarze trochę ograniczyłem bo przeznaczenie napisanych funkcji jest trochę oczywiste, więc nie ma co się rozpisywać.


Do uruchomienia aplikacji powinno wystarczyć:
1. Serwer Apache, z PHP 7 i MySQL/MariaDB (u mnie było 10.1.29-MariaDB - mariadb.org binary distribution)
2. Stworzenie bazy danych i użytkownika
3. Import struktury bazy danych (plik aegis.sql w repozytorium)
4. Wgranie całości plików na serwer (aplikację uruchamia się z katalogu public)
5. Edycja linijki 23 w pliku .env: DATABASE_URL=mysql://cp_test1:test@localhost:3306/aegis - należy wpisać swoje dane bazy danych (tutaj prezentowane są testowe)
6. Edycja linijek 16-19 w pliku src/AegisController.php w celu podania swoich danych dostępowych do aplikacji facebook'a

Uruchamianie:
1. W przeglądarkę internetową należy wpisać adres aplikacji, np.: http://localhost/SCIEZKA_DO_APLIKACJI/public
2. Pojawią się dwa linki - pierwszy z nich importuje 100 najnowszych postów z fanpage: https://www.facebook.com/infoulice/ - uwaga kolejne kliknięcie spowoduje ponowne dodanie postów do bazy danych (można zmienić stronę, że której pobierane są posty odpowiednio edytując linijkę 89 w src/AegisController.php
3. Drugi link to tabela z postami - przy kolumnach, które można sortować linkiem do sortowania wg danej kolumny jest nazwa tej kolumny
