<?php 


public function admin(
    ContactRepository $contact_gestion,
    BlogRepository $blog_gestion,
    CommentRepository $comment_gestion)
{
    $nbrMessages = $contact_gestion->getNumber();
    $nbrUsers = $this->user_gestion->getNumber();
    $nbrPosts = $blog_gestion->getNumber();
    $nbrComments = $comment_gestion->getNumber();
    
    return view('back.index', compact('nbrMessages', 'nbrUsers', 'nbrPosts', 'nbrComments'));
}

?>