<?php


namespace App\HttpController;


use EasySwoole\Http\AbstractInterface\Controller;

class Index extends Controller
{

    public function index()
    {
        $this->writeJson(200,["version"=> "1.0", "time"=> time()]);
    }

    protected function actionNotFound(?string $action)
    {
        $this->writeJson(404, null ,"Action is not found");
    }
}