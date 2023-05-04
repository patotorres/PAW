<?php

namespace Paw\Core;

use Paw\Core\Exceptions\DateNotValidException;
use Paw\Core\Exceptions\DateFormatNotValidException;
use Paw\Core\Exceptions\DateNotBeforeException;
use Paw\Core\Exceptions\ExtensionNotValidException;

class Validator 
{
    //Hay que habilitar una extension, en una app de produccion hay que hacerlo
    private static function get_mime_type($file)
    {
        $mtype = false;

        if (function_exists('finfo_open')) {
            echo 'existe';
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mtype = finfo_file($finfo, $file);
            finfo_close($finfo);
        } elseif (function_exists('mime_content_type')) {
            echo 'existe este otro';
            $mtype = mime_content_type($file);
        } else {
            echo 'no existe';
        }

        return $mtype;
    }

    public static function validar_fecha($fecha, $notBefore = false)
    {
        $regex = '/^\d{4}-\d{2}-\d{2}$/';
        if (!preg_match($regex, $fecha)) {
            throw new DateFormatNotValidException('Formato de fecha inválido');
        }

        $valores = explode('-', $fecha);
        if (!checkdate($valores[1], $valores[2], $valores[0]))
            throw new DateNotValidException('Fecha inválida');

        if($notBefore) {
            $date = strtotime(date('Y-m-d', strtotime($fecha)));
            $currentDate = strtotime(date('Y-m-d'));

            if($date < $currentDate)
                throw new DateNotBeforeException('La fecha ingresada debe ser posterior a la fecha actual');
        }

        return true;
    }

    public static function validar_email($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return null;
        }
        return $email;
    }

    public static function validar_imagen($file)
    {
        $allowed_image_extension = array(
            "png",
            "jpg",
            "jpeg",
            "pdf"
        );
        
        $file_extension = pathinfo($file["name"], PATHINFO_EXTENSION);

        if (!in_array($file_extension, $allowed_image_extension))
            throw new ExtensionNotValidException('Formato no soportado, la imagen sólo puede ser '.implode(", ", $allowed_image_extension));

        return true;
    }

    public static function remover_specialchar($data)
    {
        $escapedData = array();
        foreach ($data as $key => $value) {
            $escapedData[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
        return $escapedData;
    }

    
}
