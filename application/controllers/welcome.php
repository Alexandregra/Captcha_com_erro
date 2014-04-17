<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
            
            $captcha = array(
                'word'              => 'Random 123',
                'img_path'          => './captcha/',
                'img_url'         => base_url().'captcha',
                'font_path'         => './font/impact.ttf',
                'img_width'         => '300',
                'img_height'        => '30',
                'expiration'        => '3600',
            );
           
            $img = create_captcha($captcha);
            $data['image'] = $img['image'];
            
            
		$this->load->view('header_view');
                $this->load->view('main_view',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */