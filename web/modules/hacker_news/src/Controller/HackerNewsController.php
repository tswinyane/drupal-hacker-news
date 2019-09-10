<?php

namespace Drupal\hacker_news\Controller;

use Drupal\Core\Controller\ControllerBase;

use Drupal\node\Entity\Node;

class HackerNewsController{
    
    public function getNews(){
      
        $url = "https://hacker-news.firebaseio.com/v0/topstories.json";
        $client = \Drupal::httpClient();
        try {
            $request = $client->get($url);
            $status = $request->getStatusCode();
            $transfer_success = $request->getBody()->getContents();
        }
        catch (RequestException $e) {
            //An error happened.
        }
       
        $results = json_decode($transfer_success);    

        $i = 0;
        foreach ($results as $node_id){
                $url_story = "https://hacker-news.firebaseio.com/v0/item/".$node_id.".json";
                $client2 = \Drupal::httpClient();
                try {
                    $request_story = $client2->get($url_story);
                    $status_story = $request_story->getStatusCode();
                    $transfer_story_success = $request_story->getBody()->getContents();
                }
                catch (RequestException $e) {
                    //An error happened.
                }
            
                $results_story = json_decode($transfer_story_success); 
                
                $node = Node::create(array(
                    'type' => 'story',
                    'title' => $results_story->title,                    
                    'field_author'=>$results_story->by,
                    'body' => 'Body of the node',
                    'field_url' => $results_story->url,
                    'langcode' => 'en',
                    'uid' => '1',
                    'status' => 1,
                    'field_fields' => array(),
                ));            
                $node->save(); 
                #drupal_set_message( "Node with nid " . $node->id() . " saved!\n");
                $i++;            
        }

        return array(
            '#title' => 'Hacker News!',
            '#markup' => 'News Items Fetched'
        );
    }

}