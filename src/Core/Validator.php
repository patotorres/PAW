<?php

namespace Paw\Core;

class Validator 
{
    private static function get_mime_type($file)
    {
        $mtype = false;

        if (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mtype = finfo_file($finfo, $file);
            finfo_close($finfo);
        } elseif (function_exists('mime_content_type')) {
            $mtype = mime_content_type($file);
        }

        return $mtype;
    }

    public static function validar_fecha($fecha, $notBefore = false)
    {
        $errors = [];

        $regex = '/^\d{4}-\d{2}-\d{2}$/';
        if (!preg_match($regex, $fecha)) {
            $errors[] = 'Formato de fecha inválido';
        } else {
            $valores = explode('-', $fecha);
            if (!checkdate($valores[1], $valores[2], $valores[0]))
                $errors[] = 'Fecha inválida';

            if($notBefore) {
                $date = strtotime(date('Y-m-d', strtotime($fecha)));
                $currentDate = strtotime(date('Y-m-d'));

                if($date < $currentDate)
                    $errors[] = 'La fecha ingresada debe ser posterior a la fecha actual';
            }
        }

        return $errors;
    }

    public static function validar_email($email)
    {
        $errors = [];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            $errors[] = 'E-mail inválido';

        return $errors;
    }

    public static function validar_imagen($file)
    {
        $errors = [];
        $allowed_image_extension = array(
            "png",
            "jpg",
            "jpeg",
            "pdf"
        );
        
        $file_extension = pathinfo($file["name"], PATHINFO_EXTENSION);

        if (!in_array($file_extension, $allowed_image_extension))
            $errors[] = 'Formato no soportado, la imagen sólo puede ser '.implode(", ", $allowed_image_extension);

        $allowed_mime_types = array(
            "image/png",
            "image/jpeg",
            "application/pdf",
            "application/x-bzpdf",
            "application/x-gzpdf"
        );
        
        $mime_type = Validator::get_mime_type($file['tmp_name']);

        if (!in_array($mime_type, $allowed_mime_types))
            $errors[] = 'Formato no soportado, la imagen sólo puede ser '.implode(", ", $allowed_image_extension);

        return $errors;
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