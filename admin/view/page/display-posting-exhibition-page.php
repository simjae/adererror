
<!-- START RESPONSE CARD -->
<style>
    input::placeholder{
        color: #707070;
        text-align: center;
    }
    textarea{
        padding: 10px;
        border: 1px solid #000;
    }
    textarea::placeholder{
        color: #707070;
    }
    textarea:focus{
        outline: none;
    }
    .page__wrap{
        width: 100%;
        display: grid;
        grid-template-columns: 2fr 1fr;
        column-gap: 10px;
    }
    .edit__wrap{
        border: 1px dashed #000;
        padding: 10px;
    }
    .edit__contnet__wrap {
        display: grid;
        row-gap: 20px;
    }
    .edit__contnet__wrap > div{
        /*border: 1px solid red;*/
        text-align: center;
    }
    .edit__img{
        display: contents;
    }
    .edit__img img{
        width: 100%;
    }
    .preview__wrap{
        border: 1px dashed #000;
        padding:10px;
    }
    .edit__input__wrap{
        display: grid;
        justify-content: center;
    }
    .edit__intpu__btn.preview{
        width: 200px;
    }
    .edit__title__wrap{
        margin: 10px;
        padding: 10px;
        align-items: center;
        display: flex;
        justify-content: space-between;
        border-bottom:1px solid #000;

	}
    .edit__input__wrap input{
        padding: 5px;
        border: 1px #adadad solid;
        cursor: pointer;
        overflow: visible;
        -ms-user-select: none;
        -moz-user-select: -moz-none;
        user-select: none;
        color: #adadad;
    }
    .edit__input__wrap input:focus{
        outline: none;
    }
    .edit__textarea__wrap{
        display: grid;
    }
    .edit__btn{
        text-align: center;
        cursor: pointer;
        width: 100px;
        height: 30px;
        background-color: #000;
        line-height: 2;
        color: #fff;
    }
    .edit__script{
        padding-right: 2px;
        display: grid;
    }
    .edit__product__wrap{
        margin: 10px 0 20px 0;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        column-gap: 10px;
        row-gap: 10px;
    }
    .edit__product__wrap.preview{
        margin: 20px 0;
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    
    .description__text{
        text-align: start;
        margin-bottom: 5px;
        font-weight: 600;
    }
    .product__img{
        position: relative;
    }
    .product__img img{
        width: 100%;
        height: 400px;
    }
    .product__box{
        border: 1px solid #f0f0f0;
        grid-template-rows: 10fr 1fr 1fr;
    }
    .product__title{
        padding: 5px;
    }
    .product__content{
        display: flex;
        padding: 5px;
        justify-content: space-between;
    }
    .flex__wrap{
        display: flex;
        justify-content: center;
        gap: 20px;
    }
    .edit__intpu__btn{
        display: grid;
        justify-content: center;
        text-align: center;
        width: 100%;
        cursor: pointer;
        height: 30px;
        line-height: 2;
        border-radius: 4px;
        border: solid 1px #000;
        color: #000;
    }

    /*--------------- 저장버튼 -------------------------*/
    .apply__btn__wrap{
        display: flex;
        position: sticky;
        top: 0;
        justify-content: center;
        margin: 20px 0;
        gap: 20px;
    }
    .temp__apply__btn{
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 270px;
        border-radius: 2px;
        color: #fff;
        padding: 10px;
        background-color: rgb(135, 135, 135);
        height: 36px;
    }
    .apply__btn{
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 270px;
        border-radius: 2px;
        color: #fff;
        padding: 10px;
        background-color: #140f82;
        height: 36px;
    }
    .reset__btn{
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 270px;
        border-radius: 2px;
        padding: 10px;
        border: solid 1px #707070;
        height: 36px;
    }
    .edit__input__box{
        display: grid;
        justify-content: center;
        row-gap: 10px;
        margin: 20px 0;
    }
    .edit__input{
        display: flex;
        gap: 20px;

    }
    .temp__btn{
        text-align: center;
        cursor: pointer;
        height: 30px;
        padding:0 10px;
        border:1px solid #000;
        border-radius: 5px;
        line-height: 2;
        color: #000;
    }
    .preview__call__btn{
        text-align: center;
        cursor: pointer;
        height: 30px;
        padding:0 10px;
        border:1px solid #000;
        border-radius: 5px;
        line-height: 2;
        color: #000;
    }
    .product__call__btn{
        text-align: center;
        cursor: pointer;
        width: 130px;
        height: 30px;
        padding:0 10px;
        border:1px solid #000;
        border-radius: 5px;
        line-height: 2;
        color: #000;
    }
    .remove__btn{
        position: absolute;
        text-align: right;
        top: 15px;
        right: 15px;
        cursor: pointer;
        -moz-transform: scale(0);
        -webkit-transform: scale(0);
        -o-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
    }
    .product__img:hover> .remove__btn{
        -moz-transform: scale(1);
        -webkit-transform: scale(1);
        -o-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }
    .url__wrap{
        display: grid;
        border: 1px dashed #000;
        grid-template-columns: 1fr 1fr;
        row-gap: 10px;
        margin: 20px 0px;
        padding: 10px;
    }
</style>
<div class="content__card">
    <div class="url__wrap">
        <div>이름 :<span>22s/s 'after blue exhibition New</span></div>
        <div>적용몰 :<span>한국몰</span></div>
        <div>URL :<span>https://m.adererror.com/collaboration/birkenstock.html?cate_no=561</span></div>
        <div>비고 :<span></span></div>
    </div>
    <div class="page__wrap">
        <div class="edit__wrap">
            <div class="edit__title__wrap">
                <div>
                    <h3 class="edit__title">landing Page</h3>
                </div>
                <div style="display: flex;gap: 10px;">
                    <div class="temp__btn">임시저장 불러오기</div>
                    <div class="preview__call__btn">프리뷰</div>
                </div>
            </div>
            <div class="edit__contnet__wrap">
                <div>2022</div>
                <div class="edit__input__wrap">
                    <input type="text" placeholder="22s/s 'after blue exhibition New"name="edit__1" value="">
                </div>
                <div class="edit__input__wrap">
                    <div class="edit__intpu__btn">더많은 제품 보러가기</div>
                    <div class="edit__input__box">
                        <div class="edit__input">
                            <input type="text" placeholder="더많은 제품 보러가기" name="edit__2" value="">
                            <div class="edit__btn"><span>수정</span></div>
                        </div>
                        <input type="text" placeholder="https://m.adererror.com/exhibition/ss22-2nd-drop.html"name="edit__url" value="">
                    </div>
                </div>

                <div class="edit__img">
                    <img src="/images/main.jpeg" alt="img">
                </div>
                <div class="edit__input__wrap">
                    <input type="text" placeholder="self expression" name="edit__3" value="">
                </div>
                <div class="edit__textarea__wrap">
                    <div class="description__text">description</div>
                    <textarea name="edit__4" id="" cols="30" placeholder="아더의 2022 여름/가을 시즌 컬렉션의 새로운 드롭을 기념한" rows="10"></textarea>
                </div>
                
                <div class="edit__script">
                    <div class="description__text">script</div>
                    <textarea name="edit__5" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="edit__script">
                    <div class="description__text">script</div>
                    <textarea name="edit__6" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="edit__input__wrap">
                    <div class="edit__intpu__btn">캠페인 영상 재생</div>
                    <div class="edit__input__box">
                        <div class="edit__input">
                            <input type="text" placeholder="캠페인 영상 재생" name="edit__7" value="">
                            <div class="edit__btn"><span>수정</span></div>
                        </div>
                        <input type="text" placeholder="https://m.adererror.com/exhibition/ss22-2nd-drop.html"name="edit__url" value="">
                    </div>
                </div>
                <div class="edit__input__wrap">
                    <div class="edit__intpu__btn">더많은 제품 보러가기</div>
                    <div class="edit__input__box">
                        <div class="edit__input">
                            <input type="text" placeholder="캠페인 영상 재생" name="edit__8" value="">
                            <div class="edit__btn"><span>수정</span></div>
                        </div>
                        <input type="text" placeholder="https://m.adererror.com/exhibition/ss22-2nd-drop.html"name="edit__url" value="">
                    </div>
                </div>
            </div>
            <div class="product__call__btn">상품불러오기</div>
            <div class="edit__product__wrap">
                <div class="product__box">
                    <div style="width: 100%;">
                        <div class="product__img">
                            <div class="remove__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </div>
                            <img  src="/images/nav1.jpeg" alt="asd">
                        </div>
                        <div class="product__title">twin heart braasd</div>
                        <div class="product__content">
                            <div>white</div>
                            <div>159,000</div>
                        </div>
                    </div>
                </div>
                <div class="product__box">
                    <div style="width: 100%;">
                        <div class="product__img">
                            <div class="remove__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </div>
                            <img  src="/images/nav1.jpeg" alt="asd">
                        </div>
                        <div class="product__title">twin heart braasd</div>
                        <div class="product__content">
                            <div>white</div>
                            <div>159,000</div>
                        </div>
                    </div>
                </div>
                <div class="product__box">
                    <div style="width: 100%;">
                        <div class="product__img">
                            <div class="remove__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </div>
                            <img  src="/images/nav1.jpeg" alt="asd">
                        </div>
                        <div class="product__title">twin heart braasd</div>
                        <div class="product__content">
                            <div>white</div>
                            <div>159,000</div>
                        </div>
                    </div>
                </div>
                <div class="product__box">
                    <div style="width: 100%;">
                        <div class="product__img">
                            <div class="remove__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </div>
                            <img  src="/images/nav1.jpeg" alt="asd">
                        </div>
                        <div class="product__title">twin heart braasd</div>
                        <div class="product__content">
                            <div>white</div>
                            <div>159,000</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="edit__input__wrap">
                <div class="edit__intpu__btn">더많은 제품 보러가기</div>
                <div class="edit__input__box">
                    <div class="edit__input">
                        <input type="text" placeholder="더많은 제품 보러가기" name="edit__8" value="">
                        <div class="edit__btn"><span>수정</span></div>
                    </div>
                    <input type="text" placeholder="https://m.adererror.com/exhibition/ss22-2nd-drop.html"name="edit__url" value="">
                </div>
            </div>
            <div class="apply__btn__wrap">
                <div class="temp__apply__btn">임시저장</div>
                <div class="apply__btn">저장</div>
                <div class="reset__btn">초기화</div>
            </div>
        </div>
        <div class="preview__wrap">
            <div class="preview__call__btn">프리뷰</div>
            <div>
                
            </div>
            <div class="edit__title__wrap">
                <h3 class="edit__title">preview Page</h3>
            </div>
            <div class="edit__contnet__wrap">
                <div>2022</div>
                <div class="edit__input__wrap">
                    <div class="">22s/s 'after blue exhibition New</div>
                </div>
                <div class="edit__input__wrap">
                    <div class="edit__intpu__btn preview">더많은 제품 보러가기</div>
                </div>
                <div class="edit__img">
                    <img src="/images/main.jpeg" alt="img">
                </div>
                <div class="edit__input__wrap">
                    <div class="">self expression</div>
                </div>
                    <div class="textarea__result">
                        <p>
                            과거 2018 봄/여름 컬렉션의 ‘Diagonal‘ 로고 그래픽과 아더의 시그니처 ‘Cinder’ 디테일이 만나<br>
                            새롭게 선보이는 2022년 봄/여름 오리진 리바이벌 컬렉션을 만나보세요.<br>
                            베이직한 컬러 팔레트로 블레이저, 티셔츠, 모자까지 아더의 오리지널리티를<br>
                            새로운 라인업으로 경험할 수 있습니다.
                        </p>
                    </div>
                
                <div class="edit__script">
                    <div class="script__result">스크립트</div>
                </div>
                <div class="edit__script">
                    <div class="script__result">스크립트</div>
                </div>
                <div class="edit__input__wrap">
                    <div class="edit__intpu__btn preview">캠페인 영상 재생</div>
                </div>
                <div class="edit__input__wrap">
                    <div class="edit__intpu__btn preview">더많은 제품 보러가기</div>
                </div>
            </div>
            <div class="edit__product__wrap preview">
                <div class="product__box">
                    
                    <div style="width: 100%;">
                        <div class="product__img">
                            <div class="remove__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </div>
                            <img  src="/images/nav1.jpeg" alt="asd">
                        </div>
                        
                        <div class="product__title">twin heart braasd</div>
                        <div class="product__content">
                            <div>white</div>
                            <div>159,000</div>
                        </div>
                    </div>
                </div>
                <div class="product__box">
                    <div style="width: 100%;">
                        <div class="product__img">
                            <img  src="/images/nav1.jpeg" alt="asd">
                        </div>
                        <div class="product__title">twin heart braasd</div>
                        <div class="product__content">
                            <div>white</div>
                            <div>159,000</div>
                        </div>
                    </div>
                </div>
                <div class="product__box">
                    <div style="width: 100%;">
                        <div class="product__img">
                            <img  src="/images/nav1.jpeg" alt="asd">
                        </div>
                        <div class="product__title">twin heart braasd</div>
                        <div class="product__content">
                            <div>white</div>
                            <div>159,000</div>
                        </div>
                    </div>
                </div>
                <div class="product__box">
                    <div style="width: 100%;">
                        <div class="product__img">
                            <img  src="/images/nav1.jpeg" alt="asd">
                        </div>
                        <div class="product__title">twin heart braasd</div>
                        <div class="product__content">
                            <div>white</div>
                            <div>159,000</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="edit__input__wrap">
                <div class="edit__intpu__btn preview">더많은 제품 보러가기</div>
            </div>
        </div>
    </div>
</div>
