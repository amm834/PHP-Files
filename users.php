<?php
#array for json
$users =array(
  [
    "id"=>1,
    "name"=>"Aung Aung",
    "creator"=>0,
    "email"=>"aungaung@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>2,
    "name"=>"Myat Myat",
    "creator"=>0,
    "email"=>"myatmyat@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>3,
    "name"=>"Moe Moe",
    "creator"=>0,
    "email"=>"moemoe@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>4,
    "name"=>"Mg Mg",
    "creator"=>0,
    "email"=>"mgmg@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>5,
    "name"=>"Cow",
    "creator"=>1,
    "email"=>"cow@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>6,
    "name"=>"cat",
    "creator"=>1,
    "email"=>"cat@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>7,
    "name"=>"cup",
    "creator"=>1,
    "email"=>"cup@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>8,
    "name"=>"com",
    "creator"=>1,
    "email"=>"com@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>9,
    "name"=>"Aung",
    "creator"=>2,
    "email"=>"aung@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>10,
    "name"=>"Myat",
    "creator"=>2,
    "email"=>"myat@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>11,
    "name"=>"Moe",
    "creator"=>2,
    "email"=>"moe@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>12,
    "name"=>"Mg",
    "creator"=>2,
    "email"=>"mg@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>13,
    "name"=>"eat",
    "creator"=>3,
    "email"=>"eat@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>14,
    "name"=>"eye",
    "creator"=>3,
    "email"=>"eye@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>15,
    "name"=>"ero",
    "creator"=>3,
    "email"=>"ero@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>16,
    "name"=>"eco",
    "creator"=>3,
    "email"=>"eco@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>17,
    "name"=>"Aung123",
    "creator"=>4,
    "email"=>"aungaung123@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>18,
    "name"=>"Myat Myat123",
    "creator"=>4,
    "email"=>"myatmyat123@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>19,
    "name"=>"Moe Moe123",
    "creator"=>4,
    "email"=>"moemoe123@gmail.com",
    "password"=>"123123"
  ],
  [
    "id"=>20,
    "name"=>"Mg Mg123",
    "creator"=>4,
    "email"=>"mgmg123@gmail.com",
    "password"=>"123123"
  ]
  );
$file = file_get_contents("users.json");
$json = json_decode($file);
foreach($json as $val){
  foreach($val as $vals){
    echo $vals;
  }
}


?>
