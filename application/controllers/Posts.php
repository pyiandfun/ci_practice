<?php 
class Posts extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_model', 'post_model');
        $this->load->library('pagination');
        $this->load->helper('url');
    }
    public function index() {
        $data['title'] = "Lastest posts";
        $config['base_url'] = base_url('posts/');
        $config['total_rows'] = $this->post_model->get_count();
        $config['per_page'] = 3;
        $page = ($this->uri->segment(2))?$this->uri->segment(2):0;
        $this->pagination->initialize($config);
        $data['posts'] = $this->post_model->get_posts($config['per_page'], $page);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('templates/header');
        $this->load->view('posts/index',$data);
        $this->load->view('templates/footer'); 
    }

    public function view($slug) {
        $data['post'] = $this->post_model->get_post($slug);
        if(empty($data['post'])) {
            show_404();
        }
        $data['title'] = $data['post']['title'];
        // var_dump( $data['title']);die();
        $this->load->view('templates/header');
        $this->load->view('posts/view',$data);
        $this->load->view('templates/footer');
    }
}
?>