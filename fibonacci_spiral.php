
  <div class="container_fibonacci_spiral">
    <div class="neo_fibo" id="jump_to_spiral">


  <?php

    $from = 1;
    //$to = 24;
    function fibonacciSpiral($from, $to){
      $current = 1;
      $prev = 0;
      $rest = fmod($to, 4);


      $stack_occ_bottom = 0;
      $stack_occ_left = 0;
      $stack_occ_right = 0;
      $stack_occ_top = 0;

      $occ_right = 0;
      $occ_left = 0;
      $occ_top = 0;
      $occ_bottom = 0;

        for($from;$from<=$to;$from++){

          $rest_from = fmod($from, 4);
          $stack_prev = $prev;
          $prev = $current;
          $current = $current + $stack_prev;
          $next = $prev + $current;
          $occu = $from + 1;


          if($from<=4){
            if($rest_from == 0){//occ_bottom {4}
              $stack_occ_bottom = $current;
              $class_bow = 'bow_bottom';
              $occ_bottom = -$stack_occ_bottom;

              $proc_square = '<div class="square_fibo nb_pattern_4" style="width:'.$current.'px;height:'.$current.'px;bottom:'.$occ_bottom.'px;right:'.$occ_right.'px" id="occurrence_'.$occu.'"><div class="'.$class_bow.'"></div></div>';

            }elseif($rest_from == 1){//occ_right {1}
              $stack_occ_right = $current;
              $class_bow = 'bow_right';
              $occ_right = -$stack_occ_right;

              $proc_square = '<div class="square_fibo nb_pattern_1" style="width:'.$current.'px;height:'.$current.'px;bottom:'.$occ_bottom.'px;right:'.$occ_right.'px" id="occurrence_'.$occu.'"><div class="'.$class_bow.'"></div></div>';

            }elseif($rest_from == 2){//occ_top {2}
              $stack_occ_top = $current;
              $class_bow = 'bow_top';
              $occ_top = -$stack_occ_top;

              $proc_square = '<div class="square_fibo nb_pattern_2" style="width:'.$current.'px;height:'.$current.'px;left:'.$occ_left.'px;top:'.$occ_top.'px" id="occurrence_'.$occu.'"><div class="'.$class_bow.'"></div></div>';

            }elseif($rest_from == 3){//occ_left {3}
              $stack_occ_left = $current;
              $class_bow = 'bow_left';
              $occ_left = -$stack_occ_left;

              $proc_square = '<div class="square_fibo nb_pattern_3" style="width:'.$current.'px;height:'.$current.'px;left:'.$occ_left.'px;top:'.$occ_top.'px" id="occurrence_'.$occu.'"><div class="'.$class_bow.'"></div></div>';
            }
          }else{
            if($rest_from == 0){//occ_bottom {4}
              $occ_bottom = $occ_bottom - $current;
              $class_bow = 'bow_bottom';

              $proc_square = '<div class="square_fibo nb_pattern_4" style="width:'.$current.'px;height:'.$current.'px;bottom:'.$occ_bottom.'px;right:'.$occ_right.'px" id="occurrence_'.$occu.'"><div class="'.$class_bow.'"></div></div>';

            }elseif($rest_from == 1){//occ_right {1}
              $occ_right = $occ_right - $current;
              $class_bow = 'bow_right';

              $proc_square = '<div class="square_fibo nb_pattern_1" style="width:'.$current.'px;height:'.$current.'px;bottom:'.$occ_bottom.'px;right:'.$occ_right.'px" id="occurrence_'.$occu.'"><div class="'.$class_bow.'"></div></div>';

            }elseif($rest_from == 2){//occ_top {2}
              $occ_top = $occ_top - $current;
              $class_bow = 'bow_top';

              $proc_square = '<div class="square_fibo nb_pattern_2" style="width:'.$current.'px;height:'.$current.'px;left:'.$occ_left.'px;top:'.$occ_top.'px" id="occurrence_'.$occu.'"><div class="'.$class_bow.'"></div></div>';

            }elseif($rest_from == 3){//occ_left {3}
              $occ_left = $occ_left - $current;
              $class_bow = 'bow_left';

              $proc_square = '<div class="square_fibo nb_pattern_3" style="width:'.$current.'px;height:'.$current.'px;left:'.$occ_left.'px;top:'.$occ_top.'px" id="occurrence_'.$occu.'"><div class="'.$class_bow.'"></div></div>';
            }
          }
          /*echo $current;
          echo '<br />'.$next.'<br />';*/

          //echo 'Occurrence n°'.$from.' : stack left:'.$occ_left.', stack right:'.$occ_right.', stack top:'.$occ_top.', stack bottom:'.$occ_bottom.'<br /><br />';

          echo $proc_square;
      }
    }
    fibonacciSpiral($from,$to);


    /*
    Le pattern est le suivant:
    Si l'on décompose de manière séquencée la suite de Fibonacci, et plus particulièrement l'une de ses représentations graphiques (celle appelée spirale de Fibonacci), on remarque qu'un pattern en 4 étapes en découle.
    Le square n°1 {φ} (correspondant à l'occurrence n°1 {1}) est le point central de la spirale (en haut à gauche de celui-ci, on a le square n°0 (correspondant à l'occurrence n° 0 (0), square invisible car 0x0)) nous sert de référence ici. C'est autour de celui-ci que vont "tourner" les autres square (les autres occurrences donc).
    La logique que j'ai décidée d'adopter fait que le square n°1 correspond à 0 et n'entre donc pas dans le pattern ; en fait, c'est le square de référence, de base, celui autour duquel les autres square vont venir graviter tour à tour (cf plus haut).
    C'est à partir du square n°2 que le pattern commence.

    Le square n°2 est la première étape du pattern -> {1}
    Le square n°3 est la seconde étape du pattern -> {2}
    Le square n°4 est la troisième étape du pattern -> {3}
    Le square n°5 est la quatrième étape du pattern -> {4}

    Pour l'étape {1}, le square cible, par rapport au square n°1 de référence {φ}, va venir se placer sur la "droite" ; ainsi, {1} correspond à $occ_right.
    Pour l'étape {2}, le square cible, par rapport au square n°1 de référence {φ}, va venir se placer sur le "haut" ; ainsi, {2} correspond à $occ_top.
    Pour l'étape {3}, le square cible, par rapport au square n°1 de référence {φ}, va venir se placer sur la "gauche" ; ainsi, {3} correspond à $occ_left.
    Pour l'étape {4}, le square cible, par rapport au square n°1 de référence {φ}, va venir se placer sur le "bas" ; ainsi, {4} correspond à $occ_bottom.

    Pour les règles CSS, le pattern ne change pas, à l'exception que chaque valeur actuelle est incrémentée et ajoutée à sa précédente valeur.
    Un stack est donc à prévoir.
    
    You don't understand french fiddlestick ? Me neither...*/
  ?>
    </div>
  </div>
<?php

 ?><!--
  <div class="test_absolute">
    <div class="test_ref">
      <div class="square_fibo occ_2 occ_right"></div>
      <div class="square_fibo occ_3 occ_top"></div>
      <div class="square_fibo occ_4 occ_left"><div class="bow_left"></div></div>
      <div class="square_fibo occ_5 occ_bottom"><div class="bow_bottom"></div></div>

      <div class="square_fibo occ_6 occ_right"><div class="bow_right"></div></div>
      <div class="square_fibo occ_7 occ_top"><div class="bow_top"></div></div>
      <div class="square_fibo occ_8 occ_left"><div class="bow_left"></div></div>
      <div class="square_fibo occ_9 occ_bottom"><div class="bow_bottom"></div></div>
    </div>
  </div>-->
