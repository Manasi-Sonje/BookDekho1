<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$err1="";

if(isset($_POST['sbm']))
{
    $fl=0;
if(empty($_POST['title']))
{
$err1="<font color=red>title must exist</font>";
$fl=1;
}
}
?>
<body>
    <form method="post" action="hello.php">
    <tr>
<td>Title</td>
<td>
<input type=text name=title class="login__input"><?php echo $err1; ?></td>
</tr>
    <td>Quality Factors</td>
<td>
<input type="checkbox" name="quality[]" value="First hand" >First hand<br>
<input type="checkbox" name="quality[]" value="B" >No missing Pages<br>
<input type="checkbox" name="quality[]" value="C" >No torn Pages<br>
<input type="checkbox" name="quality[]" value="D" >No Writing on Pages<br>
<input type="checkbox" name="quality[]" value="E" >Latest edition<br>
</td>
<input type=Submit class="btn btn-primary py-2 px-4 ms-3" name=sbm value=Submit >
    </form>
</body>
</html>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
if(isset($_POST['sbm']))
{
    if($_POST['sbm']=="Submit" && $fl==0)
{
    echo "After submit<br>";
if($_POST['sbm']=="Submit")
{
    echo "in submit";
    $checkbox1=$_POST['quality'];  
    $chk="";  
    foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
// $N = count($_POST['quality']);
//     $quality1 = " ";
//     for($i=0; $i < $N; $i++)
//     {
//         $quality1 =  $quality1 + "," + IsChecked('quality','A') ? "First hand" : "," ;
//         $quality1 =  $quality1 + "," + IsChecked('quality','B') ? "No missing Pages" : "," ;
//         $quality1 =  $quality1 + "," + IsChecked('quality','C') ? "No torn Pages" : "," ;
//         $quality1 =  $quality1 + "," + IsChecked('quality','D') ? "No Writing onn Pages" : "," ;
//         $quality1 =  $quality1 + "," + IsChecked('quality','E') ? "Latest edition" : "," ;
    
//     }
    echo $chk;
}
}
}
?>