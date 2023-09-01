<?php
include_once('./_common.php');

// 페이지 제목 (웹접근성 관련)
$g5['title'] = '단체소개';
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/sub.css">', 0);
// php 안에 css, or javascript 추가 하는 법
// 한 페이지에 공통된 gnb대신 컬러값이 변경된 gnb를 원하는 경우

include_once(G5_PATH.'/head.php');
?>


about

<?php
include_once(G5_PATH.'/tail.php');
?>
