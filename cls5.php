<?php

$x='Iffat,orpa, rumi';
echo $x;
echo'</br>';
$name='<h1>juma, rumi pal,aniha,ferdos</h2>';
echo htmlentities($name);
echo'</br>';

$link=htmlentities("<a href='instragram'>instragram</a>");
echo html_entity_decode($link);
echo"</br>";
$link=htmlentities("<b href='facebook'>facebook</b>");
echo html_entity_decode($link);
echo"</br>";

$name1="juma";
$name2="isfat";
echo'<pre>';
echo str_repeat($name1,3);
echo'</pre>';
echo str_repeat($name2,3);
echo"</br>";

$file='';
echo empty($file);
$address= 'kaptai,rangamati';
var_dump(empty($address));
echo '</br>';

$name="iffat";
echo isset($name);

$str ="My favorite color is black.";

print_r(explode(",",$str));
echo'</br>';

$address = array('khulna','cumilla','rangamati','borishal');
echo end($address);echo'</br>';
var_dump(end($address));
echo'</br>';
$array= 
['my',
'name',
'is',
'iffat',

];
var_dump(implode('.',$array));
echo'</br>';
$email='iffat.bd@gamil.com';
$emailbd= explode('.',$email);
print_r($emailbd);echo'<br/>';
if($emailbd[1]=='iffat'){
    echo'great';

}
else{
    echo'was not correct';
}