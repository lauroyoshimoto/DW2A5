<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .img-lorem{
            width: 30%;
        }
        .inicio p{
            text-align: justify;
            text-indent: 3.5em;
        }
    </style>
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
        </symbol>
    </svg>

    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">Simple header</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Início</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
                <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
            </ul>
        </header>

        <div class="inicio">
            <div class="bg-light p-4 mb-4 rounded">
                <h1 class="text-center">Página inicial</h1>
            </div>

            <img class="img-lorem img-thumbnail m-4 rounded float-end" src="https://gorilasoftware.com.br/wp-content/uploads/2021/11/Lorem-Ipsum-768x492-1.png" alt="Lorem Ipsum">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet egestas sapien. Fusce porttitor tellus vel eleifend dictum. Aenean sed neque sit amet risus eleifend pulvinar. Aliquam erat volutpat. Duis tempor non risus sit amet accumsan. Ut eget nisl ipsum. Morbi ultrices nec mi vitae maximus. Morbi nec ornare justo. Pellentesque aliquam ex eget purus tempor sodales. In imperdiet sem nibh, eget faucibus tortor aliquam eget.
            </p>
            <p>
                Quisque imperdiet purus vel felis vulputate, quis sollicitudin enim volutpat. Curabitur elementum urna dolor. Nulla suscipit leo sit amet erat egestas commodo. Ut accumsan turpis eu justo placerat, vitae consequat ipsum suscipit. Nunc et fringilla nunc. Nullam ut lobortis nulla. Cras euismod turpis posuere sapien ornare, nec lobortis libero rhoncus. Phasellus mauris lorem, eleifend eget tincidunt quis, varius eu est. Fusce metus risus, lobortis eget justo nec, condimentum ullamcorper augue. Phasellus sollicitudin magna non euismod elementum. Proin sodales venenatis vulputate. Cras a turpis lacus. Aliquam sit amet maximus magna. Integer nec nibh ipsum. Etiam quis lacus at nisi scelerisque mattis sit amet et elit. Donec vulputate dignissim nunc id euismod.
            </p>
            
        </div>

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="text-muted">© 2022 Eder Pansani</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </footer>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>