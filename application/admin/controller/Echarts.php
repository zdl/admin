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
    
    public function map(){
        return $this->map('map');
    }
             
    
}
