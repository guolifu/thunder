<?php
namespace thunder;

class Response{
    protected static $data;
    public static function send($data){
        self::$data = $data;

        $dataType = self::getDataType($data);

        $data = self::setContent($dataType,$data);
        if(!is_array($data)){
            echo($data);
        }else{
            dump($data);
        }
    }

    protected static function getDataType($data){
        return gettype($data);
    }

    protected static function setContent($dataType,$data){
        switch($dataType){
            case 'array' :{
                $data =
                    (array_key_exists('to_array',$data)&&$data['to_array']==1)?
                        self::getData():
                        $data = json($data);
                break;
            }
            case 'integer' :{
                $data = (int)$data;
                break;
            }
            case 'string' :{
                $data = (string)$data;
                break;
            }
            default:{
                $data = self::getData();
            }
        }
        return $data;
    }

    /*
     * 获取原始数据
     *
     * */
    protected static function getData(){
        return self::$data;
    }
}