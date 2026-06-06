<?php
include_once(dirname(__DIR__) . '/config.php');
include_once(dirname(__DIR__) . '/inc/header.php');
?>
<!-- 상단 이미지/슬로건 [S]-->
<div class="relative isolate overflow-hidden bg-white dark:bg-slate-950 py-16 sm:py-24 border-b border-slate-200 dark:border-slate-900 transition-colors duration-250">
  <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.slate.100),theme(colors.slate.50))] dark:bg-[radial-gradient(45rem_50rem_at_top,theme(colors.slate.900),theme(colors.slate.950))] opacity-60"></div>
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-5xl font-display">1:1 고객상담</h2>
      <p class="mt-4 text-base leading-7 text-slate-500 dark:text-slate-400">당신과 함께하는 좋은 파트너가 되고 싶습니다. 최고의 전문성과 신뢰를 바탕으로 함께 성장해 나가겠습니다.</p>
    </div>
  </div>
</div>
<!-- 상단 이미지/슬로건 [E]-->

<div class="flex-grow flex flex-col bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-slate-100 transition-colors duration-250">
  <!-- 상단 탭메뉴 [S] -->
  <div class="border-b border-slate-200 dark:border-slate-900 bg-white/85 dark:bg-slate-950/80 sticky top-20 z-40 backdrop-blur-md transition-colors duration-250">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <nav class="-mb-px flex space-x-8" aria-label="Tabs">
        <a href="<?=$default_path?>/customer/consult.php" class="border-brand-500 text-brand-600 dark:text-brand-400 border-b-2 py-4 px-1 text-sm font-semibold" aria-current="page">1:1 고객상담</a>
        <a href="<?=$default_path?>/community/inquiry.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-300 hover:text-slate-800 dark:hover:text-slate-300 border-b-2 py-4 px-1 text-sm font-semibold">제휴문의</a>
        <a href="<?=$default_path?>/community/notice.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-300 hover:text-slate-800 dark:hover:text-slate-300 border-b-2 py-4 px-1 text-sm font-semibold">공지사항</a>
      </nav>
    </div>
  </div>
  <!-- 상단 탭메뉴 [E] -->

  <!-- 서브 컨텐츠 [S]-->
  <div class="mx-auto max-w-7xl px-6 lg:px-8 py-12 flex-grow w-full">
    <!-- Breadcrumb & Title -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between border-b border-slate-200 dark:border-slate-900 pb-5 mb-10 gap-4">
      <div>
        <h3 class="text-xl font-bold text-slate-900 dark:text-white font-display">1:1 고객상담</h3>
      </div>
      <div class="flex items-center gap-x-2 text-xs text-slate-400">
        <a href="<?=$default_path?>/index.php" class="hover:text-slate-900 dark:hover:text-white transition"><i class="fa fa-home"></i></a>
        <span class="text-slate-300 dark:text-slate-700"><i class="fa fa-angle-right"></i></span>
        <span>고객센터</span>
        <span class="text-slate-300 dark:text-slate-700"><i class="fa fa-angle-right"></i></span>
        <span class="text-brand-650 dark:text-brand-400 font-semibold">1:1 고객상담</span>
      </div>
    </div>

    <!-- 내용 [S]-->
    <div class="mx-auto max-w-3xl">
      <!-- 폼메일 시작 --------------------------------------------------------->
      <script language="javascript" src="/cjs/formmail.js?com_formmail_id=1&template=<?=$demo_path?>"></script>
      
      <div class="bg-white dark:bg-slate-900/60 border border-slate-200 dark:border-slate-800 shadow-2xl rounded-2xl p-6 sm:p-10 backdrop-blur-sm transition-colors duration-250">
        <form name='com_formmail' method='post' action='<?=$default_path?>/customer/consult.php?ip=115.139.186.6' enctype='multipart/form-data' class="space-y-6">
          <input title="input" type='hidden' name='com_formmail1_basic' value='send'>
          <input title="input" type='hidden' name='template' value='<?=$demo_path?>'>
          <input type='hidden' name='attachment_max' value='2'>

          <!-- 제목 -->
          <div>
            <label for="title" class="block text-sm font-semibold leading-6 text-slate-700 dark:text-slate-300">제목</label>
            <div class="mt-2">
              <input type='text' id="title" name='title' maxlength='100' placeholder="상담 제목을 입력하세요."
                     class="block w-full rounded-lg border-0 bg-slate-50 dark:bg-slate-950/60 py-3 px-4 text-slate-900 dark:text-white shadow-inner ring-1 ring-inset ring-slate-250 dark:ring-slate-800 placeholder:text-slate-400 dark:placeholder:text-slate-600 focus:ring-2 focus:ring-inset focus:ring-brand-500 focus:outline-none sm:text-sm sm:leading-6 transition">
            </div>
          </div>

          <!-- 이름 -->
          <div>
            <label for="name" class="block text-sm font-semibold leading-6 text-slate-700 dark:text-slate-300">이름</label>
            <div class="mt-2">
              <input type='text' id="name" name='name' maxlength='100' placeholder="성함을 입력하세요."
                     class="block w-full rounded-lg border-0 bg-slate-50 dark:bg-slate-950/60 py-3 px-4 text-slate-900 dark:text-white shadow-inner ring-1 ring-inset ring-slate-250 dark:ring-slate-800 placeholder:text-slate-400 dark:placeholder:text-slate-600 focus:ring-2 focus:ring-inset focus:ring-brand-500 focus:outline-none sm:text-sm sm:leading-6 transition">
            </div>
          </div>

          <!-- 휴대전화 -->
          <div>
            <label class="block text-sm font-semibold leading-6 text-slate-700 dark:text-slate-300">휴대전화</label>
            <div class="mt-2 flex items-center gap-2">
              <input title="mobile_no1" type='text' name='mobile_no1' maxlength='4' placeholder="010"
                     class="block w-24 text-center rounded-lg border-0 bg-slate-50 dark:bg-slate-950/60 py-3 px-2 text-slate-900 dark:text-white shadow-inner ring-1 ring-inset ring-slate-250 dark:ring-slate-800 placeholder:text-slate-400 dark:placeholder:text-slate-600 focus:ring-2 focus:ring-inset focus:ring-brand-500 focus:outline-none sm:text-sm sm:leading-6 transition">
              <span class="text-slate-400 dark:text-slate-600">-</span>
              <input title="mobile_no2" type='text' name='mobile_no2' maxlength='4'
                     class="block w-24 text-center rounded-lg border-0 bg-slate-50 dark:bg-slate-950/60 py-3 px-2 text-slate-900 dark:text-white shadow-inner ring-1 ring-inset ring-slate-250 dark:ring-slate-800 placeholder:text-slate-400 dark:placeholder:text-slate-600 focus:ring-2 focus:ring-inset focus:ring-brand-500 focus:outline-none sm:text-sm sm:leading-6 transition">
              <span class="text-slate-400 dark:text-slate-600">-</span>
              <input title="mobile_no3" type='text' name='mobile_no3' maxlength='4'
                     class="block w-24 text-center rounded-lg border-0 bg-slate-50 dark:bg-slate-950/60 py-3 px-2 text-slate-900 dark:text-white shadow-inner ring-1 ring-inset ring-slate-250 dark:ring-slate-800 placeholder:text-slate-400 dark:placeholder:text-slate-600 focus:ring-2 focus:ring-inset focus:ring-brand-500 focus:outline-none sm:text-sm sm:leading-6 transition">
            </div>
          </div>

          <!-- 이메일 -->
          <div>
            <label for="receiver_email" class="block text-sm font-semibold leading-6 text-slate-700 dark:text-slate-300">이메일</label>
            <div class="mt-2">
              <input type='text' id="receiver_email" name='receiver_email' placeholder="example@email.com"
                     class="block w-full rounded-lg border-0 bg-slate-50 dark:bg-slate-950/60 py-3 px-4 text-slate-900 dark:text-white shadow-inner ring-1 ring-inset ring-slate-250 dark:ring-slate-800 placeholder:text-slate-400 dark:placeholder:text-slate-600 focus:ring-2 focus:ring-inset focus:ring-brand-500 focus:outline-none sm:text-sm sm:leading-6 transition">
            </div>
          </div>

          <!-- 내용 -->
          <div>
            <label for="description" class="block text-sm font-semibold leading-6 text-slate-700 dark:text-slate-300">내용</label>
            <div class="mt-2">
              <textarea id="description" name='description' rows="8" placeholder="문의 내용을 상세히 입력해 주세요."
                        class="block w-full rounded-lg border-0 bg-slate-50 dark:bg-slate-950/60 py-3 px-4 text-slate-900 dark:text-white shadow-inner ring-1 ring-inset ring-slate-250 dark:ring-slate-800 placeholder:text-slate-400 dark:placeholder:text-slate-600 focus:ring-2 focus:ring-inset focus:ring-brand-500 focus:outline-none sm:text-sm sm:leading-6 transition"></textarea>
            </div>
          </div>

          <!-- 파일첨부 -->
          <div>
            <label class="block text-sm font-semibold leading-6 text-slate-700 dark:text-slate-300">파일첨부</label>
            <div class="mt-2">
              <div class="flex items-center justify-center rounded-lg border border-dashed border-slate-300 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-950/20 px-6 py-6 transition hover:border-slate-400 dark:hover:border-slate-700">
                <div class="text-center w-full">
                  <div class="mt-2 flex justify-center text-sm leading-6 text-slate-500 dark:text-slate-400">
                    <label class="relative cursor-pointer rounded-md bg-transparent font-semibold text-brand-600 dark:text-brand-400 focus-within:outline-none focus-within:ring-2 focus-within:ring-brand-500 focus-within:ring-offset-2 focus-within:ring-offset-slate-100 dark:focus-within:ring-offset-slate-900 hover:text-brand-500 dark:hover:text-brand-350">
                      <span>파일 선택</span>
                      <input type='file' name='attachment[]' class="sr-only" id="attachment-input" onchange="updateFileNameDisplay()">
                    </label>
                    <p class="pl-1">또는 파일 드래그 앤 드롭</p>
                  </div>
                  <p id="file-name-display" class="text-xs leading-5 text-slate-450 dark:text-slate-500 mt-2">첨부할 파일을 선택해 주세요 (최대 2개)</p>
                </div>
              </div>
            </div>
          </div>
          <script>
            function updateFileNameDisplay() {
              const input = document.getElementById('attachment-input');
              const display = document.getElementById('file-name-display');
              if (input.files.length > 0) {
                display.innerText = "선택된 파일: " + Array.from(input.files).map(f => f.name).join(', ');
                display.classList.remove('text-slate-450', 'dark:text-slate-500');
                display.classList.add('text-brand-605', 'dark:text-brand-400', 'font-medium');
              } else {
                display.innerText = "첨부할 파일을 선택해 주세요 (최대 2개)";
                display.classList.remove('text-brand-605', 'dark:text-brand-400', 'font-medium');
                display.classList.add('text-slate-450', 'dark:text-slate-500');
              }
            }
          </script>

          <!-- 개인정보 처리방침 동의 -->
          <div class="border-t border-slate-200 dark:border-slate-800/80 pt-6">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4 gap-2">
              <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">개인정보의 수집 및 이용목적</span>
              <label class="flex items-center gap-x-2 text-sm text-slate-650 dark:text-slate-355 cursor-pointer select-none">
                <input type='checkbox' name='com_formmail_check_safe'
                       class="h-4 w-4 rounded border-slate-300 dark:border-slate-800 bg-slate-50 dark:bg-slate-950 text-brand-600 focus:ring-brand-500 focus:ring-offset-white dark:focus:ring-offset-slate-900 transition">
                개인정보의 수집 및 이용목적에 동의합니다.
              </label>
            </div>
            <div class="rounded-lg bg-slate-50 dark:bg-slate-950/60 p-4 ring-1 ring-inset ring-slate-200 dark:ring-slate-850">
              <div class="h-32 overflow-y-auto text-xs text-slate-500 dark:text-slate-400 space-y-2 pr-2 custom-scrollbar leading-relaxed">
                <p class="font-bold text-slate-800 dark:text-slate-350">▶ 개인정보의 수집 및 이용목적</p>
                <p>- 서비스 이용에 따른 본인식별, 실명확인, 가입의사 확인, 연령제한 서비스 이용</p>
                <p>- 고지사항 전달, 불만처리 의사소통 경로 확보, 물품배송 시 정확한 배송지 정보 확보</p>
                <p>- 신규 서비스 등 최신정보 안내 및 개인맞춤서비스 제공을 위한 자료</p>
                <p>- 기타 원활한 양질의 서비스 제공 등</p>
                <p class="font-bold text-slate-800 dark:text-slate-355 mt-4">▶ 수집하는 개인정보의 항목</p>
                <p>- 이름, 이메일, 주민등록번호, 주소, 연락처, 핸드폰번호, 그 외 선택항목</p>
                <p class="font-bold text-slate-800 dark:text-slate-355 mt-4">▶ 개인정보의 보유 및 이용기간</p>
                <p>- 원칙적으로 개인정보의 수집 또는 제공받은 목적 달성 시 지체 없이 파기합니다.</p>
                <p>- 다만, 원활한 서비스의 상담을 위해 상담 완료 후 내용을 3개월간 보유할 수 있으며 전자상거래에서의 소비자보호에 관한 법률 등 타법률에 의해 보존할 필요가 있는 경우에는 일정기간 보존합니다.</p>
              </div>
            </div>
          </div>

          <!-- 전송/취소 버튼 -->
          <div class="flex items-center justify-center gap-x-4 pt-6">
            <button type="button" onclick="com_formmail_formCheck(); return false;"
                    class="rounded-lg bg-gradient-to-r from-brand-600 to-indigo-600 px-8 py-3.5 text-sm font-semibold text-white shadow-lg shadow-brand-500/25 hover:from-brand-500 hover:to-indigo-500 focus:ring-2 focus:ring-brand-500/20 focus:outline-none transform hover:-translate-y-0.5 transition duration-200 cursor-pointer">
              작성완료
            </button>
            <button type="button" onclick="document.com_formmail.reset();"
                    class="rounded-lg bg-slate-200 hover:bg-slate-300 text-slate-700 hover:text-slate-900 ring-1 ring-inset ring-slate-300 dark:bg-slate-800 dark:hover:bg-slate-700 dark:text-slate-300 dark:hover:text-white dark:ring-slate-700 transition duration-200 cursor-pointer">
              취소
            </button>
          </div>
        </form>
      </div>
      <!-- //폼메일 끝---------------------------------------------------------------------------------------->
    </div>
    <!-- 내용 [E]-->
  </div>
  <!-- 서브 컨텐츠 [E]-->
</div>

<?php
include_once(dirname(__DIR__) . '/inc/footer.php');
?>
<script language="javascript" type="text/javascript" src="/cjs/javascript.lib.js?date=1458686126"></script>
<script type="text/javascript">
var JsHost = (("https:" == document.location.protocol) ? "https://" : "http://");
var sTime = new Date().getTime();
document.write(unescape("%3Cscript id='log_script' src='" + JsHost + "builderlog2-008.cafe24.com/weblog.js?uid=cponavy2&t=" + sTime + "' type='text/javascript'%3E%3C/script%3E"));
</script>