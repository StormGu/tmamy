<?php

use Illuminate\Database\Seeder;

class BasicCountryZoneSeeder extends Seeder
{

    public function run() {

        $sql = file_get_contents(__DIR__ . '/sql/countries.sql');

        if (!str_contains($sql, ['DELETE', 'TRUNCATE'])) {
            throw new Exception('Invalid sql file. This will not empty the tables first.');
        }

        // split the statements, so DB::statement can execute them.
        $statements = array_filter(array_map('trim', explode(';', $sql)));

        foreach ($statements as $stmt) {
            DB::statement($stmt);
        }

        $sql = file_get_contents(__DIR__ . '/sql/zones.sql');

        if (!str_contains($sql, ['DELETE', 'TRUNCATE'])) {
            throw new Exception('Invalid sql file. This will not empty the tables first.');
        }

        // split the statements, so DB::statement can execute them.
        $statements = array_filter(array_map('trim', explode(';', $sql)));

        foreach ($statements as $stmt) {
            DB::statement($stmt);
        }
    }
}
