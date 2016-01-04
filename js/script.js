function clean(node)
{
  for(var n = 0; n < node.childNodes.length; n ++)
  {
    var child = node.childNodes[n];
    if
    (
      child.nodeType === 8 
      || 
      (child.nodeType === 3 && !/\S/.test(child.nodeValue))
    )
    {
      node.removeChild(child);
      n --;
    }
    else if(child.nodeType === 1)
    {
      clean(child);
    }
  }
}

clean(document);
	
//script google Analytics
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-47890565-1', 'le-timsam.com');
ga('send', 'pageview');

//menu déroulant mobile:
var ul=document.querySelector('#mainNav #navigation');
var declencheurMobile=document.querySelector('#mainNav #navigationMobile a');
var mobile=document.querySelector('#mainNav #navigationMobile');

menu();
window.addEventListener("resize", menu);

function menu(){
	if(window.matchMedia("(max-width:600px)").matches) {
		basseRez();
	}
	else
		normalRez();
}

function normalRez(){
	declencheurMobile.textContent = "Menu  ";
	mobile.style.display = "none";
	ul.style.display = "flex";
}

function basseRez(){
	ul.style.display = "none";
	mobile.style.display = "flex";
	declencheurMobile.textContent = "Menu  ▼";
	declencheurMobile.addEventListener("click", derouler, false);
}

function derouler(ev){
	ev.preventDefault();
	ul.style.display = "flex";
	declencheurMobile.textContent = "Menu  ▲";
	declencheurMobile.addEventListener('click', renrouler, false);
	return;
}
function renrouler(ev){
	ev.preventDefault();
	ul.style.display = "none";
	declencheurMobile.removeEventListener("click", renrouler);
	declencheurMobile.textContent = "Menu  ▼";
	return;
}
