<style>
#answer{
	margin-top : 50px;
}
</style>
<div class="content__card" style="width:950px;margin: 0;">
    <input id="json_str" type="hidden"  value='<?=$json_str?>'>
    <input id="page_idx" type="hidden" name="page_idx" value="">
    <input id="page_idx" type="hidden" name="country" value="">

    <div class="card__header">
        <div class="flex justify-between">
            <h3 id='preview_title'>1:1문의 프리뷰</h3>
            <a href="javascript:;" onclick="modal_close();" class="btn-close"><i class="xi-close"></i></a>
        </div>
        <div class="drive--x"></div>
    </div>
    <div class="card__body">
        <div class="content__wrap">
            <div class="content__title">카테고리</div>
            <div class="content__row">
                <span name="category" style="width:200px"></span>
            </div>
        </div>
        <div class="content__wrap">
            <div class="content__title">작성자</div>
            <div class="content__row">
                <span name="creater" style="width:100%"></span>
            </div>
        </div>
        <div class="content__wrap">
            <div class="content__title">제목</div>
            <div class="content__row">
                <span name="title" style="width:100%"></span>
            </div>
        </div>
        <div class="content__wrap">
            <div class="content__title">제품명</div>
            <div class="content__row">
                <span name="product_name" style="width:100%"></span>
            </div>
        </div>
        <div class="content__wrap">
            <div class="content__title">작성시간</div>
            <div class="content__row">
                <span name="create_date" style="width:200px"></span>
            </div>
        </div>
        <div class="content__wrap">
            <div class="content__title content">문의 상세내용</div>
            <div class="content__row" style="width:100%;overflow:scroll;">
                <p name="contents" style="min-height:200px;width:100%;border: 1px solid #000;"></p>
            </div>
        </div>
    </div>
</div>
<script>

$(document).ready(function() {
    var json_str = $('#json_str').val();
    var json_data = eval("(" + json_str + ")");

	var page_idx = json_data.page_idx;
    var country = json_data.country;

	$.ajax({
		type: "post",
		data: {
			'board_idx' : page_idx,
            'country' : country,
            'tab_num' : '02',
            'subtab_num' : '01'
		},
		dataType: "json",
		url: config.api + "page/board/get",
		error: function() {
			alert("1:1문의 불러오기 처리에 실패했습니다.");
		},
		success: function(data) {
			if(data.code == 200) {
                $("span[name='category']").text('1:1문의');
                $("span[name='creater']").text(data['data'][0].creater_name+'('+data['data'][0].creater_level+')');
                $("span[name='title']").text(data['data'][0].title);
                $("span[name='product_name']").text(data['data'][0].product_name);
                $("span[name='create_date']").text(data['data'][0].create_date);
				$("p[name='contents']").html(data['data'][0].contents);
			}
		}
	});
});	

</script>