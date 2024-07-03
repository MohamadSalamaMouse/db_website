var $=jQuery,wind=jQuery(window),body=jQuery("body"),dsnGrid={backgroundPosition:function(e,t,n){var o,i,a,s,r;return e instanceof jQuery==!1&&(e=jQuery(e)),n=this.getUndefinedVal(n,{}),o=this.getUndefinedVal(n.sizeX,"105%"),i=this.getUndefinedVal(n.sizeY,"105%"),s=this.getUndefinedVal(n.left,"-5%"),r=this.getUndefinedVal(n.top,"-5%"),a=this.getUndefinedVal(n.move,100),e.css({width:o,height:i,left:s,top:r,backgroundPositionX:"calc(50% - "+-2*a+"px)",backgroundPositionY:"calc(50% - "+-2*a+"px)"}),t=this.getUndefinedVal(t,1),e.parent().on("mousemove",function(o){if(void 0!==n.dataActive&&jQuery(this).find(e).hasClass(n.dataActive))return!1;var i=o.clientX/jQuery(this).width()-.5,s=o.clientY/jQuery(this).height()-.5;TweenLite.to(jQuery(this).find(e),t,{transformPerspective:100,x:a*i+a+" ",y:a*s+a+""}),void 0!==n.onEnter&&n.onEnter(jQuery(this),o)}).on("mouseleave",function(o){TweenMax.to(jQuery(this).find(e),t,{x:a,y:a,ease:Back.easeOut.config(4)}),void 0!==n.onLeave&&n.onLeave(jQuery(this),o)}),dsnGrid},parallaxIt:function(e,t,n,o){if(!(t.length<=0)){var i=t[0].getBoundingClientRect(),a=e.pageX-i.left,s=e.pageY-i.top,r=window.pageYOffset||document.documentElement.scrollTop;o=this.getUndefinedVal(o,.3),n=this.getUndefinedVal(n,-1),TweenMax.to(t,o,{x:(a-i.width/2)/i.width*n,y:(s-i.height/2-r)/i.width*n,ease:Power0.easeOut})}},scaleIt:function(e,t,n){if(void 0===t)return!1;var o,i,a,s=0;s=body.hasClass("dsn-effect-scroll")?e.scrollTop:e.scrollTop(),a=this.getUndefinedVal(n.plus,0),o=this.getUndefinedVal(n.position,!1);var r=t.offset();return i=void 0===r||body.hasClass("dsn-effect-scroll")?0:r.top,o&&(i-=s),s/(t.height()+i+a)},scrollerIt:function(e,t,n){if(void 0===t)return!1;var o,i,a,s=e.scrollTop();a=this.getUndefinedVal(n.duration,0),i=this.getUndefinedVal(n.plus,0);var r=t.offset();o=void 0!==r?r.top:0,o+=a;var d=t.height()+o+i;if(o<=s&&void 0!==n.action){var l=o-s,c=s/(t.height()+o+i);n.action({scroll:l,position:l/d,targetEnd:d,ScrollTop:s,num:c})}return c},setPositionMoveSection:function(e,t,n){if(void 0!==e){var o=e.offset(),i=void 0===o?0:o.top;t=dsnGrid.getUndefinedVal(t,2),n=dsnGrid.getUndefinedVal(n,0);var a=(e.innerHeight()+i+n)/2;e.css({marginBottom:-(a/t*1)})}},scrollTop:function(e,t,n,o){t=dsnGrid.getUndefinedVal(t,500),n=dsnGrid.getUndefinedVal(n,0);var i=0;"number"==typeof e?i=e:(e instanceof jQuery==!1&&(e=jQuery(e)),void 0!==(i=e.offset())&&(i=i.top)),jQuery("html, body").animate({scrollTop:i+n},t,o)},getUndefinedVal:function(e,t){return void 0===e?t:e},mouseMove:function(e,t,n){jQuery(window);var o=jQuery("body");if(dsnGrid.getUndefinedVal(o.data("dsn-mousemove"),!1)&&void 0!==e&&!(e.length<=0)&&null!==e){o.addClass("dsn-mousemove"),e instanceof jQuery==!1&&(e=jQuery(e));var i=e,a=!1;o.on("mousemove",function(e){TweenLite.to(i,.5,{left:e.pageX,top:e.pageY}),void 0!==t&&void 0!==t.onUpdate&&t.onUpdate(e,e.pageX,e.pageY,i),void 0!==t&&void 0!==t.onComplete&&(a=!0,dsnGrid.endAnimate(i,function(e){a&&t.onComplete(e,i),a=!1}))})}},endAnimate:function(e,t){null!=t&&e.one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",function(e){t(e)})},mouseWheel:function(e,t,n){e.bind("mousewheel DOMMouseScroll",function(e){e.originalEvent.wheelDelta>0||e.originalEvent.detail<0?void 0!==n&&n(e):void 0!==t&&t(e)})},numberText:function(e){return e<10&&e>0?"0"+e:e},convertTextLine:function(e,t){try{if(e&&e.html){var n=e.html().trim(),o="";e.html("");for(var i=0;i<n.length;i++)0===i&&(o+='<div class="dsn-word-wrapper">')," "!==n.charAt(i)?o+='<span class="dsn-chars-wrapper">'+n.charAt(i)+"</span>":o+="</div>"+n.charAt(i)+'<div class="dsn-word-wrapper">';o+="</div>",t.append(o)}}catch(a){}},randomObjectArray:function(e,t){let n=this.getUndefinedVal(t,100);return e.sort(function(){return Math.round(Math.random())*n})},convertTextWord:function(e,t,n){try{if(e){var o=e.html().trim().split(" "),i="";e.html("");for(var a=0;a<o.length;a++)if(o[a].length>0){if(i+='<span class="dsn-wrapper">',n){i+='<span class="dsn-word-wrapper">';for(var s=0;s<o[a].length;s++)i+='<span class="dsn-chars-wrapper">'+o[a].charAt(s)+"</span>";i+="</span>"}else i+='<span class="dsn-word-wrapper">'+o[a]+"</span>";i+="</span>"}t.append(i)}}catch(r){}},getRndInteger:function(e,t){return Math.floor(Math.random()*(t-e))+e},pageLoad:function(e,t,n,o){var i=window.performance.timing,a=-1*(i.loadEventEnd-i.navigationStart)/1e3%50*10,s=e,r=t>e?1:-1,d=setInterval(function(){o(s+=r),s>=t&&clearInterval(d)},Math.abs(Math.floor((a+n)/100)));return d},embedVideo:function(e){jQuery("[data-dsn-video]").each(function(e){var t=jQuery(this),n=dsnGrid.removeAttr(t,"data-dsn-video");t.on("click",function(){t.addClass("dsn-video"),t.html('<div class="dsn-iframe-player">'+n+"</div>"),dsnGrid.scrollTop(t,1600,-100)})})},removeAttr:function(e,t){if(void 0!==e&&void 0!==t){var n=e.attr(t);return void 0!==n&&e.removeAttr(t),n}},moveIcon:function(e,t){e.on("mousemove",function(n){var o="top .15s ease-out,left .15s ease-out";t.css({"-webkit-transition":o,"-moz-transition":o,"-ms-transition":o,"-o-transition":o,transition:o,"pointer-events":"none"});var i=n.pageX,a=n.pageY-jQuery(this).offset().top;a>0&&a<jQuery(this).height()&&jQuery(this).offset().left<i&&i<e.width()?t.css({left:i,top:a}):TweenMax.to(t,.5,{left:"50%",top:"50%"})}).on("mouseleave",function(){TweenMax.to(t,.5,{left:"50%",top:"50%"})})},parallaxMoveElemnt:function(e,t,n,o,i){var a=e,s=e;if(void 0!==e.target&&(a=e.target,s=void 0!==e.element?e.element:e.target),!(s.length<=0)){n=void 0===n?.5:parseFloat(n),t=void 0===t?20:parseFloat(t),i=void 0!==i&&i;var r=$('<div class="icon-circle"></div>');a.append(r),a.off("mouseleave"),a.off("mouseenter"),a.off("mousemove"),a.on("mouseleave",function(e){var t={x:0,y:0,ease:Back.easeOut.config(4)};i&&(t.scale=1);var n=[s,r];void 0!==o&&n.push(o),TweenMax.to(n,1,t)}).on("mouseenter",function(e){var t={transformOrigin:"0 0"};i&&(t.scale="1.03"),TweenMax.to([s,r],.3,t)}).on("mousemove",function(e){dsnGrid.parallaxIt(e,s,t),dsnGrid.parallaxIt(e,r,2*t),void 0!==o&&dsnGrid.parallaxIt(e,o,-5,.5)})}},parallaxMoveElemntCir:function(e,t,n,o,i){var a=e,s=this;n=void 0===n?.5:parseFloat(n),t=void 0===t?20:parseFloat(t),i=void 0!==i&&i;var r=a.html(),d=$('<div class="icon-circle"></div>'),l=$('<div class="dsn-grid-parallax">'+r+"</div>");a.html(""),a.append(d),a.append(l),a.on("mouseleave",function(e){TweenMax.to(a,n,{scale:1}),TweenMax.to(l,.3,{scale:1,x:0,y:0}),TweenMax.to(d,n,{scale:1,x:0,y:0})}).on("mouseenter",function(e){TweenMax.to(a,n,{transformOrigin:"0 0",scale:1}),TweenMax.to(d,n,{scale:1.2})}).on("mousemove",function(e){s.parallaxIt(e,l,t),dsnGrid.parallaxIt(e,d,t)})},elementHover:function(e,t,n){e instanceof jQuery==!1&&(e=jQuery(e)),t instanceof jQuery==!1&&(t=jQuery(t)),t.on("mouseenter",function(){e.addClass(n)}).on("mouseleave",function(){e.removeClass(n)})},changeSizeText:function(e,t){e instanceof jQuery==!1&&(e=jQuery(e)),e.each(function(){var e=jQuery(this);for(var n in t)e.text().length>=parseInt(n)&&(console.log(t[n]),e.css(t[n]))})},convertToJQuery:function(e){return e instanceof jQuery==!1?jQuery(e):e},animateText:function(e,t,n,o){function i(){t.each(function(){let e=$(this);if(e.hasClass(a))return;let t=e.offset().top;void 0!==t&&s>t-(wind.height()-100)&&(e.hasClass(a)||e.addClass(a))})}(t=this.convertToJQuery(t)).each(function(){let e=$(this);dsnGrid.convertTextWord(e,e),void 0!==n&&e.attr(n,"animate"),void 0!==o&&e.removeClass(o),e.addClass("dsn-has-animate-text")});let a="dsn-animate";var s=0,r=null;e.getListener(function(e){s=void 0===e.offset?wind.scrollTop():0,r&&clearTimeout(r),r=setTimeout(i,10)})},imageLoad:function(){let e=$('[data-dsn-loader="div"]');e.each(function(){$(this).append('<div class="wait-loader"><div class="loader-inner"><div class="loader-circle"><div class="loader-layer"></div></div></div></div>')}),e.imagesLoaded({background:".dsn-img-org"}).progress(function(e,t){let n=$(t.element).parents('[data-dsn-loader="div"]');n.length>0&&(n.addClass("dsn-img-loader-done dsn-animate"),n.attr("data-dsn-loader","divFinshed"))})},getBoundingClientRect:function(e){let t=e.getBoundingClientRect();return{top:t.top,right:t.right,bottom:t.bottom,left:t.left,width:t.width,height:t.height,x:t.x,y:t.y}},progressCircle:function(e){let t=$('[data-dsn-grid="progress-circle"]'),n=this.removeAttr(t,"data-dsn-grid-stroke");t.css({position:"fixed",right:"-60px",bottom:"60px",width:"52px",height:"52px","z-index":"99999999"}),t.append('<svg class="dsn-progress-circle-up" width="100%" height="100%" '+(void 0===n?"":'stroke="'+n+'"')+' viewBox="0 0 100 100" preserveAspectRatio="xMinYMin meet" fill="none">\n        <path class="dsn-progress-path" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition:  stroke-dashoffset 300ms linear 0s;stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 309;"></path>    </svg>');var o=wind;e.isScroller(!0)&&(o=e.getScrollbar()),e.getListener(function(e){let n=0,i=$(document).height()-wind.height();void 0===e.offset?n=wind.scrollTop():(n=e.offset.y,i=$(document).height()-o.getSize().content.height+100),n>70?(TweenMax.to(t,1,{ease:Back.easeOut.config(4),right:60}),t.find(".dsn-progress-path").css("stroke-dashoffset",300-Math.round(300*n/i)+"%")):TweenMax.to(t,1,{ease:Back.easeIn.config(4),right:-60})}),t.on("click",function(){e.isScroller(!0)?o.scrollTo(0,0,600):$("body,html").animate({scrollTop:0},300)})}};