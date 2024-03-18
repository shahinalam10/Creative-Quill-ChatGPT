<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

class GptController extends Controller
{
    public function creativeQuill(): JsonResponse
{
    $search = 'what is google';

    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer ' . env('OPEN_API_KEY'),
    ])->post('https://api.openai.com/v1/chat/completions', [
        'model' => 'gpt-3.5-turbo',
        'messages' => [
            [
                'role' => 'user',
                'content' => $search
            ]
        ],
        'temperature' => 0.5,
        'max_tokens' => 200,
        'top_p' => 1.0,
        'frequency_penalty' => 0.52,
        'presence_penalty' => 0.5,
        'stop' => ['11.'],
    ]);

    if ($response->successful()) {
        $data = $response->json();
        if (isset($data['choices']) && is_array($data['choices']) && count($data['choices']) > 0) {
            $message = $data['choices'][0]['message'];
            return response()->json($message, 200, [], JSON_PRETTY_PRINT);
        } else {
            return response()->json('No response or unexpected response format from OpenAI API', 500);
        }
    } else {
        return response()->json('Error contacting OpenAI API', 500);
    }
}
    
}
