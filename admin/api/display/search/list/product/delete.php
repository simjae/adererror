<?php
/*
 +=============================================================================
 | 
 | 실시간 인기 제품 삭제
 | -------
 |
 | 최초 작성	: 손성환
 | 최초 작성일	: 2022.11.28
 | 최종 수정일	: 
 | 버전		: 1.0
 | 설명		: 
 | 
 +=============================================================================
*/

$popular_idx	= $_POST['popular_idx'];

if ($popular_idx != null) {
	$sql = "DELETE FROM
				dev.POPULAR_PRODUCT
			WHERE
				IDX IN (".implode(",",$popular_idx).")";
	
	$db->query($sql);
}
?>