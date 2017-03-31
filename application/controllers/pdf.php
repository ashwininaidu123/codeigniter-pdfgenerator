 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pdf extends CI_Controller {
 
    function workorder(){
	  $this->load->view('header');
	  $this->load->view('workorder_form');
	  if($this->input->post('submit')){
	     $this->generate($_POST);
       }
	}
	
	
	function generate(){
	    $pdfFilePath = "Workorder.pdf";
     	$result['data'] = $_POST;
     	$mpdf = new mPDF('utf-8','A4','','','10','10','40','40','5','5');
		//load the view and saved it into $html variable
		$html=$this->load->view('workorder', $result, true);
		// Define the Headers before writing anything so they appear on the first page
		
		$mpdf->SetHTMLHeader('
		<div style="text-align: left; font-weight: bold;"><img src="application/img/header.png"></div>
		');
		
		$mpdf->SetHTMLFooter('
	  
	    <table width="100%" cellpadding="3" cellspacing="0" style="text-align: left; font-size:10px;" >
        <tbody>
        <tr valign="top" width="200">
            <td width="25%">
                <p lang="en-US" align="left">
                   Our office:<br>
                   VMC Technologies Pvt. Ltd,
                   Regent Prime, Unit #107,
                   Number 48-50, Whitefield Main Road,
                   Whitefield, Bangalore - 560066.
                </p>
            </td>
             <td width="25%">
                <p lang="en-US" align="left">
                   B-58, Sector 65, Noida,
                   UP-201301,
                   Phone: 0120-4616800
                   Toll Free: 1-800-419-2202	
                </p>
            </td>
            <td width="25%"></td>
            <td width="25%"></td>
        </tr>
        </tbody>
       </table>
     <div style="font-weight: bold;"><img src="application/img/footer.png"></div>
		'); 

		$mpdf->SetHTMLFooter('
		<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;"><tr>
		<td width="33%"><span style="font-weight: bold; font-style: italic;">My document</span></td>
		<td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>
		<td width="33%" style="text-align: right; ">{DATE j-m-Y}</td>
		</tr></table>
		', 'E');
		
        $wm = base_url() . 'application/img/vmc.png';
		$mpdf->SetWatermarkImage($wm);
		$mpdf->showWatermarkImage = true;
		
		$mpdf->WriteHTML($html);

		$mpdf->Output($pdfFilePath, "D");
		
		

	}
}
