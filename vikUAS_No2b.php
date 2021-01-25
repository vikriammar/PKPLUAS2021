<?php
 
namespace Tests\Feature;
 
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
 
class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;
    
    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy'=> '001',
            'nidn' => '2021090929',
            'nama' => 'Adindaamalia',
            'jabfung' => 'WNT',
            'email_dosen' => 'adindaamalia@tif.uad.ac.id',
            'avatar' => 'adinda.jpg'
        ]);
 
        $this->assertEquals('001', $dosen->nipy);
        $this->assertEquals('2021090929', $dosen->nidn);
        $this->assertEquals('Adindaamalia', $dosen->nama);
        $this->assertEquals('WNT', $dosen->jabfung);
        $this->assertEquals('adindaamalia@tif.uad.ac.id', $dosen->email_dosen);
        $this->assertEquals('adinda.jpg', $dosen->avatar);
    }
}