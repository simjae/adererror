<style>
.mileage__wrap{
    margin-top:40px;
    width:100%;
}
.mileage__tab__btn__container{
    margin: 0 auto;
    width:230px;
    gap:10px;
    display:grid;
    place-items: center;
    grid-template-columns: 50px 50px 50px 70px;
}
.mileage__tab__wrap{
    margin:0 auto;
    margin-top:50px;
}   
.mileage__notice__wrap .title{
    margin-bottom:30px;
}
.mileage__tab__wrap .contents__table{
    border-top:none;
    border-bottom:none;
    margin-top:20px!important;
}
.description.tab__total{
    margin-top:20px;
    margin-bottom:40px;
}
.description.tab__notice{
    margin-top:40px;
    margin-bottom:60px;
}
table.border__bottom td{
    border-bottom: 1px solid #dcdcdc;
}
table.border__bottom__th{
    text-align: left;
}
table.border__bottom__th th{
    border-bottom: 1px solid #dcdcdc;
}
.mileage__tab__wrap .footer{
    margin-bottom:100px;
}
.mileage__table tr{
    height:55px;
}
.mileage__table tbody p{
    margin-bottom:0px;
}
.mileage__table thead p{
    margin-bottom:0px;
}

@media (min-width: 1024px){
    .mileage__tab__wrap{width:720px;}
    .pc__view{display:block}
    .mobile__view{display:none}
}
@media (max-width: 1024px){
    .mileage__tab__wrap{width:100%;}
    .pc__view{display:none}
    .mobile__view{display:block} 
    .mobile__view table{width:100%;}
}

</style>
<div class="mileage__wrap">
    <div class="mileage__tab__btn__container">
        <div class="tab__btn__item"  form-id="mileage__total__wrap" onclick="mileageGetInfo('total')">
            <img src="/images/mypage/tab/select_total_btn.svg">
        </div>
        <div class="tab__btn__item"  form-id="mileage__save__wrap" onclick="mileageGetInfo('save')">
            <img src="/images/mypage/tab/default_save_btn.svg">
        </div>
        <div class="tab__btn__item"  form-id="mileage__use__wrap" onclick="mileageGetInfo('use')">
            <img src="/images/mypage/tab/default_use_btn.svg">
        </div>
        <div class="tab__btn__item"  form-id="mileage__notice__wrap">
            <img src="/images/mypage/tab/default_notice_btn.svg">
        </div>
    </div>
    <div class="mileage__tab__wrap">
        <div class="mileage__tab mileage__total__wrap">
            <div class="title">
                <p>적립포인트 현황</p>
            </div>
            <div class="contents__table bluemark total">
                <table class="border__bottom__th" style="width:100%">
                    <colsgroup>
                        <col style="width:33%;">
                        <col style="width:33%;">
                        <col style="width:33%;">
                    </colsgroup>
                    <thead>
                        <th><p>현재 적립포인트</p></th>
                        <th><p>사용된 포인트</p></th>
                        <th><p>환불예정 포인트</p></th>
                    </thead>
                    <tbody id="mileage_summary_table">
                        <td id="mileage_point"><p>3,000</p></td>
                        <td id="uesd_mileage"><p>- 225,000</p></td>
                        <td id="refund_scheduled"><p>0</p></td>
                    </tbody>
                </table>
            </div>
            <div class="description tab__total">
                <p>·&nbsp;주문으로 발생한 적립금은 배송완료 후 7일 부터 실제 사용 가능한 적립금으로 전환됩니다.</p>
                <p>·&nbsp;적립 포인트의 적립, 사용은 ADER 자사제품에 한하여 사용가능합니다.</p>
                <p>·&nbsp;적립 포인트는 1,000단위로 사용하실 수 있습니다.</p>
                <p>·&nbsp;적립 포인트는 바우처와 함께 사용하실 수 없습니다.</p>
            </div>
            <div class="contents__table bluemark all_list">
                <div class="pc__view">
                    <table class="border__bottom border__bottom__th">
                        <colsgroup>
                            <col style="width:120px;">
                            <col style="width:120px;">
                            <col style="width:120px;">
                            <col style="width:120px;">
                            <col style="width:120px;">
                            <col style="width:110px;">
                        </colsgroup>
                        <thead>
                            <th>
                                <p>일자</p>
                            </th>
                            <th>
                                <p>주문번호</p>
                            </th>
                            <th>
                                <p>내용</p>
                            </th>
                            <th>
                                <p>구매금액</p>
                            </th>
                            <th>
                                <p>적립</p>
                            </th>
                            <th>
                                <p>사용</p>
                            </th>
                        </thead>
                        <tbody id="mileage_total_result">
                        </tbody>
                    </table>
                </div>
                <div class="mobile__view">
                    <table class="border__bottom border__bottom__th">
                        <colsgroup>
                            <col style="width:25%;">
                            <col style="width:25%;">
                            <col style="width:25%;">
                            <col style="width:25%;">
                        </colsgroup>
                        <thead>
                            <th>
                                <p>주문번호</p>
                            </th>
                            <th>
                                <p>일자</p>
                            </th>
                            <th>
                                <p>내용</p>
                            </th>
                            <th>
                                <p>포인트</p>
                            </th>
                        </thead>
                        <tbody id="mileage_total_result_mobile">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="footer"></div>
        </div>
        <div class="mileage__tab mileage__save__wrap">
            <div class="title">
                <p>적립된 포인트</p>
            </div>
            
            <div class="contents__table">
                <div class="pc__view">
                    <table class="border__bottom border__bottom__th">
                        <colsgroup>
                            <col style="width:120px;">
                            <col style="width:120px;">
                            <col style="width:120px;">
                            <col style="width:120px;">
                            <col style="width:120px;">
                            <col style="width:110px;">
                        </colsgroup>
                        <thead>
                            <th>
                                <p>일자</p>
                            </th>
                            <th>
                                <p>주문번호</p>
                            </th>
                            <th>
                                <p>내용</p>
                            </th>
                            <th>
                                <p>구매금액</p>
                            </th>
                            <th>
                                <p>적립</p>
                            </th>
                            <th>
                                <p>사용</p>
                            </th>
                        </thead>
                        <tbody id="mileage_save_result">
                        </tbody>
                    </table>
                </div>
                <div class="mobile__view">
                    <table class="border__bottom border__bottom__th">
                        <colsgroup>
                            <col style="width:25%;">
                            <col style="width:25%;">
                            <col style="width:25%;">
                            <col style="width:25%;">
                        </colsgroup>
                        <thead>
                            <th>
                                <p>주문번호</p>
                            </th>
                            <th>
                                <p>일자</p>
                            </th>
                            <th>
                                <p>내용</p>
                            </th>
                            <th>
                                <p>포인트</p>
                            </th>
                        </thead>
                        <tbody id="mileage_save_result_mobile">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="footer"></div>
        </div>
        <div class="mileage__tab mileage__use__wrap">
            <div class="title">
                <p>사용된 포인트</p>
            </div>
            
            <div class="contents__table">
                <div class="pc__view">
                    <table class="border__bottom border__bottom__th">
                        <colsgroup>
                            <col style="width:120px;">
                            <col style="width:120px;">
                            <col style="width:120px;">
                            <col style="width:120px;">
                            <col style="width:120px;">
                            <col style="width:110px;">
                        </colsgroup>
                        <thead>
                            <th>
                                <p>일자</p>
                            </th>
                            <th>
                                <p>주문번호</p>
                            </th>
                            <th>
                                <p>내용</p>
                            </th>
                            <th>
                                <p>구매금액</p>
                            </th>
                            <th>
                                <p>적립</p>
                            </th>
                            <th>
                                <p>사용</p>
                            </th>
                        </thead>
                        <tbody id="mileage_use_result">
                        </tbody>
                    </table>
                </div>
                <div class="mobile__view">
                    <table class="border__bottom border__bottom__th">
                        <colsgroup>
                            <col style="width:25%;">
                            <col style="width:25%;">
                            <col style="width:25%;">
                            <col style="width:25%;">
                        </colsgroup>
                        <thead>
                            <th>
                                <p>주문번호</p>
                            </th>
                            <th>
                                <p>일자</p>
                            </th>
                            <th>
                                <p>내용</p>
                            </th>
                            <th>
                                <p>포인트</p>
                            </th>
                        </thead>
                        <tbody id="mileage_use_result_mobile">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="footer"></div>
        </div>
        <div class="mileage__tab mileage__notice__wrap">
            <div class='title'><p>적립포인트 유의사항</p></div>
            <div class='description tab__notice'>
                <p>·&nbsp;주문으로 발생한 적립금은 배송완료 후 7일 부터 실제 사용 가능한 적립금으로 전환됩니다 부터 실제 사용 가능한 적립금으로 전환됩니다.</p>
                <p>·&nbsp;적립 포인트의 적립, 사용은 ADER 자사제품에 한하여 사용가능합니다.</p>
                <p>·&nbsp;적립 포인트는 1,000단위로 사용하실 수 있습니다.</p>
                <p>·&nbsp;적립 포인트는 바우처와 함께 사용하실 수 없습니다.</p>
            </div>
            <div class="footer"></div>
        </div>
    </div>
</div>
<script>
$('.mileage__alarm__wrap').hide();
$('.mileage__cancel__wrap').hide();


function mileageGetInfo(str){
    var list_type = str;
    var country = 'KR';

    if(str == 'total'){
        mileageGetSummary();
    }
    
    $('#mileage_' + list_type + '_result').html('');
    $('#mileage_' + list_type + '_result_mobile').html('');
    $('#mileage_' + list_type + '_result').html(`
        <tr>
            <td colspan="6" style="text-align:center">
                <p>조회결과가 없습니다.</p>
            </td>
        </tr>
    `);
    $('#mileage_' + list_type + '_result_mobile').html(`
        <tr>
            <td colspan="4" style="text-align:center">
                <p>조회결과가 없습니다.</p>
            </td>
        </tr>
    `);

    $.ajax({
        type: "post",
        data: {'country': 'KR', 'list_type': str},
        dataType: "json",
        url: "http://116.124.128.246:80/_api/mypage/mileage/list/get",
        error: function(d) {
        },
        success: function(d) {
            if(d.code == 200){
                if(d.data != null && d.data.length > 0){
                    $('#mileage_' + list_type + '_result').html('');
                    $('#mileage_' + list_type + '_result_mobile').html('');

                    d.data.forEach(function(row){
                        var price_str = '';

                        var mileage_usable_inc = parseInt(row.mileage_usable_inc);
                        var mileage_usable_dec = parseInt(row.mileage_usable_dec);

                        var mileage_usable_val = mileage_usable_inc - mileage_usable_dec;
                        var mileage_usable_str = mileage_usable_val.toLocaleString('ko-KR');
                        if(mileage_usable_val > 0){
                            mileage_usable_str  = '+ ' + mileage_usable_str;
                        }
                        else if(mileage_usable_val < 0){
                            mileage_usable_str  = '- ' + mileage_usable_str;
                        }

                        if(row.price_total != ""){
                            row.price_total = parseInt(row.price_total).toLocaleString('ko-KR');
                        }

                        var strDiv = 
                                `
                                <tr>
                                    <td>
                                        <p>${row.update_date}</p>
                                    </td>
                                    <td>
                                        <p class="underline">${row.ordernum}</p>
                                    </td>
                                    <td>
                                        <p>${row.mileage_type}</p>
                                    </td>
                                    <td>
                                        <p>${row.price_total}</p>
                                    </td>
                                    <td>
                                        <p>+ ${parseInt(row.mileage_usable_inc).toLocaleString('ko-KR')}</p>
                                    </td>
                                    <td>
                                        <p>${parseInt(row.mileage_usable_dec).toLocaleString('ko-KR')}</p>
                                    </td>
                                </tr> 
                        `;
                        $('#mileage_' + list_type + '_result').append(strDiv);

                        var strMobileDiv = 
                                `
                                <tr>
                                    <td>
                                        <p class="underline">${row.ordernum}</p>
                                    </td>
                                    <td>
                                        <p>${row.update_date}</p>
                                    </td>
                                    <td>
                                        <p>${row.mileage_type}</p>
                                    </td>
                                    <td>
                                        <p>${mileage_usable_str}</p>
                                    </td>
                                </tr> 
                        `;
                        $('#mileage_' + list_type + '_result_mobile').append(strMobileDiv);
                    })
                }
            }
        }
    });
}
function mileageGetSummary(){
    $.ajax({
        type: "post",
        data: {'country': 'KR'},
        dataType: "json",
        url: "http://116.124.128.246:80/_api/mypage/mileage/get",
        error: function(d) {
        },
        success: function(d) {
            if(d.code == 200){
                if(d.data != null){
                    var data = d.data;

                    var mileage_point
                    var uesd_mileage
                    var refund_scheduled
                    $('#mileage_point').find('p').text(parseInt(data.mileage_balance).toLocaleString('ko-KR'));
                    $('#uesd_mileage').find('p').text(parseInt(data.refund_scheduled).toLocaleString('ko-KR'));
                    $('#refund_scheduled').find('p').text(parseInt(data.used_mileage).toLocaleString('ko-KR'));
                }
            }
        }
    });
}
</script>