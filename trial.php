<html>
<head>
<link rel="stylesheet" type="text/css" href="sidenav.css">
<link rel="stylesheet" type="text/css" href="form.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="script/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<?php 
require('index.php');
?>
<div class="header">
<a href="#" class="btn btn-info btn-lg" style="background-color:#ABEBC6;">
         <font color="black"> <span class="glyphicon glyphicon-log-out"></span> Log out</font>
        </a>
</div>


<div id="mySidenav" class="sidenav">
  <a href="#" id="about">About</a>
  <a href="#" id="ins">Instructions to vote</a>
  <a href="#" id="party">Parties Info</a>
  <a href="#" id="contact">Contact</a>
</div>

<div style="margin-left:80px;">
  <div class="container">
  <form name="ccon">
    <div class="row">
      <div class="col-25">
        <label for="district">District</label>
      </div>
      <div class="col-75">
        <select name="category" class="required-entry" id="category" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
                <option value="">Select District</option>
                <option value="Delhi">Delhi</option>
                <option value="Lucknow">Lucknow</option>
                <option value="Allahabad">Allahabad</option>
                <option value="Agra">Agra</option>
            </select>
		
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="constituency">Constituency</label>
      </div>
      <div class="col-75">
        <script type="text/javascript" language="JavaScript">
                document.write('<select name="subcategory" id="subcategory"><option value="">Please select constituency</option></select>')
            </script>
            <noscript>
                <select name="subcategory" id="subcategory" >
                    <option value="paage.html" name="Delhi Cantt"></option>
					<option value="page3.html" name="Malviya Nagar"></option>
                </select>
            </noscript>
      </div>
    </div>
    <div class="row">
      <b>
	  <!---<input type="submit" value="Submit" onclick="generateOTP()">--->
	  </b>
	 <center>
	 <a><button type="button" name="btnn" onclick="dynamicdropdown(listindex);">NEXT</button></a></center>
    </div>
  </form>
</div>

</div>
<script language="javascript" type="text/javascript">
            function dynamicdropdown(listindex)
            {
                document.getElementById("subcategory").length = 0;
                switch (listindex)
                {
                    case "Delhi" :
                       
                        document.getElementById("subcategory").options[0]=new Option("Delhi Cantt","Delhi Cantt");
                        document.getElementById("subcategory").options[1]=new Option("Malviya Nagar","Malviya Nagar");
                        document.getElementById("subcategory").options[2]=new Option("Greater Kailash","Greater Kailash");
                        
                        break;
                    
                    case "Lucknow" :
                       
                        document.getElementById("subcategory").options[0]=new Option("Lucknow West","Lucknow West");
                        document.getElementById("subcategory").options[1]=new Option("Lucknow East","Lucknow East");
						document.getElementById("subcategory").options[2]=new Option("Lucknow North","Lucknow North");
                        document.getElementById("subcategory").options[3]=new Option("Lucknow Central","Lucknow Central");
						document.getElementById("subcategory").options[4]=new Option("Lucknow Cantt","Lucknow Cantt");
                        break;
                    case "Allahabad" :
                 
                        document.getElementById("subcategory").options[0]=new Option("Allahabad South","Allahabad South");
                        document.getElementById("subcategory").options[1]=new Option("Bara","Bara");
                        document.getElementById("subcategory").options[2]=new Option("Koraon","Koraon");
                        
                        break;
                    case "Agra" :
                       
                        document.getElementById("subcategory").options[0]=new Option("Agra Cantt","Agra Cantt");
						document.getElementById("subcategory").options[1]=new Option("Etamdpur","Etamdpur");
					    document.getElementById("subcategory").options[2]=new Option("Agra South","Agra South");
                        break;
                }
                return true;
            }
       </script>
<script>
function Open()
{
var url=document.ccon.subcategory.value;
document.location.href=url;
}

    
     
</body>
</html>