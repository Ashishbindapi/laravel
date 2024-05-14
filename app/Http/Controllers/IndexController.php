<?php
namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Response;

class IndexController extends Controller
{
    public function index()
    {
        return Member::with('group')->get();
    }
    public function group()
    {
        return Member::with('member')->get();
    }
}
