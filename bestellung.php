<?php //PHP wird gestartet
//Aus dem Ordner "inc" wirde die Klasse "HTMLPage" importiert.
include('inc/HTMLPage.class.php');
$h = new HTMLPage(); //Die Klasse wird in einer Variable gespeichert.

print $h->getHeader('Bestellung'); //Über die Variable wird die Funktion "getHeader" aufgerufen, wobei der Wert "Bestellung" übergeben wird.

$kaffee = array(
    array('101 504', 'kaffee1.jpg', 'Guatemala Arabica Biokaffee', 'Samtig weich mit der besonderen Kaffeenote', 250, 17.90),
    array('101 624', 'kaffee2.jpg', 'Equador Cooperativa Salamanca', 'Cremig mild und harmonisch', 275, 23.90),
    array('101 829', 'kaffee3.jpg', 'Ethopia Mocambo Arabica', 'Weich würzig und cremig', 300, 14.85),
    array('101 382', 'kaffee4.jpg', 'Columbia Rainforest', 'Edel cremig, nussig und lang anhaltend', 250, 19.90),
    array('101 774', 'kaffee5.jpg', 'd\'Ivorie Robusta', 'Cremig, kräftig, würzig und lebendig', 500, 24.65),
);

//In der for-Schleife wird der dynamische Bereich der Seite (die verschiedenen Produkte) jeweils angepasst geprintet.
//Um die eingegebenen Werte weiterverarbeiten zu können, wird die for-Schleife von einem "form" umschlossen, 
//  welches die eingegebenen Daten weitergibt an die Seite "bestell_zusammenfassung.php".
//Um auf die verschiedenen Stellen im Array "kaffee" und die darin enthaltenen Arrays zugreifen zu können,
//  wird die Startvariable der for-Schleife verwendet.
print '
        <section id="products">
            <form action="bestell_zusammenfassung.php" method="POST">';
                
            for ($i = 0; $i <= 4; $i++) { print
                    '<article class="product">
                    <div class="prodimg"><img src="img/kaffee' . ($i + 1) . '.jpg" alt="Kaffee ' . ($i + 1) . '"></div>
                    <div class="proddesc">
                        <p class="muted displayright">Artikelnummer:' . $kaffee[$i][0] . '</p>
                        <h1>' . $kaffee[$i][2] . '</h1>
                        <p>' . $kaffee[$i][3] . '</p>
                        <p class="displayright">' . $kaffee[$i][4] . ' g Packung</p>
                        <p class="price displayright">' . number_format($kaffee[$i][5], 2, ',', '.') . '€</p>
                        <p class="displayright">
                            <label for="anzahl[' . $i . ']">In den Warenkorb legen (Stk.):</label>    
                            <input type="number" name="anzahl[' . $i . ']" value="0" min="0">
                        </p> 
                    </div>
                    </article>';
                } 
                
                print '                            
                    <article class="displaycenter">
                        <input type="submit" name="absenden" value="Bestellen">
                    </article>
            </form>
        </section>
';

//Über die Variable wird die Funktion "getFooter" aufgerufen, welche sich in der Klasse "HTMLPage" befindet
print $h->getFooter();