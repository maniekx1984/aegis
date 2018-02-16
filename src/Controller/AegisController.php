<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Post;
use App\Entity\Comment;

require_once '../vendor/Facebook/autoload.php';

class AegisController extends Controller
{
    //należy wpisać swoje dane w app_id, app_secret i default_access_token - do pobrania z developers.facebook.com, po utworzeniu aplikacji
    private function fb_init(){
        $fb = new \Facebook\Facebook([
            'app_id' => '',
            'app_secret' => '',
            'default_graph_version' => 'v2.12',
            'default_access_token' => '',
          ]);
        return $fb;
    }
    
    private function fb_response($fb, $getUrl){
        try {
            // Returns a `FacebookFacebookResponse` object
            $response = $fb->get($getUrl);
        } catch(FacebookExceptionsFacebookResponseException $e) {
            $response = $e;
            exit;
        } catch(FacebookExceptionsFacebookSDKException $e) {
            $response = $e;
            exit;
        }
        return $response;
    }
    
    //realizuje całe zapytanie do facebook'a i zwraca tablicę z danymi
    private function fb_full_ask($getUrl){
        $fb = $this->fb_init();
        $fb_response = $this->fb_response($fb, $getUrl);
        if(!($fb_response instanceof Exception)){
            return $fb_response->getGraphEdge();
        } else {
            return $fb_response;
        }
    }
    
    private function importToDB($posts){
        $em = $this->getDoctrine()->getManager();
        foreach($posts as $post):
            $newPost = new Post();
            $newPost->setFbId($post['id']);
            $newPost->setCreatedTime($post['created_time']);
            if (isset($post['story'])) { $newPost->setStory($post['story']); }
            if (isset($post['message'])) { $newPost->setMessage($post['message']); }
            $newPost->setFromName($post['from']['name']);
            $newPost->setFromId($post['from']['id']);
            $newPost->setLikes($this->countLikes($post['id']));
            $em->persist($newPost);
            $em->flush();
            if (isset($post['comments'])) {
                $this->saveComments($post['comments'], $newPost);
            }
        endforeach;
    }
    
    private function saveComments($comments, $post){
        $em = $this->getDoctrine()->getManager();
        foreach($comments as $comment):
            $newComment = new Comment();
            $newComment->setCreatedTime($comment['created_time']);
            $newComment->setFbId($comment['id']);
            $newComment->setMessage($comment['message']);
            $newComment->setPost($post);
            $em->persist($newComment);
            $em->flush();
        endforeach;
    }
    
    private function countLikes($fbId){
        $getUrl = $fbId.'/likes?summary=true';
        $likes = $this->fb_full_ask($getUrl);
        return $likes->getTotalCount();
    }
    
    //podstawowa funkcja importująca - do niej odwołuje się użytkownik
    public function import(){
        $getUrl = 'infoulice/posts?limit=100&fields=created_time,message,story,id,comments,from';
        $this->importToDB($this->fb_full_ask($getUrl));
        
        return $this->render('aegis/import.html.twig', array(
            'result' => 'Posty pobrane',
        ));
    }
    
    //podstawowa funkcja wyświetlająca - do niej odwołuje się użytkownik
    public function show($sort_by, $sort_order){
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAllAndCountComments($sort_by, $sort_order);
        return $this->render('aegis/show.html.twig', array(
            'posts' => $posts,
            'sort_order' => $sort_order,
        ));
    }
    
    public function index()
    {
        return $this->render('aegis/index.html.twig');
    }
}