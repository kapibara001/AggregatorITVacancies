<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MainpageController extends Controller {
    public function show_vacancies_unauthorized() {
        $APIURI = "https://api.hh.ru/vacancies";
        $USERAGENT = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 (asda@gmail.com)";

        $page = rand(1, 95);
        $perPage = 10;
        
        $keywords = ['IT', 'Менеджер', 'Банкир', 'Бухгалтер', 'Курьер', 'Мастер', 'Лаборант', 'Специалист'];
        $keyword = $keywords[array_rand($keywords)];

        $params = [
            'page' => $page,
            'per_page' => $perPage,
            'text' => $keyword,
            'locale' => "RU",
        ];

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

        echo $responseString;

        $response = json_decode($response, true);

        if ($response === false) {
            return view('mainpage', [
                'data' => 'Данные не получены.',
            ]);
        } 

        // return view('mainpage', compact('response'));
        return view('mainpage', [
            'data' => $response['items'] ?? [],
            'keyword' => $keyword,
        ]);
    }
}