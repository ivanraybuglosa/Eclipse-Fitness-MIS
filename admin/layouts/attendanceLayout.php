<div id="print">
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    <center>
    <img class="img-responsive" style="width: 200px; margin-left:45px;" src="eclipse_logo.png">
    <h2>Client Attendance Report</h2>
                         <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr>
                                        <th align="center">Client Name &nbsp; &nbsp; &nbsp;</th>
                                        <th align="center">Time-in</th>
                                        <th align="center">Time-out</th>
                                        <th align="center">Towels</th>
                                        <th align="center">&nbsp; Locker No.</th>
                                        <th align="center">Date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                  <?php 
                                    $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

                                     if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
                                        if($_REQUEST['action_type'] == 'filter'){

                                            $filterstart = $_POST['filter_start'];
                                            $filterend = $_POST['filter_end'];
                                    
                                     $pat = $conn->query("SELECT * FROM 'attendance' INNER JOIN 'client' ON attendance.CLIENT_ID = client.CLIENT_ID WHERE A_TimeOut != '' && A_fdate BETWEEN $filterstart AND $filterend") or die(mysqli_error());

                                           while($fetchF = $pat->fetch_array()) {
                                              
                                              $id = $fetchF['CLIENT_ID']; 

                                              ?>
                                              <tr>
                                                <td><?php echo $fetchF['CLIENT_FirstName']; ?> 
                                                    <?php echo $fetchF['CLIENT_LastName']; ?> &nbsp;</td>
                                                <td>&nbsp; <?php echo date('g:i A', strtotime($fetchF['A_TimeIn'])) ?> </td>
                                                <td>&nbsp; <?php echo date('g:i A', strtotime($fetchF['A_TimeOut'])) ?> </td>
                                                <td>&nbsp; &nbsp;<?php echo $fetchF['A_TowelQty']; ?></td>
                                                <td>&nbsp;<?php echo $fetchF['A_LockerKey']; ?></td>
                                                <td>&nbsp;<?php echo $fetchF['A_fdate'] ?></td>
                                            </tr>
                                           
                                    

                                </tbody>
                            </table>
                            <h4>Printed By: _________________ </h4>
                        </center>
                        </div>

                    <button class="btn bg-teal btn-lg" onclick="printContent('print')" style="margin:15px; width:20%;">Print</button>
                    

                    <script>

                     function printContent(el) {
                         var restorepage = document.body.innerHTML;
                         var printcontent = document.getElementById(el).innerHTML;
                         document.body.innerHTML = printcontent;
                         window.print();
                         document.body.innerHTML = restorepage;
                     }

                    </script>
                    <?php
                                        } } }
                                            ?>