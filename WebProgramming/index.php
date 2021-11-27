<?php
require_once('init.php');
?>


<script>

function filterData() {

  var items = document.querySelectorAll("tbody > tr");
  var theadRow = document.querySelectorAll("thead > tr");
  
  var input = document.querySelector("input[type=text]").value;
 $count_result=0;
  for(item of items) {
      
    if(item.querySelectorAll("td")[1].innerText.toUpperCase().indexOf(input.toUpperCase()) > -1 &&
    input !="") {
        
    $count_result++;
    item.style.display = "table-row";
    for(thead of theadRow){
      thead.style.display ="table-row";
    } 
    
  }
  else {
    item.style.display = "none";
    
  }
  }
  if($count_result<=0 || input =="") 
  {
     for(thead of theadRow){
      thead.style.display ="none";
    }  
  }
}

</script>

<script>
function greetings(){       
        var date = new Date();
        var hour = date.getHours();        
        if(hour > 0 && hour < 6) {
            var string = 'Good morning, you must be an early bird!'
            document.write(string.bold().fontcolor('Red'));
             }    
        else if(hour >= 6 && hour < 12) {
          var string = 'Good Morning!';         
          document.write(string.bold().fontcolor('Red'));
        }    
        else if(hour >= 12 && hour < 18) {
          var string = 'Good Afternoon!';
          document.write(string.bold().fontcolor('Red'));    
        }
        else if(hour >=18 && hour < 24) {
          var string = 'Good Evening!';         
          document.write(string.bold().fontcolor('Red'));         
        }
    }
</script>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body class="bgimage"> 
<div class="greetings">
  <script>
    greetings();
  </script>
</div>
<header>
<div class="navbar">
    <a href="index.html"><i class="fa fa-fw fa-home"></i>Home</a>
    <div class="dropdown">
      <button class="dropbtn">Products<i class="fa fa-caret-down"></i></button>
      <div class="dropdown-content">
        <a href="currency.php">Currency Exchange</a>
        <a href="">Service 2</a>
      </div>
    </div>
    <div class="dropdown">
        <button onclick="location.href='contact.html'"class="dropbtn" >Contact Us </a><i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
               <a href=""><img class="flag" src="FrenchIcon.jpg" alt="FrenchIcon">Contactez_nous</a>
               <a href="#"><img class="flag" src="Thiruvalluvar.png" alt="Thiruvalluvar">தொடர்புகளுக்கு</a>
            </div>
    </div>             
    <a href="aboutme.html">About</a> 
</div>
</header>
<br>
<br>
    
<h1 id="heading" > Welcome to My florist webpage. Please use the search box- below to pick your flowers. </h1> 

<div class="search">
  <input type = "text" id="myInput" placeholder = "Search.."  onkeyup="filterData()"><br>
  
    <table border ="1">
    <THEAD>
     <tr>
      <th> Item </th>
      <th> Name </th>
      <th> Type </th>
      <th> Make </th>
      <th> Model </th>
      <th> Brand </th>
      <th> Description </th>
    </tr>
    </THEAD>
    </div>
    <TBODY>


    <?php
    $sql = "SELECT * FROM Items ";
    $data_list = $conn ->query($sql);
    $data = array();
    if($data_list ->num_rows > 0) {
        while($entry = $data_list ->fetch_assoc()) {
            $data[] = $entry;
        }
    }
    else {
        die("No data found");
    }    
    
    foreach($data as $item) {
      echo <<<END
      <tr>
      <td>{$item['id']}</td>
      <td>{$item['name']}</td>
      <td>{$item['type']}</td>
      <td>{$item['make']}</td>
      <td>{$item['model']}</td>
      <td>{$item['brand']}</td>
      <td>{$item['description']}</td>
      </tr>
    
    END;

    }  


?>
</div>
</tbody>
</table>
   
<style>
 .search {
    height: 60px;
    max-width: 700px;
    margin: auto;
}

#myInput {
    background-position: 20px 20px;
    background-repeat: no-repeat;
    width: 90%;
    height: 100%;
    padding-left: 10%;
    font-size: 24px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.flag {
    margin-right: 10px;
    width: 25px;
    vertical-align: middle;
}

.navbar {
  overflow: hidden;
    background-color: #333;
    font-family: Arial;
  }  

.navbar a {
    float: left;
    font-size: 16px;
    color: #D9C484;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: #D9C484;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #025951;
  color: #F2E3B3;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: green;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: #025951;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.bgimage {
  background-image: url(bImgge.jpg);
  background-image: url(bImage.jpg);
  height: 100%;
	margin-top:  5px;
	padding-top: 2px;
	border-width: 1px;
	width: 100%;
	margin-left: auto;
	margin-right:auto;
	color:black;
	font-family: Verdana, Geneva, Tahoma, sans-serif;	
	background-size: 100%;
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-size: 100%;
}
   
#heading{
    text-align: center;
    background-color:hsla(hue, saturation, lightness, alpha);
    width: 100%;
    height: 100px;
    color:green;
    font-style:oblique;
    font-size: 40px;
  }

.greetings {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 25px;
}

tr {
  display: none;
}

.table{
  position: center;
}
  
</style>


</body>
</html>

