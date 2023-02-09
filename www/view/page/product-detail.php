<link rel=stylesheet href='/css/product/detail.css' type='text/css'>
<link rel=stylesheet href='/css/module/styling.css' type='text/css'>
<link rel=stylesheet href='/css/module/foryou.css' type='text/css'>
<style>
main {overflow-x: initial;}
.quickview__box {display: none;}
</style>
<?php
function getUrlParamter($url, $sch_tag)
{
	$parts = parse_url($url);
	parse_str($parts['query'], $query);
	return $query[$sch_tag];
}

$page_url = $_SERVER['REQUEST_URI'];
$product_idx = getUrlParamter($page_url, 'product_idx');
?>
<main data-productidx="<?= $product_idx ?>" data-country="KR">
	<div class="detail__sidebar__wrap">
		<div class="sidebar__background" data-modal="detail">
			<div class="sidebar__wrap" data-modal="detail">
				<div class="detail--box--btn">
					<div class="top" id="detail-top"></div>
					<div class="middle">
						<div class="detail__btn__wrap">
							<div class="detail__btn__row">
								<div class="img-box">
									<img src="/images/svg/sizeguide.svg" alt="">
								</div>
							</div>
							<div class="detail__btn__row">
								<div class="img-box select">
									<img src="/images/svg/material.svg" alt="">
								</div>
							</div>
							<div class="detail__btn__row">
								<div class="img-box">
									<img src="/images/svg/information.svg" alt="">
								</div>
							</div>
							<div class="detail__btn__row">
								<div class="img-box">
									<img src="/images/svg/precaution.svg" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="bottom"></div>
				</div>
				<div class="sidebar__box" data-modal="detail">
					<div class="sidebar__header">
						<img class="sidebar__close__btn" src="/images/svg/close.svg" alt="">
					</div>
					<div class="sidebar__body"></div>
				</div>
			</div>
		</div>
	</div>
	<section class="detail__wrapper">
		<div class="detail__box">
			<div class="navigation__wrap"></div>
			<div class="detail__img__wrap">
				<div id="main__swiper-detail" class="main__swiper swiper">
					<div class="swiper-wrapper main_img_wrapper"></div>
					<div class="swiper-pagination-detail-fraction"></div>
					<div class="swiper-pagination-detail-bullets"></div>
				</div>
			</div>
		</div>
		<div class="info__wrap product"></div>
		
	</section>
	<section class="rM-detail-containner">
		<div class="detail__btn__wrap">
			<div class="detail__btn__box">
				<div class="detail__btn__row mobile">
					<div class="img-box">
						<img src="/images/svg/sizeguide.svg" alt="">
					</div>
					<div class="btn-title">사이즈가이드</div>
				</div>
				<div class="detail__btn__row mobile">
					<div class="img-box">
						<img src="/images/svg/material.svg" alt="">
					</div>
					<div class="btn-title">소재</div>
				</div>
				<div class="detail__btn__row mobile">
					<div class="img-box">
						<img src="/images/svg/information.svg" alt="">
					</div>
					<div class="btn-title">상세정보</div>
				</div>
				<div class="detail__btn__row mobile">
					<div class="img-box">
						<img src="/images/svg/precaution.svg" alt="">
					</div>
					<div class="btn-title">취급 유의사항</div>
				</div>
			</div>
			<div class="detail__content__box">
				<div class="detail-content precaution">
					<div class="content-header"><span>제품 취급 유의사항</span></div>
					<div class="content-body">
						<div class="content-list">
							<ul>
								<li>이 제품은 반드시 손세탁 하십시오.</li>
								<li>드라이클리닝을 하지 마십시오.</li>
								<li>이 제품은 회전식 건조기를 사용하지 마십시오.</li>
								<li>중온의 아이론을 권장합니다.</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="detail__btn__control">
					<div class="detail-btn-prev"><img src="/images/svg/arrow-left.svg" alt=""></div>
					<div class="detail-btn-next"><img src="/images/svg/arrow-left.svg" alt=""></div>
				</div>
			</div>
		</div>
	</section>
	<section class="styling-with-wrap"></section>
	<section class="recommend-wrap"></section>
</main>
<script src="/scripts/product/detail.js"></script>
<script type="module"></script> 
<script type="module">
	import StylingRender from '/scripts/module/styling.js';
	import ForyouRender from '/scripts/module/foryou.js';
	const foryou = new ForyouRender();
	let main = document.querySelector("main");
    let country = main.dataset.country;
	let urlParams = new URL(location.href).searchParams;
	let productIdx = urlParams.get('product_idx');
    $.ajax({
        type: "post",
        data: {
            "product_idx": productIdx,
            "country": country,
        },
        dataType: "json",
        url: "http://116.124.128.246:80/_api/product/get",
        error: function () {
            alert("상품 진열 페이지 불러오기 처리에 실패했습니다.");
        },
        success: function (d) {
			let relevant_idx = d.data[0].relevant_idx;
			const styling = new StylingRender(relevant_idx);
		}
	})
</script> 
	