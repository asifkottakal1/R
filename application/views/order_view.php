<!DOCTYPE html>
<html>
<head>
<marquee><h1>Order &nbsp;Details</h1></marquee>
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
</head>
  <form method="post" onsubmit="return confirm('Are you sure?')" action="<?php echo site_url();?>/login/del" id="order_form">               
							
							<?php
							?>
							<table>
											  <tr>
												<th>id</th>
												<th>Customer_name</th>
											<!-- 	<th>Table_name</th> -->
												<th>Food_name</th>
												<th>Quantity</th>
												<th>Date</th>
												<th>Time</th>
												<th>Phone</th>
												<!-- <th>Delete</th> -->
												<th>Status</th>
												<th>Edit</th>
												</tr>
												
												
												<?php
																		  
										foreach($rms_order_details as $rms_orders)
										{
											if($rms_orders->status=='finished'){
												$selected='selected';
											}
											else
												$selected=false;
											?>
									
								<tbody>	
									<tr>
										<td><input type="checkbox" name="check[]" value="<?php 
										echo $rms_orders->order_id;?>"></td>
										<td><?php echo $rms_orders->customer_name; ?></td>
										<!-- <td><?php echo $rms_orders->table_name; ?><br></td> -->
										<td><?php echo $rms_orders->food_name; ?><br></td>
										<td><?php echo $rms_orders->Quantity; ?><br></td>
										<td><?php echo $rms_orders->date; ?><br></td>
										<td><?php echo $rms_orders->time; ?><br></td>
										<td><?php echo $rms_orders->phone_no; ?><br></td>
										  
										<td><select class="status" data-id="<?php echo $rms_orders->order_id; ?>"> 
											<option value="pending">Pending</option> 
											<option value="finished" <?php echo $selected;?>>Finished</option>
										</select>
										</td>
										<td><a href="<?php echo site_url();?>/login/edit/<?php echo $rms_orders->order_id; ?>"><input type="button" value="Edit" ></a><br></td>

										</tr>
											
											<?php
										}
										?> 
										
										
										</tbody>
										</table>
										
										<br><br>
										<center>
											<input type="submit" name="delete" value="Delete">

										<a href="<?php echo site_url();?>/login/logout"><input type="button" value="logout"></a>
									</center>
										<br><br><br><br>
										<div class="open-close">
								

								<div class="row">
									<div class="col-md-6">
										<div class="oc-container">
											<div class="col-sm-7 os-txt-box">
												<span class="oc-txt">Every Monday to Friday </span>
											</div>
											<div class="col-sm-5">
												<span class="oc-time">09:00 AM - 09:30 PM </span>
											</div>
										</div><!-- /.oc-container -->
									</div><!-- /.oc-container -->

									<div class="col-md-6">
										<div class="oc-container">
											<div class="col-sm-7 os-txt-box">
												<span class="oc-txt">Every Saturday and Sunday </span>
											</div>
											<div class="col-sm-5">
												<span class="oc-time">11:00 AM - 11:30 PM </span>
											</div>
										</div><!-- /.oc-container -->
									</div><!-- /.oc-container -->
								</div><!-- /.row -->
							</div><!-- /.open-close --> 
						</div><!-- /.contact-section --> 
					
					</form>
						</html>
						<script type="text/javascript">
							baseurl="<?=site_url()?>/";
						</script>
										
										
										
										
										
									