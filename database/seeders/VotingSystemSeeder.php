<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VotingSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed Voters
        \App\Models\Voter::create([
            'vname' => 'Sushil Sharma',
            'studentid' => 6275151,
            'username' => 'ss362'
        ]);

        \App\Models\Voter::create([
            'vname' => 'Shuja Rizvi',
            'studentid' => 1234567,
            'username' => 'sr123'
        ]);

        \App\Models\Voter::create([
            'vname' => 'Nizam Ansari',
            'studentid' => 9876543,
            'username' => 'na123'
        ]);

        \App\Models\Voter::create([
            'vname' => 'Hilal Khan',
            'studentid' => 1231234,
            'username' => 'hk123'
        ]);

        // Seed Candidates
        $candidates = [
            ['cid' => 'SRC', 'cname' => 'Sushil Sharma', 'name' => 'Sushil', 'degree' => 'Bcompsc', 'position' => 'GM'],
            ['cid' => 'SRC', 'cname' => 'Nizam Ansari', 'name' => 'Nizam', 'degree' => 'Bit', 'position' => 'GM'],
            ['cid' => 'SRC', 'cname' => 'Hilal Khan', 'name' => 'Hilu', 'degree' => 'Bcom', 'position' => 'GM'],
            ['cid' => 'SRC', 'cname' => 'Shuja Rizvi', 'name' => 'Shuja', 'degree' => 'Engineering', 'position' => 'GM'],
            ['cid' => 'SRC', 'cname' => 'Slate1', 'name' => 'slate01', 'degree' => '', 'position' => 'slate'],
            ['cid' => 'SRC', 'cname' => 'Slate2', 'name' => 'slate02', 'degree' => '', 'position' => 'slate'],
            ['cid' => 'SRC', 'cname' => 'Slate3', 'name' => 'slate03', 'degree' => '', 'position' => 'slate'],
            ['cid' => 'SRC', 'cname' => 'Gautam', 'name' => 'Gautam Gambhir', 'degree' => '', 'position' => 'Sports'],
            ['cid' => 'SRC', 'cname' => 'Kane', 'name' => 'Kane W', 'degree' => '', 'position' => 'Sports'],
            ['cid' => 'SRC', 'cname' => 'Rohit', 'name' => 'Rohit Sharma', 'degree' => '', 'position' => 'Sports'],
        ];

        foreach ($candidates as $candidate) {
            \App\Models\Candidate::create($candidate);
        }

        // Seed a sample voting session
        \App\Models\VotingSession::create([
            'date' => now()->toDateString(),
            'stime' => '09:00:00',
            'etime' => '17:00:00'
        ]);
    }
}
