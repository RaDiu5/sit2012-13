<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	const ID_PERFIL_ADMINISTRADOR = 1;
	const ID_PERFIL_SOLICITANTE = 2;
	const ID_PERFIL_CIO = 3;
	const ID_PERFIL_RESPONSABLE = 4;
	const ID_PERFIL_PATROCINADOR = 5;
	const ID_PERFIL_TECNICO = 6;
	
	 var $components = array(
		'Auth' => array(
			'loginAction' => array(
				'controller' => 'usuario', 
				'action' => 'login'
			),
			'loginRedirect' => array(
				'controller' => 'pages', 
				'action' => 'index'
			),
			'logoutRedirect' => '/',
			'loginError' => 'No username and password was found with that combination.',
			'authError' => 'Por favor, identificate para poder usar el sistema.',
			'authenticate' => array(
				'all' => array(
					'userModel' => 'USUARIO',
					'fields' => array(
						'username' => 'correo', 
						'password' => 'clave'
					),
				),
				'Form'
			)
		), 
		'Acl',
		'Session'
	);
	
	var $helpers = array('CrudActions');
	var $uses = array('NOTIFICACION', 'USUARIO', 'PERFILUSUARIO');
	
	protected $usuario;
	protected $notificacion;
	
	function beforeRender() {
		App::uses('Navigation', '');
		//iniciar array de navegacio
		$listaNav = array(
			'topbar' => array(
			 
				array(
					'titulo' => 'Inicio'
					,'url' => '/'
					,'rol' => 0
				)
			),
			'topbar-nouser' => array(
			 
				array(
					'titulo' => 'Inicio'
					,'url' => '/'
					,'rol' => 0
				),
				array(
					array(
						'titulo' => 'Login'
						,'url'=> '/usuario/login/'
						,'rol' => 0
					)
				)
			),
			
			'footer' => array(
				array(
					'titulo' => 'Como funciona'
					,'url'=> '#pdf'
					,'rol' => 0
				),
			),
			
		);
		
		
		$nav = new Navigation($listaNav);
		$nav->setRol(0);
		$this->set('navigation', $nav);
		$this->set('requested','/'.$this->params['controller'].'/'.$this->params['action'].'/');
	}
	
	function beforeFilter() { 
		Security::setHash('md5');
		
		//Antes de renderizar la vista todas las paginas necesitan al usuario
		$usuario = $this->Auth->user();
		if (isset($usuario)){
			$perfiles = $this->PERFILUSUARIO->find('all', array(
				'conditions' => array(
				'usuario_id' => $usuario['id']
				)
			));
			
			$usuario['perfiles'] = array();
			foreach ($perfiles as $key => $value) {
				array_push($usuario['perfiles'], $value['PERFILUSUARIO']['perfil_id']);
			}
			$this->set('usuario', $usuario);
			$this->usuario = $usuario;
		}
		
		$options = array(
			'conditions' => array(
					'NOTIFICACION.persona_id' => $usuario['persona_id']
			)	
		);
		$this->notificacion = $this->NOTIFICACION->find('all', $options);
		$this->set('notificacion',$this->notificacion);
		
		
	}
	
}
