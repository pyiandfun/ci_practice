<?php
    class Post_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }  

        public function get_posts($limit, $offset) {
            $this->db->limit($limit, $offset);
            $query=$this->db->get('posts');
            return $query->result_array();
        }

        public function get_post($slug){
            $query = $this->db->get_where('posts',array('slug' => $slug));
            return $query->row_array();
        }
        
        public function get_count(){
            return $this->db->count_all('posts');
        }

        public function create_post() {
            $title = $this->input->post('title');
            $slug= url_title($title);

            $data = array(
                'title' => $title,
                'slug'  => $slug,
                'body' => $this->input->post('body')
            );
            return $this->db->insert('posts',$data);
            redirect('posts');
        }

        public function update_post($id, $update_data){
            if(isset($update_data)&& isset($id)){
                $this->db->where('id', $id);
                $this->db->set('title',$update_data['title']);
                $this->db->set('body',$update_data['body']);
                $this->db->update('posts');
                return true;
            }
        }

        public function delete_post($id) {
            $this->db->where('id',$id);
            $this->db->delete('posts');
            return true;
        }
    }
?>