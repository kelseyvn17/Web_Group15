<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InstaKilogram</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
  <link rel="stylesheet" href="user.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
<body>
  <header>
    <div class="logo">
        <img src="https://ik.imagekit.io/7qsdaruk7zf/FOOTBALL_C7yJFfbyD.png?ik-sdk-version=javascript-1.4.3&updatedAt=1652331523073" alt="logo">
        <h2>InstaKilogram</h2>
    </div>
    
    <div class="navi">
        <div class="search_box">
            <input type="search" placeholder="Search...">
            <span class="fa fa-search"></span>
        </div>
        <a href="form1.html"><button class="button">Sign Up</button></a>
    </div>
  </header>

  <!-- Hero Section  -->
  <section id="hero" class="hero container">
    <div class="hero-info">
      <p class="hero-info-subheading1">Welcome</p>
      <h1 class="hero-info-heading">InstaKilogram</h1>
      <p class="hero-info-subheading2">Let’s join with us and explore more interesting pictures.</p>
    </div>
    <div class="hero-img">
      <img src="https://ik.imagekit.io/7qsdaruk7zf/Screenshot_2022-05-13_180729_0qbnM6mdb9.png?ik-sdk-version=javascript-1.4.3&updatedAt=1652440082287" alt="" >
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Write post section-->
  <div class="write-post-container">
    <div class="user-profile">
      <img src="https://ik.imagekit.io/7qsdaruk7zf/profile__1__sqMtv9QAj.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1652499567904">
      <div>
        <p class="statusname">Thuan Than Tho</p>
        <small>Public </small>
      </div>
    </div>

    <div class="post-input-container">
      <textarea rows="3" placeholder="What's on your mind?"></textarea>
      <div class="add-post-links">
      <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <label for="description">description</label>
        <input type="text" name="description" maxlength=50><br><br>

        <p>Choose mode view to upload: </p>
        <label>Public</label>
        <input class="button" type="submit" name="public" value="Submit"><br><br>
        <label>Internal</label>
        <input class="button" type="submit" name="internal" value="Submit"><br><br>
        <label>Private</label>
        <input class="button" type="submit" name="private" value="Submit"><br><br>

    </form>
<?php
    $dirname = "img/";
    $img = glob($dirname."*.{jpg, jpeg, png, gif}", GLOB_BRACE);
    $sort = array();

    foreach($img as $image){
        $sort[$image]=filemtime($image);
    }
    arsort($sort);

    foreach($sort as $image => $time){
        echo "<img src='$image' style='max-width:800px, max: height 800px;px;' />";
        echo "<br>";
        echo "Name: ";
        $description = preg_replace('/.jpeg||.png||.jpg||.gif/', '', basename($image));
        echo $description;
        echo '<br>';
    };
?>
      </div>

      <div id="display-image"></div>
    </div>
  </div>
  <!-- End Write post section-->

  <!-- Post1-->
  <div class="post">
    <div class="info">
      <div class="user">
        <div class="profile-pic">
          <img src="https://ik.imagekit.io/7qsdaruk7zf/280877213_1795259600805147_6351848395491869277_n__1__Oi-2JyKZ0.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1652676372727" alt="" />
        </div>
        <p class="username">Thuan Than Tho</p> 
        <span>May 14 2022, 22:22 pm</span>
      </div>
      <i class="fas fa-ellipsis-h options"></i>
    </div>
    <img src="https://ik.imagekit.io/7qsdaruk7zf/279027463_351328576868201_6652431661132783400_n_7OxHzy99uq.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1652164524151" class="post-image" alt="" >
    <div class="post-content">
      <div class="status">
        <p> Today I feel so good</p>
      </div>
      <div class="reaction-wrapper">
        <div class="icons">
          <div><img src="https://ik.imagekit.io/7qsdaruk7zf/heart_red.png?ik-sdk-version=javascript-1.4.3&updatedAt=1652515550915"  alt=""  class="heart" onclick="likeButton()">100</div>
          <div><img src="https://ik.imagekit.io/7qsdaruk7zf/comment_jfrvwKojK.png?ik-sdk-version=javascript-1.4.3&updatedAt=1652508985671"  alt=""  >20</div>
          <div><img src="https://ik.imagekit.io/7qsdaruk7zf/share_LCJZRYZJT.png?ik-sdk-version=javascript-1.4.3&updatedAt=1652518307120"  alt="" >7</div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Post1-->


  <!-- Post2-->
  <div class="post">
    <div class="info">
      <div class="user">
        <div class="profile-pic">
          <img src="https://ik.imagekit.io/7qsdaruk7zf/269694777_1336600533456275_7379902986232690213_n_fRrJvVxgq.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1652676372856" alt="" />
        </div>
        <p class="username">Thanh Than Thien</p> 
        <span>May 13 2022, 13:45 pm</span>
      </div>
      <i class="fas fa-ellipsis-h options"></i>
    </div>
    <img src="https://ik.imagekit.io/7qsdaruk7zf/275317359_1380359612413700_5564200526769355436_n_OFEJqd2Vs.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1652525446016" class="post-image" alt="" >
    <div class="post-content">
      <div class="status">
        <p> Which do you like between me or background?</p>
      </div>
      <div class="reaction-wrapper">
        <div class="icons">
          <div><img src="https://ik.imagekit.io/7qsdaruk7zf/heart.png?ik-sdk-version=javascript-1.4.3&updatedAt=1652515433989"  alt=""  class="heart" onclick="likeButton()">999</div>
          <div><img src="https://ik.imagekit.io/7qsdaruk7zf/comment_jfrvwKojK.png?ik-sdk-version=javascript-1.4.3&updatedAt=1652508985671"  alt=""  >276</div>
          <div><img src="https://ik.imagekit.io/7qsdaruk7zf/share_LCJZRYZJT.png?ik-sdk-version=javascript-1.4.3&updatedAt=1652518307120"  alt="" >76</div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Post2-->


  <!-- Post3-->
  <div class="post">
    <div class="info">
      <div class="user">
        <div class="profile-pic">
          <img src="https://ik.imagekit.io/7qsdaruk7zf/279064600_3247620855563378_1946777291902921180_n_2IxSyZWe_.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1652676372682" alt="" />
        </div>
        <p class="username">Thanh That Tha</p> 
        <span>May 14 2022, 8:42 am</span>
      </div>
      <i class="fas fa-ellipsis-h options"></i>
    </div>
    <img src="https://ik.imagekit.io/7qsdaruk7zf/275792411_503177571281218_6498737493430941191_n_ZVDRh_pOd.png?ik-sdk-version=javascript-1.4.3&updatedAt=1647766229616" class="post-image" alt="" >
    <div class="post-content">
      <div class="status">
        <p> This is my product that I created yesterday</p>
      </div>
      <div class="reaction-wrapper">
        <div class="icons">
          <div><img src="https://ik.imagekit.io/7qsdaruk7zf/heart.png?ik-sdk-version=javascript-1.4.3&updatedAt=1652515433989"  alt=""  class="heart" onclick="likeButton()">27</div>
          <div><img src="https://ik.imagekit.io/7qsdaruk7zf/comment_jfrvwKojK.png?ik-sdk-version=javascript-1.4.3&updatedAt=1652508985671"  alt=""  >3</div>
          <div><img src="https://ik.imagekit.io/7qsdaruk7zf/share_LCJZRYZJT.png?ik-sdk-version=javascript-1.4.3&updatedAt=1652518307120"  alt="" >2</div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Post3-->

  <script src="./app.js"></script>
  <script type="text/javascript">
    function getImage(imagename)
    {
      var newimg=imagename.replace(/^.*\\/,"");
      $('#display-image').html(imagename);
    }
  </script>

</body>
</html>