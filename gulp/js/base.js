var galleryTop = new Swiper('.gallery-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
});

var galleryThumbs = new Swiper('.gallery-thumbs', {
	loop: true,
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 'auto',
    touchRatio: 0.2,
    slideToClickedSlide: true,
});

galleryTop.params.control = galleryThumbs;

galleryThumbs.params.control = galleryTop;

$('#qtranslate-chooser li').on('click',function(){
  $('#qtranslate-chooser li').css('display', 'block');
});
