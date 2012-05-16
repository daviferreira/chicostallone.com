<!doctype HTML>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Chico Stallone</title>
    <link type="text/css" rel="stylesheet" href="galleria/themes/classic/galleria.classic.css">
    <link rel="stylesheet" href="css/chico.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="galleria/galleria-1.2.7.min.js"></script>
    <script type="text/javascript" src="galleria/themes/classic/galleria.classic.min.js"></script>
  </head>
<body>
  <div id="container">
    <section id="bio">
       <p><strong>Francisco Stallone Ferreira</strong> veio ao mundo no dia 12 de maio de 2012, às 11:14, pesando 3.250kg e medindo 49,5cm.</p>
    </section>
    <div id="video">
      <iframe src="http://player.vimeo.com/video/42301209?title=0&amp;byline=0&amp;portrait=0" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
    </div>
    <div id="galleria">
        <?php
        $photos = glob("fotos/*.jpg");
        usort($photos, function($a, $b) {
            return (int)preg_replace("/[^0-9]/", "", $a) > (int) preg_replace("/[^0-9]/", "", $b);
        });
        foreach($photos as $p){
          echo '<img src="'.$p.'">';
        }
        ?>
    </div>
  </div>
  <script>
      $(function(){
        $('#galleria').galleria({
          width: 1000,
          height: 600,
          transition: 'fadeslide',
          clicknext: true,
          thumbCrop: true
        });
        Galleria.ready(function() {
            this.attachKeyboard({
              right: this.next,
              left: this.prev
            });
        });
      });
   </script>
</body>
</html>
