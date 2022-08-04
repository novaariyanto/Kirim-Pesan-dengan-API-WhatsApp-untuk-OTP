<?php

class Whatsva
{
    public function ws_url()
    {
        // return "https://multidevice.whatsva.com";
        return "http://ika-broadcast.com";
        // return "http://143.110.179.252:8081";
    }
      // Messaging
      public function sendMessageText($instance_key, $jid, $message)
      {
          $data = [
              "instance_key" => $instance_key,
              "jid" => $jid,
              "message" => $message];

          return $this->curlData($this->ws_url() . "/api/sendMessageText", $data);
      }
      public function sendImageUrl($instance_key, $jid, $imageUrl, $caption)
      {
          $data = [
              "instance_key" => $instance_key,
              "jid" => $jid,
              "imageUrl" => $imageUrl,
              "caption" => $caption
            ];
              
          return $this->curlData($this->ws_url() . "/api/sendImageUrl", $data);
      }
      public function sendDocumentUrl($instance_key, $jid, $documentUrl)
      {
          $data = [
              "instance_key" => $instance_key,
              "jid" => $jid,
              "documentUrl" => $documentUrl];
          return $this->curlData($this->ws_url() . "/api/sendDocumentUrl?id=".$instance_key, $data);
      }
      //end messaging

    // Core of the Core
    public function curlData($url, $data)
    {
      

        $curl = curl_init();

        $payload = json_encode($data);
    

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json','referer:http://localhost:8088'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
     
        curl_close($ch);
        return $result;

    }
    public function curlData2($url, $data)
    {
       

        $curl = curl_init();

        $payload = json_encode($data);
     

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type:application/json','referer:http://localhost:8088'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
       
        curl_close($ch);
        return $result;

    }
    public function curlData2_get($url, $data)
    {
       

        $curl = curl_init();

        $payload = http_build_query($data);
      

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/x-www-form-urlencoded','referer:http://localhost:8088'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
     
        curl_close($ch);
        return $result;

    }
    public function curlData2_delete($url, $data)
    {
       

        $curl = curl_init();

        $payload = http_build_query($data);
      

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/x-www-form-urlencoded','referer:http://localhost:8088'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
     
        curl_close($ch);
        return $result;

    }
   
    // End Core of the Core
}
