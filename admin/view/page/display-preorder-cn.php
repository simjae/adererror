<div class="content__card">
	<div class="card__header">
		<div class="flex justify-between">
			<h3>중국몰 프리오더 검색</h3>
			<div class="black-btn" onclick="moveRegistPage('CN')">중국몰 프리오더 등록</div>
		</div>
		<div class="drive--x"></div>
	</div>

	<div class="card__body">
		<form id="frm-preorder-filter_CN" action="order/preorder/list/get">
			<?php
			$sql = " 	SELECT MAX(DISPLAY_NUM) AS MAX 
						FROM dev.PAGE_PREORDER 
						WHERE COUNTRY='CN' ";
			$db->query($sql);
			$display_num_max = 0;
			foreach($db->fetch() as $data){
				$display_num_max = $data['MAX'];
			}
			?>
			<input type="hidden" id="display_num_max" value="<?=$display_num_max?>">
			<input type="hidden" name="country" value="CN">
			<input type="hidden" class="sort_value" name="sort_value" value="CREATE_DATE">
			<input type="hidden" class="sort_type" name="sort_type" value="DESC">
			<input type="hidden" class="rows" name="rows" value="10">
			<input type="hidden" class="page" name="page" value="1">
			<div class="body__info--count" style="display: block;margin:20px 0;">
				<div class="drive--left"></div>
			</div>

			<div class="content__wrap">
				<div class="content__title">검색 분류</div>
				<div class="content__row search_type_td" style="display: block;">
					<select class="fSelect eSearch search_type" name="search_type[]" style="width:163px;">
						<option value="" selected>검색분류 선택</option>
						<option value="name">상품명</option>
						<option value="code">상품코드</option>
					</select>
					<input type="text" class="search_keyword" name="search_keyword[]" value="" style="width:70%;">
				</div>
			</div>

			<div class="content__wrap grid__half">
				<div class="half__box__wrap">
					<div class="content__title">프리오더 시작일</div>
					<div class="content__row">
						<div class="content__date__wrap">
							<div class="content__date__picker">
								<input class="date_param" type="date" name="entry_start_date"
									class="margin-bottom-6" placeholder="From" readonly style="width:150px;"
									date_type="entry" onChange="dateParamChange(this);">
							</div>
						</div>
						<div class="content__date__wrap">
							<div class="content__date__picker">
								<select class="display_date hour" type="select" name="entry_start_time" 
								date_type="entry" onChange="dateParamChange(this);" style="width:80px">
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="half__box__wrap">
					<div class="content__title">프리오더 종료일</div>
					<div class="content__row">
						<div class="content__date__wrap">
							<div class="content__date__picker">
								<input class="date_param" type="date" name="entry_end_date"
									class="margin-bottom-6" placeholder="From" readonly style="width:150px;"
									date_type="entry" onChange="dateParamChange(this);">
							</div>
						</div>
						<div class="content__date__wrap">
							<div class="content__date__picker">
								<select class="display_date hour" type="select" name="entry_end_time" 
								date_type="entry" onChange="dateParamChange(this);" style="width:80px">
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content__wrap ">
				<div class="content__title">판매 가격</div>
				<div class="content__row">
					<input type="number" name="price_min" value=""
						style="height:28px;border:solid 1px #bfbfbf;width:100px;margin-right:5px;">원
					<span> ~ </span>
					<input type="number" name="price_max" value=""
						style="height:28px;border:solid 1px #bfbfbf;width:100px;margin-right:5px;">원	
				</div>
            </div>
            <div class="content__wrap">
                <div class="content__title">멤버 레벨</div>
                <div class="content__row">
                    <div class="rd__block">
                        <input id="member_level_CN_all" type="radio" name="member_level" value="ALL" checked>
                        <label for="member_level_CN_all">전체</label>
<?php
						$get_member_level_sql = "
							SELECT
								IDX,
								TITLE
							FROM
								dev.MEMBER_LEVEL
							WHERE
								DEL_FLG = FALSE
						";
						$db->query($get_member_level_sql);

						foreach($db->fetch() as $level_info){
?>
                            <input id="member_level_CN_<?=$level_info['IDX']?>" type="radio" name="member_level" value="<?=$level_info['IDX']?>">
                            <label for="member_level_CN_<?=$level_info['IDX']?>"><?=$level_info['TITLE']?></label>				    
<?php
						}
?>
                    </div>
                </div>
            </div>
		</form>
	</div>

	<div class="card__footer">
		<div class="footer__btn__wrap">
			<div class="detail_toggle" toggle="hide"></div>
			<div class="btn__wrap--lg">
				<div class="blue__color__btn" onClick="getPreorderList('CN');"><span>검색</span></div>
				<div class="defult__color__btn" onClick="init_fileter('frm-preorder-filter_CN','getPreorderList','CN')"><span>초기화</span></div>
			</div>
		</div>
	</div>
</div>

<div class="content__card">
	<div class="card__header">
		<div class="flex justify-between" style="gap:20px;">
			<div class="flex items-center" style="gap: 20px;">
				<h3>중국몰 프리오더 검색 결과</h3>
			</div>
		</div>
		<div class="drive--x"></div>
	</div>
	<div class="card__body">
		<form id="frm-preorder-list_CN">
			<div class="info__wrap " style="justify-content:space-between; align-items: center;">
				<div class="body__info--count">
					<div class="drive--left"></div>
					총 상품 수 <font class="cnt_total info__count">0</font>개 / 검색결과 <font class="cnt_result info__count">0
					</font>개
				</div>

				<div class="content__row">
					<select name="rows" style="width:163px;margin-right:10px;float:right;" onChange="rowsChange(this);">
						<option value="10" selected>10개씩보기</option>
						<option value="20">20개씩보기</option>
						<option value="30">30개씩보기</option>
						<option value="50">50개씩보기</option>
						<option value="100">100개씩보기</option>
						<option value="200">200개씩보기</option>
						<option value="300">300개씩보기</option>
						<option value="500">500개씩보기</option>
					</select>
				</div>
			</div>

			<div class="table table__wrap">
				<div class="table__filter">
					<div class="filrer__wrap">
						<!--<div style="width: 140px;" class="filter__btn" action_type="prod_copy" onclick="prodActionCheck(this);">복사</div>-->
						<div style="width: 140px;" class="filter__btn" action_type="prod_delete"
							onclick="deletePreorder();">삭제</div>
						<div style="width: 140px;" class="filter__btn" onclick="toggleDisplayFlg(this);">활성/비활성</div>
					</div>
				</div>
				<div class="double__table__container">
					<table class="preorder__checkbox__table">
						<colgroup>
							<col width="3%">
						</colgroup>
						<thead>
							<tr class="checkbox_tr_CN">
								<th class="check__box__area">
									<div class="td__wrap">
										<div class="cb__color">
											<label>
												<input type="checkbox" class="select" name="preorder_idx[]" value="" onclick="selectAllClick(this,'CN')">
												<span></span>
											</label>
										</div>
									</div>
								</th>
							</tr>
						</thead>
						<tbody id="preorder_checkbox_table_CN">
						</tbody>
					</table>
					<div class="overflow-x-auto" style="width:90vw">
						<table>
							<colgroup>
								<col width="8%">
								<col width="3%">
								<col width="auto">
								<col width="8%">
								<col width="8%">
								<col width="8%">
								<col width="8%">
								<col width="8%">
								<col width="8%">
								<col width="15%">
								<col width="8%">
								<col width="8%">
							</colgroup>
							<thead>
								<tr>
									<th class="marker_td_CN">순서변경</th>
									<th>No.</th>
									<th>프리오더 상품정보</th>
									<th>사이즈</th>
									<th>프리오더<br>판매 수량</th>
									<th>프리오더<br>주문 수량</th>
									<th>개별 주문현황 조회</th>
									<th>전체 주문현황 조회</th>
									<th>프리오더 판매 가격</th>
									<th>프리오더 기간</th>
									<th>편집</th>
									<th>활성</th>
								</tr>
							</thead>
							<tbody id="preorder_result_table_CN"></tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="padding__wrap">
				<input type="hidden" class="total_cnt" value="0" onChange="setPaging(this);">
				<input type="hidden" class="result_cnt" value="0" onChange="setPaging(this);">
				<div class="paging"></div>
			</div>
		</form>
	</div>
</div>

<script>
$(document).ready(function () {
	getPreorderList('CN');
	timeSelectSet('CN');
});
</script>