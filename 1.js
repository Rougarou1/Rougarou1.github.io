     var s=00
     var m=02
     var h=00
     var r=0; var tt=0;
    function T()
    {s-=1;
     if(s<0) s=59,m-=1;
     if(m<0) m=59,h-=1;   
     if(h<0) h=23     
     if(s+m+h==0)T3()       
     s = s+"";
     m = m+"";
     h = h+""; 
     if (s.length<2) s = "0"+s;
     if (m.length<2) m = "0"+m;
     if (h.length<2) h = "0"+h;
     tm.innerHTML=h+":"+m+":"+s }        
    function Pusk()
        {if(!r){r=1;T2()}}
    function T2() 
        {if(s+m+h==0)s=00,m=02,h=00;
        tt=setInterval("T()",1000)}             
    function T3()
        {clearInterval(tt);r=0} 

         
document.getElementById('result').onclick = getResult;

getResult();

function getResult(){

    var menu = document.getElementsByClassName('menu');
    var kkal = 0;
    var protein = 0;
    var fats = 0;
    var carbs = 0;
    var sel = document.getElementById('Count').selectedIndex + 1;

	t1 = 1; t2 = 2; t3 = 3; t4 = 4;
	t5 = 5;
    for (var i=0; i<menu.length; i++){
        if (menu[i].checked) {
            kkal += parseFloat(menu[i].getAttribute('data-kkal'));
            protein += parseFloat(menu[i].getAttribute('data-protein'));
            fats += parseFloat(menu[i].getAttribute('data-fats'));
            carbs += parseFloat(menu[i].getAttribute('data-carbs'));
        }
    }
    document.getElementById('kkal').innerHTML = kkal*sel.toFixed(1);
    document.getElementById('protein').innerHTML = protein*sel.toFixed(1);
    document.getElementById('fats').innerHTML = fats*sel.toFixed(1);
    document.getElementById('carbs').innerHTML = carbs*sel.toFixed(1);
}



function fun1(){
	var n1, n2, n3, sel, result ;
	n1 = document.getElementById('num1').value;
	n1 = parseInt(n1);

	n2 = document.getElementById('num2').value;
	n2 = parseInt(n2);

	n3 = document.getElementById('num3').value;
	n3 = parseInt(n3);
	
	sel = document.getElementById('MySelect').selectedIndex;

	v1 = 1.2; v2 = 1.375; v3 = 1.55; v4 = 1.725;
	v5 = 1.9;

	result = 88.36+(n3 * 13.4) + (n2 * 4.8) - (n1 * 5.7)*sel ;

	result.toFixed(1); 

	document.getElementById('out').innerHTML = result.toFixed(1) 	 + ' Калорий';
}
function fun2(){
	var n1, n2, n3, sel, result;
	n1 = document.getElementById('num1').value;
	n1 = parseInt(n1);

	n2 = document.getElementById('num2').value;
	n2 = parseInt(n2);

	n3 = document.getElementById('num3').value;
	n3 = parseInt(n3);

	sel = document.getElementById('MySelect').selectedIndex;

	v1 = 1.2; v2 = 1.375; v3 = 1.55; v4 = 1.725;
	v5 = 1.9;

	result = 447.6+(n3 * 9.2) + (n2 * 3.1) - (n1 * 4.3);

	result.toFixed(1); 

	document.getElementById('out').innerHTML = result.toFixed(1) + ' Калорий';
}
function fun3(){
	var n1, n2, n3, sel, result ;
	n1 = document.getElementById('num1').value;
	n1 = parseInt(n1);

	n2 = document.getElementById('num2').value;
	n2 = parseInt(n2);

	n3 = document.getElementById('num3').value;
	n3 = parseInt(n3);
	
	sel = document.getElementById('MySelect').selectedIndex;

	v1 = 1.2; v2 = 1.375; v3 = 1.55; v4 = 1.725;
	v5 = 1.9;

	result = 88.36+(n3 * 13.4) + (n2 * 4.8) - (n1 * 5.7)*sel - 500 ;

	result.toFixed(1); 

	document.getElementById('out').innerHTML = result.toFixed(1) 	 + ' Калорий';
}
function fun4(){
	var n1, n2, n3, sel, result ;
	n1 = document.getElementById('num1').value;
	n1 = parseInt(n1);

	n2 = document.getElementById('num2').value;
	n2 = parseInt(n2);

	n3 = document.getElementById('num3').value;
	n3 = parseInt(n3);
	
	sel = document.getElementById('MySelect').selectedIndex;

	v1 = 1.2; v2 = 1.375; v3 = 1.55; v4 = 1.725;
	v5 = 1.9;

	result = 88.36+(n3 * 13.4) + (n2 * 4.8) - (n1 * 5.7)*sel + 400 ;

	result.toFixed(1); 

	document.getElementById('out').innerHTML = result.toFixed(1) 	 + ' Калорий';
}
               


