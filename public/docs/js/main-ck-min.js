/*********************************************** 
     Begin init-gallery.js 
***********************************************/$(function(){if($("div.image").length>1){$("div.image").wrapAll("<div id='image-wrapper'><div id='image-holder'></div></div>");$("div.image").show();Gallery.init($("div#image-holder"),560,$("p#gallery-count").children("span")[0],$("a#next-image"),$("a#previous-image"))}else{$("p#gallery-count, div#gallery-navigation").hide();$("p#project-count").show()}});Gallery={currentImage:0,imageHolders:null,imageHolderWidth:null,imageCountHolder:null,maxCount:null,nextButton:null,prevButoon:null,init:function(a,b,c,d,e,f,g){this.imageHolder=a;this.imageWrapperWidth=b;this.imageCountHolder=c;this.maxCount=$("img",a).length;this.nextButton=d;this.prevButton=e;this.descriptionHolder=f;this.descriptionWidth=g;document.URL.match(/#[0-9]+/)?this.gotoImage(new Number((new String(document.URL.match(/#[0-9]+/))).replace("#",""))-1):this.updateCount(0);this.attachEvents()},attachEvents:function(){this.nextButton.click(function(){Gallery.next();this.blur();return!1});this.prevButton.click(function(){Gallery.previous();this.blur();return!1})},next:function(){this.gotoImage(this.currentImage+1)},previous:function(){this.gotoImage(this.currentImage-1)},updateCount:function(a){this.currentImage=a;this.imageCountHolder.innerHTML=a+1+"/"+this.maxCount},gotoImage:function(a){a>=this.maxCount?a=0:a<0&&(a=this.maxCount-1);this.animateContainers(a);this.updateCount(a)},animateContainers:function(a){this.imageHolder.animate({marginLeft:a*this.imageWrapperWidth*-1+"px"},{duration:600,queue:!1});if(!this.descriptionHolder)return;this.descriptionHolder.animate({marginLeft:a*this.descriptionWidth*-1+"px"},{duration:600,queue:!1})}};