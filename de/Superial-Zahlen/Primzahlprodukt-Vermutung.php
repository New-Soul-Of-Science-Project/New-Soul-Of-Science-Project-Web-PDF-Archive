<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Primzahlprodukt-Vermutung'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Eigenschaften'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\\bold{Warum könnte die Primzahlprodukt-Vermutung stimmen?}',
                    '• Die Primzahlen werden unter den sehr großen natürlichen Zahlen extrem selten.',
                    '• Es klafft eine riesige Lücke zwischen den endlichen natürlichen Zahlen und \\term{ω}, siehe \\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:NeueEinsichtenZuPosAktualUnendl}. Ist diese Lücke wirklich so groß? Meine Analyse sagt: \\term{ω - 1} zahlen sind vom Typ \\term{ω - n} in den Biordinalzahlen. Stimmt allerdings die Primzahlprodukt-Vermutung, dann liegen auch alle \\term{p⋅ω - n}, mit \\term{p} ist ein Primzahlprodukt einfacher Potenz aus endlich vielen Primzahlen. Ob es dann eine Einschränkung für die Größe von \\term{n} gibt, ist mir unklar.',
                    '\\bold{Interessante Erkenntnisse zu Primzahlen}',
                    '• Der \\jump[https://de.wikipedia.org/w/index.php?title=Stern-Brocot-Folge&oldid=224277569]{Calkin-Wilf-Baum}{Calkin-Wilf-Baum} muss etwas mit der Primzahlstruktur zu tun haben, weil alle seine Brüche teilerfremde Zähler und Nenner haben.',
                    '• Mit dem \\jump[https://de.wikipedia.org/w/index.php?title=Satz_von_Wilson&oldid=229853875]{}{Satz von Wilson} können wir herausfinden, ob eine Zahl eine Primzahl ist, wenn ich es richtig verstehe, siehe Primzahl-Produkt-Definition von \\term{s} in meinem Ordner „4. Variante“, Dokument „Sup-Zahl (52).pdf“, S. 5.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Auf die Primzahlprodukt-Vermutung bin ich durch das Herumspielen mit der'."\n".
                    '\\jump{OM:SupNum:Eigenschaften:StrukturVonS}{Struktur der Superial-Zahlen} gestoßen.'."\n".
                    'Schauen wir uns das Zählen der \\jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSZ}{natürlichen Superial-Zahlen} an,'."\n".
                    'wie dabei die endlichen rationalen Zahlen'."\n".
                    'als Koeffizienten mitgezählt werden und welche Größenordnung die Anzahl der endlichen natürlichen Zahlen'."\n".
                    'als Koeffizienten im Verhältnis zu den rationalen Zahlen haben, dann können wir auf die Idee kommen,'."\n".
                    'dass die Anzahl der endlichen natürlichen Zahlen dem Produkt aller endlichen Primzahlen entspricht.'."\n",
                      'Den Ansatz zu dieser Vermutung finden wir im Abschnitt \\italic{\\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:AusgangspunktPrimzahlproduktVerm}},'."\n".
                    'wo wir uns schon mit der Struktur von \\term{s} beschäftigt haben.'."\n",
                      'Dabei fanden wir, dass die Anzahl der rationalen Zahlen \\latexmath{ \lbrack 0, 1 \lbrack_\mathbb{Q} }, von einschließlich der Null bis zur Eins, ohne die Eins, in Formel \\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins}'."\n".
                    'eine ganze Zahl sein muss.'."\n".
                    'Das können wir mit Hilfe der Abrundung durch die Gaußklammer\\color{*Bearb}{(Verweis)} \\latexmath{ \lfloor x \rfloor } zum Ausdruck bringen, die eine Zahl \\latexmath{ x } auf die nächst kleinere ganze Zahl abrundet, wenn sie noch keine ganze Zahl ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \# *( [ 0, 1 [_\mathbb{Q} *)  =  \frac{ s }{ 2 \cdot \omega }  }',
                                          /* label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins', */label_text => '\\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \frac{ s }{ 2 \cdot \omega } - \left\lfloor \frac{ s }{ 2 \cdot \omega } \right\rfloor  =  0  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Ganzzahligkeit bedingt, dass alle Primfaktoren von \\latexmath{ 2 \cdot \omega } auch in \\latexmath{ s } vorkommen müssen.'."\n",
                    ''))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX',
                Title => 'Fragen die offen sind …',
                TitleVis => 'Fragen die offen sind:', ParagraphList => array(
                  array( 'bulletlist', array( bullet_ary => array(
                        'Gehören die denkbaren \\jump{OM:SupNum:Ueberrationalitaetsvermutung}{überrationalen Zahlen} (auch in der \\jump{OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Ueberrationalitaetsvermutung}{Einleitung})'."\n".
                          '– vermutlich die Koordinaten von algebraischen Zahlen\\footnote{\\const{SupNum_g_footnote_text_AlgebraischeZahl}}, wie \\latexmath{ \sqrt{ 2 } } –'."\n".
                          'auch zu den möglichen Koeffizienten der Definition der (natürlichen) Superial-Zahlen? \\\\'."\n".
                          'Falls dem so sein sollte, dann steht \\latexmath{ \frac{ s }{ 2 \cdot \omega } } nicht alleine für die rationalen Zahlen \\latexmath{ \lbrack 0, 1 \lbrack_\mathbb{Q} },'."\n".
                          'sondern für die überrationalen Zahlen \\latexmath{ \lbrack 0, 1 \lbrack_\mathbb{Qr} }. \\\\'."\n".
                          'Dies würde allerdings nichts an der Primzahlprodukt-Vermutung ändern',
                    ))),
                    ))),

                  array( 'text', array( text => array(
                    'Und wir wissen auch, dass \\latexmath{ s } unendlich viel größer als \\latexmath{ ω } ist,'."\n".
                    'denn nach unseren Erkenntnissen aus dem Kapitel \\italic{\\jumpname{OM:SupNum:Eigenschaften:StrukturVonS}} steht'."\n".
                    '\\latexmath{ s } für die Anzahl der rationalen Zahlen und \\latexmath{ ω } für die Anzahl der natürlichen Zahlen.'."\n".
                    'Ich vergleiche hier aber nicht die Mächtigkeit\\footnote{\\const{SupNum_g_footnote_text_Maechtigkeit}} der Menge der rationalen Zahlen und die Mächtigkeit der natürlichen Zahlen,'."\n".
                    'wobei es darum geht, ob sich zwei Mengen bidirektional aufeinander abbilden lassen.'."\n".
                    'Sondern ich meine die kombinatorische Erzeugung von Elementen einer unendlich großen Menge'."\n".
                    'im Verhältnis zur vollständigen Induktion bei der Erzeugung der Menge der natürlichen Zahlen.'."\n",
                      'Die unendlich viel größere Erzeugungskombinatorik drücken wir mit dem Symbol \\latexmath{ \overset{\infty}{\ggg} } aus:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s  \;\;\;\overset{\infty}{\ggg}\;\;\;  \omega  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Im Folgenden können wir dies klar erkennen.'."\n",
                      'Denn \\latexmath{ s } ist in Formel \\jumpname{OM:SupNum:Formale-Entwicklung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod}'."\n".
                    'durch folgendes Primzahl-Flächenprodukt definiert:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s  :=  (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{1} \\\ \qquad\;\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{2} \\\ \qquad\;\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{3} \\\ \qquad\;\; \;\;\;\; \vdots \\\ \qquad\;\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{n \in \mathbb{N}} \\\ \qquad\;\; \;\;\;\; \vdots  }',
                                          label_text => '\\jumpname{OM:SupNum:Formale-Entwicklung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Da, wie oben geschildert, alle Primfaktoren von \\latexmath{ 2 \cdot \omega } auch in \\latexmath{ s } vorkommen müssen,'."\n".
                    'muss \\latexmath{ 2 \cdot \omega }, und somit auch \\latexmath{ \omega }, ein Teil des Primzahl-Flächenprodukts sein,'."\n".
                    'der einen unendlich großen Wert hat.'."\n",
                      'Die unendlich große Primzahl-Potenz mit der kleinsten Basis ist \\latexmath{ 2^ω }.'."\n".
                    'Wenn wir berücksichtigen, dass ja durch \\latexmath{ 2 \cdot \omega } geteilt werden soll und den Faktor \\latexmath{ 2 } schon mal aus'."\n".
                    'der Potenz entfernen ergibt sie sich zu \\term{2^{ω-1}}, wobei \\term{ω-1} durch die'."\n".
                    '\\jump{OM:BiOrd:Home}{Biordinalzahlen} definiert ist.'."\n",
                      'Nun ist es offensichtlich, dass \\term{2^{ω-1}} ungleich und sogar sehr viel größer als \\term{ω} ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{ω - 1}  \neq  \omega  }'),
                      array( display => 'on',  latex => '{  2^{ω - 1}  \;\;\;\ggg\;\;\;  \omega  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall p \in \mathbb{P} *)  *[  p^{ω}  \;\;\;\ggg\;\;\;  \omega  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Somit kommt keine Potenz \\latexmath{ p^ω } einer der Primzahlen, eine Spalte, aus dem Primzahl-Flächenprodukt als unendlich großer Primfaktorenprodukt-Anteil von \\latexmath{ s },'."\n".
                    'der \\latexmath{ \omega } gleich ist, in Frage.'."\n",
                      'Eine Möglichkeit, die noch bleibt, ist, dass \\latexmath{ \omega } dem unendlichen Produkt aller'."\n".
                    'endlichen Primzahlen gleich ist, also einer Zeile des Primzahl-Flächenprodukts:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \omega  ?=  \omega_{\forall p}  :=  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots  }',
                                          label_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-Produkt-aller-endlichen-Primzahlen', label_text => '\\name{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-Produkt-aller-endlichen-Primzahlen}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  s  =  *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)^{\omega}  \\\ \qquad\quad\;  =  *( \omega_{\forall p} *)^{\omega}  ?=  \omega^{\omega}  }',
                                          label_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega', label_text => '\\name{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Jedoch woher wissen wir, dass alle endlichen Primzahlen genau ein Mal im Produkt vorkommen sollten?'."\n",
                      'Dies können wir plausibel machen, wenn wir erkennen, dass es in jedem Fall zwei Möglichkeiten gibt,'."\n".
                    'die Unendlichkeit der endlichen natürlichen Zahlen zu zeigen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'Zwei Arten die Unendlichkeit der endlichen natürlichen Zahlen zu beweisen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wenn wir verstehen, dass auch der \\jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Satz-des-Euklid}{›Satz des Euklid‹}\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:SatzDesEuklid:2023}.}'."\n".
                    'beweist, dass die endlichen natürlichen Zahlen nicht enden, dann können wir erkennen,'."\n".
                    'welche Bedeutung dieser Satz und das Zentrum seines Beweises für die natürlichen Zahlen hat.'."\n",
                      'Es gibt also mindestens zwei Arten die Unendlichkeit der endlichen natürlichen Zahlen zu beweisen:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Beweis durch Zählen} \\\\'."\n".
                    'Ein Mal durch das Zählen, mittels der vollständigen Induktion\\footnote{\\const{BiOrd_g_footnote_text_VollstaendigeInduktion}},'."\n".
                    'auf Basis des Zählatoms Eins, ausgehend von der Null.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Beweis durch Multiplikation und Zählen} \\\\'."\n".
                    'Und ein weiteres Mal mittels der Multiplikation und des Zählens, auf Basis der Multiplikationsatome,'."\n".
                    'der Primzahlen, und des Zählatoms Eins, ausgehend von der Eins.'."\n".
                    'So, wie es nachfolgend im ›Satz des Euklid‹ beschrieben ist.'."\n".
                    'Sein Beweis basiert auf der Primfakultät, also auf dem Primorial\\footnote{\\const{SupNum_g_footnote_text_Primorial}},'."\n".
                    'welche immer weiter potenziell ins Unendliche vorangetrieben wird, und damit immer genauer'."\n".
                    'dem Produkt aus Formel \\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-Produkt-aller-endlichen-Primzahlen}'."\n".
                    'entspricht.'."\n",
                      'In der Primfakultät sind alle endlichen Primzahlen, von der Zwei bis zu einer größten, enthalten.'."\n".
                    'Die größte wird dann im Beweis immer größer, bis ins Unendliche.'."\n".
                    'Ausschließlich mit diesem Produkt funktioniert der Beweis und nicht, wenn irgendeine Primzahl'."\n".
                    'im Produkt fehlt.'."\n",
                      'Da aufgrund des ›Fundamentalsatz der Arithmetik‹\\footnote{\\const{SupNum_g_footnote_text_FundamentalsatzDerArithmetik}}'."\n".
                    'alle natürlichen Zahlen größer als Eins entweder selber Primzahlen sind oder sich in Primfaktoren zerlegen lassen,'."\n".
                    'erzeugt darüber die immer größer werdende Primfakultät indirekt alle natürlichen Zahlen größer als Eins,'."\n".
                    'bis ins Unendliche.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Hohe Plausibilität der Primzahlprodukt-Vermutung} \\\\'."\n".
                    'Es liegt also sehr nahe, dass das Produkt aller endlichen Primzahlen das Teilprodukt von'."\n".
                    '\\latexmath{ s } ist, dass \\latexmath{ \omega } entspricht.'."\n".
                    'Es gibt keinen Hinweis darauf, dass eine endliche Primzahl in dem Produkt mehrfach vorkommen müsste.'."\n".
                    'Dies also zu behaupten, wäre willkürlich.'."\n".
                    'Womit wir noch keinen Beweis für die Primzahlprodukt-Vermutung haben, diese aber schon mal'."\n".
                    'sehr plausibel erscheint.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Satz-des-Euklid', text =>
                      
                'Satz des Euklid', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Der ›Satz des Euklid‹'."\n".
                    'beweist, dass die Primzahlen endlicher größe nicht enden.'."\n",
                      'Ich gebe diesen Beweis nachfolgend in Kurzform wieder.'."\n".
                    'Dabei werde ich ihn etwas modifizieren, damit er zu den von uns gesuchten Eigenschaften am besten passt und'."\n".
                    'wir ihn gut weiterverwenden können:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Beweis, dass es unendlich viele Primzahlen im Endlichen gibt} \\\\'."\n".
                    'Definition der Primzahlen im Endlichen:\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Primzahl:2021}.}'."\n"))),
                      
                  array( 'text', array( Shape  => 'quote', text => array(
                        'Die Primzahlen sind innerhalb der Menge \\latexmath{ \mathbb{N} } der natürlichen Zahlen dadurch charakterisiert, dass jede von ihnen genau zwei natürliche Zahlen als Teiler hat.'."\n"),
                        addtext => '\\footnote{Internet: \\\\ \\cite{wiki:Primzahl:2021}, Eigenschaften von Primzahlen.}')),
                      
                  array( 'text', array( text => array(
                    'Nach dieser Definition ist die Eins keine Primzahl.'."\n",
                      'Dass es unendlich viele Primzahlen im Endlichen gibt, können wir durch die Schlussfolgerungskette des folgenden Beweises erkennen,\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Primzahl:2021}, Größte bekannte Primzahl.}'."\n".
                    'wenn wir die Primfakultät\\footnote{\\const{SupNum_g_footnote_text_Primorial}} von \\latexmath{ p } mit \\latexmath{ p\# } berechnen:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Bilde die Primfakultät einer bekannten Primzahl, das Produkt aller Primzahlen kleiner und einschließlich dieser Primzahl: \\latexmath{ p\# }',
                        'Addiere Eins dazu oder ziehe Eins ab: \\latexmath{ p\# \pm 1 }',
                        '\\latexmath{ p\# \pm 1} ist nicht durch eine der Primzahlen in \\latexmath{ p\# } ganzzahlig teilbar.',
                        '\\latexmath{ p\# \pm 1} kann daher entweder nur selber eine Primzahl sein, die dann größer als \latexmath{ p } ist, oder ihr Primzahlprodukt enthält ausschließlich Primzahlen – mindestens zwei Stück – die nicht in \latexmath{ p\# } enthalten sind und damit größer als \latexmath{ p } sein müssen. ',
                        'Alle Primzahlen, durch die \\latexmath{ p\# \pm 1} teilbar ist, sind damit größer als \\latexmath{ p }.',
                        'Es gibt also immer eine Primzahl, die größer ist als jede gegebene Primzahl \\latexmath{ p }, womit die Menge der endlichen Primzahlen nicht endet.',
                    ))),
                  array( 'text', array( text => array(
                    'Es gibt in den endlichen natürlichen Zahlen demnach bewiesenermaßen unendlich viele Primzahlen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Besondere Rolle der Primfakultät} \\\\'."\n".
                    'Die Primfakultät spielt im ›Satz des Euklid‹ die zentrale Rolle.'."\n",
                      'Zum einen sammelt sie alle Primzahlen bis einschließlich \\latexmath{ p } lückenlos in ihrem Produkt \\latexmath{ p\# } ein.'."\n".
                    'Zum anderen erlaubt sie über ihre doppelte Variation um plus-minus Einen \\latexmath{ p\# \pm 1 } Aussagen über weitere Primzahlen,'."\n".
                    'die noch nicht in ihrem Produkt enthalten sind und fungiert so quasi auch als Konstruktor:'."\n",
                      'Entweder sind \\latexmath{ p\# - 1 } und/oder \\latexmath{ p\# + 1 } selber schon größere Primzahlen als \\latexmath{ p }'."\n".
                    'oder es gibt zwischen \\latexmath{ p } und \\latexmath{ p\# - 1 }, also in der \\jump{OM:SupNum:Formale-Entwicklung:Formalien:Intervall-Menge}{Intervall-Menge}'."\n".
                    '\\latexmath{ \rbrack p, p\# - 1 \lbrack_\mathbb{N} }, mindestens zwei oder vier oder gar mehr weitere Primzahlen,'."\n".
                    'die in der Primfaktorenzerlegung von \\latexmath{ p\# - 1 } und/oder \\latexmath{ p\# + 1 } stecken.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'Die Größenordnung des Produkts aller endlichen Primzahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Errechnen wir das Produkt aller endlichen Primzahlen von den kleinsten Primfaktoren her mit der Primfakultät\\footnote{\\const{SupNum_g_footnote_text_Primorial}} \\latexmath{ p\# }, dann wird es sehr schnell'."\n".
                    'viel größer, als die größte in ihm vorkommende Primzahl:\\footnote{\\const{SupNum_g_footnote_text_PrimorialWikiWerte}}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2\#  =  2  }'),
                      array( display => 'on',  latex => '{  3\#  =  6  }'),
                      array( display => 'on',  latex => '{  5\#  =  30  }'),
                      array( display => 'on',  latex => '{  7\#  =  210  }'),
                      array( display => 'on',  latex => '{  11\#  =  2310  }'),
                      array( display => 'on',  latex => '{  13\#  =  30030  }'),
                      array( display => 'on',  latex => '{  17\#  =  510510  }'),
                      array( display => 'on',  latex => '{  19\#  =  9699690  }'),
                      array( display => 'on',  latex => '{  23\#  =  223092870  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So wäre es ein sehr großes Rätsel, wie dieses Produkt irgendwann nicht weiter wächst, so, dass'."\n".
                    'die natürlichen Zahlen es wieder einhohlen und letztendlich gleich groß sein können.'."\n".
                    'Ich würde aus meiner heutigen Sicht sagen, dass dies ein oder sogar das wesentliche Geheimnis der'."\n".
                    'Primzahlen ist.'."\n",
                      'Unter welcher Bedingung könnte denn dies überhaupt der Fall sein?'."\n",
                      'Aus meiner Sicht könnte dies nur dann der Fall sein, wenn die Anzahl der Primzahlen'."\n".
                    'unter den extrem großen natürlichen Zahlen minimal wird. \\color{*Bearb}{(Ist ›minimal‹ die korrekte Formulierung? Und ist diese Annahme notwendig?)}'."\n".
                    'Und mit Hilfe des \\jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Satz-des-Euklid}{›Satz des Euklid‹},'."\n".
                    'eines Beweises, dass es unendlich viele Primzahlen gibt, können wir erkennen, was das bedeuten sollte.'."\n".
                    'Eine Minimierung des Anteils an Primzahlen heißt, dass es unter den ganz extrem großen natürlichen Zahlen im wesentlichen nur noch Primzahlzwillinge gibt.'."\n".
                    'Die Lücken zwischen den Primzahlen würden im Schnitt maximal werden.'."\n".
                    'Diese Aussage ist also eng mit der Primzahlzwillingsvermutung\\color{*Bearb}{(Verweis)} gekoppelt.'."\n",
                      'Wir können plausibel machen, wie wir noch zeigen, dass unter der Annahme, es gäbe im extrem Großen im wesentlichen nur noch Primzahlzwillinge,'."\n".
                    'und, dass dann ein solches Primzahlzwillingspaar die nächsten Primzahlen erzeugt, ohne, dass dazwischen noch welche wären,'."\n".
                    'eine so große Lücke zwischen den Primzahlzwillingen und den nächsten Primzahlzwillingen entsteht, dass das Zählen der natürlichen'."\n".
                    'Zahlen aufholen kann.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'Szenario, in dem hypothetisch als nächstgrößere und übernächstgrößere Primzahlen nur Primzahlzwillinge existieren', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Ein besonderes Szenario, das wir recht gut analysieren können, ist, wenn'."\n".
                    '\\latexmath{ p\# - 1 } und \\latexmath{ p\# + 1 } beide die nächsten Primzahlen nach \\latexmath{ p } sind und'."\n".
                    'auch nach ihnen wiederum \\latexmath{ (p\# + 1)\# - 1 } und \\latexmath{ (p\# + 1)\# + 1 } wieder die nächsten'."\n".
                    'Primzahlen sind.'."\n".
                    'Es gibt also zwischen ihnen allen keine Primzahlen mehr,'."\n".
                    'sondern Primzahlen sind hypothetisch nur noch die Primzahlzwillinge:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Aus der letzen uns bekannten extrem großen Primzahl \\latexmath{ p_i } ergeben sich die beiden nächsten Primzahlen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  p_{i}\# \pm 1  \in  \mathbb{P}  }'),
                      array( display => 'on',  latex => '{  p_{i + 1}  :=  p_{i}\# - 1  }'),
                      array( display => 'on',  latex => '{  p_{i + 2}  :=  p_{i}\# + 1  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Dann gibt es also zwischen unserer letzen extrem großen Primzahl \\latexmath{ p_i }'."\n".
                      'und den beiden nächsten keine Primzahl mehr:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \nexists n \in \; ] p_{i}, p_{i + 1} [_\mathbb{N} *)  *[  n  \in  \mathbb{P}  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \nexists n \in \; ] p_{i}, p_{i}\# - 1 [_\mathbb{N} *)  *[  n  \in  \mathbb{P}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Dann ist die nächste Primfakultät \\term{p_{i+1}#} die Zahl zwischen dem nächsten Primzahlwilling:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  p_{i + 1}\# \pm 1  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{i}\# \cdot p_{i + 1} \pm 1  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{i}\# \cdot *( p_{i}\# - 1 *) \pm 1  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *( p_{i}\# *)^{2} - p_{i}\# *) \pm 1  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Nun müssen wir untersuchen, ob der Sprung groß genug ist, damit das Zählen die Primfakultät einholen kann.'."\n".
                      'Das können wir mit dem Verhältnis zum Zählen herausfinden:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \frac{ *( p_{i}\# *)^{2} - p_{i}\# }{ n }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  p_{i + 1}\# \pm 1  \in  \mathbb{P}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  (p_{i}\# - 1)\# \pm 1  \in  \mathbb{P}  }'),
                      array( display => 'on',  latex => '{  ( ( p\# - 1 ) \cdot ( p\# + 1 ) )\# \pm 1  \in  \mathbb{P}  }'),
                      array( display => 'on',  latex => '{  ( ( p\# - 1 ) \cdot ( p\# + 1 ) )\# \pm 1  \in  \mathbb{P}  }'),
                      array( display => 'on',  latex => '{  *( \forall n \in \; ] p\# + 1, ( ( p\# - 1 ) \cdot ( p\# + 1 ) )\# - 1 [_\mathbb{N} *)  *[  n  \notin  \mathbb{P}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'XXX Freie Gedanken', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Argumentation könnte grob und sicher noch streitbarer Weise so laufen:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Jede zweite natürliche Zahl ist durch die Primzahl Zwei teilbar, daher sollte die Anzahl der natürlichen Zahlen \\term{ω} ebenso durch Zwei teilbar sein.',
                        'Das gleiche Argument kann für jede weitere endliche Primzahl herangezogen werden.',
                        'Jede vierte natürliche Zahl ist natürlich ebenfalls durch die zweite Potenz von Zwei teilbar, aber, wenn auch die Anzahl der natürlichen Zahlen \\latexmath{ ω } durch die Vier ganzzahlig teilbar wäre, dann sollte dies auch für jede andere endliche Primzahl endlicher Potenz gelten. Das kann aber aufgrund der Betrachtung der Struktur der Superial-Zahlen, siehe \\jumpname{OM:SupNum:Eigenschaften:StrukturVonS}‹, nicht sein, denn dann wäre quasi \\latexmath{ s = ω }.',
                        'Wenn \\latexmath{ s = ω } wäre, dann würde es genau so viele rationale Zahlen, wie natürliche Zahlen geben, was zwar für die Mächtigkeit stimmt, aber in meinen Augen nicht für deren Anzahl.',
                        'Denn die Kombinatorik zur Erzeugung der rationalen Zahlen aus Brüchen zeigt, dass es deutlich mehr rationale Zahlen von ihrer Anzahl her geben muss, als natürliche Zahlen, denn im Calkin-Wilf-Baum enthält schon der letzte Strang alle natürlichen Zahlen und der erste Strang all deren Kehrwerte. \\\\ Die direkte Kombinatorik von Zähler und Nenner wäre jeweils \\term{ω} und ergäbe sich zu \\latexmath{ ω^2 }, wenn nicht gekürzt werden könnte.',
                        'Anders, als bei der Mächtigkeit, wird bei der von mir gemeinten Anzahl der Zahlen ihre kombinatorische Erzeugung mit der vollständigen Induktion der natürlichen Zahlen ins Verhältnis gesetzt.',
                        'Und die Definition von \\latexmath{ s } über das Primzahlflächenprodukt beruht eben auch auf einem Verhältnis zur Eins.',
                        'XXX',
                        'XXX',
                        'XXX',
                        'XXX',
                        'XXX',
                        'XXX',
                        'XXX',
                    ))),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{In Arbeit …}'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'Die vollständige Primfakultät und die Anzahl von natürlichen Zahlen in einer Menge', subline =>
                  'Gibt es eine Beschreibung der Größe von Zahlenmengen aus natürlichen Zahlen, die auf der Primfakultät beruhen, die bei der Annäherung an die vollständige Primfakultät die Menge der natürlichen Zahlen beschreibt?')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei die \italic{Mengen-Primfakultät}, der Mengen-Primorial-Operator, \\latexmath{ \mathbb{T}\overline{\#} },'."\n".
                      'der alle Primzahlen in der Menge \\latexmath{ \mathbb{T} } multipliziert:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{T}\overline{\#}  :=  \!\! \prod_{ *( \forall p \in \mathbb{T} *) *[ p \in \mathbb{P} *] }  \!\!\!\! p  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \mathbb{N}\overline{\#}  =   \!\! \prod_{ *( \forall p \in \mathbb{N} *) *[ p \in \mathbb{P} *] }  \!\!\!\! p  }'),
                      array( display => 'on',  latex => '{  \omega  :=  \mathbb{N}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \omega\overline{\#}  =  \mathbb{N}\overline{\#}  }'),
                      array( display => 'on',  latex => '{  \omega\overline{\#}  ?=  \omega  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'So erhalten wir eine Definition der Primfakultät, die sich auf die Elemente von Mengen'."\n".
                      'bezieht.'."\n",
                        'Wie in den Ordinalzahlen definiert, können endliche und unendliche Zahlen einer Repräsentation als Mengen entsprechen.'."\n".
                      'Dann ergibt sich für die folgenden Zahlen Beispiele:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  0\overline{\#}  =  1  }'),
                      array( display => 'on',  latex => '{  1\overline{\#}  =  1  }'),
                      array( display => 'on',  latex => '{  2\overline{\#}  =  1  }'),
                      array( display => 'on',  latex => '{  3\overline{\#}  =  2  =  2  }'),
                      array( display => 'on',  latex => '{  4\overline{\#}  =  2 \cdot 3  =  6  }'),
                      array( display => 'on',  latex => '{  5\overline{\#}  =  2 \cdot 3  =  6  }'),
                      array( display => 'on',  latex => '{  6\overline{\#}  =  2 \cdot 3 \cdot 5  =  30  }'),
                      array( display => 'on',  latex => '{  7\overline{\#}  =  2 \cdot 3 \cdot 5  =  30  }'),
                      array( display => 'on',  latex => '{  8\overline{\#}  =  2 \cdot 3 \cdot 5 \cdot 7  =  210  }'),
                      array( display => 'on',  latex => '{  9\overline{\#}  =  2 \cdot 3 \cdot 5 \cdot 7  =  210  }'),
                      array( display => 'on',  latex => '{  10\overline{\#}  =  2 \cdot 3 \cdot 5 \cdot 7  =  210  }'),
                      array( display => 'on',  latex => '{  11\overline{\#}  =  2 \cdot 3 \cdot 5 \cdot 7  =  210  }'),
                      array( display => 'on',  latex => '{  12\overline{\#}  =  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11  =  2310  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Die vorm Operator stehende Zahl ist nicht Teil des Produkts, da die Menge,'."\n".
                      'die eine Ordinalzahl repräsentiert, nicht selber in der Menge enthalten ist.'."\n",
                        'Setzen wir diese Reihe fort, so landen wir für alle natürlichen Zahlen unter bestimmten Bedingungen bei:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \omega\overline{\#}  =  \omega_{\forall p}  ?=  \omega  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Wie eingangs vermutet.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Was sind die Bedingungen, unter denen das fragliche Gleichheitszeichen erfüllt ist?'."\n".
                    'Wie können wir sie formulieren?'."\n",
                      'In den Beispielen handelt es sich in jedem Fall um Mengen \\latexmath{ \mathbb{T} } endlicher natürlicher Zahlen'."\n".
                    'von der Null bis zu einer endlichen größten.'."\n".
                    'In der fraglichen letzen Formel handelt es sich dann schließlich um die Menge \\latexmath{ \mathbb{N} } aller endlichen natürlichen Zahlen'."\n".
                    'von der Null an.'."\n",
                      'Wir können in jedem Fall sagen, \\latexmath{ \mathbb{T}\overline{\#} } liefert uns ein Produkt'."\n".
                    'aller Primzahlen, die die Primfaktoren aller Elemente von \\latexmath{ \mathbb{T} } sind.'."\n".
                    'Das muss so sein, denn in dem Moment, wo \\latexmath{ \mathbb{T} = p_i + 1 } ist, kommt ins Produkt'."\n".
                    'die Primzahl \\latexmath{ p_i } hinzu, die nicht Teil der Primfaktorenzerlegung einer der kleineren'."\n".
                    'Zahlen \\latexmath{ n < p_i } sein kann.'."\n".
                    'Diese bestehen alle aus kleineren Primzahlen \\term{ p_{i–k} } mit \\latexmath{ 1 \leq k < i }'."\n".
                    'oder sind selber eine solche.'."\n",
                      'In der letzten fraglichen Formel liefert uns \\latexmath{ \mathbb{N}\overline{\#} }'."\n".
                    'ein Produkt aller Primzahlen in \\latexmath{ \mathbb{N} }, also ein Produkt aller endlichen Primzahlen.'."\n",
                      'Doch was bedeutet das Produkt aller Primzahlen in Mengen natürlicher Zahlen?'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Das Raster einer Menge von aufeinander folgenden natürlichen Zahlen, beginnend mit der Null} \\\\'."\n".
                    'Zunächst können wir sagen, was alle Zahlen einer dieser Mengen miteinander verbindet:'."\n".
                    'Alle Zahlen dieser Mengen liegen auf dem Zählraster, sind also durch die Eins ganzzahlig teilbar.'."\n".
                    'Poetischer ausgedrückt schwingen alle Zahlen mit der Eins oder im Raster der Eins.'."\n",
                      'Die Sammlung der Primfaktoren der Zahlen dieser Mengen sagen nun darüber hinaus,'."\n".
                    'auf welchen größeren Rastern ihre Zahlen auch noch liegen oder in welchen Rastern sie auch noch schwingen.'."\n".
                    'Dabei ist eine höhere Potenz einer Primzahl irrelevant, weil es sich um die selbe Schwingungsbasis handelt,'."\n".
                    'die zum selben Rasteranteil nur mit größerer Schrittweite gehört.'."\n".
                    'Demnach spannen die \\latexmath{ 4 = 2^2 } oder die \\latexmath{ 8 = 2^3 } das selbe Raster auf, wie die \\latexmath{ 2 = 2^1 }.'."\n",
                      'Die \\latexmath{ 3 = 3^1 } hingegen spannt ein anderes Raster auf und beide kombiniert können wir mit'."\n".
                    '\\latexmath{ 6 = 2 \cdot 3 } beschreiben.'."\n",
                      'Warum handelt es sich denn bei \\latexmath{ 2 = 2^1 }, \\latexmath{ 4 = 2^2 } oder \\latexmath{ 8 = 2^3 } und für'."\n".
                    'alle weiteren Potenzen von Zwei, oder allgemeiner bei \\latexmath{ p_i^k } mit \\latexmath{ k \geq 1 } um das gleiche Raster?'."\n".
                    'Das ist nicht gleich offensichtlich, finde ich.'."\n",
                      'Dies können wir am Distributivgesetz erkennen, denn \\latexmath{ p_i^k + 1 } ist nicht ganzzahlig'."\n".
                    'durch \\latexmath{ p_i^k } teilbar, egal welche Potenz \\latexmath{ k \geq 1 } wir haben;'."\n".
                    'also egal, wie häufig \\latexmath{ p_i } in einem Produkt steckt.'."\n",
                      'Kombinieren wir jedoch unterschiedliche Primzahlen in einem Produkt, wie beispielsweise'."\n".
                    'in \\latexmath{ 6 = 2 \cdot 3 }, dann ist \\latexmath{ 7 = *( 2 \cdot 3 *) + 1 } durch beide'."\n".
                    'Primzahlen nicht ganzzahlig teilbar.'."\n".
                    'Wir erhalten also eine erweiterte Qualität bezüglich der unterschiedlichen Primfaktoren einer natürlichen Zahl.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Das Verlassen des Rasters einer Menge von aufeinander folgenden natürlichen Zahlen} \\\\'."\n".
                    'Durch das addieren oder auch das Subtrahieren der Eins auf oder von einem Primzahlprodukt verlassen'."\n".
                    'wir das Raster, auf dem das Produkt liegt oder schwingt.'."\n".
                    'Und ein Produkt von Primzahlen schwingt mit allen Frequenzen seiner unterschiedlichen Primzahlen.'."\n".
                    'Daher können wir mit der Methode des Verlassens des Rasters aller bisherigen Primzahlen im'."\n".
                    '\\jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Satz-des-Euklid}{›Satz des Euklid‹}'."\n".
                    'die Existenz immer weiterer und größerer Primzahlen beweisen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Immer mehr Primzahlen machen das Raster in Bezug auf die folgenden natürlichen Zahlen immer feiner} \\\\'."\n".
                    'Der ›Satz des Euklid‹ macht deutlich, dass die neu hinzukommenden, immer größeren Primzahlen'."\n".
                    'wieder und wieder außerhalb des bisherigen Rasters der kleineren Zahlen liegen.'."\n".
                    'Dadurch wird das Raster durch immer mehr größere Primzahlen immer feiner.'."\n".
                    'Und deshalb kommen dann auch immer seltener neue Primzahlen hinzu, ohne, dass die Reihe der Primzahlen enden würde.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Die Primfakultät einer Menge an natürlichen Zahlen beschreibt ihr Raster} \\\\'."\n".
                    'Weil das Raster, was eine Primzahl oder eine Zahl, durch ihre Primfaktorenzerlegung, vorgibt,'."\n".
                    'damit nicht von der Potenz ihrer Primzahlen abhängt, reicht ein Produkt der einfachen Potenz'."\n".
                    'ihrer Primfaktorenzerlegung aus, um ihr Raster zu beschreiben.'."\n".
                    'Das Raster einer natürlichen Zahl umfasst also alle Potenzen ihrer Primfaktoren.'."\n".
                    'Daher können wir das Raster auch \\italic{Primpotenzraster} einer natürlichen Zahl nennen.'."\n",
                      'Die Mengen-Primfakultät einer Menge der ersten \\latexmath{ n } natürlichen Zahlen,'."\n".
                    'von der Null an, liefert also das \\italic{gemeinsame Primpotenzraster} aller Zahlen dieser Menge.'."\n".
                    'Bei endlichen natürlichen Zahlen, als Mengen ihrer Vorgänger gesehen, fällt die Mengen-Primfakultät'."\n".
                    'nur bei der Eins mit der gleichen Zahl zusammen, siehe oben, denn: \\latexmath{ 1\overline{\#} = 1 }'."\n",
                      'Bei allen \\latexmath{ n \in \{ 2, 3 \} } ist \\latexmath{ n\overline{\#} < n }.'."\n",
                      'Und bei \\latexmath{ n = 0 } und allen \\latexmath{ n > 3 } ist \\latexmath{ n\overline{\#} > n }.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Das gemeinsame Primpotenzraster aller endlichen natürlichen Zahlen} \\\\'."\n".
                    'Wie wir oben schon beschrieben haben, erhalten wir das gemeinsame Primpotenzraster aller endlichen natürlichen Zahlen'."\n".
                    'durch:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \omega\overline{\#}  =  \omega_{\forall p}  =  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots  }'),
                      array( display => 'on',  latex => '{  \omega\overline{\#}  ?=  \omega  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Es ist also das Produkt aller endlichen Primzahlen.'."\n",
                      'Weil das gemeinsame Primpotenzraster aller endlichen natürlichen Zahlen aber auch dem'."\n".
                    'Basisraster der Eins, also dem Zählen, der vollständigen Induktion und damit allen natürlichen Zahlen gleich ist,'."\n".
                    'ist auch die Primzahlprodukt-Vermutung wahr, also die Gleichheit des Produkts aller endlichen Primzahlen'."\n".
                    'mit der Anzahl der Elemente in der Menge der natürlichen Zahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \omega\overline{\#}  =  \omega  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \boxed{\;\;  \omega  =  \omega_{\forall p}  \;\;}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Was wir oben schon gut begründen konnten und daher unsere Vermutung war.'."\n",
                      'So ist nun auch klar, dass gilt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \boxed{\;\;  s  =  \omega^{\omega}  \;\;}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'Argumentation über die Primzahl-Potenztürme der Definition von \\term{s}', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Betrachten wir das aktuell verwendete Produkt zur Definition von \\term{s}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s  :=  \displaystyle \prod_{\forall n \in \mathbb{N}}  \left( \prod_{\forall p \in \mathbb{P}}  p \right)  }',
                                               label_text => '\\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-N}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  :=  \displaystyle \left( \prod_{\forall p \in \mathbb{P}}  p \right)^{\omega}  }',
                                               label_text => '\\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Analysieren wir naiv die maximale Häufigkeit der einzelnen Primzahlen in der Primfaktorenzerlegung'."\n".
                    'der natürlichen Zahlen kommen wir schnell auf den Gedanken, dass wir nicht die volle höhe \\term{ω}'."\n".
                    'jedes einzelnen Primzahl-Potenzturms benötigen, um \\term{s} mit den Eigenschaften auszustatten'."\n".
                    'die für uns interessant sind, nämlich mit jedem rationalen Koeffizienten eine ganze Zahl zu bleiben.'."\n",
                      'Beginnend mit der kleinsten Primzahl \\term{2} stellen wir fest, dass nur jede zweite natürliche Zahl'."\n".
                    'durch \\term{2} teilbar ist und dann erst wieder jede vierte durch \\term{4} und jede achte durch \\term{8} und so fort.'."\n",
                      'Da wir mit der Potenz einer jeden Primzahl keine größere Zahl als \\term{ω} erreichen müssen,'."\n".
                    'reicht folgende Potenz einer jeden Primzahl:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  p^{x}  =  \omega  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  x  =  \log_{p} \omega  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Folgendes Primzahlprodukt für \\term{s} würde also hinreichen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s  ?:=  \prod_{ \forall p \in \mathbb{P} }  p^{ \log_{p} \omega }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  ?=  \prod_{ \forall p \in \mathbb{P} } \omega  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  ?=  \prod_{ \# \mathbb{P} } \omega  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  ?=  \omega^{ \# \mathbb{P} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Das verwundert nach ein bisschen Überlegung nicht weiter, denn wir haben es erzwungen.'."\n".
                    'Aber es scheint uns nicht weiter zu bringen, denn es zerstört die transparenz unserer Primfaktoren-Definition von \\term{s}!'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  ?=  \prod_{ \forall p \in \mathbb{P} } \omega_{p}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  ?=  \omega_{2} \cdot \omega_{3} \cdot \omega_{5} \cdot \omega_{7} \cdot \omega_{11} \cdot \omega_{13} \cdot \cdots  }'),
                      array( display => 'on',  latex => '{  \omega  ?=  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot \cdots  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  s  ?=  (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{2} \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{3} \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{5} \\\ \qquad\qquad\quad\; \;\;\;\; \vdots \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{p \in \mathbb{P}} \\\ \qquad\qquad\quad\; \;\;\;\; \vdots  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'XXX', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{In Arbeit …}'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Folgen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • Folgen, wenn wahr  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Primzahlprodukt-Vermutung:Folgen',
              '\\color{*Bearb}{In Arbeit …}', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    '\\bold{Parität}',
                    '• Nicht nur gleiche Mächtigkeit von geraden und ungeraden Zahlen, sondern hier sogar gleiche kombinatorische Anzahl von geraden und ungeraden Zahlen.\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:ParitaetMathematik:2021}.}',
                    '\\bold{Logisches}',
                    '• \\latexmath{ \omega } ist dann durch jede endliche Primzahl und durch deren Produkte mit jeweiliger Potenz von Eins ganzzahlig teilbar.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:XXX:XXX', text =>
                      
                'XXX', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{In Arbeit …}'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                      
                  array( 'jumplist', array(
                      //array(  jump_name => 'OM:SupNum:XXX'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
