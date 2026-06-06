<?php
include_once(__DIR__ . '/config.php');
include_once(__DIR__ . '/inc/header.php');
?>

<!-- 메인 컨텐츠 [S]-->
<main id="contents" class="relative flex-grow overflow-hidden bg-slate-50 dark:bg-slate-950 transition-colors duration-250">
  
  <!-- 배경 Radiant 광원 효과 (Gradient Glow Effect) -->
  <div class="absolute left-1/2 top-0 -z-10 h-[600px] w-full -translate-x-1/2 bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,rgba(92,117,255,0.06),rgba(255,255,255,0))] dark:bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,rgba(92,117,255,0.12),rgba(255,255,255,0))]"></div>
  <div class="absolute right-0 top-[20%] -z-10 h-[400px] w-[400px] rounded-full bg-brand-600/5 blur-[120px]"></div>
  <div class="absolute left-0 top-[60%] -z-10 h-[400px] w-[400px] rounded-full bg-indigo-600/5 blur-[120px]"></div>

  <!-- [1] 메인 슬라이더 (Alpine.js 기반 초경량 모던 슬라이더) [S]-->
  <section class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 py-10 md:py-20" x-data="{ activeSlide: 0, slides: [
    { title: '디지털 커머스 에이전시', desc: '귀사의 전자상거래 이젠 조이코리아에게 맡기세요.', link: '<?=$default_path?>/company/company.php', bg: 'bg-gradient-to-tr from-brand-950/80 to-slate-900/80' },
    { title: '온라인 판매대행 선두주자', desc: '물류부터 판매, CS까지 올인원 대행 서비스를 제공합니다.', link: '<?=$default_path?>/business/business1.php', bg: 'bg-gradient-to-tr from-indigo-950/80 to-slate-900/80' },
    { title: '이탈리아 명품 유통망 파트너', desc: '전통 있는 이탈리아 파트너사 제휴로 고품격 명품을 유통합니다.', link: '<?=$default_path?>/luxury/business1.php', bg: 'bg-gradient-to-tr from-slate-950/80 to-slate-900/80' }
  ] }" x-init="setInterval(() => { activeSlide = (activeSlide + 1) % slides.length }, 6000)">
    
    <div class="relative h-[420px] sm:h-[480px] w-full overflow-hidden rounded-3xl border border-slate-200 dark:border-slate-900 bg-white/70 dark:bg-slate-900/30 backdrop-blur-sm shadow-2xl">
      <!-- 슬라이드 루프 -->
      <template x-for="(slide, index) in slides" :key="index">
        <div class="absolute inset-0 flex flex-col justify-center px-8 sm:px-16 md:px-24 transition-all duration-1000 transform"
             :class="activeSlide === index ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-8 pointer-events-none'"
             x-show="activeSlide === index"
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 translate-x-8"
             x-transition:enter-end="opacity-100 translate-x-0">
          
          <div class="max-w-2xl space-y-6">
            <span class="inline-flex items-center rounded-full bg-brand-500/10 px-3 py-1 text-xs font-semibold leading-5 text-brand-650 dark:text-brand-400 ring-1 ring-inset ring-brand-500/20">NEW BUSINESS MODEL</span>
            <h2 class="font-display text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight text-slate-900 dark:text-white leading-tight" x-text="slide.title"></h2>
            <p class="text-base sm:text-lg text-slate-600 dark:text-slate-400" x-text="slide.desc"></p>
            <div class="pt-4">
              <a :href="slide.link" class="inline-flex items-center gap-2 rounded-full bg-slate-900 text-white hover:bg-slate-800 dark:bg-white dark:text-slate-950 dark:hover:bg-slate-100 transition duration-200 shadow-md">
                바로가기 
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </template>

      <!-- 인디케이터 도트 -->
      <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2.5 z-10">
        <template x-for="(slide, index) in slides" :key="index">
          <button @click="activeSlide = index" class="h-2 rounded-full transition-all duration-350"
                  :class="activeSlide === index ? 'w-8 bg-brand-500' : 'w-2 bg-slate-300 dark:bg-slate-700 hover:bg-slate-450 dark:hover:bg-slate-500'"></button>
        </template>
      </div>
    </div>
  </section>
  <!-- 메인 슬라이더 [E]-->

  <!-- [2] 서비스 영역 (3열 메인 카드 그리드) [S]-->
  <section id="our-service" class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 py-16">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
      
      <!-- Card 1: INTRODUCE -->
      <a href="<?=$default_path?>/company/company.php" class="group relative flex flex-col justify-between rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/20 p-8 hover:-translate-y-1 hover:border-slate-350 dark:hover:border-slate-800 hover:bg-slate-100/50 dark:hover:bg-slate-900/40 hover:shadow-2xl hover:shadow-brand-500/5 transition duration-300">
        <div class="space-y-4">
          <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-brand-500/10 text-brand-600 dark:text-brand-400 group-hover:bg-brand-500 group-hover:text-white transition duration-300">
            <!-- Heroicon: Building -->
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h18v3H3V3z" />
            </svg>
          </div>
          <h3 class="font-display text-xl font-bold text-slate-900 dark:text-white">INTRODUCE</h3>
          <p class="text-sm leading-relaxed text-slate-500 dark:text-slate-400">온라인판매/전자상거래의 기준을 세우는 조이코리아의 경영 철학과 기업 가치를 안내합니다.</p>
        </div>
        <div class="mt-8 flex items-center text-xs font-semibold text-brand-650 dark:text-brand-400 group-hover:text-brand-500 dark:group-hover:text-brand-300 gap-1">
          자세히 보기 <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
        </div>
      </a>

      <!-- Card 2: BUSINESS -->
      <a href="<?=$default_path?>/business/business1.php" class="group relative flex flex-col justify-between rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/20 p-8 hover:-translate-y-1 hover:border-slate-350 dark:hover:border-slate-800 hover:bg-slate-100/50 dark:hover:bg-slate-900/40 hover:shadow-2xl hover:shadow-brand-500/5 transition duration-300">
        <div class="space-y-4">
          <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 group-hover:bg-indigo-500 group-hover:text-white transition duration-300">
            <!-- Heroicon: ChartBar -->
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
            </svg>
          </div>
          <h3 class="font-display text-xl font-bold text-slate-900 dark:text-white">BUSINESS</h3>
          <p class="text-sm leading-relaxed text-slate-500 dark:text-slate-400">다년간 축적된 압도적인 판매 노하우를 기반으로 최적의 유통 채널 및 공식 판매를 대행합니다.</p>
        </div>
        <div class="mt-8 flex items-center text-xs font-semibold text-indigo-650 dark:text-indigo-400 group-hover:text-indigo-500 dark:group-hover:text-indigo-300 gap-1">
          자세히 보기 <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
        </div>
      </a>

      <!-- Card 3: LUXURY GOODS -->
      <a href="<?=$default_path?>/luxury/business1.php" class="group relative flex flex-col justify-between rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/20 p-8 hover:-translate-y-1 hover:border-slate-350 dark:hover:border-slate-800 hover:bg-slate-100/50 dark:hover:bg-slate-900/40 hover:shadow-2xl hover:shadow-brand-500/5 transition duration-300">
        <div class="space-y-4">
          <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-violet-500/10 text-violet-600 dark:text-violet-400 group-hover:bg-violet-500 group-hover:text-white transition duration-300">
            <!-- Heroicon: Briefcase -->
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v3.85c0 1.05-.78 1.95-1.83 1.95H5.58c-1.05 0-1.83-.9-1.83-1.95v-3.85m16.5 0c.23-.97-.24-1.95-1.12-2.3L15.34 9.15c-.45-.18-.94-.27-1.43-.27h-3.82c-.49 0-.98.09-1.43.27l-3.79 1.7c-.88.35-1.35 1.33-1.12 2.3m16.5 0a2.25 2.25 0 01-2.25 2.25h-12a2.25 2.25 0 01-2.25-2.25m9-6.375V4.5m0 0V3m0 1.5H9a1.5 1.5 0 00-1.5 1.5v.75m7.5-3H15a1.5 1.5 0 011.5 1.5v.75" />
            </svg>
          </div>
          <h3 class="font-display text-xl font-bold text-slate-900 dark:text-white">LUXURY GOODS</h3>
          <p class="text-sm leading-relaxed text-slate-500 dark:text-slate-400">70년 역사의 이탈리아 글로벌 명품 유통 파트너사와 국내 독점적인 비즈니스 직배송 인프라를 구축했습니다.</p>
        </div>
        <div class="mt-8 flex items-center text-xs font-semibold text-violet-650 dark:text-violet-400 group-hover:text-violet-500 dark:group-hover:text-violet-300 gap-1">
          자세히 보기 <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
        </div>
      </a>

    </div>
  </section>
  <!-- 서비스 영역 [E]-->

  <!-- [3] What we do 영역 (프리미엄 SaaS 마케팅 레이아웃) [S]-->
  <section id="what-we-do" class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 py-16 border-t border-slate-200 dark:border-slate-900">
    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
      <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white tracking-tight">JOYKOREA Business Model</h2>
      <p class="text-base text-slate-500 dark:text-slate-400 leading-relaxed">조이코리아는 다년간의 이커머스 전문 역량과 압도적인 검증 데이터를 바탕으로 고객사에 가장 혁신적인 이커머스 솔루션을 제공합니다.</p>
    </div>

    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
      
      <!-- Model 1: 스마트스토어 에이전시 -->
      <div class="group relative rounded-3xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 overflow-hidden hover:border-slate-350 dark:hover:border-slate-800 transition duration-300 shadow-sm">
        <div class="aspect-w-16 aspect-h-10 overflow-hidden bg-slate-100 dark:bg-slate-950">
          <img src="<?=$default_path?>/img/designcoco/images/what1.jpg" alt="스마트스토어" class="h-64 w-full object-cover group-hover:scale-105 opacity-90 dark:opacity-80 group-hover:opacity-100 transition duration-500">
        </div>
        <div class="p-8 space-y-3">
          <h4 class="font-display text-lg font-bold text-slate-900 dark:text-white">스마트스토어 에이전시</h4>
          <p class="text-sm leading-relaxed text-slate-500 dark:text-slate-400">네이버 스마트스토어 입점부터 상품 소싱, 키워드 마케팅, 정밀 CS 관리까지 원스톱 대행으로 단기간 매출 극대화를 달성합니다.</p>
        </div>
      </div>

      <!-- Model 2: 온라인 판매대행 -->
      <div class="group relative rounded-3xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 overflow-hidden hover:border-slate-350 dark:hover:border-slate-800 transition duration-300 shadow-sm">
        <div class="aspect-w-16 aspect-h-10 overflow-hidden bg-slate-100 dark:bg-slate-950">
          <img src="<?=$default_path?>/img/designcoco/images/what2.jpg" alt="온라인 판매대행" class="h-64 w-full object-cover group-hover:scale-105 opacity-90 dark:opacity-80 group-hover:opacity-100 transition duration-500">
        </div>
        <div class="p-8 space-y-3">
          <h4 class="font-display text-lg font-bold text-slate-900 dark:text-white">온라인 판매대행</h4>
          <p class="text-sm leading-relaxed text-slate-500 dark:text-slate-400">오픈마켓(G마켓, 11번가, 옥션, 쿠팡) 및 종합 쇼핑몰의 전문 공식 벤더로서, 유통망의 광범위한 확장과 정산 프로세스를 효율적으로 대행합니다.</p>
        </div>
      </div>

      <!-- Model 3: 해외명품사업 -->
      <div class="group relative rounded-3xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 overflow-hidden hover:border-slate-350 dark:hover:border-slate-800 transition duration-300 shadow-sm">
        <div class="aspect-w-16 aspect-h-10 overflow-hidden bg-slate-100 dark:bg-slate-950">
          <img src="<?=$default_path?>/img/designcoco/images/what3.jpg" alt="해외명품사업" class="h-64 w-full object-cover group-hover:scale-105 opacity-90 dark:opacity-80 group-hover:opacity-100 transition duration-500">
        </div>
        <div class="p-8 space-y-3">
          <h4 class="font-display text-lg font-bold text-slate-900 dark:text-white">해외명품사업</h4>
          <p class="text-sm leading-relaxed text-slate-500 dark:text-slate-400">유명 이탈리아 부티크 파트너사와의 긴밀한 연동을 통해, 백화점 및 하이엔드 온라인 명품 편집숍에 100% 신뢰할 수 있는 수입 유통망을 구축하고 있습니다.</p>
        </div>
      </div>

    </div>
  </section>
  <!-- What we do 영역 [E]-->

  <!-- [4] 소개 영역 (CTA Banner) [S]-->
  <section id="introduce" class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 py-16">
    <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-brand-600 to-indigo-750 dark:from-brand-900 dark:to-indigo-900 px-8 py-16 shadow-2xl border border-brand-200 dark:border-brand-500/20 sm:px-16 md:py-20 flex flex-col md:flex-row items-center justify-between gap-8">
      
      <!-- 빛 조명 장식 -->
      <div class="absolute right-0 top-0 -z-10 h-72 w-72 rounded-full bg-brand-500/25 blur-3xl"></div>
      
      <div class="max-w-2xl space-y-4 text-center md:text-left">
        <h3 class="font-display text-2xl sm:text-3xl font-extrabold text-white tracking-tight leading-snug">해외명품 브랜드 국내 유통 채널 구축 및 활성화</h3>
        <p class="text-sm sm:text-base text-brand-100 dark:text-brand-200 leading-relaxed">이탈리아 최고 권위의 바이어 파트너사와 연동하여, 검증된 직배송 정품 명품 공급망을 백화점 및 국내 명품 플랫폼에 안전하게 정착시킵니다.</p>
      </div>
      
      <div class="flex-shrink-0">
        <a href="<?=$default_path?>/luxury/business1.php" class="inline-flex items-center gap-2 rounded-full bg-white px-6 py-3.5 text-sm font-semibold text-brand-700 dark:text-slate-950 shadow-md hover:bg-slate-55 dark:hover:bg-slate-100 transition duration-200">
          자세히 보기 
          <svg class="h-4 w-4 text-brand-700 dark:text-slate-950" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
          </svg>
        </a>
      </div>
    </div>
  </section>
  <!-- 소개 영역 [E]-->

  <!-- [5] 운영쇼핑몰 (구형 테이블 갤러리를 Tailwind 그리드 카드로 전면 개편) [S]-->
  <section id="product" class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 py-16 border-t border-slate-200 dark:border-slate-900">
    <div class="space-y-3 mb-12">
      <h2 class="font-display text-3xl font-extrabold text-slate-900 dark:text-white tracking-tight"><a href="<?=$default_path?>/product/product1.php" class="hover:text-brand-600 dark:hover:text-brand-400 transition">운영 쇼핑몰</a></h2>
      <p class="text-base text-slate-500 dark:text-slate-400">단순 대행 입점이 아닌, 조이코리아가 브랜드사 공식 위탁 권한을 취득하여 직접 전담 운영하는 메이저 쇼핑몰입니다.</p>
    </div>

    <!-- 3열 카드형 갤러리 리액토링 -->
    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
      
      <!-- 쇼핑몰 1: 도루코공식몰 -->
      <div class="group relative flex flex-col justify-between rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/20 overflow-hidden hover:border-slate-350 dark:hover:border-slate-800 transition duration-300 shadow-sm">
        <a href="business/business.php?com_board_basic=read_form&&com_board_idx=8&com_board_id=4" class="block overflow-hidden bg-slate-100 dark:bg-slate-950">
          <img alt="도루코공식몰" src="<?=$demo_path?>/component/board/board_4/u_image/8/1160253452_mall_01.jpg" class="h-60 w-full object-cover group-hover:scale-105 opacity-90 dark:opacity-90 group-hover:opacity-100 transition duration-350" />
        </a>
        <div class="p-6 flex items-center justify-between">
          <span class="font-display font-bold text-slate-900 dark:text-white group-hover:text-brand-605 dark:group-hover:text-brand-400 transition duration-200">
            <a href="<?=$demo_path?>/business/business.php?com_board_basic=read_form&&com_board_idx=8&com_board_id=4">도루코 공식 스마트스토어</a>
          </span>
          <span class="inline-flex items-center rounded-md bg-emerald-500/10 px-2 py-1 text-xs font-medium text-emerald-600 dark:text-emerald-400 ring-1 ring-inset ring-emerald-500/20">운영 중</span>
        </div>
      </div>

      <!-- 쇼핑몰 2: 동원천지인공식몰 -->
      <div class="group relative flex flex-col justify-between rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/20 overflow-hidden hover:border-slate-350 dark:hover:border-slate-800 transition duration-300 shadow-sm">
        <a href="business/business.php?com_board_basic=read_form&&com_board_idx=7&com_board_id=4" class="block overflow-hidden bg-slate-100 dark:bg-slate-950">
          <img alt="동원천지인공식몰" src="<?=$demo_path?>/component/board/board_4/u_image/7/1018773828_mall_02.jpg" class="h-60 w-full object-cover group-hover:scale-105 opacity-90 dark:opacity-90 group-hover:opacity-100 transition duration-350" />
        </a>
        <div class="p-6 flex items-center justify-between">
          <span class="font-display font-bold text-slate-900 dark:text-white group-hover:text-brand-605 dark:group-hover:text-brand-400 transition duration-200">
            <a href="<?=$demo_path?>/business/business.php?com_board_basic=read_form&&com_board_idx=7&com_board_id=4">동원 천지인 홍삼 공식몰</a>
          </span>
          <span class="inline-flex items-center rounded-md bg-emerald-500/10 px-2 py-1 text-xs font-medium text-emerald-600 dark:text-emerald-400 ring-1 ring-inset ring-emerald-500/20">운영 중</span>
        </div>
      </div>

      <!-- 쇼핑몰 3: 그란도노공식몰 -->
      <div class="group relative flex flex-col justify-between rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/20 overflow-hidden hover:border-slate-350 dark:hover:border-slate-800 transition duration-300 shadow-sm">
        <a href="business/business.php?com_board_basic=read_form&&com_board_idx=6&com_board_id=4" class="block overflow-hidden bg-slate-100 dark:bg-slate-950">
          <img alt="그란도노공식몰" src="<?=$demo_path?>/component/board/board_4/u_image/6/1595477465_mall_03.jpg" class="h-60 w-full object-cover group-hover:scale-105 opacity-90 dark:opacity-90 group-hover:opacity-100 transition duration-350" />
        </a>
        <div class="p-6 flex items-center justify-between">
          <span class="font-display font-bold text-slate-900 dark:text-white group-hover:text-brand-605 dark:group-hover:text-brand-400 transition duration-200">
            <a href="<?=$demo_path?>/business/business.php?com_board_basic=read_form&&com_board_idx=6&com_board_id=4">그란도노 이태리 슈즈 공식몰</a>
          </span>
          <span class="inline-flex items-center rounded-md bg-emerald-500/10 px-2 py-1 text-xs font-medium text-emerald-600 dark:text-emerald-400 ring-1 ring-inset ring-emerald-500/20">운영 중</span>
        </div>
      </div>

    </div>
  </section>
  <!-- 제품소개 영역 [E]-->

  <!-- [6] 고객센터 영역 (제휴문의 테이블 리스트를 모던한 UI 리스트로 전면 개편) [S]-->
  <section id="customer" class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 py-16 border-t border-slate-200 dark:border-slate-900">
    <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
      
      <!-- Left: 제휴문의 최근글 리스트 -->
      <div class="space-y-6">
        <div class="flex items-center justify-between border-b border-slate-200 dark:border-slate-900 pb-4">
          <h4 class="font-display text-xl font-bold text-slate-900 dark:text-white">최근 제휴문의 현황</h4>
          <a href="<?=$default_path?>/community/inquiry.php" class="text-xs font-semibold text-brand-650 dark:text-brand-400 hover:text-brand-500 transition">더보기 &gt;</a>
        </div>
        
        <!-- 모던 리스트 마크업 -->
        <div class="divide-y divide-slate-200 dark:divide-slate-900 border-b border-slate-200 dark:border-slate-900">
          
          <!-- 문의 1 -->
          <div class="flex items-center justify-between py-4 group">
            <div class="flex items-center gap-3">
              <!-- 비밀글 자물쇠 SVG -->
              <svg class="h-4 w-4 text-slate-400 dark:text-slate-500 group-hover:text-brand-500 transition duration-200" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
              </svg>
              <a href='javascript:com_board_secret_form(41, "<?=$default_path?>/community/inquiry.php", "com_board_idx=41&com_board_id=3", "3", "demo01")' class="text-sm text-slate-700 dark:text-slate-300 group-hover:text-slate-950 dark:group-hover:text-white transition duration-200">
                제휴문의 등록 건
              </a>
            </div>
            <span class="text-xs text-slate-400 dark:text-slate-500">조수아</span>
          </div>

          <!-- 문의 2 -->
          <div class="flex items-center justify-between py-4 group">
            <div class="flex items-center gap-3">
              <svg class="h-4 w-4 text-slate-400 dark:text-slate-500 group-hover:text-brand-500 transition" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
              </svg>
              <a href='javascript:com_board_secret_form(40, "<?=$default_path?>/community/inquiry.php", "com_board_idx=40&com_board_id=3", "3", "demo01")' class="text-sm text-slate-700 dark:text-slate-300 group-hover:text-slate-950 dark:group-hover:text-white transition duration-200">
                온라인 벤더 제안 및 문의
              </a>
            </div>
            <span class="text-xs text-slate-400 dark:text-slate-500">방현식</span>
          </div>

          <!-- 문의 3 -->
          <div class="flex items-center justify-between py-4 group">
            <div class="flex items-center gap-3">
              <svg class="h-4 w-4 text-slate-400 dark:text-slate-500 group-hover:text-brand-500 transition" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
              </svg>
              <a href='javascript:com_board_secret_form(39, "<?=$default_path?>/community/inquiry.php", "com_board_idx=39&com_board_id=3", "3", "demo01")' class="text-sm text-slate-700 dark:text-slate-300 group-hover:text-slate-950 dark:group-hover:text-white transition duration-200">
                신규 입점 벤더사 문의
              </a>
            </div>
            <span class="text-xs text-slate-400 dark:text-slate-500">문인규</span>
          </div>

          <!-- 문의 4 -->
          <div class="flex items-center justify-between py-4 group">
            <div class="flex items-center gap-3">
              <svg class="h-4 w-4 text-slate-400 dark:text-slate-500 group-hover:text-brand-500 transition" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
              </svg>
              <a href='javascript:com_board_secret_form(38, "<?=$default_path?>/community/inquiry.php", "com_board_idx=38&com_board_id=3", "3", "demo01")' class="text-sm text-slate-700 dark:text-slate-300 group-hover:text-slate-950 dark:group-hover:text-white transition duration-200">
                대행사 및 위탁판매 업무 제휴
              </a>
            </div>
            <span class="text-xs text-slate-400 dark:text-slate-500">이정은</span>
          </div>

          <!-- 문의 5 -->
          <div class="flex items-center justify-between py-4 group">
            <div class="flex items-center gap-3">
              <svg class="h-4 w-4 text-slate-400 dark:text-slate-500 group-hover:text-brand-500 transition" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
              </svg>
              <a href='javascript:com_board_secret_form(37, "<?=$default_path?>/community/inquiry.php", "com_board_idx=37&com_board_id=3", "3", "demo01")' class="text-sm text-slate-700 dark:text-slate-300 group-hover:text-slate-950 dark:group-hover:text-white transition duration-200">
                제휴 및 입점 제안서 등록
              </a>
            </div>
            <span class="text-xs text-slate-400 dark:text-slate-500">구현상</span>
          </div>

        </div>
      </div>

      <!-- Right: CS Center Info & Brand Banner -->
      <div class="space-y-6 lg:pl-6">
        <div class="border-b border-slate-200 dark:border-slate-900 pb-4">
          <h4 class="font-display text-xl font-bold text-slate-900 dark:text-white">고객지원센터</h4>
        </div>
        
        <div class="rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-900/10 p-6 space-y-6 shadow-sm">
          <div class="space-y-1">
            <span class="text-xs font-semibold text-slate-450 dark:text-slate-500 uppercase tracking-wider">대표상담전화</span>
            <div class="flex items-center gap-2">
              <svg class="h-6 w-6 text-brand-500 dark:text-brand-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.387a12.017 12.017 0 01-4.5-4.5c-.155-.44.01-.927.387-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
              </svg>
              <a href="tel:1599-2833" class="font-display text-2xl font-extrabold text-slate-900 dark:text-white hover:text-brand-600 dark:hover:text-brand-300 transition">1599-2833</a>
            </div>
          </div>

          <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
            <li>상담시간 : 09:00 - 18:00</li>
            <li>점심시간 : 12:00 - 13:00 (주말, 공휴일 휴무)</li>
          </ul>

          <div class="flex gap-4 pt-2">
            <a href="<?=$default_path?>/customer/consult.php" class="flex-1 text-center rounded-xl bg-slate-100 border border-slate-200 text-slate-700 hover:bg-slate-200 dark:bg-slate-800 dark:border-slate-700 dark:text-slate-200 dark:hover:bg-slate-700 dark:hover:text-white transition duration-200 text-sm font-semibold py-3 shadow-sm">1:1 문의하기</a>
            <a href="<?=$default_path?>/community/inquiry.php" class="flex-1 text-center rounded-xl bg-brand-600 py-3 text-sm font-semibold text-white hover:bg-brand-500 transition duration-200 shadow-md">제휴문의</a>
          </div>
        </div>

        <!-- 그란도노 브랜드 메인 이미지 배너 -->
        <div class="relative overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-950 shadow-lg group">
          <img src="<?=$default_path?>/img/designcoco/images/grandono_main.jpg" alt="그란도노 공식몰" class="w-full object-cover group-hover:scale-105 transition duration-500" />
          <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent flex items-end p-6">
            <div class="space-y-1">
              <span class="text-[10px] font-semibold tracking-wider text-brand-400 uppercase">OFFICIAL MALL</span>
              <h5 class="font-display text-base font-bold text-white">GRANDONO 이태리 명품 브랜드 몰</h5>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- 고객센터 영역 [E]-->

</main>
<!-- 메인 컨텐츠 [E]-->

<?php
include_once(__DIR__ . '/inc/footer.php');
?>
<script language="javascript" type="text/javascript" src="/cjs/javascript.lib.js?date=1458686126"></script>
<script language="javascript" src="/cjs/board.js"></script>

<script type="text/javascript">
var JsHost = (("https:" == document.location.protocol) ? "https://" : "http://");
var sTime = new Date().getTime();
document.write(unescape("%3Cscript id='log_script' src='" + JsHost + "builderlog2-008.cafe24.com/weblog.js?uid=cponavy2&t=" + sTime + "' type='text/javascript'%3E%3C/script%3E"));
</script>