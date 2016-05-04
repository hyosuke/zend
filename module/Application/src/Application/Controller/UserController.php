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
		
		//�p�����[�^�̐ݒ�
		$view = new ViewModel($values);
		
		//�g�p���郌�C�A�E�g�̐ݒ� view�t�H���_�ȉ��̃p�X���w�肷��B
		$this->layout('/layout/layout.phtml');
		
		//�r���[�̐ݒ�@view�t�H���_�ȉ��̃p�X���w�肷��
		$view ->setTemplate('/application/user/add.phtml');
		
		//���C�A�E�g�@�\�̐ݒ�@true:�����@false:�L��
		$view -> setTerminal(true);
		
		/*
		 * �r���[�̏o�͂𖳌�
		 * $this -> getResponse();
		 *   */
		return $view;
	}
	
}