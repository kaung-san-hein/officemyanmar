<?php

use Illuminate\Database\Seeder;
use App\NRCSr;
use App\StateDivision;
class NRCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 14; $i++){
            NRCSr::create([
                'srs' => $i . '/',
            ]);
        }

        //start 1/
        StateDivision::create([
           'srs' => 1,
            'states_divisions' => 'BhaMaNa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'KhaPhaNa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'PaWaNa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'YaBaYa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'PhaKaNa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'KaMaNa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'KhaLaPha'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'MaKhaBa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'MSaNa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'MaKaNa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'MaKaTa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'MaNyaNa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'HaPaNa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'MaKaTha'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'DaPhaYa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'LaGana'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'SaKaNa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'SaBaTa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'MaGaDa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'AhGaYa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'NaMaNa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'PaNaDa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'PaTaAh'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'YaKaNa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'MaLaNa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'SaBaNa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'SaPaBa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'SaLaNa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'WaMaNa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'SaDaNa'
        ]);
        StateDivision::create([
            'srs' => 1,
            'states_divisions' => 'KaPaTa'
        ]);
        //end 1/

        //start 2/
        StateDivision::create([
           'srs' => 2,
           'states_divisions' => 'BaLaKha'
        ]);
        StateDivision::create([
            'srs' => 2,
            'states_divisions' => 'YaThaNa'
        ]);
        StateDivision::create([
            'srs' => 2,
            'states_divisions' => 'DaMaSa'
        ]);
        StateDivision::create([
            'srs' => 2,
            'states_divisions' => 'SaSaNa'
        ]);
        StateDivision::create([
            'srs' => 2,
            'states_divisions' => 'PhaSaNa'
        ]);
        StateDivision::create([
            'srs' => 2,
            'states_divisions' => 'HtaTaPa'
        ]);
        StateDivision::create([
            'srs' => 2,
            'states_divisions' => 'KhaSaNa'
        ]);
        StateDivision::create([
            'srs' => 2,
            'states_divisions' => 'PhaLaSa'
        ]);
        StateDivision::create([
            'srs' => 2,
            'states_divisions' => 'PhaYaSa'
        ]);
        StateDivision::create([
            'srs' => 2,
            'states_divisions' => 'LaKaNa'
        ]);
        StateDivision::create([
            'srs' => 2,
            'states_divisions' => 'MaYaMa'
        ]);
        StateDivision::create([
            'srs' => 2,
            'states_divisions' => 'MaSaNa'
        ]);
        StateDivision::create([
            'srs' => 2,
            'states_divisions' => 'YaTaNa'
        ]);
        //end 2/

          //start 3/
        StateDivision::create([
              'srs' => 3,
              'states_divisions' => 'LaBaNa'
          ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'PaKaNa'
        ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'YAYATha'
        ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'PhaAhNa'
        ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'BaAhNa'
        ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'PhaPaNa'
        ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'KaMaMa'
        ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'KaKaYa'
        ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'KaDaNa'
        ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'BaThaSa'
        ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'MaWaTa'
        ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'SaKaLa'
        ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'KaTaKha'
        ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'WaLaMa'
        ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'BAGALa'
        ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'BaKaLa'
        ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'LaThaNa'
        ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'ThaTaNa'
        ]);
        StateDivision::create([
            'srs' => 3,
            'states_divisions' => 'ThaTaKa'
        ]);
        //end 3/

            //start 4/
        StateDivision::create([
            'srs' => 4,
            'states_divisions' => 'PhaLaNa'
        ]);
        StateDivision::create([
            'srs' => 4,
            'states_divisions' => 'YaKhaDa'
        ]);
        StateDivision::create([
            'srs' => 4,
            'states_divisions' => 'HaKhaNa'
        ]);
        StateDivision::create([
            'srs' => 4,
            'states_divisions' => 'KaPaLa'
        ]);
        StateDivision::create([
            'srs' => 4,
            'states_divisions' => 'MaTaNa'
        ]);
        StateDivision::create([
            'srs' => 4,
            'states_divisions' => 'PaLaWa'
        ]);
        StateDivision::create([
            'srs' => 4,
            'states_divisions' => 'MaTaPa'
        ]);
        StateDivision::create([
            'srs' => 4,
            'states_divisions' => 'YaZaNa'
        ]);
        StateDivision::create([
            'srs' => 4,
            'states_divisions' => 'PaLaWa'
        ]);
        StateDivision::create([
            'srs' => 4,
            'states_divisions' => 'SaMaNa'
        ]);
        StateDivision::create([
            'srs' => 4,
            'states_divisions' => 'TaTaNa'
        ]);
        StateDivision::create([
            'srs' => 4,
            'states_divisions' => 'HtaTaLa'
        ]);
        StateDivision::create([
            'srs' => 4,
            'states_divisions' => 'TaZaNa'
        ]);
        StateDivision::create([
            'srs' => 4,
            'states_divisions' => 'KaKhaNa'
        ]);
        //end 4/

        //start 5/
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'AhYaTa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'BhaMaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'BaTaLa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'KhaTaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'HaMaLa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'AhTaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'KaLaHta'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'KaLaWa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'KaBaLa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'AhHtaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'KaNaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'KaThaNA'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'PhaPaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'KaLaTa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'KhaAuNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'KhaSuYs'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'KaLaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'KaSaLa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'HtaPaKha'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'LaYaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'MaPaLa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'SaMaYa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'MaLaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'MaKaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'MaYaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'MaMaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'MaMaTa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'DaHaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'NaYaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'PaSaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'PaLaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'PaLaBa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'SaKaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'SaLaKa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'KaMaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'YaBANa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'DaPaYa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'TaMaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'KhaPaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'MaThaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'TaSaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'HtaKhaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'KaLaTha'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'NgaSaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'TaAuNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'DaKaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'AhMaZa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'WaLaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'WaThaNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'YaAuNa'
        ]);
        StateDivision::create([
            'srs' => 5,
            'states_divisions' => 'YaMaPa'
        ]);
        //end 5/

        //start 6/
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'BaPaNa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'PaKaMa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'HtaWaNa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'MaTaNa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'AhMaYa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'KaYaYa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'KaPaNa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'KaThaMa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'HaThaTa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'KhaMaKa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'MaMaLa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'KaSaNa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'MaAaNa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'LaLaNa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'MaMaNa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'MaAhYa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'PaLaNa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'PaLaTa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'TaThaYa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'TaNaTha'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'ThaYaKha'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'YaPhaNa'
        ]);
        StateDivision::create([
            'srs' => 6,
            'states_divisions' => 'KaLaAh'
        ]);
        //end 6/

        //start 7/
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'MaWaTa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'DaAuNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'KaPaKa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'HtaTAPa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'KaWaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'KaKaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'KaTaKha'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'KaTaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'PaNaKa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'LaPaTa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'MaLaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'MaNyaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'NaTaLa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'NyaLaPa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'MaDaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'PaTaSa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'AhPhaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'AuTaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'PaTaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'PaKhaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'PaKhaTa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'PaTaTa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'PhaMaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'PaSaTa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'PaMaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'PaTaLa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'YaTaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'YaKaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'TaNgaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'ThaNaPa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'ThaWaTa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'ThaSaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'ThaKaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'WaMaNa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'YaTaYa'
        ]);
        StateDivision::create([
            'srs' => 7,
            'states_divisions' => 'ZaKaNa'
        ]);
        //end 7/

        //start 8/
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'AhLaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'MaHtaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'KhaMaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'BaKaLa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'GaGaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'KaMaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'MaKaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'MaBaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'SaKaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'MaTaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'MaLaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'MaMaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'MaThaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'NaMaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'NgaPhaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'PaKhaKa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'PaMaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'PaPhaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'SaLaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'KaHtaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'SaMaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'SaPhaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'SaTaYa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'SaPaWa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'MaYaSa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'MaGaDa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'MaHtaLa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'TaTaKa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'ThaYaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'HtaLaNa'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'YaNaKha'
        ]);
        StateDivision::create([
            'srs' => 8,
            'states_divisions' => 'YaSaKa'
        ]);
        //end 8/

        //start 9/
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'AhMaYa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'KhaMaSa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'KhaMaKha'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'AhYaTa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'ThaTaYa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'KhaMaZa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'NaNaMa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'PaKhaMa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'KaMaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'AhMaZa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'MaNaMa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'KhaAhZa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'KhaMaTha'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'KaPaTa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'KhaMaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'KaSaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'NaTaKa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'SaKaTa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'MaSaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'LaKaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'YaAuNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'MaYaTa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'MaTaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'MaTaYa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'MaHaMa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'MaLaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'MaHtaLa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'MaKaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'MaKhaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'MaThaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'NaMaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'MaTaLa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'NaHtaKa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'NgaZaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'NyaAuNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'NgaThaYa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'AhKhaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'PaThaKa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'PaBaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'PaKaKha'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'AhMaBa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'AhSaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'KhaMaMa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'MaKaKha'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'MaNaTa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'MaYaMa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'PaKhaKa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'ThaWaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'PaAuLa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'MaMaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'SaKaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'TaTaAu'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'TaThaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'ThaPaKa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'TaKaTa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'ThaSaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'WaTaNa'
        ]);
        StateDivision::create([
            'srs' => 9,
            'states_divisions' => 'YaMaTha'
        ]);
        //end 9/

        //start 10/
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'BaLaNa'
        ]);
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'khaSaNa'
        ]);
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'KaMaYa'
        ]);
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'BaAhNa'
        ]);
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'KaHtaNa'
        ]);
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'HtaHtaNa'
        ]);
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'KaMaLa'
        ]);
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'PhaPaNa'
        ]);
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'MaSaNa'
        ]);
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'MaLaMa'
        ]);
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'MaDaNa'
        ]);
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'PaMaNa'
        ]);
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'ThaPhaYa'
        ]);
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'KaKhaMa'
        ]);
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'ThaHtaNa'
        ]);
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'KhaZaNa'
        ]);
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'LaMaNa'
        ]);
        StateDivision::create([
            'srs' => 10,
            'states_divisions' => 'YaMaNa'
        ]);
        //end 10/

        //start 11/
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'AhMaNa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'BaThaTa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'GaMaNa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'kaTaLa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'KaPhaNa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'KaTaNa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'MaMaNa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'MaTaNa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'TaPaWa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'MaAuNa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'MaAhNa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'MaPaNa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'PaTaNa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'PaNaTa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'PaNaKa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'YaBhaNa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'YaThaTa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'YaTaNa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'MaPaTa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'YaTaTha'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'LaMaTa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'SaTaNa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'ThaTaNa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'MaAhTa'
        ]);
        StateDivision::create([
            'srs' => 11,
            'states_divisions' => 'TaKaNa'
        ]);
        //end 11/

        //start 12/
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'AhLaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'BhaHaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'BhaTaHta'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'KaKaKa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'DaGaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'DaGaSa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'DaLaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'DaPaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'DaGaYa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'LaMaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'LaThaYa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'LaKaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'MaBaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'HtaTaPa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'AhSaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'KaMaYa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'SaKaKha'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'KaMaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'KaKhaKa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'KaTaTa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'KaMaTa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'LaMaTa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'LaThaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'MaYaKa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'MaGaDa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'MaGaTa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'DaGaMa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'MaAuKa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'AuKaMa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'PaBaTa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'PaZaTa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'SaKhaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'SaKaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'YaPaTha'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'DaGaTa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'AuKaTa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'TaAuka'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'TaKaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'TaMaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'ThaKaTa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'ThaLaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'ThaGaKa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'ThaKhaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'TaTaNa'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'TaTaHta'
        ]);
        StateDivision::create([
            'srs' => 12,
            'states_divisions' => 'YaKaNa'
        ]);
        //end 12/

        //start 13/
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'HaPaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'ThaNaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'SaSaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'ThaPaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'KaTaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'KaKaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaHtaTa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'KaHaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'KaLaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'KaKhaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'TaMaNya'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'KaMaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaNgaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'KaThaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'HaMaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'LaKhaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'LaYaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'KhaYaHa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'LaKaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'YaSaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'LaLaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaBaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaKhaTa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaSaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaPhaTa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaYaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaKaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaPhaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaKhaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaLaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaNaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'TaTaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaTaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'PaPaKa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaYaTa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaYaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaYaTa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaHaYa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaSaTa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaPaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'NaSaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'NaPhaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'KhaLaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'NaSaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'NaTaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'NaMaTa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'NaKhaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'WaKaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'NaKhaTa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'NyaYaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'PaSaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'PaWaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'PhaKhaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'PaTaYa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'PaLaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'TaKhaLa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'TaYaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'TaKaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'KaTaLa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'YaNyaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'MaMaNa'
        ]);
        StateDivision::create([
            'srs' => 13,
            'states_divisions' => 'YaNgaNa'
        ]);
        //end 13/

        //start 14/
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'BaKaLa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'DaNaPha'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'DaDaYa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'AhMaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'AhMaTa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'KaMaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'PaKaKha'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'HaThaTa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'AhGaPa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'TaMaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'KaKaHta'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'KaLaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'KaKhaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'KaKaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'KaPaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'LaPaTa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'PaSaLa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'LaMaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'MaAhBa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'MaMaka'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'MaAhNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'AhPaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'MaMaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'HakaKa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'NgaPaTa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'NgaYaKa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'NyaTaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'PaTaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'YaThaYa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'MaYaKa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'AhSaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'PaThaYa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'PaThaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'NgaSaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'KaMaTha'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'PhaPaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'ThaPaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'WaKhaMa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'YaKaNa'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'NgaThaKha'
        ]);
        StateDivision::create([
            'srs' => 14,
            'states_divisions' => 'ZaLaNa'
        ]);
        //end 14/
    }
}
