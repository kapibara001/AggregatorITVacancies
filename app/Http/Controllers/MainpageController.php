<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MainpageController extends Controller {
    public function show_vacancies(Request $request): View {
        $APIURI = "https://api.hh.ru/vacancies";
        $USERAGENT = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 (asda@gmail.com)";
        $keywords = ['IT', 'Менеджер', 'Банкир', 'Бухгалтер', 'Курьер', 'Мастер', 'Лаборант', 'Специалист'];
        
        if (Auth::check()) {
            $perPage = 20;
            $page = 1;
            $keyword = $request->input('q');

            if ($keyword == null) {
                $params = [
                    'page' => $page,
                    'per_page' => $perPage,
                    'locale' => "RU",
                ];
            } else {
                $params = [
                    'page' => $page,
                    'per_page' => $perPage,
                    'text' => $keyword,
                    'locale' => "RU",
                ];
            }
            
        } else {
            $keyword = $keywords[array_rand($keywords)];
            $perPage = 10;
            $page = rand(1, 95);

            $params = [
                'page' => $page,
                'per_page' => $perPage,
                'text' => $keyword,
                'locale' => "RU",
            ];
        }
        

        $options = [
            "http" => [
                "method" => "GET",
                "ignore_errors" => true,
                "header" => "User-Agent: $USERAGENT\r\n" .
                            "Accept: application/json\r\n"
            ]
        ];
        
        $context = stream_context_create($options);

        $queryString = http_build_query($params);
        $responseString = "$APIURI?$queryString";
        $response = file_get_contents($responseString, false, $context);
        
        $response = json_decode($response, true);

        if ($response === false) {
            return view('mainpage', [
                'data' => 'Данные не получены.',
            ]);
        }

        return view('mainpage', [
            'data' => $response['items'] ?? [],
            'keyword' => $keyword,
            'site' => 'hh.ru'
        ]);
    }
}