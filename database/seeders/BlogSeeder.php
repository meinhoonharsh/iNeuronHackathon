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
                'slug' => 'blog-title-3',
                'tags' => 'beginner, coding',
                'readtime' => 10,
                'image' => '/assets/defaults/blog3.jpg',
            ],
            [
                'title' => "Why our websites are slow — Importance of bundle size",
                'content' =>
                '
                <h2>&nbsp;</h2>

                <p>Not Reactjs, not a framework or the servers, or API , nor the internet is the reason behind it.</p>

                <h2>Under the Hood</h2>

                <p>The story begins way back exactly one year ago. When I was covering stories on react and react native apps optimisation.</p>

                <p>I have covered more than&nbsp;<a href="https://javascript.plainenglish.io/15-ways-to-improve-the-performance-of-your-react-application-459c93904eaf">15 ways in a single story</a>&nbsp;on how to improve react app performance.</p>

                <p>This is the beauty of software development it&rsquo;s never stagnant or monotonous. Because today even after one year, I read a new story that tells the impact of bundle size on application performance and a mind-boggling story to understand why websites can be slow.</p>

                <h2>Right under the nose</h2>

                <p>For one year I have covered so many stories on react application optimisation but today I have got a new perspective on seeing react applications.</p>

                <p><strong>Bird EYE perspective &mdash; Find the root cause of problems</strong></p>

                <p>See it&rsquo;s not rocket science but let me explain with the story -</p>

                <ul>
                    <li>We first create an application in Reactjs</li>
                    <li>Then we use Framework and packages and add code</li>
                </ul>

                <p>If our senior developer requests us to improve our React app performance, we always proceed in the so-called universal direction as explained</p>

                <ul>
                    <li>Check the image size</li>
                    <li>Check the internet</li>
                    <li>Check the API</li>
                    <li>Check the code structure architecture or size of the repository</li>
                    <li>Check the Javascript frameworks and language twists and turns(such as re-rendering in reactjs) and bla bla bla.</li>
                </ul>

                <p>But what if I told you to follow Bottom to Top approach instead?</p>

                <p>Let&#39;s start with the question &mdash;</p>

                <h2>How browser loads the website?</h2>

                <ul>
                    <li>The server sends the app bundle or response such as HTML to the browser</li>
                    <li>Website loads HTML file and if javascript is present it will be fetched, parsed compiled and executed.</li>
                    <li>Followed by loading of CSS</li>
                    <li>Lastly, images are loaded or being lazy loaded</li>
                </ul>

                <p>Cool, so, what really can be the reason for the entire website being slow?</p>

                <p>Ofcourse, the things which will take time, isn&#39;t it?</p>

                <p>So out of HTML, CSS, JS and Image if we exclude the API response here the only thing that will occupy most of the time to be executed on the browser is Javascript.</p>

                <p>Understand that images and large-size files are not the culprits every time.</p>

                <p>For example, the graph below tells that if the same size image and same size javascript when loads in the browser, the javascript file takes more time to process than the image.</p>

                <p>.062 seconds for image and 2 seconds for javascript</p>

                <p><a href="https://res.cloudinary.com/practicaldev/image/fetch/s--MxH-NY8X--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/z5ft6bp5smvj8xtpg4t0.png"><img alt="Image description" src="https://res.cloudinary.com/practicaldev/image/fetch/s--MxH-NY8X--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/z5ft6bp5smvj8xtpg4t0.png" style="height:452px; width:700px" /></a></p>

                <h2>Bottom-to-Top Approach</h2>

                <p>Check the javascript file size and try to decrease it even if the JS file includes an image try to optimise the image.</p>

                <p>Understand the core reason how parsing, compiling and execution of the bundle can be improved significantly. That will cover up almost most of the reasons why applications are slow.</p>

                <p>If not then it&rsquo;s time to move up in the root causes list. Checking the image optimisation, re-rendering, sharding and API response things in order.</p>

                <h2>Impact of Bundle size</h2>

                <p>Most websites are now server-side and include more of the javascript code rather than HTML and CSS. Bundle when sends to the browser whether it&rsquo;s compressed or decompressed will parse, compile and then execute.</p>

                <p>Imagine if I send the browser 100Kb of app bundle whereas I send 25kb of app bundle, what do you think which one will take time?</p>

                <p><a href="https://www.npmjs.com/package/webpack-bundle-analyzer">Webpack bundle analyzer</a></p>

                <p>Out of curiosity, the above npm package will help you to analyze bundle size by showing the image locally as shown below.</p>

                <p><a href="https://res.cloudinary.com/practicaldev/image/fetch/s--oe69lzRO--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/4xljn38uq8wd7x06eshs.jpeg"><img alt="Image description" src="https://res.cloudinary.com/practicaldev/image/fetch/s--oe69lzRO--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/4xljn38uq8wd7x06eshs.jpeg" style="height:172px; width:293px" /></a></p>

                <p>The smaller the bundle size the less load will be on the browser CPU, and memory and the faster it will run the website. Simple, not rocket science.</p>

                <p>We have already suspected that javascript can be the culprit of the slowness of the app. Adding to it, if the App bundle includes most of the javascript code then more time it will take to run completely on the browser.</p>

                <p>So we should consider the fact that our bundle size should be low at the end. As it will load the entire javascript file on the browser.</p>

                <h2>Alternative to Javascript</h2>

                <p>When I understand this I got one more question.</p>

                <p>Then why we are supporting server-side or javascript-based applications in frontend?</p>

                <p><strong>Why can&rsquo;t we move back to writing HTML and CSS in the front?</strong></p>

                <p>The answer I got is NO, it&rsquo;s not correct and useful every time in every case to use mostly HTML and CSS in frontend.</p>

                <p>Frameworks like React help develop products like Figma, Gmail, e-commerce and games much easier because of directly dealing with javascript in the front end.</p>

                <h2>Real-world example</h2>

                <p>We got a new concept called the island model. Astro is the new Multi-page application framework that deals with serving HTML files only to the browser.</p>

                <p>But Astro can&rsquo;t be used in every product it really depends on the product type and if you want to know the reason below is the story for it.</p>

                <p>Astro can&rsquo;t be used for applications where heavy states are to be managed, animations, e-commerce and dynamic websites.</p>

                <p><a href="https://youtube.com/shorts/bkEHdwsN60o">Is Astro fastest framework in 2022?</a></p>

                <p>In the end, we can&rsquo;t develop high and bit more complex products every time easily using HTML and CSS only. We need to have javascript to make development much easier.</p>

                <p>Not a switch, I recommend.</p>

                <p>Improving bundle size<br />
                Let&rsquo;s move back to bundle size impact.</p>

                <h2>How to improve it?</h2>

                <ul>
                    <li>Look for code splitting, only load the required one and try to reuse</li>
                    <li>Minify the bundle size using loaders or webpack plugins</li>
                    <li>Remove the unused dependencies</li>
                    <li>Lazy load the dependencies, load only when asked</li>
                    <li>Caching the output</li>
                </ul>

                <p>Still improving bundle size will not be an easy task.</p>

                <p>You can check the next.js bundle size using the below command.</p>

                <pre>
                <code>yarn run build
                </code></pre>

                <p>It will give bundle size output and you can try making the changes and measure the bundle size improvements.</p>

                <p>The most efficient way is to check the entire app bundle in the browser inspect tab in the performance section. You can google the way it&rsquo;s not too hard to understand so not covering it much in this story.</p>

                <p>Try introducing changes such as</p>

                <ul>
                    <li>Code splitting</li>
                    <li>Caching using React Query or Service Worker</li>
                    <li>Minify the final output size using loaders</li>
                    <li>You can keep measuring the bundle size locally</li>
                    <li>Followed by checking the final performance in the inspect tab.</li>
                </ul>

                <p>The performance measured by the&nbsp;<a href="https://chrome.google.com/webstore/detail/lighthouse/blipmdconlkpinefehnmjammfjpmpbjk?hl=en">google lighthouse</a>&nbsp;will also give a percentage output of the performance.</p>

                <h2>Root cause</h2>

                <p>The root cause of the javascript and who carries the javascript is the app bundle. Why app bundle really matters is because the more it&rsquo;s size more CPU power and memory it will consume more time it will take to get executed.</p>

                <p>Understand this also, sometimes apps are fast even though the bundle size is OKAY. In that case -</p>

                <ul>
                    <li>Either the CPU of the browser is really slow, it usually happens in the old devices</li>
                    <li>Or the network connectivity is low</li>
                </ul>

                <p>Nothing more than that nothing less than that.</p>

                <h2>Ultimate Plan of Action</h2>

                <ul>
                    <li>Which phone app is tested, if the phone is slow then check the app on the new phone.</li>
                    <li>Make sure internet connectivity is good</li>
                    <li>Even if the app is slow in all the phones with good internet connectivity then proceed with bundle size.</li>
                    <li>If bundle size is not an issue check the image size, and other tantrums such as re-rendering, HTML parsing, fonts and CSS and so on.</li>
                </ul>

                <p>With the bottom-to-top approach, we have a new way of addressing the entire application performance issues.</p>

                <p>Final verdict<br />
                I am hoping to see more tools in the future helping in following this approach because nobody is talking about it.</p>

                <p>I am able to find the root cause because I read this story written by the Engineering Manager at Google<br />
                <a href="https://medium.com/u/2508e4c7a8ec?source=post_page-----a0ef1da5b53c--------------------------------">Addy Osmani</a></p>

                <h2>Conclusion</h2>

                <p>I am reading more about bundle size for app performance and the root cause behind our apps being really slow.</p>

                <p>Because I am done adding image optimisation, react rendering issues and the usual way of optimising applications. It&rsquo;s time to go beyond it finding the root cause and play with it.</p>

                <p>If you find more readings around it please do share I would love to read.</p>

                <p>Until next time, have a good day.<br />
                Shrey</p>

                ',
                'user' => $devguy->id,
                'category' => 3,
                'slug' => 'blog-title-4',
                'tags' => 'websites, slow, coding',
                'readtime' => 10,
                'image' => '/assets/defaults/blog4.jpg',
            ],

            [
                'title' => "Tutorials are Wrong",
                'content' => '                <p>Is the title a clickbait? Nope, let me explain.</p>

                <p>Learning new stuff is amazing and courses and tutorials are a great help, until, you realize you&rsquo;re stuck in the Tutorial Hell 🔥</p>

                <p>So, are some tutorials wrong? Or all tutorials? And what is this Tutorial Hell?</p>

                <p><em>Do you like watching videos over reading? You can find a video version here:</em></p>

                <p><a href="https://youtu.be/U6oWq2RPP_4"><img alt="Click here for the YouTube video!" src="https://res.cloudinary.com/practicaldev/image/fetch/s--GfmiADyG--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/xqnmfh0925otv9idru7i.png" style="height:495px; width:880px" /></a></p>

                <hr />
                <p>Tutorial Hell is that situation where you get the habit of using tutorials to do something new, without realizing you&rsquo;re not understanding what you&rsquo;re doing, you&rsquo;re just copying someone else&rsquo;s work.</p>

                <p>Well redacted tutorials, will make it easy to get to the final and polished solution as smooth as possible, and that&rsquo;s fine, but you must not forget to analyze all the steps in between.</p>

                <blockquote>
                <p><em>Give a man a fish and you feed him for a day</em><br />
                -&gt; You&rsquo;ve built your thing</p>

                <p><em>Teach a man how to fish and you feed him for a lifetime</em><br />
                -&gt; You know HOW to build many things by yourself</p>
                </blockquote>

                <p>Do you get the analogy with tutorials?</p>

                <p>It&rsquo;s easy to fall into this situation without even realizing and it does not only apply to beginners, you might be affected in some way regardless of your skill level.</p>

                <p>Let&rsquo;s assume you might be in this so called Tutorial Hell. The very first step to escape is by reading this tutorial on how to escape the tutorial hell...&nbsp;ok, wait, this sounds tricky.</p>

                <p>The best way to use tutorials is to forget about what the tutorial aims for. Forget it! But learn everything else in between. You shouldn&rsquo;t focus on the final result, but on all the path that you have to follow, before getting to the final product.</p>

                <p>Let&rsquo;s say you&rsquo;re watching a tutorial on how to make a todo list in React. Sounds easy, right?</p>

                <p>Ok, at some point the tutorial tells you to send an HTTP request to save your list. It uses the POST verb. What is that? How many other HTTP verbs are there? Why POST and not PUT or PATCH?</p>

                <p>And again, does it use a library to make the call, such as axios? Ok cool, what is this library? Why should I use it compared to other libraries? Do you have a native solution? Yes, you can use fetch so what are the differences between fetch and axios?</p>

                <p>Ok, I think you got my point.</p>

                <p>Every time the tutorial tells you to do something, ask yourself some questions. Try to get deeper on why something has been done specifically that way. Properly understanding this, will let you absorb 10 times more what the tutorial is about.</p>

                <p>It will take more time to build your todo app, that&rsquo;s for sure, but you&rsquo;re just learning, right? So you want to build the todo list, or to learn how to build a gozillion other apps in the future? That&rsquo;s your choice.</p>

                <hr />
                <p>However, tutorials are not the only way to learn something new. To be honest, I like to learn by putting my hands on real projects, that&rsquo;s why I try to contribute as often as possible to Open Source, and you should do the same! I explain in this video all the advantages it gives.</p>

                <p>I promise you with Open Source you will learn a lot more than just by following tutorials! Go watch it and let me know what you think :)</p>
                    ',
                'user' => $devguy->id,
                'category' => 5,
                'slug' => 'blog-title-5',
                'tags' => 'beginner, tutorials',
                'readtime' => 10,
                'image' => '/assets/defaults/blog5.jpg',
            ],

            [
                'title' => "Web development as a career path",
                'content' => '
                <p><strong>Intro to web development</strong><br />
                Web development is the act or process of developing a website or a web app. This also involves creating a well-designed outlook and functionality of web software that is easily accessible to the users.<br />
                Web Development is one of the fastest-growing fields in the tech industry and Job opportunities are predicted to expand further by 13% between 2020 and 2030 according to the&nbsp;<a href="https://www.bls.gov/ooh/computer-and-information-technology/web-developers.htm">US bureau of labor statistics</a>&nbsp;with an average pay of $77,200 per year.</p>

                <p><strong>Types of web developers</strong><br />
                There are three types of web developers</p>

                <ul>
                    <li>The front-end developer</li>
                    <li>The back-end developer</li>
                    <li>The full stack developer</li>
                </ul>

                <p><strong>1.The front-end developer</strong><br />
                Front-end developers are those who manage the visible aspect of the website. This can be referred to as the client-side interface. They manage the way the web pages work and link them to other web pages as well as the design of the web page. They are mainly concerned with the page which is seen by the user. They work on mainly HTML, CSS, and JavaScript.</p>

                <p><strong>2.The back-end developer</strong><br />
                The back-end developers are those who maintain the server-side of a website, they are more concerned with how a website works and links together with a database to draw information. The back-end developers mainly work with APIs (Application Programmable interface), data collection, back-end logic, and architecture. This is the part of a website the user cannot see. An example is when you fill a form on a website, ever wonder how and where that goes to? It&#39;s managed by back-end developers. They use languages like Php, SQL, and C#.</p>

                <p><strong>3.The full stack developer</strong><br />
                Full stack developers are those concerned with everything done on a website. They have knowledge of the backend as well as the front-end aspect of web development and are fully able to implement this in making a complete and fully functioning website.</p>

                <p><strong>Skills required to be a web developer</strong><br />
                There are prior skills to become a web developer here are some of them:</p>

                <p><strong>Creative thinking</strong><br />
                Web developers should have a good graphic designer because he/she would need to design a webpage appealing to the user as well as need to create well-working interfaces that are easily understood.</p>

                <p><strong>Programming skills</strong><br />
                A good web developer must be a good programmer and should be able to think logically to implement various skills and logic into websites to improve use and functionality.</p>

                <p><strong>Collaboration skills</strong><br />
                Web developers are usually hired and put in teams because building and managing a website is quite a huge amount of work for a single individual so a good web developer should have good communication and collaboration skills.</p>

                <p><strong>Programming Languages and other software tools needed</strong></p>

                <p><strong>1.A markup language</strong><br />
                HTML(Hypertext Markup Language) is one of the most popular markup languages today and is used for the basic aspect of web designing which includes the creation of text-based formats, headers, footers, buttons, and so on.</p>

                <p><strong>2.A styling sheet language</strong><br />
                CSS(Cascading Style Sheet) shines in this case as it is the most widely used ruling format to design a web page applying colors, graphics, and so on.</p>

                <p><strong>3.A scripting language</strong><br />
                Javascript is the scripting language that can be used inline in the markup language or externally, it gives functionality to a website. It is required to learn one or more of its libraries or frameworks like Angular or Vanilla Js.</p>

                <p><strong>4.A back-end language</strong><br />
                C# and PHP(Hypertext Preprocessor) are great languages used in the back end, and server-side programming, they contain easy and reliable features.</p>

                <p><strong>5.A database language</strong><br />
                SQL (Structured Query Language) is a popular database language for data usage, storage, and management.</p>

                <p><strong>6.Version control</strong><br />
                Git is a good version control system that is used to store and update web pages without causing errors on the new features uploaded.</p>

                <p><strong>Conclusion</strong>.<br />
                The road of a thousand miles begins with a step, If you end up deciding to follow this aspect it&#39;ll be beneficial as long as you have these skills and knowledge. Hope you enjoyed reading this article, like, share and comment your thoughts.</p>


                 ',
                'user' => $devguy->id,
                'category' => 3,
                'slug' => 'blog-title-6',
                'tags' => 'web, coding',
                'readtime' => 10,
                'image' => '/assets/defaults/blog6.jpg',
            ],

        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
