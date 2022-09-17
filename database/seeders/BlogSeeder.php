<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $table->id();
        // $table->string('title');
        // $table->longText('content');
        // $table->string('user');
        // $table->integer('category')->nullable();
        // $table->string('slug');
        // $table->string('tags');
        // $table->integer('readtime');
        // $table->string('image');
        // $table->boolean('active');
        //

        $devguy = User::where('username', 'devguy')->first();
        $blogs = [
            [
                'title' => 'How to start earning as a programmer?',
                'content' => '<p><strong>Introduction</strong><br />
                One factor inhibiting people from going into programming or pursuing a career in a technical field is the fact that it won&#39;t be easy to learn and quick to earn.<br />
                What draws people into programming is because they feel it&#39;s an easy way to make a lot of money, then eventually after falling into an endless wait they quit because they end up realizing that it takes an awful lot of time and patience before one gets employed and starts working.<br />
                This article will discuss some ways people who have intermediate knowledge in programming can earn some money until the job application is finally accepted.</p>

                <p><strong>Ways to earn quickly as a programmer before you land that dream job.</strong></p>

                <p><strong>1. Blogging</strong><br />
                One of the ways of earning as a programmer is through blogging.<br />
                Blogging is the process of writing a blog. A blog is a piece of writing uploaded to a webpage to pass information. There are several blogging platforms for programmers and developers examples are dev.to and hashnode. You can write blogs on several aspects relating to programming examples are programming tutorials or how-to write-ups, you can earn through web motivation so for every article you write based on the words and views you get paid.<br />
                Blogging is very useful particularly because you&#39;ll be forced to do research and come out of your comfort zone plus it&#39;ll be a nice way of showing off your knowledge in the field.</p>

                <p><strong>2. Using Social Media</strong><br />
                Social media platforms are very useful in making money as a programmer some of the most popular platforms for these are:</p>

                <ul>
                    <li>YouTube: Youtube is one of the most popular social media platforms which can be accessed around the globe. You can earn this way by creating videos and uploading them on the platform and you get paid per view.</li>
                    <li>TikTok: This is another really popular social media platform where you can create short videos and how-to tutorials which can get you likes and followers and can also be monetized.</li>
                    <li>Twitter: Twitter is a very large social media platform that can also be monetized per the tweets you make and threads you create.</li>
                </ul>

                <p><strong>3. Coding competitions</strong><br />
                Coding competitions like hackathons or google programming competitions are ways to test and show off your skills, vast knowledge in programming, and technical abilities. These challenges will test you to the core on how you can create solutions to problems and if successful you stand a chance to win prizes.</p>

                <p><strong>4. Becoming a tutor</strong><br />
                You can earn money by becoming a tutor and teaching programming languages, holding classes, and getting paid for it.</p>

                <p><strong>5. Freelancing</strong><br />
                There are currently several freelancing sites which include Fiverr, Upwork, and so on. These provide a connection between clients and employees, so you can be employed and paid for your work as a programmer.</p>

                <p><strong>6. Writing a book</strong><br />
                This might seem difficult and it definitely will take a lot of time and reading as well as learning but once you&#39;ve got enough knowledge or when you feel it&#39;s right, go for it, writing a book will make you stand out as a recognized author and you can sell your book at reasonable prices.</p>

                <p><strong>Conclusion</strong><br />
                The road to getting a career in programming is a long one and some might give up midway because it requires investment as well as time but doesn&#39;t pay immediately, but why not start one of the above you can find yourself and keep going until you get that dream job and no doubt doing one of the above or all will get you more recognized and increase your chances of getting a job.</p>

                ',
                'user' => $devguy->id,
                'category' => 1,
                'slug' => 'blog-title',
                'tags' => 'blog, justarandomtag',
                'readtime' => 10,
                'image' => '/assets/defaults/blog1.jpg',
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
