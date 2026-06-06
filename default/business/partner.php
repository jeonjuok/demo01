<?php
$page_title = "온라인 판매대행 - 입점제휴몰";
$page_desc = "조이코리아가 공식 벤더 및 운영대행을 통해 입점 판매를 진행하고 있는 주요 제휴몰 리스트입니다.";
include_once(dirname(__DIR__) . '/config.php');
include_once(dirname(__DIR__) . '/inc/header.php');
?>

<!-- 배경 Radiant 광원 효과 -->
<div class="absolute left-1/2 top-0 -z-10 h-[500px] w-full -translate-x-1/2 bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,rgba(92,117,255,0.08),rgba(255,255,255,0))]"></div>

<!-- 상단 서브 히어로 섹션 [S]-->
<section class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pt-16 pb-8">
  <div class="border-b border-slate-200 dark:border-slate-900 pb-10">
    <span class="text-xs font-semibold uppercase tracking-wider text-brand-600 dark:text-brand-400">BUSINESS</span>
    <h1 class="mt-2 font-display text-4xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-5xl">입점제휴몰</h1>
    <p class="mt-4 text-base text-slate-600 dark:text-slate-400">오픈마켓부터 메이저 종합 쇼핑몰, 홈쇼핑 채널까지 조이코리아가 연동 운영하는 폭넓은 유통망 채널입니다.</p>
  </div>
</section>
<!-- 상단 서브 히어로 섹션 [E]-->

<div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pb-24">
  <!-- 상단 세련된 탭 메뉴 [S] -->
  <div class="mb-12 border-b border-slate-200 dark:border-slate-900">
     <nav class="-mb-px flex space-x-8" aria-label="Tabs">
       <a href="<?=$default_path?>/business/business1.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-300 dark:hover:border-slate-800 hover:text-slate-900 dark:hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">사업소개</a>
       <a href="<?=$default_path?>/business/costomer.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-300 dark:hover:border-slate-800 hover:text-slate-900 dark:hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">고객사</a>
       <a href="<?=$default_path?>/business/business.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-300 dark:hover:border-slate-800 hover:text-slate-900 dark:hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">운영쇼핑몰</a>
       <a href="<?=$default_path?>/business/partner.php" class="border-brand-600 dark:border-brand-500 text-brand-600 dark:text-brand-400 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-semibold transition">입점제휴몰</a>
     </nav>
  </div>
  <!-- 상단 탭 메뉴 [E] -->

  <!-- 서브 컨텐츠 본문 [S]-->
  <div class="space-y-20">
     
     <!-- 제휴 쇼핑몰 로고 벽 (Logo Wall) 리뉴얼 -->
     <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
        
        <!-- 11번가 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/11st.jpg" alt="11번가" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">11번가</p>
        </div>

        <!-- 지마켓 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/gmarket.jpg" alt="지마켓" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">G마켓</p>
        </div>

        <!-- 옥션 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/action.jpg" alt="옥션" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">옥션</p>
        </div>

        <!-- 네이버스마트스토어 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/naver.jpg" alt="네이버" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">네이버 스마트스토어</p>
        </div>

        <!-- 카카오톡스토어 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/kakao.jpg" alt="카카오" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">카카오 톡스토어</p>
        </div>

        <!-- 쿠팡 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/coupang.jpg" alt="쿠팡" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">쿠팡</p>
        </div>

        <!-- 위메프 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/wemep.jpg" alt="위메프" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">위메프</p>
        </div>

        <!-- 티몬 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/tmon.jpg" alt="티몬" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">티몬</p>
        </div>

        <!-- AK몰 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/ak.jpg" alt="AK몰" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">AK몰</p>
        </div>

        <!-- CJ몰 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/cj.jpg" alt="CJ몰" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">CJ온스타일</p>
        </div>

        <!-- 이마트몰 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/emart.jpg" alt="이마트몰" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">SSG 이마트몰</p>
        </div>

        <!-- GS몰 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/gs.jpg" alt="GS몰" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">GS SHOP</p>
        </div>

        <!-- Hmall -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/hmall.jpg" alt="Hmall" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">현대 Hmall</p>
        </div>

        <!-- 홈앤쇼핑 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/home.jpg" alt="홈앤쇼핑" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">홈앤쇼핑</p>
        </div>

        <!-- 롯데닷컴 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/lottecom.jpg" alt="롯데닷컴" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">롯데아이몰</p>
        </div>

        <!-- 롯데홈쇼핑 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/lottehome.jpg" alt="롯데홈쇼핑" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">롯데홈쇼핑</p>
        </div>

        <!-- 롯데온 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/lotteon.jpg" alt="롯데온" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">롯데 ON</p>
        </div>

        <!-- NS홈쇼핑 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/ns.jpg" alt="NS홈쇼핑" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">NS 홈쇼핑</p>
        </div>

        <!-- 신세계몰 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/sinsegae.jpg" alt="신세계몰" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">신세계몰 (SSG)</p>
        </div>

        <!-- 신세계TV쇼핑 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/sinsegaetv.jpg" alt="신세계쇼핑" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">신세계 라이브쇼핑</p>
        </div>

        <!-- W쇼핑 -->
        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-5 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900/20 shadow-sm transition duration-300">
           <div class="h-14 w-full flex items-center justify-center bg-slate-100 dark:bg-slate-950/20 rounded-xl overflow-hidden p-2">
              <img src="<?=$default_path?>/img/designcoco/images/mall/w.jpg" alt="W쇼핑" class="max-h-full max-w-full object-contain dark:filter dark:brightness-90 dark:group-hover:brightness-100 transition duration-300" />
           </div>
           <p class="mt-3 text-xs font-bold text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition">W 쇼핑</p>
        </div>

     </div>

     <!-- [2] 하단 1:1 상담 안내 (고급스러운 카드 배너 리액토링) -->
     <div class="relative overflow-hidden rounded-3xl bg-slate-100 dark:bg-slate-900/40 border border-slate-200 dark:border-slate-900 p-8 sm:p-12 flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="space-y-2 text-center md:text-left">
           <h4 class="font-display text-xl font-extrabold text-slate-900 dark:text-white">모든 온라인 마켓 유통망을 터치하십시오.</h4>
           <p class="text-sm text-slate-600 dark:text-slate-400">국내 20여 개 이상의 주요 온라인 몰 채널을 한 번에 제어하는 강력한 솔루션을 제공합니다.</p>
        </div>
        <a href="<?=$default_path?>/customer/consult.php" class="rounded-full bg-brand-600 px-6 py-3 text-sm font-semibold text-white hover:bg-brand-500 transition duration-200 shadow-lg shadow-brand-500/25">채널 입점 제휴 신청</a>
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