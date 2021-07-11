// const { on } = require("gulp");

window.addEventListener('DOMContentLoaded', function(event) {  

	//menu

  	const burger = document.querySelector('.burger'),
		secondMenu = document.querySelector('.second__menu'),
		secondMenuItem = document.querySelectorAll('.second__menu__item'),
		menuRightUpper = document.querySelector('.menu__right__upper');
	if(burger == null) {
		console.log('we do not have here burger menu')
	} else{
		burger.addEventListener('click', () => {
			burger.classList.toggle('burger_active');
			secondMenu.classList.toggle('second__menu_active');
			menuRightUpper.classList.toggle('menu__right__upper_inactive');
		});
	};



	secondMenuItem.forEach(item => {
		item.addEventListener('click', () => {
			burger.classList.toggle('burger_active');
			secondMenu.classList.toggle('second__menu_active');
			
		});
	});
	
	if($(".second__menu_active").is(":visible")){
		alert("viisible")
	}
	'use strict';

	// menu scroll

	var onScrollFunction = function(){
		window.onscroll = function() {
			if ((window.pageYOffset) >= 540) {
				var prevScrollpos = window.pageYOffset;
				window.onscroll = function() {
				var currentScrollPos = window.pageYOffset;
				if (prevScrollpos > currentScrollPos)  {
					document.getElementById("nav").style.top = "0";
					// event.preventDefault();
				} else if(currentScrollPos < 540) {
					document.getElementById("nav").style.top = "0";
				}
				else {
					document.getElementById("nav").style.top = "-55px";
				}
				prevScrollpos = currentScrollPos;
				}
			};
		}
	};
	onScrollFunction();

	

	//second menu  disable scroll
	
	$( "div" ).click(function() {
 
		if ( $( this ).hasClass( "burger_active" ) ) {
	 
			function disableScrolling(){
				let x=window.scrollX;
				let y=window.scrollY;
				window.onscroll=function(){window.scrollTo(x, y);};
			}
			disableScrolling();
		} else if($(this).hasClass("burger")){
			onScrollFunction();
		};
	});

	//second menu close if clicked outside of an element

	//tabs adress content

	let tab = document.querySelectorAll('.address__city__name'),
		addressWrapper = document.querySelector('.address__city__wrapper'),
		addressContent = document.querySelectorAll('.address__city__content__wrapper');
	
	function hideAddressContent(a) {
		for(let i = a; i < addressContent.length; i++) {
			addressContent[i].classList.remove('show');
			addressContent[i].classList.add('hide');
		};
	};

	hideAddressContent(1);

	function showAddressContent(b) {
		if (addressContent[b].classList.contains('hide')) {
			addressContent[b].classList.remove('hide');
			addressContent[b].classList.add('show');
		};
	};

	if (addressWrapper == null) {
		console.log('no address wrapper');
	} else {
		addressWrapper.addEventListener('click', function(event) {
			let target = event.target;
			if(target && target.classList.contains('address__city__name')) {
				for (let i = 0; i < tab.length; i++) {
					if(target ==tab[i]) {
						hideAddressContent(0);
						showAddressContent(i);
						break;
					};
				};
			};
		});
	};

	//tabs address active

	$('div.address__city__wrapper').on('click', 'div:not(.address__city__name_active)', function() {
		
		$(this).addClass('address__city__name_active').siblings().removeClass('address__city__name_active');
	});

	//SLIDER

	//slider review 
	$('.reviews__slider__img__wrapper').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 1500,
		variableWidth: true,
		pauseOnHover: false,
		
	});	  

	$('.reviews__slider__video__wrapper').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: false,
		variableWidth: true,
		pauseOnHover: false,
	});	 

	//slider index 

	$('.slider__item').slick({
		// autoplay: true,
		pauseOnHover: false,
		pauseOnFocus: false,
		prevArrow: $('.slick__prev'),
		nextArrow: $('.slick__next'),
		dots: true
	});

	//slider shop 

	$('.slider__shop__item').slick({
		autoplay: false,
		pauseOnHover: false,
		pauseOnFocus: false,
		prevArrow: $('.slick__prev'),
		nextArrow: $('.slick__next'),
		dots: true
	});

	//slider goods 

	$('.goods__slider').slick({
		dots:true,
		arrows:false,
	});

	//slider  news
	
	$('.slider__news').slick({
		slidesToShow: 5,
		prevArrow: $('.news__prev'),
		nextArrow: $('.news__next'),
		autoplay: true,
		autoplaySpeed: 4000,
		responsive: [
			{
			breakpoint: 1200,
			settings: {
				slidesToShow: 4,
				infinite: true,
		
			  }
			},
			{
			breakpoint: 991,
			settings: {
				slidesToShow: 3,
				infinite: true,
			  }
			},
			{
			breakpoint: 576,
			settings: {
				slidesToShow: 2,
				infinite: true,
				}
			},

		]
	});

	//MODAL
	//overlay

	$('[data-modal=consultation], #index__menu_btn ,  #check__order').on('click', function() {
		$('.overlay, #consultation, .overlay__bg').fadeIn();
		
	});


	$('.modal__close, .overlay__bg').on('click', function() {
		$('.overlay, #consultation, #order, #thanks, .overlay__bg').fadeOut();
	});

	
	//for goods

	$('.goods__btn').each(function(i) {   
        $(this).on('click', function() {
			$('#order .modal__descr').text($('.goods__descr').eq(i).text());
			$('#order .modal__subtitle').text('Ваш заказ:');
            $('.overlay, #order, .overlay__bg').fadeIn();
			$('.goods__wrapper__basket').fadeOut();
			$('.goods__basket__round').fadeIn();
        })
	});
	
	//for goods basket

	$('.button__goods__basket').each(function() {   
        $(this).on('click', function() {
			$('#order .modal__descr').text("Общая сумма " + $("#totalPrice").text()+" ₽");
			$('#order .modal__subtitle').text('Ваша корзина:');
            $('.overlay, #order, .overlay__bg').fadeIn();
			$('.goods__wrapper__basket').fadeOut();
			$('.goods__basket__round').fadeIn();
        })
	});
	$('.button__goods__basket__clear').each(function() {   
        $(this).on('click', function() {
			$(".goods__basket__quantity").text($("#cartCount").text());
        });
	});

	$(".goods__basket__round").each(function()
	{
		$(this).on('click',function()
		{
			$(this).fadeOut();
			$('.goods__wrapper__basket').fadeIn();
		});
	});

	$(".goods__wrapper__basket_back").each(function()
	{
		$(this).on('click',function()
		{
			$(".goods__wrapper__basket").fadeOut();
			$('.goods__basket__round').fadeIn();
		});
	});

	$('.button__mini__basket').each(function(i) {   
        $(this).on('click', function() {
			$(".goods__basket__quantity").text($("#cartCount").text());
        })
	});

	 //for services

	$('.service__btn').each(function(i) {  
        $(this).on('click', function() {
            $('#order .modal__descr').text($('.service__subtitle').eq(i).text());
			$('.overlay, #order, .overlay__bg').fadeIn();
			$('#order .modal__subtitle').text('Вы хотите:');
        })
	});
	
	//for questions

	
	$('.modal__close, .overlay__bg').on('click', function() {
		$('.overlay__question, .overlay__question__box, .overlay__bg ').fadeOut();
	});

	$('.help__text').each(function(i) {
        $(this).on('click', function() {
			$('.answer__item').css("display","none");
			$('.overlay__question, .overlay__bg, .overlay__question__box').fadeIn();
            $('.question__subtitle').text($('.help__text').eq(i).text());
			for($j = 1;$j < $('.help__questions').length; $j++)
			{
				$currItem = ".question__item_" + $j;
				$currQuest = '.help__questions_' + $j;
				$($currItem).html($($currQuest).eq(i).html());
				$currAnsIt = '.answer__item_' + $j;
				$currAnsHelp = '.help__answers_' + $j;
				$($currAnsIt).html($($currAnsHelp).eq(i).html());
			}

        });
	});
	
	$('.question__item').each(function(i) {
		$(this).on('click', function(){
			$flip = $(this);
			$content = $flip.next();
			$content.slideToggle(800);
			if($content.css("display") =="block" ){
				$('.answer__item').not($content).slideUp();
			};
		})
	})

	$(".help__faq__questions").click(function(){
		$flip = $(this);
		$content = $flip.next();
		$content.slideToggle("slow");
		if($content.css("display") =="block" ){
			$('.help__faq__answers').not($content).slideUp();
		}
	});

	//for goods info


	$('.button__goods__mini').each(function(i) {
		$(this).on('click', function(){
			$('.overlay__question, .overlay__bg, .overlay__question__box').fadeIn();
            $('.question__subtitle').text($('.goods__descr').eq(i).text());
			$('.goods__modal').html($('.goods__text').eq(i).html());
			$('.modal__btn').on("click", function(){
				$('.goods__btn').eq(i).trigger('click');
			})
			
		})
	});

	$('.modal__close, .overlay__bg, .goods__btn').on('click', function() {
		$('.overlay__question, .overlay__question__box').fadeOut();
	});


	//avia flip

    function toggler($item,$number,$exception1,$exception2)
    {
        let $not,$descr,$text,$itemChan;
        if($item == '.avia__item'){
            $not = $item + "__" + $exception1 + ", " + $item + "__" +$exception2 + ", " + ".avia__companies__subtitle";
            $itemChan = $item + "__" + $number;
            $descr = $item + "__descr__" + $number;
            $text = $item + "__text__" + $number;
        }
        $($itemChan).each(function() {
            $(this).on('click', function(){
                $content = $(this).next();
                $content.slideToggle(800);
                $flipChildren = $(this).children();
                if($content.css("display") == "block"){
                    $($descr).not($content).slideUp();
                };
                $(".arrow__down_rotated").not($flipChildren).not($($not).children()).removeClass('arrow__down_rotated');
                $flipChildren.not($text).toggleClass('arrow__down_rotated');
            });
        });
    }
    toggler('.avia__item','1','2','3');

    toggler('.avia__item','2','1','3');

    toggler('.avia__item','3','1','2');

    function wrapperToggler($main)
    {
        let $arrDown = 'arrow__down_rotated',$wrapper;
        $mainChanged = $main + "__subtitle__wrapper";
        if($main == '.avia__companies')
        {
            $wrapper = $main + '__wrapper';
        }else
        {
            $wrapper = $main + "__item__wrapper";
            $arrDown = $main + "__" + $arrDown;
        }
        $dottedArr = "."+$arrDown;
        
        $($mainChanged).each(function() {
            $(this).on('click', function(){
                $flip = $(this);
                $content = $flip.next();
                $content.slideToggle(800);
                $flipChildren = $flip.children();
                if($content.css("display") =="block" ){
                    $($wrapper).not($content).slideUp();
                };

                $flipChildren.children().toggleClass($arrDown);
                $($dottedArr).not($flipChildren.children()).removeClass($arrDown);
                if($main == '.avia__companies')
                {
                    $(".avia__item__descr").slideUp();
                }
            });
        });

    }

    wrapperToggler('.avia__companies');

    // airport flip

    $(".airports__subtitle__wrapper").click(function(){
        $flip = $(this);
        $content = $flip.next();
        $content.slideToggle("slow");
        $flipChildren = $flip.children();
        if($content.css("display") =="block" ){
            $('.airports__item__wrapper').not($content).slideUp();
        };
        $flipChildren.children().toggleClass('airports__arrow__down_rotated');
        $(".airports__arrow__down_rotated").not($flipChildren.children()).removeClass('airports__arrow__down_rotated');
    });

    // embassies flip

    $(".embassies__subtitle__wrapper").click(function(){
        $flip = $(this);
        $content = $flip.next();
        $content.slideToggle("slow");
        $flipChildren = $flip.children();
        if($content.css("display") =="block" ){
            $('.embassies__item__wrapper').not($content).slideUp();
        };
        $flipChildren.children().toggleClass('embassies__arrow__down_rotated');
        $(".embassies__arrow__down_rotated").not($flipChildren.children()).removeClass('embassies__arrow__down_rotated');
    });

	//mini footer flip

	if ($(window).width() < 575) {
		$(".footer__subtitle").click(function(){
			$flip = $(this);
			$content = $flip.next();
			$flipChildren = $flip.children();
			$content.slideToggle("slow");
			$flipChildren.toggleClass('footer__circle__down_rotated');
		});
	}
	
	//validation

	function validateForms(form){
		$(form).validate({
			rules: {
				name: {
					required: true,
					minlength: 3
				},
				phone: "required",
			},
			messages: {
				name: {
					required: "Пожалуйста введите свое имя",
					minlength: jQuery.validator.format("Введите минимум {0} символов!")
				  },
				phone: "Пожалуйста введите номер телефона"
			}
		});
	};

	// validateForms('#consultation-form');
	// validateForms('#consultation form');
	// validateForms('#order form');

	$('input[name=phone]').mask("+7 (999) 999-99-99");

	// $('form').submit(function(e) {
	// 	e.preventDefault();
	// 	$.ajax({
	// 		type: "POST",
	// 		url: "mailer/smart.php",
	// 		data: $(this).serialize()
	// 	}).done(function() {
	// 		$(this).find("input").val("");
	// 		$('#consultation, #order').fadeOut();
	// 		$('#consultation, #order').fadeOut();
	// 		$('.overlay, #thanks').fadeIn('slow');
	//
	// 		$('form').trigger('reset');
	// 	});
	// 	return false;
	// });

	$(function(){
		$('form').submit(function() {
			var form = $(this);
			$.ajax({
				type: "POST",
				url: "mailer/smart.php",
				data: form.serialize(),
				success: (function() {
					$(this).find("input").val("");
					$('#consultation, #order').fadeOut();
					$('#consultation, #order').fadeOut();
					$('.overlay, #thanks').fadeIn('slow');
					setTimeout(function() {
						form.trigger("reset");
					}, 2000);
				})
			})
			return false;
		})
	})

	//currency

	$(".currency__close, .currency_770__close").on('click', function() {
		$(".currency").fadeOut();
		$(".currency_770").slideUp("slow");

	})



	//scroll


	$('a[href*="#baggage"], a[href*="#food"], a[href*="#seat"]').on('click', function (e) {
		e.preventDefault();
	   
		$('html, body').animate({
		  scrollTop: $($(this).attr('href')).offset().top
		}, 500, 'linear');
	});
//});

//check
var $checkAvia = $('input[name="check__avia"]');

$checkAvia.change(function() {
	$editedLink = "";

	var $checked = $checkAvia.filter(':checked');
	
	if($checked.val() == "aeroflot" || $checked.val() == "aviatraffic")
	{
		document.getElementById("code_or_number").innerText="Код брони";
	}else{
		document.getElementById("code_or_number").innerText="Код брони или номер билета";
	}
	if($checked.val() == "pobeda" || $checked.val() == "smartavia"|| $checked.val() == "utair")
	{
		
		$temp =  document.getElementsByClassName("user-box");
			for(x = 0; x < $temp.length; x++){
			$temp[x].style.display = 'none';
		}
	}else{
		$temp =  document.getElementsByClassName("user-box");
		for(x = 0; x < $temp.length; x++){
			$temp[x].style.display = 'block';
		}
	}
	if($checked.val() == "aviatraffic")
	{
		$temp =  document.getElementsByClassName("user-box_last_name");
			for(x = 0; x < $temp.length; x++){
			$temp[x].style.display = 'none';
		}
	}
	if($checked.val() == "s7" || $checked.val() == "aeroflot")
	{
		document.getElementById("check__here").style.display = 'none';
	}else{
		document.getElementById("check__here").style.display = 'block';
	}


});
var $editedLink;
var $link = document.getElementById('iframe');
function linkSwitcher()
{
	var $checked = $checkAvia.filter(':checked');
	$lastName = document.getElementById('input-last_name').value;
	$lastName = $lastName.toUpperCase();	
	$codeOrN = document.getElementById('input-code_or_number').value;
	$codeOrN = $codeOrN.toUpperCase();
	
	switch($checked.val())
	{
		case 's7':
			$editedLink = "https://myb.s7.ru/manage-order?bookingId=" +$codeOrN + "&myb_medium=s7PortalBot&passengerId=" + $lastName;
		break;

		case 'ural':
			if($codeOrN.length == 6){
				$editedLink = "https://service.uralairlines.ru/?pnr=" +$codeOrN + "&ticketNumber=&language=ru&lastName=" + $lastName +"&pnrOrTicket="+ $codeOrN +"&agreementNew=on";
			}else if($codeOrN.length == 13)
			{
				$editedLink = "https://service.uralairlines.ru/?pnr=&ticketNumber=" + $codeOrN + "&language=ru&lastName=" + $lastName +"&pnrOrTicket="+ $codeOrN +"&agreementNew=on";
			}
		break;
		case 'aeroflot':
				$editedLink = "https://www.aeroflot.ru/sb/pnr/app/xx-ru#/search?pnr_locator=" + $codeOrN +"&last_name=" + $lastName;
		break;
		case 'aviatraffic':
				$editedLink = "https://aero.kg/order/" + $codeOrN;
		break;
		case 'redwings':
				$editedLink ="https://flyredwings.com/booking/#/find/" + $codeOrN + "/" + $lastName + "/submit" ;
		break;
		case 'nordwind':
				$editedLink ="https://nordwindairlines.ru/ru/booking#/find/" + $codeOrN + "/" + $lastName;
		break;
		case 'pobeda':
				$editedLink ="https://www.pobeda.aero/ru/mmb/login";
		break;
		case 'smartavia':
				$editedLink ="https://flysmartavia.com/avia/ticket";
		break;
		case 'utair':
				$editedLink ="https://www.utair.ru/order-manage/";
		break;
	}
}
$("#check__here").on('click', function() {

	$link.style.display = "none";
	var $checked = $checkAvia.filter(':checked');
	if($checked.val() != "pobeda" && $checked.val() != "smartavia" && $checked.val() != "utair" )
	{
		if($checked.val() == "aviatraffic")
		{
			if($("#input-code_or_number").val() == "")
			{
				alert("Пожалуйста заполните форму");
				return;

			}
		}else if($("#input-last_name").val() == "" || $("#input-code_or_number").val() == ""){
			alert("Пожалуйста заполните форму");
			return;
		}
		
		
	}
	linkSwitcher();
	$link.setAttribute('src',$editedLink);
	setTimeout(function() {
		$link.style.display = "block";}, 500);
	
});

$("#check__on__site").on('click', function() {
	$link.style.display = "none";
	var $checked = $checkAvia.filter(':checked');
	if($checked.val() != "pobeda" && $checked.val() != "smartavia" && $checked.val() != "utair" )
	{
		if($checked.val() == "aviatraffic")
		{
			if($("#input-code_or_number").val() == "")
			{
				alert("Пожалуйста заполните форму");
				return;

			}
		}else if($("#input-last_name").val() == "" || $("#input-code_or_number").val() == ""){
			alert("Пожалуйста заполните форму");
			return;
		}
		
		
	}
	linkSwitcher();
	window.open($editedLink, '_blank').focus();
});

});
//angry card 

// let cart = new AngryCart({
// 	counter: '#cartCount',
// 	totalPrice: '#totalPrice',
// });
//
// function angryCPR() {
// let myCart = JSON.parse(localStorage.getItem(angryCartKey)), // "angryCartKey" - ключ корзины в localStorage (const)
// 	renderBlock = document.getElementById('cartPreview');
//
// /* Очищаем блок перед выводом */
// renderBlock.innerHTML = '';
//
// /* Выводим товары из корзины */
// Array.from(myCart).forEach( function(product) {
// 	renderBlock.insertAdjacentHTML('beforeEnd', `
// 		<div class="goods__basket__item">
// 		${product.data.title} <span class="goods__total__quantity"> ${product.quantity}</span> - <span>${product.data.price} руб</span>
// 			<button class="button button__micro" onclick="cart.removeFromCart(${product.product_id})">x</button>
// 		</div>
// 	`);
// });
// }