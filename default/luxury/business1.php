<?php
$page_title = "해외명품사업 - 사업소개";
$page_desc = "이탈리아 유수 파트너사와의 제휴로 전개하는 조이코리아의 해외명품(그란도노) 사업을 소개합니다.";
include_once(dirname(__DIR__) . '/config.php');
include_once(dirname(__DIR__) . '/inc/header.php');
?>

<!-- 배경 Radiant 광원 효과 -->
<div class="absolute left-1/2 top-0 -z-10 h-[500px] w-full -translate-x-1/2 bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,rgba(92,117,255,0.08),rgba(255,255,255,0))]"></div>

<!-- 상단 서브 히어로 섹션 [S]-->
<section class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pt-16 pb-8">
  <div class="border-b border-slate-900 pb-10">
    <span class="text-xs font-semibold uppercase tracking-wider text-brand-400">LUXURY GOODS</span>
    <h1 class="mt-2 font-display text-4xl font-extrabold tracking-tight text-white sm:text-5xl">해외명품사업</h1>
    <p class="mt-4 text-base text-slate-400">이탈리아 최고 권위의 부티크 파트너십을 통해 정직하고 높은 품격의 럭셔리 라이프를 제안합니다.</p>
  </div>
</section>
<!-- 상단 서브 히어로 섹션 [E]-->

<div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pb-24">
  <!-- 상단 세련된 탭 메뉴 [S] -->
  <div class="mb-12 border-b border-slate-900">
     <nav class="-mb-px flex space-x-8" aria-label="Tabs">
       <a href="<?=$default_path?>/luxury/business1.php" class="border-brand-500 text-brand-400 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-semibold transition">사업소개</a>
       <a href="<?=$default_path?>/luxury/location.php" class="border-transparent text-slate-400 hover:border-slate-800 hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">입점현황</a>
       <a href="<?=$default_path?>/luxury/partner.php" class="border-transparent text-slate-400 hover:border-slate-800 hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">취급브랜드</a>
     </nav>
  </div>
  <!-- 상단 탭 메뉴 [E] -->

  <!-- 서브 컨텐츠 본문 [S]-->
  <div class="space-y-20">
     
     <!-- [1] 상단 명품 이미지 배너 리뉴얼 -->
     <div class="relative overflow-hidden rounded-3xl border border-slate-900 bg-slate-950 h-64 sm:h-80 shadow-xl flex items-center px-8 sm:px-16">
        <img src="<?=$default_path?>/img/designcoco/images/page/grandono.jpg" alt="Grandono Luxury Banner" class="absolute inset-0 h-full w-full object-cover opacity-45" />
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/80 to-transparent"></div>
        <div class="relative max-w-xl space-y-4">
           <span class="inline-flex items-center rounded-md bg-brand-500/10 px-2.5 py-1 text-xs font-medium text-brand-400 ring-1 ring-inset ring-brand-500/20">PREMIUM BRAND</span>
           <h3 class="font-display text-2xl sm:text-3xl font-extrabold text-white tracking-tight leading-snug">믿음과 신뢰의 그란도노 (Grandono)</h3>
           <p class="text-sm sm:text-base text-slate-300 leading-relaxed">조이코리아의 직수입 명품 브랜드 그란도노는 최고의 퀄리티와 정품 보증 인프라를 바탕으로 시장의 절대적인 신뢰를 취득하고 있습니다.</p>
        </div>
     </div>

     <!-- [2] 럭셔리 사업 특징 그룹 1 (믿음과 신뢰의 그란도노) -->
     <div class="space-y-8">
        <div class="border-b border-slate-900 pb-3">
          <h4 class="font-display text-xl font-bold text-white">현지 인프라 및 오프라인 채널</h4>
        </div>
        
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
           
           <!-- 특징 1: 이탈리아 파트너사 -->
           <div class="rounded-3xl border border-slate-900 bg-slate-900/10 p-8 space-y-4 hover:border-slate-800 transition duration-300 flex gap-5 items-start">
              <div class="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-brand-500/10 text-brand-400">
                 <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-.778.099-1.533.284-2.253" /></svg>
              </div>
              <div class="space-y-2">
                 <h5 class="text-lg font-bold text-white leading-none">70년 역사와 전통의 이탈리아 파트너사</h5>
                 <p class="text-sm text-slate-400 leading-relaxed">신뢰도 높은 70년 전통의 이탈리아 현지 명품 부티크 총판과의 공식 독점 계약을 통하여, 전 상품을 위조 우려 없이 이탈리아 현지로부터 안전하게 직수입 공급하고 있습니다.</p>
              </div>
           </div>

           <!-- 특징 2: 유명 백화점 입점 -->
           <div class="rounded-3xl border border-slate-900 bg-slate-900/10 p-8 space-y-4 hover:border-slate-800 transition duration-300 flex gap-5 items-start">
              <div class="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-500/10 text-indigo-400">
                 <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72M6.75 18h.008v.008H6.75V18zm0-3h.008v.008H6.75V15zm0-3h.008v.008H6.75V12zm3 3h.008v.008H9.75V15zm0-3h.008v.008H9.75V12zm3 3h.008v.008h-.008V15zm0-3h.008v.008h-.008V12zm3 3h.008v.008h-.008V15zm0-3h.008v.008h-.008V12z" /></svg>
              </div>
              <div class="space-y-2">
                 <h5 class="text-lg font-bold text-white leading-none">신세계, 갤러리아, AK 등 유명 백화점 유통</h5>
                 <p class="text-sm text-slate-400 leading-relaxed">신세계백화점 및 갤러리아, AK백화점 온/오프라인 몰에 입점하여 판매하고 있으며, 시즌 오더로만 진행하여 매 시즌 가장 트렌디한 유럽 신상품들을 안전하게 바잉해 제공합니다.</p>
              </div>
           </div>

        </div>
     </div>

     <!-- [3] 럭셔리 사업 특징 그룹 2 (온라인 속의 그란도노) -->
     <div class="space-y-8">
        <div class="border-b border-slate-900 pb-3">
          <h4 class="font-display text-xl font-bold text-white">온라인 비즈니스 경쟁력</h4>
        </div>
        
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
           
           <!-- 특징 3: 온라인판매 전문가 -->
           <div class="rounded-3xl border border-slate-900 bg-slate-900/10 p-8 space-y-4 hover:border-slate-800 transition duration-300 flex gap-5 items-start">
              <div class="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-violet-500/10 text-violet-400">
                 <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" /></svg>
              </div>
              <div class="space-y-2">
                 <h5 class="text-lg font-bold text-white leading-none">온라인 커머스 전문가 그룹의 운영</h5>
                 <p class="text-sm text-slate-400 leading-relaxed">조이코리아의 축적된 온라인 마케팅 솔루션을 명품 유통에도 고스란히 이식했습니다. 정밀한 검색 최적화 및 럭셔리 소비자 구매 패턴 분석을 바탕으로 판매를 극대화합니다.</p>
              </div>
           </div>

           <!-- 특징 4: 다양한 온라인 판매채널 -->
           <div class="rounded-3xl border border-slate-900 bg-slate-900/10 p-8 space-y-4 hover:border-slate-800 transition duration-300 flex gap-5 items-start">
              <div class="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-pink-500/10 text-pink-400">
                 <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875V16.5m-1.5-1.5h3m-3 3h3M9 3.75h12M9 7.5h12M9 11.25h12M9 15h12M9 18.75h12M3.75 4.5h.008v.008H3.75V4.5zm0 3.75h.008v.008H3.75V8.25zm0 3.75h.008v.008H3.75V12zm0 3.75h.008v.008H3.75V15.75zm0 3.75h.008v.008H3.75v-.008z" /></svg>
              </div>
              <div class="space-y-2">
                 <h5 class="text-lg font-bold text-white leading-none">명품 플랫폼 및 종합몰 입점 제휴</h5>
                 <p class="text-sm text-slate-400 leading-relaxed">롯데, 현대, 신세계몰 등 대형 백화점 공식 몰은 물론 트렌디한 럭셔리 버티컬 플랫폼(발란, 트렌비, 머스트잇 등)까지 전방위적인 공급 협력망을 공고히 다지고 있습니다.</p>
              </div>
           </div>

        </div>
     </div>

     <!-- [4] 하단 1:1 상담 안내 (고급스러운 카드 배너 리액토링) -->
     <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-slate-900 to-indigo-950/40 border border-slate-900 p-8 sm:p-12 flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="space-y-2 text-center md:text-left">
           <h4 class="font-display text-xl font-extrabold text-white">이태리 명품 비즈니스의 확실한 검증된 파트너</h4>
           <p class="text-sm text-slate-400">그란도노 명품 유통망 제휴 및 기업 제휴 오더에 대해 신속하게 답변 드리겠습니다.</p>
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