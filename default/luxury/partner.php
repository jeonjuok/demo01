<?php
$page_title = "해외명품사업 - 취급브랜드";
$page_desc = "그란도노가 공식 파트너사 협약을 통해 정품 공급을 진행하고 있는 글로벌 하이엔드 럭셔리 브랜드 리스트입니다.";
include_once(dirname(__DIR__) . '/config.php');
include_once(dirname(__DIR__) . '/inc/header.php');
?>

<!-- 배경 Radiant 광원 효과 -->
<div class="absolute left-1/2 top-0 -z-10 h-[500px] w-full -translate-x-1/2 bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,rgba(92,117,255,0.08),rgba(255,255,255,0))]"></div>

<!-- 상단 서브 히어로 섹션 [S]-->
<section class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pt-16 pb-8">
  <div class="border-b border-slate-900 pb-10">
    <span class="text-xs font-semibold uppercase tracking-wider text-brand-400">LUXURY GOODS</span>
    <h1 class="mt-2 font-display text-4xl font-extrabold tracking-tight text-white sm:text-5xl">취급브랜드</h1>
    <p class="mt-4 text-base text-slate-400">이탈리아 현지 독점 파트너 협력을 통해 공급받는 100% 정품 하이엔드 럭셔리 브랜드 라인업입니다.</p>
  </div>
</section>
<!-- 상단 서브 히어로 섹션 [E]-->

<div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pb-24">
  <!-- 상단 세련된 탭 메뉴 [S] -->
  <div class="mb-12 border-b border-slate-900">
     <nav class="-mb-px flex space-x-8" aria-label="Tabs">
       <a href="<?=$default_path?>/luxury/business1.php" class="border-transparent text-slate-400 hover:border-slate-800 hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">사업소개</a>
       <a href="<?=$default_path?>/luxury/location.php" class="border-transparent text-slate-400 hover:border-slate-800 hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">입점현황</a>
       <a href="<?=$default_path?>/luxury/partner.php" class="border-brand-500 text-brand-400 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-semibold transition">취급브랜드</a>
     </nav>
  </div>
  <!-- 상단 탭 메뉴 [E] -->

  <!-- 서브 컨텐츠 본문 [S]-->
  <div class="space-y-20">
     
     <!-- 명품 브랜드 로고 그리드 리액토링 -->
     <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
        
        <!-- 구찌 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner1.jpg" alt="구찌" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">구찌 (GUCCI)</p>
        </div>

        <!-- 프라다 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner2.jpg" alt="프라다" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">프라다 (PRADA)</p>
        </div>

        <!-- 버버리 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner3.jpg" alt="버버리" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">버버리 (BURBERRY)</p>
        </div>

        <!-- 생로랑 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner4.jpg" alt="생로랑" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">생로랑 (SAINT LAURENT)</p>
        </div>

        <!-- 펜디 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner5.jpg" alt="펜디" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">펜디 (FENDI)</p>
        </div>

        <!-- 메종마르지엘라 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner6.jpg" alt="메종마르지엘라" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">메종 마르지엘라</p>
        </div>

        <!-- 발렌시아가 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner7.jpg" alt="발렌시아가" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">발렌시아가</p>
        </div>

        <!-- 끌로에 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner8.jpg" alt="끌로에" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">끌로에 (CHLOE)</p>
        </div>

        <!-- 발렌티노 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner9.jpg" alt="발렌티노" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">발렌티노 (VALENTINO)</p>
        </div>

        <!-- 톰브라운 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner10.jpg" alt="톰브라운" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">톰 브라운 (THOM BROWNE)</p>
        </div>

        <!-- 몽클레르 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner11.jpg" alt="몽클레르" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">몽클레르 (MONCLER)</p>
        </div>

        <!-- 폴스미스 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner12.jpg" alt="폴스미스" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">폴 스미스 (PAUL SMITH)</p>
        </div>

        <!-- 보테가베네타 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner13.jpg" alt="보테가베네타" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">보테가 베네타</p>
        </div>

        <!-- 페라가모 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner14.jpg" alt="페라가모" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">살바토레 페라가모</p>
        </div>

        <!-- 발리 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner15.jpg" alt="발리" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">발리 (BALLY)</p>
        </div>

        <!-- 겐조 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner16.jpg" alt="겐조" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">겐조 (KENZO)</p>
        </div>

        <!-- 바오바오 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner17.jpg" alt="바오바오" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">바오바오 (BAO BAO)</p>
        </div>

        <!-- 토리버치 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner18.jpg" alt="토리버치" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">토리 버치 (TORY BURCH)</p>
        </div>

        <!-- 아파쎄 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner19.jpg" alt="아파쎄" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">아페쎄 (A.P.C.)</p>
        </div>

        <!-- 비비안웨스트우드 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner20.jpg" alt="비비안웨스트우드" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">비비안 웨스트우드</p>
        </div>

        <!-- 마이클코어스 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-850 hover:bg-slate-900/20 hover:scale-[1.02] transition duration-300">
           <div class="h-16 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
              <img src="<?=$default_path?>/img/designcoco/images/partner21.jpg" alt="마이클코어스" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white transition">마이클 코어스</p>
        </div>

     </div>

     <!-- [2] 하단 1:1 상담 안내 (고급스러운 카드 배너 리액토링) -->
     <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-slate-900 to-indigo-950/40 border border-slate-900 p-8 sm:p-12 flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="space-y-2 text-center md:text-left">
           <h4 class="font-display text-xl font-extrabold text-white">럭셔리 패션 브랜드의 정식 국내 유통 파트너십</h4>
           <p class="text-sm text-slate-400">병행수입 및 정품 보증 비즈니스에 대한 전문적인 전략을 제시해 드립니다.</p>
        </div>
        <a href="<?=$default_path?>/customer/consult.php" class="rounded-full bg-brand-600 px-6 py-3 text-sm font-semibold text-white hover:bg-brand-500 transition duration-200 shadow-lg shadow-brand-500/25">명품 유통 파트너 문의</a>
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