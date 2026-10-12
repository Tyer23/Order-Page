<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="description" content="product burritos restaurant" />
  <meta name="keywords" content="HTML5, CSS layout" />
  <meta name="author" content="aaradhya lamsal" />

  <title>Menu</title>
  <link href="styles/style.css" rel="stylesheet" />
  

</head>

<body>
  <?php
     include_once "includes/header.inc";
     include_once "includes/nav.inc";
  ?>

  <aside>
    <section>
    

    <div class="me">
      <h1>Menu</h1>
    </div>
     
      <div class="rows">
        <div class="column">
         
          <h2>Italian Dish</h2>
          <div class="Border">
            <div class="image">
              <img src="images/Pepperoni-Pizza_5-SQjpg.jpg" alt="Italian Dish" />
            </div>
            <div>
              <h3>Pepperoni Pizza</h3>
              <h4>$12.45</h4>
              <div class="button">
                <a href="enquire.php" class="order" >Order</a>
              </div>
            </div>
          </div>
          <hr
           
          />
          <div class="Border">
            <div class="image">
              <img src="images/sweet-potato-and-lentil-lasagne-170423-2.jpg" alt="Italian Dish" />
            </div>
            <div>
              <h3>Lasagne</h3>
              <h4>$18.50</h4>
              <div class="button">
                <a href="enquire.php" class="order" >Order</a>
              </div>
            </div>
          </div>
          <hr

          />
          <div class="Border">
            <div class="image">
              <img src="images/bruschetta-105610-1.jpeg" alt="Italian Dish"/>
            </div>
            <div>
              <h3>Bruschetta</h3>
              <h4>$19.00</h4>
              <div class="button">
                <a href="enquire.php" class="order" >Order</a>
              </div>
            </div>
            <hr
             
            />
          </div>
        </div>

        <div class="column">
          <h2>Mexican Dish</h2>
          <div class="Border">
            <div class="image">
              <img src="images/frijoles-charros.jpg" alt="Mexican Dish"/>
            </div>
            <div>
              <h3>Frijoles Charros</h3>
              <h4>$16.15</h4>
              <div class="button">
                <a href="enquire.php" class="order" >Order</a>
              </div>
            </div>
          </div>
          <hr
          
          />
          <div class="Border">
            <div class="image">
              <img src="images/Philly-Cheesesteak-Quesedilla-5.jpg" alt="Mexican Dish" />
            </div>
            <div>
              <h3>Quesedilla</h3>
              <h4>$21.30</h4>
              <div class="button">
                <a href="enquire.php" class="order">Order</a>
              </div>
            </div>
          </div>
          <hr
           
          />
          <div class="Border">
            <div class="image">
              <img src="images/Huevos-Rancheros-7.jpg" alt="Mexican Dish" />
            </div>
            <div>
              <h3>Huevos Rancheros</h3>
              <h4>$18.70</h4>
              <div class="button">
                <a href="enquire.php" class="order" >Order</a>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <h2>Arabian Dish</h2>
          <div class="Border">
            <div class="image">
              <img src="images/250px-Hummus_and_Ful.jpg" alt="Arabian Dish" />
            </div>
            <div>
              <h3>Hummus</h3>
              <h4>$23.00</h4>
              <div class="button">
                <a href="enquire.php" class="order" >Order</a>
              </div>
            </div>
          </div>
          <hr
          
          />
          <div class="Border">
            <div class="image">
              <img src="images/3985127.jpg" alt="Arabian Dish"/>
            </div>
            <div>
              <h3>Egyptian Rice</h3>
              <h4>$21.00</h4>
              <div class="button">
                <a href="enquire.php" class="order" >Order</a>
              </div>
            </div>
          </div>
          <hr
           
          />
          <div class="Border">
            <div class="image">
              <img src="images/ChickenShawarma-Post-683x1024.jpg"  alt="Arabian Dish"/>
            </div>
            <div>
              <h3>Chicken Shawarma</h3>
              <h4>$30.00</h4>
              <div class="button">
                <a href="enquire.php" class="order" >Order</a>
            
 
              </div>
            </div>
           
            <hr/>
          </div>
        </div>
      </div>
    </div>
    
      <h3>Online Partners: </h3>
     <ul> 
      <li>UberEats</li>
      <li>Doordash</li>
      <li>Menulog</li>
    </ul>
    </section>
  </aside>
  <?php
       include_once "includes/footer.inc";
    ?>
  </body>
</html>
