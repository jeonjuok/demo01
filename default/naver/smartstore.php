<?php
$page_title = "스마트스토어";
$page_desc = "네이버 스마트스토어 시장 분석 및 조이코리아만의 차별화된 입점/운영 대행 솔루션을 소개합니다.";
include_once(dirname(__DIR__) . '/config.php');
include_once(dirname(__DIR__) . '/inc/header.php');
?>

<!-- 배경 Radiant 광원 효과 -->
<div class="absolute left-1/2 top-0 -z-10 h-[500px] w-full -translate-x-1/2 bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,rgba(92,117,255,0.08),rgba(255,255,255,0))]"></div>

<!-- 상단 서브 히어로 섹션 [S]-->
<section class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pt-16 pb-8">
  <div class="border-b border-slate-200 dark:border-slate-900 pb-10">
    <span class="text-xs font-semibold uppercase tracking-wider text-emerald-600 dark:text-emerald-400">SMARTSTORE AGENCY</span>
    <h1 class="mt-2 font-display text-4xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-5xl">스마트스토어 에이전시</h1>
    <p class="mt-4 text-base text-slate-600 dark:text-slate-400">네이버 스마트스토어의 핵심 노하우를 제공하며 최상의 이커머스 브랜딩을 실현합니다.</p>
  </div>
</section>
<!-- 상단 서브 히어로 섹션 [E]-->

<div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pb-24">
  <!-- 상단 세련된 탭 메뉴 [S] -->
  <div class="mb-12 border-b border-slate-200 dark:border-slate-900">
     <nav class="-mb-px flex space-x-8" aria-label="Tabs">
       <a href="<?=$default_path?>/naver/smartstore.php" class="border-brand-600 dark:border-brand-500 text-brand-600 dark:text-brand-400 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-semibold transition">스마트스토어</a>
     </nav>
  </div>
  <!-- 상단 탭 메뉴 [E] -->

  <!-- 서브 컨텐츠 본문 [S]-->
  <div class="space-y-20">
     
     <!-- [1] 네이버 커머스 시장 현황 Stats 카드 -->
     <div class="grid grid-cols-1 gap-12 lg:grid-cols-12 items-center">
        <!-- 네이버 로고 데코 카드 -->
        <div class="lg:col-span-5 relative overflow-hidden rounded-3xl border border-emerald-200 dark:border-emerald-950/30 bg-emerald-50 dark:bg-emerald-950/10 p-8 flex flex-col justify-center items-center text-center h-64 sm:h-80 shadow-xl">
           <!-- 미세한 초록 그라데이션 광원 -->
           <div class="absolute inset-0 bg-gradient-to-tr from-emerald-500/10 via-transparent to-transparent"></div>
           <div class="relative space-y-4">
              <span class="text-xs font-semibold text-emerald-600 dark:text-emerald-400 uppercase tracking-widest">DOMESTIC NO.1 MARKET</span>
              <h3 class="font-display text-3xl font-black text-slate-900 dark:text-white leading-tight">네이버 스마트스토어</h3>
              <p class="text-sm text-emerald-800/80 dark:text-emerald-100/60 leading-relaxed max-w-xs">국내 최대 유통 거래액을 자랑하는 독보적 커머스 플랫폼</p>
           </div>
        </div>
        
        <!-- 네이버 분석 데이터 요약 -->
        <div class="lg:col-span-7 space-y-6">
           <h3 class="font-display text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white leading-tight">네이버! 국내 최대 이커머스 리더</h3>
           <p class="text-sm sm:text-base text-slate-600 dark:text-slate-400 leading-relaxed">
              네이버는 한국 이커머스 생태계를 주도하는 명실상부한 1위 리더로서, 지난해 **연간 거래액 28조 원**을 돌파하며 압도적인 유통 경쟁력을 입증했습니다. 
              현재 전국적으로 개설 및 활성화된 스마트스토어 수는 **42만 개**를 넘어서며, 연간 스마트스토어를 통해서만 유통되는 누적 거래 대금이 17조 원을 달성할 만큼 최고의 플랫폼 가치를 자랑합니다.
           </p>
           
           <!-- 통계 그리드 -->
           <div class="grid grid-cols-3 gap-4 border-t border-slate-200 dark:border-slate-900 pt-6">
              <div>
                 <span class="block text-2xl font-extrabold text-slate-900 dark:text-white font-display">28조+</span>
                 <span class="mt-1 block text-xs text-slate-500 font-medium">연간 총 거래액</span>
              </div>
              <div>
                 <span class="block text-2xl font-extrabold text-slate-900 dark:text-white font-display">42만+</span>
                 <span class="mt-1 block text-xs text-slate-500 font-medium">개설 스토어 수</span>
              </div>
              <div>
                 <span class="block text-2xl font-extrabold text-brand-600 dark:text-brand-400 font-display">25조+</span>
                 <span class="mt-1 block text-xs text-slate-500 font-medium">네이버 미래 목표액</span>
              </div>
           </div>
        </div>
     </div>

     <!-- [2] 브랜드사 스마트스토어 진출 필요성 (4열 카드 리뉴얼) -->
     <div class="space-y-8">
        <div class="text-center space-y-2">
           <h4 class="font-display text-2xl font-extrabold text-slate-900 dark:text-white">브랜드사는 왜 스마트스토어를 운영해야 할까요?</h4>
           <p class="text-sm text-slate-600 dark:text-slate-400">네이버만의 강력한 마케팅 리소스와 노출 환경을 통해 자사몰 대비 획기적인 성장 기회를 가집니다.</p>
        </div>
        
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
           
           <!-- 특장점 1: 노출구좌 -->
           <div class="rounded-3xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-8 space-y-4 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50/50 dark:hover:bg-slate-900/20 shadow-sm hover:shadow-2xl transition duration-300 flex gap-5 items-start">
              <div class="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-500/10 text-emerald-600 dark:text-emerald-400">
                 <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.042 9.152c.582.448 1.148.89 1.676 1.345m-1.676-1.345c-.528-.447-1.094-.89-1.676-1.345M15.042 9.152c.582-.447 1.148-.89 1.676-1.345M15.042 9.152c-.528.448-1.094.89-1.676 1.345M3 13.5h18M5.25 13.5a2.25 2.25 0 012.25-2.25h9a2.25 2.25 0 012.25 2.25M5.25 13.5v6.75a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-6.75M9 9h.008v.008H9V9z" /></svg>
              </div>
              <div class="space-y-2">
                 <h5 class="text-lg font-bold text-slate-900 dark:text-white leading-none">1. 네이버만의 확실한 무료 노출 구좌</h5>
                 <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">네이버 이커머스는 기획전, 럭키투데이, 타임특가 등 입점 스토어를 위한 다양한 무료 노출 구좌를 지원합니다. 특히 단시간에 트래픽을 폭발시키는 타임특가는 최고의 무료 마케팅 무기입니다.</p>
              </div>
           </div>

           <!-- 특장점 2: 브랜드데이 -->
           <div class="rounded-3xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-8 space-y-4 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50/50 dark:hover:bg-slate-900/20 shadow-sm hover:shadow-2xl transition duration-300 flex gap-5 items-start">
              <div class="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-brand-500/10 text-brand-600 dark:text-brand-400">
                 <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499c-.105-.347-.492-.546-.838-.44l-2.24.69a.75.75 0 00-.513.71v3.29a3.75 3.75 0 00.75 2.25L10.5 12h3l1.863-2.001a3.75 3.75 0 00.75-2.25V4.459a.75.75 0 00-.513-.71l-2.24-.69a.48.48 0 00-.838.44L13.5 6h-2l-.02-2.501zM4.5 10.5h15M6.75 10.5v9.75a2.25 2.25 0 002.25 2.25h6a2.25 2.25 0 002.25-2.25v-9.75" /></svg>
              </div>
              <div class="space-y-2">
                 <h5 class="text-lg font-bold text-slate-900 dark:text-white leading-none">2. 매출 스파이크를 만드는 브랜드데이</h5>
                 <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">자체 브랜드를 보유한 정식 본사만 참여 자격을 얻는 브랜드데이 프로모션은 단 하루 만에 수억 원대의 매출 스파이크를 창출합니다. 최상단 노출 및 네이버 커머스 실무 MD들과의 원활한 사전 협력이 관건입니다.</p>
              </div>
           </div>

           <!-- 특장점 3: 라이브커머스 -->
           <div class="rounded-3xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-8 space-y-4 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50/50 dark:hover:bg-slate-900/20 shadow-sm hover:shadow-2xl transition duration-300 flex gap-5 items-start">
              <div class="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-violet-500/10 text-violet-600 dark:text-violet-400">
                 <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25zM15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
              </div>
              <div class="space-y-2">
                 <h5 class="text-lg font-bold text-slate-900 dark:text-white leading-none">3. 스마트스토어 쇼핑라이브 (Live Commerce)</h5>
                 <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">스토어가 파워등급 이상 도달하면 네이버 자체 쇼핑라이브를 송출할 수 있습니다. 수만 명의 고객과 실시간 채팅으로 양방향 소통하며 소구 포인트를 설명해 구매 전환 속도를 극대화합니다.</p>
              </div>
           </div>

           <!-- 특장점 4: 검색 노출 최적화 -->
           <div class="rounded-3xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-8 space-y-4 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50/50 dark:hover:bg-slate-900/20 shadow-sm hover:shadow-2xl transition duration-300 flex gap-5 items-start">
              <div class="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-pink-500/10 text-pink-600 dark:text-pink-400">
                 <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.602 10.602z" /></svg>
              </div>
              <div class="space-y-2">
                 <h5 class="text-lg font-bold text-slate-900 dark:text-white leading-none">4. 네이버 쇼핑 탭 검색 랭킹 우위 선점</h5>
                 <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">네이버 검색 엔진은 자사 독립몰 대비 스마트스토어를 훨씬 상위 영역에 매핑합니다. 판매 점수 및 리뷰 지수가 우적되면 별도의 키워드 광고비 없이도 카테고리 1페이지 노출을 선점할 수 있습니다.</p>
              </div>
           </div>

        </div>
     </div>

     <!-- [3] 조이코리아만의 3가지 스마트스토어 핵심 강점 -->
     <div class="space-y-8">
        <div class="text-center space-y-2">
           <h4 class="font-display text-2xl font-extrabold text-slate-900 dark:text-white">그렇다면 정답은 <span class="text-brand-600 dark:text-brand-400">조이코리아</span></h4>
           <p class="text-sm text-slate-600 dark:text-slate-400">스마트스토어는 운영사의 등급, 마케팅 능력, 그리고 MD 네트워크에 따라 완전히 다른 매출 결과를 만듭니다.</p>
        </div>
        
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
           
           <!-- 강점 1 -->
           <div class="rounded-3xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-8 space-y-4 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50/50 dark:hover:bg-slate-900/20 shadow-sm hover:shadow-2xl transition duration-300">
              <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-500/10 text-brand-600 dark:text-brand-400">
                 <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>
              </div>
              <h5 class="text-base font-bold text-slate-900 dark:text-white">빅파워&middot;프리미엄 등급 전담 마크</h5>
              <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">스토어 평균 등급이 높을수록 네이버 플랫폼에서 더 강력한 노출 혜택과 프로모션 자격을 가집니다. 조이코리아는 빅파워 이상의 최상위 스토어들을 전담 운영하고 있습니다.</p>
           </div>

           <!-- 강점 2 -->
           <div class="rounded-3xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-8 space-y-4 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50/50 dark:hover:bg-slate-900/20 shadow-sm hover:shadow-2xl transition duration-300">
              <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-500/10 text-indigo-650 dark:text-indigo-400">
                 <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
              </div>
              <h5 class="text-base font-bold text-slate-900 dark:text-white">네이버 커머스 MD 파트너십 채널 소통</h5>
              <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">조이코리아의 실무 전담 매니저들은 네이버 카테고리 담당 MD들과 매주 기획전 배정 및 특가 편성을 정기적으로 논의하여 타사 대비 유리한 프로모션 기회를 선점합니다.</p>
           </div>

           <!-- 강점 3 -->
           <div class="rounded-3xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-8 space-y-4 hover:border-slate-300 dark:hover:border-slate-800 hover:bg-slate-50/50 dark:hover:bg-slate-900/20 shadow-sm hover:shadow-2xl transition duration-300">
              <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-violet-500/10 text-violet-600 dark:text-violet-400">
                 <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
              </div>
              <h5 class="text-base font-bold text-slate-900 dark:text-white">리뷰 마케팅 & 데이터 그로스</h5>
              <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">스토어 유입 고객의 구매 허들을 낮추기 위해 검색 상위 노출에 기여하는 정밀 리뷰 락 마케팅 및 전환율 기반 그로스 해킹 지표 피드컴을 실시간 제공합니다.</p>
           </div>

        </div>
     </div>

     <!-- [4] 스마트스토어 운영 PROCESS (6단계 모던 Step 타임라인으로 혁신) -->
     <div class="space-y-8">
        <div class="border-b border-slate-200 dark:border-slate-900 pb-3">
          <h4 class="font-display text-xl font-bold text-slate-900 dark:text-white">스마트스토어 운영 PROCESS</h4>
        </div>
        
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-6 relative">
           
           <!-- Step 1 -->
           <div class="rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 space-y-3 relative hover:border-slate-300 dark:hover:border-slate-800 shadow-sm hover:shadow-2xl transition duration-300">
              <div class="absolute -top-3 -left-3 h-8 w-8 rounded-full bg-emerald-600 text-white font-display font-extrabold text-sm flex items-center justify-center shadow">1</div>
              <h5 class="text-sm font-bold text-slate-900 dark:text-white pt-2">스토어 정밀 진단</h5>
              <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">기존 스토어 진단, 카테고리 검색 반응 분석 및 타사 벤치마킹</p>
           </div>

           <!-- Step 2 -->
           <div class="rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 space-y-3 relative hover:border-slate-300 dark:hover:border-slate-800 shadow-sm hover:shadow-2xl transition duration-300">
              <div class="absolute -top-3 -left-3 h-8 w-8 rounded-full bg-emerald-600 text-white font-display font-extrabold text-sm flex items-center justify-center shadow">2</div>
              <h5 class="text-sm font-bold text-slate-900 dark:text-white pt-2">콘텐츠 기획 최적화</h5>
              <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">대표 썸네일 개선, 모바일 최적화 상세페이지 제작 및 SEO 키워드 파싱</p>
           </div>

           <!-- Step 3 -->
           <div class="rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 space-y-3 relative hover:border-slate-300 dark:hover:border-slate-800 shadow-sm hover:shadow-2xl transition duration-300">
              <div class="absolute -top-3 -left-3 h-8 w-8 rounded-full bg-emerald-600 text-white font-display font-extrabold text-sm flex items-center justify-center shadow">3</div>
              <h5 class="text-sm font-bold text-slate-900 dark:text-white pt-2">네이버 노출 영업</h5>
              <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">스마트스토어 럭키투데이, 쇼핑 기획전 제안 및 타임특가 구좌 노출</p>
           </div>

           <!-- Step 4 -->
           <div class="rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 space-y-3 relative hover:border-slate-300 dark:hover:border-slate-800 shadow-sm hover:shadow-2xl transition duration-300">
              <div class="absolute -top-3 -left-3 h-8 w-8 rounded-full bg-emerald-600 text-white font-display font-extrabold text-sm flex items-center justify-center shadow">4</div>
              <h5 class="text-sm font-bold text-slate-900 dark:text-white pt-2">검색 쇼핑광고 집행</h5>
              <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">쇼핑 검색 광고 최적화 세팅, 파워링크 및 맞춤 타겟 리타겟팅 광고</p>
           </div>

           <!-- Step 5 -->
           <div class="rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 space-y-3 relative hover:border-slate-300 dark:hover:border-slate-800 shadow-sm hover:shadow-2xl transition duration-300">
              <div class="absolute -top-3 -left-3 h-8 w-8 rounded-full bg-emerald-600 text-white font-display font-extrabold text-sm flex items-center justify-center shadow">5</div>
              <h5 class="text-sm font-bold text-slate-900 dark:text-white pt-2">물류 및 실시간 CS</h5>
              <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">실시간 자동 발주 연동, 당일 배송 지시 및 평점 관리 전문 CS 마크</p>
           </div>

           <!-- Step 6 -->
           <div class="rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 space-y-3 relative hover:border-slate-300 dark:hover:border-slate-800 shadow-sm hover:shadow-2xl transition duration-300">
              <div class="absolute -top-3 -left-3 h-8 w-8 rounded-full bg-emerald-600 text-white font-display font-extrabold text-sm flex items-center justify-center shadow">6</div>
              <h5 class="text-sm font-bold text-slate-900 dark:text-white pt-2">데이터 피드백 성과</h5>
              <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">월간 판매 추이 및 유입 데이터 분석을 거친 스토어 확장 솔루션 리포팅</p>
           </div>

        </div>
     </div>

     <!-- [5] 하단 1:1 상담 안내 (고급스러운 카드 배너 리액토링) -->
     <div class="relative overflow-hidden rounded-3xl bg-slate-100 dark:bg-slate-900/40 border border-slate-200 dark:border-slate-900 p-8 sm:p-12 flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="space-y-2 text-center md:text-left">
           <h4 class="font-display text-xl font-extrabold text-slate-900 dark:text-white">네이버 스마트스토어의 성장을 보증해 드리겠습니다.</h4>
           <p class="text-sm text-slate-600 dark:text-slate-400">스토어 입점 가능성 진단부터 프로모션 매출 계획안을 실시간 전문가 진단으로 상담해 드립니다.</p>
        </div>
        <a href="<?=$default_path?>/customer/consult.php" class="rounded-full bg-emerald-600 px-6 py-3 text-sm font-semibold text-white hover:bg-emerald-500 transition duration-200 shadow-lg shadow-emerald-500/25">스토어 무료 진단 요청</a>
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