<?php 


namespace Supports\Traits;

trait StringTrait
{
    public function formatUnderscore($value) {

        $underscore_pos = strpos("$value","_");
        if($underscore_pos) {
            $values = explode("_",$value);
            return ucfirst($values[0]) . " " . ucfirst($values[1]);
        }

        return $value;
    }

    public function cleanName($title) {
        
        $text = strtolower(htmlentities($title));
        $text = str_replace(get_html_translation_table(),'-',$text);
        $text = str_replace(" ", "-", $text);
        $text = preg_replace("/[-]+/i", "-", $text);

        return $text;
    }

}