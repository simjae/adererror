<style>
.service__wrap{
    margin-top:40px;
    width:100%;
}
.service__tab__btn__container{
    margin: 0 auto;
    width:405px;
    display:grid;
    gap:10px;
    place-items: center;
    grid-template-columns: 70px 134px 70px 100px;
}
.service__tab__wrap .title{
    margin-bottom:30px;
}
.service__wrap .description{
    width:710px;
    height:470px;
    overflow-y:scroll;
}
.service__wrap .description::-webkit-scrollbar{
    width:5px;
}
.service__wrap .description::-webkit-scrollbar-track {
    background-color: transparent;
}
.service__wrap .description::-webkit-scrollbar-thumb {
    background-color: #dcdcdc;
}
.service__wrap .description h2{
    font-family:var(--ft-no-fu); 
    font-size: 13px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.15;
    letter-spacing: normal;
    text-align: left;
    color: #343434;
    margin-top:30px;
    margin-bottom:10px;
}
.service__wrap .description ul{
    font-family:var(--ft-no-fu); 
    font-size: 11px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    letter-spacing: normal;
    text-align: left;
    color: #343434;
    margin-top:10px;
    line-height: 2;
}
.service__wrap .description p{
    font-family:var(--ft-no-fu); 
    font-size: 11px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    letter-spacing: normal;
    text-align: left;
    color: #343434;
    line-height: 2;
}
.service__tab__wrap .request{
    padding-left:20px;
    font-family:var(--ft-no-fu); 
    font-size: 11px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    letter-spacing: normal;
    text-align: left;
    color: #343434;
    line-height: 2;
}
.service__tab__wrap .request p{
    margin-bottom:10px;
}
.service__tab__wrap .toggle__item{
    margin-bottom:10px!important;
}
.service__wrap .footer{
    margin-bottom:100px;
}

@media (max-width: 1024px){
    .service__tab__wrap{width:100%;margin-top:37px;}
    .service__wrap .description{width:100%}
    .toggle__list{width:100%}
}
@media (min-width: 600px) {
    .service__tab__wrap {
        width:580px;
        margin:0 auto;
        margin-top:37px;
    }
}
@media (min-width: 1024px) {
    .service__tab__wrap{
        width:710px;
        margin:0 auto;
        margin-top:50px;
    }
}
@media (max-width: 445px) {
    .service__tab__btn__container {
        display:none;
    }
}
@media (min-width: 445px) {
    .service__wrap .swiper.tab__btn {
        display:none;
    }
}
</style>
<div class="service__wrap">
    <div class="service__tab__btn__container">
        <div class="tab__btn__item" form-id="service__notice__wrap">
            <img src="/images/mypage/tab/select_notice_list_btn.svg">
        </div>
        <div class="tab__btn__item"  form-id="service__guide__wrap">
            <img src="/images/mypage/tab/default_store_guide_btn.svg">
        </div>
        <div class="tab__btn__item" form-id="service__terms__wrap">
            <img src="/images/mypage/tab/default_terms_btn.svg">
        </div>
        <div class="tab__btn__item" form-id="service__policy__wrap">
            <img src="/images/mypage/tab/default_personal_policy_btn.svg">
        </div>
    </div>
    <div class="swiper tab__btn">
        <div class="swiper-wrapper">
            <div class="swiper-slide tab__btn__item" form-id="service__notice__wrap">
                <img src="/images/mypage/tab/select_notice_list_btn.svg">
            </div>
            <div class="swiper-slide tab__btn__item"  form-id="service__guide__wrap">
                <img src="/images/mypage/tab/default_store_guide_btn.svg">
            </div>
            <div class="swiper-slide tab__btn__item" form-id="service__terms__wrap">
                <img src="/images/mypage/tab/default_terms_btn.svg">
            </div>
            <div class="swiper-slide tab__btn__item" form-id="service__policy__wrap">
                <img src="/images/mypage/tab/default_personal_policy_btn.svg">
            </div>
        </div>
    </div>
    <div class="service__tab__wrap">
        <div class="service__tab service__notice__wrap">
            <div class="toggle__list float__none">
                <div class="toggle__list__tab 01">
                </div>
            </div>
            <div class="footer"></div>
        </div>
        <div class="service__tab service__guide__wrap">
            <div class="title">
                <p>온라인 스토어 이용 가이드</p>
            </div>
            <div class="description">
                <h2 style="margin-top:0px;">회원가입 안내</h2>
                <p>
                    회원가입 메뉴를 통해 이용약관, 개인정보보호정책 동의 및 일정 양식의 가입항목을 기입함으로써 회원에 가입되며,<br> 
                    가입 즉시 서비스를 무료로 이용하실 수 있습니다. 주문하실 때에 입력해야하는 각종 정보들을 일일이 입력하지 않으셔도 됩니다.<br>
                    공동구매, 경매행사에 항상 참여하실 수 있습니다. 회원을 위한 이벤트 및 각종 할인행사에 참여하실 수 있습니다.
                </p>

                <h2>주문 안내</h2>
                <p>상품주문은 다음단계로 이루어집니다.</p>
                <ul>
                    <li>Step1: 상품검색</li>
                    <li>Step2: 장바구니에 담기</li>
                    <li>Step3: 회원ID 로그인 또는 비회원 주문</li>
                    <li>Step4: 주문서 작성</li>
                    <li>Step5: 결제방법선택 및 결제</li>
                    <li>Step6: 주문 성공 화면 (주문번호)</li>
                </ul>
                <p>
                    비회원 주문인경우 6단계에서 주문번호와 승인번호(카드결제시)를 꼭 메모해 두시기 바랍니다.<br> 
                    단, 회원인 경우 자동 저장되므로 따로 관리하실 필요가 없습니다.
                </p>
                

                <h2>결제안내</h2>
                <p>
                    고액결제의 경우 안전을 위해 카드사에서 확인전화를 드릴 수도 있습니다.<br>
                    확인과정에서 도난 카드의 사용이나 타인 명의의 주문등 정상적인 주문이 아니라고 판단될 경우 임의로 주문을 보류 또는 취소할 수 있습니다.
                </p>

                <h2>배송안내</h2>
                    <ul>
                        <li>배송 방법 : 택배</li>
                        <li>배송 지역 : 전국지역</li>
                        <li>배송 비용 : 조건부 무료 : 주문 금액 80,000원 미만일 때 배송비 2,500원을 추가합니다.</li>
                        <li>배송 기간 : 3일 ~ 7일</li>
                        <li>배송 안내 : - 산간벽지나 도서지방은 별도의 추가금액을 지불하셔야 하는 경우가 있습니다.<br>
                        고객님께서 주문하신 상품은 입금 확인후 배송해 드립니다. 다만, 상품종류에 따라서 상품의 배송이 다소 지연될 수 있습니다.</li>
                    </ul>
                <h2>교환/반품안내</h2>
                    <ul>
                        <li>
                            <h3>교환 및 반품 주소</h3>
                            - [04782] 서울특별시 성동구 연무장길 53 (성수동2가) 삼영빌딩 3층
                        </li>
                        <li>
                            <h3>교환 및 반품이 가능한 경우</h3>
                            - 상품을 공급 받으신 날로부터 7일이내 단, 가전제품의 경우 포장을 개봉하였거나 포장이 훼손되어 상품가치가 상실된 경우에는<br>
                            &nbsp;&nbsp;교환/반품이 불가능합니다.<br>
                            - 공급받으신 상품 및 용역의 내용이 표시.광고 내용과 다르거나 다르게 이행된 경우에는 공급받은 날로부터 3월이내,<br>
                            &nbsp;&nbsp;그사실을 알게 된 날로부터 30일이내<br></li>
                        <li>
                            <h3>교환 및 반품이 불가능한 경우</h3>
                            - 고객님의 책임 있는 사유로 상품등이 멸실 또는 훼손된 경우. 단, 상품의 내용을 확인하기 위하여 포장 등을 훼손한 경우는 제외<br>
                            - 포장을 개봉하였거나 포장이 훼손되어 상품가치가 상실된 경우<br>
                            - 홈페이지 상 교환 및 반품 불가 안내가 고지된 제품<br>    
                            - 제품 특성상 교환 및 반품 불가로 안내가 고지되어 있는 제품의 경우 <br>
                            &nbsp;&nbsp;(예 : 가전제품, 식품, 음반 등, 단 액정화면이 부착된 노트북, LCD모니터, 디지털 카메라 등의 불량화소에 따른 반품/교환은 제조사 기준에 따릅니다.)<br>
                            - 고객님의 사용 또는 일부 소비에 의하여 상품의 가치가 현저히 감소한 경우 단, 화장품등의 경우 시용제품을 제공한 경우에 한 합니다.<br>
                            - 시간의 경과에 의하여 재판매가 곤란할 정도로 상품등의 가치가 현저히 감소한 경우<br>
                            - 복제가 가능한 상품등의 포장을 훼손한 경우<br>
                            &nbsp;&nbsp;(자세한 내용은 고객만족센터 1:1 E-MAIL상담을 이용해 주시기 바랍니다.)
                        </li>
                    </ul>
                    ※ 고객님의 마음이 바뀌어 교환, 반품을 하실 경우 상품반송 비용은 고객님께서 부담하셔야 합니다. (색상 교환, 사이즈 교환 등 포함)
                

                <h2>환불안내</h2>
                <p>
                    환불시 반품 확인여부를 확인한 후 3영업일 이내에 결제 금액을 환불해 드립니다. <br>
                    신용카드로 결제하신 경우는 신용카드 승인을 취소하여 결제 대금이 청구되지 않게 합니다.<br>
                    (단, 신용카드 결제일자에 맞추어 대금이 청구 될수 있으면 이경우 익월 신용카드 대금청구시 카드사에서 환급처리됩니다.)
                </p>

                <h2>기타안내</h2>
                <ul>
                    <li>
                        <h3>이용기간</h3>
                        주문으로 발생한 적립금은 배송완료 체크시점으로 부터 20일이 지나야 실제 사용 가능 적립금으로 변환됩니다.<br>
                        20일 동안은 미가용 적립금으로 분류 됩니다. 미가용 적립금은 반품, 구매취소 등을 대비한 실질적인 구입이 되지 않은
                        주문의 적립금 입니다.<br>
                        사용가능한 적립금(총 적립금-사용된적립금-미가용적립금)은 상품구매시 즉시 사용하실 수 있습니다.
                    </li>
                    <li>
                        <h3>이용조건</h3>
                        적립금사용시 최소구매가능적립금(구매가능한 적립금 요구선)은 10,000원 입니다.<br>
                        적립금 사용시 최대구매가능적립금(적립금 1회 사용 가능 최대금액)은 '한도제한없음' 입니다.
                    </li>
                    <li>
                        <h3>소멸조건</h3>
                        주문취소/환불시에 상품구매로 적립된 적립금은 함께 취소됩니다.<br>
                        회원 탈퇴시에는 적립금은 자동적으로 소멸됩니다. 최종 적립금 발생일로부터 3년 동안 추가적립금 누적이 없을 경우에도 적립금은 소멸됩니다.
                    </li>
                </ul>
            </div>
            <div class="footer"></div>
        </div>
        <div class="service__tab service__terms__wrap">
            <div class="title">
                <p>이용약관</p>
            </div>
            <div class="description">
                <p>
                    제1조(목적)<br>
                    이 약관은 (주)파이브스페이스(전자상거래 사업자)가 운영하는 사이버 몰(이하 “몰”이라 한다)에서 제공하는 인터넷 관련 서비스<br>
                    (이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리․의무 및 책임사항을 규정함을 목적으로 합니다.<br>
                    ※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다.」
                </p>
                <p>
                    제2조(정의)<br>
                    ① “몰”이란 회사가 재화 또는 용역(이하 “재화 등”이라 함)을 이용자에게 제공하기 위하여 컴퓨터 등 정보통신설비를 이용하여 재화 등을<br> 
                    거래할 수 있도록 설정한 가상의 영업장을 말하며, 아울러 사이버몰을 운영하는 사업자의 의미로도 사용합니다.<br>
                    ② “이용자”란 “몰”에 접속하여 이 약관에 따라 “몰”이 제공하는 서비스를 받는 회원 및 비회원을 말합니다.<br>
                    ③ ‘회원’이라 함은 “몰”에 회원등록을 한 자로서, 계속적으로 “몰”이 제공하는 서비스를 이용할 수 있는 자를 말합니다.<br>
                    ④ ‘비회원’이라 함은 회원에 가입하지 않고 “몰”이 제공하는 서비스를 이용하는 자를 말합니다.
                </p>
                <p>
                    제3조 (약관 등의 명시와 설명 및 개정)<br>
                    ① “몰”은 이 약관의 내용과 상호 및 대표자 성명, 영업소 소재지 주소(소비자의 불만을 처리할 수 있는 곳의 주소를 포함),<br>
                    전화번호․모사전송번호․전자우편주소, 사업자등록번호, 통신판매업 신고번호, 개인정보보호책임자등을 이용자가 쉽게 알 수 있도록<br>
                    www.adererror.com의 초기 서비스화면(전면)에 게시합니다. 다만, 약관의 내용은 이용자가 연결화면을 통하여 볼 수 있도록 할 수 있습니다.<br>
                    ② “몰은 이용자가 약관에 동의하기에 앞서 약관에 정하여져 있는 내용 중 청약철회․배송책임․환불조건 등과 같은 중요한 내용을<br>
                    이용자가 이해할 수 있도록 별도의 연결화면 또는 팝업화면 등을 제공하여 이용자의 확인을 구하여야 합니다.<br>
                    ③ “몰”은 「전자상거래 등에서의 소비자보호에 관한 법률」, 「약관의 규제에 관한 법률」, 「전자문서 및 전자거래기본법」,<br>
                    「전자금융거래법」, 「전자서명법」, 「정보통신망 이용촉진 및 정보보호 등에 관한 법률」, 「방문판매 등에 관한 법률」, 「소비자기본법」<br>
                    등 관련 법을 위배하지 않는 범위에서 이 약관을 개정할 수 있습니다.<br>
                    ④ “몰”이 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께<br>
                    몰의 초기화면에 그 적용일자 7일 이전부터 적용일자 전일까지 공지합니다.<br>
                    다만, 이용자에게 불리하게 약관내용을 변경하는 경우에는 최소한 30일 이상의 사전 유예기간을 두고 공지합니다.<br>
                    이 경우 "몰“은 개정 전 내용과 개정 후 내용을 명확하게 비교하여 이용자가 알기 쉽도록 표시합니다.<br>
                    ⑤ “몰”이 약관을 개정할 경우에는 그 개정약관은 그 적용일자 이후에 체결되는 계약에만 적용되고<br>
                    그 이전에 이미 체결된 계약에 대해서는 개정 전의 약관조항이 그대로 적용됩니다.<br>
                    다만 이미 계약을 체결한 이용자가 개정약관 조항의 적용을 받기를 원하는 뜻을<br>
                    제3항에 의한 개정약관의 공지기간 내에 “몰”에 송신하여 “몰”의 동의를 받은 경우에는 개정약관 조항이 적용됩니다.<br>
                    ⑥ 이 약관에서 정하지 아니한 사항과 이 약관의 해석에 관하여는 전자상거래 등에서의 소비자보호에 관한 법률,<br>
                    약관의 규제 등에 관한 법률, 공정거래위원회가 정하는 전자상거래 등에서의 소비자 보호지침 및 관계법령 또는 상관례에 따릅니다.
                </p>
                <p>
                    제4조(서비스의 제공 및 변경) <br>
                    ① “몰”은 다음과 같은 업무를 수행합니다.<br>
                    &nbsp; 1. 재화 또는 용역에 대한 정보 제공 및 구매계약의 체결<br>
                    &nbsp; 2. 구매계약이 체결된 재화 또는 용역의 배송<br>
                    &nbsp; 3. 기타 “몰”이 정하는 업무<br>
                    ② “몰”은 재화 또는 용역의 품절 또는 기술적 사양의 변경 등의 경우에는<br>
                    장차 체결되는 계약에 의해 제공할 재화 또는 용역의 내용을 변경할 수 있습니다.<br>
                    이 경우에는 변경된 재화 또는 용역의 내용 및 제공일자를 명시하여 현재의 재화 또는 용역의 내용을 게시한 곳에 즉시 공지합니다.<br>
                    ③ “몰”이 제공하기로 이용자와 계약을 체결한 서비스의 내용을 재화등의 품절 또는 기술적 사양의 변경 등의 사유로 변경할 경우에는<br>
                    그 사유를 이용자에게 통지 가능한 주소로 즉시 통지합니다.<br>
                    ④ 전항의 경우 “몰”은 이로 인하여 이용자가 입은 손해를 배상합니다.<br>
                    다만, “몰”이 고의 또는 과실이 없음을 입증하는 경우에는 그러하지 아니합니다.
                </p>
                <p>
                    제5조(서비스의 중단) <br>
                    ① “몰”은 컴퓨터 등 정보통신설비의 보수점검․교체 및 고장, 통신의 두절 등의 사유가 발생한 경우에는<br>
                    서비스의 제공을 일시적으로 중단할 수 있습니다.<br>
                    ② “몰”은 제1항의 사유로 서비스의 제공이 일시적으로 중단됨으로 인하여 이용자 또는 제3자가 입은 손해에 대하여 배상합니다.<br>
                    단, “몰”이 고의 또는 과실이 없음을 입증하는 경우에는 그러하지 아니합니다.<br>
                    ③ 사업종목의 전환, 사업의 포기, 업체 간의 통합 등의 이유로 서비스를 제공할 수 없게 되는 경우에는<br>
                    “몰”은 제8조에 정한 방법으로 이용자에게 통지하고 당초 “몰”에서 제시한 조건에 따라 소비자에게 보상합니다.<br>
                    다만, “몰”이 보상기준 등을 고지하지 아니한 경우에는<br>
                    이용자들의 마일리지 또는 적립금 등을 “몰”에서 통용되는 통화가치에 상응하는 현물 또는 현금으로 이용자에게 지급합니다.
                </p>
                <p>
                    제6조(회원가입) <br>
                    ① 이용자는 “몰”이 정한 가입 양식에 따라 회원정보를 기입한 후 이 약관에 동의한다는 의사표시를 함으로서 회원가입을 신청합니다.<br>
                    ② “몰”은 제1항과 같이 회원으로 가입할 것을 신청한 이용자 중 다음 각 호에 해당하지 않는 한 회원으로 등록합니다.<br>
                    &nbsp; 1. 가입신청자가 이 약관 제7조제3항에 의하여 이전에 회원자격을 상실한 적이 있는 경우,<br>
                    &nbsp;&nbsp;&nbsp;다만 제7조제3항에 의한 회원자격 상실 후 3년이 경과한 자로서 “몰”의 회원재가입 승낙을 얻은 경우에는 예외로 한다.<br>
                    &nbsp; 2. 등록 내용에 허위, 기재누락, 오기가 있는 경우<br>
                    &nbsp; 3. 기타 회원으로 등록하는 것이 “몰”의 기술상 현저히 지장이 있다고 판단되는 경우<br>
                    ③ 회원가입계약의 성립 시기는 “몰”의 승낙이 회원에게 도달한 시점으로 합니다.<br>
                    ④ 회원은 회원가입 시 등록한 사항에 변경이 있는 경우,<br>
                    상당한 기간 이내에 “몰”에 대하여 회원정보 수정 등의 방법으로 그 변경사항을 알려야 합니다.
                </p>
                <p>
                    제7조(회원 탈퇴 및 자격 상실 등) <br>
                    ① 회원은 “몰”에 언제든지 탈퇴를 요청할 수 있으며 “몰”은 즉시 회원탈퇴를 처리합니다.<br>
                    ② 회원이 다음 각 호의 사유에 해당하는 경우, “몰”은 회원자격을 제한 및 정지시킬 수 있습니다.<br>
                    &nbsp; 1. 가입 신청 시에 허위 내용을 등록한 경우<br>
                    &nbsp; 2. “몰”을 이용하여 구입한 재화 등의 대금, 기타 “몰”이용에 관련하여 회원이 부담하는 채무를 기일에 지급하지 않는 경우<br>
                    &nbsp; 3. 다른 사람의 “몰” 이용을 방해하거나 그 정보를 도용하는 등 전자상거래 질서를 위협하는 경우<br>
                    &nbsp; 4. “몰”을 이용하여 법령 또는 이 약관이 금지하거나 공서양속에 반하는 행위를 하는 경우<br>
                    ③ “몰”이 회원 자격을 제한․정지 시킨 후, 동일한 행위가 2회 이상 반복되거나 30일 이내에 그 사유가 시정되지 아니하는 경우<br>
                    “몰”은 회원자격을 상실시킬 수 있습니다.<br>
                    ④ “몰”이 회원자격을 상실시키는 경우에는 회원등록을 말소합니다. 이 경우 회원에게 이를 통지하고,<br>
                    회원등록 말소 전에 최소한 30일 이상의 기간을 정하여 소명할 기회를 부여합니다.
                </p>
                <p>
                    제8조(회원에 대한 통지)<br>
                    ① “몰”이 회원에 대한 통지를 하는 경우, 회원이 “몰”과 미리 약정하여 지정한 전자우편 주소로 할 수 있습니다.<br>
                    ② “몰”은 불특정다수 회원에 대한 통지의 경우 1주일이상 “몰” 게시판에 게시함으로서 개별 통지에 갈음할 수 있습니다.<br>
                    다만, 회원 본인의 거래와 관련하여 중대한 영향을 미치는 사항에 대하여는 개별통지를 합니다.</p><p>제9조(구매신청) <br>
                    ① “몰”이용자는 “몰”상에서 다음 또는 이와 유사한 방법에 의하여 구매를 신청하며,<br>
                    “몰”은 이용자가 구매신청을 함에 있어서 다음의 각 내용을 알기 쉽게 제공하여야 합니다. <br>
                    &nbsp; 1. 재화 등의 검색 및 선택<br>
                    &nbsp; 2. 받는 사람의 성명, 주소, 전화번호, 전자우편주소(또는 이동전화번호) 등의 입력<br>
                    &nbsp; 3. 약관내용, 청약철회권이 제한되는 서비스, 배송료․설치비 등의 비용부담과 관련한 내용에 대한 확인<br>
                    &nbsp; 4. 이 약관에 동의하고 위 3.호의 사항을 확인하거나 거부하는 표시(예, 마우스 클릭)<br>
                    &nbsp; 5. 재화등의 구매신청 및 이에 관한 확인 또는 “몰”의 확인에 대한 동의<br>
                    &nbsp; 6. 결제방법의 선택<br>
                    ② “몰”이 제3자에게 구매자 개인정보를 제공•위탁할 필요가 있는 경우 실제 구매신청 시 구매자의 동의를 받아야 하며,<br>
                    회원가입 시 미리 포괄적으로 동의를 받지 않습니다. 이 때 “몰”은 제공되는 개인정보 항목, 제공받는 자,<br>
                    제공받는 자의 개인정보 이용 목적 및 보유‧이용 기간 등을 구매자에게 명시하여야 합니다.<br>
                    다만 「정보통신망이용촉진 및 정보보호 등에 관한 법률」 제25조 제1항에 의한 개인정보 처리위탁의 경우 등<br>
                    관련 법령에 달리 정함이 있는 경우에는 그에 따릅니다.
                </p>
                <p>
                    제10조 (계약의 성립)<br>
                    ① “몰”은 제9조와 같은 구매신청에 대하여 다음 각 호에 해당하면 승낙하지 않을 수 있습니다.<br>
                    다만, 미성년자와 계약을 체결하는 경우에는 법정대리인의 동의를 얻지 못하면<br>
                    미성년자 본인 또는 법정대리인이 계약을 취소할 수 있다는 내용을 고지하여야 합니다.<br>
                    &nbsp; 1. 신청 내용에 허위, 기재누락, 오기가 있는 경우<br>
                    &nbsp; 2. 미성년자가 담배, 주류 등 청소년보호법에서 금지하는 재화 및 용역을 구매하는 경우<br>
                    &nbsp; 3. 기타 구매신청에 승낙하는 것이 “몰” 기술상 현저히 지장이 있다고 판단하는 경우<br>
                    ② “몰”의 승낙이 제12조제1항의 수신확인통지형태로 이용자에게 도달한 시점에 계약이 성립한 것으로 봅니다.<br>
                    ③ “몰”의 승낙의 의사표시에는 이용자의 구매 신청에 대한 확인 및 판매가능 여부,<br>
                    구매신청의 정정 취소 등에 관한 정보 등을 포함하여야 합니다.
                </p>
                <p>
                    제11조(지급방법)<br>
                    “몰”에서 구매한 재화 또는 용역에 대한 대금지급방법은 다음 각 호의 방법중 가용한 방법으로 할 수 있습니다.<br>
                    단, “몰”은 이용자의 지급방법에 대하여 재화 등의 대금에 어떠한 명목의 수수료도 추가하여 징수할 수 없습니다.<br>
                    1. 폰뱅킹, 인터넷뱅킹, 메일 뱅킹 등의 각종 계좌이체 <br>
                    2. 선불카드, 직불카드, 신용카드 등의 각종 카드 결제<br>
                    3. 전자화폐에 의한 결제<br>
                    4. 수령 시 대금지급<br>
                    5. 마일리지 등 “몰”이 지급한 포인트에 의한 결제<br>
                    6. “몰”과 계약을 맺었거나 “몰”이 인정한 상품권에 의한 결제 <br>
                    7. 기타 전자적 지급 방법에 의한 대금 지급 등
                </p>
                <p>
                    제12조(수신확인통지․구매신청 변경 및 취소)<br>
                    ① “몰”은 이용자의 구매신청이 있는 경우 이용자에게 수신확인통지를 합니다.<br>
                    ② 수신확인통지를 받은 이용자는 의사표시의 불일치 등이 있는 경우에는 수신확인통지를 받은 후<br>
                    즉시 구매신청 변경 및 취소를 요청할 수 있고 “몰”은 배송 전에 이용자의 요청이 있는 경우에는<br>
                    지체 없이 그 요청에 따라 처리하여야 합니다. 다만 이미 대금을 지불한 경우에는 제15조의 청약철회 등에 관한 규정에 따릅니다.
                </p>
                <p>
                    제13조(재화 등의 공급)<br>
                    ① “몰”은 이용자와 재화 등의 공급시기에 관하여 별도의 약정이 없는 이상,<br>
                    이용자가 청약을 한 날부터 7일 이내에 재화 등을 배송할 수 있도록 주문제작, 포장 등 기타의 필요한 조치를 취합니다.<br>
                    다만, “몰”이 이미 재화 등의 대금의 전부 또는 일부를 받은 경우에는<br>
                    대금의 전부 또는 일부를 받은 날부터 3영업일 이내에 조치를 취합니다.<br>
                    이때 “몰”은 이용자가 재화 등의 공급 절차 및 진행 사항을 확인할 수 있도록 적절한 조치를 합니다.<br>
                    ② “몰”은 이용자가 구매한 재화에 대해 배송수단, 수단별 배송비용 부담자, 수단별 배송기간 등을 명시합니다.<br>
                    만약 “몰”이 약정 배송기간을 초과한 경우에는 그로 인한 이용자의 손해를 배상하여야 합니다.<br>
                    다만 “몰”이 고의․과실이 없음을 입증한 경우에는 그러하지 아니합니다.
                </p>
                <p>
                    제14조(환급)<br>
                    “몰”은 이용자가 구매신청한 재화 등이 품절 등의 사유로 인도 또는 제공을 할 수 없을 때에는<br>
                    지체 없이 그 사유를 이용자에게 통지하고 사전에 재화 등의 대금을 받은 경우에는<br>
                    대금을 받은 날부터 3영업일 이내에 환급하거나 환급에 필요한 조치를 취합니다.
                </p>
                <p>
                    제15조(청약철회 등)<br>
                    ① “몰”과 재화등의 구매에 관한 계약을 체결한 이용자는 「전자상거래 등에서의 소비자보호에 관한 법률」<br>
                    제13조 제2항에 따른 계약내용에 관한 서면을 받은 날<br>
                    (그 서면을 받은 때보다 재화 등의 공급이 늦게 이루어진 경우에는 재화 등을 공급받거나 재화 등의 공급이 시작된 날을 말합니다)<br>
                    부터 7일 이내에는 청약의 철회를 할 수 있습니다.<br>
                    다만, 청약철회에 관하여 「전자상거래 등에서의 소비자보호에 관한 법률」에 달리 정함이 있는 경우에는 동 법 규정에 따릅니다. <br>
                    ② 이용자는 재화 등을 배송 받은 경우 다음 각 호의 1에 해당하는 경우에는 반품 및 교환을 할 수 없습니다.<br>
                    &nbsp; 1. 이용자에게 책임 있는 사유로 재화 등이 멸실 또는 훼손된 경우<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;(다만, 재화 등의 내용을 확인하기 위하여 포장 등을 훼손한 경우에는 청약철회를 할 수 있습니다)<br>
                    &nbsp; 2. 이용자의 사용 또는 일부 소비에 의하여 재화 등의 가치가 현저히 감소한 경우<br>
                    &nbsp; 3. 시간의 경과에 의하여 재판매가 곤란할 정도로 재화등의 가치가 현저히 감소한 경우<br>
                    &nbsp; 4. 같은 성능을 지닌 재화 등으로 복제가 가능한 경우 그 원본인 재화 등의 포장을 훼손한 경우<br>
                    ③ 제2항제2호 내지 제4호의 경우에 “몰”이 사전에 청약철회 등이 제한되는 사실을 소비자가 쉽게 알 수 있는 곳에 명기하거나<br>
                    시용상품을 제공하는 등의 조치를 하지 않았다면 이용자의 청약철회 등이 제한되지 않습니다.<br>
                    ④ 이용자는 제1항 및 제2항의 규정에 불구하고 재화 등의 내용이 표시•광고 내용과 다르거나 계약내용과 다르게 이행된 때에는<br>
                    당해 재화 등을 공급받은 날부터 3월 이내, 그 사실을 안 날 또는 알 수 있었던 날부터 30일 이내에 청약철회 등을 할 수 있습니다.
                </p>
                <p>
                    제16조(청약철회 등의 효과)<br>
                    ① “몰”은 이용자로부터 재화 등을 반환받은 경우 3영업일 이내에 이미 지급받은 재화 등의 대금을 환급합니다.<br>
                    이 경우 “몰”이 이용자에게 재화등의 환급을 지연한때에는 그 지연기간에 대하여<br>
                    「전자상거래 등에서의 소비자보호에 관한 법률 시행령」제21조의2에서 정하는 지연이자율(괄호 부분 삭제)을 곱하여 산정한 지연이자를 지급합니다.<br>
                    ② “몰”은 위 대금을 환급함에 있어서 이용자가 신용카드 또는 전자화폐 등의 결제수단으로 재화 등의 대금을 지급한 때에는<br>
                    지체 없이 당해 결제수단을 제공한 사업자로 하여금 재화 등의 대금의 청구를 정지 또는 취소하도록 요청합니다.<br>
                    ③ 청약철회 등의 경우 공급받은 재화 등의 반환에 필요한 비용은 이용자가 부담합니다.<br>
                    “몰”은 이용자에게 청약철회 등을 이유로 위약금 또는 손해배상을 청구하지 않습니다.<br>
                    다만 재화 등의 내용이 표시•광고 내용과 다르거나 계약내용과 다르게 이행되어 청약철회 등을 하는 경우 재화 등의 반환에 필요한 비용은<br>
                    “몰”이 부담합니다.<br>
                    ④ 이용자가 재화 등을 제공받을 때 발송비를 부담한 경우에 “몰”은 청약철회 시<br>
                    그 비용을 누가 부담하는지를 이용자가 알기 쉽도록 명확하게 표시합니다.
                </p>
                <p>
                    제17조(개인정보보호)<br>
                    ① “몰”은 이용자의 개인정보 수집시 서비스제공을 위하여 필요한 범위에서 최소한의 개인정보를 수집합니다. <br>
                    ② “몰”은 회원가입시 구매계약이행에 필요한 정보를 미리 수집하지 않습니다.<br>
                    다만, 관련 법령상 의무이행을 위하여<br>
                    구매계약 이전에 본인확인이 필요한 경우로서 최소한의 특정 개인정보를 수집하는 경우에는 그러하지 아니합니다.<br>
                    ③ “몰”은 이용자의 개인정보를 수집•이용하는 때에는 당해 이용자에게 그 목적을 고지하고 동의를 받습니다. <br>
                    ④ “몰”은 수집된 개인정보를 목적외의 용도로 이용할 수 없으며,<br>
                    새로운 이용목적이 발생한 경우 또는 제3자에게 제공하는 경우에는 이용•제공단계에서 당해 이용자에게 그 목적을 고지하고 동의를 받습니다.<br>
                    다만, 관련 법령에 달리 정함이 있는 경우에는 예외로 합니다.<br>
                    ⑤ “몰”이 제2항과 제3항에 의해 이용자의 동의를 받아야 하는 경우에는<br>
                    개인정보보호 책임자의 신원(소속, 성명 및 전화번호, 기타 연락처), 정보의 수집목적 및 이용목적,<br>
                    제3자에 대한 정보제공 관련사항(제공받은자, 제공목적 및 제공할 정보의 내용) 등<br>
                    「정보통신망 이용촉진 및 정보보호 등에 관한 법률」 제22조제2항이 규정한 사항을 미리 명시하거나 고지해야 하며 이용자는<br>
                    언제든지 이 동의를 철회할 수 있습니다.<br>
                    ⑥ 이용자는 언제든지 “몰”이 가지고 있는 자신의 개인정보에 대해 열람 및 오류정정을 요구할 수 있으며<br>
                    “몰”은 이에 대해 지체 없이 필요한 조치를 취할 의무를 집니다. 이용자가 오류의 정정을 요구한 경우에는<br>
                    “몰”은 그 오류를 정정할 때까지 당해 개인정보를 이용하지 않습니다.<br>
                    ⑦ “몰”은 개인정보 보호를 위하여 이용자의 개인정보를 처리하는 자를 최소한으로 제한하여야 하며<br>
                    신용카드, 은행계좌 등을 포함한 이용자의 개인정보의 분실, 도난, 유출, 동의 없는 제3자 제공, 변조 등으로 인한<br>
                    이용자의 손해에 대하여 모든 책임을 집니다.<br>
                    ⑧ “몰” 또는 그로부터 개인정보를 제공받은 제3자는 개인정보의 수집목적 또는 제공받은 목적을 달성한 때에는<br>
                    당해 개인정보를 지체 없이 파기합니다.<br>
                    ⑨ “몰”은 개인정보의 수집•이용•제공에 관한 동의란을 미리 선택한 것으로 설정해두지 않습니다.<br>
                    또한 개인정보의 수집•이용•제공에 관한 이용자의 동의거절시 제한되는 서비스를 구체적으로 명시하고,<br>
                    필수수집항목이 아닌 개인정보의 수집•이용•제공에 관한 이용자의 동의 거절을 이유로 회원가입 등 서비스 제공을 제한하거나 거절하지 않습니다.
                </p>
                <p>
                    제18조(“몰“의 의무)<br>
                    ① “몰”은 법령과 이 약관이 금지하거나 공서양속에 반하는 행위를 하지 않으며 이 약관이 정하는 바에 따라 지속적이고,<br>
                    안정적으로 재화․용역을 제공하는데 최선을 다하여야 합니다.<br>
                    ② “몰”은 이용자가 안전하게 인터넷 서비스를 이용할 수 있도록 이용자의 개인정보(신용정보 포함)보호를 위한 보안 시스템을 갖추어야 합니다.<br>
                    ③ “몰”이 상품이나 용역에 대하여 「표시․광고의 공정화에 관한 법률」 제3조 소정의 부당한 표시․광고행위를 함으로써<br>
                    이용자가 손해를 입은 때에는 이를 배상할 책임을 집니다.<br>
                    ④ “몰”은 이용자가 원하지 않는 영리목적의 광고성 전자우편을 발송하지 않습니다.
                </p>
                <p>
                    제19조(회원의 ID 및 비밀번호에 대한 의무)<br>
                    ① 제17조의 경우를 제외한 ID와 비밀번호에 관한 관리책임은 회원에게 있습니다.<br>
                    ② 회원은 자신의 ID 및 비밀번호를 제3자에게 이용하게 해서는 안됩니다.<br>
                    ③ 회원이 자신의 ID 및 비밀번호를 도난당하거나 제3자가 사용하고 있음을 인지한 경우에는 바로 “몰”에 통보하고 “몰”의 안내가 있는 경우에는<br>그에 따라야 합니다.
                </p>
                <p>
                    제20조(이용자의 의무)<br>
                    이용자는 다음 행위를 하여서는 안 됩니다.<br>
                    1. 신청 또는 변경시 허위 내용의 등록<br>
                    2. 타인의 정보 도용<br>
                    3. “몰”에 게시된 정보의 변경<br>
                    4. “몰”이 정한 정보 이외의 정보(컴퓨터 프로그램 등) 등의 송신 또는 게시<br>
                    5. “몰” 기타 제3자의 저작권 등 지적재산권에 대한 침해<br>
                    6. “몰” 기타 제3자의 명예를 손상시키거나 업무를 방해하는 행위<br>
                    7. 외설 또는 폭력적인 메시지, 화상, 음성, 기타 공서양속에 반하는 정보를 몰에 공개 또는 게시하는 행위
                </p>
                <p>
                    제21조(연결“몰”과 피연결“몰” 간의 관계)<br>
                    ① 상위 “몰”과 하위 “몰”이 하이퍼링크(예: 하이퍼링크의 대상에는 문자, 그림 및 동화상 등이 포함됨)방식 등으로 연결된 경우,<br>
                    전자를 연결 “몰”(웹 사이트)이라고 하고 후자를 피연결 “몰”(웹사이트)이라고 합니다.<br>
                    ② 연결“몰”은 피연결“몰”이 독자적으로 제공하는 재화 등에 의하여 이용자와 행하는 거래에 대해서 보증 책임을 지지 않는다는 뜻을<br>
                    연결“몰”의 초기화면 또는 연결되는 시점의 팝업화면으로 명시한 경우에는 그 거래에 대한 보증 책임을 지지 않습니다.
                </p>
                <p>
                    제22조(저작권의 귀속 및 이용제한)<br>
                    ① “몰“이 작성한 저작물에 대한 저작권 기타 지적재산권은 ”몰“에 귀속합니다.<br>
                    ② 이용자는 “몰”을 이용함으로써 얻은 정보 중 “몰”에게 지적재산권이 귀속된 정보를 “몰”의 사전 승낙 없이<br>
                    복제, 송신, 출판, 배포, 방송 기타 방법에 의하여 영리목적으로 이용하거나 제3자에게 이용하게 하여서는 안됩니다.<br>
                    ③ “몰”은 약정에 따라 이용자에게 귀속된 저작권을 사용하는 경우 당해 이용자에게 통보하여야 합니다.
                </p>
                <p>
                    제23조(분쟁해결)<br>
                    ① “몰”은 이용자가 제기하는 정당한 의견이나 불만을 반영하고 그 피해를 보상처리하기 위하여 피해보상처리기구를 설치․운영합니다.<br>
                    ② “몰”은 이용자로부터 제출되는 불만사항 및 의견은 우선적으로 그 사항을 처리합니다. 다만, 신속한 처리가 곤란한 경우에는<br>
                    이용자에게 그 사유와 처리일정을 즉시 통보해 드립니다.<br>
                    ③ “몰”과 이용자 간에 발생한 전자상거래 분쟁과 관련하여 이용자의 피해구제신청이 있는 경우에는 공정거래위원회 또는<br>
                    시•도지사가 의뢰하는 분쟁조정기관의 조정에 따를 수 있습니다.
                </p>
                <p>
                    제24조(재판권 및 준거법)<br>
                    ① “몰”과 이용자 간에 발생한 전자상거래 분쟁에 관한 소송은 제소 당시의 이용자의 주소에 의하고, 주소가 없는 경우에는 거소를 관할하는<br>
                    지방법원의 전속관할로 합니다.<br>
                    다만, 제소 당시 이용자의 주소 또는 거소가 분명하지 않거나 외국 거주자의 경우에는 민사소송법상의 관할법원에 제기합니다.<br>
                    ② “몰”과 이용자 간에 제기된 전자상거래 소송에는 한국법을 적용합니다.
                </p>
            </div>
            <div class="footer"></div>
        </div>
        <div class="service__tab service__policy__wrap">
            <div class="title">
                <p>개인정보처리방침</p>
            </div>
            <div class="description">
                <p>
                    (주)파이브스페이스는 (이하 "회사"는) 고객님의 개인정보를 중요시하며, "정보통신망 이용촉진 및 정보보호"에 관한 법률을 준수하고 있습니다.
                </p>
                <p>
                    회사는 개인정보취급방침을 통하여 고객님께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며,<br>
                    개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다.
                </p>
                <p>
                    ■ 수집하는 개인정보 항목 및 수집방법<br>
                    가. 수집하는 개인정보의 항목<br>
                    o 회사는 회원가입, 상담, 서비스 신청 등을 위해 아래와 같은 개인정보를 수집하고 있습니다.<br>
                    - 회원가입시 : 로그인ID , 비밀번호 , 이름 , 이메일 , 자택 전화번호 , 휴대전화번호 , 주소 , SNS정보<br>
                    - 서비스 신청시 : 주소, 결제 정보
                </p>
                <p>
                    o 서비스 이용 과정이나 사업 처리 과정에서 서비스이용기록, 접속로그, 쿠키, 접속 IP, 결제 기록, 불량이용 기록이 생성되어 수집될 수 있습니다.
                </p>
                <p>
                    나. 수집방법<br>
                    - 홈페이지, 서면양식, 게시판, 이메일, 이벤트 응모, 배송요청, 전화, 팩스, 생성 정보 수집 툴을 통한 수집
                </p>
                <p>
                    ■ 개인정보의 수집 및 이용목적<br>회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다.<br>
                    o 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산<br>
                    콘텐츠 제공 , 구매 및 요금 결제 , 물품배송 또는 청구지 등 발송 , 금융거래 본인 인증 및 금융 서비스<br>
                    o 회원 관리<br>
                    회원제 서비스 이용에 따른 본인확인 , 개인 식별 , 불량회원의 부정 이용 방지와 비인가 사용 방지 ,<br>
                    가입 의사 확인 , 불만처리 등 민원처리 , 고지사항 전달<br>
                    o 마케팅 및 광고에 활용<br>
                    이벤트 등 광고성 정보 전달 , 접속 빈도 파악 또는 회원의 서비스 이용에 대한 통계
                </p>
                <p>
                    ■ 개인정보의 보유 및 이용기간<br>
                    원칙적으로, 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다.<br>
                    단, 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다.
                </p>
                <p>
                    가. 회사 내부방침에 의한 정보보유 사유<br>
                    &nbsp;회원이 탈퇴한 경우에도 불량회원의 부정한 이용의 재발을 방지, 분쟁해결 및 수사기관의 요청에 따른 협조를 위하여,<br>
                    이용계약 해지일로부터 5년간 회원의 정보를 보유할 수 있습니다. 
                </p>
                <p>
                    나. 관련 법령에 의한 정보 보유 사유 <br>
                    전자상거래등에서의소비자보호에관한법률 등 관계법령의 규정에 의하여 보존할 필요가 있는 경우<br>
                    회사는 아래와 같이 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다.<br>
                    o 계약 또는 청약철회 등에 관한 기록<br>
                    -보존이유 : 전자상거래등에서의소비자보호에관한법률<br>
                    -보존기간 : 5년<br>
                    o 대금 결제 및 재화 등의 공급에 관한 기록<br>
                    -보존이유: 전자상거래등에서의소비자보호에관한법률<br>
                    -보존기간 : 5년 <br>
                    o 소비자 불만 또는 분쟁처리에 관한 기록<br>
                    -보존이유 : 전자상거래등에서의소비자보호에관한법률<br>
                    -보존기간 : 3년 <br>
                    o 로그 기록 <br>
                    -보존이유: 통신비밀보호법<br>
                    -보존기간 : 3개월
                </p>
                <p>
                    ■ 개인정보의 파기절차 및 방법<br>
                    회사는 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다.<br>
                    파기절차 및 방법은 다음과 같습니다.<br>
                    o 파기절차<br>
                    회원님이 회원가입 등을 위해 입력하신 정보는 목적이 달성된 후 별도의 DB로 옮겨져(종이의 경우 별도의 서류함)<br>
                    내부 방침 및 기타 관련 법령에 의한 정보보호 사유에 따라(보유 및 이용기간 참조) 일정 기간 저장된 후 파기되어집니다.<br>
                    별도 DB로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 보유되어지는 이외의 다른 목적으로 이용되지 않습니다.<br>
                    o 파기방법<br>
                    전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.
                </p>
                <p>
                    ■ 개인정보 제공<br>
                    회사는 이용자의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우에는 예외로 합니다.<br>
                    o 이용자들이 사전에 동의한 경우<br>
                    o 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우
                </p>
                <p>
                    ■ 수집한 개인정보의 위탁<br>
                    회사는 서비스 이행을 위해 아래와 같이 외부 전문업체에 위탁하여 운영하고 있습니다.<br>
                    o 위탁 대상자 : CJ대한통운<br>
                    o 위탁업무 내용 : 제품 배송<br>
                    o 위탁 대상자 : ㈜케이지이니시스<br>
                    o 위탁업무 내용 : 카드 결제 및 에스크로 서비스<br>
                    o 위탁 대상자 : ㈜케이지모빌리언스<br>
                    o 위탁업무 내용 : 휴대폰 결제
                </p>
                <p>
                    ■ 이용자 및 법정대리인의 권리와 그 행사방법<br>
                    o 이용자는 언제든지 등록되어 있는 자신의 개인정보를 조회하거나 수정할 수 있으며 가입해지를 요청할 수도 있습니다.<br>
                    o 이용자들의 개인정보 조회,수정을 위해서는 "개인정보변경"(또는 "회원정보수정" 등)을 가입해지(동의철회)를 위해서는<br>
                    "회원탈퇴"를 클릭하여 본인 확인 절차를 거치신 후 직접 열람, 정정 또는 탈퇴가 가능합니다.<br>
                    o 혹은 개인정보관리책임자에게 서면, 전화 또는 이메일로 연락하시면 지체없이 조치하겠습니다.<br>
                    o 귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다.<br>
                    또한 잘못된 개인정보를 제3자에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체없이 통지하여 정정이 이루어지도록 하겠습니다.<br>
                    o 회사는 이용자의 요청에 의해 해지 또는 삭제된 개인정보는 "회사가 수집하는 개인정보의 보유 및 이용기간"에 명시된 바에 따라 처리하고<br>
                    그 외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다.<br>
                    o 만 14세 미만 아동의 경우, 법정대리인이 아동의 개인정보를 수집하거나 수정할 권리, 수집 및 이용 동의를 철회할 권리를 가집니다.
                </p>
                <p>
                    ■ 개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항<br>
                    회사는 귀하의 정보를 수시로 저장하고 찾아내는 "쿠키(cookie)" 등을 운용합니다.<br>
                    쿠키란 웹사이트를 운영하는데 이용되는 서버가 귀하의 브라우저에 보내는 아주 작은 텍스트 파일로서 귀하의 컴퓨터 하드디스크에 저장됩니다.<br>
                    회사은(는) 다음과 같은 목적을 위해 쿠키를 사용합니다.<br>
                    o 쿠키 등 사용 목적<br>
                    1. 회원과 비회원의 접속 빈도나 방문 시간 등을 분석, 이용자의 취향과 관심분야를 파악 및 자취 추적,<br>
                    각종 이벤트 참여 정도 및 방문 회수 파악 등을 통한 타겟 마케팅 및 개인 맞춤 서비스 제공<br>
                    2. 귀하는 쿠키 설치에 대한 선택권을 가지고 있습니다. 따라서, 귀하는 웹브라우저에서 옵션을 설정함으로써 모든 쿠키를 허용하거나,<br>
                    쿠키가 저장될 때마다 확인을 거치거나, 아니면 모든 쿠키의 저장을 거부할 수도 있습니다.<br>
                    o 쿠키 설정 거부 방법<br>
                    1. 쿠키 설정을 거부하는 방법으로는 회원님이 사용하시는 웹 브라우저의 옵션을 선택함으로써 모든 쿠키를 허용하거나<br>
                    쿠키를 저장할 때마다 확인을 거치거나, 모든 쿠키의 저장을 거부할 수 있습니다.<br>
                    2. 설정방법 예(인터넷 익스플로어의 경우) : 웹 브라우저 상단의 도구 &gt; 인터넷 옵션 &gt; 개인정보<br>
                    3. 단, 귀하께서 쿠키 설치를 거부하였을 경우 서비스 제공에 어려움이 있을 수 있습니다.
                </p>
                <p>
                    ■ 개인정보에 관한 민원서비스<br>
                    회사는 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보관리책임자를 지정하고 있습니다.<br>
                    o 개인정보관리담당부서<br>
                    소속 : 고객센터<br>
                    전화번호 : 02-792-2232<br>
                    이메일 : customer_care@adererror.com
                </p>
                <p>
                    o 개인정보관리책임자 <br>
                    성명 : 정승환<br>
                    전화번호 : 02-792-2232<br>
                    이메일 : customer_care@adererror.com
                </p>
                <p>
                    o 귀하께서는 회사의 서비스를 이용하시며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다.<br>
                    o 회사는 이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다.<br>
                    o 기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다.<br>
                    개인정보침해신고센터 (privacy.kisa.or.kr / 국번 없이 118)<br>
                    대검찰청 사이버범죄수사단 (<a href="%5C%22http%3A//www.spo.go.kr%5C%22">www.spo.go.kr</a> / 02-3480-2000)<br>
                    경찰청 사이버안전국 (<a href="%5C%22http%3A//www.ctrc.go.kr/%5C%22">www.ctrc.go.kr/</a> 국번 없이 182)
                </p>
            </div>
            <div class="footer"></div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $('.service__tab').hide();
    $('.service__notice__wrap').show();
    var country = 'KR';
    $.ajax({
        type: "post",
        data: {
            "country": country
        },
        dataType: "json",
        url: "http://116.124.128.246:80/_api/mypage/notice/get",
        error: function(d) {
        },
        success: function(d) {
            if(d.code == 200){
                if(d.data != null && d.data.length > 0){
                    $('.toggle__list__tab.01').html('');
                    d.data.forEach(function(row){
                        var fix_btn = '';
                        strDiv = '';

                        if(row.fix_flg == 1){
                            fix_btn = `<img src="/images/mypage/mypage_fixed_icon.svg" style="float:left;margin-right:5px;">`;
                        }
                        else{
                            fix_btn = '';
                        }
                        strDiv = `
                            <div class="toggle__item">
                                <div class="question">
                                    ${fix_btn}
                                    <span>${row.title}</span>
                                    <img src="/images/mypage/mypage_down_tab_btn.svg" class="down__up__icon" style="float:right;margin-top:10px;">
                                </div>
                                <div class="request" style="display:none">
                                    ${row.contents}
                                </div>
                            </div>
                        `;
                        $('.toggle__list__tab.01').append(strDiv);
                    })
                }
                $('.service__tab__wrap .request p').css('text-align','left');
                $('.service__tab__wrap .request img').css('width','670px');
            }
            
            $('.question').on('click', function(){
                $('.request').hide();
                $('.question').find('img.down__up__icon').attr('src','/images/mypage/mypage_down_tab_btn.svg');
                if($(this).next().css('display') == 'none'){
                    $(this).find('img.down__up__icon').attr('src','/images/mypage/mypage_up_tab_btn.svg');
                }
                else{
                    $(this).find('img.down__up__icon').attr('src','/images/mypage/mypage_down_tab_btn.svg');
                }
                $(this).next().toggle();
            })
            
        }
    });
})
   
</script>