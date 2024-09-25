<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model ; 
use Illuminate\Database\Eloquent\Relations\BelongsTo ; 
use Illuminate\Support\Arr ;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class Post extends Model {
    // Commente everything because it's now defined in the DB
    use HasFactory;

    protected $table = 'posts' ; // Use the table we want (default : posts)
    protected $primaryKey = 'id' ; // Define the primary key (default : id)

    protected $fillable = ['id', 'slug', 'title', 'date', 'author', 'body'] ; // Fields to protect so we can add data with tinker

    // Convert date in Carbon to consider it as a date and not as a string
    protected $casts = [
        'date' => 'datetime',
    ];
    
    public function author(): BelongsTo { // Permet d'accéder à l'auteur depuis l'article 
        return $this->belongsTo(User::class) ;
    }

    // public static function all() {
    //     return [
    //         [
    //             'id' => 1,
    //             'slug' => 'article-1',
    //             'title' => 'The Benefits of Using Daily To-Do Lists to Attain Your Goals',
    //             'date' => 'July 31, 2024',
    //             'author' => 'Indeed Editorial Team',
    //             'body' => 'Writing your daily tasks on a list can help you increase productivity and decrease stress. To-do lists enable you to segment your goals into achievable activities and complete large projects by breaking them into smaller assignments. Recording tasks can allow you to better manage your time and encourages you to achieve more throughout your day. In this article, we discuss the benefits of having a daily to-do list, how it can boost your mental health, and provide tips on how to create an effective list. 
                
    //             ...

    //             Full article : https://ca.indeed.com/career-advice/career-development/daily-to-do-list'
    //         ],
    //         [
    //             'id' => 3,
    //             'slug' => 'article-3',
    //             'title' => 'Why making lists gives us power: A service user experience',
    //             'date' => 'April 24, 2024',
    //             'author' => 'St Patrick\'s Mental Health Services',
    //             'body' => 'Paula, a former service user, explores how making lists helps her to stay well.

    //             An important part of keeping well can be list-making. Making lists of things to do puts us in control of our lives. It\'s astonishing how such a simple exercise transfers power to us from the chaos outside our lives. 
                
    //             ...

    //             Full article : https://www.stpatricks.ie/media-centre/blogs-articles/2024/april/power-of-lists'
    //         ],
    //         [
    //             'id' => 2,
    //             'slug' => 'article-2',
    //             'title' => '10 Benefits of Making Lists',
    //             'date' => 'May 7, 2021 ',
    //             'author' => 'Robert N. Kraft Ph.D.',
    //             'body' => 'Two of our most time-tested and influential texts are lists of ten: The Bill of Rights and the Ten Commandments. The first defines basic freedoms in the United States and the second presents requirements for living as moral human beings.1 Each of these profound texts is simply a list: an ordered sequence of items with a brief description accompanying each item.

    //             One of the most well-known poetic lists is “Sonnet 43” by Elizabeth Barret Browning, which begins: “How do I love thee? Let me count the ways.” The sonnet then follows with a list of ways to love.
                
    //             ...

    //             Full article : https://www.psychologytoday.com/us/blog/defining-memories/202105/10-benefits-making-lists'
    //         ]

    //     ] ;
    // }

    // public static function find($slug): array {
    //     // return Arr::first(static::all(), function($post) use ($slug) {
    //     //     return $post['slug'] == $slug;
    //     // });
    //     $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ;

    //     if(!$post) {
    //         abort(404) ;
    //     }

    //     return $post ;
    // }
}