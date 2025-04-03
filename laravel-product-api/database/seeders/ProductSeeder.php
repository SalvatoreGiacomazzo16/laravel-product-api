<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        $categories = Category::all();

        $products = [
            // Elettronica
            ['Smartphone X1', 'Smartphone avanzato con fotocamera da 48MP', 599.99, 50],
            ['Tablet Pro 10', 'Tablet con schermo 10" e penna stilo', 349.99, 30],
            ['Laptop Ultra', 'Laptop leggero con SSD 512GB', 899.99, 20],
            ['Cuffie Wireless', 'Cuffie con cancellazione del rumore', 199.99, 100],
            ['Smartwatch V2', 'Smartwatch con monitoraggio attività', 159.99, 75],

            // Abbigliamento
            ['Maglia Basic', 'Maglia in cotone 100%', 19.99, 200],
            ['Jeans Slim', 'Jeans aderenti di alta qualità', 49.99, 150],
            ['Giacca Invernale', 'Giacca resistente all\'acqua', 129.99, 80],
            ['Scarpe Running', 'Scarpe da running ammortizzate', 89.99, 120],
            ['Cappello Estivo', 'Cappello in paglia per il sole', 24.99, 180],

            // Casa e Giardino
            ['Set di Pentole', 'Set di 6 pentole antiaderenti', 79.99, 60],
            ['Tovaglia Elegante', 'Tovaglia in lino 150x250 cm', 39.99, 90],
            ['Lampada da Tavolo', 'Lampada LED regolabile', 29.99, 110],
            ['Set di Cuscini', '4 cuscini decorativi per divano', 49.99, 70],
            ['Grill a Gas', 'Grill da giardino 3 bruciatori', 199.99, 40],

            // Alimentari
            ['Olio Extra Vergine', 'Olio d\'oliva 1L biologico', 12.99, 300],
            ['Pasta Integrale', 'Pasta di grano duro 500g', 1.99, 500],
            ['Caffè in Grani', 'Miscela premium 250g', 8.99, 250],
            ['Miele Artigianale', 'Miele millefiori 500g', 9.99, 180],
            ['Cioccolato Fondente', 'Tavoletta 85% cacao 100g', 3.99, 400],

            // Bellezza
            ['Crema Viso', 'Crema idratante giorno e notte', 24.99, 150],
            ['Shampoo Volume', 'Shampoo per capelli fini', 14.99, 200],
            ['Rossetto Matte', 'Rossetto a lunga durata', 12.99, 180],
            ['Profumo Floreale', 'Eau de parfum 50ml', 59.99, 90],
            ['Kit Trucco', 'Set base per make-up', 39.99, 120],

            // Aggiungi altri 75 prodotti per arrivare a 100
            ['Monitor 24"', 'Monitor Full HD IPS', 149.99, 45],
            ['Tastiera Meccanica', 'Tastiera gaming RGB', 89.99, 65],
            ['Mouse Wireless', 'Mouse ergonomico 1600DPI', 29.99, 95],
            ['Webcam HD', 'Webcam 1080p con microfono', 49.99, 55],
            ['HDD Esterno 1TB', 'Disco esterno USB 3.0', 59.99, 85],
            ['Power Bank 10000mAh', 'Caricatore portatile', 29.99, 115],
            ['Cavo HDMI 2m', 'Cavo ad alta velocità', 9.99, 195],
            ['Adattatore USB-C', 'Adattatore multiporta', 19.99, 145],
            ['Ventilatore USB', 'Ventilatore da scrivania', 14.99, 125],
            ['Supporto Laptop', 'Stand raffreddamento', 24.99, 105],
            ['Felpa con Cappuccio', 'Felpa in pile con zip', 39.99, 85],
            ['Pantaloni Sportivi', 'Pantaloni training traspiranti', 34.99, 95],
            ['Maglia Termica', 'Maglia a maniche lunghe', 29.99, 105],
            ['Calzini Sport', 'Calzini tecnici 3 paia', 12.99, 155],
            ['Giacca a Vento', 'Giacca leggera ripiegabile', 49.99, 75],
            ['Scarpe da Trekking', 'Scarpe impermeabili', 79.99, 65],
            ['Zaino 30L', 'Zaino ergonomico multitasche', 44.99, 85],
            ['Cintura in Pelle', 'Cintura classica marrone', 29.99, 115],
            ['Occhiali da Sole', 'Lenti polarizzate UV400', 39.99, 95],
            ['Guanti Invernali', 'Guanti termici touchscreen', 19.99, 135],
            ['Pentola a Pressione', 'Pentola 6L antiaderente', 69.99, 55],
            ['Friggitrice ad Aria', 'Friggitrice 5L 1500W', 89.99, 45],
            ['Macchina per Pane', 'Macchina automatica', 79.99, 35],
            ['Set di Coltelli', '6 coltelli professionali', 59.99, 65],
            ['Bilancia Cucina', 'Bilancia digitale 5kg', 19.99, 95],
            ['Tagliere in Legno', 'Tagliere multiuso', 14.99, 105],
            ['Filtro per Caffè', '100 filtri per caffettiera', 4.99, 195],
            ['Bottiglia Termica', 'Bottiglia 500ml 12h', 24.99, 85],
            ['Set di Tazze', '6 tazze da caffè', 29.99, 75],
            ['Acqua Minerale', 'Bottiglia 1.5L 12pz', 6.99, 295],
            ['Snack Proteico', 'Barretta 30g 12pz', 14.99, 185],
            ['Salsa BBQ', 'Bottiglia 250ml', 3.99, 155],
            ['Cereali Integrali', 'Scatola 500g', 4.99, 175],
            ['Succo di Frutta', 'Pack 6x200ml', 5.99, 165],
            ['Biscotti Integrali', 'Pacchetto 300g', 2.99, 225],
            ['Gelato alla Vaniglia', 'Tubetto 500ml', 4.99, 135],
            ['Crema Corpo', 'Crema idratante 400ml', 12.99, 95],
            ['Bagnoschiuma', 'Bagnoschiuma rilassante', 8.99, 115],
            ['Dentifricio Whitening', 'Dentifricio sbiancante', 4.99, 155],
            ['Deodorante Roll-on', 'Deodorante 48h', 5.99, 145],
            ['Spazzola Capelli', 'Spazzola anticrespo', 9.99, 125],
            ['Rasoio Elettrico', 'Rasoio a batteria', 29.99, 85],
            ['Tagliaunghie', 'Tagliaunghie professionale', 7.99, 165],
            ['Pettine in Legno', 'Pettine a denti larghi', 3.99, 185],
            ['Specchio Ingranditore', 'Specchio da tavolo LED', 19.99, 95],
            ['Bilancia Pesapersone', 'Bilancia digitale', 24.99, 75],
            ['Palla da Calcio', 'Palla taglia 5 ufficiale', 29.99, 65],
            ['Pesetti 2kg', 'Set di 2 pesi da palestra', 19.99, 95],
            ['Tappetino Yoga', 'Tappetino antiscivolo', 24.99, 85],
            ['Corda per Saltare', 'Corda regolabile', 9.99, 115],
            ['Borraccia Sport', 'Borraccia 750ml', 14.99, 105],
            ['Bicicletta City', 'Bici urbana 28"', 299.99, 25],
            ['Tuta da Ginnastica', 'Tuta training completa', 49.99, 65],
            ['Occhialini Nuoto', 'Occhialini antiappannamento', 14.99, 95],
            ['Guanti da Boxe', 'Guanti training 12oz', 39.99, 55],
            ['Zaino Idratazione', 'Zaino con sacca acqua', 59.99, 45],
            ['Palla da Basket', 'Palla ufficiale NBA', 49.99, 55],
            ['Set Golf', 'Set completo principianti', 199.99, 15],
            ['Racchetta Tennis', 'Racchetta professionale', 89.99, 35],
            ['Mazza da Baseball', 'Mazza in alluminio', 69.99, 25],
            ['Giubbotto Salvagente', 'Giubbotto taglia M', 39.99, 45],
            ['Borsa Sport', 'Borsa capiente multitasche', 34.99, 65],
            ['Casco Bici', 'Casco sicurezza certificato', 49.99, 55],
            ['Pallina da Tennis', 'Tube di 3 palline', 9.99, 105],
            ['Tapis Roulant', 'Tapis roulant pieghevole', 399.99, 10],
            ['Ellittica Home', 'Attrezzo cardio', 299.99, 15],
            ['Panca Pesi', 'Panca regolabile', 89.99, 25],
            ['Set Manubri', 'Set 5-10-15kg', 79.99, 35],
            ['Kettlebell 8kg', 'Peso per functional training', 29.99, 45],
            ['Bande Elastiche', 'Set di 5 bande', 19.99, 65],
            ['Tappeto per Stretching', 'Tappeto spesso 1cm', 24.99, 55]
        ];
foreach ($products as $product) {
Product::create([
    'name' => $product[0],
    'description' => $product[1],
    'price' => $product[2],
    'category_id' => $categories->random()->id,

]);

}
    }
}
