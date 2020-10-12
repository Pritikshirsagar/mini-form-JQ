<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script>

$(document).ready(function(){
  $("form").submit(function(){
    alert("Submitted");
  });
});

</script>
</head>
<body>
<center><h2>Data Form</h2></center>
<form method="post" action="formdata_db.php">
	
<div class="container">
 
    
         <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" value="" />
      <span class="text-danger"></span>
     </div>
     <div class="form-group">
      <label>City</label>
      <input type="text" name="city" class="form-control" value="" />
      <span class="text-danger"></span>
     </div>
     <div class="form-group">
      <label>occupation</label>
      <input type="text" name="occupation" class="form-control" value="" />
      <span class="text-danger"></span>
     </div>
     <div class="form-group">
      <input type="submit" name="submit" value="submit" class="btn btn-success" />
     </div>




     <!----------------------------------Display---------------------------------->

  <center><h3><div class="bg-primary text-white">Result Data</div></h3></center>

  <div class="panel panel-default">
   <div class="panel-heading"></div>
   <div class="panel-body">

   	<div class="table-responsive">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead  align="center">
                 <tr>
                                          
										
                                            <th>Name</th>
											<th>City</th>
											<th>Occupation</th>
											
											
                </tr>
              </thead>
     <tbody>
									
									
									
									
									<?php
     include ("config.php");
     $sql="select * from formdata";
        $result = mysqli_query($con,$sql); 
          
	if(mysqli_num_rows($result)>0)
	{       
        while($row = mysqli_fetch_array( $result )) {	?>

  		
			<tr class="odd gradeX">
                
                           
                           <td class="center"><?php echo $row['name'];?></td>               
                            <td class="center"><?php echo $row['city'];?></td>
							<td class="center"><?php echo $row['occupation'];?></td>
						   
						  
						 
						
            </tr>
										<?php }} ?>                                      
                                    </tbody>
                                </table>
                            </div>
 


   </div>
</div>
</div>




    </form>
 
 </div> 
</form>

</body>
</html>