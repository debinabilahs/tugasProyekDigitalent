<?php
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate HTML to PDF</title>
    <style>
    .image img {
        height: 150px;
      }
    </style>
</head>
<body>
    <table cellpadding="-15" >
        <tr>
            <th scope="row" rowspan="6"><div class="image"><img src="images/user-img.jpg" alt=""></div></th>
        </tr>
        <tr>
            <td><p>Debi Nabilah Sholihah</p></td>
        </tr>
        <tr>
            <td><p>Content Writer & Web Developer</p></td>
        </tr>
        <tr>
            <td><p>Born on September 13 in Cirebon. Lives in Plumbon, Cirebon.</p></td>
        </tr>
        <tr>
            <td><p>Graduated from SMA NEGERI 1 SUMBER in 2021.</p></td>
        </tr>
        <tr>
            <td><p>She is currently studying at the Indramayu State Polytechnic in class D3TI1B.</p></td>
        </tr>
    </table>

</body>
</html>';

?>
<?php

require 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();

$dompdf->loadhtml($html);

$dompdf->setPaper('F4', 'portrait');

$dompdf->render();

$dompdf->stream("playerofcode",array("Attachment"=>0));

?>