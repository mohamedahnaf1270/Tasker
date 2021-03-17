<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-dark-custom bg-primary-custom">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><i class="far fa-compass"></i>   Task Tracker</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active color-custom" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link color-custom" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle color-custom" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu bg-primary-custom animate__animated animate__slideInDown" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
              <div class="d-flex">
                  <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <i class="fas fa-search"></i>
                  </button>
              </div>
          </div>
        </div>
      </nav>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <input>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
      <div class="container main-cont bg-primary-custom mt-3">
        <div class="container bg-primary-custom p-2 mt-3">
        <div class="card bg-primary-custom">
            <div class="card-body">
              <h5 class="card-title bg-secondary-custom">Welcome</h5>
              <p class="card-text bg-secondary-custom lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ut aperiam reprehenderit corporis sapiente, officia eaque dolor minus, nam nisi maiores voluptate illum. Odit ut corporis, molestiae laudantium accusantium Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, dolore commodi. Exercitationem, consectetur magni facilis perspiciatis error dolore praesentium animi iusto ducimus ipsa, illum nihil expedita delectus fugit laboriosam eius.</p>
            </div>
        </div>
        <div class="card-group mt-3">
          <div class="card bg-primary-custom">
            <div class="card-body">
              <h5 class="card-title bg-secondary-custom">Lorem</h5>
              <p class="card-text bg-secondary-custom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et commodi ex unde sunt eius alias ea asperiores tempora aliquam debitis nulla libero, dolores cupiditate voluptatum sit officia quaerat? Optio, molestias.</p>
              <button class="btn btn-outline-secondary">Lorem ipusm</button>
            </div>
          </div>
          <div class="card bg-primary-custom">
            <div class="card-body">
              <h5 class="card-title bg-secondary-custom">Ipsum</h5>
              <p class="card-text bg-secondary-custom">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam deserunt voluptatum laborum, delectus vero quaerat provident mollitia maxime sed saepe ex eius? Ut accusantium distinctio officiis nisi, voluptatibus illo ipsam.</p>
              <button class="btn btn-outline-secondary">Dolor sit amet</button>
            </div>
          </div>
          <div class="card bg-primary-custom">
            <div class="card-body">
              <h5 class="card-title bg-secondary-custom">Dolor</h5>
              <p class="card-text bg-secondary-custom">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, repellendus similique odio, quo illo quidem ipsam, quos corporis laborum rem ea vel iusto laboriosam est dolorem facere. Obcaecati, unde pariatur.</p>
              <button class="btn btn-outline-secondary">Consectetur adipisicing</button>
            </div>
          </div>
        </div>
            <div class="mt-3">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button bg-secondary-custom" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-secondary-custom">
                            <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed bg-secondary-custom" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-secondary-custom">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="bg-secondary-custom accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-secondary-custom">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
      </div>
</body>
</html>
