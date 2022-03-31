<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brandNames = ["AB Inflatables", "ACM", "ATX Surf Boats", "Absolute", "Achilles", "Action Craft", "Adagio", "Advantage", "Aicon", "Alalunga", "Albemarle", "Albin", "Alerion", "Alfastreet Marine", "Altair", "Alu Marine", "Alumacraft", "Alumaweld", "Alva Yachts", "Alweld", "American Tug", "Angler", "Angler Qwest", "Antaris", "Antique", "Apreamare", "AquaPatio", "Aquador", "Aquasport", "Aquila", "Arcadia Yachts", "Archambault", "Arcoa", "Arcona", "Argos Nautic", "Ascend", "Avalon", "Avenger", "Aviara", "Avid", "Avon", "Axis", "Azimut", "Back Cove", "Baja", "Barge", "Barletta", "Barracuda", "Bass Cat", "Bavaria", "Bay Craft", "Bay Stealth", "Bayliner", "Belize", "Belzona", "Beneteau", "Beneteau America", "Bennington", "Bentley Pontoons", "Bering", "Berkshire", "Bertram", "Bilgin", "Birchwood", "BlackJack", "BlackWater", "Blackfin", "Blazer", "Blue Wave", "Bluewater", "Bluewater Sportfishing", "Bombard", "Boston Whaler", "Brig", "Broadblue", "Broom", "Bruckmann", "Bryant", "Buddy Davis", "Bullet", "Bulls Bay", "C&C", "C-Dory", "C-Hawk", "CL Yachts", "CNB", "CRN", "Cabo", "Cabo Rico", "Campion", "Canados", "Cape Horn", "Capelli", "Caravelle", "Carolina Classic", "Carolina Skiff", "Carver", "Catalina", "Catamaran", "Catana", "Caymas", "Centurion", "Century", "Champion", "Chaparral", "Checkmate", "Cheoy Lee", "Chris-Craft", "Classic", "Clearwater", "Coastal Craft", "Cobalt", "Cobia", "Cobra Ribs", "Colombo", "Columbia", "Com-Pac", "Concept", "Conrad", "Contender", "Contest", "Cormorant Yachts", "Cornish Crabbers", "Correct Craft", "Corsair", "Cranchi", "Crest", "Crestliner", "Crevalle", "Crownline", "Cruisers Yachts", "Custom", "Custom Carolina", "Custom Line", "Cutwater", "Cypress Cay", "Dale", "De Birs", "DeFever", "Deep Impact", "Dehler", "Delphia", "Delta Powerboats", "Discovery", "Dominator", "Donzi", "Dorado", "Doral", "Dreamline", "Dromeas", "Dufour", "Dutch Barge", "Dyer", "Dyna", "Eagle", "Eastern", "Ebbtide", "Edgewater", "Egg Harbor", "Elan", "Elan Power", "Elegance", "Elling", "Eolo", "Epic", "Everglades", "Excel", "Explorer", "Extra", "Faeton", "Fairline", "Farr", "Feeling", "Ferretti Yachts", "Ferry", "Filippetti Yacht", "Finseeker", "Fisher", "Fjord", "Formula", "Fountain", "Fountaine Pajot", "Four Winns", "Fratelli Aprea", "Freedom", "Frontier", "G-Force", "G3", "Gala", "Galeon", "Gheenoe", "Gib'Sea", "Gibson", "Glacier Bay", "Glasstream", "Glastron", "Gobbi", "Godfrey", "Grady-White", "Grand Banks", "Grand Soleil", "Greenline", "Gulet", "Gulf Craft", "Gulf Stream Yachts", "HCB", "HH Catamarans", "Hallberg-Rassy", "Hampton", "Hans Christian", "Hanse", "Hardy", "Harris", "Harris FloteBote", "Harris-Kayot", "Hatteras", "Henriques", "Hewes", "Hewescraft", "Heyday", "Heysea", "Hi-Star", "High Performance", "Highfield", "Hinckley", "Hinckley Sport Boats", "Hobie", "Holiday Mansion", "Horizon", "Houseboat", "Hunt Yachts", "Hunter", "Hurricane", "Hydra-Sports", "Hylas", "Inflatable", "Interboat", "Intrepid", "Invincible", "Island Gypsy", "Island Packet", "Itama", "J Boats", "JC", "Jarrett Bay", "Javelin", "Jeanneau", "Jefferson", "Jersey Cape", "Johnson", "Jongert", "Jupiter", "Karnic", "Kawasaki", "Kayot", "KenCraft", "Kenner", "Ketch", "Key Largo", "Key West", "KingFisher", "Kotter", "Lagoon", "Landau", "Langenberg", "Larson", "Laser Boats", "Latitude 46", "Lazzara Yachts", "Legacy", "Legacy Yachts", "Legend", "Liberty", "Lindell", "Llaut", "Lowe", "Luhrs", "Lund", "MB", "MJM Yachts", "Mainship", "Majek", "Majesty", "Mako", "Malibu", "Manitou", "Mares", "Marex", "Mariah", "Maritime", "Maritimo", "Marlin", "Marlow", "Marquis", "Marten", "Mason", "Mastercraft", "Maverick", "Maxi", "Maxum", "May-Craft", "McConaghy", "McKee Craft", "McKinna", "Mediterranean", "Menorquin", "Meridian", "Mestral Marine Works", "Midnight Express", "Mikelson", "Mirage", "MirroCraft", "Misty Harbor", "Mochi Craft", "Monark", "Monte Carlo", "Monte Carlo Yachts", "Monte Fino", "Montego Bay", "Monterey", "Moody", "Moomba", "Morris", "Motor Yacht", "Motorsailer", "Mulder", "Myabca", "Mystique Boatworks", "Najad", "Narrowboat", "NauticStar", "Nautique", "Nautitech", "Nautor Swan", "Naval Yachts", "Neptunus", "Nimbus", "Nitro", "Nomad", "Nor-Tech", "Nordhavn", "Nordia", "Nordic Tug", "NorthCoast", "Northmaster", "Northstar", "Northwood", "Nova", "Novurania", "Ocean Alexander", "Ocean Explorer Catamarans", "Ocean Express", "Ocean Yachts", "Ocqueteau", "Offshore Yachts", "One Design", "Orkney", "Osprey", "Outback Yachts", "Outer Reef Trident", "Outer Reef Yachts", "Outerlimits", "Outremer", "Oyster", "PDQ", "Pacific Mariner", "Pacific Seacraft", "Paddle King", "Palm Beach", "Palm Beach Motor Yachts", "Paragon", "Pardo Yachts", "Parker", "Passport", "Pathfinder", "Pearl", "Penn Yan", "Performance", "Pershing", "Phoenix", "Pioneer", "Piranha", "Playbuoy", "Polar", "Polar Kraft", "Polaris", "Premier", "President", "Prestige", "Princecraft", "Princess", "Privateer", "Privilege", "Pro Sports", "Pro-Line", "ProCraft", "ProKat", "Pronautica", "Protector", "Pursuit", "Quicksilver", "Qwest", "RIB", "RYCK", "Rampage", "Ranger", "Ranger Tugs", "Rapsody", "Recon", "Reflex", "Regal", "Regency", "Regulator", "Reinell", "Release", "Renegade", "Renken", "Rhea", "Ribcraft", "Ribeye", "Rinker", "Rio Yachts", "Riva", "Riviera", "Robalo", "Rodman", "Rosborough", "Rossiter", "Royal Denship", "Ruby", "Runabout", "SACS", "Sabre", "Saffier", "Sailboat", "Sailfish", "Sanger", "Sanlorenzo", "Sanpan", "Santa Cruz", "Sargo", "Sarnico", "Savannah", "Scarab", "Schaefer", "Schooner", "Sciallino", "Scout", "Sea Born", "Sea Cat", "Sea Chaser", "Sea Fox", "Sea Hunt", "Sea Pro", "Sea Ray", "Sea Sport", "Sea-Doo", "Sea-Doo Sport Boats", "SeaArk", "SeaCraft", "SeaHunter", "Sealegs", "Sealine", "Seaswirl", "Seaswirl Striper", "Seaward", "Seawind", "Selene", "Sessa Marine", "Shallow Sport", "Shamrock", "ShearWater", "Shoalwater", "Silent", "Silver Wave", "Silverton", "Sinergia", "Skeeter", "Sleepboot", "Sloep", "Sloop", "Sly", "Smartliner", "Smoker Craft", "Solace", "Solaris", "Sonic", "South Bay", "SouthWind", "Southerly", "Southport", "Sport-Craft", "Sportsman", "Stamas", "Starcraft", "Stardust Cruisers", "Starweld", "Stealth", "Steeler", "Steiger Craft", "Sterling", "Stingray", "Storebro", "Stratos", "Striper", "Sumerset", "Sun Tracker", "SunCatcher", "SunChaser", "Sundance", "Sunreef", "Sunsation", "Sunseeker", "Superyacht", "Supra", "Supreme", "Sweetwater", "Sylvan", "Symbol", "Tahoe", "Tahoe Pontoon", "Tartan", "Tayana", "Tender", "Thunder Jet", "Tiara Sport", "Tiara Yachts", "Tidewater", "Tige", "Tofinou", "TomCat", "Topaz", "Tracker", "Trailer", "Trawler", "Trifecta", "Trimaran", "Trintella", "Triton", "Triumph", "Trojan", "Trophy", "True North", "Trumpy", "Tugboat", "Turner Boatworks", "Twin Vee", "Uniesse", "VIP", "Valiant", "VanDutch", "Velocity", "Venture", "Veranda", "Viaggio", "Vicem", "Viking", "Voyage Yachts", "Wajer", "Walker Bay", "War Eagle", "Wauquiez", "Weeres", "Weldcraft", "Wellcraft", "White Shark", "Williams Jet Tenders", "Windelo", "Windy", "World Cat", "X-Yachts", "Xcursion", "Xpress", "Yamaha Boats", "Yamaha WaveRunner", "Yellowfin", "Zeeschouw", "Zodiac"];
        $brandDescription = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from 'de Finibus Bonorum et Malorum' by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.";
        $faker = Faker\Factory::create();
        if (!empty($brandNames) && !empty($brandDescription)) {
            for($i=0; $i< count($brandNames); $i++){
                \App\Models\Brand::firstOrCreate([
                    'name' => $brandNames[$i]
                ],
                [   'uuid' => (string) Str::uuid(),
                    'description' => $brandDescription,
                ]);
            }
        }
    }
}
