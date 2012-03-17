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
                  "years" => "00", "days" => "00", "hours" => "00",
                  "minutes" => "00", "seconds" => "00",
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
        $tempo_restante = false;
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
      .desc span {
        float: left;
        width: 100px;
        margin-right: 35px;
        font-size: 12px;
        font-weight: bold;
        color: #666;
        text-transform: uppercase;
        text-align: center;
        display: block;
        text-shadow: 1px 1px 2px #ccc;
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
    <?php if($tempo_restante): ?>
    <section id="countdown">
      <header>
        <h1>Chico Stallone vem aí!</h2>
        <h2>Faltam aproximadamente...</h2>
      </header>
      <div id="counter"></div>
      <div class="desc">
        <span id="dias">Dias</span>
        <span id="horas">Horas</span>
        <span id="minutos">Minutos</span>
        <span id="segundos">Segundos</span>
      </div>
    </section>
    <?php else: ?>
    <h1>Chico chegou!</h1>
    <?php endif; ?>
  </div>
</body>
</html>
