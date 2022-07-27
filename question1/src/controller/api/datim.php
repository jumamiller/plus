<?php
/**
 * @author Miller Juma
 * @email officialjuma3538@gmail.com
 * @create date 2022-27-07 12:01:43
 * @modify date 2022-27-07 12:01:43
 * @desc [API request]
 */

class DatimRequest {
    /**
     * @return array
     */
    public static function request()
    {
        try{
            $page=$_GET['page']?  : 1;// get current page
            $url = "https://www.datim.org/api/sqlViews/fgUtV6e9YIX/data.json?page=$page";

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);

            $response = curl_exec($curl);
            curl_close($curl);
            return json_decode($response);
        } catch (\Exception $exception) {
            return [];
        }
    }
}
