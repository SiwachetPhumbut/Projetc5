<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
  <div align="center">
  <div class="s-content s-content-cal">
  
  
	<div class="section section-s1">
		<div class="b-single-content">
			<div class="item-content content-style">
				<div class="col-618">
					<h1 class = pt-3>การหาค่าดัชนีมวลกาย (Body Mass Index : BMI) </h1>
                    <form class="row pt-3"  method="get" action="Ex7.php">
				</div>

				<div class="col-100 col-100fw">
					<div class="b-cal b-cal-bmi">								
						<div class="col-480">
							<div class="b-form">
								<div class="field-block">
									<label for="field-mass">น้ำหนักตัว (kg.)</label>
									<input type="number" name="mass" placeholder="" id="field-mass" class="field-text" />
								</div>
								<div class="field-block">
									<label for="field-height">ส่วนสูง (cm.)</label>
									<input type="number" name="height" placeholder="" id="field-height" class="field-text" />
                                    </tr>
								</div>

								<div class="b-btn">										
									<a href="#" class="bmi-cal-btn cal-btn">
										<span>คำนวณ</span><i class="material-icons"></i>
									</a>
								</div>

								<div class="b-cal-result bmi-result">
									<div class="inner">
										<p class="result-text">BMI</p>
										<p class="bmi-value result-value" data-bmi="0">0</p>
									</div>
								</div>
									
							</div>
						</div>
					</div>
				</div>

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
        </form>
    </div>
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
 
</div>
</body>
</html>