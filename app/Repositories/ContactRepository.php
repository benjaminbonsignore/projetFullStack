<?php  namespace App\Repositories\ContactRepository;

use Illuminate\Cache\Repository;

class ContactRepository extends Repository {
    
public function store($inputs)
{
    $contact = new $this->model;
 
    $contact->name = $inputs['name'];
    $contact->email = $inputs['email'];
    $contact->text = $inputs['message'];
 
    $contact->save();
}
}
?>