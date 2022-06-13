<?php

    class Post extends AppModel {

        public function generatePost(){
            $this->save(array(
                'name'      => rand(0, 1000),
                'slug'      => rand(0, 1000),
                'content'   => rand(0, 1000)
            ));
        }

    }


?>