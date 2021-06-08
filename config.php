<? php

$ album = 'https://vk.com/photo511254518_456239018' ;
$ res = parse_url ( $ альбом );
$ path = substr ( $ res [ 'путь' ], 9 );
$ arr = explode ( '_' , $ путь );
$ owner_id = $ arr [ 0 ];
$ album_id = $ arr [ 1 ];

$ standalone = 'by1vPOE2NZ9j6k9MmQsV' ;
$ group_token = 'ca3e70e842519a42c61fdfc6507a6ed241b358cf4d06968523976613982cd8954465601c1ed63edfa9083' ;
$ conf = [
	'standalone' => $ standalone ,
	'group_token' => $ group_token ,
	'contorm_token' => '34c40d8e' ,
	'mess' => 'Фото в студио' ,
	'not_command' => 'Ничего не понял!' ,
	'owner_id' => $ owner_id ,
	'album_id' => $ album_id ,
	'group_id' => '205074851' ,
	'apiurl' => 'https://api.vk.com/method/' ,
	'путь' => substr ( $ _SERVER [ 'PHP_SELF' ], 0 , - 2 ),
	'photos' => 'photos.txt' ,
	'temp_link' => 'temp_album.txt' ,
	'random_id' => mt_rand ( 0000000000 , 999999999999 ),
	'v' => '5.50'
];
?>
