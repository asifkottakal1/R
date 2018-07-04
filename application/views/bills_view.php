<!DOCTYPE html>
<html>
<head>
<marquee><h1>Bill Details</h1></marquee>
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

<?php
							?>
							<table>
											  <tr>
												

												<th>Customer_name</th>
												<th>Food_name</th>
												<th>Prize</th>
												<th>GST</th>
												<th>Quantity</th>
												<th>Total</th>
												</tr>
												
												
												<?php
																		  
										foreach($rms_bill_details as $rms_orders)
										{
											?>
									
								<tbody>	
									<tr>
										
										
										
										<td><?php echo $rms_orders->customer_name; ?><br></td>
										<td><?php echo $rms_orders->food_name; ?><br></td>
										<td><?php echo $rms_orders->prize; ?><br></td>
										<td><?php echo $rms_orders->GST; ?><br></td>
										<td><?php echo $rms_orders->Quantity; ?><br></td>
										<td><?php echo $rms_orders->Total; ?><br></td>
										</tr>
											
											<?php
										}
										?> 
										
										
										</tbody>
										</table>
										<br><br><br><br><br><br>
										
										
										
										<div class="open-close">
								<h4 class="oc-heading text-center"> We are waiting for you! Visit us</h4>

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
						</html>
										
										