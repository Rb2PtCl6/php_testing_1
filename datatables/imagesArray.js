var arrOfImg=new Array;
var arrId;
var j1;
for (var j=0;j<60;j++){
    arrOfImg[j]=new Image;
    if (j<10){
        arrId=0;
        j1=j;
    }
    else if (j>9 && j<20) {
        arrId=1;
        j1=j-10;
    }
    else if (j>19 && j<30) {
        arrId=2;
        j1=j-20;
    }
    else if (j>29 && j<40) {
        arrId=3;
        j1=j-30;
    }
    else if (j>39 && j<50){
        arrId=4;
        j1=j-40;
    }
    else {
        arrId=5;
        j1=j-50;
    }
    arrOfImg[j].src=foto[arrId][j1].src;
    arrOfImg[j].id=j+1;
    arrOfImg[j].alt='image0'+j1+'.jpg';
    arrOfImg[j].group_id='images'+arrId;
    arrOfImg[j].image='<center><a data-lightbox="roadtip0" data-title="images'+arrId+'/image0'+j1+'.jpg" href="'+foto[arrId][j1].src+'"><img  src="'+foto[arrId][j1].src+'" style="width:80px"></a></center>'//'<center><img src="'+foto[arrId][j1].src+'" style="width:80px"></center>'
}