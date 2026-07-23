<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Employee; // Ensure this model exists
use Carbon\Carbon;

class EmployeesSeeder extends Seeder
{
    public function run()
    {
        DB::table('employees')->insert([
            [
                'employee_id' => '05968',
                'firstname' => 'Noralyn',
                'middlename' => 'B.',
                'lastname' => 'Rizardo',
                'email' => 'noralynrizardo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06128',
                'firstname' => 'Rizzalyn',
                'middlename' => 'E.',
                'lastname' => 'Vales',
                'email' => 'rizzalynvales@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05975',
                'firstname' => 'Ingrid',
                'middlename' => 'O.',
                'lastname' => 'Dizon',
                'email' => 'ingriddizon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03722',
                'firstname' => 'Renaldo',
                'middlename' => 'C.',
                'lastname' => 'Neñeria',
                'email' => 'renaldoneneria@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06102',
                'firstname' => 'Maria Lorgel',
                'middlename' => 'F.',
                'lastname' => 'Marfil',
                'email' => 'marialorgelmarfil@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05981',
                'firstname' => 'Rae Christel',
                'middlename' => 'E.',
                'lastname' => 'Maungca',
                'email' => 'raechristelmaungca@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6195',
                'firstname' => 'Aira',
                'middlename' => 'S.',
                'lastname' => 'Pagaduan',
                'email' => 'airapagaduan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06191',
                'firstname' => 'Leif Ivan',
                'middlename' => 'J.',
                'lastname' => 'Malvas',
                'email' => 'leifivanmalvas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6248',
                'firstname' => 'Darren',
                'middlename' => 'G.',
                'lastname' => 'Rodriguez',
                'email' => 'darennrodriguez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6245',
                'firstname' => 'Rose Marie',
                'middlename' => 'T.',
                'lastname' => 'Santos',
                'email' => 'rosemariesantos@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6082',
                'firstname' => 'Christopher Carl',
                'middlename' => 'L.',
                'lastname' => 'Labrador',
                'email' => 'christophercarllabrador@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05019',
                'firstname' => 'Mary Clare',
                'middlename' => 'G.',
                'lastname' => 'Flores',
                'email' => 'maryclareflores@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05828',
                'firstname' => 'Roden',
                'middlename' => 'E.',
                'lastname' => 'Bagay',
                'email' => 'rodenbagay@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03390',
                'firstname' => 'Maria Sheryl',
                'middlename' => 'R.',
                'lastname' => 'Santos',
                'email' => 'masherylsantos@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05122',
                'firstname' => 'Winnalyn Mae',
                'middlename' => 'P.',
                'lastname' => 'Amaca',
                'email' => 'winnalynmaeamaca@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05189',
                'firstname' => 'Anne Jasmine Bernadette',
                'middlename' => 'M.',
                'lastname' => 'Herrero',
                'email' => 'annejasminebernadetteherrero@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03572',
                'firstname' => 'Carolina',
                'middlename' => 'R.',
                'lastname' => 'Velasco',
                'email' => 'carolinavelasco@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05819',
                'firstname' => 'Judy Anne',
                'middlename' => 'R.',
                'lastname' => 'Chan',
                'email' => 'judyannechan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6071',
                'firstname' => 'Joseph Junald',
                'middlename' => 'J.',
                'lastname' => 'Gonzaga',
                'email' => 'josephjunaldgonzaga@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05615',
                'firstname' => 'Chriselle',
                'middlename' => 'A.',
                'lastname' => 'Bendaña',
                'email' => 'chrisellebendana@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6026',
                'firstname' => 'Jeramie Joyce',
                'middlename' => 'C.',
                'lastname' => 'Domingo',
                'email' => 'jeramiejoycedomingo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6092',
                'firstname' => 'Krisia',
                'middlename' => 'S.',
                'lastname' => 'Santos',
                'email' => 'krisiasantos@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06033',
                'firstname' => 'Jo-Dann',
                'middlename' => 'N.',
                'lastname' => 'Darong',
                'email' => 'jodanndarong@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05111',
                'firstname' => 'Lilian',
                'middlename' => 'G.',
                'lastname' => 'Salonga',
                'email' => 'liliansalonga@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Anna Michaela',
                'middlename' => 'R.',
                'lastname' => 'Maliwat',
                'email' => 'annamichaelamaliwat@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06028',
                'firstname' => 'Carl Jason',
                'middlename' => 'B.',
                'lastname' => 'Nebres',
                'email' => 'carljasonnebres@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06168',
                'firstname' => 'Celine Elyssa',
                'middlename' => 'P.',
                'lastname' => 'Cardino',
                'email' => 'celineelyssacardino@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05972',
                'firstname' => 'Chezka Mae',
                'middlename' => 'G.',
                'lastname' => 'Obsioma',
                'email' => 'chezkamaeobsioma@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04546',
                'firstname' => 'Cyrus Kim',
                'middlename' => 'D.',
                'lastname' => 'Bautista',
                'email' => 'cyruskimbautista@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06146',
                'firstname' => 'Elyza Mabel',
                'middlename' => 'M.',
                'lastname' => 'Agumo',
                'email' => 'elyzamabelagumo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05358',
                'firstname' => 'Emmanuel Roy',
                'middlename' => 'M.',
                'lastname' => 'Aquino',
                'email' => 'emmanuelroyaquino@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06031',
                'firstname' => 'Grace',
                'middlename' => 'V.',
                'lastname' => 'Tangcangco',
                'email' => 'gracetangcangco@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05973',
                'firstname' => 'Joanne',
                'middlename' => '',
                'lastname' => 'Yaun',
                'email' => 'joanneyaun@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6070',
                'firstname' => 'John Powell Adrian',
                'middlename' => 'C.',
                'lastname' => 'De Guzman',
                'email' => 'johnpowelladriandeguzman@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05614',
                'firstname' => 'Karl Lyndon',
                'middlename' => 'B.',
                'lastname' => 'Pacolor',
                'email' => 'karllyndonpacolor@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05452',
                'firstname' => 'Kenneth',
                'middlename' => 'F.',
                'lastname' => 'Fadrilan',
                'email' => 'kennethfadrilan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06094',
                'firstname' => 'Kristine Marie',
                'middlename' => 'A.',
                'lastname' => 'Daplin',
                'email' => 'kristinemariedaplin@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05610',
                'firstname' => 'Lauren Therese',
                'middlename' => 'R.',
                'lastname' => 'Litiatco',
                'email' => 'laurenthereselitiatco@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05886',
                'firstname' => 'Leonard Matthew',
                'middlename' => 'Q.',
                'lastname' => 'Domingo',
                'email' => 'leonardmatthewdomingo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05067',
                'firstname' => 'Louise Kaye',
                'middlename' => 'G.',
                'lastname' => 'Mendoza',
                'email' => 'louisekayemendoza@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03955',
                'firstname' => 'Ma. Theresa',
                'middlename' => 'G.',
                'lastname' => 'Faustino',
                'email' => 'matheresafaustino@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05855',
                'firstname' => 'Eurmajesty',
                'middlename' => 'R.',
                'lastname' => 'Roque',
                'email' => 'eurmajestyroque@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03060',
                'firstname' => 'Maria Crispina',
                'middlename' => 'S.',
                'lastname' => 'Reodica',
                'email' => 'mariacrispinareodica@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05669',
                'firstname' => 'Mitchel John Christopher',
                'middlename' => 'G.',
                'lastname' => 'Esperanza',
                'email' => 'mitcheljohnchristopheresperanza@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04892',
                'firstname' => 'Morris Jose Kirby',
                'middlename' => 'G.',
                'lastname' => 'Catabian',
                'email' => 'morrisjosekirbycatabian@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03380',
                'firstname' => 'Myleen',
                'middlename' => 'V.',
                'lastname' => 'Aldana',
                'email' => 'myleenaldana@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05971',
                'firstname' => 'Pocholo',
                'middlename' => 'A.',
                'lastname' => 'Bawaan',
                'email' => 'pocholobawaan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '028',
                'firstname' => 'Rosemarie',
                'middlename' => 'M.',
                'lastname' => 'Eguia',
                'email' => 'rosemarieeguia@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06144',
                'firstname' => 'Airon',
                'middlename' => 'B.',
                'lastname' => 'Aldaya',
                'email' => 'aironaldaya@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06156',
                'firstname' => 'Evelyn',
                'middlename' => 'L.',
                'lastname' => 'Janiola',
                'email' => 'evelynjaniola@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06143',
                'firstname' => 'Leonila',
                'middlename' => 'T.',
                'lastname' => 'Baluyut',
                'email' => 'lenybaluyut@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06139',
                'firstname' => 'Leonel',
                'middlename' => 'T.',
                'lastname' => 'Cortez',
                'email' => 'leonelcortez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05916',
                'firstname' => 'Adrian Jasper',
                'middlename' => 'F.',
                'lastname' => 'De Guzman',
                'email' => 'adrianjasperdeguzman@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04907',
                'firstname' => 'Rafaelita',
                'middlename' => 'M.',
                'lastname' => 'Aldaba',
                'email' => 'rafaelitaaldaba@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06000',
                'firstname' => 'Andrew Lorenzo',
                'middlename' => 'L.',
                'lastname' => 'Rivera',
                'email' => 'andrewlorenzorivera@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05588',
                'firstname' => 'Catherine',
                'middlename' => 'E.',
                'lastname' => 'Nuqui',
                'email' => 'catherinenuqui@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05302',
                'firstname' => 'Lyra',
                'middlename' => 'S.',
                'lastname' => 'Tira',
                'email' => 'lyratira@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Amanda Marie',
                'middlename' => 'F.',
                'lastname' => 'Nograles',
                'email' => 'amandanograles@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05660',
                'firstname' => 'Archie John',
                'middlename' => 'T.',
                'lastname' => 'Talaue',
                'email' => 'archiejohntalaue@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '0200',
                'firstname' => 'Angelina',
                'middlename' => 'M',
                'lastname' => 'Mariano',
                'email' => 'angelinamariano@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Edmundo',
                'middlename' => 'N.',
                'lastname' => 'Saliling',
                'email' => 'edmundosaliling@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05820',
                'firstname' => 'Gladee',
                'middlename' => 'C.',
                'lastname' => 'Montalbo',
                'email' => 'gladeemontalbo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05042',
                'firstname' => 'Johnnyvel',
                'middlename' => 'S.',
                'lastname' => 'Sombilon',
                'email' => 'johnnyvelsombilon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06090',
                'firstname' => 'Lourdes Mae',
                'middlename' => 'B.',
                'lastname' => 'Acosta',
                'email' => 'lourdesmaeacosta@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Ma. Jerica Alexisse',
                'middlename' => 'G.',
                'lastname' => 'Ramirez',
                'email' => 'majericaramirez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '4854',
                'firstname' => 'Marco',
                'middlename' => 'C.',
                'lastname' => 'Maat',
                'email' => 'marcomaat@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05895',
                'firstname' => 'Maria Theresa Noreen',
                'middlename' => 'S.',
                'lastname' => 'Bacalangco',
                'email' => 'mariatheresanoreenbacalangco@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06093',
                'firstname' => 'Mazradain Gayle',
                'middlename' => 'D.',
                'lastname' => 'Carpio',
                'email' => 'mazradaingaylecarpio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05482',
                'firstname' => 'Sarah Mae',
                'middlename' => 'M.',
                'lastname' => 'De Lara',
                'email' => 'sarahmaedelara@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05297',
                'firstname' => 'Stephanie',
                'middlename' => 'G.',
                'lastname' => 'Garay',
                'email' => 'stephaniegaray@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05927',
                'firstname' => 'Terence Luke',
                'middlename' => 'B.',
                'lastname' => 'Domingo',
                'email' => 'terencelukedomingo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03938',
                'firstname' => 'Yolanda',
                'middlename' => 'Y.',
                'lastname' => 'Villanueva',
                'email' => 'yolandavillanueva@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03509',
                'firstname' => 'Leonida',
                'middlename' => 'S.',
                'lastname' => 'Raquion',
                'email' => 'leonidaraquion@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04954',
                'firstname' => 'Ferdinand',
                'middlename' => 'L.',
                'lastname' => 'Manfoste',
                'email' => 'ferdinandmanfoste@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04340',
                'firstname' => 'Neil',
                'middlename' => 'P.',
                'lastname' => 'Catajay',
                'email' => 'neilcatajay@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04004',
                'firstname' => 'Jay',
                'middlename' => 'V.',
                'lastname' => 'Illescas',
                'email' => 'jayillescas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05375',
                'firstname' => 'Mark Lawrence',
                'middlename' => 'F.',
                'lastname' => 'Gallevo',
                'email' => 'marklawrencegallevo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03849',
                'firstname' => 'Wilfredo',
                'middlename' => 'R.',
                'lastname' => 'Rivera',
                'email' => 'wilfredorivera@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05428',
                'firstname' => 'Queen Elizaina',
                'middlename' => 'O.',
                'lastname' => 'Parua',
                'email' => 'queenelizainaparua@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04111',
                'firstname' => 'Ronaldo',
                'middlename' => 'C.',
                'lastname' => 'Corales',
                'email' => 'ronaldocorales@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04149',
                'firstname' => 'Antonino',
                'middlename' => 'S.',
                'lastname' => 'Berbon',
                'email' => 'antonioberbon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06096',
                'firstname' => 'Ellaine Grace',
                'middlename' => 'A.',
                'lastname' => 'Elbo',
                'email' => 'ellainegraceelbo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06152',
                'firstname' => 'Terance Marco',
                'middlename' => 'R.',
                'lastname' => 'Almonte',
                'email' => 'terancemarcoalmonte@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06151',
                'firstname' => 'Gerald Mel',
                'middlename' => 'G.',
                'lastname' => 'Sabino',
                'email' => 'geraldmelsabino@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05366',
                'firstname' => 'Frances Irene',
                'middlename' => 'C.',
                'lastname' => 'Bisquera',
                'email' => 'francesirenebisquera@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05087',
                'firstname' => 'Von',
                'middlename' => 'G.',
                'lastname' => 'Villaruel',
                'email' => 'vonvillaruel@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05089',
                'firstname' => 'Nico Oliver',
                'middlename' => 'C.',
                'lastname' => 'Cadang',
                'email' => 'nicoolivercadang@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04572',
                'firstname' => 'Arnold',
                'middlename' => 'J.',
                'lastname' => 'Aquino',
                'email' => 'arnoldaquino@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05086',
                'firstname' => 'Eulalio',
                'middlename' => 'S.',
                'lastname' => 'Orbino',
                'email' => 'eulalioorbino@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03128',
                'firstname' => 'Lerma',
                'middlename' => 'M.',
                'lastname' => 'Mendoza',
                'email' => 'lermamendoza@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05083',
                'firstname' => 'Leah Ann',
                'middlename' => 'A.',
                'lastname' => 'Arella',
                'email' => 'leahannarella@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05259',
                'firstname' => 'Frankincense',
                'middlename' => 'M.',
                'lastname' => 'Macula',
                'email' => 'frankincensemacula@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05876',
                'firstname' => 'Jasmin',
                'middlename' => 'E.',
                'lastname' => 'Metre',
                'email' => 'jasminmetre@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05084',
                'firstname' => 'Maricel',
                'middlename' => 'A.',
                'lastname' => 'Reduca',
                'email' => 'maricelreduca@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03979',
                'firstname' => 'Flordeliza',
                'middlename' => 'G.',
                'lastname' => 'Fremista',
                'email' => 'flordelizafremista@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05088',
                'firstname' => 'Ariel',
                'middlename' => 'Q.',
                'lastname' => 'Deinla',
                'email' => 'arieldeinla@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06074',
                'firstname' => 'John Vincent',
                'middlename' => 'L.',
                'lastname' => 'Dy',
                'email' => 'johnvincentdy@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05875',
                'firstname' => 'John Christopher',
                'middlename' => 'T.',
                'lastname' => 'Adina',
                'email' => 'johnchristopheradina@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06073',
                'firstname' => 'Jaclyn Vanessa',
                'middlename' => 'S.',
                'lastname' => 'Macapagal',
                'email' => 'jaclynvanessamacapagal@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06098',
                'firstname' => 'Mabelle',
                'middlename' => 'D.',
                'lastname' => 'Marquez',
                'email' => 'mabellemarquez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06148',
                'firstname' => 'Mark',
                'middlename' => 'R.',
                'lastname' => 'Concepcion',
                'email' => 'markconcepcion@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05964',
                'firstname' => 'Pia Grace',
                'middlename' => 'L.',
                'lastname' => 'Guevarra',
                'email' => 'piagraceguevarra@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03041',
                'firstname' => 'Ma. Teresita',
                'middlename' => '',
                'lastname' => 'Del Rosario',
                'email' => 'materesitadelrosario@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05900',
                'firstname' => 'Sarah Jane',
                'middlename' => 'A.',
                'lastname' => 'Arella',
                'email' => 'sarahjanearella@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05426',
                'firstname' => 'John Steve',
                'middlename' => 'M.',
                'lastname' => 'Magboo',
                'email' => 'johnstevenmagboo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04830',
                'firstname' => 'Catherine',
                'middlename' => 'A.',
                'lastname' => 'Paguinto',
                'email' => 'catherineantonio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05090',
                'firstname' => 'Angel Alvin',
                'middlename' => 'R.',
                'lastname' => 'Ruelos',
                'email' => 'angelalvinruelos@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05874',
                'firstname' => 'Almajoy',
                'middlename' => 'P.',
                'lastname' => 'Ilao',
                'email' => 'almajoyilao@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05481',
                'firstname' => 'Ma. Jessica',
                'middlename' => 'G.',
                'lastname' => 'Sinag',
                'email' => 'majessicasinag@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05562',
                'firstname' => 'Lowela Ann',
                'middlename' => 'A.',
                'lastname' => 'Barretto',
                'email' => 'lowelaannbarretto@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03837',
                'firstname' => 'Mario',
                'middlename' => 'U.',
                'lastname' => 'Gaudiano',
                'email' => 'mariogaudiano@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05197',
                'firstname' => 'Rheychelle Jean',
                'middlename' => 'A.',
                'lastname' => 'Pidoc',
                'email' => 'rheychellejeanpidoc@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03314',
                'firstname' => 'Ann',
                'middlename' => 'M.',
                'lastname' => 'Fernando',
                'email' => 'annfernando@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04828',
                'firstname' => 'Avelino',
                'middlename' => 'T.',
                'lastname' => 'Molina',
                'email' => 'avelinomolina@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04122',
                'firstname' => 'Myra',
                'middlename' => 'F.',
                'lastname' => 'Magabilin',
                'email' => 'myramagabilin@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05082',
                'firstname' => 'Mark Alvin',
                'middlename' => 'C.',
                'lastname' => 'De Leon',
                'email' => 'markalvindeleon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05216',
                'firstname' => 'Edgardo',
                'middlename' => 'D.',
                'lastname' => 'Del Rosario',
                'email' => 'edgardodelrosario@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05260',
                'firstname' => 'Janine',
                'middlename' => 'D.',
                'lastname' => 'Adordionisio',
                'email' => 'janineadordionisio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06149',
                'firstname' => 'Czerr Eljohn',
                'middlename' => 'V.',
                'lastname' => 'Cruz',
                'email' => 'czerreljohncruz@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06150',
                'firstname' => 'Jose Paulo',
                'middlename' => 'L.',
                'lastname' => 'Ayson',
                'email' => 'josepaoloayson@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05835',
                'firstname' => 'Alyssa Marie',
                'middlename' => 'B.',
                'lastname' => 'Frayre',
                'email' => 'alyssamariefrayre@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05372',
                'firstname' => 'Mary Ann',
                'middlename' => 'C.',
                'lastname' => 'Labrador',
                'email' => 'maryannconcoles@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06088',
                'firstname' => 'Diana',
                'middlename' => 'G.',
                'lastname' => 'Mejia',
                'email' => 'dianamejia@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03455',
                'firstname' => 'Emma',
                'middlename' => 'A.',
                'lastname' => 'Panopio',
                'email' => 'emmapanopio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04917',
                'firstname' => 'Vivien',
                'middlename' => 'O.',
                'lastname' => 'Alarcado',
                'email' => 'vivienalarcado@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05192',
                'firstname' => 'Edna',
                'middlename' => 'C.',
                'lastname' => 'Estrebillo',
                'email' => 'ednaestrebillo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05945',
                'firstname' => 'Rizalene',
                'middlename' => 'L.',
                'lastname' => 'Ybias',
                'email' => 'rizaleneybias@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06007',
                'firstname' => 'Mary Anne',
                'middlename' => 'O.',
                'lastname' => 'De Leon',
                'email' => 'maryannedeleon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06161',
                'firstname' => 'Glaiza',
                'middlename' => 'G.',
                'lastname' => 'Oñate',
                'email' => 'glaizaonate@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06121',
                'firstname' => 'Danielle Nicole',
                'middlename' => '',
                'lastname' => 'Segovia',
                'email' => 'daniellenicolesegovia@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04928',
                'firstname' => 'Marilen',
                'middlename' => 'D.',
                'lastname' => 'Montañez',
                'email' => 'marilenmontanez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04953',
                'firstname' => 'Carlina',
                'middlename' => 'B.',
                'lastname' => 'Josue',
                'email' => 'carlinajosue@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03617',
                'firstname' => 'Shirley',
                'middlename' => 'R.',
                'lastname' => 'Vasquez',
                'email' => 'shirleyvasquez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05637',
                'firstname' => 'Marlon',
                'middlename' => 'E.',
                'lastname' => 'Reyes',
                'email' => 'marlonreyes@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03871',
                'firstname' => 'Maria',
                'middlename' => 'A.',
                'lastname' => 'Entong',
                'email' => 'mariaentong@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '3674',
                'firstname' => 'Perpetua Werlina',
                'middlename' => 'R.',
                'lastname' => 'Lim',
                'email' => 'perpetuawerlinalim@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04531',
                'firstname' => 'Cherryl',
                'middlename' => 'G.',
                'lastname' => 'Carbonell',
                'email' => 'cherrylcarbonell@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03845',
                'firstname' => 'Cristina',
                'middlename' => 'P.',
                'lastname' => 'Bungay',
                'email' => 'cristinaperez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04860',
                'firstname' => 'Maricon',
                'middlename' => 'R.',
                'lastname' => 'Aguibiador',
                'email' => 'mariconaguibiador@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05645',
                'firstname' => 'Marielle Ann',
                'middlename' => 'K.',
                'lastname' => 'Villegas',
                'email' => 'marielleannvillegas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04993',
                'firstname' => 'Catherine',
                'middlename' => 'B.',
                'lastname' => 'Diza',
                'email' => 'catherinediza@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05928',
                'firstname' => 'Erwin',
                'middlename' => 'G.',
                'lastname' => 'Nocon',
                'email' => 'erwinnocon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05639',
                'firstname' => 'Peter Paul',
                'middlename' => 'T.',
                'lastname' => 'Gomez',
                'email' => 'peterpaulgomez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04119',
                'firstname' => 'Attorney V',
                'middlename' => 'Fair Trade Group (FTG)',
                'lastname' => 'Central Office',
                'email' => 'genarojacob@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05963',
                'firstname' => 'Danisa',
                'middlename' => 'B.',
                'lastname' => 'Dioso',
                'email' => 'danisadioso@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05547',
                'firstname' => 'Catherine',
                'middlename' => 'A.',
                'lastname' => 'Padon',
                'email' => 'catherinepadon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05425',
                'firstname' => 'Ronald',
                'middlename' => '',
                'lastname' => 'Viray',
                'email' => 'ronaldviray@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03891',
                'firstname' => 'Elizabeth',
                'middlename' => 'M.',
                'lastname' => 'Carsula',
                'email' => 'elizabethcarsula@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03512',
                'firstname' => 'Joel Donato',
                'middlename' => 'V.',
                'lastname' => 'Conde',
                'email' => 'joelconde@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Kristina',
                'middlename' => 'DC',
                'lastname' => 'Javier',
                'email' => 'kristinajavier@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05032',
                'firstname' => 'Vladie May',
                'middlename' => 'C.',
                'lastname' => 'Peña',
                'email' => 'vladiemaycipriano@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05801',
                'firstname' => 'Marielle',
                'middlename' => 'P.',
                'lastname' => 'Almacen',
                'email' => 'mariellealmacen@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05970',
                'firstname' => 'Kristine Marie',
                'middlename' => 'A.',
                'lastname' => 'Madolid',
                'email' => 'kristinemariemadolid@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05414',
                'firstname' => 'Ralph',
                'middlename' => 'G.',
                'lastname' => 'Bauzon',
                'email' => 'ralphbauzon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03484',
                'firstname' => 'Lucila',
                'middlename' => 'C.',
                'lastname' => 'Salili',
                'email' => 'lucilasalili@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04924',
                'firstname' => 'Jhonette',
                'middlename' => 'D.',
                'lastname' => 'Cruz',
                'email' => 'jhonettecruz@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05930',
                'firstname' => 'Cathy',
                'middlename' => 'S.',
                'lastname' => 'Magdaluyo',
                'email' => 'cathymagdaluyo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05178',
                'firstname' => 'Mercy',
                'middlename' => 'I.',
                'lastname' => 'Bauzon',
                'email' => 'mercyirlandez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05031',
                'firstname' => 'Myrryl',
                'middlename' => 'B.',
                'lastname' => 'Andan',
                'email' => 'myrrylbritanico@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05422',
                'firstname' => 'Rolaine Marie',
                'middlename' => 'I.',
                'lastname' => 'Alonzo',
                'email' => 'rolainemariealonzo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05344',
                'firstname' => 'Frediswenda',
                'middlename' => 'B.',
                'lastname' => 'Beñas',
                'email' => 'frediswendabenas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05044',
                'firstname' => 'Anna Katrina',
                'middlename' => 'A.',
                'lastname' => 'Miranda',
                'email' => 'annakatrinamiranda@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05177',
                'firstname' => 'Gerald Jey',
                'middlename' => 'J.',
                'lastname' => 'Litong',
                'email' => 'geraldjeylitong@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05017',
                'firstname' => 'Ranielle',
                'middlename' => 'P.',
                'lastname' => 'Velasquez',
                'email' => 'raniellevelasquez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05326',
                'firstname' => 'Riceron Kisses',
                'middlename' => 'P.',
                'lastname' => 'Cabacungan',
                'email' => 'riceronkissescabacungan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05653',
                'firstname' => 'Camille',
                'middlename' => 'O.',
                'lastname' => 'Jalata',
                'email' => 'camillejalata@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05418',
                'firstname' => 'Cecilia',
                'middlename' => 'E.',
                'lastname' => 'Macuse',
                'email' => 'ceciliaegmilan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05559',
                'firstname' => 'Deogracias',
                'middlename' => 'H',
                'lastname' => 'Garcia',
                'email' => 'deograciasgarcia@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05515',
                'firstname' => 'Jenna Erika',
                'middlename' => 'U.',
                'lastname' => 'Marcial',
                'email' => 'jennaerikamarcial@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06163',
                'firstname' => 'Rafael Jose',
                'middlename' => 'E.',
                'lastname' => 'Ricolcol',
                'email' => 'rafaeljosericolcol@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05416',
                'firstname' => 'Andrew Kline',
                'middlename' => 'A.',
                'lastname' => 'Acelar',
                'email' => 'andrewklineacelar@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04936',
                'firstname' => 'Frando',
                'middlename' => 'H.',
                'lastname' => 'Morales',
                'email' => 'frandomorales@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05417',
                'firstname' => 'Jafry',
                'middlename' => 'A.',
                'lastname' => 'Catipon',
                'email' => 'jafrycatipon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05420',
                'firstname' => 'Jan-Luther',
                'middlename' => 'A.',
                'lastname' => 'Santiago',
                'email' => 'jan-luthersantiago@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05419',
                'firstname' => 'Kimberly Cris',
                'middlename' => 'A.',
                'lastname' => 'Wee',
                'email' => 'kimberlycriswee@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05039',
                'firstname' => 'Rhoda Russel',
                'middlename' => 'R.',
                'lastname' => 'Sevillino',
                'email' => 'rhodarusselsevillino@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05633',
                'firstname' => 'Terence Claire',
                'middlename' => 'C.',
                'lastname' => 'Marilao',
                'email' => 'terenceclairemarilao@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05799',
                'firstname' => 'Thelma',
                'middlename' => 'M.',
                'lastname' => 'Owen',
                'email' => 'thelmaowen@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03641',
                'firstname' => 'Marina',
                'middlename' => 'G.',
                'lastname' => 'Yumang',
                'email' => 'marinayumang@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05512',
                'firstname' => 'Ricci',
                'middlename' => 'H.',
                'lastname' => 'Torio',
                'email' => 'riccitorio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03210',
                'firstname' => 'Gemma',
                'middlename' => 'A.',
                'lastname' => 'Sarmiento',
                'email' => 'gemmasarmiento@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05421',
                'firstname' => 'Ma. Rocelle Andrea',
                'middlename' => 'C.',
                'lastname' => 'Felisilda',
                'email' => 'marocelleandreafelisilda@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05033',
                'firstname' => 'Vanessa Erika',
                'middlename' => 'G.',
                'lastname' => 'Quintos',
                'email' => 'vanessaerikaquintos@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05040',
                'firstname' => 'Dhannia Mae',
                'middlename' => 'A.',
                'lastname' => 'Rubio',
                'email' => 'dhanniamaerubio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03744',
                'firstname' => 'Frederick',
                'middlename' => 'M.',
                'lastname' => 'Santillana',
                'email' => 'fredericksantillana@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06047',
                'firstname' => 'Erika Rose',
                'middlename' => 'S.',
                'lastname' => 'Corro',
                'email' => 'erikarosecorro@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06117',
                'firstname' => 'Karen Rose',
                'middlename' => 'C.',
                'lastname' => 'Dilao',
                'email' => 'karenrosedilao@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06106',
                'firstname' => 'Kristian Ladbert',
                'middlename' => 'B.',
                'lastname' => 'Dorosan',
                'email' => 'kristianladbertdorosan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6109',
                'firstname' => 'Marivic',
                'middlename' => 'A.',
                'lastname' => 'Tan',
                'email' => 'marivictan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06123',
                'firstname' => 'Neil',
                'middlename' => 'C.',
                'lastname' => 'Catle',
                'email' => 'neilcatle@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06049',
                'firstname' => 'Odani Fe',
                'middlename' => 'L.',
                'lastname' => 'Pekas',
                'email' => 'odanifepekas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06108',
                'firstname' => 'Riddick',
                'middlename' => 'M.',
                'lastname' => 'Mecono',
                'email' => 'riddickmecono@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05520',
                'firstname' => 'Alyssa',
                'middlename' => 'M.',
                'lastname' => 'Africa',
                'email' => 'alyssaafrica@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05841',
                'firstname' => 'Carmel-Mae',
                'middlename' => 'M.',
                'lastname' => 'Valles',
                'email' => 'carmelmaevalles@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05545',
                'firstname' => 'Joemar',
                'middlename' => 'A.',
                'lastname' => 'Castillo',
                'email' => 'joemarcastillo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04508',
                'firstname' => 'Jonald',
                'middlename' => 'DC.',
                'lastname' => 'Gutierrez',
                'email' => 'jonaldgutierrez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06048',
                'firstname' => 'Lorenzo Martin',
                'middlename' => 'J.',
                'lastname' => 'Hautea',
                'email' => 'lorenzomartinhautea@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05622',
                'firstname' => 'Ma. Venida',
                'middlename' => 'V.',
                'lastname' => 'Alejandro',
                'email' => 'mavenidaalejandro@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05443',
                'firstname' => 'Mia',
                'middlename' => 'M.',
                'lastname' => 'Opendo',
                'email' => 'miaopendo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05514',
                'firstname' => 'Yehushelline Joy',
                'middlename' => 'L.',
                'lastname' => 'Mariño',
                'email' => 'yehushellinejoymarino@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05348',
                'firstname' => 'Juanito',
                'middlename' => 'Q.',
                'lastname' => 'Vagoyan',
                'email' => 'juanitovagoyan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04922',
                'firstname' => 'Vincent',
                'middlename' => 'B.',
                'lastname' => 'Collantes',
                'email' => 'vincentcollantes@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06045',
                'firstname' => 'Angelica',
                'middlename' => 'T.',
                'lastname' => 'Mayagma',
                'email' => 'angelicamayagma@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06118',
                'firstname' => 'Blessy Mae',
                'middlename' => 'O.',
                'lastname' => 'Rosero',
                'email' => 'blessymaerosero@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05962',
                'firstname' => 'Justin Angelo',
                'middlename' => 'Z.',
                'lastname' => 'Tolentino',
                'email' => 'justinangelotolentino@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6207',
                'firstname' => 'Katrina Joy',
                'middlename' => 'D.',
                'lastname' => 'Tomas',
                'email' => 'katrinajoytomas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '5079',
                'firstname' => 'Mildred',
                'middlename' => 'F.',
                'lastname' => 'San Pedro',
                'email' => 'mildredsanpedro@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05413',
                'firstname' => 'Patricia Anne',
                'middlename' => 'T.',
                'lastname' => 'Seoane',
                'email' => 'patriciaanneseoane@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05582',
                'firstname' => 'Cyions',
                'middlename' => 'D.',
                'lastname' => 'Antonio',
                'email' => 'cyionsantonio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06157',
                'firstname' => 'Kristine',
                'middlename' => 'J.',
                'lastname' => 'Bernal',
                'email' => 'kristinebernal@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03393',
                'firstname' => 'Marimel',
                'middlename' => 'D.',
                'lastname' => 'Porciuncula',
                'email' => 'marimeldancelporciuncula@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05343',
                'firstname' => 'Kristina',
                'middlename' => 'L.',
                'lastname' => 'Balibalita',
                'email' => 'kristinabalibalita@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04932',
                'firstname' => 'Donald',
                'middlename' => 'P.',
                'lastname' => 'Guerrero',
                'email' => 'donaldguerrero@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04931',
                'firstname' => 'Ernesto',
                'middlename' => 'R.',
                'lastname' => 'Gajo',
                'email' => 'ernestogajo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04943',
                'firstname' => 'Feliciano',
                'middlename' => 'P.',
                'lastname' => 'Asido',
                'email' => 'felicianoasido@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03825',
                'firstname' => 'Johanna Marie',
                'middlename' => 'V.',
                'lastname' => 'Dadios',
                'email' => 'johannamariedadios@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04876',
                'firstname' => 'Joel',
                'middlename' => 'P.',
                'lastname' => 'Buag',
                'email' => 'joelbuag@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06050',
                'firstname' => 'Christine Joyce',
                'middlename' => 'J.',
                'lastname' => 'Sporling',
                'email' => 'christinejoycesporling@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05889',
                'firstname' => 'Joe Nald',
                'middlename' => 'L.',
                'lastname' => 'Pomasin',
                'email' => 'joenaldpomasin@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05969',
                'firstname' => 'Mary Cristel',
                'middlename' => 'M.',
                'lastname' => 'Mutia',
                'email' => 'marycristelmutia@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05623',
                'firstname' => 'Claire',
                'middlename' => 'C.',
                'lastname' => 'Onza',
                'email' => 'claireonza@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05423',
                'firstname' => 'Danica',
                'middlename' => 'M.',
                'lastname' => 'Nicdao',
                'email' => 'danicanicdao@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05036',
                'firstname' => 'Jeremy',
                'middlename' => 'V.',
                'lastname' => 'Mendoza',
                'email' => 'jeremymendoza@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05800',
                'firstname' => 'John Anthony',
                'middlename' => 'A.',
                'lastname' => 'Salvador',
                'email' => 'johnanthonysalvador@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04958',
                'firstname' => 'Jonathan',
                'middlename' => 'D.',
                'lastname' => 'Salcedo',
                'email' => 'jonathansalcedo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05424',
                'firstname' => 'Lyca Alexis',
                'middlename' => 'P.',
                'lastname' => 'De Guzman',
                'email' => 'lycaalexisdeguzman@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05180',
                'firstname' => 'Rica Rachille',
                'middlename' => 'P.',
                'lastname' => 'Rondina',
                'email' => 'ricarachillerondina@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05540',
                'firstname' => 'Ryan Ray',
                'middlename' => 'M.',
                'lastname' => 'Baluyot',
                'email' => 'ryanraybaluyot@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05580',
                'firstname' => 'Renier',
                'middlename' => 'C.',
                'lastname' => 'Reyes',
                'email' => 'renierreyes@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04880',
                'firstname' => 'Maria Fatima',
                'middlename' => 'B.',
                'lastname' => 'Pacampara',
                'email' => 'mariafatimapacampara@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04935',
                'firstname' => 'Angela',
                'middlename' => 'P.',
                'lastname' => 'Mariano',
                'email' => 'angelamariano@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04923',
                'firstname' => 'Cristina',
                'middlename' => 'V.',
                'lastname' => 'Cruz',
                'email' => 'cristinacruz@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04926',
                'firstname' => 'Olga',
                'middlename' => 'G.',
                'lastname' => 'De Peralta',
                'email' => 'olgadeperalta@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03860',
                'firstname' => 'Ma. Cheryl Holiday',
                'middlename' => 'M.',
                'lastname' => 'Pelo',
                'email' => 'macherylpelo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05581',
                'firstname' => 'Mary Jane',
                'middlename' => 'C.',
                'lastname' => 'Gonzales',
                'email' => 'maryjanegonzales@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05175',
                'firstname' => 'Edsel John',
                'middlename' => 'R.',
                'lastname' => 'Lingon',
                'email' => 'edseljohnlingon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04956',
                'firstname' => 'Marcos',
                'middlename' => 'A.',
                'lastname' => 'Montañez',
                'email' => 'marcosmontanez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04941',
                'firstname' => 'Rachel',
                'middlename' => 'C.',
                'lastname' => 'Villafuerte',
                'email' => 'rachelvillafuerte@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03830',
                'firstname' => 'Rosita',
                'middlename' => 'P.',
                'lastname' => 'Jaleco',
                'email' => 'rositajaleco@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03937',
                'firstname' => 'Melinda',
                'middlename' => 'Z.',
                'lastname' => 'Cauilan',
                'email' => 'melindacauilan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04920',
                'firstname' => 'Rizalino',
                'middlename' => 'M.',
                'lastname' => 'Bautista',
                'email' => 'rizalinobautista@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05093',
                'firstname' => 'Samuel Justin',
                'middlename' => 'F.',
                'lastname' => 'Bolante',
                'email' => 'samueljustinbolante@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04930',
                'firstname' => 'Mina',
                'middlename' => 'V.',
                'lastname' => 'Forteza',
                'email' => 'minaforteza@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05548',
                'firstname' => 'Jochelle Mae',
                'middlename' => 'M.',
                'lastname' => 'Duran',
                'email' => 'jochellemaeduran@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05979',
                'firstname' => 'Kevin Bernard',
                'middlename' => '',
                'lastname' => 'Miguel',
                'email' => 'kevinbernardmiguel@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05632',
                'firstname' => 'Mark Carlo',
                'middlename' => 'L.',
                'lastname' => 'Desamito',
                'email' => 'markcarlodesamito@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06089',
                'firstname' => 'Cindy',
                'middlename' => 'V.',
                'lastname' => 'Tomimbang',
                'email' => 'cindytomimbang@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06164',
                'firstname' => 'Agaton Teodoro',
                'middlename' => 'O.',
                'lastname' => 'Uvero',
                'email' => 'agatonteodorouvero@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06166',
                'firstname' => 'Rolando',
                'middlename' => 'B.',
                'lastname' => 'Montemor',
                'email' => 'rolandomontemor@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06015',
                'firstname' => 'Ella Mariel',
                'middlename' => 'G.',
                'lastname' => 'Antonio',
                'email' => 'ellamarielantonio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05262',
                'firstname' => 'Michelle',
                'middlename' => 'P.',
                'lastname' => 'Esteban',
                'email' => 'michelleesteban@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04320',
                'firstname' => 'Roderick',
                'middlename' => 'R.',
                'lastname' => 'Dela Cruz',
                'email' => 'roderickdelacruz@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05028',
                'firstname' => 'Katrina',
                'middlename' => 'A.',
                'lastname' => 'Talle',
                'email' => 'katrinatalle@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05005',
                'firstname' => 'Marlon',
                'middlename' => 'A.',
                'lastname' => 'Macadamia',
                'email' => 'marlonmacadamia@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05171',
                'firstname' => 'Laarni',
                'middlename' => 'P.',
                'lastname' => 'Joya',
                'email' => 'laarnijoya@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06016',
                'firstname' => 'Isaiah Dale',
                'middlename' => 'B.',
                'lastname' => 'Lim',
                'email' => 'isaiahdalelim@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05663',
                'firstname' => 'Markim Ivee',
                'middlename' => 'O.',
                'lastname' => 'Tortoles',
                'email' => 'markimiveeocampo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05440',
                'firstname' => 'Cherie Ann',
                'middlename' => 'A.',
                'lastname' => 'Cortez',
                'email' => 'cherieanncortez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03771',
                'firstname' => 'Ma. Juanita',
                'middlename' => 'P.',
                'lastname' => 'Carpio',
                'email' => 'juanitacarpio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05002',
                'firstname' => 'Mary Joan',
                'middlename' => 'D.',
                'lastname' => 'De Pablo',
                'email' => 'maryjoandepablo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05193',
                'firstname' => 'Serrg Martin',
                'middlename' => 'G.',
                'lastname' => 'Carreon',
                'email' => 'serrgmartincarreon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05664',
                'firstname' => 'Dennis',
                'middlename' => 'F.',
                'lastname' => 'Belale',
                'email' => 'dennisbelale@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05613',
                'firstname' => 'Samantha',
                'middlename' => 'B.',
                'lastname' => 'Alonzo',
                'email' => 'samanthaalonzo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05172',
                'firstname' => 'Jennilyn',
                'middlename' => 'O.',
                'lastname' => 'Macabale',
                'email' => 'jennilynmacabale@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05457',
                'firstname' => 'Joidilenne',
                'middlename' => 'A.',
                'lastname' => 'Cabaobao',
                'email' => 'joidilennecabaobao@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04981',
                'firstname' => 'Ernani',
                'middlename' => 'M.',
                'lastname' => 'Dionisio',
                'email' => 'ernanidionisio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05214',
                'firstname' => 'James',
                'middlename' => 'E.',
                'lastname' => 'Empeño',
                'email' => 'jamesempeno@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04927',
                'firstname' => 'Monaliza',
                'middlename' => 'M.',
                'lastname' => 'De Perio',
                'email' => 'monalizadeperio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05662',
                'firstname' => 'Angel Marie',
                'middlename' => 'G.',
                'lastname' => 'Tanate',
                'email' => 'angelmarietanate@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05009',
                'firstname' => 'Japhet',
                'middlename' => 'T.',
                'lastname' => 'Celis',
                'email' => 'japhetcelis@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03746',
                'firstname' => 'Estrella',
                'middlename' => 'P.',
                'lastname' => 'Abejero',
                'email' => 'estrellaabejero@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05398',
                'firstname' => 'Sheena',
                'middlename' => 'C.',
                'lastname' => 'De La Torre',
                'email' => 'sheenadelatorre@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05170',
                'firstname' => 'Jenebert',
                'middlename' => 'P.',
                'lastname' => 'Opinion',
                'email' => 'jenebertopinion@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05965',
                'firstname' => 'Arianne Camille',
                'middlename' => 'H.',
                'lastname' => 'Salalila',
                'email' => 'ariannecamillesalalila@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03543',
                'firstname' => 'Catherine',
                'middlename' => 'I.',
                'lastname' => 'Salvador',
                'email' => 'catherinesalvador@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04550',
                'firstname' => 'Ma. Christine',
                'middlename' => 'M.',
                'lastname' => 'Clemente',
                'email' => 'machristineclemente@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03334',
                'firstname' => 'Ma. Cristina',
                'middlename' => 'C.',
                'lastname' => 'Go',
                'email' => 'macristinago@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03732',
                'firstname' => 'Daisy',
                'middlename' => 'R.',
                'lastname' => 'Villanueva',
                'email' => 'daisyvillanueva@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05250',
                'firstname' => 'Pearl Joy',
                'middlename' => 'C.',
                'lastname' => 'Sumaria',
                'email' => 'pearljoysumaria@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03618',
                'firstname' => 'Edna',
                'middlename' => 'T.',
                'lastname' => 'Adlawan',
                'email' => 'ednaadlawan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03490',
                'firstname' => 'Ma. Rosario',
                'middlename' => 'C.',
                'lastname' => 'Mendoza',
                'email' => 'marosariomendoza@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05642',
                'firstname' => 'Niño',
                'middlename' => 'B.',
                'lastname' => 'Tenedero',
                'email' => 'ninotenedero@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03537',
                'firstname' => 'Cynthia',
                'middlename' => 'V.',
                'lastname' => 'Dela Cruz',
                'email' => 'cynthiavizmanosdelacruz@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05249',
                'firstname' => 'Lyndon Ivan',
                'middlename' => 'C.',
                'lastname' => 'Merestela',
                'email' => 'lyndonivanmerestela@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '02056',
                'firstname' => 'Orlanda',
                'middlename' => 'G.',
                'lastname' => 'Murillo',
                'email' => 'orlandamurillo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03488',
                'firstname' => 'Elizabeth',
                'middlename' => 'R.',
                'lastname' => 'Tupaz',
                'email' => 'elizabethtupaz@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05251',
                'firstname' => 'Nathaniel',
                'middlename' => 'T.',
                'lastname' => 'Rubio',
                'email' => 'nathanielrubio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03213',
                'firstname' => 'Teresita',
                'middlename' => 'G.',
                'lastname' => 'Aquino',
                'email' => 'teresitaaquino@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Stiffany',
                'middlename' => 'A.',
                'lastname' => 'Sanico',
                'email' => 'stiffanysanico@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05317',
                'firstname' => 'Eulyra',
                'middlename' => 'C.',
                'lastname' => 'Valones',
                'email' => 'eulyravalones@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03883',
                'firstname' => 'Jocelyn',
                'middlename' => 'P.',
                'lastname' => 'Pecson',
                'email' => 'jocelynpecson@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04561',
                'firstname' => 'Olivia',
                'middlename' => 'T.',
                'lastname' => 'Marasigan',
                'email' => 'oliviamarasigan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03915',
                'firstname' => 'Myra',
                'middlename' => 'A.',
                'lastname' => 'Echanes',
                'email' => 'myraechanes@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05641',
                'firstname' => 'Sandra',
                'middlename' => 'C.',
                'lastname' => 'Jose',
                'email' => 'sandrajose@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03985',
                'firstname' => 'Lenor',
                'middlename' => 'M.',
                'lastname' => 'Borromeo',
                'email' => 'lenorborromeo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05591',
                'firstname' => 'Sarah Isabella',
                'middlename' => 'E.',
                'lastname' => 'Albarece',
                'email' => 'sarahisabellaalbarece@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05140',
                'firstname' => 'Maricel',
                'middlename' => 'L.',
                'lastname' => 'Sagun',
                'email' => 'maricelsagun@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03027',
                'firstname' => 'Armando',
                'middlename' => 'Q.',
                'lastname' => 'Mercado',
                'email' => 'armandomercado@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03677',
                'firstname' => 'Maria Guiza',
                'middlename' => 'B.',
                'lastname' => 'Lim',
                'email' => 'mariaguizalim@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06051',
                'firstname' => 'Dawn Pocholo',
                'middlename' => 'A.',
                'lastname' => 'Santos',
                'email' => 'dawnpocholosantos@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03851',
                'firstname' => 'Grace',
                'middlename' => 'E.',
                'lastname' => 'Juan',
                'email' => 'gracejuan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '01000',
                'firstname' => 'Fenina Monica',
                'middlename' => 'M.',
                'lastname' => 'Bonoan',
                'email' => 'feninabonoan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06037',
                'firstname' => 'Neshreen',
                'middlename' => 'C.',
                'lastname' => 'Manalundong',
                'email' => 'neshreenmanalundong@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05054',
                'firstname' => 'Jocivic',
                'middlename' => 'F.',
                'lastname' => 'Bertillo',
                'email' => 'jocivicbertillo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03655',
                'firstname' => 'Josephine',
                'middlename' => 'G.',
                'lastname' => 'Sabas',
                'email' => 'josephinesabas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06022',
                'firstname' => 'Katrina',
                'middlename' => 'C.',
                'lastname' => 'Lachica',
                'email' => 'katrinalachica@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05103',
                'firstname' => 'Merdiorhee',
                'middlename' => 'M.',
                'lastname' => 'Cabardo',
                'email' => 'merdiorheecabardo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6217',
                'firstname' => 'Anjel Mae',
                'middlename' => 'N.',
                'lastname' => 'Pineda',
                'email' => 'anjelmaepineda@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03514',
                'firstname' => 'Alegria',
                'middlename' => 'C.',
                'lastname' => 'Donado',
                'email' => 'alegriadonado@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '3094',
                'firstname' => 'Carlota',
                'middlename' => 'C.',
                'lastname' => 'Hualda',
                'email' => 'carlotahualda@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05109',
                'firstname' => 'Rowena',
                'middlename' => 'R.',
                'lastname' => 'Lipata',
                'email' => 'rowenalipata@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03855',
                'firstname' => 'Suraida',
                'middlename' => 'U.',
                'lastname' => 'Guro',
                'email' => 'suraidaguro@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05203',
                'firstname' => 'Franclem',
                'middlename' => 'A.',
                'lastname' => 'Peña',
                'email' => 'franclempena@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6052',
                'firstname' => 'John Yzrael',
                'middlename' => 'S.',
                'lastname' => 'Nalda',
                'email' => 'johnyzraelnalda@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04662',
                'firstname' => 'Maria Imelda',
                'middlename' => 'L.',
                'lastname' => 'Torio',
                'email' => 'maimeldatorio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05213',
                'firstname' => 'Romina Patricia',
                'middlename' => 'G.',
                'lastname' => 'Blacer',
                'email' => 'rominapatriciablacer@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05996',
                'firstname' => 'Asnia',
                'middlename' => 'R.',
                'lastname' => 'Bayabao',
                'email' => 'asniabayabao@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06039',
                'firstname' => 'Sofia Beatrice',
                'middlename' => 'Q.',
                'lastname' => 'Quintela',
                'email' => 'sofiabeatricequintela@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03704',
                'firstname' => 'Leonisa',
                'middlename' => 'B.',
                'lastname' => 'Selga',
                'email' => 'leonisaselga@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05212',
                'firstname' => 'Myrtle Faye',
                'middlename' => 'L.',
                'lastname' => 'Solina',
                'email' => 'myrtlefayesolina@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05522',
                'firstname' => 'Kaisha',
                'middlename' => 'R.',
                'lastname' => 'Aliasas',
                'email' => 'kaishaaliasas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05243',
                'firstname' => 'Kalene Ann',
                'middlename' => 'M.',
                'lastname' => 'Ebora',
                'email' => 'kaleneannebora@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04197',
                'firstname' => 'Lorena',
                'middlename' => 'P.',
                'lastname' => 'Lobarbio',
                'email' => 'lorenalobarbio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05208',
                'firstname' => 'Anne Bernadette',
                'middlename' => 'G.',
                'lastname' => 'Talagtag',
                'email' => 'annebernadettetalagtag@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06036',
                'firstname' => 'Carl Francis Nichole',
                'middlename' => 'E.',
                'lastname' => 'Garing',
                'email' => 'carlfrancisnicholegaring@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '0534',
                'firstname' => 'Georgina',
                'middlename' => 'A.',
                'lastname' => 'Verdeflor',
                'email' => 'georginaverdeflor@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '4415',
                'firstname' => 'Felix',
                'middlename' => 'B.',
                'lastname' => 'Reyes',
                'email' => 'felixreyes@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04427',
                'firstname' => 'Angie',
                'middlename' => 'M.',
                'lastname' => 'Brosas',
                'email' => 'angiebrosas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03291',
                'firstname' => 'Frederick',
                'middlename' => 'V.',
                'lastname' => 'Etrata',
                'email' => 'fredericketrata@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05394',
                'firstname' => 'Kristina Noelle',
                'middlename' => 'S.',
                'lastname' => 'Andaya',
                'email' => 'kristinanoelleandaya@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03278',
                'firstname' => 'Luoid',
                'middlename' => 'C.',
                'lastname' => 'Yap',
                'email' => 'lowellyap@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03099',
                'firstname' => 'Merlinda',
                'middlename' => 'C.',
                'lastname' => 'Diaz',
                'email' => 'merlindadiaz@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '5438',
                'firstname' => 'Patrisha Elaine',
                'middlename' => '',
                'lastname' => 'Estrella',
                'email' => 'patrishaelaineestrella@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '4559',
                'firstname' => 'Joel',
                'middlename' => 'F.',
                'lastname' => 'Botabara',
                'email' => 'joelbotabara@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05666',
                'firstname' => 'Andro',
                'middlename' => 'N.',
                'lastname' => 'Cabico',
                'email' => 'androcabico@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05505',
                'firstname' => 'John Louis',
                'middlename' => 'L.',
                'lastname' => 'Alminiana',
                'email' => 'johnlouisalminiana@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06038',
                'firstname' => 'Ma. Evangeline',
                'middlename' => 'V.',
                'lastname' => 'Limbaga',
                'email' => 'maevangelinelimbaga@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05049',
                'firstname' => 'Mary Rose',
                'middlename' => 'A.',
                'lastname' => 'Miraflor',
                'email' => 'maryrosemiraflor@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '3790',
                'firstname' => 'Rafaelita',
                'middlename' => 'C.',
                'lastname' => 'Castro',
                'email' => 'rafaelitacastro@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05244',
                'firstname' => 'Antonie Lyka',
                'middlename' => 'C.',
                'lastname' => 'Manaloto',
                'email' => 'antonielykamanaloto@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '01005',
                'firstname' => 'Gina',
                'middlename' => 'G.',
                'lastname' => 'Yap',
                'email' => 'ginayap@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05665',
                'firstname' => 'Ma. Divine Grace',
                'middlename' => 'T.',
                'lastname' => 'Derez',
                'email' => 'madivinegracederez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04963',
                'firstname' => 'Heizle',
                'middlename' => 'U.',
                'lastname' => 'Trasmañas',
                'email' => 'heizletrasmanas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05573',
                'firstname' => 'A.G. Raiza',
                'middlename' => 'A.',
                'lastname' => 'Caybot',
                'email' => 'agraizacaybot@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05585',
                'firstname' => 'Al-Mahdi',
                'middlename' => 'I.',
                'lastname' => 'Jul-Ahmad',
                'email' => 'almahdijulahmad@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6135',
                'firstname' => 'Katrine Joy',
                'middlename' => 'D.',
                'lastname' => 'Azuelo',
                'email' => 'katrinejoyazuelo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06035',
                'firstname' => 'Llowe Avrilynn',
                'middlename' => '',
                'lastname' => 'Alimagno',
                'email' => 'lloweavrilynnalimagno@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04579',
                'firstname' => 'Mary Fatima',
                'middlename' => 'N.',
                'lastname' => 'Barrameda',
                'email' => 'maryfatimabarrameda@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Nina Patricia',
                'middlename' => 'A.',
                'lastname' => 'Ty',
                'email' => 'ninapatriciaty@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '5211',
                'firstname' => 'Rizaldy',
                'middlename' => 'B.',
                'lastname' => 'Limuco',
                'email' => 'rizaldylimuco@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05210',
                'firstname' => 'Desirie Jen',
                'middlename' => 'V.',
                'lastname' => 'Bernardo',
                'email' => 'desiriejenbernardo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '4839',
                'firstname' => 'Bianca Pearl',
                'middlename' => 'R.',
                'lastname' => 'Sykimte',
                'email' => 'biancapearlsykimte@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05572',
                'firstname' => 'Joan',
                'middlename' => 'A.',
                'lastname' => 'Cruz',
                'email' => 'joancruz@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04259',
                'firstname' => 'Maria Teresa',
                'middlename' => 'S.',
                'lastname' => 'Loring',
                'email' => 'mariateresaloring@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05206',
                'firstname' => 'Abigael Mei',
                'middlename' => 'M.',
                'lastname' => 'Yaokana',
                'email' => 'abigaelmeiyaokana@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '5241',
                'firstname' => 'Christine Grace',
                'middlename' => 'C.',
                'lastname' => 'Victoria',
                'email' => 'christinegracecardano@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '5631',
                'firstname' => 'Datubimban',
                'middlename' => 'P.',
                'lastname' => 'Pangonotan',
                'email' => 'datubimbanpangonotan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05204',
                'firstname' => 'Arselyn',
                'middlename' => 'B.',
                'lastname' => 'Palad',
                'email' => 'arselynpalad@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03897',
                'firstname' => 'Gliceria',
                'middlename' => 'N.',
                'lastname' => 'Cademia',
                'email' => 'gliceriacademia@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04912',
                'firstname' => 'Rogelio',
                'middlename' => 'A.',
                'lastname' => 'De Guzman',
                'email' => 'rogeliodeguzman@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '4861',
                'firstname' => 'Ceferino',
                'middlename' => 'S.',
                'lastname' => 'Rodolfo',
                'email' => 'ceferinorodolfo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05237',
                'firstname' => 'Venus',
                'middlename' => 'D.',
                'lastname' => 'Fortu',
                'email' => 'venusdadiafortu@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05579',
                'firstname' => 'Geralyn',
                'middlename' => 'B.',
                'lastname' => 'Montes',
                'email' => 'geralynmontes@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05020',
                'firstname' => 'Kevin',
                'middlename' => 'S.',
                'lastname' => 'Aldea',
                'email' => 'kevinaldea@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '5439',
                'firstname' => 'Rosalynn',
                'middlename' => 'G.',
                'lastname' => 'Tongohan',
                'email' => 'rosalynntongohan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05234',
                'firstname' => 'Victoria',
                'middlename' => 'C.',
                'lastname' => 'Quitiquit',
                'email' => 'victoriaquitiquit@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '5946',
                'firstname' => 'Marionne Jay',
                'middlename' => 'C.',
                'lastname' => 'Shimada',
                'email' => 'marionnejayshimada@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '3559',
                'firstname' => 'Ma. Regina',
                'middlename' => 'C.',
                'lastname' => 'Serafico',
                'email' => 'mareginaserafico@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '5436',
                'firstname' => 'Jan Redmond',
                'middlename' => 'L.',
                'lastname' => 'Dela Vega',
                'email' => 'janredmonddelavega@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04898',
                'firstname' => 'Ana Clarisa',
                'middlename' => 'D.',
                'lastname' => 'Abastillas',
                'email' => 'anaclarisaabastillas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05395',
                'firstname' => 'Marietta',
                'middlename' => 'B.',
                'lastname' => 'Trimpe',
                'email' => 'mariettatrimpe@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05077',
                'firstname' => 'Raissa',
                'middlename' => 'Z.',
                'lastname' => 'Faminial',
                'email' => 'raissafaminial@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04551',
                'firstname' => 'Norma',
                'middlename' => 'S.',
                'lastname' => 'Arpafo',
                'email' => 'normaarpafo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Kristine Joy',
                'middlename' => 'B.',
                'lastname' => 'Magsanay',
                'email' => 'kristinejoymagsanay@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6132',
                'firstname' => 'Diorella',
                'middlename' => 'A.',
                'lastname' => 'Velasquez',
                'email' => 'diorellavelasquez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03702',
                'firstname' => 'Marie Sherylyn',
                'middlename' => 'D.',
                'lastname' => 'Aquia',
                'email' => 'sherylynaquia@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04824',
                'firstname' => 'Denise Cheska',
                'middlename' => 'C.',
                'lastname' => 'Enriquez',
                'email' => 'denisecheskaenriquez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '5164',
                'firstname' => 'Ryan',
                'middlename' => 'B.',
                'lastname' => 'Balmedina',
                'email' => 'ryanbalmedina@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06130',
                'firstname' => 'Micah',
                'middlename' => 'D.',
                'lastname' => 'Facunla',
                'email' => 'micahfacunla@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04992',
                'firstname' => 'Ronald',
                'middlename' => 'C.',
                'lastname' => 'Calderon',
                'email' => 'ronaldcalderon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05792',
                'firstname' => 'Kim Julienne',
                'middlename' => 'O.',
                'lastname' => 'Balfiños',
                'email' => 'kimjulienebalfinos@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '3701',
                'firstname' => 'Joseph',
                'middlename' => 'S.',
                'lastname' => 'Lining',
                'email' => 'josephlining@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05920',
                'firstname' => 'Kiezel',
                'middlename' => 'T.',
                'lastname' => 'Gendrano',
                'email' => 'kiezelgendrano@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06043',
                'firstname' => 'Kareen Hope',
                'middlename' => 'A.',
                'lastname' => 'Eltagon',
                'email' => 'kareenhopeeltagon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06131',
                'firstname' => 'Lorenzo',
                'middlename' => 'L.',
                'lastname' => 'Pangilinan',
                'email' => 'lorenzopangilinan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05368',
                'firstname' => 'Paulo',
                'middlename' => 'V.',
                'lastname' => 'Estrada',
                'email' => 'pauloestrada@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '5535',
                'firstname' => 'Allan',
                'middlename' => 'B.',
                'lastname' => 'Gepty',
                'email' => 'allangepty@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05232',
                'firstname' => 'Leonardo',
                'middlename' => 'A.',
                'lastname' => 'Delos Santos',
                'email' => 'leonardodelossantos@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Harriet',
                'middlename' => 'R.',
                'lastname' => 'Urbano',
                'email' => 'harrieturbano@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05527',
                'firstname' => 'Romeo Steve',
                'middlename' => 'C.',
                'lastname' => 'Conge',
                'email' => 'romeosteveconge@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05530',
                'firstname' => 'Jesse Carla',
                'middlename' => 'V.',
                'lastname' => 'De Guzman',
                'email' => 'jessecarladeguzman@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06196',
                'firstname' => 'Grant Iverson',
                'middlename' => 'J.',
                'lastname' => 'Pactanac',
                'email' => 'grantiversonpactanac@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06178',
                'firstname' => 'Queenie Anne',
                'middlename' => 'F.',
                'lastname' => 'Ang',
                'email' => 'queenieanneang@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05289',
                'firstname' => 'Wendy Marie',
                'middlename' => 'S.',
                'lastname' => 'Cabiloque',
                'email' => 'wendymariecabiloque@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05601',
                'firstname' => 'Denmark',
                'middlename' => 'C.',
                'lastname' => 'Maglalang',
                'email' => 'denmarkmaglalang@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05587',
                'firstname' => 'Janice',
                'middlename' => 'S.',
                'lastname' => 'Dimayacyac',
                'email' => 'janicedimayacyac@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05531',
                'firstname' => 'Domina Pia',
                'middlename' => 'S.',
                'lastname' => 'Salazar',
                'email' => 'dominapiasalazar@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05593',
                'firstname' => 'Regina Samantha',
                'middlename' => 'T.',
                'lastname' => 'Castro',
                'email' => 'reginasamanthacastro@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05658',
                'firstname' => 'Dennis Gabriel',
                'middlename' => 'A.',
                'lastname' => 'Manimbo',
                'email' => 'dennisgabrielmanimbo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05271',
                'firstname' => 'Elsie',
                'middlename' => 'D.',
                'lastname' => 'Raquiño',
                'email' => 'elsieraquino@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05506',
                'firstname' => 'John Derrick',
                'middlename' => 'C.',
                'lastname' => 'Anchinges',
                'email' => 'johnderrickanchinges@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05397',
                'firstname' => 'Adorante',
                'middlename' => 'O.',
                'lastname' => 'De Taza',
                'email' => 'adorantedetazajr@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05534',
                'firstname' => 'Chloe Andrea',
                'middlename' => 'S.',
                'lastname' => 'Anacan',
                'email' => 'chloeandreaanacan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05533',
                'firstname' => 'Patrick Vincent',
                'middlename' => 'O.',
                'lastname' => 'Sagun',
                'email' => 'patrickvincentsagun@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05657',
                'firstname' => 'Alethea',
                'middlename' => 'C.',
                'lastname' => 'Bravo',
                'email' => 'aletheabravo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05532',
                'firstname' => 'Danelle Izah',
                'middlename' => 'G.',
                'lastname' => 'Mantilla',
                'email' => 'danelleizahmantilla@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05597',
                'firstname' => 'Darrel',
                'middlename' => 'L.',
                'lastname' => 'Cumpas',
                'email' => 'darrelcumpas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05220',
                'firstname' => 'Marie Claire',
                'middlename' => 'R.',
                'lastname' => 'Tiglao',
                'email' => 'marieclairetiglao@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05594',
                'firstname' => 'Vida Flor',
                'middlename' => 'G.',
                'lastname' => 'Magbual',
                'email' => 'vidaflormagbual@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05155',
                'firstname' => 'Angelica',
                'middlename' => 'D.',
                'lastname' => 'Tipan',
                'email' => 'angelicatipan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05315',
                'firstname' => 'Mayden',
                'middlename' => 'M.',
                'lastname' => 'Tamayo',
                'email' => 'maydentamayo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05640',
                'firstname' => 'Angelique',
                'middlename' => 'M.',
                'lastname' => 'Cerbo',
                'email' => 'angeliquecerbo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06180',
                'firstname' => 'Flordemae',
                'middlename' => 'L.',
                'lastname' => 'Bolabon',
                'email' => 'flordemaebolabon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05948',
                'firstname' => 'Jeric',
                'middlename' => 'P.',
                'lastname' => 'Ancheta',
                'email' => 'jericancheta@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05598',
                'firstname' => 'Jerome',
                'middlename' => 'A.',
                'lastname' => 'San Jose',
                'email' => 'jeromesanjose@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05600',
                'firstname' => 'Patrick',
                'middlename' => 'R.',
                'lastname' => 'Alcanar',
                'email' => 'patrickalcanar@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05402',
                'firstname' => 'Nadia',
                'middlename' => 'A.',
                'lastname' => 'Gavilan',
                'email' => 'nadiagavilan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03894',
                'firstname' => 'Rodel',
                'middlename' => 'E.',
                'lastname' => 'Del Rosario',
                'email' => 'rodeldelrosario@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03271',
                'firstname' => 'Gerardo',
                'middlename' => 'E.',
                'lastname' => 'Ravelas',
                'email' => 'gerryravelas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03446',
                'firstname' => 'Mary Jean',
                'middlename' => 'S.',
                'lastname' => 'Gellor',
                'email' => 'maryjeangellor@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04965',
                'firstname' => 'Hans Christian',
                'middlename' => 'R.',
                'lastname' => 'Salvatierra',
                'email' => 'hanschristiansalvatierra@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03116',
                'firstname' => 'Ann',
                'middlename' => 'R.',
                'lastname' => 'Malhotra',
                'email' => 'annmalhotra@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05619',
                'firstname' => 'Emerson',
                'middlename' => 'Q.',
                'lastname' => 'Labang',
                'email' => 'emersonlabang@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04411',
                'firstname' => 'Marievic',
                'middlename' => 'M.',
                'lastname' => 'Bonoan',
                'email' => 'marievicbonoan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04612',
                'firstname' => 'Jaworski',
                'middlename' => 'F.',
                'lastname' => 'Rifareal',
                'email' => 'jaworskirifareal@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05393',
                'firstname' => 'Rossana',
                'middlename' => 'P.',
                'lastname' => 'Pontevedra',
                'email' => 'rossanapontevedra@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05953',
                'firstname' => 'John Michael',
                'middlename' => 'S.',
                'lastname' => 'Nazarino',
                'email' => 'johnmichaelnazarino@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06080',
                'firstname' => 'Keithe',
                'middlename' => 'C.',
                'lastname' => 'Arrieta',
                'email' => 'katearrieta@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05138',
                'firstname' => 'Alma Esperanza',
                'middlename' => 'D.',
                'lastname' => 'Sta. Maria',
                'email' => 'almaesperanzastamaria@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06058',
                'firstname' => 'Dinki Cyrus',
                'middlename' => 'L.',
                'lastname' => 'Belen',
                'email' => 'dinkicyrusbelen@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05114',
                'firstname' => 'Kenneth Francis',
                'middlename' => 'A.',
                'lastname' => 'Fernandez',
                'email' => 'kennethfrancisfernandez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05647',
                'firstname' => 'Ricel',
                'middlename' => 'B.',
                'lastname' => 'Carbinilla',
                'email' => 'ricelcarbinilla@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05137',
                'firstname' => 'Cherry Dan',
                'middlename' => 'B.',
                'lastname' => 'Morales',
                'email' => 'cherrydanmorales@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05411',
                'firstname' => 'Marjorie Joyce',
                'middlename' => 'P.',
                'lastname' => 'Turano',
                'email' => 'marjoriejoyceturano@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06129',
                'firstname' => 'Shanella',
                'middlename' => 'T.',
                'lastname' => 'Rodriguez',
                'email' => 'shanella.rodriguez98@gmail.com',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04610',
                'firstname' => 'Ma. Carissa',
                'middlename' => 'R.',
                'lastname' => 'Sapera',
                'email' => 'carissasapera@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05484',
                'firstname' => 'Christian',
                'middlename' => 'P.',
                'lastname' => 'Blanco',
                'email' => 'christianblanco@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06004',
                'firstname' => 'Ma. Camille',
                'middlename' => 'M.',
                'lastname' => 'De Leon',
                'email' => 'macamilledeleon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06200',
                'firstname' => 'Danielle Marie',
                'middlename' => 'S.',
                'lastname' => 'Garde',
                'email' => 'daniellemariegarde@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03198',
                'firstname' => 'Rhodelia',
                'middlename' => 'C.',
                'lastname' => 'Mariano',
                'email' => 'rhodeliamariano@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03192',
                'firstname' => 'Teresita',
                'middlename' => 'A.',
                'lastname' => 'Go',
                'email' => 'teresitago@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04086',
                'firstname' => 'Numencia',
                'middlename' => 'S.',
                'lastname' => 'Lansangan',
                'email' => 'numenlansangan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03103',
                'firstname' => 'Imelda',
                'middlename' => 'S.',
                'lastname' => 'Gabriel',
                'email' => 'imeldagabriel@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03889',
                'firstname' => 'Cynthia',
                'middlename' => 'C.',
                'lastname' => 'Dela Cruz',
                'email' => 'cynthiadelacruz@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03643',
                'firstname' => 'Maria Cecilia',
                'middlename' => 'C.',
                'lastname' => 'Rea',
                'email' => 'michellerea@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03556',
                'firstname' => 'Edwin',
                'middlename' => 'C.',
                'lastname' => 'Pasahol',
                'email' => 'edwinpasahol@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05887',
                'firstname' => 'Lovely Joy',
                'middlename' => 'E.',
                'lastname' => 'Chan',
                'email' => 'lovelyjoychan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03126',
                'firstname' => 'Susan Mae',
                'middlename' => 'C.',
                'lastname' => 'Salonga',
                'email' => 'susanmaesalonga@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04979',
                'firstname' => 'Emma',
                'middlename' => 'C.',
                'lastname' => 'Asusano',
                'email' => 'emmaasusano@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05456',
                'firstname' => 'Jacquelyn',
                'middlename' => 'D.',
                'lastname' => 'Almamento',
                'email' => 'jacquelynalmamento@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05376',
                'firstname' => 'Aron',
                'middlename' => 'D.',
                'lastname' => 'Sabug',
                'email' => 'aronsabug@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05607',
                'firstname' => 'Deemee Shawn',
                'middlename' => 'P.',
                'lastname' => 'Manalo',
                'email' => 'deemeeshawnmanalo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05168',
                'firstname' => 'Michelle',
                'middlename' => 'B.',
                'lastname' => 'Maramag',
                'email' => 'michellemaramag@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06083',
                'firstname' => 'Joseph Ronald',
                'middlename' => 'M.',
                'lastname' => 'Reyes',
                'email' => 'josephronaldreyes@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05509',
                'firstname' => 'Michelle',
                'middlename' => 'C.',
                'lastname' => 'De Claro',
                'email' => 'michelledeclaro@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Jean',
                'middlename' => 'S.',
                'lastname' => 'Resurreccion',
                'email' => 'jeanresurreccion@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04607',
                'firstname' => 'Maricor',
                'middlename' => 'R.',
                'lastname' => 'Bañaga',
                'email' => 'maricorbanaga@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05798',
                'firstname' => 'Jomel',
                'middlename' => 'B.',
                'lastname' => 'Lozada',
                'email' => 'jomellozada@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06009',
                'firstname' => 'Ferdinand',
                'middlename' => 'T.',
                'lastname' => 'Aparri',
                'email' => 'ferdinandaparri@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05304',
                'firstname' => 'Bryan Lorenz',
                'middlename' => 'L.',
                'lastname' => 'Sudario',
                'email' => 'bryanlorenzsudario@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05500',
                'firstname' => 'Sheila Marie',
                'middlename' => 'D.',
                'lastname' => 'Daclan',
                'email' => 'sheilamariedaclan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04419',
                'firstname' => 'Ma. Theresa',
                'middlename' => 'B.',
                'lastname' => 'Magbanlag',
                'email' => 'matheresamagbanlag@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6002',
                'firstname' => 'Gerard Joseph',
                'middlename' => 'M.',
                'lastname' => 'Ortizo',
                'email' => 'gerardjosephortizo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '5994',
                'firstname' => 'Jesen Edisal',
                'middlename' => 'R.',
                'lastname' => 'Labriaga',
                'email' => 'jesenedisallabriaga@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '3792',
                'firstname' => 'Ma. Luisa',
                'middlename' => 'M.',
                'lastname' => 'Libranda',
                'email' => 'maluisalibranda@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '5590',
                'firstname' => 'Francis Carlo',
                'middlename' => 'M.',
                'lastname' => 'Roa',
                'email' => 'franciscarloroa@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05290',
                'firstname' => 'Michelle',
                'middlename' => 'F.',
                'lastname' => 'Redoblado',
                'email' => 'michelleredoblado@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Bernard Niño',
                'middlename' => 'S.',
                'lastname' => 'Tarun',
                'email' => 'bernardninotarun@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Jushel',
                'middlename' => 'P.',
                'lastname' => 'Cariño',
                'email' => 'glennbernal@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04884',
                'firstname' => 'Maria Carla',
                'middlename' => 'P.',
                'lastname' => 'Vidal',
                'email' => 'mariacarlavidal@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06197',
                'firstname' => 'Jordan',
                'middlename' => 'T',
                'lastname' => 'Maramba',
                'email' => 'jordanmaramba@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04265',
                'firstname' => 'Geraldine',
                'middlename' => 'B.',
                'lastname' => 'Peralta',
                'email' => 'geraldineperalta@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06205',
                'firstname' => 'Ramil Carlo',
                'middlename' => 'T',
                'lastname' => 'Vizmonte',
                'email' => 'ramilcarlovizmonte@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03513',
                'firstname' => 'Amalia',
                'middlename' => 'C.',
                'lastname' => 'Dela Peña',
                'email' => 'amaliadelapena@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05098',
                'firstname' => 'Rocelyn',
                'middlename' => 'M.',
                'lastname' => 'Obmaces',
                'email' => 'rocelynobmaces@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05549',
                'firstname' => 'Angel Louiese',
                'middlename' => 'J.',
                'lastname' => 'Reciproco',
                'email' => 'angellouiesereciproco@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06192',
                'firstname' => 'Florence Cecille',
                'middlename' => 'B.',
                'lastname' => 'Gomez',
                'email' => 'florencececillegomez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05988',
                'firstname' => 'Ma. Tessie',
                'middlename' => 'S.',
                'lastname' => 'Nemiada',
                'email' => 'matessienemiada@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05100',
                'firstname' => 'Jolyn',
                'middlename' => 'N.',
                'lastname' => 'Mabalatan',
                'email' => 'jolynmabalatan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06140',
                'firstname' => 'Rachell Ann',
                'middlename' => 'L.',
                'lastname' => 'Pernia',
                'email' => 'rachelleannpernia@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05224',
                'firstname' => 'Christian John',
                'middlename' => 'L.',
                'lastname' => 'Ramiro',
                'email' => 'christianjohnramiro@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06086',
                'firstname' => 'Juliet',
                'middlename' => 'D.',
                'lastname' => 'Tabamo',
                'email' => 'juliettabamo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05557',
                'firstname' => 'Analyn',
                'middlename' => 'A.',
                'lastname' => 'Pagador',
                'email' => 'analynpagador@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04528',
                'firstname' => 'Armida',
                'middlename' => 'P.',
                'lastname' => 'Babalcon',
                'email' => 'armidababalcon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06119',
                'firstname' => 'Jairius',
                'middlename' => 'E.',
                'lastname' => 'Lagrata',
                'email' => 'jairiuslagrata@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04026',
                'firstname' => 'Crisologo',
                'middlename' => 'R.',
                'lastname' => 'Rigunay',
                'email' => 'crisologorigunay@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03588',
                'firstname' => 'Gina',
                'middlename' => 'T.',
                'lastname' => 'Socal',
                'email' => 'ginasocal@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03168',
                'firstname' => 'Maria Asuncion',
                'middlename' => 'H.',
                'lastname' => 'Cruzada',
                'email' => 'maasuncioncruzada@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04591',
                'firstname' => 'Beverlyn',
                'middlename' => 'R.',
                'lastname' => 'Ursua',
                'email' => 'beverlynursua@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05102',
                'firstname' => 'Michelle',
                'middlename' => 'J.',
                'lastname' => 'Fordan',
                'email' => 'michellefordan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03506',
                'firstname' => 'Gemma',
                'middlename' => 'B.',
                'lastname' => 'Manlangit',
                'email' => 'gemmamanlangit@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06091',
                'firstname' => 'Martian Lanz Gary',
                'middlename' => 'A.',
                'lastname' => 'Juatco',
                'email' => 'martianlanzgaryjuatco@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05152',
                'firstname' => 'Jelison',
                'middlename' => 'J.',
                'lastname' => 'Estrada',
                'email' => 'jelisonestrada@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05364',
                'firstname' => 'Ella May',
                'middlename' => 'N.',
                'lastname' => 'Jacobe',
                'email' => 'ellamaynaranjo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03681',
                'firstname' => 'Emmanuel',
                'middlename' => 'G.',
                'lastname' => 'Lavarias',
                'email' => 'emmanuellavarias@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05679',
                'firstname' => 'Gemar',
                'middlename' => 'M.',
                'lastname' => 'Macalintal',
                'email' => 'gemarmacalintal@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05387',
                'firstname' => 'Aileen',
                'middlename' => 'P.',
                'lastname' => 'Ambal',
                'email' => 'aileenambal@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06133',
                'firstname' => 'Nikka',
                'middlename' => 'B.',
                'lastname' => 'Valencia',
                'email' => 'nikkavalencia@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05862',
                'firstname' => 'Ryan Robert',
                'middlename' => 'D.',
                'lastname' => 'Rodillo',
                'email' => 'ryanrobertrodillo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03800',
                'firstname' => 'Marife',
                'middlename' => 'A.',
                'lastname' => 'Pequeña',
                'email' => 'marifepequena@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03024',
                'firstname' => 'Palermo',
                'middlename' => 'T.',
                'lastname' => 'Ranque',
                'email' => 'palermoranque@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05567',
                'firstname' => 'Christine',
                'middlename' => 'A.',
                'lastname' => 'Forcadilla',
                'email' => 'christineforcadilla@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06095',
                'firstname' => 'Jessica',
                'middlename' => 'B.',
                'lastname' => 'Lanugan',
                'email' => 'jessicalanugan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05982',
                'firstname' => 'Nelson',
                'middlename' => 'L.',
                'lastname' => 'Caporado',
                'email' => 'nelsoncaporado@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05156',
                'firstname' => 'Cassandra',
                'middlename' => 'A.',
                'lastname' => 'Mata',
                'email' => 'cassandramata@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05107',
                'firstname' => 'Mark Joseph',
                'middlename' => 'R.',
                'lastname' => 'Batobato',
                'email' => 'markjosephbatobato@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04873',
                'firstname' => 'Angelica Isabel',
                'middlename' => 'P.',
                'lastname' => 'Isnani',
                'email' => 'angelicaisabelisnani@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'John Jefte',
                'middlename' => 'P.',
                'lastname' => 'Linde',
                'email' => 'johnjeftelinde@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05551',
                'firstname' => 'Analyn',
                'middlename' => 'G.',
                'lastname' => 'Baldemoro',
                'email' => 'analynbaldemoro@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05475',
                'firstname' => 'Vevir May',
                'middlename' => 'D.',
                'lastname' => 'Abesamis',
                'email' => 'vevirmayabesamis@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05678',
                'firstname' => 'Krizia',
                'middlename' => 'A.',
                'lastname' => 'Pajares',
                'email' => 'kriziapajares@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03904',
                'firstname' => 'Ma. Carla Yvette',
                'middlename' => 'L.',
                'lastname' => 'Ilarde',
                'email' => 'macarlayvetteilarde@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05446',
                'firstname' => 'Michael',
                'middlename' => 'C.',
                'lastname' => 'Tenorio',
                'email' => 'michaeltenorio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05624',
                'firstname' => 'Mark',
                'middlename' => 'C.',
                'lastname' => 'Villanueva',
                'email' => 'markvillanueva@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05279',
                'firstname' => 'Nicole',
                'middlename' => 'F.',
                'lastname' => 'Santiago',
                'email' => 'nicolesantiago@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '084',
                'firstname' => 'Kart Ryan',
                'middlename' => 'L.',
                'lastname' => 'Bungag',
                'email' => 'kartryanbungag@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '099',
                'firstname' => 'Sy Leng',
                'middlename' => 'L.',
                'lastname' => 'Uy',
                'email' => 'sylenguy@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03751',
                'firstname' => 'Marie Eden',
                'middlename' => 'A.',
                'lastname' => 'Villena',
                'email' => 'marieedenvillena@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06134',
                'firstname' => 'Benjie',
                'middlename' => 'C.',
                'lastname' => 'Naing',
                'email' => 'benjienaing@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05472',
                'firstname' => 'Raviña',
                'middlename' => 'E.',
                'lastname' => 'Dalumpines',
                'email' => 'ravinadalumpines@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04969',
                'firstname' => 'Marie Louisse',
                'middlename' => 'DV.',
                'lastname' => 'Taghap',
                'email' => 'marielouissetaghap@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05620',
                'firstname' => 'Liz Fayredd',
                'middlename' => 'H.',
                'lastname' => 'Chua',
                'email' => 'lizfayreddchua@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05117',
                'firstname' => 'Ana Teresa',
                'middlename' => 'G.',
                'lastname' => 'Bauso',
                'email' => 'anateresabauso@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05868',
                'firstname' => 'Anadel',
                'middlename' => 'A.',
                'lastname' => 'Carpio',
                'email' => 'anadelcarpio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03756',
                'firstname' => 'Eleanor',
                'middlename' => 'A.',
                'lastname' => 'Afuang',
                'email' => 'eleanorafuang@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05284',
                'firstname' => 'Ronalyn',
                'middlename' => 'P.',
                'lastname' => 'Nicolas',
                'email' => 'ronalynnicolas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05983',
                'firstname' => 'Racquel',
                'middlename' => 'D.',
                'lastname' => 'Manzano',
                'email' => 'racquelmanzano@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03596',
                'firstname' => 'Rhapsody',
                'middlename' => 'D.P.',
                'lastname' => 'Berbon',
                'email' => 'rhapsodyberbon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05984',
                'firstname' => 'Dana Reuelle',
                'middlename' => 'R.',
                'lastname' => 'Uy',
                'email' => 'danareuelleuy@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06078',
                'firstname' => 'Jeric',
                'middlename' => 'H.',
                'lastname' => 'Zamora',
                'email' => 'jericzamora@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03411',
                'firstname' => 'Debra Maria Helena',
                'middlename' => 'T.',
                'lastname' => 'Guzman',
                'email' => 'debramariahelenaguzman@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05257',
                'firstname' => 'Mark-Arlon',
                'middlename' => 'S.',
                'lastname' => 'Madulid',
                'email' => 'markarlonmadulid@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05104',
                'firstname' => 'Amor Elianina',
                'middlename' => 'M.',
                'lastname' => 'Obispo',
                'email' => 'amorelianinaobispo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04971',
                'firstname' => 'Krisonne Dhel',
                'middlename' => 'H.',
                'lastname' => 'Sariol',
                'email' => 'krisonnedhelsariol@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06189',
                'firstname' => 'Erica Mae',
                'middlename' => 'P.',
                'lastname' => 'Cuadrante',
                'email' => 'ericamaecuadrante@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05898',
                'firstname' => 'Asia May',
                'middlename' => 'C.',
                'lastname' => 'Busadre',
                'email' => 'asiamaybusadre@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05795',
                'firstname' => 'Ivy',
                'middlename' => 'R.',
                'lastname' => 'Obedoza',
                'email' => 'ivyobedoza@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Shaira',
                'middlename' => 'A.',
                'lastname' => 'Quijom',
                'email' => 'shairaaguirre@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04174',
                'firstname' => 'Alvin',
                'middlename' => 'Z.',
                'lastname' => 'Carlos',
                'email' => 'alvincarlos@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04104',
                'firstname' => 'Editha',
                'middlename' => 'S.',
                'lastname' => 'Bueza',
                'email' => 'edithabueza@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06054',
                'firstname' => 'Teresa',
                'middlename' => 'P.',
                'lastname' => 'Hermosura',
                'email' => 'teresahermosura@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04837',
                'firstname' => 'Joel',
                'middlename' => 'R.',
                'lastname' => 'Cruz',
                'email' => 'joelcruz@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05599',
                'firstname' => 'Clarisse Anne',
                'middlename' => 'DC.',
                'lastname' => 'Salenga',
                'email' => 'clarisseannesalenga@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05796',
                'firstname' => 'Jeffrey John',
                'middlename' => 'C.',
                'lastname' => 'Salcedo',
                'email' => 'jeffreyjohnsalcedo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05011',
                'firstname' => 'Camille',
                'middlename' => 'L.',
                'lastname' => 'Maraviles',
                'email' => 'camillemaraviles@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05378',
                'firstname' => 'Mary Ann',
                'middlename' => 'D.',
                'lastname' => 'Yulas',
                'email' => 'maryannyulas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06170',
                'firstname' => 'Jay',
                'middlename' => 'A.',
                'lastname' => 'Tagaca',
                'email' => 'jaytagaca@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04973',
                'firstname' => 'Ileen',
                'middlename' => 'P.',
                'lastname' => 'Vista',
                'email' => 'ileenvista@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05470',
                'firstname' => 'Kristine Joy',
                'middlename' => 'F.',
                'lastname' => 'Dacasin',
                'email' => 'kristinejoydacasin@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05836',
                'firstname' => 'Zandra',
                'middlename' => 'E.',
                'lastname' => 'Lazo',
                'email' => 'zandralazo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05985',
                'firstname' => 'Marylyn Grace',
                'middlename' => 'M.',
                'lastname' => 'Ampoan',
                'email' => 'marylyngraceampoan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05860',
                'firstname' => 'Paula Camille',
                'middlename' => 'B.',
                'lastname' => 'Incapas',
                'email' => 'paulacamilleincapas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05676',
                'firstname' => 'Jude',
                'middlename' => 'V.',
                'lastname' => 'Leopando',
                'email' => 'judeleopando@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05553',
                'firstname' => 'Ma. Patricia Ysabel',
                'middlename' => 'K.',
                'lastname' => 'Fernando',
                'email' => 'mapatriciaysabelfernando@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05987',
                'firstname' => 'Mark Christian',
                'middlename' => 'F.',
                'lastname' => 'Paz',
                'email' => 'markchristianpaz@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05256',
                'firstname' => 'Jesille',
                'middlename' => 'M.',
                'lastname' => 'Cornelio',
                'email' => 'jesillecornelio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03296',
                'firstname' => 'Ma. Adoracion',
                'middlename' => 'D.',
                'lastname' => 'Caparos',
                'email' => 'maadoracioncaparos@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05523',
                'firstname' => 'Ma. Anika',
                'middlename' => 'S.',
                'lastname' => 'Panganiban',
                'email' => 'maanikapanganiban@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06085',
                'firstname' => 'Christel',
                'middlename' => 'A.',
                'lastname' => 'Benitez',
                'email' => 'christelbenitez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05013',
                'firstname' => 'Marlon',
                'middlename' => 'R.',
                'lastname' => 'Malirong',
                'email' => 'marlonmalirong@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03745',
                'firstname' => 'Noemi',
                'middlename' => 'G.',
                'lastname' => 'Tansengco',
                'email' => 'noemitansengco@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05124',
                'firstname' => 'Elnora',
                'middlename' => 'T.',
                'lastname' => 'Fernandez',
                'email' => 'elnorafernandez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05123',
                'firstname' => 'Arlene',
                'middlename' => 'T.',
                'lastname' => 'Villa',
                'email' => 'arlenevilla@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04067',
                'firstname' => 'Rolando',
                'middlename' => 'T.',
                'lastname' => 'Medrano',
                'email' => 'rolandomedrano@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05866',
                'firstname' => 'Charlemagne',
                'middlename' => 'A.',
                'lastname' => 'Torres',
                'email' => 'charlemagnetorres@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05228',
                'firstname' => 'Rhoshelle',
                'middlename' => 'I.',
                'lastname' => 'Matias',
                'email' => 'rhoshellematias@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05191',
                'firstname' => 'Rodel',
                'middlename' => 'O.',
                'lastname' => 'Rama',
                'email' => 'rodelrama@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05012',
                'firstname' => 'Michael',
                'middlename' => 'M.',
                'lastname' => 'Briones',
                'email' => 'michaelbriones@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03683',
                'firstname' => 'Ma. Erlita',
                'middlename' => 'L.',
                'lastname' => 'Buenaventura',
                'email' => 'erliebuenaventura@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03527',
                'firstname' => 'George',
                'middlename' => 'E.',
                'lastname' => 'Bernardo',
                'email' => 'georgebernardo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05136',
                'firstname' => 'Jesus',
                'middlename' => 'R.',
                'lastname' => 'Maat',
                'email' => 'jesusmaat@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06169',
                'firstname' => 'John Christopher',
                'middlename' => 'N.',
                'lastname' => 'De Guzman',
                'email' => 'johnchristopherdeguzman@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05029',
                'firstname' => 'Eric',
                'middlename' => 'C.',
                'lastname' => 'Lunas',
                'email' => 'ericlunas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05016',
                'firstname' => 'Ronald Joy',
                'middlename' => 'G.',
                'lastname' => 'Tengco',
                'email' => 'ronaldjoytengco@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05043',
                'firstname' => 'Jenny Rose',
                'middlename' => 'E.',
                'lastname' => 'Lansangan',
                'email' => 'jennyroseespiritu@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05015',
                'firstname' => 'Krizhel',
                'middlename' => 'E.',
                'lastname' => 'Rama',
                'email' => 'krizhelescarilla@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05832',
                'firstname' => 'Ma. Concepcion',
                'middlename' => 'D.',
                'lastname' => 'Simeon',
                'email' => 'maconcepcionsimeon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04978',
                'firstname' => 'Francis',
                'middlename' => 'M.',
                'lastname' => 'Sune',
                'email' => 'francissune@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06158',
                'firstname' => 'Welfredo',
                'middlename' => 'M.',
                'lastname' => 'Artigo',
                'email' => 'welfredoartigo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05781',
                'firstname' => 'Bonifacio',
                'middlename' => 'G.',
                'lastname' => 'Antolin',
                'email' => 'bonifacioantolin@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Ed Niño',
                'middlename' => 'B.',
                'lastname' => 'Amor',
                'email' => 'edninoamor@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Jona',
                'middlename' => 'S.',
                'lastname' => 'Topacio',
                'email' => 'jonatopacio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Ma. Krishannah',
                'middlename' => 'V.',
                'lastname' => 'Arnidoval',
                'email' => 'makrishannaharnidoval@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Michel Kristian',
                'middlename' => 'R.',
                'lastname' => 'Ablan',
                'email' => 'kristianablan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05386',
                'firstname' => 'Sussette',
                'middlename' => 'M.',
                'lastname' => 'Rosuelo',
                'email' => 'sussetterosuelo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06103',
                'firstname' => 'Jeremy Ben',
                'middlename' => 'P.',
                'lastname' => 'Panga',
                'email' => 'jeremybenpanga@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04859',
                'firstname' => 'Jamila Joy',
                'middlename' => 'H.',
                'lastname' => 'Raposon',
                'email' => 'jamilajoyraposon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04052',
                'firstname' => 'Maria Theresa',
                'middlename' => 'B.',
                'lastname' => 'Ycasas',
                'email' => 'tesycasas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05859',
                'firstname' => 'Eimereene Gracel',
                'middlename' => 'L.',
                'lastname' => 'Laurencio',
                'email' => 'eimereenelaurencio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03808',
                'firstname' => 'Ric',
                'middlename' => 'A.',
                'lastname' => 'Kagahastian',
                'email' => 'rickagahastian@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06101',
                'firstname' => 'Janica Kristine',
                'middlename' => 'E.',
                'lastname' => 'Macaraig',
                'email' => 'janicakristinemacaraig@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05976',
                'firstname' => 'Nadine Isabelle',
                'middlename' => '',
                'lastname' => 'Rodriguez',
                'email' => 'nadinerodriguez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05561',
                'firstname' => 'Kimberly',
                'middlename' => 'T.',
                'lastname' => 'Sagum',
                'email' => 'kimberlysagum@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05465',
                'firstname' => 'Carina',
                'middlename' => 'B.',
                'lastname' => 'Dacuag',
                'email' => 'carinadacuag@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04395',
                'firstname' => 'Viva',
                'middlename' => 'S.',
                'lastname' => 'Dizon',
                'email' => 'vivadizon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04972',
                'firstname' => 'Jennifer',
                'middlename' => 'P.',
                'lastname' => 'Sombrero',
                'email' => 'jennifersombrero@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04470',
                'firstname' => 'Milagros',
                'middlename' => 'C.',
                'lastname' => 'Manrique',
                'email' => 'milagrosmanrique@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05464',
                'firstname' => 'Danielle Marixi',
                'middlename' => 'C.',
                'lastname' => 'Barrozo',
                'email' => 'daniellemarixibarrozo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Marie Elizabeth',
                'middlename' => 'F.',
                'lastname' => 'Dagala',
                'email' => 'marieelizabethdagala@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Leopoldo Maria',
                'middlename' => 'C.',
                'lastname' => 'Yabes',
                'email' => 'leopoldomariayabes@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03872',
                'firstname' => 'Jorge',
                'middlename' => 'M.',
                'lastname' => 'Mandapat',
                'email' => 'jorgemandapat@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05942',
                'firstname' => 'Christelle',
                'middlename' => 'T.',
                'lastname' => 'Opilas',
                'email' => 'christelleopilas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03652',
                'firstname' => 'Mary Francis',
                'middlename' => 'R.',
                'lastname' => 'Sierra',
                'email' => 'maryfrancissierra@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05864',
                'firstname' => 'Pat Anthony',
                'middlename' => 'M.',
                'lastname' => 'Padua',
                'email' => 'patanthonypadua@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05429',
                'firstname' => 'Thea Beatris',
                'middlename' => 'B.',
                'lastname' => 'Santos',
                'email' => 'theabeatrissantos@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05656',
                'firstname' => 'Timmy Joy',
                'middlename' => 'R.',
                'lastname' => 'Lomarda',
                'email' => 'timmyjoylomarda@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05466',
                'firstname' => 'Ma. Theresa',
                'middlename' => 'G.',
                'lastname' => 'Montemayor',
                'email' => 'matheresamontemayor@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04462',
                'firstname' => 'Josephine',
                'middlename' => 'C.',
                'lastname' => 'Palima',
                'email' => 'josephinepalima@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05066',
                'firstname' => 'Robert Alvin',
                'middlename' => 'T.',
                'lastname' => 'Arceo',
                'email' => 'robertarceo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04771',
                'firstname' => 'Froilan Emil',
                'middlename' => 'D.',
                'lastname' => 'Pamintuan',
                'email' => 'froilanemilpamintuan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04150',
                'firstname' => 'Emmanuel Niño',
                'middlename' => 'W.',
                'lastname' => 'Ang',
                'email' => 'emmanuelang@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04595',
                'firstname' => 'Enrico',
                'middlename' => 'A.',
                'lastname' => 'Mariano',
                'email' => 'enricomariano@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04769',
                'firstname' => 'Eric',
                'middlename' => 'C.',
                'lastname' => 'Elnar',
                'email' => 'ericelnar@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05163',
                'firstname' => 'Mario',
                'middlename' => 'C.',
                'lastname' => 'Tani',
                'email' => 'mariotani@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04845',
                'firstname' => 'Magnolia',
                'middlename' => 'P.',
                'lastname' => 'Misolas-Ashley',
                'email' => 'magnoliaashley@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04770',
                'firstname' => 'Michael Alfred',
                'middlename' => 'V.',
                'lastname' => 'Ignacio',
                'email' => 'michaelalfredignacio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04772',
                'firstname' => 'Vichael Angelo',
                'middlename' => 'D.',
                'lastname' => 'Roaring',
                'email' => 'vichaelangeloroaring@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03562',
                'firstname' => 'Eugenio',
                'middlename' => 'C.',
                'lastname' => 'Elevado',
                'email' => 'eugenioelevado@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04713',
                'firstname' => 'Jose Ma.',
                'middlename' => 'S.',
                'lastname' => 'Dinsay',
                'email' => 'josemadinsay@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04846',
                'firstname' => 'Benedict',
                'middlename' => 'M.',
                'lastname' => 'Uy',
                'email' => 'benedictuy@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04852',
                'firstname' => 'Anne Marie Kristine',
                'middlename' => 'C.',
                'lastname' => 'Umali',
                'email' => 'annemariekristineumali@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04838',
                'firstname' => 'Jeremiah',
                'middlename' => 'C.',
                'lastname' => 'Reyes',
                'email' => 'jeremiahreyes@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05125',
                'firstname' => 'Anthony',
                'middlename' => 'B.',
                'lastname' => 'Rivera',
                'email' => 'anthonyrivera@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05323',
                'firstname' => 'Charmaine Mignon',
                'middlename' => 'S.',
                'lastname' => 'Yalong',
                'email' => 'charmainemignonyalong@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05048',
                'firstname' => 'Rosa Katrina',
                'middlename' => 'V.',
                'lastname' => 'Banzon',
                'email' => 'rosakatrinabanzon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05468',
                'firstname' => 'Clariza Mae',
                'middlename' => 'A.',
                'lastname' => 'Columna',
                'email' => 'clarizamaecolumna@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05467',
                'firstname' => 'Roberto',
                'middlename' => 'B.',
                'lastname' => 'Mabalot',
                'email' => 'robertomabalot@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04836',
                'firstname' => 'Maria Emmanuelle',
                'middlename' => 'S.',
                'lastname' => 'Burgos',
                'email' => 'mariaemmanuelleburgos@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05933',
                'firstname' => 'Norjamin',
                'middlename' => 'G.',
                'lastname' => 'Delos Reyes',
                'email' => 'norjamindelosreyes@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05236',
                'firstname' => 'Jollan Margaret',
                'middlename' => 'A.',
                'lastname' => 'Llaneza',
                'email' => 'jollanmargaretllaneza@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05815',
                'firstname' => 'Carla Regina',
                'middlename' => 'P.',
                'lastname' => 'Grepo',
                'email' => 'carlareginagrepo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06175',
                'firstname' => 'Vince Lorenzo',
                'middlename' => 'T.',
                'lastname' => 'Liwanag',
                'email' => 'vincelorenzoliwanag@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '5207',
                'firstname' => 'Rudolph Jay',
                'middlename' => 'DT',
                'lastname' => 'Velasco',
                'email' => 'rudolphjayvelasco@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05803',
                'firstname' => 'Marnie Ann',
                'middlename' => 'D.',
                'lastname' => 'Tablatin',
                'email' => 'marnieanntablatin@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05459',
                'firstname' => 'Jenelyn',
                'middlename' => 'V.',
                'lastname' => 'Manalo',
                'email' => 'jenelynmanalo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05221',
                'firstname' => 'Abigail',
                'middlename' => 'M.',
                'lastname' => 'Agda',
                'email' => 'abigailagda@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05460',
                'firstname' => 'Czarina',
                'middlename' => 'C.',
                'lastname' => 'Villamora',
                'email' => 'czarinavillamora@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04768',
                'firstname' => 'Alma',
                'middlename' => 'F.',
                'lastname' => 'Argayoso',
                'email' => 'almaargayoso@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04720',
                'firstname' => 'May Niña Celynne',
                'middlename' => 'P.',
                'lastname' => 'Layug',
                'email' => 'mayninacelynnelayug@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04592',
                'firstname' => 'Althea Karen',
                'middlename' => 'P.',
                'lastname' => 'Antonio',
                'email' => 'altheakarenantonio@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04153',
                'firstname' => 'Nicanor',
                'middlename' => 'S.',
                'lastname' => 'Bautista',
                'email' => 'nicanorbautista@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03625',
                'firstname' => 'Glenn',
                'middlename' => 'G.',
                'lastname' => 'Peñaranda',
                'email' => 'glennpenaranda@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04594',
                'firstname' => 'Raymond Albert',
                'middlename' => 'H.',
                'lastname' => 'Batac',
                'email' => 'raymondalbertbatac@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03913',
                'firstname' => 'John Paul',
                'middlename' => 'B.',
                'lastname' => 'Iñigo',
                'email' => 'michellefatimasanchez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04010',
                'firstname' => 'Kenneth',
                'middlename' => 'T.',
                'lastname' => 'Yap',
                'email' => 'kennethyap@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04605',
                'firstname' => 'Ma. Bernardita',
                'middlename' => 'A.',
                'lastname' => 'Mathay',
                'email' => 'mabernarditamathay@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03438',
                'firstname' => 'Evelyn',
                'middlename' => 'P.',
                'lastname' => 'Dela Rosa',
                'email' => 'evelyndelarosa@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06155',
                'firstname' => 'Nikko',
                'middlename' => 'P.',
                'lastname' => 'Vergara',
                'email' => 'nikkovergara@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05652',
                'firstname' => 'Ma. Rechille',
                'middlename' => 'L.',
                'lastname' => 'Buitizon',
                'email' => 'marechillebuitizon@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6209',
                'firstname' => 'Ma. Gracia',
                'middlename' => 'P.',
                'lastname' => 'Socorro',
                'email' => 'magraciasocorro@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06065',
                'firstname' => 'Lesly Kray',
                'middlename' => 'M.',
                'lastname' => 'Cortez',
                'email' => 'leslykraycortez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06211',
                'firstname' => 'Joffrey',
                'middlename' => 'A.',
                'lastname' => 'Peji',
                'email' => 'joffreypeji@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05222',
                'firstname' => 'Niña',
                'middlename' => 'A.',
                'lastname' => 'Ramal',
                'email' => 'ninaramal@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06064',
                'firstname' => 'Lady Irish',
                'middlename' => 'D.',
                'lastname' => 'Nicodemus',
                'email' => 'ladyirishnicodemus@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05911',
                'firstname' => 'Rocsan Celine',
                'middlename' => 'D.',
                'lastname' => 'Chua',
                'email' => 'rocsancelinechua@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04872',
                'firstname' => 'Riza Milagros',
                'middlename' => 'L.',
                'lastname' => 'Pangilinan',
                'email' => 'rizamilagrospangilinan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Stephen',
                'middlename' => 'P.',
                'lastname' => 'Racaza',
                'email' => 'stephenracaza@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06127',
                'firstname' => 'Reyhanz Paulo',
                'middlename' => 'R.',
                'lastname' => 'Mojica',
                'email' => 'reyhanzpaulomojica@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04877',
                'firstname' => 'Mary Angeline',
                'middlename' => 'R.',
                'lastname' => 'Ferrater',
                'email' => 'maryangelineferrater@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05286',
                'firstname' => 'Jessica',
                'middlename' => 'A.',
                'lastname' => 'Evangelista',
                'email' => 'jessicaevangelista@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '5176',
                'firstname' => 'Edgar',
                'middlename' => 'C.',
                'lastname' => 'Herrera',
                'email' => 'edgarherrera@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05863',
                'firstname' => 'Jaypee',
                'middlename' => 'O.',
                'lastname' => 'Panlilio',
                'email' => 'rogerlapining@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05526',
                'firstname' => 'Julius',
                'middlename' => 'S.',
                'lastname' => 'Pascual',
                'email' => 'juliuspascual@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04878',
                'firstname' => 'Hideliz Marie',
                'middlename' => 'A.',
                'lastname' => 'Laranang',
                'email' => 'hidelizmarielaranang@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05940',
                'firstname' => 'Phoebe Gian',
                'middlename' => 'P.',
                'lastname' => 'Mendoza',
                'email' => 'phoebegianmendoza@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05939',
                'firstname' => 'Christine',
                'middlename' => 'C.',
                'lastname' => 'Sambo',
                'email' => 'christinesambo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05245',
                'firstname' => 'Marjun',
                'middlename' => 'B.',
                'lastname' => 'Esmeralda',
                'email' => 'marjunesmeralda@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05285',
                'firstname' => 'Karen',
                'middlename' => 'R.',
                'lastname' => 'Del Carmen',
                'email' => 'karendelcarmen@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06124',
                'firstname' => 'Arlan Jane',
                'middlename' => 'J.',
                'lastname' => 'Celo',
                'email' => 'arlanjanecelo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05434',
                'firstname' => 'Domingo',
                'middlename' => 'R.',
                'lastname' => 'Tolentino',
                'email' => 'dominictolentino@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05674',
                'firstname' => 'Vincent',
                'middlename' => 'H.',
                'lastname' => 'Aller',
                'email' => 'vincentaller@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05881',
                'firstname' => 'Maria Reizel',
                'middlename' => 'P.',
                'lastname' => 'Gutang',
                'email' => 'mariareizelgutang@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06110',
                'firstname' => 'Reden',
                'middlename' => 'M.',
                'lastname' => 'Miranda',
                'email' => 'redenmiranda@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '01062',
                'firstname' => 'Noli',
                'middlename' => 'T.',
                'lastname' => 'Gavin',
                'email' => 'noligavin@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06112',
                'firstname' => 'June Leonard',
                'middlename' => 'L.',
                'lastname' => 'Colobong',
                'email' => 'juneleonardcolobong@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06115',
                'firstname' => 'Gerardo',
                'middlename' => 'B.',
                'lastname' => 'Dedicatoria',
                'email' => 'gerardodedicatoria@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '5951',
                'firstname' => 'Angelica Rose',
                'middlename' => 'R.',
                'lastname' => 'Lopez',
                'email' => 'angelicaroselopez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '4894',
                'firstname' => 'Jerica',
                'middlename' => 'T.',
                'lastname' => 'Ortega',
                'email' => 'jericaortega@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '4682',
                'firstname' => 'Lourdes',
                'middlename' => 'N.',
                'lastname' => 'Gogola',
                'email' => 'lourdesgogola@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06111',
                'firstname' => 'Wilfredo',
                'middlename' => 'E.',
                'lastname' => 'Empalmado',
                'email' => 'wilfredoempalmado@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04403',
                'firstname' => 'Ronnel',
                'middlename' => 'B.',
                'lastname' => 'Ruanes',
                'email' => 'ronnelruanes@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05128',
                'firstname' => 'Maribeth',
                'middlename' => 'F.',
                'lastname' => 'Panaligan',
                'email' => 'maribethpanaligan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06018',
                'firstname' => 'Marjorie Ann',
                'middlename' => 'J.',
                'lastname' => 'Gonzaga',
                'email' => 'marjorieanngonzaga@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03914',
                'firstname' => 'Lydia',
                'middlename' => 'R.',
                'lastname' => 'Guevarra',
                'email' => 'lydiaguevarra@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Daffodil',
                'middlename' => 'C.',
                'lastname' => 'Cleto',
                'email' => 'daffodilcleto@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify   
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Verna',
                'middlename' => 'P.',
                'lastname' => 'Laureto',
                'email' => 'vernalaureto@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03750',
                'firstname' => 'John William',
                'middlename' => 'R.',
                'lastname' => 'Lucero',
                'email' => 'johnwilliamlucero@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05554',
                'firstname' => 'Angelic',
                'middlename' => 'M.',
                'lastname' => 'Reglos',
                'email' => 'angelicreglos@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '0731',
                'firstname' => 'Joselito',
                'middlename' => 'S.',
                'lastname' => 'Regondola',
                'email' => 'joselitoregondola@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05784',
                'firstname' => 'Angelica Joy',
                'middlename' => 'S.',
                'lastname' => 'Gabriel',
                'email' => 'angelicajoygabriel@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06017',
                'firstname' => 'Melisa',
                'middlename' => 'O.',
                'lastname' => 'Inte',
                'email' => 'melisainte@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03949',
                'firstname' => 'May',
                'middlename' => 'P.',
                'lastname' => 'Cruz',
                'email' => 'maycruz@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05919',
                'firstname' => 'Melquiades Marcus',
                'middlename' => 'N.',
                'lastname' => 'Valdez',
                'email' => 'marcusvaldezii@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04997',
                'firstname' => 'Wea',
                'middlename' => 'C.',
                'lastname' => 'Bohol',
                'email' => 'weabohol@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05188',
                'firstname' => 'Berlin',
                'middlename' => 'V.',
                'lastname' => 'Mabuna',
                'email' => 'berlinmabuna@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Patricia Ann',
                'middlename' => 'S.',
                'lastname' => 'Bautista',
                'email' => 'patriciaannebautista@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05990',
                'firstname' => 'Cristy Lou',
                'middlename' => 'B.',
                'lastname' => 'Olboc',
                'email' => 'cristylouolboc@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05047',
                'firstname' => 'Gisli Venz',
                'middlename' => 'dP.',
                'lastname' => 'Gonzales',
                'email' => 'gislivenzgonzales@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05989',
                'firstname' => 'Karla Tricsha',
                'middlename' => 'T.',
                'lastname' => 'Santos',
                'email' => 'karlatricshasantos@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '02074',
                'firstname' => 'Winston',
                'middlename' => 'T.',
                'lastname' => 'Singun',
                'email' => 'winstonsingun@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04984',
                'firstname' => 'Lourdes',
                'middlename' => 'D.',
                'lastname' => 'Rafael',
                'email' => 'lourdesrafael@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05882',
                'firstname' => 'Renzo Emil',
                'middlename' => 'A.',
                'lastname' => 'Bagapuro',
                'email' => 'renzoemilbagapuro@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04957',
                'firstname' => 'Dahlia',
                'middlename' => 'J.',
                'lastname' => 'Nuñez',
                'email' => 'dahlianunez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04961',
                'firstname' => 'Jheric',
                'middlename' => 'A.',
                'lastname' => 'Saracho',
                'email' => 'jhericsaracho@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05181',
                'firstname' => 'Mary Joy',
                'middlename' => 'S.',
                'lastname' => 'Mojica',
                'email' => 'maryjoymojica@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04955',
                'firstname' => 'Harold',
                'middlename' => 'C.',
                'lastname' => 'Marco',
                'email' => 'haroldmarco@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06099',
                'firstname' => 'Paul Jerome',
                'middlename' => 'A.',
                'lastname' => 'Sañez',
                'email' => 'pauljeromesanez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04962',
                'firstname' => 'Janice',
                'middlename' => 'T.',
                'lastname' => 'Teruñez',
                'email' => 'janiceterunez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04950',
                'firstname' => 'Ruben',
                'middlename' => 'Q.',
                'lastname' => 'Cullamco',
                'email' => 'rubencullamco@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05053',
                'firstname' => 'Ferdinand',
                'middlename' => 'O.',
                'lastname' => 'Angeles',
                'email' => 'ferdinandangeles@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05786',
                'firstname' => 'Jonel',
                'middlename' => 'D.C.',
                'lastname' => 'Aquino',
                'email' => 'jonelaquino@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03829',
                'firstname' => 'Elma',
                'middlename' => 'P.',
                'lastname' => 'Viray',
                'email' => 'elmaviray@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05913',
                'firstname' => 'Royal Jean',
                'middlename' => 'D.',
                'lastname' => 'Beraquit',
                'email' => 'royaljeanberaquit@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04960',
                'firstname' => 'Rowena Domitilia',
                'middlename' => 'B.',
                'lastname' => 'San Jose',
                'email' => 'rowenadomitiliasanjose@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04945',
                'firstname' => 'Rose Marie',
                'middlename' => 'S.',
                'lastname' => 'Berte',
                'email' => 'rosemarieberte@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05834',
                'firstname' => 'Jay',
                'middlename' => 'A.',
                'lastname' => 'Acar',
                'email' => 'jayacar@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05073',
                'firstname' => 'Corona Olivia',
                'middlename' => 'O.',
                'lastname' => 'Rivera',
                'email' => 'coronaoliviarivera@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04959',
                'firstname' => 'Nerissa',
                'middlename' => 'N.',
                'lastname' => 'Saluib',
                'email' => 'nerissasaluib@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Maila',
                'middlename' => 'E.',
                'lastname' => 'Dabuet',
                'email' => 'mailadabuet@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06193',
                'firstname' => 'Loude May',
                'middlename' => 'D.',
                'lastname' => 'Ducay',
                'email' => 'loudemaeducay@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04946',
                'firstname' => 'Zenaida',
                'middlename' => 'D.',
                'lastname' => 'Biglang-Awa',
                'email' => 'zenaidabiglang-awa@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05883',
                'firstname' => 'Nerizza',
                'middlename' => 'L.',
                'lastname' => 'Valdez',
                'email' => 'nerizzavaldez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Jamaica Loraine',
                'middlename' => 'L.',
                'lastname' => 'Macatiag',
                'email' => 'jamaicalorainemacatiag@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05064',
                'firstname' => 'Sylvia',
                'middlename' => 'M.',
                'lastname' => 'Ron',
                'email' => 'sylviaron@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05052',
                'firstname' => 'Cesario',
                'middlename' => 'E.',
                'lastname' => 'Aloner',
                'email' => 'cesarioaloner@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06075',
                'firstname' => 'Madelyne',
                'middlename' => 'T.',
                'lastname' => 'Dacusin',
                'email' => 'madelynedacusin@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06025',
                'firstname' => 'Nathaniel Andre',
                'middlename' => 'I.',
                'lastname' => 'Cadampog',
                'email' => 'nathanielandrecadampog@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05575',
                'firstname' => 'John Timothy',
                'middlename' => 'A.',
                'lastname' => 'Cruz',
                'email' => 'johntimothycruz@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05914',
                'firstname' => 'Erwin Joseph',
                'middlename' => 'G.',
                'lastname' => 'Cruz',
                'email' => 'erwinjosephcruz@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05058',
                'firstname' => 'Tierry',
                'middlename' => 'G.',
                'lastname' => 'Gigantone',
                'email' => 'tierrygigantone@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04948',
                'firstname' => 'Carmelita',
                'middlename' => 'E.',
                'lastname' => 'Cabang',
                'email' => 'carmelitacabang@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06066',
                'firstname' => 'Joshua Paul',
                'middlename' => 'V.',
                'lastname' => 'Bartoline',
                'email' => 'joshuapaulbartoline@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06011',
                'firstname' => 'Lorenzo Miguel',
                'middlename' => 'P.',
                'lastname' => 'Fresnoza',
                'email' => 'lorenzomiguelfresnoza@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05518',
                'firstname' => 'Joseph',
                'middlename' => 'Q.',
                'lastname' => 'Valera',
                'email' => 'josephvalera@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Shenna Jasmine',
                'middlename' => 'O.',
                'lastname' => 'Romero',
                'email' => 'shennajasmineromero@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06125',
                'firstname' => 'Jezza Jae',
                'middlename' => 'B.',
                'lastname' => 'Dispo',
                'email' => 'jezzajaedispo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6250',
                'firstname' => 'John Paulo',
                'middlename' => 'P.',
                'lastname' => 'Antigua',
                'email' => 'johnpauloantigua@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04952',
                'firstname' => 'Beverly',
                'middlename' => 'G.',
                'lastname' => 'Jimenea',
                'email' => 'beverlyjimenea@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05790',
                'firstname' => 'Theoperr Ian',
                'middlename' => 'B.',
                'lastname' => 'Empis',
                'email' => 'theoperrianempis@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04618',
                'firstname' => 'Herminio',
                'middlename' => 'R.',
                'lastname' => 'Viterbo',
                'email' => 'herminioviterbo@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04521',
                'firstname' => 'Phillip Jason',
                'middlename' => 'P.',
                'lastname' => 'Roque',
                'email' => 'phillipjasonroque@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05791',
                'firstname' => 'Jenefer',
                'middlename' => 'I.',
                'lastname' => 'Fernandez',
                'email' => 'jeneferilagan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05480',
                'firstname' => 'Ana Michelle',
                'middlename' => 'B.',
                'lastname' => 'Binoya',
                'email' => 'anamichellebinoya@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05809',
                'firstname' => 'Marvin',
                'middlename' => 'B.',
                'lastname' => 'Bagatan',
                'email' => 'marvinbagatan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '03341',
                'firstname' => 'Joshua Louie',
                'middlename' => 'B.',
                'lastname' => 'Leonen',
                'email' => 'joshualouieleonen@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04038',
                'firstname' => 'Josephine',
                'middlename' => 'M.',
                'lastname' => 'Virrey',
                'email' => 'josephinevirrey@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05166',
                'firstname' => 'Juvie Lyne',
                'middlename' => 'M.',
                'lastname' => 'Villamora',
                'email' => 'juvielynevillamora@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '6231',
                'firstname' => 'Aibel',
                'middlename' => 'B.',
                'lastname' => 'Tolentino',
                'email' => 'aibeltolentino@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06024',
                'firstname' => 'Niambi Denise',
                'middlename' => 'B.',
                'lastname' => 'Giray',
                'email' => 'niambidenisegiray@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '002',
                'firstname' => 'Grace',
                'middlename' => 'F.',
                'lastname' => 'Baluyan',
                'email' => 'gracebaluyan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05369',
                'firstname' => 'Rosanna',
                'middlename' => 'B.',
                'lastname' => 'Aligaya',
                'email' => 'rosannaaligaya@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05517',
                'firstname' => 'Aileen',
                'middlename' => 'B.',
                'lastname' => 'Baligod',
                'email' => 'aileenbaligod@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05952',
                'firstname' => 'Bianca Lolita',
                'middlename' => 'B.',
                'lastname' => 'Asiñas-Aga',
                'email' => 'biancalolitaasinasaga@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04434',
                'firstname' => 'Mary Jean',
                'middlename' => 'T.',
                'lastname' => 'Pacheco',
                'email' => 'maryjeanpacheco@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05677',
                'firstname' => 'Joy',
                'middlename' => 'C.',
                'lastname' => 'Lumanglas',
                'email' => 'joylumanglas@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05550',
                'firstname' => 'Ronald',
                'middlename' => 'B.',
                'lastname' => 'Agustin',
                'email' => 'ronaldagustin@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'Bernadette',
                'middlename' => 'T',
                'lastname' => 'Rosales',
                'email' => 'bernadetterosales@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '04648',
                'firstname' => 'Jonathan',
                'middlename' => 'G.',
                'lastname' => 'Cabaltera',
                'email' => 'jonathancabaltera@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06067',
                'firstname' => 'Joane Crisane',
                'middlename' => 'L.',
                'lastname' => 'Olan',
                'email' => 'joanecrisaneolan@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '06062',
                'firstname' => 'Lara Bettina',
                'middlename' => 'S.',
                'lastname' => 'Jimenez',
                'email' => 'larabettinajimenez@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => null,
                'firstname' => 'John Michael',
                'middlename' => 'B.',
                'lastname' => 'Camus',
                'email' => 'johnmichaelcamus@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => '05184',
                'firstname' => 'Monique',
                'middlename' => 'G.',
                'lastname' => 'Amante',
                'email' => 'moniqueamante@dti.gov.ph',
                'gender' => 'male', // Default, modify as needed
                'employment_status_id' => 1, // Modify
                'functional_group_id' => 1, // Modify
                'bureau_office_id' => 1, // Modify
                'division_id' => 1, // Modify
                'position_id' => 1, // Modify
                'job_level_id' => 1, // Modify
                'immediate_supervisor' => 'Unknown', // Modify
                'last_review_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
