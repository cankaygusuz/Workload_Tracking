
<!--<link rel='stylesheet' type='text/css' media="screen" href='css/style.php' >-->



<?php
$host = "localhost";
$database = "companydb";
$user = "root";
$passwort = "";

$link = mysqli_connect($host,$user,$passwort) or die ("could not connect");
$connect2 = mysqli_select_db($link,$database) or die ("could not select");

$query = "SELECT COUNT(empid) AS total1 FROM pro_emp WHERE empid = '1'";
$res = mysqli_query($link,$query);
$values = mysqli_fetch_assoc($res);
$num_rows1 = $values['total1'];
echo $num_rows1;
echo"<br>";

$query = "SELECT COUNT(empid) AS total2 FROM pro_emp WHERE empid = '2'";
$res = mysqli_query($link,$query);
$values = mysqli_fetch_assoc($res);
$num_rows2 = $values['total2'];
echo $num_rows2;
echo"<br>";

$query = "SELECT COUNT(empid) AS total3 FROM pro_emp WHERE empid = '3'";
$res = mysqli_query($link,$query);
$values = mysqli_fetch_assoc($res);
$num_rows3 = $values['total3'];
echo $num_rows3;
echo"<br>";

$query2 = "SELECT * FROM employee";
$res2 = mysqli_query($link,$query2);
$values2 = mysqli_fetch_assoc($res2);

$salaryquery = "SELECT SUM(salary) AS total FROM employee";
$salaryres = mysqli_query($link,$salaryquery);
//$salaryval = mysqli_fetch_assoc($salaryres);


$salaryval = mysqli_fetch_array($salaryres);
$sum = $salaryval['total'];



  while($row = mysqli_fetch_array($res2)) {
   $names[] = $row['empname'];
   $dpt[] = $row['dptname'];
   $gender[] = $row['gender'];
   $salary[] = $row['salary'];
}

?>


<html>

    
<head>
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Semantic UI Project</title>
    
    <link rel="stylesheet"  href="css/semantic.css">
    <link rel="stylesheet"  href="css/styles.css">   
	<link rel="stylesheet"  href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">   
	
    
    
    <script src="jquery-3.5.1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>	
	<script>
		/*	$(document).ready( function () {
			$('#myTable').DataTable();
			
			
				} );*/
				
				
				
			$(document).ready(function() {
				$('#myTable').DataTable( {
					"scrollY":        "200px",
				//	"scrollCollapse": true,
				//	"paging":         false
				} );	
			} );
	</script>
	
    <script src="semantic.js"></script>
	<script>
    var arr = new Array();
    <?php foreach($names as $names => $val){ ?>
        arr.push('<?php echo $val; ?>');
    <?php } ?>
	var arrdpt = new Array();
    <?php foreach($dpt as $dpt => $val2){ ?>
        arrdpt.push('<?php echo $val2; ?>');
		
    <?php } ?>
	
	</script>
    <script>var phpval1 = "<?php echo $num_rows1; ?>"</script>
	<script>var phpval2 = "<?php echo $num_rows2; ?>"</script>
	<script>var phpval3 = "<?php echo $num_rows3; ?>"</script>
	<style>
		html {
		  scroll-behavior: smooth;
		}
	</style>

</head>
 <body>
	<?php
		@ob_start();
		
	?>
    <script src="script.js"></script>

<!--     <link rel="stylesheet" type="text/css" href="css/semantic2.min.css"/>
 
     <script type="text/javascript" src="js/semantic2.min.js"></script> -->
    <div class="pusher">
        <div id="home" class="ui vertical sc-main center aligned segment">
            <div class="ui container">
                <div class="ui large sc-bar secondary inverted pointed fixed menu">
                   <!-- <a class="toc item">
                        <i class="sidebar icdon"></i>
                    </a> -->
					<div class="left item">
                        <a class="item login" style="border-radius: 30px!important;" onclick="loginfnc()">Admin Login</a></div>
                    
                    <div class="right item">
                        <a class="item" href="#home">Home</a>
                <!--        <a class="item" href="#services">Services</a>
                        <a class="item" href="#portfolio">Portfolio</a> 
                        <a class="item" href="#about">About</a> -->
                        <a class="item" href="#team">Team</a>
     
                        <a class="item" href="#contact">Contact</a>
                    </div>
                </div>
            </div>
            <div class="ui text sc-header-content container">
                <h1 class="ui inverted header">Semantic App</h1>
                <p class="ui invereted header">Employee information and Density Tracking</p>
                <a class="ui huge primary right labeled icon button sc-button" onclick="myButtonFunction()">Start Button<i class="angle down icon"></i></a>
			
            
            </div>
            
        </div>
		<script>
			function myButtonFunction() {
				window.scrollTo(0, 680);
			}
        </script>
        <section id="team" class="sc-section">
            <div class="ui center aligned stackable three column grid container">
                <div class="row">
                    <div class="column">
                        <h2 class="ui header sc-h2" id="density">DENSITY TRACKING</h2>
						
                        <p>Display density rates...</p>
                        
                    </div>
                 
                </div>
                <div class="row" id="gaugerow">
                    <div class="column">
					<h2 class="ui header sc-h3" id="density">B.Yahsi</h2>
                    <div class="progress1">
                      <div class="precent1"> 100 Works</div>
                      <div class="circle1"></div>
                      <div class="range1">
                      <div class="gaugeval1"></div>
                        <input type="range sy-range" min="0" max="100" id="range1" /> 
                        <div class="filled1"></div>
                      </div>
                    </div>
                    </div>
                    <div class="column">
					<h2 class="ui header sc-h3" id="density">U.Akar</h2>
                     <div class="progress2">
                      <div class="precent2"> 100 Works</div>
                      <div class="circle2"></div>
                      <div class="range2">
                      <div class="gaugeval2"></div>
                        <input type="range sy-range" min="0" max="100" id="range2" />
                        <div class="filled2"></div>
                      </div>
                     </div>                   
                    </div>
                    <div class="column">
                      <!--  <h3 class="ui icon header">
                            <i class="circular inverted laptop icon"></i>
                            <div class="content">MOBILE DESIGN</div> 
                        </h3> -->   
					<h2 class="ui header sc-h3" id="density">S.Erdogan</h2>
                    <div class="progress">
                      <div class="precent"> 100 Works</div>
                      <div class="circle"></div>
                      <div class="range">
                      <div class="gaugeval"></div>
                        <input type="range sy-range" min="0" max="100" id="range" /> 
                        <div class="filled"></div>
                      </div>
                    </div>
                    </div>
        </section>
					<script>
						document.getElementById("range").style.display = 'none';
						document.getElementById("range1").style.display = 'none';
						document.getElementById("range2").style.display = 'none';
					</script>
            <section id="cardsec" class="sc-section">
            <div class="ui center aligned stackable three column grid container">
			<div class="row searchrow">
			<div class="column">
			<p>Display Employee : </p>
				<div class="ui search" onchange="setTimeout(searchFunction, 400)">
				<div class="ui icon input">
				<input class="prompt" type="text" placeholder="Search employee..." id="placeholder">
				<i class="search icon"></i>
				</div>
				<div class="results"></div>
				</div>
			</div>
			</div>
			<script>
				var content = [
					{ title: 'Burak Yahşi' },
					{ title: 'Ümit Akar' },
					{ title: 'Semih Erdoğan' }
				];
				$('.ui.search')
				  .search({
					source: content
				  });
				function searchFunction() {
					document.getElementById("fcol").style.display= "unset";
					document.getElementById("scol").style.display= "unset";
					document.getElementById("tcol").style.display= "unset";					
					if($('#placeholder').val() == "Burak Yahşi"){
						document.getElementById("scol").style.display= "none";
						document.getElementById("tcol").style.display= "none";	
					}
						else if($('#placeholder').val() == "Ümit Akar"){
							document.getElementById("fcol").style.display= "none";
							document.getElementById("tcol").style.display= "none";	
						}
						else if($('#placeholder').val() == "Semih Erdoğan"){
							document.getElementById("fcol").style.display= "none";
							document.getElementById("scol").style.display= "none";	
						}
			}
			
			
			</script>
            <div class="row sc-row">			
            <div class="column" id="fcol">
		<!--	<div class="ui search">
				<div class="ui icon input">
				<input class="prompt" type="text" placeholder="Search countries...">
				<i class="search icon"></i>
				</div>
				<div class="results"></div>
				</div> -->
            <div class="ui special cards">
              <div id="card1" class="ui link centered fluid card">
                <div class="blurring dimmable image">
                  <div class="ui dimmer">
                    <div class="content">
                      <div class="center">
                        <i class=" huge plus circle icon"></i>
                      </div>
                    </div>
                  </div>
                  <img class ="ui image" src="img/small_slgo.png">
                </div>
                <div class="content sc-content">
                  <a class="header">Team Lead</a>
                  <div class="meta">
                    Burak Yahşi
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="column" id="scol">
            <div class="ui special cards">
              <div id="card2" class="ui link centered fluid card">
                <div class="blurring dimmable image">
                  <div class="ui dimmer">
                    <div class="content">
                      <div class="center">
                        <i class=" huge plus circle icon"></i>
                      </div>
                    </div>
                  </div>
                  <img class ="ui image" src="img/small_slgo.png">
                </div>
                <div class="content sc-content">
                    <a class="header">Team Member</a>
                  <div class="meta">
                    Ümit Akar
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="column" id="tcol">
            <div class="ui special cards">
              <div id="card3" class="ui link centered fluid card">
                <div class="blurring dimmable image">
                  <div class="ui dimmer">
                    <div class="content">
                      <div class="center">
                        <i class=" huge plus circle icon"></i>
                      </div>
                    </div>
                  </div>
                  <img class ="ui image" src="img/small_slgo.png">
                </div>
                <div class="content sc-content">
                    <a class="header">Team Member</a>
                  <div class="meta">
                    Semih Erdoğan
                  </div>
                </div>
              </div>
            </div>
            </div>


            
            </div>
            </div>

          </section>  

            <div class="ui modal modal1">
              <div class="image content">
                  <div class="ui image">
                       <img class="fluid" src="img/small_slgo.png">
                  </div>
              </div>
            </div>
			
            <div class="ui modal modal_edit">
			
				<div class="image content">
				<form action ="" method="POST">
					<label class="labels">ID :   </label><input type="text" name="id" id="dis_id" disabled="disabled"/><br/>
					<label class="labels">NAME : </label><input type="text" name="name" id="dis_name" disabled="disabled"/><br/>
					<label class="labels">DEPT : </label>
					<?php
					$qdep = "SELECT * FROM department";
					$qres = mysqli_query($link,$qdep);
					echo '<select name="unitid" onchange="" id="dis_dep" class="drop">';
					while ($row = mysqli_fetch_assoc($qres)) {
					echo '<option id="dis_dep">'.$row['depname'].'</option>';
					}
					echo '</select>';
					echo '<br/>';
					?>
					<label class="labels">GENDER:</label><input type="text" name="gender" id="dis_gender" disabled="disabled"/><br/>
					<label class="labels">SALARY:</label><input type="text" name="salary" id="dis_sal"/><br/>
					
					<label class="labels"></label><input class="updt" id="updt" type="button" name="update" value="UPDATE DATA" onclick="editselectdrp()" style="margin-left: 30px!important;" /><label id="image">LOADING...</label>
				</form>
				<!--<img class ="ui image" src="img/small_slgo.png"> -->
			<?php
			
				$qdep = "SELECT * FROM department";
				$qres = mysqli_query($link,$qdep);

			?>
					
				</div>
			
            </div>			
            
			<div class="ui modal modal_login">
				<div class="image content">
				<form action ="" method="POST">
				
					<label class="labels">MAIL :   </label><input type="text" name="mail" id="mail_id"/><br/>
					<label class="labels">PASSW. : </label><input type="text" name="passw" id="psw_id"/><br/>
					<label class="labels"></label><input class="loginbt" id="loginbt"type="button" value="LOGIN" onclick="login()"/><label class="signlabel" id="signlabel" onclick="signup()" onmouseover="" style="cursor: pointer;">Sign up</label><br/>
					
				</form>
				</div>
			</div>
			<div class="ui modal modal_signup">
				<div class="image content">
				<form action ="" method="POST">
				
					<label class="labels">MAIL :   </label><input type="text" name="mail2" id="mail_id2"/><br/>
					<label class="labels">PASSW. : </label><input type="text" name="passw2" id="psw_id2"/><br/>
					<label class="labels"></label><input class="loginbt" id="signupbt"type="button" value="SIGNUP" onclick="signtosql()"/>
					
				</form>
				</div>
			</div>
    
    
    
		</div>
		<?php
	
		
		
		
		?>
                <section id="team2" class="sc-section">
				<!--	<div class="ui dropdown">
					  <input type="hidden" name="gender">
					  <i class="dropdown icon"></i>
					  <div class="default text">Gender</div>
					  <div class="menu">
						<div class="item" data-value="male">Male</div>
						<div class="item" data-value="female">Female</div>
					  </div>
					</div> -->
					<div class="row">
                    <div class="column empcol" >
                 <!--   <select id="mySelect" onchange="myFunction()">
                      <option value="" selected disabled hidden>Choose an employee</option>
                      <option value="Burak Yahşi">Burak Yahşi</option>
                      <option value="Ümit Akar">Ümit Akar</option>
                      <option value="Semih Erdoğan">Semih Erdoğan</option>
                    </select> -->
					<script>

					</script>
                    <script>
                        function myFunction() {
                          var x = document.getElementById("mySelect").value;
                          document.getElementById("demo").innerHTML = " " + x;
						  if(x == "Burak Yahşi"){
							var y = document.getElementById("op1");
							y.style.display= "unset"; 
							document.getElementById("op2").style.display= "none";
							document.getElementById("op3").style.display= "none";
							
							}else if(x == "Ümit Akar"){
								var y = document.getElementById("op2");
								y.style.display= "unset";	
							document.getElementById("op1").style.display= "none";
							document.getElementById("op3").style.display= "none";
								
							}else if(x == "Semih Erdoğan"){
								var y = document.getElementById("op3");
								y.style.display= "unset";	
							document.getElementById("op1").style.display= "none";
							document.getElementById("op2").style.display= "none";								
							}
						}
						function myAjax() {
						  $.ajax({
							   type: "POST",
							   url: 'variablepage.php',
							   data:{firstdropval,expected_name},
							   success:function(res) {
								 console.log(res);
							   }

						  });
						}
                    </script>  
				</section>
					
                <!--        <h3 class="ui icon header">
                            <i class="circular inverted laptop icon"></i>
                            <div class="content">BRANDING</div> 
                        </h3>
                        <p>Bottom text</p>
                    </div>

                </div>
         <!--       <table class="ui celled striped table"> -->
			<section id="contact" class="sc-section" style="margin-top: -150px;">
				<h2 class="ui header sc-h2" id="contacth2" style="text-align: center;">CONTACT</h2>
                <table class="data table">
                  <thead>
                    <tr><th colspan="3">
					<dialog id="myDialog">This is an open dialog window</dialog>
               <!--       <p id="demo">Employees</p> -->
                    </th>
                  </tr></thead>
                  <tbody>
                    <tr id="op1">
                      <td class="collapsing">
                        <i class="hand point right outline"></i> Burak Yahsi
                      </td>
                      <td></td>
                      <td class="right aligned collapsing" >Team Lead</td>
                    </tr>
                    <tr id="op2">
                      <td>
                        <p class="folder icon"> Ümit Akar</p> 
                      </td>
                      <td></td>
                      <td class="right aligned"></td>
                    </tr>
                    <tr id="op3">
                      <td>
                        <p class="folder icon"></p> Semih Erdoğan
                      </td>
                      <td></td>
                      <td class="right aligned"></td>
                    </tr>

                  </tbody>
                </table>
			<!--	<table name = "userDetails"> -->
			
			<dialog id="myDialog">This is an open dialog window</dialog>
            </div>
            </div>
			<div class="ui container sc-cont">
			<table class="ui selectable inverted table blc" id="myTable">
			<thead style="background-color: darkcyan;">
			<tr>
				<th class="centeredh">ID</th>
				<th class="centeredh">NAME</th>
				<th class="centeredh">DEPARTMENT</th>
				<th class="centeredh">GENDER</th>
				<th class="centeredh">SALARY</th>
				<th class="centeredh"><button class="circular ui icon button stt"><i class="icon settings sttic"></i></th>
			</tr>
			</thead>
			<tbody style="color: black;">
			<?php
				$query2 = "SELECT * FROM employee";
				$res2 = mysqli_query($link,$query2);
				if(mysqli_num_rows($res2) > 0){
					$j = 0;
					while ($row = mysqli_fetch_assoc($res2)) {
						++$j;
						echo '<tr id="row_'.$j.'">';
						echo '<td class = "nr" id="sort_'.$j.'">'. $row['empid'] .'</td>';
						echo '<td class="sc-td" id=' .$j.' onmouseover="mouseFunction(this)" onmouseout="mousefunction2(this)" onclick="clcfnc()">'. $row['empname'] .'</td>';
						echo '<td id="depid' .$j.'">'. $row['dptname'] .'</td>';
						echo '<td id="gender' .$j.'">'. $row['gender'] .'</td>';
						echo '<td id="salid' .$j.'">'. $row['salary'] .'</td>';
						echo '<td class="settings_td">'. '<button class="ui inverted blue basic icon button sc-dlbt" id="editfunction_'.$j.'" onclick="editfunction(this.id)" onmouseover="getval(this.id)"><i class="edit icon"></i></button>'.'<button class="ui inverted red basic icon button sc-dlbt" id="delete_'.$j.'" onclick="deleteme(this.id)"><i class="minus circle icon"></i></button>'.'</td>';
						echo '</tr>';

					}
						//echo '<tr>';
						//echo '</tr>';
				}

			?>

			</tbody>
			<tfoot>
			<?php
			$sum2 = round($sum / $j,2);
			echo '<tr style="background-color: darkcyan;">';//thead - tr
				echo '<th class="invisible"></th>';
				echo '<th class="invisible"></th>';
				echo '<th class="invisible"></th>';
				echo '<th class="invisible"></th>';
				echo '<th>'.$sum2.'</th>';
				echo '<th class="invisible"></th>';
			echo '</tr>'; //thead - tr
			?>
		</table>
		</div>
		</section>
		<script>//var salarysum = "<?php echo $sum; ?>"</script>
		<script>
			

		</script>
		<script>
			function mouseFunction(obj) {
				var elm_id = obj.id;
				var val = "#"+elm_id;
				var select = $(val)[0].outerText;
				var mail = select + "@siemens.com";
				var space_select = select.replace(".", " ");
				space_select = space_select.toUpperCase();
				console.log(space_select);
				document.getElementById("myDialog").open = true;
				$('#myDialog')[0].innerText = space_select + "---" + mail;
			}
			function mousefunction2(obj) {
				document.getElementById("myDialog").open = false;
			}
			function clcfnc(obj) {
				document.getElementById("myDialog").open = true;
			}
		</script>
		<script>
		
		</script>
		
</body>



</html>
