<?php require_once("admin/ketnoi.php");?>
<header style="width: 100%;float: left;height: 6rem;">
	<h2 class="bai-viet-moi">BÀI MỚI</h2>
	<span class="gach-chan"></span>
</header>
<?php
	$kn = new ketnoi();
	$kq = $kn->get_bai_viet_moi();
	$xet = 0;
	while($row = mysql_fetch_array($kq)){ ?>
        <?php if($xet==0){ /* Mo dau if thuc if */ $xet=2; ?>
        <!-- 1 -->
		<div class="dong-ngang">
			<div class="khung-chua-bai-viet">
				<a class="hinh-anh" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
			<img src="<?php echo $row["thumb"] ?>" width="100%" height="auto" alt="<?php echo $row["tenbv"] ?>" class="hinh-thumb-nho" />
				<div class="tieu-de-ngan-nho"><h3><?php echo $row["tenbv"] ?></h3></div>
					<div class="ngay-thang-dang-nho"><i class="fa fa-calendar" style="font-size:14px;"></i><span>&nbsp; &nbsp;</span><?php echo $row["ngaydang"] ?></div>
	<div class="noi-dung-tom-tat-nho"><?php echo $row["mota"] ?></div>
		</a>
	</div>
    <?php }
	else
		if($xet==2){ ?>
    	<!-- 2 -->
        <div class="khung-chua-bai-viet">
            <a class="hinh-anh" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
                <img src="<?php echo $row["thumb"] ?>" width="100%" height="auto" alt="<?php echo $row["tenbv"] ?>" class="hinh-thumb-nho" />
                <div class="tieu-de-ngan-nho"><h3><?php echo $row["tenbv"] ?></h3></div>
                <div class="ngay-thang-dang-nho"><i class="fa fa-calendar" style="font-size:14px;"></i><span>&nbsp; &nbsp;</span><?php echo $row["ngaydang"] ?></div>
                <div class="noi-dung-tom-tat-nho"><?php echo $row["mota"] ?></div>
            </a>
        </div>
    </div>
        <?php $xet=0; continue;} /* Ket thuc if */ ?>
<?php } ?>
<div class="clear"></div>
