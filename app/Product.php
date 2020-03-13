<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class Product extends Model
{
    protected $fillable = [
        'sto','merk','type','hostname','ip_oam','metro','metro_port_1','metro_port_2','vlan_inet','alamat',
    ];
}