<?php

namespace app\admin\controller;

use think\Controller;
/**
 * Description of Echarts
 *
 * @author 亮亮
 */
class Echarts extends Controller{
   
    //折线图
    public function line(){
        return $this->fetch('line');
    }
    
    public function bar(){
        return $this->fetch('bar');
    }
    
<<<<<<< HEAD
    public function pie(){
        return $this->fetch('pie');
=======
    public function map(){
        return $this->map('map');
>>>>>>> 06c6b792e80e93ff910964b4c743af76d946e939
    }
             
    
}
