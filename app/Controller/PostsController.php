<?php

    class PostsController extends AppController{

        // Exemple pour tester la validité du code avec un html posts fonctionnel 
        // public $scaffold;

        public function index(){

            // Vue dans View/Posts/index.ctp
            // debug($this->Post->find('all', array(
            //     'fields'        => array('Post.id', 'Post.name'),
            //     // 'conditions'    => array('Post.slug' => 'salut-monde2'),
            //     'order'         => array('Post.id DESC'),
            // )));

            // debug($this->Post->query('SELECT * FROM posts'));

            // $this->Post->id = 2;
            // debug($this->Post->field('slug'));

            // debug($this->Post->findBySlug('salut-monde', array('Post.id')));

            // Enregistrer un nouveau post
            // $this->Post->save(array(
            //     'name'      => 'Mon article par Controller',
            //     'slug'      => 'article-controller',
            //     'content'   => 'Pas de contenu'
            // ));

            // Modifier un post en ajoutant un id 
            // $this->Post->save(array(
            //     'id'        => '3',
            //     'name'      => 'Mon article modifié',
            //     'slug'      => 'article-controller',
            //     'content'   => 'Pas de contenu'
            // ));

            // Exemple modifier le slug
            // $this->Post->id = 3;
            // $this->Post->saveField('slug', 'article-modifie');

            // Supprimer un post avec son id
            $this->Post->delete(5);


            // On appelle la méthode generatePost du model Post
            $this->Post->generatePost();


            debug($this->Post->find('all'));

            die();

        }

    }

?>