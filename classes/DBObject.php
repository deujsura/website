<?php
class DBObject {
	protected $conn_id = null;
	protected $host_name = null;
	protected $db_user = null;
	protected $db_name = null;
	protected $db_passwd = null;
	
	abstract function db_connect(){};
	abstract function db_disconnect(){};
}
?>