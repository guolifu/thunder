<?php
namespace Home\controller;
use \thunder\View;
use \app\Student;
use Illuminate\Pagination\UrlWindow;
class IndexController{
    use View;
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
         $res = $model->all();
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
        $res = $m->all();
        $this->assign('name',$name);
        $this->assign('students',$res);
        $a = "<b>a</b>";

        $this->assign('b',$a);

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
    public function get_manualList(){
        return table('manual')->field('id,title')->all();
    }
    public function get_manual(){
        $manual = table('manual');
        $id = input('post.id');
        if(!$id) $manual->getFirstId();
        $info = $manual->find($id,['id','title','content']);
        $info['content'] = htmlspecialchars_decode($info['content']);
        return $info;

    }
    public function manual(){
        $this->display();
    }
    public function url2(){
        $stu = model('student')->with('Dept');

        $a = $stu->get();

        return (($a));
    }
    public function url3(){
        $stu = model('dept')->with('students');

        $a = $stu->get();

        return(($a));die;
    }
    public function url4(){
        $r = model('student');
        $page = intval( $_GET["page"]);
        if (!$page) {
            $page=1;
        }
        $paginator = $r->paginate(2,['*'],'page',$page);
        $paginator->setPath('./'.route()->action);

        $win = new UrlWindow($paginator);
        $url_arr = $win->get(3);
        dump(($url_arr ));
        if ($paginator->hasPages()) { //有结果集才显示啊
            if (!$paginator->onFirstPage()) {
                echo "<a href='{$paginator->previousPageUrl()}'>上页</a>"."&nbsp;&nbsp;";
            }

            if (isset( $url_arr['first'] )) {
                foreach ($url_arr['first'] as $k=> $v ) {
                    $style=" ";
                    if ($k == $paginator->currentPage()) {
                        $style=" style='color:red' ";
                    }
                    echo "<a {$style} href='{$v}'>$k</a>"."&nbsp;&nbsp;";
                }
            }

            if (isset( $url_arr['slider'] )) {
                echo '...'; // 这样页面漂亮些。
                foreach ($url_arr['slider'] as $k=> $v ) {
                    $style=" ";
                    if ($k == $paginator->currentPage()) {
                        $style=" style='color:red' ";
                    }
                    echo "<a {$style}  href='{$v}'>$k</a>"."&nbsp;&nbsp;";
                }
            }

            if (isset( $url_arr['last'] )) {
                echo '...'; // 这样页面漂亮些。
                foreach ($url_arr['last'] as $k=> $v ) {
                    $style=" ";
                    if ($k == $paginator->currentPage()) {
                        $style=" style='color:red' ";
                    }
                    echo "<a  {$style} href='{$v}'>$k</a>"."&nbsp;&nbsp;";
                }
            }

            if ($paginator->lastPage()!=$page) {
                echo "<a href='{$paginator->nextPageUrl()}'>下页</a>"."&nbsp;&nbsp;";
            }

        }else {
            echo "没查到数据";
        }

    }
    public function url5(){
        $r = model('student')->limit(3)->skip(1)->get()->toarray();
        dump($r);
    }
    public function mvc(){
        $m = route()->module;
        $c = route()->ctrl;
        $v = route()->action;
        dump('模块：'.$m,'控制器：'.$c,'方法：'.$v);
    }
    public function test(){
//        p( table('student')->where(['dept_id'=>2])->count());
//        p(table()->query("SELECT * FROM student")->fetchAll());
//        $w = ['AND'=>[
//            'id'=>1,
//            'name'=>1
//        ]];

//        p(table('student')->limit(4)->order(['sort'=>'DESC','id'=>'DESC'])->field(['name','id'])->all());
        $manual = table('manual');
        $id = input('post.id');
        if(!$id) $manual->getFirstId();
        $info = $manual->find($id,['id','title','content']);
        $info['content'] = htmlspecialchars_decode($info['content']);
        return $info;
    }
}