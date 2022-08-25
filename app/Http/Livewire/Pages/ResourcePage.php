<?php

namespace App\Http\Livewire\Pages;

use App\Models\Catalog;
use App\Models\Category;
use App\Models\Project;
use App\Models\Standard;
use App\Models\Tag;
use Livewire\Component;

class ResourcePage extends Component
{


    public function render()
    {
        return view('pages.resource-page' ,[
            'catalogs'  => Catalog::take(7)->orderBy('id', 'desc')->get() ,
            'standards' => Standard::take(7)->orderBy('id', 'desc')->get() ,
        ]);
    }


}
