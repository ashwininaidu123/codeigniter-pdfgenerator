
<html>

<p align="center">
    <strong>MCube Work Order</strong>
</p>
<p align="center">
    <strong><?=$data['workorder_num'];?></strong>
</p>
<ol>
    <li>
        <p lang="en-US" align="center">
            <strong>MCube Base Platform with MCube X Module</strong>
        </p>
    </li>
</ol>
<p lang="en-US" align="justify">
    This Work Order (“WO”) is entered between is VMC Technologies Private
    Limited (“VMC”), a company formed under Indian Companies Act (1957) as
    amended with its principal offices located at Regent Prime, unit 107, 48-50
    Whitefield Road, Whitefield, Bangalore-560066 INDIA and the Client
    identified as below. This WO is executed pursuant to and incorporates by
    reference all the provisions of the Master Services Agreement between the
parties dated <strong><?=$data['msr_date'];?></strong>, and having reference number    <strong><?=$data['workorder_refnum'];?></strong> (“<u>Master Agreement</u>”) as
identified below. This WO is dated and made effective as of    <strong><?=$data['wo_date'];?></strong><strong>.</strong>
</p>
<p lang="en-US" align="center">
    <u><strong>Client and Master Services Agreement</strong></u>
</p>
<table width="638" cellpadding="3" cellspacing="0" border="1">
    <colgroup>
        <col width="312"/>
        <col width="312"/>
    </colgroup>
    <tbody>
        <tr valign="top">
            <td width="312">
                <p lang="en-US" align="left">
                    Client
                </p>
            </td>
            <td width="312">
				<?=$data['client'];?>
            </td>
        </tr>
        <tr valign="top">
            <td width="312" height="21">
                <p lang="en-US" align="left">
                    Master Services Agreement
                </p>
            </td>
            <td width="312">
				<?=$data['msr'];?>
            </td>
        </tr>
    </tbody>
</table>
<ol start="2">
    <li>
        <p lang="en-US" align="justify">
            <strong>Scope </strong>
            and<strong> Objectives</strong>
        </p>
        <ol>
            <li>
                <p lang="en-US" align="justify">
                    Client has asked VMC to implement an MCube Platform with
                    MCube module using the following Virtual Numbers
                </p>
            </li>
        </ol>
        <?php for($i=0; $i<sizeof($data['virtualnumber']); $i++){?>
		<p lang="en-US" align="justify">
			<?=($i+1). ".      " .$data['virtualnumber'][$i];?>
		</p>
		<? } ?>
    </li>
</ol>


<ol start="3">
    <li>
        <p lang="en-US" align="justify">
            <strong>Description of Services to be Performed by VMC </strong>
        </p>
        <ol>
            <li>
                <p lang="en-US" align="justify">
                    Implement <?=$data['platform'];?> instance of MCube Base Platform hosted on
                    VMC servers
                </p>
            </li>
        </ol>
    </li>
</ol>
<ol>
    <ol start="2">
        <li>
            <p lang="en-US" align="justify">
                Implement <?=$data['module_hosted'];?> instance of MCube (X/Track/IVRS) Module hosted
                on VMC servers
            </p>
        </li>
    </ol>
</ol>
<ol>
    <ol start="3">
        <li>
            <p lang="en-US" align="justify">
                Provide <?=$data['mcube_num'];?> Virtual Numbers to be used as a MCube number
            </p>
        </li>
    </ol>
</ol>
<ol start="4">
    <li>
        <p lang="en-US" align="justify">
            <strong>Fees and Schedule of Payment</strong>
        </p>
        <ol>
            <li>
                <p lang="en-US" align="justify">
                    A sum of  <?=$data['advance'];?> INR <u>/- (INR only</u>), Exclusive of taxes
                    payable in advance for Yearly for Virtual Mobile Number.
                </p>
            </li>
            <li>
                <p lang="en-US" align="justify">
                    Special number charges : <?=$data['spl_charges'];?>
                </p>
            </li>
            <li>
                <p lang="en-US" align="justify">
                    This plan includes <?=$data['mcube_num'];?> incoming free minutes per month for
                    two numbers.
                </p>
            </li>
            <li>
                <p lang="en-US" align="justify">
                    Payment Term : <?=$data['payment_term'];?>
                </p>
            </li>
            <li>
                <p lang="en-US" align="justify">
                    Call Charges after free minutes : <?=$data['aft_freemin'];?>
                </p>
            </li>
        </ol>
    </li>
</ol>

<p lang="en-US" align="left">
    <strong>Payment Break Up:</strong>
</p>
<dl>
    <dd>
        <table width="606" cellpadding="3" cellspacing="0" border="1">
            <colgroup>
                <col width="40"/>
                <col width="239"/>
                <col width="66"/>
                <col width="102"/>
                <col width="127"/>
            </colgroup>
            <tbody>
                <tr valign="top">
                    <td width="40" height="16">
                        <p lang="en-US" align="center">
                            <strong>SL No</strong>
                        </p>
                    </td>
                    <td width="239">
                        <p lang="en-US" align="justify">
                            <strong>Particulars</strong>
                        </p>
                    </td>
                    <td width="66">
                    </td>
                    <td width="102">
                        <p lang="en-US" align="center">
                            <strong>Qty</strong>
                        </p>
                    </td>
                    <td width="127">
                        <p lang="en-US" align="right">
                            <strong>Amount</strong>
                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="40">
                        <p lang="en-US" align="center">
                            1
                        </p>
                    </td>
                    <td width="239">
                        <p lang="en-US" align="left">
                            Payment of vanity number
                        </p>
                    </td>
                    <td width="66">
                        <p lang="en-US" align="right">
                            One Time
                        </p>
                    </td>
                    <td width="102">
						<?=$data['vanityno'];?>
                    </td>
                    <td width="127">
						<?=$data['vanityno_amt'];?>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="40">
                        <p lang="en-US" align="center">
                            2
                        </p>
                    </td>
                    <td width="239">
                        <p lang="en-US" align="left">
                            Virtual Numbers on MCube Platform
                        </p>
                    </td>

                    <td width="66">
					
                    </td>
                    <td width="102">
						<?=$data['virtualno'];?>
                    </td>
                    <td width="127">
						<?=$data['virtualno_amt'];?>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="40" height="10">
                        <p lang="en-US" align="center">
                        </p>
                    </td>
                    <td width="239" style="border-right: none;">
                        <p lang="en-US" align="left">
                            Total
                        </p>
                    </td>
                    <td width="66" style="border-left: none; border-right: none;">
                    </td>
                    <td width="102" style="border-left: none; border-right: none;">
                    </td>
                    <td width="127" >
						<?=$data['total_sum'];?>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="40">
                        <p lang="en-US" align="center">
                        </p>
                    </td>
                    <td width="239" style="border-right: none;">
                        <p lang="en-US" align="left">
                            Add Service Tax (15%)
                        </p>
                    </td>
                    <td width="66" style="border-left: none; border-right: none;">
                    </td>
                    <td width="102" style="border-left: none; border-right: none;">
                    </td>
                    <td width="127">
						<?=$data['servicetax'];?>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="40">
                        <p lang="en-US" align="center">
                        </p>
                    </td>
                    <td width="239" style="border-right: none;">
                        <p lang="en-US" align="justify">
                            <strong>Grand Total</strong>
                        </p>
                    </td>
                    <td width="66" style="border-left: none; border-right: none;">
                    </td>
                    <td width="102" style="border-left: none; border-right: none;">
                    </td>
                    <td width="127">
						<?=$data['grandtotal'];?>
                    </td>
                </tr>
            </tbody>
        </table>
    </dd>
</dl>
<ol>

    <ol>
        <li>
            <p lang="en-US" align="justify">
                Mode of payment will be Cheque or wire transfer.
            </p>
        </li>
        <li>
            <p lang="en-US" align="justify">
                <strong>Payment Schedule:</strong>
                Invoice will be raised 20 days prior to the next payment date.
                If payment is not received within 15<sup>th</sup> days after
                the due date then the services may be disrupted.
            </p>
        </li>
    </ol>
    <li>
        <p lang="en-US" align="justify">
            <strong>Term</strong>
        </p>
        <ol>
            <li>
                <p lang="en-US" align="justify">
This work order will become effective on                    <strong><?=$data['effectivedate'];?></strong> with an effective term of
Yearly<strong> </strong>with an End Date of                    <strong><?=$data['enddate'];?></strong>.
                </p>
            </li>
            <li>
                <p lang="en-US" align="justify">
                    Work order may be terminated by the Client at any time
                    during the term of this work order by giving a 30 day
                    notice to VMC in writing.
                </p>
            </li>
        </ol>
    </li>
</ol>
<ol start="6">
    <li>
        <p lang="en-US" align="justify">
            <strong>Additional Terms and Conditions</strong>
        </p>
        <ol>
            <li>
                <p lang="en-US" align="justify">
                    The ownership rights, copyright and other intellectual
                    property rights with respect to MCube, VCT, MCube Track,
                    MCube X, MCube IVRS and any other agreed Services are and
                    shall remain the property of the VMC. Data from calls,
                    including but not limited to customer information,
                    communications and exchanges as a result of service shall
                    remain property of the client and shall be treated as
                    Confidential Information.
                </p>
            </li>
        </ol>
    </li>
</ol>
<ol>
    <ol start="2">
        <li>
            <p lang="en-US" align="justify">
                VMC would have every right to monitor, peruse, and analyze
                (joint and severally called “Review”) the communication between
                the third party and the Client with the prior permission of
                Client per instance of such Review. Provided if any
                communication or part thereof is found to be apparently
                objectionable per TRAI regulations which are included in this
                Work Order by reference, VMC can withhold its services till
                proper explanation is furnished by the Client. VMC shall not be
                responsible for any loss sustained by the Client during the
                intervening period.
            </p>
        </li>
    </ol>
</ol>
<p lang="en-US" align="left">
    In case the Client becomes aware of any unauthorized use of the whole or
    any part of the VCT Services by any person the Client shall forthwith
    notify VMC of the same. VMC shall not be responsible for the said
    unauthorized use under any circumstances whatsoever.
</p>
<ol>
    <ol>
        <li>
            <p lang="en-US" align="justify">
                Client agrees that any Virtual Numbers provided by VMC under
                this Work Order are and shall remain the property of the
                relevant upstream service providers and that this Work Order
                does grant any property rights whatsoever for these Virtual
                Numbers to Client. Client also understands that these numbers
                are licensed by VMC and the Client is granted an exclusive use
                of this(ese) number(s) for the Term.
            </p>
        </li>
        <li>
            <p lang="en-US" align="justify">
                On termination of the service VMC will raise a request to the
                telecom service provider to change the ownership of the numbers
                to the client’s name complying the current telecom rules and
                regulations. Client has to coordinate with the telecom service
                provider to accrue the numbers.
            </p>
        </li>
    </ol>
   </ol>
   <br> 
<ol start="7">
            <li>
                <p lang="en-US" align="justify">
                    <u><strong>COMPLIANCE WITH TRAI REGULATIONS.</strong></u>
                    <strong>
                        MCUBE SERVICES ARE PROVIDED ON VMC’s TELEPHONY
                        INFRASTRUCURE. THE CLIENT AGREES THAT IT WILL COMPLY
                        WITH ALL TRAI REGULATIONS WHEN USING MCUBE SERVICES
                        PROVIDED BY VMC. THE CLIENT AGREES THAT TELEPHONE
                        NUMBERS PROVIDED BY VMC WILL NOT BE USED AS A CALLBACK
                        NUMBER IN ANY SMS CAMPAIGN OR VOICE CAMPAIGN TO NUMBERS
                        REGISTERED AS “DO NOT CALL” OR “DO NOT DISTURB” ALSO
                        KNOWN AS DNC OR DND NUMBERS WITH TRAI OR GOVERNMENT.
                        SHOULD THE NUMBER BE FOUND IN VOILATION OF TRAI
                        REGULATIONS VMC WILL TAKE ALL ACTIONS (LEGAL AND NON
                        LEGAL) TO PROTECT ITS RESOURCES AND VMC WILL COOPERATE
                        WITH TRAI AND OPERATOR TO PROVIDE ANY INFORMATION THEY
                        SEEK.
                    </strong>
                </p>
            </li>
        </ol>
<p>
    <u><strong>Pesentations To Third Parties</strong></u>
    VMC makes no representations about the acceptability of the service
    deliverables to Client’s customers, investors and/or any other third party
    <br />
    <br />
</p>
<ol start="8">
    <li>
        <p lang="en-US" align="justify">
            <u><strong>Services Warranty.</strong></u>
            <strong>
                For avoidance of doubt, the services warranty described in
                Section 4 of the Master Agreement shall apply to this
            </strong>
        </p>
    </li>
    <li>
        <ol>
            <li>
                <p lang="en-US" align="justify">
                    <u><strong><?=$data['attendedby'];?></strong></u>
                </p>
            </li>
        </ol>
    </li>
</ol>
<br>
<p lang="en-US" align="justify">
    <strong>From VMC: </strong>
</p>
<p lang="en-US" align="justify">
    Name : <?=$data['vmcname'];?>
</p>
<p lang="en-US" align="left">
    Address: Regent Prime, unit 107, 48-50 Whitefield Road, Whitefield,
    Bangalore-560066
</p>
<br>
<p>
    <strong>From Client:</strong>
</p>
<p>
    Contact Name: <?=$data['clientname'];?>
</p>
<p>
    Address : <?=$data['clientaddress'];?>
</p>
<p>
    <strong>In Witness Whereof,</strong>
    the parties hereto have caused this Services Schedule to be executed by
    their duly authorized representatives.
</p>
<br>
<table width="638" cellpadding="7" cellspacing="0">
    <colgroup>
        <col width="305"/>
        <col width="305"/>
    </colgroup>
    <tbody>
        <tr valign="top">
            <td width="305">
                <p lang="en-US">
                    <strong>VMC Technologies Private LimiteD.</strong>
                </p>
            </td>
            <td width="305">
                <p lang="en-US">
                    <strong>THE CLIENT</strong>
                </p>
            </td>
        </tr>
        <tr valign="top">
            <td width="305">
                <p lang="en-US">
                    <em>Signature</em>
                    : <u>               </u>
                </p>
                <p lang="en-US">
                    By: <u> </u><u><strong>             </strong></u><u> </u>
                </p>
                <p lang="en-US">
                    <em>Authorized Officer</em>
                </p>
            </td>
            <td width="305">
                <p lang="en-US">
                    <em>Signature</em>
                    : <u> </u>
                </p>
                <p lang="en-US">
                    By: <u> </u>
                </p>
                <p lang="en-US">
                    <strong> </strong>
                    <em>Authorized Officer</em>
                </p>
            </td>
        </tr>
        <tr valign="top">
            <td width="305">
                <p lang="en-US">
                    Date: <u> </u><u><strong><?=$data['vmcsign'];?></strong></u>
                </p>
            </td>
            <td width="305">
                <p lang="en-US">
                    Date: <u> </u><u><strong><?=$data['clientsign'];?></strong></u>
                </p>
            </td>
        </tr>
    </tbody>
</table>
</html>
