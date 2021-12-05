<?php   
    require_once 'vendor/autoload.php';

    use Spipu\Html2Pdf\Html2Pdf;

    if(!empty($_POST['ville']))
    {
        $ville = htmlspecialchars($_POST['ville']);
        $html2pdf = new Html2Pdf('P', 'A4', 'fr');

        $html = "
            <page>
                <page_header>
                    D'où venez-vous ?
                </page_header>
                <br />
                Je viens de $ville

                <page_footer>
                    Ma super ville qu'est $ville
                </page_footer>
            </page>

        ";

        $html2pdf->writeHTML($html);
        $html2pdf->output('mon_pdf.pdf');
    }

    