<?php

namespace freegle\UrlTopLevel;

const COMMERCIAL = "commercial";
const NETWORK = "network";
const UK = "United Kingdom";
const UK_ACADEMIC = "UK academic";
const UK_COMMERCIAL = "UK commercial";

const DEFAULT_DOMAINS =array(
    "biz"=>"businesses",
    "com"=>COMMERCIAL,
    "coop"=> "cooperatives",
    "edu"=>"education",
    "gov"=>"US Goverment",
    "host"=>"network companies",
    "info"=>"information",
    "int"=>"international organizations",
    "lcl"=>"special lcl",
    "mil"=>"US Military",
    "name"=>"individual",
    "net"=>NETWORK,
    "org"=>"oganization",
);

const COUNTRY_CODES=array(
    "ac"=>"Ascension Island",
    "ad"=>"Andorra",
    "ae"=>"United Arab Emirates",
    "af"=>"Afghanistan",
    "ag"=>"Antigua and Barbuda",
    "ai"=>"Anguilla",
    "al"=>"Albania",
    "am"=>"Armenia",
    "an"=>"Netherlands Antilles ",
    "ao"=>"Angola",
    "aq"=>"Antarctica",
    "ar"=>"Argentina",
    "as"=>"American Samoa",
    "at"=>"Austria",
    "au"=>"Australia",
    "aw"=>"Aruba",
    "ax"=>"Åland",
    "az"=>"Azerbaijan",

    "ba"=>"Bosnia Hercegovina",
    "bb"=>"Barbados",
    "bd"=>"Bangladesh",
    "be"=>"Belgium ",
    "bf"=>"Burkina Faso",
    "bg"=>"Bulgaria",
    "bh"=>"Bahrain",
    "bi"=>"Burundi",
    "bj"=>"Benin",
    "bm"=>"Bermuda ",
    "bn"=>"Brunei Darussalam",
    "bo"=>"Bolivia",
    "bq"=>"Bonaire",
    "br"=>"Brazil",
    "bs"=>"Bahamas",
    "bt"=>"Bhutan",
    "bv"=>"Bouvet Island",
    "bw"=>"Botswana",
    "by"=>"Belarus",
    "bz"=>"Belize",

    "ca"=>"Canada",
    "cc"=>"Cocos Islands",
    "cd"=>"Democratic Republic of the Congo",
    "cf"=>"Central African Republic",
    "cg"=>"Congo",
    "ch"=>"Switzerland",
    "ck"=>"Cook Islands",
    "ci"=>"Ivory Coast",
    "cl"=>"Chile",
    "cm"=>"Cameroon",
    "cn"=>"China",
    "co"=>"Colombia",
    "cr"=>"Costa Rica ",
    "cu"=>"Cuba",
    "cv"=>"Cape Verde",
    "cw"=>"Curaçao",
    "cx"=>"Christmas Island",
    "cy"=>"Cyprus",
    "cz"=>"Czechoslovakia",

    "de"=>"Germany",
    "dj"=>"Djibouti",
    "dk"=>"Denmark",
    "dm"=>"Dominica",
    "do"=>"Dominican Republic",
    "dz"=>"Algeria",

    "ec"=>"Ecuador",
    "ee"=>"Estonia",
    "eg"=>"Egypt",
    "eh"=>"Western Sahara",
    "er"=>"Eritrea",
    "es"=>"Spain",
    "et"=>"Ethiopia",
    "eu"=>"European Union",

    "fi"=>"Finland",
    "fj"=>"Fiji",
    "fk"=>"Falkland Islands",
    "fm"=>"Micronesia",
    "fo"=>"Faroe Islands",
    "fr"=>"France",

    "ga"=>"Gabon",
    "gb"=>"Great Britain",
    "gd"=>"Grenada",
    "ge"=>"Georgia",
    "gf"=>"French Guiana",
    "gg"=>"Guernsey",
    "gh"=>"Ghana",
    "gi"=>"Gibraltar",
    "gl"=>"Greenland",
    "gm"=>"Gambia",
    "gn"=>"Guinea",
    "gp"=>"Guadeloupe",
    "gq "=>"Equatorial Guinea",
    "gr"=>"Greece",
    "gs"=>"South Georgia and the South Sandwich Islands",
    "gt"=>"Guatemala",
    "gu"=>"Guam",
    "gw"=>"Guinea-bissau",
    "gy"=>"Guyana",

    "hk"=>"Hong Kong",
    "hm"=>"Heard and Mc Donald Islands",
    "hn"=>"Honduras",
    "hr"=>"Croatia",
    "ht"=>"Haiti",
    "hu"=>"Hungary",

    "id"=>"Indonesia",
    "ie"=>"Ireland",
    "il"=>"Israel",
    "im"=>"Isle of Man",
    "in"=>"India",
    "io"=>"British Indian Ocean Territory",
    "iq"=>"Iraq",
    "ir"=>"Iran",
    "is"=>"Iceland",
    "it"=>"Italy",

    "je"=>"Jersey",
    "jm"=>"Jamaica",
    "jo"=>"Jordan",
    "jp"=>"Japan",

    "ke"=>"Kenya",
    "kg"=>"Kyrgyzstan",
    "kh"=>"Cambodia",
    "ki"=>"Kiribati",
    "km"=>"Comoros",
    "kn"=>"Saint Kitts and Nevis",
    "kp"=>"North Korea",
    "kr"=>"South Korea",
    "kw"=>"Kuwait",
    "ky"=>"Cayman Islands",
    "kz"=>"Kazakhstan",

    "la"=>"Laos",
    "lb"=>"Lebanon",
    "lc"=>"Saint Lucia",
    "li"=>"Lichtenstein",
    "lk"=>"Sri Lanka",
    "lr"=>"Liberia",
    "ls"=>"Lesotho",
    "lt"=>"Lithuania",
    "lu"=>"Luxembourg",
    "lv"=>"Latvia",
    "ly"=>"Libya",

    "ma"=>"Morocco",
    "mc"=>"Monaco",
    "md"=>"Moldova Republic",
    "me"=>"Montenegro",
    "mg"=>"Madagascar",
    "mh"=>"Marshall Islands",
    "ml"=>"Mali",
    "mm"=>"Myanmar",
    "mn"=>"Mongolia",
    "mo"=>"Macau",
    "mp"=>"Northern Mariana Islands",
    "mq"=>"Martinique",
    "mr"=>"Mauritania",
    "ms"=>"Montserrat",
    "mt"=>"Malta",
    "mu"=>"Mauritius",
    "mv"=>"Maldives",
    "mw"=>"Malawi",
    "mx"=>"Mexico",
    "my"=>"Malaysia",
    "mz"=>"Mozambique",

    "na"=>"Namibia",
    "nc"=>"New Caledonia",
    "ne"=>"Niger",
    "nf"=>"Norfolk Island",
    "ng"=>"Nigeria",
    "ni"=>"Nicaragua",
    "nl"=>"Netherlands",
    "no"=>"Norway",
    "np"=>"Nepal",
    "nr"=>"Nauru",
    "nt"=>"Neutral Zone",
    "nu"=>"Niue",
    "nz"=>"New Zealand",

    "om"=>"Oman",

    "pa"=>"Panama",
    "pe"=>"Peru",
    "pf"=>"French Polynesia",
    "pg"=>"Papua New Guinea",
    "ph"=>"Philippines",
    "pl"=>"Poland",
    "pk"=>"Pakistan",
    "pm"=>"St. Pierre and Miquelon",
    "pn"=>"Pitcairn Islands",
    "pr"=>"Puerto Rico",
    "ps"=>"Palestine",
    "pt"=>"Portugal",
    "pw"=>"Palau",
    "py"=>"Paraguay",

    "qa"=>"Qatar",

    "re"=>"Reunion",
    "ro"=>"Romania",
    "rs"=>"Serbia",
    "ru"=>"Russia",
    "rw"=>"Rwanda",

    "sa"=>"Saudi Arabia",
    "sb"=>"Solomon Islands",
    "sc"=>"Seychelles",
    "sd"=>"Sudan",
    "se"=>"Sweden",
    "sg"=>"Singapore",
    "sh"=>"St. Helena",
    "si"=>"Slovenia",
    "sj"=>"Svalbard and Jan Mayen Islands",
    "sk"=>"Slovakia",
    "sl"=>"Sierra Leone",
    "sm"=>"San Marin",
    "sn"=>"Senegal",
    "so"=>"Somalia",
    "sr"=>"Suriname",
    "ss"=>"South Sudan",
    "st"=>"Sao Tome and Principe",
    "su"=>"Soviet Union",
    "sv"=>"El Salvador",
    "sx"=>"Sint Maarten",
    "sy"=>"Syria",
    "sz"=>"Swaziland",

    "tc"=>"Turks and Caicos Islands",
    "td "=>"Chad",
    "tf"=>"French Southern Territories",
    "tg"=>"Togo",
    "th"=>"Thailand",
    "tj"=>"Tajikistan",
    "tk"=>"Tokelau",
    "tl"=>"East Timor",
    "tm"=>"Turkmenistan",
    "tn"=>"Tunisia",
    "to"=>"Tonga",
    "tp"=>"East Timor", #old code
    "tr"=>"Turkey",
    "tt"=>"Trinidad, Tobago",
    "tv"=>"Tuvalu",
    "tw"=>"Taiwan",
    "tz"=>"Tanzania",

    "ua"=>"Ukraine",
    "ug"=>"Uganda",
    "uk"=>UK,
    "um"=>"United States Minor Islands", #unused
    "us"=>"United States",
    "uy"=>"Uruguay",
    "uz"=>"Uzbekistan",

    "va"=>"Vatican City",
    "vc"=>"Saint Vincent, Grenadines",
    "ve"=>"Venezuela",
    "vg"=>"Virgin Islands (British)",
    "vi"=>"Virgin Islands (U.S.)",
    "vn"=>"Viet Nam",
    "vu"=>"Vanuatu",
    "ws"=>"Samoa",
    "wf"=>"Wallis and Futuna Islands",

    "ye"=>"Yemen",
    "yu"=>"Yugoslavia",

    "za"=>"South Africa",
    "zm"=>"Zambia",
    "zr"=>"Zaire",
    "zw"=>"Zimbabwe");


const UK_SECOND_LEVEL=array(
    "ac.uk" => UK_ACADEMIC,
    "co.uk" => UK_COMMERCIAL,
    "gov.uk" => "UK government",
    "judiciary.uk" => "UK courts",
    "ltd.uk" => "UK limited companies",
    "me.uk" => "UK personal",
    "mod.uk" => "UK Ministry of Defence",
    "net.uk" => "UK ISPs and network companies",
    "nhs.uk" => "UK National Health Service institutions",
    "nic.uk" => "UK Nominet",
    "org.uk" => "UK non-profit organisations",
    "parliament.uk" => "UK parliamentary",
    "plc.uk" => "UK public limited companies",
    "police.uk" => "UK police",
    "sch.uk" => "UK schools");

/*
 *
 * Source: https://www.whatdotheyknow.com/request/78905/response/197868/attach/2/DNS%20Registered%20AC%20UK%20Domains.txt
 */
const AC_UK_THIRD = array(
    "1994group.ac.uk", # The 1994 Group
    "3sixty-ucc.ac.uk", # University of Aberdeen
    "4gls.ac.uk", # Science and Technology Facilities Council
    "APR.ac.uk", # The National Archives
    "CLOUDWORKS.ac.uk", # The Open University
    "CONTEMP-HIST-ARCH.ac.uk", # The Open University
    "Churchill.ac.uk", # University of Cambridge
    "CityCollegeSoton.ac.uk", # Southampton City College
    "DaventrylearningPartnership.ac.uk", # Northampton College
    "Emec.ac.uk", # The European Marine Energy Centre Limited
    "En-compass.ac.uk", # University of Newcastle upon Tyne
    "GCU.ac.uk", # Glasgow Caledonian University
    "Greenwichobservatory.ac.uk", # National Maritime Museum
    "HESTEM.ac.uk", # University of Birmingham
    "KirkleesCollege.ac.uk", # Kirklees College
    "LANCS-Initiative.ac.uk", # School of Computer Science
    "LERSNET.ac.uk", # Legal Empirical Research Support Network
    "aacts.ac.uk", # University of Westminster
    "aaschool.ac.uk", # Architectural Association School of Architecture
    "aau.ac.uk", # The Association Aerospace Universities
    "abcol.ac.uk", # Aberdeen College
    "abcolstudents.ac.uk", # Aberdeen College
    "abdn.ac.uk", # University of Aberdeen
    "aber.ac.uk", # Aberystwyth University
    "aberbangorpartnership.ac.uk", # Research Enterprise Partnership
    "aberdare.ac.uk", # Coleg Morgannwg
    "aberdeen.ac.uk", # University of Aberdeen
    "aberdeenrescon.ac.uk", # Aberdeen Research Consortium
    "abertawe.ac.uk", # University of Wales - Swansea
    "abertay-dundee.ac.uk", # University of Abertay Dundee
    "abertay.ac.uk", # University of Abertay Dundee
    "aberystwyth.ac.uk", # Aberystwyth University
    "abingdon-witney.ac.uk", # Abingdon and Witney College
    "abrsm.ac.uk", # Associated Board Royal School of Music
    "abrsmseal.ac.uk", # Associated Board of the Royal School of Music
    "abs.ac.uk", # The Robert Gordon University
    "abseal.ac.uk", # Associated Board of the Royal School of Music
    "acacia.ac.uk", # Somerset Care Ltd
    "academicmedicine.ac.uk", # The Academy of Medical Science
    "academyofmusic.ac.uk", # The Academy of Music & Sound Ltd
    "access-summit.ac.uk", # The University of Manchester
    "accesshe.ac.uk", # University of London
    "accesstohe.ac.uk", # The Quality Assurance Agency for Higher Education
    "accesstohighereducation.ac.uk", # The Quality Assurance Agency for Higher Education
    "accross.ac.uk", # Accrington and Rossendale College
    "ace.ac.uk", # ACE - Assisting Collaborative Education
    "aced.ac.uk", # University of Edinburgh
    "acer.ac.uk", # Association of Colleges in the Eastern Region
    "aces.ac.uk", # Natural Environment Research Council
    "acets.ac.uk", # University of Edinburgh
    "acm.ac.uk", # Academy of Contemporary Music
    "acmedsci.ac.uk", # Academy of Medical Sciences
    "acp.ac.uk", # Staffordshire University
    "actofunion.ac.uk", # The Act of Union Virtual Library Project
    "actual.ac.uk", # The University of Reading
    "acu.ac.uk", # Association of Commonwealth Universities
    "acupuncture-coll.ac.uk", # College of Traditional Acupuncture
    "adam.ac.uk", # ADAM Project (ELIB)
    "adams-institute.ac.uk", # University of Oxford
    "adamsmith.ac.uk", #The Adam Smith College,  Fife
    "adamsmithcollege.ac.uk", #The Adam Smith College,  Fife
    "adapt.ac.uk", # ADAPT Project
    "adas.ac.uk", # University of Strathclyde
    "adbib.ac.uk", # University of Sussex
    "addison.ac.uk", # St George's Hospital Medical School
    "adeptt.ac.uk", # University of Hertfordshire
    "adlib.ac.uk", # University of Hertfordshire
    "adls.ac.uk", # University of St Andrews
    "ads.ac.uk", # University of York
    "adultlearningbcc.ac.uk", # Buckinghamshire County Council
    "advantagenottinghamshire.ac.uk", # University of Nottingham
    "aecc-chiropractic.ac.uk", # Anglo European College of Chiropractic
    "aecc.ac.uk", # Anglo-European College of Chiropractic
    "aengd.ac.uk", # University of Bristol
    "aerospace-training-wales.ac.uk", # Barry College
    "aers.ac.uk", # University of Cambridge
    "aes.ac.uk", # The Agricultural Economics Society
    "afan.ac.uk", # Afan College
    "afcl.ac.uk", # Northern College for Residential Adult Education
    "afi.ac.uk", # The Alexander Fleming Institute
    "africadesk.ac.uk", # The British Academy
    "afsni.ac.uk", # Science Service - Dept. of Agriculture for Northern Ireland
    "afterenglish.ac.uk", # The Higher Education Academy
    "agenet.ac.uk", # AgeNet
    "agocg.ac.uk", # The University of Manchester
    "agrifor.ac.uk", # The University of Manchester
    "agroforestry.ac.uk", # The UK Agroforestry Forum
    "ags.ac.uk", # Association for German Studies in Great Britain and Ireland
    "ahc.ac.uk", # Association for History and Computing (UK Branch)
    "ahds.ac.uk", # King's College London
    "ahessc.ac.uk", # King's College London
    "ahgtm.ac.uk", # Aimhigher Greater Merseyside
    "ahkandm.ac.uk", # AimHigher Kent and Medway
    "ahpd.ac.uk", # University of Leeds
    "ahrb.ac.uk", # Arts and Humanities Research Council
    "ahrc.ac.uk", # Arts and Humanities Research Council
    "ahua.ac.uk", # Association of Heads of University Administration
    "aib.ac.uk", # The Arts University College at Bournemouth
    "aim25.ac.uk", # Aim25
    "aimhigher.ac.uk", # Higher Education Funding Council for England
    "aimhighergreatermerseyside.ac.uk", # Aimhigher Greater Merseyside
    "aimhigherhants.ac.uk", # Aimhigher Hampshire & Isle of Wight
    "aimhighernorthamptonshire.ac.uk", # Aimhigher Northamptonshire
    "aimhighernotts.ac.uk", # Nottingham Trent University
    "aimhighernw.ac.uk", # Edge Hill University
    "aimhigherscotland.ac.uk", # University of Glasgow
    "aimhighersoutheast.ac.uk", # Aimhigher South East
    "aimhighersurrey.ac.uk", # Aimhigher Surrey
    "aimhighersw.ac.uk", #University of the West of England,  Bristol
    "aimhigherwm-alps.ac.uk", # University of Wolverhampton
    "aims.ac.uk", # University of Liverpool
    "aire-wharf-coll.ac.uk", # Airedale & Wharfedale College
    "aiulondon.ac.uk", # American InterContinental University
    "aldinhe.ac.uk", # University of Lincoln
    "ali.ac.uk", # Adult Learning Inspectorate
    "alis-wales.ac.uk", # Aberystwyth University
    "alladin.ac.uk", # University for the Creative Arts
    "allcu.ac.uk", # Association of Librarians in Landbase Colleges and Universities
    "allnations.ac.uk", # All Nations Christian College
    "alma.ac.uk", # Atacama Large Millimetre Array
    "aloe.ac.uk", # Loughborough University
    "alps-cetl.ac.uk", # University of Leeds
    "alps-wm.ac.uk", # University of Wolverhampton
    "alt.ac.uk", # Association for Learning Technology
    "altis.ac.uk", # The University of Manchester
    "alton.ac.uk", # Alton College
    "altoncollege.ac.uk", # Alton College
    "alzheimers.ac.uk", # St George's Hospital Medical School
    "amerc.ac.uk", # Association of Marine Electronic and Radio Colleges
    "americabrox.ac.uk", # Broxtowe College
    "amersham.ac.uk", # Amersham and Wycombe College
    "amerwyc-coll.ac.uk", # Amersham and Wycombe College
    "amet.ac.uk", # The Association of Mathematics Education Teachers
    "amgueddfacymru.ac.uk", # National Museum Wales
    "amh.ac.uk", # University of Glasgow
    "ami.ac.uk", # Advanced Microelectronics for Industrialists
    "ams-careers.ac.uk", # The Academy of Medical Science
    "anaesthetistswales.ac.uk", # Society of Anaesthetists of Wales
    "ancientcyprus.ac.uk", # Ancient Cyprus Web Project
    "andover.ac.uk", #Sparsholt College,  Hampshire
    "andovercollege.ac.uk", #Sparsholt College,  Hampshire
    "angel.ac.uk", # Authenticated Networked Guided Environment for Learning - JISC Project
    "anglia-polytechnic.ac.uk", # Anglia Polytechnic University
    "anglia-ruskin.ac.uk", # Anglia Ruskin University
    "anglia.ac.uk", # Anglia Ruskin University
    "angus.ac.uk", # Angus College
    "anic.ac.uk", # Association of Northern Ireland Colleges
    "anniesland-fe.ac.uk", # Anniesland College
    "anniesland.ac.uk", # Anniesland College
    "antarctic.ac.uk", # British Antartic Survey
    "antarctica.ac.uk", # British Antartic Survey
    "antf.ac.uk", # University of Westminster
    "anthropology.ac.uk", # University of Kent
    "antiquity.ac.uk", # Antiquity Journal
    "aocc.ac.uk", # Amgueddfeydd ac Orielau Cenedlaethol Cymru
    "aphe.ac.uk", # Stockport College
    "apis.ac.uk", # Natural Environment Research Council
    "apts.ac.uk", # University of Warwick
    "apu.ac.uk", # Anglia Ruskin University
    "apuc-scot.ac.uk", # Edinburgh Napier University
    "aqmen.ac.uk", # University of Edinburgh
    "aquinas.ac.uk", # Aquinas College
    "arc.ac.uk", # Academic Registrars Council
    "archaeologydataservice.ac.uk", # University of York
    "archive.ac.uk", # The Data Archive at the University of Essex
    "archiveshub.ac.uk", # The UK HE Archives Hub
    "archway.ac.uk", # University College London Hospitals
    "arciss.ac.uk", # Association of Research Centres in Social Sciences
    "arcom.ac.uk", # Association of Researchers in Construction Management
    "arctic.ac.uk", # British Antartic Survey
    "ardencollege.ac.uk", # Arden College
    "argyllcollege.ac.uk", # Argyll College
    "ariadne.ac.uk", # Ariadne (eLib)
    "ark-genomics.ac.uk", # Biotechnology and Biological Sciences Research Council
    "ark.ac.uk", # University of Ulster
    "arm.ac.uk", # Armagh Observatory
    "arma-uk.ac.uk", # Association of Research Managers and Administrators
    "arma.ac.uk", # Association of Research Managers and Administrators
    "armaghcollege.ac.uk", # Southern Regional College
    "arnold-carlton.ac.uk", # Arnold & Carlton College
    "arrc.ac.uk", # University of Sheffield
    "ars.ac.uk", # The Anaesthetic Research Society
    "art-design-careers.ac.uk", # University for the Creative Arts
    "art-design-research.ac.uk", # University for the Creative Arts
    "artdesignhull.ac.uk", # Hull College
    "artifact.ac.uk", # The Arts and Creative Industries Hub of the Resource Discovery
    "artofmaking.ac.uk", # King's College London
    "arts-inst-bournemouth.ac.uk", # The Arts University College at Bournemouth
    "arts.ac.uk", # University of the Arts London
    "artsigns.ac.uk", # University of Wolverhampton
    "aru.ac.uk", # Anglia Ruskin University
    "asap.ac.uk", # University of Nottingham
    "ascentis.ac.uk", # Ascentis Ltd
    "ascr.ac.uk", # Alliance for Self Care Research
    "aset.ac.uk", # Education Development International PLC
    "asfc.ac.uk", # Ashton Sixth Form College
    "asgp.ac.uk", # University of Birmingham
    "ashridge.ac.uk", # Ashridge (Bonar Law Memorial) Trust
    "asiabrox.ac.uk", # Broxtow College
    "asiamap.ac.uk", # School of Oriental and African Studies
    "askham-bryan.ac.uk", # Askham Bryan College
    "askham.ac.uk", # Askham Bryan College
    "askhambryan.ac.uk", # Askham Bryan College
    "aspire-aimhigher.ac.uk", # University of Greenwich
    "asra.ac.uk", # Association for Student Residential Accommodation
    "assap.ac.uk", # ASSAP
    "astec.ac.uk", # Science and Technology Facilities Council
    "asthma-allergy.ac.uk", # King's College London
    "aston.ac.uk", # Aston University
    "astrogrid.ac.uk", # University of Leicester
    "astronomy.ac.uk", # UK Astronomy Distance Learning Courses
    "asvin.ac.uk", # The Royal Veterinary College
    "athens.ac.uk", # Eduserv
    "atlars.ac.uk", # ATLARS
    "atlas.ac.uk", # ATLAS UK collaboration
    "aua.ac.uk", # Association of University Administrators
    "auc.ac.uk", # Higher Education Wales
    "aucb.ac.uk", # The Arts University College at Bournemouth
    "aucyfrwngcymraeg.ac.uk", # Centre for Welsh Medium Higher Education
    "aude.ac.uk", # The Association of University Directors of Estates
    "audelondon.ac.uk", # University of Westminster
    "aue.ac.uk", # The Association of University Engineers
    "auee.ac.uk", # Association of Universities in the East of England
    "aulic.ac.uk", #University of the West of England,  Bristol
    "auphf.ac.uk", # University of St Andrews
    "aupo.ac.uk", # Procureweb
    "autosub.ac.uk", # NERC Southampton Oceanographic Centre Autosub
    "avphd.ac.uk", # Goldsmiths' College
    "avprc.ac.uk", # University of Salford
    "awlc.ac.uk", # Acton & West London College
    "aylesbury.ac.uk", # Aylesbury College
    "ayrcoll.ac.uk", # Ayr College
    "baa.ac.uk", # University of Sheffield
    "baap.ac.uk", # University of Cambridge
    "baas.ac.uk", # British Association for American Studies
    "babeltech.ac.uk", # Babel Technical College
    "babraham.ac.uk", # Babraham College
    "backoncourse.ac.uk", # The Open University
    "backstage.ac.uk", # University of Kent
    "bacl.ac.uk", # Regent's College
    "bacoll.ac.uk", # Bishop Auckland College
    "badc.ac.uk", # Science and Technology Facilities Council
    "baec.ac.uk", # London Borough of Bromley
    "bafa.ac.uk", # University of Sheffield
    "baice.ac.uk", # University of Birmingham
    "bailer.ac.uk", #University of the West of England,  Bristol
    "bais.ac.uk", # Manchester Metropolitan University
    "balance.ac.uk", # Loughborough University
    "bam.ac.uk", # The British Academy of Management
    "bandp.ac.uk", # The Bournemouth and Poole College
    "bandpcoll.ac.uk", # The Bournemouth and Poole College
    "banff-buchan.ac.uk", # Banff and Buchan College of Further Education
    "bangor.ac.uk", # Bangor University
    "barking-coll.ac.uk", # Barking and Dagenham College
    "barkingcollege.ac.uk", # Barking and Dagenham College
    "barkingdagenhamcollege.ac.uk", # Barking and Dagenham College
    "barnet.ac.uk", # Barnet College
    "barnfield.ac.uk", # Barnfield College
    "barnsley.ac.uk", # Barnsley College
    "barony.ac.uk", # The Barony College
    "barrow6fc.ac.uk", # Barrow-in-Furness Sixth Form College
    "barry.ac.uk", # Barry College
    "bars.ac.uk", # University of Stirling
    "barton-peveril.ac.uk", # Barton Peveril College
    "barton.ac.uk", # Barton Peveril College
    "bas.ac.uk", # British Antartic Survey
    "basford-hall.ac.uk", # Basford Hall College
    "basildon.ac.uk", # South Essex College of Further and Higher Education
    "basingstoke.ac.uk", # Basingstoke College of Technology
    "basketry.ac.uk", # University of East Anglia
    "basp.ac.uk", # British Association of Stroke Physicians
    "basr.ac.uk", # The British Association for the Study of Religions
    "bath.ac.uk", # University of Bath
    "bathcollege.ac.uk", # City of Bath College
    "bathnortheastsomerset-acl.ac.uk", # Bath and North East Somerset Council
    "bathspa.ac.uk", # Bath Spa University
    "bbc.ac.uk", # Bishop Burton College
    "bbcslln.ac.uk", # University College Birmingham
    "bbk.ac.uk", # Birkbeck College
    "bbs-cove.ac.uk", # North East Worcestershire College
    "bbsrc.ac.uk", # Biotechnology and Biological Sciences Research Council
    "bca.ac.uk", # Berkshire College of Agriculture
    "bcc.ac.uk", # University College London
    "bcftcs.ac.uk", # University College Birmingham
    "bcno.ac.uk", # British College of Naturopathy & Osteopathy
    "bcom.ac.uk", # British College of Osteopathic Medicine
    "bcot.ac.uk", # Basingstoke College of Technology
    "bctcs.ac.uk", # University of Edinburgh
    "bcu.ac.uk", # Birmingham City University
    "bcuc.ac.uk", # Buckinghamshire New University
    "beaa.ac.uk", # Bangor University
    "beaumontcollege.ac.uk", # Beaumont College - A Scope College
    "becoming-a-teacher.ac.uk", # University of Nottingham
    "bede.ac.uk", # Bede College
    "bedford.ac.uk", # Bedford College
    "bedfordshire.ac.uk", # University of Bedfordshire
    "beds.ac.uk", # University of Bedfordshire
    "bedsacl.ac.uk", # Bedford Borough Council
    "beep.ac.uk", # University of Bristol
    "bees.ac.uk", # British Engineering Education Society
    "behaviour4learning.ac.uk", # Nottingham Trent University
    "bei.ac.uk", # University of Leeds
    "beinspiredatstaffs.ac.uk", # Staffordshire University
    "beirc.ac.uk", # University of Leeds
    "belfastinstitute.ac.uk", # Belfast Metropolitan College
    "belfastmet.ac.uk", # Belfast Metropolitan College
    "belfastmetropolitan.ac.uk", # Belfast Metropolitan College
    "belfastmetropolitancollege.ac.uk", # Belfast Metropolitan College
    "belfordcollege.ac.uk", # Belford College
    "bell.ac.uk", # University of the West of Scotland
    "bellerbys.ac.uk", # Bellerbys College
    "bep.ac.uk", # University of Leeds
    "bera.ac.uk", #Institute of Education,  University of London
    "berks-coll-ag.ac.uk", # Berkshire College of Agriculture
    "berkscollag.ac.uk", # Berkshire College of Agriculture
    "bern.ac.uk", # Network for the Built Environment
    "bernards.ac.uk", # St Bernards College
    "besa.ac.uk", # Liverpool Hope University
    "besc.ac.uk", # The Queen's University of Belfast
    "bettertogether.ac.uk", # Inter Professional Collaboration: Simulating Partnership Working in the Built Environment
    "beverleycollege.ac.uk", # Beverley College
    "bexhillcollege.ac.uk", # Bexhill College
    "bexley.ac.uk", # Bexley College
    "bexleycollege.ac.uk", # Bexley College
    "beyondtext.ac.uk", #Queen Mary and Westfield College,  University of London
    "bftv.ac.uk", # AHRB Centre for British Film and Television Studies
    "bgc.ac.uk", # Bishop Grosseteste University College Lincoln
    "bgs.ac.uk", # Natural Environment Research Council
    "bham.ac.uk", # University of Birmingham
    "bhamcity.ac.uk", # Birmingham City University
    "bhamcityuniversity.ac.uk", # Birmingham City University
    "bhasvic.ac.uk", #Brighton,  Hove and Sussex Sixth Form College
    "bhpgms.ac.uk", # University of Hertfordshire
    "bhpms.ac.uk", # University of Hertfordshire
    "bhrc.ac.uk", # University of Leeds
    "biaa.ac.uk", # The British Institute of Archaeology at Ankara
    "biab.ac.uk", # Council for British Archaelogy
    "bibliography.ac.uk", # University of London
    "bicc.ac.uk", # University of Oxford
    "bicpa.ac.uk", # Ravensbourne
    "bicton.ac.uk", # Bicton College
    "bids.ac.uk", # University of Bath
    "biea.ac.uk", # The British Institute in Eastern Africa
    "bigf.ac.uk", # British Isles GPS archive Facility
    "bigidea.ac.uk", # Universities UK
    "bihg.ac.uk", # British International History Group
    "bilborough.ac.uk", # Bilborough Sixth Form College
    "bileta.ac.uk", # British & Irish Legal Technology Association
    "bilk.ac.uk", # Bradford College
    "bilston.ac.uk", # Bilston Community College
    "bimacademy.ac.uk", # University of Northumbria at Newcastle
    "biobank.ac.uk", # UK Biobank
    "biobankuk.ac.uk", # UK Biobank
    "bioethics.ac.uk", # BioCentre UK
    "bioethicsweb.ac.uk", # The University of Manchester
    "bioinf.ac.uk", # UK MRC Human Genome Mapping Project
    "bioinfo.ac.uk", # UK MRC Human Genome Mapping Project
    "bioinformatics.ac.uk", # UK MRC Human Genome Mapping Project
    "biome.ac.uk", # The University of Manchester
    "bioresearch.ac.uk", # The University of Manchester
    "bioss.ac.uk", # Biomathematics and Statistics Scotland
    "bips.ac.uk", # British Institute of Persian Studies
    "birbeckstratford.ac.uk", # Birkbeck College
    "birkbeck.ac.uk", # Birkbeck College
    "birkbeckstratford.ac.uk", # Birkbeck College
    "birmingham.ac.uk", # University of Birmingham
    "birminghamcity.ac.uk", # Birmingham City University
    "birminghamcityuniversity.ac.uk", # Birmingham City University
    "birminghamschoolofacting.ac.uk", # Birmingham City University
    "bisa.ac.uk", # Aberystwyth University
    "bishopaucklandcollege.ac.uk", # Bishop Auckland College
    "bishopb-college.ac.uk", # Bishop Burton College
    "bishopburton.ac.uk", # Bishop Burton College
    "bishopburtoncollege.ac.uk", # Bishop Burton College
    "bishopg.ac.uk", # Bishop Grosseteste University College Lincoln
    "bisi.ac.uk", # British Institute for the Study of Iraq
    "bisinfonet.ac.uk", # University of Northumbria at Newcastle
    "bite.ac.uk", # British Institute of Technology & E-commerce
    "bja.ac.uk", # University of Leeds
    "black-country.ac.uk", # Dudley College
    "blackandasiangrad.ac.uk", # The Association of Graduate Careers Services
    "blackburn.ac.uk", # Blackburn College
    "blackpool-acl.ac.uk", # Blackpool Council
    "blackpool.ac.uk", # Blackpool and The Fylde College
    "blackpoolsixth.ac.uk", # The Blackpool Sixth Form College
    "blake.ac.uk", # Blake College
    "ble.ac.uk", # London School of Hygiene and Tropical Medicine
    "blend-ed.ac.uk", # Joint Information Systems Committee
    "bloomsbury.ac.uk", # Birkbeck College
    "bloomsburydtc.ac.uk", #Institute of Education,  University of London
    "blws.ac.uk", # University of Hertfordshire
    "bm14.ac.uk", # Oxford University
    "bmc.ac.uk", # Bristol Management Centre
    "bme.ac.uk", # Bangor University
    "bmetc.ac.uk", # Birmingham Metropolitan College
    "bms.ac.uk", # The British Mycological Society
    "bmth-poole-cad.ac.uk", # Bournemouth & Poole College of Art & Design
    "bmth.ac.uk", # Bournemouth University
    "bmva.ac.uk", # British Machine Vision Association
    "bnac.ac.uk", # School of Oriental and African Studies
    "bnu.ac.uk", # Buckinghamshire New University
    "boa.ac.uk", # The British Orthopaedic Association
    "bodc.ac.uk", # Natural Environment Research Council
    "bognor-training.ac.uk", # Chichester College
    "bognor.ac.uk", # Chichester College
    "bolton-college.ac.uk", # Bolton College
    "bolton-community-college.ac.uk", # Bolton Community College
    "bolton-sfc.ac.uk", # Bolton Sixth Form College
    "bolton.ac.uk", # The University of Bolton
    "boltoncc.ac.uk", # Bolton Community College
    "boltoncollege.ac.uk", # Bolton Community College
    "boltonsix.ac.uk", # Bolton Sixth Form College
    "bookhad.ac.uk", # The London Institute HEC
    "bopcas.ac.uk", # British Official Publications Current Awareness Service
    "bopcris.ac.uk", # University of Southampton
    "borderscollege.ac.uk", # Borders College
    "bordesley.ac.uk", # Bordesley Institute
    "bosco.ac.uk", # The Bosco Centre
    "bosta.ac.uk", # British Orthopaedic Sports Trauma Association
    "bostaa.ac.uk", # Royal College of Surgeons of Edinburgh
    "boston.ac.uk", # Boston College
    "bostoncentre.ac.uk", # Boston College
    "bourne.ac.uk", # Chichester College of Arts- Science & Technology
    "bournemouth.ac.uk", # Bournemouth University
    "bournemouthandpoole-cfe.ac.uk", # Bournemouth & Poole College of FE
    "bournville.ac.uk", # Bournville College of Further Education
    "bpa.ac.uk", # British Philosophical Association
    "bpc.ac.uk", # The Bournemouth and Poole College
    "bpcoll.ac.uk", # The Bournemouth and Poole College
    "bpmf.ac.uk", # Pre April 1999 Registration
    "bps.ac.uk", # British Pharmacological Society
    "bracknell.ac.uk", # Bracknell and Wokingham College
    "brad.ac.uk", # University of Bradford
    "bradcoll.ac.uk", # Bradford College
    "bradford.ac.uk", # University of Bradford
    "bradfordcollege.ac.uk", # Bradford College
    "bradforduni-recruitment.ac.uk", # Bradford University Recruitment Dept.
    "brain.ac.uk", # The Guarantors of Brain
    "braintree.ac.uk", # Colchester Institute Enterprises Limited
    "brams.ac.uk", # Bramshill Police Training College
    "brc.ac.uk", # Natural Environment Research Council
    "breakingofbritain.ac.uk", # King's College London
    "brent-acl.ac.uk", # London Borough of Brent
    "bretton.ac.uk", # Bretton Hall University College
    "bricoltech.ac.uk", #City College,  Brighton and Hove
    "bridgecollege.ac.uk", # Bridge College
    "bridgend.ac.uk", # Bridgend College
    "bridgwater.ac.uk", # Bridgwater College
    "brighton-uch.ac.uk", # University of Brighton
    "brighton.ac.uk", # University of Brighton
    "brightonandsussexmedicalschool.ac.uk", # University of Brighton
    "brightoncity.ac.uk", # Brighton City College
    "brightoncitycollege.ac.uk", # Brighton City College
    "brightonmedicalschool.ac.uk", # University of Brighton
    "brightstudy.ac.uk", # The Bright Study
    "brin.ac.uk", # The University of Manchester
    "brinsbury.ac.uk", # Brinsbury College of Agriculture & Horticulture
    "brinscoll.ac.uk", # Brindsbury College
    "bris.ac.uk", # University of Bristol
    "brisbio.ac.uk", # Bristol Biomedical Image Archive
    "brisman.ac.uk", # Bristol Management Centre
    "brismes.ac.uk", # The British Society for Middle Eastern Studies
    "bristol-baptist.ac.uk", # Bristol Baptist College
    "bristol.ac.uk", # University of Bristol
    "bristolinstituteoflegalpractice.ac.uk", #University of the West of England,  Bristol
    "bristollawschool.ac.uk", #University of the West of England,  Bristol
    "bristoluwe.ac.uk", # Bristol University of the West of England
    "britac.ac.uk", # The British Academy
    "britarch.ac.uk", # Council for British Archaeology
    "brite.ac.uk", # The BRITE Initiative
    "british-antarctic-survey.ac.uk", # British Antartic Survey
    "british-geological-survey.ac.uk", # British Geological Survey
    "british-history.ac.uk", # University of London
    "british-museum.ac.uk", # The British Museum
    "britishacademy.ac.uk", # The British Academy
    "britishlibrary.ac.uk", # The British Library
    "britishludwigwittgensociety.ac.uk", # University of Hertfordshire
    "britishmuseum.ac.uk", # The British Museum
    "britishwittgensteinsociety.ac.uk", # University of Hertfordshire
    "britphil.ac.uk", # The British Philosophical Association
    "brl.ac.uk", #University of the West of England,  Bristol
    "brnc.ac.uk", # Britannia Royal Naval College
    "brock.ac.uk", # Brockenhurst College
    "bromley.ac.uk", # Bromley College of Further and Higher Education
    "bromleyadulteducation.ac.uk", # London Borough of Bromley
    "brookehouse.ac.uk", # Brooke House Sixth Form College
    "brookes.ac.uk", # Oxford Brookes University
    "brooklands.ac.uk", # Brooklands College
    "brooksby.ac.uk", # Brooksby Agricultural College
    "brooksbymelton.ac.uk", # Brooksby Melton College
    "broomfield.ac.uk", # Derby College
    "broomsbarn.ac.uk", # Institute of Arable Crops Research - Broom's Barn
    "brox-coll.ac.uk", # Castle College Nottingham
    "broxtowe.ac.uk", # Castle College Nottingham
    "bruford.ac.uk", # Rose Bruford College
    "brunel.ac.uk", # Brunel University
    "bsa.ac.uk", # British School At Athens
    "bsac.ac.uk", # Benedictine Study and Arts Centre
    "bsbec.ac.uk", # Biotechnology and Biological Sciences Research Council
    "bsdc.ac.uk", # Burton College
    "bsfc.ac.uk", # Birkenhead Sixth Form College
    "bsg.ac.uk", # British Study Group
    "bshm.ac.uk", # British Society for the History of Mathematics
    "bsix.ac.uk", # Brooke House Sixth Form College
    "bsixbrookehouse.ac.uk", # Brooke House Sixth Form College
    "bsixbrookehousesixthformcollege.ac.uk", # Brooke House Sixth Form College
    "bsixcollege.ac.uk", # Brooke House Sixth Form College
    "bsls.ac.uk", # University of Glasgow
    "bsma.ac.uk", # The Arts University College at Bournemouth
    "bsmb.ac.uk", # British Society for Matrix Biology
    "bsms.ac.uk", # University of Brighton
    "bsnti.ac.uk", # Birmingham City University
    "bso.ac.uk", # The British School of Osteopathy
    "bsr.ac.uk", # The British School at Rome
    "bsrg.ac.uk", # British Stroke Research Group
    "bssd.ac.uk", # Birmingham City University
    "bssh.ac.uk", # British Society for Surgery of the Hand
    "btas.ac.uk", # Business Training Advisory Service
    "btc.ac.uk", # Balderstone Technology College
    "bton.ac.uk", # University of Brighton
    "btrp-hyperpolarised.ac.uk", # Basic Technology Research Programme - Hyperpolarised Technologies for Medical and Materials Science
    "buba.ac.uk", # Loughborough University
    "bubl.ac.uk", # University of Strathclyde
    "buck.ac.uk", # University of Buckingham
    "buckingham.ac.uk", # University of Buckingham
    "buckinghamshire.ac.uk", # Buckinghamshire New University
    "bucks.ac.uk", # Buckinghamshire New University
    "buckscol.ac.uk", # Buckinghamshire New University
    "buckscollege.ac.uk", # Buckinghamshire New University
    "bucksnewuni.ac.uk", # Buckinghamshire New University
    "bufdg.ac.uk", # British Universities Finance Directors Group
    "bufvc.ac.uk", # British Universities Film & Video Council
    "bui.ac.uk", # Bristol Urological Institute
    "buic.ac.uk", # University of Exeter
    "buila.ac.uk", # British Universities International Liaison Association
    "builtenvsigns.ac.uk", # University of Wolverhampton
    "burnley.ac.uk", # Burnley College
    "burton-college.ac.uk", # Burton College
    "burton-southderbyshirecollege.ac.uk", # Burton College
    "burton.ac.uk", # Burton College
    "burtonandsouthderbyshirecollege.ac.uk", # Burton College
    "buryacl.ac.uk", # Bury Metropolitan Borough Council
    "burycollege.ac.uk", # Bury College
    "businessaccess.ac.uk", # Higher Education Business Access Service
    "businesscove-blackcountry.ac.uk", # Sandwell College
    "butex.ac.uk", # British Universities Transatlantic Exchange Association
    "buxtoncollege.ac.uk", # Buxton College of Further Education
    "bws.ac.uk", # University of Hertfordshire
    "byam-shaw.ac.uk", # Byam Shaw School of Art
    "byzantine-ahrb-centre.ac.uk", # The Queen's University of Belfast
    "byzantium.ac.uk", # Society for the Promotion of Byzantium Studies
    "c-scaipe.ac.uk", # Kingston University
    "c4ccetl.ac.uk", # York St John University
    "caacentre.ac.uk", # The CAA Centre
    "cabot.ac.uk", # John Cabot Academy
    "cadcol.ac.uk", # Cadbury Sixth Form College
    "cade.ac.uk", # Computers in Art & Design Education- GSA
    "cadise.ac.uk", # Ravensbourne
    "cadres.ac.uk", # The University of Manchester
    "caerdydd.ac.uk", # Cardiff University
    "cafmad.ac.uk", # Research Enterprise Partnership
    "cafre.ac.uk", # Department of Agriculture & Rural Development
    "calam.ac.uk", # University of Salford
    "calat.ac.uk", # London Borough of Croydon
    "calderdale-acl.ac.uk", # Calderdale Council
    "calderdale.ac.uk", # Calderdale College
    "caledonian.ac.uk", # Glasgow Caledonian University
    "calim.ac.uk", # Consortium of Academic Libraries in Manchester
    "cam.ac.uk", # University of Cambridge
    "camborne.ac.uk", # Cornwall College
    "cambridge-university.ac.uk", # University of Cambridge
    "cambridge.ac.uk", # University of Cambridge
    "cambridgeuniversity.ac.uk", # University of Cambridge
    "camden-acl.ac.uk", # London Borough of Camden
    "campwsbydeangcymru.ac.uk", # University of Wales
    "camre.ac.uk", # Cambridge Regional College
    "camsfc.ac.uk", # Cheadle and Marple Sixth Form College
    "can.ac.uk", # Association of Colleges
    "candi.ac.uk", # City and Islington College
    "cando.ac.uk", # CanDo
    "cannington.ac.uk", # Bridgwater College
    "cannock.ac.uk", # South Staffordshire College
    "canolfanyramgylcheddolcymru.ac.uk", # Natural Environment Research Council
    "canonbury.ac.uk", # Canonbury Masonic Research Centre
    "cant-col.ac.uk", # Canterbury College
    "cant.ac.uk", # Canterbury Christ Church University
    "cantab.ac.uk", # University of Cambridge
    "canterbury.ac.uk", # Canterbury Christ Church University
    "canterburycollege.ac.uk", # Canterbury College
    "cap.ac.uk", # National Museum of Science and Industry
    "capel.ac.uk", # Capel Manor College
    "capitalisingoncreativity.ac.uk", # University of St Andrews
    "carbo-biocrop.ac.uk", # University of Southampton
    "carbobiocrop.ac.uk", # University of Southampton
    "cardiff-institute.ac.uk", # University of Wales - Institute of Cardiff
    "cardiff.ac.uk", # Cardiff University
    "cardinalnewman.ac.uk", #Cardinal Newman College,  Preston
    "cardonald.ac.uk", # Cardonald College
    "careersinresearch.ac.uk", # Natural Environment Research Council
    "careerswales.ac.uk", #University of Wales,  Swansea
    "carlisle.ac.uk", # Carlisle College
    "carmel.ac.uk", # Carmel College
    "carmer.ac.uk", # University of Glasgow
    "carnegie.ac.uk", # Leeds Metropolitan University
    "carnegiecollege.ac.uk", # Carnegie College
    "carr-lse.ac.uk", # London School of Economics
    "carr.ac.uk", # London School of Economics and Political Science
    "carshalton.ac.uk", # Carshalton College
    "cartoons.ac.uk", # University of Kent
    "casaw.ac.uk", # University of Edinburgh
    "casbah.ac.uk", # CASBAH
    "casim.ac.uk", # Science and Technology Facilities Council
    "casnewydd.ac.uk", #University of Wales,  Newport
    "castle-coll.ac.uk", # Castle College Nottingham
    "castle.ac.uk", # City University London
    "castlecollege.ac.uk", # Castle College Nottingham
    "castlereagh.ac.uk", # Castlereagh College
    "causeway.ac.uk", # Causeway Institute of FHE
    "cava.ac.uk", # The Cambridge Access Validating Agency
    "cavc.ac.uk", # Coleg Glan Hafren
    "cave.ac.uk", # Royal Veterinary College
    "cavendish.ac.uk", # Cavendish College
    "caw.ac.uk", # The College of Animal Welfare
    "cayt.ac.uk", # The Institute for Fiscal Studies
    "cbcdc.ac.uk", # Royal Welsh College of Music and Drama
    "cbpar.ac.uk", # Medical Research Council
    "cbs.ac.uk", # Cornwall College
    "ccad.ac.uk", # Cleveland College of Art and Design
    "ccap.ac.uk", # Natural Environment Research Council
    "ccb.ac.uk", #City College,  Brighton and Hove
    "ccbh.ac.uk", # University of London
    "ccc.ac.uk", # Swansea University
    "cccep.ac.uk", # London School of Economics and Political Science
    "cccr.ac.uk", # Research Enterprise Partnership
    "ccdc.ac.uk", # Royal Welsh College of Music and Drama
    "ccesd.ac.uk", # London Metropolitan University
    "ccfe.ac.uk", # United Kingdom Atomic Energy Authority
    "cch.ac.uk", # Hackney Community College
    "cchsr.ac.uk", # University of Cambridge
    "cci.ac.uk", # Coleg Glan Hafren
    "ccl.ac.uk", # Central Council for Laboratories
    "cclrc.ac.uk", # Science and Technology Facilities Council
    "ccm.ac.uk", # The Manchester College
    "ccms.ac.uk", # Centre for Coastal and Marine Sciences
    "ccn.ac.uk", # City College Norwich
    "ccol.ac.uk", # City of Glasgow College
    "ccp.ac.uk", # Science and Technology Facilities Council
    "ccp1.ac.uk", # Science and Technology Facilities Council
    "ccp11.ac.uk", # Collaborative Computational Projects
    "ccp13.ac.uk", # Science and Technology Facilities Council
    "ccp14.ac.uk", # CLRC - Daresbury Laboratory
    "ccp2.ac.uk", # Science and Technology Facilities Council
    "ccp3.ac.uk", # Science and Technology Facilities Council
    "ccp4.ac.uk", # Science and Technology Facilities Council
    "ccp5.ac.uk", # Science and Technology Facilities Council
    "ccp6.ac.uk", # University of Leeds
    "ccp9.ac.uk", # Science and Technology Facilities Council
    "ccpb.ac.uk", # University of Nottingham
    "ccplymouth.ac.uk", # City College Plymouth
    "ccpn.ac.uk", # University of Cambridge
    "ccpp.ac.uk", # University of Warwick
    "ccri.ac.uk", # Countryside and Community Research Institute
    "ccsr.ac.uk", # Cathie Marsh Centre for Census and Survey Research
    "ccta.ac.uk", # Coleg Sir Gar
    "ccue.ac.uk", # Council for College and University English
    "ccwp.ac.uk", #Imperial College of Science,  Technology and Medicine
    "cdd.ac.uk", # Conservetoire for Dance & Drama
    "ceda.ac.uk", # Science and Technology Facilities Council
    "cedar.ac.uk", # University of Durham
    "ceelbas.ac.uk", # University College London
    "ceesi.ac.uk", # The CEESI Project
    "cefims.ac.uk", # The Centre for Financial & Management Studies
    "ceg.ac.uk", # Computer Education Group
    "ceh-nerc.ac.uk", # NERC - Centre for Ecology & Hydrology - Merlewood
    "ceh-wallingford.ac.uk", # Natural Environment Research Council
    "ceh.ac.uk", # Natural Environment Research Council
    "cem.ac.uk", # The College of Estate Management
    "ceme.ac.uk", # Centre For Engineering & Manufacturing Excellence
    "cemmap.ac.uk", # The Institute for Fiscal Studies
    "cemp.ac.uk", # Bournemouth University
    "census-registration.ac.uk", # Economic and Social Research Council
    "census.ac.uk", # University of Essex
    "central-glasgow.ac.uk", # City of Glasgow College
    "central-lancashire.ac.uk", # University of Central Lancashire
    "centralbeds.ac.uk", # Central Bedfordshire College
    "centralcollege.ac.uk", # City of Glasgow College
    "centralsussex.ac.uk", # Central Sussex College
    "centreforyouthministry.ac.uk", # Centre for Youth Ministry
    "ceoi.ac.uk", # Science and Technology Facilities Council
    "cercia.ac.uk", # University of Birmingham
    "ceredigion.ac.uk", # Coleg Ceredigion
    "ceri.ac.uk", # Centre for Enterprise Research
    "cerlim.ac.uk", # Manchester Metropolitan University
    "ceruk.ac.uk", # National Foundation for Educational Research
    "cetis.ac.uk", # Bolton Institute of Higher Education
    "cetl4healthne.ac.uk", # University of Newcastle upon Tyne
    "cetl4musicne.ac.uk", # University of Newcastle upon Tyne
    "ceug.ac.uk", # University of Leeds
    "cf.ac.uk", # Cardiff University
    "cfas.ac.uk", # University of Cambridge
    "cfldcol.ac.uk", # Chesterfield College
    "cfs.ac.uk", # Consortium for Science
    "cgh.ac.uk", # Coleg Glan Hafren
    "chace.ac.uk", # Cheltenham Assessment Centre Ltd
    "chart.ac.uk", # The British Academy
    "charteredteacher.ac.uk", # College of Teachers
    "chasestudy.ac.uk", # St George's Hospital Medical School
    "chaucer.ac.uk", # Shumei Eiko Ltd
    "chcc.ac.uk", # The University of Manchester
    "che.ac.uk", # Centre for Human Ecology
    "chea-nmidlands.ac.uk", # University of Derby
    "chead.ac.uk", # Council for Higher Education in Art & Design
    "cheep.ac.uk", # University of Bristol
    "cheia.ac.uk", # Council of Higher Education Internal Auditors
    "cheib.ac.uk", # Blackburn College
    "chelmsford-college.ac.uk", # Chelmsford College
    "chelmsford.ac.uk", # Chelmsford College
    "chelt.ac.uk", # University of Gloucestershire
    "cheltenham-he.ac.uk", # Cheltenham and Gloucester College of Higher Education
    "chemicalbiology.ac.uk", #Imperial College of Science,  Technology and Medicine
    "chemreact.ac.uk", # University College London
    "chenel.ac.uk", #The College of Haringey,  Enfield and North East London
    "cheshirehe.ac.uk", # Macclesfield College
    "chest.ac.uk", # Eduserv
    "chester.ac.uk", # University of Chester
    "chesterfield.ac.uk", # Chesterfield College
    "chi-med.ac.uk", # University College London
    "chi.ac.uk", # University of Chichester
    "chichester.ac.uk", # Chichester College
    "chilbolton.ac.uk", # Science and Technology Facilities Council
    "chipcoll.ac.uk", # Wiltshire College
    "chippcoll.ac.uk", # Wiltshire College
    "chipscohort.ac.uk", # Medical Research Council
    "chiuni.ac.uk", # University of Chichester
    "chlamydia.ac.uk", # The UK Chlamydia Screening Study
    "chms.ac.uk", # Council of Heads of Medical Schools
    "chs.ac.uk", # Cornwall College
    "chugd.ac.uk", # The Committee of Heads of University Geoscience
    "chuls.ac.uk", # Committee of Head of University Law Schools
    "cia.ac.uk", # The University of Cumbria
    "cias.ac.uk", # University of Edinburgh
    "cib.ac.uk", # Cardionetics Institute of Bioinformatics- Aston University
    "cicl.ac.uk", # University of Wales- Swansea
    "cignet.ac.uk", # Cornwall College
    "ciota.ac.uk", # The University of Cumbria
    "cipel.ac.uk", # Coventry University
    "cirencester.ac.uk", # Cirencester College
    "cirre.ac.uk", # Research Enterprise Partnership
    "cisban.ac.uk", # University of Newcastle upon Tyne
    "citscapes.ac.uk", # C and IT Skills: Current Situations- Avenues of Possibility- Emerging Solutions
    "city-and-guilds.ac.uk", # The City & Guilds of London Institute
    "city-poly.ac.uk", # City University
    "city.ac.uk", # City University London
    "cityandguilds.ac.uk", # City and Guilds of London Institute
    "cityandguildsartschool.ac.uk", # City and Guilds of London Art School
    "citybathcoll.ac.uk", # City of Bath College
    "citycol.ac.uk", #City College,  Birmingham
    "citycollege.ac.uk", # The City College
    "citycollegebrighton.ac.uk", # Brighton City College
    "citycollegepeterborough.ac.uk", # Peterborough City Council
    "citycollegeplymouth.ac.uk", # City College Plymouth
    "citylit.ac.uk", # The Citylit
    "cityofbristol.ac.uk", # City of Bristol College
    "cityofglacol.ac.uk", # City of Glasgow College
    "cityofglasgowcollege.ac.uk", # City of Glasgow College
    "cityplym.ac.uk", # City College Plymouth
    "citysun.ac.uk", # City of Sunderland College
    "cityuniversitybirmingham.ac.uk", # Birmingham City University
    "cjsw.ac.uk", # Criminal Justice Social Work Development Centre for Scotland
    "ckeene.ac.uk", # Leicester College
    "clackmannan-college.ac.uk", # Clackmannan College of Further Education
    "clacks.ac.uk", # Clackmannan College
    "clad.ac.uk", # University of Stirling
    "classics.ac.uk", # University of Glasgow
    "clc-london.ac.uk", # City of London College
    "clearflo.ac.uk", # The University of Reading
    "cleveland.ac.uk", # Redcar and Cleveland College
    "clh.ac.uk", # University of London
    "clickandgovideo.ac.uk", # The University of Manchester
    "cliffcollege.ac.uk", # Cliff College
    "climatechangewales.ac.uk", # Aberystwyth University
    "clinicalnotes.ac.uk", # RSLP Clinical Notes Project
    "clinicalskillscentre.ac.uk", # City University London
    "cln.ac.uk", # Cornwall College
    "clp.ac.uk", # London Guildhall University
    "clrc.ac.uk", # Science and Technology Facilities Council
    "clt.ac.uk", # College of Teachers
    "cltad.ac.uk", # University of the Arts London
    "clydebank.ac.uk", # Clydebank College
    "cmcsm.ac.uk", # Centre for Mathematical and Computational Science in Medicine
    "cmpcp.ac.uk", # University of Cambridge
    "cms.ac.uk", # The Council for Mathematical Sciences
    "cnmd.ac.uk", # MRC Centre for Neuromuscular Diseases
    "cnwl.ac.uk", # College of North West London
    "co-op.ac.uk", # The Co-operative College
    "co-opcollege.ac.uk", # Co-operative College
    "co-operative.ac.uk", # Co-operative College
    "coatbridge.ac.uk", # Coatbridge College
    "cobra.ac.uk", # University of Abertay Dundee
    "coccfea.ac.uk", # University of Southampton
    "cochrane-airways.ac.uk", # St George's Hospital Medical School
    "cochrane.ac.uk", # UK Cochrane Centre
    "cockcroft.ac.uk", # Science and Technology Facilities Council
    "cocoman.ac.uk", # The British Library
    "cocorees.ac.uk", # Collaborative Collection Management for Russian & East European Studies
    "cod-health.ac.uk", # Council of Deans of Health
    "cods-nursing.ac.uk", # University of London
    "coem.ac.uk", # The College of Emergency Medicine
    "cof.ac.uk", # Birmingham College of Food - Tourism and Creative Studies
    "cogc.ac.uk", # City of Glasgow College
    "col-westanglia.ac.uk", # The College of West Anglia
    "col.ac.uk", # The Sheffield College
    "colch-inst.ac.uk", # Colchester Institute Enterprises Limited
    "colchester.ac.uk", # Colchester Institute Enterprises Limited
    "colchsfc.ac.uk", #The Sixth Form College,  Colchester
    "coleg-powys.ac.uk", # Coleg Powys
    "colegaucymru.ac.uk", # Colegau Cymru
    "colegcymraeg.ac.uk", # Y Coleg Cymraeg Cenedlaethol
    "colegelidyr.ac.uk", # Coleg Elidyr
    "coleggwent.ac.uk", # Coleg Gwent
    "colegmorgannwg.ac.uk", # Coleg Morgannwg
    "colegsirbenfro.ac.uk", # Pembrokeshire College
    "colegsirgar.ac.uk", # Coleg Sir Gar
    "college-falmouth.ac.uk", # Cornwall College
    "collegecareearlyed.ac.uk", # College of Care and Early Education
    "collegeconnections.ac.uk", # College Connections
    "collegeofosteopaths.ac.uk", # The College Of Osteopaths
    "collegeofteachers.ac.uk", # College of Teachers
    "collegesni.ac.uk", # Association of Northern Ireland Colleges
    "collegeswales.ac.uk", # Colegau Cymru
    "collemergencymed.ac.uk", # The College of Emergency Medicine
    "collyers.ac.uk", # The College of Richard Collyer
    "colpet.ac.uk", # College of Petrolium and Energy Studies
    "comm-coll-hackney.ac.uk", # Hackney Community College
    "commnet.ac.uk", # University of Edinburgh
    "competitionpolicy.ac.uk", # University of East Anglia
    "computing.ac.uk", # Engineering - Mathematics & Computing Hub
    "computingleeds.ac.uk", # School of Computing- University of Leeds
    "conel.ac.uk", # College of North East London
    "conform.ac.uk", # The University of Manchester
    "confuciusinstitute.ac.uk", # University of Edinburgh
    "connect.ac.uk", # The Higher Education Academy
    "conservatoiresuk.ac.uk", # Royal Welsh College of Music and Drama
    "consultants.ac.uk", # University of Oxford
    "copac.ac.uk", # The University of Manchester
    "copior.ac.uk", # University of Strathclyde
    "cops.ac.uk", # University of Sussex
    "copstat.ac.uk", # Committee of Professors of Statistics
    "cordwainers.ac.uk", # Cordwainers College
    "core.ac.uk", # University of St Andrews
    "cornell-brown-penn.ac.uk", # The Cornell-Brown-Penn United Kingdom Centre
    "cornwall-acl.ac.uk", # Cornwall Council
    "cornwall-vithform.ac.uk", # Cornwall College
    "cornwall.ac.uk", # Cornwall College
    "cosc.ac.uk", # City of Sunderland College
    "coseelis.ac.uk", # University of Glasgow
    "coshep.ac.uk", # Committee of Scottish Higher Education Principals
    "cospop.ac.uk", # Committee of the Scottish Professors of Physics
    "cot.ac.uk", # College of Teachers
    "coulsdon.ac.uk", # Coulsdon College
    "counsellingresearch.ac.uk", # University of Abertay Dundee
    "coup.ac.uk", # Procureweb
    "court21.ac.uk", # University of Leeds
    "courtauld.ac.uk", # Courtauld Institute of Art
    "cov.ac.uk", # Coventry University
    "covcollege.ac.uk", # City College Coventry
    "cove4careinkent.ac.uk", # South and West Kent College
    "coventry.ac.uk", # Coventry University
    "cowc.ac.uk", # City of Wolverhampton College
    "cowork.ac.uk", # Centre for Research & Policy in Disability
    "cpc.ac.uk", # University of Southampton
    "cpd25.ac.uk", # London School of Economics and Political Science
    "cpdnoticeboard.ac.uk", # Liverpool John Moores University
    "cphc.ac.uk", # Manchester Metropolitan University
    "cpib.ac.uk", # University of Nottingham
    "cppe.ac.uk", # The University of Manchester
    "cppr.ac.uk", # University of Glasgow
    "cptt.ac.uk", # Cumbria Primary Teacher Training
    "cral.ac.uk", # The Centre for Remote Access to Learning
    "cran.ac.uk", # Cranfield University
    "cranfield.ac.uk", # Cranfield University
    "crash.ac.uk", # St George's Hospital Medical School
    "craven-college.ac.uk", # Craven College
    "crawley-college.ac.uk", # Crawley College
    "creativity-cetl.ac.uk", # University of Sussex
    "creditlink-east.ac.uk", # Anglia Ruskin University
    "cresc.ac.uk", # The University of Manchester
    "crest.ac.uk", # GuildHE
    "crew.ac.uk", # The Macaulay Land Use Research Institute
    "crfr.ac.uk", # Centre for Research on Families & Relationships
    "cri.ac.uk", # The Conference of University Rectors in Ireland
    "cric.ac.uk", # The University of Manchester
    "cricbristol.ac.uk", # University of Bristol
    "crichton.ac.uk", # Crichton College of the Universities of Glasgow and Paisley
    "crick.ac.uk", # UK Centre for Medical Research & Innovation
    "cricklade.ac.uk", # Cricklade College
    "criticaltheology.ac.uk", # University of Nottingham
    "cronton.ac.uk", # Riverside College Halton
    "crontonsixthform.ac.uk", # Riverside College Halton
    "crontonsixthformcollege.ac.uk", # Riverside College Halton
    "cropyields.ac.uk", # The Queen's University of Belfast
    "cros.ac.uk", # CROS - Contract Research Online Survey
    "crossways.ac.uk", # Crossways Academy
    "croydon.ac.uk", # Croydon College
    "croydon6f.ac.uk", # Croydon College
    "croydonacl.ac.uk", # London Borough of Croydon
    "croydonhe.ac.uk", # Croydon College
    "croydonsec.ac.uk", # Croydon College
    "crsbi.ac.uk", # Corpus of Romanesque Sculpture in Britain & Ireland- King's College London
    "crsp.ac.uk", # Centre for Research in Social Policy
    "crucible-cetl.ac.uk", # Roehampton University
    "csc.ac.uk", # Consortium of Staffordshire Colleges
    "cscuk.ac.uk", # Association of Commonwealth Universities
    "csec.ac.uk", # Centre for Study of Early Christianity
    "cserge.ac.uk", # University of East Anglia
    "cshl.ac.uk", # Brunel University
    "csm.ac.uk", # The Manchester College
    "csmen.ac.uk", # Clinical Skills Managed Educational Network
    "csn-cetl.ac.uk", # City University London
    "cspacademy.ac.uk", # Safety Net Associates LTD
    "csrs.ac.uk", # University of Stirling
    "csrw.ac.uk", # University of Surrey
    "cssd.ac.uk", # The Central School of Speech and Drama
    "csu.ac.uk", # The University of Manchester
    "ct-toolkit.ac.uk", # Medical Research Council
    "ctc.ac.uk", # Cambridge Tutors Independent Sixth Form College
    "cthawards.ac.uk", # Confederation of Tourism and Hospitality
    "ctksfc.ac.uk", # Christ the King Sixth Form College
    "ctlondon.ac.uk", # College of Technology London
    "ctr-math-phys.ac.uk", # Centre for Mathematical Physics
    "cts.ac.uk", # University of Warwick
    "cttoolkit.ac.uk", # Medical Research Council
    "cuc.ac.uk", # University College Falmouth
    "cudah.ac.uk", # University of Westminster
    "cudassh.ac.uk", # University of Westminster
    "cudos.ac.uk", # University of Cambridge
    "cue.ac.uk", # Glasgow Caledonian University
    "cuhop.ac.uk", # The Council of University Heads of Pharmacy Schools
    "cukas.ac.uk", # UCAS Limited
    "culham.ac.uk", # The Culham Institute
    "cultiva.ac.uk", # Cultiva
    "cultureofthecountryside.ac.uk", # University of East Anglia
    "cumberlandlodge.ac.uk", # Cumberland Lodge
    "cumbernauld.ac.uk", # Cumbernauld College
    "cumbria.ac.uk", # The University of Cumbria
    "cumbriacad.ac.uk", # The University of Cumbria
    "cumbriahigherlearning.ac.uk", # The University of Cumbria
    "cunw.ac.uk", # Glyndwr University
    "cupid.ac.uk", # Procureweb
    "curdev-fe-ni.ac.uk", # Northern Regional College
    "curl.ac.uk", # Consortium of Research Libraries
    "cutg.ac.uk", # Conference of University Teachers of German in GB and Ireland
    "cuv.ac.uk", # Swansea University
    "cvcp.ac.uk", # Comittee of Vice-Chancellors and Principals
    "cvma.ac.uk", # The Corpus Vitrearum Medii Aevi- King's College London
    "cvr.ac.uk", # University of Glasgow
    "cvs.ac.uk", # University of Oxford - Curriculum Vitaes
    "cvu.ac.uk", # Edge Hill University
    "cwa.ac.uk", # The College of West Anglia
    "cwc.ac.uk", # City of Westminster College
    "cwcfe.ac.uk", # Charles Wootton College
    "cwrc.ac.uk", # Loughborough University
    "cxwms.ac.uk", # Charing Cross and Westminster Medical School
    "cyber-college.ac.uk", # Cyber College International
    "cymdeithasddysgedigcymru.ac.uk", # University of Wales
    "cymru.ac.uk", # University of Wales
    "dance-archives.ac.uk", # University of Surrey
    "dardcolleges.ac.uk", # Department of Agriculture & Rural Development
    "daresbury.ac.uk", # Daresbury Laboratory
    "darlington.ac.uk", # Darlington College
    "dartington.ac.uk", # University College Falmouth
    "darts.ac.uk", # Science and Technology Facilities Council
    "darwinproject.ac.uk", # University of Cambridge
    "dassh.ac.uk", # Natural Environment Research Council
    "data-archive.ac.uk", # University of Essex
    "datagrid.ac.uk", # Science and Technology Facilities Council
    "davcoll.ac.uk", # Northampton College
    "davidlewis.ac.uk", # The David Lewis Centre
    "dca.ac.uk", # University College Falmouth
    "dcc.ac.uk", # University of Edinburgh
    "dcd.ac.uk", # Doncaster Deaf Trust
    "dcdp.ac.uk", # Derby College for Deaf People
    "dct.ac.uk", # University of Abertay
    "de-montfort.ac.uk", # De Montfort University
    "deafandcreative.ac.uk", # University of Wolverhampton
    "deansofscience.ac.uk", # University of Lancaster
    "dearne-coll.ac.uk", # Dearne Valley College
    "debs.ac.uk", # De Montfort University
    "dec.ac.uk", # Doncaster College
    "deed.ac.uk", # DEED Project
    "deeping.ac.uk", # Boston College
    "deeside.ac.uk", # Deeside College
    "defac.ac.uk", # Defence Academy of the United Kingdom
    "defenceacademy.ac.uk", # Defence Academy of the United Kingdom
    "demarco-archive.ac.uk", # University of Dundee
    "dementianet.ac.uk", # University of Stirling
    "demos.ac.uk", # Manchester Metropolitan University
    "dentalschoolscouncil.ac.uk", # The Dental Schools Council (DSC)
    "dentpostgradwales.ac.uk", # Cardiff University
    "derby-college.ac.uk", # Derby College
    "derby.ac.uk", # University of Derby
    "derbyals.ac.uk", # Derby City Council
    "derbycollege.ac.uk", # Derby College
    "derbyonline.ac.uk", # University of Derby
    "derbyshire.ac.uk", # University of Derby
    "derc.ac.uk", # British Educational Research Association
    "derweb.ac.uk", # Dental Education Resources on the Web
    "derwen.ac.uk", # Derwen College
    "derwencollege.ac.uk", # Derwen College
    "derwentside.ac.uk", # Derwentside College
    "desimax.ac.uk", # University of Nottingham
    "devolution.ac.uk", # Economic and Social Research Council
    "dewcol.ac.uk", # Dewsbury College
    "dewsbury.ac.uk", # Dewsbury College
    "diabetes-healthnet.ac.uk", # The Tayside Regional Diabetes Network
    "diamm.ac.uk", # Digital Image Archive of Medieval Music
    "diamond.ac.uk", # Diamond Light Source Ltd
    "diasporas.ac.uk", # University of Leeds
    "didet.ac.uk", # University of Strathclyde
    "dietandhealth.ac.uk", # Biotechnology and Biological Sciences Research Council
    "digimap.ac.uk", # EDINA Digimap National Online Mapping and Data Service
    "digitalsocialresearch.ac.uk", # University of Oxford
    "dilstoncollege.ac.uk", # Royal Mencap Society
    "dippam.ac.uk", # The Queen's University of Belfast
    "disability.ac.uk", # St George's Hospital Medical School
    "disabilitytoolkits.ac.uk", # The Careers Service
    "discover.ac.uk", # The Intute Consortium
    "discovery.ac.uk", # The University of Manchester
    "disinhe.ac.uk", # DIS in HE Support Centre
    "displaymasters.ac.uk", # Display Technology Masters Course
    "distillate.ac.uk", # University of Leeds
    "distinct.ac.uk", # Oxford Brookes University
    "diversity.ac.uk", # London Metropolitan University
    "diversityuk.ac.uk", # The University of Manchester
    "dl.ac.uk", # Science and Technology Facilities Council
    "dl4d.ac.uk", # Birkbeck College
    "dlhe.ac.uk", # Higher Education Statistics Agency Limited
    "dls.ac.uk", # CLRC
    "dml.ac.uk", # Dunstaffnage Marine Laboratory
    "dmu.ac.uk", # De Montfort University
    "dna-network.ac.uk", # Medical Research Council
    "dna.ac.uk", # Science and Technology Facilities Council
    "dner.ac.uk", # University of Bath
    "docusend.ac.uk", # The Docusend Project
    "dogslife.ac.uk", # University of Edinburgh
    "doitpoms.ac.uk", # University of Cambridge
    "don.ac.uk", # Doncaster College
    "doncaster.ac.uk", # Doncaster College
    "dorset-acl.ac.uk", # Dorset County Council
    "dorset-al.ac.uk", # Dorset County Council
    "dotrural.ac.uk", # University of Aberdeen
    "dpscitt.ac.uk", # Devon Primary School-Centred Initial Teacher Training
    "dragonip.ac.uk", # Swansea University
    "drama.ac.uk", # UK Conference of Drama Schools
    "drawnevidence.ac.uk", # The Drawn Evidence Project
    "drindod.ac.uk", # University of Wales Trinity Saint David
    "dsfc.ac.uk", # TQ Education & Training Ltd
    "dsl.ac.uk", # University of Dundee
    "dsw.ac.uk", # Bournemouth University
    "dt-toolkit.ac.uk", # Medical Research Council
    "dtc-online.ac.uk", # Northampton College
    "duchy.ac.uk", # Cornwall College
    "dudley.ac.uk", # Dudley College
    "dudleycol.ac.uk", # Dudley College
    "dudleylearners.ac.uk", # Dudley College
    "dudleylearning.ac.uk", # Dudley College
    "dumgal.ac.uk", # Dumfries & Galloway College
    "dund.ac.uk", # University of Dundee
    "dundee-tech.ac.uk", # University of Abertay Dundee
    "dundee.ac.uk", # University of Dundee
    "dundeecoll.ac.uk", # Dundee College
    "dundeecollege.ac.uk", # Dundee College
    "dunstable.ac.uk", # Central Bedfordshire College
    "dunstaffnage-marine-lab.ac.uk", # Dunstaffnage Marine Laboratory
    "dur.ac.uk", # University of Durham
    "durham.ac.uk", # University of Durham
    "dutch.ac.uk", # University College London
    "e-c-a.ac.uk", # Educational Centres Association
    "e-htpx.ac.uk", # Science and Technology Facilities Council
    "e-learningnorthwest.ac.uk", # The University of Manchester
    "e-learningresearch.ac.uk", # The University of Manchester
    "e-liv.ac.uk", # The University of Liverpool
    "e-merlin.ac.uk", # Science and Technology Facilities Council
    "e-science.ac.uk", # Science and Technology Facilities Council
    "e-scrf.ac.uk", # E-supply Chain Research Forum
    "e-studio.ac.uk", # University of Wolverhampton
    "e3an.ac.uk", # Electrical and Electronic Engineering Assessment Network
    "eaifhe.ac.uk", # Northern Regional College
    "ealingcoll.ac.uk", # Ealing Tertiary College
    "eandc-sirgar.ac.uk", # Coleg Sir Gar
    "earlyenglishlaws.ac.uk", # King's College London
    "earlymoderndressandtextiles.ac.uk", #Queen Mary and Westfield College,  University of London
    "ease.ac.uk", # University of Warwick
    "easeit-eng.ac.uk", # TLTP3 EASSEIT-Eng Project
    "easih.ac.uk", # University of Cambridge
    "east-anglia.ac.uk", # University of East Anglia
    "east-london.ac.uk", # University of East London
    "east-yorks-coll.ac.uk", # East Yorkshire College
    "east15.ac.uk", # University of Essex
    "eastantrim-institute.ac.uk", # East Antrim Institute of F&HE
    "eastberks.ac.uk", # East Berkshire College
    "eastchem.ac.uk", # University of Edinburgh
    "eastdevon.ac.uk", # Petroc College
    "eastdurham.ac.uk", # East Durham College
    "eastleigh.ac.uk", # Eastleigh College
    "eastmallingresearch.ac.uk", # East Malling Research
    "eastmidlandscetls.ac.uk", # Loughborough University
    "eastnorfolk.ac.uk", # East Norfolk Sixth Form College
    "easton-college.ac.uk", # Easton College
    "easton.ac.uk", # Easton College
    "eastridingadultlearn.ac.uk", # East Riding of Yorkshire Council
    "eastridingcollege.ac.uk", # East Riding College
    "eastsurreycollege.ac.uk", # East Surrey College
    "ebam.ac.uk", # Bournemouth University
    "ebi.ac.uk", # European Bioinformatics Institute
    "ebrc.ac.uk", # Biotechnology and Biological Sciences Research Council
    "ebs.ac.uk", # Regent's College
    "ebsl.ac.uk", # Regent's College
    "ebslondon.ac.uk", # Regent's College
    "eca.ac.uk", # The Edinburgh College of Art
    "ecampus-leeds.ac.uk", # Electronic Campus Initiative- Leeds University
    "ecc.ac.uk", # Educational Competences Consortium (ECC) Ltd
    "ecci.ac.uk", # St George's Hospital Medical School
    "ecclescollege.ac.uk", # Salford City College
    "ecdc.ac.uk", # Goldsmiths' College
    "eclw.ac.uk", # Royal Veterinary College
    "ecn.ac.uk", # Environmental Change Network Project
    "economics.ac.uk", # London School of Economics
    "economicsnetwork.ac.uk", # University of Bristol
    "ecosystemservices.ac.uk", # University of Nottingham
    "ecsa.ac.uk", # University of Stirling
    "ecu.ac.uk", # Equality Challenge Unit
    "ecw.ac.uk", # Natural Environment Research Council
    "ed-coll.ac.uk", # Edinburgh's Telford College
    "ed.ac.uk", # University of Edinburgh
    "ed6.ac.uk", # East Durham College
    "edc.ac.uk", # Petroc College
    "edge-hill-college.ac.uk", # Edge Hill University College
    "edgehill.ac.uk", # Edge Hill University
    "edgehilluniversity.ac.uk", # Edge Hill University
    "edgehotelschool.ac.uk", # University of Essex
    "edhcc.ac.uk", # East Durham College
    "edifhe.ac.uk", # South Eastern Regional College
    "edina.ac.uk", # University of Edinburgh
    "edinburgh.ac.uk", # University of Edinburgh
    "edinburghstelford.ac.uk", # Edinburgh's Telford College
    "edinburghstelfordcollege.ac.uk", # Edinburgh's Telford College
    "edinburghtc.ac.uk", # Edinburgh's Telford College
    "edlab.ac.uk", # The JNT Association
    "edres.ac.uk", # National Foundation for Educational Research
    "edtech.ac.uk", # London Business School
    "educationlondonconnect.ac.uk", # College of North West London
    "eduroam.ac.uk", # The JNT Association
    "eduserv.ac.uk", # Eduserv
    "edward-greene.ac.uk", # Edward Greene's Tutorial Establishment
    "edwardllwyd.ac.uk", # Centre for Welsh Medium Higher Education
    "eep.ac.uk", #Institute of Education,  University of London
    "eera.ac.uk", # European Educational Research Association
    "ees.ac.uk", # Egypt Exploration Society
    "eevl.ac.uk", # Edinburgh Engineering Virtual Library
    "eevlextra.ac.uk", # Heriot-Watt University
    "eevlxtra.ac.uk", # Heriot-Watt University
    "efc.ac.uk", # Epping Forest College
    "efetedc.ac.uk", # University of Nottingham
    "efs.ac.uk", # University of Warwick
    "efutures.ac.uk", # University of Newcastle upon Tyne
    "ehche.ac.uk", # Edge Hill University College
    "ehu.ac.uk", # Edge Hill University
    "eius.ac.uk", # University of Oxford
    "eklearning.ac.uk", # Partnerships with Purpose
    "elanguages.ac.uk", # University of Southampton
    "elatt.ac.uk", # East London Advanced Technology Training
    "elc.ac.uk", # King's College London
    "elder-cove.ac.uk", # Tameside College
    "elearning.ac.uk", # Bolton Institute of Higher Education
    "elearningnortheast.ac.uk", # North East e-Learning Foundation
    "elearningresearch.ac.uk", # The University of Manchester
    "elib.ac.uk", # University of Warwick
    "elihe.ac.uk", # Blackburn College
    "elite.ac.uk", # English Landbased Institute of Training & Education
    "elizabethmontagunetwork.ac.uk", # Swansea University
    "elmwood.ac.uk", # Elmwood College
    "elne.ac.uk", # North East e-Learning Foundation
    "elp.ac.uk", # Joint Information Systems Committee
    "elrah.ac.uk", # Edinburgh Napier University
    "elrc.ac.uk", # The University of Manchester
    "elsa.ac.uk", # John Innes Centre
    "elt.ac.uk", # University of Plymouth
    "elvis.ac.uk", # South Eastern Regional College
    "elwa.ac.uk", # Welsh Assembly Government
    "em-toolkit.ac.uk", # Medical Research Council
    "emas.ac.uk", # European Microbeam Analysis Society
    "embl-ebi.ac.uk", # European Bioinformatics Institute
    "emc.ac.uk", # Engineering - Mathematics and Computing Hub
    "eme.ac.uk", # University of Southampton
    "emgrad.ac.uk", # Nottingham Trent University
    "emie.ac.uk", # National Foundation for Educational Research
    "emo-pain.ac.uk", # University College London
    "emol.ac.uk", # Education Media OnLine
    "emp.ac.uk", # University of Bath
    "emr.ac.uk", # East Malling Research
    "ems.ac.uk", # Heriot-Watt University
    "emua.ac.uk", # Local Government East Midlands
    "enfield.ac.uk", # Enfield College
    "engage.ac.uk", # University of Southampton
    "engageinresearch.ac.uk", # The University of Reading
    "engageni.ac.uk", # Queen's University Belfast
    "engcetl.ac.uk", # Loughborough University
    "engineering.ac.uk", # Engineering - Mathematics and Computing Hub
    "engineeringsigns.ac.uk", # University of Wolverhampton
    "englishassociation.ac.uk", # University of Leicester
    "engsc.ac.uk", # Loughborough University
    "enhancementthemes.ac.uk", # The Quality Assurance Agency for Higher Education
    "enniskillen.ac.uk", # Department of Agriculture and Rural Development
    "enorf.ac.uk", # East Norfolk Sixth Form College
    "enos.ac.uk", # University of Nottingham
    "ensemble.ac.uk", # University of Cambridge
    "ensfc.ac.uk", # East Norfolk Sixth Form College
    "enterprise.ac.uk", # Enterprise Educators UK
    "environment-health.ac.uk", # King's College London
    "epc.ac.uk", # University of Surrey
    "epic.ac.uk", # European Political-Economy Infrastructure Consortium
    "epics.ac.uk", # University of Newcastle upon Tyne
    "epicure.ac.uk", # University of Nottingham
    "eportfolios.ac.uk", # University of Newcastle upon Tyne
    "eppi.ac.uk", # University of Southampton
    "epping-forest.ac.uk", # Epping Forest College
    "epress.ac.uk", # University of Surrey
    "eps.ac.uk", # University of Bristol
    "epsrc-centre-lime.ac.uk", # Brunel University
    "epsrc-test.ac.uk", # Engineering & Physical Sciences Research Council
    "epsrc.ac.uk", # The Engineering and Physical Sciences Research Council
    "equal.ac.uk", # The EPSRC's EQUAL Initiative
    "equalityhigher.ac.uk", # Equality Challenge Unit
    "equator.ac.uk", # University of Nottingham
    "equistudy.ac.uk", #Warwickshire College,  Royal Leamington Spa,  Rugby and Moreton Morrell
    "erasmus.ac.uk", # Socrates-Erasmus Programme- University of Kent
    "erc.ac.uk", # East Riding College
    "eres.ac.uk", # The Open University
    "eresearchsouth.ac.uk", # University of Oxford
    "eri.ac.uk", # The North Highland College
    "erini.ac.uk", # Economic Research Institute of Northern Ireland
    "erp.ac.uk", # Heriot-Watt University
    "esala.ac.uk", # University of Edinburgh
    "esc.ac.uk", # East Surrey College
    "escalate.ac.uk", # The Higher Education Academy
    "escience-etf.ac.uk", # University of Oxford
    "escience.ac.uk", # Science and Technology Facilities Council
    "escp-eap.ac.uk", # ESCP-EAP European School of Management
    "esds.ac.uk", # University of Essex
    "eselondon.ac.uk", # European School of Economics International Ltd
    "esg.ac.uk", # The Institute for Fiscal Studies
    "eshcru.ac.uk", # University of Kent
    "esher.ac.uk", # Esher College
    "esi.ac.uk", # University of Edinburgh
    "esiss.ac.uk", # Loughborough University
    "esnw.ac.uk", # E-Science North West
    "eso.ac.uk", # European School of Osteopathy
    "espa.ac.uk", # University of Edinburgh
    "esrc.ac.uk", # Economic and Social Research Council
    "esrcfestival.ac.uk", # Natural Environment Research Council
    "esrcsocietytoday.ac.uk", # Economic and Social Research Council
    "essex.ac.uk", # University of Essex
    "essexacl.ac.uk", # Essex County Council
    "etc.ac.uk", # Ealing Tertiary College
    "etcfhe.ac.uk", # South West College
    "ethicsguidebook.ac.uk", #Institute of Education,  University of London
    "ethos.ac.uk", #Imperial College of Science,  Technology and Medicine
    "etp-scotland.ac.uk", # University of Strathclyde
    "eurobrox.ac.uk", # Broxtowe College
    "euromtec.ac.uk", # EURO MTEC
    "europeunit.ac.uk", # Hero
    "everymantheatrearchive.ac.uk", # Liverpool John Moores University
    "evesham.ac.uk", # South Worcestershire College
    "ewlc.ac.uk", # Ealing & West London College
    "ewrs.ac.uk", # European Weed Research Society
    "ex.ac.uk", # University of Exeter
    "exam-ta.ac.uk", # Examination Technique Academy
    "excellence.ac.uk", # The Centre of Excellence Group
    "exchange.ac.uk", # The Higher Education Academy
    "exe-coll.ac.uk", # Exeter College
    "exeter.ac.uk", # University of Exeter
    "exetercollege.ac.uk", # Exeter College
    "exeterdeafacademy.ac.uk", # Exeter Royal Academy for Deaf Education
    "experienceworks.ac.uk", # University of Newcastle upon Tyne Careers Service
    "experts.ac.uk", # University of Oxford
    "f-boro-sfc.ac.uk", # Farnborough Sixth Form College
    "faam.ac.uk", # Natural Environment Research Council
    "face3d.ac.uk", # University of Glasgow
    "facilities.ac.uk", # The Facilities Society
    "faclair.ac.uk", # Dictionary of the Scottish Gaelic Language
    "facoccmed.ac.uk", # Faculty of Occupational Medicine
    "failte.ac.uk", # FAILTE - JISC funded project
    "fairfieldfarmcollege.ac.uk", # Fairfield Opportunity Farm (Dilton) Ltd
    "fairfieldopportunityfarm.ac.uk", # Fairfield Opportunity Farm (Dilton) Ltd
    "falkirkcollege.ac.uk", # Falkirk College
    "falmouth.ac.uk", # University College Falmouth
    "falmouthmarineschool.ac.uk", # Cornwall College
    "familylifestudy.ac.uk", #Institute of Education,  University of London
    "famous.ac.uk", #FAMOUS project,  Meteorology department
    "fareham.ac.uk", # Fareham College
    "farmington.ac.uk", # Farmington Institute
    "farmplus.ac.uk", # The Barony College
    "farn-ct.ac.uk", # Farnborough College of Technology
    "farnborough.ac.uk", #The Sixth Form College,  Farnborough
    "farnboroughcollege.ac.uk", # Farnborough College of Technology
    "farnboroughsfc.ac.uk", #The Sixth Form College,  Farnborough
    "farnboroughsfc2.ac.uk", #The Sixth Form College,  Farnborough
    "farnham.ac.uk", # Guildford College of Further and Higher Education
    "fashioningtheearlymodern.ac.uk", #Queen Mary and Westfield College,  University of London
    "fashionretail.ac.uk", # Fashion Retail Academy
    "fashionretailacademy.ac.uk", # Fashion Retail Academy
    "fault-analysis-group.ac.uk", # University of Liverpool
    "fba.ac.uk", # Freshwater Biological Association
    "fca.ac.uk", # Falmouth College of Arts
    "fcot.ac.uk", # Farnborough College of Technology
    "fcrt.ac.uk", # Fortune Centre of Riding Therapy
    "fdf.ac.uk", # Staffordshire University
    "fdgm.ac.uk", # Aimhigher Greater Merseyside
    "fdtl.ac.uk", # University of Southampton
    "feda.ac.uk", # Learning and Skills Development Agency
    "federalschool.ac.uk", # Manchester Federal School of Business & Management
    "federalsurrey.ac.uk", # Roehampton University
    "fefc.ac.uk", # Further Education Funding Council
    "felp.ac.uk", # Procureweb
    "fermanaghcoll.ac.uk", # South West College
    "fetalmedicine.ac.uk", # Fetal Medicine Unit
    "fflm.ac.uk", # Royal College of Physicians of London
    "fforwm.ac.uk", # FFORWM
    "fgls.ac.uk", # University of Bristol
    "fibre-diffraction.ac.uk", # Science and Technology Facilities Council
    "ficm.ac.uk", # The Royal College of Anaesthetists
    "fife.ac.uk", #The Adam Smith College,  Fife
    "fifeglen.ac.uk", # Glenrothes College
    "filmandsound.ac.uk", # University of Edinburgh
    "filt-coll.ac.uk", # Filton College
    "filter.ac.uk", # FILTER Image Database Project
    "filton-college.ac.uk", # Filton College
    "filton.ac.uk", # Filton College
    "finder.ac.uk", # Science and Technology Facilities Council
    "fineart.ac.uk", # University for the Creative Arts
    "finesse.ac.uk", # University of St Andrews
    "fipc.ac.uk", # Forest Independent Primary Collegiate
    "fircroft.ac.uk", # Fircroft College
    "fireservicecollege.ac.uk", # Fire Service College
    "fiscalstudies.ac.uk", # The Institute for Fiscal Studies
    "fkse.ac.uk", # Frances King School of English
    "flame.ac.uk", # University of Sheffield
    "focus.ac.uk", # University of Portsmouth
    "foodsecurity.ac.uk", # Biotechnology and Biological Sciences Research Council
    "fordcollege.ac.uk", # Ford College
    "forestsixth.ac.uk", # Royal Forest of Dean College
    "forestyouth.ac.uk", # Royal Forest of Dean College
    "formis.ac.uk", # Forum for MIS Directors
    "forster.ac.uk", # Forster Community College
    "forthvalley.ac.uk", # Falkirk College of Further & Higher Education
    "fortunecentre.ac.uk", # Fortune Centre of Riding Therapy
    "foxesacademy.ac.uk", # Foxes Academy
    "franciscans.ac.uk", # Franciscan International Study Centre
    "franciscrick.ac.uk", # UK Centre for Medical Research & Innovation
    "franciscrickinstitute.ac.uk", # UK Centre for Medical Research & Innovation
    "franklin.ac.uk", # Franklin Sixth Form College
    "freeman-centre.ac.uk", # University of Sussex
    "freescotcoll.ac.uk", # Free Church of Scotland College
    "freezeframe.ac.uk", # University of Cambridge
    "frenchhistorysociety.ac.uk", # The Society for the Study of French History
    "frontier.ac.uk", # The Society for Environmental Exploration
    "frontierprojects.ac.uk", # The Society for Environmental Exploration
    "fsem.ac.uk", # Royal College of Surgeons of Edinburgh
    "fulcrum.ac.uk", # University of Leeds
    "furness.ac.uk", # Furness College
    "fuse.ac.uk", # University of Durham
    "fusion.ac.uk", # United Kingdom Atomic Energy Authority
    "future-media.ac.uk", # London Business School
    "futuremedia.ac.uk", # London Business School
    "futuretrack.ac.uk", # Higher Education Careers Service Unit
    "fv-distribution-database.ac.uk", # University of Sunderland
    "galt.ac.uk", # Glasgow Academic Libraries Together
    "gashe.ac.uk", # Gateway to Archives in Scottish Higher Education
    "gate.ac.uk", # University of Sheffield
    "gateshead.ac.uk", # Gateshead College
    "gatesheadcollege.ac.uk", # Gateshead College
    "gateway.ac.uk", #Gateway Sixth Form College,  Leicestershire
    "gcadt.ac.uk", # Coleg Morgannwg
    "gcal.ac.uk", # Glasgow Caledonian University
    "gcbp.ac.uk", # City of Glasgow College
    "gcc.ac.uk", # Greenwich Community College
    "gcft-gla.ac.uk", # Glasgow College of Food Technology
    "gcft.ac.uk", # City of Glasgow College
    "gcg.ac.uk", # Glasgow Colleges Group
    "gci.ac.uk", # Gray Laboratory Cancer Research Trust
    "gclg.ac.uk", # Cardonald College
    "gcns.ac.uk", # City of Glasgow College
    "gcs.ac.uk", # Gower College Swansea
    "gculondon.ac.uk", # Glasgow Caledonian University
    "gda.ac.uk", # Science and Technology Facilities Council
    "gecko.ac.uk", # University of Sussex
    "gees.ac.uk", # The Higher Education Academy
    "gem.ac.uk", # Procureweb
    "genesis.ac.uk", # The Genesis Project- London Guildhall University
    "genesys.ac.uk", # University of Edinburgh
    "genet.ac.uk", # University of Cambridge
    "genie.ac.uk", # University of Southampton
    "genomeanalysiscentre.ac.uk", # Biotechnology and Biological Sciences Research Council
    "genomicsforum.ac.uk", # Economic and Social Research Council
    "genomicsnetwork.ac.uk", # Economic and Social Research Council
    "george-monoux.ac.uk", # Sir George Monoux College
    "geoxwalk.ac.uk", # University of Edinburgh
    "gesource.ac.uk", # Resource Discovery Network
    "ghil.ac.uk", # German Historical Institute London
    "gimsig.ac.uk", # British Academy of Management Ltd
    "gla.ac.uk", # University of Glasgow
    "glaadh.ac.uk", # University of Sussex
    "glam.ac.uk", # University of Glamorgan
    "glammies.ac.uk", # Coleg Morgannwg
    "glamorgan.ac.uk", # University of Glamorgan
    "glan-hafren.ac.uk", # Coleg Glan Hafren
    "glasgow-caledonian.ac.uk", # Glasgow Caledonian University
    "glasgow-nautical.ac.uk", # City of Glasgow College
    "glasgow.ac.uk", # University of Glasgow
    "glasgowcolleges.ac.uk", # Glasgow Colleges Group
    "glasgowmet.ac.uk", # City of Glasgow College
    "glasgowschoolofart.ac.uk", # Glasgow School of Art
    "glen-coll.ac.uk", # Glenrothes College
    "glenfife.ac.uk", # Glenrothes College
    "glenrothes-college.ac.uk", # Glenrothes College
    "glenrothes.ac.uk", #The Adam Smith College,  Fife
    "glos.ac.uk", # University of Gloucestershire
    "gloscat.ac.uk", # Gloucestershire College of Arts and Technology
    "gloscol.ac.uk", # Gloucestershire College of Arts and Technology
    "gloscollege.ac.uk", # Gloucestershire College of Arts and Technology
    "glosnexus.ac.uk", # Gloucestershire College of Arts and Technology
    "gloucestershire.ac.uk", # University of Gloucestershire
    "gloucestershirecollege.ac.uk", # Gloucestershire College of Arts and Technology
    "gloucestershirecolleges.ac.uk", # The Federation of Gloucestershire Colleges
    "gloucestershirelaunchpad.ac.uk", # Gloucestershire College of Arts and Technology
    "gloucs.ac.uk", # University of Gloucestershire
    "glow.ac.uk", # The University of Manchester
    "gltc.ac.uk", # Generic Learning & Teaching Centre
    "glyndwr.ac.uk", # Glyndwr University
    "gmc.ac.uk", # City of Glasgow College
    "gmp.ac.uk", # Higher Education Funding Council for England
    "gmsa.ac.uk", # Manchester Metropolitan University
    "go4uni.ac.uk", # South Yorkshire Widening Participation Partnership
    "goals.ac.uk", # Glasgow Caledonian University
    "godalming.ac.uk", # Godalming College
    "gogeo.ac.uk", # University of Edinburgh
    "gold.ac.uk", # Goldsmiths' College
    "goldproject.ac.uk", # University of Newcastle upon Tyne
    "goldsmiths.ac.uk", # Goldsmiths' College
    "goodenough.ac.uk", # Goodenough College
    "gorseinon-bizcentre.ac.uk", # Gorseinon Business Centre
    "gorseinon.ac.uk", # Gower College Swansea
    "gosc.ac.uk", # Science and Technology Facilities Council
    "gosport.ac.uk", # Fareham College
    "gosportmarineskillscentre.ac.uk", # St Vincent College
    "gower.ac.uk", # Gower College Swansea
    "gowercollege.ac.uk", # Gower College Swansea
    "gowercollegeswansea.ac.uk", # Gower College Swansea
	"gpkss.ac.uk", # South East Coast Strategic Health Authority
	"grace.ac.uk", # University of Nottingham
	"grad.ac.uk", # The Engineering and Physical Sciences Research Council
	"gradcareers-scotland.ac.uk", # Graduate Careers E-Mail Service
	"gradschools.ac.uk", # Natural Environment Research Council
	"gradsouthwest.ac.uk", # University of Plymouth
	"graduate-careers-wales.ac.uk", #University of Wales,  Swansea
	"graduate-jobs-in-wales.ac.uk", #University of Wales,  Swansea
	"graduate-jobs.ac.uk", #University of Wales,  Swansea
	"graduatecareers-wales.ac.uk", #University of Wales,  Swansea
	"graduateconnection.ac.uk", # West Midlands Graduate Connection Consortium
	"graduateswales.ac.uk", #University of Wales,  Swansea
	"graduatewales.ac.uk", #University of Wales,  Swansea
	"grantham.ac.uk", # Grantham College
	"grantleyhall.ac.uk", # Grantley Hall College
	"graphenecentre.ac.uk", # University of Exeter
	"gray.ac.uk", # Gray Laboratory Cancer Research Trust
	"graylab.ac.uk", # CRC Gray Laboratories
	"gre.ac.uk", # University of Greenwich
	"greatwesternresearch.ac.uk", # University of Exeter
	"greenhead.ac.uk", # Greenhead College
	"greenhill.ac.uk", # Harrow College
	"greenmount.ac.uk", # Department of Agriculture and Rural Development
	"greenwich-college.ac.uk", # Greenwich College
	"greenwich.ac.uk", # University of Greenwich
	"gregynog.ac.uk", # University of Wales
	"gresham-college.ac.uk", # Gresham College
	"gresham.ac.uk", # Gresham College
	"greshamcollege.ac.uk", # Gresham College
	"grid-support.ac.uk", # Science and Technology Facilities Council
	"grid.ac.uk", # Science and Technology Facilities Council
	"gridpp.ac.uk", # The University of Manchester
	"grids.ac.uk", # Science and Technology Facilities Council
	"grimsby.ac.uk", # Grimsby Institute of Further and Higher Education
	"grpeng.ac.uk", # University of Glasgow
	"gsa.ac.uk", # Glasgow School of Art
	"gsmd.ac.uk", # Guildhall School of Music and Drama
	"gssw.ac.uk", # University of Strathclyde
	"gtc.ac.uk", # The General Teaching Council
	"gttr.ac.uk", # The Graduate Teacher Training Registry
	"gtyarmouthcoll.ac.uk", # Great Yarmouth College
	"guildford.ac.uk", # Guildford College of Further and Higher Education
	"guildhe.ac.uk", # GuildHE
	"gwent-tertiary.ac.uk", # Coleg Gwent
	"gwent.ac.uk", #University of Wales,  Newport
	"gwr.ac.uk", # University of Exeter
	"gyc.ac.uk", # Great Yarmouth College
	"hackney.ac.uk", # Hackney Community College
	"hadlow.ac.uk", # Hadlow College
	"hae-acl.ac.uk", # London Borough of Hillingdon Council
	"hairdressing.ac.uk", # The University of Manchester
	"halcyon.ac.uk", # Medical Research Council
	"halesowen.ac.uk", # Halesowen College
	"halton-acl.ac.uk", # Halton Borough Council
	"haltoncollege.ac.uk", # Riverside College Halton
	"hampshiresfc.ac.uk", # Group of Hampshire Sixth Form Colleges
	"hampsteadscience.ac.uk", # Hampstead Science Society
	"handsworth.ac.uk", # Handsworth College
	"hannah.ac.uk", # Hannah Research Institute
	"haringey6.ac.uk", # Haringey Sixth Form Centre
	"harlaxton.ac.uk", # Harlaxton College
	"harlech.ac.uk", # Coleg Harlech Workers' Educational Association
	"harlow-college.ac.uk", # Harlow College
	"harper-adams.ac.uk", # Harper Adams University College
	"harper.ac.uk", # Harper Adams University College
	"harrogate-college.ac.uk", # Hull College
	"harrogate.ac.uk", # Hull College
	"harrow.ac.uk", # Harrow College
	"hartlepoolacademy.ac.uk", # Hartlepool Sixth Form College
	"hartlepoolacl.ac.uk", # Hartlepool Borough Council
	"hartlepoolfe.ac.uk", # Hartlepool College of Further Education
	"hartpury.ac.uk", # Hartpury College
	"hartree.ac.uk", # Daresbury Laboratory
	"hastings.ac.uk", #Sussex Coast College,  Hastings
	"hastingsonline.ac.uk", #Sussex Coast College,  Hastings
	"hava.ac.uk", # University of Portsmouth
	"havant.ac.uk", # Havant College
	"havering-college.ac.uk", # Havering College of Further and Higher Education
	"havering-sfc.ac.uk", # Havering Sixth Form College
	"havering.ac.uk", # Havering College of Further and Higher Education
	"hawthornenglish.ac.uk", # Edinburgh School of English
	"hayle.ac.uk", # Penwith College
	"hca.ac.uk", # Hereford College of Arts
	"hcctraining.ac.uk", # Hull City Council
	"hcebusiness.ac.uk", # Halesowen College- E-Commerce and Business Centre
	"hclrg.ac.uk", # Higher Education Colleges Learning Resources
	"hcri.ac.uk", # The University of Manchester
	"hct.ac.uk", # Herefordshire College of Technology
	"he-purchasing.ac.uk", # Heriot-Watt University
	"heacademy.ac.uk", # The Higher Education Academy
	"heacf-awards.ac.uk", # The Careers Research and Advisory Centre (CRAC) Ltd
	"headline.ac.uk", # London School of Economics and Political Science
	"headteachers.ac.uk", # The DfEE Project
	"health-homerton.ac.uk", # Anglia Ruskin University
	"health.ac.uk", # University of Newcastle upon Tyne
	"healthcare.ac.uk", # St George's Hospital Medical School
	"healtheducation.ac.uk", # University of Newcastle upon Tyne
	"healthyuniversities.ac.uk", # University of Central Lancashire
	"heated.ac.uk", # Institute of Science & Technology
	"hebcon.ac.uk", #Imperial College of Science,  Technology and Medicine
	"hebetterregulation.ac.uk", # Higher Education Better Regulation Group
	"hecsu.ac.uk", # Higher Education Careers Service Unit
	"hector.ac.uk", # University of Edinburgh
	"hedata.ac.uk", # Higher Education Funding Council for England
	"hedd.ac.uk", # Higher Education Funding Council for England
	"hedg.ac.uk", # Association of Commonwealth Universities
	"heefs.ac.uk", # Liverpool John Moores University
	"heeg.ac.uk", # University of Surrey
	"heeon.ac.uk", # Higher Education Equal Opportunities Network
	"heep.ac.uk", # University of Salford
	"heera.ac.uk", # Higher Education External Relations Association
	"heesf.ac.uk", # HE ESF Services Ltd.
	"heestates.ac.uk", # Higher Education Funding Council for England
	"hefce.ac.uk", # Higher Education Funding Council for England
	"hefcw.ac.uk", # Higher Education Funding Council for Wales
	"hegovernance.ac.uk", # Leadership Foundation for Higher Education
	"heia.ac.uk", # Stratford-upon-Avon College
	"heidi.ac.uk", # Higher Education Statistics Agency Limited
	"heids.ac.uk", # Higher Education Information Directors Scotland
	"hekam.ac.uk", # University for the Creative Arts
	"helf.ac.uk", # University of Wolverhampton
	"heloa.ac.uk", # Higher Education Liaison Officers Association
	"help-cetl.ac.uk", # University of Plymouth
	"hendon.ac.uk", # Hendon College
	"henley-cov.ac.uk", # Henley College Coventry
	"henleycol.ac.uk", # The Henley College
	"henleycollege.ac.uk", # The Henley College
	"henleymc.ac.uk", # The University of Reading
	"henry-moore.ac.uk", # The Henry Moore Foundation
	"henryfordcollege.ac.uk", # Loughborough University
	"hensa.ac.uk", # University of Kent
	"henshaws.ac.uk", # Henshaws College
	"hep.ac.uk", # The University of Manchester
	"hepi.ac.uk", # Higher Education Funding Council for England
	"hera.ac.uk", # Educational Competencies Consortium Limited
	"herda-sw.ac.uk", # Higher Education Regional Development Association in the South West
	"hereford-art-col.ac.uk", # Hereford College of Arts
	"hereford-tech.ac.uk", # Herefordshire College of Technology
	"hereford.ac.uk", # Hereford Sixth Form College
	"hereward.ac.uk", # Hereward College of Further Education
	"heriot-watt.ac.uk", # Heriot-Watt University
	"heritagescience.ac.uk", # University College London
	"hero.ac.uk", # Hero
	"heron.ac.uk", # Higher Education Resources on Demand- Stirling
	"hertfordshire.ac.uk", # University of Hertfordshire
	"hertreg.ac.uk", # Hertford Regional College
	"herts-e-learn.ac.uk", # North Hertfordshire College
	"herts-he.ac.uk", # Hertfordshire Higher Education Consortium
	"herts-regional.ac.uk", # Hertford Regional College
	"herts.ac.uk", # University of Hertfordshire
	"hesa.ac.uk", # Higher Education Statistics Agency Limited
	"hese.ac.uk", # Higher Education South East
	"hesin.ac.uk", # Higher Education Support for Industry in Northern England
	"heswbusnet.ac.uk", # SW University's Business Network
	"hew.ac.uk", # Higher Education Wales
	"hewit.ac.uk", # The Higher Education Wales Information Technology Forum (HEWIT)
	"heythrop.ac.uk", # Heythrop College
	"heythropcollege.ac.uk", # Heythrop College
	"hfaes.ac.uk", # London Borough of Hammersmith and Fulham
	"hgsi.ac.uk", # Hampstead Garden Suburb Institute
	"hhc.ac.uk", # Central Sussex College
	"hhsc.ac.uk", # Harefield Heart Science Centre
	"highbury.ac.uk", #Highbury College,  Portsmouth
	"higher-education.ac.uk", # Uk Higher Education
	"highfieldscentre.ac.uk", # Leicestershire County Council
	"highlands-jersey.ac.uk", # Highlands College - Jersey
	"highlands.ac.uk", # Highlands College
	"highpeak.ac.uk", # University of Derby
	"hilderstone.ac.uk", # Hilderstone College
	"hillcroft.ac.uk", # Hillcroft College
	"hillsroad.ac.uk", # Hills Road Sixth Form College
	"hinwickhall.ac.uk", # Hinwick Hall College of Further Education
	"hison.ac.uk", # University of Bristol
	"historicbooks.ac.uk", # The JISC Content Procurement Company Limited
	"history-uk.ac.uk", # University of London
	"history.ac.uk", # University of London
	"historysubjectcentre.ac.uk", # University of Warwick
	"histparl.ac.uk", # History of Parliament
	"hogarth.ac.uk", # King's College London
	"holborncollege.ac.uk", # Holborn College of Law
	"holmelacy.ac.uk", # Herefordshire College of Technology
	"holycross.ac.uk", # Holy Cross College
	"homefieldcollege.ac.uk", # Homefield College Limited
	"homenetworks.ac.uk", # University of Nottingham
	"homer.ac.uk", # Cambridge Regional College
	"hope.ac.uk", # Liverpool Hope University
	"hopwood.ac.uk", # Hopwood Hall College
	"horizon.ac.uk", # University of Nottingham
	"horniman.ac.uk", # Horniman Museum
	"hotbed.ac.uk", # Handing on Traditions by Electronic Dissemination
	"houghall.ac.uk", # Houghall College of Agriculture
	"housefraserarchive.ac.uk", # University of Glasgow
	"hpc-sc.ac.uk", # University of Warwick
	"hpc-uk.ac.uk", # University of Edinburgh
	"hpci.ac.uk", # High Performance Computing Initiative
	"hpcx.ac.uk", # Science and Technology Facilities Council
	"hpoolsfc.ac.uk", # Hartlepool Sixth Form College
	"hrc.ac.uk", # Hertford Regional College
	"hri.ac.uk", # Horticulture Research International
	"hrionline.ac.uk", # University of Sheffield
	"hrsfc.ac.uk", # Hills Road Sixth Form College
	"hsdp.ac.uk", # Higher Skills Development Project
	"hss.ac.uk", # Hoylake Sailing School
	"hta.ac.uk", # University of Southampton
	"hts.ac.uk", # Heathercroft Training Academy
	"hubbard-theory-consortium.ac.uk", # Royal Holloway and Bedford New College
	"hud.ac.uk", # University of Huddersfield
	"huddcoll.ac.uk", # Huddersfield Technical College
	"huddersfield.ac.uk", # University of Huddersfield
	"huddnewcoll.ac.uk", # Huddersfield New College
	"hughbaird.ac.uk", # Hugh Baird College
	"huish.ac.uk", # Richard Huish College
	"hull-college.ac.uk", # Hull College
	"hull.ac.uk", # University of Hull
	"hullacl.ac.uk", # Kingston Upon Hull City Council
	"hullschoolartdesign.ac.uk", # Hull College
	"humanities.ac.uk", # University of Oxford
	"humanrights-lse.ac.uk", # London School of Economics
	"humber.ac.uk", # University of Lincoln
	"humbox.ac.uk", # University of Southampton
	"humbul.ac.uk", # University of Oxford
	"hungerford.ac.uk", # Newbury College
	"huntingdon.ac.uk", # Huntingdonshire Regional College
	"huron.ac.uk", # Huron University
	"hutton.ac.uk", # The Macaulay Land Use Research Institute
	"hw.ac.uk", # Heriot-Watt University
	"hwlc.ac.uk", # Hammersmith and West London College
	"hwlln.ac.uk", # University of Worcester
	"hyde.ac.uk", # Hyde Clarendon Sixth Form College
	"hydeclarendon.ac.uk", # Hyde Clarendon Sixth Form College
	"hyms.ac.uk", # University of Hull
	"hyp.ac.uk", # St George's Hospital Medical School
	"hysbys.ac.uk", # Bangor University
	"i-centralwm.ac.uk", # University of Wolverhampton
	"i-lab.ac.uk", # London Business School
	"iaac.ac.uk", # Information Assurance Advisory Council
	"iagp.ac.uk", # University of East Anglia
	"iah.ac.uk", # Biotechnology and Biological Sciences Research Council
	"ial-wrecsam.ac.uk", # Yale College
	"iat.ac.uk", # Fife College of Further and Higher Education
	"ibis.ac.uk", # British Ornothologists Union
	"ibss.ac.uk", # London School of Economics and Political Science
	"ic.ac.uk", #Imperial College of Science,  Technology and Medicine
	"icb.ac.uk", # International College Britain
	"icc.ac.uk", # International Christian College
	"iccliverpool.ac.uk", # The Institute of Cultural Capital
	"iced.ac.uk", # Natural Environment Research Council
	"icit.ac.uk", # City of Glasgow College
	"icm.ac.uk", # The Institute of Commercial Management
	"icma.ac.uk", # The University of Reading
	"icmacentre.ac.uk", # The University of Reading
	"iconnect.ac.uk", # University of Oxford
	"icr.ac.uk", # The Institute of Cancer Research: Royal Cancer Hospital
	"ics.ac.uk", # The Intensive Care Society
	"icsa.ac.uk", # International Centre for Security Analysis
	"icsl.ac.uk", # City University London
	"icstudies.ac.uk", # The Young Foundation
	"idealse.ac.uk", # IDEA LSE Research Institute
	"idgo.ac.uk", # The Edinburgh College of Art
	"idras.ac.uk", # University of Strathclyde
	"idris.ac.uk", # University of Dundee
	"ids.ac.uk", # Institute of Development Studies
	"iec.ac.uk", # The International Extension College
	"ies.ac.uk", # Institute for Employment Studies
	"iesr.ac.uk", # The University of Manchester
	"iexchange.ac.uk", # London Business School
	"ife.ac.uk", # Institute of Freshwater Ecology
	"ifl.ac.uk", # The Institute for Learning (Post Compulsory Education and Training)
	"ifm.ac.uk", # Bangor University
	"ifr.ac.uk", # The Institute of Food Research
	"ifs.ac.uk", # The Institute for Fiscal Studies
	"ifslearning.ac.uk", # ifs School of Finance
	"iger.ac.uk", # Biotechnology and Biological Sciences Research Council
	"igmm.ac.uk", # Medical Research Council
	"ihgs.ac.uk", # The Institute of Heraldic and Genealogical Studies
	"ihrinfo.ac.uk", # Institute of Historical Research
	"ihrs.ac.uk", # Institute for Horticultural and Rural Studies
	"iis.ac.uk", # The Institute of Ismaili Studies
	"ilab.ac.uk", # London Business School
	"ile.ac.uk", # Columba Centre
	"ilex-tutorial.ac.uk", # Ilex Tutorial Services Ltd.
	"ilt.ac.uk", # The Higher Education Academy
	"ilthe.ac.uk", # The Higher Education Academy
	"ima.ac.uk", # Intelligent Modelling and Analysis
	"imageworkshop.ac.uk", # The Image Workshop
	"imems.ac.uk", # Research Enterprise Partnership
	"imlab.ac.uk", # University of Liverpool
	"impact-hei.ac.uk", # University of Strathclyde
	"impala.ac.uk", # University of Leicester
	"imperial.ac.uk", #Imperial College of Science,  Technology and Medicine
	"imrci.ac.uk", # Institute for Musculoskeletal Research
	"imt.ac.uk", # Higher Education Information Management Taskforce
	"inclusion.ac.uk", # University of Bradford
	"indeedproject.ac.uk", # University of St Andrews
	"infogov.ac.uk", # The University of Manchester
	"inform25.ac.uk", # London School of Economics and Political Science
	"information-systems.ac.uk", # London School of Economics
	"innogen.ac.uk", # Innogen Centre
	"innovation-exchange.ac.uk", # London Business School
	"innovation.ac.uk", # London Business School
	"innovations.ac.uk", # The Open University
	"inst-of-oceanographic-sci.ac.uk", # Institute of Oceanographic Sciences
	"institute-of-cancer-research.ac.uk", # The Institute of Cancer Research: Royal Cancer Hospital
	"institutionofelectronics.ac.uk", # The Institution of Electronics
	"intarch.ac.uk", # University of York
	"intec.ac.uk", # Cambridge Institute of Technology
	"integrativebiology.ac.uk", # University of Oxford
	"interactive-e.ac.uk", # InterActive Education
	"interactiveeducation.ac.uk", # InterActive Education
	"international-house-london.ac.uk", # International House World Organisation in London
	"international-union-crystallography.ac.uk", # International Union of Crystallography
	"international.ac.uk", # The UK Higher Education International Unit
	"internationalstaff.ac.uk", # University of Leeds
	"internationalstudies.ac.uk", # British International Studies Association
	"internet-pars.ac.uk", # Internet Personal and Academic Records
	"intute.ac.uk", # The Intute Consortium
	"ioe.ac.uk", #Institute of Education,  University of London
	"ion.ac.uk", # Institute for Optimum Nutrition
	"ios.ac.uk", # Institute of Oceanographic Sciences
	"ioz.ac.uk", # Institute of Zoology
	"ipem.ac.uk", # Institute of Physics and Engineering in Medicine
	"ipforesightforum.ac.uk", # University of Edinburgh
	"ipgc.ac.uk", # University of Liverpool
	"ipi.ac.uk", # University of Bradford
	"ipv6.ac.uk", # The JNT Association
	"irc.ac.uk", # The cahro Inter Regional College
	"irh.ac.uk", # The Institute of Rural Health
	"iri-scotland.ac.uk", # University of Edinburgh
	"iriss.ac.uk", # Institute for Research and Innovation in Social Services
	"irscl.ac.uk", # International Research Society for Children's Literature
	"isc.ac.uk", # International Seismological Centre
	"iscp.ac.uk", # Royal College of Surgeons of England
	"isic.ac.uk", # Science and Technology Facilities Council
	"isis.ac.uk", # Science and Technology Facilities Council
	"islamic-college.ac.uk", # Islamic College for Advanced Studies
	"islamicacademy.ac.uk", # The Islamic Academy
	"islamicstudiesnetwork.ac.uk", # The Higher Education Academy
	"isle.ac.uk", # Isle College
	"isli.ac.uk", # Heriot-Watt University
	"islington-acl.ac.uk", # London Borough of Islington
	"ism.ac.uk", # Institute for Social Marketing
	"ismg.ac.uk", # University of Strathclyde
	"ispan.ac.uk", # King's College London
	"itchen.ac.uk", # Itchen College
	"iteach.ac.uk", # Canterbury Christ Church University
	"itlearningspace-scot.ac.uk", # Virtual Learning Space Project- The Robert Gordon University
	"itnow.ac.uk", # Newbury College
	"itol.ac.uk", # The Sheffield College
	"itskillsacademy.ac.uk", # E-Skills UK Sector Skills Council Limited
	"iucr.ac.uk", # International Union of Crystallography
	"iwcollege.ac.uk", # Isle of Wight College
	"iwcommunitylearning.ac.uk", # Isle of Wight Council
	"iwightc.ac.uk", # Isle of Wight College
	"iwm.ac.uk", # Imperial War Museum
	"jameswatt.ac.uk", # James Watt College of Further and Higher Education
	"janeausten.ac.uk", # King's College London
	"janet-brokerage.ac.uk", # The JNT Association
	"janet.ac.uk", # The JNT Association
	"janetbrokerage.ac.uk", # The JNT Association
	"janetcollaborate.ac.uk", # The JNT Association
	"jcc.ac.uk", # Joseph Chamberlain Sixth Form College
	"jcpsg.ac.uk", # Higher Education Funding Council for England
	"jec.ac.uk", # Jewel and Esk College
	"jenner.ac.uk", # University of Oxford
	"jevc.ac.uk", # Jewel and Esk College
	"jewel-esk.ac.uk", # Jewel and Esk Valley College
	"jibs.ac.uk", # University of Bath
	"jic.ac.uk", # The John Innes Centre
	"jigg.ac.uk", # The University of Manchester
	"jisc-collections.ac.uk", # The JISC Content Procurement Company Limited
	"jisc-content.ac.uk", # The JISC Content Procurement Company Limited
	"jisc-mau.ac.uk", # JISC Monitoring & Advisory Unit
	"jisc-services.ac.uk", # JISC Services Management Company Ltd
	"jisc-tau.ac.uk", # Joint Information Systems Committee
	"jisc.ac.uk", # Higher Education Funding Council for England
	"jiscadvance.ac.uk", # JISC Services Management Company Ltd
	"jisccollections.ac.uk", # The JISC Content Procurement Company Limited
	"jisccontent.ac.uk", # The JISC Content Procurement Company Limited
	"jiscdigitalmedia.ac.uk", # Joint Information Systems Committee
	"jiscecollections.ac.uk", # The JISC Content Procurement Company Limited
	"jischistoricbooks.ac.uk", # The JISC Content Procurement Company Limited
	"jischistories.ac.uk", # The JISC Content Procurement Company Limited
	"jiscinfonet.ac.uk", # University of Northumbria at Newcastle
	"jiscjournalarchives.ac.uk", # The JISC Content Procurement Company Limited
	"jisclegal.ac.uk", # Joint Information Systems Committee
	"jiscmail.ac.uk", # JISC Services Management Company Ltd
	"jiscmediahub.ac.uk", # The JISC Content Procurement Company Limited
	"jiscmu.ac.uk", # University of Kent
	"jiscpas.ac.uk", # JISC Plagiarism Advisory Service
	"jiscrsc.ac.uk", # JISC Services Management Company Ltd
	"jisctechdis.ac.uk", # JISC Services Management Company Ltd
	"jiscwell.ac.uk", # University of Bradford
	"jmc.ac.uk", # Birmingham Metropolitan College
	"jmu.ac.uk", # Liverpool John Moores University
	"jnt.ac.uk", # The JNT Association
	"jobs.ac.uk", # University of Warwick
	"john-lister.ac.uk", # The John Lister Postgraduate Centre
	"johnlister.ac.uk", # The John Lister Postgraduate Centre
	"johnruskin.ac.uk", # John Ruskin College
	"joinup.ac.uk", # Joint Infrastructure for National Journal Services in the UK
	"jorum.ac.uk", # The University of Manchester
	"joseph-chamberlain.ac.uk", # Joseph Chamberlain Sixth Form College
	"joseph-priestley.ac.uk", # Joseph Priestley College
	"joseph-priestly.ac.uk", # UNKNOWN via DNS upload
	"josephwright6form.ac.uk", # Derby College
	"journalarchives.ac.uk", # The JISC Content Procurement Company Limited
	"journaltocs.ac.uk", # Heriot-Watt University
	"jppsg.ac.uk", # Procureweb
	"jrs.ac.uk", # Natural Environment Research Council
	"jsmc.ac.uk", # JISC Services Management Company Ltd
	"jstor.ac.uk", # The University of Manchester
	"jtap.ac.uk", # JISC Technology Applications Programme
	"juc.ac.uk", # Joint University Council
	"justincraig.ac.uk", # Justin Craig Education
	"jwheatley.ac.uk", # John Wheatley College
	"kaes.ac.uk", # Kent County Council
	"kcc.ac.uk", # Kensington and Chelsea College
	"kcl.ac.uk", # King's College London
	"kcollege.ac.uk", # South and West Kent College
	"ke-westyorkshire.ac.uk", # The Univeristy of Huddersfield
	"kec-stourbridge.ac.uk", # King Edward VI College
	"kecnuneaton.ac.uk", # King Edward VI College Nuneaton
	"kedst.ac.uk", #King Edward VI College,  Stourbridge
	"keele.ac.uk", # University of Keele
	"kendal.ac.uk", # Kendal College
	"kennedy.ac.uk", # The Mathilda & Terrence Kennedy Inst. of Rheumatology
	"kensingtoncoll.ac.uk", # Kensington College of Business
	"kent.ac.uk", # University of Kent
	"kentman.ac.uk", # Kent MAN Ltd
	"kew.ac.uk", # Royal Botanic Gardens
	"keyskillbuilder.ac.uk", # West Nottinghamshire College
	"kgv.ac.uk", # King George V College
	"kiad.ac.uk", # University for the Creative Arts
	"kiddercoll.ac.uk", # Kidderminster College
	"kidderminster.ac.uk", # Kidderminster College
	"kilmarnock.ac.uk", # Kilmarnock College
	"kinds.ac.uk", # Knowledge-based Interfaces to National Data Sets
	"king.ac.uk", # Kingston University
	"kingalfreds.ac.uk", # University of Winchester
	"kingalfredsbasingstoke.ac.uk", # University of Winchester
	"kinged6nun.ac.uk", # University of Warwick
	"kings.ac.uk", # King's College London
	"kingshillinstitute.ac.uk", # Kings Hill Centre- University of Greenwich
	"kingshurst.ac.uk", # CTC Kingshurst Academy
	"kingston-college.ac.uk", # Kingston College
	"kingston.ac.uk", # Kingston University
	"kingsway.ac.uk", # Kingsway College
	"kirkley.ac.uk", # Kirkley Hall College
	"kisharon.ac.uk", # Kisharon College
	"kitts.ac.uk", # Knowledge- Innovation & Technology
	"kmc.ac.uk", # Kingston Maurward College
	"knowledge-house.ac.uk", # Knowledge House
	"knowledgehouse.ac.uk", # Knowledge House
	"knowsleycc.ac.uk", # Knowsley Community College
	"knowsleycollege.ac.uk", # Knowsley Community College
	"knti.ac.uk", # University of Kent
	"kssacademy.ac.uk", # The Kent Surrey & Sussex Postgraduate Deanery & South Thames Foundation School
	"kssdeanery.ac.uk", # South East Coast Strategic Health Authority
	"kube.ac.uk", # University for the Creative Arts
	"laban.ac.uk", # Trinity Laban Conservatoire of Music and Dance
	"labinacell.ac.uk", # Daresbury Laboratory
	"lackcoll.ac.uk", # Wiltshire College
	"lackham.ac.uk", # Lackham College
	"laec.ac.uk", # Leicester Adult Education College
	"laia.ac.uk", # St George's Hospital Medical School
	"lakescollege.ac.uk", # Lakes College West Cumbria
	"lakescollegewestcumbria.ac.uk", # Lakes College West Cumbria
	"lambeth.ac.uk", # Lambeth College
	"lambethacl.ac.uk", # London Borough of Lambeth
	"lambethcollege.ac.uk", # Lambeth College
	"lamp.ac.uk", # University of Wales Trinity Saint David
	"lampeter.ac.uk", # Lampeter College
	"lancashirecompact.ac.uk", # Lancashire Compact
	"lancashirelawacademy.ac.uk", # Blackburn College
	"lancashirelawschool.ac.uk", # Blackburn College
	"lancaster.ac.uk", # University of Lancaster
	"lancs-cumbrianti.ac.uk", # University of Central Lancashire
	"lancs.ac.uk", # University of Lancaster
	"lancsngfl.ac.uk", # Lancashire Grid for Learning
	"landmap.ac.uk", # LANDMAP Project
	"landmarks.ac.uk", # Landmarks
	"landscape.ac.uk", # University of Nottingham
	"langdoncollege.ac.uk", # Langdon College
	"langside.ac.uk", # Langside College
	"languagebox.ac.uk", # University of Southampton
	"languagesresearch.ac.uk", # Oxford Brookes University
	"lanmore.ac.uk", # Lancaster and Morecambe College
	"laps.ac.uk", # Leakage Analysis & Prevention System
	"lauder.ac.uk", # Lauder College - Dunfermline
	"lawcabs.ac.uk", # Central Applications Board
	"lawpaths.ac.uk", # University of Kent
	"lawteacher.ac.uk", # University of Plymouth
	"lbc-northwood.ac.uk", # London School of Theology
	"lbc.ac.uk", # Leo Baeck College
	"lboro.ac.uk", # Loughborough University
	"lbs.ac.uk", # London Business School
	"lcad.ac.uk", # Loughborough College of Art & Design
	"lcb.ac.uk", # Leeds College of Building
	"lcbt.ac.uk", # London College of Beauty Therapy
	"lcds.ac.uk", # The Conservatoire for Dance and Drama
	"lcf.ac.uk", # London College of Fashion
	"lcirah.ac.uk", # Birkbeck College
	"lcm.ac.uk", # Leeds College of Music
	"lct.ac.uk", # Leeds City College
	"lcuck.ac.uk", # UCK Ltd
	"lcwc.ac.uk", # Lakes College - West Cumbria
	"le.ac.uk", # University of Leicester
	"leadership-foundation.ac.uk", # Leadership Trust Foundation
	"leadershipfoundation.ac.uk", # Leadership Foundation for Higher Education
	"leadershiphe.ac.uk", # Leadership Foundation for Higher Education
	"leap.ac.uk", # The LEAP Service
	"leapahead.ac.uk", # Leap Ahead
	"learnbaes.ac.uk", # Birmingham City Council
	"learndirect.ac.uk", # University for Industry
	"learnedsocietywales.ac.uk", # Swansea University
	"learnhigher.ac.uk", # University of Plymouth
	"learninfonet.ac.uk", # University of Northumbria at Newcastle
	"learningbites.ac.uk", # The Learning Bites Project - Liverpool HEIs
	"learninglink.ac.uk", # Birkbeck College
	"learningstaffordshire.ac.uk", # Staffordshire Lifelong Learning Partnership
	"learningtechnologies.ac.uk", # Learning and Skills Development Agency
	"learningzone.ac.uk", # Macclesfield College
	"learninscotland.ac.uk", # Central College of Commerce
	"learnit-northampton.ac.uk", # Northampton College
	"learnnorthants.ac.uk", # Northamptonshire Lifelong Learning Partnership's Adult Learning Services
	"learnportsmouth.ac.uk", # Portsmouth City Council
	"learnsafl.ac.uk", # Sandwell Metropolitan Borough Council
	"learntolearn.ac.uk", # University of Cambridge
	"lec.ac.uk", # Leicester College
	"ledas.ac.uk", # University of Leicester
	"leeds-art.ac.uk", # Leeds College of Art
	"leeds-ecampus.ac.uk", # Electronic Campus Initiative- University of Leeds
	"leeds-lcot.ac.uk", # Leeds City College
	"leeds-met.ac.uk", # Leeds Metropolitan University
	"leeds-metropolitan.ac.uk", # Leeds Metropolitan University
	"leeds.ac.uk", # University of Leeds
	"leedscitycollege.ac.uk", # Leeds City College
	"leedscollege.ac.uk", # Leeds College of Technology
	"leedsmet.ac.uk", # Leeds Metropolitan University
	"leedsmetcarnegie.ac.uk", # Leeds Metropolitan University
	"leedsmetropolitan.ac.uk", # Leeds Metropolitan University
	"leedsthomasdanby.ac.uk", # Leeds City College
	"leedstrinity.ac.uk", # Leeds Trinity University College
	"leek.ac.uk", # Leek College of Further Education and School of Art
	"legalscholars.ac.uk", # The Society of Legal Scholars
	"leggott.ac.uk", # John Leggott Sixth Form College
	"leicester-poly.ac.uk", # De Montfort University
	"leicester.ac.uk", # University of Leicester
	"leicestercitymuseums.ac.uk", # Leicester Museums
	"leicestercollege.ac.uk", # Leicester College
	"leicesterlearns.ac.uk", # Leicester City Council
	"leicestermuseums.ac.uk", # Leicester City Council
	"leicp.ac.uk", # De Montfort University
	"leics-als.ac.uk", # Leicestershire County Council
	"leis.ac.uk", # The Queen's University of Belfast
	"leistontc.ac.uk", # Otley College of Agriculture and Horticulture
	"leos-scot.ac.uk", # The Scottish Chapter of the Lasers Electro-Optics Society
	"lettol.ac.uk", # The Sheffield College
	"leverhulme-trust.ac.uk", # The Leverhulme Trust
	"leverhulme.ac.uk", # The Leverhulme Trust
	"leverhulmetrust.ac.uk", # The Leverhulme Trust
	"lewcol.ac.uk", # UNKNOWN via DNS upload
	"lewisham.ac.uk", # Lewisham College
	"leyton.ac.uk", # Leyton Sixth Form College
	"lfhe.ac.uk", # Leadership Foundation for Higher Education
	"lgu.ac.uk", # London Metropolitan University
	"lhc.ac.uk", # Science and Technology Facilities Council
	"lhec.ac.uk", # University of London
	"lhmc.ac.uk", #Queen Mary and Westfield College,  University of London
	"lichfield.ac.uk", # South Staffordshire College
	"life.ac.uk", # Joint Information Systems Committee
	"lifelab.ac.uk", # University of Abertay Dundee
	"lifelonglearning.ac.uk", # University of Exeter
	"lifesign.ac.uk", # Lifesign - a Streaming Media Project in Life Sciences
	"lihe.ac.uk", # Liverpool Hope College
	"lil.ac.uk", # Link to Learning
	"limavady.ac.uk", # North West Regional College
	"lime.ac.uk", # Brunel University
	"limit.ac.uk", # Leeds Institute For Minimally Invasive Therapy
	"lincoln.ac.uk", # University of Lincoln
	"lincolncollege.ac.uk", # Lincoln College
	"lindeth-college.ac.uk", # Lindeth College of FE
	"linguistics.ac.uk", # University of Essex
	"link2learn-ni.ac.uk", # Datalink Reprographics Limited
	"linkage.ac.uk", # Linkage College
	"linkinglondon.ac.uk", # Birkbeck College
	"linksintolanguages.ac.uk", # University of Southampton
	"linst.ac.uk", # University of the Arts London
	"lipa.ac.uk", # Liverpool Institute of Performing Arts
	"lipidomics.ac.uk", # University of Southampton
	"liscol.ac.uk", # South Eastern Regional College
	"listerpostgraduate.ac.uk", # Lister Postgraduate Institute
	"litr.ac.uk", # LITR Ltd
	"littlehampton.ac.uk", # Littlehampton Outcentre for Chichester College
	"liv-coll.ac.uk", # Liverpool Community College
	"liv-e.ac.uk", # The University of Liverpool
	"liv.ac.uk", # University of Liverpool
	"live.ac.uk", # Royal Veterinary College
	"livenet.ac.uk", # Livenet
	"liverpool.ac.uk", # The University of Liverpool
	"liverpoolsas.ac.uk", # Liverpool John Moores University
	"livesandletters.ac.uk", #Queen Mary and Westfield College,  University of London
	"livewell.ac.uk", # University of Newcastle upon Tyne
	"livhope.ac.uk", # Liverpool Hope University
	"livjm.ac.uk", # Liverpool John Moores University
	"ljmu.ac.uk", # Liverpool John Moores University
	"lkl.ac.uk", # Birkbeck College
	"llambed.ac.uk", # University of Wales Trinity Saint David
	"llandrillo.ac.uk", # Coleg Llandrillo
	"llas.ac.uk", # University of Southampton
	"llwr.ac.uk", # Welsh Assembly Government
	"llysfasi.ac.uk", # Coleg Llysfasi
	"lmbru.ac.uk", # University of Leeds
	"lmc.ac.uk", # Lancaster and Morecambe College
	"lmd.ac.uk", # The Leadership & Management Development Consortium
	"lmi4he.ac.uk", # Labour Market Intelligence for HE
	"lms.ac.uk", # London Mathematical Society
	"lmu.ac.uk", # Leeds Metropolitan University
	"lnat.ac.uk", # University of Birmingham
	"loa.ac.uk", # London Open Academy
	"lockssalliance.ac.uk", # University of Edinburgh
	"logic.ac.uk", # Logic Language Academy
	"lolo.ac.uk", # University College London
	"lon.ac.uk", # University of London
	"london-college.ac.uk", # London College of Further Education
	"london-fashion.ac.uk", # London College of Fashion
	"london-guildhall.ac.uk", # London Guildhall University
	"london-pgmde.ac.uk", # The Deanery for Postgraduate Medicine within London
	"london.ac.uk", # University of London
	"londonaimhigher.ac.uk", # London Aimhigher
	"londonbiblecollege.ac.uk", # London School of Theology
	"londonbusinessschool.ac.uk", # London Business School
	"londoncentre-hstm.ac.uk", # University College London
	"londondeanery.ac.uk", # London Deanery
	"londoneastcove.ac.uk", # Havering College of Further and Higher Education
	"londonexternal.ac.uk", # University of London
	"londonhigher.ac.uk", # London Higher
	"londoninternational.ac.uk", # University of London
	"londonknowledgelab.ac.uk", # London Knowledge Lab
	"londonlinks.ac.uk", # London Library & Information Development Unit- TPMDE
	"londonmedicine.ac.uk", # London Higher
	"londonmet.ac.uk", # London Metropolitan University
	"londonmetro.ac.uk", # London Metropolitan University
	"londonmetropolitan.ac.uk", # London Metropolitan University
	"londonmetropolitanuniversity.ac.uk", # London Metropolitan University
	"londonmetuniversity.ac.uk", # London Metropolitan University
	"londonp4p.ac.uk", # London Higher
	"londonreach.ac.uk", #Institute of Education,  University of London
	"londonschooloftheology.ac.uk", # London School of Theology
	"longeaton.ac.uk", # Derby College
	"longley-park.ac.uk", # Longley Park Sixth Form College
	"longley-parksfc.ac.uk", # Longley Park Sixth Form College
	"longleypark.ac.uk", # Longley Park Sixth Form College
	"longleyparkcollege.ac.uk", # Longley Park Sixth Form College
	"longleyparksfc.ac.uk", # Longley Park Sixth Form College
	"longleyparksixthformcollege.ac.uk", # Longley Park Sixth Form College
	"longroad.ac.uk", # Long Road Sixth Form College
	"lonklab.ac.uk", # London Knowledge Lab
	"lonmet.ac.uk", # London Metropolitan University
	"lonmetro.ac.uk", # London Metropolitan University
	"lonmt.ac.uk", # London Metropolitan University
	"lonoco.ac.uk", # London North Consortium
	"loreto.ac.uk", # Loreto Sixth Form College
	"lothiancolleges.ac.uk", # Stevenson College Edinburgh
	"lou.ac.uk", # Loughborough College
	"loucoll.ac.uk", # Loughborough College
	"loughborough.ac.uk", # Loughborough University
	"loughry.ac.uk", # Department of Agriculture and Rural Development
	"lowestoft.ac.uk", # Lowestoft College
	"lowestoftsfc.ac.uk", # Lowestoft Sixth Form College
	"lowestoftsixthformcollege.ac.uk", # Lowestoft Sixth Form College
	"lpac.ac.uk", #Queen Mary and Westfield College,  University of London
	"lpc.ac.uk", # London Pain Consortium
	"lsbu.ac.uk", # London South Bank University
	"lsc.ac.uk", # The Learning and Skills Council
	"lscs.ac.uk", # University of Dundee
	"lse-departments.ac.uk", # London School of Economics
	"lse-events.ac.uk", # London School of Economics
	"lse-global.ac.uk", # London School of Economics and Political Science
	"lse-marketing.ac.uk", # London School of Economics
	"lse-nursery.ac.uk", # London School of Economics and Political Science
	"lse-research.ac.uk", # London School of Economics
	"lse-residences.ac.uk", # London School of Economics and Political Science
	"lse-sport.ac.uk", # London School of Economics and Political Science
	"lse-students.ac.uk", # London School of Economics and Political Science
	"lse.ac.uk", # London School of Economics and Political Science
	"lseapplicants.ac.uk", # London School of Economics
	"lsejournals.ac.uk", # London School of Economics
	"lsestaff.ac.uk", # London School of Economics
	"lsfc.ac.uk", # Leicester College
	"lshtm.ac.uk", # London School of Hygiene and Tropical Medicine
	"lsjs.ac.uk", # London School of Jewish Studies
	"lsm.ac.uk", # London School of Management
	"lso.ac.uk", # London School of Osteopathy
	"lsrc.ac.uk", # Learning and Skills Network
	"lsse.ac.uk", # Leicester Square School of English
	"lst.ac.uk", # London School of Theology
	"lstmliverpool.ac.uk", # The Liverpool School of Tropical Medicine
	"ltcc.ac.uk", # London Taught Course Centre
	"ltea.ac.uk", # The University of Manchester
	"ltscotland.ac.uk", # Learning & Teaching Scotland
	"ltsn-01.ac.uk", # University of Newcastle upon Tyne
	"ltsn.ac.uk", # The Higher Education Academy
	"ltsneng.ac.uk", # Loughborough University
	"ludlow-college.ac.uk", # Ludlow College
	"lufton-college-fe.ac.uk", # Lufton Manor College
	"luftoncollege.ac.uk", # Royal Mencap Society
	"lupc.ac.uk", # Procureweb
	"lut.ac.uk", # Loughborough University
	"luton-acl.ac.uk", # Central Bedfordshire Council
	"luton.ac.uk", # University of Bedfordshire
	"lutonacl.ac.uk", # Central Bedfordshire Council
	"lutonsfc.ac.uk", # Luton Sixth Form College
	"lwms.ac.uk", # University of Warwick
	"lww-cetl.ac.uk", # School of Oriental and African Studies
	"m25lib.ac.uk", # London School of Economics and Political Science
	"mablethorpe.ac.uk", # Boston College
	"macaulay.ac.uk", # The Macaulay Land Use Research Institute
	"macclesfield-college.ac.uk", # UNKNOWN via DNS upload
	"macclesfield.ac.uk", # Macclesfield College
	"mackworth-college.ac.uk", # Derby College
	"mackworth.ac.uk", # Derby College
	"maes.ac.uk", # Middlesbrough Borough Council
	"magic.ac.uk", # Management of Access to Grey Literature Collections- Cranfield University
	"mahsc.ac.uk", # The Manchester Academic Health Science Centre
	"mailtalk.ac.uk", # Science and Technology Facilities Council
	"makingassessmentcount.ac.uk", # University of Westminster
	"malvern.ac.uk", # South Worcestershire College
	"man.ac.uk", # The University of Manchester
	"managementcontrolassociation.ac.uk", # The University of Reading
	"managementresearcher.ac.uk", # British Academy of Management Ltd
	"mancat.ac.uk", # The Manchester College
	"manchester-business-school.ac.uk", # Manchester Business School
	"manchester-city-coll.ac.uk", # City College Manchester
	"manchester-computing-centre.ac.uk", # The University of Manchester
	"manchester-metropolitan-university.ac.uk", # Manchester Metropolitan University
	"manchester-worldwide.ac.uk", # The University of Manchester
	"manchester.ac.uk", # The University of Manchester
	"manchestermethod.ac.uk", # The University of Manchester
	"manchesternti.ac.uk", # The Manchester College
	"mantais.ac.uk", # University of Wales Trinity Saint David
	"manufacturingedc.ac.uk", # University of Nottingham
	"mappingtheunderworld.ac.uk", # University of Birmingham
	"mappingwales.ac.uk", # Funding Council Project for Mapping Resources in Wales
	"marble.ac.uk", # MARBLE Project
	"marchmont.ac.uk", # University of Exeter
	"maremap.ac.uk", # Natural Environment Research Council
	"marjon.ac.uk", # University College Plymouth St Mark & St John
	"marlab.ac.uk", # Scottish Government
	"marlin.ac.uk", # Marine Life Information Network
	"maryvale.ac.uk", # Maryvale Institute
	"maryward.ac.uk", # The Mary Ward Centre
	"marywardcentre.ac.uk", # Mary Ward Settlement
	"masc25.ac.uk", # University College London
	"masts.ac.uk", # University of St Andrews
	"match.ac.uk", # University of Ulster
	"materials.ac.uk", # Loughborough University
	"mathcentre.ac.uk", # Loughborough University
	"mathematics.ac.uk", # Engineering - Mathematics and Computing Hub
	"mathfit.ac.uk", # Engineering & Physical Sciences Research Council- Mathematics for IT Initiative
	"mathgate.ac.uk", # Gateway to Engineering Mathematics Resources on the Internet
	"mathscentre.ac.uk", # Loughborough University
	"mathstore.ac.uk", # School of Mathematics & Statistics
	"mathtutor.ac.uk", # Loughborough University
	"matthew-boulton.ac.uk", # Birmingham Metropolitan College
	"matu.ac.uk", # Higher Education Funding Council for England
	"mau.ac.uk", # JISC Monitoring & Advisory Unit
	"maximize.ac.uk", # Edge Hill University
	"maxwell.ac.uk", # Heriot-Watt University
	"mba.ac.uk", # Marine Biological Association
	"mbc.ac.uk", # Birmingham Metropolitan College
	"mbn.ac.uk", # University of Dundee
	"mbro.ac.uk", # Middlesbrough College
	"mbs-worldwide.ac.uk", # The University of Manchester
	"mbs.ac.uk", # The University of Manchester
	"mca.ac.uk", # Merseyside Colleges' Association
	"mcc.ac.uk", # The University of Manchester
	"mcsw.ac.uk", # Materials Centre South West
	"mctimoney-college.ac.uk", # McTimoney College of Chiropractic
	"mdx.ac.uk", # Middlesex University
	"medev.ac.uk", # University of Newcastle upon Tyne
	"medhist.ac.uk", # The University of Manchester
	"mediahub.ac.uk", # Higher Education Funding Council for England
	"medicine.ac.uk", # The Medicine Section of the RDN
	"medievalchester.ac.uk", # King's College London
	"medievalfrancophone.ac.uk", # King's College London
	"medschools.ac.uk", # Medical Schools Council
	"medway.ac.uk", # University of Kent at Medway
	"medwayacl.ac.uk", # Medway Council
	"megs.ac.uk", # University of Nottingham
	"meirion-dwyfor.ac.uk", # Coleg Meirion-Dwyfor
	"menai.ac.uk", # Coleg Menai
	"mendel.ac.uk", # The Mendel Database
	"merc.ac.uk", # The University of Manchester
	"merlin.ac.uk", # The University of Manchester
	"merops.ac.uk", # Wellcome Trust Sanger Institute
	"merristwood.ac.uk", # Guildford College of Further and Higher Education
	"merseyandwestlancslln.ac.uk", # Edge Hill University
	"merthyr.ac.uk", # University of Glamorgan
	"merton-acl.ac.uk", # London Borough of Merton
	"merton-adult-college.ac.uk", # London Borough of Merton
	"merton-adult-education.ac.uk", # London Borough of Merton
	"merton.ac.uk", # South Thames College
	"mertonadulteducation.ac.uk", # London Borough of Merton
	"metabolomics.ac.uk", # The University of Manchester
	"metanoia.ac.uk", # Metanoia Institute
	"methnet.ac.uk", # King's College London
	"methodsnetwork.ac.uk", # King's College London
	"methodsnorthwest.ac.uk", # The University of Manchester
	"mfcrg.ac.uk", #University of the West of England,  Bristol
	"mfo.ac.uk", # La Maison Francais
	"mhie.ac.uk", # Moray House Institute Edinburgh
	"mhrn.ac.uk", # The University of Manchester
	"mib.ac.uk", # The University of Manchester
	"microgravity.ac.uk", # RAL - Space Science and Technology Department
	"micron.ac.uk", # Microbes in Norwich
	"mid-career-college.ac.uk", # Mid Career College
	"midastrial.ac.uk", # The University of Manchester
	"midbible.ac.uk", # Kings Evangelical Divinity School
	"midchesh.ac.uk", # Mid-Cheshire College
	"middlesbro.ac.uk", # Middlesbrough College
	"middlesex.ac.uk", # Middlesex University
	"midessextc.ac.uk", # Otley College of Agriculture and Horticulture
	"midfife.ac.uk", # Glenrothes College
	"midhurst.ac.uk", # Midhurst Outcentre for Chichester College
	"midkent.ac.uk", # Mid-Kent College of Higher and Further Education
	"midlandsenergyconsortium.ac.uk", # Loughborough University
	"midlandsphysicsalliance.ac.uk", # University of Nottingham
	"midrib.ac.uk", # MIDRIB Project (eLib)
	"millionplus.ac.uk", # Million Plus
	"mimas.ac.uk", # The University of Manchester
	"mineofinfo.ac.uk", # University of Wales- Swansea - RSLP Mine of Information
	"minerva.ac.uk", # The Open University
	"mirandanet.ac.uk", # Mirandanet Academy
	"mirror.ac.uk", # Higher Education Funding Council for England
	"missendenabbey.ac.uk", # Missenden Abbey
	"mist.ac.uk", # Royal Astronomical Society
	"mkcollege.ac.uk", # Milton Keynes College
	"mlab.ac.uk", # UNKNOWN via DNS upload
	"mlestudy.ac.uk", # University of Brighton
	"mluri.ac.uk", # The Macaulay Landuse Research Institue
	"mmu.ac.uk", # Manchester Metropolitan University
	"mmubs.ac.uk", # Manchester Metropolitan University
	"mnc.ac.uk", # Royal Mencap Society
	"modip.ac.uk", # Museum of Design in Plastics
	"modmedmicro.ac.uk", # University of Oxford
	"mol.ac.uk", # University of Wolverhampton
	"mole.ac.uk", # Daresbury Laboratory
	"mollnet.ac.uk", # Myerscough College
	"monash.ac.uk", # Monash University Centre
	"monkwear.ac.uk", # City of Sunderland College
	"monogram.ac.uk", # Scottish Crop Research Institute
	"moorlands.ac.uk", # Moorlands College
	"moray.ac.uk", # Moray College
	"moredun.ac.uk", # Moredun Research Institute
	"morgannwg.ac.uk", # Coleg Morgannwg
	"morleycollege.ac.uk", # Morley College Limited
	"morse.ac.uk", # Kingston University
	"motherwell.ac.uk", # Motherwell College
	"moulton.ac.uk", # Moulton College
	"mountcollyer.ac.uk", # Mountcollyer Technology Centre
	"move.ac.uk", # University of Hertfordshire
	"moveonmoveup.ac.uk", # Harrow College
	"movinghistory.ac.uk", # University of Brighton
	"mpa-uk.ac.uk", # The University of Manchester
	"mpa.ac.uk", # University of Birmingham
	"mpags.ac.uk", # University of Nottingham
	"mpsi.ac.uk", # Science and Technology Facilities Council
	"mpw.ac.uk", # Mander Portman Woodward Sixth Form College
	"mrc.ac.uk", # Medical Research Council
	"mrcp.ac.uk", # Membership of the Royal College of Physicians
	"mri.ac.uk", # Music Research Institute
	"msa.ac.uk", # Manchester Metropolitan University
	"mscos.ac.uk", # The Marine Society & Sea Cadets
	"msec.ac.uk", # The University of Manchester
	"msp.ac.uk", # University of Kent
	"msportknowledge.ac.uk", # School of Technology
	"mtec.ac.uk", # The Marine Technology Education Consortium
	"muarc.ac.uk", # University of Nottingham
	"mucm.ac.uk", # University of Sheffield
	"multiverse.ac.uk", # London Metropolitan University
	"mundus.ac.uk", # University of London Computer Centre
	"murg.ac.uk", # University of Sunderland
	"museumofwriting.ac.uk", # King's College London
	"museumwales.ac.uk", # National Museum Wales
	"musicandphilosophy.ac.uk", # Royal Musical Association Music and Philosophy Study Group
	"musiconline.ac.uk", # Music Online Libraries Project
	"muslimcollege.ac.uk", # The Muslim College
	"muther.ac.uk", # King's College London
	"mwrc.ac.uk", # Nazarene Theological College
	"mycandi.ac.uk", # City and Islington College
	"mycib.ac.uk", # University of Nottingham
	"myerscough.ac.uk", # Myerscough College
	"myport.ac.uk", # University of Portsmouth
	"myrrh.ac.uk", # Myrrh Limited
	"myscience.ac.uk", # MyScience.co Limited
	"mywnsc.ac.uk", # Walford and North Shropshire College
	"na-me.ac.uk", # Joint Dept of Naval Architecture & Marine Engineering at Universities of Glasgow & Strathclyde
	"nacstock.ac.uk", # North Area College Stockport
	"nactem.ac.uk", # The University of Manchester
	"nado.ac.uk", # National Association of Disability Officers
	"naea.ac.uk", # National Arts Education Archive
	"nafc.ac.uk", # North Atlantic Fisheries College
	"nagty.ac.uk", # University of Warwick
	"nahste.ac.uk", # RSLP NAHSTE Project
	"naln.ac.uk", # University of the Arts London
	"nam.ac.uk", # The National Army Museum
	"namhe.ac.uk", # National Association for Music in Higher Education
	"namss.ac.uk", # National Association of Managers of Student Services
	"nanocmos.ac.uk", # University of Glasgow
	"napier.ac.uk", # Edinburgh Napier University
	"narti.ac.uk", # University of Leeds
	"nash.ac.uk", # Nash College
	"natcen.ac.uk", # National Centre for Social Research
	"natcor.ac.uk", # University of Lancaster
	"natdisteam.ac.uk", # Edge Hill University
	"natgalscot.ac.uk", # National Galleries of Scotland
	"national-army-museum.ac.uk", # National Army Museam - Chelsea
	"national-confidential-inquiry.ac.uk", # The University of Manchester
	"national-learning-network.ac.uk", # National Learning Network
	"nationalnetworkforinterpreting.ac.uk", # University of Leeds
	"nationalskillsacademy.ac.uk", # Learning and Skills Council
	"natstar.ac.uk", # National Star Centre College of Further Education
	"naturalhistorymuseum.ac.uk", # The Natural History Museum
	"nature.ac.uk", # The Natural World Section of the RDN
	"nazarene.ac.uk", # Nazarene Theological College
	"nbcol.ac.uk", # Northbrook College Sussex
	"nbe.ac.uk", # Geological Survey - Northern Ireland
	"nbi.ac.uk", # Biotechnology and Biological Sciences Research Council
	"nbolton-sfc.ac.uk", # North Bolton Sixth Form College
	"nbpa.ac.uk", # The North British Pain Association
	"nbs.ac.uk", # NERC BAS - Cambridge
	"nbu.ac.uk", # Institute of Terrestrial Ecology
	"nc3rs.ac.uk", # Medical Research Council
	"nc4m.ac.uk", # Tresham Institute
	"ncas.ac.uk", # University of Leeds
	"ncaveo.ac.uk", # University of Southampton
	"ncb.ac.uk", # South East Essex Sixth Form College
	"ncc.ac.uk", # National Consortium of Colleges
	"ncccs.ac.uk", # University of Nottingham
	"nceo.ac.uk", # The University of Reading
	"ncess.ac.uk", # The University of Manchester
	"ncgc.ac.uk", # Royal College of Physicians of London
	"nchm.ac.uk", # Northern Centre for the History of Medicine
	"ncl-coll.ac.uk", # Newcastle College
	"ncl-lyme.ac.uk", # Newcastle-Under-Lyme College
	"ncl-u-lyme.ac.uk", # Newcastle-under-Lyme College
	"ncl.ac.uk", # University of Newcastle upon Tyne
	"ncn.ac.uk", # New College Nottingham
	"ncp.ac.uk", # The National Committee for Philosophy
	"ncpontefract.ac.uk", #NEW College,  Pontefract
	"ncrcl.ac.uk", # Roehampton University
	"ncrm.ac.uk", # University of Southampton
	"ncs.ac.uk", # University of Southampton
	"ncse.ac.uk", # King's College London
	"nct.ac.uk", # New College Telford
	"ncteam.ac.uk", # The Higher Education Academy
	"ncti.ac.uk", # National Creative Technology Initiative
	"ncuk.ac.uk", # Northern Consortium
	"nda.ac.uk", # National Design Academy
	"ndai.ac.uk", # South Eastern Regional College
	"ndevon.ac.uk", # Petroc College
	"ndonline.ac.uk", # Notre Dame Sixth Form College
	"ndtc.ac.uk", # North Derbyshire Tertiary College
	"ne-worcs.ac.uk", # North East Worcestershire College
	"ne-worcscol.ac.uk", # North East Worcestershire College
	"neab.ac.uk", # Northern Examinations and Assessment Board
	"neacc.ac.uk", # North East Adult Community College
	"neath.ac.uk", # Neath College of FE
	"nec-arundel.ac.uk", # New England College - Arundel
	"nec.ac.uk", # National Extension College
	"nei.ac.uk", # Northern Regional College
	"nek.ac.uk", # NERC Radiocarbon Laboratory
	"nelcls.ac.uk", # North East Lincolnshire Council
	"nelson.ac.uk", # Nelson and Colne College
	"nene.ac.uk", # The University of Northampton
	"neodaas.ac.uk", # Natural Environment Research Council
	"neonatalsociety.ac.uk", # The Neonatal Society
	"neptune.ac.uk", # University of Sheffield
	"nerc-arsf.ac.uk", # Natural Environment Research Council
	"nerc-bangor.ac.uk", # Natural Environment Research Council
	"nerc-bas.ac.uk", # British Antarctic Survey - Cambridge
	"nerc-belfast.ac.uk", # British Geological Survey - Belfast
	"nerc-bush.ac.uk", # Institute of Terrestrial Ecology - Bush
	"nerc-cardiff.ac.uk", # Natural Environment Research Council
	"nerc-dorset.ac.uk", # NERC Winfrith Heath
	"nerc-east-kilbride.ac.uk", # NERC Radiocarbon Laboratory - East Kilbride
	"nerc-eskdalemuir.ac.uk", # British Geological Survey - Eskdalemuir
	"nerc-essc.ac.uk", # Environmental Systems Science Centre
	"nerc-gilmerton.ac.uk", # Natural Environment Research Council
	"nerc-hartland.ac.uk", # Natural Environment Research Council
	"nerc-keyworth.ac.uk", # British Geological Survey - Keyworth
	"nerc-lancaster.ac.uk", # Natural Environment Research Council
	"nerc-lerwick.ac.uk", # Natural Environment Research Council
	"nerc-liv.ac.uk", # Natural Environment Research Council
	"nerc-loanhead.ac.uk", # NERC BGS Loanhead
	"nerc-mst-radar.ac.uk", # NERC MST Atmospheric Radar Facility
	"nerc-murchison.ac.uk", # Natural Environment Research Council
	"nerc-oban.ac.uk", # Dunstaffnage Marine Laboratory
	"nerc-oxford.ac.uk", # Institute of Virology & Environmental Microbiology
	"nerc-pml.ac.uk", # Plymouth Marine Laboratory
	"nerc-smru.ac.uk", # Sea Mammal Research Unit
	"nerc-solardome.ac.uk", # NERC - ITE Climate Change Solardome Facility
	"nerc-southampton.ac.uk", # Southampton Oceanographic Centre
	"nerc-swindon.ac.uk", # Natural Environment Research Council
	"nerc-wallingford.ac.uk", # Natural Environment Research Council
	"nerc-wytham.ac.uk", # Institute of Terrestrial Ecology - Wytham
	"nerc.ac.uk", # Natural Environment Research Council
	"neresc.ac.uk", # North East Regional e-Science Centre
	"nesc.ac.uk", # University of Edinburgh
	"nesci.ac.uk", # University of Newcastle upon Tyne
	"nescot.ac.uk", # North East Surrey College of Technology
	"nesi.ac.uk", # University of Edinburgh
	"nesli.ac.uk", # The National Electronic Site Licence Initiative
	"nesli2.ac.uk", # The University of Manchester
	"nest.ac.uk", # University of Newcastle upon Tyne
	"netlab.ac.uk", # The JNT Association
	"netscc.ac.uk", # University of Southampton
	"netskills.ac.uk", # University of Newcastle upon Tyne
	"netwise.ac.uk", # Careers Services at UMIST and Manchester
	"network-training.ac.uk", # Network Training
	"netzwerkdeutsch.ac.uk", # The Open University
	"neurogrid.ac.uk", # University of Oxford
	"neurohub.ac.uk", # University of Oxford
	"new-campus-basildon.ac.uk", # South East Essex Sixth Form College
	"new-coll-cf.ac.uk", # New College Cardiff
	"newark.ac.uk", # Lincoln College
	"newbasildon.ac.uk", # South East Essex Sixth Form College
	"newbattleabbeycollege.ac.uk", # Newbattle Abbey College
	"newbold.ac.uk", # Newbold College
	"newbury-college.ac.uk", # Newbury College
	"newcampusbasildon.ac.uk", # South East Essex Sixth Form College
	"newcampusglasgow.ac.uk", # City of Glasgow College
	"newcastle-college.ac.uk", # Newcastle College
	"newcastle.ac.uk", # University of Newcastle upon Tyne
	"newcastlecollege.ac.uk", # Newcastle College
	"newceys.ac.uk", # London Borough of Newham
	"newcollege.ac.uk", # New College Swindon
	"newcollegedurham.ac.uk", #New College,  Durham
	"newcollegeglasgow.ac.uk", # City of Glasgow College
	"newcollegetelford.ac.uk", # New College Telford
	"newcollpont.ac.uk", #NEW College,  Pontefract
	"newdur.ac.uk", #New College,  Durham
	"newham-vic.ac.uk", # Newham VI Form College
	"newham.ac.uk", # Newham College of Further Education
	"newhamcfe.ac.uk", # Newham College of Further Education
	"newi.ac.uk", # Glyndwr University
	"newman.ac.uk", # Newman University College
	"newphd.ac.uk", # University of Newcastle upon Tyne
	"newport.ac.uk", #University of Wales,  Newport
	"newroutephd.ac.uk", # University of Newcastle upon Tyne
	"newry-kilkeel.ac.uk", # Southern Regional College
	"newsfilm.ac.uk", # British Universities Film & Video Council
	"newtec.ac.uk", # Newham Training & Education Centre
	"newton.ac.uk", # University of Cambridge
	"newtonrigg.ac.uk", # The University of Cumbria
	"newvic.ac.uk", # Newham Sixth Form College
	"next-institute.ac.uk", # NExT Institute
	"nfer.ac.uk", # National Foundation for Educational Research
	"nfo.ac.uk", # Joint Information Systems Committee
	"nftsfilm-tv.ac.uk", # National Film & Television School
	"ngacdt.ac.uk", # University of Strathclyde
	"ngfl.ac.uk", # Education Bradford
	"ngflscotland.ac.uk", # National Grid for Scotland
	"ngs.ac.uk", # Science and Technology Facilities Council
	"ngwnet.ac.uk", # University of Edinburgh
	"nhc.ac.uk", # North Hertfordshire College
	"nhcscotland.ac.uk", # The North Highland College
	"nhm.ac.uk", # Natural History Museum
	"niace.ac.uk", # National Institute of Adult Continuing Education
	"nibsc.ac.uk", # National Institute for Biological Standards and Control
	"nicats.ac.uk", # Northern Ireland Credit Accumulation & Transfer System
	"nice.ac.uk", # The Foundation for Conductive Education
	"nicer.ac.uk", # Canterbury Christ Church University
	"nicis.ac.uk", # Economic Research Institute of Northern Ireland
	"niees.ac.uk", # University of Cambridge
	"niesr.ac.uk", # National Institute for Economic & Social Research
	"nightline.ac.uk", # National Nightline
	"nihcc.ac.uk", # Northern Ireland Hotel and Catering College
	"nihr.ac.uk", # Department of Health
	"nihrccf.ac.uk", # National Institute for Health Research
	"niimle.ac.uk", # The Queen's University of Belfast
	"niran.ac.uk", # NIRAN Limited
	"nkifhe.ac.uk", # Southern Regional College
	"nkw.ac.uk", # British Geological Survey - Keyworth
	"nlc.ac.uk", # North Lindsey College
	"nlincs-coll.ac.uk", # Lincoln College
	"nln.ac.uk", # The JNT Association
	"nlow.ac.uk", # The National Library of Women
	"nls.ac.uk", # National Library of Scotland
	"nmahp.ac.uk", # Nursing- Midwifery and Allied Health Professions
	"nmahpresearch-training.ac.uk", #Consortium members within Nursing,  Midwifery and Allied Health Professions Research Training (Scotland)
	"nmap.ac.uk", # The University of Manchester
	"nmas.ac.uk", # UCAS Limited
	"nmgm.ac.uk", # National Museums and Galleries on Merseyside
	"nmgw.ac.uk", # National Museum Wales
	"nmh.ac.uk", # Natural Environment Research Council
	"nml.ac.uk", # National Museums Liverpool
	"nmm.ac.uk", # National Maritime Museum
	"nms.ac.uk", # National Museums of Scotland
	"nmsi.ac.uk", # National Museum of Science and Industry
	"nmssc.ac.uk", # Swansea University
	"nnc.ac.uk", # North Nottinghamshire College
	"nnotts-col.ac.uk", # North Nottinghamshire College
	"noc.ac.uk", # Natural Environment Research Council
	"nocn.ac.uk", # National Open College Network
	"nocs.ac.uk", # Natural Environment Research Council
	"noolearning.ac.uk", # University of Brighton
	"norfolkcove.ac.uk", # City College Norwich
	"nortcoll.ac.uk", # Norton Radstock College
	"north-gla.ac.uk", # North Glasgow College
	"north-london.ac.uk", # University of North London
	"north-trafford-college.ac.uk", # UNKNOWN via DNS upload
	"northampton.ac.uk", # The University of Northampton
	"northamptoncollege.ac.uk", # Northampton College
	"northbham.ac.uk", # North Birmingham College
	"northbrook-online.ac.uk", # Northbrook College Sussex
	"northbrook.ac.uk", # Northbrook College Sussex
	"northbrookcollege.ac.uk", # Northbrook College - Sussex
	"northderbycollege.ac.uk", # North Derbyshire Tertiary College
	"northeast.ac.uk", # North East (of England) Universities
	"northern-consortium.ac.uk", # The Northern Consortium
	"northern.ac.uk", # Northern College for Residential Adult Education
	"northernenterpriseschools.ac.uk", # The University of Manchester
	"northerngrid.ac.uk", # University of Lancaster
	"northglasgowcollege.ac.uk", # North Glasgow College
	"northgrid.ac.uk", # The University of Manchester
	"northhighland.ac.uk", # The North Highland College
	"northland.ac.uk", # Northumberland College
	"northlindsey.ac.uk", # North Lindsey College
	"northscotland-research.ac.uk", # University of Aberdeen
	"northsuffolktc.ac.uk", # Otley College of Agriculture and Horticulture
	"northtrafford.ac.uk", # Trafford College
	"northtyneside.ac.uk", # North Tyneside College
	"northumberland-acl.ac.uk", # Northumberland County Council
	"northumberland.ac.uk", # Northumberland College
	"northumbria.ac.uk", # University of Northumbria at Newcastle
	"notredamecoll.ac.uk", # Notre Dame Sixth Form College
	"nott.ac.uk", # University of Nottingham
	"nottingham-trent.ac.uk", # Nottingham Trent University
	"nottingham.ac.uk", # University of Nottingham
	"nottinghamcourses.ac.uk", # The University of Nottingham
	"nottinghameuniversity.ac.uk", # The University of Nottingham
	"nottinghamgraduateschoolofbusiness.ac.uk", # The University of Nottingham
	"nottinghaminnovation.ac.uk", # The University of Nottingham
	"nottinghaminternationalbusinessschool.ac.uk", # The University of Nottingham
	"nottinghamknowledge.ac.uk", # The University of Nottingham
	"nowal.ac.uk", # The North West Academic Libraries Group
	"nox.ac.uk", # NERC Oxford
	"npcrdc.ac.uk", # The University of Manchester
	"nphcardiac-research.ac.uk", # Cardiac Research Dept - Northwick Park Hosp & Inst Med Res
	"npm.ac.uk", # Plymouth Marine Laboratory
	"nptc.ac.uk", # Neath Port Talbot College
	"nrc.ac.uk", # Northern Regional College
	"nrs.ac.uk", # Name Registration Service
	"nsad.ac.uk", # Norwich University College of the Arts
	"nsals.ac.uk", # Science and Technology Facilities Council
	"nsccs.ac.uk", # National Service for Computational Chemistry Software
	"nscd.ac.uk", # Northern School of Contemporary Dance
	"nsm.ac.uk", # Scottish Marine Biological Association - Oban
	"nso.ac.uk", # Joint IOS/Southampton Uni - Oceanographic Centre
	"nspcr.ac.uk", # The University of Manchester
	"nss.ac.uk", # New Synchotron Source
	"nsu.ac.uk", # Not Known
	"nsw.ac.uk", # Natural Environment Research Council
	"ntb.ac.uk", # Institute of Terrestrial Ecology - Bangor
	"ntc.ac.uk", # Trafford College
	"ntec.ac.uk", # The University of Manchester
	"ntfs.ac.uk", # The Higher Education Academy
	"ntidagenham.ac.uk", # Loughborough University
	"ntu.ac.uk", # Nottingham Trent University
	"ntyneside.ac.uk", # Tyne Metropolitan College
	"nuc.ac.uk", # Edge Hill University
	"nuca.ac.uk", # Norwich University College of the Arts
	"nucarts.ac.uk", # Norwich University College of the Arts
	"nuccam.ac.uk", # University of Nottingham
	"nuccat.ac.uk", # The Open University
	"nulc.ac.uk", # Newcastle-under-Lyme College
	"nulcollege.ac.uk", # Newcastle-under-Lyme College
	"nuqmu-2kt.ac.uk", # Edinburgh Napier University
	"nurse.ac.uk", # The Nursing Section of the RDN
	"nurture.ac.uk", # Nottingham University Research and Treatment Unit in Reproduction
	"nw-grid.ac.uk", # The University of Manchester
	"nwcs.ac.uk", # Bangor University
	"nwdtc.ac.uk", # The University of Manchester
	"nwhc.ac.uk", # North Warwickshire and Hinckley College
	"nwi.ac.uk", # North West Regional College
	"nwifhe.ac.uk", # North West Regional College
	"nwkc.ac.uk", # North West Kent College of Technology
	"nwkcollege.ac.uk", # North West Kent College
	"nwkent.ac.uk", # North West Kent College
	"nwl.ac.uk", # Institute of Hydrology - Wallingford
	"nwlcc.ac.uk", # North West London College Consortium
	"nwlts.ac.uk", # North West LeicestershireTraining Services
	"nwman.ac.uk", # Bangor University
	"nwmentoring.ac.uk", # The University of Manchester
	"nwrc.ac.uk", # North West Regional College
	"nwsgc.ac.uk", # Science and Technology Facilities Council
	"nwspm.ac.uk", # Bangor University
	"nwstudentandgraduate.ac.uk", # The University of Manchester
	"nwua.ac.uk", # North West Universities Association
	"nwupc.ac.uk", # North Western Universities Purchasing Consortium
	"nwworkbank.ac.uk", # The University of Manchester
	"nwy.ac.uk", # Institute of Terrestrial Ecology - Wytham
	"nyu.ac.uk", # New York University
	"oaa-anaes.ac.uk", # The Obstetric Anaesthetists' Association
	"oakhill.ac.uk", # Oakhill College
	"oaklands.ac.uk", # Oaklands College
	"oakwoodcourt.ac.uk", # Oakwood Court
	"oasis.ac.uk", # University of York
	"oasiscollege.ac.uk", # Oasis College of Higher Education
	"oasp.ac.uk", # Oxford Advanced Studies Programme
	"oatridge.ac.uk", # Oatridge College
	"obhe.ac.uk", # Association of Commonwealth Universities
	"obs.ac.uk", # University of Durham
	"occ.ac.uk", # Oxford and Cherwell Valley College
	"oceanography.ac.uk", #National Oceanography Centre,  Southampton
	"ocfe.ac.uk", # Oxford College of Further Education
	"ochjs.ac.uk", # Oxford Centre for Hebrew & Jewish Studies
	"ocms.ac.uk", # Oxford Centre for Mission Studies
	"ocnkm.ac.uk", # Open College Network Kent & Medway
	"ocvc.ac.uk", # Oxford and Cherwell Valley College
	"oge.ac.uk", # University of the Highlands and Islands
	"ogilvie.ac.uk", # Ogilvie Institute
	"ogsa-dai.ac.uk", # University of Edinburgh
	"ohu.ac.uk", # National Primary Care Research Development Centre
	"oibc.ac.uk", # Oxford International Biomedical Centre
	"oldbury.ac.uk", # Sandwell College
	"oldham-sfc.ac.uk", # Oldham Sixth Form College
	"oldham.ac.uk", # The Oldham College
	"oldvic.ac.uk", # Bristol Old Vic Theatre School
	"olf.ac.uk", # The Open Learning Foundation
	"oli.ac.uk", # The Open Learning Institute
	"omagh.ac.uk", # South West College
	"omaghcollege.ac.uk", # South West College
	"omcrg.ac.uk", # Oxford Mathematical and Computing Research Group
	"omii.ac.uk", # The Engineering and Physical Sciences Research Council
	"omni.ac.uk", # The University of Manchester
	"onecall.ac.uk", # Farnell Electronic Components Ltd
	"onlinesurveys.ac.uk", # University of Bristol
	"onlinm.ac.uk", # University of Leeds
	"opdems.ac.uk", # Higher Education Funding Council for England
	"open.ac.uk", # The Open University
	"opened.ac.uk", # The Open University
	"openfields.ac.uk", # Harper Adams University College
	"opensource.ac.uk", # University of Bristol
	"openuniversity.ac.uk", # The Open University
	"openurl.ac.uk", # University of Edinburgh
	"opera-archive.ac.uk", # The Opera Archive Project- School of Music- University of Leeds
	"orchardhill.ac.uk", # London Borough of Sutton
	"orchid.ac.uk", # University of Southampton
	"orientalmed.ac.uk", # International College of Oriental Medicine
	"ormskirk.ac.uk", # Skelmersdale and Ormskirk Colleges
	"orpington.ac.uk", # Orpington College of Further Education
	"orsas.ac.uk", # Higher Education Funding Council for England
	"osfc.ac.uk", # Oldham Sixth Form College
	"osier.ac.uk", # The Higher Education Academy
	"oss-watch.ac.uk", # University of Oxford
	"otc.ac.uk", # Oxford Tutorial College
	"otleycollege.ac.uk", # Otley College of Agriculture and Horticulture
	"otleyonline.ac.uk", # Otley College of Agriculture and Horticulture
	"oubs.ac.uk", # The Open University
	"outduction.ac.uk", # The Higher Education Academy
	"outofhourshelp.ac.uk", # University of Northumbria at Newcastle
	"ovc.ac.uk", # Oxford Virtual Campus
	"owl-elearning.ac.uk", # University of Sunderland
	"owsc.ac.uk", # Manchester Metropolitan University
	"ox.ac.uk", # University of Oxford
	"oxcis.ac.uk", # Centre for Islamic Studies - Oxford
	"oxdent.ac.uk", # University of Oxford PostGraduate Dental Education
	"oxford-brookes.ac.uk", # Oxford Brookes University
	"oxford-cherwell.ac.uk", # Oxford and Cherwell Valley College
	"oxford-house-college.ac.uk", # Oxford House College
	"oxford.ac.uk", # University of Oxford
	"oxfordadvancedstudies.ac.uk", # Oxford Tutorial College
	"oxfordbrookes.ac.uk", # Oxford Brookes University
	"oxfordcollege.ac.uk", # Oxford and Cherwell Valley College
	"oxfordcollegeofmarketing.ac.uk", # Oxford College of Marketing
	"oxforddrama.ac.uk", # The Oxford School of Drama
	"oxfordgsb.ac.uk", # Oxford Graduate School of Business
	"oxfordtutorialcollege.ac.uk", # Oxford Tutorial College
	"oxilp.ac.uk", # Oxford Brookes University
	"pads.ac.uk", # University of Cambridge
	"pahc.ac.uk", # University of Plymouth
	"paisley.ac.uk", # University of the West of Scotland
	"pala.ac.uk", # Poetics and Linguistics Association
	"palaeography.ac.uk", # University of London
	"palatine.ac.uk", # University of Lancaster
	"palmers.ac.uk", # Palmer's College
	"palmerscollege.ac.uk", # Palmer's College
	"pals.ac.uk", # Peterborough City Council
	"panda.ac.uk", # University of York
	"parabilis.ac.uk", # Procureweb
	"paradigm.ac.uk", # University of Oxford
	"park-college.ac.uk", # Sussex Downs College
	"parkcol.ac.uk", # Park College
	"parklane.ac.uk", # Leeds City College
	"parklanecoll.ac.uk", # Leeds City College
	"parksandgardens.ac.uk", # Parks and Gardens Data Partnership
	"particlephysics.ac.uk", # Science and Technology Facilities Council
	"partneriaethaberbangor.ac.uk", # Research Enterprise Partnership
	"pase.ac.uk", # King's College London
	"paston.ac.uk", # Paston College
	"pathcal.ac.uk", # University of Edinburgh
	"pathways.ac.uk", # Faculty of Education- University of the West of England
	"patina.ac.uk", # University of Bristol
	"patsy.ac.uk", # Division of Informatics- University of Edinburgh
	"paul-mellon-centre.ac.uk", # The Paul Mellon Centre
	"pble.ac.uk", # Project Based Learning in Engineering
	"pca.ac.uk", # Plymouth College of Art
	"pcad.ac.uk", # Plymouth College of Art and Design
	"pcae.ac.uk", # Peterborough City Council
	"pcfe.ac.uk", # City College Plymouth
	"pcfeonline.ac.uk", # City College Plymouth
	"pcl.ac.uk", # Polytechnic of Central London
	"pcmd.ac.uk", # University of Plymouth
	"pdfgroup.ac.uk", # Professional Development Foundation
	"pds.ac.uk", # University of Plymouth
	"pearl.ac.uk", # Personal Educational Advice for Rural Learners
	"peas.ac.uk", # Biotechnology and Biological Sciences Research Council
	"pedagogicequality.ac.uk", # University of Nottingham
	"peep.ac.uk", # University of Bristol
	"peerlearning.ac.uk", # The FDTL3 supported Peer Assisted Learning Project
	"pembrokeshire.ac.uk", # Pembrokeshire College
	"pembs.ac.uk", # Pembrokeshire College
	"pencoed.ac.uk", # Pencoed College
	"pendcoll.ac.uk", # Salford City College
	"pengwerncollege.ac.uk", # Royal Mencap Society
	"peninsula.ac.uk", # University of Plymouth
	"peninsular.ac.uk", # University of Plymouth
	"pennine.ac.uk", # Pennine Camphill Community Ltd
	"penwith.ac.uk", # Truro and Penwith College
	"penwithcollege.ac.uk", # Truro and Penwith College
	"penzance.ac.uk", # Penwith College
	"peoples.ac.uk", # The People's College
	"pepa.ac.uk", # The Institute for Fiscal Studies
	"pershore.ac.uk", #Warwickshire College,  Royal Leamington Spa,  Rugby and Moreton Morrell
	"perth.ac.uk", # Perth College
	"perthcoll.ac.uk", # Perth College
	"peterborough.ac.uk", # Peterborough Regional College
	"petroc.ac.uk", # Petroc College
	"pggc.ac.uk", # Glyndwr University
	"pgreen.ac.uk", # John Innes Centre
	"pharmacy.ac.uk", # University of London
	"phc.ac.uk", # University of Plymouth
	"philtar.ac.uk", # The University of Cumbria
	"phoenix.ac.uk", # Phoenix College
	"photonics.ac.uk", # The Institute of Photonics- Strathclyde
	"phr.ac.uk", # University of Southampton
	"pi-project.ac.uk", # University of Nottingham
	"pickereurope.ac.uk", # Picker Institute Europe
	"pickering.ac.uk", # George Pickering Postgraduate Centre
	"pier18.ac.uk", # London Metropolitan University
	"pion.ac.uk", # University of Plymouth
	"pldfscotland.ac.uk", # Scottish Further Education Unit
	"plumpton.ac.uk", # Plumpton College
	"plumptononline.ac.uk", # Plumpton College
	"plus.ac.uk", # Postgraduate Lifescience Universities in Scotland
	"plym.ac.uk", # University of Plymouth
	"plymouth-marine-laboratory.ac.uk", # Plymouth Marine Laboratory
	"plymouth.ac.uk", # University of Plymouth
	"plymouthart.ac.uk", # Plymouth College of Art
	"plymouthcfe.ac.uk", # Plymouth College of FE
	"pml.ac.uk", # Plymouth Marine Laboratory
	"pms.ac.uk", # University of Plymouth
	"podium.ac.uk", # London Higher
	"point.ac.uk", # Nottingham Trent University
	"pol.ac.uk", # Proudman Oceanographic Laboratory
	"political-science.ac.uk", # London School of Economics
	"politicsinaction.ac.uk", # Oxford Brookes University
	"poly-of-wales.ac.uk", # Glamorgan University
	"poms.ac.uk", # King's College London
	"pontypridd.ac.uk", # Coleg Morgannwg
	"pooleacl.ac.uk", # Borough of Poole
	"port.ac.uk", # University of Portsmouth
	"portal.ac.uk", # Distributed National Electronic Resource Portals
	"portfolio.ac.uk", # The Distributed National Electronic Resource
	"porth.ac.uk", # Centre for Welsh Medium Higher Education
	"portland.ac.uk", # Portland College
	"portsmouth-college.ac.uk", # Portsmouth College
	"portsmouth.ac.uk", # University of Portsmouth
	"postgrad.ac.uk", # Postgraduate Survey - University of Sheffield
	"postgraducas.ac.uk", # UCAS Limited
	"poverty.ac.uk", # The Open University
	"pow.ac.uk", # Glamorgan University
	"powia.ac.uk", # The Prince of Wales Institute of Architecture
	"pparc.ac.uk", # Particle Physics Research Council
	"ppre.ac.uk", # Cornwall College
	"practicum.ac.uk", # University of Glasgow
	"premia.ac.uk", # The Careers Research and Advisory Centre (CRAC) Ltd
	"prescribe.ac.uk", # British Pharmacological Society
	"preston.ac.uk", # Preston College
	"prestoncoll.ac.uk", # Preston College
	"priestley.ac.uk", # Priestley College
	"priestleycollege.ac.uk", # Priestley College
	"prifysgolioncymru.ac.uk", # Committee of Vice Chancellors & Principals
	"principlesinpatterns.ac.uk", # University of Strathclyde
	"procureweb.ac.uk", # JISC Services Management Company Ltd
	"profile.ac.uk", # PROFILE
	"programme3.ac.uk", # The Macaulay Land Use Research Institute
	"promotingpartnership.ac.uk", # The Promoting Partnership Initiative
	"proms.ac.uk", # King's College London
	"prospects.ac.uk", # Higher Education Careers Service Unit
	"proudman-oceanographic-lab.ac.uk", # Proudman Oceanographic Laboratory
	"provide.ac.uk", # University of Bristol
	"prowe.ac.uk", # The Open University
	"prs-ltsn.ac.uk", # Philosophical and Religious Studies Subject Centre - Learning and Teaching Support Network
	"psa.ac.uk", # The Political Studies Association
	"psc.ac.uk", # Peter Symonds' College
	"psci-com.ac.uk", # The University of Manchester
	"psigate.ac.uk", # Physical Sciences Gateway
	"pssru.ac.uk", # The University of Manchester
	"publicengagement.ac.uk", # University of Bristol
	"publichealth.ac.uk", # Faculty of Public Health
	"publicinterest.ac.uk", # University of Strathclyde
	"publicservices.ac.uk", # University of Oxford
	"purchasecards.ac.uk", # Procureweb
	"pursglove.ac.uk", # Prior Pursglove College
	"qaa.ac.uk", # The Quality Assurance Agency for Higher Education
	"qac.ac.uk", # Queen Alexandra College
	"qacollege.ac.uk", # Queen Alexandra College
	"qbsc.ac.uk", # Queens Business & Secretarial College
	"qeliz.ac.uk", # Queen Elizabeth Sixth Form College
	"qmbsc.ac.uk", # Queens Marlborough Business & Secretarial College
	"qmc.ac.uk", # Queen Mary's College
	"qmced.ac.uk", #Queen Margaret University,  Edinburgh
	"qmpgmc.ac.uk", # Queen Mary's Postgraduate Medical Centre
	"qmu.ac.uk", #Queen Margaret University,  Edinburgh
	"qmuc.ac.uk", #Queen Margaret University,  Edinburgh
	"qmul.ac.uk", #Queen Mary and Westfield College,  University of London
	"qmw.ac.uk", #Queen Mary and Westfield College,  University of London
	"qoru.ac.uk", # University of Kent
	"qualidata.ac.uk", # Economic and Social Data Service
	"qub.ac.uk", # The Queen's University of Belfast
	"qube.ac.uk", # City University London
	"queens-belfast.ac.uk", # Queen's University Belfast
	"queens.ac.uk", # Queens College Birmingham
	"queensu.ac.uk", # Queens University International Study Centre
	"quercus.ac.uk", # The Queen's University of Belfast
	"quest-esm.ac.uk", # The University of Reading
	"ra-review.ac.uk", # Higher Education Funding Council for England
	"raa.ac.uk", # Royal Academy of Arts
	"rac.ac.uk", # Royal Agricultural College
	"racals.ac.uk", # Redcar & Cleveland Borough Council
	"racc.ac.uk", # Richmond Adult & Community College
	"rada.ac.uk", # Royal Academy of Dramatic Art
	"radioresearch.ac.uk", # Radio Research - Bournemouth University Media School
	"rae.ac.uk", # Higher Education Funding Council for England
	"raft.ac.uk", # Raft Institute
	"ram.ac.uk", # Royal Academy of Music
	"randd.ac.uk", # CLRC
	"rareview.ac.uk", # Higher Education Funding Council for England
	"rascal.ac.uk", # The RASCAL Project
	"rave.ac.uk", # Ravensbourne
	"ravemedia.ac.uk", # Ravensbourne
	"ravensbourne.ac.uk", # Ravensbourne
	"rbge.ac.uk", # Royal Botanic Garden Edinburgh
	"rbgkew.ac.uk", # Royal Botanic Gardens
	"rbsl.ac.uk", # Regents Business School London
	"rbslondon.ac.uk", # Regent's College
	"rc-harwell.ac.uk", # Science and Technology Facilities Council
	"rca.ac.uk", # Royal College of Art
	"rcahmw.ac.uk", # Royal Commission on the Ancient and Historical Monuments of Wales
	"rcc.ac.uk", # Ripon College Cuddesdon
	"rcds.ac.uk", # Royal College of Defence Studies
	"rcm.ac.uk", # Royal College of Music
	"rcnde.ac.uk", # UK Research Centre in Nondestructive Evaluation
	"rcni.ac.uk", # Royal College of Nursing
	"rcoa.ac.uk", # The Royal College of Anaesthetists
	"rcophth.ac.uk", # The Royal College of Ophthalmologists
	"rcpch.ac.uk", # Royal College of Paediatrics and Child Health
	"rcpe.ac.uk", # Royal College of Physicians (Edinburgh)
	"rcplondon.ac.uk", # Royal College of Physicians of London
	"rcpo.ac.uk", # The Engineering and Physical Sciences Research Council
	"rcpsg.ac.uk", # University of Glasgow
	"rcpsglasg.ac.uk", # Royal College of Physicians & Surgeons of Glasgow
	"rcpsych.ac.uk", # The Royal College of Psychiatry
	"rcr.ac.uk", # The Royal College of Radiologists
	"rcs.ac.uk", # The Royal Conservatoire of Scotland
	"rcsed.ac.uk", # Royal College of Surgeons of Edinburgh
	"rcseng.ac.uk", # Royal College of Surgeons of England
	"rcuk.ac.uk", # The Engineering and Physical Sciences Research Council
	"rcukssc.ac.uk", # Natural Environment Research Council
	"rcvs.ac.uk", # Royal College of Veterinary Surgeons
	"rdg.ac.uk", # The University of Reading
	"rdi.ac.uk", # University of Southampton
	"rdn.ac.uk", # Resource Discovery Network
	"rdnet.ac.uk", # RDNet - Resource Discovery Network
	"re-net.ac.uk", # Training and Development Agency for Schools
	"reading-college.ac.uk", # Oxford and Cherwell Valley College
	"reading.ac.uk", # The University of Reading
	"reag.ac.uk", # Procureweb
	"realcaledonian.ac.uk", # Glasgow Caledonian University
	"realisingopportunities.ac.uk", # University of Newcastle upon Tyne
	"reallifemethods.ac.uk", # National Centre for e-Social Science
	"reap.ac.uk", # University of Strathclyde
	"reaseheath.ac.uk", # Reaseheath College
	"redbridge-college.ac.uk", # Redbridge College
	"redbridge-iae.ac.uk", # Redbridge London Borough Council
	"redbridge.ac.uk", # Redbridge College
	"reednet.ac.uk", # Harper Adams University College
	"ref.ac.uk", # Higher Education Funding Council for England
	"regard.ac.uk", # Research Grants Archive & Database
	"regener8.ac.uk", # University of Leeds
	"regent-academy.ac.uk", # Regent Academy of Fine Arts
	"regent-college.ac.uk", # Regent College
	"regents-tc.ac.uk", # Elim Foursquare Gospel Alliance
	"regents.ac.uk", # Regent's College
	"regentscollege.ac.uk", # Regent's College
	"regional-studies-assoc.ac.uk", # Regional Studies Association
	"regionalsciencecentreoldham.ac.uk", # Oldham Sixth Form College
	"regionalvisions.ac.uk", # University of Cambridge
	"reid-kerr.ac.uk", # Reid Kerr College
	"reidkerr.ac.uk", # Reid Kerr College
	"reigate.ac.uk", # Reigate College
	"relateinstitute.ac.uk", # Doncaster College
	"reload.ac.uk", # University of Strathclyde
	"relu.ac.uk", # University of Newcastle upon Tyne
	"ren.ac.uk", # Arts and Humanities Research Council
	"rendleshamtc.ac.uk", # Otley College of Agriculture and Horticulture
	"rerc.ac.uk", # Birkbeck College
	"research-councils.ac.uk", # Research Councils Head Office
	"research-socialsciences.ac.uk", # London School of Economics
	"researchconcordat.ac.uk", # Research Councils UK
	"researchersinresidence.ac.uk", # AEA Technology plc
	"researchscotland.ac.uk", # University of Aberdeen
	"resl.ac.uk", # The Open University
	"restore.ac.uk", # University of Southampton
	"results.ac.uk", # The University of Manchester
	"rewind.ac.uk", # University of Dundee
	"rfdc.ac.uk", # Gloucestershire College of Arts and Technology
	"rfhsm.ac.uk", # Royal Free Hospital School of Medicine
	"rgo.ac.uk", # Royal Greenwich Observatory
	"rgu.ac.uk", # The Robert Gordon University
	"rhbnc.ac.uk", # Royal Holloway and Bedford New College
	"rhcda-aac.ac.uk", # Philosophical and Religious Studies Subject Centre - Learning and Teaching Support Network
	"rhfc.ac.uk", # Swansea University
	"rhs.ac.uk", # Royal Historical Society
	"rhul.ac.uk", # Royal Holloway and Bedford New College
	"rhyac.ac.uk", # Welsh Education Research Network (WERN)
	"ri.ac.uk", # Royal Institution of Great Britain
	"riae.ac.uk", # Redbridge Institute of Adult Education
	"richmond-utcoll.ac.uk", # Richmond upon Thames College
	"richmond.ac.uk", # Richmond The American International University in London
	"richmondbusinessschool.ac.uk", # Richmond Adult Community College
	"richuish.ac.uk", # Richard Huish College
	"riding.ac.uk", # RIDING Project
	"rin.ac.uk", # The British Library
	"ripon-cuddesdon.ac.uk", # Ripon Theological College
	"riscl.ac.uk", # Regent's College
	"riverside.ac.uk", # Riverside College Halton
	"riversidecollege.ac.uk", # Riverside College Halton
	"riversidecollegehalton.ac.uk", # Riverside College Halton
	"rivic.ac.uk", # Bangor University
	"rl.ac.uk", # Science and Technology Facilities Council
	"rlg.ac.uk", # Research Libraries Group
	"rln.ac.uk", # Higher Education Funding Council for England
	"rlo-cetl.ac.uk", # London Metropolitan University
	"rluk.ac.uk", # Research Libraries UK
	"rma.ac.uk", # The Royal Musical Association
	"rnc.ac.uk", # The Royal National College for the Blind
	"rncb.ac.uk", # The Royal National College for the Blind
	"rncm.ac.uk", # Royal Northern College of Music
	"rnib-redhill.ac.uk", # RNIB Redhill College
	"rnibcollege.ac.uk", # RNIB College Loughborough
	"rnibncw.ac.uk", # New College Worcester
	"rnibvocoll.ac.uk", # RNIB College Loughborough
	"rochdalesfc.ac.uk", # Rochdale Sixth Form College
	"rodbaston.ac.uk", # South Staffordshire College
	"roe.ac.uk", # Science and Technology Facilities Council
	"roehampton.ac.uk", # Roehampton University
	"romeo.ac.uk", # University of Nottingham
	"rosemount.ac.uk", # Rosemount Lifelong Learning
	"roslin.ac.uk", # Biotechnology and Biological Sciences Research Council
	"rothamsted.ac.uk", # Rothamsted Research
	"rotherham-coll.ac.uk", # Rotherham College of Arts & Technology
	"rotherham.ac.uk", # Rotherham College of Arts & Technology
	"rothervalley.ac.uk", # Rotherham College of Arts and Technology
	"roundtable.ac.uk", # Trial & Evaluation of Roundtable Methodology & Flashlight Program - JISC Project
	"routesintolanguages.ac.uk", # University of Southampton
	"rowett.ac.uk", # University of Aberdeen
	"rowleycollege.ac.uk", # Rowley Regis College
	"royagcol.ac.uk", # Royal Agricultural College
	"royal-institution.ac.uk", # Royal Institution of Great Britain
	"royalacademyofmusic.ac.uk", # Royal Academy of Music
	"royalarmouries.ac.uk", # Royal Armouries Museum
	"royalhollowayinternational.ac.uk", # Royal Holloway and Bedford New College
	"royalseal.ac.uk", # Associated Board of the Royal School of Music
	"royalsoc.ac.uk", # The Royal Society
	"royalsociety.ac.uk", # The Royal Society
	"rps.ac.uk", # University of St Andrews
	"rsa-ls.ac.uk", # Regional Studies Association
	"rsamd.ac.uk", # The Royal Scottish Academy of Music and Drama
	"rsc-cymru.ac.uk", # Swansea University
	"rsc-east-midlands.ac.uk", # Loughborough College
	"rsc-east.ac.uk", # Anglia Ruskin University
	"rsc-eastern.ac.uk", # Anglia Ruskin University
	"rsc-em.ac.uk", # Loughborough College
	"rsc-london.ac.uk", # University of London
	"rsc-ne-scotland.ac.uk", # Edinburgh's Telford College
	"rsc-ni.ac.uk", # The Queen's University of Belfast
	"rsc-north.ac.uk", # University of Sunderland
	"rsc-northern.ac.uk", # University of Sunderland
	"rsc-northwest.ac.uk", # University of Lancaster
	"rsc-south-east.ac.uk", # University of Kent
	"rsc-south-west.ac.uk", # University of Plymouth
	"rsc-southeast.ac.uk", # University of Kent
	"rsc-sw-scotland.ac.uk", # University of Glasgow
	"rsc-wales.ac.uk", # Swansea University
	"rsc-westmidlands.ac.uk", # University of Wolverhampton
	"rsc-wm.ac.uk", # University of Wolverhampton
	"rsc-yh.ac.uk", # University of Leeds
	"rsc-yorkshire-humber.ac.uk", # University of Leeds
	"rsc-yorkshire-humberside.ac.uk", # University of Leeds
	"rscem.ac.uk", # Loughborough College
	"rsd-exeter.ac.uk", # The West of England Royal School for the Deaf
	"rsfc.ac.uk", # Knowsley Community College
	"rslg.ac.uk", # Higher Education Funding Council for England
	"rslp.ac.uk", # The Research Support Libraries Group
	"rsm.ac.uk", # The Royal Society of Medicine
	"rsms.ac.uk", # Royal School of Military Survey
	"rsp.ac.uk", # University of Nottingham
	"rugby-coll.ac.uk", # University of Warwick
	"rugby-college.ac.uk", #Warwickshire College,  Royal Leamington Spa,  Rugby and Moreton Morrell
	"rugby.ac.uk", # Rugby College of FE
	"rugbycoll.ac.uk", #Warwickshire College,  Royal Leamington Spa,  Rugby and Moreton Morrell
	"rugit.ac.uk", # University of Bristol
	"runshaw.ac.uk", # Runshaw College
	"runshawcollege.ac.uk", # Runshaw College
	"rural-health.ac.uk", # Institute of Rural Health
	"ruru.ac.uk", # University of Edinburgh
	"ruskin.ac.uk", # Ruskin College
	"russell-group.ac.uk", # London School of Economics and Political Science
	"russellgroup.ac.uk", # London School of Economics and Political Science
	"rutc.ac.uk", # Richmond upon Thames College
	"rutherford.ac.uk", # Rutherford Appleton Laboratory
	"rutlandcollege.ac.uk", # Tresham Institute
	"rvc.ac.uk", # Royal Veterinary College
	"rwcmd.ac.uk", # Royal Welsh College of Music and Drama
	"s-cat.ac.uk", # Shrewsbury College of Arts and Technology
	"s-cheshire.ac.uk", # South Cheshire College
	"s-devon.ac.uk", # South Devon College
	"sac.ac.uk", # The Scottish Agricultural College
	"sacca.ac.uk", # The Quality Assurance Agency for Higher Education
	"saclnet.ac.uk", # Southend on Sea Borough Council
	"sacwg.ac.uk", # The Student Assessment and Classification Working Group
	"saes.ac.uk", # Stockton Borough Council
	"safa.ac.uk", # Scottish Advanced Formal Analysis
	"sages.ac.uk", # University of Edinburgh
	"sahfos.ac.uk", # Natural Environment Research Council
	"sainsbury-laboratory.ac.uk", # The Sainsbury Laboratory
	"sainsburyinstituteforart.ac.uk", # University of East Anglia
	"salford-col.ac.uk", # Salford College
	"salford.ac.uk", # University of Salford
	"salfordcc.ac.uk", # Salford City College
	"salfordcitycollege.ac.uk", # Salford City College
	"salisbury-college.ac.uk", # Wiltshire College
	"salisbury.ac.uk", # Wiltshire College
	"salisburycollege.ac.uk", # Salisbury College
	"saltash.ac.uk", # Cornwall College
	"salts.ac.uk", # North West Regional College
	"samc.ac.uk", # Scottish Advanced Manufacturing Centre
	"sams.ac.uk", # Scottish Association for Marine Science
	"sandwell.ac.uk", # Sandwell College
	"sandwellcollege.ac.uk", # Sandwell College
	"sanger.ac.uk", # Genome Research Limited
	"sapc.ac.uk", # Society for Academic Primary Care
	"sapphire.ac.uk", # The Scottish Archive of Print and Publishing History Records
	"sari.ac.uk", # The Macaulay Land Use Research Institute
	"sartre.ac.uk", # Cardiff University
	"sarum.ac.uk", # Sarum College
	"sas.ac.uk", # University of London
	"sbc.ac.uk", # South Birmingham College
	"sbirmc.ac.uk", # South Birmingham College
	"sbrn.ac.uk", # University of Dundee
	"sbu.ac.uk", # London South Bank University
	"sc-toolkit.ac.uk", # Medical Research Council
	"sc1.ac.uk", # The Royal Society
	"scaan.ac.uk", # Scottish Computer Assisted Assessment Network
	"scarb-6-form.ac.uk", # Scarborough Sixth Form College
	"sccc.ac.uk", # Scottish Consultative Council on the Curriculum
	"sccjr.ac.uk", # University of Stirling
	"scct.ac.uk", # Sports Coaching Competences for Teachers
	"sce.ac.uk", # Stevenson College Edinburgh
	"schillerlondon.ac.uk", # Schiller International University
	"schml.ac.uk", # University of Southampton
	"schome.ac.uk", # The Open University
	"schoms.ac.uk", # Aston University
	"school-economic-science.ac.uk", # The School of Economic Science
	"sci.ac.uk", # Scottish Further Education Unit
	"sciencesigns.ac.uk", # University of Wolverhampton
	"scills.ac.uk", # University of Dundee
	"scilly-acl.ac.uk", # Council of the Isles of Scilly:  Lifelong Learning
	"scinet.ac.uk", # John Innes Institute
	"scir.ac.uk", # Scottish Centre for Information Research
	"scisci.ac.uk", # University of Glasgow
	"scitech.ac.uk", # Science and Technology Facilities Council
	"scoc.ac.uk", # Scottish Churches' Open College
	"scodhe.ac.uk", # University of Winchester
	"scola.ac.uk", # London Borough of Sutton
	"sconul.ac.uk", #Society of College,  National & University Libraries
	"scoopstudy.ac.uk", # University of East Anglia
	"scop.ac.uk", # GuildHE
	"scope-uk.ac.uk", #Imperial College of Science,  Technology and Medicine
	"scopic.ac.uk", # University of Cambridge
	"score.ac.uk", # London Business School
	"scot-hip.ac.uk", # University of Dundee
	"scot-ship.ac.uk", # University of Dundee
	"scot.ac.uk", # Scottish College of Textiles
	"scotcatproject.ac.uk", # University of Abertay Dundee
	"scotchem.ac.uk", # University of Glasgow
	"scotcit.ac.uk", # SHEFC C& IT Programme
	"scotcol.ac.uk", # Scottish Further Education Unit
	"scotgrid.ac.uk", # ScotGRID
	"scotland-aspirenorth.ac.uk", # North Forum for Widening Participation in Further and Higher Education
	"scotland-northforum.ac.uk", # University of Aberdeen
	"scotlandscolleges.ac.uk", # Scottish Further Education Unit
	"scottishborderscampus.ac.uk", # Borders College
	"scottishciviljustice.ac.uk", # University of Aberdeen
	"scottishcorpus.ac.uk", # Scottish Corpus of Texts and Speech
	"scottishdisabilityteam.ac.uk", # Scottish Disability Team
	"scottisheconomics.ac.uk", # University of Stirling
	"scottishinsight.ac.uk", # University of Strathclyde
	"scottishmarineinstitute.ac.uk", # Scottish Marine Institute
	"scottishresearch.ac.uk", # Scottish Funding Councils for Further and Higher Education
	"scottishresearchpools.ac.uk", # The Scottish Further and Higher Education Funding Council
	"scphrp.ac.uk", # Medical Research Council
	"scpr.ac.uk", # National Centre for Social Research
	"scran.ac.uk", # Scottish Cultural Resources Access Network
	"scre.ac.uk", # University of Glasgow
	"screenacademyscotland.ac.uk", # The Edinburgh College of Art
	"scri.ac.uk", # Scottish Crop Research Institute
	"scrolla.ac.uk", # Scottish Centre for Research into On-Line Learning & Assessment
	"scrsj.ac.uk", # Scottish Centre for Research on Social Justice
	"scurl.ac.uk", # Scottish Confederation of University and Research Service
	"scutrea.ac.uk", # Standing Conference on University Teaching and Research in the Education of Adults
	"scva.ac.uk", # University of East Anglia
	"scweims.ac.uk", # Student Centric Web-based Educational & Information Management System- Edinburgh
	"sdc.ac.uk", # Sussex Downs College
	"sdhi.ac.uk", # University of Dundee
	"sdn.ac.uk", # University of Leeds
	"sdss.ac.uk", # University of Edinburgh
	"sdt.ac.uk", # Scottish Disability Team
	"se-derbys.ac.uk", # South East Derbyshire College
	"se-essex-college.ac.uk", # South Essex College of Further and Higher Education
	"sea-mammal-research-unit.ac.uk", # Sea Mammal Research Unit
	"seacams.ac.uk", # Bangor University
	"search.ac.uk", # UK Academic Web Searching
	"seas.ac.uk", # University of Sheffield
	"secureharvests.ac.uk", # Biotechnology and Biological Sciences Research Council
	"seda.ac.uk", # Association of Commonwealth Universities
	"sedc.ac.uk", # Derby College
	"sedg.ac.uk", # The University of Manchester
	"seecoll.ac.uk", # South Essex College of Further and Higher Education
	"seevic-college.ac.uk", # South East Essex Sixth Form College
	"seevic.ac.uk", # South East Essex Sixth Form College
	"sefton-acl.ac.uk", # Sefton Council
	"sefton.ac.uk", # Southport College
	"selby.ac.uk", # Selby College
	"sellyoak.ac.uk", # The Council of Selly Oak Colleges Ltd.
	"selsey.ac.uk", # Selsey Outcentre for Chichester College
	"sense-east.ac.uk", # Sense East
	"sepnet.ac.uk", # University of Southampton
	"sera.ac.uk", # Scottish Educational Research Association
	"serc-enterprise.ac.uk", # South Eastern Regional College
	"serc.ac.uk", # South Eastern Regional College
	"serena.ac.uk", # University of Dundee
	"serio.ac.uk", # University of Plymouth
	"sessa.ac.uk", # Southern England Students Sports Association
	"setsquared.ac.uk", # University of Bath
	"sfc.ac.uk", # The Scottish Further and Higher Education Funding Council
	"sfefc.ac.uk", # The Scottish Further and Higher Education Funding Council
	"sfeu.ac.uk", # Scottish Further Education Unit
	"sfhub.ac.uk", # University of Liverpool
	"sfps.ac.uk", # Roehampton University
	"sfra.ac.uk", # Heriot-Watt University
	"sfre.ac.uk", # British Educational Research Association
	"sfs.ac.uk", # The Society for French Studies
	"sfx.ac.uk", # St Francis Xavier Sixth Form College
	"sghms.ac.uk", # St. George's Hospital Medical School
	"sgiliaith.ac.uk", # Coleg Meirion Dwyfor
	"sgm.ac.uk", # Society for General Microbiology
	"sgmc.ac.uk", # Sir George Monoux College
	"sgpe.ac.uk", # Scottish Graduate Programme in Economics
	"sgul.ac.uk", # St George's Hospital Medical School
	"sharedsolutions.ac.uk", # The Open University
	"sharegeo.ac.uk", # University of Edinburgh
	"sharingpractice.ac.uk", # University of Kent
	"sheef.ac.uk", # University of Strathclyde
	"shef.ac.uk", # University of Sheffield
	"shefc.ac.uk", # The Scottish Further and Higher Education Funding Council
	"sheffcol.ac.uk", # The Sheffield College
	"sheffield-hallam.ac.uk", # Sheffield Hallam University
	"sheffield-lls.ac.uk", # Sheffield City Council
	"sheffield.ac.uk", # University of Sheffield
	"sheffieldcareersfairs.ac.uk", # University of Sheffield
	"sheffieldcetle.ac.uk", # University of Sheffield
	"sheffieldlegalfair.ac.uk", # University of Sheffield
	"shenasimon.ac.uk", # Shena Simon College
	"sherpa-leap.ac.uk", # University College London
	"sherpa.ac.uk", # Securing a Hybrid Environment for Research Preservation and Access.
	"shiplay.ac.uk", # UNKNOWN via DNS upload
	"shipley.ac.uk", # Shipley College
	"shipleycollege.ac.uk", # Shipley College
	"shootershill.ac.uk", # Shooters Hill Post 16 Campus
	"shrewsbury.ac.uk", # Shrewsbury College of Arts and Technology
	"shu.ac.uk", # Sheffield Hallam University
	"shuttleworth.ac.uk", # Bedford College
	"shuttleworthcollege.ac.uk", # Bedford College
	"sicsa.ac.uk", # University of Edinburgh
	"side.ac.uk", # University of Newcastle upon Tyne
	"sie.ac.uk", # Scottish Institute for Enterprise
	"sifa.ac.uk", # University of East Anglia
	"sigma-cetl.ac.uk", # Loughborough University
	"sigma-network.ac.uk", # Loughborough University
	"sign.ac.uk", # Scottish Intercollegiate Guidelines Network
	"sihe.ac.uk", # Swansea Metropolitan University
	"sikh-uni.ac.uk", # World Sikh University London
	"simbios.ac.uk", # University of Abertay Dundee
	"simian.ac.uk", # University of Surrey
	"sinapse.ac.uk", # University of Edinburgh
	"sinet.ac.uk", # The University of Manchester
	"singlecellanalysis.ac.uk", #Imperial College of Science,  Technology and Medicine
	"singlecellproteomics.ac.uk", #Imperial College of Science,  Technology and Medicine
	"sinica.ac.uk", # University of Oxford
	"sino-cs.ac.uk", # University of Abertay Dundee
	"sipr.ac.uk", # University of Dundee
	"sire.ac.uk", # Scottish Institute for Research in Economics
	"sirius.ac.uk", # Science and Technology Facilities Council
	"sis.ac.uk", # University of Oxford
	"siser.ac.uk", # Heriot-Watt University
	"sit.ac.uk", # Suffolk New College
	"siti.ac.uk", # The Scottish International Tourism Institute
	"siva.ac.uk", # The UK Society for Intravenous Anaesthesia
	"sjd.ac.uk", # Sir John Deane's College
	"sjr.ac.uk", # St John Rigby College
	"skelmersdale.ac.uk", # Newcastle College
	"skillswestyorks.ac.uk", # University of Huddersfield
	"slc.ac.uk", # South Lanarkshire College
	"slcollege.ac.uk", # South Leicestershire College
	"slcs.ac.uk", # MyScience.co Limited
	"sleaford.ac.uk", # Boston College
	"slg.ac.uk", # Newcastle-under-Lyme College
	"sli-institute.ac.uk", # Institute for System Level Integration
	"sloan.ac.uk", # London Business School
	"slsa.ac.uk", # University of Kent
	"sma.ac.uk", # Society for Music Analysis
	"small-angle.ac.uk", # Science and Technology Facilities Council
	"smart.ac.uk", # School of Music and Recording Technology
	"smc.ac.uk", # St Mary's College
	"smcblackburn.ac.uk", # St Mary's College Blackburn
	"smcl.ac.uk", # St Mary's College
	"smg.ac.uk", # Higher Education Funding Council for England
	"smi.ac.uk", # Scottish Marine Institute
	"smithinst.ac.uk", # Smith Institute
	"sml.ac.uk", # St Mary's College
	"smru.ac.uk", # Sea Mammal Research Unit
	"smsj.ac.uk", # The College of St. Mark and St. John
	"smstc.ac.uk", # Heriot-Watt University
	"smu.ac.uk", # Swansea Metropolitan University
	"smuc.ac.uk", #St Mary's University College,  Twickenham
	"smucb.ac.uk", # St Mary's University College
	"snc.ac.uk", # South Nottingham College
	"soas.ac.uk", # School of Oriental and African Studies
	"soc.ac.uk", #National Oceanography Centre,  Southampton
	"socialpolicy.ac.uk", # London School of Economics Social Policy Department
	"socialsciences.ac.uk", # London School of Economics
	"societyofjewelleryhistorians.ac.uk", # The Society of Jewellery Historians
	"societyoflegalscholars.ac.uk", # The Society of Legal Scholars
	"socres.ac.uk", # National Centre for Social Research
	"socsciscotland.ac.uk", # University of Edinburgh
	"software.ac.uk", # University of Edinburgh
	"soillse.ac.uk", # University of the Highlands and Islands
	"solent-university.ac.uk", # Southampton Solent University
	"solent.ac.uk", # Southampton Solent University
	"solentuniversity.ac.uk", # Southampton Solent University
	"solihull.ac.uk", # Solihull College
	"solihullsfc.ac.uk", #The Sixth Form College,  Solihull
	"solsfc.ac.uk", #The Sixth Form College,  Solihull
	"somerset.ac.uk", # Somerset College of Arts and Technology
	"somersetcollege.ac.uk", # Somerset College of Arts and Technology
	"somersetcolleges.ac.uk", # Richard Huish College
	"sothebys-institute.ac.uk", # Sotheby's Institute
	"soton.ac.uk", # University of Southampton
	"sots.ac.uk", # University of Cambridge
	"soundsoftware.ac.uk", #Queen Mary and Westfield College,  University of London
	"soundwell.ac.uk", # Soundwell College
	"source.ac.uk", # The Open University
	"south-lanarkshire-college.ac.uk", # South Lanarkshire College
	"south-nottingham.ac.uk", # South Nottingham College
	"south-thames.ac.uk", # South Thames College
	"southampton-city.ac.uk", # Southampton City College
	"southampton-institute.ac.uk", # Southampton Institute of HE
	"southampton-solent-university.ac.uk", # Southampton Solent University
	"southampton.ac.uk", # University of Southampton
	"southamptonsolentuniversity.ac.uk", # Southampton Solent University
	"southbank-university.ac.uk", # Southbank University
	"southcheshirecollege.ac.uk", # South Cheshire College
	"southcoll-bolton.ac.uk", # South College Bolton
	"southdevon.ac.uk", # South Devon College
	"southdowns.ac.uk", # South Downs College
	"southeastdtc.ac.uk", # University of Surrey
	"southeastessex.ac.uk", # South East Essex College
	"southeastscotlandforum.ac.uk", # South East Forum
	"southend-acl-college.ac.uk", # Southend on Sea Borough Council
	"southend-adult.ac.uk", # Southend Adult Community College
	"southend.ac.uk", # South Essex College of Further and Higher Education
	"southendcollege.ac.uk", # South East Essex College
	"southessex.ac.uk", # South Essex College of Further and Higher Education
	"southessexcollege.ac.uk", # South East Essex College
	"southgate.ac.uk", # Southgate College
	"southgrid.ac.uk", # Science and Technology Facilities Council
	"southkent.ac.uk", # South and West Kent College
	"southport-college.ac.uk", # Southport College
	"southport.ac.uk", # Southport College
	"southsefton6thform.ac.uk", # South Sefton 6th Form College
	"southsefton6thformcollege.ac.uk", # South Sefton 6th Form College
	"southseftoncollege.ac.uk", # South Sefton 6th Form College
	"southstaffs.ac.uk", # South Staffordshire College
	"southwark.ac.uk", # Southwark College
	"southwestcollege.ac.uk", # South West College
	"spa.ac.uk", # UCAS Limited
	"spalding.ac.uk", # Boston College
	"sparc.ac.uk", # The University of Reading
	"sparqs.ac.uk", # sparqs
	"sparsholt.ac.uk", #Sparsholt College,  Hampshire
	"spat.ac.uk", # University of Plymouth
	"spatialeconomics.ac.uk", # London School of Economics and Political Science
	"spc.ac.uk", # Regent's College
	"speedproject.ac.uk", # Staffordshire University
	"spelthorne.ac.uk", # Spelthorne College
	"sphere.ac.uk", # The Higher Education Academy
	"spider.ac.uk", # Science and Technology Facilities Council
	"spin.ac.uk", # Universities Scotland
	"spinesurgeons.ac.uk", # The British Association of Spine Surgeons
	"splint-cetl.ac.uk", # University of Leicester
	"spokenword.ac.uk", # Glasgow Caledonian University
	"spr.ac.uk", # Society for Psychical Research
	"sprg.ac.uk", # The University of Manchester
	"spsrn.ac.uk", # Scottish Patient Safety Research Network
	"spurgeons.ac.uk", # Spurgeons College
	"sqhwesternconsortium.ac.uk", # University of Strathclyde
	"src.ac.uk", # Southern Regional College
	"srf.ac.uk", # Science Research Foundation
	"srhe.ac.uk", # Society for Research into Higher Education
	"srip.ac.uk", # University of Nottingham
	"sroc.ac.uk", # The University of Northampton
	"srs.ac.uk", # Science and Technology Facilities Council
	"ssees.ac.uk", # School of Slavonic and East European Studies
	"ssfc.ac.uk", # Shrewsbury Sixth Form College
	"ssmh.ac.uk", # Scottish Further Education Unit
	"sspc.ac.uk", # University of Dundee
	"sspf.ac.uk", # Scottish Structural Proteomics Facility
	"sssfc.ac.uk", # South Sefton 6th Form College
	"ssu.ac.uk", # Southampton Solent University
	"st-and.ac.uk", # University of St Andrews
	"st-andrews.ac.uk", # University of St Andrews
	"st-austell.ac.uk", # Cornwall College
	"st-davids-coll.ac.uk", # St David's Catholic College
	"st-ives.ac.uk", # Penwith College
	"st-lukescatholicsixthform.ac.uk", # St. Luke's Catholic Sixth Form College
	"st-patricks.ac.uk", # St. Patrick's International College
	"stac.ac.uk", # St. Andrew's College
	"staffdevelopment.ac.uk", # The Staff Development Forum
	"staffordcoll.ac.uk", # Stafford College
	"staffordshire.ac.uk", # Staffordshire University
	"staffs.ac.uk", # Staffordshire University
	"stamford.ac.uk", # New College Stamford
	"stanmore.ac.uk", # Stanmore College
	"star.ac.uk", # University of Edinburgh
	"starlink.ac.uk", # Science and Technology Facilities Council
	"stars.ac.uk", # Coventry University
	"starsprocess.ac.uk", # CETL Bedfordshire
	"statistics.ac.uk", # Higher Education Statistics Agency
	"statstutor.ac.uk", # Loughborough University
	"stbr.ac.uk", # St Brendans Sixth Form College
	"stbrendans.ac.uk", # St Brendans Sixth Form College
	"stbrn.ac.uk", # St Brendan's Sixth Form College
	"stc.ac.uk", # South Tyneside College
	"stchads.ac.uk", # St. Chads College
	"stcharles.ac.uk", # St. Charles Catholic Sixth Form College
	"stclares.ac.uk", # St. Clare's College Oxford
	"stcoll.ac.uk", # Trafford College
	"stdoms.ac.uk", # St Dominic's Sixth Form College
	"stec.ac.uk", # University of Edinburgh
	"stem-transition.ac.uk", # University of Liverpool
	"stem.ac.uk", # University of Birmingham
	"stephenson.ac.uk", # Steohenson College Coalville
	"stephensoncoll.ac.uk", # Stephenson College
	"sterling.ac.uk", # University of Stirling
	"stets.ac.uk", # The Southern Theological Educational & Training Scheme
	"stevenson.ac.uk", # Stevenson College Edinburgh
	"stfc.ac.uk", # Science and Technology Facilities Council
	"stgeorges.ac.uk", # St George's Hospital Medical School
	"sth-leic-coll.ac.uk", # South Leicstershire College
	"sthelens.ac.uk", # St Helens College
	"sthelensacl.ac.uk", #Adult and Community Learning,  St. Helens
	"stir.ac.uk", # University of Stirling
	"stirling.ac.uk", # University of Stirling
	"stjohns-nottm.ac.uk", # St. John's College - Nottingham
	"stloyes.ac.uk", # St Loye's College Foundation
	"stlukes.ac.uk", # St. Luke's Adult Education Centre
	"stmartins.ac.uk", # The University of Cumbria
	"stmarys-belfast.ac.uk", # St Mary's University College
	"stmarys-blackburn.ac.uk", # St. Mary's College - Blackburn
	"stmarys-sfc.ac.uk", # St. Mary's Sixth Form College
	"stmarysblackburn.ac.uk", # St Mary's College Blackburn
	"stmaryslondon.ac.uk", # St. Mary's Sixth Form College
	"stmichaels.ac.uk", # St. Michael's Theological College
	"stockbill.ac.uk", # Stockton Riverside College
	"stockport.ac.uk", # Stockport College
	"stockton.ac.uk", # Stockton Riverside College
	"stocktonsfc.ac.uk", # Stockton Sixth Form College
	"stocsf.ac.uk", # Stockton Sixth Form College
	"stoke6fc.ac.uk", # City of Stoke-on-Trent Sixth Form College
	"stokecoll.ac.uk", # Stoke-on-Trent College
	"stokecollege.ac.uk", # Stoke-on-Trent College
	"stokesfc.ac.uk", # City of Stoke-on-Trent Sixth Form College
	"stomp.ac.uk", # University of Surrey
	"stonyhurst.ac.uk", # Stonyhurst College
	"storcuram.ac.uk", # University of Strathclyde
	"stourbridge.ac.uk", # Stourbridge College
	"stow.ac.uk", # Stow College
	"stran.ac.uk", # Stranmillis University College
	"strat-avon.ac.uk", # Stratford-upon-Avon College
	"stratavoncol.ac.uk", # Stratford-upon-Avon College
	"stratford.ac.uk", # Stratford-upon-Avon College
	"stratfordislanduniversitycentre.ac.uk", # Birkbeck College
	"stratforduniversitycentre.ac.uk", # Birkbeck College
	"stratgroup.ac.uk", # Sequence Stratigraphy Research Group- University of Liverpool
	"strath.ac.uk", # University of Strathclyde
	"strathclyde.ac.uk", # University of Strathclyde
	"strathmore.ac.uk", # Strathmore College
	"strode-coll.ac.uk", # Strode College
	"strode-college.ac.uk", # Strode College
	"strodes.ac.uk", # Strode's College
	"strodeslanguages.ac.uk", # Strode's College
	"stroud.ac.uk", # Stroud College in Gloucestershire
	"stroudcol.ac.uk", # Stroud College in Gloucestershire
	"stroudcollege.ac.uk", # Stroud College
	"ststephenshouse.ac.uk", # St. Stephens House
	"sttc.ac.uk", # The Scottish Technology Centre
	"studentshows.ac.uk", # University for the Creative Arts
	"studyinengland.ac.uk", # South Leicestershire College
	"studyingeconomics.ac.uk", # University of Bristol
	"studyinglanguages.ac.uk", # University of Southampton
	"studylondon.ac.uk", # London Higher
	"stvincent.ac.uk", # St. Vincent College
	"submit.ac.uk", # Joint Information Systems Committee
	"suburbansolutions.ac.uk", # University of Cambridge
	"succeeds.ac.uk", # Scottish University - Consortium Career Planning and Employment
	"suffolk-maag.ac.uk", # Suffolk Medical Audit Advisory Group
	"suffolk.ac.uk", # Suffolk New College
	"suffolkbusinessschool.ac.uk", # Televersity for Suffolk Company Limited
	"sulc.ac.uk", # Staffordshire University
	"sulsa.ac.uk", # University of Edinburgh
	"sums.ac.uk", # Sheffield University Management School
	"sumsconsulting.ac.uk", # Procureweb
	"suncat.ac.uk", # University of Edinburgh
	"suncol.ac.uk", # Sunderland College
	"sund.ac.uk", # University of Sunderland
	"sunderland.ac.uk", # University of Sunderland
	"sunitec.ac.uk", # Sunderland ITEC
	"supa.ac.uk", # University of Edinburgh
	"supc.ac.uk", # Cardiff University
	"superdarn.ac.uk", # University of Lancaster
	"superjanet.ac.uk", # The JNT Association
	"superjournal.ac.uk", # The University of Manchester
	"supply-chain.ac.uk", # Ayr College
	"surf.ac.uk", # Staffordshire University
	"surrart.ac.uk", # University for the Creative Arts
	"surrealismcentre.ac.uk", # The University of Manchester
	"surrey.ac.uk", # University of Surrey
	"surreyacl.ac.uk", # Surrey Adult and Community Learning
	"surreyibc.ac.uk", # University of Surrey
	"surreyspace.ac.uk", # Surrey Space Technology Limited
	"surveynet.ac.uk", # University of Essex
	"sussex.ac.uk", # University of Sussex
	"sussexcoast.ac.uk", #Sussex Coast College,  Hastings
	"sussexdowns.ac.uk", # Sussex Downs College
	"sussexmedicalschool.ac.uk", # University of Brighton
	"sussexvirtualcollege.ac.uk", # Central Sussex College
	"sussp.ac.uk", # Scottish Universities Summer Schools in Physics
	"sustainablelifestyles.ac.uk", # University of Surrey
	"sustainablepractices.ac.uk", # The University of Manchester
	"sustainableproperty.ac.uk", # Kingston University
	"sustainabletechnologies.ac.uk", # Brunel University
	"susx.ac.uk", # University of Sussex
	"sutcol.ac.uk", # Birmingham Metropolitan College
	"sutcoll.ac.uk", # Birmingham Metropolitan College
	"swan.ac.uk", # Swansea University
	"swancoll.ac.uk", # Gower College Swansea
	"swanmet.ac.uk", # Swansea Metropolitan University
	"swansea-institute.ac.uk", # Swansea Institute of Higher Education
	"swansea.ac.uk", # Swansea University
	"swanseamet.ac.uk", # Swansea Metropolitan University
	"swap.ac.uk", # The Centre for Human Service Technology
	"swapbox.ac.uk", # University of Southampton
	"swarf.ac.uk", # Scottish Wider Access Regional Forums
	"swc.ac.uk", # South West College
	"sweltec.ac.uk", # South West London Teacher Education Consortium
	"swift.ac.uk", # University of Leicester
	"swincoll.ac.uk", # Swindon College
	"swindon-college.ac.uk", # Swindon College
	"swindon.ac.uk", # Swindon College
	"swindonart.ac.uk", # Swindon Art College
	"swlacademicnetwork.ac.uk", # SouthWest London Academic Network
	"swlc.ac.uk", # Southall & West London College
	"swlln.ac.uk", # Bournemouth University
	"sworcs.ac.uk", # South Worcestershire College
	"swsummerschools.ac.uk", #University of the West of England,  Bristol
	"swurcc.ac.uk", # South West University Regional
	"swwcte.ac.uk", # Swansea Metropolitan University
	"swwhep.ac.uk", # Swansea University
	"sx.ac.uk", # University of Essex
	"sycolleges.ac.uk", # The Sheffield College
	"syfec.ac.uk", # The Sheffield College
	"symonds.ac.uk", # Peter Symonds College
	"symphonycentre.ac.uk", # Symphony Assessment & Training Ltd
	"synbiostandards.ac.uk", # University of Edinburgh
	"syntheticbiology.ac.uk", # Biotechnology and Biological Sciences Research Council
	"syracuse-u.ac.uk", # Syracuse University
	"tab.ac.uk", # South Essex College of Further and Higher Education
	"tabeisa.ac.uk", # Technical and Business Education Initiative in South Africa
	"tacc.ac.uk", # Thurrock Council
	"tags.ac.uk", # University of St Andrews
	"tait.ac.uk", # University of Edinburgh
	"talent.ac.uk", #Institute of Education,  University of London
	"talkinghealthmatters.ac.uk", # University of Newcastle upon Tyne
	"tamescol.ac.uk", # Tameside College
	"tameside-acl.ac.uk", # Tameside Metropolitan Borough Council
	"tameside.ac.uk", # Tameside College
	"tamesidecollege.ac.uk", # Tameside College of Technology
	"tamworth.ac.uk", # South Staffordshire College
	"tamworthandlichfield.ac.uk", # South Staffordshire College
	"targetedgrad.ac.uk", # The University of Manchester
	"tarn.ac.uk", # The UK Trauma Audit & Research Network
	"tasc.ac.uk", # Leeds Trinity University College
	"tasi.ac.uk", # Technical Advisory Service for Images
	"tau.ac.uk", # JISC Monitoring & Advisory Unit
	"tauntons.ac.uk", # Taunton's College
	"tavi-port.ac.uk", # Tavistock and Portman NHS Foundation Trust
	"tavistockandportman.ac.uk", # Tavistock and Portman NHS Foundation Trust
	"tay.ac.uk", # University of Abertay Dundee
	"tbm.ac.uk", # The British Museum
	"tcat.ac.uk", # Telford College of Arts and Technology
	"tcch.ac.uk", # Hackney Community College
	"tccr.ac.uk", # The Tavistock Centre for Couple Relationships
	"tcm.ac.uk", # Trinity Laban Conservatoire of Music and Dance
	"teamwork.ac.uk", # Marketing Graduate Skills Project- LSE/Oxford Brookes University
	"tean.ac.uk", # The University of Cumbria
	"techcentre.ac.uk", # The JISC Technologies Centre
	"techdis.ac.uk", # Joint Information Systems Committee
	"techextra.ac.uk", # Heriot-Watt University
	"techinfonet.ac.uk", # University of Northumbria at Newcastle
	"techxtra.ac.uk", # Heriot-Watt University
	"teds.ac.uk", # Twins Early Development Study
	"tees.ac.uk", # Teesside University
	"teeslearn.ac.uk", # Middlesbrough Borough Council
	"teesside.ac.uk", # University of Teesside
	"teesvalley-acl.ac.uk", # Middlesbrough Borough Council
	"tel.ac.uk", #Institute of Education,  University of London
	"tellus.ac.uk", # University of Plymouth
	"telri.ac.uk", # University of Warwick
	"temenos.ac.uk", # Temenos
	"tempusuk.ac.uk", # EC Tempus Programme- University of Kent
	"tenders.ac.uk", # Procureweb
	"tentowns.ac.uk", # St George's Hospital Medical School
	"testa.ac.uk", # University of Winchester
	"tex.ac.uk", # The UK TeX Archive
	"textminingcentre.ac.uk", # The University of Manchester
	"tgac.ac.uk", # The Genome Analysis Centre
	"thamesgatewaycollege.ac.uk", # Havering College of Further and Higher Education
	"thanet.ac.uk", # Thanet College
	"thatcham.ac.uk", # Newbury College
	"the-british-museum.ac.uk", # The British Museum
	"the-britishmuseum.ac.uk", # The British Museum
	"thearden.ac.uk", # The Manchester College
	"thebcc.ac.uk", # The Building Crafts College
	"thebritishacademy.ac.uk", # The British Academy
	"thebritishmuseum.ac.uk", # The British Museum
	"thecobaltstudy.ac.uk", # The CoBalT study
	"thecontactpartnership.ac.uk", # University of Salford
	"thedigitalpicture.ac.uk", # University for the Creative Arts
	"theglobalsite.ac.uk", # University of Sussex
	"thegraduationproject.ac.uk", # The Graduation Project
	"thehenleycollege.ac.uk", # The Henley College
	"theinternetlawschool.ac.uk", # The Internet Law School
	"thelearningmatrix.ac.uk", # Joint Information Systems Committee
	"themanchestercollege.ac.uk", # The Manchester College
	"theroslininstitute.ac.uk", # University of Edinburgh
	"thesesalive.ac.uk", # University of Edinburgh
	"thewomenslibrary.ac.uk", # London Metropolitan University
	"thomasdanby.ac.uk", # Leeds City College
	"thomroth.ac.uk", # Thomas Rotherham College
	"thurrock.ac.uk", # South Essex College of Further and Higher Education
	"thurrockcampus.ac.uk", # South Essex College of Further and Higher Education
	"tic.ac.uk", # Birmingham City University
	"tictocs.ac.uk", # University of Liverpool
	"tiipple.ac.uk", # Trent Institute of Inter Professional Practice Learning and Education
	"tilehill.ac.uk", # City College Coventry
	"tipple.ac.uk", # University of Nottingham
	"tlc.ac.uk", # South Staffordshire College
	"tlccollege.ac.uk", # TLC College
	"tltp.ac.uk", # Teaching and Learning Technical Project
	"tmn.ac.uk", # University of Leeds
	"toia.ac.uk", # University of Strathclyde
	"tombola.ac.uk", # Trial of the Management of Borderline & Other Low-grade Abnormal Smears Research Trial
	"totton.ac.uk", # Totton College
	"tower.ac.uk", # Tower Hamlets College
	"towerhamletscollege.ac.uk", # Tower Hamlets College
	"towerhamletsllls.ac.uk", # London Borough of Tower Hamlets
	"towerhamletslls.ac.uk", # London Borough of Tower Hamlets
	"tpc.ac.uk", # Portsmouth College
	"tpmde.ac.uk", # London Deanery
	"tracingnetworks.ac.uk", # University of Leicester
	"traffcoll.ac.uk", # Trafford College
	"trafford.ac.uk", # Trafford College
	"traffordcollege.ac.uk", # Trafford College
	"traintogainstoke.ac.uk", # Stoke-on-Trent College
	"transitwestyorkshire.ac.uk", # University of Bradford
	"tresham.ac.uk", # Tresham Institute
	"tri-london.ac.uk", # Thrombosis Research Institute
	"trident.ac.uk", #Warwickshire College,  Royal Leamington Spa,  Rugby and Moreton Morrell
	"trilt.ac.uk", # British Universities Film & Video Council
	"trinity-bris.ac.uk", # Trinity College Bristol
	"trinity-cm.ac.uk", # University of Wales Trinity Saint David
	"trinitylaban.ac.uk", # Trinity Laban Conservatoire of Music and Dance
	"trinitysaintdavid.ac.uk", # University of Wales Trinity Saint David
	"trocoll.ac.uk", # Wiltshire College
	"tropmed.ac.uk", # St George's Hospital Medical School
	"truro-penwith.ac.uk", # Truro and Penwith College
	"truro.ac.uk", # Truro College
	"trurocollege.ac.uk", # Truro College
	"truropenwith.ac.uk", # Truro and Penwith College
	"tsd.ac.uk", # University of Wales Trinity Saint David
	"tse.ac.uk", # Transmissible Spongiform Encephalopathies- Institute for Animal Health- NPU
	"tsec-biosys.ac.uk", #Imperial College of Science,  Technology and Medicine
	"tsl.ac.uk", # The Sainsbury Laboratory of the John Innes Centre
	"tsrc.ac.uk", # University of Birmingham
	"ttc.ac.uk", # Teeside Tertiary
	"ttrb.ac.uk", # Teacher Training Resource Bank
	"tuca.ac.uk", # Tunnelling and Underground Construction Academy
	"turbulence.ac.uk", # Science and Technology Facilities Council
	"tvu.ac.uk", # The University of West London
	"twin-research.ac.uk", # St. Thomas' Hospital
	"twinsuk.ac.uk", # King's College London
	"twirl.ac.uk", # Tyne & Wear Information Resources for Learning
	"tyndall.ac.uk", # The Tyndall Centre for Climate Change Research
	"tynecoll.ac.uk", # Tyne Metropolitan College
	"tynemet.ac.uk", # Tyne Metropolitan College
	"u-westminster.ac.uk", # University of Westminster
	"uad.ac.uk", # University of Abertay Dundee
	"uag.ac.uk", # Universities Advertising Group
	"uall.ac.uk", # Universities Association for Lifelong Learning
	"uas.ac.uk", # Undergraduate Ambassadors Limited
	"ubi.ac.uk", # Southern Regional College
	"ubifhe.ac.uk", # Southern Regional College
	"uc-scarborough.ac.uk", # University College Scarborough
	"ucam.ac.uk", # University of Cambridge
	"ucas.ac.uk", # Universities and Colleges Admissions Service
	"ucas01.ac.uk", # Universities and Colleges Admissions Service
	"ucasgraduate.ac.uk", # UCAS Limited
	"ucaspg.ac.uk", # UCAS Limited
	"ucaspostgrad.ac.uk", # UCAS Limited
	"ucaspostgraduate.ac.uk", # UCAS Limited
	"ucb.ac.uk", # University College Birmingham
	"ucc.ac.uk", # University of Chichester
	"uce.ac.uk", # Birmingham City University
	"ucea.ac.uk", # University & Colleges' Employers' Association
	"ucel.ac.uk", # Universities' Collaboration in E-Learning
	"ucet.ac.uk", # Universitites Council for Education of Teachers
	"ucf.ac.uk", # Canterbury Christ Church University
	"uch.ac.uk", # University of Brighton
	"uchastings.ac.uk", # University of Brighton
	"ucisa.ac.uk", # Universities and Colleges Information Systems Association
	"ucl-status.ac.uk", # University College London
	"ucl.ac.uk", # University College London
	"uclan.ac.uk", # University of Central Lancashire
	"uclglobal.ac.uk", # University College London
	"ucm.ac.uk", # West Nottinghamshire College
	"ucmk.ac.uk", # Milton Keynes College
	"ucml.ac.uk", # University of Southampton
	"ucpmarjon.ac.uk", # University College Plymouth St Mark & St John
	"ucreative.ac.uk", # University for the Creative Arts
	"ucs.ac.uk", # University of Essex
	"ucsalf.ac.uk", # University of Salford
	"ucsalford.ac.uk", # University of Salford
	"ucsm.ac.uk", # The University of Cumbria
	"ucy.ac.uk", # Yeovil College
	"udel.ac.uk", # University of Delaware London Centre
	"uea.ac.uk", # University of East Anglia
	"uec.ac.uk", # University of Exeter
	"uee.ac.uk", # Anglia Polytechnic University
	"ueharlax.ac.uk", # Harlaxton College
	"uel.ac.uk", # University of East London
	"ufm.ac.uk", # Universities for Medway
	"uhi.ac.uk", # University of the Highlands and Islands
	"uhl.ac.uk", # University Hospital Lewisham
	"uhmlg.ac.uk", # The University of Manchester
	"uhovi.ac.uk", # University of Glamorgan
	"uhr.ac.uk", # University of Newcastle upon Tyne
	"uhsl.ac.uk", # University Health Science Librarians
	"uk-india-energynetwork.ac.uk", # University of Nottingham
	"ukadia.ac.uk", # GuildHE
	"ukaea.ac.uk", # United Kingdom Atomic Energy Authority
	"ukaff.ac.uk", # University of Leicester
	"ukbiobank.ac.uk", # UK Biobank
	"ukc.ac.uk", # University of Kent
	"ukca.ac.uk", # University of Cambridge
	"ukcasa.ac.uk", # University of Southampton
	"ukcat.ac.uk", # Pearson Vue
	"ukcge.ac.uk", # UK Council for Graduate Education
	"ukchinab4g.ac.uk", # Heriot-Watt University
	"ukcle.ac.uk", # University of Warwick
	"ukcmri.ac.uk", # Medical Research Council
	"ukcpmn.ac.uk", # University of London
	"ukda.ac.uk", # University of Essex
	"ukerc.ac.uk", # UK Energy Research Centre
	"ukerna.ac.uk", # The JNT Association
	"ukgrad.ac.uk", # The Engineering and Physical Sciences Research Council
	"ukhec.ac.uk", # UK High End Computing
	"ukhls.ac.uk", # Natural Environment Research Council
	"ukirc.ac.uk", # University of Cambridge
	"uklibrariesplus.ac.uk", # Roehampton University
	"uklight.ac.uk", # The JNT Association
	"ukm.ac.uk", # University of Kent
	"ukmhd.ac.uk", # University of Leeds
	"uknet.ac.uk", # UKnet
	"ukngi.ac.uk", # Science and Technology Facilities Council
	"ukoln.ac.uk", # UK Office for Library & Information Networking
	"ukpass.ac.uk", # UCAS Limited
	"ukpmc.ac.uk", # Wellcome Trust
	"ukpmcplus.ac.uk", # The University of Manchester
	"ukpubmedcentral.ac.uk", # Wellcome Trust
	"ukqcd.ac.uk", # Swansea University
	"ukrds.ac.uk", # London School of Economics and Political Science
	"ukrheeo.ac.uk", # Biotechnology and Biological Sciences Research Council
	"ukro.ac.uk", # United Kingdom Research Office
	"ukrr.ac.uk", # The British Library
	"uksrn.ac.uk", # University of Newcastle upon Tyne
	"ukssdc.ac.uk", # Science and Technology Facilities Council
	"uktrc.ac.uk", #Imperial College of Science,  Technology and Medicine
	"ulcc.ac.uk", # University of London
	"ulep.ac.uk", # University of Southampton
	"ulh.ac.uk", # University of Lincoln
	"ull.ac.uk", # University of London
	"ulsop.ac.uk", #The School of Pharmacy,  University of London
	"ulst.ac.uk", # University of Ulster
	"ulster.ac.uk", # University of Ulster
	"ulth.ac.uk", # United Leeds Teaching Hospital
	"ultralab.ac.uk", # ULTRALAB - Anglia Polytechnic University
	"umds.ac.uk", # University Medical Dental School
	"umis.ac.uk", # University of Dundee
	"umist.ac.uk", # The University of Manchester
	"umk.ac.uk", # Milton Keynes College
	"ums.ac.uk", # Ulster Medical Society
	"umslg.ac.uk", # University College London
	"umtc.ac.uk", # School of Mathematics & Statistics- Birmingham University
	"understandingsociety.ac.uk", # Economic and Social Research Council
	"uni-east.ac.uk", # The Association of Universities in The East of England
	"uni-west.ac.uk", # University of Westminster
	"uni-westminster.ac.uk", # University of Westminster
	"unidesk.ac.uk", # University of Edinburgh
	"uniofwestminster.ac.uk", # University of Westminster
	"union.ac.uk", # Union Theological College
	"unis4ne.ac.uk", # Universitites for the North East
	"unistats.ac.uk", # Higher Education Funding Council for England
	"unisurreydirect.ac.uk", # University of Surrey
	"unity.ac.uk", # University of Salford
	"universities-scotland.ac.uk", # Universities Scotland
	"universitiesengland.ac.uk", # Committee of Vice Chancellors & Principals
	"universitieshr.ac.uk", # University of Newcastle upon Tyne
	"universitiesinlondon.ac.uk", # London Higher
	"universitiesireland.ac.uk", # Committee of Vice Chancellors & Principals
	"universitiesnorthernireland.ac.uk", # Committee of Vice Chancellors & Principals
	"universitiesscotland.ac.uk", # Committee of Vice Chancellors & Principals
	"universitiessouthwest.ac.uk", # Higher Education Regional Development Association in the South West
	"universitiesuk.ac.uk", # Committee of Vice Chancellors & Principals
	"universitieswales.ac.uk", # Committee of Vice Chancellors & Principals
	"universitiesweek.ac.uk", # Universities UK
	"universitieswm.ac.uk", # Aston University
	"university-alliance.ac.uk", # Oxford Brookes University
	"university-central-england.ac.uk", # Birmingham City University
	"university-of-cambridge.ac.uk", # University of Cambridge
	"university-of-westminster.ac.uk", # University of Westminster
	"universitycentrestratford.ac.uk", # Birkbeck College
	"universitycollegefalmouth.ac.uk", # University College Falmouth
	"universityofcambridge.ac.uk", # University of Cambridge
	"universityofchichester.ac.uk", # University of Chichester
	"universityoflondon.ac.uk", # University of London
	"universityofwestlondon.ac.uk", # The University of West London
	"universityofwestminster.ac.uk", # University of Westminster
	"universityquarter-stoke.ac.uk", # Staffordshire University
	"universitysquarestratford.ac.uk", # Birkbeck College
	"uniwest.ac.uk", # University of Westminster
	"uniwestminister.ac.uk", # University of Westminster
	"uniwestminster.ac.uk", # University of Westminster
	"unl.ac.uk", # London Metropolitan University
	"unn.ac.uk", # University of Northumbria at Newcastle
	"uol.ac.uk", # University of London
	"upa.ac.uk", # University of Surrey
	"updates.ac.uk", # Ultrafast Photonics for Datacomms Above Terabit
	"upmg.ac.uk", # University Printing Managers' Group at Stirling University
	"ursula.ac.uk", # University of Sheffield
	"use-of-mans.ac.uk", # Use of MANs Initiative
	"ushare.ac.uk", # University of York
	"ushaw.ac.uk", # Ushaw College
	"usstratford.ac.uk", # Birkbeck College
	"ustc.ac.uk", # University of St Andrews
	"uuk.ac.uk", # Committee of Vice Chancellors & Principals
	"uvac.ac.uk", # Universities Vocational Awards Council
	"uwb-global.ac.uk", # Bangor University
	"uwcatlantic.ac.uk", # United World College of the Atlantic
	"uwcm.ac.uk", # Cardiff University
	"uwe-bristol.ac.uk", # University of the West of England
	"uwe.ac.uk", #University of the West of England,  Bristol
	"uwern.ac.uk", # Universities Weather Research Network
	"uwic.ac.uk", #University of Wales Institute,  Cardiff
	"uwl.ac.uk", # The University of West London
	"uws.ac.uk", # University of the West of Scotland
	"uxbridge.ac.uk", # Uxbridge College
	"uxbridgecollege.ac.uk", # Uxbridge College
	"v-resort.ac.uk", # University of Nottingham
	"vacancies.ac.uk", # Eduserv
	"vaccine.ac.uk", # St George's Hospital Medical School
	"vads.ac.uk", # University for the Creative Arts
	"vam.ac.uk", # Victoria and Albert Museum
	"vamsas.ac.uk", # University of Dundee
	"varndean.ac.uk", # Varndean College
	"vast.ac.uk", # University for the Creative Arts
	"vcol.ac.uk", # Vocational College Ltd
	"vcoll.ac.uk", # Vocational College Ltd
	"vetgate.ac.uk", # The University of Manchester
	"vetnetlln.ac.uk", # Royal Veterinary College
	"vetschools.ac.uk", # The Royal Veterinary College
	"vge.ac.uk", # Virulgenome Project
	"vgta.ac.uk", # Vale of Glamorgan Training Association
	"vicarious.ac.uk", # University of Sussex
	"victoriacountyhistory.ac.uk", # University of London
	"videoactive.ac.uk", # Glasgow Caledonian University
	"virtualashridge.ac.uk", # Ashridge (Bonar Law Memorial) Trust
	"virtualcollege.ac.uk", # Coleg Sir Gar
	"virulogenome.ac.uk", # The Virulogenome Project
	"visnet.ac.uk", # Science and Technology Facilities Council
	"vista.ac.uk", #Queen Mary and Westfield College,  University of London
	"visual-evidence.ac.uk", # The Visual Evidence - The Photographic Presentation of Landscape and People
	"visuallearninglab.ac.uk", # University of Nottingham
	"vitae.ac.uk", # Research Councils UK
	"vital.ac.uk", # E-Skills UK Sector Skills Council Limited
	"viznet.ac.uk", # Science and Technology Facilities Council
	"volstudy.ac.uk", # Voluntary Sector Studies Centre
	"vows.ac.uk", # Manchester Metropolitan University
	"vssn.ac.uk", # Voluntary Sector Studies Network
	"vtri.ac.uk", # University of Liverpool
	"vts.ac.uk", # Vocational Training Services
	"vtstutorials.ac.uk", # University of Bristol
	"wacc.ac.uk", # Walsall Metropolitan Borough Council
	"waes.ac.uk", # Westminster City Council
	"waf.ac.uk", # Bangor University
	"wakcoll.ac.uk", # Wakefield College
	"wakefield.ac.uk", # Wakefield College
	"walcat.ac.uk", # Walsall College
	"wales.ac.uk", # University of Wales
	"wales1801-1919.ac.uk", # University of Wales
	"walesglobalcampus.ac.uk", # University of Wales
	"walker-institute.ac.uk", # The University of Reading
	"walsall-coce.ac.uk", # College of Continuing Education
	"walsallcollege.ac.uk", # Walsall College
	"waltham.ac.uk", # Waltham Forest College
	"warkscol.ac.uk", #Warwickshire College,  Royal Leamington Spa,  Rugby and Moreton Morrell
	"warnborough.ac.uk", # Warnborough College
	"warr.ac.uk", # Warrington Collegiate Institute
	"warrington.ac.uk", # Warrington Collegiate Institute
	"warwick.ac.uk", # University of Warwick
	"warwickequine.ac.uk", #Warwickshire College,  Royal Leamington Spa,  Rugby and Moreton Morrell
	"warwickhri.ac.uk", # University of Warwick
	"warwickshire.ac.uk", #Warwickshire College,  Royal Leamington Spa,  Rugby and Moreton Morrell
	"wbs.ac.uk", # University of Warwick
	"wcc.ac.uk", # Lakes College West Cumbria
	"wccsj.ac.uk", # Aberystwyth University
	"wcmd.ac.uk", # Royal Welsh College of Music and Drama
	"wcoh.ac.uk", # Welsh College of Horticulture
	"wea.ac.uk", # Workers' Educational Association
	"weald.ac.uk", # Harrow College
	"wearside.ac.uk", # Wearside College
	"webpa.ac.uk", # Loughborough University
	"webster.ac.uk", # Regent's College
	"welbeck.ac.uk", # TQ Education & Training Ltd
	"well.ac.uk", # Web Enhanced Language Learning Project
	"wellbeing.ac.uk", # University of Leeds
	"wellcome.ac.uk", # Wellcome Trust
	"welshmediumhe.ac.uk", # Centre for Welsh Medium Higher Education
	"wern.ac.uk", # Welsh Education Research Network (WERN)
	"wesc.ac.uk", # Welsh e-Science Centre (WeSC)
	"wesley-college-bristol.ac.uk", # Wesley College
	"wessex.ac.uk", # Wessex Institute of Technology
	"wessexsfc.ac.uk", # Peter Symonds' College
	"west-cheshire.ac.uk", # West Cheshire College
	"west-lothian.ac.uk", # West Lothian College
	"west-thames.ac.uk", # West Thames College
	"westchem.ac.uk", # University of Glasgow
	"westcumbcoll.ac.uk", # Lakes College West Cumbria
	"westengland.ac.uk", # The West of England School and College
	"westherts.ac.uk", # West Herts College
	"westhill.ac.uk", # Westhill College - Birmingham
	"westkent.ac.uk", # West Kent College
	"westking.ac.uk", # Westminster Kingsway College
	"westlakes.ac.uk", # Westlakes Scientific Consulting Limited
	"westlancs.ac.uk", # West Lancashire College
	"westlondon.ac.uk", # The University of West London
	"westlondoncollege.ac.uk", # Hammersmith & West London College
	"westlondonuniversity.ac.uk", # The University of West London
	"westminister.ac.uk", # University of Westminster
	"westministeruni.ac.uk", # University of Westminster
	"westminster-cfe.ac.uk", # UNKNOWN via DNS upload
	"westminster-uni.ac.uk", # University of Westminster
	"westminster-university.ac.uk", # University of Westminster
	"westminster.ac.uk", # University of Westminster
	"westminstergroup.ac.uk", # University of Westminster
	"westminsteruni.ac.uk", # University of Westminster
	"westminsteruniversity.ac.uk", # University of Westminster
	"westnotts.ac.uk", # West Nottinghamshire College
	"westofscotland.ac.uk", # University of the West of Scotland
	"weston.ac.uk", # Weston College
	"westonstudents.ac.uk", # Weston College Students
	"westsuffolk.ac.uk", # West Suffolk College
	"weymouth.ac.uk", # Weymouth College
	"weymouthcollege.ac.uk", # Weymouth College
	"wfc.ac.uk", # Higher Education Funding Council for Wales
	"wfdc.ac.uk", # WFDC
	"wheb.ac.uk", # Aberystwyth University
	"whelf.ac.uk", # Aberystwyth University
	"whitegates-feu.ac.uk", # Whitegates Further Education Unit
	"whiterose-social-science-doctoral-training-centre.ac.uk", # University of Leeds
	"whiterose.ac.uk", # White Rose University Consortium
	"whystudyamerica.ac.uk", # University of Southampton
	"whystudyeconomics.ac.uk", # University of Bristol
	"whystudyenglish.ac.uk", # The Higher Education Academy
	"whystudylanguages.ac.uk", # University of Southampton
	"whystudymaterials.ac.uk", # Loughborough University
	"wicn.ac.uk", # Bangor University
	"wics.ac.uk", # Wessex Intensive Care Society
	"widnesandruncornsixthformcollege.ac.uk", # Runcorn & Widnes Sixth Form College
	"widnesruncorn.ac.uk", # Widnes & Runcorn Sixth Form College
	"widnessixthformcollege.ac.uk", # Widnes Sixth Form College
	"wigan-leigh.ac.uk", # Wigan & Leigh College
	"wigs.ac.uk", # Swansea University
	"wigston-college.ac.uk", # South Leicestershire College
	"wigstoncollege.ac.uk", # South Leicestershire College
	"wilberforce.ac.uk", # Wilberforce Sixth Form College
	"wilen.ac.uk", # University of Sheffield
	"wiltscoll.ac.uk", # Wiltshire College
	"wiltshire.ac.uk", # Wiltshire College
	"wiltshirecollege.ac.uk", # Wiltshire College
	"wimbledon-school.ac.uk", # Wimbledon School of English
	"wimbledon.ac.uk", # University of the Arts London
	"wimcs.ac.uk", # Swansea University
	"winchester.ac.uk", # University of Winchester
	"wincoll.ac.uk", # Winchester College
	"winningstudents-scotland.ac.uk", # University of Stirling
	"winstanley.ac.uk", # Winstanley College
	"wirad.ac.uk", #University of Wales Institute,  Cardiff
	"wirrallearning.ac.uk", # Metropolitan Borough of Wirral
	"wiserd.ac.uk", # Cardiff University
	"witcmi.ac.uk", # Wessex Institute of Technology
	"wittgen-cam.ac.uk", # Wittgenstein Archive in Cambridge
	"wivc.ac.uk", # Bangor University
	"wkac.ac.uk", # University of Winchester
	"wkc.ac.uk", # South and West Kent College
	"wlc.ac.uk", #Ealing,  Hammersmith and West London College
	"wlcbs.ac.uk", # Wigan & Leigh College - Business School
	"wlecentre.ac.uk", #Institute of Education,  University of London
	"wlp.ac.uk", # The West London Partnership
	"wlu.ac.uk", # The University of West London
	"wlv.ac.uk", # University of Wolverhampton
	"wma.ac.uk", # William Morris Sixth Form
	"wmc.ac.uk", # Wirral Metropolitan College
	"wmcc.ac.uk", # William Morris House
	"wmcollege.ac.uk", # Working Men's College
	"wmhea.ac.uk", # West Midlands Higher Education Association
	"wmin.ac.uk", # University of Westminster
	"wmsf.ac.uk", # William Morris Sixth Form
	"wmucs.ac.uk", # Staffordshire University
	"wnc.ac.uk", # West Nottinghamshire College
	"wnsc.ac.uk", # Walford and North Shropshire College
	"wocns.ac.uk", # Bangor University
	"woking.ac.uk", # Woking College
	"wolcol.ac.uk", # Woolwich College
	"woldscollege.ac.uk", # Wolds College
	"wolvcoll.ac.uk", # Wolverhampton College
	"wolverhampton.ac.uk", # University of Wolverhampton
	"wolverhamptoncollege.ac.uk", # Wulfrun College
	"wolverhamptonline.ac.uk", # University of Wolverhampton
	"woodhouse.ac.uk", # Woodhouse Sixth Form College
	"worc.ac.uk", # University of Worcester
	"worcester.ac.uk", # University of Worcester
	"workingclasswriting.ac.uk", # Liverpool John Moores University
	"workingtogethernorthwest.ac.uk", # Network of North West HE Institutions participating in HEFCE funded projects
	"wortech.ac.uk", # Worcester College of Technology
	"worthing.ac.uk", # Worthing Sixth Form College
	"wqeic.ac.uk", # Wyggeston and Queen Elizabeth I College
	"wrapp.ac.uk", # University of Sheffield
	"wrcetle.ac.uk", # University of York
	"wrekincollege.ac.uk", # Wrekin College
	"wren.ac.uk", # Lifelong Learning Network for Wales
	"wrexham.ac.uk", # Glyndwr University
	"writenow.ac.uk", # Liverpool Hope University
	"writing-pad.ac.uk", # Goldsmiths' College
	"writtle.ac.uk", # Writtle Agricultural College Higher Education Corporation
	"writtlecollege.ac.uk", # Writtle Agricultural College Higher Education Corporation
	"wroxton-college.ac.uk", # Wroxton College
	"wsc.ac.uk", # West Suffolk College
	"wsfc.ac.uk", # Worcester Sixth Form College
	"wspcr.ac.uk", # Cardiff University
	"wton-acl.ac.uk", # Wolverhampton City Council
	"wton-adulteducation.ac.uk", # Wolverhampton City Council
	"wttw.ac.uk", # University of Dundee
	"wulfrun.ac.uk", # Wulfrun College
	"wun.ac.uk", # Worldwide Universities Network
	"wvlln.ac.uk", # University of Bath
	"wvn.ac.uk", # Swansea University
	"wwmpcrn.ac.uk", # University of Warwick
	"wwsota.ac.uk", # Coleg Sir Gar
	"wyams.ac.uk", # University of Bradford
	"wyke.ac.uk", # Wyke Sixth Form College
	"wylln.ac.uk", # University of Huddersfield
	"xaverian.ac.uk", # Xaverian College
	"xavs.ac.uk", # Xaverian College
	"xbase.ac.uk", # University of Birmingham
	"xcalibre.ac.uk", # Xcalibre Project- University of Cambridge- School of Education
	"xmm.ac.uk", # University of Leicester
	"yale-wrexham.ac.uk", # Yale Further Education College
	"yale.ac.uk", # Yale College
	"ycc.ac.uk", # York College
	"ycoastco.ac.uk", # Grimsby Institute of Further and Higher Education
	"ycw.ac.uk", # Yale College of Wrexham
	"ydds.ac.uk", # University of Wales Trinity Saint David
	"ydrindoddewisant.ac.uk", # University of Wales Trinity Saint David
	"yeovil-college.ac.uk", # Yeovil College
	"yeovil.ac.uk", # Yeovil College
	"yhelln.ac.uk", # University of Hull
	"yhua.ac.uk", # University of Leeds
	"ymca-wales.ac.uk", # YMCA Wales
	"ymca.ac.uk", # YMCA George Williams College
	"york-sfc.ac.uk", # York Sixth Form College
	"york.ac.uk", # University of York
	"yorkcetle.ac.uk", # University of York
	"yorkcollege.ac.uk", # York College
	"yorkshirecoastcollege.ac.uk", # Grimsby Institute of Further and Higher Education
	"yorkshirejobshops.ac.uk", # The University of Huddersfield
	"yorkshireuniversities.ac.uk", # University of Leeds
	"yorksj.ac.uk", # York St John University
	"yorkstonemasonrycove.ac.uk", # York College
	"youngfoundation.ac.uk", # The Young Foundation
	"yourfuture-eastmidlands.ac.uk", # Loughborough University
	"youshare.ac.uk", # University of York
	"yporth.ac.uk", # Centre for Welsh Medium Higher Education
	"yra.ac.uk", # Yorkshire Rail Academy
	"ysj.ac.uk", # York St. John College
	"ystrad-mynach.ac.uk", # Ystrad Mynach College
	"zoonoses.ac.uk", # University of Liverpool
	"zoonosis.ac.uk" # University of Liverpool
);


