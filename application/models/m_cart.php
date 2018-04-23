<?php

class m_cart extends CI_Model
{
  public function doc_san_pham()
  {
    $query=$this->db->get("san_pham");
    return $query->result();
  }
}
?>
