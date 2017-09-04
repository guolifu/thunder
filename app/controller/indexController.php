<?php
namespace app\controller;
use \thunder\View;
class indexController{
    use view;
    public function index(){
        $name = 'Thunder';
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
         dump($res);
    }
    public function ses(){
        $session = new \thunder\session;
        $session->set('name','bbb');
//        $session->del('name');
    }
    public function ses1(){
        $session = new \thunder\session;
        $res = $session->get('name');
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
            $up -> set("path", "./uploads/images/");
            $up -> set("maxsize", 2000000);
            $up -> set("allowtype", array("gif", "png", "jpg","jpeg"));
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
    public function verify(){
        header('Content-type:image/png');
        $im = imagecreate($x=100,$y=50);
        $bg = imagecolorallocate($im, 243,251,254); //设置画布的背景为白色
        $black = imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255)); //设置文字颜色
        $string = "2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY"; //在图像中输出的字符
//3.字符串截取长度
        $count=4;
        $string = str_shuffle($string);
//4.随机截取字符串，取其中的一部分字符串
        $string=substr($string,0,$count);
        //干扰线
        for ($i=0;$i<8;$i++){
            $lineColor = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
            imageline ($im,rand(0,$x),0,rand(0,$x),$y,$lineColor);
        }
        //干扰点
        for ($i=0;$i<250;$i++){
            imagesetpixel($im,rand(0,$x),rand(0,$y),$black);
        }
        imagestring($im,6,$x/2-$x/8, $y/2-$y/16, $string, $black); //水平的将字符串输出到图像中
        imagepng($im);
        imagedestroy($im);
    }


}