# Cestovatelský Plánovač

**Autor:** Matěj Toman 

## 📁 Adresářová struktura

Projekt je striktně rozdělen do logických složek pro zachování přehlednosti a čistoty kódu:

```text
📁 webSWA/
 ├── 📁 css/                  # Modulární styly pro jednotlivé podstránky
 │    ├── style.css           # Globální reset, typografie, menu a patička
 │    ├── kontakt.css         # Styly pro kontaktní formulář
 │    ├── cenik.css           # Styly pro tabulku s ceníkem
 │    ├── o-nas.css           # Styly pro mřížku týmu
 │    ├── bezpecnost.css      # Styly pro faktický článek o bezpečnosti
 │    ├── blog.css            # Styly pro rozcestník článků (karty)
 │    ├── clanek.css          # Styly pro detail textového článku
 │    └── destinace.css       # Styly pro galerii destinací (figure/figcaption)
 ├── 📁 img/                  # Složka pro multimediální obsah (obrázky)
 │    └── kridlo.png
 ├── 📄 index.html            # Hlavní úvodní strana (Hero sekce, rozcestník)
 ├── 📄 o-nas.html            # Představení vize a týmu projektu
 ├── 📄 destinace.html        # Přehled doporučených lokalit
 ├── 📄 sluzby.html           # Detailní rozpis nabízených služeb s číslováním
 ├── 📄 cenik.html            # Sémantická tabulka s cenovými balíčky
 ├── 📄 blog.html             # Rozcestník pro cestovatelské články
 ├── 📄 clanek1.html          # Článek: Jak si sbalit do příručního zavazadla
 ├── 📄 clanek2.html          # Článek: 5 zaručených způsobů na levné letenky
 ├── 📄 bezpecnost.html       # Čistě faktická stránka o bezpečnosti na cestách
 ├── 📄 kontakt.php           # Kontaktní stránka s HTML5 formulářem směřujícím na PHP
 └── 📄 zpracovani.php        # PHP skript pro bezpečné přijetí a výpis dat z formuláře
