<?php
$page_title = "온라인 판매대행 - 사업소개";
$page_desc = "다년간의 노하우를 바탕으로 한 조이코리아의 체계적인 온라인 판매대행 솔루션을 안내합니다.";
include_once(dirname(__DIR__) . '/config.php');
include_once(dirname(__DIR__) . '/inc/header.php');
?>

<!-- 배경 Radiant 광원 효과 -->
<div class="absolute left-1/2 top-0 -z-10 h-[500px] w-full -translate-x-1/2 bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,rgba(92,117,255,0.08),rgba(255,255,255,0))]"></div>

<!-- 상단 서브 히어로 섹션 [S]-->
<section class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pt-16 pb-8">
  <div class="border-b border-slate-900 pb-10">
    <span class="text-xs font-semibold uppercase tracking-wider text-brand-400">BUSINESS</span>
    <h1 class="mt-2 font-display text-4xl font-extrabold tracking-tight text-white sm:text-5xl">온라인 판매대행</h1>
    <p class="mt-4 text-base text-slate-400">최고의 전문성과 견고한 신뢰를 바탕으로 파트너사와 함께 이커머스 매출을 극대화합니다.</p>
  </div>
</section>
<!-- 상단 서브 히어로 섹션 [E]-->

<div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pb-24">
  <!-- 상단 세련된 탭 메뉴 [S] -->
  <div class="mb-12 border-b border-slate-900">
     <nav class="-mb-px flex space-x-8" aria-label="Tabs">
       <a href="<?=$default_path?>/business/business1.php" class="border-brand-500 text-brand-400 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-semibold transition">사업소개</a>
       <a href="<?=$default_path?>/business/costomer.php" class="border-transparent text-slate-400 hover:border-slate-800 hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">고객사</a>
       <a href="<?=$default_path?>/business/business.php" class="border-transparent text-slate-400 hover:border-slate-800 hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">운영쇼핑몰</a>
       <a href="<?=$default_path?>/business/partner.php" class="border-transparent text-slate-400 hover:border-slate-800 hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">입점제휴몰</a>
     </nav>
  </div>
  <!-- 상단 탭 메뉴 [E] -->

  <!-- 서브 컨텐츠 본문 [S]-->
  <div class="space-y-20">
     
     <!-- [1] 상단 배너 이미지 카드 리팩토링 -->
     <div class="relative overflow-hidden rounded-3xl border border-slate-900 bg-slate-950 h-64 sm:h-80 shadow-xl flex items-center px-8 sm:px-16">
        <img src="<?=$default_path?>/img/designcoco/images/page/business_01.jpg" alt="Business Overview" class="absolute inset-0 h-full w-full object-cover opacity-30" />
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/80 to-transparent"></div>
        <div class="relative max-w-xl space-y-4">
           <h3 class="font-display text-2xl sm:text-3xl font-extrabold text-white tracking-tight leading-snug">E-Commerce BPO 전문 벤더</h3>
           <p class="text-sm sm:text-base text-slate-300 leading-relaxed">조이코리아는 복잡한 온라인 유통 구조를 일원화하고 최적의 채널 MD 영업망을 동원하여 파트너사의 주도적 성장을 성공시킵니다.</p>
        </div>
     </div>

     <!-- [2] 조이코리아 특장점 (4열 세련된 카드 그리드로 리뉴얼) -->
     <div class="space-y-8">
        <div class="border-b border-slate-900 pb-3">
          <h4 class="font-display text-xl font-bold text-white">조이코리아 특장점</h4>
        </div>
        
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
           
           <!-- 특장점 1 -->
           <div class="rounded-3xl border border-slate-900 bg-slate-900/10 p-8 space-y-4 hover:border-slate-800 transition duration-300 flex gap-5 items-start">
              <div class="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-brand-500/10 text-brand-400">
                 <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.109A11.386 11.386 0 0110.089 20M3.12 17.075a.75.75 0 00-.012.915 8.948 8.948 0 003.5 2.812.75.75 0 001.052-.24l1.5-2.5a.75.75 0 00-.12-.916l-1.5-1.5a.75.75 0 00-.916-.12l-2.5 1.5zm16.5-5.25a6 6 0 00-6-6M13.5 6a6 6 0 00-6-6" /></svg>
              </div>
              <div class="space-y-2">
                 <h5 class="text-lg font-bold text-white leading-none">축적된 노하우의 판매 전문가 그룹</h5>
                 <p class="text-sm text-slate-400 leading-relaxed">단순한 상품 대리 등록을 넘어서, 풍부한 카테고리별 유통 데이터 분석 및 현직 메이저 채널 MD들과의 탄탄한 영업망을 통해 즉각적인 매출 붐을 형성합니다.</p>
              </div>
           </div>

           <!-- 특장점 2 -->
           <div class="rounded-3xl border border-slate-900 bg-slate-900/10 p-8 space-y-4 hover:border-slate-800 transition duration-300 flex gap-5 items-start">
              <div class="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-500/10 text-indigo-400">
                 <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" /><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" /></svg>
              </div>
              <div class="space-y-2">
                 <h5 class="text-lg font-bold text-white leading-none">데이터 분석을 통한 체계적인 기획</h5>
                 <p class="text-sm text-slate-400 leading-relaxed">키워드 조회수, 검색 반응, 트렌드 사이클 분석을 통해 타겟 마케팅 셀링 포인트를 발굴하고, 최적화된 기획전 제안과 상세페이지 레이아웃을 제공합니다.</p>
              </div>
           </div>

           <!-- 특장점 3 -->
           <div class="rounded-3xl border border-slate-900 bg-slate-900/10 p-8 space-y-4 hover:border-slate-800 transition duration-300 flex gap-5 items-start">
              <div class="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-violet-500/10 text-violet-400">
                 <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
              </div>
              <div class="space-y-2">
                 <h5 class="text-lg font-bold text-white leading-none">원스톱 올인원 솔루션 (One-Stop Solution)</h5>
                 <p class="text-sm text-slate-400 leading-relaxed">자체 연동 ERP 및 주문 관리 시스템을 활용해 대량 상품 등록, 주문 연동, 재고 실시간 모니터링, 고객 CS 대응, 정산 분석까지 모든 단계를 통합 대행합니다.</p>
              </div>
           </div>

           <!-- 특장점 4 -->
           <div class="rounded-3xl border border-slate-900 bg-slate-900/10 p-8 space-y-4 hover:border-slate-800 transition duration-300 flex gap-5 items-start">
              <div class="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-500/10 text-emerald-400">
                 <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5h16.5m-16.5 3h16.5M3.75 12h16.5m-16.5 3h16.5M3 19.5h16.5M7.5 12v4.875c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V12M16.5 9v4.875c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V9" /></svg>
              </div>
              <div class="space-y-2">
                 <h5 class="text-lg font-bold text-white leading-none">신뢰할 수 있는 튼튼한 자본 구조</h5>
                 <p class="text-sm text-slate-400 leading-relaxed">조이코리아는 연 90억 원대 이상의 우량한 현금 흐름 및 자본 구조를 갖추고 있어 정산 연체나 예치금 문제 없이 파트너사와 신뢰 높은 결제를 보장합니다.</p>
              </div>
           </div>

        </div>
     </div>

     <!-- [3] Business Flow (투박한 가로 이미지 나열을 반응형 모던 Step 타임라인으로 혁신) -->
     <div class="space-y-8">
        <div class="border-b border-slate-900 pb-3">
          <h4 class="font-display text-xl font-bold text-white">Business Flow</h4>
        </div>
        
        <!-- Step 컴포넌트 -->
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-6 relative">
           
           <!-- Step 1 -->
           <div class="rounded-2xl border border-slate-900 bg-slate-900/10 p-6 space-y-3 relative">
              <div class="absolute -top-3 -left-3 h-8 w-8 rounded-full bg-brand-600 text-white font-display font-extrabold text-sm flex items-center justify-center shadow">1</div>
              <h5 class="text-sm font-bold text-white pt-2">상품 및 기초 분석</h5>
              <p class="text-xs text-slate-400 leading-relaxed">제품 경쟁력 분석, 온라인 시장 타당성 검토 및 마진율 시뮬레이션</p>
           </div>

           <!-- Step 2 -->
           <div class="rounded-2xl border border-slate-900 bg-slate-900/10 p-6 space-y-3 relative">
              <div class="absolute -top-3 -left-3 h-8 w-8 rounded-full bg-brand-600 text-white font-display font-extrabold text-sm flex items-center justify-center shadow">2</div>
              <h5 class="text-sm font-bold text-white pt-2">판매 전략 수립</h5>
              <p class="text-xs text-slate-400 leading-relaxed">채널 입점 기획, 키워드 추출, 상세 콘텐츠 기획 및 마케팅 믹스 도출</p>
           </div>

           <!-- Step 3 -->
           <div class="rounded-2xl border border-slate-900 bg-slate-900/10 p-6 space-y-3 relative">
              <div class="absolute -top-3 -left-3 h-8 w-8 rounded-full bg-brand-600 text-white font-display font-extrabold text-sm flex items-center justify-center shadow">3</div>
              <h5 class="text-sm font-bold text-white pt-2">상품 입점 및 노출</h5>
              <p class="text-xs text-slate-400 leading-relaxed">오픈마켓 및 종합몰 상품 등록, 가격 관리 및 메인 딜 영업 개시</p>
           </div>

           <!-- Step 4 -->
           <div class="rounded-2xl border border-slate-900 bg-slate-900/10 p-6 space-y-3 relative">
              <div class="absolute -top-3 -left-3 h-8 w-8 rounded-full bg-brand-600 text-white font-display font-extrabold text-sm flex items-center justify-center shadow">4</div>
              <h5 class="text-sm font-bold text-white pt-2">프로모션 및 마케팅</h5>
              <p class="text-xs text-slate-400 leading-relaxed">네이버 파워링크, 광고 집행, 기획전 배너 배포 및 트래픽 유도</p>
           </div>

           <!-- Step 5 -->
           <div class="rounded-2xl border border-slate-900 bg-slate-900/10 p-6 space-y-3 relative">
              <div class="absolute -top-3 -left-3 h-8 w-8 rounded-full bg-brand-600 text-white font-display font-extrabold text-sm flex items-center justify-center shadow">5</div>
              <h5 class="text-sm font-bold text-white pt-2">주문 및 풀필먼트</h5>
              <p class="text-xs text-slate-400 leading-relaxed">실시간 주문 연동, 하남 물류센터 안전 배송 지시 및 CS 통합 전담</p>
           </div>

           <!-- Step 6 -->
           <div class="rounded-2xl border border-slate-900 bg-slate-900/10 p-6 space-y-3 relative">
              <div class="absolute -top-3 -left-3 h-8 w-8 rounded-full bg-brand-600 text-white font-display font-extrabold text-sm flex items-center justify-center shadow">6</div>
              <h5 class="text-sm font-bold text-white pt-2">정산 및 성과 리포트</h5>
              <p class="text-xs text-slate-400 leading-relaxed">매월 투명한 판매 성과 보고, 실적 피드백 및 고도화 전략 수립</p>
           </div>

        </div>
     </div>

     <!-- [4] 하단 1:1 상담 연결 카드 -->
     <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-slate-900 to-indigo-950/40 border border-slate-900 p-8 sm:p-12 flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="space-y-2 text-center md:text-left">
           <h4 class="font-display text-xl font-extrabold text-white">온라인 판매 대행에 대해 궁금한 점이 있으십니까?</h4>
           <p class="text-sm text-slate-400">조이코리아의 이커머스 컨설턴트 그룹이 입점 가능 여부 및 마진 견적을 실시간으로 답변해 드립니다.</p>
        </div>
        <a href="<?=$default_path?>/customer/consult.php" class="rounded-full bg-brand-600 px-6 py-3 text-sm font-semibold text-white hover:bg-brand-500 transition duration-200 shadow-lg shadow-brand-500/25">온라인 무료 진단 신청</a>
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