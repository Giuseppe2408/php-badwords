<?php

    $paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. lorem Id aperiam eligendi eveniet ea, fugit culpa eos lorem, voluptate quae lorem voluptatibus sunt voluptatem iusto nobis lorem, nam necessitatibus modi? Sapiente qui officia libero! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla nihil ipsum labore hic, iusto soluta magnam! Sint iusto ipsam ab repellendus maxime minus voluptates illo excepturi, temporibus, dolores error facere. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam suscipit cupiditate, tempore reprehenderit possimus numquam temporibus ab, veniam tempora animi perspiciatis doloribus dolorem repudiandae ratione consequuntur delectus. Dicta, tenetur dolor! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi dolor amet dignissimos neque? Sed, in. In blanditiis explicabo consequatur nulla molestiae. Fugit eos itaque saepe sapiente debitis aspernatur dolor deserunt.';
    $lunghezzaStringa = strlen($paragrafo);
    $censored = $_GET["censored"];
    $paragrafoReplace = str_ireplace($censored , '***', $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="container">

        <form class="txt-center" action="" method="get">
            <label for="name">Censura:</label>
            <input type="text" name="censored">
            <button>censura</button>
        </form>

        <div class="margin txt-center">
            <h1 class="margin">Testo censurato:</h1>
            <p><?= $paragrafoReplace?></p>
        </div>

        <div class="txt-center">
            <h2>Lunghezza paragrafo:</h2>
            <span><?= $lunghezzaStringa ?></span>
        </div>
    </div>
    
    
    
    
    
</body>
</html>