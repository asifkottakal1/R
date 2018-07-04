<!DOCTYPE html>
<html>
<head>
<marquee><h1>Breakfast Details</h1></marquee>
<style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
	
}

th, td {
    padding: 15px;
}
h1{
	color:red;
}
th {
    background-color: #4CAF50;
    color: white;
}

</style>

						
                           <?php
							?>
							<table>
											  <tr>
												<th>Breakfast name</th>
												<th>Prize</th>
												</tr>
												
												
												<?php
																		  
										foreach($rms_breakfast_details as $rms_breakfast_details)
										{
											?>
									
								<tbody>	
									<tr>
										<td><?php echo $rms_breakfast_details->breakfast_name; ?></td>
										<td><?php echo $rms_breakfast_details->prize; ?><br></td>
										</tr>
										<?php
										}
										?> 
										</tbody>
										</table>
										</html>
										
										
											
										