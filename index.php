<?php 
include './includes/title.php'; 
include './includes/random_image.php';
include './includes/random_background.php'; 
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Japan Journey<?php echo "&#8212;{$title}"; ?></title>
    <link href="styles/journey.css" rel="stylesheet" type="text/css">
        <?php if (isset($imageSize)) { ?>
         <style>
         figcaption {
         width: <?= $imageSize[0]; ?>px;
         }
         #wrapper
            {
            background-image:url('<?php echo $valinnBakgrunnur ?>');;
              background-size:     cover; 
              background-repeat:no-repeat;        
              }
              </style>       
      <?php } ?>
</head>

<body>

<header>
           
    <h1>Japan Journey</h1>
</header>
<div id="wrapper">


        

   <?php require './includes/menu.php'; ?>
    <main>
       <h1><?= $textinn; ?></h1>
	  <p>Donald Trump hat verboten, dass die USA in den nächsten Monaten Flüchtlinge aufnehmen. Auch dürfen Menschen aus 7 Ländern erst Mal nicht mehr einreisen. In diesen Ländern leben viele Muslime.</p>
<?php if (isset($imageSize)) { ?>
     <figure>
     <img src="<?= $selectedImage; ?>" alt="Random image"
     <?= $imageSize[3]; ?>>
     <figcaption><?= $caption; ?></figcaption>
     </figure>
 <?php } ?>

        <p>2 Gerichte haben entschieden: Das Verbot ist nicht richtig. Deshalb gilt es ab sofort nicht mehr. Präsident Donald Trump hat das kritisiert. Er hat gesagt, die Meinung von dem Richter ist lächerlich.</p>
        <p>Die Regierung hat Einspruch dagegen eingelegt. Deshalb musste ein höheres Gericht entscheiden. Die Richter dort haben gesagt: Das Verbot gilt auch weiter nicht.</p>
        <p>Sie meinen: Es schadet Amerika nicht, wenn das Einreise-Verbot erst Mal nicht gilt. Der Präsident findet das nicht gut. Er sagt: Ich werde auch dagegen Einspruch einlegen. Dann müsste das wichtigste Gericht von den USA entscheiden.</p>
        <p>Die USA heißen auch "Vereinigte Staaten von Amerika" oder kurz: Amerika. Die USA sind mit etwa 9,8 Millionen Quadrat-Kilometern der dritt-größte Staat der Erde und eines der mächtigsten Länder der Welt. Zu den USA gehören 50 Bundes-Staaten.</p>
    </main>
   <?php include './includes/footer.php'; ?>
</div>
</body>
</html>
