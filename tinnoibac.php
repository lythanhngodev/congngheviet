<?php
	include_once("admin/ketnoi.php");
	$kn = new ketnoi();
	$kq = $kn->get_five_news();
	$chay = 1;
	$cm1;$cm2;$cm3;$cm4;
	while($row = mysql_fetch_array($kq)){?>
	<!-- content -->
    <?php if($chay==1){ ?>
    <?php if($row[2]==1) {$cm1 = "mau1";}
			else
			if($row[2]==2) {$cm1 = "mau2";}
			else
			if($row[2]==3) {$cm1 = "mau3";}
			else
			if($row[2]==4) {$cm1 = "mau4";}
			else
			if($row[2]==5) {$cm1 = "mau5";}
	?>
    <div id="tin-moi">
			<div class="dong animated fadeIn" id="dong1" onmouseout="anmau('<?php echo $cm1 ?>','1')" onmousemove="hienmau('<?php echo $cm1 ?>','1')" style="animation-delay:100ms;background-image: url('<?php echo $row["thumb"] ?>');width: 50%;height: 34rem;background-position: center;background-size: cover;"><!-- Dòng 1 -->
				<article class="muc-chinh" id="xet">
				<a class="nam-tren-hinh" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
									<div class="nen-noi" id="<?php echo $cm1."1" ?>">
										<div class="tieu-de-ngan">
											<h2><?php echo $row["tenbv"] ?></h2>
									</div>
									<div class="ngay-thang-dang"><span class="fa fa-calendar" itemprop="dateCreated">&nbsp;&nbsp;<?php echo $row["ngaydang"] ?></span></div>
									</div>
							</a>
					</article>
			</div>
    <?php $chay=2; }
	else
	if($chay==2){?>
    <?php if($row[2]==1) {$cm1 = "mau1";}
			else
			if($row[2]==2) {$cm1 = "mau2";}
			else
			if($row[2]==3) {$cm1 = "mau3";}
			else
			if($row[2]==4) {$cm1 = "mau4";}
			else
			if($row[2]==5) {$cm1 = "mau5";}
	?>
	<div class="dong animated fadeIn" id="dong1" onmouseout="anmau('<?php echo $cm1 ?>','2')" onmousemove="hienmau('<?php echo $cm1 ?>','2')" style="animation-delay:150ms;background-image: url('<?php echo $row["thumb"] ?>');width: 49.8%;height: 34rem;background-position: center;background-size: cover;"><!-- Dòng 1 -->
		<article class="muc-chinh" id="xet">
		<a class="nam-tren-hinh" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
							<div class="nen-noi" id="<?php echo $cm1."2" ?>">
								<div class="tieu-de-ngan">
									<h2><?php echo $row["tenbv"] ?></h2>
							</div>
							<div class="ngay-thang-dang"><span class="fa fa-calendar" itemprop="dateCreated">&nbsp;&nbsp;<?php echo $row["ngaydang"] ?></span></div>
							</div>
					</a>
			</article>
	</div>
    <?php $chay=3; }
	else
	if($chay==3){?>
    <?php if($row[2]==1) {$cm1 = "mau1";}
			else
			if($row[2]==2) {$cm1 = "mau2";}
			else
			if($row[2]==3) {$cm1 = "mau3";}
			else
			if($row[2]==4) {$cm1 = "mau4";}
			else
			if($row[2]==5) {$cm1 = "mau5";}
	?>
    <div class="dong dong33 animated fadeIn" id="dong3" onMouseOut="anmau('<?php echo $cm1 ?>','3')" style="animation-delay:200ms;">
    	<article class="muc-chinh33" id="xet" onMouseMove="hienmau('<?php echo $cm1 ?>','3')">
			<a class="nam-tren-hinh33" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
				<img src="<?php echo $row["thumb"] ?>" width="778" height="auto" alt="<?php echo $row["tenbv"] ?>" class="anh-thu-nho-13" />
                <div class="nen-noi33" id="<?php echo $cm1."3" ?>">
                	<div class="tieu-de-ngan33">
                    <h2 style="font-size: 152%;"><?php echo $row["tenbv"] ?></h2>
                </div>
                <div class="ngay-thang-dang33"><span class="fa fa-calendar" itemprop="dateCreated">&nbsp;&nbsp;<?php echo $row["5"] ?></span></div>
                </div>
            </a>

        </article>
    </div>
    <?php $chay=4; }
	else
	if($chay==4){?>
    <?php if($row[2]==1) {$cm1 = "mau1";}
			else
			if($row[2]==2) {$cm1 = "mau2";}
			else
			if($row[2]==3) {$cm1 = "mau3";}
			else
			if($row[2]==4) {$cm1 = "mau4";}
			else
			if($row[2]==5) {$cm1 = "mau5";}
	?>
    <div class="dong dong33 animated fadeIn" id="dong4" onMouseOut="anmau('<?php echo $cm1 ?>','4')" style="animation-delay:250ms;">
    	<article class="muc-chinh33" id="xet" onMouseMove="hienmau('<?php echo $cm1 ?>','4')">
			<a class="nam-tren-hinh33" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
				<img src="<?php echo $row["thumb"] ?>" width="778" height="auto" alt="<?php echo $row["tenbv"] ?>" class="anh-thu-nho-13" />
                <div class="nen-noi33" id="<?php echo $cm1."4" ?>">
                	<div class="tieu-de-ngan33">
                    <h2 style="font-size: 152%;"><?php echo $row["tenbv"] ?></h2>
                </div>
                <div class="ngay-thang-dang33"><span class="fa fa-calendar" itemprop="dateCreated">&nbsp;&nbsp;<?php echo $row["ngaydang"] ?></span></div>
                </div>
            </a>

        </article>
    </div>
    <?php $chay=5; }
	else
	if($chay==5){ ?>
    <?php if($row[2]==1) {$cm4 = "mau1";}
			else
			if($row[2]==2) {$cm4 = "mau2";}
			else
			if($row[2]==3) {$cm4 = "mau3";}
			else
			if($row[2]==4) {$cm4 = "mau4";}
			else
			if($row[2]==5) {$cm4 = "mau5";}
	?>
    <div class="dong dong33 animated fadeIn" id="dong5" onMouseOut="anmau('<?php echo $cm4 ?>','5')" style="animation-delay:300ms;">
    	<article class="muc-chinh33" id="xet" onMouseMove="hienmau('<?php echo $cm4 ?>','5')">
			<a class="nam-tren-hinh33" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
				<img src="<?php echo $row["thumb"] ?>" width="778" height="auto" alt="<?php echo $row["tenbv"] ?>" class="anh-thu-nho-13" />
                <div class="nen-noi33" id="<?php echo $cm4."5" ?>">
                	<div class="tieu-de-ngan33">
                    <h2 style="font-size: 152%;"><?php echo $row["tenbv"] ?></h2>
                </div>
                <div class="ngay-thang-dang33"><span class="fa fa-calendar" itemprop="dateCreated">&nbsp;&nbsp;<?php echo $row["ngaydang"] ?></span></div>
                </div>
            </a>
        </article>
    </div>
</div>
<?php }?>
<?php } ?>
