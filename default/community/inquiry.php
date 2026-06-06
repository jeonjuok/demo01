<?php
include_once(dirname(__DIR__) . '/config.php');
include_once(dirname(__DIR__) . '/inc/header.php');
?>
<!-- 상단 이미지/슬로건 [S]-->
<div class="relative isolate overflow-hidden bg-slate-950 py-16 sm:py-24 border-b border-slate-900">
  <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.slate.900),theme(colors.slate.950))] opacity-60"></div>
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-bold tracking-tight text-white sm:text-5xl font-display">제휴문의</h2>
      <p class="mt-4 text-base leading-7 text-slate-400">당신과 함께하는 좋은 파트너가 되고 싶습니다. 최고의 전문성과 신뢰를 바탕으로 함께 성장해 나가겠습니다.</p>
    </div>
  </div>
</div>
<!-- 상단 이미지/슬로건 [E]-->

<div class="flex-grow flex flex-col bg-slate-950 text-slate-100">
  <!-- 상단 탭메뉴 [S] -->
  <div class="border-b border-slate-900 bg-slate-950/80 sticky top-20 z-40 backdrop-blur-md">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <nav class="-mb-px flex space-x-8" aria-label="Tabs">
        <a href="<?=$default_path?>/customer/consult.php" class="border-transparent text-slate-400 hover:border-slate-700 hover:text-slate-300 border-b-2 py-4 px-1 text-sm font-semibold">1:1 고객상담</a>
        <a href="<?=$default_path?>/community/inquiry.php" class="border-brand-500 text-brand-400 border-b-2 py-4 px-1 text-sm font-semibold" aria-current="page">제휴문의</a>
        <a href="<?=$default_path?>/community/notice.php" class="border-transparent text-slate-400 hover:border-slate-700 hover:text-slate-300 border-b-2 py-4 px-1 text-sm font-semibold">공지사항</a>
      </nav>
    </div>
  </div>
  <!-- 상단 탭메뉴 [E] -->

  <!-- 서브 컨텐츠 [S]-->
  <div class="mx-auto max-w-7xl px-6 lg:px-8 py-12 flex-grow w-full">
    <!-- Breadcrumb & Title -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between border-b border-slate-900 pb-5 mb-8 gap-4">
      <div>
        <h3 class="text-xl font-bold text-white font-display">제휴문의 목록</h3>
      </div>
      <div class="flex items-center gap-x-2 text-xs text-slate-400">
        <a href="<?=$default_path?>/index.php" class="hover:text-white transition"><i class="fa fa-home"></i></a>
        <span class="text-slate-700"><i class="fa fa-angle-right"></i></span>
        <span>고객센터</span>
        <span class="text-slate-700"><i class="fa fa-angle-right"></i></span>
        <span class="text-brand-400 font-semibold">제휴문의</span>
      </div>
    </div>

    <!-- 내용 [S]-->
    <div class="space-y-8">
      <!-- 게시판 시작 -->
      <script language="javascript" src="/cjs/board.js?com_board_id=3&template=<?=$demo_path?>"></script>
      
      <!-- Modern Responsive Table -->
      <div class="overflow-hidden border border-slate-800 bg-slate-900/40 rounded-xl shadow-2xl backdrop-blur-sm">
        <table class="min-w-full divide-y divide-slate-800">
          <thead class="bg-slate-900/80">
            <tr>
              <th scope="col" class="py-4 px-4 text-center text-xs font-semibold text-slate-350 tracking-wider w-16">번호</th>
              <th scope="col" class="py-4 px-6 text-left text-xs font-semibold text-slate-350 tracking-wider">제목</th>
              <th scope="col" class="py-4 px-6 text-center text-xs font-semibold text-slate-350 tracking-wider w-28">작성자</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-850 text-sm text-slate-300">
            <!-- Row 37 -->
            <tr class="hover:bg-slate-800/30 transition cursor-pointer" 
                onclick="javascript:com_board_secret_form(41, '<?=$default_path?>/community/inquiry.php', '&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=3&', '3', 'demo01')">
              <td class="py-4 px-4 text-center text-slate-500 font-mono">37</td>
              <td class="py-4 px-6 text-left">
                <div class="flex items-center">
                  <svg class="h-4 w-4 text-brand-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                  </svg>
                  <span class="hover:text-brand-400 transition font-medium">제휴문의</span>
                </div>
              </td>
              <td class="py-4 px-6 text-center text-slate-400">조수아</td>
            </tr>

            <!-- Row 36 -->
            <tr class="hover:bg-slate-800/30 transition cursor-pointer" 
                onclick="javascript:com_board_secret_form(40, '<?=$default_path?>/community/inquiry.php', '&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=3&', '3', 'demo01')">
              <td class="py-4 px-4 text-center text-slate-500 font-mono">36</td>
              <td class="py-4 px-6 text-left">
                <div class="flex items-center">
                  <svg class="h-4 w-4 text-brand-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                  </svg>
                  <span class="hover:text-brand-400 transition font-medium">온라인 벤더문의</span>
                </div>
              </td>
              <td class="py-4 px-6 text-center text-slate-400">방현식</td>
            </tr>

            <!-- Row 35 -->
            <tr class="hover:bg-slate-800/30 transition cursor-pointer" 
                onclick="javascript:com_board_secret_form(39, '<?=$default_path?>/community/inquiry.php', '&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=3&', '3', 'demo01')">
              <td class="py-4 px-4 text-center text-slate-500 font-mono">35</td>
              <td class="py-4 px-6 text-left">
                <div class="flex items-center">
                  <svg class="h-4 w-4 text-brand-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                  </svg>
                  <span class="hover:text-brand-400 transition font-medium">벤더사 문의</span>
                </div>
              </td>
              <td class="py-4 px-6 text-center text-slate-400">문인규</td>
            </tr>

            <!-- Row 34 -->
            <tr class="hover:bg-slate-800/30 transition cursor-pointer" 
                onclick="javascript:com_board_secret_form(38, '<?=$default_path?>/community/inquiry.php', '&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=3&', '3', 'demo01')">
              <td class="py-4 px-4 text-center text-slate-500 font-mono">34</td>
              <td class="py-4 px-6 text-left">
                <div class="flex items-center">
                  <svg class="h-4 w-4 text-brand-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                  </svg>
                  <span class="hover:text-brand-400 transition font-medium">밴더 및 대행사 문의</span>
                </div>
              </td>
              <td class="py-4 px-6 text-center text-slate-400">이정은</td>
            </tr>

            <!-- Row 33 -->
            <tr class="hover:bg-slate-800/30 transition cursor-pointer" 
                onclick="javascript:com_board_secret_form(37, '<?=$default_path?>/community/inquiry.php', '&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=3&', '3', 'demo01')">
              <td class="py-4 px-4 text-center text-slate-500 font-mono">33</td>
              <td class="py-4 px-6 text-left">
                <div class="flex items-center">
                  <svg class="h-4 w-4 text-brand-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                  </svg>
                  <span class="hover:text-brand-400 transition font-medium">제휴문의.</span>
                </div>
              </td>
              <td class="py-4 px-6 text-center text-slate-400">구현상</td>
            </tr>

            <!-- Row 32 -->
            <tr class="hover:bg-slate-800/30 transition cursor-pointer" 
                onclick="javascript:com_board_secret_form(36, '<?=$default_path?>/community/inquiry.php', '&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=3&', '3', 'demo01')">
              <td class="py-4 px-4 text-center text-slate-500 font-mono">32</td>
              <td class="py-4 px-6 text-left">
                <div class="flex items-center">
                  <svg class="h-4 w-4 text-brand-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                  </svg>
                  <span class="hover:text-brand-400 transition font-medium">제휴문의</span>
                </div>
              </td>
              <td class="py-4 px-6 text-center text-slate-400">박성현</td>
            </tr>

            <!-- Row 31 -->
            <tr class="hover:bg-slate-800/30 transition cursor-pointer" 
                onclick="javascript:com_board_secret_form(35, '<?=$default_path?>/community/inquiry.php', '&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=3&', '3', 'demo01')">
              <td class="py-4 px-4 text-center text-slate-500 font-mono">31</td>
              <td class="py-4 px-6 text-left">
                <div class="flex items-center">
                  <svg class="h-4 w-4 text-brand-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                  </svg>
                  <span class="hover:text-brand-400 transition font-medium">[갤럭시아머니트리] 전자결제(PG) 서비스 도입 제안 ..</span>
                </div>
              </td>
              <td class="py-4 px-6 text-center text-slate-400">이형록</td>
            </tr>

            <!-- Row 30 -->
            <tr class="hover:bg-slate-800/30 transition cursor-pointer" 
                onclick="javascript:com_board_secret_form(34, '<?=$default_path?>/community/inquiry.php', '&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=3&', '3', 'demo01')">
              <td class="py-4 px-4 text-center text-slate-500 font-mono">30</td>
              <td class="py-4 px-6 text-left">
                <div class="flex items-center">
                  <svg class="h-4 w-4 text-brand-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                  </svg>
                  <span class="hover:text-brand-400 transition font-medium">제휴문의 드립니다.</span>
                </div>
              </td>
              <td class="py-4 px-6 text-center text-slate-400">이호영</td>
            </tr>

            <!-- Row 29 -->
            <tr class="hover:bg-slate-800/30 transition cursor-pointer" 
                onclick="javascript:com_board_secret_form(33, '<?=$default_path?>/community/inquiry.php', '&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=3&', '3', 'demo01')">
              <td class="py-4 px-4 text-center text-slate-500 font-mono">29</td>
              <td class="py-4 px-6 text-left">
                <div class="flex items-center">
                  <svg class="h-4 w-4 text-brand-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                  </svg>
                  <span class="hover:text-brand-400 transition font-medium">제휴문의 드립니다.</span>
                </div>
              </td>
              <td class="py-4 px-6 text-center text-slate-400">어진이</td>
            </tr>

            <!-- Row 28 -->
            <tr class="hover:bg-slate-800/30 transition cursor-pointer" 
                onclick="javascript:com_board_secret_form(32, '<?=$default_path?>/community/inquiry.php', '&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=3&', '3', 'demo01')">
              <td class="py-4 px-4 text-center text-slate-500 font-mono">28</td>
              <td class="py-4 px-6 text-left">
                <div class="flex items-center">
                  <svg class="h-4 w-4 text-brand-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                  </svg>
                  <span class="hover:text-brand-400 transition font-medium">제휴문의</span>
                </div>
              </td>
              <td class="py-4 px-6 text-center text-slate-400">박욱진</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Paging & Write Button -->
      <div class="flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-slate-900 pt-6">
        <div></div> <!-- Spacer -->
        <!-- Pagination -->
        <nav class="isolate inline-flex -space-x-px rounded-lg shadow-sm" aria-label="Pagination">
          <span class="relative inline-flex items-center rounded-l-lg px-3 py-2 text-slate-400 ring-1 ring-inset ring-slate-800 bg-slate-900/60 font-medium text-xs">Page</span>
          <a href="#" class="relative z-10 inline-flex items-center bg-brand-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-600">1</a>
          <a href="<?=$default_path?>/community/inquiry.php?&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=3&&com_board_category_code=&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=2" 
             class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-slate-400 ring-1 ring-inset ring-slate-800 hover:bg-slate-800/40 focus:z-20 focus:outline-offset-0 transition">2</a>
          <a href="<?=$default_path?>/community/inquiry.php?&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=3&&com_board_category_code=&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=3" 
             class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-slate-400 ring-1 ring-inset ring-slate-800 hover:bg-slate-800/40 focus:z-20 focus:outline-offset-0 transition">3</a>
          <a href="<?=$default_path?>/community/inquiry.php?&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=3&&com_board_category_code=&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=4" 
             class="relative inline-flex items-center rounded-r-lg px-4 py-2 text-sm font-semibold text-slate-400 ring-1 ring-inset ring-slate-800 hover:bg-slate-800/40 focus:z-20 focus:outline-offset-0 transition">4</a>
        </nav>

        <!-- Write Button -->
        <div>
          <a href="<?=$default_path?>/community/inquiry.php?com_board_basic=write_form&&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=3&" 
             class="rounded-lg bg-gradient-to-r from-brand-600 to-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-brand-500/25 hover:from-brand-500 hover:to-indigo-500 focus:ring-2 focus:ring-brand-500/20 focus:outline-none transform hover:-translate-y-0.5 transition duration-200 flex items-center gap-2 cursor-pointer">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
            글쓰기
          </a>
        </div>
      </div>

      <!-- Search Form -->
      <div id="ext_search" class="flex justify-center border-t border-slate-900 pt-8">
        <form name='com_board_search' method='post' action='<?=$default_path?>/community/inquiry.php?com_board_category_code=&&' onsubmit="return FormCheck.init('com_board_search')"
              class="flex flex-col sm:flex-row items-center gap-3 bg-slate-900/40 p-4 border border-slate-800 rounded-xl">
          
          <div class="est_cate_cell w-full sm:w-auto">
            <select title="select" name='com_board_search_code' onchange='sel_search();'
                    class="block w-full sm:w-32 rounded-lg border-0 bg-slate-950/60 py-2.5 px-3 text-sm text-white ring-1 ring-inset ring-slate-800 focus:ring-2 focus:ring-brand-500 focus:outline-none transition">
              <option value='subject'>제목</option>
              <option value='description'>내용</option>
              <option value='writer'>작성자</option>
            </select>
          </div>

          <div class="est_keyword_cell w-full sm:w-64">
            <div id='search_display1' style='display:block;'>
              <input title="input" alt="" type='text' name='com_board_search_value' chk="y" msg="검색어" kind="" placeholder="검색어를 입력하세요..."
                     class="block w-full rounded-lg border-0 bg-slate-950/60 py-2.5 px-4 text-sm text-white ring-1 ring-inset ring-slate-800 placeholder:text-slate-600 focus:ring-2 focus:ring-brand-500 focus:outline-none transition" />
            </div>
            <div id='search_display2' style='display:none;' class="flex items-center gap-2">
              <input title="input" alt="" type='text' name='com_board_search_value1' value='2021-07-12' 
                     class="block w-full rounded-lg border-0 bg-slate-950/60 py-2.5 px-2 text-xs text-white ring-1 ring-inset ring-slate-800 focus:ring-2 focus:ring-brand-500 focus:outline-none transition" />
              <span class="text-slate-600">~</span>
              <input title="input" alt="" type='text' name='com_board_search_value2' value='2021-07-12'
                     class="block w-full rounded-lg border-0 bg-slate-950/60 py-2.5 px-2 text-xs text-white ring-1 ring-inset ring-slate-800 focus:ring-2 focus:ring-brand-500 focus:outline-none transition" />
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