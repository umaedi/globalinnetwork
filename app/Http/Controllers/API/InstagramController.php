<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use App\Services\BaseService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
	public $pengaturan;
	public function __construct(Pengaturan $pengaturan)
	{
		$this->pengaturan = new BaseService($pengaturan);
	}

	public function index(Request $request, $subdomain)
	{
		if ($request->ajax()) {
			try {
				$token = $this->pengaturan->Query()->where("subdomain", $subdomain)->first()->token_ig;
				$url = env('SERVICE_INSTAGRAM') . '/instagram';
				// // Caching data selama 120 menit (2 jam)
				$feeds = Cache::remember('instagram_feeds_' . $subdomain, 120, function () use ($url, $token) {
					$response = Http::withHeaders([
						'Accept' => 'application/json',
						'_token' => $token,
					])->get($url);
					return json_decode($response->body(), true)['data'];
				});

				$feeds = array_slice($feeds, 0, 4);
			} catch (\Throwable $th) {
				return $this->error($th->getMessage());
			}

			return view('web.instagram.index', ['feeds' => $feeds]);
		}
	}

	public function show(Request $request, $subdomain, $id)
	{
		if ($request->ajax()) {
			try {
				$token = $this->pengaturan->Query()->where("subdomain", $subdomain)->first()->token_ig;
				$url = env('SERVICE_INSTAGRAM') . "/instagram/{$id}";
				$fields = "?fields=id,caption,media_type,media_url,permalink,username";

				$response = Http::withHeaders([
					'Accept' => 'application/json',
					'_token' => $token,
				])->get($url . $fields);

				if ($response->successful()) {

					$responseData = json_decode($response->body(), true);
					// Pastikan key `data` ada
					$media = $responseData['data'] ?? [];

					return view('web.instagram.show', ['media' => $media]);
				} else {
					throw new \Exception('API request failed.');
				}
			} catch (\Throwable $th) {
				return $this->error($th->getMessage());
			}
		}
	}
}
