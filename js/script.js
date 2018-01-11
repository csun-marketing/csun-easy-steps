//BEGIN Sub Menu Formatting
//Places submenu items into columns.
$( document ).ready(function() {
	var num=0;
	var numofrows= 5;
	$(".sub-menu").each(function( index, value ) {

		var submenucount = $(this).children(".menu-item").length;
	   $(this).children(".menu-item").each(function( index, value ) {
	   	numofrows=5;
	   	if(submenucount > 20){
	   	numofrows = Math.ceil(submenucount/4);
	   }
	   	if((index%numofrows)==0){
	   		num++;
	    	$("<li class='mega-menu__column'> <ul id=col"+num+"></ul></li> ").insertBefore(this);
	   		$(this).appendTo( "#col"+num);
	   		}

	   	else{
	   		$(this).appendTo( "#col"+num);
   	    	}

	   	$( "#col"+num).addClass("mega-menu__column-list");
		});
	});
//END Sub Menu Formatting

//Wraps submenu class with sub-menu__wrapper class.
$(".sub-menu").wrap("<div class='sub-menu__wrapper'></div>");

//When a menu-item is hovered over any tabbed item is unfocused.
$(".menu > .menu-item").hover(function() {
 	$("*").removeClass("menu-item__focus");
	});

 //BEGIN Interactive Sub Menu
 //Adds classes to menu items so that they can be tabbed to.
$(".menu > .menu-item > a").focusin(function() {
 	$(this).parent().addClass("menu-item__focus");
	});

$(".mega-menu__column-list > .menu-item > a").focusin(function() {
 	$(this).closest(".menu > .menu-item").addClass("menu-item__focus");
	});

$(".mega-menu__column-list > .menu-item > a").focusout(function() {
 	$(this).closest(".menu > .menu-item").removeClass("menu-item__focus");
	});

$(".menu > .menu-item > a").focusout(function() {
 	$(this).parent().removeClass("menu-item__focus");
	});
//END Interactive Sub Menu

//BEGIN Mobile-Menu
//Opens & Closes Mobile-Menu when the nav bar label is clicked.
$(".nav-dropdown__label").click(function(){
	$(".nav-dropdown__label").toggleClass( "open" );
	$(".nav-container").slideToggle();
	});

$(".mobile-menu > .menu-primary-navigation-container > .menu > .menu-item-has-children").click(function(){
	if (!$(this).hasClass("active")){
		$(".active").children('.sub-menu__wrapper').children('.sub-menu').slideToggle();
		$(".active").toggleClass( "active" );
	}
	$(this).toggleClass( "active" );
	$(this).children('.sub-menu__wrapper').children('.sub-menu').slideToggle();
});
//END Mobile-Menu
$("h3.widget-title").click(function(){
	if($(window).width() <= 950)
	{
		if($(this).hasClass("side-bar-open"))
		{$(this).siblings().slideUp();}
		else{$(this).siblings().slideDown();}
		$(this).toggleClass("side-bar-open");
	}
});
$(".mobile-menu > .menu-primary-navigation-container > #menu-primary-navigation > .menu-item-has-children").each(function( index, value ) {
		var $name = $(this).children("a").text(); //Gets the name of the link and stores it as $name
		var $link = $(this).children("a").attr("href"); //Gets the value of the link and stores it as $link
		var $prependSelect = $(this).find(".sub-menu"); //Simple variable to make the code cleaner when preppending the link to another element.

		//Takes parent link and turns it into a child link within the parent's sub-menu
		$("<li class='mega-menu__column'><ul class='mega-menu__column-list'><li class='menu-item menu-item-type-custom menu-item-object-custom'><a href='"+$link+"'>"+ $name + " Main</a></li><ul></li>").prependTo($prependSelect);

		//Disables parent menu as a clickable link for Mobile Menu
		$(this).children().attr("href", "#");
});


if ($('.third-wordmark > .wordmark > .wordmark--offset').text() != ""){
	$('.wordmark-secondary > .wordmark').addClass('two-wordmarks');
}
//Splits Secondary Wormark into two different lines
/*
if ($('.wordmark-secondary > .wordmark > .wordmark--offset:contains("\n")').length > 0) {
 var $wordmarkText = $( ".wordmark-secondary > .wordmark > .wordmark--offset" );
 var $firstLine = $wordmarkText.html().split("\n")[0];
 var $secondLine= $wordmarkText.html().split("\n")[1];
 $wordmarkText.empty();
 $firstLineText = "<span>" + $firstLine + "</span> <br>";
 $firstLineFinal = $.parseHTML($firstLineText);
 $secondLineText = "<span class = 'secondText'>" + $secondLine + "</span>";
 $secondLineFinal = $.parseHTML($secondLineText);
 $wordmarkText.append($firstLineFinal);
 $wordmarkText.append($secondLineFinal);
}
*/

//Removes Black Border Line from Secondary or Tertiary Wordmarks if none are found.
if ($('.third-wordmark > .third-wordmark-wrapper > .wordmark > .wordmark--offset').text()== "" ) {
 $('.third-wordmark > .third-wordmark-wrapper').removeClass('third-wordmark-wrapper');
  }
if ($('.wordmark-secondary > .wordmark > .wordmark--offset').text()== "" ) {
 $('.header--logo-image').attr('class','.header--logo-image-no-border');
}


//Removes Red Menu Bar if no menu items are found.
if (!$('.primary-nav > div > .menu ').children().hasClass('menu-item')){
 $('#primary-navigation').removeClass('pane-menu-block-custom-primary-links');
 $('#primary-navigation').removeClass('pane-block');
 $('#primary-navigation > .pane-title').remove();
 $('#primary-navigation').remove();
}
});

$("#reply-title").replaceWith('<h2 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/blog/#respond" style="display:none;">Cancel reply</a></small></h2>');
