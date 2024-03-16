<?php //PHP wird gestartet
//Aus dem Ordner "inc" wirde die Klasse "HTMLPage" importiert.
include('inc/HTMLPage.class.php');
$h = new HTMLPage(); //Die Klasse wird in einer Variable gespeichert.

print $h->getHeader('Bestellung'); //Über die Variable wird die Funktion "getHeader" aufgerufen.


$bestellung = $_POST['anzahl']; //Das mithilfe der POST-Methode übergebene Array wird in der Variable "bestellung" gespeichert.
$einzelSumme = 0;
$gesamtSumme = 0;

$kaffee = array(
    array('101 504', 'kaffee1.jpg', 'Guatemala Arabica Biokaffee', 'Samtig weich mit der besonderen Kaffeenote', 250, 17.90),
    array('101 624', 'kaffee2.jpg', 'Equador Cooperativa Salamanca', 'Cremig mild und harmonisch', 275, 23.90),
    array('101 829', 'kaffee3.jpg', 'Ethopia Mocambo Arabica', 'Weich würzig und cremig', 300, 14.85),
    array('101 382', 'kaffee4.jpg', 'Columbia Rainforest', 'Edel cremig, nussig und lang anhaltend', 250, 19.90),
    array('101 774', 'kaffee5.jpg', 'd\'Ivorie Robusta', 'Cremig, kräftig, würzig und lebendig', 500, 24.65),
);

//Statischer Bereich der Zusammenfassungs-Seite wird geprintet.
print ' <section id="products">
        <h2>Bestellzusammenfassung</h2>
        <table>
        <thead>
            <tr>
                <th>Artikelnummer</th>
                <th>Name</th>
                <th>Anzahl</th>
                <th>Einzelpreis</th>
                <th>Summe</th>
            </tr>
        </thead>
        <tbody>'; 

//Dynamischer Bereich der Zusammenfassungs-Seite wird geprintet.
for ($i = 0; $i < count($bestellung); $i++) { 
    $menge = $bestellung[$i];
    $preis = $kaffee[$i][5];
    $einzelSumme = $menge * $preis;
    $gesamtSumme = $gesamtSumme + $einzelSumme;
        print ' <tr>
            <td>' . $kaffee[$i][0] . '</td>
            <td>' . $kaffee[$i][2] . '</td>
            <td>' . $menge . '</td>
            <td>' . number_format($preis, 2, ',', '.') . '€</td>';
            print ' <td>' . number_format($einzelSumme, 2, ',', '.') . '€</td>
        </tr>';
}
print ' </tbody>';

print '<tfoot>';
print ' <tr>
            <td colspan="4"><b>Summe</b></td>
            <td class="displayright"><b>' . number_format($gesamtSumme, 2, ',', '.') . '€</b></td>
        </tr>
        </tfoot>
        </table>
        <input type="submit" name="bestellen" value="Kostenpflichtig bestellen">
</section>
';

print $h->getFooter();