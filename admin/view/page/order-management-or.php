
<div class="content__card">
	<form id="frm-list_OR" action="order/list/get">
		<input type="hidden" name="tab_status" value="OR">
		
		<input type="hidden" class="sort_type" name="sort_type" value="DESC">
		<input type="hidden" class="sort_value" name="sort_value" value="CREATE_DATE">
		
		<input type="hidden" class="rows" name="rows" value="10">
		<input type="hidden" class="page" name="page" value="1">
		
		<input type="hidden" class="select_column" name="select_column" value="">
		<input type="hidden" class="select_product_flg" name="select_product_flg" value="false">
		
		<div class="card__header">
			<div class="card__header">
				<h3>전체 주문 검색</h3>
				<div class="drive--x"></div>
			</div>
		</div>
		<div class="card__body">
			<div class="content__wrap">
				<div class="content__title">쇼핑몰</div>
				<div class="content__row" >
					<select class="fSelect" name="country" style="width:163px">
						<option value="KR" selected>한국몰</option>
						<option value="EN">영문몰</option>
						<option value="CN">중문몰</option>
					</select>
				</div>
			</div>
			
			<div class="content__wrap" style="align-items: start;">
				<div class="content__title">주문상태</div>
				<div class="content__row" style="display:block;">
					<div class="rd__block">
						<input type="radio" id="order_status_ALL" class="radio__input" value="ALL" name="order_status" checked>
						<label for="order_status_ALL">전체</label>
						
						<input type="radio" id="order_status_ORF" class="radio__input" value="ORF" name="order_status">
						<label for="order_status_ORF">주문환불</label>
						
						<input type="radio" id="order_status_ORP" class="radio__input" value="ORP" name="order_status">
						<label for="order_status_ORP">환불완료</label>
					</div>
				</div>
			</div>
			<div class="content__wrap">
				<div class="content__title">환불 검색범위</div>
				<div class="content__row">
					<div class="rd__block">
						<input type="radio" id="refund_type_ALL" class="radio__input" value="ALL" name="refund_type" checked>
						<label for="refund_type_ALL">전체</label>
						
						<input type="radio" id="refund_type_OIR" class="radio__input" value="OIR" name="refund_type">
						<label for="refund_type_OIR">전체 환불</label>
						
						<input type="radio" id="refund_type_OPR" class="radio__input" value="OPR" name="refund_type">
						<label for="refund_type_OPR">부분 환불</label>
					</div>
				</div>
			</div>
			<div class="content__wrap ">
				<div class="content__title">검색어</div>
				<div class="content__row search_keyword_td" style="display:block;">
					<div class="row">
						<select class="fSelect search_keyword" name="search_keyword[]" style="width:163px;" onchange="searchKeywordChange(this)">
							<option value="ALL" selected>검색 키워드 선택</option>
							<option value="order_code">주문번호</option>
							<option value="delivery_num">운송장번호</option>
							<option value="member_name">멤버 이름</option>
							<option value="member_id">멤버 아이디</option>
							<option value="member_tel">멤버 핸드폰</option>
							<option value="member_email">멤버 이메일</option>
							<option value="to_place">배송지</option>
							<option value="to_name">수령자 이름</option>
							<option value="to_mobile">수령자 핸드폰</option>
							<option value="order_memo">주문 메모</option>
						</select>
						
						<input type="text" name="keyword_param[]" value="" style="width:60%;">
						<button style="width:30px;height:30px;border:1px solid;background-color:#ffff;margin-left:15px;cursor:pointer;" action_type="append" onclick="searchKeywordBtnClick(this)">+</button>
						<button style="width:30px;height:30px;border:1px solid;background-color:#ffff;margin-left:15px;cursor:pointer;" action_type="remove" onclick="searchKeywordBtnClick(this)">-</button>
					</div>
				</div>
			</div>
			
			<div class="content__wrap">
				<div class="content__title">기간</div>
				<div class="content__row">
					<select class="fSelect" name="date_type" style="width:163px;" class="fSelect disabled">
						<option value="ALL" selected>기간정보 선택</option>
						<option value="order_date">주문일</option>
						<option value="refund_date">조문 환불일</option>
						<option value="delivery_start_date">배송 시작일</option>
						<option value="delivery_end_date">배송 종료일</option>
					</select>
					
					<div class="content__date__wrap">
						<div class="content__date__btn">
							<input id="date_param_OR" type="hidden" name="date_param" value="" style="width:150px;">

							<div class="search_date_OR date__picker" date_type="OR" date="today"	type="button" onclick="searchDateClick(this);">오늘</div>
							<div class="search_date_OR date__picker" date_type="OR" date="01d"	type="button" onclick="searchDateClick(this);">어제</div>
							<div class="search_date_OR date__picker" date_type="OR" date="03d"	type="button" onclick="searchDateClick(this);">3일</div>
							<div class="search_date_OR date__picker" date_type="OR" date="07d"	type="button" onclick="searchDateClick(this);">7일</div>
							<div class="search_date_OR date__picker" date_type="OR" date="15d"	type="button" onclick="searchDateClick(this);">15일</div>
							<div class="search_date_OR date__picker" date_type="OR" date="01m"	type="button" onclick="searchDateClick(this);">1개월</div>
							<div class="search_date_OR date__picker" date_type="OR" date="03m"	type="button" onclick="searchDateClick(this);">3개월</div>
							<div class="search_date_OR date__picker" date_type="OR" date="01y"	type="button" onclick="searchDateClick(this);">1년</div>
						</div>
						
						<div class="content__date__picker">
							<input id="date_from_OR" class="date_param_OR" type="date" name="date_from" class="margin-bottom-6" placeholder="From" readonly style="width:150px;" date_type="OR" onChange="dateParamChange(this);">
								<font>~</font>
							<input id="date_to_OR" class="date_param_OR" type="date" name="date_to" placeholder="To" readonly style="width:150px;" date_type="OR" onChange="dateParamChange(this);">
						</div>
					</div>
				</div>
			</div>
			
			<div class="content__wrap">
				<div class="content__title">상품정보</div>
				<div class="content__row search_product_td" style="display:block;">
					<div class="row">
						<select class="fSelect eSearch search_product" name="search_product[]" style="width:163px;" onChange="searchTypeChange(this);">
							<option value="ALL" selected>상품정보 선택</option>
							<option value="code">상품 코드</option>
							<option value="name">상품 이름</option>
						</select>
						
						<input type="text" name="product_param[]" value="" style="width:60%;">
						<button style="width:30px;height:30px;border:1px solid;background-color:#ffff;margin-left:15px;cursor:pointer;" action_type="append" onclick="searchProductTypeBtnClick(this)">+</button>
						<button style="width:30px;height:30px;border:1px solid;background-color:#ffff;margin-left:15px;cursor:pointer;" action_type="remove" onclick="searchProductTypeBtnClick(this)">-</button>
					</div>
				</div>
			</div>
			
			<div class="content__wrap grid__half">
				<div class="half__box__wrap">
					<div class="content__title">배송업체</div>
					<div class="content__row">
						<select name="delivery_company" class="fSelect" style="width:163px;">
							<option value="ALL">배송업체 선택</option>
							<?php
								$sql = "SELECT
											IDX				AS DELIVERY_IDX,
											COMPANY_NAME	AS COMPANY_NAME
										FROM
											dev.DELIVERY_COMPANY";
								$db->query($sql);
								foreach($db->fetch() as $data) {
							?>
							<option value="<?=$data['DELIVERY_IDX']?>"><?=$data['COMPANY_NAME']?></option>
							<?php
								}
							?>
						</select>
					</div>
				</div>
				
				<div class="half__box__wrap">
					<div class="content__title">배송 구분</div>
					<div class="content__row">
						<div class="rd__block">
							<input type="radio" id="delivery_type_ALL_OR" class="radio__input" value="ALL" name="delivery_type" checked>
							<label for="delivery_type_ALL_OR">전체</label>
							
							<input type="radio" id="delivery_type_KR_OR" class="radio__input" value="KR" name="delivery_type">
							<label for="delivery_type_KR_OR">국내 배송</label>
							
							<input type="radio" id="delivery_type_FR_OR" class="radio__input" value="FR" name="delivery_type">
							<label for="delivery_type_FR_OR">해외 배송</label>
						</div>
					</div>
				</div>
			</div>
			
			<div class="card__body--hide detail_hidden" style="display: none;">
				<div class="content__wrap">
					<div class="content__title">멤버 레벨</div>
					<div class="content__row">
						<div class="rd__block">
							<select class="fSelect" name="member_level" style="width:163px;">
								<option value="ALL">전체등급</option>
								<?php
									$sql = "SELECT
												IDX		AS LEVEL_IDX,
												TITLE	AS TITLE
											FROM
												dev.MEMBER_LEVEL";
									
									$db->query($sql);
									foreach($db->fetch() as $data) {
								?>
								<option value="<?=$data['LEVEL_IDX']?>"><?=$data['TITLE']?></option>
								<?php
									}
								?>
							</select>
						</div>
					</div>
				</div>
				
				<div class="content__wrap grid__half">
					<div class="half__box__wrap">
						<div class="content__title">금액 조건</div>
						<div class="content__row">
							<select class="fSelect" name="price_type" style="width:163px;">
								<option value="ALL" selected>금액조건 선택</option>
								<option value="PRICE_PRODUCT">상품 총 가격</option>
								<option value="PRICE_MILEAGE_POINT">사용 적립 포인트</option>
								<option value="PRICE_CHARGE_POINT">사용 충전 포인트</option>
								<option value="PRICE_DISCOUNT">자체 할인가</option>
								<option value="PRICE_DELIVERY">배송비</option>
								<option value="PRICE_TOTAL">총 가격</option>
							</select>
							
							<input type="number" step="0.01" name="price_min" value="0" style="width:100px;">
							~
							<input type="number" step="0.01" name="price_max" value="0" style="width:100px;">
						</div>
					</div>
					
					<div class="half__box__wrap">
						<div class="content__title">주문 상품 수량</div>
						<div class="content__row">
							<input type="number" name="qty_min" value="0" style="width:100px;">
							~
							<input type="number" name="qty_max" value="0" style="width:100px;">
						</div>
					</div>
				</div>
				
				<div class="content__wrap grid__half">
					<div class="half__box__wrap">
						<div class="content__title">결제수단</div>
						<div class="content__row">
							<select class="fSelect" name="pg_payment" style="width:163px;">
								<option value="ALL" selected>결제수단 선택</option>
								<option value="PRICE_PRODUCT">상품 총 가격</option>
								<option value="PRICE_MILEAGE">사용 적립금</option>
								<option value="PRICE_DISCOUNT">자체 할인가</option>
								<option value="PRICE_DELIVERY">배송비</option>
								<option value="PRICE_TOTAL">총 가격</option>
							</select>
						</div>
					</div>
					
					<div class="half__box__wrap">
						<div class="content__title">할인 수단</div>
						<div class="content__row">
							<div class="cb__color">
								<label>
									<input type="checkbox" name="discount_type" value="mileage">
									<span>적립금</span>
								</label>
								
								<label>
									<input type="checkbox" name="discount_type" value="coupon">
									<span>쿠폰</span>
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="card__footer">
			<div class="footer__btn__wrap">
				<div id="detail_toggle" toggle="hide" onclick="detailToggleClick(this)">상세 검색 열기 +</div>
				<div class="btn__wrap--lg">
					<div  class="blue__color__btn" onClick="getOrderInfoList('OR');"><span>검색</span></div>
					<div class="defult__color__btn" onClick="init_fileter('frm-list_OR', 'getOrderInfoList')"><span>초기화</span></div>
				</div>
			</div>
		</div> 
		<div class="hidden">
			<div class="excel__table__warp">
				<table id="excel_table_OR">
					<thead id="excel_table_head_OR">
					</thead>
					<tbody id="excel_result_table_OR">
					</tbody>
				</table>
			</div>
		</div> 
	</form>
</div>

<div class="content__card">
	<div class="card__header">
		<h3>전체 주문 검색 결과</h3>
		<div class="drive--x"></div>
	</div>
	<div class="card__body">
		<form id="frm-action-OR">
			<div class="info__wrap " style="justify-content:space-between; align-items: center;">
				<div class="body__info--count">
					<div class="drive--left"></div>
					총 <font class="cnt_total info__count">0</font>건/검색결과 <font class="cnt_result info__count">0</font>건
				</div>
					
				<div class="content__row">
					<select style="width:163px;float:right;margin-right:10px;" onChange="orderChange(this);">
						<option value="CREATE_DATE|DESC">등록일 역순</option>
						<option value="CREATE_DATE|ASC">등록일 순</option>
						<option value="PRODUCT_NAME|DESC">상품명 역순</option>
						<option value="PRODUCT_NAME|ASC">상품명 순</option>
						<option value="SALES_PRICE_KR|DESC">판매가(힌국몰) 역순</option>
						<option value="SALES_PRICE_KR|ASC">판매가(힌국몰) 순</option>
						<option value="SALES_PRICE_EN|DESC">판매가(영문몰) 역순</option>
						<option value="SALES_PRICE_EN|ASC">판매가(영문몰) 순</option>
						<option value="SALES_PRICE_CN|DESC">판매가(중문몰) 역순</option>
						<option value="SALES_PRICE_CN|ASC">판매가(중문몰) 순</option>
					</select>
					
					<select name="rows" style="width:163px;float:right;" onChange="rowsChange(this);">
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

			<div class="table table__wrap tabNum tabNum_01">
				<div class="table__filter">
					<div class="filrer__wrap" style="width:420px;">
						<div style="width: 140px;" class="filter__btn" onclick="excelDownload('OR', 'DF');">엑셀 다운로드(일반양식)</div>
						<div style="width: 140px;" class="filter__btn" onclick="excelDownload('OR', 'SL');">엑셀 다운로드(매출정보)</div>
						<div style="width: 140px;" class="filter__btn" onclick="putOrderInfo('OR')">환불완료처리</div>
					</div>
					<div style="width:50%;">
						<div class="btn" style="width:100px;text-align:center;float:right;" onClick="openSelectColumnModal('OR');">설정</div>
					</div>
				</div>	
				<div class="double__table__container">
					<div class="overflow-x-auto top__scroll">
						<table class="checkbox__table">
							<colgroup>
								<col width="3%">
							</colgroup>
							<thead>
								<tr class="checkbox_tr">
									<th class="check__box__area">
										<div class="td__wrap">
											<div class="cb__color">
												<label>
													<input type="checkbox" name="selectAll1" onclick="selectAll(this)" value="">
													<span></span>
												</label>
											</div>
										</div>
									</th>
								</tr>
							</thead>
							<tbody id="result_checkbox_table_OR">
							</tbody>
						</table>
					</div>
					<div class="overflow-x-auto top__scroll">
						<TABLE id="result_table_OR" style="min-width:100%;width:auto;"></TABLE>
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
$(document).ready(function() {
	getOrderInfoList('OR');
});

</script>