<?php

namespace App\Http\Controllers\Pages;

use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\JsonLd;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function index(){

        SEOMeta::setTitle(getSetting()->meta_title);
        SEOMeta::setDescription(getSetting()->meta_description);
        SEOMeta::setCanonical(getUrl());

        SEOTools::setTitle(getSetting()->meta_title);
        SEOTools::setDescription(getSetting()->meta_description);
        SEOTools::opengraph()->setUrl(getUrl());
        SEOTools::setCanonical(getUrl());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@bpmsandiego');
        SEOTools::jsonLd()->addImage(getMeta());

        OpenGraph::setTitle(getSetting()->meta_title);
        OpenGraph::setDescription(getSetting()->meta_description);
        OpenGraph::setUrl(getUrl());
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'en-En');
        OpenGraph::addImage(getMeta());

        JsonLd::setTitle(getSetting()->meta_title);
        JsonLd::setDescription(getSetting()->meta_description);
        JsonLd::addImage(getMeta());

        return view('pages.views.index')->with([
        ]);

    }

    public function about(){

        SEOMeta::setTitle(getSetting()->meta_title);
        SEOMeta::setDescription(getSetting()->meta_description);
        SEOMeta::setCanonical(getUrl());

        SEOTools::setTitle(getSetting()->meta_title);
        SEOTools::setDescription(getSetting()->meta_description);
        SEOTools::opengraph()->setUrl(getUrl());
        SEOTools::setCanonical(getUrl());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@bpmsandiego');
        SEOTools::jsonLd()->addImage(getMeta());

        OpenGraph::setTitle(getSetting()->meta_title);
        OpenGraph::setDescription(getSetting()->meta_description);
        OpenGraph::setUrl(getUrl());
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'en-En');
        OpenGraph::addImage(getMeta());

        JsonLd::setTitle(getSetting()->meta_title);
        JsonLd::setDescription(getSetting()->meta_description);
        JsonLd::addImage(getMeta());

        return view('pages.views.about')->with([
        ]);

    }

    public function drivers(){

        SEOMeta::setTitle(getSetting()->meta_title);
        SEOMeta::setDescription(getSetting()->meta_description);
        SEOMeta::setCanonical(getUrl());

        SEOTools::setTitle(getSetting()->meta_title);
        SEOTools::setDescription(getSetting()->meta_description);
        SEOTools::opengraph()->setUrl(getUrl());
        SEOTools::setCanonical(getUrl());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@meta_title');
        SEOTools::jsonLd()->addImage(getMeta());

        OpenGraph::setTitle(getSetting()->meta_title);
        OpenGraph::setDescription(getSetting()->meta_description);
        OpenGraph::setUrl(getUrl());
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'en-En');
        OpenGraph::addImage(getMeta());

        JsonLd::setTitle(getSetting()->meta_title);
        JsonLd::setDescription(getSetting()->meta_description);
        JsonLd::addImage(getMeta());

        return view('pages.views.drivers')->with([
        ]);

    }

    public function contact(){

        SEOMeta::setTitle(getSetting()->meta_title);
        SEOMeta::setDescription(getSetting()->meta_description);
        SEOMeta::setCanonical(getUrl());

        SEOTools::setTitle(getSetting()->meta_title);
        SEOTools::setDescription(getSetting()->meta_description);
        SEOTools::opengraph()->setUrl(getUrl());
        SEOTools::setCanonical(getUrl());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@meta_title');
        SEOTools::jsonLd()->addImage(getMeta());

        OpenGraph::setTitle(getSetting()->meta_title);
        OpenGraph::setDescription(getSetting()->meta_description);
        OpenGraph::setUrl(getUrl());
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'en-En');
        OpenGraph::addImage(getMeta());

        JsonLd::setTitle(getSetting()->meta_title);
        JsonLd::setDescription(getSetting()->meta_description);
        JsonLd::addImage(getMeta());

        return view('pages.views.contact')->with([
        ]);

    }

    public function services(){

        SEOMeta::setTitle(getSetting()->meta_title);
        SEOMeta::setDescription(getSetting()->meta_description);
        SEOMeta::setCanonical(getUrl());

        SEOTools::setTitle(getSetting()->meta_title);
        SEOTools::setDescription(getSetting()->meta_description);
        SEOTools::opengraph()->setUrl(getUrl());
        SEOTools::setCanonical(getUrl());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@meta_title');
        SEOTools::jsonLd()->addImage(getMeta());

        OpenGraph::setTitle(getSetting()->meta_title);
        OpenGraph::setDescription(getSetting()->meta_description);
        OpenGraph::setUrl(getUrl());
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'en-En');
        OpenGraph::addImage(getMeta());

        JsonLd::setTitle(getSetting()->meta_title);
        JsonLd::setDescription(getSetting()->meta_description);
        JsonLd::addImage(getMeta());

        return view('pages.views.services')->with([
        ]);

    }


    public function faqs(){

        SEOMeta::setTitle(getSetting()->meta_title);
        SEOMeta::setDescription(getSetting()->meta_description);
        SEOMeta::setCanonical(getUrl());

        SEOTools::setTitle(getSetting()->meta_title);
        SEOTools::setDescription(getSetting()->meta_description);
        SEOTools::opengraph()->setUrl(getUrl());
        SEOTools::setCanonical(getUrl());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@meta_title');
        SEOTools::jsonLd()->addImage(getMeta());

        OpenGraph::setTitle(getSetting()->meta_title);
        OpenGraph::setDescription(getSetting()->meta_description);
        OpenGraph::setUrl(getUrl());
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'en-En');
        OpenGraph::addImage(getMeta());

        JsonLd::setTitle(getSetting()->meta_title);
        JsonLd::setDescription(getSetting()->meta_description);
        JsonLd::addImage(getMeta());

        return view('pages.views.faqs')->with([
        ]);

    }


}
