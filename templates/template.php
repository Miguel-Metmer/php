<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="../public/css/style.css">  
    <script src="https://kit.fontawesome.com/07e1b9fab5.js" crossorigin="anonymous"></script>
    <?php echo $title; ?> 

</head>

<body>
    
<div class="container">
    <div id="top-navbar"><span class="color-white font-size-2x">titre</span></div>
    
    <div id="content">

        <div id="left-navbar">
            <div id="logo">
                <i class="fas fa-user"></i>
            </div>

            <div id="left-nav">
                <ul>
                    <li><a href="#">Projets</a></li>
                    <li><a href="#">Gallerie</a></li>
                </ul>
            </div>
        </div>
        <div id="right-content">
            <div id="breadcrumb">
                <?php echo $breadcrumb; ?>
            </div>

            <?php echo $body; ?>
        </div>
    </div>
   
</div>

</body>

</html>


