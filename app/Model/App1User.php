<?php
/**
 * 概要:
 * 備考:
 * 履歴:
 * info -
 *   $Author: in $Date:
 *   $Id:
 *
 * @package sharkFbApp
 * @author Hiroshi Takemoto
 * @since PHP 5.3
 * @version $Id:
 */
 class App1User extends AppModel {
 	public $name = 'App1User';
 	public $primaryKey = 'fb_user_id';
 	public $validate = array(
 		'fb_user_id' => array(
 			'between' => array(
 				'rule' => array('between',1,20),
 				'message' => '1から20文字で入力して下さい。',
 			),
 		),
 		'name' => array(
 			'between' => array(
 				'rule' => array('between',0,256),
 				'message' => '1から256文字で入力して下さい。',
 			),
 		),
 		// TODO:文字列日付のチェック
		'updated_time' => array(
 			'between' => array(
 				'rule' => array('between',0,256),
 				'message' => '1から256文字で入力して下さい。',
 			),
 		),
  		'access_token' => array(
 			'between' => array(
 				'rule' => array('between',1,256),
 				'message' => '1から256文字で入力して下さい。',
 			),
 		),
  		'email' => array(
 			'between' => array(
 				'rule' => array('between',0,256),
 				'message' => '1から256文字で入力して下さい。',
 			),
 		),
 		// TODO:文字列日付のチェック
  		'birthday' => array(
 			'between' => array(
 				'rule' => array('between',0,256),
 				'message' => '1から256文字で入力して下さい。',
 			),
 		),
   		'locale' => array(
 			'between' => array(
 				'rule' => array('between',0,10),
 				'message' => '1から10文字で入力して下さい。',
 			),
 		),
  		'gender' => array(
 			'between' => array(
 				'rule' => array('between',0,10),
 				'message' => '1から10文字で入力して下さい。',
 			),
 		),
 	);
 }