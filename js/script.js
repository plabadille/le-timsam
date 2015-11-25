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

var ul1=document.querySelector('#mainNav .navigation li:nth-child(2) ul');
var ul2=document.querySelector('#mainNav .navigation li:nth-child(3) ul');
var ul3=document.querySelector('#mainNav .navigation li:nth-child(4) ul');

var a2=document.querySelector('#mainNav .navigation li:nth-child(2) a');
var a3=document.querySelector('#mainNav .navigation li:nth-child(3) a');
var a4=document.querySelector('#mainNav .navigation > li:nth-child(4) a');

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
	a2.textContent = "Services";
	a3.textContent = "Produits";
	a4.textContent = "Animations";
	a2.removeEventListener("click", derouler1, false);
	a3.removeEventListener('click', derouler2, false);
	a4.removeEventListener('click', derouler3, false);
	a2.removeEventListener("click", renrouler1, false);
	a3.removeEventListener('click', renrouler2, false);
	a4.removeEventListener('click', renrouler3, false);
	ul1.style.display = "initial";
	ul2.style.display = "initial";
	ul3.style.display = "initial";
}

function basseRez(){
	ul1.style.display = "none";
	ul2.style.display = "none";
	ul3.style.display = "none";

	a2.textContent = "Services ▼";
	a3.textContent = "Produits ▼";
	a4.textContent = "Animations ▼";

	a2.addEventListener("click", derouler1, false);
	a3.addEventListener('click', derouler2, false);
	a4.addEventListener('click', derouler3, false);
}

function derouler1(ev){
	ev.preventDefault();
	ul1.style.display = "initial";
	a2.textContent = "Services ▲";
	a2.addEventListener('click', renrouler1, false);
	return;
}
function renrouler1(ev){
	ev.preventDefault();
	ul1.style.display = "none";
	a2.removeEventListener("click", renrouler1);
	a2.textContent = "Services ▼";
	return;
}

function derouler2(ev){
	ev.preventDefault();
	ul2.style.display = "initial";
	a3.textContent = "Produits ▲";
	a3.addEventListener('click', renrouler2, false);
	return;
}
function renrouler2(ev){
	ev.preventDefault();
	ul2.style.display = "none";
	a3.removeEventListener("click", renrouler2);
	a3.textContent = "Produits ▼";
	return;
}

function derouler3(ev){
	ev.preventDefault();
	ul3.style.display = "initial";
	a4.textContent = "Animations ▲";
	a4.addEventListener('click', renrouler3, false);
	return;
}
function renrouler3(ev){
	ev.preventDefault();
	ul3.style.display = "none";
	a4.removeEventListener("click", renrouler3);
	a4.textContent = "Animations ▼";
	return;
}