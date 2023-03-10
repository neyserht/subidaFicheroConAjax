<?php

// Crear previamente en el proyecto la carpea "archivos1"
$ubicacion = "../archivos1/";
$archivo = $ubicacion . basename($_FILES['file1']['name']);

if(move_uploaded_file($_FILES['file1']['tmp_name'], $archivo))
{
    echo "Fichero subido correctamente";
} else
{
    switch ($_FILES['file1']['error']) {
        case UPLOAD_ERR_OK: /* UPLOAD_ERR_OK: Archivo subido correctamente */
            break;
          case UPLOAD_ERR_INI_SIZE:
            echo 'El fichero subido excede la directiva upload_max_filesize de php.ini.';
            break;
          case UPLOAD_ERR_FORM_SIZE:
            echo 'El fichero subido excede la directiva upload_max_filesize de php.ini.';
            break;		
          case UPLOAD_ERR_PARTIAL:
            echo 'El fichero fue sólo parcialmente subido.';
            break;
          case UPLOAD_ERR_NO_FILE:
            echo 'No se subió ningún fichero.';
            break;
          case UPLOAD_ERR_NO_TMP_DIR:
            echo 'Falta la carpeta temporal.';
            break;
          case UPLOAD_ERR_CANT_WRITE:
            echo 'No se pudo escribir el fichero en el disco.';
            break;
          case UPLOAD_ERR_EXTENSION:
            echo 'Una extensión de PHP detuvo la subida de ficheros.';
            break;			
          default:
            echo 'El archivo no se ha enviado.';
            break;
    }
}



?>