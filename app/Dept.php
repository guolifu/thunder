<?php
namespace app;
use Illuminate\Database\Eloquent\Model;
class Dept extends Model{
    protected $table = 'dept';
    public $timestamps = false;
    //一个部门对应多个学生，属一对多，hasmany
    public function students()
    {
        return $this->hasmany('app\Student');
    }

}
