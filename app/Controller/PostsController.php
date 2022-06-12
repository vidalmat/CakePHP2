<?php

    class PostsController extends AppController{

        public function index($prenom){

            // Vue dans View/Posts/index.ctp

            $this->set('prenom', $prenom);

        }

    }

?>