<?php
$page_title = "CEO 인사말";
$page_desc = "조이코리아 대표이사의 인사말 페이지입니다. 최고의 전문성과 신뢰를 바탕으로 함께 성장하겠습니다.";
include_once(dirname(__DIR__) . '/config.php');
include_once(dirname(__DIR__) . '/inc/header.php');
?>

<!-- 배경 Radiant 광원 효과 -->
<div class="absolute left-1/2 top-0 -z-10 h-[500px] w-full -translate-x-1/2 bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,rgba(92,117,255,0.08),rgba(255,255,255,0))]"></div>

<!-- 상단 서브 히어로 섹션 [S]-->
<section class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pt-16 pb-8">
  <div class="border-b border-slate-900 pb-10">
    <span class="text-xs font-semibold uppercase tracking-wider text-brand-400">COMPANY</span>
    <h1 class="mt-2 font-display text-4xl font-extrabold tracking-tight text-white sm:text-5xl">CEO 인사말</h1>
    <p class="mt-4 text-base text-slate-400">대표이사가 조이코리아를 찾아주신 파트너 및 고객 여러분께 드리는 인사말입니다.</p>
  </div>
</section>
<!-- 상단 서브 히어로 섹션 [E]-->

<div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 pb-24">
  <!-- 상단 세련된 탭 메뉴 [S] -->
  <div class="mb-12 border-b border-slate-900">
     <nav class="-mb-px flex space-x-8" aria-label="Tabs">
       <a href="company.php" class="border-transparent text-slate-400 hover:border-slate-800 hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">회사소개</a>
       <a href="<?=$default_path?>/company/ceo.php" class="border-brand-500 text-brand-400 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-semibold transition">CEO 인사말</a>
       <a href="<?=$default_path?>/company/history.php" class="border-transparent text-slate-400 hover:border-slate-800 hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">회사연혁</a>
       <a href="<?=$default_path?>/company/map.php" class="border-transparent text-slate-400 hover:border-slate-800 hover:text-slate-200 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium transition">오시는 길</a>
     </nav>
  </div>
  <!-- 상단 탭 메뉴 [E] -->

  <!-- 서브 컨텐츠 본문 [S]-->
  <div class="grid grid-cols-1 gap-12 lg:grid-cols-12 items-start">
     
     <!-- CEO 이미지 -->
     <div class="lg:col-span-5 relative overflow-hidden rounded-3xl border border-slate-900 bg-slate-950">
        <img src="<?=$default_path?>/img/designcoco/images/ceo.jpg" alt="CEO 남보현" class="w-full object-cover opacity-90 shadow-xl" />
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/40 to-transparent"></div>
     </div>
     
     <!-- 인사말 내용 -->
     <div class="lg:col-span-7 space-y-6">
        <div class="space-y-1">
           <span class="text-xs font-semibold tracking-wider text-brand-400 uppercase">CEO MESSAGE</span>
           <h3 class="font-display text-2xl sm:text-3xl font-extrabold text-white leading-tight">조이코리아 웹사이트를 방문해주신<br class="hidden sm:inline" /> 고객 여러분께 진심으로 감사드립니다.</h3>
        </div>

        <div class="space-y-4 text-slate-400 text-sm sm:text-base leading-relaxed">
          <p>
            조이코리아 대표이사 <strong class="text-white">남보현</strong>입니다.
          </p>
          <p>
            저희 조이코리아는 2013년 우수한 품질을 갖춘 중소기업 및 대기업 제품을 온라인 시장에 판매대행을 통해 안착시키며 역사적인 첫발을 내딛었습니다.
          </p>
          <p>
            2000년대 초중반, 많은 제조 기반의 기업들이 급변하는 전자상거래 전문 지식과 유통망을 확보하는 데 큰 인적/시간적 리소스적 한계를 겪고 있었고, 이에 따라 온라인 전문 벤더로서의 저희의 역할과 중요성이 날로 대두되었습니다. 이후 2010년대를 거치면서 온라인 유통 시장의 기하급수적인 팽창으로 더 전문적이고 체계적인 파트너의 등장을 필요로 해왔습니다.
          </p>
          <p>
            현재는 많은 기업들이 내부에 별도 이커머스 팀을 꾸려 직접 유통에 뛰어들기도 합니다. 하지만 급격하게 진화하는 검색 로직, 정밀해지는 마케팅 지표, 그리고 고도화된 CS 대응 측면에서 진정한 전문 이커머스 능력을 조달하는 일은 여전히 거대한 도전입니다.
          </p>
          <p>
            온라인 채널 구축 및 판매 프로세스의 구조적 고충으로 어려움을 겪고 계신다면, 주저 없이 저희에게 문의해 주십시오. 조이코리아가 파트너사의 든든하고 신뢰도 높은 전담 이커머스 팀이 되어 드리겠습니다.
          </p>
          <p class="font-semibold text-slate-300">
            모든 제품을 무조건 잘 팔겠다고 장담하지는 않겠습니다. <br />
            하지만, 가장 정직하고 성실하게 최선을 다해 귀사의 성공적인 브랜딩과 유통을 도울 것임을 약속드립니다.
          </p>
        </div>

        <div class="pt-6 border-t border-slate-900 flex items-center justify-between">
           <span class="text-sm text-slate-500">주식회사 조이코리아 대표이사</span>
           <div class="flex items-center gap-3">
              <span class="font-display text-lg font-bold text-white tracking-tight">남 보 현</span>
              <!-- 서명 이미지 -->
              <div class="h-8 flex items-center bg-transparent">
                 <img src="<?=$default_path?>/img/designcoco/images/signature.png" alt="서명" class="h-6 object-contain opacity-80" />
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