
<!-- Our Menus -->
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
						
						
				<section id="our-menus">
					<div class="our-menu section-padding">
						<div class="section-title-container">
							<h2 class="section-title">Our Menus</h2>
						</div><!-- /.section-title-container -->

						<div class="row">
							<div class="col-md-4">
								<article class="menus-container wow fadeIn animated" data-wow-delay="0.1s">
									<div class="featured-img">
										<img src="<?php echo base_url(); ?>/assets/images/breakfast.jpg" height="100px" alt="Breakfast Menus Image">
										<a href="images/menus/breakfast-big.jpg" class="boxer img-link"></a>
									</div><!-- /.featured-img -->
									<h4 class="item-title"> Breakfast </h4>
									<div class="item-entry">
										<p>
											Bake English muffins to create a crispier version of classic French toast. Layer muffin halves with tart lemon sugar and strawberries,with more berries.
										</p>
									</div><!-- /.item-entry -->
									<br><br><br>
									
								
								</article><!-- /.menus-container -->
							</div><!-- /.col-md-4 -->

							<div class="col-md-4">
								<article class="menus-container wow fadeIn animated" data-wow-delay="0.2s">
									<div class="featured-img">
										<img src="<?php echo base_url(); ?>/assets/images/lunch.jpg"    alt="Lunch Menus Image">
										<a href="images/menus/lunch-big.jpg" class="boxer img-link"></a>
									</div><!-- /.featured-img -->
									<h4 class="item-title"> Lunch </h4>
									<div class="item-entry">
										<p>
											Peppery watercress is a perfect counterpoint to the bold flavors of the dressing on this super-size and satisfying sandwich. Perfect for your today lunch. 
										</p>
									</div><!-- /.item-entry -->
									<br><br>
									
									<div class="btn-container">
							<a href="<?php echo site_url(); ?>/welcome/lunch" class="btn btn-sm btn-orange">See Full Menu</a>
						</div><!-- /.btn-container -->
								</article><!-- /.menus-container -->
							</div><!-- /.col-md-4 -->

							<div class="col-md-4">
								<article class="menus-container wow fadeIn animated" data-wow-delay="0.1s">
									<div class="featured-img">
										<img src="<?php echo base_url(); ?>assets/images/desert.jpg"  height="100px"  alt="Desert Menus Image">
										<!--<a href="images/menus/desert-big.jpg" class="boxer img-link"></a>
									</div><!-- /.featured-img -->
									<h4 class="item-title"> Desert </h4>
									<div class="item-entry">
										<p>
											Thinly sliced apples create rich, moist layers of fruit within the cake. Top with your choice of Browned Butter Frosting, Cream Cheese Frosting.
										</p>
									</div><!-- /.item-entry -->
									<br><br><br>
									
								
								</article><!-- /.menus-container -->
							</div><!-- /.col-md-4 --> 

						</div><!-- /.row -->
						

					</div><!-- /.our-menu -->
				</section><!-- /#our-menus -->
				<!-- Our Menus End -->

				<!-- Book Table -->
				<?php
				//print_r($rms_table_details);
				?>
				<section id="book-table" class="parallax-style">
					<div class="book-table overlay-light section-padding">
						<div class="section-title-container">
							<h2 class="section-title">Book your table </h2>
						</div><!-- /.section-title-container -->

						<div class="choose-table">
							<form action="<?php echo site_url();?>/welcome/insertorder" method="post" class="choose-table-form">
							<!-- 	<div class="col-sm-4 form-item">  -->
									<!-- <select class="form-control" name="table_id">
										<option   value="">Select Dining Space</option>
										
										<?php
										foreach($rms_table_details as $rms_table_details )
										{
											?>
										<option value="<?php echo $rms_table_details->table_id; ?>"><?php echo $rms_table_details->table_name; ?></option>	
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
										echo '<option value="'.$rms_food_details->food_id.'">'.$rms_food_details->food_name.'</option>';
										}
										?>
										
										
									</select><!-- /.form-control -->
								</div><!-- /.form-item -->
								
								<div class="col-sm-4 form-item"> 
									<input type="number" class="form-control" name="Quantity" id="Quantity" placeholder="Your Quantity" required> 	
								</div><!-- /.form-item -->


								<div class="col-sm-4 form-item"> 
									<input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Your Name" required> 	
								</div><!-- /.form-item -->

								<div class="col-sm-4 form-item"> 
									<input type="text" class="form-control" name="phone_no" id="phone_no" placeholder="Your Phone" required pattern="[789][0-9]{9}"> 	
								</div><!-- /.form-item -->

							
								<div class="col-sm-4 form-item"> 
									<input type="date" class="form-control" name="date" id="date" placeholder="Your Phone" required > 	
								</div><!-- /.form-item -->

								<div class="col-sm-4 form-item"> 
									<input type="time" class="form-control" name="time" id="time" placeholder="Your Phone" required value="<?php echo DATE('h:i');?>"> 	
								</div><!-- /.form-item -->

								<div class="col-sm-4 form-item"> 
									<input type="text" class="form-control" name="email_id" id="email_id" placeholder="Email Address" required pattern="[a-z0-9_]+@[a-z0-9.-]+\.[a-z]{2,3}$"> 	
								</div><!-- /.form-item -->
								<div class="class="btn-container">
									<button type="submit" class="btn btn-sm btn-light-green">Book Table Now</button>
								</div><!-- /.btn-container -->

							</form><!-- /.choose-table-form -->
						</div><!-- /.choose-table --> 
					</div><!-- /.book-table -->
					
					
										</div><!-- /.oc-container -->
									</div><!-- /.oc-container -->
				</section><!-- /#book-table -->
				<!-- Book Table  End -->

