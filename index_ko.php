php<!doctype html>
<html lang="ko">
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" href="style_index.css">
   <link rel="icon" type="/x-ico" href="1_icon.ico">

   <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>

   <style type="text/css">
     a { text-decoration:none }
   </style>

   <title>Soli Deo Gloria : Post Tenebras Lux</title>


</head>

<body>

      <div class="container">
<!-- 1st line begins. -->

             <div class="Header">

               <h1>Post Tenebras Lux (어둠 이후에 빛)</h1>

               <div class="Header2">

                 <font color="blue">Soli Deo Gloria !</font>
                 <font color="black">Aut quis prior dedit illi et retribuetur ei, Quoniam ex ipso, et per ipsum, et in ipso sunt omnia: ipsi gloria in saecula. Amen. (Rom 11:35-36)</font>
                 <br>
                 <font color="blue">영광이 오직 하나님께 !</font>
                 <font color="black">누가 주께 먼저 드려서 갚으심을 받겠느뇨 이는 만물이 주에게서 나오고 주로 말미암고 주에게로 돌아감이라 영광이 그에게 세세에 있으리로다 아멘. (롬 11:35-36)</font>
                 <br><br>

               </div>

             </div>


<!-- 2nd line begins. -->


             <div class="Null">
             </div>

             <div class="Top_Menu">

                    <nav >
                      <button class="btn3" onclick="window.location.href='index.php'">← 나가기</button>
                      <button class="btn3" onclick="window.location.href='index_eng.php'">↺ English</button>
                      <button class="btn3"><a href="알림사항.php" target="content_ko">알림사항</a></button>
                      <button class="btn3" onclick="window.location.href='#disqus_thread'">댓글</button>
                      <button class="btn3"><a href="기타사이트.php" target="content_ko">기타 사이트</a></button>
                    </nav>

             </div>


<!-- 3rd line begins. -->

        <!-- 드롭 다운 메뉴 루틴 시작 -->

             <div class="Left_Menu">

                    <iframe src="leftmenu_ko.php" name="leftmenu_ko" frameborder="no"
                    marginwidth="" marginheight="3" width="100%" height="100%" >
                    </iframe>


             </div>


             <div class="Main">

                    <iframe src="content_ko.php" name="content_ko" frameborder="no"
                    marginwidth="" marginheight="3" width="100%" height="100%" >
                    </iframe>

             </div>

             <!-- 메뉴 드롭 다운 끝 -->

   <!-- 4th line begins. -->

             <div class="Footer">
               <p>
                 <div id="disqus_thread"></div>
                 <script>

                 /**
                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                 /*
                 var disqus_config = function () {
                 this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                 this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                 };
                 */
                 (function() { // DON'T EDIT BELOW THIS LINE
                 var d = document, s = d.createElement('script');
                 s.src = 'https://solideogratia.disqus.com/embed.js';
                 s.setAttribute('data-timestamp', +new Date());
                 (d.head || d.body).appendChild(s);
                 })();
                 </script>
                 <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

               </p>
             </div>


      </div>


     <!-- gotobottom position -->
     <div id="scrollbottom">

     <a style="display:scroll;position:fixed;bottom:30px;right:3px;" rel="nofollow"
     href="#" title="Back to Top" style="font-size:2.0em">맨 위로↑</a>
     <br />
     <a style="display:scroll;position:fixed;bottom:10px;right:3px;" rel="nofollow"
     href="#scrollbottom" title="Go to Bottom" style="font-size:2.0em">맨 아래로↓</a>

     </div>

</body>
</html>
