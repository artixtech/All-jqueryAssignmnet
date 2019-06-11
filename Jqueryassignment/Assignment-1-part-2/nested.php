<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>checkbox like tree structure</title>												
	  <meta charset="utf-8">
	  <script type="text/javascript" src="js/script.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">
					<p class="text-center">Manage Permission</p>
				</div>
				<div class="panel-body">
				<?php
					if($_SERVER['REQUEST_METHOD'] == 'POST')
		            {
		            	?><!-- 
							<div class="col-sm-4">
							</div> -->
							<div class="col-sm-8">				
								<form method="post" name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">         
									<ul>
									  <li>
									    <label for="tall">Property</label>
									    <?php 
				                           if( empty($_POST["tall"]) ){
					                         echo "<span class='uncheck'> unchecked.</span>"; 
					                        }else {
					                         echo "<span class='check'>checked.</span>";
					                        } 
				                        ?>
									    <ul>
									      <li>
									        <label for="tall-1">Edit Property</label>
					                          <?php
					                            if( empty($_POST["tall-1"]) ){
					                             echo "<span class='uncheck'> unchecked.</span>"; 
					                            }else {
					                             echo "<span class='check'>checked.</span>";
					                              } 
					                          ?>
									      </li>
									      <li>
									        <label for="tall-2">Remove Property</label>
					                          <?php
					                            if( empty($_POST["tall-2"]) ){
					                             echo "<span class='uncheck'> unchecked.</span>"; 
					                            }else {
					                             echo "<span class='check'>checked.</span>";
					                              } 
					                          ?>
									      </li>
									      <li>
									        <label for="tall-3">Add Property</label>
					                          <?php
					                            if( empty($_POST["tall-3"]) ){
					                             echo "<span class='uncheck'> unchecked.</span>"; 
					                            }else {
					                             echo "<span class='check'>checked.</span>";
					                              } 
					                          ?>
									      </li>
									    </ul>
									  </li>
									  <li>
									    <label for="short">Testimonial</label>
					                      	<?php
					                          if( empty($_POST["short"]) ){
					                           echo "<span class='uncheck'> unchecked.</span>"; 
					                          }else {
					                           echo "<span class='check'>checked.</span>";
					                            } 
					                        ?>
									    <ul>
									      <li>
									        <label for="short-1">Add</label>
					                        <?php
					                            if( empty($_POST["short-1"]) ){
					                             echo "<span class='uncheck'> unchecked.</span>"; 
					                            }else {
					                             echo "<span class='check'>checked.</span>";
					                              } 
					                          ?>
									      </li>
									      <li>
									        <label for="short-2">Remove</label>
					                          <?php
					                            if( empty($_POST["short-2"]) ){
					                             echo "<span class='uncheck'> unchecked.</span>"; 
					                            }else {
					                             echo "<span class='check'>checked.</span>";
					                              } 
					                          ?>
									      </li>
									      <li>
									        <label for="short-3">View</label>
					                          <?php
					                            if( empty($_POST["short-3"]) ){
					                             echo "<span class='uncheck'> unchecked.</span>"; 
					                            }else {
					                             echo "<span class='check'>checked.</span>";
					                              } 
					                          ?>
									      </li>
									      <li>
									        <label for="short-4">Edit</label>
					                          <?php
					                            if( empty($_POST["short-4"]) ){
					                             echo "<span class='uncheck'> unchecked.</span>"; 
					                            }else {
					                             echo "<span class='check'>checked.</span>";
					                              } 
					                          ?>
									      </li>
									    </ul>
									  </li>
									  <li>
									    <label for="user">User</label>
									    <?php 
				                           if( empty($_POST["user"]) ){
					                         echo "<span class='uncheck'> unchecked.</span>"; 
					                        }else {
					                         echo "<span class='check'>checked.</span>";
					                        } 
				                        ?>
									    <ul>
									      <li>
									        <label for="user-1">Edit user</label>
					                          <?php
					                            if( empty($_POST["user-1"]) ){
					                             echo "<span class='uncheck'> unchecked.</span>"; 
					                            }else {
					                             echo "<span class='check'>checked.</span>";
					                              } 
					                          ?>
									      </li>
									      <li>
									        <label for="user-2">View user list</label>
					                          <?php
					                            if( empty($_POST["user-2"]) ){
					                             echo "<span class='uncheck'> unchecked.</span>"; 
					                            }else {
					                             echo "<span class='check'>checked.</span>";
					                              } 
					                          ?>
									      </li>
									      <li>
									        <label for="user-3">Add_user</label>
					                          <?php
					                            if( empty($_POST["user-3"]) ){
					                             echo "<span class='uncheck'> unchecked.</span>"; 
					                            }else {
					                             echo "<span class='check'>checked.</span>";
					                              } 
					                          ?>
									      </li>
									    </ul>
									  </li>
									  <li>
									    <label for="member">Membership</label>
									    <?php 
				                           if( empty($_POST["member"]) ){
					                         echo "<span class='uncheck'> unchecked.</span>"; 
					                        }else {
					                         echo "<span class='check'>checked.</span>";
					                        } 
				                        ?>
									    <ul>
									      <li>
									        <label for="member-1">Edit Membership</label>
					                          <?php
					                            if( empty($_POST["member-1"]) ){
					                             echo "<span class='uncheck'> unchecked.</span>"; 
					                            }else {
					                             echo "<span class='check'>checked.</span>";
					                              } 
					                          ?>
									      </li>
									      <li>
									        <label for="member-2">Remove Membership</label>
					                          <?php
					                            if( empty($_POST["member-2"]) ){
					                             echo "<span class='uncheck'> unchecked.</span>"; 
					                            }else {
					                             echo "<span class='check'>checked.</span>";
					                              } 
					                          ?>
									      </li>
									      <li>
									        <label for="member-3">Add Membership</label>
					                          <?php
					                            if( empty($_POST["member-3"]) ){
					                             echo "<span class='uncheck'> unchecked.</span>"; 
					                            }else {
					                             echo "<span class='check'>checked.</span>";
					                              } 
					                          ?>
									      </li>
									    </ul>
									  </li>
									</ul>
								</form>
							</div>
				            	<?php
				            }
				            else{
				            	?>
							<div class="col-sm-8">				
								<form method="post" name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
										<ul>
								             <li>
								               <input type="checkbox" name="tall" id="tall"> 
								               <label for="tall"> Property</label>
								               <ul>
								                  <li>
								                     <input type="checkbox" name="tall-1" class="tall-1">
									        		<label for="tall-1">Edit Property</label> 
								                  </li>
								                  <li>
								                     <input type="checkbox" class="check-1">
								                     <lable>Remove Property</lable>
								                  </li>
								                  <li>
											        <input type="checkbox" name="tall-3" class="tall-1">
											        <label for="tall-3">Add Property</label>
								                  </li>
								               </ul>
								            </li>
								            <li>
								               <input type="checkbox" id="testimonial">
								               <lable>Testimonial </lable>
								               <ul>
								                  <li>
								                     <input type="checkbox" class="check-2">
								                     <label>Add</label>
								                  </li>
								                  <li>
								                     <input type="checkbox" class="check-2">
								                     <label>Remove </label>
								                  </li>
								                  <li>
								                     <input type="checkbox" class="check-2">
								                     <label>Edit</label>
								                  </li>
								                  <li>
								                     <input type="checkbox" class="check-2">
								                     <label>View</label>
								                  </li>
								               </ul>
								            </li>
								            <li>
								               <input type="checkbox" id="user">
								               <label>User </label>
								               <ul>
								                  <li>
								                     <input type="checkbox" class="check-3"> 
								                     <label>Remove User</label>
								                  </li>
								                  <li>
								                     <input type="checkbox" class="check-3"> 
								                     <label>Add User</label>
								                  </li>
								                  <li>
								                     <input type="checkbox" class="check-3">
								                     <label>Remove User</label>
								                  </li>
								               </ul>
								            </li>
								            <li>
								                <input type="checkbox" id="member">
								                 <label>Membership</label>
								                 <ul>
								                  <li>
								                     <input type="checkbox" class="check-4"> 
								                     <label>Add Membership</label>
								                  </li>
								                  <li>
								                     <input type="checkbox" class="check-4">
								                     <label> Remove Membership</label>
								                  </li>
								                  <li>
								                     <input type="checkbox" class="check-4"> 
								                     <label>Edit Membership</label>
								                  </li>
								               </ul>
								            </li>
								         </ul>
                 
									<!-- <ul>
									  <li>
									    <input type="checkbox" name="tall" id="tall">
									    <label for="tall">Property</label>

									    <ul>
									      <li>
									        <input type="checkbox" name="tall-1" class="tall-1">
									        <label for="tall-1">Edit Property</label>
									      </li>
									      <li>
									        <input type="checkbox" name="tall-2" class="tall-1">
									        <label for="tall-2">Remove Property</label>
									      </li>
									      <li>
									        <input type="checkbox" name="tall-3" class="tall-1">
									        <label for="tall-3">Add Property</label>
									      </li>
									    </ul>
									  </li>
									  <li>
									    <input type="checkbox" name="short" id="short">
									    <label for="short">Testimonial</label>

									    <ul>
									      <li>
									        <input type="checkbox" name="short-1" class="short-1">
									        <label for="short-1">Add</label>
									      </li>
									      <li>
									        <input type="checkbox" name="short-2" class="short-1">
									        <label for="short-2">Remove</label>
									      </li>
									      <li>
									        <input type="checkbox" name="short-3" class="short-1">
									        <label for="short-3">View</label>
									      </li>
									      <li>
									        <input type="checkbox" name="short-3" class="short-1">
									        <label for="short-4">Edit</label>
									      </li>
									    </ul>
									  </li>
									  <li>
									    <input type="checkbox" name="user" id="user">
									    <label for="user">User</label>

									    <ul>
									      <li>
									        <input type="checkbox" name="user-1" class="user-1">
									        <label for="user-1">Edit user</label>
									      </li>
									      <li>
									        <input type="checkbox" name="user-2" class="user-1">
									        <label for="user-2">View user list</label>
									      </li>
									      <li>
									        <input type="checkbox" name="user-3" class="user-1">
									        <label for="user-3">Add_user</label>
									      </li>
									    </ul>
									  </li>
									  <li>
									    <input type="checkbox" name="member" id="member">
									    <label for="member">Membership</label>

									    <ul>
									      <li>
									        <input type="checkbox" name="member-1" class="member-1">
									        <label for="member">Edit Membership</label>
									      </li>
									      <li>
									        <input type="checkbox" name="member-2"  class="member-1">
									        <label for="member-2">Remove Membership</label>
									      </li>
									      <li>
									        <input type="checkbox" name="member-3"  class="member-1">
									        <label for="member-3">Add Membership</label>
									      </li>
									    </ul>
									  </li>
									</ul> -->
									<hr/>
					                  <div style="text-align: left;">
					                    <button class="btn btn-default">Submit</button>
					                  </div>

								</form>
							</div>
							<?php	
		            }
	             ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>