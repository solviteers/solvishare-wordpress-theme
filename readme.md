# Solvishare WordPress Thema
Deze readme beschrijft hoe het Solvishare WordPress thema is opgebouwd en hoe je het kunt aanpassen.
Het Solvishare thema is een _child-theme_ van het (betaalde) thema _supportdesk_.
Dit betekent dat dit child-thema alleen aanpassingen en aanvullingen op het hoofdthema bevat.

## Quickstart
1. Instaleer WordPress lokaal op je ontwikkelmachine
2. Installeer het supportdesk parent-theme in je vers aangemaakte WordPress installatie.
3. `git clone` dit child-thema naar de map /wp-content/themes
4. installeer de node_modules door middel van `yarn install`
5. Maak een wijziging aan de sass of js
6. Compileer je wijzigingen via de commandline `yarn run dev`
7. Ververs de pagina om je wijzigingen te raadplegen

## Sass en js compileren
Om de css code overzichtelijk en beheersbaar te houden werken we met een preprocessor.
Dit maakt het ook mogelijk om js en css bij het compileren te bewerken naar het meest optimale resultaat.
Denk hierbij aan opties als minification, purify en uglify

Voor ontwikkeldoeleinden kun je `yarn run dev` gebruiken. Dit slaat de minificatie bijvoorbeeld over.

Je kunt je wijzigingen realtime laten compileren door de watcher te activeren.
Dit kan via de commandline `yarn run watch`

Als de wijzigingen klaar zijn gebruik je `yarn run production` om vervolgens de nieuwe code in te checken.

## Structuur mappen en bestanden
- dist, dit bevat de gecompileerde js en css die gebruikt wordt in de template
- resources, dit bevat alle bronbestanden
- .gitignore, vertelt git welke bestanden genegeert moeten worden
- functions.php, wordt geladen voorafgaand aan de functions.php van het parent-theme
- package.json, bevat de npm-afhankelijkheden
- style.css, bevat de meta informatie over het child-theme. De css is te vinden in de map dist/css
- webpack.mix.js, webpack configuratie
- yarn.lock, de actuele versie van de ingeladen node_modules
