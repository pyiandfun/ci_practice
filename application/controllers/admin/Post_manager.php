<?php
class Post_manager extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_model', 'post_model');   
    }
    public function create() {
        $data['title'] = "Create posts";
        $this->form_validation->set_rules('title','Title','required|trim');
        $this->form_validation->set_rules('body','Body','required|trim');
        if($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('admin/posts/create',$data);
            $this->load->view('templates/footer');
        }else {
            $this->post_model->create_post();
            $this->load->view('posts/index');  
            redirect('posts');
        }
    }

    public function delete($id) {
        $this->post_model->delete_post($id);
        redirect('posts');
    }

    public function edit($slug){
        $data['post'] = $this->post_model->get_post($slug);
        if(empty($data['post'])) {
            show_404();
        }
        $data['title'] = 'edit posts';
        // var_dump( $data['title']);die();
        $this->load->view('templates/header');
        $this->load->view('posts/edit',$data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $slug = $this->input->post('slug');
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('body', 'Body', 'required|trim');
        if($this->form_validation->run() === FALSE) {
            // redirect("posts/edit/$slug");
            $data['post'] = $this->post_model->get_posts($slug);
            if(empty($data['post'])) {
                show_404();
            }
            
            $data['title'] = 'edit posts';
            // var_dump( $data['title']);die();
            $this->load->view('templates/header');
            $this->load->view('posts/edit',$data);
            $this->load->view('templates/footer');
        }else{
            $update_data['title'] = $this->input->post('title');
            $update_data['body'] = $this->input->post('body');
            $updated = $this->post_model->update_post($id, $update_data);
            if($updated){
                $this->session->set_userdata('success_updated', 'Success Updated on Post.');
                redirect('posts');
            }
        }
    }
}
?>