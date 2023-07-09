<div class="overlay" style="z-index: 9998;"></div>
    <div class="form-wrap" style="z-index: 9999;width:1000px;">
        <div class="row pt-3">
            <div class="col-md-3">
                <img src="public/img/product/<?=$detail_prod['hinhanh_1']?>" alt="" width="100%" class="pt-3">
                <p class="pt-3" style="text-align:center;"><?=$detail_prod['ten_sp']?> - <?=$detail_prod['tenTH']?>- <?=$detail_prod['matkinh']?> - <?=$detail_prod['nguon_goc']?></p>
            </div>
            <div class="col-md-9">
                <div class="nameProduct">
                    <h2 id="an" style="font-size: 30px;font-weight:600;">Đánh giá về sản phẩm <?=$detail_prod['ten_sp']?></h2>
                </div>
                <div class="pt-5">
                    <form action="?action=detail&id=<?=$_GET['id']?>&id_th=<?=$_GET['id_th']?>&gt=<?=$_GET['gt']?>" method="post">
                        <input type="hidden" value="<?=$detail_prod['idsp']?>" name="idProduct">
                        <div class="review">
                            <div class="reviewRating px-3 py-3 bg-light border-top flex-d align-items-center">
                                <label for="" class="label_review">Đánh giá tổng thể</label>
                                <div class="flex-d" style="margin-left:5rem;">
                                    <?php for($i=1;$i<6;$i++){?>
                                        <div class="p-2 border border-grey rounded ratingReview" id="<?=$detail_prod['idsp']?>-<?=$i?>" data-index="<?=$i?>" data-Productid="<?=$detail_prod['idsp']?>" style="background-color: grey;">
                                            <input type="radio" id="rating<?=$i?>" name="rating" value="<?=$i?>">
                                            <label for="rating<?=$i?>"><i class="fa-solid fa-star fa-3x" style="color: white;"></i></label>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="reviews px-3 py-4 bg-light  border-top " >
                                <label for="" class="pb-4 label_review">Tiêu đề</label>
                               <div class="write-review p-2 border rounded-2">
                                    <input type="text" name="titleReview" placeholder="Ví dụ: Đúng với màu của shop đưa ra,kịch cỡ đúng ..." cols="80" rows="5" class="border-0" style="width:100%;font-size:15px;">
                                </div>
                            </div>
                            <div class="reviews px-3 py-4 bg-light  border-top " >
                                <label for="" class="pb-4 label_review">Đánh giá</label>
                               <div class="write-review">
                                    <textarea type="text" name="contentReview" placeholder="Ví dụ: Tôi mới mua sản phẩm 10 ngày và tôi rất thích nó" cols="80" rows="5" class="textarea_rv" ></textarea>
                                    <div class="w-100% border-top bg-white p-3 rounded-bottom">
                                        <input type="file"  placeholder="Chọn ảnh" id="file-upload" class="input_rv d-none" name="imgReview">
                                        <label for="file-upload" class="bg-secondary py-1 px-2 text-white" >Chọn ảnh</label>
                                    </div>
                                </div>
                            </div>
                            <div class="submit_review px-3 py-4 bg-light  border-top text-right">
                                <?php if(isset($_SESSION['login'])){?>
                            <button type="submit" class="button_review text-uppecase" style="font-size: 15px;color:white;" name="buttonReview">Đăng</button>
                            <?php }else{?>
                                <button type="button" class="button_review text-uppecase" style="font-size: 15px;color:white;" name="buttonReview"><a href="#" id="login_review">Đăng</a></button>
                                
                            <?php }?>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- </label> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- <script>
    $(document).ready(function(){
        $('.overlay').click(function(){
            $('#showReview').hide();
        })
    })
</script> -->
<!-- <script>
   $(document).ready(function() {
        document.getElementById("login_review").onclick = function(){
            document.getElementById("form_login").style.display = "block";
            $('#showReview').hide();
        }

    })
</script> -->
<script>
    $(document).ready(function(){
        $('.emailForm input').click(function(){
            $('.title_form-1').addClass('active_form-1');
        })
    })
    $(document).ready(function(){
        $('.passwordForm input').click(function(){
            $('.title_form-2').addClass('active_form-2');
        })
    })
</script>
<script type="text/javascript">
    function remove_background(productid){
        for( var i=0;i<=5;i++)
        {
            $("#"+productid+'-'+i).css('background-color','grey');
        }
    }
    $(document).on('mouseenter','.ratingReview',function(){
        //hover vào số sao
        var index = $(this).data("index");
        var productid = $(this).data("productid");

        remove_background(productid);
        for( var i=0;i<=index;i++)
        {
            $("#"+productid+'-'+i).css('background-color','yellow');
        }
    })
        $(document).on('click','.ratingReview',function(){
            var index = $(this).data('index');
            var productid = $(this).data('productid');

        })
</script>