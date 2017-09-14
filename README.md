v2.0.0
1.修正了路由规则<br>
2.增加了多模块机制<br>
3.控制器方法重构<br>
4.加入api开发模式，控制器return数组自动转换为json格式等。<br>
<hr>
5.模型层重构，模型层分离为独立层：<br>
demo:<br>

namespace app;<br>
use \thunder\Model;<br>
class Student extends Model{<br>
    public function test(){<br>
        return 'test!';<br>
    }<br>
<hr>
6.视图机制优化，支持跨控制器，跨模块输出页面<br>

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
1. fixed the routing rule <br>
2. increased the multi module mechanism <br>
3. controller method refactoring <br>
4. join the API development model, the controller return array automatically converted to JSON format. <br>
<hr>
5. model layer is reconstructed, and model layer is separated into independent layer: <br>
demo:<br>

namespace app;<br>
use \thunder\Model;<br>
class Student extends Model{<br>
    public function test(){<br>
        return 'test!';<br>
    }<br>
<br>

<hr>
6. view mechanism optimization, support cross controller, cross module output page <br>

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