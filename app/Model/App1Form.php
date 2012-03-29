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
 class App1Form extends AppModel {
 	public $name = 'App1Form';
 	public $useTable = false;
 	public $validate = array(
 		'Q1' => array(
            'between' => array(
                'rule' => array('betweenMultibyte',1,8),
                'message' => '1から8文字で入力して下さい。',
            ),
 		),
 		'Q2' => array(
 			'between' => array(
 				'rule' => array('betweenMultibyte',1,8),
 				'message' => '1から8文字で入力して下さい。',
 			),
 		),
  		'Q3' => array(
 			'between' => array(
 				'rule' => array('betweenMultibyte',1,10),
 				'message' => '1から10文字で入力して下さい。',
 			),
 		),
  		'Q4' => array(
 			'between' => array(
 				'rule' => array('betweenMultibyte',1,10),
 				'message' => '1から10文字で入力して下さい。',
 			),
 		),
 		'Q5' => array(
 			'between' => array(
 				'rule' => array('betweenMultibyte',2,4),
 				'message' => '不正な値が入力されました。',
 			),
 		),
 		'Q6' => array(
 			'between' => array(
 				'rule' => array('betweenMultibyte',1,2),
 				'message' => '不正な値が入力されました。',
 			),
 		),
 	);
    
    /**
     * マルチバイト文字の文字数制約
     * 
     */
    public function betweenMultibyte($data, $min, $max) {
        if(is_array($data)) {
            foreach($data as $key => $val){
                $data = $val;
            }
        }
        return (mb_strlen($data, 'UTF8') >= $min && mb_strlen($data, 'UTF8') <= $max);
    }
 }