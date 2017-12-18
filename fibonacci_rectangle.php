<?php
  function stackFibonacci($from, $to){
    $from = 0;
    $current = 1;
    $prev = 0;
    $toomuch = $to + 1;
    $countFibo = 1;
    $to2 = $to;
      for($from;$from<=$to+1;$from++){
        $good_occ = $from + 1;
        $stack_prev = $prev;
        $prev = $current;
        $current = $current + $stack_prev;

        if($from==0){//Histoire de récup' le [0]=0;
          $current = 0;
        }
        $array_fibo[$from] = $current;
      }
      $max = $array_fibo[$toomuch];
      //var_dump($array_fibo);
      //echo $array_fibo[$toomuch];
      for($toomuch;$toomuch>=0;$toomuch--){
        $current = $array_fibo[$toomuch];
        if($toomuch == 0){
          $prev = $array_fibo[$toomuch];
        }else{
          $prev = $array_fibo[$toomuch - 1];
        }
        //echo 'Current : '.$current.'<br />';
        //echo 'Previous : '.$prev.'<br />';
      }
      $from = 0;
      for($from;$from<=$to;$from++){
        $stackCountFibo = $countFibo;
        $countFibo = $countFibo * 2;
        //echo $countFibo.'<br />';
        if($countFibo>$max && ($max - $stackCountFibo) > 0){
          $recupRest = $max - $stackCountFibo;//5
          $modRest = $max % 2;//1
          $getLastAdd = $recupRest - $modRest;//4
          $countFibo = $stackCountFibo + $getLastAdd;
        }
        echo $countFibo.'<br />';
      }

  }

?>
<section class="container_test_rectangle" id="jump_to_square">
  <p>
    On fait un test en dur avec l'occurrence n°8 (21) ; on multiplie toutes les valeurs par 10.
    <br />
    Qu'est-ce qu'on remarque ?<br />
    -Y a x "colonnes" ("x" correspondant au chiffre de l'occurrence ciblée (occ 8 -> 21))<br />
    -Avec un pattern de 4, et si l'on séquence de la même manière que la spirale, on obtient une forme autre, un espèce de prisme (je trouve que ça ressemble à un... oeil)... <br />
    -Si l'on espace de quelques px les lignes de chaque occurrence -> prisme plus perceptible.<br />
    -La question maintenant est de savoir si l'on souhaite séquencer cela par lignes... ou bien par colonnes ? Qu'est-ce qui serait le plus simple, le plus rapide, le plus avantageux ?
  </p>
  <a href="assets/images/square_fibo.jpg" target="_blank"><img style="width:300px; float:left; border:1px solid black;" src="assets/images/square_fibo.jpg" alt="" title=""/></a>
  <div class="test_rectangle">
    <div class="container_occ">
      <div class="occ_occ">
        <b>Occurrence n°</b>
      </div>
      <div class="occ_occ" id="occ_nb_8">
        8
      </div>
      <div class="occ_occ" id="occ_nb_7">
        7
      </div>
      <div class="occ_occ" id="occ_nb_6">
        6
      </div>
      <div class="occ_occ" id="occ_nb_5">
        5
      </div>
      <div class="occ_occ" id="occ_nb_4">
        4
      </div>
      <div class="occ_occ" id="occ_nb_3">
        3
      </div>
      <div class="occ_occ" id="occ_nb_2">
        2
      </div>
      <div class="occ_occ" id="occ_nb_1">
        1
      </div>
      <div class="occ_occ" id="occ_nb_0">
        0
      </div>
    </div>
    <div class="container_yall_rec">
      <div class="occ_occ_rec">
        <b>Occ</b>
      </div>
      <div class="occ_occ_rec" id="occ_rec_nb_8">
        <div class="cell" id="cell_nb_8_1">21</div>
      </div>
      <div class="occ_occ_rec" id="occ_rec_nb_7">
        <div class="cell" id="cell_nb_7_1">13</div>
        <div class="cell" id="cell_nb_7_2">8</div>
      </div>
      <div class="occ_occ_rec" id="occ_rec_nb_6">
        <div class="cell" id="cell_nb_6_1">8</div>
        <div class="cell" id="cell_nb_6_2">5</div>
        <div class="cell" id="cell_nb_6_3">5</div>
        <div class="cell" id="cell_nb_6_4">3</div>
      </div>
      <div class="occ_occ_rec" id="occ_rec_nb_5">
        <div class="cell" id="cell_nb_5_1">5</div>
        <div class="cell" id="cell_nb_5_2">3</div>
        <div class="cell" id="cell_nb_5_3">3</div>
        <div class="cell" id="cell_nb_5_4">2</div>
        <div class="cell" id="cell_nb_5_5">3</div>
        <div class="cell" id="cell_nb_5_6">2</div>
        <div class="cell" id="cell_nb_5_7">2</div>
        <div class="cell" id="cell_nb_5_8">1</div>
      </div>
      <div class="occ_occ_rec" id="occ_rec_nb_4">
        <div class="cell" id="cell_nb_4_1">3</div>
        <div class="cell" id="cell_nb_4_2">2</div>
        <div class="cell" id="cell_nb_4_3">2</div>
        <div class="cell" id="cell_nb_4_4">1</div>
        <div class="cell" id="cell_nb_4_5">2</div>
        <div class="cell" id="cell_nb_4_6">1</div>
        <div class="cell" id="cell_nb_4_7">1</div>
        <div class="cell" id="cell_nb_4_8">1</div>
        <div class="cell" id="cell_nb_4_9">2</div>
        <div class="cell" id="cell_nb_4_10">1</div>
        <div class="cell" id="cell_nb_4_11">1</div>
        <div class="cell" id="cell_nb_4_12">1</div>
        <div class="cell" id="cell_nb_4_13">1</div>
        <div class="cell" id="cell_nb_4_14">1</div>
        <div class="cell" id="cell_nb_4_15">'</div>
      </div>
      <div class="occ_occ_rec" id="occ_rec_nb_3">
        <div class="cell" id="cell_nb_3_1">2</div>
        <div class="cell" id="cell_nb_3_2">1</div>
        <div class="cell" id="cell_nb_3_3">1</div>
        <div class="cell" id="cell_nb_3_4">1</div>
        <div class="cell" id="cell_nb_3_5">1</div>
        <div class="cell" id="cell_nb_3_6">1</div>
        <div class="cell" id="cell_nb_3_7">'</div>
        <div class="cell" id="cell_nb_3_8">1</div>
        <div class="cell" id="cell_nb_3_9">1</div>
        <div class="cell" id="cell_nb_3_10">'</div>
        <div class="cell" id="cell_nb_3_11">'</div>
        <div class="cell" id="cell_nb_3_12">'</div>
        <div class="cell" id="cell_nb_3_13">1</div>
        <div class="cell" id="cell_nb_3_14">1</div>
        <div class="cell" id="cell_nb_3_15">'</div>
        <div class="cell" id="cell_nb_3_16">'</div>
        <div class="cell" id="cell_nb_3_17">'</div>
        <div class="cell" id="cell_nb_3_18">'</div>
        <div class="cell" id="cell_nb_3_19">'</div>
        <div class="cell" id="cell_nb_3_20">0</div>
      </div>
      <div class="occ_occ_rec" id="occ_rec_nb_2">
        <div class="cell" id="cell_nb_2_1">1</div>
        <div class="cell" id="cell_nb_2_2">1</div>
        <div class="cell" id="cell_nb_2_3">'</div>
        <div class="cell" id="cell_nb_2_4">'</div>
        <div class="cell" id="cell_nb_2_5">'</div>
        <div class="cell" id="cell_nb_2_6">'</div>
        <div class="cell" id="cell_nb_2_7">'</div>
        <div class="cell" id="cell_nb_2_8">0</div>
        <div class="cell" id="cell_nb_2_9">'</div>
        <div class="cell" id="cell_nb_2_10">0</div>
        <div class="cell" id="cell_nb_2_11">0</div>
        <div class="cell" id="cell_nb_2_12">0</div>
        <div class="cell" id="cell_nb_2_13">'</div>
        <div class="cell" id="cell_nb_2_14">'</div>
        <div class="cell" id="cell_nb_2_15">0</div>
        <div class="cell" id="cell_nb_2_16">0</div>
        <div class="cell" id="cell_nb_2_17">0</div>
        <div class="cell" id="cell_nb_2_18">0</div>
        <div class="cell" id="cell_nb_2_19">0</div>
        <div class="cell" id="cell_nb_2_20">0</div>
        <div class="cell" id="cell_nb_2_21">0</div>
      </div>
      <div class="occ_occ_rec" id="occ_rec_nb_1">
        <div class="cell" id="cell_nb_1_1">'</div>
        <div class="cell" id="cell_nb_1_2">'</div>
        <div class="cell" id="cell_nb_1_3">0</div>
        <div class="cell" id="cell_nb_1_4">0</div>
        <div class="cell" id="cell_nb_1_5">0</div>
        <div class="cell" id="cell_nb_1_6">0</div>
        <div class="cell" id="cell_nb_1_7">0</div>
        <div class="cell" id="cell_nb_1_8">0</div>
        <div class="cell" id="cell_nb_1_9">0</div>
        <div class="cell" id="cell_nb_1_10">0</div>
        <div class="cell" id="cell_nb_1_11">0</div>
        <div class="cell" id="cell_nb_1_12">0</div>
        <div class="cell" id="cell_nb_1_13">0</div>
        <div class="cell" id="cell_nb_1_14">0</div>
        <div class="cell" id="cell_nb_1_15">0</div>
        <div class="cell" id="cell_nb_1_16">0</div>
        <div class="cell" id="cell_nb_1_17">0</div>
        <div class="cell" id="cell_nb_1_18">0</div>
        <div class="cell" id="cell_nb_1_19">0</div>
        <div class="cell" id="cell_nb_1_20">0</div>
        <div class="cell" id="cell_nb_1_21">0</div>
      </div>
      <div class="occ_occ_rec" id="occ_rec_nb_0">
        <div class="cell" id="cell_nb_0_1">0</div>
        <div class="cell" id="cell_nb_0_2">0</div>
        <div class="cell" id="cell_nb_0_3">0</div>
        <div class="cell" id="cell_nb_0_4">0</div>
        <div class="cell" id="cell_nb_0_5">0</div>
        <div class="cell" id="cell_nb_0_6">0</div>
        <div class="cell" id="cell_nb_0_7">0</div>
        <div class="cell" id="cell_nb_0_8">0</div>
        <div class="cell" id="cell_nb_0_9">0</div>
        <div class="cell" id="cell_nb_0_10">0</div>
        <div class="cell" id="cell_nb_0_11">0</div>
        <div class="cell" id="cell_nb_0_12">0</div>
        <div class="cell" id="cell_nb_0_13">0</div>
        <div class="cell" id="cell_nb_0_14">0</div>
        <div class="cell" id="cell_nb_0_15">0</div>
        <div class="cell" id="cell_nb_0_16">0</div>
        <div class="cell" id="cell_nb_0_17">0</div>
        <div class="cell" id="cell_nb_0_18">0</div>
        <div class="cell" id="cell_nb_0_19">0</div>
        <div class="cell" id="cell_nb_0_20">0</div>
        <div class="cell" id="cell_nb_0_21">0</div>
      </div>
    </div>
  </div>

</section>
