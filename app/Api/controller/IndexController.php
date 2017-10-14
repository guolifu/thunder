<?php
namespace Api\controller;
use \thunder\View;
//header("Access-Control-Allow-Origin: *");
class IndexController{
    use View;
    public function index(){
        return "api";
    }
    public function api(){

        $da = array(
            'database_type' => 'mysql',
            'database_name' => 'webchain',
            'server' => '127.0.0.1',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            // 可选
            'port' => 3306,
            // 可选，定义表的前缀
            'prefix' => 'pre_',
        );

        $r = model('admin',$da);
        $res = $r->lists();
//        $res = $r->test();

//        dump($res);die;
        return $res;
//        return ['api'=>1];
    }
    public function get_dish(){
        $dish = model('dish');
        $res = $dish->lists();
//        dump($res);die;
        return $res  ;
    }
    public function vue(){
        $this->display();
    }
    public function post(){
        $data['name'] = input('name');
        $data['age'] = 1;
        $data['sex'] = 5;
        return $data;

    }
    public function checkThisWebIsOk()
    {	/* 授权码 */
        $my = 'ByShopWWI';
        /* 获取授权站码 */
        $data = input('param.key');

        $ok = "console.log('ok');";

        $e = 'document.write("System error!");';
        if($data==$my){
            return jsonp(['code'=>1,'fun'=>$ok]);
        }else{
            return jsonp(['code'=>0,'fun'=>$e]);
        }

    }
    public function checkThisWebIsOk_php(){
        /* 授权码 */
        $my = 'ByShopWWI';

        //请求页面时通信协议的名称和版本
        $request =	$_SERVER['SERVER_PROTOCOL'];
        $v = substr($request,-1);

        // echo  ("echo ".'"'.$v.'"'.';');


        $data = input('param.key');
        if($v==1) return '禁止访问！';
        if($data!=$my){
            return "exit('System error!');";
        }else{
            return "define('DS','/');define('ByShopWWI',true);";
        }
    }
}
