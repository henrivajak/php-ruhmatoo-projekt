NIMI: KODULOOMADE RENT - Koduloom24

EESM�RK: Koduloomade v�ljarentimine inimestele, kes ei taha pikaajalist kohustust nende ees. 
Rendime varjupaigaloomi, et neil p�eva paremaks teha ja samuti ka inimesele, kes tahab looma endale natukeseks ajaks.
Loomi saab rentida ka laste s�nnipe�vapidudele.

SIHTR�HM: K�ik inimesed, aga rentida saavad ainult t�iskasvanud.

Vanus: 18-??

Sugu: M v�i N

Sotsiaalne majanduslik staatus: p�hiharidus - k�rgharidus

Muu: Stabiilne sissetulek

LEHED:
	Sisselogimine
		- email, eesnimi, perekonnanimi, parool
	Registreerimine
		- email, parool, eesnimi, perekonnanimi
	Loomade vaatamine
		- Iga looma kohta eraldi leht tema pildiga.
	Loomade broneerimine
	Loomade registreerimine
	Andmete muutmine ehk edit
	Kasutaja info ehk user
	Varjupaikade vaatamine
	Varjupaikade lisamine
	Kontakt
	Avaleht
	
ANDMEBAASI SKEEM:
Veebilehe koostamiseks kasutasime kuute andmebaasi tabelit:
	- animals (id, type, name, url(pildi jaoks), shelter, deleted, booked)
		- Vajalik loomade sisestamiseks varjupaikadesse ning nende kuvamiseks kliendile. Samuti n�itab, kas loom on broneeritud.
	- animalshelters(id, name, county, city)
		- Loomavarjupaikade loeng. Vajalik nende sisestamiseks ning kuvamiseks kliendile.
	- booking (id, animal_id, created, animal_return)
		- Vajalik looma broneerimiseks ning vabastamiseks.
	- interests(id, interest)
		- Huvide loetelu, mida klient saab omale lisada.
	- user_interests (id, user_id, interest_id)
		- Kliendi lisatud huvid eelnevast loetelust.
	- user_sample (id, email, password, created)
		- Registreerunud kasutajad. Vajalik nii registreerimiseks kui ka logimiseks.

KOKKUV�TE:
	- Cleven
	- Henri
	- Tanel - �ppisin juurde nii kujunduse kui ka funktsioonide koostamist.
T�� koostamise k�igus j�in tihti h�tta ning sain otsida internetist uusi lahendusi, mis mind �petasid edaspidi vigu v�ltima.


Autorid: Henri Vajak, Tanel Maasalu, Cleven Lehispuu

