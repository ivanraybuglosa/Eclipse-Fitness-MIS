
<?php
 include "../dbConnect.php";
 session_start();
 if(!isset($_SESSION['username'])){
    header('location: ../login.php');
 }
 include("includes/header.php"); ?>
 <section class="content">
 	<div class="card">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                        	<th>TIME:</th>
                                            <th>SUNDAY</th>
                                            <th>MONDAY</th>
                                            <th>TUESDAY</th>
                                            <th>WEDNESDAY</th>
                                            <th>THURSDAY</th>
                                            <th>FRIDAY</th>
                                            <th>SATURDAY</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <th class="align-center">8:00 - 9:00</th>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                        </tr>
                                        <tr>
                                            <th class="align-center">9:00 - 10:00</th>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                        </tr>
                                        <tr>
                                            <th class="align-center">10:00 - 11:00</th>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                        </tr>
                                        <tr>
                                            <th class="align-center">11:00 - 12:00</th>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                        </tr>
                                        <tr>
                                            <th class="align-center">12:00 - 13:00</th>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                        </tr>
                                        <tr>
                                            <th class="align-center">13:00 - 14:00</th>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>      
                                        </tr>
                                        <tr>
                                            <th class="align-center">14:00 - 15:00</th>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                        </tr>
                                        <tr>
                                            <th class="align-center">15:00 - 16:00</th>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                        </tr>
                                        <tr>
                                            <th class="align-center">16:00 - 17:00</th>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                        </tr>
                                        <tr>
                                            <th class="align-center">17:00 - 18:00</th>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                        </tr>
                                        <tr>
                                            <th class="align-center">18:00 - 19:00</th>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                        </tr>
                                        <tr>
                                            <th class="align-center">19:00 - 20:00</th>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                             <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                            <td class="align-center"><button type="button" class="btn bg-green" onClick="$(this).prop('disabled', true);">Reserve</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
 </section>
 <?php include("includes/footer.php"); ?>
 <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <!--index -->
    <script src="../assets/js/pages/index.js"></script>
    <!--form-wizard-->
    <script src="../assets/js/pages/forms/form-wizard.js"></script>
    <script src="../assets/plugins/chartjs/Chart.bundle.js"></script>
    <script src="../assets/js/pages/charts/chartjs.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
     <script src="../assets/js/pages/forms/basic-form-elements.js"></script>

     
   
</body>

</html>