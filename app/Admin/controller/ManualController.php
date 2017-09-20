<?php
namespace Admin\controller;
use \thunder\View;
class ManualController{
    use View;
    public function index(){
        $this->display();
    }
    public function add_form(){
        $this->display();
    }
    public function edit_form(){
        $id = input('get.id');
        $info = model('manual')->getOne($id);
        $this->assign('info',$info);
        $this->display();
    }
    public function datas(){
        $manual = model('manual');
        $list = $manual->all();
        foreach($list as &$v){
            $v['add_time'] = Date('Y-m-d H:i:s',$v['add_time']);
            $v['update_time'] = Date('Y-m-d H:i:s',$v['update_time']);
        }
        $count =$manual->count('manual');
        return ['rel'=>true,"msg"=> "获取成功",'list'=>$list,'count'=>$count];
    }
    public function add(){
        $data = input('post.');
        $data['add_time'] = $data['update_time'] =  time();
        $manual = model('manual');
        $res = $manual->add($data);
        return $res?['msg'=>'添加成功']:['msg'=>'添加失败'];
    }
    public function edit(){
        $data = input('post.');
        $data['update_time'] =  time();
        $res = model('manual')->setOne($data['id'],$data);
        return $res?['msg'=>'编辑成功']:['msg'=>'编辑失败'];

    }
    public function delete(){
        $id = input('post.id');
        $res = model('manual')->destroy($id);
        return $res?['msg'=>'删除成功']:['msg'=>'删除失败'];
    }
}