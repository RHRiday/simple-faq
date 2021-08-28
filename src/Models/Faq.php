<?php

namespace Rifat\SimpleFaq\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return \Rifat\SimpleFaq\Database\Factories\FaqFactory::new();
    }
}
