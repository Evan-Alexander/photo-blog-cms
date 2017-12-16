<?php
require_once(INCLUDE_PATH . '/init.php');

class Sql{
    protected static $table_name="users";

    public static function find_all()
    {
        return self::find_by_sql("SELECT * FROM ".static::$table_name);
    }

    public static function find_by_id($id=0)
    {
        $result_array = static::find_by_sql("SELECT * FROM ". static::$table_name ." WHERE id={$id} LIMIT 1");
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public static function find_by_sql($sql="")
    {
        global $db;
        $results = $db->query($sql);
        $returned_items = $results->fetchAll();
        $object_array = [];
        foreach($returned_items as $item ) {
            $object_array[] = static::instantiate($item);
        }
        return $object_array;
    }

    private static function instantiate($record)
    {
        $object = new static;

        foreach($record as $attribute=>$value){
            if($object->has_attribute($attribute)) {
                $object->$attribute = $value;
            }
        }
        return $object;
    }

    private function has_attribute($attribute) {
        // get_object_vars returns assoc array with all attributes
        // as the keys and their current values as the value
        $object_vars = get_object_vars($this);
        // See if object vars exist - returns true or false
        return array_key_exists($attribute, $object_vars);
    }
}
