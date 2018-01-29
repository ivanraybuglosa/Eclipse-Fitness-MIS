<?php
 include "../dbConnect.php";
 session_start();
 if(!isset($_SESSION['username'])){
    header('location: ../login.php');
 }
 include("includes/header.php"); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>REGISTRATION</h2>
            </div>
           	<!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body" >
                            <form id="wizard_with_validation" method="POST">
                               
                                <h3>Personal Information</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" >
                                            <label class="form-label">First Name</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="surname" class="form-control" >
                                            <label class="form-label">Last name</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" name="email" class="form-control" >
                                            <label class="form-label">Email</label>
                                        </div>
                                    </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="contactNumber" >
                                        <label class="form-label">Contact number</label>
                                    </div>
                                    </div>      
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="Date" >
                                        <label class="form-label">Birthdate</label>
                                    </div>
                                    </div>  
                            
									<div class="form-group" style="margin-top:20px">
                                        <input type="radio" name="gender" id="male" class="with-gap">
                                        <label for="male">Male</label>

                                        <input type="radio" name="gender" id="female" class="with-gap">
                                        <label for="female" class="m-l-20">Female</label>
                                    </div>
                                </fieldset>

                                <h3>Member Registration</h3>
                                <fieldset>
                                    <!-- //Radio buttons -->
                                     <h4>Add as a Member?</h4>
                                    <div>
                                        <input type="radio" id="rdobuy" name="foo" value="buy"  class="with-gap" />
                                         <label for="rdobuy">Yes</label>
                                         <div class="reveal-if-active">        
                                        <label for="which-dog">Please Choose Membership Type</label>   
                                         <div class="col-md-6" >
                                            <select class="form-control show-tick">
                                                <option>Student</option>
                                                <option>Regular</option>
                                            </select>
                                         </div>
                                          <div class="col-md-6" >
                                            <select class="form-control show-tick">
                                                <option>1 Month</option>
                                                <option>3 Months</option>
                                                <option>6 Months</option>
                                                <option>12 Months</option>
                                            </select>
                                         </div>
                                        </div>
                                        
                                    </div>
                                    <div>
                                        <input type="radio" name="foo" value="sell" id="rdosell"  class="with-gap"/>
                                        <label for="rdosell">No</label>
                                        <div class="reveal-if-active">
                                        <input type="hidden" id="which-cat" name="which-cat" class="require-if-active" data-require-pair="#rdosell" />
                                        </div>
                                    </div>
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
           
        </div>
    </section>
	


    <?php include("includes/footer.php"); ?>
    
    <script>
var FormStuff = {    init: function() {    this.applyConditionalRequired();    this.bindUIActions();  },    bindUIActions: function() {    $("input[type='radio'], input[type='checkbox']").on("change", this.applyConditionalRequired);  },    applyConditionalRequired: function() {        $(".require-if-active").each(function() {      var el = $(this);      if ($(el.data("require-pair")).is(":checked")) {        el.prop("required", true);      } else {        el.prop("required", false);      }    });      }  };FormStuff.init();
</script>



        <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/forms/form-wizard.js"></script>
    <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="../assets/js/pages/forms/basic-form-elements.js"></script>
    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>

    </body>
    </html>























