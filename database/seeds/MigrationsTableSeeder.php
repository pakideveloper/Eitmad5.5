<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2018_08_29_000000_create_countries_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2018_08_29_000001_create_regions_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2018_08_29_000002_create_cities_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2018_08_29_000003_create_areas_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2018_08_29_000004_create_users_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2018_08_29_000005_create_product_categories_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2018_08_29_000007_create_brands_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2018_08_29_000008_create_product_sub_categories_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2018_08_29_000009_create_discounts',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2018_08_29_000010_create_products_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2018_08_29_000011_create_product_files_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2018_08_29_000012_create_orders_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2018_08_29_000013_create_billing_infos_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2018_08_29_000014_create_order_products_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2018_08_29_000015_create_password_resets_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2018_08_29_000016_create_industries_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2018_08_29_000017_create_companies_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2018_08_29_000018_create_job_categories_table',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2018_08_29_000018_create_job_types_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2018_08_29_000019_create_job_sub_categories_table',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2018_08_29_000020_create_degree_levels_table',
                'batch' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2018_08_29_000021_create_degree_types_table',
                'batch' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2018_08_29_000022_create_jobs_table',
                'batch' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2018_08_29_000023_create_paper_posts_table',
                'batch' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2018_08_29_000025_create_custom_questions_table',
                'batch' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2018_08_29_000026_create_candidate_profiles_table',
                'batch' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2018_08_29_000027_create_cus_q_c_j_a_table',
                'batch' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2018_08_29_000028_create_candidate_jobs_association_table',
                'batch' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2018_08_29_000029_create_candidate_projects_table',
                'batch' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'migration' => '2018_08_29_000030_create_candidate_experience_table',
                'batch' => 2,
            ),
            30 => 
            array (
                'id' => 31,
                'migration' => '2018_08_29_000031_create_candidate_educational_profiles_table',
                'batch' => 3,
            ),
            31 => 
            array (
                'id' => 32,
                'migration' => '2018_08_29_000032_create_candidate_certificates_table',
                'batch' => 3,
            ),
            32 => 
            array (
                'id' => 33,
                'migration' => '2018_08_29_000033_create_candidate_job_associations_table',
                'batch' => 3,
            ),
            33 => 
            array (
                'id' => 34,
                'migration' => '2018_09_05_095934_entrust_setup_tables',
                'batch' => 4,
            ),
            34 => 
            array (
                'id' => 35,
                'migration' => '2018_09_26_104846_brand_sub_category_assoc',
                'batch' => 5,
            ),
            35 => 
            array (
                'id' => 36,
                'migration' => '2018_10_08_085551_create_billing_address',
                'batch' => 5,
            ),
            36 => 
            array (
                'id' => 37,
                'migration' => '2019_02_19_165840_create_areas_table',
                'batch' => 0,
            ),
            37 => 
            array (
                'id' => 38,
                'migration' => '2019_02_19_165840_create_biddings_table',
                'batch' => 0,
            ),
            38 => 
            array (
                'id' => 39,
                'migration' => '2019_02_19_165840_create_billing_details_table',
                'batch' => 0,
            ),
            39 => 
            array (
                'id' => 40,
                'migration' => '2019_02_19_165840_create_billing_infos_table',
                'batch' => 0,
            ),
            40 => 
            array (
                'id' => 41,
                'migration' => '2019_02_19_165840_create_brand_subcategory_assoc_table',
                'batch' => 0,
            ),
            41 => 
            array (
                'id' => 42,
                'migration' => '2019_02_19_165840_create_brands_table',
                'batch' => 0,
            ),
            42 => 
            array (
                'id' => 43,
                'migration' => '2019_02_19_165840_create_candidate_certificates_table',
                'batch' => 0,
            ),
            43 => 
            array (
                'id' => 44,
                'migration' => '2019_02_19_165840_create_candidate_educational_profiles_table',
                'batch' => 0,
            ),
            44 => 
            array (
                'id' => 45,
                'migration' => '2019_02_19_165840_create_candidate_experience_table',
                'batch' => 0,
            ),
            45 => 
            array (
                'id' => 46,
                'migration' => '2019_02_19_165840_create_candidate_job_associations_table',
                'batch' => 0,
            ),
            46 => 
            array (
                'id' => 47,
                'migration' => '2019_02_19_165840_create_candidate_profiles_table',
                'batch' => 0,
            ),
            47 => 
            array (
                'id' => 48,
                'migration' => '2019_02_19_165840_create_candidate_projects_table',
                'batch' => 0,
            ),
            48 => 
            array (
                'id' => 49,
                'migration' => '2019_02_19_165840_create_cities_table',
                'batch' => 0,
            ),
            49 => 
            array (
                'id' => 50,
                'migration' => '2019_02_19_165840_create_claim_orders_table',
                'batch' => 0,
            ),
            50 => 
            array (
                'id' => 51,
                'migration' => '2019_02_19_165840_create_companies_table',
                'batch' => 0,
            ),
            51 => 
            array (
                'id' => 52,
                'migration' => '2019_02_19_165840_create_company_ceo_info_table',
                'batch' => 0,
            ),
            52 => 
            array (
                'id' => 53,
                'migration' => '2019_02_19_165840_create_countries_table',
                'batch' => 0,
            ),
            53 => 
            array (
                'id' => 54,
                'migration' => '2019_02_19_165840_create_cus_q_c_j_a_table',
                'batch' => 0,
            ),
            54 => 
            array (
                'id' => 55,
                'migration' => '2019_02_19_165840_create_custom_questions_table',
                'batch' => 0,
            ),
            55 => 
            array (
                'id' => 56,
                'migration' => '2019_02_19_165840_create_degree_levels_table',
                'batch' => 0,
            ),
            56 => 
            array (
                'id' => 57,
                'migration' => '2019_02_19_165840_create_degree_types_table',
                'batch' => 0,
            ),
            57 => 
            array (
                'id' => 58,
                'migration' => '2019_02_19_165840_create_discounts_table',
                'batch' => 0,
            ),
            58 => 
            array (
                'id' => 59,
                'migration' => '2019_02_19_165840_create_ecom_messages_table',
                'batch' => 0,
            ),
            59 => 
            array (
                'id' => 60,
                'migration' => '2019_02_19_165840_create_ecom_visitors_table',
                'batch' => 0,
            ),
            60 => 
            array (
                'id' => 61,
                'migration' => '2019_02_19_165840_create_industries_table',
                'batch' => 0,
            ),
            61 => 
            array (
                'id' => 62,
                'migration' => '2019_02_19_165840_create_job_categories_table',
                'batch' => 0,
            ),
            62 => 
            array (
                'id' => 63,
                'migration' => '2019_02_19_165840_create_job_sub_categories_table',
                'batch' => 0,
            ),
            63 => 
            array (
                'id' => 64,
                'migration' => '2019_02_19_165840_create_job_types_table',
                'batch' => 0,
            ),
            64 => 
            array (
                'id' => 65,
                'migration' => '2019_02_19_165840_create_jobs_table',
                'batch' => 0,
            ),
            65 => 
            array (
                'id' => 66,
                'migration' => '2019_02_19_165840_create_marketers_table',
                'batch' => 0,
            ),
            66 => 
            array (
                'id' => 67,
                'migration' => '2019_02_19_165840_create_newspaper_table',
                'batch' => 0,
            ),
            67 => 
            array (
                'id' => 68,
                'migration' => '2019_02_19_165840_create_order_products_table',
                'batch' => 0,
            ),
            68 => 
            array (
                'id' => 69,
                'migration' => '2019_02_19_165840_create_orders_table',
                'batch' => 0,
            ),
            69 => 
            array (
                'id' => 70,
                'migration' => '2019_02_19_165840_create_paper_posts_table',
                'batch' => 0,
            ),
            70 => 
            array (
                'id' => 71,
                'migration' => '2019_02_19_165840_create_password_resets_table',
                'batch' => 0,
            ),
            71 => 
            array (
                'id' => 72,
                'migration' => '2019_02_19_165840_create_permission_role_table',
                'batch' => 0,
            ),
            72 => 
            array (
                'id' => 73,
                'migration' => '2019_02_19_165840_create_permissions_table',
                'batch' => 0,
            ),
            73 => 
            array (
                'id' => 74,
                'migration' => '2019_02_19_165840_create_product_categories_table',
                'batch' => 0,
            ),
            74 => 
            array (
                'id' => 75,
                'migration' => '2019_02_19_165840_create_product_files_table',
                'batch' => 0,
            ),
            75 => 
            array (
                'id' => 76,
                'migration' => '2019_02_19_165840_create_product_sub_categories_table',
                'batch' => 0,
            ),
            76 => 
            array (
                'id' => 77,
                'migration' => '2019_02_19_165840_create_products_table',
                'batch' => 0,
            ),
            77 => 
            array (
                'id' => 78,
                'migration' => '2019_02_19_165840_create_regions_table',
                'batch' => 0,
            ),
            78 => 
            array (
                'id' => 79,
                'migration' => '2019_02_19_165840_create_role_user_table',
                'batch' => 0,
            ),
            79 => 
            array (
                'id' => 80,
                'migration' => '2019_02_19_165840_create_roles_table',
                'batch' => 0,
            ),
            80 => 
            array (
                'id' => 81,
                'migration' => '2019_02_19_165840_create_shipping_details_table',
                'batch' => 0,
            ),
            81 => 
            array (
                'id' => 82,
                'migration' => '2019_02_19_165840_create_sliders_table',
                'batch' => 0,
            ),
            82 => 
            array (
                'id' => 83,
                'migration' => '2019_02_19_165840_create_tender_products_table',
                'batch' => 0,
            ),
            83 => 
            array (
                'id' => 84,
                'migration' => '2019_02_19_165840_create_tender_responses_table',
                'batch' => 0,
            ),
            84 => 
            array (
                'id' => 85,
                'migration' => '2019_02_19_165840_create_tenders_table',
                'batch' => 0,
            ),
            85 => 
            array (
                'id' => 86,
                'migration' => '2019_02_19_165840_create_users_table',
                'batch' => 0,
            ),
            86 => 
            array (
                'id' => 87,
                'migration' => '2019_02_19_165840_create_users_wishlists_products_table',
                'batch' => 0,
            ),
            87 => 
            array (
                'id' => 88,
                'migration' => '2019_02_19_165840_create_vendors_table',
                'batch' => 0,
            ),
            88 => 
            array (
                'id' => 89,
                'migration' => '2019_02_19_165840_create_verify_users_table',
                'batch' => 0,
            ),
            89 => 
            array (
                'id' => 90,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_areas_table',
                'batch' => 0,
            ),
            90 => 
            array (
                'id' => 91,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_billing_details_table',
                'batch' => 0,
            ),
            91 => 
            array (
                'id' => 92,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_billing_infos_table',
                'batch' => 0,
            ),
            92 => 
            array (
                'id' => 93,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_brand_subcategory_assoc_table',
                'batch' => 0,
            ),
            93 => 
            array (
                'id' => 94,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_brands_table',
                'batch' => 0,
            ),
            94 => 
            array (
                'id' => 95,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_candidate_certificates_table',
                'batch' => 0,
            ),
            95 => 
            array (
                'id' => 96,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_candidate_educational_profiles_table',
                'batch' => 0,
            ),
            96 => 
            array (
                'id' => 97,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_candidate_experience_table',
                'batch' => 0,
            ),
            97 => 
            array (
                'id' => 98,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_candidate_job_associations_table',
                'batch' => 0,
            ),
            98 => 
            array (
                'id' => 99,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_candidate_profiles_table',
                'batch' => 0,
            ),
            99 => 
            array (
                'id' => 100,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_candidate_projects_table',
                'batch' => 0,
            ),
            100 => 
            array (
                'id' => 101,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_cities_table',
                'batch' => 0,
            ),
            101 => 
            array (
                'id' => 102,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_companies_table',
                'batch' => 0,
            ),
            102 => 
            array (
                'id' => 103,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_cus_q_c_j_a_table',
                'batch' => 0,
            ),
            103 => 
            array (
                'id' => 104,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_degree_types_table',
                'batch' => 0,
            ),
            104 => 
            array (
                'id' => 105,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_discounts_table',
                'batch' => 0,
            ),
            105 => 
            array (
                'id' => 106,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_job_sub_categories_table',
                'batch' => 0,
            ),
            106 => 
            array (
                'id' => 107,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_jobs_table',
                'batch' => 0,
            ),
            107 => 
            array (
                'id' => 108,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_marketers_table',
                'batch' => 0,
            ),
            108 => 
            array (
                'id' => 109,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_order_products_table',
                'batch' => 0,
            ),
            109 => 
            array (
                'id' => 110,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_orders_table',
                'batch' => 0,
            ),
            110 => 
            array (
                'id' => 111,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_paper_posts_table',
                'batch' => 0,
            ),
            111 => 
            array (
                'id' => 112,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_permission_role_table',
                'batch' => 0,
            ),
            112 => 
            array (
                'id' => 113,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_product_files_table',
                'batch' => 0,
            ),
            113 => 
            array (
                'id' => 114,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_product_sub_categories_table',
                'batch' => 0,
            ),
            114 => 
            array (
                'id' => 115,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_products_table',
                'batch' => 0,
            ),
            115 => 
            array (
                'id' => 116,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_regions_table',
                'batch' => 0,
            ),
            116 => 
            array (
                'id' => 117,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_role_user_table',
                'batch' => 0,
            ),
            117 => 
            array (
                'id' => 118,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_shipping_details_table',
                'batch' => 0,
            ),
            118 => 
            array (
                'id' => 119,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_tender_products_table',
                'batch' => 0,
            ),
            119 => 
            array (
                'id' => 120,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_tender_responses_table',
                'batch' => 0,
            ),
            120 => 
            array (
                'id' => 121,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_tenders_table',
                'batch' => 0,
            ),
            121 => 
            array (
                'id' => 122,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_users_table',
                'batch' => 0,
            ),
            122 => 
            array (
                'id' => 123,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_users_wishlists_products_table',
                'batch' => 0,
            ),
            123 => 
            array (
                'id' => 124,
                'migration' => '2019_02_19_165844_add_foreign_keys_to_vendors_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}