<?
define("DBPersistent", true);
$DBType = "mysql";
$DBHost = "localhost";
$DBLogin = "electromontazh";
$DBPassword = "Dks.94EdUt.rQP";
$DBName = "electromontazh";
$DBDebug = false;
$DBDebugToFile = false;
define("MYSQL_TABLE_TYPE", "INNODB");

@set_time_limit(60);

// comment 123123
// comment 123123123123фва
#define("BX_CACHE_TYPE", "memcache");
#define("BX_CACHE_SID", $_SERVER["DOCUMENT_ROOT"]."#01");
#define("BX_MEMCACHE_HOST", "192.168.0.241");
#define("BX_MEMCACHE_PORT", "11211");

<<<<<<< HEAD
//asdfasdfasdf
=======
//asdfasdf
>>>>>>> testmy

define("DELAY_DB_CONNECT", true);
define("CACHED_b_file", 3600);
define("CACHED_b_file_bucket_size", 10);
define("CACHED_b_lang", 3600);
define("CACHED_b_option", 3600);
define("CACHED_b_lang_domain", 3600);
define("CACHED_b_site_template", 3600);
define("CACHED_b_event", 3600);
define("CACHED_b_agent", 3660);
define("CACHED_menu", 3600);

define("BX_UTF", true);
define("BX_FILE_PERMISSIONS", 0664);
define("BX_DIR_PERMISSIONS", 0775);
@umask(~BX_DIR_PERMISSIONS);
define("BX_DISABLE_INDEX_PAGE", true);


unset($_SERVER["PHP_AUTH_PW"]);

if(strlen($_SERVER["HTTP_X_FORWARDED_FOR"])>0 && $_SERVER["REMOTE_ADDR"]=="127.0.0.1")
{
	if($p = strrpos($_SERVER["HTTP_X_FORWARDED_FOR"], ","))
	{
		$_SERVER["REMOTE_ADDR"] = trim(substr($_SERVER["HTTP_X_FORWARDED_FOR"], $p+1));
		$_SERVER["HTTP_X_FORWARDED_FOR"] = substr($_SERVER["HTTP_X_FORWARDED_FOR"], 0, $p);
	}
	else
		$_SERVER["REMOTE_ADDR"]=$_SERVER["HTTP_X_FORWARDED_FOR"];
}
?>