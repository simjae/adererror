<div class="content__card">
	<div class="card__header">
		<div class="flex justify-between">
			<h3>컬렉션 리스트</h3>
			<div class="black-btn" onClick="location.href='/display/posting/regist?posting_type=COLC'">추가하기</div>
		</div>
		<div class="drive--x"></div>
	</div>
	
	<div class="flex" style="gap:50px;margin:20px 0;">
		<div class="category__tab country_COLC country_COLC_ALL" country="ALL" style="color:#140f82;border-bottom: 3px solid #140f82;text-align: center;cursor: pointer;" onClick="clickCountryTab_COLC(this);">전체</div>
		<div class="category__tab country_COLC country_COLC_KR" country="KR" style="height:30px;color:#707070;text-align:center;cursor:pointer;" onClick="clickCountryTab_COLC(this);">한국몰</div>
		<div class="category__tab country_COLC country_COLC_EN" country="EN" style="height:30px;color:#707070;text-align:center;cursor:pointer;" onClick="clickCountryTab_COLC(this);">영문몰</div>
		<div class="category__tab country_COLC country_COLC_CN" country="CN" style="height:30px;color:#707070;text-align:center;cursor:pointer;" onClick="clickCountryTab_COLC(this);">중문몰</div>
		
		<input id="country_COLC" type="hidden" value="ALL">
	</div>
	
	<div class="card__body">
		<div id="editorial_content_ALL" class="editorial_content">
			<form id="frm-list_COLC_ALL" action="display/posting/list/get">
				<input type="hidden" name="posting_type" value="COLC">
				<input type="hidden" name="country" value="ALL">
				
				<input type="hidden" class="sort_value" name="sort_value" value="CREATE_DATE">
				<input type="hidden" class="sort_type" name="sort_type" value="DESC">
				
				<input type="hidden" class="rows" name="rows" value="10">
				<input type="hidden" class="page" name="page" value="1">
			
				<input type="hidden" class="action_type" name="action_type">
				
				<div class="info__wrap " style="justify-content:space-between; align-items: center;">
					<div class="body__info--count">
						<div class="drive--left"></div>
						총 <font id="cnt_COLC_ALL_total" class="info__count">0</font>개 
					</div>
						
					<div class="content__row">
						<select onChange="orderChange(this)" style="width:130px;float:right;margin-right:10px;">
							<option value="CREATE_DATE|DESC" selected>등록일 역순</option>
							<option value="CREATE_DATE|ASC">등록일 순</option>
							<option value="PAGE_TITLE|DESC">페이지명 역순</option>
							<option value="PAGE_TITLE|ASC">페이지명 순</option>
						</select>

						<select onChange="rowsChange(this);" style="width: 130px;">
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
							<div class="filter__btn" style="width: 130px;" onclick="deletePagePosting()">페이지 삭제</div>
							<div class="filter__btn" style="width: 130px;" onclick="copyPagePosting()">페이지 복사</div>
							<div class="filter__btn" style="width: 130px;" onclick="displayPagePosting('TRUE')">전시</div>
							<div class="filter__btn" style="width: 130px;" onclick="displayPagePosting('FALSE')">전시취소</div>
						</div>
					</div>
					<div class="overflow-x-auto">
						<TABLE style="width:100%;">
							<THEAD>
								<TR>
									<TH style="width:1%;">
										<div class="cb__color">
											<label>
												<input type="checkbox" name="selectAll" onclick="selectAllClick(this)">
												<span></span>
											</label>
										</div>
									</TH>
									<TH style="width:5%;">No.</TH>
									<TH>페이지편집</TH>
									<TH>게시물진열</TH>
									<TH>전시상태</TH>
									<TH style="width:250px;">전시기간</TH>
									<TH style="width:250px;">컬렉션명</TH>
									<TH style="width:5%;">적용몰</TH>
									<TH style="width:250px;">URL</TH>
									<TH style="width:250px;">비고(내부용)</TH>
									<TH style="width:5%;">조회수</TH>
									<TH style="width:7%;">등록일</TH>
									<TH style="width:7%;">최근수정일</TH>
								</TR>
							</THEAD>
							<TBODY id="result_table_COLC_ALL">
							</TBODY>
						</TABLE>
					</div>

				</div>
				<div class="padding__wrap">
					<input type="hidden" class="total_cnt" tab_status="COLC" country="ALL" value="0" onChange="setPaging(this);">
					<input type="hidden" class="result_cnt" tab_status="COLC" country="ALL" value="0">
					<div class="paging_COLC_ALL"></div>
				</div>
			</form>
		</div>
		
		<div id="editorial_content_KR" class="editorial_content" style="display:none;">
			<form id="frm-list_COLC_KR" action="display/posting/list/get">
				<input type="hidden" name="posting_type" value="COLC">
				<input type="hidden" name="country" value="KR">
				
				<input type="hidden" class="sort_value" name="sort_value" value="CREATE_DATE">
				<input type="hidden" class="sort_type" name="sort_type" value="DESC">
				<input type="hidden" class="rows" name="rows" value="10">
				<input type="hidden" class="page" name="page" value="1">
			
				<input type="hidden" class="action_type" name="action_type">
				
				<div class="info__wrap " style="justify-content:space-between; align-items: center;">
					<div class="body__info--count">
						<div class="drive--left"></div>
						총 <font id="cnt_COLC_KR_total" class="info__count">0</font>개 
					</div>
						
					<div class="content__row">
						<select onChange="orderChange(this)" style="width:130px;float:right;margin-right:10px;">
							<option value="CREATE_DATE|DESC">등록일 역순</option>
							<option value="CREATE_DATE|ASC">등록일 순</option>
							<option value="PAGE_TITLE|DESC">페이지명 역순</option>
							<option value="PAGE_TITLE|ASC">페이지명 순</option>
						</select>

						<select onChange="rowsChange(this);" style="width: 130px;">
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
							<div class="filter__btn" style="width: 130px;" onclick="deletePagePosting()">페이지 삭제</div>
							<div class="filter__btn" style="width: 130px;" onclick="copyPagePosting()">페이지 복사</div>
							<div class="filter__btn" style="width: 130px;" onclick="displayPagePosting('TRUE')">전시</div>
							<div class="filter__btn" style="width: 130px;" onclick="displayPagePosting('FALSE')">전시취소</div>
						</div>
					</div>
					<div class="overflow-x-auto">
						<TABLE style="width:100%;">
							<THEAD>
								<TR>
									<TH style="width:1%;">
										<div class="cb__color">
											<label>
												<input type="checkbox" name="selectAll" onclick="selectAllClick(this)">
												<span></span>
											</label>
										</div>
									</TH>
									<TH style="width:5%;">No.</TH>
									<TH>페이지편집</TH>
									<TH>게시물진열</TH>
									<TH>전시상태</TH>
									<TH style="width:250px;">전시기간</TH>
									<TH style="width:250px;">컬렉션명</TH>
									<TH style="width:5%;">적용몰</TH>
									<TH style="width:250px;">URL</TH>
									<TH style="width:250px;">비고(내부용)</TH>
									<TH style="width:5%;">조회수</TH>
									<TH style="width:7%;">등록일</TH>
									<TH style="width:7%;">최근수정일</TH>
								</TR>
							</THEAD>
							<TBODY id="result_table_COLC_KR">
							</TBODY>
						</TABLE>
					</div>
				</div>
				<div class="padding__wrap">
					<input type="hidden" class="total_cnt" tab_status="COLC" country="KR" value="0" onChange="setPaging(this);">
					<input type="hidden" class="result_cnt" tab_status="COLC" country="KR" value="0">
					<div class="paging_COLC_KR"></div>
				</div>
			</form>
		</div>
		
		<div id="editorial_content_EN" class="editorial_content" style="display:none;">
			<form id="frm-list_COLC_EN" action="display/posting/list/get">
				<input type="hidden" name="posting_type" value="COLC">
				<input type="hidden" name="country" value="EN">
				
				<input type="hidden" class="sort_value" name="sort_value" value="CREATE_DATE">
				<input type="hidden" class="sort_type" name="sort_type" value="DESC">
				
				<input type="hidden" class="rows" name="rows" value="10">
				<input type="hidden" class="page" name="page" value="1">
			
				<input type="hidden" class="action_type" name="action_type">
				
				<div class="info__wrap " style="justify-content:space-between; align-items: center;">
					<div class="body__info--count">
						<div class="drive--left"></div>
						총 <font id="cnt_COLC_EN_total" class="info__count">0</font>개 
					</div>
						
					<div class="content__row">
						<select onChange="orderChange(this)" style="width:130px;float:right;margin-right:10px;">
							<option value="CREATE_DATE|DESC">등록일 역순</option>
							<option value="CREATE_DATE|ASC">등록일 순</option>
							<option value="PAGE_TITLE|DESC">페이지명 역순</option>
							<option value="PAGE_TITLE|ASC">페이지명 순</option>
						</select>

						<select onChange="rowsChange(this);" style="width: 130px;">
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
							<div class="filter__btn" style="width: 130px;" onclick="deletePagePosting()">페이지 삭제</div>
							<div class="filter__btn" style="width: 130px;" onclick="copyPagePosting()">페이지 복사</div>
							<div class="filter__btn" style="width: 130px;" onclick="displayPagePosting('TRUE')">전시</div>
							<div class="filter__btn" style="width: 130px;" onclick="displayPagePosting('FALSE')">전시취소</div>
						</div>
					</div>
					<div class="overflow-x-auto">
						<TABLE style="width:100%;">
							<THEAD>
								<TR>
									<TH style="width:1%;">
										<div class="cb__color">
											<label>
												<input type="checkbox" name="selectAll" onclick="selectAllClick(this)">
												<span></span>
											</label>
										</div>
									</TH>
									<TH style="width:5%;">No.</TH>
									<TH>페이지편집</TH>
									<TH>게시물진열</TH>
									<TH>전시상태</TH>
									<TH style="width:250px;">전시기간</TH>
									<TH style="width:250px;">컬렉션명</TH>
									<TH style="width:5%;">적용몰</TH>
									<TH style="width:250px;">URL</TH>
									<TH style="width:250px;">비고(내부용)</TH>
									<TH style="width:5%;">조회수</TH>
									<TH style="width:7%;">등록일</TH>
									<TH style="width:7%;">최근수정일</TH>
								</TR>
							</THEAD>
							<TBODY id="result_table_COLC_EN">
							</TBODY>
						</TABLE>
					</div>
				</div>
				<div class="padding__wrap">
					<input type="hidden" class="total_cnt" tab_status="COLC" country="EN" value="0" onChange="setPaging(this);">
					<input type="hidden" class="result_cnt" tab_status="COLC" country="EN" value="0">
					<div class="paging_COLC_EN"></div>
				</div>
			</form>
		</div>
		
		<div id="editorial_content_CN" class="editorial_content" style="display:none;">
			<form id="frm-list_COLC_CN" action="display/posting/list/get">
				<input type="hidden" name="posting_type" value="COLC">
				<input type="hidden" name="country" value="CN">
				
				<input type="hidden" class="sort_value" name="sort_value" value="CREATE_DATE">
				<input type="hidden" class="sort_type" name="sort_type" value="DESC">
				
				<input type="hidden" class="rows" name="rows" value="10">
				<input type="hidden" class="page" name="page" value="1">
			
				<input type="hidden" class="action_type" name="action_type">
				
				<div class="info__wrap " style="justify-content:space-between; align-items: center;">
					<div class="body__info--count">
						<div class="drive--left"></div>
						총 <font id="cnt_COLC_CN_total" class="info__count">0</font>개 
					</div>
						
					<div class="content__row">
						<select onChange="orderChange(this)" style="width:130px;float:right;margin-right:10px;">
							<option value="CREATE_DATE|DESC">등록일 역순</option>
							<option value="CREATE_DATE|ASC">등록일 순</option>
							<option value="PAGE_TITLE|DESC">페이지명 역순</option>
							<option value="PAGE_TITLE|ASC">페이지명 순</option>
						</select>

						<select onChange="rowsChange(this);" style="width: 130px;">
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
							<div class="filter__btn" style="width: 130px;" onclick="deletePagePosting()">페이지 삭제</div>
							<div class="filter__btn" style="width: 130px;" onclick="copyPagePosting()">페이지 복사</div>
							<div class="filter__btn" style="width: 130px;" onclick="displayPagePosting('TRUE')">전시</div>
							<div class="filter__btn" style="width: 130px;" onclick="displayPagePosting('FALSE')">전시취소</div>
						</div>
					</div>
					<div class="overflow-x-auto">
						<TABLE style="width:100%;">
							<THEAD>
								<TR>
									<TH style="width:1%;">
										<div class="cb__color">
											<label>
												<input type="checkbox" name="selectAll" onclick="selectAllClick(this)">
												<span></span>
											</label>
										</div>
									</TH>
									<TH style="width:5%;">No.</TH>
									<TH>페이지편집</TH>
									<TH>게시물진열</TH>
									<TH>전시상태</TH>
									<TH style="width:250px;">전시기간</TH>
									<TH style="width:250px;">컬렉션명</TH>
									<TH style="width:5%;">적용몰</TH>
									<TH style="width:250px;">URL</TH>
									<TH style="width:250px;">비고(내부용)</TH>
									<TH style="width:5%;">조회수</TH>
									<TH style="width:7%;">등록일</TH>
									<TH style="width:7%;">최근수정일</TH>
								</TR>
							</THEAD>
							<TBODY id="result_table_COLC_CN">
							</TBODY>
						</TABLE>
					</div>
				</div>
				<div class="padding__wrap">
					<input type="hidden" class="total_cnt" tab_status="COLC" country="CN" value="0" onChange="setPaging(this);">
					<input type="hidden" class="result_cnt" tab_status="COLC" country="CN" value="0">
					<div class="paging_COLC_CN"></div>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
$(document).ready(function() {
	getPagePostingList('COLC','ALL');
	getPagePostingList('COLC','KR');
	getPagePostingList('COLC','EN');
	getPagePostingList('COLC','CN');
});

function clickCountryTab_COLC(obj) {
	var country = $(obj).attr('country');
	$('#country_COLC').val(country);
	
	if (country != null) {
		$('.editorial_content').hide();
		$('#editorial_content_' + country).show();
	}
	
	$('.country_COLC').not($(obj)).css('color','#707070');
	$('.country_COLC').not($(obj)).css('border-bottom','none');
	
	$(obj).css('color','#140f82');
	$(obj).css('border-bottom','3px solid #140f82');
}
</script>