<?php
include_once(dirname(__DIR__) . '/config.php');
include_once(dirname(__DIR__) . '/inc/header.php');
?>
<!-- 상단 이미지 [S]-->
<div class="sub-top-05">
  <div class="slogan-box">
    <h2 class="wow fadeInLeft">CUSTOMER</h3>
    <p class="wow fadeInRight">당신과 함께하는 좋은 파트너가 되고 싶습니다. 최고의 전문성과 신뢰를 바탕으로 함께 성장해 나가겠습니다.</p>
  </div>    
</div>
<!-- 상단 이미지 [E]-->
<div class="sub-page">
   <!-- 왼쪽메뉴 [S]-->
   <!-- 상단 탭메뉴 [S] -->
<div class="submenu">
<div class="container">
  <ul>
     <li><a href="<?=$default_path?>/customer/consult.php">1:1 고객상담</a></li>
     <li><a href="<?=$default_path?>/community/inquiry.php">제휴문의</a></li>
     <li><a href="<?=$default_path?>/community/notice.php">공지사항</a></li>
  </ul>
</div>
</div>
<!-- 상단 탭메뉴 [E] -->
   <!-- 왼쪽메뉴 [E]-->
   <!-- 서브 컨텐츠 [S]-->
   <div class="sub-content">
      <div class="title-box container">
        <h3>공지사항</h3>
        <p class="navi"><i class="fa fa-home"></i> <span class="arrow-pd"><i class="fa fa-angle-right"></i></span> CUSTOMER <span class="arrow-pd"><i class="fa fa-angle-right"></i></span> 공지사항</p>
      </div>
      <!-- 내용 [S]-->
      <div class="container">
         <!-- 게시판 시작 -->
<link rel="StyleSheet" href="/bizdemo92513/inc/board/board_1.css" type="text/css">
<script language="javascript" src="/cjs/board.js?com_board_id=1&template=/bizdemo92513"></script>
<table border="0" cellspacing="0" cellpadding="0" width="100%" bgcolor="#FFFFFF" background="">
<tr>
 <td>
  <!-- 카테고리 -->
  
  <!-- //카테고리 -->
  
  <table cellpadding="0" cellspacing="0" class="table_02">
  <!-- 타이틀 -->
  <tr align="center" height="30" bgcolor="#F7F7F7">
   <!-- # 항목 -->

<!-- // 관리자일 경우 삭제버튼 활성화 -->

	<td class="att_title">
	<!-- // 항목 디자인 방식이 이미지이면서 이미지값이 있을 때 -->
			<font style='color:#000000;font-size:14px;'>번호</font>
		</td>
	<td class="att_title">
	<!-- // 항목 디자인 방식이 이미지이면서 이미지값이 있을 때 -->
			<font style='color:#000000;font-size:14px;'>제목</font>
		</td>
	<td class="att_title">
	<!-- // 항목 디자인 방식이 이미지이면서 이미지값이 있을 때 -->
			<font style='color:#000000;font-size:14px;'>작성일자</font>
		</td>

  </tr>
  <!-- //타이틀 -->
  <!-- 내용 -->
   
	
		


									<tr align='center' height='28' onclick="location.href='<?=$default_path?>/community/notice.php?com_board_basic=read_form&com_board_idx=1&&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=1&&com_board_id=1'; return false;" style='cursor:pointer;' style="cursor:pointer" >
				


				
					
											<td class="bbsno">
                            
									1



                                                    </td>

					
				
					
											<td class='bbsnewf5' align='left'>
												<a href=''><a href='<?=$default_path?>/community/notice.php?com_board_basic=read_form&com_board_idx=1&&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=1&&com_board_id=1'>조이코리아 홈페이지가 오..   </a></a>
						</td>

					
				
					
											<td class="bbsetc_dateof_write">2020-09-12</td>
					
				

				</tr>


			</table>








<table border='0' cellpadding='0' cellspacing='0' width='100%'>
  <!-- //내용 -->
  </table>  
  <!-- 페이징 -->
  <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
  <col width="62"><col><col width="62">
  <tr>
   <td></td>
   <td class="paging" style="padding-top:20px;">
    
   </td>
   <td style="text-align:right;padding:20px 0;">
    <!-- 글쓰기 -->
    
    <!-- //글쓰기 -->
   </td>
  </tr>
  </table>
  <!-- //페이징 -->
  <!-- 검색 -->
  <div id="ext_search" style="text-align:left">
	<table id="search_table" border="0" cellspacing="0" cellpadding="2">
	<form name='com_board_search' method='post' action='<?=$default_path?>/community/notice.php?com_board_category_code=&&' onsubmit="return FormCheck.init('com_board_search')">
	  <tr>
		<td class="est_cate_cell">
			<select title="select" name='com_board_search_code' class="cateform" align='absmiddle' onchange='sel_search();'>
				<option value='subject' >제목</option><option value='description' >내용</option><option value='writer' >작성자</option>
			</select>
		</td>
		<td class="est_keyword_cell">
			<div id='search_display1' style='display:block;'>
				<input title="input" alt="" type='text' class="keywordform" align='absmiddle' name='com_board_search_value' chk="y" msg="검색어" kind="" />
			</div>
			<div id='search_display2' style='display:none;'>
				<input title="input" alt="" type='text' class="dateform" align='absmiddle' name='com_board_search_value1' value='2021-07-12' />&nbsp;~&nbsp;
				<input title="input" alt="" type='text' class="dateform" align='absmiddle' name='com_board_search_value2' value='2021-07-12' />
			</div>
		</td>
		<td class="est_btn_cell">
			<input title="input" alt="" type='image' src='/bizdemo92513/img/component/board/board_1/search.gif' border='0' align='absmiddle'>
		</td>
	  </tr>
	</form>
	</table>
</div>
<!-- 검색 자바스크립트 구문 시작 -->

<!-- 검색 자바스크립트 구문 끝 -->
  <!-- //검색 -->
 </td>
</tr>
</table>
<!-- 게시판 끝 -->
      </div>
      <!-- 내용 [E]-->
   </div>
</div>
<!-- 서브 컨텐츠 [E]-->
<?php
include_once(dirname(__DIR__) . '/inc/footer.php');
?><script language="javascript" type="text/javascript" src="/cjs/javascript.lib.js?date=1458686126"></script>

<script language="javascript" src="/cjs/board.js"></script>

            <script type="text/javascript">
            var JsHost = (("https:" == document.location.protocol) ? "https://" : "http://");
            var sTime = new Date().getTime();
            document.write(unescape("%3Cscript id='log_script' src='" + JsHost + "builderlog2-008.cafe24.com/weblog.js?uid=cponavy2&t=" + sTime + "' type='text/javascript'%3E%3C/script%3E"));
            </script>
        