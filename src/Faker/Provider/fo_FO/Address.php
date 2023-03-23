<?php

namespace Faker\Provider\fo_FO;

class Address extends \Faker\Provider\Address
{
    /**
     * Faroese cities
     *
     * @see https://fo.wikipedia.org/wiki/Bygdir_og_b%C3%BDir_%C3%AD_F%C3%B8royum
     */
    protected static $city = [
        'Akrar', 'Argir',
        'Ánir', 'Árnafjørður',
        'Bøur',
        'Dalur', 'Depil',
        'Eiði', 'Elduvík',
        'Fámjin', 'Froðba', 'Fuglafjørður', 'Funningsfjørður', 'Funningur',
        'Gásadalur', 'Gjógv', 'Glyvrar', 'Gøta', 'Gøtueiði', 'Gøtugjógv',
        'Haldarsvík', 'Haraldssund', 'Hattarvík', 'Hellur', 'Hestur', 'Hósvík', 'Hov', 'Hoyvík', 'Húsar', 'Húsavík', 'Hvalba', 'Hvalvík', 'Hvannasund', 'Hvítanes',
        'Innan Glyvur',
        'Kaldbak', 'Kaldbaksbotnur', 'Kirkja', 'Kirkjubøur', 'Klaksvík', 'Kolbanargjógv', 'Kollafjørður', 'Koltur', 'Kunoy', 'Kvívík',
        'Lambareiði', 'Lambi', 'Langasandur', 'Leirvík', 'Leynar', 'Ljósá', 'Lopra',
        'Miðvágur', 'Mikladalur', 'Morskranes', 'Múli', 'Mykines',
        'Nes (Eysturoy)', 'Nes (Vágur)', 'Nesvík', 'Norðdepil', 'Norðoyri', 'Norðradalur', 'Norðragøta', 'Norðskáli', 'Norðtoftir', 'Nólsoy',
        'Oyndarfjørður', 'Oyrarbakki', 'Oyrareingir', 'Oyri',
        'Porkeri',
        'Rituvík', 'Runavík',
        'Saksun', 'Saltangará', 'Saltnes', 'Sandavágur', 'Sandur', 'Sandvík', 'Selatrað', 'Signabøur', 'Skarvanes',
        'Skálabotnur', 'Skálavík', 'Skáli', 'Skipanes', 'Skopun', 'Skúvoy', 'Skælingur', 'Stóra Dímun', 'Strendur',
        'Streymnes', 'Stykkið', 'Sumba', 'Sund', 'Svínáir', 'Svínoy', 'Syðradalur (Kalsoy)', 'Syðradalur (Streymoy)', 'Syðrugøta', 'Søldarfjørður', 'Sørvágur',
        'Tjørnuvík', 'Toftir', 'Tórshavn', 'Trongisvágur', 'Trøllanes', 'Tvøroyri',
        'Vágur', 'Válur', 'Vatnsoyrar', 'Velbastaður', 'Vestmanna', 'Viðareiði', 'Víkarbyrgi',
        'Æðuvík',
        'Øravík',
    ];

    /**
     * Faroese postcodes
     *
     * @see https://fo.wikipedia.org/wiki/Postnummur_%C3%AD_F%C3%B8royum
     */
    protected static $postcode = [
        '100', '110', '160', '165', '175', '176', '177', '178', '180', '185', '186', '187', '188',
        '210', '220', '230', '235', '236', '240', '260', '270', '280', '285', '286', '330', '335',
        '336', '340', '350', '358', '360', '370', '380', '385', '386', '387', '388', '400', '410',
        '415', '416', '420', '430', '435', '436', '437', '438', '440', '445', '450', '460', '465',
        '466', '470', '475', '476', '477', '478', '480', '485', '490', '494', '495', '496', '497',
        '510', '511', '512', '513', '520', '530', '600', '620', '625', '626', '627', '640', '645',
        '650', '655', '656', '660', '665', '666', '690', '695', '700', '725', '726', '727', '730',
        '735', '736', '737', '740', '750', '765', '766', '767', '780', '785', '795', '796', '797',
        '798', '800', '825', '826', '827', '850', '860', '870', '900', '925', '926', '927', '928',
        '950', '960', '970',
    ];

    /**
     * Faroese street names in Tórshavn
     *
     * @see https://gis.us.fo/arcgis/rest/services/adressur/us_adr_husanr/MapServer/0/query
     */
    protected static $streetname = [
        'Abbatrøð', 'Akranesgøta', 'Amtmansbrekkan',
        'Á Fløtti', 'Á Frælsinum', 'Á Heygnum Mikla', 'Á Teigi', 'Á Túgvu', 'A.C. Evensens gøta', 'Áargeil', 'Áarvegur', 'Álaker', 'Álvastígur',
        'Bakkahella', 'Baraldsgøta', 'Bergsvegur', 'Berjabrekka', 'Bíggjarvegur', 'Birnugøta', 'Bjarnoyarvegur', 'Blákollugøta', 'Blankagøta', 'Blómubrekka', 'Bøgøta', 'Bókbindaragøta', 'Bøkjarabrekka', 'Bóndabrekka', 'Bóndaheygur', 'Børkugøta', 'Brattabrekka', 'Brattalíð', 'Breiðablik', 'Brekkugøta', 'Bringsnagøta', 'Brobbersgøta', 'Brúnagøta', 'Bryggjubakki',
        'C. Pløyens gøta',
        'Dalagøta', 'Dalakrókur', 'Dalalíð', 'Dalastígur', 'Dalatrøð', 'Dalatún', 'Dalavegur', 'Dánjalstrøð', 'Djóna í Geil gøta', 'Doktara Dahls gøta', 'Doktara Jakobsens gøta', 'Dungagøta', 'Dvørgastígur',
        'Egholmstrøð', 'Eirargarður', 'Eiriksgøta', 'Erlings jals gøta', 'Essalág', 'Eystan Heyg', 'Eystara Bryggja', 'Eystari Ringvegur', 'Eysturstræti',
        'Fagralíð', 'Faksagøta', 'Falkavegur', 'Fjalsgøta', 'Fjalstún', 'Fjósagøta', 'Flatnagerði', 'Folagerði', 'Fríðriks Petersens gøta', 'Frúutrøð', 'Fugloyarvegur', 'Fútalág',
        'Gæsugøta', 'Gamli Velbastaðvegur', 'Gásadalsvegur', 'Geilartún', 'Geitagerði', 'Gongin', 'Granagøta', 'Grásteinsgøta', 'Gríms Kambans gøta', 'Gripsvegur', 'Grønalíð', 'Grønlandsvegur', 'Gundadalsvegur', 'Gundadalur', 'Gustugøta',
        'Hallarheygur', 'Hálsatjørn', 'Hamarsgøta', 'Handan Á', 'Handaratún', 'Hans Andriasar gøta', 'Hanusargøta', 'Haraldstrøð', 'Háskúlavegur', 'Havnargøta', 'Havragerði', 'Heiðaskákið', 'Heiðastubbi', 'Heiðavegur', 'Heimaratún', 'Heimasta Horn', 'Heinagøta', 'Hellutún', 'Hetlandsvegur', 'Heygsbreyt', 'Heygsgerði', 'Heygskrókur', 'Heygsmannavegur', 'Heygsvegur', 'Heykavegur', 'Hjaltarók', 'Hornagøta', 'Hoydalsvegur', 'Hoyvíksvegur', 'Húsabrúgv', 'Húsagøta', 'Hvalsoyargøta', 'Hvannasundsgøta', 'Hvannkrókur', 'Hvarvið', 'Hvítanesvegur',
        'Í Brekkuni', 'Í Grønulág', 'Í Lágni', 'Í Lon', 'Í Svanga', 'Í Vika', 'Írarók', 'Íslandsvegur',
        'J.C. Svabos gøta', 'J.H. Schrøters gøta', 'Jákup Nolsøes gøta', 'Jákups Dahls gøta', 'Jansstovugøta', 'Janusargøta', 'Javnagøta', 'Jekaragøta', 'Jóan Karls gøta', 'Jóannesar Paturssonar gøta', 'Jøkulstræti', 'Jónas Broncks gøta', 'Jústsgøta',
        'Kákagøta', 'Kálvagerði', 'Kerjagøta', 'Kirkjuvegur', 'Klettaskot', 'Klokkaragøta', 'Kongabrúgvin', 'Kongagøta', 'Kongsgil', 'Kopargøta', 'Korkagøta', 'Kovalág', 'Kráarvegur', 'Krókabrekka', 'Krossgøta', 'Krosslíð',
        'Láarvegur', 'Laðabrekka', 'Lagatrøð', 'Lambagerði', 'Landavegur', 'Langatún', 'Lauritsargøta', 'Lavagøta', 'Leivsgøta', 'Liasarvegur', 'Liðagøta', 'Liljugøta', 'Lítla Tvørgøta', 'Lítlagerði', 'Lítlatrøð', 'Livulág', 'Lucas Debesar gøta', 'Lützenstrøð', 'Lykkjugerði', 'Lynggøta',
        'M.A. Winthers gøta', 'Mækjugøta', 'Magnus Heinasonar gøta', 'Mammulág', 'Mannaskarð', 'Mariugøta', 'Marknagilsvegur', 'Marknalíð', 'Mattalágarvegur', 'Meinhartstrøð', 'Miðrás', 'Miðtún', 'Mikkjalstrøð', 'Millum Horna', 'Mortansstovubrekka', 'Mykinesgøta', 'Mylnugøta', 'Mýrigøta', 'Mýrisnípuvegur',
        'Niels Finsens gøta', 'Niels Winthers gøta', 'Nóatún', 'Nólsoyar Páls gøta', 'Norðari Ringvegur', 'Norðurrás', 'Noregsvegur',
        'Óðinshædd', 'Óluvugøta',
        'Oknarvegur', 'Oman Mattalág', 'Oman Pisuvarða', 'Oman Stóragarð', 'Oman Viðarlund', 'Orknoyavegur', 'Ovara Tvørgøta', 'Oyggjarvegur',
        'Pedda við Stein gøta', 'Perskonugøta', 'Peturstrøð', 'Poul Juels gøta', 'Purkugerði',
        'R.C. Effersøes gøta', 'Rasmusargøta', 'Ravnsoyargøta', 'Reiðgøta', 'Rektaragøta', 'Reyðagøta', 'Reyngøta', 'Ryskigøta',
        'Sandáarbreyt', 'Sandagerðisvegur', 'Sigmundargøta', 'Sílagøta', 'Símunargøta', 'Sjúrðargøta', 'Skákið', 'Skálatrøð', 'Skansavegur', 'Skemmingsgøta', 'Skipara Hansens gøta', 'Skiparagøta', 'Skørugøta', 'Skotarók', 'Skrivaragøta', 'Skúlagøta', 'Slættalíð', 'Slættanesgøta', 'Sleipnisgøta', 'Smærugøta', 'Smiðjugerði', 'Smyrilsvegur', 'Sóljugøta', 'Sólteigur', 'Sornhúsgøta', 'Spógvavegur', 'Staravegur', 'Steinatún', 'Stiðjagøta', 'Stoffalág', 'Stóragerði', 'Suðuroyavegur', 'Suðurrás', 'Sundsvegur', 'Svalbardsvegur', 'Sverrisgøta', 'Sýrugøta',
        'Tildugøta', 'Tinganes', 'Tinghúsvegur', 'Tjarnardeild', 'Tjarnarlág', 'Tjóðhildargøta', 'Torfinsgøta', 'Tórgarðsgøta', 'Tórsbyrgi', 'Tórsgøta', 'Torsteinsgøta', 'Tórugøta', 'Traðabrekka', 'Traðavegur', 'Trappugøta', 'Trapputún', 'Tróndargøta', 'Tummasargøta', 'Tungugøta', 'Turiðargøta', 'Tvørgøta',
        'Undir Brúnni', 'Undir Bryggjubakka', 'Undir Glaðsheyggi', 'Undir Gráasteini', 'Undir Heygnum', 'Undir Húsareyni', 'Undir Kerjum', 'Undir Kjallara', 'Undir Krákugjógv', 'Undir Pisuvarða', 'Undir Ryggi', 'Undir Svartafossi',
        'V.U. Hammershaimbs gøta', 'Vættrastígur', 'Vaglið', 'Vágsbotnur', 'Vaktarhúsbrekka', 'Vaktarhúsgøta', 'Válgaratún', 'Vallalíð', 'Vallaratún', 'Varðabrekka', 'Varðabú', 'Varðabyrgi', 'Varðagøta', 'Varðalág', 'Varðatún', 'Vatnsoyrarvegur', 'Velbastaðvegur', 'Vestara Bryggja', 'Vesturgøta', 'Við Gálgastein', 'Við Havnará', 'Við Sandá', 'Vilhelmstrøð', 'Villingadalsvegur', 'Villumsgøta', 'Vípuvegur', 'Vørðslan',
        'Yviri við Strond',
        'Ægishædd',
        'Øksnagerði',
    ];

    protected static $municipality = [
        'Eiðis', 'Eystur', 'Fámjins', 'Fuglafjarðar', 'Fugloyar', 'Hovs', 'Húsar', 'Húsavíkar', 'Hvalbiar', 'Hvannasunds', 'Klaksvíkar', 'Kunoyar', 'Kvívíkar', 'Nes', 'Porkeris', 'Runavíkar', 'Sands', 'Sjóvar', 'Skálavíkar', 'Skopunar', 'Skúgvoyar', 'Skúvoyar', 'Sørvágs', 'Sumbiar', 'Sunda', 'Tórshavnar', 'Tvøroyrar', 'Vágs', 'Vága', 'Vestmanna', 'Viðareiðis',
    ];

    protected static $citySuffix = [
        'fjørður', 'vík', 'eiði', 'nes', 'dalur',
    ];

    protected static $buildingNumber = ['#', '#', '#%', '##'];

    protected static $streetSuffix = [
        'gøta', 'vegur',
    ];

    /**
     * Faroese islands (equivalent to counties)
     *
     * @see https://fo.wikipedia.org/wiki/Oyggjar_%C3%AD_F%C3%B8royum
     */
    protected static $county = [
        'Streymoy', 'Eysturoy', 'Vágar', 'Suðuroy', 'Sandoy', 'Borðoy', 'Viðoy', 'Kunoy', 'Kalsoy', 'Svínoy', 'Fugloy', 'Nólsoy', 'Mykines', 'Skúvoy', 'Hestur', 'Stóra Dímun', 'Koltur', 'Lítla Dímun',
    ];

    protected static $country = [
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antarctica (the territory South of 60 deg S)', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island (Bouvetoya)', 'Brazil', 'British Indian Ocean Territory (Chagos Archipelago)', 'British Virgin Islands', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote d\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic',
        'Danmark', 'Djibouti', 'Dominica', 'Dominican Republic',
        'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia',
        'Faroe Islands', 'Falkland Islands (Malvinas)', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern Territories',
        'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Holy See (Vatican City State)', 'Honduras', 'Hong Kong', 'Hungary',
        'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy',
        'Jamaica', 'Japan', 'Jersey', 'Jordan',
        'Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Korea', 'Kuwait', 'Kyrgyz Republic',
        'Lao People\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania', 'Luxembourg',
        'Macao', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Netherlands Antilles', 'Netherlands', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway',
        'Oman',
        'Pakistan', 'Palau', 'Palestinian Territories', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn Islands', 'Poland', 'Portugal', 'Puerto Rico',
        'Qatar',
        'Reunion', 'Romania', 'Russian Federation', 'Rwanda',
        'Saint Barthelemy', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia (Slovak Republic)', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia and the South Sandwich Islands', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic',
        'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu',
        'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 'United States Minor Outlying Islands', 'United States Virgin Islands', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Wallis and Futuna', 'Western Sahara',
        'Yemen',
        'Zambia', 'Zimbabwe',
    ];

    /**
     * Faroese island (~county)
     *
     * @example 'Eysturoy'
     */
    public static function county()
    {
        return static::randomElement(static::$county);
    }

    /**
     * Faroese city
     *
     * @example 'Saltangará'
     */
    public function city()
    {
        return static::randomElement(static::$city);
    }

    /**
     * Faroese street name
     *
     * @example 'Yviri við strond'
     */
    public function streetName()
    {
        return static::randomElement(static::$streetname);
    }

    /**
     * Faroese street address
     *
     * @example 'Yviri við strond 4C'
     */
    public function streetAddress()
    {
        return $this->streetName() . ' ' . $this->buildingNumber();
    }

    /**
     * Faroese postcode
     *
     * @example '600'
     */
    public static function postcode()
    {
        return static::randomElement(static::$postcode);
    }

    /**
     * Faroese address
     *
     * @example 'Yviri við strond 10c, 100 Tórshavn'
     *
     * @see https://gis.us.fo/arcgis/rest/services/adressur/us_adr_husanr/MapServer/0/query
     */
    public function address()
    {
        return $this->streetAddress() . ', ' . $this->postcode() . ' ' . $this->city();
    }

    /**
     * The edges of the Faroe Islands are approx between -6.2600 and -7.6800
     *
     * @see https://www.google.com/maps/place/Faroe+Islands/@61.8989287,-7.5160709,9z/data=!3m1!4b1!4m6!3m5!1s0x48bc1593762df9eb:0x3fb0314864f71b24!8m2!3d61.892635!4d-6.9118061!16zL20vMDJ3OXM
     */
    public static function latitude($min = -6.26, $max = -7.68)
    {
        return static::randomFloat(6, $min, $max);
    }

    /**
     * The edges of the Faroe Islands are approx between 61.3900 and 62.3900
     *
     * @see https://www.google.com/maps/place/Faroe+Islands/@61.8989287,-7.5160709,9z/data=!3m1!4b1!4m6!3m5!1s0x48bc1593762df9eb:0x3fb0314864f71b24!8m2!3d61.892635!4d-6.9118061!16zL20vMDJ3OXM
     */
    public static function longitude($min = 61.39, $max = 62.39)
    {
        return static::randomFloat(6, $min, $max);
    }

    /**
     * Faroese municipality (kommuna)
     */
    public static function kommuna()
    {
        return static::municipality();
    }

    public static function municipality()
    {
        return static::randomElement(static::$municipality);
    }
}
