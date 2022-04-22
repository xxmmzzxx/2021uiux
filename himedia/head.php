<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>himedia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>
        /* reset  */
        *{margin: 0;padding: 0;box-sizing: border-box;}
        li{list-style: none;}
        a:link,a:visited{color: #000;text-decoration: none;}
        .clearfix:after{content:"";display: block;clear: both;}
        img{display: block;}
        body{
            font-family: 'Roboto', sans-serif;
            min-width:980px
        }
        
        /* header  start */
        
        /* util menu  */
        .util_wrapper{
            width: 980px;
            margin: 0 auto;
            
            
        }
        .util_wrapper>ul.util{float: right;}
        .util_wrapper>ul.util>li{float: left;position: relative;}
       
         .util_wrapper>ul.util>li:after{
            content:"";
            width: 1px;height: 11px;
            display: block;background-color: #ccc;
            position: absolute;top: 7px;
        }
        .util_wrapper>ul.util>li:first-child:after{
            content:"";display: none;
        }
        
        .util_wrapper>ul.util>li>a{display: block;font-size: 12px;padding: 6px 10px;}
        .wall{
            height: 1px;background: #c4c4c4;
        }
        /* logo  */
        .logo_wrapper{
            width: 980px;margin: 0 auto;;
            padding: 23px;
        }
        .logo_wrapper>h1>a{display: block;text-align: center;font-size: 24px;line-height:28px;}
        /* nav  */
        .nav_wrapper{background-color: #1D5DA4;border-bottom: 3px solid #000;}
        .nav_wrapper>.nav{width: 980px;margin: 0 auto;}
        .nav_wrapper>.nav>li{
            float: left;width: 16.666%;
            border-left: 1px solid #356DAA;
            /* border-right: 1px solid #356DAA; */
            
        }
        .nav_wrapper>.nav>li:first-child{
            /* border-left: 1px solid #356DAA; */
        }
        .nav_wrapper>.nav>li:last-child{
            border-right: 1px solid #356DAA;
        }
        .nav_wrapper>.nav>li:nth-child(6){
            /* background-color: orange; */
        }
        .nav_wrapper>.nav>li>a{
            display: block;text-align: center;line-height: 45px;color:white;
            font-weight: bold;
        }
        .nav_wrapper>.nav>li>a:hover{background-color:#0d2b4d;}
        /* header end  */
        .visual{
            background-color: #213C6B;
            background-image: url(images/main_bg01.jpg);
            background-repeat: no-repeat;
            background-position: center;
            height:400px
        }
        .slide{
            width: 980px;height: 400px;
            margin: 0 auto;
            
            position: relative;
            overflow: hidden; /* 부모자 크기를 넘치면 잘라줌 */
            
        }
        .slide .img1{
            position: absolute;
            top:100px
        }
        .slide .img2{
            position: absolute;
            right: 0;  /* overflow: hidden; 부모자 크기를 넘치면 잘라줌 */
        }
        .bannerWrap{background-color: #eee;margin-bottom:50px;}
         .banner{
            width: 980px;margin: 0 auto;
        }
         .banner li{
            float: left;width: 20%;height: 196px;
            padding-top: 13px;
        }
        .banner img{margin: 0 auto;margin-bottom: 10px;}
        .banner h3{font-size: 18px;text-align: center;margin-bottom: 5px;color: #fff;}
        .banner p{font-size: 14px;text-align: center;color: #fff;}
         .banner li:nth-child(1){background-color: #7C99B9;}
         .banner li:nth-child(2){background-color: #4F74A1;}
         .banner li:nth-child(3){background-color: #4B8CE0;}
         .banner li:nth-child(4){background-color: #3DB5F2;}
         .banner li:nth-child(5){background-color: #95C8FF;}

         /* section one  */

         .section_one{width: 980px;margin: 0 auto}
         .section_one{width: 980px;margin: 0 auto;margin-bottom: 25px;}
         .section_one li.card_one{
             float: left;width: 310px;margin-right: 25px;
         }
         .section_one li:last-child{margin-right:0;}
         .section_one .card_body{
             padding: 16px 16px;
             border: 1px solid #ccc;
             border-top: 0;
            }
         .section_one h3{font-size: 18px;margin-bottom:5px;}
         .section_one p{font-size: 14px;}

         .card_body h3{font-size: 18px;margin-bottom:5px;}
         .card_body p{font-size: 14px;}
         .card_body .btn{font-size: 14px;color:#6199E2;font-weight: bold;}

         .section_two{width: 980px;margin: 0 auto}
         .section_two li.card_two{
             float: left;width: 310px;margin-right: 25px;
             border: 1px solid #ccc;padding: 16px;
             position: relative;overflow: hidden;
         }
         .section_two li:last-child{margin-right:0;}
         .section_two .card_two img{
             position: absolute;
             right: -30px;
             top: 14px;
         }
         .card_two .card_body{position: relative;}
         .card_two .card_body h3,
         .card_two .card_body p{margin-bottom: 15px;}

         .section_two li:nth-child(1)
         {background-image:url(images/content_icon03.png);
        background-repeat: no-repeat;
    background-position: 100px ;}
    </style>
</head>
<body>
    <!-- header start -->
     <header>
         <div class="util_wrapper clearfix">
            <ul class="util clearfix">
                <li><a href="#">Login</a></li>
                <li><a href="#">Join</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">English</a></li>
            </ul>
         </div>
         
         <div class="wall"></div>
         
         <div class="logo_wrapper">
             <h1 class="logo"><a href="#">하이미디어</a></h1>
         </div>
             
             
         <nav class="nav_wrapper"> <!-- backgroundcolor  -->
            <ul class="nav clearfix"> <!-- w980 m0a  -->
                <li><a href="#">회사소개</a></li>
                <li><a href="#">제품소개</a></li>
                <li><a href="#">사업영역</a></li>
                <li><a href="#">고객센터</a></li>
                <li><a href="#">사회공헌</a></li>
                <li><a href="#">인재채용</a></li>
            </ul>
        </nav>
        
     </header>
     <!-- header end  -->
     <!-- visual start -->
     <div class="visual">
        <div class="slide">
            <img src="images/mainVisualText.png" alt="" class="img1">
            <img src="images/main_slider_img.png" alt="" class="img2">
        </div>
     </div>
     <!-- visual end  -->
     <!-- banner start -->
         <div class="bannerWrap">
             <div class="banner"> <!-- w980px m0a -->
                <ul class="clearfix">
                    <li>
                        <img src="images/icon01.png" alt="">
                        <h3>사회공헌</h3>
                        <p>소외된 이웃과 함께 합니다. </p>
                    </li>
                    <li>
                        <img src="images/icon02.png" alt="">
                        <h3>사회공헌</h3>
                        <p>소외된 이웃과 함께 합니다. </p>
                    </li>
                    <li>
                        <img src="images/icon03.png" alt="">
                        <h3>사회공헌</h3>
                        <p>소외된 이웃과 함께 합니다. </p>
                    </li>
                    <li>
                        <img src="images/icon04.png" alt="">
                        <h3>사회공헌</h3>
                        <p>소외된 이웃과 함께 합니다. </p>
                    </li>
                    <li>
                        <img src="images/icon05.png" alt="">
                        <h3>사회공헌</h3>
                        <p>소외된 이웃과 함께 합니다. </p>
                    </li>
                </ul>
             </div>
         </div>
         <!-- banner end  -->
         
             <div class="section_one">  <!-- w980px m0a -->
                 <ul class="clearfix">
                     <li class="card_one">
                        <img src="images/content_img01.png" alt="">
                        <div class="card_body">
                            <h3>회사개요</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, ipsum!</p>
                        </div>
                     </li>
                     <li class="card_one">
                        <img src="images/content_img02.png" alt="">
                        <div class="card_body">
                            <h3>회사개요</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, ipsum!</p>
                        </div>
                     </li>
                     <li class="card_one">
                        <img src="images/content_img03.png" alt="">
                        <div class="card_body">
                            <h3>회사개요</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, ipsum!</p>
                        </div>
                     </li>
                 </ul>
             </div>

             <div class="section_two">  <!-- w980px m0a -->
                <ul class="clearfix">
                    <li class="card_two">
                        <img src="images/content_icon01.png" alt="">
                        <div class="card_body">
                            <h3>사보</h3>
                            <p>풍부한 경험과 최고의 <br>기술력으로 새로운 미래를<br>열어갑니다.</p>
                            <div class="btn">자세히보기</div>
                        </div>
                    </li>
                    <li class="card_two">
                        <img src="images/content_icon02.png" alt="">
                        <div class="card_body">
                            <h3>찾아오시는 길</h3>
                            <p>풍부한 경험과 최고의 <br>기술력으로 새로운 미래를<br>열어갑니다.</p>
                            <div class="btn">자세히보기</div>
                        </div>
                     </li>
                     <li class="card_two">
                        <img src="images/content_icon03.png" alt="">
                        <div class="card_body">
                            <h3>제품정보</h3>
                            <p>풍부한 경험과 최고의 <br>기술력으로 새로운 미래를<br>열어갑니다.</p>
                            <div class="btn">자세히보기</div>
                        </div>
                     </li>

                </ul>
            </div>



         <!-- <div style="background-color: red;height: 100px;"></div> -->
    
  
</body>
</html>