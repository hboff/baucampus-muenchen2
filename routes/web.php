<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/preise', function () {
    return view('preise');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/leistungen', function () {
    return view('leistungen');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/landingpage', function () {
    return view('landingpage');
});

Route::get('/detail_categories', function () {
    return view('detail_categories');
});

Route::get('/detail_post', function () {
    return view('detail_post');
});

Route::get('/401', function () {
    return view('401');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/dienstleistungen/bauschaden', function () {
    return view('dienstleistungen.bauschaden');
});

Route::get('/dienstleistungen/baubegleitung', function () {
    return view('dienstleistungen.baubegleitung');
});

Route::get('/dienstleistungen/energieberatung', function () {
    return view('dienstleistungen.energieberatung');
});

Route::get('/dienstleistungen/hauskaufberatung', function () {
    return view('dienstleistungen.hauskaufberatung');
});

Route::get('/dienstleistungen/immobilienbewertung', function () {
    return view('dienstleistungen.immobilienbewertung');
});

Route::get('/dienstleistungen/schimmelpilz', function () {
    return view('dienstleistungen.schimmelpilz');
});

Route::get('/legal/impressum', function () {
    return view('legal.impressum');
});

Route::get('/legal/datenschutz', function () {
    return view('legal.datenschutz');
});

Route::get('/leistungen/ausbildung', function () {
    return view('leistungen.ausbildung');
});

Route::get('/leistungen/beratung', function () {
    return view('leistungen.beratung');
});

Route::get('/leistungen/bewertung', function () {
    return view('leistungen.bewertungen');
});

Route::get('/leistungen/inspektion', function () {
    return view('leistungen.inspektion');
});

Route::get('/kunden/civil-engineering-contractors', function () {
    return view('kunden.civil-engineering-contractors');
});

Route::get('/kunden/earth-and-mining', function () {
    return view('kunden.earth-and-mining');
});

Route::get('/kunden/management-in-the-engineering', function () {
    return view('kunden.management-in-the-engineering');
});

Route::get('/kunden/public-document', function () {
    return view('kunden.public-document');
});

Route::get('/kunden/surveying-and-mapping', function () {
    return view('kunden.surveying-and-mapping');
});

Route::get('/kunden/vac-truck', function () {
    return view('kunden.vac-truck');
});

Route::get('/template-strings/changelog', function () {
    return view('template-strings.changelog');
});

Route::get('/template-strings/csr', function () {
    return view('template-strings.csr');
});

Route::get('/template-strings/instruction-and-recommendation', function () {
    return view('template-strings.instruction-and-recommendation');
});

Route::get('/template-strings/license', function () {
    return view('template-strings.license');
});

Route::get('/template-strings/untitled', function () {
    return view('template-strings.untitled');
});
