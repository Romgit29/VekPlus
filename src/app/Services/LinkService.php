<?php

namespace App\Services;

use App\Models\Link;
use Illuminate\Support\Str;

class LinkService {
    public function store(string $link): string {
        $link = Link::create([
            'link' => $link,
            'shortened_link' => $this->getShortenedLink()
        ]);

        return $link->shortened_link;
    }

    public function getFullUrl(string $shortLink): bool|string {
        $link = Link::where('shortened_link', $shortLink)->first();
        if(!$link) return false;

        return $link->link;
    }

    private function getShortenedLink() {
        do
        {
            $shortenedLink = Str::random(6);
        }
        while($this->chekShortenedLinkExistance($shortenedLink));

        return $shortenedLink;
    }

    private function chekShortenedLinkExistance(string $shortenedlink): bool {
        return Link::where('shortened_link', $shortenedlink)->exists();
    }
}