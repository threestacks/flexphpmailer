/* Author:Anirudh Varma
	* This project is an opensource library available on GitHub
	* Free to use and contribute
*/

function createDomString(elem){
	var elemString;var nameVal;var elemNameArray=new Array();var val;
	elem.children().each(function(){
		if($(this).is("empty")){
			val="empty";
		nameVal=$(this).attr("name") + "," +val;
		elemNameArray.push(nameVal);
		}
		else{
		nameVal=$(this).attr("name") + "," +$(this).val();
		elemNameArray.push(nameVal);
		}	
	});
var string='';
	for(var i=0;i<elemNameArray.length;i++){
		string=string + elemNameArray[i]+";";
		
	}
	return string;
}
