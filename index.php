<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <title>Boxtown Cars</title>

  <meta name="viewport" content="width=device-width">

  <!-- Typekit... Kit setup: http://cl.ly/LwBt -->
  <script type="text/javascript" src="//use.typekit.net/ebu4pxf.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <link rel="stylesheet" href="/css/global.css">

</head>

<body>

  <div class="page-wrap">

    <a href="/">
    <header class="main-header">
        <h1 class="site-title">Boxtown Cars</h1>
        <h2 class="h4 site-tag">Austin's Used Car Megastore</h2>
    </header>
    </a>

    <?php // Likely break into part ?>
    <nav class="main-nav" id="main-nav">
      <a href="#">Link</a>
      <a href="#">One</a>
      <a href="#">Super Long Link</a>
      <a href="#">Stuff n Junk</a>
      <a href="#">Four</a>
      <a href="#">This Little Piggy</a>

      <a href="#" class="hide-menu">☰ Hide Menu</a>
    </nav>
    <a href="#main-nav" class="show-menu">☰ Show Menu</a>

  <div class="guts">

    <div class="main-column">

      <h3 class="line-under">Featured Car</h3>

      <div class="module module-featured-car">

        <img src="/images/coolvan.png" class="hero">

        <div class="info">

          <h5>Best Deal</h5>

          <div class="more-info">

            <div class="grid grid-nopadding">

              <div class="col col-1-2">

                <div class="car-type">Ford Mercury</div>
                <div class="price">$18,756</div>

              </div>

              <div class="col col-1-2">

                <ul>
                  <li>Has wheels and stuff and junk</li>
                  <li>Is super cool and orange and creepy</li>
                  <li>You can camp in it and stuff.</li>
                </ul>

              </div>
            </div>
          </div>
        </div>

        <a href="#" class="star" data-icon="&#xe005;">
          <span class="visually-hidden">
            Star This Car
          </span>
        </a>

      </div><?php # END div.featured-car ?>

      <h3 class="line-under">Browse All Cars</h3>

      <div class="grid">
        <div class="col col-1-3">
          <div class="module little-car">
            <div class="more-info">
              <img src="http://placekitten.com/300/200/">
              <div class="car-type">Ford Mercury</div>
              <div class="price">$18,756</div>
            </div>
          </div>
          <div class="module little-car">
            <div class="more-info">
              <img src="http://placekitten.com/300/200/">
              <div class="car-type">Ford Mercury</div>
              <div class="price">$18,756</div>
            </div>
          </div>
        </div>
        <div class="col col-1-3">
          <div class="module little-car">
            <div class="more-info">
              <img src="http://placekitten.com/300/200/">
              <div class="car-type">Ford Mercury</div>
              <div class="price">$18,756</div>
            </div>
          </div>
          <div class="module little-car">
            <div class="more-info">
              <img src="http://placekitten.com/300/200/">
              <div class="car-type">Ford Mercury</div>
              <div class="price">$18,756</div>
            </div>
          </div>
        </div>
        <div class="col col-1-3">
          <div class="module little-car">
            <div class="more-info">
              <img src="http://placekitten.com/300/200/">
              <div class="car-type">Ford Mercury</div>
              <div class="price">$18,756</div>
            </div>
          </div>
          <div class="module little-car">
            <div class="more-info">
              <img src="http://placekitten.com/300/200/">
              <div class="car-type">Ford Mercury</div>
              <div class="price">$18,756</div>
            </div>
          </div>
        </div>

      </div>

      <nav class="pagination">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
      </nav>

    </div>

    <aside class="sidebar">
      <div class="module">
      <h4 class="line-under">Welcome!</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dicta dignissimos incidunt voluptas ea quam quisquam quis asperiores praesentium corporis.</p>
      <a href="#" class="button button-green">Search</a>
      </div>
    </aside>

  </div>

  <footer class="main-footer" id="main-footer">

    <div class="guts">

    <div id="map" class="main-column">
      Fallback content:
      Drive down the street and it's there.
    </div>

    <aside class="sidebar">
      <p>Boxtown cars is an official dealer of Ford, Mercury, and Lincoln cars. Visit us to test drive the newest and best cars and stuff and junk.</p>
      <p>&copy;2013 Boxtown Cars</p>
    </aside>

    </div>

  </footer>

  </div><?php # END div.page-wrap ?>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="/js/global-ck.js"></script>

</body>

</html>