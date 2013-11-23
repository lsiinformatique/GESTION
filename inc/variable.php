<?php
//recolte € journalier
$query_journa_euro = mysql_query("SELECT count(montant_ttc) FROM facture_client WHERE date_facture='23/11/2013' ");
$donnee_journa_euro = mysql_fetch_row($query_journa_euro);

$query_month_euro = mysql_query("SELECT count(montant_ttc) FROM facture_client WHERE date_facture='23/11/2013'");
$donnee_month_euro = mysql_fetch_row($query_month_euro);
?>
<?php
$query_montant_ttc_journa = mysql_query("SELECT montant_ttc FROM facture_client WHERE date_facture = '23/11/2013'");
$query_row_journa = mysql_fetch_assoc($query_montant_ttc_journa);