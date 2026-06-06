<?php
$page_title = "해외명품사업 - 입점현황";
$page_desc = "그란도노가 유통되는 백화점 지점 및 메이저 온라인 명품 플랫폼 등의 입점현황을 안내합니다.";
include_once(dirname(__DIR__) . '/config.php');
include_once(dirname(__DIR__) . '/inc/header.php');
?>

<!-- 배경 Radiant 광원 효과 -->
<div class="absolute left-1/2 top-0 -z-10 h-[500px] w-full -translate-x-1/2 bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,rgba(92,117,255,0.08),rgba(255,255,255,0))]"></div>

<!-- 상단 서브 히어로 섹션 [S]-->
<section class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pt-16 pb-8">
  <div class="border-b border-slate-900 pb-10">
    <span class="text-xs font-semibold uppercase tracking-wider text-brand-400">LUXURY GOODS</span>
    <h1 class="mt-2 font-display text-4xl font-extrabold tracking-tight text-white sm:text-5xl">입점현황</h1>
    <p class="mt-4 text-base text-slate-400">그란도노 브랜드를 신뢰해 준 온/오프라인 메이저 백화점 및 유통 플랫폼 입점 채널입니다.</p>
  </div>
</section>
<!-- 상단 서브 히어로 섹션 [E]-->

<div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pb-24">
  <!-- 상단 세련된 탭 메뉴 [S] -->
  <div class="mb-12 border-b border-slate-900">
     <nav class="-mb-px flex space-x-8" aria-label="Tabs">
       <a href="<?=$default_path?>/luxury/business1.php" class="border-transparent text-slate-400 hover:border-slate-800 hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">사업소개</a>
       <a href="<?=$default_path?>/luxury/location.php" class="border-brand-500 text-brand-400 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-semibold transition">입점현황</a>
       <a href="<?=$default_path?>/luxury/partner.php" class="border-transparent text-slate-400 hover:border-slate-800 hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">취급브랜드</a>
     </nav>
  </div>
  <!-- 상단 탭 메뉴 [E] -->

  <!-- 서브 컨텐츠 본문 [S]-->
  <div class="space-y-20">
     
     <!-- [1] 백화점 오프라인 입점 현황 갤러리 -->
     <div class="space-y-8">
        <div class="border-b border-slate-900 pb-3">
           <h4 class="font-display text-xl font-bold text-white">백화점 입점현황 (오프라인)</h4>
        </div>
        
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
           
           <!-- AK백화점 수원점 -->
           <div class="group relative rounded-3xl border border-slate-900 bg-slate-900/10 overflow-hidden hover:border-slate-800 transition duration-300">
              <div class="overflow-hidden bg-slate-950">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/mall_aksuwon.jpg" alt="AK백화점 수원점" class="h-56 w-full object-cover group-hover:scale-105 opacity-90 transition duration-300" />
              </div>
              <div class="p-5">
                 <h5 class="text-sm font-bold text-slate-200 group-hover:text-white">AK백화점 수원점</h5>
              </div>
           </div>

           <!-- 갤러리아백화점 천안점 -->
           <div class="group relative rounded-3xl border border-slate-900 bg-slate-900/10 overflow-hidden hover:border-slate-800 transition duration-300">
              <div class="overflow-hidden bg-slate-950">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/mall_gell_chunan.jpg" alt="갤러리아백화점 천안점" class="h-56 w-full object-cover group-hover:scale-105 opacity-90 transition duration-300" />
              </div>
              <div class="p-5">
                 <h5 class="text-sm font-bold text-slate-200 group-hover:text-white">갤러리아백화점 천안점</h5>
              </div>
           </div>

           <!-- 갤러리아백화점 진주점 -->
           <div class="group relative rounded-3xl border border-slate-900 bg-slate-900/10 overflow-hidden hover:border-slate-800 transition duration-300">
              <div class="overflow-hidden bg-slate-950">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/mall_gell_jinju.jpg" alt="갤러리아백화점 진주점" class="h-56 w-full object-cover group-hover:scale-105 opacity-90 transition duration-300" />
              </div>
              <div class="p-5">
                 <h5 class="text-sm font-bold text-slate-200 group-hover:text-white">갤러리아백화점 진주점</h5>
              </div>
           </div>

           <!-- 신세계백화점 김해점 -->
           <div class="group relative rounded-3xl border border-slate-900 bg-slate-900/10 overflow-hidden hover:border-slate-800 transition duration-300">
              <div class="overflow-hidden bg-slate-950">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/mall_ssg_gimhae.jpg" alt="신세계백화점 김해점" class="h-56 w-full object-cover group-hover:scale-105 opacity-90 transition duration-300" />
              </div>
              <div class="p-5">
                 <h5 class="text-sm font-bold text-slate-200 group-hover:text-white">신세계백화점 김해점</h5>
              </div>
           </div>

           <!-- NC백화점 송파점 -->
           <div class="group relative rounded-3xl border border-slate-900 bg-slate-900/10 overflow-hidden hover:border-slate-800 transition duration-300">
              <div class="overflow-hidden bg-slate-950">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/mall_nc_songpa.jpg" alt="NC백화점 송파점" class="h-56 w-full object-cover group-hover:scale-105 opacity-90 transition duration-300" />
              </div>
              <div class="p-5">
                 <h5 class="text-sm font-bold text-slate-200 group-hover:text-white">NC백화점 송파점</h5>
              </div>
           </div>

           <!-- NC백화점 EXCO점 -->
           <div class="group relative rounded-3xl border border-slate-900 bg-slate-900/10 overflow-hidden hover:border-slate-800 transition duration-300">
              <div class="overflow-hidden bg-slate-950">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/mall_nc_daegu.jpg" alt="NC백화점 EXCO점" class="h-56 w-full object-cover group-hover:scale-105 opacity-90 transition duration-300" />
              </div>
              <div class="p-5">
                 <h5 class="text-sm font-bold text-slate-200 group-hover:text-white">NC백화점 EXCO점 (대구)</h5>
              </div>
           </div>

        </div>
     </div>

     <!-- [2] 온라인 입점 현황 로고 그리드 -->
     <div class="space-y-8">
        <div class="border-b border-slate-900 pb-3">
           <h4 class="font-display text-xl font-bold text-white">온라인 속의 그란도노 (입점 채널)</h4>
        </div>
        
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
           
           <!-- 롯데홈쇼핑 -->
           <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-800 hover:bg-slate-900/20 transition duration-300">
              <div class="h-14 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/lottehome.jpg" alt="롯데홈쇼핑" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition" />
              </div>
              <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white">롯데홈쇼핑</p>
           </div>

           <!-- 신세계몰 -->
           <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-800 hover:bg-slate-900/20 transition duration-300">
              <div class="h-14 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/sinsegae.jpg" alt="신세계몰" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition" />
              </div>
              <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white">신세계몰</p>
           </div>

           <!-- Hmall -->
           <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-800 hover:bg-slate-900/20 transition duration-300">
              <div class="h-14 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/hmall.jpg" alt="Hmall" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition" />
              </div>
              <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white">현대 Hmall</p>
           </div>

           <!-- AK몰 -->
           <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-800 hover:bg-slate-900/20 transition duration-300">
              <div class="h-14 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/ak.jpg" alt="AK몰" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition" />
              </div>
              <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white">AK몰</p>
           </div>

           <!-- CJ몰 -->
           <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-800 hover:bg-slate-900/20 transition duration-300">
              <div class="h-14 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/cj.jpg" alt="CJ몰" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition" />
              </div>
              <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white">CJ온스타일</p>
           </div>

           <!-- 롯데닷컴 -->
           <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-800 hover:bg-slate-900/20 transition duration-300">
              <div class="h-14 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/lottecom.jpg" alt="롯데닷컴" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition" />
              </div>
              <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white">롯데아이몰</p>
           </div>

           <!-- 롯데온 -->
           <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-800 hover:bg-slate-900/20 transition duration-300">
              <div class="h-14 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/lotteon.jpg" alt="롯데온" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition" />
              </div>
              <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white">롯데 ON</p>
           </div>

           <!-- 이마트몰 -->
           <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-800 hover:bg-slate-900/20 transition duration-300">
              <div class="h-14 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/emart.jpg" alt="이마트몰" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition" />
              </div>
              <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white">SSG 이마트몰</p>
           </div>

           <!-- 신세계TV몰 -->
           <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-800 hover:bg-slate-900/20 transition duration-300">
              <div class="h-14 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/sinsegaetv.jpg" alt="신세계TV몰" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition" />
              </div>
              <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white">신세계 라이브쇼핑</p>
           </div>

           <!-- LF몰 -->
           <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-800 hover:bg-slate-900/20 transition duration-300">
              <div class="h-14 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/lf.jpg" alt="LF몰" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition" />
              </div>
              <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white">LF 몰</p>
           </div>

           <!-- 하프클럽 -->
           <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-800 hover:bg-slate-900/20 transition duration-300">
              <div class="h-14 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/halfclub.jpg" alt="하프클럽" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition" />
              </div>
              <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white">하프클럽</p>
           </div>

           <!-- 한스타일 -->
           <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-800 hover:bg-slate-900/20 transition duration-300">
              <div class="h-14 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/hanstyle.jpg" alt="한스타일" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition" />
              </div>
              <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white">한스타일</p>
           </div>

           <!-- 머스트잇 -->
           <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-800 hover:bg-slate-900/20 transition duration-300">
              <div class="h-14 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/mustit.jpg" alt="머스트잇" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition" />
              </div>
              <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white">머스트잇</p>
           </div>

           <!-- 카카오톡스토어 -->
           <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-800 hover:bg-slate-900/20 transition duration-300">
              <div class="h-14 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/kakao.jpg" alt="카카오" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition" />
              </div>
              <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white">카카오 톡스토어</p>
           </div>

           <!-- 스마트스토어 -->
           <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-slate-900 bg-slate-900/10 p-5 hover:border-slate-800 hover:bg-slate-900/20 transition duration-300">
              <div class="h-14 w-full flex items-center justify-center bg-slate-950/20 rounded-xl p-2">
                 <img src="<?=$default_path?>/img/designcoco/images/mall/naver.jpg" alt="스마트스토어" class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-100 transition" />
              </div>
              <p class="mt-3 text-xs font-bold text-slate-400 group-hover:text-white">스마트스토어</p>
           </div>

        </div>
     </div>

     <!-- [3] 하단 1:1 상담 안내 (고급스러운 카드 배너 리액토링) -->
     <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-slate-900 to-indigo-950/40 border border-slate-900 p-8 sm:p-12 flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="space-y-2 text-center md:text-left">
           <h4 class="font-display text-xl font-extrabold text-white">온라인 명품 비즈니스의 확실한 도약</h4>
           <p class="text-sm text-slate-400">그란도노의 대형 유통 채널 입점 경험을 귀사의 명품 브랜드 비즈니스에 연동하십시오.</p>
        </div>
        <a href="<?=$default_path?>/customer/consult.php" class="rounded-full bg-brand-600 px-6 py-3 text-sm font-semibold text-white hover:bg-brand-500 transition duration-200 shadow-lg shadow-brand-500/25">럭셔리 제휴 문의</a>
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