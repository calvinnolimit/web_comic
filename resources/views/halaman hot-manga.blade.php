<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://kit.fontawesome.com/5823e1bed7.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <title>Home</title>
  </head>
  <body class="body-head">
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
    <div class="current">
      <p class="p-info"><a href="index.html">Home Page</a></p>
    </div>
   
    <div class="bod">
      <div class="box1">
        <a href="" title="acchikocchi"><img src="img/sampul/acchkcchi.png" alt="" /></a>
        <div class="box2">
          <h2><a href="manga-desc.html">Acchi Kocchi</a></h2>
          <div class="ch">
            <i class="bi bi-person-fill">acalakuma silalahi</i>
          </div>
          <div class="arr">
            <div class="cih">
              <i class="bi bi-eye">100.1M</i>
            </div>
            <div class="cih">
              <i class="bi bi-calendar2-week"> sep 21,2023</i>
            </div>
            <div class="cih"><a><i class="bi bi-star-fill">: 3,5/10</i> </a></div>
          </div>
          <div class="salom">
            <!-- <hr /> -->
            <div class="desc-b">Deskripsi:</div>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsum quaerat consequuntur commodi, at necessitatibus voluptatum similique cupiditate ut provident nesciunt autem molestias. Laudantium illum assumenda ipsa
              sequi, eos placeat officiis delectus sit pariatur iste, labore quos ea veritatis voluptate fuga molestias nemo expedita laboriosam. Perferendis
            </p>
            <div class="btn-hot">
              <a class="learn" href="manga-desc.html">View more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="box1">
        <a href="" title="acchikocchi"><img src="img/sampul/acchkcchi.png" alt="" /></a>
        <div class="box2">
          <h2><a href="manga-desc.html">Acchi Kocchi</a></h2>
          <div class="ch">
            <i class="bi bi-person-fill">acalakuma silalahi</i>
          </div>
          <div class="arr">
            <div class="cih">
              <i class="bi bi-eye">100.1M</i>
            </div>
            <div class="cih">
              <i class="bi bi-calendar2-week"> sep 21,2023</i>
            </div>
            <div class="cih"><a><i class="bi bi-star-fill">: 3,5/10</i> </a></div>
          </div>
          <div class="salom">
            <!-- <hr /> -->
            <div class="desc-b">Deskripsi:</div>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsum quaerat consequuntur commodi, at necessitatibus voluptatum similique cupiditate ut provident nesciunt autem molestias. Laudantium illum assumenda ipsa
              sequi, eos placeat officiis delectus sit pariatur iste, labore quos ea veritatis voluptate fuga molestias nemo expedita laboriosam. Perferendis
            </p>
            <div class="btn-hot">
              <a class="learn" href="manga-desc.html">View more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="box1">
        <a href="" title="acchikocchi"><img src="img/sampul/acchkcchi.png" alt="" /></a>
        <div class="box2">
          <h2><a href="manga-desc.html">Acchi Kocchi</a></h2>
          <div class="ch">
            <i class="bi bi-person-fill">acalakuma silalahi</i>
          </div>
          <div class="arr">
            <div class="cih">
              <i class="bi bi-eye">100.1M</i>
            </div>
            <div class="cih">
              <i class="bi bi-calendar2-week"> sep 21,2023</i>
            </div>
            <div class="cih"><a><i class="bi bi-star-fill">: 3,5/10</i> </a></div>
          </div>
          <div class="salom">
            <!-- <hr /> -->
            <div class="desc-b">Deskripsi:</div>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsum quaerat consequuntur commodi, at necessitatibus voluptatum similique cupiditate ut provident nesciunt autem molestias. Laudantium illum assumenda ipsa
              sequi, eos placeat officiis delectus sit pariatur iste, labore quos ea veritatis voluptate fuga molestias nemo expedita laboriosam. Perferendis
            </p>
            <div class="btn-hot">
              <a class="learn" href="manga-desc.html">View more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="box1">
        <a href="" title="acchikocchi"><img src="img/sampul/acchkcchi.png" alt="" /></a>
        <div class="box2">
          <h2><a href="manga-desc.html">Acchi Kocchi</a></h2>
          <div class="ch">
            <i class="bi bi-person-fill">acalakuma silalahi</i>
          </div>
          <div class="arr">
            <div class="cih">
              <i class="bi bi-eye">100.1M</i>
            </div>
            <div class="cih">
              <i class="bi bi-calendar2-week"> sep 21,2023</i>
            </div>
            <div class="cih"><a><i class="bi bi-star-fill">: 3,5/10</i> </a></div>
          </div>
          <div class="salom">
            <!-- <hr /> -->
            <div class="desc-b">Deskripsi:</div>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsum quaerat consequuntur commodi, at necessitatibus voluptatum similique cupiditate ut provident nesciunt autem molestias. Laudantium illum assumenda ipsa
              sequi, eos placeat officiis delectus sit pariatur iste, labore quos ea veritatis voluptate fuga molestias nemo expedita laboriosam. Perferendis
            </p>
            <div class="btn-hot">
              <a class="learn" href="manga-desc.html">View more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="box1">
        <a href="" title="acchikocchi"><img src="img/sampul/acchkcchi.png" alt="" /></a>
        <div class="box2">
          <h2><a href="manga-desc.html">Acchi Kocchi</a></h2>
          <div class="ch">
            <i class="bi bi-person-fill">acalakuma silalahi</i>
          </div>
          <div class="arr">
            <div class="cih">
              <i class="bi bi-eye">100.1M</i>
            </div>
            <div class="cih">
              <i class="bi bi-calendar2-week"> sep 21,2023</i>
            </div>
            <div class="cih"><a><i class="bi bi-star-fill">: 3,5/10</i> </a></div>
          </div>
          <div class="salom">
            <!-- <hr /> -->
            <div class="desc-b">Deskripsi:</div>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsum quaerat consequuntur commodi, at necessitatibus voluptatum similique cupiditate ut provident nesciunt autem molestias. Laudantium illum assumenda ipsa
              sequi, eos placeat officiis delectus sit pariatur iste, labore quos ea veritatis voluptate fuga molestias nemo expedita laboriosam. Perferendis
            </p>
            <div class="btn-hot">
              <a class="learn" href="manga-desc.html">View more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="box1">
        <a href="" title="acchikocchi"><img src="img/sampul/acchkcchi.png" alt="" /></a>
        <div class="box2">
          <h2><a href="manga-desc.html">Acchi Kocchi</a></h2>
          <div class="ch">
            <i class="bi bi-person-fill">acalakuma silalahi</i>
          </div>
          <div class="arr">
            <div class="cih">
              <i class="bi bi-eye">100.1M</i>
            </div>
            <div class="cih">
              <i class="bi bi-calendar2-week"> sep 21,2023</i>
            </div>
            <div class="cih"><a><i class="bi bi-star-fill">: 3,5/10</i> </a></div>
          </div>
          <div class="salom">
            <!-- <hr /> -->
            <div class="desc-b">Deskripsi:</div>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsum quaerat consequuntur commodi, at necessitatibus voluptatum similique cupiditate ut provident nesciunt autem molestias. Laudantium illum assumenda ipsa
              sequi, eos placeat officiis delectus sit pariatur iste, labore quos ea veritatis voluptate fuga molestias nemo expedita laboriosam. Perferendis
            </p>
            <div class="btn-hot">
              <a class="learn" href="manga-desc.html">View more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="box1">
        <a href="" title="acchikocchi"><img src="img/sampul/acchkcchi.png" alt="" /></a>
        <div class="box2">
          <h2><a href="manga-desc.html">Acchi Kocchi</a></h2>
          <div class="ch">
            <i class="bi bi-person-fill">acalakuma silalahi</i>
          </div>
          <div class="arr">
            <div class="cih">
              <i class="bi bi-eye">100.1M</i>
            </div>
            <div class="cih">
              <i class="bi bi-calendar2-week"> sep 21,2023</i>
            </div>
            <div class="cih"><a><i class="bi bi-star-fill">: 3,5/10</i> </a></div>
          </div>
          <div class="salom">
            <!-- <hr /> -->
            <div class="desc-b">Deskripsi:</div>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsum quaerat consequuntur commodi, at necessitatibus voluptatum similique cupiditate ut provident nesciunt autem molestias. Laudantium illum assumenda ipsa
              sequi, eos placeat officiis delectus sit pariatur iste, labore quos ea veritatis voluptate fuga molestias nemo expedita laboriosam. Perferendis
            </p>
            <div class="btn-hot">
              <a class="learn" href="manga-desc.html">View more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="box1">
        <a href="" title="acchikocchi"><img src="img/sampul/acchkcchi.png" alt="" /></a>
        <div class="box2">
          <h2><a href="manga-desc.html">Acchi Kocchi</a></h2>
          <div class="ch">
            <i class="bi bi-person-fill">acalakuma silalahi</i>
          </div>
          <div class="arr">
            <div class="cih">
              <i class="bi bi-eye">100.1M</i>
            </div>
            <div class="cih">
              <i class="bi bi-calendar2-week"> sep 21,2023</i>
            </div>
            <div class="cih"><a><i class="bi bi-star-fill">: 3,5/10</i> </a></div>
          </div>
          <div class="salom">
            <!-- <hr /> -->
            <div class="desc-b">Deskripsi:</div>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsum quaerat consequuntur commodi, at necessitatibus voluptatum similique cupiditate ut provident nesciunt autem molestias. Laudantium illum assumenda ipsa
              sequi, eos placeat officiis delectus sit pariatur iste, labore quos ea veritatis voluptate fuga molestias nemo expedita laboriosam. Perferendis
            </p>
            <div class="btn-hot">
              <a class="learn" href="manga-desc.html">View more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="box1">
        <a href="" title="acchikocchi"><img src="img/sampul/acchkcchi.png" alt="" /></a>
        <div class="box2">
          <h2><a href="manga-desc.html">Acchi Kocchi</a></h2>
          <div class="ch">
            <i class="bi bi-person-fill">acalakuma silalahi</i>
          </div>
          <div class="arr">
            <div class="cih">
              <i class="bi bi-eye">100.1M</i>
            </div>
            <div class="cih">
              <i class="bi bi-calendar2-week"> sep 21,2023</i>
            </div>
            <div class="cih"><a><i class="bi bi-star-fill">: 3,5/10</i> </a></div>
          </div>
          <div class="salom">
            <!-- <hr /> -->
            <div class="desc-b">Deskripsi:</div>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsum quaerat consequuntur commodi, at necessitatibus voluptatum similique cupiditate ut provident nesciunt autem molestias. Laudantium illum assumenda ipsa
              sequi, eos placeat officiis delectus sit pariatur iste, labore quos ea veritatis voluptate fuga molestias nemo expedita laboriosam. Perferendis
            </p>
            <div class="btn-hot">
              <a class="learn" href="manga-desc.html">View more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="box1">
        <a href="" title="acchikocchi"><img src="img/sampul/acchkcchi.png" alt="" /></a>
        <div class="box2">
          <h2><a href="manga-desc.html">Acchi Kocchi</a></h2>
          <div class="ch">
            <i class="bi bi-person-fill">acalakuma silalahi</i>
          </div>
          <div class="arr">
            <div class="cih">
              <i class="bi bi-eye">100.1M</i>
            </div>
            <div class="cih">
              <i class="bi bi-calendar2-week"> sep 21,2023</i>
            </div>
            <div class="cih"><a><i class="bi bi-star-fill">: 3,5/10</i> </a></div>
          </div>
          <div class="salom">
            <!-- <hr /> -->
            <div class="desc-b">Deskripsi:</div>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsum quaerat consequuntur commodi, at necessitatibus voluptatum similique cupiditate ut provident nesciunt autem molestias. Laudantium illum assumenda ipsa
              sequi, eos placeat officiis delectus sit pariatur iste, labore quos ea veritatis voluptate fuga molestias nemo expedita laboriosam. Perferendis
            </p>
            <div class="btn-hot">
              <a class="learn" href="manga-desc.html">View more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="box1">
        <a href="" title="acchikocchi"><img src="img/sampul/acchkcchi.png" alt="" /></a>
        <div class="box2">
          <h2><a href="manga-desc.html">Acchi Kocchi</a></h2>
          <div class="ch">
            <i class="bi bi-person-fill">acalakuma silalahi</i>
          </div>
          <div class="arr">
            <div class="cih">
              <i class="bi bi-eye">100.1M</i>
            </div>
            <div class="cih">
              <i class="bi bi-calendar2-week"> sep 21,2023</i>
            </div>
            <div class="cih"><a><i class="bi bi-star-fill">: 3,5/10</i> </a></div>
          </div>
          <div class="salom">
            <!-- <hr /> -->
            <div class="desc-b">Deskripsi:</div>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsum quaerat consequuntur commodi, at necessitatibus voluptatum similique cupiditate ut provident nesciunt autem molestias. Laudantium illum assumenda ipsa
              sequi, eos placeat officiis delectus sit pariatur iste, labore quos ea veritatis voluptate fuga molestias nemo expedita laboriosam. Perferendis
            </p>
            <div class="btn-hot">
              <a class="learn" href="manga-desc.html">view more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="box1">
        <a href="" title="acchikocchi"><img src="img/sampul/acchkcchi.png" alt="" /></a>
        <div class="box2">
          <h2><a href="manga-desc.html">Acchi Kocchi</a></h2>
          <div class="ch">
            <i class="bi bi-person-fill">acalakuma silalahi</i>
          </div>
          <div class="arr">
            <div class="cih">
              <i class="bi bi-eye">100.1M</i>
            </div>
            <div class="cih">
              <i class="bi bi-calendar2-week"> sep 21,2023</i>
            </div>
            <div class="cih"><a><i class="bi bi-star-fill">: 3,5/10</i> </a></div>
          </div>
          <div class="salom">
            <!-- <hr /> -->
            <div class="desc-b">Deskripsi:</div>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsum quaerat consequuntur commodi, at necessitatibus voluptatum similique cupiditate ut provident nesciunt autem molestias. Laudantium illum assumenda ipsa
              sequi, eos placeat officiis delectus sit pariatur iste, labore quos ea veritatis voluptate fuga molestias nemo expedita laboriosam. Perferendis
            </p>
            <div class="btn-hot">
              <a class="learn" href="manga-desc.html">View more</a>
            </div>
          </div>
        </div>
      </div>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
