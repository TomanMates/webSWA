# Cestovatelský Plánovač

**Autor:** Matěj Toman

## 📁 Kompletní adresářová struktura

Projekt je rozdělen do tří hlavních kořenových složek, což zajišťuje maximální přehlednost a čistotu správy zdrojových kódů:

```text
📁 webSWA/
 ├── 📁 css/                  # Složka se specifickými styly pro podstránky
 │    ├── bezpecnost.css      # Vzhled faktické stránky o bezpečnosti
 │    ├── blog.css            # Styly pro rozcestník článků (karty)
 │    ├── cenik.css           # Styly pro sémantickou tabulku
 │    ├── clanek.css          # Vzhled detailu blogových článků
 │    ├── destinace.css       # Styly pro mřížku destinací (figure/figcaption)
 │    ├── index.css           # Úvodní strana (Hero sekce, propagační karty)
 │    ├── kontakt.css         # Styly pro rozložení kontaktního formuláře
 │    ├── onas.css            # Styly pro představení týmu a vize
 │    └── sluzby.css          # Vzhled očíslovaných služeb (kruhy)
 ├── 📁 img/                  # Složka s multimediálními assety webu
 │    ├── bali.png            # Fotografie chrámu na Bali
 │    ├── kjoto.jpg           # Fotografie pagody v Kjótu (JPEG)
 │    ├── kompas.jpg          # Historický kompas (JPEG)
 │    ├── kridlo.png          # Křídlo letadla pro hrdinské sekce
 │    ├── molo.png            # Molo u jezera
 │    ├── most.png            # Seinský most v Paříži
 │    ├── newyork.png         # Times Square v New Yorku
 │    └── voda.png            # Krabice s pitnou vodou u hor
 └── 📁 html/                 # Složka obsahující kompletní aplikační logiku a stránky
      ├── bezpecnost.html     # Čistě faktická stránka o pravidlech na cestách
      ├── blog.html           # Přehledový rozcestník článků s kartami
      ├── cenik.html          # Stránka s tabulkovým přehledem služeb
      ├── clanek1.html        # Článek: Jak si sbalit do příručního zavazadla
      ├── clanek2.html        # Článek: 5 zaručených způsobů na levné letenky
      ├── destinace.html      # Výpis lokalit s popisy
      ├── index.html          # Hlavní vstupní bod webu
      ├── kontakt.html        # Kontaktní stránka s interaktivním formulářem
      ├── onas.html           # Stránka o příběhu a poslání projektu
      ├── sluzby.html         # Přehled pomoci s cestováním
      └── zpracovani.php      # PHP skript pro bezpečné zpracování a výpis POST dat
