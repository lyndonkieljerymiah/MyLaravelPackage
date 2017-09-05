<?php


namespace Supports\Traits;

use MyPackage\Supports\FileManager;


trait ImageStore
{
    private function storeImages($config = array(), $medias = array()) {

        $fileManager = FileManager::getInstance();
        $fileManager->settings($config);
        $retValue = [];

        if(sizeof($medias) > 0)
        {
            foreach ($medias as $key => $media) {
                $galleries = array();

                foreach($media as $file) {
                    $rules = ['file' => 'required|mimes:png,gif,jpeg']; //image only;
                    $validator = \Validator::make(array('file' => $file),$rules);
                    if($validator->passes()) {
                        $fileManager->singleStore($file);
                    }
                    //save rule
                    $galleries[] = array(
                        'filename'    =>  $fileManager->getFileName(),
                        'mime_type'     =>  $file->getClientMimeType(),
                        'folder_name'   =>  $config['path'],
                        'doc_type'      =>  'img',
                        'description'   =>  '',
                        'categories'    =>  isset($config['categories']) ? $config['categories'] : '',
                        'source'        =>  'local');
                }
                $retValue[$key] = $galleries;
            }
        }

        return $retValue;
    }
}