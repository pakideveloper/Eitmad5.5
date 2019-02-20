<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(PermissionTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        
        $this->call(RegionsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(ProductSubCategoriesTableSeeder::class);
        $this->call(DiscountsTableSeeder::class);
         // $this->call(ProductFilesTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(VendorsTableSeeder::class);
        // $this->call(AreasTableSeeder::class);
        // $this->call(BiddingsTableSeeder::class);
        // $this->call(BillingDetailsTableSeeder::class);
        // $this->call(BillingInfosTableSeeder::class);
        // $this->call(BrandsTableSeeder::class);
        // $this->call(BrandSubcategoryAssocTableSeeder::class);
        // $this->call(CandidateCertificatesTableSeeder::class);
        // $this->call(CandidateEducationalProfilesTableSeeder::class);
        // $this->call(CandidateExperienceTableSeeder::class);
        // $this->call(CandidateJobAssociationsTableSeeder::class);
        // $this->call(CandidateProfilesTableSeeder::class);
        // $this->call(CandidateProjectsTableSeeder::class);
        // $this->call(CitiesTableSeeder::class);
        // $this->call(ClaimOrdersTableSeeder::class);
        // $this->call(CompaniesTableSeeder::class);
        // $this->call(CompanyCeoInfoTableSeeder::class);
        // $this->call(CountriesTableSeeder::class);
        // $this->call(CustomQuestionsTableSeeder::class);
        // $this->call(CusQCJATableSeeder::class);
        // $this->call(DegreeLevelsTableSeeder::class);
        // $this->call(DegreeTypesTableSeeder::class);
        // $this->call(DiscountsTableSeeder::class);
        // $this->call(EcomMessagesTableSeeder::class);
        // $this->call(EcomVisitorsTableSeeder::class);
        // $this->call(IndustriesTableSeeder::class);
        // $this->call(JobsTableSeeder::class);
        // $this->call(JobCategoriesTableSeeder::class);
        // $this->call(JobSubCategoriesTableSeeder::class);
        // $this->call(JobTypesTableSeeder::class);
        // $this->call(MarketersTableSeeder::class);
        // $this->call(MigrationsTableSeeder::class);
        // $this->call(NewspaperTableSeeder::class);
        // $this->call(OrdersTableSeeder::class);
        // $this->call(OrderProductsTableSeeder::class);
        // $this->call(PaperPostsTableSeeder::class);
        // $this->call(PasswordResetsTableSeeder::class);
        // $this->call(PermissionsTableSeeder::class);
        // $this->call(PermissionRoleTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);
        // $this->call(ProductCategoriesTableSeeder::class);
        // $this->call(ProductFilesTableSeeder::class);
        // $this->call(ProductSubCategoriesTableSeeder::class);
        // $this->call(RegionsTableSeeder::class);
        // $this->call(RolesTableSeeder::class);
        // $this->call(RoleUserTableSeeder::class);
        // $this->call(ShippingDetailsTableSeeder::class);
        // $this->call(SlidersTableSeeder::class);
        // $this->call(TendersTableSeeder::class);
        // $this->call(TenderProductsTableSeeder::class);
        // $this->call(TenderResponsesTableSeeder::class);
        // $this->call(UsersWishlistsProductsTableSeeder::class);
        // $this->call(VendorsTableSeeder::class);
        // $this->call(VerifyUsersTableSeeder::class);
    }
}
