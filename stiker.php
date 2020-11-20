<?php
echo "Masukan Password :";
$password = trim(fgets(STDIN));
if ($password == "mellisa"){
	echo "Password Benar Silahkan Tunggu";
	echo "\n";
	sleep(2);
     goto start;
}
else {
	echo "PASSWORD SALAH BEGO";
	echo "\n";
exit();
}
start:
echo "\n";
echo "\033[1;35m
     ___      .______        ___      .__   __.   _______     
    /   \     |   _  \      /   \     |  \ |  |  /  _____|    
   /  ^  \    |  |_)  |    /  ^  \    |   \|  | |  |  __      
  /  /_\  \   |   _  <    /  /_\  \   |  . `  | |  | |_ |     
 /  _____  \  |  |_)  |  /  _____  \  |  |\   | |  |__| |     
/__/     \__\ |______/  /__/     \__\ |__| \__|  \______|     
                                                              
       __       ___       _______   ______                    
      |  |     /   \     /  _____| /  __  \                   
      |  |    /  ^  \   |  |  __  |  |  |  |                  
.--.  |  |   /  /_\  \  |  | |_ | |  |  |  |                  
|  `--'  |  /  _____  \ |  |__| | |  `--'  |                  
 \______/  /__/     \__\ \______|  \______/                   
                                                              
     _______.  ______   .______      .______     ____    ____ 
    /       | /  __  \  |   _  \     |   _  \    \   \  /   / 
   |   (----`|  |  |  | |  |_)  |    |  |_)  |    \   \/   /  
    \   \    |  |  |  | |      /     |      /      \_    _/   
.----)   |   |  `--'  | |  |\  \----.|  |\  \----.   |  |     
|_______/     \______/  | _| `._____|| _| `._____|   |__|     
                                                              
.______        ___      .__   __.   _______                   
|   _  \      /   \     |  \ |  |  /  _____|                  
|  |_)  |    /  ^  \    |   \|  | |  |  __                    
|   _  <    /  /_\  \   |  . `  | |  | |_ |                   
|  |_)  |  /  _____  \  |  |\   | |  |__| |                   
|______/  /__/     \__\ |__| \__|  \______|                   
                                                              
       __       ___       _______   ______                    
      |  |     /   \     /  _____| /  __  \                   
      |  |    /  ^  \   |  |  __  |  |  |  |                  
.--.  |  |   /  /_\  \  |  | |_ | |  |  |  |                  
|  `--'  |  /  _____  \ |  |__| | |  `--'  |                  
 \______/  /__/     \__\ \______|  \______/                   
                                                              
     ___      .___  ___. .______    __    __  .__   __.       
    /   \     |   \/   | |   _  \  |  |  |  | |  \ |  |       
   /  ^  \    |  \  /  | |  |_)  | |  |  |  | |   \|  |       
  /  /_\  \   |  |\/|  | |   ___/  |  |  |  | |  . `  |       
 /  _____  \  |  |  |  | |  |      |  `--'  | |  |\   |       
/__/     \__\ |__|  |__| | _|       \______/  |__| \__|       
                                                              
.______        ___      .__   __.   _______                   
|   _  \      /   \     |  \ |  |  /  _____|                  
|  |_)  |    /  ^  \    |   \|  | |  |  __                    
|   _  <    /  /_\  \   |  . `  | |  | |_ |                   
|  |_)  |  /  _____  \  |  |\   | |  |__| |                   
|______/  /__/     \__\ |__| \__|  \______|                   
                                                              
       __       ___       _______   ______                    
      |  |     /   \     /  _____| /  __  \                   
      |  |    /  ^  \   |  |  __  |  |  |  |                  
.--.  |  |   /  /_\  \  |  | |_ | |  |  |  |                  
|  `--'  |  /  _____  \ |  |__| | |  `--'  |                  
 \______/  /__/     \__\ \______|  \______/                   
                                by aripgans";
echo "\n";
sleep(2);
echo "Nama mu: ";
$namamu = trim(fgets(STDIN));
$nama = str_replace(' ', '+', $namamu);
echo "Alamat mu: ";
$alamatmu = trim(fgets(STDIN));
$alamat = str_replace(' ', '+', $alamatmu);
echo "Kota mu: ";
$kotamu = trim(fgets(STDIN));
$kota = str_replace(' ', '+', $kotamu);
echo "Provinsi mu: ";
$provinsimu = trim(fgets(STDIN));
$provinsi = str_replace(' ', '+', $provinsimu);
echo "KodePos mu: ";
$kodeposmu = trim(fgets(STDIN));
$kodepos = str_replace(' ', '+', $kodeposmu);
echo "Berapa Kali Sumbit :";
$count = trim(fgets(STDIN));

for($i=0; $i < $count; $i++){
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://redwoodjs.com/stickers-thanks');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "form-name=stickers&email=&name=$nama&address1=$alamat&address2=&city=$kota&state=$provinsi&postal_code=$kodepos&country=Indonesia&comment=");

$headers = array();
$headers[] = 'Host: redwoodjs.com';
$headers[] = 'Content-Length: 153';
$headers[] = 'Cache-Control: max-age=0';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Origin: https://redwoodjs.com';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 10; RMX1931 Build/QKQ1.191021.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/85.0.4183.81 Mobile Safari/537.36';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'X-Requested-With: mark.via.gf';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Referer: https://redwoodjs.com/stickers';
$headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
echo $result;
echo "\n";
}
?>