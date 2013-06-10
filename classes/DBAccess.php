<?
require("./DBObject.php");

class DBAccess extends DBObject {
	
public __construct($hostname,$user,$passwd,$dbname){
	self::$host_name = $hostname;
	self::$user_name = $user;
	self::$db_passwd = $passwd;
	self::$db_name = $dbname;	
}

public db_connec(){ 
		$conn_id = mysql_connect($hostname, $db_user, $db_passwd);
		if (!$conn_id){
			return null;
		}
		echo "database connected"
		return $conn_id;
}

}
?>