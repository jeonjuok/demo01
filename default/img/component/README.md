# Cafe24 빌더 공용 컴포넌트 이미지 백업 가이드

이 디렉터리는 Cafe24 웹빌더 공용 가상 경로 (`/demo01/img/component/` 및 `/demo01/component/`) 하위의 보드 전용 이미지들을 독립 서버로 이관할 때 백업하여 보관하는 경로입니다.

## 백업 대상 이미지 목록
단독 서버 이전 시, Cafe24 가상 경로 아래에서 로드되던 다음 이미지들을 수동으로 다운로드받아 이 폴더 구조에 맞게 배치해야 합니다.

1. **게시판 공용 이미지 및 아이콘:**
   - `/demo01/img/component/board/board_3/output_ol.gif`
   - `/demo01/img/component/board/board_3/icon_sct.gif`
   - `/demo01/img/component/board/board_3/write.gif`
   - `/demo01/img/component/board/board_3/search.gif`
   - `/demo01/img/component/board/board_1/search.gif`
   - `/demo01/img/_designcoco/images/btn_confirm.gif`
   - `/demo01/img/_designcoco/images/btn_cancel.gif`

2. **메인 페이지 운영쇼핑몰 배너 이미지:**
   - `/demo01/component/board/board_4/u_image/8/1160253452_mall_01.jpg` (도루코공식몰)
   - `/demo01/component/board/board_4/u_image/7/1018773828_mall_02.jpg` (동원천지인공식몰)
   - `/demo01/component/board/board_4/u_image/6/1595477465_mall_03.jpg` (그란도노공식몰)

## 이관 후 경로 변경 규칙
이미지 에셋이 이 폴더 하위로 완전히 저장된 후에는 코드 내에서 경로를 다음과 같이 변경합니다.
- **기존:** `/demo01/img/component/board/board_3/...`
- **변경:** `<?=$default_path?>/img/component/board/board_3/...`
