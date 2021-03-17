<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $now=Carbon::now();
        $status=['pending','ongoing','completed','cancelled'];
        $color=['primary','success','danger','warning'];
        /*if ($status=='pending'){
            echo 'secondary';
        }
        elseif($status=='ongoing'){
            echo 'info';
        }
        elseif($status=='completed'){
            echo 'succsess';
        }
        elseif($status=='cancelled'){
            echo 'danger';
        }*/
        //$pending='secondary';
        //$ongoing='info';
        //$completed='success';
        //$cancelled='danger';
        //$color=[$pending,$ongoing,$completed,$cancelled];
        return [
            'title'=>$this->faker->sentence(3),
            'details'=>$this->faker->paragraph(2),
            'start_date'=>$now->addDays(rand(1,5)),
            'end_date'=>$now->addDays(rand(55,99)),
            'status'=>$status[rand(0,3)],
            'color'=>$color[rand(0,3)],
            'projectmanager_id'=>User::factory(),
            'updated_at'=>$now,
            'created_at'=>$now
        ];
    }
}
