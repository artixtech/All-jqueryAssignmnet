<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Assignment 2</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="js/script.js" type="text/javascript"></script>
   <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p class="text-center">Manage Permission</p>
                </div>
                       <div class="col-sm-8">           
                            <form method="post" name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">   
                                    <ul class="tree" id="tree">
                                        <li><input type="checkbox" name="account_settings" value="yes">Property 

                                            <!-- <?php
                                                if(empty($_POST["account_settings"]))
                                                {
                                                    echo "<span class='uncheck'>unchecked</span>";
                                                }
                                                else{
                                                    echo "<span class='check'>checked</span>";
                                                }
                                            ?> -->
                                            <ul>
                                                <li><input type="checkbox" name="one" value="one">Add Property 
                                                <!-- <?php
                                                if(empty($_POST["one"]))
                                                {
                                                    echo "<span class='uncheck'>unchecked</span>";
                                                }
                                                else{
                                                    echo "<span class='check'>checked</span>";
                                                }
                                            ?> -->
                                        </li>
                                                <li><input type="checkbox" name="two" value="two">Remove Property
                                                <!-- <?php
                                                if(empty($_POST["two"]))
                                                {
                                                    echo "<span class='uncheck'>unchecked</span>";
                                                }
                                                else{
                                                    echo "<span class='check'>checked</span>";
                                                }
                                            ?>  -->
                                        </li>
                                                <li><input type="checkbox" name="three" value="user_roles">Edit Property 
                                                   <!--  <?php
                                                if(empty($_POST["three"]))
                                                {
                                                    echo "<span class='uncheck'>unchecked</span>";
                                                }
                                                else{
                                                    echo "<span class='check'>checked</span>";
                                                }
                                            ?> -->
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="Testimonial" value="yes">Testimonial 
                                            <!-- <?php
                                                if(empty($_POST["Testimonial"]))
                                                {
                                                    echo "<span class='uncheck'>unchecked</span>";
                                                }
                                                else{
                                                    echo "<span class='check'>checked</span>";
                                                }
                                            ?> -->
                                            <ul>
                                                 <li><input type="checkbox" name="test-1" value="yes">Add
                                                <!-- <?php
                                                if(empty($_POST["test-1"]))
                                                {
                                                    echo "<span class='uncheck'>unchecked</span>";
                                                }
                                                else{
                                                    echo "<span class='check'>checked</span>";
                                                }
                                            ?> -->
                                                 </li>
                                                <li><input type="checkbox" name="test-2" value="yes">Remove
                                                <!-- <?php
                                                if(empty($_POST["test-2"]))
                                                {
                                                    echo "<span class='uncheck'>unchecked</span>";
                                                }
                                                else{
                                                    echo "<span class='check'>checked</span>";
                                                }
                                            ?> -->
                                                </li>
                                                <li><input type="checkbox" name="bank_account" value="test-3">Edit
                                                <!-- <?php
                                                if(empty($_POST["test-3"]))
                                                {
                                                    echo "<span class='uncheck'>unchecked</span>";
                                                }
                                                else{
                                                    echo "<span class='check'>checked</span>";
                                                }
                                            ?> -->
                                                </li>
                                                <li><input type="checkbox" name="bank_account" value="test-4">View
                                                <!-- <?php
                                                if(empty($_POST["test-4"]))
                                                {
                                                    echo "<span class='uncheck'>unchecked</span>";
                                                }
                                                else{
                                                    echo "<span class='check'>checked</span>";
                                                }
                                            ?> -->
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="view" value="yes">User
                                                <ul>
                                                    <li><input type="checkbox" name="view" value="yes">Add user</li>
                                                    <li><input type="checkbox" name="view" value="yes">Remove User</li>
                                                    <li><input type="checkbox" name="view" value="yes">Edit user</li>
                                                </ul>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="view" value="yes">Membership
                                                    <ul>
                                                        <li><input type="checkbox" name="view" value="yes">Add membership</li>
                                                        <li><input type="checkbox" name="crud" value="yes">Remove Membership</li>
                                                        <li><input type="checkbox" name="view" value="yes">View Membership</li>
                                                    </ul>
                                        </li>
                                    </ul>

                             <div style="text-align: left;">
                                <button class="btn btn-default">Submit</button>
                             </div>
                          </form>
                       </div>
                </div>
           </div>
       </div>
    </div>
</body>
</html>