<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clases\Reportes\ReporteUno; // Clase se encarga exclusivamente de crear el reporte uno

class ReporteUnoController extends Controller
{
    public function reporte(){
        
        $pdf = new ReporteUno();

        // $_orientation='P', $_unit='mm', $_size='A4'
        $format = ['L', 'mm', 'legal'];

        $nam_cli = ["Index","Account_Id","Lead Owner","First Name","Last Name","Company","Phone 1","Email 1","Website","Source","Deal Stage"];
        $clients = [
            ["1",        "862d63fBE445C3B",      "Antonio Savage",       "Cameron",          "Price",        "Dean, Daniels and Charles",      "999-826-8118      ",      "jermaine42@bush.info",                      "http://www.moody-colon.com/",       "Facebook Ads",           "Qualified"],       
            ["2",        "B1B9fa4B9A41f10",      "Alexander Mccall",     "Phyllis",          "Wade",         "Woodward, Everett and Doyle",    "821-857-6254      ",      "dorothy36@shannon-dunn.info",               "https://nash.com/",                 "Other",                  "Closed Lost"],
            ["3",        "1c2a1d1Ef8dDEFa",      "Nancy Grant",          "Matthew",          "Villegas",     "Mcfarland-Moore",                "001-449-523-9318x9353 ",  "gregorybrenda@forbes.biz ",                 "https://www.bradley-stanley.com/",  "Organic Search (SEO)",  "Closed Lost"],
            ["4",        "aEAFcec4C129DDE",      "Yesenia Short",        "Haley",            "Chapman",      "Potts, Jimenez and Sweeney",     "472-744-2240x57147",      "shelley22@villarreal.com ",                 "https://day-hawkins.org/",          "Chatbot",                "Proposal Sent"],
            ["5",        "6eA1Ab9d8d03966",      "Joan Meyers",          "Priscilla",        "Tran",         "Meza-Bolton",                    "364.569.1151x738  ",      "kgutierrez@lyons.com ",                     "http://nichols-hanson.com/",        "LinkedIn Outreach",      "Proposal Sent"],
            ["6",        "76da550015f55AA",      "Hector Yates",         "Javier",           "King",         "Riddle Inc",                     "432.386.0345x1453 ",      "klarsen@mcneil.com ",                       "http://paul.com/",                  "Facebook Ads",           "On Hold"],
            ["7",        "c794AD13aafFCb4",      "Glen Horne",           "Sophia",           "Mcmahon",      "Frederick-Pineda",               "001-227-739-3685x6276 ",  "biancagallegos@ryan.info",                  "https://shepherd-glover.com/",      "Direct Traffic",         "Proposal Sent"],
            ["8",        "DAa70C83DB217ef",      "Oscar Ware",           "Steven",           "Riley",        "Cardenas and Sons",              "621.359.5298      ",      "hillandre@hensley.org ",                    "http://www.middleton.org/",         "Purchased List",         "Qualified"],
            ["9",        "A7d8ABCB42772E9",      "Cory Garza",           "Suzanne",          "Suarez",       "Roth and Sons",                  "001-489-318-8021x03052",  "masonjoann@johnson.com ",                   "https://burgess.org/",              "Webinars",               "Re-engagement"],
            ["10",       "2730Ed0d5fAC1c9",      "Cristian Brady",       "Jerry",            "Parker",       "English Ltd",                    "7866949727",              "robin37@reed.net ",                         "http://www.ibarra.biz/",            "Direct Traffic",         "Contacted"],
            ["11",       "FEccF62aAbE6eD7",      "Eric Quinn",           "Mckenzie",         "Barajas",      "Kent and Sons",                  "553.704.6803      ",      "tcosta@montes.com ",                        "http://www.randall.net/",           "Webinars",               "New Lead"],
            ["12",       "F1c65315fF59DCc",      "Jasmine Brooks",       "Tina",             "Banks",        "Hernandez, Gould and Tate",      "+1-982-572-8198x0142 ",   "joluna@huerta.info",                        "https://adkins.org/",               "LinkedIn Outreach",      "Closed Lost"],
            ["13",       "EFffF4cA5Ff78f2",      "Kara Mullins",         "Deborah",          "Hurley",       "Owens and Sons",                 "+1-639-874-7063x8850 ",   "nicole50@choi.info",                        "http://www.lloyd.info/",            "LinkedIn Outreach",      "Qualified"],
            ["14",       "4fa6cdaAceBca63",      "Nina Anderson",        "Tanya",            "Thomas",       "Durham-Reilly",                  "+1-612-780-0112x01770",   "dyercristina@maxwell-mckee.net ",           "https://henson.biz/",               "Direct Traffic",         "Re-engagement"],
            ["15",       "807a2fbC423e818",      "Barry Whitaker",       "Tiffany",          "Bowman",       "Bray PLC",                       "923-795-7518      ",      "coleparsons@miller-harris.org ",            "https://www.larsen.com/",           "Website Form",           "Proposal Sent"],
            ["16",       "CEA4F32AEB26f33",      "Melissa Alvarado",     "Tyrone",           "Shaffer",      "Neal PLC",                       "+1-275-748-3286x412  ",   "jimmywright@mccarty.com ",                  "http://lin.com/",                   "Direct Traffic",         "Re-engagement"],
            ["17",       "Ce2A5eb4dC72E18",      "Lindsay Ashley",       "Jerome",           "Hardy",        "Pena PLC",                       "618-471-8875      ",      "franklinfrye@melton.biz ",                  "http://www.hoffman-ray.com/",       "Networking Event",       "Qualified"],
            ["18",       "bB2e1aD4A3e0Bd0",      "Carly Walton",         "Max",              "Cox",          "Reyes, Simmons and Shields",     "471.527.0291x0621 ",      "erikaingram@leon.biz ",                     "http://www.chung.com/",             "Direct Traffic",         "Closed Won"],
            ["19",       "EC2e54dD29cA5C3",      "Mackenzie Schaefer",   "Sophia",           "Franco",       "Nixon, Coleman and Dougherty",   "(544)918-7798      ",     "sellersdarrell@keller.org ",                "https://hubbard.net/",              "Website Form",           "Contacted"],
            ["20",       "e1e0d69dFFCFE19",      "Mathew Bauer",         "Steven",           "Bradley",      "Kane, Warren and Benton",        "(366)848-1680x4950 ",     "stephanie81@valencia.com ",                 "https://www.holloway-knox.biz/",    "Facebook Ads",           "Qualified"],
            ["21",       "E2e4cD87FeC6Fd0",      "Tiffany Olsen",        "Andrea",           "Newton",       "Miles, Li and Larsen",           "234-772-1962x849  ",      "courtneyfitzpatrick@little.info",           "http://mclean.info/",               "Social Media",           "On Hold"],
            ["22",       "E8d85DE3A7a356d",      "Yolanda Gonzalez",     "Gary",             "Johns",        "Tanner, Case and Ritter",        "9728522763",              "gpace@bridges.com ",                        "https://moran.com/",                "Cold Call",              "Qualified"],
            ["23",       "Fe9C4eFD56EA7BE",      "Troy Newman",          "Mckenzie",         "Vargas",       "Hebert, Graves and Duran",       "2966943546",              "moyeralvin@livingston.info",                "http://patrick.info/",              "Social Media",           "Re-engagement"],
            ["24",       "D89fbF1cb9bB5C6",      "Anna Pearson",         "Dustin",           "Rosales",      "Ferguson Inc",                   "449.256.8860      ",      "muellermandy@kramer.info",                  "https://www.lucas-kelly.org/",      "Podcast",                "Closed Won"],
            ["25",       "87b3AEB2447dA62",      "Tracy Edwards",        "Chad",             "Mata",         "Carney, Cantu and Sawyer",       "(619)478-1204x919  ",     "tylerjesse@hebert.info",                    "https://www.guerra.info/",          "Partner Program",        "New Lead"],
            ["26",       "8d8f7cDdefb910e",      "Adrian Price",         "Joy",              "Beltran",      "Woodward and Sons",              "+1-678-673-7748x67647",   "wendydennis@barajas.com ",                  "http://www.mayer-dominguez.com/",   "LinkedIn Outreach",      "Contacted"],
            ["27",       "dB6C697D801662B",      "Clayton Ellis",        "Lydia",            "Barron",       "Schroeder Group",                "955-453-6069x659  ",      "lfoster@moon-hogan.org ",                   "https://www.barton.com/",           "Organic Search (SEO)",   "Disqualified"],
            ["28",       "2BDCFeECDBB79AB",      "Blake Lin",            "Carly",            "Morton",       "Berry, Wyatt and Thompson",      "783-562-2282      ",      "alexis37@estrada.info",                     "http://decker.com/",                "Retargeting Ads",        "On Hold"],
            ["29",       "24debf2dEe8eDF3",      "Jeffrey Hayes",        "Jason",            "Herrera",      "Hinton-Crane",                   "+1-333-970-7031      ",   "rcollins@cox-valenzuela.org ",              "https://www.tran.com/",             "Podcast",                "Disqualified"],
            ["30",       "7E6bB20532EA89b",      "Roy Phelps",           "Lucas",            "Fitzgerald",   "Reed, Porter and Garrett",       "(342)932-5965x89442",     "ehuerta@bond.net ",                         "http://www.harper.com/",            "Cold Call",              "Proposal Sent"],
            ["31",       "ccF8e0d8fBB8Daf",      "Nicolas Winters",      "Grace",            "Potter",       "Pollard, Serrano and Hancock",   "6888860868",              "jhendricks@hansen.info",                    "https://tran-steele.info/",         "LinkedIn Outreach",      "Negotiation"],
            ["32",       "CcDe2e45AfE9313",      "Jorge Huffman",        "Gregg",            "Johnson",      "Harrington Group",               "865-354-6948x31539",      "santiagofrancisco@saunders-solis.com ",     "https://hill-cuevas.biz/",          "Direct Traffic",         "Negotiation"],
            ["33",       "Df3CC92785D5BC8",      "Herbert Mccormick",    "Charlotte",        "Hughes",       "Velazquez Inc",                  "6296898135",              "alexcarson@rosales.com ",                   "https://www.stewart.com/",          "LinkedIn Outreach",      "Closed Lost"],
            ["34",       "c04bF6a0caCEe8C",      "Kyle Townsend",        "Eddie",            "Shepherd",     "Peterson, Mcintosh and Duran",   "(284)424-7909      ",     "farleyjake@clark.org ",                     "https://www.mosley-mcclure.org/",   "Podcast",                "New Lead"],
            ["35",       "ae1Df9F26E54D6f",      "Maria Foster",         "Alfred",           "Bolton",       "Melton PLC",                     "(442)454-5628x4434 ",     "theodoreholder@sellers.com ",               "https://duffy.com/",                "Webinars",               "Proposal Sent"],
            ["36",       "AeBdC072578242D",      "Priscilla Mann",       "Gail",             "Warner",       "Good, Montgomery and Woods",     "449.220.1983      ",      "jakesoto@castaneda-blanchard.com ",         "http://mcgee-stanton.biz/",         "Google Ads",             "Re-engagement"],
            ["37",       "Ea46ff9A38aF47B",      "Dwayne Lin",           "Maria",            "Archer",       "Howard-Ballard",                 "490-675-8269      ",      "gbrown@gallagher.net ",                     "https://www.espinoza.com/",         "LinkedIn Outreach",      "Closed Lost"],
            ["38",       "0bAd3ddED336Acb",      "Sean Swanson",         "Fernando",         "Cantu",        "Rush-Martin",                    "+1-775-470-1047x621  ",   "crossalicia@oneill-decker.info",            "https://www.melton.com/",           "Trade Show",             "Closed Lost"],
            ["39",       "AF4EFA79d8dE3eF",      "Gordon Ruiz",          "Annette",          "Ramsey",       "Lin-Lawson",                     "595-914-2510      ",      "jonestami@winters.biz ",                    "http://lucas-dillon.com/",          "Direct Traffic",         "Qualified"],
            ["40",       "FE88BE947cF3A74",      "Betty Ferrell",        "Nicholas",         "Knox",         "Castaneda-Mcpherson",            "731.284.5600      ",      "brycezimmerman@benjamin-thornton.biz ",     "http://www.kelly.net/",             "Networking Event",       "New Lead"],
            ["41",       "fD3FdCbb4163bD6",      "Warren Santos",        "Jonathon",         "Rivers",       "Church-Dunn",                    "675-626-8100      ",      "ycoleman@wright.com ",                      "http://www.li.com/",                "Webinars",               "Disqualified"],
            ["42",       "3fEd0Bc91FdC93c",      "Herbert George",       "Eileen",           "Mullen",       "Williamson-Weiss",               "737-308-8613x68510",      "courtney50@farley.com ",                    "http://livingston.biz/",            "Purchased List",         "Re-engagement"],
            ["43",       "FeCAcDEEeD6A0c4",      "Jennifer Blevins",     "Kerry",            "Hampton",      "Mclean-Huang",                   "338.428.5764x2810 ",      "lonniebradford@gregory.org ",               "https://haley.com/",                "Cold Email",             "Re-engagement"],
            ["44",       "422dcDabc79d4AE",      "Leroy Daugherty",      "Veronica",         "Bird",         "Hess LLC",                       "420.757.7936      ",      "colinlynn@peck.com ",                       "https://www.hanna.info/",           "Retargeting Ads",        "Negotiation"],
            ["45",       "CB10FbDc2824158",      "Melanie Burns",        "Beth",             "Sampson",      "Terrell PLC",                    "928-787-1632x270  ",      "gilbertclayton@stone.com ",                 "https://cook-ellison.info/",        "Chatbot",                "Closed Won"],
            ["46",       "699BCBDF5ABc6E8",      "Mackenzie Lee",        "Chelsey",          "Walsh",        "Davidson, Odonnell and Short",   "345.399.7387x26399",      "russell57@vaughn.com ",                     "http://www.welch.biz/",             "Cold Call",              "Closed Won"],
            ["47",       "c2B7a4cDe2b4cBC",      "Brittany Taylor",      "Tom",              "Santana",      "Rollins-Stanton",                "001-740-514-4271x34158",  "brent06@shepard.com ",                      "http://paul.com/",                  "Other",                  "Re-engagement"],
            ["48",       "444Dd84e7ECEC77",      "Bob Cunningham",       "Cristian",         "Mcclure",      "King-Lee",                       "+1-373-994-7902x8449 ",   "prich@chavez.net ",                         "https://mullen.net/",               "Referral",               "On Hold"],
            ["49",       "69c947a73d64ebA",      "Jesus Nelson",         "Rita",             "Schultz",      "Levy PLC",                       "843.331.3124x233  ",      "chelsey56@cisneros-cowan.com ",             "https://castaneda.com/",            "Google Ads",             "Contacted"]
        ];

            // for($i = 0; $i<count($clients); $i++){
            //      echo  count($clients[$i]) . '<br>';
            //  }
            //  echo count($nam_cli);

       $pdf->create_report($format, $clients, $nam_cli);

       return $pdf->Output($format);
        
     

    }    
}


?>



