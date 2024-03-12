<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nama = [
            "MAILI KHOIRIYATI", "HAYYI LANA MIN AMRINA ROSYADA", "AINA ROHMAH", "NADA FARIDA", "KHOFIA LUTFI", "SA'ADAH MARDHIYAH", "NUR AZIZAH", "FADLILA RAHMA ZANJABILA", "TSANIA IFADA", "SIMATUL FAUZIYYAH", "LISMARIA ULFA", "EMA ELVIANA", "NURUL 'IZAA", "ADELIA LISTYANINGRUM", "ETIKA FIRSTIA NIAMA", "UMI FITROTUL MAGFIROH", "LAILA AZKA", "WILDA AFUSMA", "NASIIFATUL MUTSAQQIFAH",
            "RIKO ANGGI KUSUMA",
            "AHMAD ALIF LAMIM ASSOBIR",
            "MUKHAMAD KHOIRUN NAIMIN",
            "MUHAMMAD ANDY NAJMI FUADY",
            "MOHAMAD NGALIYUDIN",
            "MOHAMAD NUR YASIN",
            "ABDULLAH ASHIF",
            "MUHAMMAD YAZID MUBAROK",
            "MUHAMMAD YUSUF AL-RASYID",
            "ANIS WAHDI",
            "ABIESTA ABRAR MUCHAMMADI",
            "MOHAMAD MUHAIMIN",
            "RIF'AN HABIBUR ROHMAN",
            "SHORIM AZMI ABWAH",
            "ADIB UBAIDILLAH",
            "ACHMAD ZAKKY",
            "HARI ISWANTO",
            "IN'AM ATTAQI"
        ];

        foreach ($nama as $key => $val) {
            $user = new User();
            $user->name = $val;

            $string = str_replace(' ', '_', $val);
            $string = preg_replace('/[^a-z_]/', '', strtolower($string));

            $user->username = $string;
            $user->password = Hash::make('123456');
            $user->save();
        }
    }
}
