var galleryTop=new Swiper(".gallery-top",{nextButton:".swiper-button-next",prevButton:".swiper-button-prev",spaceBetween:10}),galleryThumbs=new Swiper(".gallery-thumbs",{loop:!0,spaceBetween:10,centeredSlides:!0,slidesPerView:"auto",touchRatio:.2,slideToClickedSlide:!0});galleryTop.params.control=galleryThumbs,galleryThumbs.params.control=galleryTop,$("#qtranslate-chooser li").on("click",function(){$("#qtranslate-chooser li").css("display","block")});