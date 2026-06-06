<?php
include_once(dirname(__DIR__) . '/config.php');
include_once(dirname(__DIR__) . '/inc/header.php');
?>
<!-- 상단 이미지 [S]-->
<div class="sub-top-04">
  <div class="slogan-box">
    <h2 class="wow fadeInLeft">1:1 고객상담</h3>
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
        <h3>1:1 고객상담</h3>
        <p class="navi"><i class="fa fa-home"></i> <span class="arrow-pd"><i class="fa fa-angle-right"></i></span> 고객센터 <span class="arrow-pd"><i class="fa fa-angle-right"></i></span> 1:1 고객상담</p>
      </div>
      <!-- 내용 [S]-->
      <div class="container">
         <!-- 폼메일 시작 --------------------------------------------------------->
<link rel="StyleSheet" href="/bizdemo92513/inc/formmail/formmail_1.css" type="text/css">
<script language="javascript" src="/cjs/formmail.js?com_formmail_id=1&template=/bizdemo92513"></script>
<table border='0' cellspacing='0' cellpadding='0' width='100%' bgcolor='#FFFFFF'>
<form name='com_formmail' method='post' action='<?=$default_path?>/customer/consult.php?ip=115.139.186.6' enctype='multipart/form-data'>
<input title="input" type='hidden' name='com_formmail1_basic' value='send'>
<input title="input" type='hidden' name='template' value='/bizdemo92513'>
 <tr>
  <td>
 <table cellpadding='0' cellspacing='0' class="form-table">
 <col width="130"><col>
 		<tr height='30'>
		<td width='20%' align='center' class='formmail_title_bgcolor'>
					<font style='color:#000000;font-size:18;'>제목</font>
				</td>
		<td width='80%' style='padding-left:10' class='formmail_cell_bgcolor'>

									<input type='text' class='formmail_border' name='title' maxlength='100' size='76' value=''>
						&nbsp;&nbsp;
		
		
		
		
		
		
		
		
		
		
		
		
		    </td>
</tr>
		<tr height='30'>
		<td width='20%' align='center' class='formmail_title_bgcolor'>
					<font style='color:#000000;font-size:18;'>이름</font>
				</td>
		<td width='80%' style='padding-left:10' class='formmail_cell_bgcolor'>

									<input type='text' class='formmail_border' name='name' maxlength='100' size='50' value="">
						&nbsp;&nbsp;
		
		
		
		
		
		
		
		
		
		
		
		
		    </td>
</tr>
		<tr height='30'>
		<td width='20%' align='center' class='formmail_title_bgcolor'>
					<font style='color:#000000;font-size:18;'>휴대전화</font>
				</td>
		<td width='80%' style='padding-left:10' class='formmail_cell_bgcolor'>

		
		
		
		
		
		
		
		
		
		
		
					
                                        			<input type='text' class='formmail_border' name='mobile_no1' size='4' maxlength='4' value=""> - <input type='text' class='formmail_border' name='mobile_no2' size='4' maxlength='4' value=""> - <input type='text' class='formmail_border' name='mobile_no3' size='4' maxlength='4' value="">
			&nbsp;&nbsp;
		
		    </td>
</tr>
		<tr height='30'>
		<td width='20%' align='center' class='formmail_title_bgcolor'>
					<font style='color:#000000;font-size:18;'>이메일 </font>
				</td>
		<td width='80%' style='padding-left:10' class='formmail_cell_bgcolor'>

		
		
		            													            			<input type='text' class='formmail_border' name='receiver_email' size='76' value="">
			<br>
		
		
		
		
		
		
		
		
		
		
		    </td>
</tr>
		<tr height='30'>
		<td width='20%' align='center' class='formmail_title_bgcolor'>
					<font style='color:#000000;font-size:18;'>내용</font>
				</td>
		<td width='80%' style='padding-left:10' class='formmail_cell_bgcolor'>

		
									<textarea class='formmail_textarea_style' cols='73' name='description' style='height:300px;'></textarea>
						<br>
		
		
		
		
		
		
		
		
		
		
		
		    </td>
</tr>
		<tr height='30'>
		<td width='20%' align='center' class='formmail_title_bgcolor'>
					<font style='color:#000000;font-size:14;'>파일첨부</font>
				</td>
		<td width='80%' style='padding-left:10' class='formmail_cell_bgcolor'>

		
		
		
		
		
		
		
					<input type='hidden' class='formmail_border' name='attachment_max' value='2'>
							<input type='file' class='formmail_border' name='attachment[]' size='61'><br>
						
		
		
		
		
		
		    </td>
</tr>

<tr>
    <td class='formmail_cell_bgcolor' colspan="2" style="padding : 10px">
        <table cellspacing='0' cellpadding='0' width="100%">
        <tr>
            <td align="left" style="border:0px">· 개인정보의 수집 및 이용목적</td>
            <td align="right" style="border:0px"><input type='checkbox' name='com_formmail_check_safe'> 개인정보의 수집 및 이용목적에 동의합니다.</td>
        </tr>
        <tr>
            <td colspan="2" style="border:0px"><textarea readonly style="font-size:12px; width:100%; padding:5px" rows="9">▶ 개인정보의 수집 및 이용목적
- 서비스 이용에 따른 본인식별, 실명확인, 가입의사 확인, 연령제한 서비스 이용
- 고지사항 전달, 불만처리 의사소통 경로 확보, 물품배송 시 정확한 배송지 정보 확보
- 신규 서비스 등 최신정보 안내 및 개인맞춤서비스 제공을 위한 자료
- 기타 원활한 양질의 서비스 제공 등

▶ 수집하는 개인정보의 항목
- 이름, 이메일, 주민등록번호, 주소, 연락처, 핸드폰번호, 그 외 선택항목

▶ 개인정보의 보유 및 이용기간
- 원칙적으로 개인정보의 수집 또는 제공받은 목적 달성 시 지체 없이 파기합니다.
- 다만, 원활한 서비스의 상담을 위해 상담 완료 후 내용을 3개월간 보유할 수 있으며
   전자상거래에서의 소비자보호에 관한 법률 등 타법률에 의해 보존할 필요가 있는 경우에는 일정기간 보존합니다.
</textarea></td>
        </tr>
        </table>
        <!--[if IE]>
        <style>
        .formmail_agreement { float:left; }
        </style>
        <![endif]-->
        <!--
        <div class="formmail_agreement" style="clear:both;">
        <p style="float:left;padding-top:3px">· 개인정보의 수집 및 이용목적</p>
        <p style="float:right"><input type='checkbox' name='com_formmail_check_safe'> 개인정보의 수집 및 이용목적에 동의합니다.</p>
        </div>
        <textarea readonly style="font-size:12px; width:100%; padding:5px" rows="9">▶ 개인정보의 수집 및 이용목적
- 서비스 이용에 따른 본인식별, 실명확인, 가입의사 확인, 연령제한 서비스 이용
- 고지사항 전달, 불만처리 의사소통 경로 확보, 물품배송 시 정확한 배송지 정보 확보
- 신규 서비스 등 최신정보 안내 및 개인맞춤서비스 제공을 위한 자료
- 기타 원활한 양질의 서비스 제공 등

▶ 수집하는 개인정보의 항목
- 이름, 이메일, 주민등록번호, 주소, 연락처, 핸드폰번호, 그 외 선택항목

▶ 개인정보의 보유 및 이용기간
- 원칙적으로 개인정보의 수집 또는 제공받은 목적 달성 시 지체 없이 파기합니다.
- 다만, 원활한 서비스의 상담을 위해 상담 완료 후 내용을 3개월간 보유할 수 있으며
   전자상거래에서의 소비자보호에 관한 법률 등 타법률에 의해 보존할 필요가 있는 경우에는 일정기간 보존합니다.
</textarea>
        -->
    </td>
</tr>


 </table>
   <div style="padding-top:20px; text-align:center;">
  <a href="#" onclick="com_formmail_formCheck(); return false;"><img alt="" src='/bizdemo92513/img/_designcoco/images/btn_confirm.gif'></a>
  <a href='javascript: document.com_formmail.reset();'><img alt="" src='/bizdemo92513/img/_designcoco/images/btn_cancel.gif'></a>
   </div>
  </td>
 </tr>
</form>
</table>
<!-- //폼메일 끝---------------------------------------------------------------------------------------->
      </div>
      <!-- 내용 [E]-->
   </div>
</div>
<!-- 서브 컨텐츠 [E]-->
<?php
include_once(dirname(__DIR__) . '/inc/footer.php');
?><script language="javascript" type="text/javascript" src="/cjs/javascript.lib.js?date=1458686126"></script>

            <script type="text/javascript">
            var JsHost = (("https:" == document.location.protocol) ? "https://" : "http://");
            var sTime = new Date().getTime();
            document.write(unescape("%3Cscript id='log_script' src='" + JsHost + "builderlog2-008.cafe24.com/weblog.js?uid=cponavy2&t=" + sTime + "' type='text/javascript'%3E%3C/script%3E"));
            </script>
        