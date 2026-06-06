<?php
$page_title = "회사연혁";
$page_desc = "조이코리아의 연도별 설립과 성장 과정을 기록한 회사연혁 페이지입니다.";
include_once(dirname(__DIR__) . '/config.php');
include_once(dirname(__DIR__) . '/inc/header.php');
?>

<!-- 배경 Radiant 광원 효과 -->
<div class="absolute left-1/2 top-0 -z-10 h-[500px] w-full -translate-x-1/2 bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,rgba(92,117,255,0.04),rgba(255,255,255,0))] dark:bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,rgba(92,117,255,0.08),rgba(255,255,255,0))]"></div>

<!-- 상단 서브 히어로 섹션 [S]-->
<section class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pt-16 pb-8">
  <div class="border-b border-slate-200 dark:border-slate-900 pb-10">
    <span class="text-xs font-semibold uppercase tracking-wider text-brand-600 dark:text-brand-400">COMPANY</span>
    <h1 class="mt-2 font-display text-4xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-5xl">회사연혁</h1>
    <p class="mt-4 text-base text-slate-550 dark:text-slate-400">온라인 유통 및 E-commerce 전문 벤더로서 묵묵히 걸어온 조이코리아의 발자취입니다.</p>
  </div>
</section>
<!-- 상단 서브 히어로 섹션 [E]-->

<div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pb-24">
  <!-- 상단 세련된 탭 메뉴 [S] -->
  <div class="mb-12 border-b border-slate-200 dark:border-slate-900">
     <nav class="-mb-px flex space-x-8" aria-label="Tabs">
       <a href="company.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-355 hover:text-slate-800 dark:hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">회사소개</a>
       <a href="<?=$default_path?>/company/ceo.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-355 hover:text-slate-800 dark:hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">CEO 인사말</a>
       <a href="<?=$default_path?>/company/history.php" class="border-brand-500 text-brand-600 dark:text-brand-400 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-semibold transition" aria-current="page">회사연혁</a>
       <a href="<?=$default_path?>/company/map.php" class="border-transparent text-slate-500 dark:text-slate-400 hover:border-slate-355 hover:text-slate-800 dark:hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">오시는 길</a>
     </nav>
  </div>
  <!-- 상단 탭 메뉴 [E] -->

  <!-- 서브 컨텐츠 본문 (SaaS 타임라인 리액토링) [S]-->
  <div class="relative max-w-3xl mx-auto">
     <!-- 타임라인 중앙 수직 라인 -->
     <div class="absolute left-6 top-2 bottom-2 w-0.5 bg-gradient-to-b from-brand-600 via-indigo-600 to-slate-200 dark:to-slate-900"></div>
     
     <div class="space-y-12">

        <!-- [Group 1] 2018 ~ 2021 -->
        <div class="relative pl-16 space-y-8">
           <!-- 큰 연도 노드 -->
           <div class="absolute left-3.5 top-0.5 flex h-5 w-5 items-center justify-center rounded-full bg-slate-50 dark:bg-slate-950 ring-4 ring-brand-500">
              <div class="h-2 w-2 rounded-full bg-brand-500 dark:bg-brand-400"></div>
           </div>
           
           <div class="space-y-1">
              <h2 class="font-display text-2xl font-black text-slate-900 dark:text-white tracking-tight">2018 &mdash; 2021</h2>
              <p class="text-xs text-brand-650 dark:text-brand-400 font-semibold tracking-wider uppercase">유통망 확장 및 기업 도약기</p>
           </div>
           
           <!-- 연혁 카드 목록 -->
           <div class="space-y-6">
              
              <!-- 2021년 -->
              <div class="rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 space-y-4 hover:border-slate-300 dark:hover:border-slate-800 shadow-sm transition duration-200">
                 <div class="text-lg font-bold text-slate-900 dark:text-white font-display">2021년</div>
                 <ul class="space-y-2.5 text-sm text-slate-655 dark:text-slate-400">
                    <li class="flex items-start gap-3"><span class="text-brand-600 dark:text-brand-400 font-semibold flex-shrink-0">02월</span> <span>중소벤처기업부 MAINBiz(경영혁신형 중소기업) 인증기업 선정</span></li>
                 </ul>
              </div>

              <!-- 2020년 -->
              <div class="rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 space-y-4 hover:border-slate-300 dark:hover:border-slate-800 shadow-sm transition duration-200">
                 <div class="text-lg font-bold text-slate-900 dark:text-white font-display">2020년</div>
                 <ul class="space-y-2.5 text-sm text-slate-655 dark:text-slate-400">
                    <li class="flex items-start gap-3"><span class="text-brand-600 dark:text-brand-400 font-semibold flex-shrink-0">12월</span> <span>연간 총매출 91억 3천만원 달성</span></li>
                    <li class="flex items-start gap-3"><span class="text-brand-600 dark:text-brand-400 font-semibold flex-shrink-0">07월</span> <span>그란도노(Grandono) 현대백화점 공식 온라인몰 입점</span></li>
                    <li class="flex items-start gap-3"><span class="text-brand-600 dark:text-brand-400 font-semibold flex-shrink-0">05월</span> <span>신세계백화점 김해점 명품 유통망 입점</span></li>
                    <li class="flex items-start gap-3"><span class="text-brand-600 dark:text-brand-400 font-semibold flex-shrink-0">01월</span> <span>갤러리아 백화점 진주점/천안점 공식 입점</span></li>
                 </ul>
              </div>

              <!-- 2019년 -->
              <div class="rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 space-y-4 hover:border-slate-300 dark:hover:border-slate-800 shadow-sm transition duration-200">
                 <div class="text-lg font-bold text-slate-900 dark:text-white font-display">2019년</div>
                 <ul class="space-y-2.5 text-sm text-slate-655 dark:text-slate-400">
                    <li class="flex items-start gap-3"><span class="text-brand-600 dark:text-brand-400 font-semibold flex-shrink-0">12월</span> <span>연간 총매출 46억 5천만원 달성</span></li>
                    <li class="flex items-start gap-3"><span class="text-brand-600 dark:text-brand-400 font-semibold flex-shrink-0">07월</span> <span>그란도노 CJ온스타일(CJ몰) 공식 입점</span></li>
                    <li class="flex items-start gap-3"><span class="text-brand-600 dark:text-brand-400 font-semibold flex-shrink-0">05월</span> <span>그란도노 SSG.COM(신세계몰) 공식 입점</span></li>
                 </ul>
              </div>

              <!-- 2018년 -->
              <div class="rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 space-y-4 hover:border-slate-300 dark:hover:border-slate-800 shadow-sm transition duration-200">
                 <div class="text-lg font-bold text-slate-900 dark:text-white font-display">2018년</div>
                 <ul class="space-y-2.5 text-sm text-slate-655 dark:text-slate-400">
                    <li class="flex items-start gap-3"><span class="text-brand-600 dark:text-brand-400 font-semibold flex-shrink-0">12월</span> <span>연간 총매출 33억 5천만원 달성</span></li>
                    <li class="flex items-start gap-3"><span class="text-brand-600 dark:text-brand-400 font-semibold flex-shrink-0">08월</span> <span>그란도노 롯데온(롯데백화점몰) 및 AK몰 공식 입점</span></li>
                    <li class="flex items-start gap-3"><span class="text-brand-600 dark:text-brand-400 font-semibold flex-shrink-0">05월</span> <span>이태리 명품 브랜드 수입 유통(그란도노 명품사업) 개시</span></li>
                 </ul>
              </div>

           </div>
        </div>

        <!-- [Group 2] 2016 ~ 2017 -->
        <div class="relative pl-16 space-y-8">
           <!-- 큰 연도 노드 -->
           <div class="absolute left-3.5 top-0.5 flex h-5 w-5 items-center justify-center rounded-full bg-slate-50 dark:bg-slate-950 ring-4 ring-indigo-500">
              <div class="h-2 w-2 rounded-full bg-indigo-500 dark:bg-indigo-400"></div>
           </div>
           
           <div class="space-y-1">
              <h2 class="font-display text-2xl font-black text-slate-900 dark:text-white tracking-tight">2016 &mdash; 2017</h2>
              <p class="text-xs text-indigo-650 dark:text-indigo-400 font-semibold tracking-wider uppercase">이커머스 비즈니스 공식 벤더 정착기</p>
           </div>
           
           <!-- 연혁 카드 목록 -->
           <div class="space-y-6">
              
              <!-- 2017년 -->
              <div class="rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 space-y-4 hover:border-slate-300 dark:hover:border-slate-800 shadow-sm transition duration-200">
                 <div class="text-lg font-bold text-slate-900 dark:text-white font-display">2017년</div>
                 <ul class="space-y-2.5 text-sm text-slate-655 dark:text-slate-400">
                    <li class="flex items-start gap-3"><span class="text-indigo-600 dark:text-indigo-400 font-semibold flex-shrink-0">12월</span> <span>연간 총매출 31억 3천만원 달성</span></li>
                    <li class="flex items-start gap-3"><span class="text-indigo-600 dark:text-indigo-400 font-semibold flex-shrink-0">05월</span> <span>국내 대표 소형가전/주방/면도 브랜드 도루코(DORCO) 공식 온라인 벤더 지정</span></li>
                    <li class="flex items-start gap-3"><span class="text-indigo-600 dark:text-indigo-400 font-semibold flex-shrink-0">04월</span> <span>동원F&B 천지인 홍삼 공식 온라인 벤더 지정</span></li>
                 </ul>
              </div>

              <!-- 2016년 -->
              <div class="rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 space-y-4 hover:border-slate-300 dark:hover:border-slate-800 shadow-sm transition duration-200">
                 <div class="text-lg font-bold text-slate-900 dark:text-white font-display">2016년</div>
                 <ul class="space-y-2.5 text-sm text-slate-655 dark:text-slate-400">
                    <li class="flex items-start gap-3"><span class="text-indigo-600 dark:text-indigo-400 font-semibold flex-shrink-0">12월</span> <span>연간 총매출 37억 2천만원 달성</span></li>
                    <li class="flex items-start gap-3"><span class="text-indigo-600 dark:text-indigo-400 font-semibold flex-shrink-0">09월</span> <span>벨기에 친환경 쿡웨어 그린팬(GreenPan) 국내 온라인 독점 총판 계약 체결</span></li>
                 </ul>
              </div>

           </div>
        </div>

        <!-- [Group 3] 2014 ~ 2015 -->
        <div class="relative pl-16 space-y-8">
           <!-- 큰 연도 노드 -->
           <div class="absolute left-3.5 top-0.5 flex h-5 w-5 items-center justify-center rounded-full bg-slate-50 dark:bg-slate-950 ring-4 ring-slate-400 dark:ring-slate-700">
              <div class="h-2 w-2 rounded-full bg-slate-400 dark:bg-slate-500"></div>
           </div>
           
           <div class="space-y-1">
              <h2 class="font-display text-2xl font-black text-slate-900 dark:text-white tracking-tight">2014 &mdash; 2015</h2>
              <p class="text-xs text-slate-500 dark:text-slate-400 font-semibold tracking-wider uppercase">조이코리아 설립 및 태동기</p>
           </div>
           
           <!-- 연혁 카드 목록 -->
           <div class="space-y-6">
              
              <!-- 2015년 -->
              <div class="rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 space-y-4 hover:border-slate-300 dark:hover:border-slate-800 shadow-sm transition duration-200">
                 <div class="text-lg font-bold text-slate-900 dark:text-white font-display">2015년</div>
                 <ul class="space-y-2.5 text-sm text-slate-655 dark:text-slate-400">
                    <li class="flex items-start gap-3"><span class="text-slate-400 dark:text-slate-550 font-semibold flex-shrink-0">04월</span> <span>주식회사 조이코리아(JOYKOREA) 법인 전환 설립</span></li>
                 </ul>
              </div>

              <!-- 2014년 -->
              <div class="rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 space-y-4 hover:border-slate-300 dark:hover:border-slate-800 shadow-sm transition duration-200">
                 <div class="text-lg font-bold text-slate-900 dark:text-white font-display">2014년</div>
                 <ul class="space-y-2.5 text-sm text-slate-655 dark:text-slate-400">
                    <li class="flex items-start gap-3"><span class="text-slate-400 dark:text-slate-550 font-semibold flex-shrink-0">12월</span> <span>유아용품 대표 브랜드 보령메디앙스 공식 온라인 벤더 지정</span></li>
                    <li class="flex items-start gap-3"><span class="text-slate-400 dark:text-slate-550 font-semibold flex-shrink-0">10월</span> <span>이커머스 비즈니스 전문 조이코리아 개인사업자로 힘찬 출발</span></li>
                 </ul>
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