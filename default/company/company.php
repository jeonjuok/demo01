<?php
$page_title = "회사개요";
$page_desc = "조이코리아는 전자상거래 및 E-COMMERCE 리더로 국내 대기업 온라인 판매 공식벤더 및 해외명품 온라인판매 사업을 진행하고 있습니다.";
include_once(dirname(__DIR__) . '/config.php');
include_once(dirname(__DIR__) . '/inc/header.php');
?>

<!-- 배경 Radiant 광원 효과 -->
<div class="absolute left-1/2 top-0 -z-10 h-[500px] w-full -translate-x-1/2 bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,rgba(92,117,255,0.08),rgba(255,255,255,0))]"></div>

<!-- 상단 서브 히어로 섹션 [S]-->
<section class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pt-16 pb-8">
  <div class="border-b border-slate-900 pb-10">
    <span class="text-xs font-semibold uppercase tracking-wider text-brand-400">COMPANY</span>
    <h1 class="mt-2 font-display text-4xl font-extrabold tracking-tight text-white sm:text-5xl">회사개요</h1>
    <p class="mt-4 text-base text-slate-400">온라인 판매 및 전자상거래의 새로운 기준을 열어가는 조이코리아를 소개합니다.</p>
  </div>
</section>
<!-- 상단 서브 히어로 섹션 [E]-->

<div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pb-24">
  <!-- 상단 세련된 탭 메뉴 [S] -->
  <div class="mb-12 border-b border-slate-900">
     <nav class="-mb-px flex space-x-8" aria-label="Tabs">
       <a href="company.php" class="border-brand-500 text-brand-400 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-semibold transition">회사소개</a>
       <a href="<?=$default_path?>/company/ceo.php" class="border-transparent text-slate-400 hover:border-slate-800 hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">CEO 인사말</a>
       <a href="<?=$default_path?>/company/history.php" class="border-transparent text-slate-400 hover:border-slate-800 hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">회사연혁</a>
       <a href="<?=$default_path?>/company/map.php" class="border-transparent text-slate-400 hover:border-slate-800 hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">오시는 길</a>
     </nav>
  </div>
  <!-- 상단 탭 메뉴 [E] -->

  <!-- 서브 컨텐츠 본문 [S]-->
  <div class="space-y-20">
     
     <!-- 회사소개 상단 (이미지 & 설명글) -->
     <div class="grid grid-cols-1 gap-12 lg:grid-cols-12 items-center">
        <!-- 회사 이미지 -->
        <div class="lg:col-span-5 relative overflow-hidden rounded-3xl border border-slate-900 bg-slate-950">
           <img src="<?=$default_path?>/img/designcoco/images/company.jpg" alt="조이코리아 전경" class="w-full object-cover opacity-90 shadow-xl" />
           <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 to-transparent"></div>
        </div>
        
        <!-- 설명글 -->
        <div class="lg:col-span-7 space-y-6">
           <h3 class="font-display text-2xl sm:text-3xl font-extrabold text-white leading-tight">최고의 전문성과 신뢰를 바탕으로<br class="hidden sm:inline" /> 함께 성장해 나가겠습니다.</h3>
           <div class="space-y-4 text-slate-400 text-sm sm:text-base leading-relaxed">
             <p>
               <strong class="text-white font-semibold">조이코리아는</strong> 전자상거래 및 E-COMMERCE 비즈니스 리더로서 국내 유수 기업들의 공식 온라인 판매 벤더 및 글로벌 브랜드 명품 수입/유통 사업을 전문적으로 전개하고 있습니다.
             </p>
             <p>
               특히 국내 시장에 최적화된 마케팅 노하우를 바탕으로 네이버 스마트스토어 공식 운영대행을 수행하고 있으며, 옥션, G마켓, 11번가, 쿠팡 등 전방위적 커머스 채널의 효율적인 위탁 운영 및 판매 프로세스를 안정적으로 리드하고 있습니다.
             </p>
             <p>
               당사는 효율적인 비즈니스 다변화를 위해 강남본사(온라인사업부)와 하남지사(해외명품사업부) 체계로 이원화되어 유기적으로 연동하고 있으며, 최고의 경쟁력과 철저한 파트너십을 무기로 고객사와 동반 성장을 이룩하겠습니다.
             </p>
           </div>
        </div>
     </div>

     <!-- [2] 주요현황 (그리드 카드화 및 SVG 아이콘화) -->
     <div class="space-y-6">
        <div class="border-b border-slate-900 pb-3">
          <h4 class="font-display text-xl font-bold text-white">주요현황</h4>
        </div>
        
        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
           
           <!-- 회사명 -->
           <div class="rounded-2xl border border-slate-900 bg-slate-900/10 p-6 text-center space-y-3">
              <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-lg bg-brand-500/10 text-brand-400">
                 <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-.778.099-1.533.284-2.253" /></svg>
              </div>
              <div class="space-y-1">
                 <h5 class="text-xs font-semibold text-slate-500 uppercase">회사명</h5>
                 <p class="text-sm font-bold text-white">(주)조이코리아</p>
              </div>
           </div>

           <!-- 설립일 -->
           <div class="rounded-2xl border border-slate-900 bg-slate-900/10 p-6 text-center space-y-3">
              <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-500/10 text-indigo-400">
                 <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" /></svg>
              </div>
              <div class="space-y-1">
                 <h5 class="text-xs font-semibold text-slate-500 uppercase">설립일</h5>
                 <p class="text-sm font-bold text-white">2015년 3월 18일</p>
              </div>
           </div>

           <!-- 대표이사 -->
           <div class="rounded-2xl border border-slate-900 bg-slate-900/10 p-6 text-center space-y-3">
              <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-lg bg-violet-500/10 text-violet-400">
                 <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" /></svg>
              </div>
              <div class="space-y-1">
                 <h5 class="text-xs font-semibold text-slate-500 uppercase">대표이사</h5>
                 <p class="text-sm font-bold text-white">남 보현</p>
              </div>
           </div>

           <!-- 직원수 -->
           <div class="rounded-2xl border border-slate-900 bg-slate-900/10 p-6 text-center space-y-3">
              <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-500/10 text-emerald-400">
                 <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.97 5.97 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94-3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" /></svg>
              </div>
              <div class="space-y-1">
                 <h5 class="text-xs font-semibold text-slate-500 uppercase">직원수</h5>
                 <p class="text-sm font-bold text-white">14명</p>
              </div>
           </div>

           <!-- 자본금 -->
           <div class="rounded-2xl border border-slate-900 bg-slate-900/10 p-6 text-center space-y-3">
              <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-lg bg-pink-500/10 text-pink-400">
                 <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.214-.145c1.474-.999 3.493-1.01 4.979-.023l.214.145a2.5 2.5 0 003.957-2.018v-4.6c0-1.38-1.12-2.5-2.5-2.5h-.75m-7.25 9.182v-4.6a2.5 2.5 0 012.5-2.5h.75m0 10.5v-11.5" /></svg>
              </div>
              <div class="space-y-1">
                 <h5 class="text-xs font-semibold text-slate-500 uppercase">자본금</h5>
                 <p class="text-sm font-bold text-white">￦ 200,000,000</p>
              </div>
           </div>

        </div>
     </div>

     <!-- [3] 매출현황 및 기업정보 (구형 테이블의 SaaS 카드화 리뉴얼) -->
     <div class="space-y-8">
        <div class="border-b border-slate-900 pb-3">
          <h4 class="font-display text-xl font-bold text-white">매출현황 및 상세 정보</h4>
        </div>
        
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
           
           <!-- 매출현황 표 -->
           <div class="rounded-3xl border border-slate-900 bg-slate-900/20 overflow-hidden">
              <div class="bg-slate-900/40 px-6 py-4 border-b border-slate-900">
                 <h5 class="text-sm font-semibold text-white">연도별 매출액 현황</h5>
              </div>
              <div class="divide-y divide-slate-900 text-sm">
                 <div class="flex justify-between px-6 py-4"><span class="text-slate-500">2016년 매출액</span><span class="font-bold text-slate-200">37억 2천만원</span></div>
                 <div class="flex justify-between px-6 py-4"><span class="text-slate-500">2017년 매출액</span><span class="font-bold text-slate-200">31억 3천만원</span></div>
                 <div class="flex justify-between px-6 py-4"><span class="text-slate-500">2018년 매출액</span><span class="font-bold text-slate-200">33억 5천만원</span></div>
                 <div class="flex justify-between px-6 py-4"><span class="text-slate-500">2019년 매출액</span><span class="font-bold text-slate-200">46억 5천만원</span></div>
                 <div class="flex justify-between px-6 py-4"><span class="text-slate-500">2020년 매출액</span><span class="font-bold text-brand-400">91억 3천만원</span></div>
              </div>
           </div>

           <!-- 기업 상세 주소 정보 -->
           <div class="rounded-3xl border border-slate-900 bg-slate-900/20 overflow-hidden">
              <div class="bg-slate-900/40 px-6 py-4 border-b border-slate-900">
                 <h5 class="text-sm font-semibold text-white">기업 디렉터리</h5>
              </div>
              <div class="divide-y divide-slate-900 text-sm">
                 <div class="flex px-6 py-4"><span class="w-28 text-slate-500 flex-shrink-0">업태 / 종목</span><span class="font-bold text-slate-200">도소매 / 전자상거래, 무역업</span></div>
                 <div class="flex px-6 py-4"><span class="w-28 text-slate-500 flex-shrink-0">사업자번호</span><span class="font-bold text-slate-200">665-87-00055</span></div>
                 <div class="flex px-6 py-4"><span class="w-28 text-slate-500 flex-shrink-0">강남본사</span><span class="font-bold text-slate-200 leading-relaxed">서울 강남구 영동대로702 화천빌딩 803호</span></div>
                 <div class="flex px-6 py-4"><span class="w-28 text-slate-500 flex-shrink-0">하남지사</span><span class="font-bold text-slate-200 leading-relaxed">경기도 하남시 미사강변서로25 미사테스타타워 1039호</span></div>
              </div>
           </div>

        </div>
     </div>

     <!-- [4] 1:1 상담 안내 (고급스러운 카드 배너 리액토링) -->
     <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-slate-900 to-brand-950/40 border border-slate-900 p-8 sm:p-12 flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="space-y-2 text-center md:text-left">
           <h4 class="font-display text-xl font-extrabold text-white">온라인 비즈니스 성장을 위한 첫걸음</h4>
           <p class="text-sm text-slate-400">조이코리아의 최고 운영 전문가들이 1:1 맞춤형 전문 상담을 지원합니다.</p>
        </div>
        <a href="<?=$default_path?>/customer/consult.php" class="rounded-full bg-brand-600 px-6 py-3 text-sm font-semibold text-white hover:bg-brand-500 transition duration-200 shadow-lg shadow-brand-500/25">1:1 온라인 상담 신청하기</a>
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