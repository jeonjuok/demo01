<?php
$page_title = "온라인 판매대행 - 고객사";
$page_desc = "조이코리아와 함께 이커머스를 혁신해가는 대표 파트너사 및 고객사를 안내합니다.";
include_once(dirname(__DIR__) . '/config.php');
include_once(dirname(__DIR__) . '/inc/header.php');
?>

<!-- 배경 Radiant 광원 효과 -->
<div class="absolute left-1/2 top-0 -z-10 h-[500px] w-full -translate-x-1/2 bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,rgba(92,117,255,0.04),rgba(255,255,255,0))] dark:bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,rgba(92,117,255,0.08),rgba(255,255,255,0))]"></div>

<!-- 상단 서브 히어로 섹션 [S]-->
<section class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pt-16 pb-8">
  <div class="border-b border-slate-200 dark:border-slate-900 pb-10">
    <span class="text-xs font-semibold uppercase tracking-wider text-brand-600 dark:text-brand-400">BUSINESS</span>
    <h1 class="mt-2 font-display text-4xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-5xl">고객사</h1>
    <p class="mt-4 text-base text-slate-550 dark:text-slate-400">오랜 기간 긴밀한 신뢰를 바탕으로 전자상거래 시장을 함께 주도하고 있는 핵심 고객사입니다.</p>
  </div>
</section>
<!-- 상단 서브 히어로 섹션 [E]-->

<div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pb-24">
  <!-- 상단 세련된 탭 메뉴 [S] -->
  <div class="mb-12 border-b border-slate-200 dark:border-slate-900">
     <nav class="-mb-px flex space-x-8" aria-label="Tabs">
       <a href="<?=$default_path?>/business/business1.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-355 hover:text-slate-800 dark:hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">사업소개</a>
       <a href="<?=$default_path?>/business/costomer.php" class="border-brand-500 text-brand-600 dark:text-brand-400 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-semibold transition" aria-current="page">고객사</a>
       <a href="<?=$default_path?>/business/business.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-355 hover:text-slate-800 dark:hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">운영쇼핑몰</a>
       <a href="<?=$default_path?>/business/partner.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-355 hover:text-slate-800 dark:hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">입점제휴몰</a>
     </nav>
  </div>
  <!-- 상단 탭 메뉴 [E] -->

  <!-- 서브 컨텐츠 본문 [S]-->
  <div class="space-y-20">
     
     <!-- [1] 고객사 로고 그리드 리뉴얼 -->
     <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 lg:grid-cols-5">
        
        <!-- 고객사 1: 도루코 -->
        <div class="group relative flex flex-col justify-between items-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 hover:-translate-y-1 hover:border-slate-350 dark:hover:border-slate-800 hover:bg-slate-100/50 dark:hover:bg-slate-900/30 transition duration-300 shadow-sm">
           <div class="h-28 w-full flex items-center justify-center bg-slate-50 dark:bg-slate-950/40 rounded-xl overflow-hidden p-4">
              <img src="<?=$default_path?>/img/designcoco/images/customer/dorco.jpg" alt="도루코" class="max-h-full max-w-full object-contain dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <h5 class="mt-4 text-sm font-bold text-slate-700 dark:text-slate-300 group-hover:text-slate-950 dark:group-hover:text-white transition">도루코 (DORCO)</h5>
        </div>

        <!-- 고객사 2: 도루코마이셰프 -->
        <div class="group relative flex flex-col justify-between items-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 hover:-translate-y-1 hover:border-slate-350 dark:hover:border-slate-800 hover:bg-slate-100/50 dark:hover:bg-slate-900/30 transition duration-300 shadow-sm">
           <div class="h-28 w-full flex items-center justify-center bg-slate-50 dark:bg-slate-950/40 rounded-xl overflow-hidden p-4">
              <img src="<?=$default_path?>/img/designcoco/images/customer/mychef.jpg" alt="도루코마이셰프" class="max-h-full max-w-full object-contain dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <h5 class="mt-4 text-sm font-bold text-slate-700 dark:text-slate-300 group-hover:text-slate-950 dark:group-hover:text-white transition">도루코 마이셰프</h5>
        </div>

        <!-- 고객사 3: 동원F&B 천지인 -->
        <div class="group relative flex flex-col justify-between items-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 hover:-translate-y-1 hover:border-slate-350 dark:hover:border-slate-800 hover:bg-slate-100/50 dark:hover:bg-slate-900/30 transition duration-300 shadow-sm">
           <div class="h-28 w-full flex items-center justify-center bg-slate-50 dark:bg-slate-955/40 rounded-xl overflow-hidden p-4">
              <img src="<?=$default_path?>/img/designcoco/images/customer/chunjiin.jpg" alt="동원F&B 천지인" class="max-h-full max-w-full object-contain dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <h5 class="mt-4 text-sm font-bold text-slate-700 dark:text-slate-300 group-hover:text-slate-955 dark:group-hover:text-white transition">동원 F&B 천지인 홍삼</h5>
        </div>

        <!-- 고객사 4: AW RUGS -->
        <div class="group relative flex flex-col justify-between items-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 hover:-translate-y-1 hover:border-slate-350 dark:hover:border-slate-800 hover:bg-slate-100/50 dark:hover:bg-slate-900/30 transition duration-300 shadow-sm">
           <div class="h-28 w-full flex items-center justify-center bg-slate-50 dark:bg-slate-950/40 rounded-xl overflow-hidden p-4">
              <img src="<?=$default_path?>/img/designcoco/images/customer/awrugs.jpg" alt="AW RUGS" class="max-h-full max-w-full object-contain dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <h5 class="mt-4 text-sm font-bold text-slate-700 dark:text-slate-300 group-hover:text-slate-950 dark:group-hover:text-white transition">AW RUGS</h5>
        </div>

        <!-- 고객사 5: 그란도노 -->
        <div class="group relative flex flex-col justify-between items-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 hover:-translate-y-1 hover:border-slate-350 dark:hover:border-slate-800 hover:bg-slate-100/50 dark:hover:bg-slate-900/30 transition duration-300 shadow-sm">
           <div class="h-28 w-full flex items-center justify-center bg-slate-50 dark:bg-slate-950/40 rounded-xl overflow-hidden p-4">
              <img src="<?=$default_path?>/img/designcoco/images/customer/grandono.jpg" alt="그란도노" class="max-h-full max-w-full object-contain dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <h5 class="mt-4 text-sm font-bold text-slate-700 dark:text-slate-300 group-hover:text-slate-950 dark:group-hover:text-white transition">그란도노 (Grandono)</h5>
        </div>

     </div>

     <!-- [2] 하단 1:1 상담 안내 (고급스러운 카드 배너 리액토링) -->
     <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-slate-100 to-brand-50/50 dark:from-slate-900 dark:to-indigo-950/40 border border-slate-200 dark:border-slate-900 p-8 sm:p-12 flex flex-col md:flex-row items-center justify-between gap-6 transition-colors duration-250">
        <div class="space-y-2 text-center md:text-left">
           <h4 class="font-display text-xl font-extrabold text-slate-900 dark:text-white">조이코리아의 새로운 이커머스 파트너가 되어주십시오</h4>
           <p class="text-sm text-slate-650 dark:text-slate-400">풍부한 마케팅 리소스와 정밀한 물류 유통 네트워크로 귀사 브랜드의 매출을 전적으로 책임지겠습니다.</p>
        </div>
        <a href="<?=$default_path?>/customer/consult.php" class="rounded-full bg-brand-600 px-6 py-3 text-sm font-semibold text-white hover:bg-brand-500 transition duration-200 shadow-lg shadow-brand-500/25">제휴 문의 신청</a>
     </div>

  </div>
  <!-- 서브 컨텐츠 본문 [E]-->
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