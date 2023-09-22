<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body {
        background-color: black;
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }
      .logo-container{
        margin-bottom: 20px;
      }
      .search-box{
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .search-input{
        width: 400px;
        padding: 10px;
        border: 1px solid white;
        border-radius: 4px;
        font-size: 16px;
      }
      .search-button{
        margin-top: 10px;
        background-color: rgb(79, 79, 255);
        color:#fff;

      }
     
    </style>
  </head>
  <body>
    <div class=""logo-container">
      <img
        src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_light_color_272x92dp.png"
        ;
      />
      </div>
      <form
      action="https://www.google.com/search" method="GET"class="search-box">
      <input
       type="text" name="q" placeholder="Search Google" class="search-input"/>
      <button>Search</button>
      </form>
    </div>
  </body>
</html>
