<?php

namespace Database\Seeders;

use App\Models\Alert;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alert::factory()->create([
            'alert_entry' => 'Use cleopatra custom alerts styles for actions , notifcations etc.',
        ]);

        Alert::factory()->create([
            'alert_entry' => "so far there's just 3 type of alerts feel free to submit a pull request",
        ]);

        Alert::factory()->create([
            'alert_entry' => 'A simple alert it out!',
        ]);
    }
}
