<?php
namespace App\CustomClass;

use illuminate\Http\Request;
use GuzzleHttp\Client;

class Pushy{

    static public function sendPushNotification($data, $to, $options) {
        // Insert your Secret API Key here
        $apiKey = '5dff6c666fd68733845bdcea75b6296350f7c1da9abf1aae734878bd27b5e9bd';

        // Default post data to provided options or empty array
        $post = $options ?: array();

        // Set notification payload and recipients
        $post['to'] = $to;
        $post['data'] = $data;

        // Set Content-Type header since we're sending JSON
        $headers = array(
            'Content-Type: application/json'
        );

        // Initialize curl handle
        $client=new Client();
        $res=$client->post('https://api.pushy.me/push?api_key='.$apiKey,
        ['form_params'=>
        $post
        ]);
        var_dump($res);
        if($res->getStatusCode()==200){
            return $res->getBody()->getContents();
        }
        

        // Set URL to Pushy endpoint
        

        // Set request method to POST
      
        

        // Set our custom headers
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Get the response back as string instead of printing it
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Set post data as JSON
        // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post, JSON_UNESCAPED_UNICODE));

        // Actually send the push
        // $result = curl_exec($ch);

        // Display errors
        // if (curl_errno($ch)) {
        //     echo curl_error($ch);
        // }

        // Close curl handle
        // curl_close($ch);

        // Debug API response
        //echo $result;
    }


}