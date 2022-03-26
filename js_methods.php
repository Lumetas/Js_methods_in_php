<script>!function(e){"use strict";function t(e,t,n,r,i){if((n=n.toUpperCase()).length<24){var s=Math.max(0,n.length-12);o(e,70+-3*s,n,r/2,i)}else if(n.length<29)o(e,40,n,r/2,i);else{var h=function(e,t){for(var o=[],n=e.split(" "),r=[],i=0,s=n.length;i<s;i++)(r+n[i]).length<t?r.push(n[i]):(o.push(r.join(" ")),r.length=0,r.push(n[i]));return o.push(r.join(" ")),o}(n,27);h.forEach(function(n,s){o(e,40,n,r/2,"lower"==t?i-40*(h.length-1)+40*s:i+40*s)})}}function o(e,t,o,n,r){e.font="bold "+t+"px Impact",e.fillStyle="#fff",e.textAlign="center",e.textBaseline="middle",e.lineWidth=7,e.strokeStyle="#000",e.strokeText(o,n,r),e.fillText(o,n,r)}e.meme=function(o,n,r,i,s){if(o||e.error("Yo, you forgot the text for the upper part of the meme. The bit at the top. Yeah, that bit."),n||e.error("You forgot the text for the bottom of the meme, stupid."),r||e.error("Dude, you forgot the meme type or url for the background image (CORS enabled, *hint* imgur *hint*). To see a list of supported memes, hit `console.meme()`"),!o&&!n&&!r)return e.log("> "+Object.keys(memes).join("\n> "));var h=document.createElement("canvas"),a=h.getContext("2d"),l=(s=(i=i||500)||500,new Image);if(l.setAttribute("crossOrigin","anonymous"),l.onload=function(){h.width=i,h.height=s;o.toUpperCase();a.scale(i/500,s/500),a.drawImage(this,0,0,500,500),t(a,"upper",o,500,50),t(a,"lower",n,500,450),e.image(h.toDataURL())},memes[r])var f=memes[r];else f=r;l.src=f},e.image=function(t,o){o=o||1;var n=new Image;n.onload=function(){var n,r,i=(n=this.width*o,r=this.height*o,{string:"+",style:"font-size: 1px; padding: "+Math.floor(r/2)+"px "+Math.floor(n/2)+"px;"});e.log("%c"+i.string,i.style+"background: url("+t+"); background-size: "+this.width*o+"px "+this.height*o+"px; color: transparent;")},n.src=t}}(console);</script><?php function consoleImage($val, $val1){echo "<script>console.image('$val', '$val1');</script>";} function consoleLog($val){echo "<script>console.log('$val');</script>";} function consoleClear(){echo "<script>console.clear();</script>";} function consoleError($val){echo "<script>console.error('$val');</script>";} function consoleInfo($val){echo "<script>console.info('$val');</script>";} function consoleTime($val){echo "<script>console.time('$val');</script>";} function consoleTimeEnd($val){echo "<script>console.timeEnd('$val');</script>";} function consoleWarn($val){echo "<script>console.warn('$val');</script>";} function alert($val){echo "<script>alert($val);</script>";} function JS($val){echo "<script>$val</script>";} 
/*
Все методы идентичны методам в JavaScript за исключением названия, например вместо console.log() используется consoleLog();
Список методов: 
consoleImage(); Принимает 2 аргумента ссылка на картинку(удалённую) и размер.
consoleLog(); 
consoleClear(); 
consoleError();
consoleInfo();
consoleTime();
consoleTimeEnd();
consoleWarn();
alert();
JS(); Выполняет произвольный JS код, можно использовать 

<<<OUT
code
OUT;

Для удобного написания крупных кусков js кода.
*/
?>