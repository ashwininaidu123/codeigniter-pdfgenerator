        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
	
	 <div class="container" id="login-block">
      <div class="row">
                <div class="col-md-12">
      <div class="panel-body clearfix" style="color:#000">
      
        <form class="workorder_form" id="workorder_form" action="pdf/workorder" method="post">
        <h2>Generate work order</h2><hr/>
        <h4>1.MCube Base Platform with MCUbe X Module</h4>
         <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Workorder Number:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="text" size="15" class="form-control required" name="workorder_num" id="workorder_num" value="">
	 	 </div>
		</div>
       <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">MSA Dated:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="date" size="15" class="form-control required" name="msr_date" id="msr_date" value="">
	 	 </div>
		</div>
		 <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Workorder Reference Number:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="text" size="15" class="form-control required" name="workorder_refnum" id="workorder_refnum" value="">
	 	 </div>
		</div>
        <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Workorder Effective date:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="date" size="15" class="form-control required" name="wo_date" id="wo_date" value="">
	 	 </div>
		</div>
	   <h4>2.Client And Master Service Agreement</h4>
        <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Client:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="text" size="15" class="form-control required" name="client" id="client" value="">
	 	 </div>
		</div>
       <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Master Services Agreement:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="text" size="15" class="form-control required" name="msr" id="msr" value="">
	 	 </div>
		</div>
	  <h4>3.Virtual Number</h4>
		<div class="form-group col-sm-12 input_fields_wrap">
			<label class="col-sm-4 text-right" for="title">Virtual Number:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="tel" size="12" class="form-control required" name="virtualnumber[]" id="virtualnumber" value="">
				<button class="add_field_button btn btn-login error" class="">Add More</button>
	 	 </div>
		</div>
	 <h4>4.Description of Services to be Performed by VMC</h4>
		  <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Base Platform Hosted:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="number" size="15" class="form-control required" name="platform" id="platform" value="">
	 	 </div>
		</div>
		<div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Module Hosted:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="number" size="15" class="form-control required" name="module_hosted" id="module_hosted" value="">
	 	 </div>
		</div>
        <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Virtual Number As MCube Number:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="tel" size="15" class="form-control" required name="mcube_num" id="mcube_num" value="">
	 	 </div>
		</div>
	<h4>5.Fees and Schedule of Payment</h4>
		  <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Advance for Virtual Mobile Number Annually:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="number" size="15" class="form-control" required name="advance" id="advance" value="">
	 	 </div>
		</div>
		<div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Special Number Charges:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="number" size="15" class="form-control" required name="spl_charges" id="spl_charges" value="">
	 	 </div>
		</div>
        <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Incoming Free Minute/Month for Two Numbers:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="tel" size="15" class="form-control" required name="mcube_num" id="mcube_num" value="">
	 	 </div>
		</div>
	    <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Payment Term:</label>
			 <div class="col-sm-8 input-icon right">
				<select class="form-control" required name="payment_term" id="payment_term">
				  <option value="1">Monthly</option>
				  <option value="3">Quarterly</option>
				  <option value="6">Half- Yearly</option>
				  <option value="9">9 Months</option>
				  <option value="12">Annually</option>
				</select>
	 	 </div>
		</div>
		 <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Call Charges After Free Minutes:</label>
			 <div class="col-sm-8 input-icon right">
				<select class="form-control" required name="aft_freemin" id="aft_freemin" >
				  <option value="0.70">0.70 per/min</option>
				  <option value="1.20">1.20 per/min</option>
				  <option value="1.80">1.80 per/min</option>
				</select>
	 	 </div>
		</div>
	  <h4>6.Payment Break Up:</h4>
		  <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Payment of Vanity Number:</label>
			<label class="col-sm-1 text-right" for="title">Qty:</label>
			 <div class="col-sm-2 input-icon right">
				<input type="number" size="15" class="form-control" required name="vanityno" id="vanityno" value="">
	 	     </div>
	 	    <label class="col-sm-1 text-right" for="title">Amount:</label>
	 	    <div class="col-sm-4 input-icon right">
				<input type="number" size="15" class="form-control amt" required name="vanityno_amt" id="vanityno_amt" value="">
	 	    </div>
		</div>
		<div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Virtual Number on MCube Platform:</label>
			<label class="col-sm-1 text-right" for="title">Qty:</label>
			 <div class="col-sm-2 input-icon right">
				<input type="number" size="15" class="form-control" required name="virtualno" id="virtualno" value="">
	 	     </div>
	 	    <label class="col-sm-1 text-right" for="title">Amount:</label>
	 	    <div class="col-sm-4 input-icon right">
				<input type="number" size="15" class="form-control amt" required name="virtualno_amt" id="virtualno_amt" value="">
	 	    </div>
		</div>
        <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Total:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="text" class="form-control" id="total_sum" name="total_sum">
	 	 </div>
		</div>
		 <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Service Tax(15%):</label>
			 <div class="col-sm-8 input-icon right">
				<input type="tel" size="15" class="form-control" required name="servicetax" id="servicetax" value="">
	 	 </div>
		</div>
		 <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Grand Total:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="tel" size="15" class="form-control"  required name="grandtotal" id="grandtotal" value="">
	 	 </div>
		</div>
		 <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Effective From:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="date" size="15" class="form-control" required name="effectivedate" id="effectivedate" value="">
	 	 </div>
		</div>
		 <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">End date:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="date" size="15" class="form-control" required name="enddate" id="enddate" value="">
	 	 </div>
		</div>
		<div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Sold By:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="text" size="15" class="form-control" required name="attendedby" id="attendedby" value="">
	 	 </div>
		</div>
		<h4>From VMC:</h4>
		 <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Name:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="text" size="15" class="form-control" required name="vmcname" id="vmcname" value="">
	 	 </div>
		</div>
		 <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Signature Date:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="date" size="15" class="form-control" required name="vmcsign" id="vmcsign" value="">
	 	 </div>
		</div>
		<h4>From Client:</h4>
		 <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Contact Name:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="text" size="15" class="form-control" required name="clientname" id="clientname" value="">
	 	 </div>
		</div>
		 <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Address:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="text" size="15" class="form-control" required name="clientaddress" id="clientaddress" value="">
	 	 </div>
		</div>
		 <div class="form-group col-sm-12">
			<label class="col-sm-4 text-right" for="title">Client Signature Date:</label>
			 <div class="col-sm-8 input-icon right">
				<input type="date" size="15" class="form-control" name="clientsign" id="clientsign " value="" required>
	 	 </div>
	 	 <div class="form-group text-center">
				<input class="btn btn-primary" id="submit" name="submit" type="submit" value="Submit">
             </div>
		</div>
       </form>
  
      </div>
      </div>
      </div>
      </div>

<script>
    var $form = $('#workorder_form'),
    $summands = $form.find('.amt'),
    $sumDisplay = $('#total_sum');
    $serviceTax = $('#servicetax');
    $grandTotal = $('#grandtotal');


$(document).on("change",".amt",function(){
   var sum = 0;
    $summands.each(function ()
    {
        var value = Number($(this).val());
        if (!isNaN(value)) sum += value;
    });
    $sumDisplay.val(sum);
    
    var tax = (sum * 15) / 100;
    $serviceTax.val(tax);
    var grandtotal = sum + tax;
    $grandTotal.val(grandtotal);
});



</script>
