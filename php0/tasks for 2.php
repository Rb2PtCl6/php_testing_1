
<!--after part 2 -->
<?php 
print 'How are you?';
print '<br>';
print 'I\'m fine.';
print '<br>';
?>
<?php 
$ham=4.95;
$coct=1.95;
$cola=0.85;
$nds=0.075;
$twt=0.16;
printf('Гамбергер: $%.2f.Коктель: $%.2f.Кола: $%.2f.Общая стимость без налогов: $%.2f.Общая стоимость с налогами: $%.2f',$ham*2,$coct,$cola,($ham*2)+$coct+$cola,(($ham*2)+$coct+$cola)*(1+$nds));
print '<br>';
?>
<?php 
$first_name= 'Егор';
$last_name= 'Жанов';
$name="$first_name $last_name";
$tfn=strlen($name);
$out1='Names: '.$name.' Strlen:'.$tfn.'<br>';
print $out1;
?>
<?php 
$bnm=1;
print '<br>';
print $bnm++;
print '<br>';
print $bnm++;
print '<br>';
print $bnm++;
print '<br>';
print $bnm++;
print '<br>';
print $bnm++;
print '<br>';
print '<br>';
print $bnm2=2;
print '<br>';
print $bnm2*=2;
print '<br>';
print $bnm2*=2;
print '<br>';
print $bnm2*=2;
print '<br>';
print $bnm2*=2;
print '<br>';
?>