<style>
.voucher__wrap{
    margin-top:40px;
    width:100%;
}
.voucher__tab__btn__container{
    margin: 0 auto;
    width:382px;
    display:grid;
    place-items: center;
    grid-template-columns: 94px 94px 94px 70px;
}

.voucher__tab{
    width:470px;
    margin:0 auto;
    margin-top:50px;
    font-family: var(--ft-no-fu);
    font-size: 11px;
}
.voucher__tab__wrap .description{
    margin-top:30px;
}
.voucher__tab__wrap .footer{
    margin-bottom:100px
}
.voucher__tab__wrap .footer p{
    margin-top:10px;
}
.voucher__tab__wrap .info{
    padding-top:10px;
    padding-bottom:10px;
    margin-top:20px;
    border-top: 1px solid #dcdcdc;
}
.voucher__tab__wrap p{
    margin-bottom:10px;
}
.date__info{
    text-align:right;
}
.voucher__tab__wrap td{
    vertical-align: top;
}
.mdl__size__input{
    width:350px;
}
.mdl__size__btn{
    width:110px;
    height:40px;
    float:right;
    margin-top:10px;
    background-color: black;
    color: white;
    font-family: var(--ft-no-fu);
    font-size: 11px;
}
.gray__font{
    color:#808080;
}
.use__voucher__form__wrap .table__wrap{
    padding-top:10px;
    padding-bottom:0px;
    margin-top:10px;
    border-top: 1px solid #dcdcdc;
    border-bottom: 1px solid #dcdcdc;
}
.use__voucher__form__wrap .info{
    border:none;
    padding-top:0px;
    padding-bottom:0px;
}
.info__title__container{
    margin:0 auto;
    width:470px; 
    display:grid;
    grid-template-columns: 215px 255px; 
    margin-top:40px;
}
@media (min-width: 1024px){
    .info__wrap.possession table td:nth-child(1){
        width:330px; 
    }
    .info__wrap.possession table td:nth-child(2){
        width:140px;
    }
}
@media (max-width: 1024px){
    .info__title__container{
        width:100%; 
        grid-template-columns: 57% 43%; 
        margin-top:30px;
    }
    .voucher__tab{width:100%;}
    .info__wrap table{width:100%;}
    .info__wrap.possession table td:nth-child(1){
        width:63%; 
    }
    .info__wrap.possession table td:nth-child(2){
        width:37%; 
    }
    .voucher__regist__form__wrap .form{
        margin: 0 auto;
        width:100%;
        display:grid;
        gap:10px;
        grid-template-columns: 63% 34%;
    }
    .voucher__regist__form__wrap .form input, .voucher__regist__form__wrap .form button{
        width:100%;
    }
}
</style>
<div class="voucher__wrap">
    <div class="voucher__tab__btn__container">
        <div class="tab__btn__item" form-id="voucher__regist__form__wrap" onclick="issueVoucherFormPrint()">
            <img src="/images/mypage/tab/select_voucher_regist_btn.svg">
        </div>
        <div class="tab__btn__item"  form-id="voucher__amount__form__wrap" onclick="voucherListGet('possession')">
            <img src="/images/mypage/tab/default_voucher_amount_btn.svg">
        </div>
        <div class="tab__btn__item" form-id="use__voucher__form__wrap" onclick="voucherListGet('use')">
            <img src="/images/mypage/tab/default_use_voucher_btn.svg">
        </div>
        <div class="tab__btn__item" form-id="voucher__notice__form__wrap">
            <img src="/images/mypage/tab/default_notice_btn.svg">
        </div>
    </div>
    <div class="voucher__tab__wrap">
        <div class="voucher__tab voucher__regist__form__wrap">
            <div class='title'><p>바우처 등록</p></div>
            <div class='description'>
                <span>발급받은 바우처 번호를 입력하세요</span>
                <span id="voucher_err_msg" style="float:right;color:red;display:none;">존재하지 않는 바우처 코드입니다.</span>
            </div>
            <div class='form'>
                <input type="text" class="mdl__size__input" id="voucher_issue_code">
                <button class="mdl__size__btn" onclick="voucherIssue()">받기</button>
            </div>
            <div class="footer">
                <p>· 바우처의 발급 기간, 사용 기간을 꼭 확인해주세요.</p>
                <p>· 대소문자 구분하여 입력해주세요.</p>
            </div>
        </div>
        <div class="voucher__tab voucher__amount__form__wrap">
            <div class='title'>사용 가능 바우처</div>
            <div class="info__wrap possession"></div>
            <div class="footer"></div>
        </div>
        <div class="voucher__tab use__voucher__form__wrap">
            <div class='title'>바우처 사용 내역</div>
            <div class="info__wrap use"></div>
            <div class="footer"></div>
        </div>
        <div class="voucher__tab voucher__notice__form__wrap">
            <div class='title'><p>유의사항</p></div>
            <div class='info non__border'>
                <p>· 1개의 바우처를 여러 제품에 중복 적용할 수 없습니다.</p>
                <p>· 사용기간에 표시되는 종료 시간의 기준은 주문 완료 시점입니다.</p>
                <p>· 반품(취소)한 주문에 사용된 바우처 복원은 반품완료 이후 최대 40분이 소요됩니다.</p>
                <p>· 유효기간이 지난 바우처는 재발행 되지 않습니다.</p>
            </div>
            <div class="footer"></div>
        </div>
    </div>
</div>

<script>
    $('#voucher_err_msg').hide();
    $('.voucher__tab').hide();
    $('.voucher__regist__form__wrap').show();

function voucherIssue(){
    var country = 'KR';
    var voucher_issue_code = $('#voucher_issue_code').val()

    if(voucher_issue_code == ''){
        $('#voucher_err_msg').text('바우처 번호를 입력해주세요');
        $('#voucher_err_msg').show();
        
        return false;
    }
    $.ajax({
        type: "post",
        data: {'country': country, 'voucher_issue_code': voucher_issue_code},
        dataType: "json",
        url: "http://116.124.128.246:80/_api/mypage/voucher/issue/add",
        error: function(d) {
        },
        success: function(d) {
            if(d.code == 200){
                $('#voucher_err_msg').hide();
                console.log('바우처 등록 성공');
            }
            else{
                $('#voucher_err_msg').text(d.msg);
                $('#voucher_err_msg').show();
            }
        }
    });
}

function voucherListGet(str){
    //info__wrap possession
    var country = 'KR';
    $('.info__wrap.' + str).html('');
    $('.info__wrap.' + str).html(`
        <div class="info">
            <table>
                <tbody>
                    <tr>
                        <td style="text-align:center">
                            <p>조회결과가 없습니다.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    `);
    $.ajax({
        type: "post",
        data: {'country': country, 'list_type': str},
        dataType: "json",
        url: "http://116.124.128.246:80/_api/mypage/voucher/list/get",
        error: function(d) {
        },
        success: function(d) {
            if(d.code == 200){
                if(d.data != null && d.data.length > 0){
                    $('.info__wrap.' + str).html('');
                    d.data.forEach(function(row){
                        if(str == 'possession'){
                            var strDiv = `
                                    <div class="info">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p>${row.voucher_issue_code}</p>
                                                        <p>${row.voucher_name}</p>
                                                        <p>${row.sale_price_type}</p>
                                                        <p>· 바우처 대상 제품 ${parseInt(row.min_price).toLocaleString('ko-KR')}원 초과 구매 시 사용 가능</p>
                                                    </td>
                                                    <td class="date__info">
                                                        <p>${row.usable_start_date}-${row.usable_end_date}</p>
                                                        <p class="gray__font">${row.date_interval}일 남음</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                `;
                            $('.info__wrap.' + str).append(strDiv);
                        }
                        else if(str == 'use'){
                            var divClass = '';
                            var useDate = '';
                            if(row.date_interval < 0 && row.used_flg == 0){
                                divClass = 'info non__usable__info';
                                useDate = '사용기간 만료';
                            }
                            else{
                                divClass = 'info';
                                useDate = `사용일 ${row.update_date}`;
                            }
                            var strDiv = `
                                <div class="${divClass}">
                                    <div class="info__title__container">
                                        <div class="info__title__item">바우처번호 ${row.voucher_issue_code}</div>
                                        <div class="info__title__item">${useDate}</div>
                                    </div>
                                    <div class="table__wrap">
                                        <table>
                                            <colsgroup>
                                                <col style="width:345px;">
                                                <col style="width:125px;">
                                            </colsgroup>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p>${row.voucher_name}</p>
                                                        <p>${row.sale_price_type}</p>
                                                        <p>· 바우처 대상 제품 ${parseInt(row.min_price).toLocaleString('ko-KR')}원 초과 구매 시 사용 가능</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="20px__blank" style="height:20px"></div>
                                </div>
                            `;
                            $('.info__wrap.' + str).append(strDiv);
                        }
                    })
                }
            }
        }
    });
}
function issueVoucherFormPrint(){
    $('#voucher_err_msg').hide();
}
</script>