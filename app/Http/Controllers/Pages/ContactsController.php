<?php


namespace App\Http\Controllers\Pages;

use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\JsonLd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
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

        return view('pages.views.contacts.index')->with([
            
        ]);

    }

    public function storage(Request $request){

            //if($request->input('g-recaptcha-response')!= null){

                $contact = new Contact;
                $contact->slack = $this->generate_slack("contacts");
                $contact->firstname = $request->firstname;
                $contact->lastname = $request->lastname;
                $contact->cellphone = $request->cellphone;
                $contact->email = $request->email;
                $contact->reviewed = 0;
                $contact->message = $request->message;
                $contact->save();

                //Mail::send(new AlertsMails($contact));
                //Mail::send(new ResponseMails($contact));

                return response()->json("true");
                    
            //}else {

            //  return response()->json("Debes confirmar que no eres un robot");
            //}

    }

}

