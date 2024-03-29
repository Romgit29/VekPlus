<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShortLinkRedirectRequest;
use App\Http\Requests\StoreLinkRequest;
use App\Services\LinkService;

class LinkController extends Controller
{
    private LinkService $linkService;
    
    public function __construct(LinkService $linkService) {
        $this->linkService = $linkService;
    }

    public function shortLinkRedirect(string $shortLink) {
        $url = $this->linkService->getFullUrl($shortLink);
        if($url) {
            return redirect()->to($url);
        } else {
            abort(404);
        }
    }

    public function store(StoreLinkRequest $request) {
        $shortenedLink = $this->linkService->store($request->link);

        return response()->json([
            'success' => true,
            'shortened_link' => $shortenedLink
        ]);
    }
}
