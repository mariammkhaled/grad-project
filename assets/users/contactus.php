<?php
 include("../shared/header.php");


 ?>
 <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;600;700;800&display=swap"
      rel="stylesheet"
    />

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./style.css">
<style>

  *{
    box-sizing:border-box;
  }

  body{
  background-color: #ffffff;
  font-family: "Inter", sans-serif;
  }

.ico{
      
  display: flex;
  margin-left: auto;
  margin-right: auto;
  justify-content:space-between;
  width: 250px;
  height: 120px;
}
.ico img:hover{
  transition:500ms;
  transform:scale(1.3);
}

.titles{
      display: flex;
      flex-direction:column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
}

</style>
<div class="titles">
<h1> contact us </h1><br> 
<h3> we will be pleasure to help you </h3><br>
<h5> you can find us </h5><br>
<p> 6 of October , Cairo<br> 01144577149<p><br>
<h5> Or</h5><br>
</div>
<div class="ico">

  <a href="https://www.facebook.com/Your-Hearts-Sight-101389565974728/">
         <img alt="facebook page" width="50px" src="../images/facebook.png">

  <a href="https://instagram.com/yourheartssight?igshid=YmMyMTA2M2Y=">
        <img alt="facebook page" width="50px" src="../images/instagram.png">    </a>
  </div>
      

<!-- JavaScript Bundle with Popper -->
<?php include("../shared/footer.php"); ?>