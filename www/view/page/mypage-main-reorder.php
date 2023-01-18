<style>
.reorder__wrap{
    margin-top:40px;
    width:100%;
}
.reorder__tab__btn__container{
    margin: 0 auto;
    width:230px;
    display:grid;
    place-items: center;
    grid-template-columns: 80px 80px 70px;
}
.reorder__tab__wrap{
    width:710px;
    margin:0 auto;
    margin-top:50px;
}   
.reorder__tab__wrap .contents__table{
    border-bottom:none;
    margin-top:40px!important;
}
.reorder__tab__wrap .contents__table p{
    margin-bottom:0px;
}
table.border__bottom td{
    border-bottom: 1px solid #dcdcdc;
    padding-right:0px;
}
.reorder__tab__wrap .footer{
    margin-bottom:100px;
}
.text__btn__area{
    display:flex;
    align-items:center;
    gap:10px;
    justify-content: center;
}
#alarm_reorder_result_table p{
    margin-bottom:10px;
}
.color_wrap{
    display:flex;
}
.color_chip{
    width: 6px;
    height: 6px;
    margin: 3px 5px 6px 3px;
    object-fit: contain;
    border-radius: 3px;
}
</style>

<div class="reorder__wrap">
    <div class="reorder__tab__btn__container">
        <div class="tab__btn__item"  form-id="reorder__apply__wrap" list-type="apply" onclick="getreorderList(this)">
            <img src="/images/mypage/tab/select_reorder_apply_btn.svg">
        </div>
        <div class="tab__btn__item"  form-id="reorder__alarm__wrap" list-type="alarm" onclick="getreorderList(this)">
            <img src="/images/mypage/tab/default_reorder_alarm_btn.svg">
        </div>
        <div class="tab__btn__item"  form-id="reorder__cancel__wrap" list-type="cancel" onclick="getreorderList(this)">
            <img src="/images/mypage/tab/default_reorder_cancel_btn.svg">
        </div>
    </div>
    <div class="reorder__tab__wrap">
        <div class="reorder__tab reorder__apply__wrap">
            <div class="title">
                <p>재입고알림 신청내역</p>
            </div>
            <div class="description">
                <p>·&nbsp;해당제품이 재입고되면 메시지를 발송해드립니다.</p>
                <p>·&nbsp;스팸메시지로 등록 시 SMS 발송이 제한될 수 있습니다.</p>
                <p>·&nbsp;재입고알림을 신청하시면 회원님의 SMS 수신 동의여부와 관계없이 발송됩니다.</p>
            </div>
            <div class="contents__table">
                <table class="border__bottom">
                    <colsgroup>
                        <col style="width:120px;">
                        <col style="width:120px;">
                        <col style="width:120px;">
                        <col style="width:120px;">
                        <col style="width:120px;">
                        <col style="width:110px;">
                    </colsgroup>
                    <tbody id="apply_reorder_result_table" class="reorder__result__table">
                        
                    </tbody>
                </table>
            </div>
            <div class="footer"></div>
        </div>
        <div class="reorder__tab reorder__alarm__wrap">
            <div class="title">
                <p>재입고알림 완료내역</p>
            </div>
            <div class="contents__table">
                <table class="border__bottom">
                    <colsgroup>
                        <col style="width:120px;">
                        <col style="width:120px;">
                        <col style="width:120px;">
                        <col style="width:120px;">
                        <col style="width:120px;">
                        <col style="width:110px;">
                    </colsgroup>
                    <tbody id="alarm_reorder_result_table" class="reorder__result__table">
                        
                    </tbody>
                </table>
            </div>
            <div class="footer"></div>
        </div>
        <div class="reorder__tab reorder__cancel__wrap">
            <div class="title">
                <p>재입고알림 취소내역</p>
            </div>
            <div class="contents__table">
                <table class="border__bottom">
                    <colsgroup>
                        <col style="width:120px;">
                        <col style="width:120px;">
                        <col style="width:120px;">
                        <col style="width:120px;">
                        <col style="width:120px;">
                        <col style="width:110px;">
                    </colsgroup>
                    <tbody id="cancel_reorder_result_table" class="reorder__result__table">
                        
                    </tbody>
                </table>
            </div>
            <div class="footer"></div>
        </div>
    </div>
</div>
<script>
$('.reorder__alarm__wrap').hide();
$('.reorder__cancel__wrap').hide();

function getreorderList(obj){
    var country = 'KR';
    var list_type = $(obj).attr('list-type');
    var table_id = list_type + '_reorder_result_table';
    
    $('.reorder__result__table').html('');
    $.ajax({
        type: "post",
        data: {
            'country': country, 
            'list_type' : list_type},
        dataType: "json",
        url: "http://116.124.128.246:80/_api/mypage/reorder/get",
        error: function(d) {
        },
        success: function(d) {
            var data = d.data;
            if(data != null && data.length > 0){
                $('.reorder__result__table').html('');
                for(var i = 0; i < data.length; i++){
                    var strBtn = '';
                    switch(list_type){
                        case 'apply':
                            strBtn = `
                                <div class="text__btn__area"> 
                                    <p>신청완료</p>
                                    <img src="/images/mypage/mypage_cancel_btn.svg" no="${data[i].reorder_idx}" action-type="cancel" onclick="reorderBtnAction(this)">
                                </div>
                            `;
                            break;
                        case 'alarm':
                            strBtn = `
                                    <p>알림완료</p>
                                    <p>${data[i].update_date}</p>
                            `;
                            break;
                        case 'cancel':
                            strBtn = `
                                <div class="text__btn__area">
                                    <p>취소완료</p>
                                    <img src="/images/mypage/mypage_re_apply_btn.svg" no="${data[i].reorder_idx}" action-type="re_apply" onclick="reorderBtnAction(this)">
                                </div>
                            `;
                            break;
                    }
                    var img_location = 'http://116.124.128.246:81' + data[i].img_location
                    var strDiv = `
                        <tr>
                            <td>
                                <img src="${img_location}">
                            </td>
                            <td>
                                <p>${data[i].product_name}</p>
                            </td>
                            <td>
                                <div class="color_wrap">
                                    <p>${data[i].color}</p>
                                    <div class="color_chip" style="background-color:${data[i].color_rgb}"></div>
                                </div>
                            </td>
                            <td>
                                <p>${data[i].option_name}</p>
                            </td>
                            <td>
                                <p>${parseInt(data[i].sales_price_kr).toLocaleString('ko-KR')}</p>
                            </td>
                            <td>
                                ${strBtn}
                            </td>
                        </tr>
                    `;
                    $('#' + table_id).append(strDiv);
                }
            }
        }
    });
}

function reorderBtnAction(obj){
    var action_type = $(obj).attr('action-type');
    var no = $(obj).attr('no');
    var country = 'KR';

    $.ajax({
        type: "post",
        data: {
            'country': country,
            'no' : no, 
            'action_type' : action_type 
        },
        dataType: "json",
        url: "http://116.124.128.246:80/_api/mypage/reorder/put",
        error: function(d) {
        },
        success: function(d) {
        }
    });
    var seq = 0;
    switch(action_type){
        case 'cancel':
            seq = 0;
            break;
        case 're_apply':
            seq = 2;
            break;
    }
    $('.reorder__wrap').find('.tab__btn__item').eq(seq).click();
}
</script>