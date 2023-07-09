<div class="container-fluid">
    <div class="page-heading pt-3 row">
        <!-- strat part 1 -->
        <nav class="product-path">
            <ul class="flex-d">
                <li>
                    <a href="?action=home" style="color: blue;">Trang chủ</a>
                </li>
                <li>
                    <span>&nbsp; > </span><a href="" style="color: blue;">Phụ kiện</a>
                </li>
                
                <li>
                    <span>&nbsp; > </span><a href="" style="color: black;"><?= $pathacc['loaipk'] ?></a>
                </li>
                
            </ul>
        </nav>
    </div>
    <div class="row page-body-acc pt-5">
        <div class="col-3">
            <?php include_once("view/accessory/categoryacc.php"); ?>
        </div>
        <div class="col-9">
        <div class="page-selected section-padding">
            <div class="container">
                <div class="row selected-wrap ">
                    <div class="col-md-12 inner-selected">
                        <div class="genderSelected">
                            <div class="gender d-none">
                                <div class="iconMale"></div>
                                <a href="?action=Nam&gt=1">Đồng hồ nam</a>
                            </div>
                            <div class="gender active_gender d-none">
                                <div class="iconFemale"></div>
                                <a href="?action=Nu&gt=0">Đồng hồ nữ</a>
                            </div>
                        </div>
                        <?php $id = isset($_GET['idlpk']) ? $_GET['idlpk'] : "0";?>
                            <select style="border: 1px solid #bfbebe;" name="sort" id="selected_box" onchange="onchange_selected()">
                                <option value="null">Sắp xếp theo</option>
                                <option value="?action=phukien&idlpk=<?=$id?>&field=gia&sort=ASC">Giá từ thấp đến cao</option>
                                <option value="?action=phukien&idlpk=<?=$id?>&field=gia&sort=DESC">Giá từ cao đến thấp</option>
                                <option value="?action=phukien&idlpk=<?=$id?>&field=thoigian&sort=DESC&">Mới nhất</option>
                            </select>
                        <?php ?>
                    </div>
                </div>
            </div>
            <?php include_once("view/accessory/listacc.php"); ?>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
         function onchange_selected() {
                let obj = document.getElementById("selected_box");
                obj.options[obj.selectedIndex].value && (window.location = obj.options[obj.selectedIndex].value)
            }
    </script>