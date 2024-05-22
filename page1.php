<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webleb</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <style>
    body{
        min-height:100vh;
        background-color:#0d1a2d;
        color:#ccc;
        font-family:system-ui,sans-serif
    }
    ul[role="list"]{
        list-style:none;
        padding:0
    }
    .container{
        width:min(100% - 2rem,65rem);
        margin:auto;
    }
    .grid{
        display:grid;
        gap:1.5rem;
        grid-template-columns:repeat(auto-fit,minmax(min(35ch,100%),1fr))
    }
    .section-title{font-size:clamp(2rem,5vw,3rem);
        text-align:center;
        font-weight:bold;
        color:#fff;
        margin-bottom:.5em
    }
    .card{
        width:min(100% - 2rem,35ch);
        margin:auto;
        background-color:#14273e;
        text-align: center;
        border-radius:.5rem;
        position:relative;
        overflow:hidden;
        display:grid;gap:.5rem
    }
    .card__front{padding:2em;
        transition:opacity 250ms ease,transform 450ms ease
    }

    .card[data-visible="true"] 
    .card__toggle{background-color:crimson}
    .card[data-visible="true"] 
    .card__toggle-icon{rotate:315deg}
  </style>
</head>
<body>
  <section>
    <div class="container flow-content">
      <h2 class="section-title">Our team</h2>
      <ul role="list" class="grid">
        <li>
          <article class="card" data-visible="false">
            <div class="card__front flow-content">
              <img class="card__img mx-auto" src=" .jpg">
              <div class="flow-content" data-spacing="sm">
                <p class="card__name">Keed Nahaleel L. Madigal</p>
                <p class="card__position">Software ginginir</p>
              </div>
            </div>  
          </article>
        </li>
      </ul>
    </div>
  </section>
  <br>
    <section>
    <div class="container flow-content">
      <ul role="list" class="grid">
        <li>
          <article class="card" data-visible="false">
            <div class="card__front flow-content">
              <img class="card__img mx-auto" src=" .jpg">
              <div class="flow-content" data-spacing="sm">
                <p class="card__name">Jade Atyla L. Madigal</p>
                <p class="card__position">Software ginginir</p>
              </div>
            </div>
          </article>
        </li>
      </ul>
    </div>
  </section>
</body>
</html>
