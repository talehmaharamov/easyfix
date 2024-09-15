<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AutoGenerate\Service;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Content;
use App\Models\Packages;
use App\Models\Partner;
use App\Models\Slider;
use App\Models\Style;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Spatie\Sitemap\SitemapGenerator;

class HomeController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        $sliders = Slider::where('status', 1)->orderBy('order', 'asc')->get();
        $allProjects = Content::where('status', 1)->orderBy('created_at', 'desc')->limit(8)->get();
        $allServices = Service::where('status', 1)->orderBy('created_at', 'desc')->limit(8)->get();

        return view('frontend.index', get_defined_vars());

    }

    public function faq()
    {
        return view('frontend.faq.index', get_defined_vars());
    }

    public function search(Request $request)
    {
//        dd($request->all());
        $keyword = $request->keyword;
        $contents = Content::when($keyword, function ($query) use ($keyword) {
            return $query->orWhere('slug', 'LIKE', '%' . $keyword . '%')
                ->orWhereTranslation('name', 'LIKE', '%' . $keyword . '%')
                ->orWhereTranslation('content', 'LIKE', '%' . $keyword . '%')
                ->orWhereTranslation('meta_description', 'LIKE', '%' . $keyword . '%')
                ->orWhereTranslation('meta_title', 'LIKE', '%' . $keyword . '%')
                ->orWhereTranslation('alt', 'LIKE', '%' . $keyword . '%');
        })->get();

        $services = Service::when($keyword, function ($query) use ($keyword) {
            return $query->orWhere('slug', 'LIKE', '%' . $keyword . '%')
                ->orWhereTranslation('name', 'LIKE', '%' . $keyword . '%')
                ->orWhereTranslation('description', 'LIKE', '%' . $keyword . '%')
                ->orWhereTranslation('meta_description', 'LIKE', '%' . $keyword . '%')
                ->orWhereTranslation('meta_title', 'LIKE', '%' . $keyword . '%')
                ->orWhereTranslation('alt', 'LIKE', '%' . $keyword . '%');
        })->get();

        return view('frontend.content.search', get_defined_vars());
    }

    public function searchByKeyword(Request $request)
    {
        $keyword = $request->keyword;
        $contents = Content::where('slug', 'LIKE', '%' . $keyword . '%')
            ->orWhereTranslation('name', 'LIKE', '%' . $keyword . '%')
            ->orWhereTranslation('content', 'LIKE', '%' . $keyword . '%')
            ->orWhereTranslation('meta_description', 'LIKE', '%' . $keyword . '%')
            ->orWhereTranslation('meta_title', 'LIKE', '%' . $keyword . '%')
            ->orWhereTranslation('alt', 'LIKE', '%' . $keyword . '%')
            ->paginate(9);
        return view('frontend.content.search', get_defined_vars());
    }

    public function sendMessage(Request $request)
    {
        /*
         *   "name" => "Taleh Maharramov"
  "date" => "09/15/2024"
  "address" => "Uzeyir Hacibayli"
  "zip" => "AZ1010"
  "email" => "talehmeherrem85@gmail.com"
  "phone" => "0505100171"
  "service" => "3"
  "description" => "finisdiq uje"
         */
//        dd($request->all());
        try {
            $receiver = settings('mail_receiver');
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->address = $request->address;
            $contact->date = Carbon::parse($request->date)->format('Y-m-d');
            $contact->zip = $request->zip;
            $contact->phone = $request->phone;
            $contact->email = $request->email;
            $contact->type = $request->type;
            $contact->service_id = $request->service;
            $contact->read_status = 0;
            $contact->description = $request->description;
            $contact->save();
            $data = [
                'name' => $contact->name,
                'address' => $contact->address,
                'zip' => $contact->zip,
                'date' => Carbon::parse($contact->date)->format('m/d/Y'),
                'phone' => $contact->phone,
                'email' => $contact->email,
                'type' => ($contact->type == 1) ? __('backend.repair') : __('backend.check-up'),
                'service' => $contact->service->name,
                'msg' => $contact->description
            ];
            Mail::send('backend.system.mail.send', $data, function ($message) use ($receiver) {
                $message->to($receiver);
                $message->subject(__('backend.you-have-new-message'));
            });
            alert()->success(__('messages.success'));
            return redirect(route('frontend.contact-page'));
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect(route('frontend.contact-page'));
        }
    }
}
