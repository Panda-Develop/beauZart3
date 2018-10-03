<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/css/StyleSheetMenu.css" />
    <script src="./comptearebour.js"> </script>
    <script>

      var height = 0;

      var active = 0;

      var i = 0;

      var y = 0;
      
      function avancer() {

        i = i + 1;

        var width = document.getElementById('container').clientWidth;

        pos = -(width*i);

        var body = window.innerHeight;
        document.getElementsByClassName('text')[active].style = "transform: translateY("+body+"px) translateZ(0px); transition-duration: 0.3s;" ;
        
        document.getElementById('id1').style = "transform: translateX("+pos+"px);     transition-duration: 1s;" ;
        document.getElementById('id2').style = "transform: translateX("+pos+"px);     transition-duration: 1s;" ;
        document.getElementById('id3').style = "transform: translateX("+pos+"px);     transition-duration: 1s;" ;

        active = active + 1 ;
      }
      
      function retour() {
        

        var width = document.getElementById('container').clientWidth;
        
        i = i - 1;

        pos = -(width*i);

        var body = window.innerHeight;
        document.getElementsByClassName('text')[active].style = "transform: translateY("+body+"px) translateZ(0px); transition-duration: 0.3s;" ;

        document.getElementById('id1').style = "transform: translateX("+pos+"px);     transition-duration: 1s;" ;
        document.getElementById('id2').style = "transform: translateX("+pos+"px);     transition-duration: 1s;" ;
        document.getElementById('id3').style = "transform: translateX("+pos+"px);     transition-duration: 1s;" ;

        active = active - 1 ;
      } 

      function onwheelEvent(event) { //Decter le nombre de pixel et adapter le sections ainsi que le footer (translate)
        var y = event.deltaY
        var text = document.getElementsByClassName('text')[0].clientHeight;
        var body = document.body.clientHeight;
        var max = body - text       

        if ( (y == "100") && (height <= max + 100 ) && ( height > max ) ) {
          height = max;
          document.getElementsByClassName('text')[active].style = "transform: translateY("+height+"px) translateZ(0px); transition-duration: 0.7s;" ;
        }
        else if ( (y == "100") && (height > max) ) {
          height = height - y;
          document.getElementsByClassName('text')[active].style = "transform: translateY("+height+"px) translateZ(0px); transition-duration: 0.7s;" ;
        }
        else if ( (y == "-100") && (height < body - 100) ) {
          height = height - y;
          document.getElementsByClassName('text')[active].style = "transform: translateY("+height+"px) translateZ(0px); transition-duration: 0.7s;" ;
        } 

        else if ( (y == "-100") && (height < body )  && (height >= body -100 ) ) {
          height = body
          document.getElementsByClassName('text')[active].style = "transform: translateY("+height+"px) translateZ(0px); transition-duration: 0.7s;" ;
        }

      } 

    </script> 
  </head>

    <?php include("structure/header.php"); ?>
    <?php include("structure/menu.php"); ?>

  <body id="body" onload="init()">
    <section id="section">
      <div id="container"> 
        <div id="id1"> 
            <a class="arrowright" onclick="avancer()"> <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
            <div class="text">
            <center> <h1> Page 1  </h1> </center>
            <br>

            <p> Avec HTML on peut mettre n'importe quelle texte ici c'est marrant dit donc ! :) </p>

            <br>

            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam odio rem beatae dignissimos nam illo molestiae pariatur laborum aliquid! Expedita dolore placeat laudantium, vitae voluptatem ab repellendus facilis recusandae et? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, fugit error! Eos perspiciatis, deserunt nulla blanditiis aspernatur odit cum aliquam soluta, inventore omnis placeat accusantium, quos optio corporis officia doloremque! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam repellendus necessitatibus placeat, voluptatibus molestiae amet. Blanditiis iure deleniti alias minima dignissimos nostrum. Alias eligendi quam expedita ullam, eum enim facilis? </p>

            <br>

            <br>

            <br>

            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam odio rem beatae dignissimos nam illo molestiae pariatur laborum aliquid! Expedita dolore placeat laudantium, vitae voluptatem ab repellendus facilis recusandae et? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, fugit error! Eos perspiciatis, deserunt nulla blanditiis aspernatur odit cum aliquam soluta, inventore omnis placeat accusantium, quos optio corporis officia doloremque! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam repellendus necessitatibus placeat, voluptatibus molestiae amet. Blanditiis iure deleniti alias minima dignissimos nostrum. Alias eligendi quam expedita ullam, eum enim facilis? </p>

            <br>

            <br>

            <br>

            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam odio rem beatae dignissimos nam illo molestiae pariatur laborum aliquid! Expedita dolore placeat laudantium, vitae voluptatem ab repellendus facilis recusandae et? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, fugit error! Eos perspiciatis, deserunt nulla blanditiis aspernatur odit cum aliquam soluta, inventore omnis placeat accusantium, quos optio corporis officia doloremque! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam repellendus necessitatibus placeat, voluptatibus molestiae amet. Blanditiis iure deleniti alias minima dignissimos nostrum. Alias eligendi quam expedita ullam, eum enim facilis? </p>

            <br>

            <br>

            <br>
          </div>
        </div>
        <div id="id2"> 
          <a class="arrowleft" onclick="retour()"> <i class="fa fa-arrow-left" aria-hidden="true"></i> </a>
          <a class="arrowright" onclick="avancer()"> <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
          <div class="text">
            <center> <h1> Page 2  </h1> </center>
            <br>

            <p> Avec HTML on peut mettre n'importe quelle texte ici c'est marrant dit donc ! :) </p>

            <br>

            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam odio rem beatae dignissimos nam illo molestiae pariatur laborum aliquid! Expedita dolore placeat laudantium, vitae voluptatem ab repellendus facilis recusandae et? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, fugit error! Eos perspiciatis, deserunt nulla blanditiis aspernatur odit cum aliquam soluta, inventore omnis placeat accusantium, quos optio corporis officia doloremque! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam repellendus necessitatibus placeat, voluptatibus molestiae amet. Blanditiis iure deleniti alias minima dignissimos nostrum. Alias eligendi quam expedita ullam, eum enim facilis? </p>

            <br>

            <br>

            <br>

            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam odio rem beatae dignissimos nam illo molestiae pariatur laborum aliquid! Expedita dolore placeat laudantium, vitae voluptatem ab repellendus facilis recusandae et? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, fugit error! Eos perspiciatis, deserunt nulla blanditiis aspernatur odit cum aliquam soluta, inventore omnis placeat accusantium, quos optio corporis officia doloremque! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam repellendus necessitatibus placeat, voluptatibus molestiae amet. Blanditiis iure deleniti alias minima dignissimos nostrum. Alias eligendi quam expedita ullam, eum enim facilis? </p>

            <br>

            <br>

            <br>

            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam odio rem beatae dignissimos nam illo molestiae pariatur laborum aliquid! Expedita dolore placeat laudantium, vitae voluptatem ab repellendus facilis recusandae et? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, fugit error! Eos perspiciatis, deserunt nulla blanditiis aspernatur odit cum aliquam soluta, inventore omnis placeat accusantium, quos optio corporis officia doloremque! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam repellendus necessitatibus placeat, voluptatibus molestiae amet. Blanditiis iure deleniti alias minima dignissimos nostrum. Alias eligendi quam expedita ullam, eum enim facilis? </p>

            <br>

            <br>

            <br>
          </div>
        </div>
        <div id="id3"> 
            <a class="arrowleft" onclick="retour()"> <i class="fa fa-arrow-left" aria-hidden="true"></i> </a>
          <div class="text">
            <center> <h1> Page 3  </h1> </center>
            <br>

            <p> Avec HTML on peut mettre n'importe quelle texte ici c'est marrant dit donc ! :) </p>

            <br>

            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam odio rem beatae dignissimos nam illo molestiae pariatur laborum aliquid! Expedita dolore placeat laudantium, vitae voluptatem ab repellendus facilis recusandae et? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, fugit error! Eos perspiciatis, deserunt nulla blanditiis aspernatur odit cum aliquam soluta, inventore omnis placeat accusantium, quos optio corporis officia doloremque! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam repellendus necessitatibus placeat, voluptatibus molestiae amet. Blanditiis iure deleniti alias minima dignissimos nostrum. Alias eligendi quam expedita ullam, eum enim facilis? </p>

            <br>

            <br>

            <br>

            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam odio rem beatae dignissimos nam illo molestiae pariatur laborum aliquid! Expedita dolore placeat laudantium, vitae voluptatem ab repellendus facilis recusandae et? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, fugit error! Eos perspiciatis, deserunt nulla blanditiis aspernatur odit cum aliquam soluta, inventore omnis placeat accusantium, quos optio corporis officia doloremque! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam repellendus necessitatibus placeat, voluptatibus molestiae amet. Blanditiis iure deleniti alias minima dignissimos nostrum. Alias eligendi quam expedita ullam, eum enim facilis? </p>

            <br>

            <br>

            <br>

            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam odio rem beatae dignissimos nam illo molestiae pariatur laborum aliquid! Expedita dolore placeat laudantium, vitae voluptatem ab repellendus facilis recusandae et? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, fugit error! Eos perspiciatis, deserunt nulla blanditiis aspernatur odit cum aliquam soluta, inventore omnis placeat accusantium, quos optio corporis officia doloremque! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam repellendus necessitatibus placeat, voluptatibus molestiae amet. Blanditiis iure deleniti alias minima dignissimos nostrum. Alias eligendi quam expedita ullam, eum enim facilis? </p>

            <br>

            <br>

            <br>
          </div>
        </div>
      </div>
    </section>
  </body>

  <script>
  
  var height = window.innerHeight;

  function init() { //Decter la taille de la fenêtre et à adapter le sections ainsi que le footer (translate)
        var height = window.innerHeight;
        document.getElementsByClassName('text')[0].style = "transform: translateY("+height+"px)";
        document.getElementsByClassName('text')[1].style = "transform: translateY("+height+"px)";
        document.getElementsByClassName('text')[2].style = "transform: translateY("+height+"px)";
        compte_a_rebours()
      }
      
  </script>

</html>