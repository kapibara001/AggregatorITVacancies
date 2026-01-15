<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MainpageController extends Controller {
    public function show_vacancies_unauthorized() {
        $APIURI = "https://api.hh.ru/vacancies";
        $USERAGENT = "MyApp/1.0 (myemail@gmail.com)";

        $page = rand(1, 95);
        $perPage = 20;
        
        $keywords = ['IT', 'Менеджер', 'Банкир', 'Бухгалер', 'Курьер', 'Мастер', 'Лаборант', 'Специалист'];

        $params = [
            'page' => $page,
            'per_page' => $perPage,
            'text' => array_rand($keywords),
            'locale' => "RU",
        ];

        $options = [
            "http" => [
                "method" => "GET",
                "header" => "User-Agent: $USERAGENT\r\n" .
                            "Accept: application/json\r\n"
            ]
        ];
        
        $context = stream_context_create($options);


        $queryString = http_build_query($params);
        $response = file_get_contents("$APIURI?$queryString", false, $context);

        if ($response === false) {
            return view('mainpage', $info="Данные не получены.");
        } 

        // return view('mainpage', compact('response'));
        return view('mainpage', [
            'data' => $response,
        ]);
    }
}