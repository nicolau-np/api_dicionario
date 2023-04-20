<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>API DICIONARIO GESTUAL</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">API DICIONARIO</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/tipo-textos">Tipo de Textos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/textos">Textos</a>
                      </li>

                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                  </div>
                </div>
              </nav>
        </header>

        <main>
            <div class="container">
            <h1>API DICIONARIO GESTUAL</h1>
            @yield('content')
        </div>
        </main>

        <footer>
            <div class="footer mt-5">
                <p style="text-align: center">Copyright &copy; {{date('Y')}}</p>
            </div>
        </footer>

    </body>
    </html>
