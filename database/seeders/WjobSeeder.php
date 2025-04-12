<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wjob;

class WjobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            [
                'businessUserId' => 2,
                'customerId' => 101,
                'address' => '123 Main St, Springfield',
                'linkJob' => 'https://example.com/job/1',
                'lineItems' => json_encode(['item1' => 'Repair', 'item2' => 'Maintenance']),
                'jobNotes' => 'This is a test job note.',
                'checklist' => json_encode(['step1' => 'Inspect', 'step2' => 'Repair']),
            ],
            [
                'businessUserId' => 2,
                'customerId' => 102,
                'address' => '456 Elm St, Shelbyville',
                'linkJob' => 'https://example.com/job/2',
                'lineItems' => json_encode(['item1' => 'Installation', 'item2' => 'Testing']),
                'jobNotes' => 'This is another test job note.',
                'checklist' => json_encode(['step1' => 'Install', 'step2' => 'Test']),
            ],
            [
                'businessUserId' => 2,
                'customerId' => 103,
                'address' => '789 Oak St, Ogdenville',
                'linkJob' => 'https://example.com/job/3',
                'lineItems' => json_encode(['item1' => 'Inspection', 'item2' => 'Replacement']),
                'jobNotes' => 'This is yet another test job note.',
                'checklist' => json_encode(['step1' => 'Inspect', 'step2' => 'Replace']),
            ],
        ];

        foreach ($jobs as $job) {
            Wjob::create($job);
        }
    }
}
