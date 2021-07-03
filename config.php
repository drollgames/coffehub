$iporigem = $_SERVER['REMOTE_ADDR'];

if ($iporigem != '127.0.0.1' && $iporigem != '200.223.93.219') {
	echo "Acesso restrito";
	break;
}
