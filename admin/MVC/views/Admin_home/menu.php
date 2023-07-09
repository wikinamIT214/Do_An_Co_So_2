<!-- <style>
  .active{
    border-left: 3px solid transparent;
  }
</style> -->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="?act=admin">
       <!-- <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon"> -->
       <h5 class="logo-text">WATCH TRAN</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">CHỨC NĂNG CHÍNH</li>
      <li >
        <a href="?act=admin">
          <i class="zmdi zmdi-home"></i> <span>Trang chủ</span>
        </a>
      </li>
      <li>
        <a href="?act=hoadon">
          <i class="zmdi zmdi-invert-colors"></i> <span>Xét duyệt hóa đơn</span>
          <small class="badge float-right badge-light">New</small>
        </a>
      </li>

      <li>
        <a href="?act=nguoidung">
        <i class="zmdi zmdi-face"></i> <span>Quản lý tài khoản</span>
        </a>
      </li>

      <li >
        <a href="?act=product" >
          <i class="zmdi zmdi-grid"></i> <span>Quản lý sản phẩm</span>
        </a>
      </li>

      <li id="catmenu">
        <a href="#" id="catmenu" >
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Quản lý danh mục</span>
        </a>
        <div  id="submenu" style="width:100%;display:none;" >
        <ul class="sidebar-menu do-nicescrol ml-4"> 
          <li>
          <a href="?act=thuonghieu&condition=idTH">Thương hiệu</a>
        </li>

          <li>
            <a href="?act=loaiday&condition=idLD">Loại dây</a>
          </li>

          <li>
            <a href="?act=loaimay&condition=idLM">Loại máy</a>
          </li>
          <li>
            <a href="?act=khoanggia&condition=idKG">Khoảng giá</a>
          </li> 
        </ul>
      </div>
      </li>
      
      <li>
      <a href="?act=khoanggia&condition=idKG">
        <i class="zmdi zmid-money"></i><span>Khoảng giá</span></a>
      </li>
     
      <li> 
        <a href="?act=banner&condition=id">
            <i class="zmdi zmdi-image"></i><span>Quản lý banner</span>
        </a>
      </li>

      <li> 
        <a href="?act=khuyenmai&condition=maKM">
            <i class="zmdi zmdi-sale"></i><span>Quản lý khuyến mãi</span>
        </a>
      </li>
      
      <li id="catmenu1"> 
        <a href="#" id="catmenu1">
            <i class="zmdi zmdi-sale"></i><span>Quản lý phụ kiện</span>
        </a>
        <div  id="submenu1" style="width:100%;display:none;" >
        <ul class="sidebar-menu do-nicescrol ml-4"> 
          <li>
          <a href="?act=phukien&condition=idlpk">Danh mục phụ kiện</a>
        </li>

          <li>
            <a href="?act=chitietphukien&condition=idpk">Chi tiết phụ kiện</a>
          </li>
        </ul>
      </div>
      </li>

      <li class="sidebar-header">NHÃN DÁN</li>
      <li><a href="../?action=account&handle=logout"><i class="zmdi zmdi-coffee text-danger"></i> <span>Thoát</span></a></li>
      <!-- <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li> -->

    </ul>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
      $("#catmenu").click(function(){
        $("#submenu").toggle(500);
      })
      return false;
  })
  $(document).ready(function(){
      $("#catmenu1").click(function(){
        $("#submenu1").toggle(500);
      })
      return false;
  })
</script>