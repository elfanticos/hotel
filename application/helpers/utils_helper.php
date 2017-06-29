<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('_log')) {
    function _log($var) {
        $CI =& get_instance();
        $dbgt = debug_backtrace();
        if(isset($dbgt[1]['class'])) {
        	$class = $dbgt[1]['class'];
        } else {
        	$ruta = explode(DIRECTORY_SEPARATOR, $dbgt[0]['file']);
        	$class = end($ruta);
        }
        log_message('error', '( '.$class.' -> '.$dbgt[1]['function'].') (linea: '.$dbgt[0]['line'].') >> '.$var);
    }
}

if(!function_exists('_logLastQuery')) {
    /**
     * Valida si es entero
     * @param $input - valor a evaluar
     * @return bool true / false
     */
    function _logLastQuery($marca = null) {
        $CI =& get_instance();
        $dbgt = debug_backtrace();
        log_message('error', '( '.$dbgt[1]['class'].' -> '.$dbgt[1]['function'].') (linea: '.$dbgt[0]['line'].') >> '.$marca.' - '.$CI->db->last_query());
    }
}

if(!function_exists('_simpleEncrypt')) {
    /**
     * Desencripta usando mcrypt_encrypt
     * @author dfloresgonz
     * @since 22.03.2016
     * @param $toDecrypt variable que sera desencriptada
     * @return variable encriptada
     */
    function _simple_encrypt($toEncrypt) {
        return trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, CLAVE_ENCRYPT, $toEncrypt, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))));
    }
}

if(!function_exists('_simpleDecrypt')) {
    /**
     * Desencripta usando mcrypt_decrypt
     * @author dfloresgonz
     * @since 22.03.2016
     * @param $toDecrypt variable que sera desencriptada
     * @return variable desencriptada
     */
    function _simple_decrypt($toDecrypt) {
        return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, CLAVE_ENCRYPT, base64_decode($toDecrypt), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)));
    }
}

if(!function_exists('_simpleDecryptInt')) {
    /**
     * Desencripta usando mcrypt_decrypt para integer, retorna null si no desencripto bien
     * @author dfloresgonz
     * @since 22.03.2016
     * @param $toDecrypt variable que sera desencriptada
     * @return variable desencriptada
     */
    function _simpleDecryptInt($toDecrypt) {
        $dec = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, CLAVE_ENCRYPT, base64_decode($toDecrypt), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)));
        if(!is_numeric($dec)){
            $dec = null;
        }
        return $dec;
    }
}

?>