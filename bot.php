<?php
$id_arr = [5912392533,5057038547];
foreach($id_arr as $id_item) {
    for ($i = 0; $i <= 20; $i++) {

        echo "<br>";
        $message = send_telegram_message($id_item, $i);
        print_r($message);
        file_get_contents($message);
    }
}
function send_telegram_message($id, $text){
    $bot = "https://api.telegram.org/bot5948182720:AAE0OorNLu-ZAu91b2atwN5_r1UHFayOKDM/sendMessage?chat_id=";

    return $bot . $id . '&text=' . $text ;

}
//$bot = "https://api.telegram.org/bot5948182720:AAE0OorNLu-ZAu91b2atwN5_r1UHFayOKDM/sendMessage?chat_id=5057038547&text='Валера брат'";
//file_get_contents($bot);
'https://api.tlgr.org/bot' . 'bot5948182720:AAE0OorNLu-ZAu91b2atwN5_r1UHFayOKDM' . '/setWebhook?url=https://pack-of-sites.it-schoollearn.com/webhook.php';