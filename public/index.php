<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link href="/app.css" rel="stylesheet" />
    <title>Кэмпинг КЗ</title>
  </head>
  <body>
    <div class="navbar navbar-expand-md navbar-dark">
      <a href="#" class="navbar-brand"><h3 class="mb-0">КЭМИПНГ КЗ</h3></a>
      <button
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#main-navbar"
        tabindex="-1"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="main-navbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#section2" class="nav-link">О НАС</a>
          </li>
          <li class="nav-item">
            <a href="#section3" class="nav-link">МЕСТО</a>
          </li>
          <li class="nav-item">
            <a
              href="#"
              class="nav-link"
              data-toggle="modal"
              data-target="#bookingModal"
              >БРОНИРОВАНИЕ</a
            >
          </li>
        </ul>
      </div>
    </div>

    <section
      id="showcase"
      class="d-flex justify-content-center align-items-center"
      style='background: url("/images/main.jpeg") bottom center / cover no-repeat'
    >
      <div class="overlay"></div>
      <div class="header container text-white text-center">
        <h3 class="display-5 mb-0 text-uppercase">Кэмпинг</h3>
        <h1 class="display-1">кэмпинг кз</h1>
        <p class="lead d-none d-md-block">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed,
          officia?
        </p>
        <button class="btn btn-lg btn-primary px-5 text-uppercase">
          Забронировать
        </button>
      </div>
    </section>

    <section id="section2">
      <div class="container text-center mt-5">
        <h2 class="text-uppercase">О нас и о нашем месте</h2>
        <div class="row">
          <div class="col-md-4 p-3">
            <img
              src="/images/icons/campfire.png"
              alt=""
              class="d-none d-md-inline img-fluid"
            />
            <h3>Костер</h3>
            <p class="lead">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
              accusantium hic odio facilis provident labore corporis vel,
              voluptate ex. Pariatur distinctio minus laudantium velit nobis
            </p>
          </div>
          <div class="col-md-4 p-3">
            <img
              src="/images/icons/nature.png"
              alt=""
              class="d-none d-md-inline img-fluid"
            />
            <h3>Природа</h3>
            <p class="lead">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
              accusantium hic odio facilis provident labore corporis vel,
              voluptate ex. Pariatur distinctio minus laudantium velit nobis
            </p>
          </div>
          <div class="col-md-4 p-3">
            <img
              src="/images/icons/tent.png"
              alt=""
              class="d-none d-md-inline img-fluid"
            />
            <h3>Палатки</h3>
            <p class="lead">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
              accusantium hic odio facilis provident labore corporis vel,
              voluptate ex. Pariatur distinctio minus laudantium velit nobis
            </p>
          </div>
        </div>
      </div>
    </section>

    <section  id="section3" class="container text-center mt-5">
      <h3 class="text-uppercase mb-3">
        место где вы будете
      </h3>
      <div class="row">
        <div class="col-md-6 p-3">
          <div class="card">
            <img src="/images/winter.jpg" alt="" class="card-img-top" />
            <div class="card-body">
              <h2 class="card-title text-primary text-uppercase">
                Опыт
              </h2>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                accusantium hic odio facilis provident labore corporis vel,
                voluptate ex. Pariatur distinctio minus laudantium velit nobis
              </p>
              <a href="#" class="btn btn-lg btn-outline-primary">Подробнее</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 p-3">
          <div class="card">
            <img src="/images/dogs.jpg" alt="" class="card-img-top" />
            <div class="card-body">
              <h2 class="card-title text-primary text-uppercase">
                Животные
              </h2>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                accusantium hic odio facilis provident labore corporis vel,
                voluptate ex. Pariatur distinctio minus laudantium velit nobis
              </p>
              <a href="#" class="btn btn-lg btn-outline-primary">Подробнее</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container text-center mt-5">
      <h3 class="text-uppercase mb-3">
        ОТзывы тех кто был у нас
      </h3>
      <div class="row">
        <div class="col-md-4 my-2">
          <i class="fas fa-quote-left o03 fa-2x text-primary mb-2"></i>

          <blockquote class="blockquote">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
              accusantium hic odio facilis provident labore corporis vel
            </p>
            <div class="blockquote-footer">Кайрат Нуртас</div>
          </blockquote>
        </div>
        <div class="col-md-4 my-2">
          <i class="fas fa-quote-left o03 fa-2x text-primary mb-2"></i>

          <blockquote class="blockquote">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
              accusantium hic odio facilis provident labore corporis vel
            </p>
            <div class="blockquote-footer">Генадий Головкин</div>
          </blockquote>
        </div>
        <div class="col-md-4 my-2">
          <i class="fas fa-quote-left o03 fa-2x text-primary mb-2"></i>

          <blockquote class="blockquote">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
              accusantium hic odio facilis provident labore corporis vel
            </p>
            <div class="blockquote-footer">Мария Шарапова</div>
          </blockquote>
        </div>
      </div>
    </section>

    <section class="container mt-5">
      <div class="row">
        <div class="col-lg-7 mb-5">
          <div id="carousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="/images/slider/caribou.jpg" />
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/images/slider/coffee.jpg" />
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/images/slider/fire.jpg" />
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carousel1"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carousel1"
              role="button"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-lg-5">
          <h3 class="text-uppercase">Немного слайдера</h3>
          <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium
            qui quos culpa minus voluptates. Optio, doloribus. Nulla facilis
            expedita voluptatibus velit dignissimos deserunt nihil, magnam
            minus. Aut labore praesentium debitis.
          </p>
          <a href="#">Больше <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
    </section>

    <section class="container mt-5 text-center">
      <h3 class="text-uppercase">Немного фоток</h3>
      <h5 class="text-uppercase text-primary">#тема</h5>
      <div class="row mt-3">
        <div class="col-6 col-lg-3 mb-4">
          <img src="/images/gallery/social1.jpg" alt="" class="img-fluid" />
        </div>
        <div class="col-6 col-lg-3 mb-4">
          <img src="/images/gallery/social2.jpg" alt="" class="img-fluid" />
        </div>
        <div class="col-6 col-lg-3 mb-4">
          <img src="/images/gallery/social3.jpg" alt="" class="img-fluid" />
        </div>
        <div class="col-6 col-lg-3 mb-4">
          <img src="/images/gallery/social4.jpg" alt="" class="img-fluid" />
        </div>
        <div class="col-6 col-lg-3 mb-4">
          <img src="/images/gallery/social5.jpg" alt="" class="img-fluid" />
        </div>
        <div class="col-6 col-lg-3 mb-4">
          <img src="/images/gallery/social6.jpg" alt="" class="img-fluid" />
        </div>
        <div class="col-6 col-lg-3 mb-4">
          <img src="/images/gallery/social7.jpg" alt="" class="img-fluid" />
        </div>
        <div class="col-6 col-lg-3 mb-4">
          <img src="/images/gallery/social8.jpg" alt="" class="img-fluid" />
        </div>
      </div>
    </section>

    <section>
      <div class="container text-center mt-4">
        <i class="fas fa-quote-left fa-2x text-primary mb-2"></i>
        <blockquote class="blockquote">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
            non asperiores voluptatem autem, recusandae doloremque debitis enim
            ipsa officiis omnis? Provident repellendus totam explicabo deleniti,
            autem aut ab? Delectus, veritatis?
          </p>
          <div class="blockquote-footer">Айкын</div>
        </blockquote>
      </div>
    </section>

    <section class="bg-dark p-3">
      <div class="container text-center text-white">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-4">
            <p class="lead text-uppercase">Свяжитесь с нами</p>
            <form action="" class="form-inline justify-content-center">
              <div class="input-group">
                <input
                  type="text"
                  name=""
                  class="form-control"
                  placeholder="example@mail.kz"
                />
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary text-uppercase">
                    написать
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section id="footer" class="p-3 bg-secondary">
      <ul
        class="nav text-center justify-content-center flex-column flex-md-row"
      >
        <li class="nav-item">
          <a href="#showcase" class="nav-link text-white">О НАС</a>
        </li>
        <li class="nav-item">
          <a href="#section3" class="nav-link text-white">МЕСТО</a>
        </li>
        <li class="nav-item">
          <a
            href=""
            class="nav-link text-white"
            data-toggle="modal"
            data-target="#bookingModal"
            >БРОНИРОВАНИЕ</a
          >
        </li>
      </ul>
    </section>

    <div class="modal" id="bookingModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Новая бронь</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="close"
              tabindex="-1"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis
              porro facere ratione sequi unde quasi nihil amet magni nobis
              distinctio assumenda officia exercitationem, dolor fuga corporis,
              provident illo. Dolore, voluptas!
            </p>
            <form>
              <div class="form-group">
                <label for="email">Ваш email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="name@example.com"
                />
              </div>
              <div class="form-group">
                <label for="requests">Что вы желаете?</label>
                <textarea
                  id="requests"
                  rows="3"
                  class="form-control"
                ></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary text-uppercase" data-dismiss="modal">
              Отправить
            </button>
            <button
              class="btn btn-secondary text-uppercase"
              data-dismiss="modal"
            >
              Отменить
            </button>
          </div>
        </div>
      </div>
    </div>

    <script src="/app.js"></script>
  </body>
</html>
