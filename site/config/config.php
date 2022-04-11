<?php  
return[
    'api' => [
        'basicAuth' => true,
        'allowInsecure' => true,
        'routes' => [
            [
              'pattern' => 'test/(:any)',
              'action'  => function (string $mypage) {
                $route = $this->site()->find($mypage);
                $data = [];
                foreach ($route->children() as $child) {
                    array_push($data , $child->title());
                }
                return $data;
              }
            ],
            [
                'pattern' => 'test/(:any)/(:any)',
                'action'  => function (string $mypage, string $mysubpage) {
                  $route = $this->site()->find($mypage)->find($mysubpage);
  
                  return [
                    'Title' => $route->files()
                  ];
                }
              ]
          ]
    ]
    ];