<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use App\Models\Attendance;
use App\Models\Score; // Using Score based on your previous migrations
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Define the array of students
        $students = [
            ['full_name' => 'ADAIRA ALTHAFANALA KEYLA ZIVANA', 'nisn' => '0091319991', 'nis' => '242510001'],
            ['full_name' => 'ATSAAL MULHAM', 'nisn' => '0098894084', 'nis' => '242510184'],
            ['full_name' => 'BHIANCA PRAMESTIA ANGGRAINI', 'nisn' => '0081918322', 'nis' => '242510328'],
            ['full_name' => 'DENTA NAPSIKA', 'nisn' => '0098964907', 'nis' => '242510329'],
            ['full_name' => 'DESTYA PUTRI UTAMI', 'nisn' => '0092186762', 'nis' => '242510187'],
            ['full_name' => 'DHIWA DZAKIYYAH', 'nisn' => '0082288438', 'nis' => '242510188'],
            ['full_name' => 'EMILY DWI HERYANTO', 'nisn' => '0085995373', 'nis' => '242510010'],
            ['full_name' => 'EMIRALD DINEZAD', 'nisn' => '0085812433', 'nis' => '242510155'],
            ['full_name' => 'FAIZ AKBAR PUTRA IRYANTO', 'nisn' => '0082965090', 'nis' => '242510262'],
            ['full_name' => 'FARIS ADNAN MULKI', 'nisn' => '0095486697', 'nis' => '242510332'],
            ['full_name' => 'FIRZATULLAH AIRA NURDIANA', 'nisn' => '0084192828', 'nis' => '242510157'],
            ['full_name' => 'FRIDA ALYKA DEWI', 'nisn' => '0082229814', 'nis' => '242510158'],
            ['full_name' => 'GALIH IKHRYA FAJRI', 'nisn' => '0084036469', 'nis' => '242510264'],
            ['full_name' => 'GHAZWAN RAISSA RAKSAPRAJA', 'nisn' => '0092926010', 'nis' => '242510122'],
            ['full_name' => 'KARIN BERLIAN FEBRIANI', 'nisn' => '0081637427', 'nis' => '242510296'],
            ['full_name' => 'KEIYSA HAVITINA NURBAETY', 'nisn' => '0104243151', 'nis' => '242510016'],
            ['full_name' => 'KIRANIA FARZANA KHAIRUNNISA', 'nisn' => '0082103882', 'nis' => '242510017'],
            ['full_name' => 'MUHAMAD AFIN NUR ZAHIR', 'nisn' => '0093303364', 'nis' => '242510299'],
            ['full_name' => 'MUHAMMAD RAZIQ MULYANA AGUSTAF', 'nisn' => '0089529641', 'nis' => '242510019'],
            ['full_name' => 'NABHAN GALIH PRAKESIT', 'nisn' => '0089258624', 'nis' => '242510167'],
            ['full_name' => 'NABIL MUTHOHHAR FIRDAUS', 'nisn' => '0096805925', 'nis' => '242510234'],
            ['full_name' => 'NAUFAL AHMAD FAUZI', 'nisn' => '0099842191', 'nis' => '242510274'],
            ['full_name' => 'NAUSHAD GHAFANZAR ASSYAUQI', 'nisn' => '0096322003', 'nis' => '242510344'],
            ['full_name' => 'NEESHA ABIGAIL PATA', 'nisn' => '0092231977', 'nis' => '242510025'],
            ['full_name' => 'QELDYOSHI SHADRAA FAYOLLA', 'nisn' => '0099149610', 'nis' => '242510170'],
            ['full_name' => 'RACHEL AMANDHA DAPIA', 'nisn' => '0092996022', 'nis' => '242510240'],
            ['full_name' => 'RADITIA NITIASA WARDHANA', 'nisn' => '0097581866', 'nis' => '242510311'],
            ['full_name' => 'RAFA FAIRUZ ZADA', 'nisn' => '0092441121', 'nis' => '242510094'],
            ['full_name' => 'RAFLI AULIA NUGRAHA', 'nisn' => '0087226362', 'nis' => '242510204'],
            ['full_name' => 'SAFFANAH MAHARANI ZHARFAN', 'nisn' => '0085825327', 'nis' => '242510133'],
            ['full_name' => 'SALMA NURUN NAZMI', 'nisn' => '0092035960', 'nis' => '242510316'],
            ['full_name' => 'SHAFA SALSABILA AYUNINGTYAS', 'nisn' => '0081364598', 'nis' => '242510138'],
            ['full_name' => 'SILVIA TESALONIKA NAPITUPULU', 'nisn' => '0092844820', 'nis' => '242510211'],
            ['full_name' => 'SYIFA AULIA', 'nisn' => '0098859860', 'nis' => '242510246'],
            ['full_name' => 'TSALITSA SYIFA AZKIA', 'nisn' => '0097000849', 'nis' => '242510142'],
        ];

        // 2. Loop through the array to create each student and their related records
        foreach ($students as $studentData) {
            
            // Create the Student Record
            $student = Student::create([
                'full_name'     => $studentData['full_name'],
                'nisn'          => $studentData['nisn'],
                'nis'           => $studentData['nis'],
                'tempat_lahir'  => 'Jakarta', 
                'tanggal_lahir' => '2008-01-01', 
                'password'      => Hash::make('password123') 
            ]);

        }
        
        $this->command->info('Database seeded successfully with Students, Attendance, and Scores!');
    }
}