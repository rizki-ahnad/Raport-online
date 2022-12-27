<?php

namespace Database\Factories;

use App\Models\BioSiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BioSiswa>
 */
class BioSiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $bioSiswa_id = BioSiswa::all()->count();

        if ($bioSiswa_id == null) {
            $nis = 1;
        }else{
            $nis = $bioSiswa_id + 1;
        }

        $format = "121".date('dmy').$nis;
        return [
            BioSiswa::create([
                'nis' => $format,
                'nama' => 'Rizki',
                'kelas' => '10',
                'jurusan' => 'ips',
                'semester' => '2'
            ])
        ];
    }
}
