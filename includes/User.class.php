<?php
require_once( INCLUDE_PATH . '/init.php' );


class User extends Sql {

    protected static $table_name="users";
    protected $data = [];
    public $id;
	public $username;
	public $password;
	public $first_name;
	public $last_name;

    public function full_name()
    {
        if(isset($this->first_name) && isset($this->last_name)) {
            return $this->first_name . " " . $this->last_name;
        } else {
            return "";
        }
    }

    public static function authenticate($username="", $password="")
    {
        global $db;
        $username = sanitize_string($username);
        $password = sanitize_string($password);

        $sql = "SELECT * FROM users ";
        $sql .= "WHERE username = '{$username}' ";
        $sql .= "AND password = '{$password}' ";
        $sql .= "LIMIT 1";
        $result_array = self::find_by_sql($sql);
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    // public function __set($name, $value)
    // {
    //     $this->data[$name] = $value;
    // }
    //
    // public function __get($name)
    // {
    //     if (isset($this->data[$name])) {
    //         return $this->data[$name];
    //     } else {
    //         return false;
    //     }
    // }


}

 ?>
