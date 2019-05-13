<?php

namespace App\Http\Controllers\Admin;

use App\Info\Info;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\CheckPermissions;

class PageController extends Controller
{
    /**
     * @var
     */
    protected $checkPermissions;


    /**
     * PageController constructor.
     *
     * @param CheckPermissions $checkPermissions
     */
    public function __construct( CheckPermissions $checkPermissions )
    {
        $this->checkPermissions = $checkPermissions;
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->checkPermissions->checkIsAdmin();

        $info = new Info();
        $info = $info->getInfoIndex();

        return view( 'admin.pages.list-articles',compact('info'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createArticle()
    {
        $this->checkPermissions->checkIsAdmin();

        $info = new Info();
        $info = $info->getInfoIndex();

        return view( 'admin.pages.create-article' ,compact('info'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function questions()
    {
        $this->checkPermissions->checkIsAdmin();

        return view( 'admin.pages.questions');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contacts()
    {
        $this->checkPermissions->checkIsAdmin();

        return view( 'admin.pages.contacts');
    }

}
