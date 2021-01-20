<?
$data = array(
array('ID'=>100, 'PARENT_ID' => 0, 'NAME'=> 'Пункт 1',),
array('ID'=>2, 'PARENT_ID' => 0, 'NAME'=> 'Пункт 2',),
array('ID'=>3, 'PARENT_ID' => 0, 'NAME'=> 'Пункт 3',),
array('ID'=>4, 'PARENT_ID' => 0, 'NAME'=> 'Пункт 4',),
array('ID'=>52, 'PARENT_ID' => 100, 'NAME'=> 'Пункт 1.1',),
array('ID'=>6, 'PARENT_ID' => 100, 'NAME'=> 'Пункт 1.2',),
array('ID'=>7, 'PARENT_ID' => 100, 'NAME'=> 'Пункт 1.3',),
array('ID'=>8, 'PARENT_ID' => 100, 'NAME'=> 'Пункт 1.4',),
array('ID'=>9, 'PARENT_ID' => 52, 'NAME'=> 'Пункт 1.1.1',),
array('ID'=>10, 'PARENT_ID' => 52, 'NAME'=> 'Пункт 1.1.2',),
array('ID'=>11, 'PARENT_ID' => 52, 'NAME'=> 'Пункт 1.1.3',),
array('ID'=>12, 'PARENT_ID' => 52, 'NAME'=> 'Пункт 1.1.4',),
array('ID'=>13, 'PARENT_ID' => 9, 'NAME'=> 'Пункт 1.1.1.1',),
array('ID'=>14, 'PARENT_ID' => 9, 'NAME'=> 'Пункт 1.1.1.2',),
array('ID'=>15, 'PARENT_ID' => 9, 'NAME'=> 'Пункт 1.1.1.3',),
array('ID'=>16, 'PARENT_ID' => 9, 'NAME'=> 'Пункт 1.1.1.4',),
array('ID'=>87, 'PARENT_ID' => 2, 'NAME'=> 'Пункт 2.1',),
array('ID'=>18, 'PARENT_ID' => 2, 'NAME'=> 'Пункт 2.2',),
array('ID'=>19, 'PARENT_ID' => 3, 'NAME'=> 'Пункт 3.1',),
array('ID'=>20, 'PARENT_ID' => 3, 'NAME'=> 'Пункт 3.2',),
array('ID'=>21, 'PARENT_ID' => 4, 'NAME'=> 'Пункт 4.1',),
array('ID'=>22, 'PARENT_ID' => 4, 'NAME'=> 'Пункт 4.2',),
array('ID'=>23, 'PARENT_ID' => 87, 'NAME'=> 'Пункт 2.1.1',),
array('ID'=>24, 'PARENT_ID' => 87, 'NAME'=> 'Пункт 2.1.2',),
array('ID'=>25, 'PARENT_ID' => 23, 'NAME'=> 'Пункт 2.1.1.1',),
array('ID'=>26, 'PARENT_ID' => 23, 'NAME'=> 'Пункт 2.1.1.2',),
array('ID'=>27, 'PARENT_ID' => 19, 'NAME'=> 'Пункт 3.1.1',),
array('ID'=>28, 'PARENT_ID' => 19, 'NAME'=> 'Пункт 3.1.2',),
array('ID'=>1, 'PARENT_ID' => 20, 'NAME'=> 'Пункт 3.2.1',),
array('ID'=>30, 'PARENT_ID' => 1, 'NAME'=> 'Пункт 3.2.1.1'));


// foreach ($data as $anotherArray) {
// 	foreach ($anotherArray as $item => $key) {
// 		echo $item.' - '.$key;
// 		echo '<br>';
// 	}
// }

echo('<ul type="disc">
	<li>'.$data[0]['NAME'].'</li>
	<ul type="circle">
		<li>'.$data[4]['NAME'].'</li>
		<ul type="square">
			<li>'.$data[8]['NAME'].'</li>
			<ul type="square">
				<li>'.$data[12]['NAME'].'</li>
				<li>'.$data[13]['NAME'].'</li>
				<li>'.$data[14]['NAME'].'</li>
				<li>'.$data[15]['NAME'].'</li>
			</ul>
			<li>'.$data[9]['NAME'].'</li>
			<li>'.$data[10]['NAME'].'</li>
			<li>'.$data[11]['NAME'].'</li>
		</ul>
		<li>'.$data[5]['NAME'].'</li>
		<li>'.$data[6]['NAME'].'</li>
		<li>'.$data[7]['NAME'].'</li>
	</ul>
	<li>'.$data[1]['NAME'].'</li>
	<ul type="circle">
		<li>'.$data[16]['NAME'].'</li>
		<ul type="square">
			<li>'.$data[22]['NAME'].'</li>
			<ul type="square">
				<li>'.$data[24]['NAME'].'</li>
				<li>'.$data[25]['NAME'].'</li>
			</ul>
			<li>'.$data[23]['NAME'].'</li>
		</ul>
		<li>'.$data[17]['NAME'].'</li>
	</ul>
	<li>'.$data[2]['NAME'].'</li>
	<ul type="circle">
		<li>'.$data[18]['NAME'].'</li>
		<ul type="square">
			<li>'.$data[26]['NAME'].'</li>
			<li>'.$data[27]['NAME'].'</li>
		</ul>
		<li>'.$data[19]['NAME'].'</li>
		<ul type="square">
			<li>'.$data[28]['NAME'].'</li>
			<ul type="square">
				<li>'.$data[29]['NAME'].'</li>
			</ul>
		</ul>
	</ul>
	<li>'.$data[3]['NAME'].'</li>
	<ul type="circle">
		<li>'.$data[20]['NAME'].'</li>
		<li>'.$data[21]['NAME'].'</li>
	</ul>
</ul>
	');

?>