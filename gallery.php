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
      <p id="picCount">Displaying 1 to 6 of 8</p>
        <div id="gallery">
            <table id="thumbs">
                <tr>
					<!--This row needs to be repeated-->
                    <td><a href="gallery.php"><img src="images/thumbs/basin.jpg" alt="" width="80" height="54"></a></td>
                </tr>
				<!-- Navigation link needs to go here -->
            </table>
            <figure id="main_image">
                <img src="images/basin.jpg" alt="" width="350" height="237">
                <figcaption>Water basin at Ryoanji temple, Kyoto</figcaption>
            </figure>
        </div>
    </main>
    <?php include './includes/footer.php'; ?>
</div>
</body>
</html>