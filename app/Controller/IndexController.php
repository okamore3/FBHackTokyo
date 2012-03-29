<?php
/**
 * 概要:
 * info -
 *   $Author: in $Date:
 *   $Id:
 *
 * @package sharkFbApp
 * @author Hiroshi Takemoto
 * @since PHP 5.3
 * @version $Id:
 */
 class IndexController extends AppController {
 	// コントローラ名
 	public $name = 'Index';
 	// ヘルパー(Viewの拡張機能)
 	public $helpers = array('Form', 'Html', 'JqueryEngine', 'Js', 'Number', 'Paginator', 'Text', 'Time');
 	// コンポーネント(コントローラの拡張機能)
 	public $components = array('Session', 'RequestHandler', 'Cookie');
 	// Facebook
 	private $facebook;
 	private $signed_request;
 	private $isAuthed;
    // 性別
    const MALE = 'male';
    const FEMALE = 'female';
    
 	/**
 	 * 共通処理　
 	 * 
 	 */
 	private function _init() {
 		// Facebook SDKインスタンスの生成
 		App::import('Vendor', 'Facebook', array('file' => 'Facebook'.DS.'facebook.php'));
 		$this->facebook = new Facebook(array(
 			'appId' => Configure::read('App1.facebookAppId'),
 			'secret' => Configure::read('App1.facebookSecret'),
 		));
 		// レイアウト(テンプレの大枠)の設定。設定しないとdefaultが呼ばれる。
 		$this->layout = 'app1';
 		// この配列にコントローラパラメータが格納されている
 		$this->params;
 		// FormHelperフォームからコントローラにPostされたデータの取得に使う。
 		$this->data;
 	}
 	/**
 	 * Facebookページ経由(iFrame)かチェック
 	 * 経由していなければFacebookページへリダイレクト
 	 * 
 	 */
 	private function _isSignedRequest() {
 		$this->signed_request = $this->facebook->getSignedRequest();
 		if($this->signed_request) {
 			return true;
 		} else {
 			$this->redirect(Configure::read('App1.facebookPageAppUrl'));
 			return false;
 		}
 	}
 	
 	/**
 	 * アプリの認証チェック
 	 * 未認証であれば認証ページへリダイレクト
 	 * 
 	 */
 	private function _isAuthed() {
 		$this->isAuthed = $this->facebook->getUser();
 		if($this->isAuthed) {
 			return true;
 		} else {
 			$loginUrl = $this->facebook->getLoginUrl(
	 			array(
	 				'canvas' => 1,
	 				'fbconnect' => 0,
	 				'scope' => 'email,user_birthday,publish_stream,photo_upload',
	 				'redirect_uri' => Configure::read('App1.facebookAppUrl'),
	 			)
 			);
 			$this->redirect($loginUrl);
 			return false;
 		}
 	}
 	
 	/**
 	 * 文字列日付(DD/MM/YYYY)からISO8601フォーマット(YYYY-MM-DD HH24:MI:SS)に変換
 	 * 
 	 */
 	private function _strTo8601($str) {
		 	$date['date'] = explode('/', $str);
 	 		if(count($date['date']) === 3) {
	 	 		$date['month'] = $date['date'][0];
	 	 		$date['day'] = $date['date'][1];
	 	 		$date['year'] = $date['date'][2];
	 	 		return date("Y-m-d H:i:s", mktime(0,0,0,$date['month'],$date['day'],$date['year']));
 	 		} else {
 	 			return null;
 	 		}
 	}

	/**
	 * コールバック
	 * コントローラにある全てのアクションの前に実行される。
	 * 
	 */
	public function beforeFilter() {
		$this->_init();
	}
	
	/**
	 * コールバック
	 * アクションの実行後、ビューレンダリング前に実行。
	 * 
	 */
	public function beforeRender() {
		
	}
	
	/**
	 * コールバック
	 * レンダリング完了後に実行。
	 * 
	 */
	public function afterFilter() {
		
	}
    

 	/**
 	 * イングリッシュネームとはページ
 	 * Facebook経由でなければFacebookページへリダイレクト
 	 * いいねしたかどうかで表示を変える
 	 * 
 	 */
 	public function index() {
 	    // サードパーティークッキーを扱うように
        header("P3P: CP='UNI CUR OUR'");
 		if($this->_isSignedRequest()){
            $this->set('message','こにゃにちは');
 		}
 	}
 }
 
 class IndexControllerException extends CakeException {}
