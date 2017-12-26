<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/main.css"/>
    <script src="js/main.js"></script>
    <meta charset="utf-8"/>
    <?php 
    echo '<title>$news["title"]</title>';
    
    ?>
  </head>
  <body>
    <div class="wrapper">
      <div class="top_slider">
        <div id="slides">
          <div class="slide showing">
            <div class="description">
              <h3>Iphone 7</h3><span><span>The moment you use </span><span style="color: yellow;">iPhone 7</span><span>, you know you never felt anything like it.</span></span>
              <div class="bttns">
                <div class="shop_bttn">Shop now</div>
                <div class="more_bttn"><a href="/banner.php?id=1">learn more</a></div>
              </div>
            </div>
          </div>
          <div class="slide"> 
            <div class="description">
              <h3>Samsung S7 Edge</h3><span><span>The moment you use </span><span style="color: yellow;">Samsung S7 Edge</span><span>, you know you never felt anything like it.</span></span>
              <div class="bttns">
                <div class="shop_bttn">Shop now</div>
                <div class="more_bttn"><a href="/banner.php?id=2">learn more</a></div>
              </div>
            </div>
          </div>
          <div class="slide"> 
            <div class="description">
              <h3>HTC One</h3><span><span>The moment you use </span><span style="color: yellow;">HTC One</span><span>, you know you never felt anything like it.</span></span>
              <div class="bttns">
                <div class="shop_bttn">Shop now</div>
                <div class="more_bttn"><a href="/banner.php?id=3">learn more</a></div>
              </div>
            </div>
          </div>
          <div class="slide"> 
            <div class="description">
              <h3>LG G6</h3><span><span>The moment you use </span><span style="color: yellow;">LG G6</span><span>, you know you never felt anything like it.</span></span>
              <div class="bttns">
                <div class="shop_bttn">Shop now</div>
                <div class="more_bttn"><a href="/banner.php?id=4">learn more</a></div>
              </div>
            </div>
          </div>
          <div class="slide"> 
            <div class="description">
              <h3>Google Pixel</h3><span><span>The moment you use </span><span style="color: yellow;">Google Pixel</span><span>, you know you never felt anything like it.</span></span>
              <div class="bttns">
                <div class="shop_bttn">Shop now</div>
                <div class="more_bttn"><a href="/banner.php?id=5">learn more</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="line"></div>
        <div class="menu">
          <div class="logo">
            <div class="rocket"> </div><a href="/index.php">RocketPhones</a>
          </div>
          <div class="center"><a href="/">Main</a><a href="#!">Shop</a><a href="#!">Support</a><a href="/contacts.php">Contacts</a></div>
          <div class="right_side"><a href="/signin.php">Add Material</a>
            <div class="shop_cart"></div>
          </div>
        </div>
      </div>
      <!--
      <?php
      $dbc = false;
      
      function connectDB(){
      	global $dbc;
      	$dbc = new mysqli ("localhost", root, "",  "webSDU");
      	$dbc->query("SET NAMES 'utf-8'");
      }
      
      
      function closeDB(){
      	global $dbc;
      	$dbc->close();
      
      }
      
      
      	function getNews($limit, $id){
      	global $dbc;
      	connectDB();
      	if($id)
      		$where = "WHERE `id` = ".$id;
      	$result = $dbc->query("SELECT * FROM `news` $where ORDER BY `id` LIMIT $limit");
      	closeDB();
      
      	if(!$id)
      		return resultToArray($result);
      	else
      		return $result->fetch_assoc();
      	}
      
      	function getBanner($limit, $id){
      	global $dbc;
      	connectDB();
      	if($id)
      		$where = "WHERE `id` = ".$id;
      	$result = $dbc->query("SELECT * FROM `banner` $where ORDER BY `id` LIMIT $limit");
      	closeDB();
      
      	if(!$id)
      		return resultToArray($result);
      	else
      		return $result->fetch_assoc();
      	}
      
      	function getCompany($limit, $id_cat){
      	global $dbc;
      	connectDB();
      	if($id_cat)
      		$where = "WHERE `id_cat` = ".$id_cat;
      	$result = $dbc->query("SELECT * FROM `news` $where ORDER BY `id` LIMIT $limit");
      	closeDB();
      
      	
      	return resultToArray($result);
      	
      	}
      	function resultToArray($result){
      	$array = array();
      	while (($row = $result->fetch_assoc())!=false)
      		$array[] = $row;
      	return $array;
      	}
      	
      ?>
      -->
      <!--
      <?php
      $news = getBanner(1, $_GET["id"]);
      $title = $news["title"];
      ?>
      
      -->
      <div class="main_body">
        <?php
         
         
        echo '
        <div class="full_article">
        <div class="fa_left">
        
        	<img src="img/tovars/'.$news["image"].'.jpg" alt=""/>
        </div>
        <div class="fa_right">
        <div class="right_top">
        	<span>'.$news["title"].'</span>
        	<p>'.$news["full_text"].'</p> </div>
        <div class="right_bottom">
        	<p>Price:  '.$news["price"].'$</p> 		
        <div class="bttns" style="margin-top: 8px;">
        <div class="shop_bttn bottom">buy now</div>
         </div>
        </div>
        </div>		
         
        </div>';
         
        ?>
        <div class="moremore">More devices</div>
        <div class="tovars">
          <?php
          	$news = getNews(6, 0);
          for($i = 3; $i<count($news); $i++){
          echo " <div class=\"device_info\">";
          echo '<span>'.$news[$i]["title"].'</span><img src="img/tovars/'.$news[$i]["image"].'.jpg" alt=""/>
          <div class="bttns" style="margin-top: 8px;">
          <div class="shop_bttn bottom">buy now</div>
          <div class="more_bttn bottom"><a href="/article.php?id='.$news[$i]["id"].'">learn more</a></div>
          </div>
          </div>';
          }
          ?>
        </div>
      </div>
      <div class="footer"><span>by </span><span style="color: #ffea12 ;">Mustazhap  </span><span> -- {c} -- 2017 for SDU Web Foundations</span></div>
    </div>
  </body>
</html>