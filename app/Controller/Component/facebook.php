<?php
/**
 * 概要:FacebookSDKをCake用Component化
 * 備考:
 * 履歴:2012-02-15 HiroshiTakemoto新規作成
 * info -
 *   $Author: in $Date:
 *   $Id:
 *
 * @package sharkFbApp
 * @author Hiroshi Takemoto
 * @since PHP 5.3
 * @version $Id:
 */
 class FacebookComponent extends Component {
 	private $facebook;
 	public function initialize(&$controller){
 		App::import('Vendor', 'Facebook', array('file' => 'Facebook'.DS.'facebook.php'));
 		$this->facebook = new Facebook(array(
	 		'appId' => Configure::read('Facebook.appId'),
	 		'secret' => Configure::read('Facebook.secret')
	 	));
 	}
// 	public function startup(&$controller) {	
// 	}
// 	public function beforeRender() {
// 	}
// 	public function shutdown() {	
// 	}
 	public function __call($name, $arguments) {
 		if(!method_exists($this->facebook, $name)) {
 			throw new FacebookComponentException('Facebookオブジェクトにそのような操作はありません');
 		}
 		return $this->facebook->$name($arguments);
 	}
 }
 
 class FacebookComponentException extends CakeException {
 }