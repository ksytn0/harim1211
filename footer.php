        <footer>
            <div class="f_top">
                <nav class="f_nav">
                    <a href="#" title="개인정보처리방침">개인정보처리방침</a>
                    <a href="#" title="이용약관">쇼핑몰 이용약관</a>
                </nav>

                <dl>
                    <dt>공지사항</dt>
                    <dd><a href="#" title="지니펫">지니펫 X 한국헌혈견협회 '건강한' 밥이보약 상품출시</a></dd>
                    <dd>
                        <span class='dat'>[2023-03-05]</span>
                    </dd>
                </dl>
            </div>

            <div class="f_bottom">
                <ul>
                    <li>
                        <dl>
                            <dt>주문 및 배송문의</dt>
                            <dd class="tel"><a href="02-2189-6543" title="통화하기">02-2189-6543</a></dd>
                            <dd>평일 10:00 ~ 17:00 <br>(점심:12시~13시)</dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>고객센터</dt>
                            <dd class="tel"><a href="080-250-2304" title="통화하기">080-250-2304</a></dd>
                            <dd>평일 10:00 ~ 17:00 <br>(점심:12시 ~ 13시)</dd>
                        </dl>
                    </li>
                    <li>
                        <a href="#" title=""><i class="fab fa-facebook-square"></i></a>
                        <a href="#" title=""><i class="fa-brands fa-blogger"></i></a>
                        <a href="#" title=""><i class="fab fa-instagram-square"></i></a>
                    </li>
                    <li>
                        <select onChange="siteUrl(this);">
                            <option value="">Family Site</option> <!--연결은 js로-->
                            <option value="https://www.harim.com/main/">(주)하림</option>
                            <option value="https://harimmall.com/index2.html">하림몰</option>
                            <option value="https://www.hypork.com/">팜스코</option>
                            <option value="https://www.orimart.co.kr/">주원산오리</option>
                            <option value="http://www.nseshop.com/">NS홈쇼핑</option>
                            <option value="http://www.mexican.co.kr/2020/inner.php?sMenu=main">맥시칸치킨</option>
                        </select>
                    </li>
                </ul>

                <address>
                    <ul><!-- 내코드 -->
                        <li>
                    <p>대전광역시 대덕구 벚꽃길71 (평촌동) &#65372; 상호 및 대표자: (주)한국인삼공사 000 &#124; 
                        사업자번호 00-000-00000 &#124; 통신판매업신고번호: 제0000 대전대덕 
                        사업자정보확인 &#124; 호스팅서비스 제공자: (주)한국인삼공사 Email: ginipet@kgc.co.kr 
                        Copyright&copy;2018 bt korea ginseng corp. all rightes reserved.
                    </p></li>
                    <li>
                    <p>구매안전(에스크로)서비스 가입사실 확인 고객님은 안전거래를 위해 현금등으로 결제시 저희 소핑몰에 가입한 KCP의 구매안전서비스를 이용하실 수 있습니다.</p></li>
                    </ul>
                </address>
            </div>
        </footer>
    </form>


    <!-- 자바스크립트 내용 실행 -->
    <script>
        function siteUrl(a){
            // alert('선택했음!!!');
            if(a.value!='none'){//a!=b: a와b는 같지않다. 옵션을 선택하여 값이 존재한다면
                window.open(a.value, '_self'); //현재창에서 사이트가 열리도록한다.
            }
            else{ //선택하지 않았다면
                return; //사이트가 연결이 된지 않는다.
            }
        }

        // 로그인,아이디,패스워드 체크하기 ******이거 코딩테스트 면접시험에나와!!*************
        // 사용자가 아이디,패스원드를 입력하면 옳고그름을 체크하여 결과 화면에 알려주기
        // 1.사용자가 입력한 아이디값을 변수에 담음
        let id = document.getElementById('id_txt');
        let pw = document.getElementById('pw_txt');
        let login_btn = document.getElementById('login_btn');
        // 2.로그인버튼을 클릭하면 id,pw값 출력
        login_btn.addEventListener('click', login_check);
        function login_check(){
            console.log(id.value, pw.value);
            if(id.value=='admin'){
                if(pw.value=='1234'){
                    alert('관리자님 반갑습니다. 로그인 성공 되었습니다.');
                }
                else{
                    alert('패스워드가 일치하지 않습니다. 다시 확인하세요.');
                }
            }
            else{
                alert('아이디가 일치하지 않습니다. 다시 확인하세요');
                location.reload(); //f5를 누른것처럼 새로고침되어 사용자가 다시 입력할 수 있도록 입력박스내용을 비운다(사용성을 위해)
            }
        }

    </script>
    
</body>
</html>