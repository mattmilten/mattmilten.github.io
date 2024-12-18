<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="personal web page">
    <meta name="author" content="Matthias Miltenberger">
    <link rel="icon" href="../favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <title>Matthias Miltenberger</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../bootstrap/css/custom.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Matthias Miltenberger</a>
        </div>
      </div>
    </nav>

    <div class="container">

      <hr>

      <div class="row">
        <div class="col-sm-7 col-md-4 col-lg-4">
          <h2>About<br><small>Mathematician and Software Engineer</small></h2>
          <strong>Interests include:</strong><br>Optimization, C/C++, Python, Web design
          <br><br>
          <div class="row">
            <div class="col-xs-2">
              <a href="https://twitter.com/MattMilten">
              <img src="twitter.svg" alt="Twitter"></a>
            </div>
            <!--<div class="col-xs-2">
              <a href="https://www.facebook.com/matthias.miltenberger">
              <img src="facebook.svg" alt="Facebook"></a>
            </div>-->
            <div class="col-xs-2">
              <a href="https://de.linkedin.com/in/matthias-miltenberger-70494a63">
              <img src="linkedin.svg" alt="LinkedIn"></a>
            </div>
            <div class="col-xs-2">
              <a href="https://stackoverflow.com/users/673271/mattmilten">
              <img src="stackoverflow.svg" alt="Stack Overflow"></a>
            </div>
            <div class="col-xs-2">
              <a href="https://github.com/mattmilten">
              <img src="github.svg" alt="GitHub"></a>
            </div>
            <div class="col-xs-2">
              <a href="https://www.researchgate.net/profile/Matthias_Miltenberger">
              <img class="img-thumbnail" src="researchgate-icon.png" alt="ResearchGate"></a>
            </div>
            <div class="col-xs-2">
              <a href="https://orcid.org/0000-0002-0784-0964">
              <img class="img-thumbnail" src="orcid_logo.gif" alt="ORCID"></a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-3">
          <img class="img-profile" src="miltenberger.jpg" alt="picture">
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <h2>Contact</h2>
          <address>
            <a href="http://www.zib.de"><strong>Zuse Institute Berlin (ZIB)</strong></a><br>
            Takustra&szlig;e 7<br>
            14195 Berlin (Germany)<br>
          </address>
          <address>
            phone:  +49 30 84185 245<br>
            e-mail: miltenberger<span class="domain">zib.de</span><br>
          </address>
        </div>
      </div>

      <hr>

      <div class="row">
        <h2>Short Academic CV</h2>
        <div class="row vertical-align">
          <div class="col-xs-2 text-right">
            since 07/2010
          </div>
          <div class="col-xs-2 col-sm-1">
            <a href="http://www.zib.de">
            <img class="img-responsive img-padding" src="logo_zib_quad.jpg" alt="ZIB"></a>
          </div>
          <div class="col-xs-9">
            <a href="http://www.zib.de/members/miltenberger">
              Zuse Institute Berlin (ZIB)</a>:
              Research assistant, Department Mathematical Optimization
          </div>
        </div>
        <div class="row vertical-align">
          <div class="col-xs-2 text-right">
            05/2009 - 03/2010
          </div>
          <div class="col-xs-2 col-sm-1">
            <a href="http://www.matheon.de/">
            <img class="img-responsive img-padding" src="logo_matheon.gif" alt="Matheon"></a>
          </div>
          <div class="col-xs-9">
            <a href="http://www.tu-berlin.de/menue/home/parameter/en/">
            Technische Universit&auml;t Berlin</a>:
            Student assistant,
            <a href="http://www.matheon.de/" style="font-variant:small-caps">Matheon</a> Project
            <a href="http://www.matheon.de/research/show_project.asp?id=172"> C29</a>
          </div>
        </div>
        <div class="row vertical-align">
          <div class="col-xs-2 text-right">
            <div class="row">
              <div class="col-xs-12">12/2009</div>
            </div>
            <div class="row">
              <div class="col-xs-12">12/2004 - 12/2009</div>
            </div>
          </div>
          <div class="col-xs-2 col-sm-1">
            <a href="http://www.tu-berlin.de/">
            <img class="img-responsive img-padding" src="logo_tu_red.jpg" alt="TU Berlin"></a>
          </div>
          <div class="col-xs-9">
            <div class="row">
              <div class="col-xs-12">
              Diploma in Mathematics with minor in Computer Science, supervised
              by <a href="http://www.math.tu-berlin.de/~mehrmann/">Prof. Mehrmann</a>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
              <a href="http://www.tu-berlin.de/menue/home/parameter/en/">
              Technische Universit&auml;t Berlin</a>:
              Studies of Mathematics with minor in Computer Science
              </div>
            </div>
          </div>
        </div>
      </div>

      <hr>

      <div class="row">
        <h2><a href="https://www.zib.de/members/miltenberger">Publications</a></h2>
      </div>

      <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
      <?php include('TreeD_gesa3.inc')?>
      <?php include('TreeD_lseu.inc')?>
      <?php include('TreeD_p0201.inc')?>

      <hr>

      <div class="row">
        <h2>Scientific Talks</h2>
        <ul>

          <li>
          <b><a href="OR2017_Numerics-in-MIP.pdf">Exploring Numerics in Branch-and-Cut Solvers for Mixed Integer Linear Optimization</a></b>
          <br>
          Matthias Miltenberger, Ted Ralphs, Daniel E. Steffy
          <br>
          <a href="http://www.or2017.de/">OR 2017</a>, Berlin
          </li>

          <li>
          <b><a href="ICCOPT_2016_Solution_Polishing.pdf">LP Solution Polishing to improve MIP Performance</a></b>
          <br>
          Matthias Miltenberger
          <br>
          <a href="http://www.iccopt2016.tokyo/"> ICCOPT 2016</a>, Tokyo
          </li>

          <li>
          <b><a href="ICMS_2016_PySCIPOpt.slides.html">PySCIPOpt: Mathematical Programming in Python with SCIP</a></b>
          <br>
          Stephen Maher, Matthias Miltenberger, Joao Pedro Pedroso, Daniel Rehfeldt, Robert Schwarz, Felipe Serrano
          <br>
          <a href="http://icms2016.zib.de/"> ICMS 2016</a>, Zuse Institute Berlin
          </li>

          <li>
          <b>The Impact of Linear Programming on the Performance of SCIP</b>
          <br>
          Thorsten Koch, Matthias Miltenberger
          <br>
          <a href="http://www.ismp2015.org/"> ISMP 2015</a>, Pittsburgh
          <br>
          <a href="https://or2015.univie.ac.at/"> OR 2015</a>, Universität Wien
          </li>

          <li>
          <b>SCIP Optimization Suite 3.1</b>
          <br>
          Matthias Miltenberger
          <br>
          <a href="http://www.or2014.de"> OR 2014</a>, RWTH Aachen
          </li>

          <li>
          <b>SoPlex 2.0</b>
          <br>
          Matthias Miltenberger
          <br>
          <a href="http://www.ifors2014.org/"> IFORS 2014</a>, Centre de Convencions Internacional de Barcelona
          </li>

          <li>
          <b>Sequential Linear Programming with SoPlex</b>
          <br>
          Matthias Miltenberger
          <br>
          <a href="http://europt2014.univ-perp.fr/"> 12th EUROPT Workshop on Advances in Continuous Optimization 2014</a>, Université de Perpignan Via Domitia
          </li>

          <li>
          <b>Lecture</b>
          <br>
          Matthias Miltenberger, Gerald Gamrath
          <br>
          <a href="http://vie.math.ac.vn/learning/index.php?option=com_content&view=article&id=337:trng-thu-qnumerical-mathematics-and-optimizationqti-vin-toan-hc-07102013-2510201352013&catid=39:cao-hoc-quoc-te&Itemid=93"> Fall School on "Numerical Mathematics and Optimization"</a>, Hanoi, Institute of Mathematics, VAST
          </li>

          <li>
          <b>Solving Challenging Supply Chain Management Problems with the SCIP Optimization Suite</b>
          <br>
          Matthias Miltenberger, Gerald Gamrath, Thorsten Koch, Alexander Martin, Dieter Weninger
          <br>
          <a href="http://www.eur.nl/ese/english/departments/department_of_econometrics/or2013/home/"> OR 2013</a>, Erasmus Universiteit Rotterdam
          </li>

          <li>
          <b>Challenges in Linear Programming and how SoPlex deals with them</b>
          <br>
          Matthias Miltenberger
          <br>
          <a href="http://eventos.fct.unl.pt/iccopt2013/pages/home"> ICCOPT 2013</a>, FCT Universidade Nova de Lisboa
          <br>
          <a href="http://www.or.rwth-aachen.de/frico/index.html"> FRICO 2013</a>, RWTH Aachen
          </li>

          <li>
          <b>The SCIP Optimization Suite 3.0 - It's all in the bag!</b>
          <br>
          Matthias Miltenberger
          <br>
          <a href="http://www.or2012.de/"> OR 2012</a>, Leibniz Universit&auml;t Hannover
          </li>

          <li>
          <b>Advances in Linear Programming</b>
          <br>
          Matthias Miltenberger
          <br>
          <a href="http://ismp2012.mathopt.org/"> ISMP 2012</a>, TU Berlin
          <br>
          <a href="http://online.ima.org.uk/events.aspx"> 3rd IMA Conference on Numerical Linear Algebra and Optimisation</a>, University of Birmingham
          </li>

          <li>
          <b>Solving large-scale Linear Programming Problems</b>
          <br>
          Matthias Miltenberger
          <br>
          <a href="http://www.apmod.org/"> APMOD 2012</a>, Paderborn
          </li>

          <li>
          <b>Large-scale LP solving</b> and <b>The IDR method for solving large nonsymmetric parameterized linear systems</b>
          <br>
          Matthias Miltenberger
          <br>
          <a href="http://meetings2.informs.org/charlotte2011/index.php"> INFORMS 2011</a>, Charlotte, North Carolina
          </li>

          <li>
          <b>Sudoku vs. Graphenf&auml;rbung: Wenn alles verschieden sein muss</b>
          <br>
          Matthias Miltenberger, Timo Berthold
          <br>
          <a href="http://www.matheon.de/schools/mathinside/"> MathInside 2011</a>, Urania, Berlin
          </li>

        </ul>
      </div>
    </div> <!-- /container -->

    <footer>
    <div class="container">
    <div class="row">
      <div class="col-md-12">
        &copy; <?php echo date("Y", time())?> Matthias Miltenberger, designed with <a href="http://getbootstrap.com">Bootstrap</a>
      </div>
    </div>
    </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
