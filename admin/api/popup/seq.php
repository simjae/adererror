<?php
/*
 +=============================================================================
 | 
 | 팝업 순서 변경 
 | -----------
 |
 | 최초 작성	: 양한빈
 | 최초 작성일	: 2015.09.07
 | 최종 수정일	: 2017.07.10
 | 버전		: 1.0
 | 설명		: 
 | 
 +=============================================================================
*/
// 예외 처리
if(!$seq) {
	$result = false;
}
else {
	$seq = explode(',',$seq);
	for($i=1;$i<=sizeof($seq);$i++) {
		$result = db_update($_TABLE['SITE_POPUP'],'SEQ='.$i,'IDX='.$seq[$i-1]);
	}
}
?>