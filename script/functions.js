jQuery(document).ready(function($){'use strict';$(function(){$('body').addClass('js');var $menu=$('#menu'),$menulink=$('.menu-link'),$menuTrigger=$('.has-subnav');$menulink.on("click",function(e){e.preventDefault();$menulink.toggleClass('active');$menu.toggleClass('active');});$menuTrigger.on("click",function(e){e.preventDefault();var $this=$(this);$this.toggleClass('active').next('ul').toggleClass('active');});});jQuery('.church-banner').slick({slidesToShow:1,slidesToScroll:1,autoplay:true,autoplaySpeed:2000,infinite:true,dots:true,arrows:false,fade:true,responsive:[{breakpoint:1024,settings:{slidesToShow:1,slidesToScroll:1,infinite:true,}},{breakpoint:800,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:400,settings:{slidesToShow:1,slidesToScroll:1}}]});jQuery('.autogarage-user-list li a.autogarage-shopping-bag').on("click",function(){jQuery('.autogarage-cart-box').fadeToggle('slow');return false;});jQuery('html').on("click",function(){jQuery(".autogarage-cart-box").fadeOut();});$(function(){$('[data-toggle="tooltip"]').tooltip()})
jQuery('.autogarage-partner-slider').slick({slidesToShow:5,slidesToScroll:1,autoplay:true,autoplaySpeed:2000,infinite:true,dots:false,arrows:false,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1,infinite:true,}},{breakpoint:800,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:400,settings:{slidesToShow:1,slidesToScroll:1}}]});jQuery('.progressbar1').progressBar({percentage:false,animation:true,backgroundColor:"rgba(255,255,255,0.7)",barColor:"#fe5621",height:"15",});jQuery('.grid').isotope({itemSelector:'.grid-item',percentPosition:true,masonry:{fitWidth:true}});jQuery('.church-testimonial-thumb').slick({slidesToShow:1,slidesToScroll:1,prevArrow:"<span class='slick-arrow-left'><i class='fa fa-angle-left'></i></span>",nextArrow:"<span class='slick-arrow-right'><i class='fa fa-angle-right'></i></span>",asNavFor:'.church-testimonial-list'});jQuery('.church-testimonial-list').slick({slidesToShow:3,slidesToScroll:1,asNavFor:'.church-testimonial-thumb',dots:false,arrows:false,centerMode:true,focusOnSelect:true,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1,infinite:true,vertical:false,}},{breakpoint:800,settings:{slidesToShow:3,slidesToScroll:1,vertical:false,}},{breakpoint:400,settings:{slidesToShow:1,slidesToScroll:1,vertical:false,}}],});jQuery('.church-images-thumb').slick({slidesToShow:1,autoplay:true,slidesToScroll:1,prevArrow:"<span class='slick-arrow-left'><i class='fa fa-angle-left'></i></span>",nextArrow:"<span class='slick-arrow-right'><i class='fa fa-angle-right'></i></span>",fade:true,asNavFor:'.church-images-list'});jQuery('.church-images-list').slick({slidesToShow:6,slidesToScroll:1,autoplay:true,asNavFor:'.church-images-thumb',dots:false,arrows:false,vertical:true,centerMode:false,focusOnSelect:true,responsive:[{breakpoint:1024,settings:{slidesToShow:6,slidesToScroll:1,infinite:true,vertical:false,}},{breakpoint:800,settings:{slidesToShow:6,slidesToScroll:1,vertical:false,}},{breakpoint:400,settings:{slidesToShow:6,slidesToScroll:1,vertical:false,}}],});jQuery('.church-bloggrid-slider').slick({slidesToShow:2,slidesToScroll:1,autoplay:true,autoplaySpeed:2000,infinite:true,dots:false,prevArrow:"<span class='slick-arrow-left'><i class='fa fa-angle-left'></i></span>",nextArrow:"<span class='slick-arrow-right'><i class='fa fa-angle-right'></i></span>",responsive:[{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:1,infinite:true,}},{breakpoint:800,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:400,settings:{slidesToShow:1,slidesToScroll:1}}]});jQuery(".fancybox").fancybox({openEffect:'elastic',closeEffect:'elastic',});jQuery(function(){var austDay=new Date();austDay=new Date(austDay.getFullYear()+1,1-1,26);jQuery('#church-countdown,#church-event-countdown').countdown({until:austDay});jQuery('#year').text(austDay.getFullYear());});});if(jQuery('#map').lenght>0){google.maps.event.addDomListener(window,'load',init);function init(){var mapOptions={zoom:11,center:new google.maps.LatLng(40.6700,-73.9400),styles:[{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"landscape.natural.terrain","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.attraction","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.government","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.school","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway.controlled_access","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"transit.line","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"transit.station.bus","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"transit.station.rail","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#f66a00"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#fe5621"}]}]};var mapElement=document.getElementById('map');var map=new google.maps.Map(mapElement,mapOptions);var marker=new google.maps.Marker({position:new google.maps.LatLng(40.6700,-73.9400),map:map,title:'Snazzy!'});}}
jQuery(window).on('load',function(){var $grid=$('.autogarage-gallery-filter').isotope({itemSelector:'.element-item',layoutMode:'fitRows'});var filterFns={numberGreaterThan50:function(){var number=$(this).find('.number').text();return parseInt(number,10)>50;},ium:function(){var name=$(this).find('.name').text();return name.match(/ium$/);}};$('.filters-button-group').on('click','a',function(){var filterValue=$(this).attr('data-filter');filterValue=filterFns[filterValue]||filterValue;$grid.isotope({filter:filterValue});});$('.filters-button-group').each(function(i,buttonGroup){var $buttonGroup=$(buttonGroup);$buttonGroup.on('click','a',function(){$buttonGroup.find('.is-checked').removeClass('is-checked');$(this).addClass('is-checked');});});});$('.myform').on('submit',function(){$('.output_message').text('Loading...');var form=$(this);$.ajax({url:form.attr('action'),method:form.attr('method'),data:form.serialize(),success:function(result){if(result=='success'){$('.output_message').html('<span class="success-msg"><i class="fa fa-check-circle"></i> Message Sent successfully!</span>');}else if(result=='validate'){$('.output_message').html('<span class="spam-error-msg"><i class="fa fa-warning"></i> You have already sent message. Try again after one hour.</span>');}else{$('.output_message').html('<span class="error-msg"><i class="fa fa-times-circle"></i> Error Sending email!</span>');}}});return false;});