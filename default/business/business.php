<?php
$page_title = "운영쇼핑몰";
$page_desc = "조이코리아가 브랜드사 공식 권한을 취득하여 직접 운영 및 관리하는 쇼핑몰 리스트입니다.";
include_once(dirname(__DIR__) . '/config.php');
include_once(dirname(__DIR__) . '/inc/header.php');
?>

<!-- 배경 Radiant 광원 효과 -->
<div class="absolute left-1/2 top-0 -z-10 h-[500px] w-full -translate-x-1/2 bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,rgba(92,117,255,0.08),rgba(255,255,255,0))]"></div>

<!-- 상단 서브 히어로 섹션 [S]-->
<section class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pt-16 pb-8">
  <div class="border-b border-slate-200 dark:border-slate-900 pb-10">
    <span class="text-xs font-semibold uppercase tracking-wider text-brand-600 dark:text-brand-400">BUSINESS</span>
    <h1 class="mt-2 font-display text-4xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-5xl">운영쇼핑몰</h1>
    <p class="mt-4 text-base text-slate-600 dark:text-slate-400">단순 대행 입점이 아닌, 조이코리아가 브랜드사 공식 위탁 권한을 받아 직접 전담 운영하는 메이저 쇼핑몰 리스트입니다.</p>
  </div>
</section>
<!-- 상단 서브 히어로 섹션 [E]-->

<div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pb-24">
  <!-- 상단 세련된 탭 메뉴 [S] -->
  <div class="mb-12 border-b border-slate-200 dark:border-slate-900">
     <nav class="-mb-px flex space-x-8" aria-label="Tabs">
       <a href="<?=$default_path?>/business/business1.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-300 dark:hover:border-slate-800 hover:text-slate-900 dark:hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">사업소개</a>
       <a href="<?=$default_path?>/business/costomer.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-300 dark:hover:border-slate-800 hover:text-slate-900 dark:hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">고객사</a>
       <a href="<?=$default_path?>/business/business.php" class="border-brand-600 dark:border-brand-500 text-brand-600 dark:text-brand-400 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-semibold transition">운영쇼핑몰</a>
       <a href="<?=$default_path?>/business/partner.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-300 dark:hover:border-slate-800 hover:text-slate-900 dark:hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">입점제휴몰</a>
     </nav>
  </div>
  <!-- 상단 탭 메뉴 [E] -->

  <!-- 서브 컨텐츠 본문 [S]-->
  <div class="space-y-20">
     
     <!-- 쇼핑몰 그리드 카드 레이아웃 -->
     <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
        
        <!-- 쇼핑몰 1: 도루코공식몰 -->
        <div class="group relative flex flex-col justify-between rounded-3xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 overflow-hidden hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50/50 dark:hover:bg-slate-900/20 shadow-sm hover:shadow-2xl hover:shadow-brand-500/5 transition duration-300">
           <a href="<?=$default_path?>/business/business.php?com_board_basic=read_form&com_board_idx=8&&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=4&&com_board_id=4" class="block overflow-hidden bg-slate-100 dark:bg-slate-950">
              <img alt="도루코공식몰" src="<?=$demo_path?>/component/board/board_4/u_image/8/1160253452_mall_01.jpg" class="h-64 w-full object-cover group-hover:scale-105 opacity-90 group-hover:opacity-100 transition duration-350" />
           </a>
           <div class="p-6 space-y-4">
              <div class="flex items-center justify-between">
                 <span class="inline-flex items-center rounded-md bg-brand-500/10 px-2.5 py-1 text-xs font-medium text-brand-600 dark:text-brand-400 ring-1 ring-inset ring-brand-500/20">도루코 (DORCO)</span>
                 <span class="inline-flex items-center rounded-md bg-emerald-500/10 px-2.5 py-1 text-xs font-medium text-emerald-600 dark:text-emerald-400 ring-1 ring-inset ring-emerald-500/20">운영 중</span>
              </div>
              <h4 class="font-display text-lg font-bold text-slate-900 dark:text-white group-hover:text-brand-600 dark:group-hover:text-brand-400 transition">
                 <a href="<?=$default_path?>/business/business.php?com_board_basic=read_form&com_board_idx=8&&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=4&&com_board_id=4">도루코 공식 온라인몰</a>
              </h4>
              <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">도루코 정품 칼, 가위 및 주방 위생용품을 판매하는 네이버 스마트스토어 공식 대행 스토어입니다.</p>
           </div>
        </div>

        <!-- 쇼핑몰 2: 동원천지인공식몰 -->
        <div class="group relative flex flex-col justify-between rounded-3xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 overflow-hidden hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50/50 dark:hover:bg-slate-900/20 shadow-sm hover:shadow-2xl hover:shadow-brand-500/5 transition duration-300">
           <a href="<?=$default_path?>/business/business.php?com_board_basic=read_form&com_board_idx=7&&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=4&&com_board_id=4" class="block overflow-hidden bg-slate-100 dark:bg-slate-950">
              <img alt="동원천지인공식몰" src="<?=$demo_path?>/component/board/board_4/u_image/7/1018773828_mall_02.jpg" class="h-64 w-full object-cover group-hover:scale-105 opacity-90 group-hover:opacity-100 transition duration-350" />
           </a>
           <div class="p-6 space-y-4">
              <div class="flex items-center justify-between">
                 <span class="inline-flex items-center rounded-md bg-indigo-500/10 px-2.5 py-1 text-xs font-medium text-indigo-600 dark:text-indigo-400 ring-1 ring-inset ring-indigo-500/20">동원F&B</span>
                 <span class="inline-flex items-center rounded-md bg-emerald-500/10 px-2.5 py-1 text-xs font-medium text-emerald-600 dark:text-emerald-400 ring-1 ring-inset ring-emerald-500/20">운영 중</span>
              </div>
              <h4 class="font-display text-lg font-bold text-slate-900 dark:text-white group-hover:text-brand-600 dark:group-hover:text-brand-400 transition">
                 <a href="<?=$default_path?>/business/business.php?com_board_basic=read_form&com_board_idx=7&&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=4&&com_board_id=4">동원 천지인 홍삼 공식몰</a>
              </h4>
              <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">동원 F&B의 고품격 홍삼 브랜드 천지인을 유통하는 스마트스토어 및 오픈마켓 공식 벤더샵입니다.</p>
           </div>
        </div>

        <!-- 쇼핑몰 3: 그란도노공식몰 -->
        <div class="group relative flex flex-col justify-between rounded-3xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 overflow-hidden hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50/50 dark:hover:bg-slate-900/20 shadow-sm hover:shadow-2xl hover:shadow-brand-500/5 transition duration-300">
           <a href="<?=$default_path?>/business/business.php?com_board_basic=read_form&com_board_idx=6&&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=4&&com_board_id=4" class="block overflow-hidden bg-slate-100 dark:bg-slate-950">
              <img alt="그란도노공식몰" src="<?=$demo_path?>/component/board/board_4/u_image/6/1595477465_mall_03.jpg" class="h-64 w-full object-cover group-hover:scale-105 opacity-90 group-hover:opacity-100 transition duration-350" />
           </a>
           <div class="p-6 space-y-4">
              <div class="flex items-center justify-between">
                 <span class="inline-flex items-center rounded-md bg-violet-500/10 px-2.5 py-1 text-xs font-medium text-violet-600 dark:text-violet-400 ring-1 ring-inset ring-violet-500/20">그란도노 (Grandono)</span>
                 <span class="inline-flex items-center rounded-md bg-emerald-500/10 px-2.5 py-1 text-xs font-medium text-emerald-600 dark:text-emerald-400 ring-1 ring-inset ring-emerald-500/20">운영 중</span>
              </div>
              <h4 class="font-display text-lg font-bold text-slate-900 dark:text-white group-hover:text-brand-600 dark:group-hover:text-brand-400 transition">
                 <a href="<?=$default_path?>/business/business.php?com_board_basic=read_form&com_board_idx=6&&com_board_search_code=&com_board_search_value1=&com_board_search_value2=&com_board_page=&&com_board_id=4&&com_board_id=4">그란도노 공식몰</a>
              </h4>
              <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">이탈리아 명품 패션 및 슈즈 수입 직구 전문 프리미엄 쇼핑몰입니다.</p>
           </div>
        </div>

     </div>

     <!-- [2] 하단 1:1 상담 안내 (고급스러운 카드 배너 리액토링) -->
     <div class="relative overflow-hidden rounded-3xl bg-slate-100 dark:bg-slate-900/40 border border-slate-200 dark:border-slate-900 p-8 sm:p-12 flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="space-y-2 text-center md:text-left">
           <h4 class="font-display text-xl font-extrabold text-slate-900 dark:text-white">귀사 브랜드의 가치를 100% 디지털로 이식해 드리겠습니다.</h4>
           <p class="text-sm text-slate-600 dark:text-slate-400">도루코, 동원 천지인과 같이 신뢰도 높은 쇼핑몰 운영 전략을 이식받으십시오.</p>
        </div>
        <a href="<?=$default_path?>/customer/consult.php" class="rounded-full bg-brand-600 px-6 py-3 text-sm font-semibold text-white hover:bg-brand-500 transition duration-200 shadow-lg shadow-brand-500/25">온라인 판매 위탁 문의</a>
     </div>

  </div>
  <!-- 서브 컨텐츠 본문 [E]-->
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