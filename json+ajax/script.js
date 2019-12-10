"use strict"

function ajax(){

		var json ={
			'id': '134',
			'name': 'abc',
			'dept': 'CS'
		};

		var data  = JSON.stringify(json);
		var xhttp = new XMLHttpRequest();
		xhttp.open("GET", "abc.php?val="+data, true);
		xhttp.send();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			 	var obj = JSON.parse(this.responseText);
			 	alert(obj.id);
			 	//var obj = this.responseText;
			 	//alert(obj.id);
			}
		};
}