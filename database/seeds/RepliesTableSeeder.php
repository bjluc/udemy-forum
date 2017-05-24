<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = [
        'user_id' => 1,
        'discussion_id' => 1,
        'content' => 'Sed ut massa massa. Ut varius purus sit amet magna porttitor, at commodo neque vestibulum. Fusce consectetur nulla tristique sem faucibus, ut molestie risus scelerisque. Ut mollis, nibh viverra finibus dictum.'
        ];
        $r2 = [
        'user_id' => 1,
        'discussion_id' => 2,
        'content' => 'Sed ut massa massa. Ut varius ut molestie risus scelerisque. Ut mollis, nibh viverra finibus dictum.'
        ];
        $r3 = [
        'user_id' => 2,
        'discussion_id' => 3,
        'content' => 'Sed ut massa massa. Ut varius purus sit amet magna porttitor, at commodo neque vestibulum.'
        ];
        $r4 = [
        'user_id' => 4,
        'discussion_id' => 4,
        'content' => 'Sed ut massa massa. Ut varius purus sit amet magna porttitor, at commodo neque vestibulum. Fusce consectetur nulla tristique sem faucibus, ut molestie risus scelerisque. Ut mollis, nibh viverra finibus dictum.'
        ];

        App\Reply::create($r1);
        App\Reply::create($r2);
        App\Reply::create($r3);
        App\Reply::create($r4);
    }
}
