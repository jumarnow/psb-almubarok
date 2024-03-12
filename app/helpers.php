<?php

use Illuminate\Support\Facades\Http;

function listAgama()
{
    return ["Islam","Protestan","Katolik","Hindu","Buddha","Konghucu"];
}

function listKebutuhanKhusus()
{
    return ["Tidak ada","Lambat belajar","Kesulitan belajar spesifik","Ganggun komunikasi","Berbakat /memiliki kecerdasan luar biasa","Lainnya"];
}

function listDisabilitas()
{
    return ["Tidak ada","Tuna netra","Tuna rungu","Tuna daksa","Tuna grahita","Tuna laras","Tuna wicara","Lainnya"];

}

function listPendidikan()
{
    return ["SD/Sederajat","SMP/Sederajat","SMA/Sederajat","D1/Sederajat","D2/Sederajat","D3/Sederajat","D4/Sederajat","S1/Sederajat","S2/Sederajat","Lainnya"];
}

function getProvinsi()
{
    $response = Http::get('https://jumarnow.github.io/api-wilayah-indonesia/api/provinces.json');
    $responseBody = $response->getBody()->getContents();
    $data = json_decode($responseBody, true);
    return $data;
}

function daerahAlt($num)
{
    if ($num == 1) {
        
    }
}
