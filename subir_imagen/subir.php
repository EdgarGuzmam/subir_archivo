<!DOCTYPE html>
<html>
    <head>
        <title>Imagen subida</title>
    </head>
    <body>
        <form action="./index.php">
            <?php
            function generateRandomString($length = 10) { 
                return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
            }
            $new = generateRandomString();
            $path = "contenedor/";
            $path = $path.$new.basename($_FILES['fichero']['name']);
        
            if(move_uploaded_file($_FILES['fichero']['tmp_name'], $path)){
                  echo "El archivo ".  basename($new.$_FILES['fichero']['name'])." ha sido subido";
            } else{
                echo $_FILES['fichero']['error'];
            }
               
            $file_name = $_FILES['fichero']['name'];
            $uploadedfileload="true";
            
            if (!($_FILES['fichero']['type'] =="image/pjpeg" OR $_FILES['fichero']['type'] =="image/png")){
                $msg=$msg." Tu archivo tiene que ser JPG o PNG. Otros archivos no son permitidos<BR>";
                $uploadedfileload="false";
            }
            
            echo "<br><br> La imagen que subio fue: ","<br><img src='contenedor/$file_name' >";
            ?>
            <br><br><input type="submit" value="Volver" style="">
        </form>
    </body>
</html>