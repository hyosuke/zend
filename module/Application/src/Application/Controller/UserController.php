<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class UserController extends AbstractActionController
{	
	public  function addAction()
	{
		$values = array(
			'key1' => get_class(function ($sm){return $sm->get('Value1');}),
			'key2' => 'Value2'
		);
		
		//パラメータの設定
		$view = new ViewModel($values);
		
		//使用するレイアウトの設定 viewフォルダ以下のパスを指定する。
		$this->layout('/layout/layout.phtml');
		
		//ビューの設定　viewフォルダ以下のパスを指定する
		$view ->setTemplate('/application/user/add.phtml');
		
		//レイアウト機能の設定　true:無効　false:有効
		$view -> setTerminal(true);
		
		/*
		 * ビューの出力を無効
		 * $this -> getResponse();
		 *   */
		return $view;
	}
	
}