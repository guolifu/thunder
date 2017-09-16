<?php
namespace thunder;
use Medoo\Medoo;
class Model extends Medoo{
    protected $name = '';

    public static $data_base_conf;

    public function __construct($name='',$data_base_conf=''){

        /*如果存在分组数据库配置则引入，否则使用配置*/
        $data_base_conf = (!empty($data_base_conf))?$data_base_conf:conf::get('database');
        if(!empty(self::$data_base_conf)) $data_base_conf = self::$data_base_conf;

        parent::__construct($data_base_conf);
        if(!empty($name)){
            $this->name   =  $name;
        }elseif(empty($this->name)){
            $this->name =   $this->getModelName();
        }
    }
    public function getModelName() {
        if(empty($this->name)){
            $name = get_class($this);
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


    public static function set_data_conf($data_base_conf=''){
        if(!empty($data_base_conf))
            self::$data_base_conf = $data_base_conf;
    }
}