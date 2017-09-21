<?php
namespace app;
use Illuminate\Database\Eloquent\Model;
class Teacher extends Model{
    protected $table = 'teacher';
    public function test(){
        return 1;
    }
}
