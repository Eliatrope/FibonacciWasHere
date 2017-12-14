<?php
  $path_img="assets/images/";
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Spectral+SC" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>

  <body>
    <h1 class="main_title"><a style="color:black;text-decoration:none;" href="index.php">Fibonacci was here</a></h1>
    <div class="fibonacci_cc">
      <?php include_once('fibonacci_cc.php'); ?>
    </div>
    <form action="index.php" method="POST">
      <label for="from">Get the Fibonacci numbers from:</label>
        <span> 1 </span>
      <label for="to">To:</label>
        <input type="number" id="to" name="to" min="1" value="<?php if(isset($_POST['to'])){echo $_POST['to'];}?>"/>

        <!--<input type="text" name="test[0]" />
        <input type="text" name="test[1]" />-->
      <input type="submit" id="submit" name="submit" value="GO"/>
    </form>
    <section class="byebye">

    <?php
      /*if($_SERVER['REQUEST_METHOD'] == 'POST'){
        var_dump($_POST['test']);//huge
      }*/
     ?>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) && null!=($_POST['to']) && 0 < $_POST['to'] && '0'!= $_POST['to'] && $_POST['to'] > 1){
      $from = 1;
      $to = $_POST['to'];

      function jumpTo($from, $to){
        echo '<a href="#jump_to_spiral">Jump to spiral</a>';
        echo '<div class="jump_to">'.
        '<h2>Hey, wanna jump to somewhere ?</h2>';
        for($from;$from<=$to;$from++){
          $jump_each = '<a href="#'.$from.'">'.$from.'</a><span class="the_last_of_us">,</span> ';

          echo $jump_each;
        }
        echo '</div>';
      }

      jumpTo($from, $to);

      function fibonacciHere($from, $to){


        $current = 1;
        $prev = 0;
        $starter = '<div class="bar_code fl">Occurrence 0: 0 </div><br /> ';
        $starter_one = '';
        $reset_me = '<div class="reset_me">HODOR</div>';


        echo $reset_me;
          for($from;$from<=$to;$from++){
            $stack_prev = $prev;
            $prev = $current;
            $current = $current + $stack_prev;

            $fibonacciInactive ='<div class="bar_code fl" id="'.$from.'">Occurrence '.$from.': '.$current.' ratio '.$current.' / '.$prev.' = '.$current / $prev.'</div>';

            echo $starter.'<div class="cb"></div>';
            echo $fibonacciInactive.'<br /><div class="cb"></div>';

            $starter ='';
        }
      }

      fibonacciHere($from, $to);
      include_once('fibonacci_spiral.php');
    }else{
      echo "Stop repeating things...";
    }

     ?>
   </section>
    <script src="main.js" type="text/javascript"></script>
  </body>
</html>
