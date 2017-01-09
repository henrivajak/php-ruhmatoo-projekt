NIMI: KODULOOMADE RENT - Koduloom24

EESM�RK: Koduloomade v�ljarentimine inimestele, kes ei taha pikaajalist kohustust nende ees. 
Rendime varjupaigaloomi, et neil p�eva paremaks teha ja samuti ka inimesele, kes tahab looma endale natukeseks ajaks.
Loomi saab rentida ka laste s�nnipe�vapidudele.

SIHTR�HM: K�ik inimesed, aga rentida saavad ainult t�iskasvanud.

Vanus: 18-??

Sugu: M v�i N

Sotsiaalne majanduslik staatus: p�hiharidus - k�rgharidus

Muu: Stabiilne sissetulek

Projekti veebirakenduse pilt: http://puu.sh/tgW9e/c3fd2a0556.jpg

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
	
	- Henri - Sain rohkem aimu ja k�tt siluda nii funktsioonide kui ka kujundamisega. �ppisin rohkem t�hele panema vigu, mis on kahe silma vahele j��nud. Grupit��d tehes, sain uusi teadmisi grupikaaslastelt, mida mul varem polnud.
	Keeruliseks osutas peast funktsiooni loomine ja siis selle realiseerimine. 
	- Tanel - �ppisin juurde nii kujunduse kui ka funktsioonide koostamist.
	T�� koostamise k�igus j�in tihti h�tta ning sain otsida internetist uusi lahendusi, mis mind �petasid edaspidi vigu v�ltima.
	- Cleven - �ppisin juurde paljutki. Tundides l�bitu oli k�ll v�ga kasulik, 
	aga teadmiste proovile panek valitud teema probleemide lahendamiseks 
	kinnitas omandatud teadmisi v�ga palju. Isiklikult �ppisin k�ige
	rohkem tundma php koodimiskeeles back-endi, mis tuleb tulevikus 
	kindlasti v�ga kasuks. Oskan kasutada funktsioone ja saan aru, kuidas
	k�ib suhtlus andmebaasiga. K�lab elementaarselt, aga asjadest aru
	saamine ja protsesside k�igu m�istmine on v�gagi t�htis ning tihti
	on see algajate jaoks v�ga raske.
	Lisaks koodimisele oleks t�htis �ra mainida ka Githubi kasutamisoskuse.
	Github on t�nap�eval nagu open source koodijate keskus ja selle tundmine
	aitab tulevikus asju ajada.
	Eba�nnestusin alguses enamikes asjades mida p��dsin iseseisvalt lahendada.
	Aitasid mind s�brad ja internet ning eba�nnestumised muutusid �nnestumisteks.
	V�in v�ita, et l�puks ei olnud ma eba�nnestunud �heski kriteeriumis, mis
	antud aine eesm�rgiks �petada oli.
	Keeruline oli tegeleda kujundusega. Seda sellep�rast, et ma p��rasin
	sellele minimaalselt t�helepanu ja ei p��dnudki sellese teemasse s�veneda.
	J�rgmine semester tuleb Veebidisain, siis on aega sellesega tegeleda.


Autorid: Henri Vajak, Tanel Maasalu, Cleven Lehispuu

