<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="upload.php">Subir imagen</a></li>
            <li><a href="login.php">Registrar</a></li>
        </ul>
    </nav>
    <?php
    
    $ruta_imagenes = "media/";
    $imagenes = opendir( $ruta_imagenes );
    $hay_imagenes = false;
    if( $imagenes ) 
    {
        while( $imagen = readdir( $imagenes ) )
        {
            if( is_file( $ruta_imagenes . $imagen ) && getimagesize( $ruta_imagenes . $imagen ) ) 
            {
                echo "<img src='$ruta_imagenes$imagen'>";
                $hay_imagenes = true;
            }
        }
        closedir( $imagenes );
    }
    else
    {
        echo "Error: al cargar carpeta de imagenes";
    }
    if( !$hay_imagenes )
    {
        echo "No hay imagenesaun. Sube la primera imagen";
    }
    ?>
</body>
</html>