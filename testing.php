 
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;"> 
<table>	

  <?php  
			$district=$_POST['category'];
			$cons=$_POST['subcategory'];
			
                $connect = mysqli_connect("localhost", "root", "", "mydatabase"); 				 
                $query = "SELECT image,party FROM candidate WHERE (district='$district') AND (constituency='$cons')";  
                $result = mysqli_query($connect, $query) or die( mysqli_error($connect));;  
                while($row = mysqli_fetch_array($result))  
				{
			
                     echo '  <tr> 
					 <td>
									<button value="'.$row['party'].'" onclick="count(value)" id="click"><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" /> </button>
									<br/>
									'.$row['party'].'
									
						</td>
						
</tr>						
   
                     ';  
                }
                ?> 

                </table>  
           </div>  
      </body>  
 </html>  
<script>
function count(va)
{
var x=va;
switch (x){
case "sp":
document.write(x);
break;
case "congress":
document.write(x);
break;
default:
document.write(x);}

}
</script>

