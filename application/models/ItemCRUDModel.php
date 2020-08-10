<?php


class ItemCRUDModel extends CI_Model{


    public function get_itemCRUD(){
        if(!empty($this->input->get("search"))){
          $this->db->like('name', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
          $this->db->or_like('s_price', $this->input->get("search")); 
        }
        $query = $this->db->get("book");
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'name' => $this->input->post('bname'),
            'description' => $this->input->post('intro'),
            's_price' => $this->input->post('sellingPrice'),
                );
        return $this->db->insert('book', $data);
    }


    public function update_item($id) 
    {
        $data=array(
            'name' => $this->input->post('bname'),
            'description'=> $this->input->post('intro'),
            's_price'=> $this->input->post('sellingPrice')
        );
        if($id==0){
            return $this->db->insert('book',$data);
        }else{
            $this->db->where('book_id',$id);
            return $this->db->update('book',$data);
        }        
    }


    public function find_item($id)
    {
        return $this->db->get_where('book', array('book_id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('book', array('book_id' => $id));
    }
}
?>