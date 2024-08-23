<?php
  include "./shared/header-top.php"
?>
<style>
  .comming-soon-div{
    margin:0 auto;
  }
  @media(max-width:599px){
    .comming-soon-div{
    width: 100%;
  }
  }
  @media(min-width:600px) and (max-width:799px){
    .comming-soon-div{
    width: 80%;
  }
  }
  @media(min-width:800px){
    .comming-soon-div{
    width: 50%;
  }
  }
</style>
</head>
<?php
  include "./shared/navbar.php"
?>

<section class="comming-soon-sec">
  <div class="comming-soon-div">
    <img src="images/comming-soon.jpg">
  </div>
</section>

<?php
    include "./shared/footer.php"
?>      
<?php
    include "./shared/script.php"
?>