<?php
//------------Start-------------//
header("cache-control:no-cache,must-revalidate");//No-Cache
header("Content-Type:text/html;charset=UTF-8");//UTF-8
//-------------通用-------------//
$Config1 = $_GET['Config1'];//配置
$Config2 = $_GET['Config2'];//配置
$Config3 = $_GET['Config3'];//配置
$Config4 = $_GET['Config4'];//配置
$Config5 = $_GET['Config5'];//配置
$Config6 = $_GET['Config6'];//配置
$Config7 = $_GET['Config7'];//配置
$Config8 = $_GET['Config8'];//配置
$Config9 = $_GET['Config9'];//配置
$Config0 = $_GET['Config0'];//配置
$NAME = "UPlus";            //名称
//-------------文件-------------//
$DefaultFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Default.txt";
$DefaultFile  = $DefaultFile . '?Cache='.time();
$Default = fopen($DefaultFile,"r");
$ProxyFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Proxy.txt";
$ProxyFile  = $ProxyFile . '?Cache='.time();
$Proxy = fopen($ProxyFile,"r");
$GFWListFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/GFWList.txt";
$GFWListFile  = $GFWListFile . '?Cache='.time();
$GFWList = fopen($GFWListFile,"r");
$DIRECTFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/DIRECT.txt";
$DIRECTFile  = $DIRECTFile . '?Cache='.time();
$DIRECT = fopen($DIRECTFile,"r");
$REJECTFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/REJECT.txt";
$REJECTFile  = $REJECTFile . '?Cache='.time();
$REJECT = fopen($REJECTFile,"r");
$KEYWORDFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/KEYWORD.txt";
$KEYWORDFile  = $KEYWORDFile . '?Cache='.time();
$KEYWORD = fopen($KEYWORDFile,"r");
$IPCIDRFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/IPCIDR.txt";
$IPCIDRFile  = $IPCIDRFile . '?Cache='.time();
$IPCIDR = fopen($IPCIDRFile,"r");
//-------------下载-------------//
$File = "A.BIG.T.conf";//下载文件名称
header("cache-control:no-cache,must-revalidate");//No-Cache
header('Content-type: application/octet-stream; charset=utf8');//下载动作
header("Accept-Ranges: bytes");
header('Content-Disposition: attachment; filename='.$File);//名称
//--------------配置------------//
echo "[General]\r\n";
echo "skip-proxy = 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, localhost, *.local\r\n";
echo "bypass-tun = 0.0.0.0/8, 1.0.0.0/9, 1.160.0.0/11, 1.192.0.0/11, 10.0.0.0/8, 14.0.0.0/11, 14.96.0.0/11, 14.128.0.0/11, 14.192.0.0/11, 27.0.0.0/10, 27.96.0.0/11, 27.128.0.0/9, 36.0.0.0/10, 36.96.0.0/11, 36.128.0.0/9, 39.0.0.0/11, 39.64.0.0/10, 39.128.0.0/10, 42.0.0.0/8, 43.224.0.0/11, 45.64.0.0/10, 47.64.0.0/10, 49.0.0.0/9, 49.128.0.0/11, 49.192.0.0/10, 54.192.0.0/11, 58.0.0.0/9, 58.128.0.0/11, 58.192.0.0/10, 59.32.0.0/11, 59.64.0.0/10, 59.128.0.0/9, 60.0.0.0/10, 60.160.0.0/11, 60.192.0.0/10, 61.0.0.0/10, 61.64.0.0/11, 61.128.0.0/10, 61.224.0.0/11, 100.64.0.0/10, 101.0.0.0/9, 101.128.0.0/11, 101.192.0.0/10, 103.0.0.0/10, 103.192.0.0/10, 106.0.0.0/9, 106.224.0.0/11, 110.0.0.0/7, 112.0.0.0/9, 112.128.0.0/11, 112.192.0.0/10, 113.0.0.0/9, 113.128.0.0/11, 113.192.0.0/10, 114.0.0.0/9, 114.128.0.0/11, 114.192.0.0/10, 115.0.0.0/8, 116.0.0.0/8, 117.0.0.0/9, 117.128.0.0/10, 118.0.0.0/11, 118.64.0.0/10, 118.128.0.0/9, 119.0.0.0/9, 119.128.0.0/10, 119.224.0.0/11, 120.0.0.0/10, 120.64.0.0/11, 120.128.0.0/11, 120.192.0.0/10, 121.0.0.0/9, 121.192.0.0/10, 122.0.0.0/7, 124.0.0.0/8, 125.0.0.0/9, 125.160.0.0/11, 125.192.0.0/10, 127.0.0.0/8, 139.0.0.0/11, 139.128.0.0/9, 140.64.0.0/11, 140.128.0.0/11, 140.192.0.0/10, 144.0.0.0/10, 144.96.0.0/11, 144.224.0.0/11, 150.0.0.0/11, 150.96.0.0/11, 150.128.0.0/11, 150.192.0.0/10, 152.96.0.0/11, 153.0.0.0/10, 153.96.0.0/11, 157.0.0.0/10, 157.96.0.0/11, 157.128.0.0/11, 157.224.0.0/11, 159.224.0.0/11, 161.192.0.0/11, 162.96.0.0/11, 163.0.0.0/10, 163.96.0.0/11, 163.128.0.0/10, 163.192.0.0/11, 166.96.0.0/11, 167.128.0.0/10, 167.192.0.0/11, 168.160.0.0/11, 169.254.0.0/16, 171.0.0.0/9, 171.192.0.0/11, 172.16.0.0/12, 175.0.0.0/9, 175.128.0.0/10, 180.64.0.0/10, 180.128.0.0/9, 182.0.0.0/8, 183.0.0.0/10, 183.64.0.0/11, 183.128.0.0/9, 192.0.0.0/24, 192.0.2.0/24, 192.88.99.0/24, 192.96.0.0/11, 192.160.0.0/11, 198.18.0.0/15, 198.51.100.0/24, 202.0.0.0/9, 202.128.0.0/10, 202.192.0.0/11, 203.0.0.0/9, 203.128.0.0/10, 203.192.0.0/11, 210.0.0.0/10, 210.64.0.0/11, 210.160.0.0/11, 210.192.0.0/11, 211.64.0.0/10, 211.128.0.0/10, 218.0.0.0/9, 218.160.0.0/11, 218.192.0.0/10, 219.64.0.0/11, 219.128.0.0/11, 219.192.0.0/10, 220.96.0.0/11, 220.128.0.0/9, 221.0.0.0/11, 221.96.0.0/11, 221.128.0.0/9, 222.0.0.0/8, 223.0.0.0/11, 223.64.0.0/10, 223.128.0.0/9\r\n";
echo "dns-server = 8.8.8.8, 8.8.4.4\r\n";
echo "loglevel = notify\r\n";
echo "#  \r\n";
echo "# A.BIG.T Config File [$NAME]\r\n";
echo "# Last Modified: " . date("Y/m/d") . "\r\n";
echo "# \r\n";
echo "[Proxy]\r\n";
echo "$Config1\r\n";
echo "$Config2\r\n";
echo "$Config3\r\n";
echo "$Config4\r\n";
echo "$Config5\r\n";
echo "$Config6\r\n";
echo "$Config7\r\n";
echo "$Config8\r\n";
echo "$Config9\r\n";
echo "$Config0\r\n";
//--------------输出------------//
//Default
echo "[Rule]";
echo"\r\n# Default\r\n";
while(!feof($Default))
{
echo fgets($Default)."";
}
{
fclose($Default);
}
//Proxy
echo"\r\n# Proxy\r\n";
while(!feof($Proxy))
{
echo fgets($Proxy)."";
}
{
fclose($Proxy);
}
//GFWList
echo"\r\n# GFWList\r\n";
while(!feof($GFWList))
{
echo fgets($GFWList)."";
}
{
fclose($GFWList);
}
//DIRECT
echo"\r\n# DIRECT\r\n";
while(!feof($DIRECT))
{
echo fgets($DIRECT)."";
}
{
fclose($DIRECT);
}
//REJECT
echo"\r\n# REJECT\r\n";
while(!feof($REJECT))
{
echo fgets($REJECT)."";
}
{
fclose($REJECT);
}
//KEYWORD
echo"\r\n# KEYWORD\r\n";
while(!feof($KEYWORD))
{
echo "DOMAIN-KEYWORD,";
echo fgets($KEYWORD)."";
}
{
fclose($KEYWORD);
}
//IPCIDR
echo"\r\n# IPCIDR\r\n";
while(!feof($IPCIDR))
{
echo "IP-CIDR,";
echo fgets($IPCIDR)."";
}
{
fclose($IPCIDR);
}
//Other
echo"\r\n# Other\r\n";
echo"GEOIP,CN,DIRECT\r\n";
echo"FINAL,Proxy";
exit();
//--------------END------------//