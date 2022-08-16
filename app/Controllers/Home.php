<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {

        $date = new \DateTime();
        $timestamp=$date->getTimestamp();
         
        $keys='7431ef287e35c450542d2a47b18bff0f41ca1be1'.'840161b9a62517be34ea90db9b41387b';
        $string=$timestamp.$keys;
        $md5=hash('md5', $string);
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://gateway.marvel.com:80/v1/public/events/310/characters?ts=$timestamp&apikey=840161b9a62517be34ea90db9b41387b&hash=$md5&limit=100");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json')                                                                       
        );   
        $output= curl_exec($ch) or die(curl_error()); 
        $data = json_decode($output, true);
        curl_close($ch);
        $info['results'] = $data['data']['results'];
        
        echo view('includes/header', $info);
        echo view('home', $info);
        echo view('includes/footer', $info);
    }


    public function personaje()
    {

        $date = new \DateTime();
        $timestamp=$date->getTimestamp();
        helper('form');
        $keys='7431ef287e35c450542d2a47b18bff0f41ca1be1'.'840161b9a62517be34ea90db9b41387b';
        $string=$timestamp.$keys;
        $md5=hash('md5', $string);
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://gateway.marvel.com:80/v1/public/characters/".$this->request->getGet('id')."?ts=$timestamp&apikey=840161b9a62517be34ea90db9b41387b&hash=$md5");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json')                                                                       
        );   
        $output= curl_exec($ch) or die(curl_error()); 
        
        $data = json_decode($output, true);
        //print_r($data['data']['results']);

        //echo $data['data']['results'][0]['id'];

        /*foreach ($data['data']['results'] as $key => $value) {
            echo $key.' '.$value['name'].' '.$value['id'].' '.$value['thumbnail']['path'].'<br>';
        }*/

        //Format JSON output
        //echo str_replace('\\/', '/', $output);

        curl_close($ch);
        $info['results'] = $data['data']['results'];

        echo view('includes/header', $info);
        echo view('personaje', $info);
        echo view('includes/footer', $info);
    }
}
