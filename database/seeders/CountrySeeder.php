<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countryDetails = [['AF','9','Other','AF','XDM','Afghanistan','AFG','004',''],
        ['AL','9','Other','AL','XDM','Albania','ALB','008',''],
        ['DZ','9','Other','DZ','XDM','Algeria','DZA','012',''],
        ['AS','9','Other','AS','','American Samoa','ASM','016',''],
        ['AD','9','Other','AD','XDM','Andorra','AND','020',''],
        ['AO','9','Other','AO','XDM','Angola','AGO','024',''],
        ['AI','9','Other','AI','XDM','Anguilla','AIA','660',''],
        ['AQ','9','Other','AQ','','Antarctica','ATA','010',''],
        ['AG','9','Other','AG','XDM','Antigua and Barbuda','ATG','028',''],
        ['AR','9','Other','AR','XDM','Argentina','ARG','032',''],
        ['AM','9','Other','AM','XDM','Armenia','ARM','051',''],
        ['AW','9','Other','AW','XDM','Aruba','ABW','533',''],
        ['AU','9','Other','AU','XDM','Australia','AUS','036',''],
        ['AT','9','Other','AT','XDM','Austria','AUT','040',''],
        ['AZ','9','Other','AZ','XDM','Azerbaijan','AZE','031',''],
        ['AP','9','Other','AP','XDM','Azores','','',''],
        ['BS','9','Other','BS','XDM','Bahamas','BHS','044',''],
        ['BH','9','Other','BH','XDM','Bahrain','BHR','048',''],
        ['BD','9','Other','BD','XDM','Bangladesh','BGD','050',''],
        ['BB','9','Other','BB','XDM','Barbados','BRB','052',''],
        ['BY','9','Other','BY','XDM','Belarus','BLR','112',''],
        ['BE','3','Europe-EC','BE','XDM','Belgium','BEL','056',''],
        ['BZ','9','Other','BZ','XDM','Belize','BLZ','084',''],
        ['BJ','9','Other','BJ','XDM','Benin','BEN','204',''],
        ['BM','9','Other','BM','XDM','Bermuda','BMU','060',''],
        ['BT','9','Other','BT','XDM','Bhutan','BTN','064',''],
        ['BO','9','Other','BO','XDM','Bolivia','BOL','068',''],
        ['BA','9','Other','BA','','Bosnia And Herzegowina','BIH','070',''],
        ['XB','9','Other','XB','XDM','Bosnia-Herzegovina','','',''],
        ['BW','9','Other','BW','XDM','Botswana','BWA','072',''],
        ['BV','9','Other','BV','','Bouvet Island','BVT','074',''],
        ['BR','9','Other','BR','XDM','Brazil','BRA','076',''],
        ['IO','9','Other','IO','','British Indian Ocean Territory','IOT','086',''],
        ['VG','9','Other','VG','XDM','British Virgin Islands','VGB','092',''],
        ['BN','9','Other','BN','XDM','Brunei Darussalam','BRN','096',''],
        ['BG','9','Other','BG','XDM','Bulgaria','BGR','100',''],
        ['BF','9','Other','BF','XDM','Burkina Faso','BFA','854',''],
        ['BI','9','Other','BI','XDM','Burundi','BDI','108',''],
        ['KH','9','Other','KH','','Cambodia','KHM','116',''],
        ['CM','9','Other','CM','XDM','Cameroon','CMR','120',''],
        ['CA','1','North America','CA','XDM','Canada','CAN','124',''],
        ['CV','9','Other','CV','XDM','Cape Verde','CPV','132',''],
        ['KY','9','Other','KY','XDM','Cayman Islands','CYM','136',''],
        ['CF','9','Other','CF','XDM','Central African Republic','CAF','140',''],
        ['TD','9','Other','TD','XDM','Chad','TCD','148',''],
        ['CL','9','Other','CL','XDM','Chile','CHL','152',''],
        ['CN','9','Other','CN','XDM','China','CHN','156',''],
        ['CX','9','Other','CX','','Christmas Island','CXR','162',''],
        ['CC','9','Other','CC','','Cocos (Keeling) Islands','CCK','166',''],
        ['CO','9','Other','CO','XDM','Colombia','COL','170',''],
        ['KM','9','Other','KM','XDM','Comoros','COM','174',''],
        ['CG','9','Other','CG','XDM','Congo','COG','178',''],
        ['CD','9','Other','CD','','Congo, The Democratic Republic O','COD','180',''],
        ['CK','9','Other','CK','','Cook Islands','COK','184',''],
        ['XE','3','Europe-EC','XE','XDM','Corsica','','',''],
        ['CR','9','Other','CR','XDM','Costa Rica','CRI','188',''],
        ['CI','9','Other','CI','XDM','Cote d` Ivoire (Ivory Coast)','CIV','384',''],
        ['HR','9','Other','HR','XDM','Croatia','HRV','191',''],
        ['CU','9','Other','CU','','Cuba','CUB','192',''],
        ['CY','9','Other','CY','XDM','Cyprus','CYP','196',''],
        ['CZ','9','Other','CZ','XDM','Czech Republic','CZE','203',''],
        ['DK','3','Europe-EC','DK','XDM','Denmark','DNK','208',''],
        ['DJ','9','Other','DJ','XDM','Djibouti','DJI','262',''],
        ['DM','9','Other','DM','XDM','Dominica','DMA','212',''],
        ['DO','9','Other','DO','XDM','Dominican Republic','DOM','214',''],
        ['TP','9','Other','TP','','East Timor','TMP','626',''],
        ['EC','9','Other','EC','XDM','Ecuador','ECU','218',''],
        ['EG','9','Other','EG','XDM','Egypt','EGY','818',''],
        ['SV','9','Other','SV','XDM','El Salvador','SLV','222',''],
        ['GQ','9','Other','GQ','XDM','Equatorial Guinea','GNQ','226',''],
        ['ER','9','Other','ER','XDM','Eritrea','ERI','232',''],
        ['EE','9','Other','EE','XDM','Estonia','EST','233',''],
        ['ET','9','Other','ET','XDM','Ethiopia','ETH','231',''],
        ['FK','9','Other','FK','','Falkland Islands (Malvinas)','FLK','238',''],
        ['FO','9','Other','FO','XDM','Faroe Islands','FRO','234',''],
        ['FJ','9','Other','FJ','XDM','Fiji','FJI','242',''],
        ['FI','3','Europe-EC','FI','XDM','Finland','FIN','246',''],
        ['FR','3','Europe-EC','FR','XDM','France (Includes Monaco)','FRA','250',''],
        ['FX','9','Other','FX','','France, Metropolitan','FXX','249',''],
        ['GF','9','Other','GF','XDM','French Guiana','GUF','254',''],
        ['PF','9','Other','PF','','French Polynesia','PYF','258',''],
        ['TA','9','Other','TA','XDM','French Polynesia (Tahiti)','','',''],
        ['TF','9','Other','TF','','French Southern Territories','ATF','260',''],
        ['GA','9','Other','GA','XDM','Gabon','GAB','266',''],
        ['GM','9','Other','GM','XDM','Gambia','GMB','270',''],
        ['GE','9','Other','GE','XDM','Georgia','GEO','268',''],
        ['DE','3','Europe-EC','DE','XDM','Germany','DEU','276',''],
        ['GH','9','Other','GH','XDM','Ghana','GHA','288',''],
        ['GI','3','Europe-EC','GI','XDM','Gibraltar','GIB','292',''],
        ['GR','3','Europe-EC','GR','XDM','Greece','GRC','300',''],
        ['GL','9','Other','GL','XDM','Greenland','GRL','304',''],
        ['GD','9','Other','GD','XDM','Grenada','GRD','308',''],
        ['GP','9','Other','GP','XDM','Guadeloupe','GLP','312',''],
        ['GU','9','Other','GU','','Guam','GUM','316',''],
        ['GT','9','Other','GT','XDM','Guatemala','GTM','320',''],
        ['GN','9','Other','GN','XDM','Guinea','GIN','324',''],
        ['GW','9','Other','GW','XDM','Guinea-Bissau','GNB','624',''],
        ['GY','9','Other','GY','XDM','Guyana','GUY','328',''],
        ['HT','9','Other','HT','XDM','Haiti','HTI','332',''],
        ['HM','9','Other','HM','','Heard And Mc Donald Islands','HMD','334',''],
        ['VA','9','Other','VA','','Holy See (Vatican City State)','VAT','336',''],
        ['HN','9','Other','HN','XDM','Honduras','HND','340',''],
        ['HK','9','Other','HK','XDM','Hong Kong','HKG','344',''],
        ['HU','9','Other','HU','XDM','Hungary','HUN','348',''],
        ['IS','3','Europe-EC','IS','XDM','Iceland','ISL','352',''],
        ['IN','9','Other','IN','XDM','India','IND','356',''],
        ['ID','9','Other','ID','XDM','Indonesia','IDN','360',''],
        ['IR','9','Other','IR','XDM','Iran','IRN','364',''],
        ['IQ','9','Other','IQ','','Iraq','IRQ','368',''],
        ['IE','9','Other','IE','','Ireland','IRL','372',''],
        ['EI','3','Europe-EC','EI','XDM','Ireland (Eire)','','',''],
        ['IL','9','Other','IL','XDM','Israel','ISR','376',''],
        ['IT','3','Europe-EC','IT','XDM','Italy','ITA','380',''],
        ['JM','9','Other','JM','XDM','Jamaica','JAM','388',''],
        ['JP','9','Other','JP','XDM','Japan','JPN','392',''],
        ['JO','9','Other','JO','XDM','Jordan','JOR','400',''],
        ['KZ','9','Other','KZ','XDM','Kazakhstan','KAZ','398',''],
        ['KE','9','Other','KE','XDM','Kenya','KEN','404',''],
        ['KI','9','Other','KI','XDM','Kiribati','KIR','296',''],
        ['KP','9','Other','KP','','Korea, Democratic People\'S Repub','PRK','408',''],
        ['KW','9','Other','KW','XDM','Kuwait','KWT','414',''],
        ['KG','9','Other','KG','','Kyrgyzstan','KGZ','417',''],
        ['LA','9','Other','LA','XDM','Laos','LAO','418',''],
        ['LV','9','Other','LV','','Latvia','LVA','428',''],
        ['LB','9','Other','LB','XDM','Lebanon','LBN','422',''],
        ['LS','9','Other','LS','XDM','Lesotho','LSO','426',''],
        ['LR','9','Other','LR','','Liberia','LBR','430',''],
        ['LY','9','Other','LY','XDM','Libya','LBY','434',''],
        ['LI','9','Other','LI','XDM','Liechtenstein','LIE','438',''],
        ['LT','9','Other','LT','XDM','Lithuania','LTU','440',''],
        ['LU','3','Europe-EC','LU','XDM','Luxembourg','LUX','442',''],
        ['MO','9','Other','MO','XDM','Macao','MAC','446',''],
        ['MK','9','Other','MK','XDM','Macedonia','MKD','807',''],
        ['MG','9','Other','MG','XDM','Madagascar','MDG','450',''],
        ['ME','9','Other','ME','XDM','Madeira Islands','','',''],
        ['MW','9','Other','MW','XDM','Malawi','MWI','454',''],
        ['MY','9','Other','MY','','Malaysia','MYS','458',''],
        ['MV','9','Other','MV','XDM','Maldives','MDV','462',''],
        ['ML','9','Other','ML','XDM','Mali','MLI','466',''],
        ['MT','9','Other','MT','XDM','Malta','MLT','470',''],
        ['MH','9','Other','MH','','Marshall Islands','MHL','584',''],
        ['MQ','9','Other','MQ','XDM','Martinique','MTQ','474',''],
        ['MR','9','Other','MR','XDM','Mauritania','MRT','478',''],
        ['MU','9','Other','MU','XDM','Mauritius','MUS','480',''],
        ['YT','9','Other','YT','','Mayotte','MYT','175',''],
        ['MX','1','North America','MX','XDM','Mexico','MEX','484',''],
        ['FM','9','Other','FM','','Micronesia, Federated States Of','FSM','583',''],
        ['MD','9','Other','MD','','Moldova, Republic Of','MDA','498',''],
        ['MC','9','Other','MC','','Monaco','MCO','492',''],
        ['MN','9','Other','MN','','Mongolia','MNG','496',''],
        ['MS','9','Other','MS','XDM','Montserrat','MSR','500',''],
        ['MA','9','Other','MA','XDM','Morocco','MAR','504',''],
        ['MZ','9','Other','MZ','XDM','Mozambique','MOZ','508',''],
        ['MM','9','Other','MM','XDM','Myanmar (Burma)','MMR','104',''],
        ['NA','9','Other','NA','XDM','Namibia','NAM','516',''],
        ['NR','9','Other','NR','XDM','Nauru','NRU','520',''],
        ['NP','9','Other','NP','XDM','Nepal','NPL','524',''],
        ['NL','3','Europe-EC','NL','XDM','Netherlands','NLD','528',''],
        ['AN','9','Other','AN','XDM','Netherlands Antilles','ANT','530',''],
        ['NC','9','Other','NC','XDM','New Caledonia','NCL','540',''],
        ['NZ','9','Other','NZ','XDM','New Zealand','NZL','554',''],
        ['NI','9','Other','NI','XDM','Nicaragua','NIC','558',''],
        ['NE','9','Other','NE','XDM','Niger','NER','562',''],
        ['NG','9','Other','NG','XDM','Nigeria','NGA','566',''],
        ['NU','9','Other','NU','','Niue','NIU','570',''],
        ['NF','9','Other','NF','','Norfolk Island','NFK','574',''],
        ['MP','9','Other','MP','','Northern Mariana Islands','MNP','580',''],
        ['NO','3','Europe-EC','NO','XDM','Norway','NOR','578',''],
        ['OM','9','Other','OM','XDM','Oman','OMN','512',''],
        ['PK','9','Other','PK','XDM','Pakistan','PAK','586',''],
        ['PW','9','Other','PW','','Palau','PLW','585',''],
        ['PS','9','Other','PS','','Palestinian Territory, Occupied','PSE','275',''],
        ['PA','9','Other','PA','XDM','Panama','PAN','591',''],
        ['PG','9','Other','PG','XDM','Papua New Guinea','PNG','598',''],
        ['PY','9','Other','PY','XDM','Paraguay','PRY','600',''],
        ['PE','9','Other','PE','XDM','Peru','PER','604',''],
        ['PH','9','Other','PH','XDM','Philippines','PHL','608',''],
        ['PN','9','Other','PN','XDM','Pitcairn','PCN','612',''],
        ['PL','9','Other','PL','XDM','Poland','POL','616',''],
        ['PT','9','Other','PT','XDM','Portugal','PRT','620',''],
        ['PR','9','Other','PR','','Puerto Rico','PRI','630',''],
        ['QA','9','Other','QA','','Qatar','QAT','634',''],
        ['RE','9','Other','RE','XDM','Reunion','REU','638',''],
        ['RO','9','Other','RO','','Romania','ROM','642',''],
        ['RU','9','Other','RU','','Russian Federation','RUS','643',''],
        ['RW','9','Other','RW','XDM','Rwanda','RWA','646',''],
        ['KN','9','Other','KN','','Saint Kitts And Nevis','KNA','659',''],
        ['SM','9','Other','SM','','San Marino','SMR','674',''],
        ['ST','9','Other','ST','XDM','Sao Tome and Principe','STP','678',''],
        ['SA','9','Other','SA','XDM','Saudi Arabia','SAU','682',''],
        ['SN','9','Other','SN','XDM','Senegal','SEN','686',''],
        ['XS','9','Other','XS','XDM','Serbia-Montenegro','','',''],
        ['SC','9','Other','SC','XDM','Seychelles','SYC','690',''],
        ['SL','9','Other','SL','XDM','Sierra Leone','SLE','694',''],
        ['SG','9','Other','SG','XDM','Singapore','SGP','702',''],
        ['SK','9','Other','SK','XDM','Slovak Republic','SVK','703',''],
        ['SI','9','Other','SI','XDM','Slovenia','SVN','705',''],
        ['SB','9','Other','SB','XDM','Solomon Islands','SLB','090',''],
        ['SO','9','Other','SO','','Somalia','SOM','706',''],
        ['ZA','9','Other','ZA','XDM','South Africa','ZAF','710',''],
        ['GS','9','Other','GS','','South Georgia And The South Sand','SGS','239',''],
        ['KR','9','Other','KR','XDM','South Korea','KOR','410',''],
        ['ES','3','Europe-EC','ES','XDM','Spain','ESP','724',''],
        ['LK','9','Other','LK','XDM','Sri Lanka','LKA','144',''],
        ['NV','9','Other','NV','XDM','St. Christopher and Nevis','','',''],
        ['SH','9','Other','SH','XDM','St. Helena','SHN','654',''],
        ['LC','9','Other','LC','XDM','St. Lucia','LCA','662',''],
        ['PM','9','Other','PM','XDM','St. Pierre and Miquelon','SPM','666',''],
        ['VC','9','Other','VC','XDM','St. Vincent and the Grenadines','VCT','670',''],
        ['SD','9','Other','SD','XDM','Sudan','SDN','736',''],
        ['SR','9','Other','SR','XDM','Suriname','SUR','740',''],
        ['SJ','9','Other','SJ','','Svalbard And Jan Mayen Islands','SJM','744',''],
        ['SZ','9','Other','SZ','XDM','Swaziland','SWZ','748',''],
        ['SE','3','Europe-EC','SE','XDM','Sweden','SWE','752',''],
        ['CH','3','Europe-EC','CH','XDM','Switzerland','CHE','756',''],
        ['SY','9','Other','SY','XDM','Syrian Arab Republic','SYR','760',''],
        ['TW','9','Other','TW','XDM','Taiwan','TWN','158',''],
        ['TJ','9','Other','TJ','','Tajikistan','TJK','762',''],
        ['TZ','9','Other','TZ','XDM','Tanzania','TZA','834',''],
        ['TH','9','Other','TH','XDM','Thailand','THA','764',''],
        ['TG','9','Other','TG','XDM','Togo','TGO','768',''],
        ['TK','9','Other','TK','','Tokelau','TKL','772',''],
        ['TO','9','Other','TO','XDM','Tonga','TON','776',''],
        ['TT','9','Other','TT','XDM','Trinidad and Tobago','TTO','780',''],
        ['XU','9','Other','XU','XDM','Tristan da Cunha','','',''],
        ['TN','9','Other','TN','XDM','Tunisia','TUN','788',''],
        ['TR','9','Other','TR','XDM','Turkey','TUR','792',''],
        ['TM','9','Other','TM','','Turkmenistan','TKM','795',''],
        ['TC','9','Other','TC','XDM','Turks and Caicos Islands','TCA','796',''],
        ['TV','9','Other','TV','XDM','Tuvalu','TUV','798',''],
        ['UG','9','Other','UG','XDM','Uganda','UGA','800',''],
        ['UA','9','Other','UA','XDM','Ukraine','UKR','804',''],
        ['AE','9','Other','AE','XDM','United Arab Emirates','ARE','784',''],
        ['UK','3','Europe-EC','UK','XDM','United Kingdom','','',''],
        ['GB','9','Other','GB','','Great Britain','GBR','826',''],
        ['US','0','','US','GNDCOM 2DA 1DA','United States','USA','840',''],
        ['UM','9','Other','UM','','United States Minor Outlying Isl','UMI','581',''],
        ['UY','9','Other','UY','XDM','Uruguay','URY','858',''],
        ['UZ','9','Other','UZ','','Uzbekistan','UZB','860',''],
        ['VU','9','Other','VU','XDM','Vanuatu','VUT','548',''],
        ['XV','9','Other','XV','XDM','Vatican City','','',''],
        ['VE','9','Other','VE','XDM','Venezuela','VEN','862',''],
        ['VN','9','Other','VN','XDM','Vietnam','VNM','704',''],
        ['VI','9','Other','VI','','Virgin Islands (U.S.)','VIR','850',''],
        ['WF','9','Other','WF','XDM','Wallis and Furuna Islands','WLF','876',''],
        ['EH','9','Other','EH','','Western Sahara','ESH','732',''],
        ['WS','9','Other','WS','XDM','Western Samoa','WSM','882',''],
        ['YE','9','Other','YE','XDM','Yemen','YEM','887',''],
        ['YU','9','Other','YU','','Yugoslavia','YUG','891',''],
        ['ZR','9','Other','ZR','XDM','Zaire','','',''],
        ['ZM','9','Other','ZM','XDM','Zambia','ZMB','894',''],
        ['ZW','9','Other','ZW','XDM','Zimbabwe','ZWE','716','']];

        foreach($countryDetails as $countryDetail){
            $country = \App\Models\Country::firstOrCreate(
                [
                    'code' => $countryDetail[0] ?? '',
                ],
                [
                    's_order' => $countryDetail[1] ?? '',
                    'region' => $countryDetail[2] ?? '',
                    'selector' => $countryDetail[3] ?? '',
                    'ship_modes' => $countryDetail[4] ?? '',
                    'name' => $countryDetail[5] ?? '',
                    'iso' => $countryDetail[6] ?? '',
                    'iso_number' => $countryDetail[7] ?? '',
                    'tax' => $countryDetail[8] ?? '',
                ]
            );
        }
    }
}
