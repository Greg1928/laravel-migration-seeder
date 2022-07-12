<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $bool = ['si', 'no'];
        for($i=0; $i < 100; $i++){
        $newTrain = new Train();
        //columns
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->codice_treno = rand(1000, 9999);
            $newTrain->numero_carrozze = rand(2, 10);
            $newTrain->in_orario = $bool[rand(0,1)];
            $newTrain->cancellato = $bool[rand(0,1)];
            $newTrain->data_partenza = $faker->dateTimeThisMonth('+30 days');

            $newTrain->save();
        }
    }
}
