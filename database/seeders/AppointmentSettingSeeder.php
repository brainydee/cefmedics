<?php

namespace Database\Seeders;

use App\Models\AppointmentSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'day_of_week' => 'Friday',
                'start_time' => '2:00pm',
                'end_time' => '3:30pm',
                'session_limit' => 1, 
            ],
            [
                'day_of_week' => 'Friday',
                'start_time' => '3:30pm',
                'end_time' => '5:00pm',
                'session_limit' => 1,
            ],
            [
                'day_of_week' => 'Friday',
                'start_time' => '5:00pm',
                'end_time' => '6:30pm',
                'session_limit' => 1,
            ],
            [
                'day_of_week' => 'Friday',
                'start_time' => '6:30pm',
                'end_time' => '8:00pm',
                'session_limit' => 1,
            ],

            [
                'day_of_week' => 'Saturday',
                'start_time' => '2:00pm',
                'end_time' => '3:30pm',
                'session_limit' => 1,
            ],
            [
                'day_of_week' => 'Saturday',
                'start_time' => '3:30pm',
                'end_time' => '5:00pm',
                'session_limit' => 1,
            ],
            [
                'day_of_week' => 'Saturday',
                'start_time' => '5:00pm',
                'end_time' => '6:30pm',
                'session_limit' => 1,
            ],
            [
                'day_of_week' => 'Saturday',
                'start_time' => '6:30pm',
                'end_time' => '8:00pm',
                'session_limit' => 1,
            ],

            [
                'day_of_week' => 'Sunday',
                'start_time' => '7:00pm',
                'end_time' => '8:30pm',
                'session_limit' => 1, 
            ],
            [
                'day_of_week' => 'Sunday',
                'start_time' => '8:30pm',
                'end_time' => '10:00pm',
                'session_limit' => 2,
            ],
        ];

        foreach ($settings as $setting) {
            AppointmentSetting::create($setting);
        }
    }
}
