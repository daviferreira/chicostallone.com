<!doctype HTML>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Chico Stallone</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <?php
      $tempo_restante = strtotime("2012-05-15 11:00:00") - date('U');
      function sec2time($time)
      {
          if (is_numeric($time)) {
              $value = array(
                  "years" => 0, "days" => 0, "hours" => 0,
                  "minutes" => 0, "seconds" => 0,
                  );
              if ($time >= 31556926) {
                  $value["years"] = str_pad(floor($time / 31556926), 2, "0", STR_PAD_LEFT);
                  $time = ($time % 31556926);
              }
              if ($time >= 86400) {
                  $value["days"] = str_pad(floor($time / 86400), 2, "0", STR_PAD_LEFT);
                  $time = ($time % 86400);
              }
              if ($time >= 3600) {
                  $value["hours"] = str_pad(floor($time / 3600), 2, "0", STR_PAD_LEFT);
                  $time = ($time % 3600);
              }
              if ($time >= 60) {
                  $value["minutes"] = str_pad(floor($time / 60), 2, "0", STR_PAD_LEFT);
                  $time = ($time % 60);
              }
              $value["seconds"] = str_pad(floor($time), 2, "0", STR_PAD_LEFT);
              return (array) $value;
          } else {
              return (bool) false;
          }
      }
      if($tempo_restante > 0){
        $ar_tempo = sec2time($tempo_restante);
        $tempo_restante = "{$ar_tempo['days']}:{$ar_tempo['hours']}:{$ar_tempo['minutes']}:{$ar_tempo['seconds']}";
      }else{
        $tempo_restante = "00:00:00:00";
      }
    ?>
    <script type="text/javascript">
      $(function(){
        $('#counter').countdown({
          image: 'img/digits.png',
          startTime: '<?php echo $tempo_restante; ?>'
        });
      });
    </script>
    <style>
      *, html { font-family: "Helvetica Neue", "Arial", sans-serif; }
      body { background: url(img/bg.png) repeat; color: #666; text-shadow: -1px -1px 0 #fff; }
      br { clear: both; }
      .cntSeparator {
        font-size: 54px;
        margin: 10px 7px;
        color: #000;
      }
      .desc { margin: 7px 3px; }
      .desc div {
        float: left;
        font-family: Arial;
        width: 70px;
        margin-right: 65px;
        font-size: 13px;
        font-weight: bold;
        color: #000;
      }
      #container {
        width: 560px;
        margin: 0 auto;
        margin-top: 60px;
      }
      h1 {
        font-size: 60px;
        letter-spacing: -4px;
      }
      h2 {
        font-size: 20px;
        color: #999;
      }
    </style>
  </head>
<body>
  <div id="container">
    <section id="countdown">
      <header>
        <h1>Chico Stallone vem aí!</h2>
        <h2>Faltam aproximadamente...</h2>
      </header>
      <div id="counter"></div>
      <div class="desc">
        <div>Dias</div>
        <div>Horas</div>
        <div>Minutos</div>
        <div>Segundos</div>
      </div>
    </section>
  </div>
</body>
</html>