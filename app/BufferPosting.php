<?php

namespace Bulkly;
use App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BufferPosting extends Model
{
   public function groupInfo()
    {
        return $this->hasOne(SocialPostGroups::Class, 'id', 'group_id');
    }
   public function accountInfo()
    {
        return $this->hasOne(SocialAccounts::Class, 'id', 'account_id');
    }
    public function user(){
       return $this->belongsTo('User');
    }
    public static function bufferPosts(){
       return DB::table('buffer_postings as buf')
           ->select('buf.*','grp.type as postType', 'ac.name','ac.avatar','ac.type as accountType', 'post.text','post.link')
           ->leftjoin('social_post_groups as grp', 'buf.group_id', '=', 'grp.id')
           ->leftjoin('social_accounts as ac', 'buf.account_id', '=', 'ac.id')
           ->leftjoin('social_posts as post', 'buf.post_id', '=', 'post.id')
           ->paginate(10);
    }

}
