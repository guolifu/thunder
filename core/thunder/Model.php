<?php
namespace thunder;
use Medoo\Medoo;
class Model extends Medoo{
    protected $name = '';
    public function __construct($name=''){
        parent::__construct(conf::get('database'));
        if(!empty($name)){
            $this->name   =  $name;
        }elseif(empty($this->name)){
            $this->name =   $this->getModelName();
        }
    }
    public function getModelName() {
        if(empty($this->name)){
            $name = substr(get_class($this),0,-strlen('Model'));
            if ( $pos = strrpos($name,'\\') ) {//有命名空间
                $this->name = substr($name,$pos+1);
            }else{
                $this->name = $name;
            }
        }
        return $this->name;
    }


    public function lists(){
        $res = $this->select($this->name,'*');
        return $res ;
    }
    /**
     * 根据ID查找一条数据
     */
    public function getOne($id, $field = '*')
    {
        $data = $this->get($this->name, $field, [
            "id" => $id
        ]);

        return $data;
    }

    /**
     * 新增数据
     */
    public function add($data)
    {
        return $this->insert($this->name, $data);
    }

    /**
     * 根据ID修改一条数据
     */
    public function setOne($id, $data)
    {
        return $this->update($this->name, $data, [
            'id' => $id
        ]);
    }

    /**
     * 根据ID删除一条数据
     */
    public function destroy($id)
    {
        return $this->delete($this->name, [
            'id' => $id
        ]);
    }
    /*
     * 清空数据表
     * */
    public function flushall(){
        $q = "delete  from ".$this->name;
        return $this->query($q);
    }
}