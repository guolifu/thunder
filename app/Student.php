<?php
namespace app;
use \thunder\Model;
class Student extends Model{
    public function test(){
        return $this->lists();
    }
}
