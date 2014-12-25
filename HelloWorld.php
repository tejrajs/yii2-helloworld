<?php

namespace tejrajs\helloworld;

/**
 * This is just an example.
 */
use yii\base\Widget;
use yii\helpers\Html;

class HelloWorld extends Widget{
	public $message;
	
	public function init(){
		parent::init();
		if($this->message===null){
			$this->message= 'Hello World';
		}else{
			$this->message= 'Hello '.$this->message;
		}
	}
	
	public function run(){
		return Html::encode($this->message);
	}
}