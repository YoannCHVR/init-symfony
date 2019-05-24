<?php

namespace App\Controller;

use App\Form\SimulationType;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/{_locale}")
 */
class SimulationController extends AbstractController
{
    /**
     * @Route("/simulation", name="simulation")
     */
    public function index(Request $request)
    {
      // Create form
      $form = $this->createForm(SimulationType::class);

      // Create request

      $form->handleRequest($request);

      // After Submit and Valid form
      if ($form->isSubmitted() && $form->isValid()) {

          $data = $form->getData();

          var_dump($data);

          /*-----VARIABLE-----*/

          // General Data
          $date = date("d-m-y", time());

          // User Data
          $email_address = $data['anonymeEmail'];
          $company = $data['anonymeCompany'];

          $first_part_email = explode("@", $email_address);

          $first_part_email = $first_part_email[0];
          var_dump($first_part_email);

          // Verifie que l'utilisateur a bien un email, sinon stop le script
          if(empty($email_address)){
            exit();
          }

          if ($company == 'null' || $company == 'NaN' || empty($company) || $company == " ") {
            $company = "Unknown";
          }

          // Initial values
          $nbDayWork = $data['nbDayWork'];
          $workRotation = $data['workRotation'];
          $rateQuality = $data['rateQuality'];
          $plannedDowntime = $data['plannedDowntime'];
          $unplannedDowntime = $data['unplannedDowntime'];
          $nominalCadence = $data['nominalCadence'];
          $realCadence = $data['realCadence'];

          if ($nbDayWork == 'null' || $nbDayWork == 'NaN' || empty($nbDayWork) || $nbDayWork == " ") {
            $nbDayWork = "Unknown";
          } else {
            $nbDayWork = $data['nbDayWork'] . '&nbsp;(jours/an)';
          }

          if ($workRotation == 'null' || $workRotation == 'NaN' || empty($workRotation) || $workRotation == " ") {
            $workRotation = "Unknown";
          } else {
            $workRotation = $data['workRotation'] . '&nbsp;x&nbsp;8h';
          }

          if ($rateQuality == 'null' || $rateQuality == 'NaN' || empty($rateQuality) || $rateQuality == " ") {
            $rateQuality = "Unknown";
          } else {
            $rateQuality = $data['rateQuality'] . '&nbsp;%';
          }

          if ($plannedDowntime == 'null' || $plannedDowntime == 'NaN' || empty($plannedDowntime) || $plannedDowntime == " ") {
            $plannedDowntime = "Unknown";
          } else {
            $plannedDowntime = $data['plannedDowntime'] . '&nbsp;(jours/an)';
          }

          if ($unplannedDowntime == 'null' || $unplannedDowntime == 'NaN' || empty($unplannedDowntime) || $unplannedDowntime == " ") {
            $unplannedDowntime = "Unknown";
          } else {
            $unplannedDowntime = $data['unplannedDowntime'] . '&nbsp;(jours/an)';
          }

          if ($nominalCadence == 'null' || $nominalCadence == 'NaN' || empty($nominalCadence) || $nominalCadence == " ") {
            $nominalCadence = "Unknown";
          } else {
            $nominalCadence = $data['nominalCadence'] . '&nbsp;(ut/h)';
          }

          if ($realCadence == 'null' || $realCadence == 'NaN' || empty($realCadence) || $realCadence == " ") {
            $realCadence = "Unknown";
          } else {
            $realCadence = $data['realCadence'] . '&nbsp;(ut/h)';
          }

          // Results
          $TauxDispo = $data['TauxDispo'];
          $TauxPerf = $data['TauxPerf'];
          $TauxQuality = $data['TauxQuality'];
          $AddedValue = $data['AddedValue'];

          if ($TauxDispo == 'null' || $TauxDispo == 'NaN' || empty($TauxDispo) || $TauxDispo == " ") {
            $TauxDispo = "Unknown";
          } else {
            $TauxDispo = $data['TauxDispo'] . '&nbsp;%';
          }

          if ($TauxPerf == 'null' || $TauxPerf == 'NaN' || empty($TauxPerf) || $TauxPerf == " ") {
            $TauxPerf = "Unknown";
          } else {
            $TauxPerf = $data['TauxPerf'] . '&nbsp;%';
          }

          if ($TauxQuality == 'null' || $TauxQuality == 'NaN' || empty($TauxQuality) || $TauxQuality == " ") {
            $TauxQuality = "Unknown";
          } else {
            $TauxQuality = $data['TauxQuality'] . '&nbsp;%';
          }

          if ($AddedValue == 'null' || $AddedValue == 'NaN' || empty($AddedValue) || $AddedValue == " ") {
            $AddedValue = "Unknown";
          } else {
            $AddedValue = $data['AddedValue'] . '&nbsp;%';
          }

          $PerteArrets = $data['PerteArrets'];
          $PertePerfs = $data['PertePerfs'];
          $PerteQuality = $data['PerteQuality'];
          $PerteInex = $data['PerteInex'];

          if ($PerteArrets == 'null' || $PerteArrets == 'NaN' || empty($PerteArrets) || $PerteArrets == " ") {
            $PerteArrets = "Unknown";
          } else {
            $PerteArrets = $data['PerteArrets'] . '&nbsp;%';
          }

          if ($PertePerfs == 'null' || $PertePerfs == 'NaN' || empty($PertePerfs) || $PertePerfs == " ") {
            $PertePerfs = "Unknown";
          } else {
            $PertePerfs = $data['PertePerfs'] . '&nbsp;%';
          }

          if ($PerteQuality == 'null' || $PerteQuality == 'NaN' || empty($PerteQuality) || $PerteQuality == " ") {
            $PerteQuality = "Unknown";
          } else {
            $PerteQuality = $data['PerteQuality'] . '&nbsp;%';
          }

          if ($PerteInex == 'null' || $PerteInex == 'NaN' || empty($PerteInex) || $PerteInex == " ") {
            $PerteInex = "Unknown";
          } else {
            $PerteInex = $data['PerteInex'] . '&nbsp;%';
          }

          $stack_bar_chart = $data['stack_bar_chart'];
          $dual_line_chart = $data['dual_line_chart'];
          $dual_line_chart2 = $data['dual_line_chart2'];

          /*-----PDF-----*/

          $mpdf = new \Mpdf\Mpdf([
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 33,
            'margin_bottom' => 10,
            'margin_header' => 5,
            'margin_footer' => 5,
            'format' => 'A4-L'
          ]);
          $mpdf->SetProtection(array('print'));
          $mpdf->SetTitle("Kipers Industries");
          $mpdf->SetAuthor("Kipers Industries SAS");
          // $mpdf->SetWatermarkText("Simulation");
          // $mpdf->showWatermarkText = true;
          $mpdf->watermark_font = 'DejaVuSansCondensed';
          $mpdf->watermarkTextAlpha = 0.1;
          $mpdf->SetDisplayMode('fullpage');

          // Template PDF
          $html = '
          <html>
          <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
          <style>
          body {
            font-family: sans-serif;
            font-size: 10pt;
            background-image: url("assets/img/backgrounds/fond-pdf-horizontal.jpg");
            background-repeat: no-repeat;
            background-size: cover;
          }

          p {
            margin: 0pt;
          }

          table.items {
            border: 0.1mm solid rgba(8, 41, 71, 1);
          }

          td {
            vertical-align: top;
          }

          .items td {
            border: 0.1mm solid rgba(8, 41, 71, 1);
          }

          table thead td, .thead-item {
            background-color: #1e3c57;
            color: white;
            text-align: center;
            border: 0.1mm solid rgba(8, 41, 71, 1);
            font-variant: small-caps;
          }

          .items td.blanktotal {
            background-color: #EEEEEE;
            border: 0.1mm solid rgba(8, 41, 71, 1);
            background-color: #FFFFFF;
            border: 0mm none rgba(8, 41, 71, 1);
            border-top: 0.1mm solid rgba(8, 41, 71, 1);
            border-right: 0.1mm solid rgba(8, 41, 71, 1);
          }

          .items td.totals {
            text-align: right;
            border: 0.1mm solid rgba(8, 41, 71, 1);
          }

          .items td.cost {
            text-align: "." center;
          }

          .title-1 {
            font-size: 1.5rem;
            font-weight: 500;
          }

          .underline {
            color: rgba(8, 41, 71, 1);
            border-bottom: 3px solid #BBD2E1;
            /* background-image: linear-gradient(to right, #BBD2E1, #BBD2E1);
            background-repeat: no-repeat;
            background-size: 100% 0.2em;
            background-position: 0 88%; */
          }

          </style>
          </head>
          <body>
          <!--mpdf
          <htmlpagefooter name="myfooter">
          <div style="border-top: 1px solid rgba(8, 41, 71, 1); font-size: 10pt; text-align: center; padding-top: 15px;">
            <p>
              Ces résultats sont des estimations simplifiées sur la base des informations que vous avez saisies. <br />
              Contactez-nous pour une analyse plus détaillée et appropriée à votre situation.
            </p>
          </div>
          </htmlpagefooter>
          <sethtmlpagefooter name="myfooter" value="on" />
          mpdf-->';

          $html .= '<table width="100%"><tr><td width="50%" style="color:rgba(8, 41, 71, 1);">';

          $html .= '<span style="font-weight: bold; font-size: 14px; padding-left: 50px;">' . $email_address . '</span><br />';

          $html .= $company . '<br />';

          $html .= '</td>
          <td width="50%" style="text-align: right; font-weight: bold; color:rgba(8, 41, 71, 1);"> Date: ' . $date . '</td>';

          $html .= '</tr></table>';

          // <table width="100%" style="font-family: serif;" cellpadding="10"><tr>
          // <td width="45%" style="border: 0.1mm solid #888888; "><span style="font-size: 7pt; color: #555555; font-family: sans;">SOLD TO:</span><br /><br />345 Anotherstreet<br />Little Village<br />Their City<br />CB22 6SO</td>
          // <td width="10%">&nbsp;</td>
          // <td width="45%" style="border: 0.1mm solid #888888;"><span style="font-size: 7pt; color: #555555; font-family: sans;">SHIP TO:</span><br /><br />345 Anotherstreet<br />Little Village<br />Their City<br />CB22 6SO</td>
          // </tr></table>
          // <br />

          $html .= '
          <br />
          <h6 style="color: rgba(8, 41, 71, 1); font-weight: bold; font-size: 12px;">Données saisies par vos soins</h6>
          <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
          <thead>
          <tr>
          <td style="vertical-align: middle;" width="14.2%">Nombre de jours travailles</td>
          <td style="vertical-align: middle;" width="14.2%">Rotation de travail</td>
          <td style="vertical-align: middle;" width="14.2%">Taux de qualite</td>
          <td style="vertical-align: middle;" width="14.2%">Temps d\'arrets prevus</td>
          <td style="vertical-align: middle;" width="14.2%">Temps d\'arrets<br /> non-prevus</td>
          <td style="vertical-align: middle;" width="14.2%">Cadence nominale</td>
          <td style="vertical-align: middle;" width="14.2%">Cadence reelle</td>
          </tr>
          </thead>
          <tbody>
          <!-- ITEMS HERE -->
          <tr>
          <td align="center">' . $nbDayWork . '</td>
          <td align="center">' . $workRotation . '</td>
          <td align="center">' . $rateQuality . '</td>
          <td align="center">' . $plannedDowntime . '</td>
          <td align="center">' . $unplannedDowntime . '</td>
          <td align="center">' . $nominalCadence . '</td>
          <td align="center">' . $realCadence . '</td>
          </tr>
          </tbody>
          </table>

          <br /><br>

          <table width="100%" style="color: rgba(8, 41, 71, 1); font-weight: bold; font-size: 12px;">
          <tr>
          <td style="vertical-align: middle;" width="19%"; align="center">Indicateurs</td>
          <td style="vertical-align: middle;" width="27%"; align="center">Découpage de votre</td>
          <td style="vertical-align: middle;" width="27%"; align="center">Economies estimées en</td>
          <td style="vertical-align: middle;" width="27%"; align="center">Gain de chiffre</td>
          </tr>
          <tr>
          <td style="vertical-align: middle;" width="19%"; align="center">agrégés</td>
          <td style="vertical-align: middle;" width="27%"; align="center">activité (% temps)</td>
          <td style="vertical-align: middle;" width="27%"; align="center">diminuant vos pertes</td>
          <td style="vertical-align: middle;" width="27%"; align="center">d\'affaires potentiel </td>
          </tr>
          </table>

          <table width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="8">
            <tr>
            <td width="19%" align="center" style="vertical-align: middle;">
            <table align="center" class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
            <thead>
              <tr>
              <td style="vertical-align: middle;" colspan="2" width="100%">Taux</td>
              </tr>
            </thead>
            <tbody>
            <!-- ITEMS HERE -->
              <tr class="bottom-border: 1px solid black;">
              <td class="thead-item" width="50%">Disponibilite</td>
              <td width="50%" align="center">' . $TauxDispo . '</td>
              </tr>
              <tr class="bottom-border: 1px solid black;">
              <td class="thead-item">Performance</td>
              <td align="center">' . $TauxPerf . '</td>
              </tr>
              <tr class="bottom-border: 1px solid black;">
              <td class="thead-item">Qualite</td>
              <td align="center">' . $TauxQuality . '</td>
              </tr>
              <tr>
              <td align="center" colspan="2" cellpadding="15">
              <p><br />Temps à valeur ajoutée<br /> <b>' . $AddedValue . '</b><br /><br /><br /></p>
              </td>
              </tr>
            </tbody>
            </table>
          </td>
          <td width="27%" align="center">
          <img height="300" src="data:image/jpg;base64,' . $stack_bar_chart . '" alt="" />
          <div style="position: absolute; top: 425px; left: 410px;">
          <table cellpadding="4" style="font-size: 5pt;">
          <tr>
            <td style="background: rgba(15, 112, 63, 1); color: white;">&nbsp;&nbsp;&nbsp;</td>
            <td align="left">' . $PerteInex . '</td>
          </tr>
          <tr>
            <td style="background: rgba(41, 183, 116, 1); color: black;">&nbsp;&nbsp;</td>
            <td align="left">' . $PerteQuality . '</td>
          </tr>
          <tr>
            <td style="background: rgba(187, 210, 225, 1); color: white;">&nbsp;</td>
            <td align="left">' . $PertePerfs . '</td>
          </tr>
          <tr>
            <td style="background: rgba(55, 128, 191, 1); color: white;">&nbsp;</td>
            <td align="left">' . $PerteArrets . '</td>
          </tr>
          <tr>
            <td style="background: rgba(8, 41, 71, 1); color: white;">&nbsp;</td>
            <td align="left">' . $AddedValue . '</td>
          </tr>
          </table>
          </div>
          </td>
          <td width="27%" align="center"><img height="300" src="data:image/jpg;base64,' . $dual_line_chart . '" alt=""  /></td>
          </tr>
          </div></td>
          <td width="27%" align="center"><img height="300" src="data:image/jpg;base64,' . $dual_line_chart2 . '" alt="" /></td></tr></table>
          </body>
          </html>
          ';

          // Génération du PDF avec le template html
          $mpdf->WriteHTML($html);

          // Paramètres du fichier
          $extension = ".pdf";
          $fname = $first_part_email . $extension; // name the file

          $file_to_attach = $_SERVER["DOCUMENT_ROOT"] . '/assets/simu/';

          // Enregistrement sur le serveur
          $mpdf->Output($file_to_attach . $fname, \Mpdf\Output\Destination::FILE);

          /*-----EMAIL-----*/

          $email = new PHPMailer();
          $email->SetFrom('contact@kipers-industries.com', 'Kipers Industries'); //Name is optional
          $email->Subject = 'Estimation de performances - Kipers Industries - ' . $date;
          // Allow HTML in mail
          $email->IsHTML(true);
          $email->Encoding = 'quoted-printable';
          // Ajout du PDF dans le mail
          $email->AddAttachment( $file_to_attach . $fname, 'Kipers Industries - Estimation de Performances.pdf' );
          // Ajout des images pour la signature
          $email->AddEmbeddedImage('assets/img/signature/kipers.png', 'kipers_logo');
          $email->AddEmbeddedImage('assets/img/signature/logo_facebook.gif', 'facebook_logo');
          $email->AddEmbeddedImage('assets/img/signature/logo_twitter.gif', 'twitter_logo');
          $email->AddEmbeddedImage('assets/img/signature/logo_linkedin.gif', 'linkedin_logo');
          // Signature
          $signature = '<table width="400" height="140" cellspacing="2" cellpadding="2">
          <tbody>
          <tr>
          <td valign="top">
          <img src="cid:kipers_logo" alt="Logo Kipers" moz-do-not-send="false" width="93" height="86"><br>
          </td>
          <td valign="top"><font color="#333333"><font
          style="font-weight: bold; font-family: Calibri;"
          color="#000000">Kipers Industries<br>
          <br>
          </font> <small><font size="-1"><span
          style="font-family: Calibri;">
          Pépinière NEWTON<br>213 cours Victor Hugo, 33130 Bègles, France
          <a
          href="mailto:contact@kipers-industries.com"><br>
          contact@kipers-industries.com<br></a>+33 (0)6 35 53 50 13</span></font></small></font><small><font
          color="#333333"><font size="-1"><br
          style="font-family: Calibri;">
          <span style="font-family: Calibri;"></span> </font>
          </font></small></td>
          </tr>
          <tr>
          <td valign="top" align="center">
          <a href="https://www.facebook.com/KIPERSIndustries/"><img moz-do-not-send="false" src="cid:facebook_logo" alt="Logo facebook" width="24" height="24" border="0"></a>
          <a href="https://twitter.com/KIPERS_Ind"><img moz-do-not-send="false" src="cid:twitter_logo" alt="logo twitter" width="24" height="24" border="0"></a>
          <a href="https://linkedin.com/company/kipersindustries"><img moz-do-not-send="false" src="cid:linkedin_logo" alt="logo linkdin" width="24" height="24" border="0"></a><br>
          </td>
          <td valign="top"><br>
          </td>
          </tr>
          </tbody>
          </table>';
          // Content message to Body mail
          $msghtml = '
          Bonjour,<br /><br />
          Veuillez trouver ci-joint l\'estimation de performances réalisée à l\'instant sur notre site internet.<br />
          N\'hésitez pas à revenir vers nous pour une analyse plus détaillée et appropriée.<br /><br />
          Bien cordialement,<br /><br />
          Kipers Industries.<br /><br />
          -----<br /><br />
          ' . $signature . '
          ';
          $email->Body = $msghtml;
          // Use for client who doesn't use HTML inbox email
          $email->AltBody = "\nBonjour,\n\n Veuillez trouver ci-joint l'estimation de performances à l'instant sur notre site internet.\n N'hésitez pas à revenir vers nous pour une analyse plus détaillée et appropriée.\n\n Bien cordialement,\n\n Kipers Industries\n";
          $email->AddAddress( $email_address );
          $email->CharSet = 'UTF-8';

          // Envoi du mail
          $email->Send();

          return $this->redirectToRoute('simulation');
        }

        return $this->render('simulation/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
