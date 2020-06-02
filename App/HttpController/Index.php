<?php


namespace App\HttpController;

use App\HttpController\Base;

class Index extends Base
{

    public function index()
    {
        $data = array(
            'id'=>1,
            'name'=>'jack',
            'params'=>$this->request()->getRequestParam(),
        );
        return $this->writeJson(200,"success",$data);
    }
}
