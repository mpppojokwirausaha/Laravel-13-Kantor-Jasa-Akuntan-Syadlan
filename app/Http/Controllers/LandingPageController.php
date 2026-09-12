<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Info;
use App\Models\OurClient;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Testimony;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('front-end.landingpage', [
            'title' => config('app.name'),
            'meta_domain' => env('APP_URL'),
            'meta_title' => config('app.name'),
            'meta_desc' => 'Kami menyediakan berbagai layanan akuntansi untuk kebutuhan bisnis Anda, dikerjakan oleh tenaga profesional dan berpengalaman.',
            'services' => Service::limit(3)->get(),
            'info' => (new Info())->getInfo(),
            'testimonies' => Testimony::limit(4)->get(),
            'clients' => OurClient::all(),
        ]);
    }

    public function services()
    {
        return view('front-end.services', [
            'title' => 'Layanan Akuntansi & Perpajakan',
            'meta_domain' => env('APP_URL'),
            'meta_title' => 'Layanan Akuntansi & Perpajakan',
            'meta_desc' => 'Lima bidang layanan yang kami tangani langsung, mulai dari pembukuan harian hingga sistem informasi bisnis, untuk pelaku usaha di Purwakarta dan Pekalongan.',
            'services' => (new Service())->getService(),
            'info' => (new Info())->getInfo(),
            'title_cta' => 'Siap merapikan keuangan usaha Anda?',
        ]);
    }

    public function about()
    {
        return view('front-end.about', [
            'title' => config('app.name'),
            'meta_domain' => env('APP_URL'),
            'meta_title' => 'Tentang Akuntan Syadlan',
            'meta_desc' => 'Kantor jasa akuntan yang berdiri di Purwakarta untuk mendampingi pelaku usaha di Purwakarta mengelola keuangan bisnisnya dengan lebih tertata.',
            'info' => (new Info())->getInfo(),
            'partners' => (new Partner())->getPartner(),
            'title_cta' => 'Ingin berkenalan lebih jauh dengan tim kami?',
        ]);
    }

    public function article()
    {
        $featured = Article::latest('created_at')->first();

        $articles = Article::query()
            ->when($featured, fn($q) => $q->where('uuid', '!=', $featured->uuid))
            ->latest('created_at')
            ->paginate(9)
            ->withQueryString();

        return view('front-end.article', [
            'title' => config('app.name'),
            'meta_domain' => env('APP_URL'),
            'meta_title' => 'Artikel Konsultan Syadlan',
            'meta_desc' => 'Catatan seputar pembukuan, perpajakan, dan pengelolaan keuangan untuk pelaku usaha di Purwakarta dan Pekalongan.',
            'featured' => $featured,
            'articles' => $articles,
            'info' => (new Info())->getInfo(),
            'title_cta' => 'Ada pertanyaan seputar pembukuan atau pajak usaha Anda?'
        ]);
    }

    public function articleDetail(string $slug)
    {
        $article = (new Article())->getArticleDetail($slug);

        abort_if(!$article, 404);

        return view('front-end.article-detail', [
            'title' => $article->article_title,
            'meta_domain' => env('APP_URL'),
            'meta_title' => $article->article_title,
            'meta_desc' => $article->excerpt,
            'article' => $article,
            'info' => (new Info())->getInfo(),
            'title_cta' => 'Ingin berkenalan lebih jauh dengan tim kami?'
        ]);
    }

    public function articleSearch(Request $request)
    {
        $query = $request->get('q', '');

        $artikel = Article::query()
            ->when($query, fn($q) => $q->where('article_title', 'like', "%{$query}%")
                ->orWhere('article_content', 'like', "%{$query}%"))
            ->latest('created_at')
            ->limit(9)
            ->get()
            ->map(fn($item) => [
                'title' => $item->article_title,
                'excerpt' => $item->excerpt,
                'image' => $item->image_url,
                'published_at' => $item->created_at,
                'reading_time' => $item->reading_time,
                'url' => route('articleDetail', $item->article_slug),
            ]);

        return response()->json(['data' => $artikel]);
    }
}
