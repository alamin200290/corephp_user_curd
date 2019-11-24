"use strict"
	
	
/*	a =10;
	b =30;
*/
/*	var c =10;
	var d =20;

	let e =20;
	let f=40;*/

/*	var std = ['abc', 'xyz', 'pgr'];
	var course = "webtach";
	var d = null;
	var num = 50;
*/
/*	function sum(a, b){
		return 10;
	}

	var f1 = function (){
		return 10;
	}

	f1();*/
	//console.log('testing from html page');
	//document.write('testing from javascript');
	//alert('test');

	//var obj = document.getElementsByTagName('h1')[0];
		//console.log(obj.innerHTML); 
		//alert(obj.innerHTML);

	//var obj = document.getElementById('h1');
	//alert(obj.innerHTML);


	function f1(){
		var nameEl = document.getElementById('name');
		
		if(nameEl.value == ""){

			var obj = document.getElementById('msg');
			obj.innerHTML = "null submission";
			obj.style.color = "red";
		}
	}

	function f2(){
		var name = document.getElementById('name').value;
		document.getElementById('msg').innerHTML = name;
	}

	function f3(){

		//alert('test');
		setTimeout(f5, 1000);
		setTimeout(f6, 2000);
		setTimeout(f5, 3000);
		setTimeout(f6, 4000);
		setTimeout(f5, 5000);
		setTimeout(f6, 6000);
	}

	function f5(){
		//alert('called');
		var obj = document.getElementById('d1'); 
		obj.style.backgroundColor = "blue";
	}

	function f6(){
		//alert('called');
		var obj = document.getElementById('d1'); 
		obj.style.backgroundColor = "red";
	}

	


