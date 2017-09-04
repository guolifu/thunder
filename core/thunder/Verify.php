<?php
namespace thunder;
class Verify{
    protected $config =	array(
        'codeSet'   =>  '2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY',             // 验证码字符集合
        'expire'    =>  1800,            // 验证码过期时间（s）
        'useImgBg'  =>  false,           // 使用背景图片
        'fontSize'  =>  25,              // 验证码字体大小(px)
        'useCurve'  =>  true,            // 是否画混淆曲线
        'useNoise'  =>  true,            // 是否添加杂点
        'imageH'    =>  50,               // 验证码图片高度
        'imageW'    =>  100,               // 验证码图片宽度
        'length'    =>  5,               // 验证码位数
        'fontttf'   =>  '',              // 验证码字体，不设置随机获取
        'bg'        =>  array(243, 251, 254),  // 背景颜色
        'reset'     =>  true,           // 验证成功后是否重置
    );
    private $_image   = NULL;     // 验证码图片实例
    private $_color   = NULL;     // 验证码字体颜色

    public function __get($name) {
        return $this->config[$name];
    }

    public function create(){
        header('Content-type:image/png');

        $im = $this->_image = imagecreate($x=100,$y=50);
        imagecolorallocate($this->_image, $this->bg[0], $this->bg[1], $this->bg[2]);
        $this->_color = imagecolorallocate($this->_image, mt_rand(1,150), mt_rand(1,150), mt_rand(1,150));
        $string = "2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY"; //在图像中输出的字符
//3.字符串截取长度
        $count=$this->length;
        $string = str_shuffle($string);
//4.随机截取字符串，取其中的一部分字符串
        $string=substr($string,0,$count);
        if ($this->useCurve) {
            // 绘干扰线
            $this->_writeCurve();
        }
        if ($this->useNoise) {
            // 绘杂点
            $this->_writeNoise();
        }


        imagestring($im,6,$x/2-$x/8, $y/2-$y/16, $string, $this->_color); //水平的将字符串输出到图像中
        imagepng($im);
        imagedestroy($im);
    }
    private function _writeCurve() {
        $px = $py = 0;

        // 曲线前部分
        $A = mt_rand(1, $this->imageH/2);                  // 振幅
        $b = mt_rand(-$this->imageH/4, $this->imageH/4);   // Y轴方向偏移量
        $f = mt_rand(-$this->imageH/4, $this->imageH/4);   // X轴方向偏移量
        $T = mt_rand($this->imageH, $this->imageW*2);  // 周期
        $w = (2* M_PI)/$T;

        $px1 = 0;  // 曲线横坐标起始位置
        $px2 = mt_rand($this->imageW/2, $this->imageW * 0.8);  // 曲线横坐标结束位置

        for ($px=$px1; $px<=$px2; $px = $px + 1) {
            if ($w!=0) {
                $py = $A * sin($w*$px + $f)+ $b + $this->imageH/2;  // y = Asin(ωx+φ) + b
                $i = (int) ($this->fontSize/5);
                while ($i > 0) {
                    imagesetpixel($this->_image, $px + $i , $py + $i, $this->_color);  // 这里(while)循环画像素点比imagettftext和imagestring用字体大小一次画出（不用这while循环）性能要好很多
                    $i--;
                }
            }
        }

        // 曲线后部分
        $A = mt_rand(1, $this->imageH/2);                  // 振幅
        $f = mt_rand(-$this->imageH/4, $this->imageH/4);   // X轴方向偏移量
        $T = mt_rand($this->imageH, $this->imageW*2);  // 周期
        $w = (2* M_PI)/$T;
        $b = $py - $A * sin($w*$px + $f) - $this->imageH/2;
        $px1 = $px2;
        $px2 = $this->imageW;

        for ($px=$px1; $px<=$px2; $px=$px+ 1) {
            if ($w!=0) {
                $py = $A * sin($w*$px + $f)+ $b + $this->imageH/2;  // y = Asin(ωx+φ) + b
                $i = (int) ($this->fontSize/5);
                while ($i > 0) {
                    imagesetpixel($this->_image, $px + $i, $py + $i, $this->_color);
                    $i--;
                }
            }
        }
    }

    private function _writeNoise() {
        $noiseColor = imagecolorallocate($this->_image, mt_rand(150,225), mt_rand(150,225), mt_rand(150,225));
        for ($i=0;$i<250;$i++){
            imagesetpixel($this->_image,rand(0,$this->imageW),rand(0,$this->imageH),$noiseColor);
        }
    }
}