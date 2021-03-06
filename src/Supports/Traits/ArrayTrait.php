<?php

namespace Supports\Traits;


trait ArrayTrait
{
    public function array_group_by(&$array,$keys) {


        //check if exist in array keys
        foreach ($keys as $key) {
            $is_exist = array_key_exists($key,$array);
            if(!$is_exist) {
                return false;
            }
        }

    }

    public function arrayItemize(&$collection,$callback,$group = array()) {

        $items = [];
        $array = $collection->get();
        foreach($array as $key => $row) {
            $item = $callback($row);
            if(!empty($group)) {
                foreach ($group as $key => $value) {
                    if(!isset($items[$row->$value])) {
                        $items[$row->$value] = [$item];
                    }
                    else {
                        array_push($items[$row->$value],$item);
                    }
                }
            }
            else {
                array_push($items,$item);
            }

        }

        return $items;
    }
}
