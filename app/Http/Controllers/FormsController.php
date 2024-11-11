<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    
    public function advanced_select()
    {
        return view('pages.forms.advanced-select');
    }

    public function counters()
    {
        return view('pages.forms.counters');
    }
    
    public function form_check_radios()
    {
        return view('pages.forms.form-check-radios');
    }

    public function form_color_pickers()
    {
        return view('pages.forms.form-color-pickers');
    }

    public function form_datetime_pickers()
    {
        return view('pages.forms.form-datetime-pickers');
    }

    public function form_file_uploads()
    {
        return view('pages.forms.form-file-uploads');
    }

    public function form_input_group()
    {
        return view('pages.forms.form-input-group');
    }

    public function form_inputs()
    {
        return view('pages.forms.form-inputs');
    }

    public function form_layout()
    {
        return view('pages.forms.form-layout');
    }

    public function form_range()
    {
        return view('pages.forms.form-range');
    }

    public function form_select()
    {
        return view('pages.forms.form-select');
    }
    
    public function form_select2()
    {
        return view('pages.forms.form-select2');
    }

    public function form_validation()
    {
        return view('pages.forms.form-validation');
    }

    public function inputnumber()
    {
        return view('pages.forms.inputnumber');
    }

    public function passwords()
    {
        return view('pages.forms.passwords');
    }

    public function quill_editor()
    {
        return view('pages.forms.quill-editor');
    }

}
