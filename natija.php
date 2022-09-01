<?php
include "Mbbt.php";
$foy=$_SESSION['foy'];
$savol=$_SESSION['malumot_id'];
$origDate = date("y.m.d");
$date = str_replace('/', '-', $origDate );
$newDate = date("Y-m-d", strtotime($date));
$bugungi_sana=date("y.m.d");
/*$bilish=mysqli_fetch_array(mysqli_query($conn,"Select *from tests where Id='$savol'"));
$savol=mysqli_query($conn,"Select *from savollar where test_id='$savol' order by(Nomeri)");
while($savollar=mysqli_fetch_assoc($savol))
{
  $savollar_jadvali[]=$savollar;
}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="form-group">
<div class="container">

    <table class="table table-hover">
        <thead>
        <tr>
            <th>№</th>
            <th>Savol</th>
            <th>Javoblar</th>
        </tr>
        </thead>

        <tbody>
         <!-- <?/*foreach($savollar_jadvali as $bittasi) :?>
         <tr>
             <td>
               <?=$bittasi['Nomeri']?>
             </td>

             <td>
                 <?=$bittasi['savol']?>
             </td>

             <td>
              A) <b>  <?=$bittasi['a']?>   </b>
                 <br>
               B) <b> <?=$bittasi['b']?>           </b>
                 <br>
             C)  <b>  <?=$bittasi['c']?>               </b>
                 <br>

             D)  <b>  <?=$bittasi['d']?>                   </b>



             </td>


         </tr>
         <?endforeach*/?>
        </tbody>
    </table>-->
</div>
</div>
<?php

$fanras=$_SESSION['test'];
$raspisaniyabilish=mysqli_fetch_array(mysqli_query($conn,"Select *from raspisaniya where Id='$fanras'"));
$sinf=mysqli_fetch_array(mysqli_query($conn,"Select *from sinf where Id='$bilish[uchun]'"));
$sinf11=$_SESSION['sinf'];
$nomis11=$_SESSION['nomi'];
$i=1;
$sbilish=mysqli_query($conn,"Select *from raspisaniya where oqt='$foy' and fan='$raspisaniyabilish[fan]'");
while($rasq=mysqli_fetch_assoc($sbilish))
{

    $raspisaniya_jadvali[]=$rasq;
}

?>
<form action="biriktirish.php" method="post">
<?if(!empty($raspisaniya_jadvali))foreach($raspisaniya_jadvali as $bittasi ) :?>
<div class="container">
<div class="checkbox">
<?php
$sinfi=$_POST['sinf'];
$bilishras=mysqli_fetch_array(mysqli_query($conn,"Select *from sinf where Id='$bittasi[sinf]'"));
if(!($bilishras['nomer']==$sinf11 and $bilishras['nomi']==$nomis11) )
{
?>
   <label><input type="checkbox" name="<?="sinf".$i?>" value="<?=$bittasi[sinf]?>" >  <?=$bilishras['nomer']."-".$bilishras['nomi']?> <?}?>
<?$i++?>
</label>
</div>
</div>
 <?endforeach?>
<div class="container">
    <h2>Testni ishlash Vaqti</h2>

       <div class="col" >
        <div class="col-md-5">
            <label for="sanadan">Sanadan:</label>
            <input type="date" class="form-control" id="sanadan" name="sanadan" required="">
        </div>

        <div class="col-md-5">
            <label for="sanagacha">Sanagacha:</label>
            <input type="date" class="form-control" id="sanagacha" name="sanagacha" required="">
        </div>

       


       <div class="col-md-5">
            <label for="sanagacha"><h4>Urunishlar Soni</h4></label>
            <input type="number" class="form-control" id="sanagacha" name="urunish" required="">
            
            <br>


            <label for="sanagacha"><h4>Ishlash Vaqti (Minutda)</h4></label>
            <input type="number" class="form-control" id="sanagacha" name="vaqti" required="">
            
            <br>

            <label for="sanagacha"><h4>Testlar soni</h4></label>
            <input type="number" class="form-control" id="sanagacha" name="soni" required="">
            
            <br>

            <button type="submit" class="btn btn-success">Saqlash</button>
        </div>

</div>

<p></p>
<p></p>
<p></p>
    
    


    </form>
</body>
</html>
