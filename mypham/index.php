<?php 
// include phpmailer class
require_once 'mailer/class.phpmailer.php';
// creates object
$mail = new PHPMailer(true);	
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_POST['btn_send']))
{	

	$subject = "Ok Baby";
	$message = "Họ tên : <b>".$_POST['fullname']."</b><br>";
	$message.= "Số ĐT : <b>".$_POST['email']."</b><br>";
	$message.= "Nội dung : <b>".$_POST['content']."</b><br>";
	
	// HTML email ends here
	
	//try
	//{
		$mail->IsSMTP(); 
		$mail->isHTML(true);		
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPDebug = 2;
		$mail->Port = 25;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth = true;
		$mail->AddAddress('hoangnhonline@gmail.com');
		$mail->Username   ="web.0917492306@gmail.com";  
		$mail->Password   ="ilgvmukmodrwisji";            
		$mail->SetFrom('web.0917492306@gmail.com','Admin');		
		$mail->Subject    = $subject;
		$mail->Body 	  = $message;
		$mail->AltBody    = $message;
			
		if($mail->Send())
		{
			
			echo "<script>alert('Cảm ơn quý khách đã gửi liên hệ');</script>";
			sleep(5);
			header("Location:index.php");
			unset($_POST);
		}
	//}
	//catch(phpmailerException $ex)
	//{
	//	$msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
	//}
}	

?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head><!-- [pre]land_id =  -->
<script>var lang_locale = "en";</script>   <!-- browser locale -->
<script type="text/javascript"> var ccode = "VN"; var ip_ccode = "VN"; var package_prices = {}; var shipment_price = 0; var name_hint = "Phạm Xuân"; var phone_hint = "+84917989737"; var iew = false; var offer_countries = {"VN":"Vi\u1ec7t Nam"}; </script>
<script type="text/javascript" src="style/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="style/js/placeholders-3.0.2.min.js"></script>
<script type="text/javascript" src="style/js/moment-with-locales-2.18.1.min.js"></script>
<script type="text/javascript" src="style/js/dr-dtime.js"></script>
<script type="text/javascript" src="style/js/order_me.js"></script>
<link type="text/css" href="style/css/order_me.css" rel="stylesheet" media="all">
<script type="text/javascript" src="style/js/validation.js"></script>
<script type="text/javascript" src="style/js/video_avid.js"></script>

<style>
    .ac_footer {
        position: relative;
        top: 10px;
        height: 0;
        text-align: center;
        margin-bottom: 70px;
        color: #A12000;
    }

    .ac_footer a {
        color: #A12000;
    }

    .ac_footer p {
        text-align: center;
    }

    img[height="1"], img[width="1"] {
        display: none !important;
    }
    form {
    text-align: center; }
    .input-bnt {    padding: 5px 15px;
    border-radius: 3px;
    background: #765752;
    color: white;}

</style>
<meta content="width=device-width, height=device-height, initial-scale=1.0" name="viewport"/>
<meta charset="utf-8"/>
<meta content="telephone=no" name="format-detection"/>
<title>Chocolate Slim</title>
<link href="boottrap/css/css3.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet"/>
<script src="boottrap/js/main.js" type="text/javascript"></script>
</head>
<body><!--retarget-->

<!--retarget-->

<div class="hide-it">
<!-- <header> -->
<div id="header">
<div class="width">
<div class="block">
<h1>Chocolate Slim</h1>
<h2>Hợp chất giảm béo tự nhiên</h2>
<div class="list"> Giảm tình trạng thừa cân nhanh chóng
						<br/> Đốt cháy mỡ thừa dưới da
						<br/> Loại bỏ mụn đầu đen và trứng cá</div>
<div class="hidden_upsale" style="visibility: visible">
<div class="sale"> Ưu đãi sản phẩm giảm cân!
							<br/> Giảm giá 50%! </div>
</div>
<div class="price">
<del>1180000 ₫</del>
<div>590000 ₫</div>
</div>
<span class="button js-scroll-to-form">Đặt hàng
						<span class="btn__icon"></span>
</span>
</div>
</div>
</div>
<!-- </header> -->
<!-- <steps> -->
<div id="steps">
<div class="width">
<div class="title">Bí quyết giảm đến 10 kg?</div>
<div class="item">
<div>
<span></span>
<img alt="" src="boottrap/images/ico3.jpg"/>
</div>
<p>Pha vào tách</p>
</div>
<div class="item">
<div>
<span></span>
<img alt="" src="boottrap/images/ico2.jpg"/>
</div>
<p>Uống buổi sáng</p>
</div>
<div class="item">
<div>
<span></span>
<img alt="" src="boottrap/images/ico1.jpg"/>
</div>
<p>Trong vòng 2-4 tuần</p>
</div>
<div class="clear"></div>
<div class="text">
<div class="title">Chocolate Slim</div>
<p>là hợp chất với các thành phần giảm béo tự nhiên, cùng kết hợp và thúc đẩy để nâng cao tính hiệu quả.
						<br/>Kết quả vượt ngoài mong đợi!
					</p>
</div>
</div>
</div>
<!-- </steps> -->
<!-- <sostav> -->
<div id="sostav">
<div class="width">
<div class="title">
					Tại sao Chocolate Slim
					<br/>lại công hiệu đặc biệt đến vậy?
				</div>
<h2>6 thành phần tự nhiên</h2>
<div class="item first">
<img alt="" src="boottrap/images/img1.png"/>
<div class="message">
<div>Canxi</div>
<p>
							Làm giảm cảm giác thèm ăn.
							<br/> Tăng thêm sinh lực và sức mạnh.
						</p>
</div>
</div>
<div class="item first right">
<img alt="" src="boottrap/images/img2.png"/>
<div class="message">
<div>Sắt</div>
<p>
							Đốt cháy mỡ tự nhiên.
							<br/> Ngăn chặn tích tụ mỡ thừa.
						</p>
</div>
</div>
<div class="clear"></div>
<div class="item second">
<img alt="" src="boottrap/images/img3.png"/>
<div class="message">
<div>Phốt pho</div>
<p>
							Chứa chất cyanidin giúp ngăn chặn
							<br/> sự phát triển các tế bào mô mỡ.
							<br/> Chất chống oxy hóa có nguồn gốc thiên nhiên.
						</p>
</div>
</div>
<div class="item second right">
<img alt="" src="boottrap/images/img4.png"/>
<div class="message">
<div>Loại vitamin A</div>
<p>
							Mang đến đến năng lượng sung mãn.
							<br/> Ngăn ngừa tích tụ mỡ
							<br/> ở những vùng có vấn đề.
						</p>
</div>
</div>
<div class="clear"></div>
<div class="item third">
<img alt="" src="boottrap/images/img5.png"/>
<div class="message">
<div>ca cao</div>
<p>
							Thúc đẩy quá trình oxy hóa tiêu diệt mỡ tích tụ. Tăng cường hệ thống miễn dịch trong quá trình giảm béo. Kìm hãm cảm giác
							thèm đồ ngọt. Sản sinh chất dopamine (hoóc-môn hạnh phúc).
						</p>
</div>
</div>
<div class="item third right">
<img alt="" src="boottrap/images/img6.png"/>
<div class="message">
<div>loại vitamin B1, B2</div>
<p> Bình thường hóa quá trình chuyển hóa chất béo. Cải thiện chức năng toàn bộ hệ thống cơ thể. Làm giảm lượng cholesterol
							trong máu.</p>
</div>
</div>
<div class="clear"></div>
</div>
<div class="plaha">Hữu cơ.</div>
</div>
<!-- </sostav> -->
<!-- <result> -->
<div id="result">
<div class="width">
<div class="title">Kết quả: Mang đến mọi người vóc dáng thon gọn hơn cùng với Chocolate Slim!</div>
<h2>Trên 7.000 nữ giới cảm thấy hạnh phúc khi đã giảm cân!</h2>
<div class="item">
<img alt="" src="boottrap/images/img7.jpg"/>
<p>Đốt cháy mỡ thừa trong chốc lát</p>
</div>
<div class="item">
<img alt="" src="boottrap/images/img8.jpg"/>
<p>Bạn không muốn dùng bữa</p>
</div>
<div class="item">
<img alt="" src="boottrap/images/img9.jpg"/>
<p>Bạn ngập tràn năng lượng</p>
</div>
<div class="item">
<img alt="" src="boottrap/images/img10.jpg"/>
<p>Không còn cảm giác thèm đồ ngọt</p>
</div>
<div class="item">
<img alt="" src="boottrap/images/img11.jpg"/>
<p>Tâm trạng thư thái</p>
</div>
<div class="clear"></div>
</div>
</div>
<!-- </result> -->
<!-- <info-block> -->
<div id="info-block">
<div class="width">
<div class="title">
					Giảm cân chưa bao giờ
					<br/> dễ dàng đến vậy!
				</div>
<p>Với hợp chất Chocolate Slim, bạn có thể giảm tới 5-7 kg trong 4 tuần. Trong suốt quá trình giảm cân, bạn luôn có được
					tâm trạng thoải mái và tràn ngập năng lượng! Hãy tận hưởng khi giảm cân! Sô cô la là một trong những loại sản phẩm luôn
					cho bạn cảm giác muốn thưởng thức lại.
					<br/>
<br/> Sản phẩm không phải thực phẩm chức năng và chứa thành phần tự nhiên từ ca cao. Sản phẩm thích hợp cho việc sử dụng
					hàng ngày và không có chống chỉ định đồng thời loại bỏ các nguyên nhân cơ bản gây ra tình trạng thừa cân cũng như bình
					thường hóa quá trình trao đổi chất trong cơ thể.
					<br/>
<br/> Đây là sản phẩm tạo lên cuộc cách mạng thực sự trong lĩnh vực tân trang nhan sắc, sức khỏe cũng như công cuộc trẻ hóa.
				</p>
</div>
</div>
<!-- </info-block> -->
<!-- <compare> -->
<div id="compare">
<div class="width">
<div class="title">
					So sánh Chocolate Slim với các phương pháp
					<br/> giảm cân thông thường khác
				</div>
<h2>
					Chúng tôi đã phỏng vấn nhóm nữ giới gồm 15 người, những đối tượng đang mong muốn sở hữu một thân hình thon gọn hơn, kết quả
					đã nói thay tất cả
				</h2>
<div class="wr">
<div class="text1">
						Chocolate Slim
						<span>(Không cần thay đổi lối sống)</span>
</div>
<ul class="text2 clearfix">
<li>kg</li>
<li>1 tuần</li>
<li>2 tuần</li>
<li>3 tuần</li>
<li>4 tuần</li>
</ul>
<div class="text3">
<span>Các bài tập thể chất 3 lần/tuần</span>
<span>Các phương thuốc giảm cân</span>
</div>
</div>
</div>
</div>
<!-- </compare> -->
<!-- <reviews> -->
<div id="reviews">
<div class="width">
<div class="title">Cùng đặt câu hỏi với những người đã giảm cân cùng Chocolate Slim</div>
<h2>Người thực - công dụng thực!</h2>
<div class="review">
<img alt="" src="boottrap/images/ava1.jpg"/>
<div class="date">
<div>
<script>
								dtime_nums(-60, true)
							</script>
</div>
<div>
<script>
								dtime_nums(-10, true)
							</script>
</div>
</div>
<div class="name">Yến, 25 tuổi</div>
<div class="email">Yen****@gmail.com</div>
<p> Sản phẩm quả thực làm mình quá đỗi ngạc nhiên! Mình đã giảm được 18 kg ngay trong 3 tuần đầu! Quan trọng là phải tuân
						theo hướng dẫn sử dụng: 1 tách sô cô la trước bữa ăn sáng nhẹ hoặc dùng thay cho ăn sáng, uống liên tục mỗi ngày không
						ngắt quãng. Luôn đảm bảo không ăn bánh ngọt trước khi đi ngủ. Mình đã áp dụng thành công, các bạn cũng có thể làm được
						như vậy!
					</p>
</div>
<div class="review center">
<img alt="" src="boottrap/images/ava2.jpg"/>
<div class="date">
<div>
<script>
								dtime_nums(-70, true)
							</script>
</div>
<div>
<script>
								dtime_nums(-4, true)
							</script>
</div>
</div>
<div class="name">Hoàng Bách, 28 tuổi</div>
<div class="email">Bách*****@gmail.com</div>
<p> Bà xã có mua về sản phẩm Chocolate Slim sau khi tôi đã áp dụng rất nhiều phương pháp giảm cân: các loại trà cũng như
						thuốc giảm cân khác nhau. Tôi đã giảm được 12 kg chỉ trong 1,5 tháng và không có ý định giảm thêm cân nữa. Cám ơn nhiều!
					</p>
</div>
<div class="review">
<img alt="" src="boottrap/images/ava3.jpg"/>
<div class="date">
<div>
<script>
								dtime_nums(-30, true)
							</script>
</div>
<div>
<script>
								dtime_nums(-2, true)
							</script>
</div>
</div>
<div class="name">Huyền Trần, 32 tuổi</div>
<div class="email">Hoahong****@gmail.com</div>
<p>Thật tuyệt khi cuối cùng Chocolate Slim cũng đã xuất hiện tại
						<span class="additional_fields_country_name">Việt Nam</span> Mình đã đọc tất cả các bài viết về sản phẩm trên diễn đàn và thử áp dụng cho bản thân. Các bạn cứ tưởng
						tượng xem, điều tuyệt vời đã đến khi giờ mình đã có thể diện quần jeans, điều 4 năm trước nằm mơ cũng không dám nghĩ
						đến :)</p>
</div>
<div class="clear"></div>
<div class="buy">
<div>Đừng chần chờ, hãy bắt đầu giảm cân ngay!</div>
<span class="button js-scroll-to-form">Đặt hàng
						<span class="btn__icon"></span>
</span>
</div>
</div>
</div>
<!-- </reviews> -->
<!-- <info-block2> -->
<div id="info-block2">
<div class="width">
<div class="left">
<div class="title">
<div>Sản phẩm vô hại?</div>
</div>
<p> Sôcôla Slim gồm toàn bộ các thành phần tự nhiên, không chứa paraben, không thuốc nhuộm, chất thơm tổng hợp cũng như
						các sản phẩm biến đổi gen. Đọc hướng dẫn.</p>
</div>
<div class="right">
<div class="title">
<div>Mua hàng ở đâu?</div>
</div>
<p>tại
						<span class="additional_fields_country_name">Việt Nam</span> công ty chúng tôi là nhà cung cấp chính thức duy nhất sản phẩm sô cô la Chocolate Slim! Ngoài ra đều
						được xem là giả mạo! Bạn chỉ có thể đặt mua hàng DUY NHẤT trên trang web của chúng tôi. </p>
</div>
<div class="center">
<div class="title">
<div> Tôi cần dùng hàm lượng sản phẩm như nào để giảm được 10 kg?</div>
</div>
<p>Hàng loạt các thử nghiệm lâm sàng cho thấy bạn chỉ cần áp dụng một đợt dùng sản phẩm Chocolate Slim là đủ để đạt được
						kết quả tốt. Có thể cảm nhận kết quả đầu tiên vào ngày thứ ba sử dụng! </p>
</div>
<div class="clear"></div>
</div>
</div>
<!-- </info-block2> -->
<!-- <how-buy> -->
<div id="how-buy">
<div class="width">
<div class="title">Cách thức đặt mua Chocolate Slim?</div>
<div class="item">
<img alt="" src="boottrap/images/ico4.jpg"/>
<p>Điền vào biểu mẫu trên trang web của chúng tôi</p>
</div>
<div class="item">
<img alt="" src="boottrap/images/ico5.jpg"/>
<p>Chờ cuộc gọi từ nhân viên hỗ trợ bán hàng</p>
</div>
<div class="item">
<img alt="" src="boottrap/images/ico6.jpg"/>
<p>Nhận gói hàng
						<span class="del_office">ở khu vực bưu điện gần nhất</span>
</p>
</div>
<div class="clear"></div>
</div>
</div>
<!-- </how-buy> -->
<!-- <how-buy> -->
<div>
<div class="width">
<div id="howuse">
<h2>Sử dụng
						<b>Chocolate Slim</b> dễ dàng hơn bao giờ hết!</h2>
<div class="hu_step">
<img src="boottrap/images/hu_step1.jpg"/>
<p class="hu_title">CHUẨN BỊ</p>
<p>
<b>Làm cocktail mỗi sáng với 250 ml nước uống</b>, hòa 1-2 muỗng hỗn hợp cho nữ giới và 2-3 muỗng hỗn hợpcho nam giới.
							</p>
</div>
<div class="hu_step">
<img src="boottrap/images/hu_step2.jpg"/>
<p class="hu_title">DÙNG</p>
<p>
<b>DÙNG cocktail đã chuẩn bị thay cho bữa ăn sáng</b>, và cơ thể bạn sẽ nhận: 91 kcal, 10g carbohydrate, 17g protein,
							23 nguyên tố vi lượng cùng vitamin và chất xơ. </p>
</div>
<div class="hu_step">
<img src="boottrap/images/hu_step3.jpg"/>
<p class="hu_title">LẶP LẠI</p>
<p>Trong cả ngày
							<b>thay thế các bữa ăn khác bằng ly cocktail nói trên</b> để tăng thêm tính công hiệu. </p>
</div>
<p style="clear: both; float: none; width: 0; height: 0;"></p>
</div>
<div class="clear"></div>
</div>
</div>
<!-- </how-buy> -->
<!-- <footer> -->
<div id="footer">
<div class="width">
<div class="left">
<h1>Chocolate Slim</h1>
<h2>Hợp chất giảm béo tự nhiên</h2>
<img alt="" class="prod" src="boottrap/images/prod.png"/>
<div class="hidden_upsale" style="visibility: visible">
<div class="sale">Ưu đãi sản phẩm giảm cân! Giảm giá 50%!</div>
</div>
<div class="price">
<del>1180000 ₫</del>
<div>590000 ₫</div>
</div>
</div>
<div class="right">
<div class="time js-form">
<div class="name-t">Ưu đãi kết thúc vào:</div>
<div id="timer"></div>
</div>
<form action="" method="post">
            <input class="input-text" type="text" name="fullname" value="Họ tên *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <input class="input-text" type="text" name="email" value="Số ĐT *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <textarea class="input-text text-area" style="display: block;width: 268px;height: 150px;margin: 0 auto 13px auto;padding: 0 20px;font-size: 16px;line-height: 50px;color: #ffffff;background: #765752;
" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" name="content">Nội dung *</textarea>
            <input class="input-btn" style="padding: 5px 15px;border-radius: 3px;background: #765752;color: white;" type="submit" value="Gửi" name="btn_send">

</div>
</div>
</div>
</div>
<script>
    $(document).ready(function () {
        
        
        try {
            moment.locale("");
            $('.day-before').text(moment().subtract(1, 'day').format('D.MM.YYYY'));
            $('.day-after').text(moment().add(1, 'day').format('D.MM.YYYY'));
        } catch (e) { console.log('moment problems!'); }
    });
</script>


<script>var names_examples = ["\u0110\u1eb7ng th\u1ecb thanh thu\u00fd","\u0110\u0103\u0323ng Tu\u00e2\u0301n Ha\u0300","Hu\u1ec7","l\u01b0u  th\u1ecb  h\u1ed3ng  hanh","Ng\u00f4 ch\u00ed nh\u00e2n","Ngo ho\u00e0i t\u00e2m","Nguy\u1ec5n Anh Tu\u1ea5n","Nguy\u1ec5n m\u1ea1nh th\u1eafng","nguy\u00ea\u0303n nh\u00e2n","nguy\u1ec5n th\u1ecb \u00e1nh tuy\u1ebft","Nguy\u00ean thi hong linh","nguy\u1ec5n th\u1ecb h\u01b0\u01a1ng","Nguy\u1ec5n th\u1ecb minh lan","Nguy\u1ec5n Th\u1ecb Minh T\u00e2m","nguyen thi ngoc","nguy\u00ea\u0303n thi\u0323 xu\u00e2n trang","Nguy\u1ec5n Tuy\u1ebft","Nguy\u1ec5n V\u0103n \u0110\u1ea1o","Nguy\u1ec5n v\u0103n M\u1ea1nh","Nguy\u00ean xoan","N\u00f4ng th\u1ecb Thanh","phan thi mai","Tr\u1ea7n Ng\u1ecdc Anh","Tr\u1ea7n th\u1ecb th\u00eau","tr\u1ea7n ti\u1ebfn th\u00e0nh","Vo minh thien"];
                var country_name = "Việt Nam";</script>
<script>function randomInteger(min, max) {
    var rand = min + Math.random() * (max + 1 - min);
    rand = Math.floor(rand);
    return rand;
}


$(function () {


    setTimeout(function () {
        var cc_vid = $('.cc_widget');
        cc_vid.fadeIn();
        cc_vid.animate({"right": "0px"}, "slow");
    }, 200);

    var cc_check = $('.cc_js_count_peoples').length;
    var cc_check1 = $('.cc_js_count').length;


    if (cc_check1 || cc_check) {
        var ccInt = setInterval(function () {

            var cc_peoples = $('.cc_js_count_peoples');
            var cc_count = $('.cc_js_count');
            var valCount = 0;
            var val = 0;

            if (cc_peoples.length) {
                valCount = parseInt(cc_peoples.text())
            }
            if (cc_count.length) {
                val = parseInt(cc_count.text());
            }


            if (val > 1) {
                val--;
                if (cc_count.length) {
                    cc_count.text(val)
                }

            }
            if (randomInteger(1, 2) == 1 && valCount > 2) {
                valCount--;
            }
            else {
                valCount++;
            }
            if (cc_peoples.length) {
                cc_peoples.text(valCount)
            }

        }, 10000);
    }


});</script>
<style>/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/ek4gzZ-GeXAPcSbHtCeQI_esZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
  unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/mErvLBYg_cXG3rLvUsKT_fesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/-2n2p-_Y08sg57CNWQfKNvesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/u0TOpm082MNkS5K0Q4rhqvesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/NdF9MtnOpLzo-noMoG0miPesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
  unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/Fcx7Wwv8OzT71A3E1XOAjvesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/CWB0XYA8bzo0kSThX0UTuA.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v16/ZLqKeelYbATG60EpZBSDyxJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v16/oHi30kwQWvpCWqAhzHcCSBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v16/rGvHdJnr2l75qb0YND9NyBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v16/mx9Uck6uB63VIKFYnEMXrRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v16/mbmhprMH69Zi6eEPBYVFhRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v16/oOeFwZNlrTefzLYmlVV1UBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v16/RxZJdnzeo3R5zSexge8UUVtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v16/77FXFjRbGzN4aCrSFhlh3hJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v16/isZ-wbCXNKAbnjo6_TwHThJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v16/UX6i4JxQDm3fVTc1CPuwqhJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v16/jSN2CGVDbcVyCnfJfjSdfBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v16/PwZc-YbIL414wB9rB1IAPRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v16/97uahxiqZRoncBaCEI3aWxJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v16/d-6IYplOFocCacKzxwXSOFtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url(https://fonts.gstatic.com/s/roboto/v16/s7gftie1JANC-QmDJvMWZhJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url(https://fonts.gstatic.com/s/roboto/v16/3Y_xCyt7TNunMGg0Et2pnhJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url(https://fonts.gstatic.com/s/roboto/v16/WeQRRE07FDkIrr29oHQgHBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url(https://fonts.gstatic.com/s/roboto/v16/jyIYROCkJM3gZ4KV00YXOBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url(https://fonts.gstatic.com/s/roboto/v16/phsu-QZXz1JBv0PbFoPmEBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url(https://fonts.gstatic.com/s/roboto/v16/9_7S_tWeGDh5Pq3u05RVkhJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url(https://fonts.gstatic.com/s/roboto/v16/mnpfi9pxYH-Go5UiibESIltXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}

.cc_widget {
  position: fixed;
  top: 0;
  right: -500px;
  display: none;
  width: 0;
  z-index: 10000;
  -moz-transition: all 0.5s ease-out;
  -o-transition: all 0.5s ease-out;
  -webkit-transition: all 0.5s ease-out;
  font-family: 'Roboto', sans-serif; }
  .cc_widget .clearfix:after, .cc_widget .clearfix:before {
    display: table;
    content: ''; }
  .cc_widget .clearfix:after {
    clear: both; }
  .cc_widget * {
    box-sizing: border-box;
    margin: 0;
    padding: 0; }


  .cc_widget__shipment, .cc_widget__pl, .cc_widget__customer {
    max-width: 500px;
    min-width: 350px;
    font-weight: 500;
    float: right; }

.cc_widget b b {
  font-weight: 900; }

.cc_widget .cc_dtable {
  display: table; }
.cc_widget .cc_dtc {
  display: table-cell;
  vertical-align: middle; }
.cc_widget .cc_dtc.vtop {
  vertical-align: top; }
.cc_widget .cc_dtc.bot {
  vertical-align: bottom; }

.cc_widget__customer.another {
  background: #2b8dc4;
  border-color: #2b6f8d; }
.cc_widget__customer {
  display: table;
  background: #5fba4d;
  border: 2px solid #518d46;
  margin-top: 30px;
  min-width: 300px;
  border-radius: 10px 0px 0px 10px;
  -moz-border-radius: 10px 0px 0px 10px;
  -webkit-border-radius: 10px 0px 0px 10px; }

.cc_widget__customer .cc_dtc {
  padding: 10px;
  color: #fff;
  font-size: 17px; }
.cc_widget__customer .cc_dtc:first-child {
  width: 60px;
  padding-right: 0; }
.cc_widget__customer .cc_dtc:first-child img {
  max-width: 100%; }
.cc_widget__customer .cc_dtc b {
  font-size: 15px; }
.cc_widget__customer .cc_dtc text {
  display: block; }
.cc_widget__customer .cc_dtc span {
  color: #1eff00; }

.cc_widget__customer {
  display: table;
  background: #5fba4d;
  border: 2px solid #518d46;
  margin-top: 30px;
  min-width: 300px;
  border-radius: 10px 0px 0px 10px;
  -moz-border-radius: 10px 0px 0px 10px;
  -webkit-border-radius: 10px 0px 0px 10px; }

.cc_widget__customer .cc_dtc {
  padding: 10px;
  color: #fff;
  font-size: 17px; }
.cc_widget__customer .cc_dtc:first-child {
  width: 60px;
  padding-right: 0; }
.cc_widget__customer .cc_dtc:first-child img {
  max-width: 100%; }
.cc_widget__customer .cc_dtc b {
  font-size: 15px; }
.cc_widget__customer .cc_dtc text {
  display: block; }
.cc_widget__customer .cc_dtc span {
  color: #1eff00; }



@media screen and (max-width: 991px) {
  .cc_widget {
    display: none !important; } }</style><div class="cc_widget" ></div>


<div class="ac_footer"><span>&copy; 2018 Copyright. All rights reserved.</span>    
</div>

</body>
</html>