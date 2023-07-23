<?php
  $SupNum_g_Site_ary = array(
    'OM:SupNum:' =>
      array_merge(
        $nSOSp_g_info_wolfgangHuss,
        array( url_abs => 'https://nsosp.org/de/Superial-Zahlen/',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/',
      favicons_url_rel_opt => $Glo_PathRel_back.'../de/Superial-Zahlen/favicon/',
      name_short => 'SupZahl',
      font_ary => array(
        '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
        '<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
      ),
      header_bgcolor => '#FFFFFF',
      header_pict_name => 'SN/SN_header_v02-01.jpg',
      header_pict_width => '930px',
      header_pict_height => '177px',
      header_pict_bgcolor => '#FFFFFF',
      header_pict_alt => 'Superial-Zahlen, mit Primzahlen ins Unendliche',
      header_links_marginLeft => '398px',
      copy_right =>
        'Superial-Zahlen (SN) \\\\'."\n".
        '© 1988–2023 by \\\\'."\n".
        'Wolfgang Huß und \\\\'."\n".
        'Media Line Digital e.K. \\\\'."\n".
        'is licensed under \\\\'."\n".
        '\\jump{OM:FrQFT:Impressum:CopyrightLizenz:Inhalt}{CC BY-ND 4.0}',
      litera_url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Literatur_de.php',
      litera_bibtex_url_rel => $Glo_PathRel_back.'../share/bibtex/quantum-flow-theory_bibliographie_v8_002.bib',
    )),
    'OM:SupNum:Home' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/index.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/index.php',
      titel => 'Superial-Zahlen (SN) - Deutsch',
      description => '\\name[undertitle]{OM:SupNum:Home}. — \\name[description]{OM:SupNum:Home}.',
      keywords => '',
      text_titel_h1 => 'Superial-Zahlen \\color{*TitleAdd}{\\small{(SN)}}',
      text_titel_short => 'Superial-Zahlen',
      text_undertitel_h2 => 'Mit Primzahlen ins Unendliche',
      text_titel_discr_h3 => 'Ein aktual unendlicher angeordneter algebraischer Körper, als Erweiterung der rationalen Zahlen, der der Unendlichkeit eine fundamentale, fraktale Struktur gibt – neue Ideen elementarer Mathematik',
      jump_ary => array(
        'OM:SupNum:Home:Inhalt' => array( headline_text => 'Inhalt', headline_text_short => 'Inhalt'),
        'OM:SupNum:Home:Lexikon' => array( headline_text => 'Lexikon', headline_text_short => 'Lexikon'),
      ),
    ),
    'OM:SupNum:Ableitungen-Integrale' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/Ableitungen-und-Integrale-aktuale-Unendlichkeit-ersetzt-Limes.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Ableitungen-und-Integrale-aktuale-Unendlichkeit-ersetzt-Limes.php',
      titel => 'Ableitungen und Integrale - Die Superial-Zahlen (SN) - Deutsch',
      description => '\\name[undertitle]{OM:SupNum:Ableitungen-Integrale}.\\hidden{ — \\name[description]{OM:SupNum:Ableitungen-Integrale}.}',
      keywords => '',
      text_titel_h1 => 'Ableitungen und Integrale',
      text_titel_short => 'Ableitungen und Integrale',
      text_undertitel_h2 => 'Aktuale Unendlichkeit ersetzt den Limes oder das Differential',
      text_titel_discr_h3 => '',
      jump_ary => array(
          'OM:SupNum:Ableitungen-Integrale:Vortext:Ableitung' => array( headline_text => 'Die Ableitung'/* , headline_text_short => 'XXX'*/),
          'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-mit-Limes' => array( headline_text => 'SN.AbIn.1'),
          'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Def-Ableitung-mit-Limes-ist-s-hoch-minus-Eins' => array( headline_text => 'SN.AbIn.2'),
          'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Def-Ableitung-mit-s-hoch-minus-Eins' => array( headline_text => 'SN.AbIn.3'),
          'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Def-Ableitung-mit-s-hoch-minus-Eins-Kurznotation' => array( headline_text => 'SN.AbIn.4'),
          'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x2-basis' => array( headline_text => 'SN.AbIn.10'),
          'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x2-ausmultipliziert' => array( headline_text => 'SN.AbIn.11'),
          'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x2-subtrahiert' => array( headline_text => 'SN.AbIn.12'),
          'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x2-Ergebnis' => array( headline_text => 'SN.AbIn.13'),
          'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x3-basis' => array( headline_text => 'SN.AbIn.14'),
          'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x3-ausmultipliziert' => array( headline_text => 'SN.AbIn.15'),
          'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x3-subtrahiert' => array( headline_text => 'SN.AbIn.16'),
          'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x3-Ergebnis' => array( headline_text => 'SN.AbIn.17'),

          'OM:SupNum:Ableitungen-Integrale:Vortext:Integration' => array( headline_text => 'Die Integration'/* , headline_text_short => 'XXX'*/),

        'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen' => array( headline_text => 'Nähere Untersuchung bestimmter Summen'/* , headline_text_short => 'XXX'*/),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Summen-zur-Integration-von-2x-plus-supkl-Eins' => array( headline_text => 'Summen zur Integration von \\latexmath{ 〈2 x〉․〈1〉 }'/* , headline_text_short => 'XXX' */),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt' => array( headline_text => 'SN.AbIn.NU.1'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Menge-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x' => array( headline_text => 'SN.AbIn.NU.3'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-x' => array( headline_text => 'SN.AbIn.NU.4'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-mit-Summe-ungeloest-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins' => array( headline_text => 'SN.AbIn.NU.08'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-mit-Summe-geloest-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins' => array( headline_text => 'SN.AbIn.NU.09'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins' => array( headline_text => 'SN.AbIn.NU.10'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-y-mal-2-plus-x-zus-mal-omega-ist-erster-Summand' => array( headline_text => 'SN.AbIn.NU.19'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-erster-Summand-von-Integration-von-2x-plus-supkl-Eins' => array( headline_text => 'SN.AbIn.NU.25'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt-Anzahlausdruck-Differenz' => array( headline_text => 'SN.AbIn.NU.27'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt-Anzahlausdruck-Differenz-ausgeklammert' => array( headline_text => 'SN.AbIn.NU.28'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Doppelsummenausdruck-erster-Summand-von-Integration-von-2x-plus-supkl-Eins' => array( headline_text => 'SN.AbIn.NU.32'),
          'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-rationale-Zahlen-bisOhne-x' => array( headline_text => 'SN.AbIn.NU.39'),
      ),
    ),
    'OM:SupNum:Eigenschaften' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/Eigenschaften.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Eigenschaften.php',
      titel => 'Eigenschaften - Die Superial-Zahlen (SN) - Deutsch',
      description => '\\name[undertitle]{OM:SupNum:Eigenschaften}. — \\name[description]{OM:SupNum:Eigenschaften}.',
      keywords => '',
      text_titel_h1 => 'Eigenschaften',
      text_titel_short => 'Eigenschaften',
      text_undertitel_h2 => 'Welche Erkenntnisse können wir aus den Superial-Zahlen lernen?',
      text_titel_discr_h3 => '',
      jump_ary => array(
        'OM:SupNum:Eigenschaften:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                   
        'OM:SupNum:Eigenschaften:StrukturVonS' => array( headline_text => 'Die Struktur von \\term{s}' , headline_text_short => 'Die Struktur von s'),
          'OM:SupNum:Eigenschaften:StrukturVonS:WasLernenUeberGroesseOmegaUndStrukturS' => array( headline_text => 'Was lernen wir über die Größe von \\term{ω} und die Struktur von \\term{s} über die Frage der Vorgänger?', headline_text_short => 'Was lernen wir über die Größe von ω und die Struktur von s über die Frage der Vorgänger?'),
          'OM:SupNum:Eigenschaften:StrukturVonS:Equ-natuerliche-Vorgaenger-s' => array( headline_text => 'SN.Eig.SVS.1'),
          'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Q-aus-Z' => array( headline_text => 'SN.Eig.SVS.8'),
          'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins' => array( headline_text => 'SN.Eig.SVS.10'),
          'OM:SupNum:Eigenschaften:StrukturVonS:Fig-OntologieGanzeZahlen' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
          'OM:SupNum:Eigenschaften:StrukturVonS:AusgangspunktPrimzahlproduktVerm' => array( headline_text => 'Ausgangspunkt der Primzahlprodukt-Vermutung'/* , headline_text_short => 'XXX' */),
          'OM:SupNum:Eigenschaften:StrukturVonS:Erklaer-Anzahl-endl-ganz-Zahlen' => array( headline_text => 'Erklärung der Anzahl der endlichen ganzen Zahlen durch ihren ontologischen Ursprung in den Biordinalzahlen'/* , headline_text_short => 'XXX' */),
      ),
    ),
    'OM:SupNum:Einleitung' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/Einleitung.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Einleitung.php',
      titel => 'Einleitung - Die Superial-Zahlen (SN) - Deutsch',
      description => 'Mit den Superial-Zahlen die fraktale Struktur des Unendlichen entdecken.',
      keywords => '',
      text_titel_h1 => 'Einleitung',
      text_titel_short => 'Einleitung',
      text_undertitel_h2 => 'Mit den Superial-Zahlen die fraktale Struktur des Unendlichen entdecken',
      text_titel_discr_h3 => '',
      jump_ary => array(
        'OM:SupNum:Einleitung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                   
          'OM:SupNum:Einleitung:Vortext:Ableitung-genau-verstehen' => array( headline_text => 'Ableitung genau verstehen'/*, headline_text_short => 'XXX'*/),
          'OM:SupNum:Einleitung:Vortext:Integral-genau-verstehen' => array( headline_text => 'Integral genau verstehen'/*, headline_text_short => 'XXX'*/),
          'OM:SupNum:Einleitung:Vortext:Integral-genau-verstehen:Konkretes-Integral' => array( headline_text => 'Konkretes Integral'/*, headline_text_short => 'XXX'*/),
          'OM:SupNum:Einleitung:Vortext:Equ-Menge-superial-kleine-ganze-Zahlen' => array( headline_text => 'SN.Ein.5'),
          'OM:SupNum:Einleitung:Vortext:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen' => array( headline_text => 'SN.Ein.6'),
          'OM:SupNum:Einleitung:Vortext:Equ-Integriere-zu-x2-bis-auf-letzte-Summe' => array( headline_text => 'SN.Ein.13'),
          'OM:SupNum:Einleitung:Vortext:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x' => array( headline_text => 'SN.Ein.15'),

          'OM:SupNum:Einleitung:Vortext:Fig-GeradeSuperialZahlen' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),

          'OM:SupNum:Einleitung:Vortext:Was-ist-unsere-neue-superiale-Basis-s' => array( headline_text => 'Was ist unsere neue superiale Basis \\latexmath{ s }?'/*, headline_text_short => 'XXX'*/),
          'OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-N' => array( headline_text => 'SN.Ein.31'),
          'OM:SupNum:Einleitung:Vortext:Equ-omega-ist-Anzahl-in-N' => array( headline_text => 'SN.Ein.32'),
          'OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega' => array( headline_text => 'SN.Ein.33'),
          'OM:SupNum:Einleitung:Vortext:Equ-s-gleich-fuer-alle-in-N-Primzahl-Prod' => array( headline_text => 'SN.Ein.34'),
          'OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod' => array( headline_text => 'SN.Ein.35'),
          'OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Prod-hoch-omega' => array( headline_text => 'SN.Ein.36'),

        'OM:SupNum:Einleitung:Grundlagen' => array( headline_text => 'Grundlagen'/*, headline_text_short => 'XXX'*/),
          'OM:SupNum:Einleitung:Grundlagen:Ganze-Natuerl-Sup-Zahl-und-Integration' => array( headline_text => 'Definition ganzer und natürlicher Superial-Zahlen und die Integration'/*, headline_text_short => 'XXX'*/),

        'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn' => array( headline_text => 'Fragestellungen und perspektivischer Erkenntnisgewinn'/*, headline_text_short => 'XXX'*/),
          'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Ueberrationalitaetsvermutung' => array( headline_text => 'Überrationalitätsvermutung', headline_text_short => 'Überrationalitätsvermutung'),
          'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Primzahlenprodukt-Vermutung' => array( headline_text => 'Primzahlenprodukt-Vermutung', headline_text_short => 'Primzahlenprodukt-Vermutung'),
      ),
    ),
    'OM:SupNum:Formale-Entwicklung' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/Formale-Entwicklung.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Formale-Entwicklung.php',
      titel => 'Formale Entwicklung - Die Superial-Zahlen (SN) - Deutsch',
      description => '\\name[undertitle]{OM:SupNum:Formale-Entwicklung}.\\hidden{ — \\name[description]{OM:SupNum:Formale-Entwicklung}.}',
      keywords => '',
      text_titel_h1 => 'Formale Entwicklung',
      text_titel_short => 'Formale Entwicklung',
      text_undertitel_h2 => 'Definition der Superial-Zahlen und ihrer wichtigen Teilmengen',
      text_titel_discr_h3 => '',
      jump_ary => array(
        'OM:SupNum:Formale-Entwicklung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                   
          'OM:SupNum:Formale-Entwicklung:Vortext:DefinitionSuperialeEinheit' => array( headline_text => 'Definition der superialen Einheit \\term{s}',/* headline_text_short => 'XXX'*/),
          'OM:SupNum:Formale-Entwicklung:Vortext:Fig-sGeomKonstruktWiederholung' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
          'OM:SupNum:Formale-Entwicklung:Vortext:Fig-sGeomKonstruktTeilung' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),

        'OM:SupNum:Formale-Entwicklung:GanzeSZ' => array( headline_text => 'Ganze Superial-Zahlen'/* , headline_text_short => 'XXX' */),
        'OM:SupNum:Formale-Entwicklung:NatuerlicheSZ' => array( headline_text => 'Natürliche Superial-Zahlen'/* , headline_text_short => 'XXX' */),
        'OM:SupNum:Formale-Entwicklung:PrimSZ' => array( headline_text => 'Superiale Primzahlen'/* , headline_text_short => 'XXX' */),

        'OM:SupNum:Formale-Entwicklung:Formalien' => array( headline_text => 'Formalien'/* , headline_text_short => 'XXX' */),
          'OM:SupNum:Formale-Entwicklung:Formalien:Equ-alle-n-kleiner-s' => array( headline_text => 'SN.Form.F.14'),
          'OM:SupNum:Formale-Entwicklung:Formalien:Equ-exist-n-mit-r-kleiner-n' => array( headline_text => 'SN.Form.F.15'),
          'OM:SupNum:Formale-Entwicklung:Formalien:Zahlen-und-Mengen-im-Unendlichen' => array( headline_text => 'Zahlen und Mengen im Unendlichen'/*, headline_text_short => 'XXX'*/),
          'OM:SupNum:Formale-Entwicklung:Formalien:Stellenwertsystem' => array( headline_text => 'Stellenwertsystem'/* , headline_text_short => 'XXX' */),
          'OM:SupNum:Formale-Entwicklung:Formalien:Skalierung-Teilmenge-Superial-Zahlen' => array( headline_text => 'Skalierung der superialen Ebene einer Teilmenge der Superial-Zahlen'/* , headline_text_short => 'XXX' */),
          'OM:SupNum:Formale-Entwicklung:Formalien:Skalierung-Teilmenge-Superial-Zahlen:Equ-Menge-superiale-Ebene-skalieren' => array( headline_text => 'SN.Form.F.24'),
          'OM:SupNum:Formale-Entwicklung:Formalien:Intervall-Menge' => array( headline_text => 'Intervall-Menge'/* , headline_text_short => 'XXX' */),
      ),
    ),
    'OM:SupNum:Literatur' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/Literatur_de.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Literatur_de.php',
      titel => 'Literatur - Die Superial-Zahlen (SN) - Deutsch',
      description => 'Literatur zu den Superial-Zahlen.',
      keywords => '',
      text_titel_h1 => 'Literatur',
      text_titel_short => 'Literatur',
      text_undertitel_h2 => 'und Informationen',
      //text_titel_discr_h3 => 'Vereinheitlichte Physik auf Basis eines selbstorganisierten, fraktalen Systems von lichtähnlichen, zu Strings verbundenen Wirkungsquanten.',
      jump_ary => array(
      ),
    ),
    'OM:SupNum:Primzahlprodukt-Vermutung' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/Primzahlprodukt-Vermutung.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Primzahlprodukt-Vermutung.php',
      titel => 'Primzahlprodukt-Vermutung (Beweis) - Die Superial-Zahlen (SN) - Deutsch',
      description => '\\name[undertitle]{OM:SupNum:Primzahlprodukt-Vermutung}. — \\name[description]{OM:SupNum:Primzahlprodukt-Vermutung}.',
      keywords => '',
      text_titel_h1 => 'Primzahlprodukt-Vermutung  \\color{*TitleAdd}{\\small{(Beweis)}}',
      text_titel_short => 'Primzahlprodukt-Vermutung',
      text_undertitel_h2 => 'Ist das Produkt aller endlichen Primzahlen, also die Primfakultät über alle Primzahlen in der Menge der natürlichen Zahlen, der Anzahl der natürlichen Zahlen gleich?',
      text_titel_discr_h3 => 'Eine Vorstellung der Vermutung und ihr Beweis',
      jump_ary => array(
        'OM:SupNum:Primzahlprodukt-Vermutung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),

          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-Produkt-aller-endlichen-Primzahlen' => array( headline_text => 'SN.PP.6'),
          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega' => array( headline_text => 'SN.PP.7'),

          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Satz-des-Euklid' => array( headline_text => 'Satz des Euklid'/* , headline_text_short => 'XXX'*/),
        'OM:SupNum:Primzahlprodukt-Vermutung:Folgen' => array( headline_text => 'Folgen, wenn wahr'/* , headline_text_short => 'XXX'*/),
      ),
    ),
    'OM:SupNum:Ueberrationalitaetsvermutung' => array(
      url_abs => 'https://nsosp.org/de/Superial-Zahlen/Ueberrationalitaetsvermutung.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Ueberrationalitaetsvermutung.php',
      titel => 'Überrationalitätsvermutung - Die Superial-Zahlen (SN) - Deutsch',
      description => '\\name[undertitle]{OM:SupNum:Primzahlprodukt-Vermutung}. — \\name[description]{OM:SupNum:Primzahlprodukt-Vermutung}.',
      keywords => '',
      text_titel_h1 => 'Überrationalitätsvermutung',
      text_titel_short => 'Überrationalitätsvermutung',
      text_undertitel_h2 => 'Lässt sich die Wurzel aus Zwei als Bruch mit unendlich vielen endlichen Primzahlen endlicher Potenz ausdrücken?',
      text_titel_discr_h3 => 'Wenn ja, so gilt dies vermutlich für die Koordinaten aller irrationalen algebraischen Zahlen',
      jump_ary => array(
        'OM:SupNum:Ueberrationalitaetsvermutung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                   
          'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:XXX' => array( headline_text => 'XXX'/* , headline_text_short => 'XXX'*/),
        'OM:SupNum:Ueberrationalitaetsvermutung:Untersuchung' => array( headline_text => 'Untersuchung'/* , headline_text_short => 'XXX'*/),
      ),
    ),
  );
?>
