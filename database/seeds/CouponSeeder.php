<?php

use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \DB::table('coupons')->truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $data=array(
            array(
                'code'=>'abc123',
                'type'=>'fixed',
                'value'=>'300',
                'status'=>'active'
            ),
            array(
                'code'=>'111111',
                'type'=>'percent',
                'value'=>'10',
                'status'=>'active'
            ),
        );

        DB::table('coupons')->insert($data);
    }
}
