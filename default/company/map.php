<?php
$page_title = "오시는 길";
$page_desc = "조이코리아 본사 및 하남지사의 위치와 연락처, 대중교통 이용 안내 페이지입니다.";
include_once(dirname(__DIR__) . '/config.php');
include_once(dirname(__DIR__) . '/inc/header.php');
?>

<!-- 배경 Radiant 광원 효과 -->
<div class="absolute left-1/2 top-0 -z-10 h-[500px] w-full -translate-x-1/2 bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,rgba(92,117,255,0.04),rgba(255,255,255,0))] dark:bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,rgba(92,117,255,0.08),rgba(255,255,255,0))]"></div>

<!-- 상단 서브 히어로 섹션 [S]-->
<section class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pt-16 pb-8">
  <div class="border-b border-slate-200 dark:border-slate-900 pb-10">
    <span class="text-xs font-semibold uppercase tracking-wider text-brand-600 dark:text-brand-400">COMPANY</span>
    <h1 class="mt-2 font-display text-4xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-5xl">오시는 길</h1>
    <p class="mt-4 text-base text-slate-550 dark:text-slate-400">조이코리아 강남본사 및 하남지사로 찾아오시는 길을 안내해 드립니다.</p>
  </div>
</section>
<!-- 상단 서브 히어로 섹션 [E]-->

<div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pb-24">
  <!-- 상단 세련된 탭 메뉴 [S] -->
  <div class="mb-12 border-b border-slate-200 dark:border-slate-900">
     <nav class="-mb-px flex space-x-8" aria-label="Tabs">
       <a href="company.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-355 hover:text-slate-800 dark:hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">회사소개</a>
       <a href="<?=$default_path?>/company/ceo.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-355 hover:text-slate-800 dark:hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">CEO 인사말</a>
       <a href="<?=$default_path?>/company/history.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-355 hover:text-slate-800 dark:hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">회사연혁</a>
       <a href="<?=$default_path?>/company/map.php" class="border-brand-500 text-brand-600 dark:text-brand-400 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-semibold transition" aria-current="page">오시는 길</a>
     </nav>
  </div>
  <!-- 상단 탭 메뉴 [E] -->

  <!-- 서브 컨텐츠 본문 [S]-->
  <div class="space-y-12">
     
     <!-- 구글 맵 (세련된 Rounded 대형 카드화) -->
     <div class="relative overflow-hidden rounded-3xl border border-slate-200 dark:border-slate-900 bg-slate-100 dark:bg-slate-950 h-[400px] sm:h-[480px] shadow-2xl">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1582.2345613152995!2d127.05643718612788!3d37.52043735061789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca4664237889d%3A0xabe107cac516b75b!2z7ZmU7LKc67mM65Sp!5e0!3m2!1sko!2skr!4v1625722295490!5m2!1sko!2skr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     </div>
     
     <!-- 본사 및 지사 정보 (2열 레이아웃 그리드) -->
     <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
        
        <!-- 강남본사 카드 -->
        <div class="rounded-3xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-8 space-y-6 hover:border-slate-350 dark:hover:border-slate-800 shadow-sm transition duration-300">
           <div class="flex items-center gap-3">
              <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-500/10 text-brand-600 dark:text-brand-400">
                 <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h18v3H3V3z" /></svg>
              </div>
              <h3 class="font-display text-xl font-bold text-slate-900 dark:text-white">강남본사</h3>
           </div>
           
           <div class="space-y-4 text-sm text-slate-600 dark:text-slate-400">
              <div class="space-y-1">
                 <span class="text-xs font-semibold text-slate-450 dark:text-slate-500 uppercase tracking-wider">주소</span>
                 <p class="text-slate-800 dark:text-slate-200 leading-relaxed">서울특별시 강남구 영동대로 702 (청담동, 화천빌딩) 803호</p>
              </div>
              
              <div class="space-y-1">
                 <span class="text-xs font-semibold text-slate-450 dark:text-slate-500 uppercase tracking-wider">대표 연락처</span>
                 <p class="text-slate-800 dark:text-slate-200"><a href="tel:1599-2833" class="hover:text-brand-600 dark:hover:text-brand-400 transition">1599-2833</a></p>
              </div>

              <div class="space-y-1">
                 <span class="text-xs font-semibold text-slate-450 dark:text-slate-500 uppercase tracking-wider">지하철 대중교통 이용 시</span>
                 <p class="text-slate-800 dark:text-slate-200">7호선 청담역 하차 후 <strong class="text-brand-600 dark:text-brand-400 font-semibold">14번 출구</strong> 이용 도보 이동</p>
              </div>
           </div>
        </div>

        <!-- 하남지사 카드 -->
        <div class="rounded-3xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-8 space-y-6 hover:border-slate-350 dark:hover:border-slate-800 shadow-sm transition duration-300">
           <div class="flex items-center gap-3">
              <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-500/10 text-indigo-650 dark:text-indigo-400">
                 <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-.778.099-1.533.284-2.253" /></svg>
              </div>
              <h3 class="font-display text-xl font-bold text-slate-900 dark:text-white">하남지사 (해외명품사업부)</h3>
           </div>
           
           <div class="space-y-4 text-sm text-slate-600 dark:text-slate-400">
              <div class="space-y-1">
                 <span class="text-xs font-semibold text-slate-450 dark:text-slate-500 uppercase tracking-wider">주소</span>
                 <p class="text-slate-800 dark:text-slate-200 leading-relaxed">경기도 하남시 미사강변서로 25 (미사테스타타워) 1039호</p>
              </div>
              
              <div class="space-y-1">
                 <span class="text-xs font-semibold text-slate-450 dark:text-slate-500 uppercase tracking-wider">지사 연락처</span>
                 <p class="text-slate-800 dark:text-slate-200"><a href="tel:1599-6933" class="hover:text-brand-605 dark:hover:text-brand-400 transition">1599-6933</a></p>
              </div>

              <div class="space-y-1">
                 <span class="text-xs font-semibold text-slate-450 dark:text-slate-500 uppercase tracking-wider">주요 업무</span>
                 <p class="text-slate-800 dark:text-slate-200">해외 수입 명품 검수, 패킹, 물류 적재 및 공급망 직배송 센터 운영</p>
              </div>
           </div>
        </div>

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