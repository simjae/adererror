<style>
    main {
        padding-top: 0px;
    }
    header {
    color: var(--wh);
    background-color: none;
    border-bottom: 0px;
}
header .logo {
content: url("/images/svg/logo.svg");
}
header .search-svg {
content: url("/images/svg/search-wh.svg");
}
header .earth-svg {
    content: url("/images/svg/earth-wh.svg");
}
header .wishlist-svg {
    content: url("/images/svg/wishlist-wh.svg");
}
header .basket-svg {
    content: url("/images/svg/basket-wh.svg");
}
header .bluemark-svg {
    content: url("/images/svg/bluemark-wh.svg");
}
header .user-svg {
    content: url("/images/svg/user-wh.svg");
}

header.scroll .logo {
content: url("/images/svg/logo-bk.svg");
}
header.scroll .search-svg {
    content: url("/images/svg/search-bk.svg");
}
header.scroll .earth-svg {
    content: url("/images/svg/earth-bk.svg");
}
header.scroll .wishlist-svg {
    content: url("/images/svg/wishlist-bk-line.svg");
}
header.scroll .basket-svg {
    content: url("/images/svg/basket-bk.svg");
}
header.scroll .bluemark-svg {
    content: url("/images/svg/bluemark-bk.svg");
}
header.scroll .user-svg {
    content: url("/images/svg/user-bk.svg");
}
header.scroll {
background-color: #fff;
color: var(--bk);
border-bottom: 1px solid #eeeeee;
}
header.scroll .header__grid{
    color: #343434;
}
header .header__grid{
    color: #ffffff;
}
.header__wrap {
    color: var(--wh);
    background-color: transparent;
}
.hamburger .line{
    background-color: var(--wh);
}
header.scroll .hamburger .line{
    background-color: var(--bk);
}
    .btn__wrap {
        font-family: Noto Sans KR;
        font-size: 1.3rem;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.46;
        letter-spacing: normal;
        display: flex;
    }

    .swiper-wrapper {
        height: auto;
    }

    /* new project */
    .new__project__wrap {
        position: relative;
    }

    .new__project__img {
        width: 100%;
        height: 900px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    .new__project__content {
        color: #fff;
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    .new__project__content .cnt-box {
        position: relative;
        display: grid;
        grid-template-columns: repeat(16, 1fr);
        padding-bottom: 120px;
    }

    .new__project__swiper {
        overflow-x: hidden;
        position: relative;
    }

    .new__project__swiper .swiper-button-next,
    .swiper-button-prev {
        top: 82%;
        color: #fff;
    }

    .new__project__swiper .swiper-button-next {
        right: 2%;
    }

    .new__project__swiper .swiper-button-prev {
        left: 2%;
    }

    .new__project__content .season__title {
        grid-column: 2 / 17;

        font-family: FuturaLTPro;
        font-size: 1.5rem;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.4;
        letter-spacing: normal;
        text-align: left;
    }

    .new__project__content .title {
        grid-column: 2 / 17;

        font-family: FuturaLTPro;
        font-size: 2.5rem;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.4;
        letter-spacing: 0.75px;
        text-align: left;
    }

    .new__project__swiper .btn__wrap {
        grid-column: 2 / 17;
        gap: 30px;
    }

    /* .new__project__swiper .btn__wrap > div::after{
        content: "";
        display: block;
        width: 100%;
        border-bottom: 2px solid #fff;
    } */

    /* exhibtion */
    .exhibtion__wrap {
        display: flex;
        width: 100%;
    }

    .exhibtion__wrap>div {
        width: 50%;
    }

    .exhibtion__content {
        order: 1;
        display: flex;
        padding: 10px;
        background-color: #ffffff;
        align-items: flex-end;
    }

    .exhibtion__img {
        order: 2;
        width: 100%;
        height: auto;
        min-height: 960px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    .ex__box {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(8, 1fr);
    }

    .exhibtion__content .title {
        grid-column: 2/ 9;
        font-family: Noto Sans KR;
        font-size: 1.3rem;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.46;
        letter-spacing: normal;
        text-align: left;
        color: #000;
    }

    .exhibtion__content .season__title {
        grid-column: 2/ 9;
        font-family: FuturaLTPro;
        font-size: 2rem;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.45;
        letter-spacing: 0.6px;
        text-align: left;
        color: #343434;
        padding-bottom: 30px;
    }

    .exhibtion__content .btn__wrap {
        grid-column: 2/ 9;
        font-family: FuturaLTPro;
        font-size: 1.2rem;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.45;
        letter-spacing: 0.6px;
        text-align: left;
        color: #343434;
        padding-bottom: 30px;
        gap: 30px;
    }





    /* 스타일링 */
    .styling-wrap {
        position: relative;
    }

    .styling-text {
        font-family: FuturaLTPro;
        font-size: 1.3rem;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: 0.4px;
        text-align: left;
        color: #343434;
        padding: 30px 0 20px 20px;
    }

    .styling-text span {
        margin-left: 10px;
    }

    .styling-swiper {
        margin-bottom: 100px;
        position: relative;
        width: 100%;
    }

    .styling-swiper .styling__img {
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: auto;
        width: 100%;
    }

    .styling-swiper .btn__wrap {
        padding-left: 10px;
    }

    .styling-swiper .btn__wrap>div::after {
        content: "";
        display: block;
        width: 100%;
        border-bottom: 2px solid #000;
    }

    .styling-swiper .title {
        padding: 0px 0 10px 10px;
        font-family: FuturaLTPro;
        font-size: 2rem;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.45;
        letter-spacing: normal;
        text-align: left;
        color: #343434;
    }

    .styling-swiper .t-box {
        padding-left: calc(100% - 85%);
        padding-bottom: 30px;
        padding-top: 28px;
    }

    /* recommand */
    .recommand-wrap {
        padding-bottom: 130px;
    }

    .re-swiper {
        position: relative;
    }

    .re-swiper .swiper-slide:hover {
        background-color: #FBFBFB;
    }

    .slide-box {
        box-sizing: border-box;
    }

    .slide-box .slide__title {
        text-align: center;
        font-family: FuturaLTPro;
        font-size: 1.3rem;
        font-weight: 500;
        font-style: normal;
        color: #343434;
    }

    .slide-box .center-box {
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    .foryou-wrap {
        padding-bottom: 300px;
        position: relative;
    }

    .foryou-wrap .foryou-text {
        position: absolute;
        padding: 22px;
        z-index: 10;
        font-family: FuturaLTPro;
        font-size: 1.3rem;
        font-weight: normal;
        color: #343434;
    }

    .foryou-wrap .foryou-swiper {
        position: relative;
    }

    .foryou-wrap .wish__btn {
        position: absolute;
        right: 0;
        padding: 22px;
    }

    .foryou-wrap .swiper-slide {
        border-top: solid 1px #dcdcdc;
        border-bottom: solid 1px #dcdcdc;
    }

    .foryou-wrap .swiper-slide:not(:last-child) {
        border-inline-end: solid 1px #dcdcdc;
    }

    .foryou-wrap img {
        width: 100%;
        background-color: #fbfbfb;
    }

    .foryou-wrap .prd-title {
        height: 40px;
        background-color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    /* 스와이프 네비게이션 */
    .new__project__swiper .navigation .swiper-button-next {
        width: 1.2rem;
        content: url('/images/svg/sw-ar-wh.svg');
        top: calc(100% - 19%);
        right: 2%;
        color: #343434;
    }

    .new__project__swiper .navigation .swiper-button-prev {
        width: 1.2rem;
        content: url('/images/svg/sw-ar-wh.svg');
        transform: rotate(180deg);
        left: 3%;
        top: calc(100% - 19%);
        color: #343434;
    }

    .re-swiper .navigation .swiper-button-next {
        width: 1.2rem;
        content: url('/images/svg/sw-ar-bk.svg');
        top: calc(100% - 50%);
        right: 2%;
        color: #343434;
    }

    .re-swiper .navigation .swiper-button-prev {
        display: none;
        content: url('/images/svg/sw-ar-bk.svg');
        transform: rotate(180deg);
        top: calc(100% - 50%);
        color: #343434;
    }

    .styling-swiper .navigation .swiper-button-next {
        top: auto;
        height: 110px;
        right: 0;
        bottom: 0;
        color: var(--bk);
        background-color: var(--wh);
    }

    .styling-swiper .navigation .swiper-button-next::after {
        content: url('/images/svg/sw-ar-bk.svg');
        position: relative;
    }

    .styling-swiper .navigation .swiper-button-prev {
        display: none;
        content: url('/images/svg/sw-ar-bk.svg');
        transform: rotate(180deg);
        top: calc(100% - 5%);
        color: #343434;
    }

    .foryou-swiper .navigation .swiper-button-next {
        content: url('/images/svg/sw-ar-bk.svg');
        top: calc(100% - 50%);
        right: 2%;
        color: #343434;
        width: 12px;
    }

    .foryou-swiper .navigation .swiper-button-prev {
        display: none;
        content: url('/images/svg/sw-ar-bk.svg');
        transform: rotate(180deg);
        top: calc(100% - 50%);
        color: #343434;
    }


    @media (max-width: 1025px) {

        .under-line.bk::after {
            background-color: #343434;
        }

        .under-line.wh::after {
            background-color: #ffffff;
        }

        .new__project__content .cnt-box {
            padding-left: 10px;
        }

        .new__project__content .season__title {
            grid-column: 1 / 17;
        }

        .new__project__content .title {
            grid-column: 1 / 17;
        }

        .new__project__swiper .btn__wrap {
            grid-column: 1 / 17;
        }

        .new__project__img {
            max-height: 675px;
        }

        .new__project__swiper .navigation {
            display: none;
        }

        .recommand-wrap .navigation {
            display: none;
        }

        .exhibtion__wrap {
            flex-direction: column;
        }

        .exhibtion__wrap>div {
            width: 100%;
        }

        .exhibtion__content {
            order: 2;
        }

        .exhibtion__img {
            order: 1;
            margin-top: 100px;
            min-height: 360px;
        }

        .exhibtion__content .title {
            grid-column: 1 / 9;
            font-size: 1.2rem;
        }

        .exhibtion__content .season__title {
            grid-column: 1 / 9;
            font-size: 1.6rem;
        }

        .exhibtion__content .btn__wrap {
            grid-column: 1 / 9;
            font-size: 1.2rem;
        }

        .re-swiper .swiper-wrapper {
            flex-wrap: wrap;
        }

        .re-swiper .swiper-slide {
            width: 50% !important;
            margin-right: 0px !important;
        }

        /* .styling-swiper .styling__img{
            max-height: 270px;
        }
        .re-swiper .styling__img{
            max-height: 225px;
        } */
        .styling-swiper .swiper-slide .t-box {
            padding-left: 0px;
        }

        .styling-swiper .swiper-slide .btn__wrap {
            gap: 0;
        }

        .styling-swiper .title {
            font-size: 1.6rem;
        }

        .styling-swiper .btn__wrap {
            font-size: 1.2rem;
        }

        .styling-swiper .navigation .swiper-button-next::before {
            background-color: #ffffff;
        }

        .styling-swiper .navigation .swiper-button-next {
            top: auto;
            height: 90px;
            right: 0;
            bottom: 0;
            color: var(--bk);
            background-color: var(--wh);
        }

        .foryou-wrap {
            padding-bottom: 160px;
        }

        .foryou-wrap .foryou-text {
            position: static;

        }
    }
</style>

<main>
    <!-- banner -->
    <section class="new__project__wrap">
        <div class="new__project__swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="new__project__img" style="background-image:url('/images/landing/bg.jpeg') ;">
                        <div class="new__project__content">
                            <div class="cnt-box">
                                <div class="season__title">2020 Spring Summer Collection</div>
                                <div class="title">After Blue</div>
                                <div class="btn__wrap">
                                    <a href="" class="read__more under-line wh">자세히보기</a>
                                    <a href="" class="go__product under-line wh">제품 보러 가기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="new__project__img" style="background-image:url('/images/landing/intro.jpeg') ;"></div>
                </div>
                <div class="swiper-slide">
                    <div class="new__project__img" style="background-image:url('/images/landing/intro1.jpeg') ;"></div>
                </div>
            </div>
            <div class="navigation">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <!-- exhibtion -->
    <section>
        <div class="exhibtion__wrap">
            <div class="exhibtion__img" style="background-image:url('/images/landing/main.jpeg') ;"></div>
            <div class="exhibtion__content">
                <div class="ex__box">
                    <div class="title">아더에러 22 SS 컬렉션 2차 드롭</div>
                    <div class="season__title">22S/S 'Self Expression'</div>
                    <div class="btn__wrap">
                        <a href="" class="under-line bk">자세히보기</a>
                        <a href="" class="under-line bk">제품 보러 가기</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- re product -->
    <section>
        <div class="recommand-wrap">
            <div class="re-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="slide-box">
                            <div class="center-box">
                                <img src="/images/product/img_product_product_BLASSTB18BL_mdl_1661837024.png" alt="">
                                <div class="slide__title">Shopper bag</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="slide-box">
                            <div class="center-box">
                                <img src="/images/product/img_product_product_PRDTEST0001_mdl_1661773069.png" alt="">
                                <div class="slide__title">Shopper bag</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="slide-box">
                            <div class="center-box">
                                <img src="/images/product/img_product_product_BLASSHD01KK_mdl_1661844466.png" alt="">
                                <div class="slide__title">Shopper bag</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="slide-box">
                            <div class="center-box">
                                <img src="/images/product/img_product_wear_BLASSTB18BL_mdl_1661837025.png" alt="">
                                <div class="slide__title">Shopper bag</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="slide-box">
                            <div class="center-box">
                                <img src="/images/product/img_product_product_BLASSTB18BL_mdl_1661837024.png" alt="">
                                <div class="slide__title">Shopper bag</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="slide-box">
                            <div class="center-box">
                                <img src="/images/product/img_product_product_PRDTEST0001_mdl_1661773069.png" alt="">
                                <div class="slide__title">Shopper bag</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="slide-box">
                            <div class="center-box">
                                <img src="/images/product/img_product_product_BLASSHD01KK_mdl_1661844466.png" alt="">
                                <div class="slide__title">Shopper bag</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="slide-box">
                            <div class="center-box">
                                <img src="/images/product/img_product_wear_BLASSTB18BL_mdl_1661837025.png" alt="">
                                <div class="slide__title">Shopper bag</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navigation">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Styling -->
    <section>
        <div class="styling-wrap">
            <div class="styling-text"><u>Styling</u><span>></span></div>
            <div class="styling-swiper swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="styling__card">
                            <div class="styling-box">
                                <a href="">
                                    <img class="styling__img" src="/images/styling/styling4.jpeg" alt="">
                                    <div class="t-box">
                                        <p class="title">Metal line</p>
                                        <div class="btn__wrap">
                                            <a href="" class="under-line bk">자세히보기</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="styling__card">
                            <div class="styling-box">
                                <a href="">
                                    <img class="styling__img" src="/images/styling/styling2.jpeg" alt="">
                                    <div class="t-box">
                                        <p class="title">Metal line</p>
                                        <div class="btn__wrap">
                                            <a href="" class="under-line bk">자세히보기</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="styling__card">
                            <div class="styling-box">
                                <a href="">
                                    <img class="styling__img" src="/images/styling/styling3.jpeg" alt="">
                                    <div class="t-box">
                                        <p class="title">Metal line</p>
                                        <div class="btn__wrap">
                                            <a href="" class="under-line bk">자세히보기</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="styling__card">
                            <div class="styling-box">
                                <a href="">
                                    <img class="styling__img" src="/images/styling/styling2.jpeg" alt="">
                                    <div class="t-box">
                                        <p class="title">Metal line</p>
                                        <div class="btn__wrap">
                                            <a href="" class="under-line bk">자세히보기</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="styling__card">
                            <div class="styling-box">
                                <a href="">
                                    <img class="styling__img" src="/images/styling/styling4.jpeg" alt="">
                                    <div class="t-box">
                                        <p class="title">Metal line</p>
                                        <div class="btn__wrap">
                                            <a href="" class="under-line bk">자세히보기</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="styling__card">
                            <div class="styling-box">
                                <a href="">
                                    <img class="styling__img" src="/images/styling/styling2.jpeg" alt="">
                                    <div class="t-box">
                                        <p class="title">Metal line</p>
                                        <div class="btn__wrap">
                                            <a href="" class="under-line bk">자세히보기</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="styling__card">
                            <div class="styling-box">
                                <a href="">
                                    <img class="styling__img" src="/images/styling/styling3.jpeg" alt="">
                                    <div class="t-box">
                                        <p class="title">Metal line</p>
                                        <div class="btn__wrap">
                                            <a href="" class="under-line bk">자세히보기</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="styling__card">
                            <div class="styling-box">
                                <a href="">
                                    <img class="styling__img" src="/images/styling/styling2.jpeg" alt="">
                                    <div class="t-box">
                                        <p class="title">Metal line</p>
                                        <div class="btn__wrap">
                                            <a href="" class="under-line bk">자세히보기</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="navigation">
                    <div class="swiper-button-next">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- foryou -->
    <section>
        <div class="foryou-wrap ">
            <div class="foryou-text"><u>For you</u><span> ></span></div>
            <div class="foryou-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="">
                            <div class="wish__btn" whish_idx="" product_idx="${el.product_idx}">
                                <img class="whish_img" src="/images/svg/wishlist.svg" alt="" style="width:19px;">
                            </div>
                            <img src="/images/sample/foryou1.png" alt="">
                            <div class="prd-title">Tnnn blazer</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="wish__btn" whish_idx="" product_idx="${el.product_idx}">
                                <img class="whish_img" src="/images/svg/wishlist.svg" alt="" style="width:19px;">
                            </div>
                            <img src="/images/sample/foryou2.png" alt="">
                            <div class="prd-title">Tnnn blazer</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="wish__btn" whish_idx="" product_idx="${el.product_idx}">
                                <img class="whish_img" src="/images/svg/wishlist.svg" alt="" style="width:19px;">
                            </div>
                            <img src="/images/sample/foryou3.png" alt="">
                            <div class="prd-title">Tnnn blazer</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="wish__btn" whish_idx="" product_idx="${el.product_idx}">
                                <img class="whish_img" src="/images/svg/wishlist.svg" alt="" style="width:19px;">
                            </div>
                            <img src="/images/sample/foryou4.png" alt="">
                            <div class="prd-title">Tnnn blazer</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="wish__btn" whish_idx="" product_idx="${el.product_idx}">
                                <img class="whish_img" src="/images/svg/wishlist.svg" alt="" style="width:19px;">
                            </div>
                            <img src="/images/sample/foryou5.png" alt="">
                            <div class="prd-title">Tnnn blazer</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="wish__btn" whish_idx="" product_idx="${el.product_idx}">
                                <img class="whish_img" src="/images/svg/wishlist.svg" alt="" style="width:19px;">
                            </div>
                            <img src="/images/sample/foryou6.png" alt="">
                            <div class="prd-title">Tnnn blazer</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="wish__btn" whish_idx="" product_idx="${el.product_idx}">
                                <img class="whish_img" src="/images/svg/wishlist.svg" alt="" style="width:19px;">
                            </div>
                            <img src="/images/sample/foryou2.png" alt="">
                            <div class="prd-title">Tnnn blazer</div>
                        </a>
                    </div>
                </div>
                <div class="navigation">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>
</main>


<script>
    // http://116.124.128.246/_api/common/recommend/get
    //swiper
    window.addEventListener('DOMContentLoaded', () => {
        swiperResize();
        headerColorChange();
    });
    window.addEventListener('resize', () => {
        swiperResize();
    });
    let newSwiper = new Swiper(".new__project__swiper", {
        navigation: {
            nextEl: ".new__project__swiper .swiper-button-next",
            prevEl: ".new__project__swiper .swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        grabCursor: true,
        slidesPerView: 1
    });
    let recommendSwiper = new Swiper(".recommend-swiper", {
        navigation: {
            nextEl: ".recommend-swiper .swiper-button-next",
            prevEl: ".recommend-swiper .swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        grabCursor: true,
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 2.5
            },
            920: {
                slidesPerView: 3.5
            },
            1400: {
                slidesPerView: 4.5
            }
        }
    });
    let stylingSwiper = new Swiper(".styling-swiper", {
        navigation: {
            nextEl: ".styling-swiper .swiper-button-next",
            prevEl: ".styling-swiper .swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        grabCursor: true,
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.3,
                spaceBetween: 10
            },
            1024: {
                slidesPerView: 3.2,
                spaceBetween: 0
            }
        }
    });
    let foryou = new Swiper(".foryou-swiper", {
        navigation: {
            nextEl: ".foryou-swiper .swiper-button-next",
            prevEl: ".foryou-swiper .swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        grabCursor: true,
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.3
            },
            1024: {
                slidesPerView: 5.3
            }
        }
    });
    var colaboSetting = {
        navigation: {
            nextEl: ".re-swiper .swiper-button-next",
            prevEl: ".re-swiper .swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        grabCursor: true,
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 30
            }
        },
        on : {
            init : function () {
                console.log('swiper 초기화 될때 실행');

            },
            destroy: function() {
                console.log("파괴됨")
            }
        }
    }
    let ex = new Swiper(".re-swiper",colaboSetting);
    
    (() => {
        let $slide = document.querySelectorAll('.recommend-swiper .swiper-slide');
        $slide.forEach((el) => {
            el.addEventListener('click', () => {
                location.href = "http://116.124.128.246:80/product/list";
            });
        });
    })();
    function swiperResize(){
        let screenWidth = window.screen.width;
        let nextbtn = document.querySelector(".styling-swiper .navigation .swiper-button-next");
        let styleTboxHeight = stylingSwiper.el.querySelector(".t-box").offsetHeight
        if (screenWidth >= 1024) {
            let oneGridWidth = screenWidth / 16;
            nextbtn.style.width = `${oneGridWidth}px`;
            nextbtn.style.height = `${styleTboxHeight}px`;
            let ex = new Swiper(".re-swiper",colaboSetting);
        } else {
            let oneGridWidth = ((screenWidth / 8) * 2) - 10;
            nextbtn.style.width = `${oneGridWidth}px`;
            nextbtn.style.width = `${styleTboxHeight}px`;
            ex.destroy();
        }
    }
    const headerColorChange = () =>{
        let header = document.querySelector("header");
        let headerGrid = document.querySelector(".header__grid");
        window.addEventListener('scroll', () => {
            let height = window.scrollY;
            if(height > 50) {
                header.classList.add("scroll");
            } else {
                header.classList.remove("scroll");
            }
        });
    };
</script>