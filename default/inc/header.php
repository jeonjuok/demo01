<?php
// SEO 기본값 설정
$seo_title = isset($page_title) ? $page_title . " | (주)조이코리아" : "조이코리아 전자상거래 전문기업";
$seo_desc = isset($page_desc) ? $page_desc : "전자상거래 전문기업 조이코리아";
$seo_keywords = isset($page_keywords) ? $page_keywords : "전자상거래 온라인 인터넷쇼핑몰 위탁판매 온라인판매 아웃소싱업체 밴더 위탁배송 쇼핑몰운영 도소매업 판매대행 벤더사 e-commerce 상품등록 지마켓판매자 밴더사 위탁업체 위탁경영 벤더회사 이베이판매자 아웃소싱회사 온라인판매사업자 영업대행 cs대행 벤더업체 온라인위탁판매 온라인셀러 온라인판매대행 쇼핑몰대행 쇼핑몰위탁판매 쿠팡대행 온라인몰관리 인터넷위탁판매 상품등록대행 유통벤더 인터넷판매대행 이베이판매대행 네이버판매대행 아웃소싱기업 온라인상품등록 온라인대행 인터넷유통 온라인총판 온라인마케팅업체 판매대행업체 온라인벤더 오픈마켓대행 위탁판매대행 운영대행 온라인판매대행업체 식품벤더 건강식품벤더 쇼핑몰대행업체 유통대행 판매대행사이트 아웃바운드대행 오픈마켓판매대행 온라인쇼핑몰대행 쿠팡판매대행 스토어팜대행 인터넷쇼핑몰대행 영업대행사 온라인벤더 쇼핑몰위탁운영 상품위탁판매 옥션판매대행 쇼핑몰입점대행 백화점벤더 온라인쇼핑몰판매대행 건강기능식품홍보 옥션대행 네이버판매대행 인터넷판매대행업체 네이버스토어팜대행 식품벤더 오픈마켓대행사 식품판매대행 제품판매대행 온라인판매관리 판매대행사 쇼핑몰활성화 쇼핑몰대행사 오픈마켓관리대행 소셜벤더 온라인운영대행 오픈마켓운영 스토어팜운영대행 오픈마켓위탁판매 아웃소싱전문 쇼핑몰판매대행";
?>
<!DOCTYPE html>
<html lang="ko" class="h-full scroll-smooth">
<head>
  <meta charset="utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?=$seo_desc?>">
  <meta name="Keywords" content="<?=$seo_keywords?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?=$seo_title?>">
  <meta property="og:description" content="<?=$seo_desc?>">
  <meta property="og:image" content="<?=$default_path?>/img/designcoco/images/og_logo.png">
  <meta property="og:url" content="http://www.joykorea.net">
  <title><?=$seo_title?></title>
  
  <!-- 테마 초기화 스크립트 (Flash 현상 방지용 인라인 실행) -->
  <script>
    (function() {
      const theme = localStorage.getItem('theme') || 'system';
      if (theme === 'dark' || (theme === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
      } else {
        document.documentElement.classList.remove('dark');
      }
    })();
  </script>
  
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'Pretendard', 'sans-serif'],
            display: ['Outfit', 'sans-serif'],
          },
          colors: {
            brand: {
              50: '#f5f7ff',
              100: '#ebf0ff',
              200: '#d6e0ff',
              300: '#b3c5ff',
              400: '#85a0ff',
              500: '#5c75ff',
              600: '#275bd5',
              700: '#1d48b3',
              800: '#1c3d91',
              900: '#1b3475',
              950: '#101c44',
            }
          }
        }
      }
    }
  </script>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- FontAwesome -->
  <link rel="stylesheet" href="<?=$default_path?>/img/designcoco/fonts/font-awesome.min.css" />
  
  <!-- Alpine.js -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  
  <!-- Modern custom core styling overrides -->
  <style>
    /* Prevent raw alpine code from showing */
    [x-cloak] { display: none !important; }
  </style>
</head>
<body class="h-full bg-slate-50 text-slate-900 dark:bg-slate-950 dark:text-slate-100 font-sans antialiased selection:bg-brand-500 selection:text-white flex flex-col transition-colors duration-250">
<div id="wrap" class="flex flex-col min-h-screen flex-grow">
   <!-- Header / Navigation -->
   <header class="sticky top-0 z-50 w-full border-b border-slate-200 bg-white/80 dark:border-slate-900 dark:bg-slate-950/80 backdrop-blur" 
           x-data="{ 
             mobileMenuOpen: false, 
             theme: localStorage.getItem('theme') || 'system', 
             setTheme(val) {
               this.theme = val;
               localStorage.setItem('theme', val);
               if (val === 'dark' || (val === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                 document.documentElement.classList.add('dark');
               } else {
                 document.documentElement.classList.remove('dark');
               }
             }
           }">
      <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12">
         <div class="flex h-20 items-center justify-between">
            <!-- Logo -->
            <div class="flex lg:flex-1">
               <a href="<?=$default_path?>/index.php" class="-m-1.5 p-1.5 flex items-center gap-3 group">
                  <span class="sr-only">(주)조이코리아</span>
                  <div class="h-10 w-10 rounded-xl bg-gradient-to-tr from-brand-600 to-indigo-400 flex items-center justify-center shadow-lg shadow-brand-500/20 group-hover:scale-105 transition duration-300">
                     <span class="text-white font-display font-extrabold text-xl">J</span>
                  </div>
                  <span class="text-slate-900 dark:text-white font-display font-bold text-xl tracking-tight group-hover:text-brand-600 dark:group-hover:text-brand-300 transition duration-350">JOYKOREA</span>
               </a>
            </div>
            
            <!-- Mobile Menu and Theme Select Button -->
            <div class="flex items-center gap-4 lg:hidden">
               <!-- Theme Toggle Dropdown (Mobile) -->
               <div class="relative" x-data="{ open: false }">
                 <button type="button" @click="open = !open" class="rounded-lg p-2.5 text-slate-500 hover:bg-slate-100 hover:text-slate-900 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-white transition">
                   <span class="sr-only">테마 변경</span>
                   <!-- Light Icon -->
                   <svg x-show="theme === 'light'" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" /></svg>
                   <!-- Dark Icon -->
                   <svg x-show="theme === 'dark'" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" x-cloak><path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" /></svg>
                   <!-- System Icon -->
                   <svg x-show="theme === 'system'" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" x-cloak><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" /></svg>
                 </button>
                 <div x-show="open" @click.outside="open = false" class="absolute right-0 mt-2 w-32 origin-top-right rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-1 shadow-2xl z-50 text-sm" x-cloak x-transition>
                   <button @click="setTheme('light'); open = false" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-slate-700 dark:text-slate-350 hover:bg-slate-100 dark:hover:bg-slate-800 transition">Light</button>
                   <button @click="setTheme('dark'); open = false" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-slate-700 dark:text-slate-350 hover:bg-slate-100 dark:hover:bg-slate-800 transition">Dark</button>
                   <button @click="setTheme('system'); open = false" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-slate-700 dark:text-slate-350 hover:bg-slate-100 dark:hover:bg-slate-800 transition">System</button>
                 </div>
               </div>

               <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-slate-500 hover:text-slate-950 dark:text-slate-400 dark:hover:text-white" @click="mobileMenuOpen = !mobileMenuOpen">
                  <span class="sr-only">메뉴 열기</span>
                  <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" x-show="!mobileMenuOpen">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>
                  <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" x-show="mobileMenuOpen" x-cloak>
                     <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
               </button>
            </div>
            
            <!-- Desktop Navigation Links -->
            <div class="hidden lg:flex lg:gap-x-10">
               <!-- 회사소개 -->
               <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                  <button type="button" class="flex items-center gap-x-1.5 py-6 text-sm font-semibold leading-6 text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white transition duration-200" @click="open = !open">
                     회사소개
                     <svg class="h-4 w-4 flex-none text-slate-450 dark:text-slate-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                      </svg>
                  </button>
                  <div class="absolute -left-8 top-full z-10 w-52 rounded-2xl bg-white dark:bg-slate-900/90 border border-slate-200 dark:border-slate-800 p-2 shadow-2xl backdrop-blur-md" x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1">
                     <a href="<?=$default_path?>/company/company.php" class="block rounded-xl px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-white transition">회사개요</a>
                     <a href="<?=$default_path?>/company/ceo.php" class="block rounded-xl px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-white transition">CEO 인사말</a>
                     <a href="<?=$default_path?>/company/history.php" class="block rounded-xl px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-white transition">회사연혁</a>
                     <a href="<?=$default_path?>/company/map.php" class="block rounded-xl px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-white transition">오시는 길</a>
                  </div>
               </div>
               
               <!-- 온라인판매대행 -->
               <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                  <button type="button" class="flex items-center gap-x-1.5 py-6 text-sm font-semibold leading-6 text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white transition duration-200" @click="open = !open">
                     온라인판매대행
                     <svg class="h-4 w-4 flex-none text-slate-450 dark:text-slate-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                     </svg>
                  </button>
                  <div class="absolute -left-8 top-full z-10 w-52 rounded-2xl bg-white dark:bg-slate-900/90 border border-slate-200 dark:border-slate-800 p-2 shadow-2xl backdrop-blur-md" x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1">
                     <a href="<?=$default_path?>/business/business1.php" class="block rounded-xl px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-white transition">사업소개</a>
                     <a href="<?=$default_path?>/business/costomer.php" class="block rounded-xl px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-white transition">고객사</a>
                     <a href="<?=$default_path?>/business/business.php" class="block rounded-xl px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-white transition">운영쇼핑몰</a>
                     <a href="<?=$default_path?>/business/partner.php" class="block rounded-xl px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-white transition">입점제휴몰</a>
                  </div>
               </div>

               <!-- 해외명품사업 -->
               <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                  <button type="button" class="flex items-center gap-x-1.5 py-6 text-sm font-semibold leading-6 text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white transition duration-200" @click="open = !open">
                     해외명품사업
                     <svg class="h-4 w-4 flex-none text-slate-450 dark:text-slate-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                     </svg>
                  </button>
                  <div class="absolute -left-8 top-full z-10 w-52 rounded-2xl bg-white dark:bg-slate-900/90 border border-slate-200 dark:border-slate-800 p-2 shadow-2xl backdrop-blur-md" x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1">
                     <a href="<?=$default_path?>/luxury/business1.php" class="block rounded-xl px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-white transition">사업소개</a>
                     <a href="<?=$default_path?>/luxury/location.php" class="block rounded-xl px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-white transition">입점현황</a>
                     <a href="<?=$default_path?>/luxury/partner.php" class="block rounded-xl px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-white transition">취급브랜드</a>
                  </div>
               </div>

               <!-- 스마트스토어 -->
               <a href="<?=$default_path?>/naver/smartstore.php" class="flex items-center py-6 text-sm font-semibold leading-6 text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white transition duration-200">스마트스토어</a>

               <!-- 고객센터 -->
               <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                  <button type="button" class="flex items-center gap-x-1.5 py-6 text-sm font-semibold leading-6 text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white transition duration-200" @click="open = !open">
                     고객센터
                     <svg class="h-4 w-4 flex-none text-slate-450 dark:text-slate-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                     </svg>
                  </button>
                  <div class="absolute -left-8 top-full z-10 w-52 rounded-2xl bg-white dark:bg-slate-900/90 border border-slate-200 dark:border-slate-800 p-2 shadow-2xl backdrop-blur-md" x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1">
                     <a href="<?=$default_path?>/customer/consult.php" class="block rounded-xl px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-white transition">1:1 고객상담</a>
                     <a href="<?=$default_path?>/community/inquiry.php" class="block rounded-xl px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-white transition">제휴문의</a>
                     <a href="<?=$default_path?>/community/notice.php" class="block rounded-xl px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-white transition">공지사항</a>
                  </div>
               </div>
            </div>
            
            <!-- Right CTA Button & Theme Toggle (Desktop) -->
            <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:items-center lg:gap-4">
               <!-- Theme Toggle Dropdown -->
               <div class="relative" x-data="{ open: false }">
                 <button type="button" @click="open = !open" class="rounded-lg p-2 text-slate-500 hover:bg-slate-100 hover:text-slate-900 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-white transition">
                   <!-- Light Icon -->
                   <svg x-show="theme === 'light'" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" /></svg>
                   <!-- Dark Icon -->
                   <svg x-show="theme === 'dark'" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" x-cloak><path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" /></svg>
                   <!-- System Icon -->
                   <svg x-show="theme === 'system'" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" x-cloak><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" /></svg>
                 </button>
                 <div x-show="open" @click.outside="open = false" class="absolute right-0 mt-2 w-32 origin-top-right rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-1 shadow-2xl z-50 text-sm" x-cloak x-transition>
                   <button @click="setTheme('light'); open = false" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-slate-700 dark:text-slate-350 hover:bg-slate-100 dark:hover:bg-slate-800 transition">Light</button>
                   <button @click="setTheme('dark'); open = false" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-slate-700 dark:text-slate-350 hover:bg-slate-100 dark:hover:bg-slate-800 transition">Dark</button>
                   <button @click="setTheme('system'); open = false" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-slate-700 dark:text-slate-350 hover:bg-slate-100 dark:hover:bg-slate-800 transition">System</button>
                 </div>
               </div>

               <a href="<?=$default_path?>/community/inquiry.php" class="rounded-full bg-gradient-to-r from-brand-600 to-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-brand-500/25 hover:from-brand-500 hover:to-indigo-500 transform hover:-translate-y-0.5 transition duration-200">제휴문의 <span aria-hidden="true" class="ml-1">&rarr;</span></a>
            </div>
         </div>
      </div>
      
      <!-- Mobile menu panel -->
      <div class="lg:hidden" x-show="mobileMenuOpen" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1">
         <div class="space-y-1 px-6 pb-8 pt-3 border-t border-slate-200 dark:border-slate-900 bg-white dark:bg-slate-950">
            <!-- 회사소개 모바일 그룹 -->
            <div class="py-2.5">
               <div class="text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase tracking-wider">회사소개</div>
               <div class="mt-1.5 space-y-1 pl-3 border-l border-slate-200 dark:border-slate-800">
                  <a href="<?=$default_path?>/company/company.php" class="block rounded-md py-2 text-base font-medium text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white">회사개요</a>
                  <a href="<?=$default_path?>/company/ceo.php" class="block rounded-md py-2 text-base font-medium text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white">CEO 인사말</a>
                  <a href="<?=$default_path?>/company/history.php" class="block rounded-md py-2 text-base font-medium text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white">회사연혁</a>
                  <a href="<?=$default_path?>/company/map.php" class="block rounded-md py-2 text-base font-medium text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white">오시는 길</a>
               </div>
            </div>
            
            <!-- 온라인판매대행 모바일 그룹 -->
            <div class="py-2.5">
               <div class="text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase tracking-wider">온라인판매대행</div>
               <div class="mt-1.5 space-y-1 pl-3 border-l border-slate-200 dark:border-slate-800">
                  <a href="<?=$default_path?>/business/business1.php" class="block rounded-md py-2 text-base font-medium text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white">사업소개</a>
                  <a href="<?=$default_path?>/business/costomer.php" class="block rounded-md py-2 text-base font-medium text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white">고객사</a>
                  <a href="<?=$default_path?>/business/business.php" class="block rounded-md py-2 text-base font-medium text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white">운영쇼핑몰</a>
                  <a href="<?=$default_path?>/business/partner.php" class="block rounded-md py-2 text-base font-medium text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white">입점제휴몰</a>
               </div>
            </div>

            <!-- 해외명품사업 모바일 그룹 -->
            <div class="py-2.5">
               <div class="text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase tracking-wider">해외명품사업</div>
               <div class="mt-1.5 space-y-1 pl-3 border-l border-slate-200 dark:border-slate-800">
                  <a href="<?=$default_path?>/luxury/business1.php" class="block rounded-md py-2 text-base font-medium text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white">사업소개</a>
                  <a href="<?=$default_path?>/luxury/location.php" class="block rounded-md py-2 text-base font-medium text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white">입점현황</a>
                  <a href="<?=$default_path?>/luxury/partner.php" class="block rounded-md py-2 text-base font-medium text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white">취급브랜드</a>
               </div>
            </div>

            <!-- 스마트스토어 -->
            <div class="py-3">
               <a href="<?=$default_path?>/naver/smartstore.php" class="block text-base font-semibold text-slate-600 dark:text-slate-300 hover:text-slate-900 hover:text-white">스마트스토어</a>
            </div>

            <!-- 고객센터 모바일 그룹 -->
            <div class="py-2.5">
               <div class="text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase tracking-wider">고객센터</div>
               <div class="mt-1.5 space-y-1 pl-3 border-l border-slate-200 dark:border-slate-800">
                  <a href="<?=$default_path?>/customer/consult.php" class="block rounded-md py-2 text-base font-medium text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white">1:1 고객상담</a>
                  <a href="<?=$default_path?>/community/inquiry.php" class="block rounded-md py-2 text-base font-medium text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white">제휴문의</a>
                  <a href="<?=$default_path?>/community/notice.php" class="block rounded-md py-2 text-base font-medium text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white">공지사항</a>
               </div>
            </div>
            
            <div class="mt-6 pt-6 border-t border-slate-200 dark:border-slate-900">
               <a href="<?=$default_path?>/community/inquiry.php" class="block w-full text-center rounded-xl bg-gradient-to-r from-brand-600 to-indigo-600 py-3 text-base font-semibold text-white shadow-lg">제휴문의하기</a>
            </div>
         </div>
      </div>
   </header>
