<?php 
class Inscricao extends AppModel { 
  public $useTable = 'inscricoes';
  public $order = array('nome' => 'ASC'); 
  public $cacheQueries = true;  
}