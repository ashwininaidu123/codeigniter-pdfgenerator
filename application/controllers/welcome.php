<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	
        //this the the PDF filename that user will get to download
		$pdfFilePath = "Workorder.pdf";

        //load mPDF library
		$this->load->library('m_pdf');
        $param = '"","A4","","",0,0,100,0,6,3,"L"';
		$pdf = $this->m_pdf->load($param);
		// $pdf->useOddEven = true;

		$pdf->SetHTMLHeader('<img src="' . base_url() . '/application/img/vmclogo.pdf"/>');

		//$pdf->SetHTMLFooter('<img src="' . base_url() . 'custom/footarinvoice.jpg"/>');
		$wm = base_url() . 'application/img/vmc.png';
		$pdf->SetWatermarkImage($wm);
		$pdf->showWatermarkImage = true;
        $data['main_content'] = 'dwnld';
     	$data = [];
		//load the view and saved it into $html variable
		$html=$this->load->view('workorder', $data, true);

       //generate the PDF from the given html
		$this->m_pdf->pdf->WriteHTML($html);

        //download it.
		$this->m_pdf->pdf->Output($pdfFilePath, "D");		
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
