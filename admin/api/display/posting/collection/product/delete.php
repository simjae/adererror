<?php
/*
 +=============================================================================
 | 
 | 룩북 관리 화면 - 프로젝트 상품 이미지 삭제
 | -----------
 |
 | 최초 작성	: 손성환
 | 최초 작성일	: 2023.01.26
 | 최종 수정일	: 
 | 버전		: 1.0
 | 설명		: 
 | 
 +=============================================================================
*/

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include_once("/var/www/admin/api/common/common.php");

$session_id			= sessionCheck();
$collection_idx		= $_POST['collection_idx'];
$c_product_idx		= $_POST['c_product_idx'];

if ($collection_idx != null && $c_product_idx != null) {
	$db->begin_transaction();

	try {
		for ($i=0; $i<count($c_product_idx); $i++) {
			$delete_product_sql = "
				DELETE FROM
					dev.COLLECTION_PRODUCT
				WHERE
					IDX = ".$c_product_idx[$i]." AND
					COLLECTION_IDX = ".$collection_idx."
			";
			$db->query($delete_product_sql);

			$db_result = $db->affectedRows();

			$delete_img_sql = "
				UPDATE
					dev.COLLECTION_IMG
				SET
					DEL_FLG = TRUE,
					UPDATE_DATE = NOW(),
					UPDATER = '".$session_id."'
				WHERE
					C_PRODUCT_IDX = ".$c_product_idx[$i]."
			";
			$db->query($delete_product_sql);
		}

		$db->query($delete_img_sql);
			
		$select_product_sql = "
			SELECT
				CP.IDX		C_PRODUCT_IDX
			FROM
				dev.COLLECTION_PRODUCT CP
			WHERE
				CP.COLLECTION_IDX = ".$collection_idx."
			ORDER BY
				CP.DISPLAY_NUM ASC
		";
		
		$db->query($select_product_sql);
		
		$display_num = 1;
		foreach($db->fetch() as $img_data) {
			$tmp_idx = $img_data['C_PRODUCT_IDX'];
			
			if (!empty($tmp_idx)) {
				$update_product_sql = "
					UPDATE
						dev.COLLECTION_PRODUCT
					SET
						DISPLAY_NUM = ".$display_num."
					WHERE
						IDX = ".$tmp_idx."
				";
				
				$db->query($update_product_sql);
				
				$display_num++;
			}
		}
		
		$db->commit();
		
		$json_result['code'] = 200;
		$json_result['msg'] = "선택한 컬렉션 상품 이미지가 삭제되었습니다.";
	} catch(mysqli_sql_exception $exception){
		$db->rollback();
		
		$json_result['code'] = 301;
		$json_result['msg'] = "메인 배너 등록에 실패했습니다.";
	}
}

?>