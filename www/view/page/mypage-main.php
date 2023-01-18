<style>
select:focus {outline:none;}
input:focus {outline:none;}
textarea:focus {outline:none;}
input{ 
    padding-left:10px;
    font-size: 11px;
    font-family:var(--ft-no-fu); 
    width:100%;
    height:40px;
    margin-top:10px;
    border-radius: 1px;
    border: solid 1px #808080;
}
[type="radio"] {
  vertical-align: middle;
  appearance: none;
  border: 1px solid gray;
  width: 10px;
  height: 10px;
  margin: 0px;
  padding: 0px;
}
[type="radio"]:checked {
    background-color: #000000;
}
[type="checkbox"] {
  vertical-align: middle;
  appearance: none;
  border: 1px solid gray;
  width: 10px;
  height: 10px;
  margin: 0px;
  padding: 0px;
}
[type="checkbox"]:checked {
    background-color: #000000;
}
label{
    padding-right: 30px;
    vertical-align: middle;
}
label p,label span{
    font-size: 11px;
    font-family:var(--ft-no-fu);
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: left;
    color: #343434;
}
textarea{ 
    padding-left:10px;
    font-size: 11px;
    font-family:var(--ft-no-fu); 
    width:100%;
    margin-top:10px;
    border-radius: 1px;
    border: solid 1px #808080;
}
select{ 
    width:100%;
    padding-left:10px;
    font-size: 11px;
    font-family:var(--ft-no-fu); 
    height:40px;
    margin-top:10px;
    border-radius: 1px;
    border: solid 1px #808080;
}
input::placeholder {
  color: #dcdcdc;
}
.tab__btn__item img{
    height:24px;
}
.mypage__wrap p,.mypage__wrap span {
    font-family:var(--ft-no-fu); 
    font-size: 11px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: left;
    color: #343434;
    margin-bottom:10px;
}
.title p,.title span{
    font-size: 13px;
    line-height: 1.15;
}
.mypage__wrap{
    width:100%;
}
.icon__title p{
    font-size: 13px;
    text-align: center;
}
.icon__item .icon{
    margin: 0 auto;
    background-image: url("data:image/svg+xml,%3Csvg id='구성_요소_152_1' data-name='구성 요소 152 – 1' xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 50 50'%3E%3Cdefs%3E%3Cstyle%3E .cls-1, .cls-3 %7B fill: none; %7D .cls-1 %7B stroke: %23dcdcdc; %7D .cls-2 %7B stroke: none; %7D %3C/style%3E%3C/defs%3E%3Cg id='타원_85' data-name='타원 85' class='cls-1'%3E%3Ccircle class='cls-2' cx='25' cy='25' r='25'/%3E%3Ccircle class='cls-3' cx='25' cy='25' r='24.5'/%3E%3C/g%3E%3C/svg%3E%0A");
    width:50px;
    height:50px;
}
.icon__item:hover .icon{
    margin: 0 auto;
    background-image: url("data:image/svg+xml,%3Csvg id='구성_요소_156_1' data-name='구성 요소 156 – 1' xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 50 50'%3E%3Cdefs%3E%3Cstyle%3E .cls-1, .cls-3 %7B fill: none; %7D .cls-1 %7B stroke: %23343434; %7D .cls-2 %7B stroke: none; %7D %3C/style%3E%3C/defs%3E%3Cg id='타원_82' data-name='타원 82' class='cls-1'%3E%3Ccircle class='cls-2' cx='25' cy='25' r='25'/%3E%3Ccircle class='cls-3' cx='25' cy='25' r='24.5'/%3E%3C/g%3E%3C/svg%3E%0A");
    width:50px;
    height:50px;
}
.icon__item:hover .icon__title{
    text-decoration: underline;
    text-underline-position:under;
    text-decoration-color:#343434;
}
.icon__title{
    margin-top:10px;
    height: 19px;
}
.click__icon__item .icon{
    margin: 0 auto;
    background-image: url("data:image/svg+xml,%3Csvg id='구성_요소_156_1' data-name='구성 요소 156 – 1' xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 50 50'%3E%3Cdefs%3E%3Cstyle%3E .cls-1, .cls-3 %7B fill: none; %7D .cls-1 %7B stroke: %23343434; %7D .cls-2 %7B stroke: none; %7D %3C/style%3E%3C/defs%3E%3Cg id='타원_82' data-name='타원 82' class='cls-1'%3E%3Ccircle class='cls-2' cx='25' cy='25' r='25'/%3E%3Ccircle class='cls-3' cx='25' cy='25' r='24.5'/%3E%3C/g%3E%3C/svg%3E%0A");
    width:50px;
    height:50px;
}
.click__icon__item .icon__title{
    text-decoration: underline;
    text-underline-position:under;
    text-decoration-color:#343434;
}
.member__contents{
    margin: 0 auto;
    background-image: url("data:image/svg+xml,%3Csvg id='구성_요소_156_1' data-name='구성 요소 156 – 1' xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 50 50'%3E%3Cdefs%3E%3Cstyle%3E .cls-1, .cls-3 %7B fill: none; %7D .cls-1 %7B stroke: %23343434; %7D .cls-2 %7B stroke: none; %7D %3C/style%3E%3C/defs%3E%3Cg id='타원_82' data-name='타원 82' class='cls-1'%3E%3Ccircle class='cls-2' cx='25' cy='25' r='25'/%3E%3Ccircle class='cls-3' cx='25' cy='25' r='24.5'/%3E%3C/g%3E%3C/svg%3E%0A");
    width:50px;
    height:50px;
    margin: 0 auto;
}

.mypage__container{
    width:100%;
    display:grid;
    grid-template-columns:repeat(16,1fr);
}
.mypage__items:nth-child(1){
    grid-column: 8/10;
    padding-top:40px;
    width:100%;
    display:block;
    margin: 0 auto;
}
.mypage__items:nth-child(2){
    grid-column: 8/10;
    padding-top:30px;
    width:100%;
    display:grid;
    place-items: center;
    grid-template-columns:repeat(3,1fr);
}

.point__item{
    width:100%;
}

.mypage__items:nth-child(3){
    padding-top:50px;
    width:100%;
    grid-column: 4/14;
    display:grid;
    place-items: center;
    grid-template-columns:repeat(15,1fr);
}

.profile__member__name{
    margin-top: 9px;
    height: 16px;
    font-family:var(--ft-no-fu);
    font-size: 11px;
}

.profile__member__name p{
    text-align: center;
}
.profile__member__id{
    margin-top: 6px;
    height: 14px;
    font-family:var(--ft-no-fu);
    font-size: 13px;
}
.profile__member__id p{
    text-align: center;
}
.profile__member__point{
    margin: 0 auto;
    margin-top: 33px;
    margin-bottom: 50px;
    width:250px;
    display:grid;
    place-items: center;
    grid-template-columns: 81px 110px 60px;
    height: 32px;
    font-family:var(--ft-no-fu);
}
.point__title p{
    text-align:center;
    font-size: 11px;
    font-family:var(--ft-no-fu);
}

.icon__title.underline{
    text-decoration: underline;
    text-underline-position:under;
    text-decoration-color:#343434;
}
.point__value p{
    text-decoration: underline;
    text-align: center;
    font-size: 13px;
    font-family:var(--ft-no-fu);
}
.point__item.left__contents{
    border-right:1px solid;
    border-color:#dcdcdc;
}
.point__item.center__contents{
    border-right:1px solid;
    border-color:#dcdcdc;
}
.non__display__tab{
    display:none;
}
.contents__table{
    margin-top: 12.5px;
    border-top: 1px solid #dcdcdc;
    border-bottom: 1px solid #dcdcdc;
}
.contents__table p{
    font-family:var(--ft-no-fu);
    font-size: 11px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.36;
    letter-spacing: normal;
    color: #343434;
    margin-bottom:10px;
}
.non__usable__info{
    opacity: 0.5;
}
.footer p{
    margin-bottom:10px;
}
.non__border{
    border:none!important;
}
.contents__info{
    display:flex;
}
.contents__info .info span{
    font-family:var(--ft-no-fu);
    font-size: 13px;
}
.contents__table .vertical__top{
    vertical-align: top;
}
.height__10px__blank{
    height:10px;
}
td{
    padding-top:10px;
    padding-bottom:10px;
    padding-right:10px;
}
td p{
    margin-bottom:10px;
    height:12px;
}
.black__full__width__btn{
    width:100%;
    height:40px;
    background-color: black;
    color:white;
    text-align: center;
    border-radius: 1px;
}
.white__full__width__btn{
    width:100%;
    height:40px;
    background-color: white;
    color:black;
    text-align: center;
    border-radius: 1px;
    border: solid 1px #dcdcdc;
}
.next__line__exist{
    margin-bottom:0px!important;
}
.detail__btn{
    margin-left: auto;
}
.detail__btn span{
    font-size: 11px;
    font-family:var(--ft-no-fu);
    text-decoration: underline;
}
.toggle__list{
    width:710px;
    float:right;
}
.float__none{
    float:none!important;
}
.toggle__list span{
    font-family: var(--ft-no-fu);
    font-size: 11px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.36;
    letter-spacing: normal;
    text-align: left;
    color: #343434;
}
.toggle__list .category__title{
    margin-bottom:10px;
}
.toggle__list .question{
    margin-bottom:20px;
}
.toggle__list .request{
    margin-bottom:20px;
}
.toggle__item{
    border-bottom:1px solid #dcdcdc;
    margin-bottom:20px;
}

@media (max-width: 1024px){
    .mypage__container{
        width:100%;
        display:grid;
        grid-template-columns:repeat(8,1fr);
    }
    .mypage__items:nth-child(1){
        grid-column: 3/7;
        padding-top:40px;
        width:100%;
        display:block;
        margin: 0 auto;
    }
    .mypage__items:nth-child(2){
        grid-column: 3/7;
        padding-top:30px;
        width:100%;
        display:grid;
        place-items: center;
        grid-template-columns:repeat(3,1fr);
    }

    .point__item{
        width:100%;
    }

    .mypage__items:nth-child(3){
        grid-column: 1/9;
        padding-top:50px;
        width:100%;
        display:grid;
        place-items: center;
        grid-template-columns:repeat(15,1fr);
    }
}
</style>
<?php
    if(!isset($_SESSION['MEMBER_IDX'])){
        echo "
                <script>
                    location.href = '/login';
                </script>";
    }
?>
<main>
    <div class="mypage__wrap">
        <div class="mypage__container">
            <div class="mypage__items profile">
                <div class="member__contents">
                    <img src="/images/mypage/mypage_member_icon.svg" style="padding-top:8px;padding-left:6px;">
                </div>
                <div class="profile__member__name"><p id="mypage_member_name"></p></div>
                <div class="profile__member__id"><p id="mypage_member_id"></p></div>
            </div>
            <div class="mypage__items profile_info">
                 <div class="point__item left__contents" style="cursor:pointer" info-type="mileage" onclick="memberInfoClick(this)">
                    <div class="point__title">
                        <p>적립포인트</p>
                    </div>
                    <div class="point__value">
                        <p id="mileage_value"></p>
                    </div>
                </div>
                <div class="point__item center__contents" style="cursor:pointer" info-type="charging" onclick="memberInfoClick(this)">
                    <div class="point__title">
                        <p>충전포인트</p>
                    </div>
                    <div class="point__value">
                        <p id="charging_value"></p>
                    </div>
                </div>
                <div class="point__item right__contents" style="cursor:pointer" info-type="voucher" onclick="memberInfoClick(this)">
                    <div class="point__title">
                        <p>바우처</p>
                    </div>
                    <div class="point__value">
                        <p id="voucher_cnt"></p>
                    </div>
                </div>
            </div>
            <div class="mypage__items">
                <div class="click__icon__item" btn-type="home" onclick="mypageTabBtnClick(this)">
                    <div class="icon">
                        <img src="/images/mypage/mypage_home_icon.svg" style="padding-top:17.5px;padding-left:16.5px;">
                    </div>
                    <div class="icon__title"><p>마이페이지 홈</p></div>
                </div>
                <div class="icon__item" btn-type="orderlist" onclick="mypageTabBtnClick(this)">
                    <div class="icon">
                        <img src="/images/mypage/mypage_orderlist_icon.svg" style="padding-top:15px;padding-left:17px;">
                    </div>
                    <div class="icon__title"><p>주문조회</p></div>
                </div>
                <div id="mileage_icon" class="icon__item" btn-type="mileage" onclick="mypageTabBtnClick(this)">
                    <div class="icon">
                        <img src="/images/mypage/mypage_point_icon.svg" style="padding-top:17px;padding-left:17px;">
                    </div>
                    <div class="icon__title"><p>적립포인트</p></div>
                </div>
                <div id="charging_icon" class="icon__item" btn-type="charging" onclick="mypageTabBtnClick(this)">
                    <div class="icon">
                        <img src="/images/mypage/mypage_charging_point_icon.png" style="width:18px;height:34px;padding-top:16px;margin-left:16px;">
                    </div>
                    <div class="icon__title"><p>충전포인트</p></div>
                </div>
                <div id="voucher_icon" class="icon__item" btn-type="voucher" onclick="mypageTabBtnClick(this)">
                    <div class="icon">
                        <img src="/images/mypage/mypage_voucher_icon.svg" style="padding-top:19px;padding-left:14px;">
                    </div>
                    <div class="icon__title"><p>바우처</p></div>
                </div>
                <div class="icon__item" btn-type="bluemark" onclick="mypageTabBtnClick(this)">
                    <div class="icon">
                        <img src="/images/mypage/mypage_bluemark_icon.svg" style="padding-top:21px;padding-left:21px;">
                    </div>
                    <div class="icon__title"><p>블루마크</p></div>
                </div>
                <div class="icon__item" btn-type="stanby" onclick="mypageTabBtnClick(this)">
                    <div class="icon">
                        <img src="/images/mypage/mypage_stanby_icon.svg" style="padding-top:13px;padding-left:11px;">
                    </div>
                    <div class="icon__title"><p>스탠바이</p></div>
                </div>
                <div class="icon__item" btn-type="preorder" onclick="mypageTabBtnClick(this)">
                    <div class="icon">
                        <img src="/images/mypage/mypage_preorder_icon.svg" style="padding-top:14px;padding-left:16px;">
                    </div>
                    <div class="icon__title"><p>프리오더</p></div>
                </div>
                <div class="icon__item" btn-type="reorder" onclick="mypageTabBtnClick(this)">
                    <div class="icon">
                        <img src="/images/mypage/mypage_reorder_icon.svg" style="padding-top:14px;padding-left:17px;">
                    </div>
                    <div class="icon__title"><p>재입고알림</p></div>
                </div>
                <div class="icon__item" btn-type="draw" onclick="mypageTabBtnClick(this)">
                    <div class="icon">
                        <img src="/images/mypage/mypage_draw_icon.svg" style="padding-top:12px;padding-left:16px;">
                    </div>
                    <div class="icon__title"><p>드로우</p></div>
                </div>
                <div class="icon__item" btn-type="membership" onclick="mypageTabBtnClick(this)">
                    <div class="icon">
                        <img src="/images/mypage/mypage_membership_icon.svg" style="padding-top:18px;padding-left:15px;">
                    </div>
                    <div class="icon__title"><p>멤버쉽</p></div>
                </div>
                <div class="icon__item" btn-type="inquiry" onclick="mypageTabBtnClick(this)">
                    <div class="icon">
                        <img src="/images/mypage/mypage_inquiry_icon.svg" style="padding-top:18px;padding-left:15px;">
                    </div>
                    <div class="icon__title"><p>문의</p></div>
                </div>
                <div class="icon__item" btn-type="as" onclick="mypageTabBtnClick(this)">
                    <div class="icon">
                        <img src="/images/mypage/mypage_as_icon.svg" style="padding-top:13px;padding-left:15px;">
                    </div>
                    <div class="icon__title"><p>A/S</p></div>
                </div>
                <div class="icon__item" btn-type="service" onclick="mypageTabBtnClick(this)">
                    <div class="icon">
                        <img src="/images/mypage/mypage_service_icon.svg" style="padding-top:12px;padding-left:12px;">
                    </div>
                    <div class="icon__title"><p>고객서비스</p></div>
                </div>
                <div class="icon__item" btn-type="profile" onclick="mypageTabBtnClick(this)">
                    <div class="icon" style="width:50px;height:50px;">
                        <img src="/images/mypage/mypage_profile_icon.svg" style="padding-top:15px;padding-left:13px;">
                    </div>
                    <div class="icon__title"><p>회원정보</p></div>
                </div>
            </div>
        </div>
    </div>

    <input id="btn_type" type="hidden" value="home">

    <div id="mypage_tab_stanby" class="menu__tab non__display__tab">
        <?php include_once("mypage-main-stanby.php"); ?>
    </div>
    <div id="mypage_tab_preorder" class="menu__tab non__display__tab">
        <?php include_once("mypage-main-preorder.php"); ?>
    </div>
    <div id="mypage_tab_reorder" class="menu__tab non__display__tab">
        <?php include_once("mypage-main-reorder.php"); ?>
    </div>
    <div id="mypage_tab_draw" class="menu__tab non__display__tab">
        <?php include_once("mypage-main-draw.php"); ?>
    </div>
    <div id="mypage_tab_membership" class="menu__tab non__display__tab">
        <?php include_once("mypage-main-membership.php"); ?>
    </div>
    <div id="mypage_tab_inquiry" class="menu__tab non__display__tab">
        <?php include_once("mypage-main-inquiry.php"); ?>
    </div>
    <div id="mypage_tab_as" class="menu__tab non__display__tab">
        <?php include_once("mypage-main-as.php"); ?>
    </div>
    <div id="mypage_tab_service" class="menu__tab non__display__tab">
        <?php include_once("mypage-main-service.php"); ?>
    </div>
    <div id="mypage_tab_home" class="menu__tab">
        <?php include_once("mypage-main-home.php"); ?>
    </div>
    <div id="mypage_tab_orderlist" class="menu__tab non__display__tab">
        <?php include_once("mypage-main-orderlist.php"); ?>
    </div>
    <div id="mypage_tab_mileage" class="menu__tab non__display__tab">
        <?php include_once("mypage-main-mileage.php"); ?>
    </div>
    <div id="mypage_tab_charging" class="menu__tab non__display__tab">
        <?php include_once("mypage-main-charging.php"); ?>
    </div>
    <div id="mypage_tab_voucher" class="menu__tab non__display__tab">
        <?php include_once("mypage-main-voucher.php"); ?>
    </div>
    <div id="mypage_tab_profile" class="menu__tab non__display__tab">
        <?php include_once("mypage-main-profile_tmp.php"); ?>
    </div>
    <div id="mypage_tab_bluemark" class="menu__tab non__display__tab">
        <?php include_once("mypage-main-bluemark.php"); ?>
    </div>
</main>
<script>
$(document).ready(function() {
    $(".tab__btn__item").on('click', function(){
        var parent_class = $(this).parent().attr('class');
        var btn_group = $('.'+parent_class+' .tab__btn__item');
        var btn_length = btn_group.length;
        var old_src = '';
        var sel_old_src = '';

        for(var i = 0; i < btn_length; i++){
            var default_src = '';
            old_src = btn_group.eq(i).children().attr('src');
            default_src = old_src.replace('select','default');
            btn_group.eq(i).children().attr('src', default_src);
        }
        var select_src = '';
        sel_old_src = $(this).children().attr('src');
        select_src = sel_old_src.replace('default','select');
        $(this).children().attr('src', select_src);

        var tab_class = $('#btn_type').val() + '__tab';
        var form_id = $(this).attr('form-id');

        if(form_id != ''){
            $('.' + tab_class).hide();
            $('.' + form_id).show();
            
        }
    })
    $('.question').on('click', function(){
        if($(this).next().css('display') == 'none'){
            console.log($(this).find('img.top__down__icon'));
            $(this).find('img.down__up__icon').attr('src','/images/mypage/mypage_up_tab_btn.svg');
        }
        else{
            $(this).find('img.down__up__icon').attr('src','/images/mypage/mypage_down_tab_btn.svg');
        }
        $(this).next().toggle();
    })
    
    let country = "KR";
    $.ajax({
        type: "post",
        data: {
            "country": country
        },
        dataType: "json",
        url: "http://116.124.128.246:80/_api/mypage/get",
        error: function(d) {
        },
        success: function(d) {
            if(d.code == 302){
                window.location.replace("/login");
            }
            else{
                var data = d.data[0];
                var balance = data.mileage_balance_total;
                if(balance == null){
                    balance = 0;
                }
                else{
                    balance = parseInt(balance).toLocaleString('ko-KR');
                }
                
                $('#mileage_value').text(`${balance}P`);
                $('#charging_value').text(`0`);
                $('#voucher_cnt').text(`${data.voucher_cnt}`);
                $('#mypage_member_name').text(`${data.member_name}`);
                $('#mypage_member_id').text(`${data.member_id}`);
            }
        }
    });
});

function mypageTabBtnClick(obj) {
	var btn_type = $(obj).attr('btn-type');
	$('#btn_type').val(btn_type);
    
	$('.menu__tab').addClass('non__display__tab');
	$('#mypage_tab_' + btn_type).removeClass('non__display__tab');

    $('.click__icon__item').attr('class', 'icon__item');
    $(obj).attr('class', 'click__icon__item');

    $('#mypage_tab_' + btn_type).find('.tab__btn__item').eq(0).click();
}

function memberInfoClick(obj){
    var info_type = $(obj).attr('info-type');
    $("#" + info_type + "_icon").trigger("click");
}
</script>