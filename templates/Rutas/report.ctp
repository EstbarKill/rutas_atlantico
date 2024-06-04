<?php
//require_once('tcpdf_include.php');
require_once  ROOT. DS.  'vendor'. DS. 'tcpdf'. DS. 'Pdf.php';
//$path=ROOT. DS.  'vendor'. DS. 'tcpdf'. DS. 'Pdf.php';
//echo 'Ruta es: '.$path;
// Extend the TCPDF class to create custom Header and Footer

// create new PDF document
$pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 003');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', 'BI', 12);

// add a page
$pdf->AddPage();
$html='<table border="1">
        <tr>
            <th>ID </TH>
            <th>NOMBRE </TH>
        </tr>';
        
foreach ($categorias as $categoria):
    $html.='<tr>
               <td>'.$categoria->id.'</td>
               <td>'.$categoria->nombre.'</td>
            </tr>';   
endforeach;        
$html.='</table>';
//echo $html;
ob_end_clean();
$pdf->writeHTML($html, true, false, true, false, '');
// ---------------------------------------------------------

//Close and output PDF document
//mb_internal_encoding('UTF-8');

$pdf->Output('example_003.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
