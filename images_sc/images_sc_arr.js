var f_r='images_sc/full/img';
var t_r='images_sc/thumb/img';
var exP='.png';
var fullarr=new Array;
var thumbarr=new Array;
for (var i=0;i<20;i++){
    fullarr[i]=new Image;
    fullarr[i].src=f_r+i+exP;
};
for (var p=0;p<20;p++){
    thumbarr[p]=new Image;
    thumbarr[p].src=t_r+p+exP;
};