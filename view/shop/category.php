
<?php if(isset($_GET['gt'])){$gt = $_GET['gt'];$gioitinh = "&gt=$gt";}else{$gioitinh = "";}?>
<?php if(isset($_GET['id_th'])){$idth = $_GET['id_th'];$thuonghieu = "&id_th=$idth";}else{$thuonghieu = "";}?>
<?php if(isset($_GET['idld'])){$idld = $_GET['idld'];$loaiday = "&idld=$idld";}else{$loaiday = "";}?>
<div class="container-fluid pt-5">
    <div class="row">
        <div class="category-wrap">
            <div class="element-category">
                <div class="name-category">
                    <h3>Thương hiệu</h3>
                </div>
                <hr>
                <div class="filter_inner">
                    <?php $i=1; foreach($data_brand as $value) {?>
                        <div class="filter_item fi<?=$i?>">                        
                        <a href="?action=<?=$_GET['action']?>&sub=cat<?=$gioitinh?>&id_th=<?=$value['idTH']?>" id="cat<?=$i?>">
                            <i class=" fa fa-square border border-1 border-grey square-cat sqcat<?=$i?>" style="color: white;"></i>
                            <?= $value['tenTH']?>
                        </a>
                        </div>
                    <?php $i++; }?>
                </div>
            </div>
            <div class="element-category">
                <div class="name-category">
                    <h3>Loại dây</h3>
                    <router-link></router-link>
                </div>
                <hr>
                <div class="filter_inner">
                    <?php foreach($data_wire as $value) {?>
                        <div class="filter_item">
                           <a id="check" href="?action=<?=$_GET['action']?>&sub=cat<?=$gioitinh?><?=$thuonghieu?>&idld=<?=$value['idLD']?>">
                            <i class=" fa fa-square border border-1 border-grey square-cat sqcat<?=$i?>" style="color: white;"></i>
                            <?= $value['tenLD']?>
                            </a>
                        </div>
                    <?php }?>
                </div>
            </div>
            <div class="element-category">
                <div class="name-category">
                    <h3>Loại máy</h3>
                </div>
                <hr>
                <div class="filter_inner">
                    <?php foreach($data_machine as $value) {?>
                        <div class="filter_item">                       
                            <a href="?action=<?=$_GET['action']?>&sub=cat<?=$gioitinh?><?=$thuonghieu?><?=$loaiday?>&idlm=<?=$value['idLM']?>">
                            <i class=" fa fa-square border border-1 border-grey square-cat sqcat<?=$i?>" style="color: white;"></i>
                            <?= $value['tenLM']?>
                        </a>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <link rel="stylesheet" href="public/css/shop.css"> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
    <script>
        $(document).ready(function(){
            document.getElementById("click_check").onclick = function(){
            document.getElementsByName("filter_brand").checked = "true";
        }
    })
    </script>
    <script >
       function activeCategory(){
            // for(var i=1;i<=9;i++){
                $('#cat1').click(function(){
                    // localStorage.getItem();
                    localStorage.setItem('active1','#cat1'); 
                })
                const a = localStorage.getItem('active1');
                    // localStorage.removeItem('active1');
                    if(a){
                        //  $('#cat1').click(function(){
                            $('#cat1').toggleClass('active')
                            localStorage.removeItem('active1');
                            console.log(a);
                        //  )}
                        }
                    // window.onload = function(){
                // }
            // }
       }
       activeCategory();
    </script>