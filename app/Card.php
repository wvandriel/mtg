<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


// Model build v0.1 according to MTGJson data structure.
class Card extends Model
{
    protected $fillable = [
        'converted_mana_cost',
        'count',
        'edhrec_rank',
        'face_converted_mana_cost',
        'flavor_text',
        'hand',
        'has_foil',
        'has_non_foil',
        'is_alternative',
        'is_arena',
        'is_full_art',
        'is_mtgo',
        'is_online_only',
        'is_oversized',
        'is_paper',
        'is_promo',
        'is_reprint',
        'is_reserved',
        'is_starter',
        'is_story_spotlight',
        'is_timeshifted',
        'life',
        'loyalty',
        'mana_cost',
        'mcm_meta_id',
        'mtg_arena_id',
        'mtgo_foil_id',
        'mtgo_id',
        'mtgstocks_id',
        'multiverse_id',
        'name',
        'number',
        'original_text',
        'original_type',
        'power',
        'scryfall_id',
        'scryfall_oracle_id',
        'scryfall_illustration_id',
        'tcgplayer_product_id',
        'text',
        'toughness',
        'type',
        'uuid',
        'watermark'
    ];

    protected $table = 'cards';

    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }

    public function border_color()
    {
        return $this->hasOne('App\BorderColor');
    }

    public function color_identities()
    {
        return $this->hasMany('App\ColorIdentity');
    }

    public function color_indicators()
    {
        return $this->hasMany('App\ColorIndicator');
    }

    public function colors()
    {
        return $this->hasMany('App\Color');
    }

    public function dual_deck()
    {
        return $this->hasOne('App\DualDeck');
    }

    public function foreign_data()
    {
        return $this->hasMany('App\ForeignData');
    }

    public function frame_effects()
    {
        return $this->hasMany('App\FrameEffect');
    }

    public function frame_version()
    {
        return $this->hasOne('App\FrameVersion');
    }

    public function layout()
    {
        return $this->hasOne('App\Layout');
    }

    public function leadership_skills()
    {
        return $this->hasMany('App\LeadershipSkill');
    }

    public function legalities()
    {
        return $this->hasMany('App\Legality');
    }

    public function names()
    {
        return $this->hasMany('App\Name');
    }

    public function other_face_ids()
    {
        return $this->hasMany('App\OtherFaceId');
    }

    public function printings()
    {
        return $this->hasMany('App\Printing');
    }

    public function purchase_urls()
    {
        return $this->hasMany('App\PurchaseUrl');
    }

    public function rarity()
    {
        return $this->hasOne('App\Rarity');
    }

    public function reverse_related()
    {
        return $this->hasMany('App\ReverseRelated');
    }

    public function side()
    {
        return $this->hasOne('App\Side');
    }

    public function sub_types()
    {
        return $this->hasMany('App\SubType');
    }

    public function super_types()
    {
        return $this->hasMany('App\SuperType');
    }

    public function types()
    {
        return $this->hasMany('App\Type');
    }

    public function variations()
    {
        return $this->hasMany('App\Variation');
    }
}
