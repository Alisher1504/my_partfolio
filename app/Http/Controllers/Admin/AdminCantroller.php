<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use App\Models\Progres;
use App\Models\Sidebar;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AdminCantroller extends Controller
{
    public function index() {
        return view('admin.admin');
    }


    public function category() {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    public function create_category(Request $request) {

        $data = new Category();

        $data->name = $request->name;
        $data->link = $request->link;

        $data->save();

        return redirect('admin/category')->with('status', 'Create category successfully');

    }

    public function edit_category($id) {
        $data = Category::find($id);
        return view('admin.category.edit', compact('data'));
    }

    public function update_category(Request $request, $id) {

        $data = Category::find($id);

        $data->name = $request->name;
        $data->link = $request->link;
        $data->update();

        return redirect('admin/category')->with('status', 'Update category successfully');

    }

    public function delete_category($id) {
        $delete = Category::find($id);
        $delete->delete();
        return redirect('admin/category')->with('status', 'Delete category successfully');
    }

    /*------------------------Sidebar------------------------*/

    public function sidebar() {
        $sidebar = Sidebar::all();
        return view('admin.sidebar.sidebar', compact('sidebar'));
    }

    public function create_sidebar(Request $request) {

        $sidebar = new Sidebar();

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move('assets/uploads/sidebar/', $filename);
            $sidebar->image = $filename;
        }

        $sidebar->name = $request->name;
        $sidebar->save();

        return redirect('admin/sidebar')->with('status', 'Create sidebar successfully');

    }

    public function edit_sidebar($id) {
        $data = Sidebar::find($id);
        return view('admin.sidebar.editsidebar', compact('data'));
    }

    public function update_sidebar(Request $request, $id) {

        $sidebar = Sidebar::find($id);

        if($request->hasfile('image')){
            $path = 'assets/uploads/sidebar/' . $sidebar->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move('assets/uploads/sidebar/', $filename);
            $sidebar->image = $filename;

        };

        $sidebar->name = $request->name;

        $sidebar->update();

        return redirect('admin/sidebar')->with('Update sidebar successfullt');
    }

    public function delete_sidebar($id) {
        $sidebar = Sidebar::find($id);
        $path = 'assets/uploads/sidebar/' . $sidebar->image;
        if(File::exists($path)){
            File::delete($path);
        }

        $sidebar->delete();
        return redirect('admin/sidebar')->with('Delete sidebar successfullt');

    }

    /*------------------------About------------------------*/

    public function about() {
        $about = About::all();
        return view('admin.about.index', compact('about'));
    }

    public function create_about(Request $request) {

        $about = new About();

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move('assets/uploads/about/', $filename);
            $about->image = $filename;
        }

        $about->about_title = $request->about_title;
        $about->about_description = $request->about_description;
        $about->skilles_title = $request->skilles_title;
        $about->skilles_description = $request->skilles_description;
        $about->brithday = $request->brithday;
        $about->website = $request->website;
        $about->phone = $request->phone;
        $about->city = $request->city;
        $about->age = $request->age;
        $about->degree = $request->degree;
        $about->email = $request->email;
        $about->freelance = $request->freelance;
        $about->big_description = $request->big_description;
        $about->facts = $request->facts;
        $about->facts_description = $request->facts_description;
        $about->happy_clients = $request->happy_clients;
        $about->projecs = $request->projecs;
        $about->hours_of_support = $request->hours_of_support;
        $about->team = $request->team;
        $about->skills = $request->skills;
        $about->skills_description = $request->skills_description;
        $about->name = $request->name;
        $about->name_description = $request->name_description;

        $about->save();

        return redirect('admin/about')->with('status', 'About create successfully');

    }

    public function edit_about($id) {

        $data = About::find($id);
        return view('admin.about.editabout', compact('data'));

    }

    public function update_about(Request $request, $id){

        $about = About::find($id);

        if($request->hasfile('image')){
            $path = 'assets/uploads/about/' . $about->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move('assets/uploads/about/', $filename);
            $about->image = $filename;

        };

        $about->about_title = $request->about_title;
        $about->about_description = $request->about_description;
        $about->skilles_title = $request->skilles_title;
        $about->skilles_description = $request->skilles_description;
        $about->brithday = $request->brithday;
        $about->website = $request->website;
        $about->phone = $request->phone;
        $about->city = $request->city;
        $about->age = $request->age;
        $about->degree = $request->degree;
        $about->email = $request->email;
        $about->freelance = $request->freelance;
        $about->big_description = $request->big_description;
        $about->facts = $request->facts;
        $about->facts_description = $request->facts_description;
        $about->happy_clients = $request->happy_clients;
        $about->projecs = $request->projecs;
        $about->hours_of_support = $request->hours_of_support;
        $about->team = $request->team;
        $about->team = $request->skills;
        $about->team = $request->skills_description;

        $about->update();

        return redirect('admin/about')->with('status', 'Update About successfully');

    }

    public function delete_about($id) {

        $about = About::find($id);

        $path = 'assets/uploads/about/'.$about->image;
        if(File::exists($path)){
            File::delete($path);
        }

        $about->delete();

        return redirect('admin/about')->with('status', 'Delete About successfully');

    }

    /*---------------------Progres-------------------*/

    public function progres() {
        $prog = Progres::all();
        return view('admin.progres.index', compact('prog'));
    }

    public function prog_creates(Request $request) {

        $prog = new Progres();

        $prog->prog_name = $request->prog_name;
        $prog->prog_foiz = $request->prog_foiz;
        $prog->prog = $request->prog;

        $prog->save();

        return redirect('admin/progres')->with('status', 'Create progres successfully');

    }

    public function prog_edit($id){

        $prog = Progres::find($id);
        return view('admin.progres.edit', compact('prog'));

    }

    public function progres_update(Request $request, $id) {

        $prog = Progres::find($id);

        $prog->prog_name = $request->prog_name;
        $prog->prog_foiz = $request->prog_foiz;
        $prog->prog = $request->prog;
        $prog->update();

        return redirect('admin/progres')->with('status', 'Update progres successfully');

    }

    public function delete_prog($id) {
        $prog = Progres::find($id);
        $prog->delete();

        return redirect('admin/progres')->with('status', 'Delete progres successfully');

    }

}
