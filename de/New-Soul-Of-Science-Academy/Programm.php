<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:nSOSa:Programm'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:nSOSa:Home'); ?>

	
          <?php To_f_Paragraph_list( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ',
                array(
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\bold{X}',
                    // '• X',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Wir beginnen nun unser Angebot an Vorträgen, Workshops und Kursen langsam aufzubauen.'."\n".
                    'Nachfolgend nach Themenfeldern geordnet.'."\n".
                    ''))),
                  /* array( 'headline', array( jump_name => 'OM:nSOSa:Programm:Vortext:X', text =>
                      
                'Der Care-Prozess im ›Spannungsspiel des Lebens‹', subline =>
                  'Eine analytische Gedanken- und Wissensreise, die unser Hier und Jetzt mit Mythologien und Religionen verbindet')),
                  array( 'text', array( text => array(
                  '\condb{Workshop in drei Teilen} \\\\'."\n".
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))), */
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • ›Spannungsspiel des Lebens‹  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:nSOSa:Home', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '• \color{*Bearb}{(In Arbeit …)}',
                    ))),
                      
                  /* array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))), */
                  array( 'headline', array( jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:X', text =>
                      
                'Yin und Yang, Sonne und Mond in Mythologie und Wissenschaft \\\\ \italic{Der Care-Prozess im ›Spannungsspiel des Lebens‹}', subline =>
                  'Das Prinzip des Geschlechts')),
                  array( 'text', array( text => array(
                  '\condb{Eine analytische Gedanken- und Wissensreise, die unser Hier und Jetzt mit Mythologien und Religionen verbindet} \\\\'."\n".
                  '\cond{Workshop in drei Teilen} \\\\'."\n".
                    '1,5-stündiger Workshop unter intensivem Einbezug der Teilnehmer, viel im Dialog.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:nSOSa:Home'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
