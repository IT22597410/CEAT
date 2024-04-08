<?php
require_once 'config.php';
require_once 'tcpdf.php';
require_once 'tcpdf_autoconfig.php';

$sql = "SELECT * FROM ratings";
$result = $con->query($sql);

// Create new PDF document
$pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nipuna Bhashitha');
$pdf->SetTitle('Vendor Evaluation Report');
$pdf->SetSubject('Vendor Evaluation Report');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// Set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// Set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// Set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// Set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// Set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// Set font
$pdf->SetFont('helvetica', '', 10);

// Add a page
$pdf->AddPage();

// Content
$html = '
<h1 style="text-align:center;">Vendor Evaluation Report</h1>
<table border="1">
    <thead>
        <tr>
            <th>Supplier Name</th>
            <th>Customer Complaints</th>
            <th>Incoming Rejection</th>
            <th>COA Issue</th>
            <th>Deviation/Rework/Segregation</th>
            <th>Achieving Delivery</th>
        </tr>
    </thead>
    <tbody>';

// Fetch data and add to table
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row["Supplier_name"] . '</td>';
        $html .= '<td>' . $row["Customer_complaints_from_field"] . '</td>';
        $html .= '<td>' . $row["Incoming_rejection_and_process_issue"] . '</td>';
        $html .= '<td>' . $row["COA_issue"] . '</td>';
        $html .= '<td>' . $row["Deviation_Rework_Segregation"] . '</td>';
        $html .= '<td>' . $row["Achieving_delivery_lot_size_and_delivery_week"] . '</td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr><td colspan="6">No results found</td></tr>';
}

$html .= '</tbody></table>';

// Output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// Close and output PDF document
$pdf->Output('vendor_evaluation_report.pdf', 'I');
?>
