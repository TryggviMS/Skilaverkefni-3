<?php 
include './includes/title.php'; 
include './includes/random_background.php'; 
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Japan Journey<?php echo "&#8212;{$title}"; ?></title>
    <link href="styles/journey.css" rel="stylesheet" type="text/css">
   
       <style>
         #wrapper
            {
            background-image:url('<?php echo $valinnBakgrunnur ?>');
              background-size:     cover; 
              background-repeat:no-repeat;        
              }
        </style>        
      
</head>

<body>
<header>
    <h1>Japan Journey </h1>
</header>
<div id="wrapper">
    <?php require './includes/menu.php'; ?>
    <main>
        <h1><?= $textinn; ?></h1>
        <p>Nachrichten, 10. Februar 2017Gemeinsame Kanzler-KandidatinDie Parteien CDU und CSU verstehen sich nicht mehr so gut wie früher. Sie streiten vor allem über Flüchtlinge. Trotzdem ist Bundes-Kanzlerin Angela Merkel jetzt ihre gemeinsame Spitzen-Kandidatin für die Bundestags-Wahl im September.<a href="details.php">More</a></p>
        <h2>November 3, 2014</h2>
        <p>CDU und CSU haben 2 Tage in München zusammen geredet. Danach hat der Chef von der Partei CSU, Horst Seehofer, gesagt: Wir unterstützen Merkel. <a href="details.php">More</a></p>
        <h2>November 4, 2014</h2>
        <p> Sie macht gute Politik. Auch Merkel hat betont, dass der Streit mit der CSU beendet ist. Sie glaubt: Es wird dieses Mal ein sehr schwieriger Wahl-Kampf.<a href="details.php">More</a></p>
        <h2>November 5, 2014</h2>
        <p>Die beiden Parteien haben sich aber nicht über alles geeinigt. Die CSU will, dass höchstens 200.000 Flüchtlinge im Jahr nach Deutschland kommen dürfen. Merkel sieht das anders. Sie will keine Ober-Grenze einführen. <a href="details">More</a></p>
    </main>
    <?php include './includes/footer.php'; ?>
</div>
</body>
</html>
