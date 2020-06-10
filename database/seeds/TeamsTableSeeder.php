<?php

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $categories = ['BOARD', 'ADVISORS', 'BUSINESS DEVELOPMENT', 'SOCIAL ENTREPRENEUR', 'LEGAL', 'STRATEGIC PARTNERSHIP', 'FUND RASING', 'GRANT & PROJECT MANAGEMENT'];
        // foreach ($categories as $category) {
        //     DB::table('team_categories')->insert([
        //         'name'          => $category,
        //         'slug'          => strtolower($category),
        //         'created_at'    => date('Y-m-d H:i:s'),
        //         'updated_at'    => date('Y-m-d H:i:s'),
        //     ]);
        // }
        /*
         * Add Teams
         *
         */
        if (Team::where('slug', '=', 'board')->first() === null) {
            $boardTeam = Team::create([
                'name'        => 'BOARD',
                'slug'        => 'board',
                'description' => 'BOARD Team',
                // 'level'       => 5,
            ]);
        }

        if (Team::where('slug', '=', 'advisors')->first() === null) {
            $advisorsTeam = Team::create([
                'name'        => 'ADVISORS',
                'slug'        => 'advisors',
                'description' => 'ADVISORS Team',
                // 'level'       => 1,
            ]);
        }

        if (Team::where('slug', '=', 'business-development')->first() === null) {
            $business_developmentTeam = Team::create([
                'name'        => 'BUSINESS DEVELOPMENT',
                'slug'        => 'business-development',
                'description' => 'BUSINESS DEVELOPMENT',
                // 'level'       => 0,
            ]);
        }
        if (Team::where('slug', '=', 'social-entrepreneurs')->first() === null) {
            $social_entrepreneursTeam = Team::create([
                'name'        => 'SOCIAL ENTREPRENEURS',
                'slug'        => 'social-entrepreneurs',
                'description' => 'SOCIAL ENTREPRENEURS',
                // 'level'       => 0,
            ]);
        }
        if (Team::where('slug', '=', 'legal')->first() === null) {
            $legalTeam = Team::create([
                'name'        => 'LEGAL',
                'slug'        => 'legal',
                'description' => 'LEGAL',
                // 'level'       => 0,
            ]);
        }
        if (Team::where('slug', '=', 'strategic-partnership')->first() === null) {
            $strategic_partnershipTeam = Team::create([
                'name'        => 'STRATEGIC PARTNERSHIP',
                'slug'        => 'strategic-partnership',
                'description' => 'STRATEGIC PARTNERSHIP',
                // 'level'       => 0,
            ]);
        }
        if (Team::where('slug', '=', 'fund-rasing')->first() === null) {
            $fund_rasingTeam = Team::create([
                'name'        => 'FUND RASING',
                'slug'        => 'fund-rasing',
                'description' => 'FUND RASING',
                // 'level'       => 0,
            ]);
        }
        if (Team::where('slug', '=', 'grant-project-management')->first() === null) {
            $grant_project_managementTeam = Team::create([
                'name'        => 'GRANT & PROJECT MANAGEMENT',
                'slug'        => 'grant-project-management',
                'description' => 'GRANT & PROJECT MANAGEMENT',
                // 'level'       => 0,
            ]);
        }
        if (Team::where('slug', '=', 'member')->first() === null) {
            $memberTeam = Team::create([
                'name'        => 'MEMBER',
                'slug'        => 'member',
                'description' => 'MEMBER',
                // 'level'       => 0,
            ]);
        }
    }
}
