<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Big Data - Tentor Community</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">BIG DATA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
     <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Search Data</a>
      </div>
    </div>
  </div>
</nav>

<div class="container"> 

    <div class="row mt-3 justify-content-center"> 
        <div class="col-md-8"> 
            <h1 class="text-center">I'M POSSIBLE PTN</h1>
               <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Data.." id="search-input">
                    <button class="btn btn-dark" type="button" id="search-button">Search</button>
               </div>
        </div>
    </div>

    <hr>

    <div class="row" id="peserta-list">
      <table class="table caption-top">
        <caption>Data Peserta</caption>
                    <thead>
                        <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NO. PESERTA</th>
                        <th scope="col">NAMA LENGKAP</th>
                        <th scope="col">ASAL SEKOLAH</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">RUMPUN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        </tr>
                    </tbody>
                    </table>
                </div>

    </div>
    </div>
    
</script>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  
    <script src="js/api.js">
      document.addEventListener("DOMContentLoaded", function() {
      getDataPeserta();
  })</script>
    
  </body>
</html>