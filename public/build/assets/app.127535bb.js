"serviceWorker"in navigator?navigator.serviceWorker.register(document.location.origin+"/service-worker.js").then(function(e){console.log("Service worker registration succeeded:",e)},function(e){console.log("Service worker registration failed:",e)}):console.log("Service workers are not supported.");$(document).ready(function(){$(".selectize-singular").selectize({}),$(".selectize--linked").selectize({onChange(e){window.location=e}})});$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}});let s=document.querySelector(".menu"),i=document.querySelector(".menu__search");document.querySelector(".header__toggles-menu-button").addEventListener("click",()=>{document.body.style.overflowY="hidden",i.classList.remove("menu__search--visible"),s.classList.add("menu--visible")});document.querySelector(".menu__close-button").addEventListener("click",()=>{document.body.style.overflowY="auto",s.classList.remove("menu--visible")});document.querySelector(".header__toggles-search-button").addEventListener("click",()=>{document.body.style.overflowY="hidden",i.classList.add("menu__search--visible"),s.classList.add("menu--visible"),s.querySelector(".menu__search-input").focus()});document.querySelector(".menu__search-input").addEventListener("focus",()=>{i.classList.add("menu__search--visible")});document.querySelectorAll('[data-action="toggle-mobile-menu"]').forEach(e=>{e.addEventListener("click",t=>{document.querySelector(".mobile-menu").classList.toggle("mobile-menu--visible")})});document.querySelectorAll(".tab-button").forEach(e=>{e.addEventListener("click",t=>{let n=t.target,o=n.closest(".tab-buttons-container").querySelector(".tab-button--active"),c=document.querySelector(`[data-content-id="${n.dataset.targetId}"]`),u=c.closest(".tab-content-container").querySelector(".tab-content-item--active");n!==o&&(o&&o.classList.remove("tab-button--active"),n.classList.add("tab-button--active"),u&&u.classList.remove("tab-content-item--active"),c.classList.add("tab-content-item--active"))})});let d=document.querySelector(".menu__tab");d.querySelectorAll(".tab-button").forEach(e=>{e.addEventListener("dblclick",t=>{window.location.href=e.dataset.link})});let m=document.querySelector(".menu__search-results-container");i.querySelector(".spinner-container");document.querySelector(".menu__search-form").addEventListener("submit",e=>{e.preventDefault();let t=i.querySelector(".spinner-container");t.classList.add("spinner-container--visible"),$.ajax({type:"POST",enctype:"multipart/form-data",url:"/search",data:{keyword:document.querySelector(".menu__search-input").value},success:function(n){m.innerHTML=n,t.classList.remove("spinner-container--visible")},error:function(){t.classList.remove("spinner-container--visible"),console.log("Ajax search error!")}})});let v=$(".products-carousel");v.owlCarousel({loop:!0,margin:32,nav:!0,navText:['<span class="material-icons">west</span>','<span class="material-icons">east</span>'],dots:!1,responsive:{0:{items:1},991:{items:4}}});document.querySelectorAll(".accordion__item--active").forEach(e=>{let t=e.querySelector(".accordion__collapse");t.style.height=t.scrollHeight+"px"});document.querySelectorAll(".accordion__button").forEach(e=>{e.addEventListener("click",t=>{let n=t.target,r=n.closest(".accordion"),o=n.closest(".accordion__item"),c=o.querySelector(".accordion__collapse"),a=r.querySelector(".accordion__item--active");a&&a!==o&&(a.classList.remove("accordion__item--active"),a.querySelector(".accordion__collapse").style.height=null),c.clientHeight?(c.style.height=0,o.classList.remove("accordion__item--active")):(c.style.height=c.scrollHeight+"px",o.classList.add("accordion__item--active"))})});$(".counter-box").length&&$(".counter-box").appear(function(){var e=$(this),t=e.find(".counter-number").attr("data-stop"),n=parseInt(e.find(".counter-number").attr("data-speed"),10);e.hasClass("counted")||(e.addClass("counted"),$({countNum:e.find(".counter-number").text()}).animate({countNum:t},{duration:n,easing:"linear",step:function(){e.find(".counter-number").text(Math.floor(this.countNum))},complete:function(){e.find(".counter-number").text(this.countNum)}}))},{accY:0});let l=document.querySelectorAll(".plyr");l.forEach(e=>{new Plyr(e,{captions:{active:!0,language:"en"},controls:["play-large","play","progress","current-time","mute","volume","captions","settings","airplay","fullscreen"]})});l.forEach(e=>{e.addEventListener("play",t=>{let n=t.target;l.forEach(r=>{r!==n&&r.pause()})})});
