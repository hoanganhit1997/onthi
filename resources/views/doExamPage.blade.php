
@extends('Template/exam')
	<?php foreach($data[0] as $row){ ?>
@section('Ques0')

  			<h3>
				Câu 1<?php foreach($row as $key => $val){
						if($key =="question") echo (':  '.$val);}?>
			</h3>
@stop         
@section('answ01')

	<?php  foreach($row as $key => $val){
			if ($key == "c0") echo ($val);}?>
@stop
@section('answ02')
	<?php  foreach($row as $key => $val){
			if ($key == "c1") echo ($val);}?>
@stop
@section('answ03')
	<?php  foreach($row as $key => $val){
			if ($key == "c2") echo ($val);}?>
@stop
	
<?php  }
	 foreach($data[1] as $row){
?>


@section('Ques1')
  			<h3>
				Câu 2<?php foreach($row as $key => $val){
							if($key =="question") echo (':  '.$val);}?>
			</h3>
@stop         
@section('answ11')
	<?php  foreach($row as $key => $val){
			if ($key == "c0") echo ($val);}?>
@stop
@section('answ12')
	<?php  foreach($row as $key => $val){
			if ($key == "c1") echo ($val);}?>
@stop
@section('answ13')
	<?php  foreach($row as $key => $val){
			if ($key == "c2") echo ($val);}?>
@stop

<?php  }
	 foreach($data[2] as $row){
?>
@section('Ques2')
  			<h3>
				Câu 3<?php foreach($row as $key => $val){
							if($key =="question") echo (':  '.$val);}?>
			</h3>
@stop         
@section('answ21')
	<?php  foreach($row as $key => $val){
			if ($key == "c0") echo ($val);}?>
@stop
@section('answ22')
	<?php  foreach($row as $key => $val){
			if ($key == "c1") echo ($val);}?>
@stop
@section('answ23')
	<?php  foreach($row as $key => $val){
			if ($key == "c2") echo ($val);}?>
@stop

<?php  }
	 foreach($data[3] as $row){
?>
@section('Ques3')
  			<h3>
				Câu 4<?php foreach($row as $key => $val){
							if($key =="question") echo (':  '.$val);}?>
			</h3>
@stop         
@section('answ31')
	<?php  foreach($row as $key => $val){
			if ($key == "c0") echo ($val);}?>
@stop
@section('answ32')
	<?php  foreach($row as $key => $val){
			if ($key == "c1") echo ($val);}?>
@stop
@section('answ33')
	<?php  foreach($row as $key => $val){
			if ($key == "c2") echo ($val);}?>
@stop

<?php  }
	 foreach($data[4] as $row){
?>
@section('Ques4')
  			<h3>
				Câu 5<?php foreach($row as $key => $val){
							if($key =="question") echo (':  '.$val);}?>
			</h3>
@stop         
@section('answ41')
	<?php  foreach($row as $key => $val){
			if ($key == "c0") echo ($val);}?>
@stop
@section('answ42')
	<?php  foreach($row as $key => $val){
			if ($key == "c1") echo ($val);}?>
@stop
@section('answ43')
	<?php  foreach($row as $key => $val){
			if ($key == "c2") echo ($val);}?>
@stop

<?php  }
	 foreach($data[5] as $row){
?>
@section('Ques5')
  			<h3>
				Câu 6<?php foreach($row as $key => $val){
							if($key =="question") echo (':  '.$val);}?>
			</h3>
@stop         
@section('answ51')
	<?php  foreach($row as $key => $val){
			if ($key == "c0") echo ($val);}?>
@stop
@section('answ52')
	<?php  foreach($row as $key => $val){
			if ($key == "c1") echo ($val);}?>
@stop
@section('answ53')
	<?php  foreach($row as $key => $val){
			if ($key == "c2") echo ($val);}?>
@stop

<?php  }
	 foreach($data[6] as $row){
?>
@section('Ques6')
  			<h3>
				Câu 7<?php foreach($row as $key => $val){
							if($key =="question") echo (':  '.$val);}?>
			</h3>
@stop         
@section('answ61')
	<?php  foreach($row as $key => $val){
			if ($key == "c0") echo ($val);}?>
@stop
@section('answ62')
	<?php  foreach($row as $key => $val){
			if ($key == "c1") echo ($val);}?>
@stop
@section('answ63')
	<?php  foreach($row as $key => $val){
			if ($key == "c2") echo ($val);}?>
@stop

<?php  }
	 foreach($data[7] as $row){
?>
@section('Ques7')
  			<h3>
				Câu 8<?php foreach($row as $key => $val){
							if($key =="question") echo (':  '.$val." <br>");
                            if($key =="img_src") {?> <img src = " <?php echo "pictures/".$val?>"  alt ="" /><?php }}?>
			</h3>
@stop         
@section('answ71')
	<?php  foreach($row as $key => $val){
			if ($key == "c0") echo ($val);}?>
@stop
@section('answ72')
	<?php  foreach($row as $key => $val){
			if ($key == "c1") echo ($val);}?>
@stop
@section('answ73')
	<?php  foreach($row as $key => $val){
			if ($key == "c2") echo ($val);}?>
@stop

<?php  }
	 foreach($data[8] as $row){
?>
@section('Ques8')
  			<h3>
				Câu 9<?php foreach($row as $key => $val){
							if($key =="question") echo (':  '.$val." <br>");
                            if($key =="img_src") {?> <img src = " <?php echo "pictures/".$val?>"  alt ="" /><?php }}?>
			</h3>
@stop         
@section('answ81')
	<?php  foreach($row as $key => $val){
			if ($key == "c0") echo ($val);}?>
@stop
@section('answ82')
	<?php  foreach($row as $key => $val){
			if ($key == "c1") echo ($val);}?>
@stop
@section('answ83')
	<?php  foreach($row as $key => $val){
			if ($key == "c2") echo ($val);}?>
@stop

<?php  }
	 foreach($data[9] as $row){
?>
@section('Ques9')
  			<h3>
				Câu 10<?php foreach($row as $key => $val){
							if($key =="question") echo (':  '.$val." <br>");
                            if($key =="img_src") {?> <img src = " <?php echo "pictures/".$val?>"  alt ="" /><?php }}?>
			</h3>
@stop         
@section('answ91')
	<?php  foreach($row as $key => $val){
			if ($key == "c0") echo ($val);}?>
@stop
@section('answ92')
	<?php  foreach($row as $key => $val){
			if ($key == "c1") echo ($val);}?>
@stop
@section('answ93')
	<?php  foreach($row as $key => $val){
			if ($key == "c2") echo ($val);}?>
@stop
<?php  }
	 
?>
			