<!DOCTYPE html>
<html>
<head>
<marquee><h1>Desert Details</h1></marquee>
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
												<th>Desert name</th>
												<th>Prize</th>
												</tr>
												
												
												<?php
																		  
										foreach($rms_desert_details as $rms_desert_details)
										{
											?>
									
								<tbody>	
									<tr>
										<td><?php echo $rms_desert_details->desert_name; ?></td>
										<td><?php echo $rms_desert_details->prize; ?></td>
										</tr>
											<?php
										}
										?> 
										</tbody>
										</table>
										</html>
										
										
											
										