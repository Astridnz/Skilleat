<?php 
if(session_status() === PHP_SESSION_NONE)
session_start();
/**
 * Paramètre un token en session et ajoute un input:hidden contenant le token.
 * 
 * Optionnellement ajoute un temps de vie au jeton.
 *
 * @param integer $time
 * @return void
 */
function setCSRF(int $time = 0): void
{
    if($time>0)
    $_SESSION["tokenExpire"] = time() + 60*$time; 
    $_SESSION["token"] = bin2hex(random_bytes(50));
    echo '<input type="hidden" name="token" value="'.$_SESSION["token"].'">';
}
/**
 * Vérifie si le jeton est toujours valide.
 *
 * @return boolean
 */
function isCSRFValid(): bool
{
    if(!isset($_SESSION["tokenExpire"]) || $_SESSION["tokenExpire"] > time()){
        if( isset($_SESSION['token'],$_POST['token']) && $_SESSION['token'] == $_POST['token'])
        return true;
    }
    if(isset($_SERVER['SERVER_PROTOCOL']))
        header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
    return false;
}
/**
 * Sanitize a string
 *
 * @param string $data
 * @return string
 */
function cleanData(string $data): string{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}
?>