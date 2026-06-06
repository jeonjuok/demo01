<!-- 풋터영역 [S] -->
<footer class="mt-auto border-t border-slate-250 bg-white dark:border-slate-900 dark:bg-slate-950 py-12 md:py-16 transition-colors duration-250">
   <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
         <!-- Left section: Logo and copyright info -->
         <div class="space-y-4">
            <div class="flex items-center gap-3">
               <div class="h-8 w-8 rounded-lg bg-gradient-to-tr from-brand-600 to-indigo-400 flex items-center justify-center">
                  <span class="text-white font-display font-extrabold text-sm">J</span>
               </div>
               <span class="text-slate-900 dark:text-white font-display font-bold text-lg tracking-tight">JOYKOREA</span>
            </div>
            <p class="text-sm text-slate-500 dark:text-slate-400">
               최고의 전문성과 신뢰를 바탕으로 함께 성장해 나가겠습니다.
            </p>
            <p class="text-xs text-slate-450 dark:text-slate-500">
               Copyright &copy; JOYKOREA. All Rights Reserved.
            </p>
         </div>
         
         <!-- Middle section: Company Details -->
         <div class="space-y-3">
            <h4 class="text-sm font-semibold text-slate-900 dark:text-slate-200 uppercase tracking-wider">회사 정보</h4>
            <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
               <li>주식회사 조이코리아</li>
               <li>주소 : 서울 강남구 영동대로702 화천빌딩 803호</li>
               <li>TEL : <a href="tel:1599-2833" class="hover:text-slate-900 dark:hover:text-white transition">1599-2833</a></li>
               <li>사업자 등록번호 : 665-87-00055</li>
            </ul>
         </div>
         
         <!-- Right section: Links -->
         <div class="space-y-3">
            <h4 class="text-sm font-semibold text-slate-900 dark:text-slate-200 uppercase tracking-wider">바로가기</h4>
            <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
               <li><a href="<?=$default_path?>/company/company.php" class="hover:text-slate-900 dark:hover:text-white transition">회사소개</a></li>
               <li><a href="<?=$default_path?>/privacy.php" class="hover:text-slate-900 dark:hover:text-white transition text-brand-600 dark:text-brand-400 hover:text-brand-500 dark:hover:text-brand-300 font-medium">개인정보처리방침</a></li>
               <li><a href="http://builder.cafe24.com/admin/" target="_blank" class="hover:text-slate-900 dark:hover:text-white transition">관리자 페이지</a></li>
            </ul>
         </div>
      </div>
   </div>
</footer>
<!-- 풋터영역 [E] -->

<!-- Go Top Button (Alpine.js integration) -->
<div x-data="{ show: false }" @scroll.window="show = (window.pageYOffset > 500)" class="fixed bottom-6 right-6 z-50">
   <a href="#top" x-show="show" x-transition x-cloak class="flex h-10 w-10 items-center justify-center rounded-full bg-white border border-slate-200 text-slate-500 hover:bg-slate-100 hover:text-slate-950 dark:bg-slate-900 dark:border-slate-800 dark:text-slate-400 dark:hover:text-white dark:hover:border-slate-700 shadow-lg transition">
      <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
         <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
      </svg>
   </a>
</div>

</div> <!-- #wrap [E] -->

<!-- Script for category active states -->
<script>
jQuery(document).ready(function($){
   var current_path = window.location.pathname;
   $('.submenu ul li a[href="'+current_path+'"]').addClass('active');
});
</script>

<!-- Naver Analytics -->
<script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
<script type="text/javascript">
if(!wcs_add) var wcs_add = {};
wcs_add["wa"] = "894a7eb45b7690";
if(window.wcs) {
   wcs_do();
}
</script>

<script language="javascript" type="text/javascript" src="/cjs/javascript.lib.js?date=1458686126"></script>
<script type="text/javascript">
var JsHost = (("https:" == document.location.protocol) ? "https://" : "http://");
var sTime = new Date().getTime();
document.write(unescape("%3Cscript id='log_script' src='" + JsHost + "builderlog2-008.cafe24.com/weblog.js?uid=cponavy2&t=" + sTime + "' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>
