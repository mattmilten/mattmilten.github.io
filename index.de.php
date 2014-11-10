<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
   <title>Matthias Miltenberger - Zuse-Institut Berlin</title>
   <link rel="stylesheet" style type="text/css" media="screen" href="style.css">
   <link rel="icon" href="http://www.zib.de/uploads/tf/favicon.ico"
         type="image/x-ms-bmp; charset=binary">
   <meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php
$filename= "counter_de.txt";
$fd = fopen ($filename , "r");
$fstring = fread ($fd , filesize ($filename));
fclose($fd);
$fd = fopen ($filename , "w");
$fcounted = $fstring + 1;
$fout= fwrite ($fd , $fcounted );
fclose($fd);
?>
</head>
<body>
   <table width="100%">
   <tr>
      <td colspan="3" align="right"><a href="index.php">English</a></td>
   </tr>
   <tr>
         <td colspan="2"><div class="col1">
         Matthias Miltenberger
   </div></td>
   </tr>
   <tr>
   <td height="15px"></td>
   </tr>
   <tr>
   <td>
      <table>
      <tr>
      <td colspan="2"><a href="http://www.zib.de">Zuse-Institut Berlin (ZIB)</a></td>
      </tr>
      <tr>
      <td colspan="2">Takustra&szlig;e 7</td>
      </tr>
      <tr>
      <td colspan="2">14195 Berlin (Deutschland)</td>
      </tr>
      </table>
   </td>
   <td rowspan="2" align="right">
         <img height="180" src="miltenberger.jpg" alt="picture">
   </td>
   </tr>
   <tr>
   <td>
      <table>
      <tr>
      <td width="40%">Raum:</td>
      <td>3307</td>
      </tr>
      <tr>
      <td>Telefon:</td>
      <td>+49 30 84185-245</td>
      </tr>
      <tr>
      <td>Fax:</td>
      <td>+49 30 84185-269</td>
      </tr>
      <tr>
      <td>Email:</td>
      <td align="left">miltenberger<img src="klammeraffe.gif" align="top" border="0" alt="at">zib.de</td>
      </tr>
      </table>
   </td>
   </tr>
   <tr>
   <td colspan="2" height="23px" valign="bottom"><div class="col1"></div></td>
   </tr>
   </table>

   <h1 class="col3">Projekte und aktuelle Aufgaben</h1>
      <ul>
      <li><p>
      <a href="http://www.zib.de/projects/development-new-linear-and-integer-programming-techniques-solve-supply-chain-management-problems">Entwicklung neuer L&ouml;sungstechnologien vor allem zur Behandlung von Problemen des Supply-Chain-Managements</a> (in Kooperation mit <a href="http://www.sap.com/germany/index.epx">SAP</a>)
      </p></li>
      <li><p>
      Administration des Versionsverwaltungssystems <a href="http://git-scm.com/">Git</a> f&uuml;r die Abteilung Optimierung am <a href="http://www.zib.de">ZIB</a>
      </p></li>
      <li><p>
      Pflege und Weiterentwicklung des LP-L&ouml;sers <a href="http://soplex.zib.de">SoPlex</a>
      </p></li>
      <li><p>
      Webdesign für die <a href="http://scip.zib.de">SCIP Optimization Suite</a>
      </p></li>
      </ul>
   <h1 class="col3">kurzer akademischer Lebenslauf</h1>
      <table width="100%" cellpadding="4">
      <tr>
      <td width="170px">10/2004 - 12/2009</td>
      <td><a href="http://www.tu-berlin.de/">
            Technische Universit&auml;t Berlin</a>:
            Studium der Mathematik mit Nebenfach Informatik</td>
      <td align="right" rowspan="2"><a href="http://www.tu-berlin.de/">
         <img src="logo_tu_red.jpg" width="50pt" border="0" alt="TU Berlin"></a></td>
      </tr>
      <tr>
      <td>12/2009</td>
      <td>Diplom in Mathematik mit Nebenfach Informatik, betreut von
            <a href="http://www.math.tu-berlin.de/~mehrmann/">Prof. Dr. Volker Mehrmann</a></td>
      </tr>
      <tr>
      <td>05/2009 - 03/2010</td>
      <td><a href="http://www.tu-berlin.de/">
         Technische Universit&auml;t Berlin</a>:
            Studentische Hilfskraft,
            <a href="http://www.matheon.de/" style="font-variant:small-caps">Matheon</a> Projekt
            <a href="http://www.matheon.de/research/show_project.asp?id=172"> C29</a>
      </td>
      <td align="right"><a href="http://www.matheon.de/">
         <img src="logo_matheon.gif" width="50pt" border="0" alt="Matheon"></a></td>
      </tr>
      <tr>
      <td>seit 07/2010</td>
      <td><a href="http://www.zib.de">
         Zuse-Institut Berlin (ZIB)</a>:
         Wissenschaftlicher Mitarbeiter, Abteilung Optimierung</td>
      <td align="right"><a href="http://www.zib.de">
         <img src="logo_zib_quad.jpg" width="50pt" border="0" alt="ZIB"></a></td>
      </tr>
      </table>
   <h1 class="col3">Publikationen</h1>
   <ul>
      <li>
      <b><a href="http://opus4.kobv.de/opus4-zib/frontdoor/index/index/docId/4253">
      Progress in Presolving for Mixed Integer Programming</a>
      </b>
      <br>
      <em> Gerald Gamrath, Thorsten Koch, Alexander Martin, Matthias Miltenberger, Dieter Weninger </em>
      <br>
      ZIB-Report, 2013
      </li>
   </ul>
      <ul>
      <li>
      <b><a href="miltenberger_diplomarbeit.pdf">
      Die IDR(s)-Methode zur L&ouml;sung von parametrisierten Gleichungssystemen</a>
      </b>
      <br>
      <em>Matthias Miltenberger</em>
      <br>
      Diplomarbeit, <a href="http://www.tu-berlin.de/">
      Technische Universit&auml;t Berlin</a>, 2009
      </li>
      </ul>
   <h1 class="col3">Wissenschaftliche Vortr&auml;ge</h1>
   
      <ul><li>
      <b>SCIP Optimization Suite 3.1</b>
      <br>
      Matthias Miltenberger
      <br>
      <a href="http://www.or2014.de"> OR 2014</a>, RWTH Aachen
      </li></ul>
      
      <ul><li>
      <b>SoPlex 2.0</b>
      <br>
      Matthias Miltenberger
      <br>
      <a href="http://www.ifors2014.org/"> IFORS 2014</a>, Centre de Convencions Internacional de Barcelona
      </li></ul>
      
      <ul><li>
      <b>Sequential Linear Programming with SoPlex</b>
      <br>
      Matthias Miltenberger
      <br>
      <a href="http://europt2014.univ-perp.fr/"> 12th EUROPT Workshop on Advances in Continuous Optimization 2014</a>, Université de Perpignan Via Domitia
      </li></ul>
      
      <ul><li>
      <b>Lecture</b>
      <br>
      Matthias Miltenberger, Gerald Gamrath
      <br>
      <a href="http://vie.math.ac.vn/learning/index.php?option=com_content&view=article&id=337:trng-thu-qnumerical-mathematics-and-optimizationqti-vin-toan-hc-07102013-2510201352013&catid=39:cao-hoc-quoc-te&Itemid=93"> Fall School on "Numerical Mathematics and Optimization"</a>, Hanoi, Institute of Mathematics, VAST
      </li></ul>
      
      <ul><li>
      <b>Solving Challenging Supply Chain Management Problems with the SCIP Optimization Suite</b>
      <br>
      Matthias Miltenberger, Gerald Gamrath, Thorsten Koch, Alexander Martin, Dieter Weninger
      <br>
      <a href="http://www.eur.nl/ese/english/departments/department_of_econometrics/or2013/home/"> OR 2013</a>, Erasmus Universiteit Rotterdam
      </li></ul>
      
      <ul><li>
      <b>Challenges in Linear Programming and how SoPlex deals with them</b>
      <br>
      Matthias Miltenberger
      <br>
      <a href="http://www.or.rwth-aachen.de/frico/index.html"> FRICO 2013</a>, RWTH Aachen
      </li></ul>
      
      <ul><li>
      <b>Challenges in Linear Programming and how SoPlex deals with them</b>
      <br>
      Matthias Miltenberger
      <br>
      <a href="http://eventos.fct.unl.pt/iccopt2013/pages/home"> ICCOPT 2013</a>, FCT Universidade Nova de Lisboa
      </li></ul>
      
      <ul><li>
      <b>Advances in Linear Programming</b>
      <br>
      Matthias Miltenberger
      <br>
      <a href="http://online.ima.org.uk/events.aspx"> 3rd IMA Conference on Numerical Linear Algebra and Optimisation</a>, University of Birmingham
      </li></ul>
      
      <ul><li>
      <b>The SCIP Optimization Suite 3.0 - It's all in the bag!</b>
      <br>
      Matthias Miltenberger
      <br>
      <a href="http://www.or2012.de/"> OR 2012</a>, Leibniz Universit&auml;t Hannover
      </li></ul>
      
      <ul><li>
      <b>Advances in Linear Programming</b>
      <br>
      Matthias Miltenberger
      <br>
      <a href="http://ismp2012.mathopt.org/"> ISMP 2012</a>, TU Berlin
      </li></ul>
      
      <ul><li>
      <b>Solving large-scale Linear Programming Problems</b>
      <br>
      Matthias Miltenberger
      <br>
      <a href="http://www.apmod.org/"> APMOD 2012</a>, Paderborn
      </li></ul>
      
      <ul><li>
      <b>Large-scale LP solving</b>
      </li>
      <li>
      <b>The IDR method for solving large nonsymmetric parameterized linear systems</b>
      <br>
      Matthias Miltenberger
      <br>
      <a href="http://meetings2.informs.org/charlotte2011/index.php"> INFORMS 2011</a>, Charlotte, North Carolina
      </li></ul>
      
      <ul><li>
      <b>Sudoku vs. Graphenf&auml;rbung: Wenn alles verschieden sein muss</b>
      <br>
      Matthias Miltenberger, Timo Berthold
      <br>
      <a href="http://www.matheon.de/schools/mathinside/"> MathInside 2011</a>, Urania, Berlin
      </li></ul>
      
   <div class="col2">letzte &Auml;nderung: <?php echo date("d.m.Y",filectime("index.de.php")); ?></div>
</body>
</html>
