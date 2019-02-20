<?php

use Illuminate\Database\Seeder;

class PaperPostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('paper_posts')->delete();
        
        \DB::table('paper_posts')->insert(array (
            0 => 
            array (
                'id' => 7,
                'paper_post_title' => 'test',
                'post_description' => 'testing',
                'paper_id' => 2,
                'paper_ad' => '5bd95e0d80e2e5_SliderIconVillas1024x600-03.jpg',
                'paper_ad_size' => '404.501 kb',
                'paper_ad_type' => 'job_post',
                'paper_ad_category' => NULL,
                'paper_ad_sub_category' => NULL,
                'paper_ad_extension' => 'jpg',
                'number_of_jobs' => 0,
                'expired' => '2018-11-22 00:00:00',
                'posted_by' => 'Admin',
                'created_at' => '2018-10-31 00:00:00',
                'updated_at' => '2018-10-31 07:47:25',
            ),
            1 => 
            array (
                'id' => 8,
                'paper_post_title' => 'test2',
                'post_description' => 'lkdmvdvvnfjknvjkfnjkvnfdjnvfdjknvkj',
                'paper_id' => 2,
                'paper_ad' => '5bdacf57833da5_SliderIconVillas1024x600-03.jpg',
                'paper_ad_size' => '404.501 kb',
                'paper_ad_type' => 'job_post',
                'paper_ad_category' => NULL,
                'paper_ad_sub_category' => NULL,
                'paper_ad_extension' => 'jpg',
                'number_of_jobs' => 0,
                'expired' => '2018-11-22 00:00:00',
                'posted_by' => 'Admin',
                'created_at' => '2018-11-01 00:00:00',
                'updated_at' => '2018-11-01 10:03:03',
            ),
            2 => 
            array (
                'id' => 9,
                'paper_post_title' => 'test3',
                'post_description' => 'kkjnjnjnj',
                'paper_id' => 2,
                'paper_ad' => '5bdad0cb859d72_HomeIconVillas1024x600-01.jpg',
                'paper_ad_size' => '468.845 kb',
                'paper_ad_type' => 'job_post',
                'paper_ad_category' => NULL,
                'paper_ad_sub_category' => NULL,
                'paper_ad_extension' => 'jpg',
                'number_of_jobs' => 0,
                'expired' => '2018-11-22 00:00:00',
                'posted_by' => 'Admin',
                'created_at' => '2018-11-01 00:00:00',
                'updated_at' => '2018-11-01 10:09:15',
            ),
            3 => 
            array (
                'id' => 10,
                'paper_post_title' => 'test4',
                'post_description' => 'testing',
                'paper_id' => 3,
                'paper_ad' => '5bdae9593235aStarPropertyBazaarLogo-01.png',
                'paper_ad_size' => '138.204 kb',
                'paper_ad_type' => 'job_post',
                'paper_ad_category' => NULL,
                'paper_ad_sub_category' => NULL,
                'paper_ad_extension' => 'png',
                'number_of_jobs' => 4,
                'expired' => '2018-11-28 00:00:00',
                'posted_by' => 'Admin',
                'created_at' => '2018-11-01 11:54:01',
                'updated_at' => '2018-11-01 11:54:01',
            ),
        ));
        
        
    }
}