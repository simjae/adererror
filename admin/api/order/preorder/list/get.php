<?php
/*
 +=============================================================================
 | 
 | 프리오더 관리 화면 - 프리오더 리스트 조회
 | -------
 |
 | 최초 작성	: 손성환
 | 최초 작성일	: 2022.01.15
 | 최종 수정일	: 
 | 버전		: 1.0
 | 설명		: 
 | 
 +=============================================================================
*/

$country				= $_POST['country'];

$member_level			= $_POST['member_level'];
$search_type			= $_POST['search_type'];
$search_keyword			= $_POST['search_keyword'];
$qty_min				= $_POST['qty_min'];
$qty_max				= $_POST['qty_max'];
$qty_limit_min			= $_POST['qty_limit_min'];
$qty_limit_max			= $_POST['qty_limit_max'];
$price_min				= $_POST['price_min'];
$price_max				= $_POST['price_max'];
$display_flg			= $_POST['display_flg'];

$entry_start_date		= $_POST['entry_start_date'];
$entry_end_date			= $_POST['entry_end_date'];

if ($entry_start_date != null) {
	if (isset($_POST['entry_start_time'])) {
		$entry_start_date = "'".$entry_start_date." ".$_POST['entry_start_time'].":00'";
	} else {
		$entry_start_date = "'".$entry_start_date." 00:00'";
	}
}

if ($entry_end_date != null){
	if (isset($_POST['entry_end_time'])) {
		$entry_end_date = "'".$entry_end_date." ".$_POST['entry_end_time'].":00'";
	} else {
		$entry_end_date = "'" . $entry_end_date . " 00:00'";
	}
}

$sort_type 				= $_POST['sort_type'];				//정렬 타입
$sort_value 			= $_POST['sort_value'];				//정렬 값

$rows					= $_POST['rows'];
$page					= $_POST['page'];

//검색 유형 - 디폴트
$where = '1=1';
$where .= " AND (PP.COUNTRY = '".$country."') ";
$where .= ' AND (PP.DEL_FLG = FALSE) ';
$where_cnt = $where;

if ($member_level != null && $member_level != "ALL") {
	$where .= " AND PP.MEMBER_LEVEL REGEXP '".$member_level."' ";
}

if ($search_type != null && $search_keyword != null) {
	$type_arr = array();
	for ($i=0; $i<count($search_type); $i++) {
		if (strlen($search_type[$i]) != 0) {
			array_push($type_arr,$search_type[$i]);
		}
	}
	
	$keyword_arr = array();
	for ($i=0; $i<count($search_keyword); $i++) {
		if (strlen($search_keyword[$i]) != 0) {
			array_push($keyword_arr,$search_keyword[$i]);
		}
	}
	
	if (count($type_arr) > 0 && count($keyword_arr) > 0) {
		$where .= " AND (";
		
		$tmp_where .= "";
		for ($i=0; $i<count($search_type); $i++) {
			$keyword_where = "";
			if ($search_type[$i] != null && $search_keyword[$i] != null) {
				if (strlen($tmp_where) > 0) {
					$tmp_where .= " AND ";
				}
				switch ($search_type[$i]) {
					case "name" :
						$keyword_where .= ' (PR.PRODUCT_NAME LIKE "%'.$search_keyword[$i].'%") ';
						break;
					
					case "code" :
						$keyword_where .= ' (PR.PRODUCT_CODE LIKE "%'.$search_keyword[$i].'%") ';
						break;
				}
				
				$tmp_where .= $keyword_where;
			}
		}
		
		$where .= $tmp_where;
		
		$where .= " ) ";
	}
}

if ($qty_min != null || $qty_max != null) {
	$where .= "
		AND (
				(
					SELECT
						SUM(S_QP.PRODUCT_QTY_LIMIT)
					FROM
						dev.QTY_PREORDER S_QP
					WHERE
						S_QP.PREORDER_IDX = PP.IDX
				)
	";
	
	if ($qty_min != null && $qty_max == null) {
		$where .= " >= ".$qty_min;
	
	} else if ($qty_min == null && $qty_max != null) {
		$where .= " <= ".$qty_min;
		
	} else if ($qty_min != null && $qty_max != null) {
		$where .= " BETWEEN ".$qty_min." AND ".$qty_max;
	}
	
	$where .= "
		)
	";
}

if ($qty_limit_min != null || $qty_limit_max != null) {
	$where .= "
		AND (
				(
					SELECT
						SUM(S_QP.PRODUCT_QTY_LIMIT)
					FROM
						dev.QTY_PREORDER S_QP
					WHERE
						S_QP.PREORDER_IDX = PP.IDX
				)
	";
	
	if ($qty_limit_min != null && $qty_limit_max == null) {
		$where .= " >= ".$qty_limit_min;
	
	} else if ($qty_limit_min == null && $qty_limit_max != null) {
		$where .= " <= ".$qty_limit_min;
		
	} else if ($qty_limit_min != null && $qty_limit_max != null) {
		$where .= " BETWEEN ".$qty_limit_min." AND ".$qty_limit_max;
	}
	
	$where .= "
		)
	";
}

if ($price_min != null || $price_max != null) {
	if ($price_min != null && $price_max == null) {
		$where .= " AND (PP.SALES_PRICE >= ".$price_min.") ";
	} else if ($price_min == null && $price_max != null) {
		$where .= " AND (PP.SALES_PRICE <= ".$price_max.") ";
	} else if ($price_min != null && $price_max != null) {
		$where .= " AND (PP.SALES_PRICE BETWEEN ".$price_min." AND ".$price_max.") ";
	}
}

if ($display_flg != null) {
	$where .= " AND (PP.DISPLAY_FLG = ".$display_flg.") ";
}

if ($entry_start_date != null || $entry_end_date != null) {
	if ($entry_start_date != null && $entry_end_date == null) {
		$where .= " AND (PP.ENTRY_START_DATE >= ".$entry_start_date.") ";
	} else if ($entry_start_date == null && $entry_end_date != null) {
		$where .= " AND (PP.ENTRY_END_DATE <= ".$entry_end_date.") ";
	} else if ($entry_start_date != null && $entry_end_date != null) {
		$where .= " AND (PP.ENTRY_START_DATE >= ".$entry_start_date." AND PP.ENTRY_END_DATE <= ".$entry_end_date.") ";
	}
}

$total_cnt = $db->count("dev.PAGE_PREORDER PP",$where_cnt);

$json_result = array(
	'total' => $db->count("dev.PAGE_PREORDER PP",$where),
	'total_cnt' => $total_cnt,
	'page' => $page
);

$limit_start = (intval($page)-1)*$rows;

$select_preorder_sql = "
	SELECT
		PP.IDX					AS PREORDER_IDX,
		PP.COUNTRY				AS COUNTRY,
		PP.PRODUCT_IDX			AS PRODUCT_IDX,
		CASE
			WHEN
				(
					SELECT
						COUNT(S_PI.IDX)
					FROM
						dev.PRODUCT_IMG S_PI
					WHERE
						S_PI.PRODUCT_IDX = PR.IDX AND
						S_PI.IMG_TYPE = 'P' AND
						S_PI.IMG_SIZE = 'S'
				) > 0
				THEN
					(
						SELECT
							REPLACE(S_PI.IMG_LOCATION,'/var/www/admin/www','')
						FROM
							dev.PRODUCT_IMG S_PI
						WHERE
							S_PI.PRODUCT_IDX = PR.IDX AND
							S_PI.DEL_FLG = FALSE AND
							S_PI.IMG_SIZE = 'S' AND
							S_PI.IMG_TYPE = 'P'
						ORDER BY
							S_PI.IDX ASC
						LIMIT
							0,1
					)
			ELSE
				'/images/default_product_img.jpg'
		END						AS IMG_LOCATION,
		PR.PRODUCT_CODE			AS PRODUCT_CODE,
		PR.PRODUCT_NAME			AS PRODUCT_NAME,
		(SELECT COLOR FROM dev.ORDERSHEET_MST WHERE IDX = PR.ORDERSHEET_IDX) AS COLOR,
		PP.SALES_PRICE			AS SALES_PRICE,
		PP.DISPLAY_FLG			AS DISPLAY_FLG,
		PP.ENTRY_START_DATE		AS ENTRY_START_DATE,
		PP.ENTRY_END_DATE		AS ENTRY_END_DATE,
		PP.DISPLAY_NUM			AS DISPLAY_NUM,
		PP.CREATE_DATE			AS CREATE_DATE,
		PP.CREATER				AS CREATER,
		PP.UPDATE_DATE			AS UPDATE_DATE,
		PP.UPDATER				AS UPDATER
	FROM
		dev.PAGE_PREORDER PP
		LEFT JOIN dev.SHOP_PRODUCT PR ON
		PP.PRODUCT_IDX = PR.IDX
	WHERE
		".$where."
	ORDER BY
		PP.DISPLAY_NUM ASC
";

if ($rows != null) {
	$select_preorder_sql .= " LIMIT ".$limit_start.",".$rows;
}

$db->query($select_preorder_sql);

foreach($db->fetch() as $preorder_data) {
	$preorder_idx = $preorder_data['PREORDER_IDX'];
	
	$qty_info = array();
	if (!empty($preorder_idx)) {
		$select_qty_sql = "
			SELECT
				QP.IDX					AS QTY_IDX,
				QP.OPTION_IDX			AS OPTION_IDX,
				QP.OPTION_NAME			AS OPTION_NAME,
				QP.BARCODE				AS BARCODE,
				QP.PRODUCT_QTY			AS PRODUCT_QTY,
				QP.PRODUCT_QTY_LIMIT	AS PRODUCT_QTY_LIMIT
			FROM
				dev.QTY_PREORDER QP
			WHERE
				QP.PREORDER_IDX = ".$preorder_idx."
		";
		
		$db->query($select_qty_sql);
		
		foreach($db->fetch() as $qty_data) {
			$qty_info[] = array(
				'qty_idx'			=>$qty_data['QTY_IDX'],
				'option_idx'		=>$qty_data['OPTION_IDX'],
				'option_name'		=>$qty_data['OPTION_NAME'],
				'barcode'			=>$qty_data['BARCODE'],
				'product_qty'		=>$qty_data['PRODUCT_QTY'],
				'product_qty_limit'	=>$qty_data['PRODUCT_QTY_LIMIT']
			);
		}
	}
	
	$json_result['data'][] = array(
		'num'					=>$total_cnt,
		'preorder_idx'			=>$preorder_data['PREORDER_IDX'],
		'country'				=>$preorder_data['COUNTRY'],
		'product_idx'			=>$preorder_data['PRODUCT_IDX'],
		'img_location'			=>$preorder_data['IMG_LOCATION'],
		'product_code'			=>$preorder_data['PRODUCT_CODE'],
		'product_name'			=>$preorder_data['PRODUCT_NAME'],
		'sales_price'			=>$preorder_data['SALES_PRICE'],
		'display_flg'			=>$preorder_data['DISPLAY_FLG'],
		'entry_start_date'		=>$preorder_data['ENTRY_START_DATE'],
		'entry_end_date'		=>$preorder_data['ENTRY_END_DATE'],
		'color'					=>$preorder_data['COLOR'],
		'display_num'			=>$preorder_data['DISPLAY_NUM'],
		'create_date'			=>$preorder_data['CREATE_DATE'],
		'creater'				=>$preorder_data['CREATER'],
		'update_date'			=>$preorder_data['UPDATE_DATE'],
		'updater'				=>$preorder_data['UPDATER'],
		
		'qty_info'				=>$qty_info
	);
}
?>