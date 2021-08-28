<?php

namespace Rifat\SimpleFaq\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Rifat\SimpleFaq\Models\Faq as FAQ;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $count = count(FAQ::all());
        return view('faq::admin.index', compact('count'));
    }

    public function manage()
    {
        $faqs = FAQ::orderBy('priority', 'ASC')->get();
        return view('faq::admin.manage', [
            'faqs' => $faqs
        ]);
    }

    public function faq_add(Request $request)
    {

        if (FAQ::where('priority', $request->priority)->first()) {
            return redirect('/faq/home/manage')->with('error', 'err');

        } else {
            $faq = new FAQ();
            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->priority = $request->priority;
            $faq->publication_status = $request->publication_status;
            $faq->save();
            return redirect('/faq/home/manage')->with('save', 'FAQ Save Successfully');
        }
    }


    public function faq_edit($id)
    {
        $faq = FAQ::find($id);

        return $faq;
    }

    public function priority_set(Request $request)
    {
        $positions = $request->position;
        foreach ($positions as $position) {
            $old_position = $position[0];
            $new_position = $position[1];
            $update_position = FAQ::findOrFail($old_position);
            $update_position['priority'] = $new_position;
            $update_position->update();
        }
        return "success";
    }

    public function faq_update(Request $request)
    {

        $faq = FAQ::find($request->id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->priority = $request->priority;
        $faq->publication_status = $request->publication_status;
        $faq->save();
        return redirect('/faq/home/manage')->with('update', 'FAQ Update Successfully');
    }


    public function faq_delete($id)
    {

        $faq = FAQ::find($id);
        $faq->delete();
        return redirect('/faq/home/manage')->with('delete', 'Delete Successfully');
    }

    public function unpublished_faq($id)
    {

        $faq = FAQ::find($id);
        $faq->publication_status = 0;
        $faq->save();
        return redirect('/faq/home/manage')->with('unPublish', 'FAQ Unpublished Successfully');
    }

    public function published_faq($id)
    {

        $faq = FAQ::find($id);
        $faq->publication_status = 1;
        $faq->save();
        return redirect('/faq/home/manage')->with('publish', 'FAQ Published Successfully');
    }


}
