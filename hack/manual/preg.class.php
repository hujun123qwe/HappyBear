<?php
	/*
	*	@copyallright  	hujun123qwe
	*	@time 			2015-08-11 09:29:22
	*	@lastmodify		
	*/

	class Preg_Template{
		
		public $preg;
		public $str;
		public $op;
		public $rep_str;
		
		/*
		*	@function 初始化解析模式
		*	@str 解析文件或语句
		*	@preg 解析表达式
		*	@op 0：只查找不替换
		*		1：查找并替换
		*/
		
		
		public function Preg_Template(){
			
		}
		
		
		public function __construct($preg, $str, $op=0, $rep_str=""){
			$this->preg = $preg;
			$this->str = $str;
			$this->op = $op;
			$this->rep_str = $rep_str;
		}
		
		public function start_preg(){
			if($this->op == 0){
				return preg_match($this->preg, $this->str);
			}
			if($this->op == 1){
				return preg_replace($this->preg, $this->rep_str, $this->str);
			}
		}
		
		public function templates($file_name){
			if(file_exists($file_name)){
				file_put_contents($file_name);
			}else{
				return "ERROR";
			}
		}
		
		
	}


?>