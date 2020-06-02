<?php


namespace App\HttpController;


use EasySwoole\Http\AbstractInterface\Controller;

class Base extends Controller
{

    public function index()
    {

    }

    public function actionNotFound(?string $action)
    {
        $this->response()->withStatus(404);
        $file = EASYSWOOLE_ROOT.'/vendor/easyswoole/easyswoole/src/Resource/Http/404.html';
        if(!is_file($file)){
            $file = EASYSWOOLE_ROOT.'/src/Resource/Http/404.html';
        }
        $this->response()->write(file_get_contents($file));
    }

    /**
     * 拦截器，可以做权限限制 ,true ：不做验证
     */
    public function onRequest(?string $action): ?bool
    {
//        $this->writeJson(400,"success",111);
        return true;
    }

    /**
     * 请求异常处理
     */
    public function onException(\Throwable $throwable): void
    {
        $this->writeJson(400,"请求不合法");
    }

}
