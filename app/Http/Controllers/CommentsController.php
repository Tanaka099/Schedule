<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;

class CommentsController extends Controller
{
    public function index(Comments $comments)
{
    return $comments->get();
}
}
