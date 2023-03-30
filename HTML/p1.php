<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="p1.css" />
    <!-- <script src="p1.js"></script> -->
  </head>

  <body>
    <div id="menue">Menu</div>

    <section class="totalmenue">
      <div id="m1">
        <form action="bill.php" method="post">
          <table>
            <div class="item">
              <img src="pizza.jpg" alt="" />
              <h4>Pizza</h4>
              <div class="wrapper">
                <!-- <span class="minus">-</span>
                <span class="num">01</span>
                <span class="plus">+</span> -->
                
                <input class="billing" type="text" name="p" value="pizza" hidden>
                <input class="billing" type="number" name="pq" value="0">
              </div>
            </div>
            <div class="item">
              <img src="burger.jpg" alt="" />
              <h4>Burger</h4>
              <div class="wrapper">
                <input class="billing" type="text" value="burger" hidden>
                <input class="billing" type="number" value="0">
                <!-- <span class="minus">-</span>
                <span class="num">01</span>
                <span class="plus">+</span> -->
              </div>
            </div>
            <div class="item">
              <img src="pasta.jpg" alt="" />
              <h4>Pasta</h4>
              <div class="wrapper">
                <input class="billing" type="text" value="pasta" hidden>
                <input class="billing" type="number" value="0">
                <!-- <span class="minus">-</span>
                <span class="num">01</span>
                <span class="plus">+</span> -->
              </div>
            </div>
            <div class="item">
              <img src="sandwich.jpg" alt="" />
              <h4>Sandwich</h4>
              <div class="wrapper">
                <input class="billing" type="text" value="sandwich" hidden>
                <input class="billing" type="number" value="0">
                <!-- <span class="minus">-</span>
                <span class="num">01</span>
                <span class="plus">+</span> -->
              </div>
            </div>
            <div class="item">
              <img src="Chocolate.jpg" alt="" />
              <h4>Chocolate shake</h4>
              <div class="wrapper">
                <input class="billing" type="text" value="chocolateshake" hidden>
                <input class="billing" type="number" value="0">
                <!-- <span class="minus">-</span>
                <span class="num">01</span>
                <span class="plus">+</span> -->
              </div>
            </div>
            <div class="item">
              <img src="Beownie.jpg" alt="" />
              <h4>Brownie</h4>
              <div class="wrapper">
                <input class="billing" type="text" value="brownie" hidden>
                <input class="billing" type="number" value="0">
                <!-- <span class="minus">-</span>
                <span class="num">01</span>
                <span class="plus">+</span> -->
                
              </div>
            </div>
          </table>
          <input name="submit" type="submit" value="Place your order">
        </form>
      </div>
    </section>
    <!-- <script >
      const plus = document.querySelector(".plus"),
        minus = document.querySelector(".minus"),
        num = document.querySelector(".num");
        numb = document.querySelector(".numb");
        
      let a = 0;

      plus.addEventListener("click", () => {
        a++;
        a = a < 10 ? "0" + a : a;
        num.innerText = a;
        console.log(a);
        numb.value=a;
      });

      minus.addEventListener("click", () => {
        if (a > 0) {
          a--;
          a = a < 10 ? "0" + a : a;
          num.innerText = a;
          numb.value=a; 
        }

      });
    </script> -->
  </body>
</html>