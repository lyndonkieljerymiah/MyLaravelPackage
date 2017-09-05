<?php

namespace Supports\Traits;

trait DeserializeImageTrait
{

    public function setMetaValue(&$meta,$values,$unserializeable = false) {

        if($unserializeable) {
            $meta = $values;
        }
        else {
            $meta = serialize($values);
        }
    }
    
    public function getMetaValue(&$value,$unserializeable = false) {

        if(!empty($value)) {
            if($unserializeable) {
                $meta_galleries = [$value];
            }
            else {
                $meta_galleries = unserialize($value);
            }
            return $meta_galleries;
        }
        return null;
    }

    public function getMediaFiles(Array $mediaIds = array()) 
    {
        return array();
    }