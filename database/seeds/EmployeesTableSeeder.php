<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;
use App\Employee;
use Carbon\Carbon;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = Reader::createFromPath(base_path().'/database/seeds/employees_basic_fields.csv');
        $header = $csv->fetchOne();
        $records = $csv->setOffset(1)->fetchAll();
        $records = collect($records);
        $records->each(function($record){
        	$person = new Employee;
			$person->tarzan_id = $record[0];
			$person->name = $record[1];
			$person->date_of_birth = strlen($record[2]) > 2 ? New Carbon($record[2]) : Null ;
			$person->location = $record[3];
			$person->designation = $record[4];
			$person->date_joined = New Carbon($record[5]);
			$person->basic_pay = $record[6];
			$person->element_car = $record[7];
			$person->element_rent = $record[8];
			$person->element_other = $record[9];
			$person->union = $record[10];
			$person->married = $record[11];
			$person->children = $record[12];
			$person->contributes_to_ssf = $record[13];
			$person->disabled = $record[14];
			$person->soap = $record[15];
			$person->mode_of_payment = $record[16];
			$person->bank_account = $record[17];
			$person->kind_of_cheque = $record[18];
			$person->advance = $record[19];
			$person->days_absent = 0;
			$person->home_address = $record[21];
			$person->house_number = $record[22];
			$person->contact_number = $record[23];
			$person->save();
        });
    }
}
