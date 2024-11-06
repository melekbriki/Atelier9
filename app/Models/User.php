<?php
  

  namespace App\Models;

  use Illuminate\Foundation\Auth\User as Authenticatable;
  use Laravel\Passport\HasApiTokens; // Import the HasApiTokens trait
  
  class User extends Authenticatable
  {
      use HasApiTokens; // Make sure to include this
  
      // Define your fillable fields, hidden fields, etc.
      protected $fillable = [
          'name', 'email', 'password',
      ];
  
      protected $hidden = [
          'password', 'remember_token',
      ];
  }