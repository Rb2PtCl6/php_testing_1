 var f="images/";
 var fG = new Array;
 for (var i=0; i<6; i++) {
 fG[i]=f+"images"+i+"/"; 
 }
 foto = new Array (100); 

 for (var i=0; i<6; i++) {
 foto[i] = new Array(10); 
  for (var j=0; j<10; j++) {
	foto[i][j] = new Image;	
	foto[i][j].src=fG[i]+"image0"+j+".jpg"	
		}
}
//-------------------------------

var w=document.documentElement.clientWidth; // ширина экрана
var h=document.documentElement.clientHeight; //высота экрана
var wT;
if (w>1200) wT=1200 //ширина сайта
else wT=w;
var wC=wT*0.7;           //ширина центра сайта
var hC=h*0.7;			//высота центра сайта
var wh;
	if (wC>hC) wh=hC; //определяем максимальный размер квадратного DIV в центре
	else wh=wC;
var hH=h*0.15;// высота TD.header и TD.footer 
