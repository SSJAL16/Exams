<html>
<header>
	<h1 style="text-align:center; font-size:50px; background-color:lightblue;">SHS Reviewer for STEM</h1>
	<h2 style="text-align:center; font-size:25px; background-color:skyblue">Exam Result</h2>
	</header>
<style>

table{
  background-color: white;
  border: 2px solid white;
  border-radius: 10px;
  text-align: center;
  font-size: 20;
  font-family: Arial;
  width: 20%;
  height: 20%;
  margin-left: auto;
  margin-right: auto;
}

td{
  background-color: white;
  border: 5px solid black;
  border-radius: 10px;
  text-align: center;
  font-size: 20;
  font-family: Arial;
  width: 20%;
  height: 20%;
  margin-left: auto;
  margin-right: auto;
  font-weight: bold;
}

header{
	border: 5px solid black;
 	border-radius: 10px;
}
</style>
<br>

<?php
if(isset($_POST['submithard'])){
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];
$q11 = $_POST['q11'];
$q12 = $_POST['q12'];
$q13 = $_POST['q13'];
$q14 = $_POST['q14'];
$q15 = $_POST['q15'];
$q16 = $_POST['q16'];
$q17 = $_POST['q17'];
$q18 = $_POST['q18'];
$q19 = $_POST['q19'];
$q20 = $_POST['q20'];
$score=0;
	if($q1=="D"){
		$score++;
	}
	if($q2=="A"){
		$score++;
	}
	if($q3=="C"){
		$score++;
	}
	if($q4=="B"){
		$score++;
	}
	if($q5=="A"){
		$score++;
	}
	if($q6=="C"){
		$score++;
	}
	if($q7=="B"){
		$score++;
	}
	if($q8=="D"){
		$score++;
	}
	if($q9=="C"){
		$score++;
	}
	if($q10=="D"){
		$score++;
	}
	if($q11=="B"){
		$score++;
	}
	if($q12=="C"){
		$score++;
	}
	if($q13=="C"){
		$score++;
	}
	if($q14=="C"){
		$score++;
	}
	if($q15=="B"){
		$score++;
	}
	if($q16=="A"){
		$score++;
	}
	if($q17=="B"){
		$score++;
	}
	if($q18=="B"){
		$score++;
	}
	if($q19=="C"){
		$score++;
	}
	if($q20=="B"){
		$score++;
	}
	echo "<table>";
	echo "<tr>";
	echo "<td>";
	echo "Score: " . $score . "/20";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
}
?>

<?php
	if(isset($_POST['submitintermediate'])){
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];
$q11 = $_POST['q11'];
$q12 = $_POST['q12'];
$q13 = $_POST['q13'];
$q14 = $_POST['q14'];
$q15 = $_POST['q15'];
$q16 = $_POST['q16'];
$q17 = $_POST['q17'];
$q18 = $_POST['q18'];
$q19 = $_POST['q19'];
$q20 = $_POST['q20'];
$score=0;
	if($q1=="D"){
		$score++;
	}
	if($q2=="C"){
		$score++;
	}
	if($q3=="A"){
		$score++;
	}
	if($q4=="B"){
		$score++;
	}
	if($q5=="C"){
		$score++;
	}
	if($q6=="D"){
		$score++;
	}
	if($q7=="D"){
		$score++;
	}
	if($q8=="B"){
		$score++;
	}
	if($q9=="A"){
		$score++;
	}
	if($q10=="D"){
		$score++;
	}
	if($q11=="A"){
		$score++;
	}
	if($q12=="C"){
		$score++;
	}
	if($q13=="D"){
		$score++;
	}
	if($q14=="B"){
		$score++;
	}
	if($q15=="A"){
		$score++;
	}
	if($q16=="A"){
		$score++;
	}
	if($q17=="A"){
		$score++;
	}
	if($q18=="A"){
		$score++;
	}
	if($q19=="C"){
		$score++;
	}
	if($q20=="B"){
		$score++;
	}
	echo "<table>";
	echo "<tr>";
	echo "<td>";
	echo "Score: " . $score . "/20";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
}
?>

<?php
if(isset($_POST['submiteasy'])){
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];
$q11 = $_POST['q11'];
$q12 = $_POST['q12'];
$q13 = $_POST['q13'];
$q14 = $_POST['q14'];
$q15 = $_POST['q15'];
$q16 = $_POST['q16'];
$q17 = $_POST['q17'];
$q18 = $_POST['q18'];
$q19 = $_POST['q19'];
$q20 = $_POST['q20'];
$score=0;
	if($q1=="A"){
		$score++;
	}
	if($q2=="B"){
		$score++;
	}
	if($q3=="B"){
		$score++;
	}
	if($q4=="D"){
		$score++;
	}
	if($q5=="A"){
		$score++;
	}
	if($q6=="D"){
		$score++;
	}
	if($q7=="C"){
		$score++;
	}
	if($q8=="C"){
		$score++;
	}
	if($q9=="D"){
		$score++;
	}
	if($q10=="B"){
		$score++;
	}
	if($q11=="D"){
		$score++;
	}
	if($q12=="A"){
		$score++;
	}
	if($q13=="C"){
		$score++;
	}
	if($q14=="B"){
		$score++;
	}
	if($q15=="C"){
		$score++;
	}
	if($q16=="D"){
		$score++;
	}
	if($q17=="A"){
		$score++;
	}
	if($q18=="B"){
		$score++;
	}
	if($q19=="B"){
		$score++;
	}
	if($q20=="D"){
		$score++;
	}
	echo "<table>";
	echo "<tr>";
	echo "<td>";
	echo "Score: " . $score . "/20";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
}
?>
<br><br>

<table class="ctable" width="20%" height="50%">
	<tr>
		<td style="border-color: white;">
			<a href="/activity2/easy_exam.php/">
				<button style="background-color: lightblue;
								font-size: 25px;
								padding: 10px 20px;
								border-radius: 10px;
								border: 2px solid black;
								font-weight: bold;">
					Try Again
				</button>
			</a>
		</td>
	</tr>
	<tr>
		<td style="border-color: white;">
			<a href="/activity2/index.php/">
				<button style="background-color: lightblue;
								font-size: 25px;
								padding: 10px 20px;
								border-radius: 10px;
								border: 2px solid black;
								font-weight: bold;">
					Select Difficulty
				</button>
			</a>
		</td>
	</tr>
</table>
	</html>
