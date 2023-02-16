<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{   

     //Show Add Page Form
     public function add() {
        return view('services.add-services');
    }

    //Store Service Entry
    public function store(Request $request) {
        $formFields = $request->validate([
            'service' => 'required',
            'service_description' => 'required',
            'service_image' => 'required|image',
        ]);

        if($request->hasFile('service_image')) {
            $formFields['service_image'] = $request->file('service_image')->store('service_image', 'public');
        }
        
        Service::create($formFields);
        
        return redirect('/services')->with('message', 'Listing created successfully');
    }
   
    //Show All Services
    public function index() {
        return view('pages.services',[
            'service' => Service::latest()->paginate(10)
        ]);
    }

    public function offer() {
        $services = Service::all();
        return view('services._service-offer', compact('services'));
    }

    //Show A Service
    public function view(Service $service) {
        return view('services.view-services', [
            'service' => $service
        ]);    
    }

    //Admin View All Service
    public function show() {
        return view('services.show-services', [
            'service' => Service::latest()->paginate(10)
        ]);    
    }

    //Show Edit Form
    public function edit(Service $service) {
        return view('services.edit-services', ['service' => $service]);
    }

    public function update(Request $request, Service $service) {
        $formFields = $request->validate([
            'service' => 'required',
            'service_description' => 'required',
            'service_image' => 'image',  
        ]);

        if($request->hasFile('service_image')) {
            $formFields['service_image'] = $request->file('service_image')->store('service_image', 'public');
        }

        $service->update($formFields);
        
        return redirect('/services')->with('message', 'Listing updated successfully');
    }

    //Delete a Service Entry
    public function destroy(Service $service) {
        $service->delete();
        return redirect('/services')->with('message', 'Listing deleted successfuly');
    }

    // public function ser()
    // {
    //     $services = Service::all();
    //     return view('pages.home', compact('services'));
    // }















    // public function add()
    // {
    //     return view('services.add-services');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'service' => 'required',
    //         'service_description' => 'required',
    //         'service_image' => 'required|image'
    //     ]);

    //     $service = new Service();
    //     $service->service = $request->service;
    //     $service->service_description = $request->service_description;
    //     $service->service_image = $request->file('service_image')->store('services', 'public');
    //     $service->save();

    //     return redirect()->route('services.show');
    // }

    // public function show()
    // {
    //     $services = Service::all();
    //     return view('services.show-services', compact('services'));
    // }

    // Show Edit Form
    // public function edit(Service $service) {       
    //     return view('services.edit-services', ['service' => $service]);
    // }

    // public function edit($id)
    // {
    // $service = Service::findOrFail($id);
    // return view('services.edit-services', compact('service'));
    // }

    // public function edit($id) {
    //     $service = Service::findOrFail($id);
    //     return view('services.edit-services', ['service' => $service]);
    // }
    
//     public function edit(Service $service)
// {
//     $service = Service::find($service);
//     if (!$service) {
//         dd("Service not found");
//     }
//     return view('services.edit-services', compact('service'));
// }



    // public function update(Request $request, $id)
    // {
    // $service = Service::findOrFail($id);
    // $service->update($request->all());

    // if ($request->hasFile('service_image')) {
    //     $request->file('service_image')->storeAs('public/services', $service->id . '.' . $request->service_image->extension());
    //     $service->service_image = $service->id . '.' . $request->service_image->extension();
    //     $service->save();
    // }

    // return redirect()->route('services.show');
    // }
}
