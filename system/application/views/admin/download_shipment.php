<!DOCTYPE html>
<html>
<head>
<meta name="author" content="Harrison Weir"/>
<meta name="keywords" content="cats,feline"/>
<meta name="date" content="2021-05-05"/>
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap');
body{ margin: 0px; padding: 0px; font-size: 12px; font-family: 'Poppins', sans-serif;  }

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left; 
  font-size: 10px;
  line-height: 13px;   
}

.borderless{ border: none; }

p {
    padding: 0px;
    margin: 0px;
    min-height: 18px;
    clear: left;
    font-size: 9px;
    margin-bottom: -2px;
}

.padding-bott10 {
    padding-bottom: 10px;
}
.padding-bott20 {
    padding-bottom: 20px;
}

.border-topnone{ border-top: 0px!important}
table.border-bottomnone{ border-bottom: 0px!important}
.border-none{ border: 0px!important}
input {
    width: 90%;
    margin-bottom: 5px;
    background: #f4f4f4;
    border: 0px;
}

table {
    margin-bottom: 0px;
}
.td-nospace{padding:0px;}
td.td-nospace p {
    padding-left: 5px;
}
.main-page {
    margin: 10px auto;
    /* max-width: 1200px; */
    max-width: 1024px;
}

h1 {
    margin: 0px;
    font-size: 26px;
    padding: 0px;
}

span.two-cal {
    display: inline-block;
    width: 50%;
    float: left;
    min-height: 19px;
}
span.two-cal input {
    width: 80%;
}
table.extra-border, .extra-border th, .extra-border td {
    border-left: 0px !important;
    border-right: 0px;
    border-bottom: 0px;
}
.right-border1 {
    border-right: 1px solid #000;
    width: 46% !important;
    margin-right: 2%;
}
table.tblnoborder th, table.tblnoborder td, table.tblnoborder{
  border:0;
}
.tblheader p{
  font-size: 11px;
  line-height: 18px;
  width: 350px;
}
.tblnoborder td{
  padding: 0 5px !important;
  text-align:right;
}
</style>
</head>
<body>
<?php
      foreach ($booking as $value) 
      {
        $weight_info    = $this->db->query("select * from tbl_domestic_weight_details where booking_id=".$value['booking_id']);
        $weightt_info     = $weight_info->row();        
                    
      ?>
<div class="main-page">
<table style="width:100%" class="border-bottomnone">
<tr>
  <td class="tblheader" style="width:50%;">
    <img src="<?php echo base_url();?>/assets/company/<?php echo $company_details->logo; ?>" style="height:50px;">
    <p><?php echo $company_details->address;?></p>
    
    <p>PH : <?php echo $company_details->phone_no;?>&nbsp;&nbsp;&nbsp;EMAIL ID : <?php echo $company_details->email;?></p>
    <!--<p>EMAIL ID : <?php echo $company_details->email;?></p>-->
    <p>WEBSITE : <a target="_blank" href="http://<?php echo $company_details->website;?>"><?php echo $company_details->website;?></a>&nbsp;&nbsp;&nbsp;GST : <?php echo $company_details->gst_no;?></p>
  </td>
  
  <td class="td-nospace">
    <table style="width:100%; min-width: 250px " border="0" class="border-none" >
      <tr>
        <td class="border-none td-nospace" style="border-bottom: 2px solid black!important; text-align:center">
        <b>
            <!--<img src="<?php echo base_url();?>/assets/barcode/barcode.png" >-->
            <?php 
            
            $file = Zend_Barcode::draw('code128', 'image', array('text' => $value['pod_no']), array());
            imagepng($file,FCPATH."assets/barcode/label/".$value['pod_no'].".png"); ?>
          <img src="<?php echo base_url(); ?>assets/barcode/label/<?php echo  $value['pod_no']; ?>.png" width="150px"> 
        <h1 style="padding-top:5px;padding-bottom:5px;"><?php echo $value['pod_no'];?></h1>
        
        </b></td>
      </tr>
      <tr>
        <td class="border-none td-nospace" style="border-top: 2px solid black!important;">
          <span style="padding-left:10px;width: 50%;display: inline-block;border-right: 2px solid #333;height: 18px;margin-top: 0px;padding: 5px 0 0 5px; font-weight:600;">
          Origin: 
          <?php 
            $whr_c = array("id"=>$value['sender_city']);
            $city_details = $this->basic_operation_m->get_table_row("city",$whr_c);
            echo $senderCity = $city_details->city;
          ?>
          </span>
          
          <span style="float:right;padding-right:10px;display: inline-block;height: 18px;margin-top: 0px;padding: 5px 5px 0 5px; font-weight:600;">
          Destination: 
          <?php 
            $whr_c = array("id"=>$value['reciever_city']);
            $city_details = $this->basic_operation_m->get_table_row("city",$whr_c);
            echo $reciverCity = $city_details->city;
          ?>
          </span>
      </td>
      </tr>
      <!-- <tr>
        <td class="border-none td-nospace"><p><span class="two-cal"><b>NETWORK :</b></span><span class="two-cal"><?php echo $value['forworder_name'];?></span></p></td>
      </tr> -->
    </table>
  </td>
</tr>
</table>

<?php
  // print_r($value);
?>
<table style="width:100%">
 <tr>
    <th style="width:50%;">
      Shipper Code :<?php echo $value['id'];?><br/>
      Shipper Name :<?php echo $value['sender_name'];?><br/>
      Consignor :<?php echo $value['reciever_name'];?><br/>
      <?php echo $senderCity;?><br/>
      Contact No. :<?php echo $value['sender_contactno'];?><br/>
  </th>
  <th colspan="2">
      Ship To  :<br/>
      Attention  :<?php echo $value['contactperson_name'];?><br/>
      Address :<?php echo $value['reciever_address'];?><br/>
      Pin Code :<?php echo $value['reciever_pincode'];?><br/>
      Contact No. :<?php echo $value['reciever_contact'];?><br/>
  </th>
</tr>
<tr>
    <th colspan="3" style="padding:0;">
      <table style="width:100%">
        <tr>
            <th style="width:40%;border-right: 2px solid #333;">
                Forwarding Number :<?php echo $value['forwording_no'];?><br/>
                Forwarder :<?php echo $value['forworder_name'];?>
            </th>
            <th style="width:40%;border-right: 2px solid #333;"> Booking Date :<?php echo date("d-m-Y",strtotime($value['booking_date']));?> </th>
            <th style="width:40%;"> Amount :<?php echo $value['total_amount']; //if($value['doc_type']=="1" && $value['invoice_value']!="0.00"){echo $value['invoice_value'];}?> </th>
        </tr>
        <tr>
            <th style="width:40%;border-right: 2px solid #333;text-align: center;">
              <p style="font-size: 13px;">For <?php echo $company_details->company_name;?></p><br>
              <img src="<?php echo base_url();?>/assets/company/stamp.png" style="height: 65px;">
              <p style="font-size: 13px;">Authorised Signatory</p>
            </th>
            <th colspan="2" style="width:40%;text-align: right;">
              <table class="tblnoborder" border="0" style="width: 50%;text-align: right;float: right;">
                <tr><td>Pcs:</td><td><?php echo $weightt_info->no_of_pack;?></td></tr>
                <tr><td>ChargedWeight:</td><td><?php echo $weightt_info->chargable_weight;?></td></tr>
                <tr><td>Type:</td><td><?php if($value['doc_type']=="1"){ echo 'Non-Doc'; }else{ echo 'Doc'; }?></td></tr>
                <tr><td>Pay Mode:</td><td><?php echo $value['dispatch_details'];?></td></tr>
                <tr><td>Content:</td><td><?php echo $value['special_instruction'];?></td></tr>
                <tr><td>Value:</td><td><?php if($value['doc_type']=="1" && $value['invoice_value']!="0.00"){echo $value['invoice_value'];}?> Rs.</td></tr>
              </table>
            </th>
        </tr>
      </table>
    </th>
</tr>
<tr>
    <th colspan="3">
    SHIPPER'S COPY/ POD COPY | TRACK THIS AIR WAYBILL AT <?php echo $company_details->website;?><br/>
    Received in good order and condition.<br/>
    CONSIGNOR SIGNATURE:..................................................... <br/>
    Name / Sign. :.......................Time........<br/>
  </th>
  
</tr>

</table>


  </td>
</tr>
</table>
</div>
<?php } ?>
</body>
</html>
