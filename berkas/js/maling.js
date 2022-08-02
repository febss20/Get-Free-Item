var txt="FREE FIRE EVENT";
var kecepatan=0;var segarkan=null;function berhenti() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
segarkan=setTimeout("behenti()",kecepatan);}berhenti();
	document.addEventListener("contextmenu", function(e){ e.preventDefault(); }, false);
	document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 83 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            window.location.replace("index.html");
            return false;
        } else {
            return true;
        }
};
window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}