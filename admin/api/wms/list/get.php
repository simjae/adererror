<?php

header("Content-Type: application/javascript");

function getUrlParamter($url, $sch_tag) {
    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    return $query[$sch_tag];
}

$page_url = $_SERVER['REQUEST_URI'];
$callback = getUrlParamter($page_url, 'callback');

$sql = "
    SELECT
		CASE
			WHEN
				PI.IMG_LOCATION IS NULL
				THEN
					'/images/default_product_img.jpg'
			ELSE
				PI.IMG_LOCATION
		END					AS IMG_LOCATION,
		OO.BARCODE			AS BARCODE,
        PR.PRODUCT_NAME		AS PRODUCT_NAME,
		OO.OPTION_NAME		AS OPTION_NAME,
        OM.CATEGORY_LRG		AS CATEGORY_LRG,
        OM.CATEGORY_MDL		AS CATEGORY_MDL,
        OM.CATEGORY_SML		AS CATEGORY_SML,
        OM.CATEGORY_DTL		AS CATEGORY_DTL,
        
		LB.BOX_WIDTH		AS LOAD_BOX_WIDTH,
        LB.BOX_LENGTH		AS LOAD_BOX_DEPTH,
        LB.BOX_HEIGHT		AS LOAD_BOX_HEIGHT,
        LB.BOX_VOLUME		AS LOAD_BOX_VOLUME,
		
		DB.BOX_WIDTH		AS DELIVER_BOX_WIDTH,
        DB.BOX_LENGTH		AS DELIVER_BOX_DEPTH,
        DB.BOX_HEIGHT		AS DELIVER_BOX_HEIGHT,
        DB.BOX_VOLUME		AS DELIVER_BOX_VOLUME,
		
        PR.MEMO				AS MEMO
    FROM 
        dev.SHOP_PRODUCT PR
		LEFT JOIN dev.ORDERSHEET_MST OM ON
		PR.ORDERSHEET_IDX = OM.IDX
		LEFT JOIN dev.LOAD_BOX_INFO LB ON
		OM.LOAD_BOX_IDX = LB.IDX
		LEFT JOIN dev.DELIVER_BOX_INFO DB ON
		OM.DELIVER_BOX_IDX = DB.IDX
		LEFT JOIN dev.ORDERSHEET_OPTION OO ON
		PR.ORDERSHEET_IDX = OO.ORDERSHEET_IDX
		LEFT JOIN (
			SELECT
				S_PI.PRODUCT_IDX,
				S_PI.IMG_LOCATION
			FROM
				dev.PRODUCT_IMG S_PI
			WHERE
				S_PI.IMG_TYPE = 'P' AND
				S_PI.IMG_SIZE = 'S'
			GROUP BY
				S_PI.PRODUCT_IDX
		) AS PI ON
		PR.IDX = PI.PRODUCT_IDX
	WHERE
		PR.PRODUCT_CODE IS NOT NULL AND
		OO.BARCODE IS NOT NULL AND
		PR.ORDERSHEET_IDX > 71
";

$db->query($sql);

foreach($db->fetch() as $data){
    $img_path = 'http://116.124.128.246:81'.$data['IMG_LOCATION'];
	
    $json_result['data'][] = array(
        'img_location'			=> $img_path,
		'barcode'				=> $data['BARCODE'],
        'product_name'			=> $data['PRODUCT_NAME']."[".$data['OPTION_NAME']."]",
        'category_lrg'			=> $data['CATEGORY_LRG'],
        'category_mdl'			=> $data['CATEGORY_MDL'],
        'category_sml'			=> $data['CATEGORY_SML'],
        'category_dtl'			=> $data['CATEGORY_DTL'],
        
		'load_box_width'		=> $data['LOAD_BOX_WIDTH'],
        'load_box_depth'		=> $data['LOAD_BOX_DEPTH'],
        'load_box_height'		=> $data['LOAD_BOX_HEIGHT'],
        'load_box_volume'		=> $data['LOAD_BOX_VOLUME'],
		
		'deliver_box_width'		=> $data['DELIVER_BOX_WIDTH'],
        'deliver_box_depth'		=> $data['DELIVER_BOX_DEPTH'],
        'deliver_box_height'	=> $data['DELIVER_BOX_HEIGHT'],
        'deliver_box_volume'	=> $data['DELIVER_BOX_VOLUME'],
        
		'memo'				=> $data['MEMO']
    );
}
echo $callback.'('.$json_result['data'].');';

?>