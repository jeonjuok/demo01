<?php
include_once(__DIR__ . '/default/config.php');
include_once(__DIR__ . '/default/inc/header.php');
?>

<!-- 메인 컨텐츠 [S]-->
<div id="contents">
<!-- 메인 슬라이더 [S]-->
<div class="slider-wrap">
  <div class="bxslider">
  <!-- 첫번째 이미지 -->
  <div>
    <div class="bx-caption">
      <h2>디지털 커머스 에이전시</h2>
      <p>귀사의 전자상거래 이젠 조이코리아에게 맡기세요.</p>

      <div class="bx-caption-btn"><a href="<?=$default_path?>/company/company.php" class="slider-link">바로가기</a></div>
    </div>
    <div class="bxslider-img" style="background:url('<?=$default_path?>/img/_designcoco/images/main_img1.jpg') center;"></div>
  </div>
  <!-- 두번째 이미지 -->
  <div>
    <div class="bx-caption">
      <h2>디지털 커머스 에이전시</h2>
      <p>귀사의 전자상거래 이젠 조이코리아에게 맡기세요.</p>
      <div class="bx-caption-btn"><a href="<?=$default_path?>/business/business1.php" class="slider-link">바로가기</a></div>
    </div>
    <div class="bxslider-img" style="background:url('<?=$default_path?>/img/_designcoco/images/main_img2.jpg') center;"></div>
  </div>
  <!-- 세번째 이미지 -->
  <div>
    <div class="bx-caption"> 
      <h2>디지털 커머스 에이전시</h2>
      <p>귀사의 전자상거래 이젠 조이코리아에게 맡기세요.</p>
      <div class="bx-caption-btn"><a href="<?=$default_path?>/business/business1.php" class="slider-link">바로가기</a></div>
    </div>
    <div class="bxslider-img" style="background:url('<?=$default_path?>/img/_designcoco/images/main_img3-1.jpg') center;"></div>
  </div>
  </div>
<script>
  $('.bxslider').bxSlider({
  mode : 'fade',
  auto: true,
  autoControls: true,
  stopAutoOnClick: true,
  pager: true,
  touchEnabled : false
});
</script>
</div>
<!-- 메인 슬라이더 [E]-->
<!-- 서비스 영역 [S]-->
<section id="our-service">
<div class="container wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="100ms">
<div class="service-box">
<div class="service-box-01">
<a href="<?=$default_path?>/company/company.php" class="service-btn">
<div class="service-icon"><i class="fa fa-building-o"></i></div>
<div class="service-txt">
<h3>INTRODUCE</h3>
<p>온라인판매/전자상거래의 기준 - 조이코리아</p>
</div>
</a>
</div>
<div class="service-box-02 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
<a href="<?=$default_path?>/business/business1.php" class="service-btn">
<div class="service-icon"><i class="fa fa-line-chart"></i></div>
<div class="service-txt">
<h3>BUSINESS</h3>
<p>다년간 축적된 노하우로 함께하는 온라인판매</p>
</div>
</a>
</div>
<div class="service-box-03 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
<a href="<?=$default_path?>/luxury/business1.php" class="service-btn">
<div class="service-icon"><i class="fa fa-briefcase"></i></div>
<div class="service-txt">
<h3>LUXURY GOODS</h3>
<p>역사와 전통이 있는 이탈리아 파트너사와 업무제휴</p>
</div>
</a>
</div>
</div>
</div>
</section>
<!-- 서비스 영역 [E]-->
<!-- What we do 영역 [S]-->
<section id="what-we-do">
<div>
<h3>JOYKOREA Business Model</h3>
<p>조이코리아는 다년간의 이커머스 노하우와 검증된 판매 실적을 바탕으로 최상의 디지털 커머스 서비스를 제공합니다.</p>
</div>
<div class="container">
<!-- 첫번째 배너 [S]-->
<div class="what-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="100ms">
<div class="what-img"><a href="<?=$default_path?>/naver/smartstore.php"><figure><img src="<?=$default_path?>/img/_designcoco/images/what1.jpg" alt=""/></figure></div>
<div class="what-txt">
<center><h4>스마트스토어 에이전시</h4></center>
<p>네이버 스마트스토어 공식 운영대행을 통해 상품 등록부터 마케팅, CS까지 올인원 대행 서비스를 제공하여 매출 극대화를 돕습니다.</p>

</div>
</div>
<!-- 첫번째 배너 [E]-->
<!-- 두번째 배너 [S]-->
<div class="what-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
<div class="what-img"><a href="<?=$default_path?>/business/business1.php"><figure><img src="<?=$default_path?>/img/_designcoco/images/what2.jpg" alt=""/></figure></div>
<div class="what-txt">
<center><h4>온라인 판매대행</h4></center>
<p>오픈마켓 및 종합 쇼핑몰을 대상으로 한 온라인 공식 벤더 활동을 통해 최상의 유통망 확장 및 판매 프로세스를 대행합니다.</p>
</div>
</div>
<!-- 두번째 배너 [E]-->
<!-- 세번째 배너 [S]-->
<div class="what-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
<div class="what-img"><a href="<?=$default_path?>/luxury/business1.php"><figure><img src="<?=$default_path?>/img/_designcoco/images/what3.jpg" alt=""/></figure></div>
<div class="what-txt">
<center><h4>해외명품사업</h4></center>
<p>이탈리아 현지 70년 전통 파트너사와의 직배송 제휴를 통해 유명 백화점 및 온라인 명품 플랫폼에 신뢰도 높은 명품 유통망을 구축하고 있습니다.</p>

</div>
</div>
<!-- 세번째 배너 [E]-->
</div>
</section>
<!-- What we do 영역 [E]-->
<!-- 소개 영역 [S]-->
<section id="introduce">
<div class="container wow fadeInUp">
<h3>해외명품 브랜드 제품 국내 온라인 및 백화점 유통</h3>
<p>역사와 전통이 있는 이탈리아 파트너사와 업무제휴를 통해 국내 온라인 및 유명 백화점에 입점 유통하고 있습니다.</p>
<div><a href="<?=$default_path?>/luxury/business1.php" class="btn intro-btn">자세히보기 >> </a></div>
</div>
</section>
<!-- 소개 영역 [E]-->
<!-- 제품소개 영역 [S]-->
<section id="product">
<div class="container wow fadeInUp">
<h2><a href="<?=$default_path?>/product/product1.php">운영쇼핑몰</a></h2>
<p>온라인몰 입점채널이 아닌 조이코리아가 직접 운영중인 쇼핑몰입니다.</p>
<!-- 게시판 시작 -->
<link rel="StyleSheet" href="/demo01/inc/board/board_4.css" type="text/css">

<table border="0" cellspacing="0" cellpadding="0" width="100%" class='product_board_out'>
 <tr>
  <td>
    <tr valign='top'><td style='word-break:break-all;overflow:hidden;'><table border='0' cellspacing='0' cellpadding='2' width='98%'><tr><td class='board_output_gallery_img'><a href='business/business.php?com_board_basic=read_form&&com_board_idx=8&com_board_id=4'><img alt='' src='/demo01/component/board/board_4/u_image/8/1160253452_mall_01.jpg' border='0' width='382' height='255' class='board_output_imgs' /></a><br></td></tr><tr><td style='word-break:break-all;overflow:hidden;'><span class='board_output_gallery_subject'><a href='/demo01/business/business.php?com_board_basic=read_form&&com_board_idx=8&com_board_id=4'>도루코공식몰   </a></span><br></td></tr></table></td><td style='word-break:break-all;overflow:hidden;'><table border='0' cellspacing='0' cellpadding='2' width='98%'><tr><td class='board_output_gallery_img'><a href='business/business.php?com_board_basic=read_form&&com_board_idx=7&com_board_id=4'><img alt='' src='/demo01/component/board/board_4/u_image/7/1018773828_mall_02.jpg' border='0' width='382' height='255' class='board_output_imgs' /></a><br></td></tr><tr><td style='word-break:break-all;overflow:hidden;'><span class='board_output_gallery_subject'><a href='/demo01/business/business.php?com_board_basic=read_form&&com_board_idx=7&com_board_id=4'>동원천지인공식..   </a></span><br></td></tr></table></td><td style='word-break:break-all;overflow:hidden;'><table border='0' cellspacing='0' cellpadding='2' width='98%'><tr><td class='board_output_gallery_img'><a href='business/business.php?com_board_basic=read_form&&com_board_idx=6&com_board_id=4'><img alt='' src='/demo01/component/board/board_4/u_image/6/1595477465_mall_03.jpg' border='0' width='382' height='255' class='board_output_imgs' /></a><br></td></tr><tr><td style='word-break:break-all;overflow:hidden;'><span class='board_output_gallery_subject'><a href='/demo01/business/business.php?com_board_basic=read_form&&com_board_idx=6&com_board_id=4'>그란도노공식몰   </a></span><br></td></tr></table></td></tr>
  </td>
 </tr>
 <!--more-->
</table>
<!-- 게시판 끝 -->
</div>
</section>
<!-- 제품소개 영역 [E]-->
<!-- 고객센터 영역 [S]-->
<section id="customer">
<div class="container wow fadeInUp">
<!-- 공지사항 -->
<div class="cs-notice">
<h4>제휴문의</h4>
<p class="more"><a href="<?=$default_path?>/community/inquiry.php">more > </a></p>
<div class="notice_list"><!-- 게시판 시작 -->
<link rel="StyleSheet" href="/demo01/inc/board/board_3.css" type="text/css">


<table border="0" cellspacing="0" cellpadding="0" width="300" bgcolor="#FFFFFF" background="" class='board_output'>
	<tr>
		<td>
			<table border='0' cellspacing='0' cellpadding='0' width='100%' class='board_output'>
				<tr class='board_output_3_tr'><td width='1%'><img alt='' src='/demo01/img/component/board/board_3/output_ol.gif' border='0' align='absmiddle'></td><td width='71%' style='word-break:break-all;overflow:hidden;' class='bd_out1'><a href='javascript:com_board_secret_form(41, "<?=$default_path?>/community/inquiry.php", "com_board_idx=41&com_board_id=3", "3", "demo01")'>제휴문의   </a> <img alt="" src="/demo01/img/component/board/board_3/icon_sct.gif" border="0" align="absmiddle"/></td><td align='center' style='word-break:break-all;overflow:hidden;'>조수아</td></tr><tr class='board_output_3_tr'><td width='1%'><img alt='' src='/demo01/img/component/board/board_3/output_ol.gif' border='0' align='absmiddle'></td><td width='71%' style='word-break:break-all;overflow:hidden;' class='bd_out1'><a href='javascript:com_board_secret_form(40, "<?=$default_path?>/community/inquiry.php", "com_board_idx=40&com_board_id=3", "3", "demo01")'>온라인 벤더문의   </a> <img alt="" src="/demo01/img/component/board/board_3/icon_sct.gif" border="0" align="absmiddle"/></td><td align='center' style='word-break:break-all;overflow:hidden;'>방현식</td></tr><tr class='board_output_3_tr'><td width='1%'><img alt='' src='/demo01/img/component/board/board_3/output_ol.gif' border='0' align='absmiddle'></td><td width='71%' style='word-break:break-all;overflow:hidden;' class='bd_out1'><a href='javascript:com_board_secret_form(39, "<?=$default_path?>/community/inquiry.php", "com_board_idx=39&com_board_id=3", "3", "demo01")'>벤더사 문의   </a> <img alt="" src="/demo01/img/component/board/board_3/icon_sct.gif" border="0" align="absmiddle"/></td><td align='center' style='word-break:break-all;overflow:hidden;'>문인규</td></tr><tr class='board_output_3_tr'><td width='1%'><img alt='' src='/demo01/img/component/board/board_3/output_ol.gif' border='0' align='absmiddle'></td><td width='71%' style='word-break:break-all;overflow:hidden;' class='bd_out1'><a href='javascript:com_board_secret_form(38, "<?=$default_path?>/community/inquiry.php", "com_board_idx=38&com_board_id=3", "3", "demo01")'>밴더 및 대행사 문의   </a> <img alt="" src="/demo01/img/component/board/board_3/icon_sct.gif" border="0" align="absmiddle"/></td><td align='center' style='word-break:break-all;overflow:hidden;'>이정은</td></tr><tr class='board_output_3_tr'><td width='1%'><img alt='' src='/demo01/img/component/board/board_3/output_ol.gif' border='0' align='absmiddle'></td><td width='71%' style='word-break:break-all;overflow:hidden;' class='bd_out1'><a href='javascript:com_board_secret_form(37, "<?=$default_path?>/community/inquiry.php", "com_board_idx=37&com_board_id=3", "3", "demo01")'>제휴문의.   </a> <img alt="" src="/demo01/img/component/board/board_3/icon_sct.gif" border="0" align="absmiddle"/></td><td align='center' style='word-break:break-all;overflow:hidden;'>구현상</td></tr>
			</table>
		</td>
	</tr>
	<!--more-->
</table>
<!-- 게시판 끝 --></div>
</div>
<!-- 전화번호 -->
<div class="cs-center">
<h4>고객센터</h4>
<div class="cs-box">
<ul>
<li class="tel_num"><i class="fa fa-phone"></i> <a href="tel:1599-2833">1599-2833</a></li>
<li>상담시간 : 09:00-18:00</li>
<li>점심시간 : 12:00-13:00 (주말, 공휴일 휴무)</li>
<li class="cs-btn"><a href="<?=$default_path?>/customer/consult.php" class="cs-btn">1:1문의하기</a> <a href="<?=$default_path?>/community/inquiry.php" target="_blank" class="cs-btn2">제휴문의</a></li>
</ul>
</div>
</div>
<!-- 바로가기 아이콘 -->
<div class="cs-movie">
<div class="youtube-wrap">
<div><!--<a href="www.grandono.com" target="_blank">--><img src="<?=$default_path?>/img/_designcoco/images/grandono_main.jpg" alt=www.grandono.com/></a></div>
</div>
</div>
</div>
</section>
<!-- 고객센터 영역 [E]-->


</div>
<!-- 메인 컨텐츠 [E]-->
<?php
include_once(__DIR__ . '/default/inc/footer.php');
?><script language="javascript" type="text/javascript" src="/cjs/javascript.lib.js?date=1458686126"></script>

<script language="javascript" src="/cjs/board.js"></script>

            <script type="text/javascript">
            var JsHost = (("https:" == document.location.protocol) ? "https://" : "http://");
            var sTime = new Date().getTime();
            document.write(unescape("%3Cscript id='log_script' src='" + JsHost + "builderlog2-008.cafe24.com/weblog.js?uid=cponavy2&t=" + sTime + "' type='text/javascript'%3E%3C/script%3E"));
            </script>
        