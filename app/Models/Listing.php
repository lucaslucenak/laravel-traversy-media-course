<?php

    namespace App\Models;

    class Listing {
        public static function getAll() {
            return [
                    [
                        'id' => 1,
                        'title' => 'title 1',
                        'content' => 'content 1'
                    ],
                    [
                        'id' => 2,
                        'title' => 'title 2',
                        'content' => 'content 2'
                    ],
                    [
                        'id' => 3,
                        'title' => 'title 3',
                        'content' => 'content 3'
                    ],
                ];
        }

        public static function findById($id) {
            $listings = self::getAll();

            foreach($listings as $listing) {
                if ($listing['id'] == $id) {
                    return $listing;
            }
        }
    }
}