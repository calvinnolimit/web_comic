<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://kit.fontawesome.com/5823e1bed7.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <title>genre</title>
  </head>
  <body>
    <nav class="fixed-top d-flex align-items-center">
      <div class="menu-toggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
      </div>
      <ul>
        <li>
          <a id="active" href="/">Home</a>
        </li>
        <li>
          <a href="/hot-manga">Hot Manga</a>
        </li>
        <li>
          <a href="/genre">Genre</a>
        </li>
      </ul>
      <form class="form">
        <button>
          <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
            <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
        <input class="input" placeholder="Type your text" required="" type="text" />
        <button type="reset">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </form>

      <img src="img/profile.png" class="user-pic" onclick="toggleMenu()" />
      <div class="sub-menu-warp" id="subMenu">
        <div class="sub-menu">
          <div class="user-info">
            <img src="img/user.png" alt="" srcset="" />
            <h2>Guest</h2>
          </div>
          <hr />

          <a href="account/login.html" class="sub-menu-link">
            <div class="ps">
              <i class="bi bi-box-arrow-in-right"></i>
            </div>
            <p>Login</p>
            <span>></span>
          </a>
          <!-- <a href="account/sign-up.html" class="sub-menu-link">
            <div class="pb">
              <i class="bi bi-person-plus-fill"></i>
            </div>
            <p>Sign up</p>
            <span>></span>
          </a> -->
        </div>
      </div>
      <!-- <li class="logo"><a href="#"><i class="bi bi-person-fill"></i></a></li> -->
    </nav>
    <div class="a">
      <div class="b">
        <div class="c">
          <div class="page-name">
            <h1>Genre list</h1>
            <ul class="Aa">
              <li>
                <br />
                <a class="link" href="#">Action</a>
                <a class="link" href="#">Adventure</a>
                <a class="link" href="#">Comedy</a>
                <a class="link" href="#">Cooking</a>
                <a class="link" href="#">Doujinshi</a>
                <a class="link" href="#">Drama</a>
                <a class="link" href="#">Fantasy</a>
                <a class="link" href="#">Historical</a>
                <a class="link" href="#">Horror</a>
                <a class="link" href="#">Isekai</a>
                <a class="link" href="#">Josei</a>
                <a class="link" href="#">Manhwa</a>
                <a class="link" href="#">Martial arts</a>
                <a class="link" href="#">Mature</a>
                <a class="link" href="#">Mecha</a>
                <a class="link" href="#">Medical</a>
                <a class="link" href="#">Mystery</a>
                <a class="link" href="#">Psychological</a>
                <a class="link" href="#">Romance</a>
                <a class="link" href="#">School life</a>
                <a class="link" href="#">Sci-fi</a>
                <a class="link" href="#">Seinen</a>
                <a class="link" href="#">Shouju</a>
                <a class="link" href="#">Shounen</a>
                <a class="link" href="#">Slice of life</a>
                <a class="link" href="#">Sports</a>
                <a class="link" href="#">Supernatural</a>
                <a class="link" href="#">Yuri</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="c">
          <ul class="Aa">
            <h1>Manga Populer</h1>
            <div class="carddd-container">
              <div class="carddd">
                <img src="img/sampul/acchkcchi.png" />
                <div class="card-content3">
                  <h3>card 1</h3>
                  <p>Lorem ipsum dolor necessitatibus, dicta molestias nobis dolores deserunt aspernatur quaerat assumenda!</p>
                  <a href="" class="btn">read more</a>
                </div>
              </div>
              <div class="carddd">
                <img src="img/sampul/acchkcchi.png" />
                <div class="card-content3">
                  <h3>card 1</h3>
                  <p>Lorem ipsum dolor necessitatibus, dicta molestias nobis dolores deserunt aspernatur quaerat assumenda!</p>
                  <a href="" class="btn">read more</a>
                </div>
              </div>
              <div class="carddd">
                <img src="img/sampul/acchkcchi.png" />
                <div class="card-content3">
                  <h3>card 1</h3>
                  <p>Lorem ipsum dolor necessitatibus, dicta molestias nobis dolores deserunt aspernatur quaerat assumenda!</p>
                  <a href="" class="btn">read more</a>
                </div>
              </div>
              <div class="carddd">
                <img src="img/sampul/acchkcchi.png" />
                <div class="card-content3">
                  <h3>card 1</h3>
                  <p>Lorem ipsum dolor necessitatibus, dicta molestias nobis dolores deserunt aspernatur quaerat assumenda!</p>
                  <a href="" class="btn">read more</a>
                </div>
              </div>
              <div class="carddd">
                <img src="img/sampul/acchkcchi.png" />
                <div class="card-content3">
                  <h3>card 1</h3>
                  <p>Lorem ipsum dolor necessitatibus, dicta molestias nobis dolores deserunt aspernatur quaerat assumenda!</p>
                  <a href="" class="btn">read more</a>
                </div>
              </div>
              <div class="carddd">
                <img src="img/sampul/acchkcchi.png" />
                <div class="card-content3">
                  <h3>card 1</h3>
                  <p>Lorem ipsum dolor necessitatibus, dicta molestias nobis dolores deserunt aspernatur quaerat assumenda!</p>
                  <a href="" class="btn">read more</a>
                </div>
              </div>
            </div>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-head">
      <div class="footer-content">
        <div class="hot-link">
          <div class="follow">
            <p>Follow Us :</p>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <div class="copyright">
              <p>About :</p>
              <p>website ini dibuat sebagai project selama PKL di Idekite</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
