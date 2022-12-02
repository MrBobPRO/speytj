<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Redirect old website routes to new site routes
|--------------------------------------------------------------------------
|
*/

Route::redirect('/about_us', '/about');
Route::redirect('/about_us/our_history', '/about/history');
Route::redirect('/about_us/our_wealth', '/about/wealth');
Route::redirect('/about_us/development', '/about/career');
Route::redirect('/career', '/about/career');
Route::redirect('/contacts', '/');

Route::redirect('/nosology/{category}', '/nosology/algologiya')->whereNumber('category');
Route::redirect('/atx/{category}', '/atx/aminokisloti')->whereNumber('category');

Route::redirect('/products/d3_spey', '/products/d3-spey');
Route::redirect('/products/anderim_suppozitorii', '/products/anderim-suppozitorii');
Route::redirect('/products/busemid_ampuli', '/products/busemid-ampuli');
Route::redirect('/products/busemid_tabletki', '/products/busemid-tabletki');
Route::redirect('/products/vitaspey_bebi', '/products/vitaspey-bebi');
Route::redirect('/products/vitaspey_dlya_muzhchin', '/products/vitaspey-dlya-muzhchin');
Route::redirect('/products/vitaspey_kapsuli', '/products/vitaspey-kapsuli');
Route::redirect('/products/vitaspey_memori', '/products/vitaspey-memori');
Route::redirect('/products/vitaspey_pregna', '/products/vitaspey-pregna');
Route::redirect('/products/vitaspey_sirop', '/products/vitaspey-sirop');

Route::redirect('/products/galeks_0,05%', '/products/galeks-005');
Route::redirect('/products/galeks_0,1%', '/products/galeks-01');
Route::redirect('/products/gervetin_rastvor', '/products/gervetin-rastvor');
Route::redirect('/products/zentaveks_mazy', '/products/zentaveks-mazy');
Route::redirect('/products/immunekt_kapli', '/products/immunekt-kapli');
Route::redirect('/products/infanem_kids', '/products/infanem-kids');
Route::redirect('/products/inforin_aktiv_gely', '/products/inforin-aktiv-gely');
Route::redirect('/products/inforin_krem', '/products/inforin-krem');
Route::redirect('/products/inforin_suspenziya', '/products/inforin-suspenziya');

Route::redirect('/products/karnilev_inaektsii', '/products/karnilev-inaektsii');
Route::redirect('/products/karnilev_rastvor_-_1_gr', '/products/karnilev-rastvor-1-gr');
Route::redirect('/products/karnilev_rastvor_-_2_gr', '/products/karnilev-rastvor-2-gr');
Route::redirect('/products/kedd_softzhel', '/products/kedd-softzhel');
Route::redirect('/products/laktospey_drops', '/products/laktospey-drops');
Route::redirect('/products/laktospey_kids', '/products/laktospey-kids');
Route::redirect('/products/levoking_rastvor', '/products/levoking-rastvor');
Route::redirect('/products/leson_suspenziya', '/products/leson-suspenziya');

Route::redirect('/products/lilayz_roza', '/products/lilayz-roza');
Route::redirect('/products/magnispey_b6', '/products/magnispey-b6');
Route::redirect('/products/meksazh_ampuli_100mg', '/products/meksazh-ampuli-100mg');
Route::redirect('/products/meksazh_ampuli_250mg', '/products/meksazh-ampuli-250mg');
Route::redirect('/products/meksazh_tabletki', '/products/meksazh-tabletki');
Route::redirect('/products/mitsibon_rastvor', '/products/mitsibon-rastvor');
Route::redirect('/products/moparol_kapsuli', '/products/moparol-kapsuli');
Route::redirect('/products/nefroleks_rastvor', '/products/nefroleks-rastvor');
Route::redirect('/products/nefroleks_tabletki', '/products/nefroleks-tabletki');

Route::redirect('/products/normappetit_sirop', '/products/normappetit-sirop');
Route::redirect('/products/omarens_-__t', '/products/omarens-t');
Route::redirect('/products/pantospey_flakon', '/products/pantospey-flakon');
Route::redirect('/products/polveren_suspenziya', '/products/polveren-suspenziya');
Route::redirect('/products/polikof_sirop', '/products/polikof-sirop');
Route::redirect('/products/proktaluron_kombi', '/products/proktaluron-kombi');
Route::redirect('/products/regimed_inaektsii', '/products/regimed-inaektsii');
Route::redirect('/products/regimed_plyus', '/products/regimed-plyus');
Route::redirect('/products/relason_kids', '/products/relason-kids');
Route::redirect('/products/rovalang_sirop', '/products/rovalang-sirop');

Route::redirect('/products/slideron_flakon', '/products/slideron-flakon');
Route::redirect('/products/speybakt_0,75g', '/products/speybakt-075g');
Route::redirect('/products/speybakt_1,5g', '/products/speybakt-15g');
Route::redirect('/products/stopkolik_kapli', '/products/stopkolik-kapli');
Route::redirect('/products/togorels_rastvor', '/products/togorels-rastvor');
Route::redirect('/products/togorels_tabletki', '/products/togorels-tabletki');
Route::redirect('/products/tomiklar_suspenziya', '/products/tomiklar-suspenziya');
Route::redirect('/products/tomiklar_uno', '/products/tomiklar-uno');

Route::redirect('/products/fantsid_rastvor', '/products/fantsid-rastvor');
Route::redirect('/products/ferzapin_10mg', '/products/ferzapin-10mg');
Route::redirect('/products/ferzapin_5mg', '/products/ferzapin-5mg');
Route::redirect('/products/tsvetoks_kapli', '/products/tsvetoks-kapli');
Route::redirect('/products/tsvetoks_rastvor', '/products/tsvetoks-rastvor');
Route::redirect('/products/tsimiklin_tabletki', '/products/tsimiklin-tabletki');
