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
	<?php $rms_orders=$rms_order_details[0];?>
              
							
							<?php
							?>

										
										<br><br>
										<div class="choose-table">
							<form action="<?php echo site_url();?>/login/edit1" method="post" class="choose-table-form">
								<!-- <div class="col-sm-4 form-item">  -->
									<input type="hidden" value="<?php echo $rms_orders->order_id;?>"  name="order_id">
								<!-- 	<select class="form-control" name="table_id">
										<option   value="">Select Dining Space</option>
										
										<?php
										foreach($rms_table_details as $rms_table_details )
										{
											if($rms_orders->table_id==$rms_table_details->table_id)
												$selected="selected";
											else
												$selected=false;
											?>
										<option value="<?php echo $rms_table_details->table_id; ?>" <?php echo $selected; ?>><?php echo $rms_table_details->table_name; ?></option>	
											<?php
										}
										?>
										
									</select> --><!-- /.form-control -->
								<!-- </div> --><!-- /.form-item -->

						<!-- 		<div class="col-sm-4 form-item"> 
									<select class="form-control" name="Occasion_id">
									<option   value="">Select  occasion</option>
										
										
										<?php
										foreach($rms_occasion_details as $rms_occasion_details )
										{
											?>
										<option value="<?php echo $rms_occasion_details->occasion_id; ?>"><?php echo $rms_occasion_details->occasion_name; ?></option>	
											<?php
										}
										?>
										
									</select>
								</div> -->

								<div class="col-sm-4 form-item"> 
									<select class="form-control" name="food_id">
										<option  value="">Select Preferred Food</option>
										
										<?php
										foreach($rms_food_details as $rms_food_details )
										{
											if($rms_orders->food_id==$rms_food_details->food_id)
												$selected="selected";
											else
												$selected=false;
										?>
										<option value="<?php echo $rms_food_details->food_id; ?>" <?php echo $selected; ?>><?php echo $rms_food_details->food_name; ?></option>	
											<?php
										}
										?>
										
										
									</select><!-- /.form-control -->
								</div><!-- /.form-item -->
								
								<div class="col-sm-4 form-item"> 
									<input type="number" class="form-control" value="<?php echo $rms_orders->Quantity; ?>" name="Quantity" id="Quantity" placeholder="Your Quantity" required> 	
								</div><!-- /.form-item -->


								<!-- <div class="col-sm-4 form-item"> 
									<input type="text" class="form-control" value="<?php echo $rms_orders->customer_name; ?>" name="customer_name" id="customer_name" placeholder="Your Name" required> 	
								</div> --><!-- /.form-item -->

								

							
								<div class="col-sm-4 form-item"> 
									<input type="date" class="form-control" value="<?php echo $rms_orders->date; ?>"  name="date" id="date" placeholder="Your Phone" required > 	
								</div><!-- /.form-item -->

								<div class="col-sm-4 form-item"> 
									<input type="time" class="form-control" value="<?php echo $rms_orders->time; ?>"  name="time" id="time" placeholder="Your Phone" required value="<?php echo DATE('h:i');?>"> 	
								</div><!-- /.form-item -->

								
								<div class="col-sm-12 btn-container">
								<button type="submit" class="btn btn-sm btn-light-green">Submit</button>
								</div><!-- /.btn-container -->

							</form><!-- /.choose-table-form -->
						</div>

										
										<br><br><br><br>
										
						</div><!-- /.contact-section --> 
					
				
						</html>
						<script type="text/javascript">
							baseurl="<?=site_url()?>/";
						</script>
										
										
										
										
										
									