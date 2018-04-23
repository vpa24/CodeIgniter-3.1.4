var base_url="http://localhost/Codeigniter-3.1.4/index.php/";
function sap_xep(ma_loai,chon) {
  	window.location=base_url+'san_pham/hien_thi_ma_loai/'+ma_loai+"/"+chon;
}
function sap_xep_theo_thuong_hieu(ma_thuong_hieu,chon)
{
  window.location=base_url+'san_pham/thuong_hieu/'+ma_thuong_hieu+"/"+chon;
}

function sap_xep_theo_tim_kiem(gtTim,chon)
{
  window.location="http://localhost/Codeigniter-3.1.4/index.php?c=san_pham&m=tim_kiem_san_pham_sap_xep&chon="+chon;
}


function kiemtra(id)
{
 var sl=document.getElementById("sl_" + id).value;
  	if(sl<0)
  	{
      var modal = document.getElementById('myModal');
      var dong = document.getElementById('dong');
      var dong2 = document.getElementById('dong2');
      modal.style.display = "block";
  		document.getElementById("loi").innerHTML = "Số lượng lớn hơn 0!!!";
      dong.onclick = function() {
          modal.style.display = "none";
      }
      dong2.onclick = function() {
          modal.style.display = "none";
      }
  	}
    if(sl>10  )
  	{
      var modal = document.getElementById('myModal');
      var dong = document.getElementById('dong');
      var dong2 = document.getElementById('dong2');
      modal.style.display = "block";
    document.getElementById("loi").innerHTML = "Số lượng được phép mua tối đa là 10";
    dong.onclick = function() {
        modal.style.display = "none";
    }
    dong2.onclick = function() {
        modal.style.display = "none";
    }
  	}

    else{
      window.location=base_url+'cart/add/'+id+"/"+sl;
    }
}
