<?php
/**
 * https://www.php.net/manual/pt_BR/function.session-start.php
 * 
 */

 /**
 * https://www.php.net/manual/pt_BR/function.header.php
 */
require __DIR__ . '/session.php';

$user = empty($_SESSION['user']) ? null : $_SESSION['user'];

if(!$user){
    header('location: login.php');
    exit;
}
?>
<h1>Página protegida</h1>
<p>Olá, <?php echo $user['email']; ?></p>