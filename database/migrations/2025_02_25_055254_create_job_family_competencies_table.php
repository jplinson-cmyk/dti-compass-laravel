<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_family_competencies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_family_id');
            $table->string('name');
            $table->timestamps();
        });

        // Insert job family competencies
        $competencies = [
            1 => [
                'Accreditation Officer', 'HO Adjudication Officer', 'RO Adjudication Officer',
                'Consumer Education and Advocacy Officer', 'Consumer Welfare Desk Officer',
                'FTL Enforcement and Monitoring Officer', 'International Relations Officer',
                'HO Mediation Officer', 'PO Mediation Officer', 'Policy Research Officer',
                'Price Monitoring Officer', 'QMS/Product Auditor', 'Product Certification Officer',
                'Product Standard Monitoring Officer', 'Product Testing', 'HO Prosecuting Officer',
                'Permits and Licensing Officer (Central Bonded Warehouse)',
                'Permits and Licensing Officer (Waiver PD 1466)',
                'Permits and Licensing Officer (Bulk Sales)',
                'Sales Promotion Evaluation Special Project Officer',
                'Technical Officer - Standards Development', 'Test Engineer',
                'Business Licensing and Accreditation Officer', 'Assessor',
                'Consumer Arbitration Officer', 'Import Regulation Officer',
                'Legal Researcher', 'Provincial Office Lawyer',
                'Permits and Licensing Officer (Ship Regional Office Lawyer and Merchandise Broker)'
            ],
            2 => [
                'Branding Specialist', 'Business Matching Service Officer',
                'Business Name Registration Officer', 'CARP Coordinator Design Specialist',
                'Financial Analyst', 'Financing Coordinator', 'Institutional Development Specialist',
                'Investment Promotion Officer', 'NC Coordinator', 'Policy Researcher',
                'Product Development Coordinator', 'Project/Program Management', 'Coordinator',
                'SME Advocacy Officer', 'SME Counsellor',
                'Trade Promotion Officer Training Facilitator/Coordinator Market/Product Specialist',
                'Foreign Trade Service Officer'
            ],
            3 => [
                'Accreditation Officer', 'Promotion and Documentation Officer',
                'Import Regulation Officer', 'Import Remedy Specialist',
                'Import Facilitation Officer', 'Import Policy and Monitoring Officer',
                'International Trade Law Officer', 'Trade Negotiator',
                'Policy Researcher and Formulation Officer', 'Monitoring and Evaluation Officer',
                'Program Development Officer', 'Promotions Officer',
                'Legislative Officer', 'Value/Supply Chain Officer', 'PQA Assessors',
                'Strategic Trade Policy and Enterprise Relations Officer',
                'Strategic Trade Registration and Authorization Officer',
                'Compliance and Investigation Officer', 'Innovation and Collaboration Officer'
            ],
            4 => [
                'HR Officer - Recruitment', 'HR Officer - Performance Management',
                'HR Officer Training (Regular Programs)', 'HR Officer External Staff Training',
                'HR Officer - Rewards', 'HR Officer - Compensation and Benefits (Personnel)',
                'Knowledge Management Officer', 'Communication Management Officer Event Organizer/Manager Planning Officer',
                'Program/Project Development Officer', 'Monitoring and Evaluation Officer',
                'Project Development and Monitoring Officer', 'Legal Researcher/Officer',
                'Secretary', 'Administrative Officer', 'Messenger', 'Driver'
            ],
            5 => [
                'Accountant/Senior Bookkeeper', 'Budget Officer', 'Cashier',
                'Foreign Assisted Projects Development and Monitoring Officer',
                'ICT Infrastructure and Support', 'ICT System Development and Maintenance',
                'ICT Plans and Policies', 'Internal Auditors', 'HO/RO/PO Property Officer',
                'HO Motorpool', 'Supply Officer', 'Procurement Officer',
                'Records Officer', 'Support Officer'
            ],
            6 => [
                'Market Development and Promotions Officer', 'Market Researcher',
                'Event Organizer/Manager', 'Business Matching Service Officer',
                'Export Adviser', 'Sector Export Development Officer'
            ]
        ];

        foreach ($competencies as $jobFamilyId => $roles) {
            foreach ($roles as $role) {
                DB::table('job_family_competencies')->insert([
                    'job_family_id' => $jobFamilyId,
                    'name' => $role,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_family_competencies');
    }
};
