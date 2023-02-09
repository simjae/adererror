
export default function StylingRender(relevant_idx) {
    let relevantIdx = relevant_idx;
    console.log("🏂 ~ file: styling.js:4 ~ StylingRender ~ relevantIdx", relevantIdx)
    this.makeHtml = (() => {
        const sectionWrap = document.querySelector(".styling-with-wrap")
        const wrap = document.createElement("aside");
        wrap.classList.add("styling-wrap");
        const dom = 
            `
                <div class="left__title"><span>Styling with   ></span></div>
                <div class="swiper-grid">
                    <div class="styling-swiper swiper">
                        <div class="swiper-wrapper">
        
                        </div>
                    </div>
                </div>
            `
        wrap.innerHTML = dom;
        sectionWrap.appendChild(wrap);
    })();
    
    this.load = (() =>{
        $.ajax({
            type: "post",
            data: {
                "relevant_idx": relevantIdx,
                "country": "KR"
            },
            url: "http://116.124.128.246/_api/common/relevant/get",
            error: function() {
                alert("상품 진열 페이지 불러오기 처리에 실패했습니다.");
            },
            success: function(d) {
                let imgUrl ="http://116.124.128.246:81";
                
				let data = d.data;
				
				let productRecommendListHtml = "";
				const swiperWrap = document.querySelector(".styling-swiper .swiper-wrapper");
                const domFrag = document.createDocumentFragment();
               
                
                data.forEach(el => {
                    let prdListSlide = document.createElement("div");
                    prdListSlide.classList.add("swiper-slide");
					let whish_img = "";
					let whish_function = "";

					let whish_flg = `${el.whish_flg}`;
					let login_status = getLoginStatus();
					
					if (login_status == "true") {
						if (whish_flg == 'true') {
							whish_img = '<img class="whish_img" src="/images/svg/wishlist-bk.svg" alt="">';
							whish_function = "deleteWhishListBtn(this);";
						} else if (whish_flg == 'false') {
							whish_img = '<img class="whish_img" src="/images/svg/wishlist.svg" alt="">';
							whish_function = "setWhishListBtn(this);";
						}
					} else {
						whish_img = '<img class="whish_img" src="/images/svg/wishlist.svg" alt="">';
						whish_function = "return false;";
					}

					let product_size = el.product_size;

					let saleprice = parseInt(el.sales_price).toLocaleString('ko-KR');
					let colorCtn = el.product_color.length;

					productRecommendListHtml =
                        `<div class="product">
							<div class="wish__btn" product_idx="${el.product_idx}" onClick="${whish_function}">
								${whish_img}
							</div>
							
                            <a href="http://116.124.128.246:80/product/detail?product_idx=${el.product_idx}">
                                <div class="product-img swiper">
                                    <img class="prd-img" cnt="${el.product_idx}" src="${imgUrl}${el.product_img}" alt="">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="info-row">
                                    <div class="name"data-soldout=${el.stock_status == "STCL" ? "STCL" : ""}><span>${el.product_name}</span></div>
                                    ${el.discount == 0 ? `<div class="price" data-soldout="${el.stock_status}" data-saleprice="${saleprice}" data-discount="${el.discount}" data-dis="false">${el.price.toLocaleString('ko-KR')}</div>`:`<div class="price" data-soldout="${el.stock_status}" data-saleprice="${saleprice}" data-discount="${el.discount}" data-dis="true"><span>${el.price.toLocaleString('ko-KR')}</span></div>`} 
                                </div>
                                <div class="color-title"><span>${el.color}</span></div>
                                <div class="info-row">
                                    <div class="color__box" data-maxcount="${colorCtn < 6 ?"":"over"}" data-colorcount="${colorCtn < 6 ? colorCtn: colorCtn - 5}">
                                        ${
                                            el.product_color.map((color, idx) => {
                                                let maxCnt = 5;
                                                if(idx < maxCnt){
                                                    return `<div class="color" data-color="${color.color_rgb}" data-productidx="${color.product_idx}" data-soldout="${color.stock_status}" style="background-color:${color.color_rgb}"></div>`;
                                                }
                                            }).join("")
                                        }
                                    </div>
                                    <div class="size__box">
                                        ${
                                        el.product_size.map((size) => {
                                            return`<li class="size" data-sizetype="" data-productidx="${size.product_idx}" data-optionidx="${size.option_idx}" data-soldout="${size.stock_status}">${size.option_name}</li>`;
                                            }).join("")
                                        }  
                                    </div>
                                </div>
                            </div>
                        </div>`;
                    prdListSlide.innerHTML  = productRecommendListHtml;
                    domFrag.appendChild(prdListSlide);
                });
                swiperWrap.appendChild(domFrag);
            }
        });
    })();
    this.swiper = (() => {
        return new Swiper(".styling-swiper", {
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
                    slidesPerView: 2.647
                },
                920: {
                    slidesPerView: 5
                },
                1400: {
                    slidesPerView: 5
                }
            }
            });
    })();
}