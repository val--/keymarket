(function($) {
	"use strict";
	/*	Tooltip
	/*----------------------------------------------------*/
	$("[data-toggle='tooltip']").tooltip();
	
	/*	Popover
	/*----------------------------------------------------*/
	$("[data-toggle='popover']").popover();
	
	/*	Fixed Navigation
	/*----------------------------------------------------*/
	$(window).scroll(function(){
        if ($(this).scrollTop() > 40) {
            $('body').addClass('menu-fixed');
        } else {
			$('body').removeClass('menu-fixed');
        }
    });

	
	/* Open Modal
	/*----------------------------------------------------*/
	$('#signin .register').click(function () {
		$('#register').modal('show');
	});	
	
	$("[data-toggle='modal-search']").click(function () {
		$('body').toggleClass('search-open');
		return false;
	});	
	
	$(".modal-search .close").click(function () { 
		$('body').removeClass('search-open');
		return false;
	});	
	
	
	$(".modal-right .modal-backdrop").click(function() {
		$('body').removeClass('modal-right-open');
		$('.modal-right .modal-backdrop').fadeOut().removeClass('animated fadeIn');
		return false;
	});
	
	$(".modal-right .close").click(function() {	
		$('body').removeClass('modal-right-open');
		$('.modal-right .modal-backdrop').fadeOut().removeClass('animated fadeIn');
		return false;
	});
	
	/* Modal Effects
	/*----------------------------------------------------*/
	$('.modal').on('shown.bs.modal', function (e) {
		var effect  = $(this).data("effect");
		if(effect) {
			$(this).find('.modal').addClass('animated ' + effect + '');
		}
	});

	$('.modal').on('hidden.bs.modal', function (e) {
		var effect  = $(this).data("effect");
		if(effect) {
			$(this).find('.modal').removeClass('animated ' + effect + '');
		}
	});
	
	/* Responsive Navigation
	/*----------------------------------------------------*/
	$('.bar').click(function() {		
		$('body').toggleClass('nav-open');
		
		$('#wrapper').click(function() {		
			$('body').removeClass('nav-open');
		});
	});
	
	
	/* Background Resize
	/*----------------------------------------------------*/
	$('section.background-image.full-height').each(function () {
        $(this).css('height', $(window).height());
    });

	$(window).resize(function () {
        $('section.background-image.full-height').each(function () {
			$(this).css('height', $(window).height());
        });
    });
	
			
	/*	Dropdown Navigation
	/*----------------------------------------------------*/
	$('nav .dropdown > a').click(function() {		
		return false;
	});
	
	$('nav .dropdown-submenu > a').click(function() {		
		return false;
	});
	
	$('nav .dropdown').hover(function() {			
		$(this).find('.dropdown-menu').stop(true, true).show;
		$(this).addClass('open');
	}, function() {
		$(this).find('.dropdown-menu').stop(true, true).hide;
		$(this).removeClass('open');
	});	
	
	$('nav .dropdown-submenu').hover(function() {			
		$(this).addClass('open');
	}, function() {
		$(this).removeClass('open');
	});	
	
	function slideranimation( elems ) {
		var animEndEv = 'webkitAnimationEnd animationend';
		elems.each(function () {
		var $this = $(this),
		$animationType = $this.data('animation');
		$this.addClass($animationType).one(animEndEv, function () {
			$this.removeClass($animationType);
		});
		});
	}
		
	var $fullCarousel = $('#full-carousel'),
	$firstAnimatingElems = $fullCarousel.find('.item:first').find("[data-animation ^= 'animated']");
	slideranimation($firstAnimatingElems);
	$fullCarousel.carousel('pause');
			
	$fullCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		slideranimation($animatingElems);
	});  
	
	$('.modal-sample').on('click', function() {
		var effect  = $(this).html();
		var modal='<div class="modal myModalSample" tabindex="-1" data-effect="fadeIn" role="dialog" aria-labelledby="myModalSample" aria-hidden="true"><div class="modal-dialog"><div class="modal-content  animated ' + effect + '"><div class="modal-header"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><h4 class="modal-title" id="myModalSampleLabel">'+ effect +' modal effect</h4></div><div class="modal-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec mattis odio. In hac habitasse platea dictumst. Vestibulum volutpat pretium porta. Cras mattis metus non ipsum porttitor pulvinar. Proin tempus erat ac neque gravida suscipit. Morbi faucibus turpis a turpis hendrerit sodales sed vel nisl. Praesent vitae magna luctus, blandit quam eu, semper mi.</p></div></div></div></div>';
		$(this).after( modal );
		$('.myModalSample').on('hidden.bs.modal', function (e) {
			$(this).remove( );
		});
	});
})(jQuery);

var Holder=Holder||{};!function(t,e){function i(t,e,i){e=parseInt(e,10),t=parseInt(t,10);var a=Math.max(e,t),n=Math.min(e,t),o=1/12,r=Math.min(.75*n,.75*a*o);return{height:Math.round(Math.max(i.size,r))}}function a(t){var e=[];for(p in t)t.hasOwnProperty(p)&&e.push(p+":"+t[p]);return e.join(";")}function n(t){var e=t.ctx,a=t.dimensions,n=t.template,o=t.ratio,r=t.holder,s="literal"==r.textmode,d="exact"==r.textmode,l=i(a.width,a.height,n),h=l.height,u=a.width*o,c=a.height*o,f=n.font?n.font:"Arial,Helvetica,sans-serif";canvas.width=u,canvas.height=c,e.textAlign="center",e.textBaseline="middle",e.fillStyle=n.background,e.fillRect(0,0,u,c),e.fillStyle=n.foreground,e.font="bold "+h+"px "+f;var g=n.text?n.text:Math.floor(a.width)+"x"+Math.floor(a.height);if(s){var a=r.dimensions;g=a.width+"x"+a.height}else if(d&&r.exact_dimensions){var a=r.exact_dimensions;g=Math.floor(a.width)+"x"+Math.floor(a.height)}var m=e.measureText(g).width;return m/u>=.75&&(h=Math.floor(.75*h*(u/m))),e.font="bold "+h*o+"px "+f,e.fillText(g,u/2,c/2,u),canvas.toDataURL("image/png")}function o(t){var e=t.dimensions,a=t.template,n=t.holder,o="literal"==n.textmode,r="exact"==n.textmode,s=i(e.width,e.height,a),d=s.height,l=e.width,h=e.height,u=a.font?a.font:"Arial,Helvetica,sans-serif",c=a.text?a.text:Math.floor(e.width)+"x"+Math.floor(e.height);if(o){var e=n.dimensions;c=e.width+"x"+e.height}else if(r&&n.exact_dimensions){var e=n.exact_dimensions;c=Math.floor(e.width)+"x"+Math.floor(e.height)}var f=E({text:c,width:l,height:h,text_height:d,font:u,template:a});return"data:image/svg+xml;base64,"+btoa(f)}function r(t){return x.use_canvas&&!x.use_svg?n(t):o(t)}function s(t,e,i,a){var n=i.dimensions,o=i.theme,s=i.text?decodeURIComponent(i.text):i.text,d=n.width+"x"+n.height;o=s?g(o,{text:s}):o,o=i.font?g(o,{font:i.font}):o,e.setAttribute("data-src",a),i.theme=o,e.holder_data=i,"image"==t?(e.setAttribute("alt",s?s:o.text?o.text+" ["+d+"]":d),(x.use_fallback||!i.auto),x.use_fallback?e.style.backgroundColor=o.background:(e.setAttribute("src",r({ctx:_,dimensions:n,template:o,ratio:k,holder:i})),i.textmode&&"exact"==i.textmode&&(y.push(e),h(e)))):"background"==t?x.use_fallback||(e.style.backgroundImage="url("+r({ctx:_,dimensions:n,template:o,ratio:k,holder:i})+")",e.style.backgroundSize=n.width+"px "+n.height+"px"):"fluid"==t&&(e.setAttribute("alt",s?s:o.text?o.text+" ["+d+"]":d),"%"==n.height.slice(-1)?e.style.height=n.height:null!=i.auto&&i.auto||(e.style.height=n.height+"px"),"%"==n.width.slice(-1)?e.style.width=n.width:null!=i.auto&&i.auto||(e.style.width=n.width+"px"),("inline"==e.style.display||""===e.style.display||"none"==e.style.display)&&(e.style.display="block"),l(e),x.use_fallback?e.style.backgroundColor=o.background:(y.push(e),h(e)))}function d(t,e){var i={height:t.clientHeight,width:t.clientWidth};return i.height||i.width?(t.removeAttribute("data-holder-invisible"),i):(t.setAttribute("data-holder-invisible",!0),void e.call(this,t))}function l(e){if(e.holder_data){var i=d(e,t.invisible_error_fn(l));if(i){var a=e.holder_data;a.initial_dimensions=i,a.fluid_data={fluid_height:"%"==a.dimensions.height.slice(-1),fluid_width:"%"==a.dimensions.width.slice(-1),mode:null},a.fluid_data.fluid_width&&!a.fluid_data.fluid_height?(a.fluid_data.mode="width",a.fluid_data.ratio=a.initial_dimensions.width/parseFloat(a.dimensions.height)):!a.fluid_data.fluid_width&&a.fluid_data.fluid_height&&(a.fluid_data.mode="height",a.fluid_data.ratio=parseFloat(a.dimensions.width)/a.initial_dimensions.height)}}}function h(e){var i;i=null==e.nodeType?y:[e];for(var a in i)if(i.hasOwnProperty(a)){var n=i[a];if(n.holder_data){var o=n.holder_data,s=d(n,t.invisible_error_fn(h));if(s){if(o.fluid){if(o.auto)switch(o.fluid_data.mode){case"width":s.height=s.width/o.fluid_data.ratio;break;case"height":s.width=s.height*o.fluid_data.ratio}n.setAttribute("src",r({ctx:_,dimensions:s,template:o.theme,ratio:k,holder:o}))}o.textmode&&"exact"==o.textmode&&(o.exact_dimensions=s,n.setAttribute("src",r({ctx:_,dimensions:o.dimensions,template:o.theme,ratio:k,holder:o})))}}}}function u(e,i){for(var a={theme:g(A.themes.gray,{})},n=!1,o=e.length,r=0;o>r;r++){var s=e[r];t.flags.dimensions.match(s)?(n=!0,a.dimensions=t.flags.dimensions.output(s)):t.flags.fluid.match(s)?(n=!0,a.dimensions=t.flags.fluid.output(s),a.fluid=!0):t.flags.textmode.match(s)?a.textmode=t.flags.textmode.output(s):t.flags.colors.match(s)?a.theme=t.flags.colors.output(s):i.themes[s]?i.themes.hasOwnProperty(s)&&(a.theme=g(i.themes[s],{})):t.flags.font.match(s)?a.font=t.flags.font.output(s):t.flags.auto.match(s)?a.auto=!0:t.flags.text.match(s)&&(a.text=t.flags.text.output(s))}return n?a:!1}function c(t,e){var i="complete",a="readystatechange",n=!1,o=n,r=!0,s=t.document,d=s.documentElement,l=s.addEventListener?"addEventListener":"attachEvent",h=s.addEventListener?"removeEventListener":"detachEvent",u=s.addEventListener?"":"on",c=function(r){(r.type!=a||s.readyState==i)&&(("load"==r.type?t:s)[h](u+r.type,c,n),!o&&(o=!0)&&e.call(t,null))},f=function(){try{d.doScroll("left")}catch(t){return void setTimeout(f,50)}c("poll")};if(s.readyState==i)e.call(t,"lazy");else{if(s.createEventObject&&d.doScroll){try{r=!t.frameElement}catch(g){}r&&f()}s[l](u+"DOMContentLoaded",c,n),s[l](u+a,c,n),t[l](u+"load",c,n)}}function f(t,e){var t=t.match(/^(\W)?(.*)/),e=e||document,i=e["getElement"+(t[1]?"#"==t[1]?"ById":"sByClassName":"sByTagName")],a=i.call(e,t[2]),n=[];return null!==a&&(n=a.length||0===a.length?a:[a]),n}function g(t,e){var i={};for(var a in t)t.hasOwnProperty(a)&&(i[a]=t[a]);for(var a in e)e.hasOwnProperty(a)&&(i[a]=e[a]);return i}var m={use_svg:!1,use_canvas:!1,use_fallback:!1},x={},w=!1;canvas=document.createElement("canvas");var v=1,b=1,y=[];if(canvas.getContext)if(canvas.toDataURL("image/png").indexOf("data:image/png")<0)m.use_fallback=!0;else var _=canvas.getContext("2d");else m.use_fallback=!0;document.createElementNS&&document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect&&(m.use_svg=!0,m.use_canvas=!1),m.use_fallback||(v=window.devicePixelRatio||1,b=_.webkitBackingStorePixelRatio||_.mozBackingStorePixelRatio||_.msBackingStorePixelRatio||_.oBackingStorePixelRatio||_.backingStorePixelRatio||1);var k=v/b,A={domain:"holder.js",images:"img",bgnodes:".holderjs",themes:{gray:{background:"#eee",foreground:"#aaa",size:12},social:{background:"#3a5a97",foreground:"#fff",size:12},industrial:{background:"#434A52",foreground:"#C2F200",size:12},sky:{background:"#0D8FDB",foreground:"#fff",size:12},vine:{background:"#39DBAC",foreground:"#1E292C",size:12},lava:{background:"#F8591A",foreground:"#1C2846",size:12}},stylesheet:""};t.flags={dimensions:{regex:/^(\d+)x(\d+)$/,output:function(t){var e=this.regex.exec(t);return{width:+e[1],height:+e[2]}}},fluid:{regex:/^([0-9%]+)x([0-9%]+)$/,output:function(t){var e=this.regex.exec(t);return{width:e[1],height:e[2]}}},colors:{regex:/#([0-9a-f]{3,})\:#([0-9a-f]{3,})/i,output:function(t){var e=this.regex.exec(t);return{size:A.themes.gray.size,foreground:"#"+e[2],background:"#"+e[1]}}},text:{regex:/text\:(.*)/,output:function(t){return this.regex.exec(t)[1]}},font:{regex:/font\:(.*)/,output:function(t){return this.regex.exec(t)[1]}},auto:{regex:/^auto$/},textmode:{regex:/textmode\:(.*)/,output:function(t){return this.regex.exec(t)[1]}}};var E=function(){if(window.XMLSerializer){var t=new XMLSerializer,e="http://www.w3.org/2000/svg",i=document.createElementNS(e,"svg");i.webkitMatchesSelector&&i.setAttribute("xmlns","http://www.w3.org/2000/svg");var n=document.createElementNS(e,"rect"),o=document.createElementNS(e,"text"),r=document.createTextNode(null);return o.setAttribute("text-anchor","middle"),o.appendChild(r),i.appendChild(n),i.appendChild(o),function(e){return i.setAttribute("width",e.width),i.setAttribute("height",e.height),n.setAttribute("width",e.width),n.setAttribute("height",e.height),n.setAttribute("fill",e.template.background),o.setAttribute("x",e.width/2),o.setAttribute("y",e.height/2),r.nodeValue=e.text,o.setAttribute("style",a({fill:e.template.foreground,"font-weight":"bold","font-size":e.text_height+"px","font-family":e.font,"dominant-baseline":"central"})),t.serializeToString(i)}}}();for(var S in t.flags)t.flags.hasOwnProperty(S)&&(t.flags[S].match=function(t){return t.match(this.regex)});t.invisible_error_fn=function(){return function(t){if(t.hasAttribute("data-holder-invisible"))throw new Error("Holder: invisible placeholder")}},t.add_theme=function(e,i){return null!=e&&null!=i&&(A.themes[e]=i),t},t.add_image=function(e,i){var a=f(i);if(a.length)for(var n=0,o=a.length;o>n;n++){var r=document.createElement("img");r.setAttribute("data-src",e),a[n].appendChild(r)}return t},t.run=function(e){x=g({},m),w=!0;var i=g(A,e),a=[],n=[],o=[];for(null!=i.use_canvas&&i.use_canvas&&(x.use_canvas=!0,x.use_svg=!1),"string"==typeof i.images?n=f(i.images):window.NodeList&&i.images instanceof window.NodeList?n=i.images:window.Node&&i.images instanceof window.Node?n=[i.images]:window.HTMLCollection&&i.images instanceof window.HTMLCollection&&(n=i.images),"string"==typeof i.bgnodes?o=f(i.bgnodes):window.NodeList&&i.elements instanceof window.NodeList?o=i.bgnodes:window.Node&&i.bgnodes instanceof window.Node&&(o=[i.bgnodes]),h=0,l=n.length;l>h;h++)a.push(n[h]);var r=document.getElementById("holderjs-style");r||(r=document.createElement("style"),r.setAttribute("id","holderjs-style"),r.type="text/css",document.getElementsByTagName("head")[0].appendChild(r)),i.nocss||(r.styleSheet?r.styleSheet.cssText+=i.stylesheet:r.appendChild(document.createTextNode(i.stylesheet)));for(var d=new RegExp(i.domain+'/(.*?)"?\\)'),l=o.length,h=0;l>h;h++){var c=window.getComputedStyle(o[h],null).getPropertyValue("background-image"),p=c.match(d),v=o[h].getAttribute("data-background-src");if(p){var b=u(p[1].split("/"),i);b&&s("background",o[h],b,c)}else if(null!=v){var b=u(v.substr(v.lastIndexOf(i.domain)+i.domain.length+1).split("/"),i);b&&s("background",o[h],b,c)}}for(l=a.length,h=0;l>h;h++){var y,_;_=y=c=null;try{_=a[h].getAttribute("src"),attr_datasrc=a[h].getAttribute("data-src")}catch(k){}if(null==attr_datasrc&&_&&_.indexOf(i.domain)>=0?c=_:attr_datasrc&&attr_datasrc.indexOf(i.domain)>=0&&(c=attr_datasrc),c){var b=u(c.substr(c.lastIndexOf(i.domain)+i.domain.length+1).split("/"),i);b&&(b.fluid?s("fluid",a[h],b,c):s("image",a[h],b,c))}}return t},c(e,function(){window.addEventListener?(window.addEventListener("resize",h,!1),window.addEventListener("orientationchange",h,!1)):window.attachEvent("onresize",h),w||t.run({})}),"function"==typeof define&&define.amd&&define([],function(){return t}),function(){function t(t){this.message=t}var e="undefined"!=typeof exports?exports:this,i="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";t.prototype=Error(),t.prototype.name="InvalidCharacterError",e.btoa||(e.btoa=function(e){for(var a,n,o=0,r=i,s="";e.charAt(0|o)||(r="=",o%1);s+=r.charAt(63&a>>8-8*(o%1))){if(n=e.charCodeAt(o+=.75),n>255)throw new t("'btoa' failed");a=a<<8|n}return s}),e.atob||(e.atob=function(e){if(e=e.replace(/=+$/,""),1==e.length%4)throw new t("'atob' failed");for(var a,n,o=0,r=0,s="";n=e.charAt(r++);~n&&(a=o%4?64*a+n:n,o++%4)?s+=String.fromCharCode(255&a>>(6&-2*o)):0)n=i.indexOf(n);return s})}(),document.getElementsByClassName||(document.getElementsByClassName=function(t){var e,i,a,n=document,o=[];if(n.querySelectorAll)return n.querySelectorAll("."+t);if(n.evaluate)for(i=".//*[contains(concat(' ', @class, ' '), ' "+t+" ')]",e=n.evaluate(i,n,null,0,null);a=e.iterateNext();)o.push(a);else for(e=n.getElementsByTagName("*"),i=new RegExp("(^|\\s)"+t+"(\\s|$)"),a=0;a<e.length;a++)i.test(e[a].className)&&o.push(e[a]);return o}),window.getComputedStyle||(window.getComputedStyle=function(t){return this.el=t,this.getPropertyValue=function(e){var i=/(\-([a-z]){1})/g;return"float"==e&&(e="styleFloat"),i.test(e)&&(e=e.replace(i,function(){return arguments[2].toUpperCase()})),t.currentStyle[e]?t.currentStyle[e]:null},this}),Object.prototype.hasOwnProperty||(Object.prototype.hasOwnProperty=function(t){var e=this.__proto__||this.constructor.prototype;return t in this&&(!(t in e)||e[t]!==this[t])})}(Holder,window);