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
        $info = table('manual')->find($id);
        $this->assign('info',$info);
        $this->display();
    }
    public function datas(){
        $pageIndex = input('get.pageIndex');
        $pageSize = input('get.pageSize');

        $page = [($pageIndex-1)*$pageSize,$pageSize];

        $manual = table('manual');
        $list = $manual->limit($page)->order(['sort'=>'DESC'])->all();
        foreach($list as &$v){
            $v['add_time'] = Date('Y-m-d H:i:s',$v['add_time']);
            $v['update_time'] = Date('Y-m-d H:i:s',$v['update_time']);
        }
        $count =$manual->count('manual');
        return ['rel'=>true,"msg"=> "获取成功",'list'=>$list,'count'=>$count];
    }
    public function add(){
        $data = input('post.');
        $data['content'] = htmlspecialchars_decode($data['content']);
        $data['add_time'] = $data['update_time'] =  time();
        $manual = table('manual');
        $res = $manual->add($data);
        return $res->rowCount()?['msg'=>'添加成功']:['msg'=>'添加失败'];
    }
    public function edit(){
        $data = input('post.');
        $data['content'] = htmlspecialchars_decode($data['content']);
        $data['update_time'] =  time();
        $res = table('manual')->setOne($data['id'],$data);
        return $res->rowCount()?['msg'=>'编辑成功']:['msg'=>'编辑失败'];

    }
    public function delete(){
        $id = input('post.id');
        $res = table('manual')->destroy($id);
        return $res->rowCount()?['msg'=>'删除成功']:['msg'=>'删除失败'];
    }
}