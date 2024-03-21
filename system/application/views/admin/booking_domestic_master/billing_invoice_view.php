<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    <head>
        <meta charset="UTF-8">
        <title>Invoice</title>
		<base href="<?php echo base_url(); ?>">
        <link rel="shortcut icon" href="assets/admin_assets/dist/images/favicon.ico" />
        <meta name="viewport" content="width=device-width,initial-scale=1"> 
		
        <!-- START: Template CSS-->
        <link rel="stylesheet" href="assets/admin_assets/dist/vendors/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/admin_assets/dist/vendors/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/admin_assets/dist/vendors/jquery-ui/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="assets/admin_assets/dist/vendors/simple-line-icons/css/simple-line-icons.css">        
        <link rel="stylesheet" href="assets/admin_assets/dist/vendors/flags-icon/css/flag-icon.min.css">         
        <!-- END Template CSS-->

        <!-- START: Page CSS-->
        <link rel="stylesheet"  href="assets/admin_assets/dist/vendors/chartjs/Chart.min.css">
        <!-- END: Page CSS-->

        <!-- START: Page CSS-->   
        <link rel="stylesheet" href="assets/admin_assets/dist/vendors/morris/morris.css"> 
        <link rel="stylesheet" href="assets/admin_assets/dist/vendors/weather-icons/css/pe-icon-set-weather.min.css"> 
        <link rel="stylesheet" href="assets/admin_assets/dist/vendors/chartjs/Chart.min.css"> 
        <link rel="stylesheet" href="assets/admin_assets/dist/vendors/starrr/starrr.css"> 
        <link rel="stylesheet" href="assets/admin_assets/dist/vendors/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="assets/admin_assets/dist/vendors/ionicons/css/ionicons.min.css"> 
        <link rel="stylesheet" href="assets/admin_assets/dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css">
        <!-- END: Page CSS-->

        <!-- START: Custom CSS-->
        <!--<link rel="stylesheet" href="assets/admin_assets/dist/css/main.css">-->
         <!-- <link rel="stylesheet" href="assets/plugins/bootstrap-select/bootstrap-select.min.css"> -->
         <link rel="stylesheet" href="assets/multiselect/bootstrap-multiselect.css" type="text/css">
        <!-- END: Custom CSS-->


         <link rel="stylesheet" href="assets/dist/vendors/datatable/css/dataTables.bootstrap4.min.css" />
        <link rel="stylesheet" href="assets/dist/vendors/datatable/buttons/css/buttons.bootstrap4.min.css"/>
         <!-- END Head-->    <!-- END Head-->
<style type="text/css">



.table:not(.table-dark) td, .table:not(.table-dark) th {
    padding-bottom: 0em!important;
  }
  
.card .card-body {
  font-size: 12px;
  font-weight: bold;
}


.rakesh{ font-size: 13px;color: black;}

tr.border-bottom {  border-bottom: 1px solid black!important; }
address{font-size: 12px; padding: 0px 5px;}

.viewInoviceHeader th {
text-align: left;
}
.viewInoviceHeader td,.viewInoviceHeader th{
height: 25px;
font-family: Arial, Helvetica, sans-serif;
font-size:12px;
}

.viewInoviceHeader {
    width: 100%;
    border: 1px solid #000;
    margin-bottom: 0px;
    padding: 5px !important;
}


.left{
float:left;
padding-top: 6px;
padding-left: 25px;
}
.headingf{
margin:0 auto;
text-align: center;
}


table.table.table-borderless {
    padding: 5px !important;
    margin-bottom: 0px !important;
    border:0px;

}
.nodata td, .nodata{
    border:none;
}

table.table.table-borderless td {
    padding: 0px 10px;
    border: 0px !important;
}


.border-bottom{
    border-bottom: 1px solid #000!important;
        border-radius: 0px;
}
.card .card-body {
    padding: 0px;

}

tr.border-bottom td.extra-border {
   border-right: 1px solid #000 !important;
}



    

.card-body.table-responsive.new-design {
    padding: 15px 0px;
    margin-top: 20px;
    margin-bottom: 20px;
    border-radius: 0px;
    border-color: #000;
}


.table:not(.table-dark) td{ padding: 0em 10px; }
.card .card-body { font-size: 12px; font-weight: normal;}         
b, strong {  font-weight: bold;}        


 table.table.table-borderless.border-1px {
    border: 1px solid #000;
} 

.border-1px{border-bottom: 1px solid #000 !important; }
 

tr.border-bottom.remove-extra-border {
    border-bottom: 0px !important;
}
.card-body.table-responsive.remove-bottom-border {
    border-bottom: 0px;
}

.card.redial-border-light.redial-shadow.border-full1.remove-top-bottom {
    border-top: 1px solid #000;
    border-bottom: 1px solid #000;
}

.border-top1px {
    border-top: 1px solid #000 !important;
    border-radius: 0px !important;
}
.table:not(.table-dark) thead th, .table:not(.table-dark) tfoot th, .table:not(.table-dark) td, .table:not(.table-dark) th{border-color:#000!important;}
.fontm{font-family: arial; color: black;}
    
 .card {
    position: initial;
    display: inherit;
    display: initial;
    -ms-flex-direction: column;
    flex-direction: initial;
    min-width: inherit;
    word-wrap: initial;
    background-color: inherit;
    background-clip: initial;
    border: inherit;
    border-radius: initial;
} 

p {
    margin-top: 0;
    margin-bottom: 0rem;
}  


.table td, .table th {
    border-top: 0px solid #000;
    padding: 0px 5px;
}
.border-1px th {
    border-bottom: 0px solid #000;
} 

.table thead th {
    border-bottom: 0px solid #dee2e6;
}

.table, table{
    border: 1px solid #000;
    margin:0px;
}

table tr{
    border-bottom: 1px solid #000;
} 

img.logo-css {
    margin-top: 2px;
    margin-bottom: 2px;
}

.border-right {
    border-right: 1px solid #000000!important;
}

body {
    color: #000!important;
    font-size: 12px;
    font-family: Arial, sans-serif !important;
}

table.table.table-borderless tr {
    border: 0px;
}

.main-div {
    max-width: 1400px;
    margin: auto;
    background: lavender;padding:10px 0px;
}
    
</style>
    </head>
 
    <body >
        
     <div class="main-div">
        
           <div class="col-12 col-lg-12">
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="card border-0 border-top1px">
                                          
                                            <div class="card-body table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td >
                                                              <strong style="font-size: 35px;"> <?php echo $company_details->company_name;?> </strong><br>
                                                                    <p style="width: 50%;" class="fontm"><?php echo $company_details->address;?></p> 
                                                                <p style="font-size: 14px;color: black;">  
                                                                <b>Telephone:</b><?php echo $company_details->phone_no;?><br>
                                                                <b>E-Mail:</b><?php echo $company_details->email;?><br>                       
                                                                <b>Web Site:</b> <?php echo $company_details->website; ?><br></p>
                                                                <b>GST No : </b> <?php echo $company_details->gst_no; ?><br>
                                                                <b>PAN No. : </b> <?php echo $company_details->pan; ?><br>
                                                              </td>
                                                            <td><img class="logo-css" src="<?php echo base_url();?>./assets/company/<?php echo $company_details->logo; ?>" alt="" style="height: 155px;width: 225px;">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="col-12 col-md-12">
                                        <div class="card border-0">
                                      
                                            <div class="card-body table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td align="center">
                                                              <strong style="font-size: 20px;" >TAX INVOICE</strong><br>
                                                            </td>
                                                          
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="card border-0">
                                            <div class="card-body table-responsive remove-bottom-border">
                                                <table class="viewInoviceHeader">
                                                  
                                                    <tbody>
                                                        <tr>
                                                            <td><address>To,<br>
                                                                    <b style="font-size:15px!important;"><?php echo $customer->customer_name; ?></b><br> <?php echo $customer->address; ?><br><b> Gst No : </b> <?php echo $customer->gstno; ?><br>
                                                                    <b>PLACE OF SUPPLY : </b><?php	$whr_c =array('customer_id'=>$customer->customer_id);
                                                        $cust_details = $this->basic_operation_m->get_table_row('tbl_customers', $whr_c);
																	
																	  $whr_u =array('id'=>$cust_details->state);
                                                        $state_details = $this->basic_operation_m->get_table_row('state', $whr_u);
																	echo $state_details->state; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <b>State Code : </b><?php echo substr($cust_details->gstno, 0, 2); ?></address></td>
                                                            <td><address>
                                                                    <b>Invoice No:</b>  <?php
                                                                                    $invoiceNumebr = $customer->invoice_number;
                                                                                    if(!$customer->invoice_number)
                                                                                    {
                                                                                        $invoiceNumebr = 'OMCS/'.$year.'-'.($year+1).'/'.$customer->id;
                                                                                    }
                                                                                    echo $invoiceNumebr;
                                                                                ?>                        
                                                                                <br>
                                                                <b>Invoice Date:</b> <?php
                                                                                $invoiceDate = $customer->invoice_date;
                                                                                if(!$invoiceDate)
                                                                                {
                                                                                    $invoiceDate = date('Y-m-d');
                                                                                }
                                                                                echo date('d-m-y', strtotime($invoiceDate));
                                                                            ?><br>
                                                                <b>Invoice Period:</b> <?php
                                                                                $invoice_from_date = $customer->invoice_from_date;
                                                                                if(!$invoice_from_date)
                                                                                {
                                                                                    $invoice_from_date = '';
                                                                                }
                                                                                $fromDate = date('d-m-y', strtotime($invoice_from_date));
                                                                                
                                                                                $invoice_to_date = $customer->invoice_to_date;
                                                                                if(!$invoice_to_date)
                                                                                {
                                                                                    $invoice_to_date = '';
                                                                                }
                                                                                $toDate = date('d-m-y', strtotime($invoice_to_date));
                                                                                
                                                                                echo $fromDate.' - '.$toDate;
                                                                            ?>
                                                              </address></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="card border-full1">
                                            <div class="card-body border-right">
                                                <table class="table">
                                                    <thead>
                                                        <tr class="border-1px" >
                                                          
                                                             <th>SR NO</th>
                                                             <th  class="text-center">DATE</th>
                                                             <th  class="text-center">AWB NO</th>
                                                             <th  class="text-center">FROM</th>
                                                             <th  class="text-center">TO</th>
                                                             <th  class="text-center">CHARGEABLE WEIGHT</th>
                                                             <th  class="text-center">PIECE</th>
                                                             <th class="text-center">RATE PER KG</th>
                                                             <th class="text-center">FRIGHT</th>
                                                             <th class="text-center">FUEL CHARGE</th>
                                                             <th class="text-center">DOCKET CHARGE</td>
                                                             <th colspan="2" class="text-center">AMOUNT</th>
                                                        </tr>
                                                        
                                                    </thead>
                                                    <tbody style="font-size: 14px;color: black;" >
                                                        <?php
                                                            $sub_total = 0;
                                                            $fuelSubCharges = 0;
                                                            $cnt=0;
                                                            if(!empty($allpoddata)) {
                                                                //echo count($allpoddata);
                                        // $i = 0; 
                                       //print_r($allpoddata);
                                    foreach ($allpoddata as $value) 
                                    { 
                                                                 $cnt++;  ?>
                                                               <tr class="border-bottom">
                                                            <td class="text-center" style="width: 5%;"><?php echo $cnt;?></td>
                                                            <td class="text-center" style="width: 10%;"><?php echo date('d-m-Y', strtotime($value['booking_date'])); ?></td>
                                                            <td class="text-center"><?php echo $value['pod_no']; ?></td>
                                                            <?php	$whr_c1 =array('pod_no'=>$value['pod_no']);
                                                        $cust_details1 = $this->basic_operation_m->get_table_row('tbl_domestic_booking', $whr_c1);
                                                        	$whr_c2 =array('id'=>$cust_details1->sender_city);
                                                        $cust_details2 = $this->basic_operation_m->get_table_row('city', $whr_c2);
                                                        
                                                        ?>
                                                            <td class="text-center"><?php echo $cust_details2->city; ?></td>
                                                            <td class="text-center"><?php echo $value['reciever_city']; ?></td>
                                                            <td class="text-center"><?php echo $value['chargable_weight']; ?></td>
                                                            <td class="text-center"><?php echo $value['no_of_pack']; ?></td>
                                                            <td class="text-center"><?= $cust_details1->frieht; ?></td>
                                                            <td class="text-center"><?php  if($value['frieht']!="" && $value['frieht']!="0"){ ?>
                                                                <?php echo number_format((float)$value['frieht'], 2, '.', ''); ?>
                                                                <?php  } ?>
                                                            </td>
                                                            <td class="text-center">
                                                            <?php  if($value['fuel_subcharges']!="" && $value['fuel_subcharges']!="0"){ ?>
                                                               <?php echo number_format((float)$value['fuel_subcharges'], 2, '.', '');  ?>
                                                                  <?php  }    ?>
                                                            </td>
                                                            <td class="text-center">
                                                            <?php echo $value['awb_charges']; ?>
                                                            </td>
                                                            <td class="text-center">
                                                            <?php echo $value['amount']; ?>
                                                            </td>
                                                           
                                                            <td colspan="2" class="text-right">                                        
                                                               <table  class="table table-borderless">
                            <!--                                       <tr class="nodata"><td colspan="20">&nbsp;</td></tr>-->
                            <!--<tr class="nodata"><td colspan="20">&nbsp;</td></tr>-->
                            <!--<tr class="nodata"><td colspan="20">&nbsp;</td></tr>-->
                            <!--<tr class="nodata"><td colspan="20">&nbsp;</td></tr>-->
                                                                
                                                                <!-- <?php  if($value['transportation_charges']!="" && $value['transportation_charges']!="0"){ ?>
                                                                  <tr><td>TransCh:</td><td><?php echo number_format((float)$value['transportation_charges'], 2, '.', ''); ?></td></tr>
                                                                 <?php  } ?>
                                                                  <?php  if($value['pickup_charges']!="" && $value['pickup_charges']!="0"){ ?>
                                                                  <tr><td>PickupCh.:</td><td><?php echo number_format((float)$value['pickup_charges'], 2, '.', ''); ?></td></tr>
                                                                  <?php  } ?>
                                                                    <?php  if($value['delivery_charges']!="" && $value['delivery_charges']!="0"){ ?>
                                                                  <tr><td>Delivery:</td><td><?php echo number_format((float)$value['delivery_charges'], 2, '.', ''); ?></td></tr>
                                                                  <?php  } ?>
                                                                    <?php  if($value['courier_charges']!="" && $value['courier_charges']!="0"){ ?>
                                                                  <tr><td>Courier:</td><td><?php echo number_format((float)$value['courier_charges'], 2, '.', ''); ?></td></tr>
                                                                  <?php  } ?>
                                                                   <?php  if($value['awb_charges']!="" && $value['awb_charges']!="0"){ ?>
                                                                  <tr><td>AWB:</td><td><?php echo number_format((float)$value['awb_charges'], 2, '.', ''); ?></td></tr>
                                                                  <?php  } ?>
                                                                   <?php  if($value['other_charges']!="" && $value['other_charges']!="0"){ ?>
                                                                  <tr><td>Other:</td><td><?php echo number_format((float)$value['other_charges'], 2, '.', ''); ?></td></tr>
                                                                  <?php  } ?> -->
                                                                   </td>                                                      
                                                                  
                                                                <?php  $sub_total = $sub_total + $value['sub_total'];
                                               $totalpods = count($allpoddata); 
                                        if($cnt >= $totalpods) 
                                        {
                                        
                                        $totalblankrows = 40 - $totalpods*3;
                                        for($i = 0; $i<=$totalblankrows; $i++)
                                        {
                                                                  ?>
                            <tr class="nodata"><td colspan="20">&nbsp;</td></tr>
                            <?php
                                        }
                                        }
                            ?>
                            
                                                              </table>
 
                                                            </td>
                               </tr>

                            <?php } 
                          }?>
                            
                            <tr class="border-bottom">
                                                             <!-- <td  class="extra-border">
                                                                <b>UDYAM Code : </b><?php echo $company_details->udhyam_no; ?><br>
                                                                <b>GST No : </b> <?php echo $company_details->gst_no; ?><br>
                                                                <b>PAN No. : </b> <?php echo $company_details->pan; ?><br>
                                                                <b>TAXABLE SERVICES : </b> <?php echo $company_details->taxable_service; ?><br>
                                                                <b>SAC No. : </b> <?php echo $cust_details->sac_code; ?><br>
                                                            </td> -->
                                                            <td colspan="8" class="extra-border">
                                                              <b>BANK DETAILS: </b><br>
                                                             <b> A/C NAME :</b> <?php echo $company_details->account_name; ?><br>
                                                             <b>BRANCH :</b>  <?php echo $company_details->bank_name; ?>,<?php echo $company_details->branch_name; ?><br>
                                                                <b>A/C NO : </b> <?php echo $company_details->account_number; ?><br>
                                                                <b>IFSC : </b> <?php echo $company_details->ifsc; ?><br>
                                                                <b>MICR : </b> <?php echo $company_details->mrcs; ?><br>
                                                               </td>
                                                                <td colspan="1" class="extra-border text-right">
                                                                    
                                                                    <b>Sub Total</b></br>
                                                                    <b>CGST <?php echo $customer->cgst_per; ?>%</b></br>
                                                                    <b>SGST <?php echo $customer->sgst_per; ?>%</b></br>
                                                                    <b>IGST&nbsp;<?php echo $customer->igst_per; ?>%</b></br>
                                                                    <b>Grand Total<br>(Rounded Off)</b></br>
                                                              </td>
                                                            <td class="text-right" >
                                                                        <?php echo round($sub_total,2); ?></br>
                                                                       <?php echo $customer->cgst_amount; ?></br>
                                                                        <?php echo $customer->sgst_amount;?></br>
                                                                        <?php echo $customer->igst_amount;?></br>
                                                             <?php 
                                                            
                                        $tototal_amount =$customer->grand_total;
                                        ?>
                                        <?php echo round($tototal_amount, 0).".00"; ?></b>
                                                                        
                                                                        </td>
                                                        </tr>
                                                        <tr class="termcond">
                                                                     <td colspan="13" >
                                                				         <b>Amount in Words:	</b><?php echo ucwords(displaywords(round($tototal_amount, 0)));	?>
                                                				    </td>
                                                		</tr>
                                                				
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 ">
                                        <div class="card redial-border-light redial-shadow border-full1 remove-top-bottom ">
                                            <div class="card-body">
                                                <table class="table table-bordered ">
                                                    <thead>
                                                        <tr class="border-bottom remove-extra-border">
                                                            <td colspan='3' class="extra-border">
                                                             <?php echo $company_details->invoice_term_condition; ?>
                                                            </td>
                                                            <td>
                                                                For <?php echo $company_details->company_name; ?><br>
                                                                <img src="assets/company/<?php echo $company_details->stamp; ?>" width="100" height="50"></br>
                                                                Authorized Sign
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                </table> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                          
                        </div>
    </div>
       
    </body>

</html>