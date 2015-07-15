<?php


/* Prevent Direct Access */
defined('ADAPT_STARTED') or die;

$adapt = $GLOBALS['adapt'];

$sql = $adapt->data_source->sql;

/* Add the new data types */
$data_types = array(
    /*
     * Phone numbers
     */
    array(
        'bundle_name' => 'locales_uk',
        'name' => 'uk_phone',
        'based_on_data_type' => 'varchar(24)',
        'validator' => 'uk_phone',
        'formatter' => 'uk_phone',
        'unformatter' => 'phone',
        'datetime_format' => null,
        'max_length' => null,
        'date_created' => null
    ),
    array(
        'bundle_name' => 'locales_uk',
        'name' => 'uk_phone_home',
        'based_on_data_type' => 'varchar(24)',
        'validator' => 'uk_phone_home',
        'formatter' => 'uk_phone',
        'unformatter' => 'phone',
        'datetime_format' => null,
        'max_length' => null,
        'date_created' => null
    ),
    array(
        'bundle_name' => 'locales_uk',
        'name' => 'uk_phone_office',
        'based_on_data_type' => 'varchar(24)',
        'validator' => 'uk_phone_office',
        'formatter' => 'uk_phone',
        'unformatter' => 'phone',
        'datetime_format' => null,
        'max_length' => null,
        'date_created' => null
    ),
    array(
        'bundle_name' => 'locales_uk',
        'name' => 'uk_phone_mobile',
        'based_on_data_type' => 'varchar(24)',
        'validator' => 'uk_phone_mobile',
        'formatter' => 'uk_phone',
        'unformatter' => 'phone',
        'datetime_format' => null,
        'max_length' => null,
        'date_created' => null
    ),
    array(
        'bundle_name' => 'locales_uk',
        'name' => 'uk_phone_landline',
        'based_on_data_type' => 'varchar(24)',
        'validator' => 'uk_phone_landline',
        'formatter' => 'uk_phone',
        'unformatter' => 'phone',
        'datetime_format' => null,
        'max_length' => null,
        'date_created' => null
    ),
    array(
        'bundle_name' => 'locales_uk',
        'name' => 'uk_phone_premium',
        'based_on_data_type' => 'varchar(24)',
        'validator' => 'uk_phone_premium',
        'formatter' => 'uk_phone',
        'unformatter' => 'phone',
        'datetime_format' => null,
        'max_length' => null,
        'date_created' => null
    ),
    /*
     * Dates and Times
     */
    array(
        'bundle_name' => 'locales_uk',
        'name' => 'uk_date',
        'based_on_data_type' => 'date',
        'validator' => 'date',
        'formatter' => null,
        'unformatter' => null,
        'datetime_format' => 'd/m/Y',
        'max_length' => null,
        'date_created' => null
    ),
    array(
        'bundle_name' => 'locales_uk',
        'name' => 'uk_time',
        'based_on_data_type' => 'time',
        'validator' => 'time',
        'formatter' => null,
        'unformatter' => null,
        'datetime_format' => 'H:i',
        'max_length' => null,
        'date_created' => null
    ),
    array(
        'bundle_name' => 'locales_uk',
        'name' => 'uk_datetime',
        'based_on_data_type' => 'datetime',
        'validator' => 'datetime',
        'formatter' => null,
        'unformatter' => null,
        'datetime_format' => 'd/m/Y H:i',
        'max_length' => null,
        'date_created' => null
    ),
    /*
     * Address types
     */
    array(
        'bundle_name' => 'locales_uk',
        'name' => 'uk_postcode',
        'based_on_data_type' => 'varchar(12)',
        'validator' => 'uk_postcode',
        'formatter' => 'uk_postcode',
        'unformatter' => 'uk_postcode',
        'datetime_format' => null,
        'max_length' => 12,
        'date_created' => null
    ),
    array(
        'bundle_name' => 'locales_uk',
        'name' => 'uk_county',
        'based_on_data_type' => "enum('Aberdeen','Aberdeenshire','Angus','Argyll and Bute','Bath and North East Somerset','Bedford','Berkshire','Blackburn with Darwen','Blackpool','Blaenau Gwent','Bournemouth','Bridgend','Brighton and Hove','Bristol','Buckinghamshire','Cambridgeshire','Caerphilly','Cardiff','Carmarthenshire','Central Bedfordshire','Ceredigion','Cheshire East','Cheshire West and Chester','Clackmannanshire','Conwy','Cornwall','Cumbria','Darlington','Denbighshire','Derby','Derbyshire','Devon','Dorset','Dumfries and Galloway','Dundee','Durham','East Ayrshire','East Dunbartonshire','East Lothian','East Renfrewshire','East Riding of Yorkshire','East Sussex','Edinburgh','Essex','Falkirk','Fife','Flintshire','Glasgow','Gloucestershire','Greater London','Greater Manchester','Gwynedd','Halton','Hampshire','Hartlepool','Herefordshire','Hertfordshire','Highland','Inverclyde','Isle of Anglesey','Isle of Wight','Kent','Kingston upon Hull','Lancashire','Leicester','Leicestershire','Lincolnshire','City of London','Luton','Medway','Merseyside','Merthyr Tydfil','Middlesbrough','Midlothian','Milton Keynes','Monmouthshire','Moray','Na h-Eileanan Siar (Western Isles)','Neath Port Talbot','Newport','Norfolk','Northamptonshire','North Ayrshire','North East Lincolnshire','Northern Ireland','North Lanarkshire','North Lincolnshire','North Somerset','Northumberland','North Yorkshire','Nottingham','Nottinghamshire','Orkney Islands','Oxfordshire','Pembrokeshire','Perth & Kinross','Peterborough','Plymouth','Poole','Portsmouth','Powys','Redcar and Cleveland','Renfrewshire','Rhondda Cynon Taff','Rutland','Scottish Borders','Shetland Islands','Shropshire','Somerset','Southampton','South Ayrshire','Southend-on-Sea','South Gloucestershire','South Lanarkshire','South Yorkshire','Staffordshire','Stirling','Stockton-on-Tees','Stoke-on-Trent','Suffolk','Surrey','Swansea','Swindon','Telford and Wrekin','Thurrock','Torbay','Torfaen','Tyne and Wear','Vale of Glamorgan','Warrington','Warwickshire','West Dunbartonshire','West Lothian','West Midlands','West Sussex','West Yorkshire','Wiltshire','Worcestershire','Wrexham','York','Isles of Scilly')",
        'validator' => null,
        'formatter' => null,
        'unformatter' => null,
        'datetime_format' => null,
        'max_length' => null,
        'date_created' => null
    )
);

/* Set the data types */
$adapt->data_source->data_types = array_merge($adapt->data_source->data_types, $data_types);

/* Add the new types to the data_type table */
foreach($data_types as &$data_type){
    $keys = array_keys($data_type);
    foreach($keys as $key){
        if ($key == 'date_created'){
            $data_type['date_created'] = new \frameworks\adapt\sql('now()');
        }elseif(is_null($data_type[$key])){
            $data_type[$key] = new \frameworks\adapt\sql('null');
        }
    }
}

$sql->insert_into('data_type', array_keys($data_types[0]));
foreach($data_types as $type) $sql->values(array_values($type));
$sql->execute();

/*
 * We need to set the data sources' data types to
 * null to force it to reload them because the
 * current copy is missing the ids
 */
$this->data_source->data_types = null;

/*
 * Get the data types from the data source
 */

$uk_date = $adapt->data_source->get_data_type('uk_date');
$uk_datetime = $adapt->data_source->get_data_type('uk_datetime');
$uk_time = $adapt->data_source->get_data_type('uk_time');

/*
 * Add the country
 */

$country_id = $sql->insert_into(
    'country',
    array(
        'bundle_name',
        'label',
        'date_data_type_id',
        'time_data_type_id',
        'datetime_data_type_id',
        'date_created',
        'date_modified'
    )
)->values(
    array(
        'locales_uk',
        'United Kingdom',
        $uk_date['data_type_id'],
        $uk_time['data_type_id'],
        $uk_datetime['data_type_id'],
        $adapt->data_source->sql('now()'),
        $adapt->data_source->sql('now()')
    )
)->execute()
->id();

//print "COUNTRY ID: {$country_id}";
//exit(1);

/*
 * Add the phone types
 */
$home = $adapt->data_source->get_data_type('uk_phone_home');
$mobile = $adapt->data_source->get_data_type('uk_phone_mobile');
$work = $adapt->data_source->get_data_type('uk_phone');


$model = new \model_country_phone_data_type();
$model->country_id = $country_id;
$model->data_type_id = $home['data_type_id'];
$model->label = "Home";
$model->save();

$model = new \model_country_phone_data_type();
$model->country_id = $country_id;
$model->data_type_id = $mobile['data_type_id'];
$model->label = "Mobile";
$model->save();

$model = new \model_country_phone_data_type();
$model->country_id = $country_id;
$model->data_type_id = $work['data_type_id'];
$model->label = "Office";
$model->save();

/*
 * Add the address format
 */

$model = new \model_country_address_format();
$model->country_id = $country_id;
$model->priority = 1;
$model->name = 'flat_details';
$model->label = 'Flat details';
$model->data_type_id = $adapt->data_source->get_data_type_id('varchar');
$model->max_length = 16;
$model->save();

$model = new \model_country_address_format();
$model->country_id = $country_id;
$model->priority = 2;
$model->name = 'building_name';
$model->label = 'House / Building name';
$model->data_type_id = $adapt->data_source->get_data_type_id('varchar');
$model->max_length = 32;
$model->save();

$model = new \model_country_address_format();
$model->country_id = $country_id;
$model->priority = 3;
$model->name = 'building_number';
$model->label = 'Building number';
$model->data_type_id = $adapt->data_source->get_data_type_id('varchar');
$model->max_length = 16;
$model->save();

$model = new \model_country_address_format();
$model->country_id = $country_id;
$model->priority = 4;
$model->name = 'street';
$model->label = 'Street';
$model->data_type_id = $adapt->data_source->get_data_type_id('varchar');
$model->max_length = 64;
$model->save();

$model = new \model_country_address_format();
$model->country_id = $country_id;
$model->priority = 5;
$model->name = 'district';
$model->label = 'District';
$model->data_type_id = $adapt->data_source->get_data_type_id('varchar');
$model->max_length = 64;
$model->save();

$model = new \model_country_address_format();
$model->country_id = $country_id;
$model->priority = 6;
$model->name = 'city';
$model->label = 'Town / City';
$model->data_type_id = $adapt->data_source->get_data_type_id('varchar');
$model->max_length = 64;
$model->save();

$model = new \model_country_address_format();
$model->country_id = $country_id;
$model->priority = 7;
$model->name = 'county';
$model->label = 'County';
$model->data_type_id = $adapt->data_source->get_data_type_id('varchar');
$model->max_length = 64;
$model->save();

$model = new \model_country_address_format();
$model->country_id = $country_id;
$model->priority = 8;
$model->name = 'postcode';
$model->label = 'Postcode';
$model->data_type_id = $adapt->data_source->get_data_type_id('uk_postcode');
$model->max_length = 12;
$model->save();
 
 

//TODO: If this is the only locales file installed then we need to set the default settings in the 'locales' bundle




?>