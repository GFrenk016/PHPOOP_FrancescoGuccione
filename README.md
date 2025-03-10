esercizio 1

Utilizza i principi di OOP ed Ereditarieta' per creare una struttura a classi come la seguente:


+-|Continent
+-----------|Country
+--------------------|Region
+---------------------------|Province
+------------------------------------|City
+------------------------------------------|Street
Ogni classe avra' un attributo public del tipo:


$nameContinent:
$nameCountry;
$nameRegion;
$nameProvince;
$nameCity;
$nameStreet;
La prima classe genitore avra' la seguente struttura:


class Continent
{
  public $nameContinent;
  public function __construct($continent)
  {
    $this->nameContinent = $continent;
  }
}
Istanzia un nuovo oggetto $myLocation, per poi richiamare un metodo chiamato getMyCurrentLocation() che stampi a schermo la seguente frase: “Mi trovo in Europa, Italia, Puglia, Ba, Bari, Strada San Giorgio Martire 2D“. Anche le sottoclassi possono avere loro sottoclassi!

esercizio 2

Crea una classe `Veicolo` che rappresenti un generico veicolo.

 * Ogni veicolo deve avere un modello, un anno di produzione e un metodo info() che restituisca una stringa con le informazioni inserite negli attributi.

 * Crea due sottoclassi: `Auto` e `Moto`.

 * - `Auto` deve avere un attributo aggiuntivo `porte` ed un metodo che mi stampi il numero di porte presenti per questa auto.

 * - `Moto` deve avere un attributo aggiuntivo `tipoMoto` ed un metodo che mi stampi quale tipo di moto é stata creata (naked, scrambler, ecc..).



 * Infine, crea istanze di entrambe le classi e richiama il metodo  creato. Divertiti a creare altri metodi per ogni sottoclasse!