<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/x-icon" href="../Images/Incatern.ico">
        <link rel="stylesheet" type="text/css" href="../CSS/gallery.css" />
        <title>Gallery</title>
    </head>
    
    <body>
        <header>
            <h1 id="h1Incapedia"><a href="../HTML/index.html">Incapedia</a></h1>
            <h1 id="h1About"><a href="../HTML/about.html">About</a></h1>
            <h1 id="vertical1">|</h1>
            <h1 id="h1Gallery"><a href="gallery.php">Gallery</a></h1>
        </header>
        <section class="imageArray">
            <?php
            $directory = "../Images/IncaternGallery/";
            $filecount = 0;
            $files2 = glob( $directory ."*" );
            if( $files2 ) {
                $filecount = count($files2);
                $filecount--;
            }
            for($i = 0; $i < $filecount; $i++)
            {
                $s_number = str_pad( $i, 4, "0", STR_PAD_LEFT );
                $format = "<img src='../Images/IncaternGallery/$s_number.jpg' alt='Incatern' id='item'>";
                $resulting_string = sprintf($format, $s_number);
                echo $resulting_string;
            }
            ?>
        </section>
    </body>
    </html>