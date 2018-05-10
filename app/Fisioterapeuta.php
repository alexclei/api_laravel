<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fisioterapeuta extends Model
{
  // Nome de tabela no banco de dados
  protected $table = 'fisioterapeuta';
  
  protected $hidden = ['senha_fisioterapeuta'];
}
