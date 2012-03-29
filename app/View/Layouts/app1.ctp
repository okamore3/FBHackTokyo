<?php
/**
 * Summary:
 * info -
 *   $Author: in $Date:
 *   $Id:
 *
 * @package sharkFbApp
 * @author Hiroshi Takemoto
 * @since PHP 5.3
 * @version $Id:
 */
 ?>
 <!DOCTYPE HTML>
 <html lang="ja">
 <head>
 	<meta charset="UTF-8">
 	<title>イングリッシュ・ネームを命名します。｜Gow!Apps</title>
 	<?php
 	/*
 	<meta name="description" content="" />
 	<meta name="keywords" content="" />
	<meta name="format-detection" content="telephone=no">
    <meta http-equiv="imagetoolbar" content="no" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="expires" content="0" />
    <meta name="copyright" content="Copyright (C) 2012 CYBIRD Co.,Ltd All Rights Reserved." />
    <meta name="author" content="株式会社サイバード" />
    */
    ?>
 	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 6]>
	<script type="text/javascript" src="/resource_app1/js/alpha.js"></script>
	<![endif]-->
 	<?php
		// 外部ファイルやスクリプトをココで読み込む(HTMLヘルパーの機能) 
	 	echo $scripts_for_layout;
	?>
	<?php //<!-- Le styles --> ?>
	<?php
	// 今回はbootstrapcss使わない
    // <link href="/css/bootstrap.min.css" rel="stylesheet">
    // <link href="/css/bootstrap-responsive.min.css" rel="stylesheet">
    ?>
    <link rel="stylesheet" href="/resource_app1/css/style.css" media="all"> 
    <?php // <!-- Le fav and touch icons --> ?>
    <?php
    // 今回はアイコンも指定しない
    // <link rel="shortcut icon" href="/resource_app1/images/16x16_3.png">
    // <link rel="apple-touch-icon" href="/resource_app1/images/16x16_3.png">
    // <link rel="apple-touch-icon" sizes="16x16" href="/resource_app1/images/16x16_3.png">
    // <link rel="apple-touch-icon" sizes="75x75" href="/resource_app1/images/75x75.png">
    ?>
 </head>
 <?php
 	// 本文 
 	echo $content_for_layout;
 ?>
 <?php
 	// <hr>
 	// <footer>
    // <p>&copy;2012 CYBIRD Co.,Ltd All Rights Reserved.</p>
    // </footer>
 ?>
 	<?php
    // <!-- Le javascript
    // ================================================== -->
    // <!-- Placed at the end of the document so the pages load faster -->
    ?>
    <?php
    // 今回はJqueryも使わない
    // <script src="/js/jquery-1.7.1.min.js"></script>
    // <script src="/js/bootstrap.min.js"></script>
    ?>
 </body>
 </html>