<?php 
class SpecialPostModel extends CI_Model {
    public function __construct(){
        $this->load->database();
    }
    public function insert($post_image){
        //echo "hello"; 
        $data = array(
            'article_post_title' => $this->input->post('article_post_title'),
            'article_sub_title' => $this->input->post('article_sub_title'),
            'facebook_title' => $this->input->post('facebook_title'),
            'summary' => $this->input->post('summary'),
            'detail' => $this->input->post('detail'),
            'status' => $this->input->post('status'),
            'parent_article_id' => $this->input->post('parent_id'),
            'source' => $this->input->post('source')
        );
        $data['article_image'] = $post_image;
        return $this->db->insert('articles',$data);
    }
    // get the results the records
    public function get_results(){
        $query = $this->db->query('select * from articles order by id desc');
        if($query->num_rows() > 0){
            $data = $query->result_array();
             //print_r($data);
             //exit;
             return $data;
        }else{
            return false;
        }
    }
    public function delete_data($id){
        $query  = $this->db->delete('articles', array('id' => $id));
        if(! $query ){
            return false;
        }else{
            return $query;
        }
    }
   public function edit_data($id){
        $query = $this->db->get_where('articles',array('id' => $id));
        $data = $query->result_array($query);
        return $data;
    }
    public function update_data($post_image){
        $id = $this->input->post('post_id');
        $data = array(
            'article_post_title' => $this->input->post('article_post_title'),
            'article_sub_title' => $this->input->post('article_sub_title'),
            'facebook_title' => $this->input->post('facebook_title'),
            'summary' => $this->input->post('summary'),
            'detail' => $this->input->post('detail'),
            'status' => $this->input->post('status'),
            'parent_article_id' => $this->input->post('parent_id'),
            'source' => $this->input->post('source')
        );
        $data['article_image'] = $post_image;
        $this->db->where('id', $id);
        $query = $this->db->update('articles', $data);
        return $query;
    }

    //fetching data
    public function get_special_news(){
        //$query = $this->db->get_where('articles', array('id' => $id), $limit, $offset);
    
        $query = $this->db->query("SELECT * FROM articles WHERE status = 1 order by id desc limit 0,1;");
        //echo $query->num_rows();
         //$query = $this->db->get();
        //  print_r($results);
         if($query->num_rows() == 1){
             $results = $query->result_array();
             return $results;
         }else{
            return false;
         }
    }
    //fetching similar data
    public function get_similar_res($data){
        // echo "<pre>";
        // print_r($data);
        // exit;
        $query = $this->db->query('select * from articles where parent_article_id = '. $data[0]['parent_article_id'].' and status = 1 limit 0,3 ');
        // echo "<pre>";
        // print_r($results);
        // exit;
        if($query->num_rows() > 0 ){
            $results = $query->result_array();
            return $results;
        }else{
            return false;
        }

    }


    public function get_all_results(){
        $query = $this->db->query('select * from articles where status = 1 order by id limit 0,10');
        if($query->num_rows()){
            $results = $query->result_array();
            return $results;
        }else{
            return false;
        }
    }
    public function viewall($id){
        $id = $this->uri->segment(1);
        $query = query('select * from articles where status = 1 and id = '.$id);
        if($query->num_rows()){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }
    public function get_single_res($id){
        $query = $this->db->query('select * from articles where status = 1 and id = '.$id);
        if($query->num_rows()){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }
    public function get_json($key){
        $query = $this->db->query("select * from articles where article_post_title like '%".$key."%'");
        //die();
        $results = $query->result();
        $data = [];
        foreach($results as $row){
            $data[] = [
                'id' => $row->id,
                'text' =>$row->article_post_title
            ]; 
        }
        // $data = [];
        // foreach($results as $result){
        //     $data['results'] => 
        // }
        //echo "<pre>";
        //print_r($result);
        $json =  json_encode($data,JSON_UNESCAPED_UNICODE);
        echo $json;
        exit;
    }




}
    