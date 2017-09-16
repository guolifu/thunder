<?php
namespace thunder;

class Response{
    protected static $data;
    public static function send($data){
        self::$data = $data;

        $dataType = self::getDataType($data);

        $data = self::setContent($dataType,$data);
        if(!is_array($data)){
            echo $data;
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
                    switch(true){
                        case (array_key_exists('TO_ARRAY',$data) && $data['TO_ARRAY']===true):{
                            $data = self::getData();
                            break;
                        }
                        case (array_key_exists('TO_JSONP',$data) && $data['TO_JSONP']===true):{
                            $data = jsonp($data);
                            break;
                        }
                        default:{
                            $data = json($data);
                        }
                    }
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