<?php
   include 'includes/layout.php';
?>
<div id="container">   
 	
   <header>
     <h1>Welcome!</h1>
   </header>      
   
   <?php
   include 'includes/aside.php';
   ?>
   
   <section>
   	<article>
   		<p>제 홈페이지는 직접 HTML5, CSS3, JavaScript로 제작한 블로그 겸 포트폴리오  웹 페이지입니다.</p>
   		<p>웹 호스팅은 AWS(Amazon Web Service)를 통해 하였고, DNS는 까페24를 이용했습니다.</p>
   		<p>Blog 관련 소스는 왼쪽 프로필에 제 Github(고양이 그림)에 들어가시면 다운받을 수 있습니다.</p>
   		<p><strike>현재 블로그는 Desktop에만 맞추어서 제작이 되어서 핸드폰으로 보시면 레이아웃이 깨집니다. 추후에 모바일용 UI도 제작할 예정입니다.</strike>  &nbsp; <font color='red'>Responsive Design 수정 (`14.07.16)</font></p>
   		<p>HTML5로 제작되었기 때문에 브라우저 이용시 <strong><ins>IE 11, Chrome 35, Firefox 30</ins></strong>에서 가장 최적화된 페이지를 보실 수 있습니다. <br />
   			IE 7, 8, 9, 10 에서 보실 경우, 레이아웃이 깨질 수 있습니다. </p>
   	</article>
   </section>

</div>
    
<?php
  include 'includes/footer.php';
?>