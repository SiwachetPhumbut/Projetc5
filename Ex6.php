<!doctype html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>
    <div class="p-3 mb-2 bg-success text-white">
  
</style></head>

<body>
<div align="center">


    <form action="Ex6.php" method="post">
<table width="600"  border border-5  ></span> 
<tr>
      <td colspan="2">
      <div align="center"><p class="text-danger"><h2>โปรแกรมคำนวณหาค่าดัชนีมวลกาย(BMI)</p></h2></div></td>
  </tr>
  
    <tr>
      <td width="200"><div align="right">น้ำหนัก : </div></td>
      <td width="212"><input type="text" name="weight" size="20" maxlength="100" />กิโลกรัม</td>
    </tr>
    <tr>
      <td><div align="right">ส่วนสูง : </div></td>
      <td><input type="text" name="height" size="20" maxlength="100" value="" />ซ.ม.</td>
    </tr>     
    <tr>
    
      <td colspan="2"> <div align="center"><input type="submit" value="คำนวณ" /></div></td>
    </tr>
    <tr>
      
  </table>
<div align="center"></div>
</body>
</html>




  <?php
  $weight=$_POST['weight'];
  $height=$_POST ['height'] ;

  $height=$height/100;
 
  $bmi=$weight/($height*$height);
 
 
  if($bmi<=18.50){
       $c="น้ำหนักน้อย / ผอม";
       $s="มากกว่าคนปกติ";
  }else if($bmi>18.50 && $bmi<22.90){
       $c="ปกติ (สุขภาพดี)";   
       $s="เท่าคนปกติ";
  }else if($bmi>23 && $bmi<24.90){
       $c="ท้วม / โรคอ้วนระดับ 1";   
       $s="อันตรายระดับ 1";
  }else if($bmi>25 && $bmi<29.90){
       $c="อ้วน / โรคอ้วนระดับ 2";   
       $s="อันตรายระดับ 2";
  }else if($bmi>30){
       $c="อ้วนมาก / โรคอ้วนระดับ 3";
       $s="อันตรายระดับ 3";   
  }
   ?>
   
   
   <p align="center">
   <b>BMI : </b><?php echo $bmi;?> <br /><br />
   <b>อยู่ในเกณท์ : </b><?php echo $c;?><br /><br />
   <b>ภาวะเสี่ยงต่อโรค : </b><?php echo $s;?>
   
   </p>   
   <div class="col-618">
					<table class="bmi-table" id="bmi-result-table">
						<tbody>
							<tr>
								<th class="first"><strong>BMI kg/m<sup>2</sup></strong></th>
								<th><strong>อยู่ในเกณท์</strong></th>
								<th class="last"><strong>ภาวะเสี่ยงต่อโรค</strong></th>
							</tr>
							<tr>
								<td class="first"><span>น้อยกว่า 18.50</span></td>
								<td><span>น้ำหนักน้อย / ผอม</span></td>
								<td class="last"><span>มากกว่าคนปกติ</span></td>
							</tr>
							<tr>
								<td class="first"><span>ระหว่าง 18.50 - 22.90</span></td>
								<td><span>ปกติ (สุขภาพดี)</span></td>						
								<td class="last"><span>เท่าคนปกติ</span></td>
							</tr>
							<tr>
								<td class="first"><span>ระหว่าง 23 - 24.90</span></td>
								<td><span>ท้วม / โรคอ้วนระดับ 1</span></td>	
								<td class="last"><span>อันตรายระดับ 1</span></td>					
							</tr>
							<tr>
								<td class="first"><span>ระหว่าง 25 - 29.90</span></td>
								<td><span>อ้วน / โรคอ้วนระดับ 2</span></td>
								<td class="last"><span>อันตรายระดับ 2</span></td>
							</tr>
							<tr>
								<td class="first"><span>มากกว่า 30</span></td>
								<td><span>อ้วนมาก / โรคอ้วนระดับ 3</span></td>	
								<td class="last"><span>อันตรายระดับ 3</span></td>					
							</tr>
						</tbody>
					</table>
                    </div>
</div>
</body>
</html>