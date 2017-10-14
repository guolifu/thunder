<?php
namespace Home\controller;
use \thunder\View;
class ClassController{
    use View;
    public function index(){
        if(IS_POST){

        }else{
            $this->display();
        }
    }
    public function getClass(){
        $res = table('myclass')->order(['id'=>'DESC'])->all();
        return ['data'=>$res];
    }
    public function add(){
        $data['name'] = input('name');
        $data['tel'] = input('tel');
        $data['danwei'] = input('danwei');
        $data['add_time'] = time();
        if($data['name']=='' || $data['tel']=='' || $data['danwei']=='')
            return ['msg'=>'都填上啊!'];
        if(!preg_match("/^1[34578]{1}\d{9}$/",$data['tel']))
            return ['msg'=>'手机号不对！!'];
        $res = table('myclass')->add($data);
        return $res->rowCount()?['msg'=>'添加成功！']:['msg'=>'添加失败！'];
    }
}