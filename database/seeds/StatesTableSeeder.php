<?php

use App\State;
use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $states = [
            [
                "name" => "Abia",
                "capital" => "Umuahia",
                "lgas" => [
                    ["name"=>"Aba North"],["name"=>"Aba South"],["name"=>"Arochukwu"],["name"=>"Bende"],["name"=>"Ikwuano"],["name"=>"Isiala Ngwa North"],["name"=>"Isiala Ngwa South"],["name"=>"Isuikwuato"],["name"=>"Obi Ngwa"],["name"=>"Ohafia"],["name"=>"Osisioma"],["name"=>"Ugwunagbo"],["name"=>"Ukwa East"],["name"=>"Ukwa West"],["name"=>"Umu Nneochi"],["name"=>"Umuahia North"],["name"=>"Umuahia South"]
                ]
            ],
            [
                "name" => "Adamawa",
                "capital" => "Yola",
                "lgas" => [
                    ["name"=>"Demsa"],["name"=>"Fufure"],["name"=>"Ganye"],["name"=>"Gayuk"],["name"=>"Gombi"],["name"=>"Grie"],["name"=>"Hong"],["name"=>"Jada"],["name"=>"Lamurde"],["name"=>"Madagali"],["name"=>"Maiha"],["name"=>"Mayo Belwa"],["name"=>"Michika"],["name"=>"Mubi North"],["name"=>"Mubi South"],["name"=>"Numan"],["name"=>"Shelleng"],["name"=>"Song"],["name"=>"Toungo"],["name"=>"Yola North"],["name"=>"Yola South"]
                ]
            ],
            [
                "name" => "Akwa Ibom",
                "capital" => "Uyo",
                "lgas" => [
                    ["name"=>"Abak"],["name"=>"Eastern Obolo"],["name"=>"Eket"],["name"=>"Esit Eket"],["name"=>"Essien Udim"],["name"=>"Etim Ekpo"],["name"=>"Etinan"],["name"=>"Ibeno"],["name"=>"Ibesikpo Asutan"],["name"=>"Ibiono-Ibom"],["name"=>"Ika"],["name"=>"Ikono"],["name"=>"Ikot Abasi"],["name"=>"Ikot Ekpene"],["name"=>"Ini"],["name"=>"Itu"],["name"=>"Mbo"],["name"=>"Mkpat-Enin"],["name"=>"Nsit-Atai"],["name"=>"Nsit-Ibom"],["name"=>"Nsit-Ubium"],["name"=>"Obot Akara"],["name"=>"Okobo"],["name"=>"Onna"],["name"=>"Oron"],["name"=>"Oruk Anam"],["name"=>"Udung-Uko"],["name"=>"Ukanafun"],["name"=>"Uruan"],["name"=>"Urue-Offong/Oruko"],["name"=>"Uyo"]
                ]
            ],
            [
                "name" => "Anambra",
                "capital" => "Awka",
                "lgas" => [
                    ["name"=>"Aguata"],["name"=>"Anambra East"],["name"=>"Anambra West"],["name"=>"Anaocha"],["name"=>"Awka North"],["name"=>"Awka South"],["name"=>"Ayamelum"],["name"=>"Dunukofia"],["name"=>"Ekwusigo"],["name"=>"Idemili North"],["name"=>"Idemili South"],["name"=>"Ihiala"],["name"=>"Njikoka"],["name"=>"Nnewi North"],["name"=>"Nnewi South"],["name"=>"Ogbaru"],["name"=>"Onitsha North"],["name"=>"Onitsha South"],["name"=>"Orumba North"],["name"=>"Orumba South"],["name"=>"Oyi"]

                ]
            ],
            [
                "name" => "Bauchi",
                "capital" => "Bauchi",
                "lgas" => [
                    ["name"=>"Alkaleri"],["name"=>"Bauchi"],["name"=>"Bogoro"],["name"=>"Damban"],["name"=>"Darazo"],["name"=>"Dass"],["name"=>"Gamawa"],["name"=>"Ganjuwa"],["name"=>"Giade"],["name"=>"Itas/Gadau"],["name"=>"Jama'are"],["name"=>"Katagum"],["name"=>"Kirfi"],["name"=>"Misau"],["name"=>"Ningi"],["name"=>"Shira"],["name"=>"Tafawa Balewa"],["name"=>"Toro"],["name"=>"Warji"],["name"=>"Zaki"]
                ]
            ],
            [
                "name" => "Bayelsa",
                "capital" => "Yenagoa",
                "lgas" => [
                    ["name"=>"Brass"],["name"=>"Ekeremor"],["name"=>"Kolokuma/Opokuma"],["name"=>"Nembe"],["name"=>"Ogbia"],["name"=>"Sagbama"],["name"=>"Southern Ijaw"],["name"=>"Yenagoa"]
                ]
            ],
            [
                "name" => "Benue",
                "capital" => "Makurdii",
                "lgas" => [
                    ["name"=>"Ado"],["name"=>"Agatu"],["name"=>"Apa"],["name"=>"Buruku"],["name"=>"Gboko"],["name"=>"Guma"],["name"=>"Gwer East"],["name"=>"Gwer West"],["name"=>"Katsina-Ala"],["name"=>"Konshisha"],["name"=>"Kwande"],["name"=>"Logo"],["name"=>"Makurdi"],["name"=>"Obi"],["name"=>"Ogbadibo"],["name"=>"Ohimini"],["name"=>"Oju"],["name"=>"Okpokwu"],["name"=>"Oturkpo"],["name"=>"Tarka"],["name"=>"Ukum"],["name"=>"Ushongo"],["name"=>"Vandeikya"]
                ],
            ],
            [
                "name" => "Borno",
                "capital" => "Maiduguri",
                "lgas" => [
                    ["name"=>"Abadam"],["name"=>"Askira/Uba"],["name"=>"Bama"],["name"=>"Bayo"],["name"=>"Biu"],["name"=>"Chibok"],["name"=>"Damboa"],["name"=>"Dikwa"],["name"=>"Gubio"],["name"=>"Guzamala"],["name"=>"Gwoza"],["name"=>"Hawul"],["name"=>"Jere"],["name"=>"Kaga"],["name"=>"Kala/Balge"],["name"=>"Konduga"],["name"=>"Kukawa"],["name"=>"Kwaya Kusar"],["name"=>"Mafa"],["name"=>"Magumeri"],["name"=>"Maiduguri"],["name"=>"Marte"],["name"=>"Mobbar"],["name"=>"Monguno"],["name"=>"Ngala"],["name"=>"Nganzai"],["name"=>"Shani"]
                ]
            ],
            [
                "name" => "Cross River",
                "capital" => "Calabar",
                "lgas" => [
                    ["name"=>"Abi"],["name"=>"Akamkpa"],["name"=>"Akpabuyo"],["name"=>"Bakassi"],["name"=>"Bekwarra"],["name"=>"Biase"],["name"=>"Boki"],["name"=>"Calabar Municipal"],["name"=>"Calabar South"],["name"=>"Etung"],["name"=>"Ikom"],["name"=>"Obanliku"],["name"=>"Obubra"],["name"=>"Obudu"],["name"=>"Odukpani"],["name"=>"Ogoja"],["name"=>"Yakuur"],["name"=>"Yala"]
                ]
            ],
            [
                "name" => "Delta",
                "capital" => "Asaba",
                "lgas" => [
                    ["name"=>"Aniocha North"],["name"=>"Aniocha South"],["name"=>"Bomadi"],["name"=>"Burutu"],["name"=>"Ethiope East"],["name"=>"Ethiope West"],["name"=>"Ika North East"],["name"=>"Ika South"],["name"=>"Isoko North"],["name"=>"Isoko South"],["name"=>"Ndokwa East"],["name"=>"Ndokwa West"],["name"=>"Okpe"],["name"=>"Oshimili North"],["name"=>"Oshimili South"],["name"=>"Patani"],["name"=>"Sapele"],["name"=>"Udu"],["name"=>"UghelliNorth"],["name"=>"Ughelli South"],["name"=>"Ukwuani"],["name"=>"Uvwie"],["name"=>"Warri North"],["name"=>"Warri South"],["name"=>"Warri South West"]
                ]
            ],
            [
                "name" => "Ebonyi",
                "capital" => "Abakiliki",
                "lgas" => [
                    ["name"=>"Abakaliki"],["name"=>"Afikpo North"],["name"=>"Afikpo South"],["name"=>"Ebonyi"],["name"=>"Ezza North"],["name"=>"Ezza South"],["name"=>"Ikwo"],["name"=>"Ishielu"],["name"=>"Ivo"],["name"=>"Izzi"],["name"=>"Ohaozara"],["name"=>"Ohaukwu"],["name"=>"Onicha"]
                ]
            ],
            [
                "name" => "Edo",
                "capital" => "Benin city",
                "lgas" => [
                    ["name"=>"Akoko-Edo"],["name"=>"Egor"],["name"=>"Esan Central"],["name"=>"Esan North-East"],["name"=>"Esan South-East"],["name"=>"Esan West"],["name"=>"Etsako Central"],["name"=>"Etsako East"],["name"=>"Etsako West"],["name"=>"Igueben"],["name"=>"Ikpoba Okha"],["name"=>"Oredo"],["name"=>"Orhionmwon"],["name"=>"Ovia North-East"],["name"=>"Ovia South-West"],["name"=>"Owan East"],["name"=>"Owan West"],["name"=>"Uhunmwonde"]
                ]
            ],
            [
                "name" => "Ekiti",
                "capital" => "Ado Ekiti",
                "lgas" => [
                    ["name"=>"Ado Ekiti"],["name"=>"Efon"],["name"=>"Ekiti East"],["name"=>"Ekiti South-West"],["name"=>"Ekiti West"],["name"=>"Emure"],["name"=>"Gbonyin"],["name"=>"Ido Osi"],["name"=>"Ijero"],["name"=>"Ikere"],["name"=>"Ikole"],["name"=>"Ilejemeje"],["name"=>"Irepodun/Ifelodun"],["name"=>"Ise/Orun"],["name"=>"Moba"],["name"=>"Oye"]
                ]
            ],
            [
                "name" => "Enugu",
                "capital" => "Enugu",
                "lgas" => [
                    ["name"=>"Aninri"],["name"=>"Awgu"],["name"=>"Enugu East"],["name"=>"Enugu North"],["name"=>"Enugu South"],["name"=>"Ezeagu"],["name"=>"Igbo Etiti"],["name"=>"Igbo Eze North"],["name"=>"Igbo Eze South"],["name"=>"Isi Uzo"],["name"=>"Nkanu East"],["name"=>"Nkanu West"],["name"=>"Nsukka"],["name"=>"Oji River"],["name"=>"Udenu"],["name"=>"Udi"],["name"=>"Uzo Uwani"]
                ]
            ],

            [
                "name" => "Gombe",
                "capital" => "Gombe",
                "lgas" => [
                    ["name"=>"Akko"],["name"=>"Balanga"],["name"=>"Billiri"],["name"=>"Dukku"],["name"=>"Funakaye"],["name"=>"Gombe"],["name"=>"Kaltungo"],["name"=>"Kwami"],["name"=>"Nafada"],["name"=>"Shongom"],["name"=>"Yamaltu/Deba"]
                ]
            ],
            [
                "name" => "Imo",
                "capital" => "Owerri",
                "lgas" => [
                    ["name"=>"Aboh Mbaise"],["name"=>"Ahiazu Mbaise"],["name"=>"Ehime Mbano"],["name"=>"Ezinihitte"],["name"=>"Ideato North"],["name"=>"Ideato South"],["name"=>"Ihitte/Uboma"],["name"=>"Ikeduru"],["name"=>"Isiala Mbano"],["name"=>"Isu"],["name"=>"Mbaitoli"],["name"=>"Ngor Okpala"],["name"=>"Njaba"],["name"=>"Nkwerre"],["name"=>"Nwangele"],["name"=>"Obowo"],["name"=>"Oguta"],["name"=>"Ohaji/Egbema"],["name"=>"Okigwe"],["name"=>"Orlu"],["name"=>"Orsu"],["name"=>"Oru East"],["name"=>"Oru West"],["name"=>"Owerri Municipal"],["name"=>"`Owerri North"],["name"=>"
Owerri West"],["name"=>"Unuimo"]
                ]
            ],
            [
                "name" => "Jigawa",
                "capital" => "Dutse",
                "lgas" => [
                    ["name"=>"Auyo"],["name"=>"Babura"],["name"=>"Biriniwa"],["name"=>"Birnin Kudu"],["name"=>"Buji"],["name"=>"Dutse"],["name"=>"Gagarawa"],["name"=>"Garki"],["name"=>"Gumel"],["name"=>"Guri"],["name"=>"Gwaram"],["name"=>"Gwiwa"],["name"=>"Hadejia"],["name"=>"Jahun"],["name"=>"Kafin Hausa"],["name"=>"Kaugama"],["name"=>"Kazaure"],["name"=>"Kiri Kasama"],["name"=>"Kiyawa"],["name"=>"Maigatari"],["name"=>"Malam Madori"],["name"=>"Miga"],["name"=>"Ringim"],["name"=>"Roni"],["name"=>"Sule Tankarkar"],["name"=>"Taura"],["name"=>"Yankwashi"]
                ]
            ],
            [
                "name" => "Kaduna",
                "capital" => "Kaduna",
                "lgas" => [
                    ["name"=>"Birnin Gwari"],["name"=>"Chikun"],["name"=>"Giwa"],["name"=>"Igabi"],["name"=>"Ikara"],["name"=>"Jaba"],["name"=>"Jema'a"],["name"=>"Kachia"],["name"=>"Kaduna North"],["name"=>"Kaduna South"],["name"=>"Kagarko"],["name"=>"Kajuru"],["name"=>"Kaura"],["name"=>"Kauru"],["name"=>"Kubau"],["name"=>"Kudan"],["name"=>"Lere"],["name"=>"Makarfi"],["name"=>"Sabon Gari"],["name"=>"Sanga"],["name"=>"Soba"],["name"=>"Zangon Kataf"],["name"=>"Zaria"]
                ]

            ],
            [
                "name" => "Kano",
                "capital" => "Kano",
                "lgas" => [
                    ["name"=>"Ajingi"],["name"=>"Albasu"],["name"=>"Bagwai"],["name"=>"Bebeji"],["name"=>"Bichi"],["name"=>"Bunkure"],["name"=>"Dala"],["name"=>"Dambatta"],["name"=>"Dawakin Kudu"],["name"=>"Dawakin Tofa"],["name"=>"Doguwa"],["name"=>"Fagge"],["name"=>"Gabasawa"],["name"=>"Garko"],["name"=>"Garun Mallam"],["name"=>"Gaya"],["name"=>"Gezawa"],["name"=>"Gwale"],["name"=>"Gwarzo"],["name"=>"Kabo"],["name"=>"Kano Municipal"],["name"=>"Karaye"],["name"=>"Kibiya"],["name"=>"Kiru"],["name"=>"Kumbotso"],["name"=>"Kunchi"],["name"=>"Kura"],["name"=>"Madobi"],["name"=>"Makoda"],["name"=>"Minjibir"],["name"=>"Nasarawa"],["name"=>"Rano"],["name"=>"Rimin Gado"],["name"=>"Rogo"],["name"=>"Shanono"],["name"=>"Sumaila"],["name"=>"Takai"],["name"=>"Tarauni"],["name"=>"Tofa"],["name"=>"Tsanyawa"],["name"=>"Tudun Wada"],["name"=>"Ungogo"],["name"=>"Warawa"],["name"=>"Wudil"]
                ]
            ],
            [
                "name" => "Katsina",
                "capital" => "Katsina",
                "lgas" => [
                    ["name"=>"Bakori"],["name"=>"Batagarawa"],["name"=>"Batsari"],["name"=>"Baure"],["name"=>"Bindawa"],["name"=>"Charanchi"],["name"=>"Dan Musa"],["name"=>"Dandume"],["name"=>"Danja"],["name"=>"Daura"],["name"=>"Dutsi"],["name"=>"Dutsin Ma"],["name"=>"Faskari"],["name"=>"Funtua"],["name"=>"Ingawa"],["name"=>"Jibia"],["name"=>"Kafur"],["name"=>"Kaita"],["name"=>"Kankara"],["name"=>"Kankia"],["name"=>"Katsina"],["name"=>"Kurfi"],["name"=>"Kusada"],["name"=>"Mai'Adua"],["name"=>"Malumfashi"],["name"=>"Mani"],["name"=>"Mashi"],["name"=>"Matazu"],["name"=>"Musawa"],["name"=>"Rimi"],["name"=>"Sabuwa"],["name"=>"Safana"],["name"=>"Sandamu"],["name"=>"Zango"]
                ]
            ],
            [
                "name" => "Kebbi",
                "capital" => "Birnin Kebbi",
                "lgas" => [
                    ["name"=>"Aleiro"],["name"=>"Arewa Dandi"],["name"=>"Argungu"],["name"=>"Augie"],["name"=>"Bagudo"],["name"=>"Birnin Kebbi"],["name"=>"Bunza"],["name"=>"Dandi"],["name"=>"Fakai"],["name"=>"Gwandu"],["name"=>"Jega"],["name"=>"Kalgo"],["name"=>"Koko/Besse"],["name"=>"Maiyama"],["name"=>"Ngaski"],["name"=>"Sakaba"],["name"=>"Shanga"],["name"=>"Suru"],["name"=>"Wasagu/Danko"],["name"=>"Yauri"],["name"=>"Zuru"]
                ]
            ],
            [
                "name" => "Kogi",
                "capital" => "Lokoja",
                "lgas" => [
                    ["name"=>"Adavi"],["name"=>"Ajaokuta"],["name"=>"Ankpa"],["name"=>"Bassa"],["name"=>"Dekina"],["name"=>"Ibaji"],["name"=>"Idah"],["name"=>"Igalamela Odolu"],["name"=>"Ijumu"],["name"=>"Kabba/Bunu"],["name"=>"Kogi"],["name"=>"Lokoja"],["name"=>"Mopa Muro"],["name"=>"Ofu"],["name"=>"Ogori/Magongo"],["name"=>"Okehi"],["name"=>"Okene"],["name"=>"Olamaboro"],["name"=>"Omala"],["name"=>"Yagba East"],["name"=>"Yagba West"]
                ]
            ],
            [
                "name" => "Kwara",
                "capital" => "Ilori",
                "lgas" => [
                    ["name"=>"Asa"],["name"=>"Baruten"],["name"=>"Edu"],["name"=>"Ekiti"],["name"=>"Ifelodun"],["name"=>"Ilorin East"],["name"=>"Ilorin South"],["name"=>"Ilorin West"],["name"=>"Irepodun"],["name"=>"Isin"],["name"=>"Kaiama"],["name"=>"Moro"],["name"=>"Offa"],["name"=>"Oke Ero"],["name"=>"Oyun"],["name"=>"Pategi"]
                ]
            ],
            [
                "name" => "Lagos",
                "capital" => "Ikeja",
                "lgas" => [
                    ["name"=>"Agege"],["name"=>"Ajeromi-Ifelodun"],["name"=>"Alimosho"],["name"=>"Amuwo-Odofin"],["name"=>"Apapa"],["name"=>"Badagry"],["name"=>"Epe"],["name"=>"Eti Osa"],["name"=>"Ibeju-Lekki"],["name"=>"Ifako-Ijaiye"],["name"=>"Ikeja"],["name"=>"Ikorodu"],["name"=>"Kosofe"],["name"=>"Lagos Island"],["name"=>"Lagos Mainland"],["name"=>"Mushin"],["name"=>"Ojo"],["name"=>"Oshodi-Isolo"],["name"=>"Shomolu"],["name"=>"Surulere"]
                ]
            ],
            [
                "name" => "Nasarawa",
                "capital" => "Lafia",
                "lgas" => [
                    ["name"=>"Akwanga"],["name"=>"Awe"],["name"=>"Doma"],["name"=>"Karu"],["name"=>"Keana"],["name"=>"Keffi"],["name"=>"Kokona"],["name"=>"Lafia"],["name"=>"Nasarawa"],["name"=>"Nasarawa Egon"],["name"=>"Obi"],["name"=>"Toto"],["name"=>"Wamba"]
                ]
            ],
            [
                "name" => "Niger",
                "capital" => "Minna",
                "lgas" => [
                    ["name"=>"Agaie"],["name"=>"Agwara"],["name"=>"Bida"],["name"=>"Borgu"],["name"=>"Bosso"],["name"=>"Chanchaga"],["name"=>"Edati"],["name"=>"Gbako"],["name"=>"Gurara"],["name"=>"Katcha"],["name"=>"Kontagora"],["name"=>"Lapai"],["name"=>"Lavun"],["name"=>"Magama"],["name"=>"Mariga"],["name"=>"Mashegu"],["name"=>"Mokwa"],["name"=>"Moya"],["name"=>"Paikoro"],["name"=>"Rafi"],["name"=>"Rijau"],["name"=>"Shiroro"],["name"=>"Suleja"],["name"=>"Tafa"],["name"=>"Wushishi"]
                ]
            ],
            [
                "name" => "Ogun",
                "capital" => "Abeokuta",
                "lgas" => [
                    ["name"=>"Abeokuta North"],["name"=>"Abeokuta South"],["name"=>"Ado-Odo/Ota"],["name"=>"Egbado North"],["name"=>"Egbado South"],["name"=>"Ewekoro"],["name"=>"Ifo"],["name"=>"Ijebu East"],["name"=>"Ijebu North"],["name"=>"Ijebu North East"],["name"=>"Ijebu Ode"],["name"=>"Ikenne"],["name"=>"Imeko Afon"],["name"=>"Ipokia"],["name"=>"Obafemi Owode"],["name"=>"Odeda"],["name"=>"Odogbolu"],["name"=>"Ogun Waterside"],["name"=>"Remo North"],["name"=>"Shagamu"]
                ]
            ],
            [
                "name" => "Ondo",
                "capital" => "Akure",
                "lgas" => [
                    ["name"=>"Akoko North-East"],["name"=>"Akoko North-West"],["name"=>"Akoko South-East"],["name"=>"Akoko South-West"],["name"=>"Akure North"],["name"=>"Akure South"],["name"=>"Ese Odo"],["name"=>"Idanre"],["name"=>"Ifedore"],["name"=>"Ilaje"],["name"=>"Ile Oluji/Okeigbo"],["name"=>"Irele"],["name"=>"Odigbo"],["name"=>"Okitipupa"],["name"=>"Ondo East"],["name"=>"Ondo West"],["name"=>"Ose"],["name"=>"Owo"]
                ]
            ],
            [
                "name" => "Osun",
                "capital" => "Osogbo",
                "lgas" => [
                    ["name"=>"Aiyedaade"],["name"=>"Aiyedire"],["name"=>"Atakunmosa East"],["name"=>"Atakunmosa West"],["name"=>"Boluwaduro"],["name"=>"Boripe"],["name"=>"Ede North"],["name"=>"Ede South"],["name"=>"Egbedore"],["name"=>"Ejigbo"],["name"=>"Ife Central"],["name"=>"Ife East"],["name"=>"Ife North"],["name"=>"Ife South"],["name"=>"Ifedayo"],["name"=>"Ifelodun"],["name"=>"Ila"],["name"=>"Ilesa East"],["name"=>"Ilesa West"],["name"=>"Irepodun"],["name"=>"Irewole"],["name"=>"Isokan"],["name"=>"Iwo"],["name"=>"Obokun"],["name"=>"Odo Otin"],["name"=>"Ola Oluwa"],["name"=>"Olorunda"],["name"=>"Oriade"],["name"=>"Orolu"],["name"=>"Osogbo"]
                ]
            ],
            [
                "name" => "Oyo",
                "capital" => "Ibadan",
                "lgas" => [
                    ["name"=>"Afijio"],["name"=>"Akinyele"],["name"=>"Atiba"],["name"=>"Atisbo"],["name"=>"Egbeda"],["name"=>"Ibadan North"],["name"=>"Ibadan NorthEast"],["name"=>"Ibadan North-West"],["name"=>"Ibadan South-East"],["name"=>"Ibadan South-West"],["name"=>"Ibarapa Central"],["name"=>"Ibarapa East"],["name"=>"Ibarapa North"],["name"=>"Ido"],["name"=>"Irepo"],["name"=>"Iseyin"],["name"=>"Itesiwaju"],["name"=>"Iwajowa"],["name"=>"Kajola"],["name"=>"Lagelu"],["name"=>"Ogbomosho North"],["name"=>"Ogbomosho South"],["name"=>"Ogo Oluwa"],["name"=>"Olorunsogo"],["name"=>"Oluyole"],["name"=>"Ona Ara"],["name"=>"Orelope"],["name"=>"Ori Ire"],["name"=>"Oyo"],["name"=>"Oyo East"],["name"=>"Saki East"],["name"=>"Saki West"],["name"=>"Surulere"]
                ]
            ],
            [
                "name" => "Plateau",
                "capital" => "Jos",
                "lgas" => [
                    ["name"=>"Barkin Ladi"],["name"=>"Bassa"],["name"=>"Bokkos"],["name"=>"Jos East"],["name"=>"Jos North"],["name"=>"Jos South"],["name"=>"Kanam"],["name"=>"Kanke"],["name"=>"Langtang North"],["name"=>"Langtang South"],["name"=>"Mangu"],["name"=>"Mikang"],["name"=>"Pankshin"],["name"=>"Qua'an Pan"],["name"=>"Riyom"],["name"=>"Shendam"],["name"=>"Wase"]
                ]
            ],
            [
                "name" => "Rivers",
                "capital" => "Portharcourt",
                "lgas" => [
                    ["name"=>"Abua/Odual"],["name"=>"Ahoada East"],["name"=>"Ahoada West"],["name"=>"Akuku-Toru"],["name"=>"Andoni"],["name"=>"Asari-Toru"],["name"=>"Bonny"],["name"=>"Degema"],["name"=>"Eleme"],["name"=>"Emuoha"],["name"=>"Etche"],["name"=>"Gokana"],["name"=>"Ikwerre"],["name"=>"Khana"],["name"=>"Obio/Akpor"],["name"=>"Ogba/Egbema/Ndoni"],["name"=>"Ogu/Bolo"],["name"=>"Okrika"],["name"=>"Omuma"],["name"=>"Opobo/Nkoro"],["name"=>"Oyigbo"],["name"=>"Port Harcourt"],["name"=>"Tai"]
                ]
            ],
            [
                "name" => "Sokoto",
                "capital" => "Sokoto",
                "lgas" => [
                    ["name"=>"Binji"],["name"=>"Bodinga"],["name"=>"Dange Shuni"],["name"=>"Gada"],["name"=>"Goronyo"],["name"=>"Gudu"],["name"=>"Gwadabawa"],["name"=>"Illela"],["name"=>"Isa"],["name"=>"Kebbe"],["name"=>"Kware"],["name"=>"Rabah"],["name"=>"Sabon Birni"],["name"=>"Shagari"],["name"=>"Silame"],["name"=>"Sokoto North"],["name"=>"Sokoto South"],["name"=>"Tambuwal"],["name"=>"Tangaza"],["name"=>"Tureta"],["name"=>"Wamako"],["name"=>"Wurno"],["name"=>"Yabo"]
                ]
            ],
            [
                "name" => "Taraba",
                "capital" => "Jalingo",
                "lgas" => [
                    ["name"=>"Ardo Kola"],["name"=>"Bali"],["name"=>"Donga"],["name"=>"Gashaka"],["name"=>"Gassol"],["name"=>"Ibi"],["name"=>"Jalingo"],["name"=>"Karim Lamido"],["name"=>"Kumi"],["name"=>"Lau"],["name"=>"Sardauna"],["name"=>"Takum"],["name"=>"Ussa"],["name"=>"Wukari"],["name"=>"Yorro"],["name"=>"Zing"]
                ]
            ],
            [
                "name" => "Yobe",
                "capital" => "Damaturu",
                "lgas" => [
                    ["name"=>"Bade"],["name"=>"Bursari"],["name"=>"Damaturu"],["name"=>"Fika"],["name"=>"Fune"],["name"=>"Geidam"],["name"=>"Gujba"],["name"=>"Gulani"],["name"=>"Jakusko"],["name"=>"Karasuwa"],["name"=>"Machina"],["name"=>"Nangere"],["name"=>"Nguru"],["name"=>"Potiskum"],["name"=>"Tarmuwa"],["name"=>"Yunusari"],["name"=>"Yusufari"]
                ]
            ],
            [
                "name" => "Zamfara",
                "capital" => "Gusau",
                "lgas" => [
                    ["name"=>"Anka"],["name"=>"Bakura"],["name"=>"Birnin Magaji/Kiyaw"],["name"=>"Bukkuyum"],["name"=>"Bungudu"],["name"=>"Chafe"],["name"=>"Gummi"],["name"=>"Gusau"],["name"=>"Kaura Namoda"],["name"=>"Maradun"],["name"=>"Maru"],["name"=>"Shinkafi"],["name"=>"Talata Mafara"],["name"=>"Zurmi"]
                ]
            ],
            [
                "name" => "Federal Capital Territory",
                "capital" => "Abuja",
                "lgas" => [
                    ["name"=>"Abaji"],["name"=>"Bwari"],["name"=>"Gwagwalada"],["name"=>"Kuje"],["name"=>"Kwali"],["name"=>"Municipal Area Council"]
                ]
            ]
        ];

        foreach ($states as $state) {
            $lgas = $state['lgas'];
            unset($state['lgas']);
            $model_state = State::create($state);
            $model_state->lgas()->createMany($lgas);
        }
    }
}
