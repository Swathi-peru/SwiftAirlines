<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script>
window.Modernizr=function(a,b,c){function u(a){j.cssText=a}function v(a,b){return u(prefixes.join(a+";")+(b||""))}function w(a,b){return typeof a===b}function x(a,b){return!!~(""+a).indexOf(b)}function y(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:w(f,"function")?f.bind(d||b):f}return!1}var d="2.6.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m={},n={},o={},p=[],q=p.slice,r,s={}.hasOwnProperty,t;!w(s,"undefined")&&!w(s.call,"undefined")?t=function(a,b){return s.call(a,b)}:t=function(a,b){return b in a&&w(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=q.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(q.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(q.call(arguments)))};return e});for(var z in m)t(m,z)&&(r=z.toLowerCase(),e[r]=m[z](),p.push((e[r]?"":"no-")+r));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)t(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},u(""),i=k=null,function(a,b){function k(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function l(){var a=r.elements;return typeof a=="string"?a.split(" "):a}function m(a){var b=i[a[g]];return b||(b={},h++,a[g]=h,i[h]=b),b}function n(a,c,f){c||(c=b);if(j)return c.createElement(a);f||(f=m(c));var g;return f.cache[a]?g=f.cache[a].cloneNode():e.test(a)?g=(f.cache[a]=f.createElem(a)).cloneNode():g=f.createElem(a),g.canHaveChildren&&!d.test(a)?f.frag.appendChild(g):g}function o(a,c){a||(a=b);if(j)return a.createDocumentFragment();c=c||m(a);var d=c.frag.cloneNode(),e=0,f=l(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function p(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return r.shivMethods?n(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+l().join().replace(/\w+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(r,b.frag)}function q(a){a||(a=b);var c=m(a);return r.shivCSS&&!f&&!c.hasCSS&&(c.hasCSS=!!k(a,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),j||p(a,c),a}var c=a.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,e=/^(?:a|b|code|div|fieldset|h2|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f,g="_html5shiv",h=0,i={},j;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",f="hidden"in a,j=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){f=!0,j=!0}})();var r={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,supportsUnknownElements:j,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:q,createElement:n,createDocumentFragment:o};a.html5=r,q(b)}(this,b),e._version=d,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+p.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
</script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
<style>
.dr-menu {
width: 100%;
max-width: 400px;
min-width: 300px;
position: relative;
font-size: 1.3em;
line-height: 2.5;
font-weight: 400;
color: #fff;
padding-top: 2em;
}
.dr-menu > div {
cursor: pointer;
position: absolute;
width: 100%;
z-index: 100;
}
.dr-menu > div .dr-icon {
top: 0;
left: 0;
position: absolute;
font-size: 150%;
line-height: 1.6;
padding: 0 10px;
-webkit-transition: all 0.2s ease;
-moz-transition: all 0.2s ease;
transition: all 0.2s ease;
}
.dr-menu.dr-menu-open > div .dr-icon {
color: #60a773;
left: 100%;
-webkit-transform: translateX(-100%);
-moz-transform: translateX(-100%);
-ms-transform: translateX(-100%);
transform: translateX(-100%);
}
.dr-menu > div .dr-icon:after {
content: "\e008";
position: absolute;
font-size: 50%;
line-height: 3.25;
left: -10%;
opacity: 0;
}
.dr-menu.dr-menu-open > div .dr-icon:after {
opacity: 1;
}
.dr-menu > div .dr-label {
padding-left: 3em;
position: relative;
display: block;
color: #60a773;
font-size: 0.9em;
font-weight: 700;
letter-spacing: 1px;
text-transform: uppercase;
line-height: 2.75;
-webkit-transition: all 0.2s ease;
-moz-transition: all 0.2s ease;
transition: all 0.2s ease;
}
.dr-menu.dr-menu-open > div .dr-label {
-webkit-transform: translateY(-90%);
-moz-transform: translateY(-90%);
-ms-transform: translateY(-90%);
transform: translateY(-90%);
}
.dr-menu ul {
padding: 0;
margin: 0 3em 0 0;
list-style: none;
opacity: 0;
position: relative;
z-index: 0;
pointer-events: none;
-webkit-transition: opacity 0s linear 205ms;
-moz-transition: opacity 0s linear 205ms;
transition: opacity 0s linear 205ms;
}
.dr-menu.dr-menu-open ul {
opacity: 1;
z-index: 200;
pointer-events: auto;
-webkit-transition: opacity 0s linear 0s;
-moz-transition: opacity 0s linear 0s;
transition: opacity 0s linear 0s;
}
.dr-menu ul li {
display: block;
margin: 0 0 5px 0;
opacity: 0;
-webkit-transition: opacity 0.3s ease;
-moz-transition: opacity 0.3s ease;
transition: opacity 0.3s ease;
}
.dr-menu.dr-menu-open ul li {
opacity: 1;
}
.dr-menu.dr-menu-open ul li:nth-child(2) {
-webkit-transition-delay: 35ms;
-moz-transition-delay: 35ms;
transition-delay: 35ms;
}
.dr-menu.dr-menu-open ul li:nth-child(3) {
-webkit-transition-delay: 70ms;
-moz-transition-delay: 70ms;
transition-delay: 70ms;
}
.dr-menu.dr-menu-open ul li:nth-child(4) {
-webkit-transition-delay: 105ms;
-moz-transition-delay: 105ms;
transition-delay: 105ms;
}
.dr-menu.dr-menu-open ul li:nth-child(5) {
-webkit-transition-delay: 140ms;
-moz-transition-delay: 140ms;
transition-delay: 140ms;
}
.dr-menu.dr-menu-open ul li:nth-child(6) {
-webkit-transition-delay: 175ms;
-moz-transition-delay: 175ms;
transition-delay: 175ms;
}
.dr-menu.dr-menu-open ul li:nth-child(7) {
-webkit-transition-delay: 205ms;
-moz-transition-delay: 205ms;
transition-delay: 205ms;
}
.dr-menu ul li a {
display: inline-block;
padding: 0 20px;
color: #fff;
}
.dr-menu ul li a:hover {
color: #60a773;
}
.dr-icon:before, .dr-icon:after {
position: relative;
font-family: 'icomoon';
speak: none;
font-style: normal;
font-weight: normal;
font-variant: normal;
text-transform: none;
-webkit-font-smoothing: antialiased;
}
.dr-menu ul .dr-icon:before {
margin-right: 15px;
}
.dr-icon-bullhorn:before {
content: "\e000";
}
.dr-icon-camera:before {
content: "\e002";
}
.dr-icon-heart:before {
content: "\e003";
}
.dr-icon-settings:before {
content: "\e004";
}
.dr-icon-switch:before {
content: "\e005";
}
.dr-icon-download:before {
content: "\e006";
}
.dr-icon-user:before {
content: "\e001";
}
.dr-icon-menu:before {
content: "\e007";
}
.clearfix:before,
.clearfix:after {
	content: " ";
	display: table;
}
*:before {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.clearfix:after {
	clear: both;
}
@media screen and (max-width: 66.9375em) {
	.side, .main p {
		float: none;
		width: 100%;
		box-shadow: none;
		padding: 1em;
	}

	.main p {
		font-size: 130%;
	}
}

            h2,h3, h4, h5, h6 {
                font-family: sans-serif;
                color: black;
            }
       
</style>
</head>
<!-- header -->
<body id="page4">
<div class="body1">
	<div class="main">
	<header>
			<div class="wrapper">
				<h2>
					<img src="images/logo1.jpg" height = 50 px>
					<a href="index1.php" id="logo1"> </a><span id="slogan">Happy Travelling</span>
				</h2>
				<div class="right">
					<nav>
						<ul id="top_nav">
							<li><a href="index1.php"><img src="images/img1.gif" alt=""></a></li>
							<li><a href="index-4.php"><img src="images/img2.gif" alt=""></a></li>
							<li class="bg_none"><a href="#"><img src="images/img3.gif" alt=""></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>
</div>
<div class="main">
	<div id="banner">
		<div class="text1">
			<span>SOMETHING SPECIAL<br> IN THE AIR</span><p></p>
		</div>
		
	</div>
</div>
<div class="main">
<!-- content -->
<div class="side">
<nav class="dr-menu">
<div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span><a class="dr-label">Menu</a></a>
</div>
<ul>
<br>
<li><a class="dr-icon dr-icon-user" href="view.php">VIEW FLIGHTS</a></li>
<li><a class="dr-icon dr-icon-user" href="add.php">ADD FLIGHT</a></li>
<li><a class="dr-icon dr-icon-user" href="delete.php">DELETE FLIGHT</a></li>
<li><a class="dr-icon dr-icon-bullhorn" href="customer.php">CUSTOMER FEEDBACK</a></li>
<li><a class="dr-icon dr-icon-switch" href="adminlogin.php">Logout</a></li>
</ul>
</nav>
</div>
</div>
<script>
var YTMenu = (function() {

function init() {

[].slice.call( document.querySelectorAll( '.dr-menu' ) ).forEach( function( el, i ) {

var trigger = el.querySelector( 'div.dr-trigger' ),
icon = trigger.querySelector( 'span.dr-icon-menu' ),
open = false;

trigger.addEventListener( 'click', function( event ) {
if( !open ) {
el.className += ' dr-menu-open';
open = true;
}
}, false );

icon.addEventListener( 'click', function( event ) {
if( open ) {
event.stopPropagation();
open = false;
el.className = el.className.replace(/\bdr-menu-open\b/,'');
return false;
}
}, false );

} );

}

init();

})();
</script>
