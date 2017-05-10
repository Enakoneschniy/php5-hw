<?
echo "<h1>HTTPS transfer with cURL</h1>";
$outputfile = "$DOCUMENT_ROOT/ . . /writable/equifax.html";
$fp = fopen($outputfile, "w");
echo "Initializing cURL session. . .<br>";
$ch = curl_init();
echo "Setting cURL options. . .<br>" ;
curl_setopt ($ch, CURLOPT_URL, "https://equifaxsecure.com");
curl_setopt ($ch, CURLOPT_FILE , $fp);
echo "Executing cHRL session. . .<br>";
curl_exec ($ch);
echo "Ending cURL session. . .<br>";
curl_close ($ch);
fclose($fp);
?>