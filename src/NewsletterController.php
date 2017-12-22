<?php
namespace newsletter\newslettersystem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lang;
use App\Models\LangFields;
use newsletter\newslettersystem\Models\Newsletter;
use Validator;

use Response;

class NewsletterController extends Controller {

		public function showall(){

			$subscriptors = Newsletter::all();

			return view('newsletter::admin.index',compact('subscriptors'));


		}

		public function show(Request $request, $subscriptor){
			$subscriptor = Newsletter::find($subscriptor);

			return view('newsletter::admin.show',compact('subscriptor'));


		}

		public function create(){

			return view('newsletter::admin.create');


		}

		public function update(Request $request, $subscriptor){

			$data =  $request->all();
			$subscriptor = Newsletter::find($subscriptor);

			$this->validate($request, [
	            'email' => 'required|email|unique:newsletters,email,'. $subscriptor['id'],
	        ]);
			$newsletter= ['name', 'email'];

	        foreach ($newsletter as $field) {
	            if ($data[$field] != $subscriptor->{$field}) {
	                $subscriptor->{$field} = $data[$field];
	            }
	        }
			$subscriptor->save($data);

			return back()->with('alert-success', 'Changed datas of subscriptor');


		}
		public function destroy(Request $request, $subscriptor){

		$subscriptor =Newsletter::find($subscriptor);

		$subscriptor->delete();
		
		return back()->with('alert-success', 'Removed');


		}
		public function newsletter(Request $request){

			$data = $request->all();
			$this->validate($request, [
	            'email' => 'required|email|unique:newsletters,email,',
	        ]);
			$newsletter = Newsletter::create($data);

		if($request->ajax()){
			
			return $newsletter;

	
		}else{
			return redirect()->route('admin.newsletter')->with('alert-success', 'Added subscriptor');

		}	

		}




}