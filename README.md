v2.0.0
修正了路由规则<br>
增加了多模块机制<br>
控制器方法重构<br>
加入api开发模式，控制器return数组自动转换为json格式等。<br>
模型层重构，模型层分离未独立层：<br>
demo:<br>

namespace app;<br>
use \thunder\Model;<br>
class Student extends Model{<br>
    public function test(){<br>
        return 'test!';<br>
    }<br>
<br>
视图机制优化，支持跨控制器，跨模块输出页面<br>
demo:<br>

namespace home\controller;<br>
use \thunder\View;<br>
class StudentController{<br>
    use View;<br>
    public function index(){<br>
        $this->display();<br>
        $this->display('index1');<br>
        $this->display('index/url');<br>
        $this->display('api/index/views');<br>
    }<br>
}<br>
