<?php

//Clone Plugin creato da cyanbox.net 
//Base su cui lavora: @SilverOSp Base
//Hai bisogno di aiuto? Contatta @Cyan_Box_limitati_Bot
echo "Plugin Clona v 1 by Cyan Box";

/* IMPOSTAZIONI */

$webhook = "https://google.com/yourbot/index.php"; //Inserisci il link a cui settare il WebHook. E' quello che consegni normalmente a SilverOSBase WebHook
$token = "1234ciao"; //Inserisci il token del bot datoti da Botfather
$usernamebot = "OrangeShinkBot"; //Inserisci l'username del bot >>>>SENZA @<<<<
$onlyadmin = true; //sostituisci con false se vuoi rendere accessibile il comando a tutti

/* FINE IMPOSTAZIONI*/

if(strpos($msg, "/clona ")===0)
{
	if($onlyadmin == true and $userID != $adminID)
	{
		sm($chatID, "Non sei admin del bot!");
		exit;
	}
$campo = explode(" ", $msg);
sm($chatID, "Sto impostando il webhook...");
	if(file_get_contents("https://api.telegram.org/bot$campo[1]/setwebhook?url=$webhook?api=bot$campo[1]&userbot=$usernamebot"))
	{
		sm($chatID, "Se hai inserito una token valida il tuo bot è stato clonato!");
	}else{
		sm($chatID, "Errore! Non è stato possibile contattare il servizio API di Telegram. 
		Possibili errori: / Connessione S2S Atervista non attivata / Servizio API offline / Errore nel codice dovuto a una modifca");
	}
}

if($msg == "/start")
{
sm($chatID, "Usa /clona Token per clonare questo bot.");	
}
