<?php
  class m_thuong_hieu extends CI_Model{
    public function hang_dau()
    {
      $query=$this->db->query("SELECT * from chi_tiet_don_hang inner join san_pham on chi_tiet_don_hang.ma_sp= san_pham.ma_sp inner join thuong_hieu on san_pham.ma_thuong_hieu=thuong_hieu.ma_thuong_hieu order by so_luong desc limit 18");
        return $query->result();
    }
  }
 ?>
