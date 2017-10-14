<?php
namespace Admin\controller;
use \thunder\View;
class IndexController{
    use View;
    public function index(){
        if($this->is_logged_in()){
            $this->display();
        }else{
            $this->display('login');
        }
    }
    public function main(){
        $this->display();
    }
    public function form(){
        $this->display();
    }
    public function table(){
        $this->display();
    }
    public function btable(){
        $this->display();
    }
    public function is_logged_in(){
        /*如果session中存在返回user_id 否则返回false*/
        return session()->get('user_id')?true:false;
    }
    public function login(){
        $username = input('post.username');
        $password = input('post.password');

        if(!$username or !$password)
            return ['status'=>-1,'msg'=>'用户名或密码不能为空'];

        $res = table('member')->where(['username'=>$username])->find();
        if(!$res)
            return ['status'=>-1,'msg'=>'管理员不存在'];

        if(md5($password)!=$res['password']){
            return ['status'=>0,'msg'=>'密码错误'];
        }else{
            session()->set('user_id',$res['id']);
            return ['status'=>1,'msg'=>'登录成功'];
        }
    }
    public function logout(){
        session()->del('user_id');
        header("Location:../../admin");
    }
}