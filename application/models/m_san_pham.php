<?php

class m_san_pham extends CI_Model
{
  public function ban_chay($thang){
    $query=$this->db->query("SELECT *	from sieu_thi.san_pham inner join sieu_thi.chi_tiet_don_hang on san_pham.ma_sp = chi_tiet_don_hang.ma_sp
    inner join sieu_thi.don_hang on chi_tiet_don_hang.ma_don_hang=don_hang.ma_don_hang
    where month(ngay_dat)=$thang order by so_luong desc limit 9");
      return $query->result();
  }
  public function giam_gia(){
    $query=$this->db->query("SELECT * from sieu_thi.san_pham order by (don_gia-don_gia_khuyen_mai) desc limit 9");
    return $query->result();
  }
  public function moi()
  {
    $query=$this->db->query("SELECT * FROM sieu_thi.san_pham order by ma_sp desc limit 8");
    return $query->result();
  }
  public function san_pham_theo_ma_loai($ma_loai)
  {
    $query=$this->db->query("SELECT ten_loai,san_pham.* FROM sieu_thi.san_pham inner join sieu_thi.loai_sp on loai_sp.ma_loai=san_pham.ma_loai where san_pham.ma_loai=$ma_loai");
    return $query->result();
  }
  public function san_pham_theo_ma_loai_phan_trang($ma_loai,$vt,$limit)
  {
    $query=$this->db->query("SELECT ten_loai,san_pham.* FROM sieu_thi.san_pham inner join sieu_thi.loai_sp on loai_sp.ma_loai=san_pham.ma_loai where san_pham.ma_loai=$ma_loai limit $vt,$limit");
    return $query->result();
  }
  public function doc_san_pham_sap_xep_theo_ma_loai($ma_loai,$chon,$vt,$limit)
  {
    $query=$this->db->query("SELECT * FROM san_pham inner join sieu_thi.loai_sp on loai_sp.ma_loai=san_pham.ma_loai where san_pham.ma_loai= $ma_loai $chon limit $vt,$limit");
    return $query->result();
  }
  public function doc_chi_tiet_san_pham($ma_sp)
  {
    $query=$this->db->query("SELECT * from sieu_thi.san_pham  inner join sieu_thi.thuong_hieu on thuong_hieu.ma_thuong_hieu=san_pham.ma_thuong_hieu where ma_sp=$ma_sp");
    return $query->row();
  }
  public function doc_san_pham_cung_loai($ma_loai,$ma_sp)
  {
    $query=$this->db->query("SELECT * from san_pham where ma_loai=$ma_loai and ma_sp!=$ma_sp");
    return $query->result();
  }
  function Doc_san_pham_cung_thuong_hieu($ma_thuong_hieu)
	{
		$query=$this->db->query("SELECT * from sieu_thi.san_pham inner join sieu_thi.thuong_hieu on san_pham.ma_thuong_hieu=thuong_hieu.ma_thuong_hieu where thuong_hieu.ma_thuong_hieu=$ma_thuong_hieu");
		return $query->result();
	}
  function Doc_san_pham_cung_thuong_hieu_phan_trang($ma_thuong_hieu,$vt,$limit)
	{
    $query=$this->db->query("SELECT * from sieu_thi.san_pham inner join sieu_thi.thuong_hieu on san_pham.ma_thuong_hieu=thuong_hieu.ma_thuong_hieu where thuong_hieu.ma_thuong_hieu=$ma_thuong_hieu limit $vt,$limit");
		return $query->result();
	}
  function Doc_san_pham_theo_thuong_hieu_sap_xep($ma_thuong_hieu,$chon,$vt,$limit)
  {
  	$query=$this->db->query("SELECT * FROM thuong_hieu inner join sieu_thi.san_pham on thuong_hieu.ma_thuong_hieu=san_pham.ma_thuong_hieu where san_pham.ma_thuong_hieu=$ma_thuong_hieu $chon limit $vt,$limit");
  	return $query->result();
  }
  function autocomplete($q){
    $this->db->select('*');
    $this->db->like('ten_sp', $q);
    $this->db->limit(5);
    $query = $this->db->get('san_pham');
    if($query->num_rows() > 0){
      foreach ($query->result_array() as $row){
        $new_row['label']=$row['ten_sp'];
        $new_row['value']=$row['ma_sp'];
        $row_set[] = $new_row;
      }
      echo json_encode($row_set);
    }
  }
  public function Tim_san_pham_theo_ten_sp($gtTim,$vt=-1,$limit=-1)
  {
  	 $query=$this->db->query("SELECT * from san_pham where ten_sp like '%$gtTim%'");
  	if($vt>=0 && $limit>0)
  	{
       $query=$this->db->query("SELECT * from san_pham where ten_sp like '%$gtTim%' limit $vt,$limit");
  	}
  	return $query->result();
  }
  public function Tim_kiem_san_pham_sap_xep($gtTim,$chon,$vt=-1,$limit=-1)
  {
  	 $query=$this->db->query("SELECT * from san_pham where ten_sp like '%$gtTim%' $chon");
     if($vt>=0 && $limit>0)
  	{
  		$query=$this->db->query("SELECT * from san_pham where ten_sp like '%$gtTim%' $chon limit $vt,$limit");
  	}
  	return $query->result();
  }

}

 ?>
