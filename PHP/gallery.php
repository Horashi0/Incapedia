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
            $files2 = glob( $directory ."*" );
            foreach($files2 as $file)
            {
                
                $exif = exif_read_data($file);

                if($exif['Orientation'] == 6)
                {
                    list($height, $width) = getimagesize($file);
                    $orientation = ($width > $height) ? 'horizontal' : 'vertical';
                    $sortedImages[$orientation][] = $file;
                }
                else
                {
                    list($width, $height) = getimagesize($file);
                    $orientation = ($width > $height) ? 'horizontal' : 'vertical';
                    $sortedImages[$orientation][] = $file;
                }
                
                // echo "| ". $file . ", Width:" . $width . ", Height: " . $height ." ". $temp2 . "\n";
            }

            foreach (['horizontal', 'vertical'] as $orientation) {
                if (isset($sortedImages[$orientation])) {
                    foreach ($sortedImages[$orientation] as $file) {
                        $fileName = basename($file);
                        echo "<img src='../Images/IncaternGallery/$fileName' alt='Incatern' class='item $orientation'>";
                    }
                }
            }
            ?>
        </section>
    </body>
    </html>