# Eindopdracht - inloggen met PHP en MySQL 
Template voor eindopdracht level 4
# Opdracht:
Maak een Inlogsysteem met PHP en MySQL
# Beschrijving:
Het doel van deze opdracht is om een eenvoudig inlogsysteem te bouwen met behulp van PHP en MySQL. Het inlogsysteem moet gebruikersregistratie, inlogfunctionaliteit en een beveiligde pagina bieden waar alleen ingelogde gebruikers toegang toe hebben. 

Gebruik de volgende uitnodigingslink van GitHub classroom om je aan te melden voor de persoonlijke repository van dit project. 

https://classroom.github.com/a/-mmuZuI0

Clone deze repository naar je eigen systeem om met de bestanden in dit project de opdracht af te maken. De repository bestaat  uit de volgende onderdelen:

- index.php
- login.php
- logout.php
- register.php
- css/style.css
- README.md
- login.sql

Het laatste SQL bestand gebruik je als database voor je inlogsysteem. Deze database bestaat uit een enkele tabel (user) met een username en password kolom.

# Functionele vereisten:

## Registratiepagina:
- Een gebruiker moet zich kunnen registreren door een gebruikersnaam en wachtwoord in te voeren 
- Zorg voor een controle op het wachtwoord door deze 2 x in te voeren, deze beide hetzelfde moeten zijn. 
- De gebruikersnaam moet uniek zijn in de database.
- Het wachtwoord moet worden gehasht voordat het in de database wordt opgeslagen.
## Inlogpagina:
- Een geregistreerde gebruiker moet kunnen inloggen met zijn/haar gebruikersnaam en wachtwoord.
- Onjuiste inloggegevens moeten een foutmelding geven.
## Uitlog pagina:
- Een ingelogde gebruiker moet kunnen uitloggen.
- Verplaats de gebruiker naar de inlogpagina nadata het uitloggen heeft plaatsgevonden.
## Beveiligde pagina's:
- Nadat een gebruiker is ingelogd, moeten bepaalde pagina's alleen toegankelijk zijn voor ingelogde gebruikers.
- Als een niet-ingelogde gebruiker probeert toegang te krijgen tot een beveiligde pagina, moet hij/zij worden omgeleid naar de inlogpagina.
## Technische vereisten:
- Gebruik PHP om de backend-functionaliteit te implementeren.
- Maak gebruik van MySQL om de gebruikersgegevens op te slaan.
- - Je mag gebruik maken van de object georienteerde API van MySQLi of PDO om je database te raadplegen
- - Gebruik prepared statements
- Maak gebruik van HTML, CSS en eventueel JavaScript voor de frontend.
- Maak gebruik sessies om de ingelogde status van een gebruiker bij te houden.
# Inleveren:
- Push het resultaat voor deze opdracht naar de Github classroom repository zoals boven de opdracht is beschreven. 

