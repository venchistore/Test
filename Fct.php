<?php
system('clear'); #error_reporting(0);
const
yt = "https://youtube.com/@zhy_08",
abuglp = "\033[1;30m", 
b = "\033[1;34m", 
c = "\033[1;36m", 
d = "\033[0m", 
h = "\033[1;32m", 
k = "\033[1;33m", 
m = "\033[1;31m", 
p = "\033[1;37m", 
u = "\033[1;35m", 
mc = "\033[01;38;5;196m", 
m2o = "\033[01;38;5;202m", 
o = "\033[01;38;5;208m", 
o2k = "\033[01;38;5;214m", 
k2o = "\033[01;38;5;220m", 
kcerah = "\033[01;38;5;226m", 
k2p = "\033[01;38;5;228m", 
n = "\n", 
n2 = "\n\n", 
tb = "\t", 
tb2 = "\t\t", 
tp = k2o."❝ ", 
tp2 = k2o." ❞", 
dot = mc.' ⦿  ', 
r = "\r                                                      \r", 
r2 = "\r", 
sd = u." ]┈➤ "..p, hapus = "                                 ", 
cb = c.": ̗̀➛ ",
centang = "\033[0;104m\033[1;37m[✓]".d." ",
bp = "\033[0;104m\033[1;37m", 
bpkc = "\033[1;37m\033[0;104m",
kurang = "\033[0;104m\033[1;37m[\033[01;38;5;196m-\033[1;37m]".d." ", 
ori = "\033[0;104m\033[1;37m[\033[1;32m≠\033[1;37m]".d." ",
kb = b."[".d, kt = b."]".d, 
pan = mc." »  ", 
pan1 = mc." ⫸  ", 
pan2 = abuglp."❯".m."❯".p."❯ ", 
bg = mc." : ".d, 
bgb = b." : ".d, 
mp = "\033[101m\033[1;37m", pm = "\033[107m\033[1;31m";

function run($u, $h = 0, $p = 0, $c = 0) {
   while (true) {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $u);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
      curl_setopt($ch, CURLOPT_COOKIE, TRUE);
      if ($c) {
         curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
         curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
      }
      if ($p) {
         curl_setopt($ch, CURLOPT_POST, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $p);
      }
      if ($h) {
         curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
      }
      curl_setopt($ch, CURLOPT_HEADER, true);
      $r = curl_exec($ch);
      $c = curl_getinfo($ch);
      if (!$c) return "Curl Error : ".curl_error($ch); else {
         $hd = substr($r, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
         $bd = substr($r, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
         curl_close($ch);
         if (!$bd) {
            print r.mc."Check your Connection!";
            sleep(2); print r; continue;
         }
         return array($hd, $bd)[1];
      }
   }
}
function timer($t) {
   date_default_timezone_set("UTC"); print r;
   $timr = time()+$t;
   while (true):
   $res = $timr-time();
   if ($res < 1) {
      break;
   }
   print mc."\t 次の請求書 ".date("i", $res).abuglp.":".p.date("s", $res)." 数えながら \r".d; sleep(1); endwhile;
}
function input($msg) {
   return c."╭{  ".kcerah."Input ".$msg.c."  }".n.c."╰┈➤ ".h;
}
function save($new, $univ = 0) {
   if ($univ) {
      if (file_exists("../$new")) {
         $cfg = file_get_contents("../$new");
      } else {
         $cfg = readline(input($new)); print n; file_put_contents("../$new", $cfg);
      }
      return $cfg;
   }
   if (file_exists($new)) {
      $cfg = file_get_contents($new);
   } else {
      $cfg = readline(input($new)); print n; file_put_contents($new, $cfg);
   }
   return $cfg;
}
function menu($no, $title) {
   print kb.p."$no".kt.u." $title".d.n;
}
function z($z, $l, $cetak = 0) {
   if ($cetak) {
      $len = 8; $lenstr = $len-strlen($z);
      return cetak(r2.bp."[✓]".d." ".p.$z.str_repeat(" ", $lenstr).sd.h.$l.d, 30000);
   }
   return slow(r2.bp."[✓]".d." ".h.$z.$l.d);
}
function x($x, $l) {
   return r.p."[".m."!".p."] ".m.$x.$l.d;
}
function ori($b, $v, $tab = 0) {
   if ($tab) {
      $len = 10; $lenstr = $len-strlen($b);
      return slow(r2.bp."[≠]".d." ".p.$b.str_repeat(" ", $lenstr).sd.h.$v.d);
   }
   $len = 8; $lenstr = $len-strlen($b);
   return slow(r2.bp."[≠]".d." ".p.$b.str_repeat(" ", $lenstr).sd.h.$v.d);
}
function pls($b, $v, $tab = 0) {
   if ($tab) {
      $len = 10; $lenstr = $len-strlen($b);
      return slow(r2.bp."[+]".d." ".p.$b.str_repeat(" ", $lenstr).sd.h.$v.d);
   }
   $len = 8; $lenstr = $len-strlen($b);
   return slow(r2.bp."[+]".d." ".p.$b.str_repeat(" ", $lenstr).sd.h.$v.d);
}
function krg($e, $v, $tab = 0) {
   if ($tab) {
      $len = 10; $lenstr = $len-strlen($e);
      return slow(r2.bp."[-]".d." ".p.$e.str_repeat(" ", $lenstr).sd.h.$v.d);
   }
   $len = 8; $lenstr = $len-strlen($e);
   return slow(r2.bp."[-]".d." ".p.$e.str_repeat(" ", $lenstr).sd.h.$v.d);
}
function t($label, $msg, $tab = 0) {
   if ($tab) {
      $len = 10; $lenstr = $len-strlen($label);
      return $label.str_repeat(" ", $lenstr).sd.$msg.d;
   }
   $len = 8; $lenstr = $len-strlen($label);
   return $label.str_repeat(" ", $lenstr).sd.$msg.d;
}
function limit($msg, $coin) {
   $len = 19; $lenstr = $len-strlen($msg);
   return r.p."[".m."!".p."] ".mc.$msg.str_repeat(" ", $lenstr).sd.$coin.d;
}
function slow($str) {
   foreach (str_split($str) as $rt) {
      echo $rt; usleep(30000);
   } print n;
}
function cetak($str, $t) {
   $linkrr = str_split($str);
   foreach ($linkrr as $linkz) {
      echo $linkz; usleep($t);
   }
}
function cok($cf = 0) {
   if ($cf) {
      cetak(r2.mc."Cloudflare Detected, Update Your Cookie".d, 15000); print n;
      unlink('cookie.txt'); unlink("Cookie"); sleep(1);
      $p = readline("Press ENTER to continue");
      if ($p == "ENTER") {
         return 0;
      }system('clear');
   } else {
      cetak(r2.mc."Cookie Expired, Update Your Cookie".d, 15000); print n;
      unlink('cookie.txt'); unlink("Cookie"); sleep(1);
      /*$p = readline("Press ENTER to continue");
      if ($p == "ENTER") {
         return 0;
      }system('clear');*/
   }
}
function l() {
   print p.str_repeat("─", 50).d.n;
}
function wc() {
   system('clear');
   print str_repeat(c."=", 50).n;
   print m.'   _____                            __'.n;
   print m.'  / ___/____ _____ ___  __  _____  / /'.n;
   print m.'  \__ \/ __ `/ __ `__ \/ / / / _ \/ / '.n;
   print p.' ___/ / /_/ / / / / / / /_/ /  __/ /  '.n;
   print p.'/____/\__,_/_/ /_/ /_/\__,_/\___/_/   '.n.n;
   print str_repeat(c."=", 50).n; info(scr);
   print pan1.p."Register: ".h.reg.n;
   print pan1.p."Captcha : ".h.tCap.n; l();
}
function ban() {
   $ap = json_decode(file_get_contents("http://ip-api.com/json"), 1);
   system('clear');
   if ($ap) {
      $tz = $ap["timezone"];
      date_default_timezone_set($tz);
      $hari = date('l'); $tanggal = date("d-M-Y"); $waktu = date("H:i");
      $panjang = 50-strlen($hari.$tanggal.$waktu); $spasi = floor($panjang/2);
      $lokasi = mp.$hari.str_repeat(" ", $spasi).$tanggal.str_repeat(" ", $spasi).$waktu;
      if ($panjang % 2 == 1) {
         $lokasi .= " ";
      }
      cetak($lokasi.n, 20000);
      cetak(pm.str_pad($ap['city'].", ".$ap['regionName'].", ".$ap['country'], 50, " ", STR_PAD_BOTH).d.n, 20000);
      cetak(b.str_repeat("=", 50), 2500); print n;
   } else {
      date_default_timezone_set("UTC"); return "UTC";
   }
   cetak(m.str_pad("   _____                            __", 50, " ", STR_PAD_BOTH).n, 15000);
   cetak(m.str_pad("  / ___/____ _____ ___  __  _____  / /", 50, " ", STR_PAD_BOTH).n, 15000);
   cetak(m.str_pad("  \__ \/ __ `/ __ `__ \/ / / / _ \/ / ", 50, " ", STR_PAD_BOTH).n, 15000);
   cetak(p.str_pad(" ___/ / /_/ / / / / / / /_/ /  __/ /  ", 50, " ", STR_PAD_BOTH).n, 15000);
   cetak(p.str_pad("/____/\__,_/_/ /_/ /_/\__,_/\___/_/   ", 50, " ", STR_PAD_BOTH).n, 15000);
   print b.str_repeat(o."─", 16).p." ❝ ".h."のスクリプト".p." ❞ ".str_repeat(o."─", 16).n;
   title(scr); print n;
   cetak(tb2."    \033[1;35mThanks To  :".n, 15000);
   cetak(mp.str_pad("| Reyhan H | kakatoji |", 50, " ", STR_PAD_BOTH).d.n, 15000);
   cetak(pm.str_pad("| IEWIL OFFICIAL | bintang catur |", 50, " ", STR_PAD_BOTH).d.n, 15000);
   cetak(b.str_repeat("═", 16).c."元のバージョン ".ver.b.str_repeat("═", 16).n.d, 2500);
   system("termux-open-url ".yt); sleep(3);
}
function title($string) {
  $acssi = ["a" => ["┌─┐","├─┤","┴ ┴"],"b" => ["┌┐ ","├┴┐","└─┘"],"c" => ["┌─┐","│  ","└─┘"],"d" => ["┌┬┐"," ││","─┴┘"],"e" => ["┌─┐","├┤ ","└─┘"],"f" => ["┌─┐","├┤ ","└  "],"g" => ["┌─┐","│ ┬","└─┘"],"h" => ["┬ ┬","├─┤","┴ ┴"],"i" => ["┬","│","┴"],"j" => [" ┬"," │","└┘"],"k" => ["┬┌─","├┴┐","┴ ┴"],"l" => ["┬  ","│  ","┴─┘"],"m" => ["┌┬┐","│││","┴ ┴"],"n" => ["┌┐┌","│││","┘└┘"],"o" => ["┌─┐","│ │","└─┘"],"p" => ["┌─┐","├─┘","┴  "],"q" => ["┌─┐ ","│─┼┐","└─┘└"],"r" => ["┬─┐","├┬┘","┴└─"],"s" => ["┌─┐","└─┐","└─┘"],"t" => ["┌┬┐"," │ "," ┴ "],"u" => ["┬ ┬","│ │","└─┘"],"v" => ["┬  ┬","└┐┌┘"," └┘ "],"w" => ["┬ ┬","│││","└┴┘"],"x" => ["─┐ ┬","┌┴┬┘","┴ └─"],"y" => ["┬ ┬","└┬┘"," ┴ "],"z" => ["┌─┐","┌─┘","└─┘"]," "=>[" "," "," "],"1" => ["┬","│","┴"],  "2" => ["┌─┐","┌─┘","└─┘"],  "3" => ["┌─┐"," ├┤","└─┘"],"4" => ["┬ ┬","└─┤","  ┘"],"5" => ["┌─┐","└─┐","└─┘"],"6" => ["┌─┐","├─┐","└─┘"],"7" => ["┌─┐","  │","  ┘"],"8" => ["┌─┐","├─┤","└─┘"],"9" => ["┌─┐","└─┤","└─┘"],"0" => ["┌─┐","│ │","└─┘"]];

  $x = str_split($string); #print " ";
  foreach ($x as $data) {
    cetak(o.$acssi[$data][0], 2000);
  }
  cetak(" オンライン".n, 2000); #print " ";
  foreach ($x as $data) {
    cetak(o2k.$acssi[$data][1], 2000);
  }
  cetak(" クリエーター".bgb.p."Samuel".n, 2000); #print " ";
  foreach ($x as $data) {
    cetak(k2o.$acssi[$data][2], 2000);
  }
  cetak(" チャンネル  ".bgb.p."@duniadownload-id".n, 2000);
}
function his($newdata, $data = 0) {
   if (!$data) {
      $data = [];
   }
   return array_merge($data, $newdata);
}
function akhir($bal = 0) {
   if ($bal) {
      return c." added to your account".d;
   }
   return c." sent to your FaucetPay".d;
}
function info($msg) {
   print (mp.str_pad(strtoupper($msg), 50, " ", STR_PAD_BOTH).d.n); l();
}
function cc() {
   status();
   pw:
   print str_repeat(p."—", 57).n;
   print tb2.p."         WARNING ⚠️ WARNING         ".n;
   print str_repeat(p."—", 57).n;
   print pan2.mc."THIS SCRIPT IS FREE, NOT FOR SALE".n;
   print pan2.mc."You might be got banned, Do with your own RISK".n;
   print str_repeat(p."—", 57).n;

   $d = date("D");
   switch ($d) {
      case "Tue":
         $r = file_get_contents('https://pastebin.com/raw/UkgYPfKq');
         $link = explode('#', explode('Link: ', $r)[1])[0];
         $pw = explode(' #', explode('Pass: ', $r)[1])[0];
         $pwd = $pw;
         $read = file_get_contents("key.txt");
         sleep(1);
         if ($link == "") {
            print mc." Connection Lost, Please Check Your Connection\n"; exit;
         }
         if ($read == $pwd) {
            slow(r2.pan1.kcerah."Verifying Password!");
            sleep(2); z("Password Correct!", d);
            system("clear");
         } elseif ($read != $pwd) {
            $save = fopen("key.txt", "w");
            print pan.p."Link Password  : ".h.$link.n;
            print pan.p."Input Password : \033[1;32m";
            $p = trim(fgets(STDIN));
            if ($p == "") {
               print n.pan.mc."Input Password First!".n;
               sleep(2); system("clear"); goto pw;
            }
            print r."\n \033[1;97mChecking Password \033[1;31m▪\r";
            sleep(1);
            print r." \033[1;97mChecking Password \033[1;31m▪ \033[1;31m▪\r";
            sleep(1);
            print r." \033[1;97mChecking Password \033[1;31m▪ \033[1;31m▪ \033[1;31m▪ \r"; sleep(1);
            if ($pwd == $p) {
               fwrite($save, $p);
               z("Password Correct!", '     ');
               sleep(1); fclose($save);
               sleep(1); system("clear");
            } else {
               print x("Password Incorrect!", '     ');
               sleep(2); system("clear"); goto pw;
            }
         } break;
      case "Fri":
         $r = file_get_contents('https://pastebin.com/raw/rTR6vfiJ');
         $link = explode('#', explode('Link: ', $r)[1])[0];
         $pw = explode(' #', explode('Pass: ', $r)[1])[0];
         $pwd = $pw;
         $read = file_get_contents("key.txt");
         sleep(1);
         if ($link == "") {
            print mc." Connection Lost, Please Check Your Connection\n"; exit;
         }
         if ($read == $pwd) {
            slow(r2.pan1.kcerah."Verifying Password!");
            sleep(2); z("Password Correct!", d);
            system("clear");
         } elseif ($read != $pwd) {
            $save = fopen("key.txt", "w");
            print pan.p."Link Password  : ".h.$link.n;
            print pan.p."Input Password : \033[1;32m";
            $p = trim(fgets(STDIN));
            if ($p == "") {
               print n.pan.mc."Input Password First!".n;
               sleep(2); system("clear"); goto pw;
            }
            print r."\n \033[1;97mChecking Password \033[1;31m▪\r";
            sleep(1);
            print r." \033[1;97mChecking Password \033[1;31m▪ \033[1;31m▪\r";
            sleep(1);
            print r." \033[1;97mChecking Password \033[1;31m▪ \033[1;31m▪ \033[1;31m▪ \r"; sleep(1);
            if ($pwd == $p) {
               fwrite($save, $p);
               z("Password Correct!", '     ');
               sleep(1); fclose($save);
               sleep(1); system("clear");
            } else {
               print x("Password Incorrect!", '     ');
               sleep(2); system("clear"); goto pw;
            }
         } break;
      default:
         $r = file_get_contents('https://pastebin.com/raw/MusNk9Gm');
         $link = explode('#', explode('Link: ', $r)[1])[0];
         $pw = explode(' #', explode('Pass: ', $r)[1])[0];
         $pwd = $pw;
         $read = file_get_contents("key.txt");
         sleep(1);
         if ($link == "") {
            print mc." Connection Lost, Please Check Your Connection\n"; exit;
         }
         if ($read == $pwd) {
            slow(r2.pan1.kcerah."Verifying Password!");
            sleep(2); z("Password Correct!", d);
            system("clear");
         } elseif ($read != $pwd) {
            $save = fopen("key.txt", "w");
            print pan.p."Link Password  : ".h.$link.n;
            print pan.p."Input Password : \033[1;32m";
            $p = trim(fgets(STDIN));
            if ($p == "") {
               print n.pan.mc."Input Password First!".n;
               sleep(2); system("clear"); goto pw;
            }
            print r."\n \033[1;97mChecking Password \033[1;31m▪\r";
            sleep(1);
            print r." \033[1;97mChecking Password \033[1;31m▪ \033[1;31m▪\r";
            sleep(1);
            print r." \033[1;97mChecking Password \033[1;31m▪ \033[1;31m▪ \033[1;31m▪ \r";
            sleep(1);
            if ($pwd == $p) {
               fwrite($save, $p);
               z("Password Correct!", '     ');
               sleep(1); fclose($save);
               sleep(1); system("clear");
            } else {
               print x("Password Incorrect!", '     ');
               sleep(2); system("clear"); goto pw;
            }
         } break;
   }
}
function cfw($source) {
   (preg_match('/Logout/', $source))? $data['out'] = true:$data['out'] = false;
   (preg_match('/Just a moment.../', $source))? $data['cf'] = true:$data['cf'] = false;
   (preg_match('/Firewall/', $source))? $data['fw'] = true:$data['fw'] = false;

   $csrf = explode('"', explode('name="csrf_token_name" id="token" value="', $source)[1])[0];
   $tk = explode('"', explode('name="token" value="', $source)[1])[0];
   $rv2 = explode('"', explode('class="g-recaptcha" data-sitekey="', $source)[1])[0];
   $ts = explode('"', explode('class="cf-turnstile" data-sitekey="', $source)[1])[0];
   $hc = explode('"', explode('class="h-captcha" data-sitekey="', $source)[1])[0];
   if ($csrf) {
      $data['csrf'] = $csrf;
   }
   if ($tk) {
      $data['tk'] = $tk;
   }
   if ($rv2) {
      $data['rv2'] = $rv2;
   }
   if ($ts) {
      $data['ts'] = $ts;
   }
   if ($hc) {
      $data['hc'] = $hc;
   }
   return $data;
}

#Api
function CheckApi() {
   print pan2.p."Register".sd.h.provider_ref.n;
   l();
   $apikey = save(provider_api."_Apikey", 1);
   if (provider_api == "Xevil") {
      $api = New ApiXevil($apikey);
   }
   if (provider_api == "Multibot") {
      $api = New ApiMultibot($apikey);
   }
}
function MenuApi() {
   wc();
   menu(1, "Xevil");
   menu(2, "Multibot");l();
   $pil = readline(input("Provider Apikey"));
   if ($pil == 1) {
      define("provider_api", "Xevil");
      define("provider_ref", "t.me/Xevil_check_bot?start=2124530010");
      $apikey = CheckApi();
   } elseif ($pil == 2) {
      define("provider_api", "Multibot");
      define("provider_ref", "https://multibot.in/");
      $apikey = CheckApi();
   } else {
      exit(x("Choose between those number stupid XD", ''));
   }
   return $apikey;
}
function ApiShortlink() {
   if (!file_exists("../Tertuyul_Apikey")) {
      print pan2.p."Register".sd.h."https://tertuyul.my.id/apikey/".n; l();
   }
   return save("Tertuyul_Apikey", 1);
}
function bal($api, $dot = 0) {
   if ($dot) {
      return slow(cb.p.t("Apikey_Bal", k."𓊈𒆜 ".h.$api->getBalance().k." 𒆜𓊉", 1));
   }
   return slow(cb.p.t("Api_Bal", k."𓊈𒆜 ".h.$api->getBalance().k." 𒆜𓊉".d));
}
Class RequestApi {
   function in_api($content, $method, $header = 0) {
      $param = "key=".$this->apikey."&json=1&".$content;
      if ($method == "GET")return json_decode(file_get_contents($this->host.'/in.php?'.$param), 1);
      $opts['http']['method'] = $method;
      if ($header) $opts['http']['header'] = $header;
      $opts['http']['content'] = $param;
      return json_decode(file_get_contents($this->host.'/in.php', false, stream_context_create($opts)), 1);
   }
   function res_api($api_id) {
      $params = "?key=".$this->apikey."&action=get&id=".$api_id."&json=1";
      return json_decode(file_get_contents($this->host."/res.php".$params), 1);
   }
   function getBalance() {
      $res = json_decode(file_get_contents($this->host."/res.php?action=userinfo&key=".$this->apikey), 1);
      return $res["balance"];
   }
   function getResult($data, $method, $header = 0) {
      $get_in = $this->in_api($data, $method, $header);
      if (!$get_in["status"]) {
         print r.p."[".m."!".p."] ".o.t(provider_api, mc.$get_in["request"].n);
         return 0;
      }
      while (true) {
         $get_res = $this->res_api($get_in["request"]);
         print r.k."Bypassing."; usleep(300000);
         print r.k."Bypassing.."; usleep(300000);
         if ($get_res["request"] == "CAPCHA_NOT_READY") {
            print r.k."Bypassing...";
            sleep(1); continue;
         }
         if ($get_res["status"]) {
            print r.h."Bypassing..."; usleep(500000);
            return $get_res["request"];
         }
         print r.p."[".m."!".p."] ".o.t(provider_api, mc.$get_res["request"].n);
         sleep(5); return 0;
      }
   }
}
Class ApiMultibot extends RequestApi {
   function __construct($apikey) {
      $this->host = "http://api.multibot.in";
      $this->provider = "multibot";
      $this->apikey = save('Multibot_Apikey', 1);
   }
   function RecaptchaV2($sitekey, $pageurl) {
      $data = http_build_query([
         "method" => "userrecaptcha",
         "sitekey" => $sitekey,
         "pageurl" => $pageurl
      ]);
      return $this->getResult($data, "GET");
   }
   function Hcaptcha($sitekey, $pageurl) {
      $data = http_build_query([
         "method" => "hcaptcha",
         "sitekey" => $sitekey,
         "pageurl" => $pageurl
      ]);
      return $this->getResult($data, "GET");
   }
   function Turnstile($sitekey, $pageurl) {
      $data = http_build_query([
         "method" => "turnstile",
         "sitekey" => $sitekey,
         "pageurl" => $pageurl
      ]);
      return $this->getResult($data, "GET");
   }
   function Authkong($sitekey, $pageurl) {
      $data = http_build_query([
         "method" => "authkong",
         "sitekey" => $sitekey,
         "pageurl" => $pageurl
      ]);
      return $this->getResult($data, "GET");
   }
   function Ocr($img) {
      $data = http_build_query([
         "method" => "universal",
         "body" => $img
      ]);
      return $this->getResult($data, "POST");
   }
   function Upsidedown($img) {
      $data = http_build_query([
         "method" => "upside",
         "body" => $img
      ]);
      return $this->getResult($data, "POST");
   }
   function RsCap($img) {
      $data = http_build_query([
         "method" => "rscaptcha",
         "body" => $img
      ]);
      return $this->getResult($data, "POST");
   }
   function AntiBot($source) {
      $main = explode('"', explode('src="', explode('Bot links', $source)[1])[1])[0];
      if (!$main)return 0;
      $data["method"] = "antibot";
      $data["main"] = $main;
      $src = explode('rel=\"', $source);
      foreach ($src as $x => $sour) {
         if ($x == 0)continue;
         $no = explode('\"', $sour)[0];
         $img = explode('\"', explode('src=\"', $sour)[1])[0];
         $data[$no] = $img;
      }
      $data = http_build_query($data);
      //print_r($data);
      $ua = "Content-type: application/x-www-form-urlencoded";
      $res = $this->getResult($data, "POST", $ua);
      return "+".str_replace(",", "+", $res);
   }
}
Class ApiXevil extends RequestApi {
   function __construct($apikey) {
      #$apikey = save('Xevil_Apikey', 1);
      $this->host = "https://sctg.xyz";
      $this->apikey = $apikey."|SOFTID2124530010";
      $this->apikey = save('Xevil_Apikey', 1)."|SOFTID2124530010";
   }
   function RecaptchaV2($sitekey, $pageurl) {
      $data = http_build_query([
         "method" => "userrecaptcha",
         "sitekey" => $sitekey,
         "pageurl" => $pageurl
      ]);
      return $this->getResult($data, "GET");
   }
   function Hcaptcha($sitekey, $pageurl) {
      $data = http_build_query([
         "method" => "hcaptcha",
         "sitekey" => $sitekey,
         "pageurl" => $pageurl
      ]);
      return $this->getResult($data, "GET");
   }
   function Turnstile($sitekey, $pageurl) {
      $data = http_build_query([
         "method" => "turnstile",
         "sitekey" => $sitekey,
         "pageurl" => $pageurl
      ]);
      return $this->getResult($data, "GET");
   }
   function Authkong($sitekey, $pageurl) {
      $data = http_build_query([
         "method" => "authkong",
         "sitekey" => $sitekey,
         "pageurl" => $pageurl
      ]);
      return $this->getResult($data, "GET");
   }
   function Ocr($img) {
      $data = "method=base64&body=".$img;
      return $this->getResult($data, "POST");
   }
   function AntiBot($source) {
      $main = explode('"', explode('data:image/png;base64,', explode('Bot links', $source)[1])[1])[0];
      if (!$main)return 0;
      $data = "key=".$this->apikey."&json=1&method=antibot&main=$main";
      $src = explode('rel=\"', $source);
      foreach ($src as $x => $sour) {
         if ($x == 0)continue;
         $no = explode('\"', $sour)[0];
         $img = explode('\"', explode('data:image/png;base64,', $sour)[1])[0];
         $data .= "&$no=$img";
      }
      $res = $this->getResult($data, "POST");
      if ($res)return "+".str_replace(",", "+", $res);
      return 0;
   }
   function Teaserfast($main, $small) {
      $data = http_build_query([
         "method" => "teaserfast",
         "main_photo" => $main,
         "task" => $small
      ]);
      return $this->getResult($data, "GET");
   }
}
Class Shortlinks{
   public $apikey;
   function __construct($apikey) {
      $this->host = "https://tertuyul.my.id/apikey/";
      $this->apikey = $apikey;
   }
   function check($nama) {
      $check = strtolower($nama);
      print r.k."--[".p."?".k."] ".o."Checking "."$check";
      ##Not supported
      #Need recheck
      $supported = [
      ##   "earnow" => "earnow",
         "clks" => "clks",
         #"clkspro" => "clkspro",
         #"clk pro" => "clk pro",
         #"clks pro" => "clks pro",
      ##   "rsshort" => "rsshort",
         "shortano" => "shortano",
         "shortino" => "shortino",
      ##   "rsfly" => "rsfly",
         "revcut" => "revcut",
         "chainfo" => "chainfo",
         "linksflame" => "linksflame",
         "try2link" => "try2link",
         "trylink" => "trylink",
         "linkpay" => "linkpay",
         "pay.inc" => "pay.inc",
      ##   "cuty" => "cuty",
         #"cbshort" => "cbshort",
         "ouo" => "ouo",
         "mgnet" => "mgnet",
      ##   "fc.lc" => "fclc",
      ##   "fclc" => "fclc",
         #"cut-urls" => "cuturl",
         "1bitspace" => "1bitspace",
         "clksh" => "clksh",
         "clk.sh" => "clk.sh",
         "dutchycorp2" => "dutchycorp2",
         "cutsme" => "cutsme",
         
         "linksfly" => "fly",
         "linksfly.me" => "fly",
         "shortsfly" => "fly",
         "shortsfly.me" => "fly",
         "urlsfly" => "fly",
         "urlsfly.me" => "fly",
         "wefly" => "fly",
         "wefly.me" => "fly",
         "clicksfly" => "fly",
         "clicksflyme" => "fly",
         "clicksfly.me" => "fly"
         #"shortino.link" => "shortino" #Support
         /*		"adlink.click" => "adlink",
			"easycut.io" => "easycut",
	#		
			"shrinkearn.com" => "shrinkearn",
			"clicksfly.com" => "fly.com",
			"shortox.com" => "shortox",
			"exe.io" => "exe",
			"linksly.co" => "linksly",
	#		"owllink.net" => "owllink",
	#		"birdurls.com" => "birdurls",
	#		"illink.net" => "illink",
	#		"insfly.pw" => "insfly",
			"cutlink.xyz" => "cutlink",
			"revcut.net" => "revcut",
			"bitad.org" => "bitad",
			"urlcut.pro" => "urlcut",
			"kyshort.xyz" => "kyshort",
			"linkrex.net" => "linkrex",
			"wez.info" => "wez",
			"megaurl.in" => "megaurl",
			"megafly.in" => "megafly",
			"usalink.io" => "usalink",
			"cashurl.win" => "cashurl",
	#		"shorti.io" => "shorti",
	#		"shrinkme.link" => "shrinkme",
	#		"inlinks.online" => "inlinks",
	#		"bitss.sbs" => "bitss",
			"linkjust.com" => "linkjust",
			"ex-foary.com" => "exfoary"*/
         // 			"linksly" => "linksly",
         // 			"adcorto" => "adcorto",
         // 			"c2g" => "C2G",
         // 			"c2g link" => "C2G",
         // 			"shrinkme" => "ShrinkMe",
         // 			"shrinkearn" => "ShrkEarn",
         // 			"urlhives" => "UrlHives",
         // 			"linkhives" =>"LinkHives",
         // 			"shortsme" => "shortsme",
         // 			"adlink" => "adlink",
         // 			"revcut" => "revcut",
         // 			"cutlink" => "cutlink",
         // 			"ez4short" => "ez4short"
      ];
      sleep(1);
      $filter = $supported[$check];
      if ($filter) {
         print r.centang.h."Support to bypass";
         sleep(1); print r;
         return ["status" => 1,
            "shortlink_name" => $filter];
      } else {
         print x("Doesn't support to bypass", d);
         sleep(1); print r;
         return ["status" => 0,
            "message" => "not supported shortlink"];
      }
   }
   function Bypass($name, $shortlink) {
     while(1){
      $post_link = json_encode([
         'method' => 'result_link',
         'apikey' => $this->apikey, #save("Tertuyul_Apikey"),
         'url' => $shortlink
      ]);
      $r = json_decode(curltu($this->host, $post_link), 1);
      if ($r['url']) {
         return $r;
      } elseif ($r['fail']) {
         print x($r['fail'], n); l();
         sleep(2); break;
      } elseif ($r['msg']) {
         #print "Ini msg".n;
         print x($r['msg'], n); l();
         sleep(2); break;
      } elseif ($r['error']) {
         #print "Ini error".n;
         print x($r['error'], n); l();
         break; // error from server, prevent your balance from being problematic
      } else {
         print x("No respon from error", n); sleep(5); break;
      }
     }
   }
}
?>
