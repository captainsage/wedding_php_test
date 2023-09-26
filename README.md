# wedding_php_test
Ez egy első prototípusa egy esküvői weboldalnak amibe megpróbáltam több kevesebb sikerrel php funkciókat is integrálni. A műkődése elég egyszerű: 4 oldalból áll. 

## home
Üdvözli a felhasználót illetve arra hivatott hogy visszajelzési lehetőséget biztosítson a felhasználók számára az eseményen való megjelenés kapcsán.
Ennek működésen annyiból áll hogy a beviteli mezők kitöltése és a küldés gomb megnyomása után, ha a beírt névvel még nem történt regisztráció akkor az adatokat elmenti a pprogram 
egy erre a célra fentartott adatbázisba. Ha a név mezőbe azt írjuk be hogy "admin" akkor a rendszer egy másik oldalra dob át ahol a "password" jelszót megadva megtekinthető az adatbázis.

## gallery
Ide majd a képeket töltjük fel. A képek kattintásra nagyíthatóak a galléria működésének a szemléltetésére feltöltöttem véletlenszerű képekkel.

## info
Ezen az oldalon természetesen infók találhatóak az eseményről illetve a helyszínről google-maps hivatkozással, ami a képre kattintva érhető el.

## links
Itt az eseményhez kapcsolódó szolgáltatók elérései és egyébb hasznos linkek találhatók.


A kód és a funkcionalitás is még sok helyen csiszolásra szorul, ez csak egy amolyan 0.1-es verzió.
A kódot letöltve egy erre alkalmas php teszszerver segítségével lehet futtatni (pl. XAMP).
