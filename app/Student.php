<?php
namespace app;
use Illuminate\Database\Eloquent\Model;
class Student extends Model{
    protected $table = 'student';
    public $timestamps = false;
    public function dept()
    {
        return $this->belongsTo('app\Dept');
    }
}
