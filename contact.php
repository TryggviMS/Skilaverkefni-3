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
            background-image:url('<?php echo $valinnBakgrunnur ?>');;
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
      <p>In dem Land Rumänien demonstrieren viele Menschen. Sie wollen, dass die Regierung zurück tritt. Die Menschen sagen: Die Regierung macht nicht genug gegen Korruption.</p>
        <form method="post" action="">
            <p>
                <label for="name">Name:</label>
                <input name="name" id="name" type="text">
            </p>
            <p>
                <label for="email">Email:</label>
                <input name="email" id="email" type="text">
            </p>
            <p>
                <label for="comments">Comments:</label>
                <textarea name="comments" id="comments"></textarea>
            </p>
            <p>
                <input name="send" type="submit" value="Send message">
            </p>
        </form>
    </main>
    <?php include './includes/footer.php'; ?>
</div>
</body>
</html>
