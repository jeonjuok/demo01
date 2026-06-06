<?php
include_once(dirname(__DIR__) . '/config.php');
include_once(dirname(__DIR__) . '/inc/header.php');
?>
<!-- 상단 이미지/슬로건 [S]-->
<div class="relative isolate overflow-hidden bg-white dark:bg-slate-950 py-16 sm:py-24 border-b border-slate-200 dark:border-slate-900 transition-colors duration-250">
  <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.slate.100),theme(colors.slate.50))] dark:bg-[radial-gradient(45rem_50rem_at_top,theme(colors.slate.900),theme(colors.slate.950))] opacity-60"></div>
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-5xl font-display">공지사항</h2>
      <p class="mt-4 text-base leading-7 text-slate-500 dark:text-slate-400">당신과 함께하는 좋은 파트너가 되고 싶습니다. 최고의 전문성과 신뢰를 바탕으로 함께 성장해 나가겠습니다.</p>
    </div>
  </div>
</div>
<!-- 상단 이미지/슬로건 [E]-->

<div class="flex-grow flex flex-col bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-slate-100 transition-colors duration-250">
  <!-- 상단 탭메뉴 [S] -->
  <div class="border-b border-slate-200 dark:border-slate-900 bg-white/85 dark:bg-slate-955/80 sticky top-20 z-40 backdrop-blur-md transition-colors duration-250">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <nav class="-mb-px flex space-x-8" aria-label="Tabs">
        <a href="<?=$default_path?>/customer/consult.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-300 hover:text-slate-800 dark:hover:text-slate-300 border-b-2 py-4 px-1 text-sm font-semibold">1:1 고객상담</a>
        <a href="<?=$default_path?>/community/inquiry.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-300 hover:text-slate-800 dark:hover:text-slate-300 border-b-2 py-4 px-1 text-sm font-semibold">제휴문의</a>
        <a href="<?=$default_path?>/community/notice.php" class="border-brand-500 text-brand-600 dark:text-brand-400 border-b-2 py-4 px-1 text-sm font-semibold" aria-current="page">공지사항</a>
      </nav>
    </div>
  </div>
  <!-- 상단 탭메뉴 [E] -->

  <!-- 서브 컨텐츠 [S]-->
  <div class="mx-auto max-w-7xl px-6 lg:px-8 py-12 flex-grow w-full">
    <!-- Breadcrumb & Title -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between border-b border-slate-200 dark:border-slate-900 pb-5 mb-8 gap-4">
      <div>
        <h3 class="text-xl font-bold text-slate-900 dark:text-white font-display">공지사항 목록</h3>
      </div>
      <div class="flex items-center gap-x-2 text-xs text-slate-400">
        <a href="<?=$default_path?>/index.php" class="hover:text-slate-900 dark:hover:text-white transition"><i class="fa fa-home"></i></a>
        <span class="text-slate-300 dark:text-slate-700"><i class="fa fa-angle-right"></i></span>
        <span>고객센터</span>
        <span class="text-slate-300 dark:text-slate-700"><i class="fa fa-angle-right"></i></span>
        <span class="text-brand-650 dark:text-brand-400 font-semibold">공지사항</span>
      </div>
    </div>

    <!-- 내용 [S]-->
    <div class="space-y-8">
      <!-- 게시판 시작 -->
      <script language="javascript" src="/cjs/board.js?com_board_id=1&template=<?=$demo_path?>"></script>
      
      <!-- Modern Responsive Table -->
      <div class="overflow-hidden border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/40 rounded-xl shadow-2xl backdrop-blur-sm transition-colors duration-250">
        <table class="min-w-full divide-y divide-slate-200 dark:divide-slate-800">
          <thead class="bg-slate-50 dark:bg-slate-900/80">
            <tr>
              <th scope="col" class="py-4 px-4 text-center text-xs font-semibold text-slate-600 dark:text-slate-350 tracking-wider w-16">번호</th>
              <th scope="col" class="py-4 px-6 text-left text-xs font-semibold text-slate-600 dark:text-slate-350 tracking-wider">제목</th>
              <th scope="col" class="py-4 px-6 text-center text-xs font-semibold text-slate-600 dark:text-slate-350 tracking-wider w-36">작성일자</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-200 dark:divide-slate-850 text-sm text-slate-700 dark:text-slate-300">
            <!-- Row 1 -->
            <tr class="hover:bg-slate-100 dark:hover:bg-slate-800/30 transition cursor-pointer" 
                onclick="location.href='<?=$default_path?>/community/notice.php?com_board_basic=read_form&com_board_idx=1&&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=1&&com_board_id=1'; return false;">
              <td class="py-4 px-4 text-center text-slate-400 dark:text-slate-500 font-mono">1</td>
              <td class="py-4 px-6 text-left">
                <span class="hover:text-brand-650 dark:hover:text-brand-400 transition font-medium text-slate-800 dark:text-slate-200">조이코리아 홈페이지가 오픈되었습니다.</span>
              </td>
              <td class="py-4 px-6 text-center text-slate-500 dark:text-slate-400 font-mono">2020-09-12</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Paging -->
      <div class="flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-slate-200 dark:border-slate-900 pt-6">
        <div></div> <!-- Spacer -->
        <div class="text-xs text-slate-500 dark:text-slate-400 font-mono">Showing 1 to 1 of 1 entries</div>
        <div></div> <!-- Spacer -->
      </div>

      <!-- Search Form -->
      <div id="ext_search" class="flex justify-center border-t border-slate-200 dark:border-slate-900 pt-8">
        <form name='com_board_search' method='post' action='<?=$default_path?>/community/notice.php?com_board_category_code=&&' onsubmit="return FormCheck.init('com_board_search')"
              class="flex flex-col sm:flex-row items-center gap-3 bg-white dark:bg-slate-900/40 p-4 border border-slate-200 dark:border-slate-800 rounded-xl shadow-sm">
          
          <div class="est_cate_cell w-full sm:w-auto">
            <select title="select" name='com_board_search_code' onchange='sel_search();'
                    class="block w-full sm:w-32 rounded-lg border-0 bg-slate-50 dark:bg-slate-950/60 py-2.5 px-3 text-sm text-slate-800 dark:text-white ring-1 ring-inset ring-slate-250 dark:ring-slate-800 focus:ring-2 focus:ring-brand-500 focus:outline-none transition">
              <option value='subject'>제목</option>
              <option value='description'>내용</option>
              <option value='writer'>작성자</option>
            </select>
          </div>

          <div class="est_keyword_cell w-full sm:w-64">
            <div id='search_display1' style='display:block;'>
              <input title="input" alt="" type='text' name='com_board_search_value' chk="y" msg="검색어" kind="" placeholder="검색어를 입력하세요..."
                     class="block w-full rounded-lg border-0 bg-slate-50 dark:bg-slate-950/60 py-2.5 px-4 text-sm text-slate-800 dark:text-white ring-1 ring-inset ring-slate-250 dark:ring-slate-800 placeholder:text-slate-400 dark:placeholder:text-slate-600 focus:ring-2 focus:ring-brand-500 focus:outline-none transition" />
            </div>
            <div id='search_display2' style='display:none;' class="flex items-center gap-2">
              <input title="input" alt="" type='text' name='com_board_search_value1' value='2021-07-12' 
                     class="block w-full rounded-lg border-0 bg-slate-50 dark:bg-slate-950/60 py-2.5 px-2 text-xs text-slate-800 dark:text-white ring-1 ring-inset ring-slate-250 dark:ring-slate-800 focus:ring-2 focus:ring-brand-500 focus:outline-none transition" />
              <span class="text-slate-400 dark:text-slate-600">~</span>
              <input title="input" alt="" type='text' name='com_board_search_value2' value='2021-07-12'
                     class="block w-full rounded-lg border-0 bg-slate-50 dark:bg-slate-950/60 py-2.5 px-2 text-xs text-slate-800 dark:text-white ring-1 ring-inset ring-slate-250 dark:ring-slate-800 focus:ring-2 focus:ring-brand-500 focus:outline-none transition" />
            </div>
          </div>

          <div class="est_btn_cell w-full sm:w-auto">
            <button type="submit" class="w-full sm:w-auto rounded-lg bg-brand-600 hover:bg-brand-500 px-5 py-2.5 text-sm font-semibold text-white transition flex items-center justify-center gap-x-2 cursor-pointer shadow-lg shadow-brand-500/10">
              <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.602 10.602z" />
              </svg>
              검색
            </button>
          </div>
        </form>
      </div>
      <!-- //검색 -->
    </div>
    <!-- 내용 [E]-->
  </div>
  <!-- 서브 컨텐츠 [E]-->
</div>

<?php
include_once(dirname(__DIR__) . '/inc/footer.php');
?>
<script language="javascript" type="text/javascript" src="/cjs/javascript.lib.js?date=1458686126"></script>
<script language="javascript" src="/cjs/board.js"></script>
<script type="text/javascript">
var JsHost = (("https:" == document.location.protocol) ? "https://" : "http://");
var sTime = new Date().getTime();
document.write(unescape("%3Cscript id='log_script' src='" + JsHost + "builderlog2-008.cafe24.com/weblog.js?uid=cponavy2&t=" + sTime + "' type='text/javascript'%3E%3C/script%3E"));
</script>