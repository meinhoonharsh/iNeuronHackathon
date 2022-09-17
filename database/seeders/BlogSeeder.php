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
            [
                'title' => "You ain't a beginner developer no more!",
                'content' => '<h2>1. Not afraid of learninig something new !</h2>

                <p>You just be like &quot;give me some time , this shit can be done!&quot;. You will just bypass the fear of learning something new.</p>

                <p>At the end of the day you just work with what suits your needs and learning new is the part of development.</p>

                <h2>2. Syntax ain&#39;t a problem</h2>

                <p>You are far better with your syntax skills even when learning the new language.</p>

                <h2>3. You Stop watching Youtube/Tutorial Videos</h2>

                <p>You directly go to the docs where you would find stuff easily and complain about inconsistencies in the docs.</p>

                <p>You prefer reading rather than watching a video because ultimately you develop the habit of finding what you need when reading easily.</p>

                <h2>4. You start exploring other things beyond coding.</h2>

                <p>Such as writing a documentation/blogs for what you do , writing test cases , automating a testing flow and cloud related things.</p>

                <p><em>Peace</em>&nbsp;🕊</p>

                ',
                'user' => $devguy->id,
                'category' => 2,
                'slug' => 'blog-title-2',
                'tags' => 'beginner, coding',
                'readtime' => 10,
                'image' => '/assets/defaults/blog2.jpg',
            ],
            [
                'title' => "Utilities I use for web development. 🗿",
                'content' => '<h2><a href="https://ts-faker.vercel.app/">1. TS faker</a></h2>

                <p>Generate Fake data using typescript interfaces. Supports JSON and SQL. Its merely a proof of concept it doesn&#39;t help when having interfaces composed of other interfaces.</p>

                <p>But works well when you have simple structures. I am trying to contact with the author to have more features.&nbsp;<a href="https://dev.to/sirwanafifi/ts-faker-generating-fake-data-using-typescript-interfaces-2em2">Post by author</a></p>

                <p><a href="https://res.cloudinary.com/practicaldev/image/fetch/s--NBOR8V2x--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/jadxtevd88wyw1gg96o8.png"><img alt="TS Faker" src="https://res.cloudinary.com/practicaldev/image/fetch/s--NBOR8V2x--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/jadxtevd88wyw1gg96o8.png" style="height:503px; width:880px" /></a></p>

                <h2>2. Tailwind Colors</h2>

                <p>One of the best color pallete available and that too open source ❤️. I use this to choose colors on all projects.</p>

                <p><a href="https://tailwindcss.com/docs/customizing-colors#default-color-palette" rel="noopener noreferrer" target="_blank"><img alt="" src="https://res.cloudinary.com/practicaldev/image/fetch/s--_5aOg8rk--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://tailwindcss.com/_next/static/media/social-card-large.f6878fd8df804f73ba3f1a271122105a.jpg" style="height:440px; width:880px" /></a></p>

                <h2><a href="https://tailwindcss.com/docs/customizing-colors#default-color-palette" rel="noopener noreferrer" target="_blank">Customizing Colors - Tailwind CSS</a></h2>

                <p><img alt="favicon" src="https://res.cloudinary.com/practicaldev/image/fetch/s--u9qZP1A8--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://tailwindcss.com/favicons/favicon-32x32.png%3Fv%3D3" style="height:32px; width:32px" />tailwindcss.com</p>

                <h2><a href="https://jvilk.com/MakeTypes/">3. Make Types from JSON</a></h2>

                <p>I am a huge typescript guy , I use types for almost everthing. Those extra times save a lot of trouble. When working with 3rd party apis,&nbsp;this is very helpful.</p>

                <p><a href="https://res.cloudinary.com/practicaldev/image/fetch/s--CeID7JAx--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/1bdvjk28ap6qj9daqbpl.png"><img alt="Make Types" src="https://res.cloudinary.com/practicaldev/image/fetch/s--CeID7JAx--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/1bdvjk28ap6qj9daqbpl.png" style="height:503px; width:880px" /></a></p>

                <h2>4. Excalidraw</h2>

                <p>Easy to create sketches and share as png/svg.</p>

                <p><a href="https://excalidraw.com/" rel="noopener noreferrer" target="_blank"><img alt="" src="https://res.cloudinary.com/practicaldev/image/fetch/s--__48hFKg--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://excalidraw.com/og-image.png" style="height:460px; width:880px" /></a></p>

                <h2><a href="https://excalidraw.com/" rel="noopener noreferrer" target="_blank">Excalidraw | Hand-drawn look &amp; feel &bull; Collaborative &bull; Secure</a></h2>

                <p>Excalidraw is a whiteboard tool that lets you easily sketch diagrams that have a hand-drawn feel to them.</p>

                <p><img alt="favicon" src="https://res.cloudinary.com/practicaldev/image/fetch/s--34jUIgEk--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://excalidraw.com/favicon.ico" style="height:256px; width:256px" />excalidraw.com</p>

                <h2>5. MDN Docs</h2>

                <p>Everything is here !</p>

                <p><a href="https://developer.mozilla.org/en-US/" rel="noopener noreferrer" target="_blank"><img alt="" src="https://res.cloudinary.com/practicaldev/image/fetch/s--OAsU75iZ--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://developer.mozilla.org/mdn-social-share.cd6c4a5a.png" style="height:495px; width:880px" /></a></p>

                <h2>&nbsp;</h2>
                 ',
                'user' => $devguy->id,
                'category' => 2,
                'slug' => 'blog-title-2',
                'tags' => 'beginner, coding',
                'readtime' => 10,
                'image' => '/assets/defaults/blog2.jpg',
            ],

        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
