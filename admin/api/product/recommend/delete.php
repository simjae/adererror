<?php

/*
 +=============================================================================
 | 
 | 추천상품 관리화면 - 추천상품 페이지 삭제
 | -------
 |
 | 최초 작성	: 손성환
 | 최초 작성일	: 2022.12.13
 | 최종 수정일	: 
 | 버전		: 1.0
 | 설명		: 
 | 
 +=============================================================================
*/

$page_idx	= $_POST['page_idx'];

if($page_idx != null){
	$delete_page_recommend_sql = "
		UPDATE
			PAGE_RECOMMEND
		SET
			DEL_FLG = TRUE
		WHERE
			IDX IN (".implode(",",$page_idx).")";
	
	$db->query($delete_page_recommend_sql);
}
?>