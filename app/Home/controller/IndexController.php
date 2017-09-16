<?php
namespace home\controller;
use \thunder\View;
class IndexController{
    use view;
    public function index(){
        $name = 'Thunder';
        if(input('get.login'))
        $name .= '_Login';
        $this->assign('title',$name);
        $this->assign('name',$name);
        $this->display();
    }
    public function sql(){
       $model = model('student');
//         $model = model('teacher');
         $res = $model->lists();
//       $res = $model->test();
//        $res = $model->getOne(1);
//        $data = array('name'=>'ssssss');
//        $res = $model->setOne(1,$data);
//        $res = $model->delOne(1);
         return ($res);
    }
    public function ses(){
        session()->set('name','bbb');
    }
    public function ses1(){
        $res = session()->get('secode');
//        session()->del('secode');
        dump($res);
    }
    public function add(){
        $m = model('student');
        $t1 = microtime_float();
//        $res = $m->destroy(88);
        $data = [
            ['name'=>'n1'],
            ['name'=>'n2'],
            ['name'=>'n3'],
            ['name'=>'n4'],
            ['name'=>'n5'],
            ['name'=>'n6'],
            ['name'=>'n7'],
            ['name'=>'n8'],
            ['name'=>'n9'],
            ['name'=>'n10']
        ];
        for($i = 0;$i<100;$i++){
            $res = $m->add($data);
        }
        dump(microtime_float()-$t1);

    }
    public function fulsh(){
        $m = model('student');
        $m->flushall();
    }
    public function upload(){
        if(IS_POST){
            $up = new \thunder\Upload();
            //设置属性(上传的位置， 大小， 类型， 名是是否要随机生成)
            $up -> set("path",__UPLOAD__.'/images');
            $up -> set("maxsize", 2000000);
            $up -> set("allowtype", array("gif", "png", "jpg","jpeg",'xls'));
            $up -> set("israndname", false);
            if($up -> upload("photo")) {
                echo '<pre>';
                //获取上传后文件名子
                var_dump($up->getFileName());
                echo '</pre>';

            } else {
                echo '<pre>';
                //获取上传失败以后的错误提示
                var_dump($up->getErrorMsg());
                echo '</pre>';
            }
        }
        $this->display();
    }
    public function c_verify(){
        $v = new \thunder\Verify();
        $v->length = 4;
        $v->useNoise = false;
        $v->useCurve = false;
        $v->create();
    }
    public function verify(){
        $code = input('post.code');
        $v = new \thunder\Verify();
        if($v->check($code))
        header('Location:./index?login=1');
        $this->display();
    }
    public function url(){
        $name = 'Thunder';
        $m = model('student');
        $res = $m->lists();
        $this->assign('name',$name);
        $this->assign('students',$res);

        $this->display();
    }
    public function num(){
        return 1;
    }
    public function str(){
        return 'str';
    }
    public function json(){
        return ['data'=>'json','status'=>1];
//        return ['data'=>'json','status'=>1,'to_array'=>1];
    }
    public function url1(){
        $b = route()->action;
        dump($b);die;
    }

}