<?php 

namespace Supports\Traits;

trait PaginationTrait {

    public function createOutput(&$model,$data,$params = array())
    {
        if(sizeof($params) > 0) {
            $model->appends($params);
        }
        
        return [
            'current_page' => $model->currentPage(),
            'data' => $data,
            'last_page'     =>  $model->url($model->lastPage()),
            'first_page'    =>  $model->url(1),
            'has_pages'     =>  $model->hasMorePages(),
            'previous_page' =>  $model->previousPageUrl(),
            'next_page'     =>  $model->nextPageUrl(),
            'has_more_pages' =>  $model->hasMorePages(),
            'current_url'   =>  ''
        ];
    }

    public function createPagination(&$model, $callback = null, $params = array(), $pageCount = 20) {

        $data = $model->paginate($pageCount);

        $items = [];
        foreach ($data as $key => $row) {
            if($callback == null) {
                $item = $row;
            }
            else {
                $item = $callback($row);
            }
            array_push($items, $item);
        }

        return $this->createOutput($data,$items,$params);

    }
}