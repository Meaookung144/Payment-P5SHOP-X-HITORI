<?php
class HitoriAPI{
    public $licensekey = ''; //กรุณาใส่คีย์ คีย์จะแสดงอยู่ที่ https://hitorikungz.tk

    public $api = 'https://hitorikungz.tk/api/server.php';
    function truewallet($gift){
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => $this->api.'?key='.$this->licensekey.'&gift='.$gift,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array('Content-Type: application/json',),
        ));
        $this->response = curl_exec($curl);
        curl_close($curl);
        $this->data = json_decode($this->response, true);
        return $this->data;
    }

}

?>