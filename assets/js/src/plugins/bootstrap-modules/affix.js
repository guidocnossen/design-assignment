/*!
 * Bootstrap v3.3.5 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */

/*!
 * Generated using the Bootstrap Customizer (http://getbootstrap.com/customize/?id=00bc58d7f1e99a3160a1)
 * Config saved to config.json and https://gist.github.com/00bc58d7f1e99a3160a1
 */
if("undefined"==typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");+function(t){"use strict";var e=t.fn.jquery.split(" ")[0].split(".");if(e[0]<2&&e[1]<9||1==e[0]&&9==e[1]&&e[2]<1||e[0]>2)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 3")}(jQuery),+function(t){"use strict";function e(e){return this.each(function(){var o=t(this),f=o.data("bs.affix"),n="object"==typeof e&&e;f||o.data("bs.affix",f=new i(this,n)),"string"==typeof e&&f[e]()})}var i=function(e,o){this.options=t.extend({},i.DEFAULTS,o),this.$target=t(this.options.target).on("scroll.bs.affix.data-api",t.proxy(this.checkPosition,this)).on("click.bs.affix.data-api",t.proxy(this.checkPositionWithEventLoop,this)),this.$element=t(e),this.affixed=null,this.unpin=null,this.pinnedOffset=null,this.checkPosition()};i.VERSION="3.3.6",i.RESET="affix affix-top affix-bottom",i.DEFAULTS={offset:0,target:window},i.prototype.getState=function(t,e,i,o){var f=this.$target.scrollTop(),n=this.$element.offset(),s=this.$target.height();if(null!=i&&"top"==this.affixed)return i>f?"top":!1;if("bottom"==this.affixed)return null!=i?f+this.unpin<=n.top?!1:"bottom":t-o>=f+s?!1:"bottom";var r=null==this.affixed,a=r?f:n.top,h=r?s:e;return null!=i&&i>=f?"top":null!=o&&a+h>=t-o?"bottom":!1},i.prototype.getPinnedOffset=function(){if(this.pinnedOffset)return this.pinnedOffset;this.$element.removeClass(i.RESET).addClass("affix");var t=this.$target.scrollTop(),e=this.$element.offset();return this.pinnedOffset=e.top-t},i.prototype.checkPositionWithEventLoop=function(){setTimeout(t.proxy(this.checkPosition,this),1)},i.prototype.checkPosition=function(){if(this.$element.is(":visible")){var e=this.$element.height(),o=this.options.offset,f=o.top,n=o.bottom,s=Math.max(t(document).height(),t(document.body).height());"object"!=typeof o&&(n=f=o),"function"==typeof f&&(f=o.top(this.$element)),"function"==typeof n&&(n=o.bottom(this.$element));var r=this.getState(s,e,f,n);if(this.affixed!=r){null!=this.unpin&&this.$element.css("top","");var a="affix"+(r?"-"+r:""),h=t.Event(a+".bs.affix");if(this.$element.trigger(h),h.isDefaultPrevented())return;this.affixed=r,this.unpin="bottom"==r?this.getPinnedOffset():null,this.$element.removeClass(i.RESET).addClass(a).trigger(a.replace("affix","affixed")+".bs.affix")}"bottom"==r&&this.$element.offset({top:s-e-n})}};var o=t.fn.affix;t.fn.affix=e,t.fn.affix.Constructor=i,t.fn.affix.noConflict=function(){return t.fn.affix=o,this},t(window).on("load",function(){t('[data-spy="affix"]').each(function(){var i=t(this),o=i.data();o.offset=o.offset||{},null!=o.offsetBottom&&(o.offset.bottom=o.offsetBottom),null!=o.offsetTop&&(o.offset.top=o.offsetTop),e.call(i,o)})})}(jQuery);