`                                   <div class="form-group">
									<label for="text">Name</label>
									<input type="text" name="name" value="<?php echo !empty($postData['name'])?$postData['name']:'';?>" placeholder="Your name" required="" />
									<div class="invalid-feedback">
                                    Name is required
									</div>
								</div>

								<div class="form-group">
									<label for="email">Email Address</label>
									<input type="email" name="email" value= "<?php echo !empty($postData['email'])?$postData['email']:'';?>" placeholder="Your email" required="" />
								    <div class="invalid-feedback">
								    	
                                        Email is invalid
							    	</div>
								</div>
								<div class="form-group">
									<label for="w3review">Description</label>
									<textarea name="message" placeholder="Give Feedback..." required = "">"<?php echo !empty($postData['message'])?$postData['message']:'';?>"</textarea>
								    <div class="invalid-feedback">
								    	Description is required
							    	</div>
								</div>


								<div class="form-group m-0">
									<button type="submit" name = "submit" class="btn btn-primary btn-block">
										send feedback
									</button>
								</div>





                                <form method="POST" class="my-login-validation" novalidate="">
                            <div class="input-group">
        <input type="text" name="name" value="<?php echo !empty($postData['name'])?$postData['name']:'';?>" placeholder="Your name" required="" />
    </div>
    <div class="input-group">	
        <input type="email" name="email" value= "<?php echo !empty($postData['email'])?$postData['email']:'';?>" placeholder="Your email" required="" />
    </div>
    <div class="input-group">
        <textarea name="message" placeholder="Give Feedback..." required = "">"<?php echo !empty($postData['message'])?$postData['message']:'';?>"</textarea>
    </div>
		
    <!-- Add hCaptcha CAPTCHA box -->
    <div class="h-captcha" data-sitekey="<?php echo $sitekey; ?>"></div>
	
    <!-- Submit button -->
    <input type="submit" name="submit" value="SUBMIT">
							
							</form>