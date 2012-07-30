<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
   <title>Matthias Miltenberger - Zuse Institute Berlin</title>
   <link rel="stylesheet" style type="text/css" media="screen" href="style.css">
   <link rel="icon" href="http://www.zib.de/uploads/tf/favicon.ico"
         type="image/x-ms-bmp; charset=binary">
   <meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php
$filename= "counter_en.txt";
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
      <td colspan="3" align="right"><a href="index.de.php">Deutsch</a></td>
   </tr>
   <tr>
         <td colspan="3"><div class="col1">
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
      <td colspan="2"><a href="http://www.zib.de">Zuse Institute Berlin (ZIB)</a></td>
      </tr>
      <tr>
      <td colspan="2">Takustra&szlig;e 7</td>
      </tr>
      <tr>
      <td colspan="2">14195 Berlin (Germany)</td>
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
      <td width="40%">Room:</td>
      <td>3307</td>
      </tr>
      <tr>
      <td>Phone:</td>
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

   <h1 class="col3">Projects and current work</h1>
      <ul>
      <p>
      <li>
      <a href="http://www.zib.de/en/projects/current-projects/project-details/article/neue-technologien-zur-loesung-von-scm-problemen.html">Advanced Solver Technology for Supply Chain Management</a> (cooperation with <a href="http://www.sap.com/germany/index.epx">SAP</a>):<br>Development of a new LP solver for use within <a href="http://scip.zib.de">SCIP</a>
      </li>
      </p>
      <p>
      <li>
      Administration of the version control system <a href="http://git-scm.com/">Git</a> for the department optimization at <a href="http://www.zib.de">ZIB</a>
      </li>
      </p>
      <p>
      <li>
      Maintenance and development of the LP solver <a href="http://soplex.zib.de">SoPlex</a>
      </li>
      </p>
      </ul>

   <h1 class="col3">Short Academic CV</h1>
      <table width="100%" cellpadding="4">
   <tr>
      <td width="170px">10/2004 - 12/2009</td>
   <td><a href="http://www.tu-berlin.de/menue/home/parameter/en/">
         Technische Universit&auml;t Berlin</a>:
            Studies of Mathematics with minor in Computer Science</td>
      <td align="right" rowspan="2"><a href="http://www.tu-berlin.de/menue/home/parameter/en/">
         <img src="logo_tu_red.jpg" width="50pt" border="0" alt="TU Berlin"></a></td>
   </tr>
   <tr>
      <td>12/2009</td>
   <td>Diploma in Mathematics with minor in Computer Science, supervised by
            <a href="http://www.math.tu-berlin.de/~mehrmann/">Prof. Dr. Volker Mehrmann</a></td>
   </tr>
   <tr>
   <td>05/2009 - 03/2010</td>
   <td><a href="http://www.tu-berlin.de/menue/home/parameter/en/">
         Technische Universit&auml;t Berlin</a>:
            Student assistant,
            <a href="http://www.matheon.de/" style="font-variant:small-caps">Matheon</a> Project
            <a href="http://www.matheon.de/research/show_project.asp?id=172"> C29</a>
      </td>
      <td align="right"><a href="http://www.matheon.de/">
         <img src="logo_matheon.gif" width="50pt" border="0" alt="Matheon"></a></td>
   </tr>
   <tr>
      <td>since 07/2010</td>
      <td><a href="http://www.zib.de">
         Zuse Institute Berlin (ZIB)</a>:
         Research assistant, Department Optimization</td>
      <td align="right"><a href="http://www.zib.de">
         <img src="logo_zib_quad.jpg" width="50pt" border="0" alt="ZIB"></a></td>
   </tr>
   </table>
   <h1 class="col3">Publications</h1>
   <ul>
      <li>
   <b><a href="miltenberger_diplomarbeit.pdf">
      Die IDR(s)-Methode zur L&ouml;sung von parametrisierten Gleichungssystemen</a>
   </b>
   <br>
   <em>Matthias Miltenberger</em>
   <br>
      Diploma Thesis, <a href="http://www.tu-berlin.de/menue/home/parameter/en/">
      Technische Universit&auml;t Berlin</a>, 2009
      </li>
   </ul>
      <div class="col2">last modified: 30.07.2012</div>
</body>
</html>
