<?php

class HttpClient
{

    public static function formPost(array $array)
    {
        $encoded = "";
        foreach ($array as $key => $value) {
            $encoded .= urlencode($key) . "=" . urlencode($value) . "&";
        }

        return $encoded;
    }
    /**
     * @param URl url
     * @param UrlEncode post
     * @return Array
     * @throws Exception 
     */
    public static function getData($url, $post, $header = "")
    {
        $url =  $url . "?" . $post;
        $ch = curl_init();

        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                "X-PARK-USER:" . $header .  "",
            )
        ));


        $result = curl_exec($ch);
        if (!empty(curl_error($ch)))
            throw new Exception(curl_error($ch));
        curl_close($ch);

        return json_decode($result, true); // Print page contents.
    }

    public  static function post($url, $post)
    {


        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $post,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencoded"
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        if (!$response) {
            throw new Exception(curl_error($curl));
            return;
        }

        echo $post;
        return json_decode($response, true);
    }
}
