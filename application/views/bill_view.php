	<?php                              
                        $notification = $this->session->flashdata('notification');
                        if(!empty($notification)) {
                        ?> 
                        <h4 class="">
                        <div class="<?php echo $notification['type'];?>" style="text-align: center;">
                        <strong style="color: <?php echo $notification['color'];?>;"><?php echo $notification['message'];?></strong>
                        </div> 
                        </h4>
                        <?php } ?>
						
	<form action="<?php echo site_url();?>/welcome/insertbill" method="post" class="choose-table-form">
	<div class="book-table overlay-light section-padding">
						<div class="section-title-container">
							<h2 class="section-title">Billing Section </h2>
						</div><!-- /.section-title-container -->
						
						<div class="col-sm-4 form-item"> 
									<select class="form-control" name="Name">
									<option   value="">Select  Name</option>
										
										
										<?php
										foreach($rms_customer_details as $rms_customer_name )
										{
											?>
										<option value="<?php echo $rms_customer_name->customer_id; ?>"><?php echo $rms_customer_name->customer_name; ?></option>	
											<?php
										}
										?>
										
									</select><!-- /.form-control -->
								</div><!-- /.form-item -->
						
						<div class="col-sm-4 form-item"> 
									<select class="form-control" name="Food_name">
									<option   value="">Select  Food</option>
										
										
										<?php
										foreach($rms_food_details as $rms_food_name )
										{
											?>
										<option value="<?php echo $rms_food_name->food_id; ?>"><?php echo $rms_food_name->food_name; ?></option>	
											<?php
										}
										?>
										
									</select><!-- /.form-control -->
								</div><!-- /.form-item -->
								
								<div class="col-sm-4 form-item"> 
									<select class="form-control" name="Amount">
									<option   value="">Select  prize</option>
										
										
										<?php
										foreach($rms_food_details as $rms_food_prize )
										{
											?>
										<option value="<?php echo $rms_food_prize->food_id; ?>"><?php echo $rms_food_prize->prize; ?></option>	
											<?php
										}
										?>
										
									</select><!-- /.form-control -->
								</div><!-- /.form-item -->
								
								<div class="col-sm-4 form-item"> 
									<select class="form-control" name="GST">
									<option   value="">Select  GST</option>
										
										
										<?php
										foreach($rms_food_details as $rms_food_GST )
										{
											?>
										<option value="<?php echo $rms_food_GST->food_id; ?>"><?php echo $rms_food_GST->GST; ?></option>	
											<?php
										}
										?>
										
									</select><!-- /.form-control -->
								</div><!-- /.form-item -->
								
								<div class="col-sm-4 form-item"> 
									<select class="form-control" name="Quantity">
									<option   value="">Select  Quantity</option>
										
										
										<?php
										foreach($rms_customer_details as $rms_order_details )
										{
											?>
										<option value="<?php echo $rms_order_details->customer_id; ?>"><?php echo $rms_order_details->Quantity; ?></option>	
											<?php
										}
										?>
										
									</select><!-- /.form-control -->
								</div><!-- /.form-item -->
						
						
							<div class="col-sm-4 form-item"> 
									<input type="text" class="form-control" name="Total" id="Total" placeholder=" Total Amount" required> 	
								</div><!-- /.form-item -->

							
								
								
								
								
								

								<div class="btn-container">
									<button type="submit" class="btn btn-sm btn-light-green">Submit Now</button>
								</div><!-- /.btn-container -->
								</form>