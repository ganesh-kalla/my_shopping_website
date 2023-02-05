<!DOCTYPE html>
<html>

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Note: Try to remove the following lines to see the effect of CSS positioning */
    .affix {
      top: 0;
      width: 100%;
      z-index: 9999 !important;
    }

    .affix+.container-fluid {
      padding-top: 70px;
    }

    .side {
      top: 20px;
      z-index: 9999 !important;
    }

    div.col-sm-9 div {
      height: 250px;
      font-size: 28px;
    }

    #section1 {
      color: #fff;
      background-color: #1E88E5;
    }

    #section2 {
      color: #fff;
      background-color: #673ab7;
    }

    #section3 {
      color: #fff;
      background-color: #ff9800;
    }

    #section41 {
      color: #fff;
      background-color: #00bcd4;
    }

    section42 {
      color: #fff;
      background-color: #009688;
    }
  </style>
  <script>
    $(function () {

      $.getJSON('items.json', function (data) {
        $.each(data.person, function (i, f) {
          const tblRow = <div style="margin:20px; display:flex; padding:20px; ">
          </div>
          $(tblRow).appendTo("#userdata tbody");
        });

      });

    });
  </script>
</head>
<body>
  <h1 style="background-color:orange; color:white; font-size:60px;">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img
      src="https://img.freepik.com/free-vector/different-type-bags-illustration_1308-1115.jpg?w=900&t=st=1675506692~exp=1675507292~hmac=5f9fc605a7162d246526fc85fe6054957e3d88056229abb56e3097732f9907e5"
      style="width:20vw; height:20vh;">WELLCOME TO MY CART</h1>
  <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">HOME</a></li>
      <li><a href="#">CATEGORIES</a></li>
      <li><a href="#">MY Orders</a></li>
      <li><a href="#">MY account</a></li>
      <li style="margin-right:0px"> <a href="#">Log Out</a></li>
    </ul>
    
  </nav>
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <img
            src="https://img.freepik.com/free-vector/realistic-smarphone-different-perspectives_52683-51018.jpg?w=1380&t=st=1675508314~exp=1675508914~hmac=c0dd2dec96dfadff26211504f0e4ac41c29ca4b454d6e42f5376e94e69558f75"
            alt="MOBILES" style="width:100vw; height:100vh;">
        </div>

        <div class="item">
          <img
            src="https://img.freepik.com/free-psd/ripped-jean-shorts-with-tag-mockup_53876-65768.jpg?w=826&t=st=1675508357~exp=1675508957~hmac=38b169fd5940ac4d0d67c42b695cf678ce62fb21a36daa66caa4e1ffdf6b85c8"
            alt="JEENS FOR MAN" style="width:100vw;  height:100vh;">
        </div>

        <div class="item">
          <img src="https://as1.ftcdn.net/v2/jpg/01/90/21/12/1000_F_190211299_IFirMrDbUPSgRWqd88reDpJJjmrgCkjL.jpg"
            alt="WATCHES" style="width:100vw;  height:100vh;">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <nav class="col-sm-3" id="myScrollspy" style="padding:20px;">
        <ul class="nav nav-pills nav-stacked" data-spy="top" data-offset-top="205"
          style="padding:20px; margin:5px; background-color:gray;">
          <li><a href="#HOME">Section 1</a></li>
          <li><a href="#section2">Section 2</a></li>
          <li><a href="#section3">Section 3</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section41">Section 4-1</a></li>
              <li><a href="#section42">Section 4-2</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <div class="d-flex col-sm-5">
        <div id="section1">
          <h1>Section 1</h1>
          <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        </div>
        <div id="section2">
          <h1>Section 2</h1>
          <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        </div>
        <div id="section3">
          <h1>Section 3</h1>
          <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        </div>
        <div id="section41">
          <h1>Section 4-1</h1>
          <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        </div>
        <div id="section42">
          <h1>Section 4-2</h1>
          <p>Try to scroll this section and look at the navigation list while scrolling!We’ve trained a model called
            ChatGPT which interacts in a conversational way. The dialogue format makes it possible for ChatGPT to answer
            followup questions, admit its mistakes, challenge incorrect premises, and reject inappropriate requests.
            ChatGPT is a sibling model to InstructGPT, which is trained to follow an instruction in a prompt and provide
            a detailed response</p>
        </div>
      </div>
    </div>
  </div>
  <h3>DAILY DEALS</h3>
  <p>discount ENDS IN

    <!-- <div style="margin:20px; display:flex; padding:20px; ">
<div style="margin:20px;">
  <img src="https://img.freepik.com/free-photo/shirt-mockup-concept-with-plain-clothing_23-2149448751.jpg?w=996&t=st=1675576761~exp=1675577361~hmac=5422b147d5bdedea28762b45b22417ce3a78f65425ba9099294d44535033bd78" height=100% width=100%>
  </div>
  <div style="margin:20px;">
  <img src="https://img.freepik.com/free-photo/fast-fashion-vs-slow-sustainable-fashion_23-2149133967.jpg?w=1060&t=st=1675576859~exp=1675577459~hmac=de9b0b31eab8c2673cab5c400d08a0d68b675a038750037672bd8d8d2547090f"height=100% width=100%>
</div>
  <div style="margin:20px;">
  <img src="https://img.freepik.com/premium-psd/purple-hoodie-hanger-mockup_23-2149169808.jpg?w=360" height=100% width=100%>
</div>
<div style="margin:20px;">
  <img src="https://img.freepik.com/premium-photo/girlish-legs-torn-jeans-isolated-white_392895-147757.jpg?w=360" height=100% width=100%>
</div>
</div>
<h6>.....</h6>
<div style="margin:20px; display:flex; padding:20px; ">
<div style="margin:20px;">
  <img src="https://img.freepik.com/free-psd/shoes-sale-social-media-post-square-banner-template-design_505751-3122.jpg?w=740&t=st=1675576911~exp=1675577511~hmac=99a0d745721042e80e8486e15d84fe829a124901594334559ea0c803e540d1c9" height=100% width=100%>
  </div>
  <div style="margin:20px;">
  <img src="https://img.freepik.com/free-photo/brown-leather-slip-men-s-shoes-fashion_53876-104481.jpg?w=900&t=st=1675576954~exp=1675577554~hmac=654daabce62a9e16b1091f74ea46f5425e9ca7c186240ed403478ceaecb8d381"height=100% width=100%>
  </div>
  <div style="margin:20px;">
  <img src="https://img.freepik.com/free-photo/white-sandals-summer-footwear-fashion_53876-101521.jpg?w=996&t=st=1675577184~exp=1675577784~hmac=91383d507aaead6119b94dfeaaea2d176e8ceced413852d61ae1608dd17fd752" height=100% width=100%>
  </div>
  <div style="margin:20px;">
  <img src="https://img.freepik.com/free-photo/coloured-flip-flops-collection_1101-217.jpg?1&w=996&t=st=1675577215~exp=1675577815~hmac=b1283f5a60ecde933ecfd5e3a36c5314ba11f0d61d921f37ceca365ac192ed67" height=100% width=100%>
  </div>
</div>
<h6>.....</h6>
<div style="margin:20px; display:flex; padding:20px; ">
<div style="margin:20px;">
  <img src="https://img.freepik.com/free-photo/elegant-smartphone-composition_23-2149437106.jpg?w=360&t=st=1675577280~exp=1675577880~hmac=6476c5beb97fe53c02384f1219b5261ebf602b48060d71c851e470b6be79d9c4" height=100% width=100%>
  </div>
  <div style="margin:20px;">
  <img src="https://img.freepik.com/free-vector/camera-accessory_1284-13130.jpg?w=740&t=st=1675577490~exp=1675578090~hmac=1eb9863e9a8102af3d06d705835b7f40483e386f9275057d02827dea6c9b0396" height=100% width=100%>
  </div>
  <div style="margin:20px;">
  <img src="https://img.freepik.com/premium-photo/single-lens-reflex-camera-film-rolls-white-background_35378-3043.jpg?w=996" height=100% width=100%>
  </div>
  <div style="margin:20px;">
  <img src="https://img.freepik.com/free-psd/laptop-mock-up_1310-197.jpg?w=996&t=st=1675578000~exp=1675578600~hmac=568cb9146681b122819b23dc3ab4d1bedf41b9949ce4603d46dcaa3c0f6f40fe" height=100% width=100%>
  </div>
</div>
<h6>.....</h6>
<div style="margin:20px; display:flex; padding:20px; "> -->
  <div style="margin:20px;">
    <img
      src="https://img.freepik.com/free-photo/watch-black-box-bow-tie-lie-white-windowsill_8353-687.jpg?w=996&t=st=1675577576~exp=1675578176~hmac=9a48225f905ea670134b81c996a0637d8f5b75cc34c392b5f216573da6acb84f"
      height=100% width=100%>
  </div>
  <div style="margin:20px;">
    <img src="https://img.freepik.com/premium-photo/man-different-accessories-notepad_160204-2142.jpg?w=996" height=100%
      width=100%>
  </div>
  <div style="margin:20px;">
    <img
      src="https://img.freepik.com/free-photo/eyeglasses-wear_1203-2605.jpg?w=996&t=st=1675577641~exp=1675578241~hmac=7196fa9583939d839eeeddbbe6f9c647775fb60f90c323a5c65bed174beccf31"
      height=100% width=100%>
  </div>
  <div style="margin:20px;">
    <img
      src="https://img.freepik.com/free-vector/smartwatch-front-side_23-2147498802.jpg?w=740&t=st=1675578074~exp=1675578674~hmac=8812e4646a5419655923f8371be9ef10787331d6587e30a859a92d287dc048e7"
      height=100% width=100%>
  </div>
  </div>
</body>

</html>