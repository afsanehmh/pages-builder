<?php
namespace Tarnama\Pages;


use Tarnama\Pages\Models\Page;

class Pages
{
    public function ListTitle(){
        return Page::pluck('title');
    }
}