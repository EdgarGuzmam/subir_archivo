<!DOCTYPE html>
<html>
    <head>
        <title>Subir Archivo</title>
    </head>
    <body>
        <form enctype="multipart/form-data" action="./subir.php" method="post" style="background:#E0F8EC">
            <center>
                <fieldset>
                    <input type="hidden" name="MAX_FILE_SIZE" value="120000">
                    <input type="file" name="fichero">
                    <input type="submit" value="Enviar imagen">
                </fieldset>
            </center>
        </form>
    </body>
</html>