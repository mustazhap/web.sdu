<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/main.css"/>
    <script src="js/main.js"></script>
    <meta charset="utf-8"/>
    <title>Contact us | Front Coder</title>
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
      <div class="main_body">
        <?php
        $folder = "img/tovars";
        if (is_dir($folder)){
          if($open = opendir($folder)){}
        	while(($file = readdir($open)) !=false){
        	if($file == '.' || $file =='..') continue;
        
        	}
        	closedir($open);
        	}

        if(isset($_POST['add'])){
        $title = strip_tags(trim($_POST['title']));
        $full_text = strip_tags(trim($_POST['full_text']));
        $price = strip_tags(trim($_POST['price']));
        $company = strip_tags(trim($_POST['company']));

        
        mysqli_query("
        		INSERT INTO news(title, full_text, price, company) VALUES ('$title', '$full_text', '$price', '$company')
        	");
        
        }?>
       <div class="addd"
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
       <div class="a"

          <label for="title">Title: </label>
          <input type="text" name="title"/></div>
       <div class="a"

          <label for="text">text: </label>
          <textarea name="full_text"> </textarea></div>

      <div class="a"

          <label for="text">Model (1-apple, 2-google, 3-samsung): </label>
          <input type="text" name="company"/></div>    
       <div class="a"

          <label for="text">price: </label>
          <input type="text" name="price"/>
          
          <button type="submit" name="add">add</button></div>
        </form>
      </div>
      </div>
      <div class="footer"><span>by </span><span style="color: #ffea12 ;">Mustazhap  </span><span> -- {c} -- 2017 for SDU Web Foundations</span></div>
    </div>
  </body>
</html>