<!DOCTYPE html>
<html>
<head>
	<title>BIODATA</title>
	<style type="text/css">
		body {
			background-color: white;
		}
		td {
			border: solid;
		}
		button{
			display: inline-block;
			padding: 15px 25px;
			font-size: 24px;
			cursor: pointer;
			text-align: center;
			text-decoration: none;
			outline: none;
			color: white;
			background-color: #4CAF50;
			border: none;
			border-radius: 15px;
			box-shadow: 0 9px #999;
		}
		button:hover{
			background-color: green;
		}
		button:active{
			background-color: #3e8e41;
			box-shadow: 0 5px #666;
			transform: translateY(4px);
		}

		input{

			padding: 10px;
			border: none;
			border-bottom: 2px solid black;
		}
		input:hover{
			padding: 10px;
			border: none;
			border-bottom: 2px solid red;
		}
		input:focus{
			background-color: lightgrey;
			border-color: yellow;
			
		}
		select{
			padding: 10px;
		}
		select:hover{
			border-color: red;
			transition: 5ms;
		}
		select:focus{
			background-color: lightgrey;
			border-color: yellow;
		}

	</style>

</head>
<body>
	<form method="POST" action="">
	<center>
		<table >
			<tr>
				<td colspan="6">
					<center>
					<h1>BIODATA</h1>
					<h5>PLEASE USE CAPITAL LETTERS</h5>
					</center>
						<tr>
							<td>
								<h4>Name: <input type="text" name="Lname" placeholder="Last Name"> <input type="text" name="Fname" placeholder="Fist Name"> <input type="text" name="Mname" placeholder="Middle Name"></h4>
							</td>
						</tr>
						<tr>
							<td>
								<h4>Present Address: <input type="text" name="Street1" placeholder="Street"> <input type="text" name="Purok1" placeholder="Purok"> <input type="text" name="Brgy1" placeholder="Barangay"> <input type="text" name="Cmun1" placeholder="City/Municipality"> <input type="text" name="Province1" placeholder="Province"></h4>
							</td>
						</tr>
						<tr>
							<td>
								<h4>Permanent Address: <input type="text" name="Street2" placeholder="Street"> <input type="text" name="Purok2" placeholder="Purok"> <input type="text" name="Brgy2" placeholder="Barangay"> <input type="text" name="Cmun2" placeholder="City/Municipality"> <input type="text" name="Province2" placeholder="Province"></h4>
							</td>
						</tr>
						<tr>
							<td>
								<h4>
									Date Of Birth: <input type="Date" name="Dbirth">  
								    Civil Status:
								    <select name="CivilStatus">
									<option value="Single">Single</option>
									<option value="Married">Married</option>
									<option value="Divorced">Divorced</option>
									<option value="Widowed">Widowed</option>
								</select>      
								Citizenship:<input type="text" name="Citizenship" placeholder="Example:Filipino">
								</h4>
							</td>
						</tr>
						<tr>
							<td>
								<h4>Place of Birth: <input type="text" name="Cmun4" placeholder="City/Municipality"> <input type="text" name="Province4" placeholder="Province">
								</h4>
							</td>							
						</tr>
						<tr>
							<td>
								<h4>Name of Father: <input type="text" name="Lname2" placeholder="Last Name"> <input type="text" name="Fname2" placeholder="First Name"> <input type="text" name="Mname2" placeholder="Middle Name"></h4>
							</td>
						</tr>
						<tr>
							<td>
								<h4>Name of Mother: <input type="text" name="Lname3" placeholder="Last Name"> <input type="text" name="Fname3" placeholder="First Name"> <input type="text" name="Mname3" placeholder="Middle Name"></h4>
							</td>
						</tr>
						<tr>
							<td>
								<h4>Address: <input type="text" name="Street3" placeholder="Street"> <input type="text" name="Purok3" placeholder="Purok"> <input type="text" name="Brgy3" placeholder="Barangay"> <input type="text" name="Cmun3" placeholder="City/Municipality"> <input type="text" name="Province3" placeholder="Province"></h4>
							</td>
						</tr>
						<tr>
							<td>
								<h4>Language or Dialects Spoken: <input type="text" name="Dialect" placeholder="Iloco, tagalog, and etc.">Person to be notified in case of Emergency: <input type="text" name="EPerson" ></h4>
							</td>
						</tr>
						<tr>
							<td>
								<h4>Religion: <input type="text" name="Religion" placeholder="Religion">

									Age: 
									<select name="Age">
										<option ></option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
										<option value="32">32</option>
										<option value="33">33</option>
										<option value="34">34</option>
										<option value="35">35</option>
										<option value="36">36</option>
										<option value="37">37</option>
										<option value="38">38</option>
										<option value="39">39</option>
										<option value="40">40</option>
										<option value="41">41</option>
										<option value="42">42</option>
										<option value="43">43</option>
										<option value="44">44</option>
										<option value="45">45</option>
										<option value="46">46</option>
										<option value="47">47</option>
										<option value="48">48</option>
										<option value="49">49</option>
										<option value="50">50</option>
										<option value="51">51</option>
										<option value="52">52</option>
										<option value="53">53</option>
										<option value="54">54</option>
										<option value="55">55</option>
										<option value="56">56</option>
										<option value="57">57</option>
										<option value="58">58</option>
										<option value="59">59</option>
										<option value="60">60</option>
										<option value="61">61</option>
										<option value="62">62</option>
										<option value="63">63</option>
										<option value="64">64</option>
										<option value="65">65</option>
										<option value="66">66</option>
										<option value="67">67</option>
										<option value="68">68</option>
										<option value="69">69</option>
										<option value="70">70</option>
										<option value="71">71</option>
										<option value="72">72</option>
										<option value="73">73</option>
										<option value="74">74</option>
										<option value="75">75</option>
										<option value="76">76</option>
										<option value="77">77</option>
										<option value="78">78</option>
										<option value="79">79</option>
										<option value="80">80</option>
										<option value="81">81</option>
										<option value="82">82</option>
										<option value="83">83</option>
										<option value="84">84</option>
										<option value="85">85</option>
										<option value="86">86</option>
										<option value="87">87</option>
										<option value="88">88</option>
										<option value="89">89</option>
										<option value="90">90</option>
										<option value="91">91</option>
										<option value="92">92</option>
										<option value="93">93</option>
										<option value="94">94</option>
										<option value="95">95</option>
										<option value="96">96</option>
										<option value="97">97</option>
										<option value="98">98</option>
										<option value="99">99</option>
										<option value="100">100</option>
									</select>
									Weight: <input type="text" name="Weight" placeholder="86kg">
									Height: <input type="text" name="Height" placeholder="171cm">
								 </h4>
							</td>
						</tr>
						<tr>
							<td style="border: none;">
								<h2>EDUCATIONAL BACKGROUND</h2>
							</td>
						</tr>
						<tr>
							<td>
								<h4>Elementary: <input type="text" name="Elem" placeholder="Binmeckeg Elementary School">
									Year Graduated: <input type="text" name="YGraduate1" placeholder="2010-2011">
								</h4>
							</td>
						</tr>
						<tr>
							<td>
								<h4>High School: <input type="text" name="HSchool" placeholder="Don Amadeo Perez NHS">
									Year Graduated: <input type="text" name="YGraduate2" placeholder="2016-2017">
								</h4>
							</td>
						</tr>
						<tr>
							<td>
								<h4>College: <input type="text" name="College" placeholder="Urdaneta CIty University">
									Year Graduated: <input type="text" name="YGraduate3" placeholder="2021-2022">
								</h4>
							</td>
						</tr>
						<tr>
							<td>
								<h4>Course: <input type="text" name="Course" placeholder="Bachelor of Science in Information Technology">
									Special Skills: <input type="text" name="Skills">
								</h4>
							</td>
						</tr>
						



						<!--SUBMIT BUTTON -->
					
						<tr>
							<td style="border: none;padding-top: 15px;">
								<center><button name="SUBMIT">SUBMIT</button></center>
							</td>
						</tr>

					
						
		</table>
	</center>
</form>


<!--THIS IS THE PHP CODES-->
<?php
	if (isset($_POST['SUBMIT'])) {
		# code...
		//get all the input first 
		//for the name of the user
		$LN=$_POST['Lname'];
		$FN=$_POST['Fname'];
		$MN=$_POST['Mname'];

		//for the present address
		$Street=$_POST['Street1'];
		$Purok=$_POST['Purok1'];
		$Brgy=$_POST['Brgy1'];
		$Cmun=$_POST['Cmun1'];
		$Province=$_POST['Province1'];

		//for the permanent address
		$Street1=$_POST['Street2'];
		$Purok1=$_POST['Purok2'];
		$Brgy1=$_POST['Brgy2'];
		$Cmun1=$_POST['Cmun2'];
		$Province1=$_POST['Province2'];

		//Date of Birth 
		$Dbirth=$_POST['Dbirth'];
		//Civil Status
		$CivilStatus=$_POST['CivilStatus'];
		//Citizenship
		$Citizenship=$_POST['Citizenship'];
		//Place of Birth
		$Cmun4=$_POST['Cmun4'];
		$Province4=$_POST['Province4'];
		//Name OF parents
		//Father
		$Lname2=$_POST['Lname2'];
		$Fname2=$_POST['Fname2'];
		$Mname2=$_POST['Mname2'];
		//Mother
		$Lname3=$_POST['Lname3'];
		$Fname3=$_POST['Fname3'];
		$Mname3=$_POST['Mname3'];
		
		//Address
		$Street3=$_POST['Street3'];
		$Purok3=$_POST['Purok3'];
		$Brgy3=$_POST['Brgy3'];
		$Cmun3=$_POST['Cmun3'];
		$Province3=$_POST['Province3'];
		//Language or Dialects Spoken
		$Dialect=$_POST['Dialect'];
		//Person to be notified in case of emergency
		$EPerson=$_POST['EPerson'];
		//Religion
		$Religion=$_POST['Religion'];
		//Age
		$Age=$_POST['Age'];
		//Weight and Height
		$Weight=$_POST['Weight'];
		$Height=$_POST['Height'];

		//EDUCATIONAL BACKGROUND
		//ELEMENTARY
		$Elem=$_POST['Elem'];
		$YGraduate1=$_POST['YGraduate1'];
		//HIGH SCHOOL
		$HSchool=$_POST['HSchool'];
		$YGraduate2=$_POST['YGraduate2'];
		//COLLEGE
		$College=$_POST['College'];
		$YGraduate3=$_POST['YGraduate3'];

		//COURSE
		$Course=$_POST['Course'];
		//SKILLS
		$Skills=$_POST['Skills'];

		//OUTPUT PART
	echo "
		<br><br>
		<center>
		<table>
			<tr>
				<td>
					<h4> Name: $LN, $FN, $MN </h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4> Present Address: $Street $Purok $Brgy, $Cmun, $Province </h4>

				</td>
			</tr>
			<tr>
				<td>
					<h4> Permanent Address: $Street1 $Purok1 $Brgy1, $Cmun1, $Province1 </h4>

				</td>
			</tr>
			<tr>
				<td>
					<h4> Date Of Birth: $Dbirth 
						  Civil Status: $CivilStatus
						  Citizenship: $Citizenship
					   	  Place Of Birth: $Cmun4 $Province4

					</h4>

				</td>
			</tr>
			<tr>
				<td>
					<h4>Father's Name: $Lname2, $Fname2, $Mname2</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4>Mother's Name: $Lname3, $Fname3, $Mname3</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4>Address: $Street3 $Purok3 $Brgy3, $Cmun3, $Province3</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4>Language or Dialects Spoken: $Dialect
					</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4>Person to be notified in case of emergency: $EPerson</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4> Religion: $Religion
						 Age: $Age
					</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4> Weight: $Weight
						 Height: $Height
					</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h3>EDUCATIONAL BACKGROUND</h3>
				</td>
			</tr>
			<tr>
				<td>
					<h4>ELEMENTARY: $Elem
						Year Graduated: $YGraduate1
					</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4>HIGH SCHOOL: $HSchool
						Year Graduated: $YGraduate2
					</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4>COLLEGE: $College
						Year Graduated: $YGraduate3
					</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4>COURSE: $Course</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4>SKILLS: $Skills</h4>
				</td>
			</tr>

			
			




		</table>
		</center>

	";
	}
	
	

  ?>

</body>
</html>
