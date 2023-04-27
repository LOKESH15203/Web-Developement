<?php

include "portal.php"

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="portal.css">
  </head>
  <body>

    <header>
        <div class="bg">
            <h1> <b> JOB PORTAL</b></h1>
            <nav>
                <ul>
                    <li> <b>
                            <a href="Portfolio.html" class="link"> HOME </a>
                            <a href="h4_Education.html" class="link">EDUCATION</a>
                            <a href="h3_Experience.html" class="link">EXPERIENCE</a>
                            <a href="h2_Projects.html" class="link">PROJECTS</a>
                        </b></li>
                </ul>
            </nav>
        </div>
    </header>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Qualification</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Lokesh</td>
            <td>omsonawane15203@gmail.com</td>
            <td>29</td>
            <td>Android Developer</td>

          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Paraji</td>
            <td>holkarpara297@gmail.com</td>
            <td>25</td>
            <td>Competative programmer</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Pratik</td>
            <td>514patilpratik@gamil.com</td>
            <td>23</td>
            <td>C++ Developer</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Parth Shete</td>
            <td>parth208shete@gmail.com</td>
            <td>35</td>
            <td>Web Developer</td>2
          </tr>
          <tr>
            <th scope="row">5</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td colspan="2"></td>
            <td></td>
          </tr>
        </tbody>
      </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

?>