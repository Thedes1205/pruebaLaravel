<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nombre=$this->faker->firstName();
        $apellido=$this->faker->lastName();
        $email=$nombre.$apellido."@alumnos.udg.mx";
        $usuario=User::create([
            'name' => $nombre,
            'email' => $email,
            'email_verified_at' => now(),
            'password' => '$2y$10$ZZzZXy2KQJcsQYW/7719LOd.4Q5poB91EzZ8xXalgGEuk/juTX6ke', //123456789
            'remember_token' => Str::random(10),]);
        return [
            'firstname'=> $nombre,
            'lastname'=> $apellido,
            'phone'=>$this->faker->numberBetween(1000000000,9999999999),
            'registration_number'=>$this->faker->numberBetween(5000,99999),
            'career'=>'Ingenieria Informatica',
            'grade'=>$this->faker->numberBetween(1,15),
            'shift'=>'Mixto',
            'gpa'=>$this->faker->randomFloat(2,1,100),
            'age'=>$this->faker->numberBetween(5,100),
            'gender'=>'mujer',
            'school'=>'CUCEI',
            'email'=>$email,
            'modality'=>'Motivación a la investigación',
            'code'=>$this->faker->numberBetween(100000000,999999999),
            'place'=>'Guadalajara',
            'user_id'=>$usuario->id,

        ];
    }
}
