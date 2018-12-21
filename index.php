<!DOCTYPE html>
<html>
<?php include 'php_includes/connectDB.php' ?>
<?php include 'php_includes/index_head.php' ?>


<body>
    <?php include 'php_includes/sidenav.php' ?>
    <!-- Section:Tab-content -->
    <div class="row hide-homep">
        <a href="#" data-activates="slide-out" class="button-collapse tooltipped sidenav-menu" id="side-menu" data-position="right"
            data-tooltip="Click to Open/Close the Menu">
            <i class="fas fa-bars cyan-text"></i>
        </a>
        <div class="col s12 m12 l12" style="margin: 0;padding: 0">
            <div class="row">
                <ul class="tabs tab-fix" id="tab-nav">
                    <li class="col  l7"></li>
                    <li class="tab col s3 m3 l1">
                        <a href="#tab1" class="tooltipped" data-position="bottom" data-tooltip="Home">
                            <i class="fas fa-home tab1-icon cyan-text"></i>
                            <span class="blue-text tab1-header hide-on-med-and-down">
                                Home</span>
                        </a>
                    </li>
                    <li class="tab col s3 m3 l1">
                        <a href="#tab2" class="tooltipped" data-position="bottom" data-tooltip="Blog">
                            <i class="fas fa-file-alt tab1-icon cyan-text"></i>
                            <span class="blue-text tab1-header hide-on-med-and-down">
                                Blog</span>
                        </a>
                    </li>
                    <li class="tab col s3 m3 l1">
                        <a href="#tab4" class="tooltipped" data-position="bottom" data-tooltip="Projects">
                            <i class="fab fa-black-tie tab1-icon cyan-text"></i>
                            <span class="blue-text tab1-header hide-on-med-and-down">
                                Projects</span>
                        </a>
                    </li>
                    <li class="tab col s3 m3 l1">
                        <a href="#tab3" class="tooltipped" data-position="bottom" data-tooltip="Gallery">
                            <i class="fas fa-camera-retro tab1-icon cyan-text"></i>
                            <span class="blue-text tab1-header hide-on-med-and-down">
                                Gallery</span>
                        </a>
                    </li>
                    <li class="tab col s3 m3 l1 disabled">
                        <a href="#tab4" class="tooltipped" data-position="bottom" data-tooltip="Unavailable">
                            <i class="fas fa-cog tab1-icon cyan-text"></i>
                            <span class="blue-text tab1-header hide-on-med-and-down">
                                2333</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Tab1 -->
    <div class="col s12 hide-homep" id="tab1">
        <section class="slider fullscreen">
            <ul class="slides">
                <li>
                    <img src="img/r7.jpg" alt="">
                    <div class="caption center-align">
                        <h1 class="">I, Myself AM entirely
                            <br>made of claws</h1>
                    </div>
                </li>
                <li>
                    <img src="img/r10.jpg" alt="">
                    <div class="caption center-align">
                        <h1>Stick Together</h1>
                </li>
                <li>
                    <img src="img/background3.jpg" alt="">
                    <div class="caption right-align">
                        <h1>With good intentions</h1>
                    </div>
                </li>
            </ul>
        </section>
        </div>
        <!-- Tab2 -->
        <div class="col s12" id="tab2" class="tab2-content">

            <div class="parallax"></div>

            <div class="row js--wp-1 animatedParent" data-appear-top-offset='0'>
                <div class="col s12 animated fadeInDown">
                    <ul class="collapsible" data-collapsible="accordion">
                        <h1 class="blog-header center cyan-text">BLOG Post</h1>
                        <div class="section white">
                            <div class="row">
                                <div class="container">
                                    <p class="header summer">
                                        "
                                        <span>Summer</span>
                                        , it's a season for skin exposion. when girls dress bikini running and jumping on the beach jazzly, and men....well, I don't
                                        care about men. I like summer"
                                    </p>
                                    <div class="right-align sum-author">by- Troy Wu</div>
                                </div>
                            </div>
                        </div>
                        <li>
                            <div class="collapsible-header tooltipped" data-tooltip="click to read or close" data-position="bottom">
                                <i class="material-icons cyan-text darken-1">chrome_reader_mode
                                </i>
                                <span class="cyan-text lighten-5">05-27-2018
                                    <i class="fas fa-bookmark"></i>
                                </span>

                            </div>
                            <div class="collapsible-body">
                                <div class="container">
                                    <h5 class="center">First Post</h5>
                                    <span>Well, I don't know what to say. I am just so proud of myself for building this beautiful,
                                        responsive and awesome website. This is a upgrade to my pervious website, if you
                                        haven't visited it here is link:
                                        <a href="version1/index.html" target="_blank">version 1</a>
                                    </span>
                                    <p>When I chose Computer Science, I have not idea what I can do after I gain the degree
                                        of this major. I learnt every common programming language like: Java, C++, Python
                                        and so on, and none of them intestes me untill I saw the term "front-end-developer".</p>
                                    <p>As front-end-developers, we will focus on the UI (User Interface) mostly. Briefly, a
                                        front-end-developer is to create something everyone can see, and I like it. I want
                                        to create something everyone can see, and I want to create my idea and show it to
                                        the public. So, I now find my path to be a front-end-developer.</p>
                                    <p>The first website I built, I spent around 7hours each day, no kidding. I was never addited
                                        to something like that before, and the most amazing thing is I totally enjoyed every
                                        second I spent on it. That's unbelievable to me. I never like study this much before,
                                        everytime I learn some new tricks, it drives me crazy. Howver, I am not a smart person.
                                        So, what I learn is just to study other's code, and google any idea I have but I
                                        don't have the knowledge to do it. I just like what I do.</p>
                                    <p>Few months later in summer, I finally had enough time to start building my new website
                                        with the new knowledge I have learnt so far. Eventually, I didn't let myself down.
                                        Although this is not the best website, and it is also not functional because I have
                                        learnt PHP yet, but it is still amazing to me and I am feelling exciting.</p>
                                    <p>For the first post, I have to type something. So, here all I got. I don't know if I am
                                        good enough to earn the title of "front-end-developer", but no matter waht I will
                                        never give up on doing something I like.</p>
                                    <div class="container post-img">
                                        <img data-src="blogpost-img/post1.jpg" class="lazyload responsive-img materialboxed" alt="">
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons cyan-text darken-1">chrome_reader_mode
                                </i>
                                <span class="cyan-text lighten-5">06-03-2018
                                    <i class="fas fa-bookmark"></i>
                                </span>
                            </div>
                            <div class="collapsible-body">
                                <div class="container">
                                    <p>How to start it? Since nobody will read my blog anyway, so I think I just type whatever
                                        I want. Damn, it is good to own a self-built website. Oh, I finally got something
                                        to say. I have not played any pc game for two weeks now. Self-high five. Instead,
                                        I have been kept learning new stuff like PHP, Jave and so on. Every day I wake up,
                                        I just want to work-out and study. The first time, there is a voice deep down in
                                        my heart told me do not waste time on playing game, and the first time I am so desperate
                                        to study. However, this is not the first time I want to be better. I wanted to change
                                        a lot, but I gave up immediately after two or three days. I have been keeping this
                                        situation for two weeks, every time I wake up I just want to improve myself. The
                                        reason I have been so motivated all thank to a girl.</p>
                                    <p>A girl I first time saw her was in a friends picture, her smile is so beautiful which
                                        lighted up my whole goddamn universe. From that moment, I started to change. I have
                                        been kept training every day, try to lose as much weight as I could because I did
                                        not want her to see a fat nerd. Also, the moment I met her in person, I made a promise
                                        to myself: every time I see her, I will be better. I have met tons of girls, some
                                        I like, some I do not, some super cute and some smart, but this is the first girl
                                        who can motivate me everyday by her smile. I know this sound totally stupid. I know
                                        I might never get her, but it is ok if I really try. Getting a girl is secondary,
                                        I have more important things to do, like saving the world. I am just kidding. But
                                        yes, I do have more important thing to do like getting a job next semester.</p>
                                    <p>I really enjoy days like these, all I do in a day is to study or to train which makes
                                        me feel every second I spent is so meaningful. Being a single isn’t bad, because
                                        when you have something to dream of, something you want to achieve, or just something
                                        you want, every minute you spent to make those things happen which will make the
                                        single life so bright. Now, I get it. How I feel about the life depends on what attitude
                                        I have. Now, my attitude is positive. Do not care other’s words, do what I want to
                                        do, dream what I want to dream, and be the guy I want to be. There is not shame to
                                        just being myself because there is only one life, and I am going to make it legendary.
                                    </p>
                                    <p>Summer has begun. There are a lot of things I want to do. Ok, here is a TO DO LIST:
                                        <br>
                                    </p>
                                    <p>Learn PHP to build a post forum on my website
                                        <br> Learn Angular or Node.js or Net.
                                        <br> Finish SASS class on Udemy
                                        <br> Keep practicing speaking English
                                        <br> Get the fucking eight packs before July 2018
                                        <br> Create few more pages on the website
                                        <br> Be stronger and smarter
                                        <br> Maybe sometime I feel so turndown, do not lose that the promise you made for the
                                        girl, and every day you work so hard to keep that promise
                                        <br> Do not forget the promise!!!
                                        <br> Be confident talking to every pretty girl
                                        <br> Ignore others think about you except the people you like or respect
                                        <br> Try to travel Key West again if I can Like myself.
                                    </p>
                                    
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons cyan-text darken-1">chrome_reader_mode
                                </i>
                                <span class="cyan-text lighten-5">06-09-2018
                                    <i class="fas fa-bookmark"></i>
                                </span>
                            </div>
                            <div class="collapsible-body">
                                <div class="container">
                                    <p>Okay, another post. Writing blog every day is for girl, So I am not going to post everyday
                                        because I am a grown-up man. So, I will do it once or twice a week probably. </p>
                                    <p>Study, Gym, Study, Gym…… Why am I getting so high every day? Every morning when the music
                                        starts, energy fills up my entire body. OMG, I never feel so alive. It is the first
                                        time there is nothing to regret about yesterday, because every moment I spend is
                                        to do something I enjoy. Just like the “Based Zesus” said: every time you choose
                                        to do something, you also choose to how to spend your time. Time is limited, 24 hours
                                        a day, not more, not less. How to make a day countable depends on how a person what
                                        to do with his/her time.</p>
                                    <p>Wait a second! Damn it. I think I know what is wrong with me. The reason why I have been
                                        so freaking awesome maybe is not because of the girl, it is because I am eventually
                                        fucking grew up from a kid to a man, a real man. Holy shit. Okay, everything makes
                                        sense now. That’s why I don’t like playing game and I want to be a better man to
                                        express a girl, because I am a real adult now. Self-five. It never feels so good
                                        to be an adult. Even though I am 25 now, I still like hanging out with kids at YMCA
                                        center. Perhaps I look old on my age, but inside of me was still 6. I guess the age
                                        of inside me just became 7 now. Anyway, I still want to be a kid who is innocent
                                        and pure. I just hate things become complicate between me and others, it makes me
                                        sick to guess what others thinks about me, or to mad at others says about me. Now,
                                        I can totally say those words to some people: yep, I don’t give a shit about it.
                                        So get lost.</p>
                                    <p>OKOK, I should probably ignore this heavy topic. Um, let’s talk about what happen today.
                                        Well, I bathed my cats this morning. If you can read this post, that means I am still
                                        alive. Every time I try to bathe my cats, I always end up getting scratched. I should
                                        probably wear a giant coat next time. Oh, the funniest thing is after I bathed both
                                        of them, Teetee becomes mad at Momo for no reason. I just don’t get it. I am the
                                        one Tee should be mad at, but he just gets really angry at his brother. Every time
                                        when I look at Momo’s innocent eyes while he is being threaten by his brother, I
                                        feel so guilty. The good thing is momo never fights back, yep, LOVE.</p>
                                    <p>If there are some good things happen, there are always some bad things come along. I
                                        just spent 300 bucks to have my car repaired. 300$. I can buy tons of courses on
                                        Udemy or I can get myself some awesome gears like a gaming chair, or a new watch.
                                        Every time I asked the mechanic if my car is still alright, I expect he would tell
                                        me the car is dead, I should get a new one. However, reality is cruel. The mechanic
                                        told me that my car is still on very good condition, it can run for next few years
                                        without any serious issue. Damn it, the only way I can get myself a new car is to
                                        get a job after graduation. </p>
                                    <p>BTW, I just learnt how to build a post board with PHP. I am so exciting. Learning new
                                        knowledge has been so attractive to me. After I get deeper in PHP, I am going to
                                        create a membership system. So, I can offer service to people like create their own
                                        web or other stuff with their own accounts. </p>
                                    <p>Being a front-end developer is no longer my goal, because my new goal is to be a full-stack
                                        developer. Work harder, train harder, be better!!!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons cyan-text darken-1">chrome_reader_mode
                                </i>
                                <span class="cyan-text lighten-5">09-17-2018</span>
                            </div>
                            <div class="collapsible-body">
                                <span>This is the first area</span>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons cyan-text darken-1">chrome_reader_mode
                                </i>
                                <span class="cyan-text lighten-5">09-17-2018</span>
                            </div>
                            <div class="collapsible-body">
                                <span>This is the first area</span>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons cyan-text darken-1">chrome_reader_mode
                                </i>
                                <span class="cyan-text lighten-5">09-17-2018</span>
                            </div>
                            <div class="collapsible-body">
                                <span>This is the first area</span>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons cyan-text darken-1">chrome_reader_mode
                                </i>
                                <span class="cyan-text lighten-5">09-17-2018</span>
                            </div>
                            <div class="collapsible-body">
                                <span>This is the first area</span>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons cyan-text darken-1">chrome_reader_mode
                                </i>
                                <span class="cyan-text lighten-5">09-17-2018</span>
                            </div>
                            <div class="collapsible-body">
                                <span>This is the first area</span>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons cyan-text darken-1">chrome_reader_mode
                                </i>
                                <span class="cyan-text lighten-5">09-17-2018</span>
                            </div>
                            <div class="collapsible-body">
                                <span>This is the first area</span>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons cyan-text darken-1">chrome_reader_mode
                                </i>
                                <span class="cyan-text lighten-5">09-17-2018</span>
                            </div>
                            <div class="collapsible-body">
                                <span>This is the first area</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l3 animatedParent">
                    <div class="card blue lighten-5 animated fadeInUpShort">
                        <div class="card-image">
                            <!-- image: 800*640 -->
                            <img class="lazyload" data-src="img/savannah.jpg" alt="">
                            <span class="card-title cyan-text blog-title">
                                <i class="fas fa-map-marker-alt"></i>Savannah</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light cyan activator tooltipped" data-position="bottom" data-tooltip="Clik to read more">
                                <i class="material-icons description">description</i>
                            </a>
                        </div>
                        <div class="card-content">
                            <p>Savannah, Georgia is a charming Southern escape where art, period architecture, trendy boutiques
                                and ghost stories are all set under a veil of Spanish moss. Savannah is a place where cuisine
                                comes straight from the coast and cocktails are served at every meal. -wikipedia
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title">I'm here
                                <i class="material-icons close right">close</i>
                            </span>
                            <p>The first time I went to Savannah was few years ago with my roomate. It's about 4 hours away
                                from my place which is acceptable to me. When I finally got there, I was shock by its distinctive
                                historical colouring and flavour of the times. The favourite spot I like is the riverside
                                street, I do jogging there every morning while I live in the Savannah</p>
                            <p>The main reason I like Savannah is not only it is beautiful, but also it is a great space for
                                me to relax. I always want to visit countryside of America, and Savannah makes my dream comes
                                true. I just like walking around every street in the downtown of Savannah, and relax</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="card blue lighten-5 animated fadeInUpShort">
                        <div class="card-image">
                            <!-- image: 800*640 -->
                            <img class="lazyload" data-src="img/keyw.jpg" alt="">
                            <span class="card-title cyan-text blog-title">
                                <i class="fas fa-map-marker-alt"></i>Key West</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light cyan activator tooltipped" data-position="bottom" data-tooltip="Clik to read more">
                                <i class="material-icons description">description</i>
                            </a>
                        </div>
                        <div class="card-content">
                            <p>Key West (Spanish: Cayo Hueso) is an island and city in the Straits of Florida, at the southwesternmost
                                end of the roadway through the Florida Keys in the state of Florida, United States. Its 14-block-long
                                crossing from the Gulf of Mexico to the Straits of Florida and the Atlantic Ocean. -wikipedia</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title">im here
                                <i class="material-icons close right">close</i>
                            </span>
                            <p>I still remembered the night before I started travelling to Florida. It was a night before the
                                independence day. My roomate suddently asked me if I wanted to go to Florida with him while
                                I was playing game around 9PM. He said:"I will leave to Florida tomorrow morning with or
                                without u." Then, I spent an hour packing up the stuff</p>
                            <p>David is the nicest and coolest guy I've seen because he drove all the way to Florida from my
                                place without stop except fueling gas. After about 9hours, we settled down in a fine hotel
                                in downtown of Miami, and then we ran straght to a square to watch the firework show. Yep,
                                we didn't take a break because we were so freaking young and full of energy</p>
                            <p>We spent two days in Miami, then we started driving to Key West. I knew nothing about key wes.
                                I just knew it is a southernmost city in US. While we were on the overseas highway which
                                connects every all limestone islane, I felt like I was in a blue heaven.....</p>
                            <p>I made a promise to myself when I was standing on a beach which made of soft white sand and watching
                                the sunset, "One Day, I will return here with my dream girl, and proposal to her". However,
                                that day hasn't come yet</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="card blue lighten-5 animated fadeInUpShort">
                        <div class="card-image">
                            <!-- image: 800*640 -->
                            <img class="lazyload" data-src="img/rockcity.jpg" alt="">
                            <span class="card-title cyan-text blog-title">
                                <i class="fas fa-map-marker-alt"></i>Rock City</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light cyan activator tooltipped" data-position="bottom" data-tooltip="Clik to read more">
                                <i class="material-icons description">description</i>
                            </a>
                        </div>
                        <div class="card-content">
                            <p>View of The High Falls of the Lookout Mountain "See Rock City" birdhouse in the resort city Pigeon
                                Forge, Tennessee A view from Rock City, 2001 Rock City is a roadside attraction on Lookout
                                Mountain in Lookout Mountain, Georgia, located near Ruby Falls. It is well known for the
                                many advertisements -wikipedia
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title">im here
                                <i class="material-icons close right">close</i>
                            </span>
                            <p>The first time I came here was with my taiwannese friend, Koan. We were good buddy back to 2012
                                before he dumbed me and returned to Taiwan. </p>
                            <p>It was a morning in fall, koan's uncle picked me up at my apartment, and then we drove to rock
                                city. Well,I didn't have my driver license that time. So, I barely left my apartment except
                                going to school or grocery shopping.</p>
                            <p>Koan's uncle told me roce city is the biggest private garden in the US, and I thought that own
                                must be the richest guy in the world. Right, eventhough he is not the richest guy in the
                                world, he is definitely one of the happiest guy in the world. The view in rock city is unbelievable.
                                especially the cliff, I guessed I just found my second back-up spot for proposal. </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="card blue lighten-5 animated fadeInUpShort">
                        <div class="card-image">
                            <!-- image: 800*640 -->
                            <img class="lazyload" data-src="img/nyT.jpg" alt="">
                            <span class="card-title cyan-text blog-title">
                                <i class="fas fa-map-marker-alt"></i>New York</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light cyan activator tooltipped" data-position="bottom" data-tooltip="Clik to read more">
                                <i class="material-icons description">description</i>
                            </a>
                        </div>
                        <div class="card-content">
                            <p>The City of New York, often called New York City (NYC) or simply New York, is the most populous
                                city in the United States. With an estimated 2017 population of 8,622,698 distributed over
                                a land area of about 302.6 square miles (784 km2), New York City is also the most densely
                                populated major city in the United States. -wikipedia</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title">im here
                                <i class="material-icons close right">close</i>
                            </span>
                            <p>New York is the first city I stayed when I just came to US. I stayed in NY for a week with my
                                uncle and cousins.</p>
                            <p>To be honest, I don't like New York city, because it reminds me everything of my hometown. This
                                is my first time away from my parent, it just makes me sad.</p>
                            <p>The reason I put New York here is I like the food there. As I said NY reminds me everything of
                                my hometown, so does the food. Evetytime I go to Flushing, I spent around hundered buck to
                                buy whatever I like. So, everytime I come back to Atlanta from NY, I gain few lbs which is
                                a great souvenir from NY.</p>
                            <p>I haven't went to New York for a long time, and now I begin to miss the food there</p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="parallax"></div>
            <div class="row commons animatedParent">
                <section class="section  animated fadeInUpShort">
                    <div class="card">
                        <div class="center cyan-text common">Comments</div>
                        <div class="row">
                            <div class="col m4"></div>
                            <div class="col s12 m4">
                                <form method="post" id="comment_form" action="php_includes/postform.php" enctype="multipart/form-data">
                                    <div class="input-field">
                                        <i class="material-icons prefix cyan-text ">account_circle</i>
                                        <input id="name" type="text" class="validate nameF" name="name">
                                        <label for="icon_prefix">Your Name</label>
                                    </div>
                                    <!-- <div class="input-field">
                                        <i class="material-icons prefix">access_time</i>
                                        <input id="date" type="text" class="datepicker" name="date">
                                        <label for="icon_prefix">Date:mm/dd/yy</label>
                                    </div> -->
                                    <div class="file-field input-field">    
                                        <div class="file-field input-field">
                                        <div class="">
                                        <i class="material-icons prefix cyan-text">add_box</i>
                                            <input type="file" name="image">
                                            <label for="icon_prefix" >Upload Your Picture(optional)</label>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate " type="text" name="image">
                                        </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="input-field">
                                        <i class="material-icons prefix cyan-text ">mode_edit</i>
                                        <textarea name="content" id="content" data-length="60" class="materialize-textarea"></textarea>
                                        <label for="icon_prefix">Your Voice, Be Nice</label>
                                    </div>
                                    <button class="btn waves-effect waves-light cyan right" type="button" name="add_comment" id="sub" onclick="checkSub()">Submit
                                        <i class="material-icons right">send</i>
                                    </button>
                                </form>
                            </div>
                            <div class="col m4"></div>
                        </div>
                        <!-- 
                            PHP for Comments
                             -->
                        <div class="row center">
                        <?php 
                        $query = "SELECT * FROM post WHERE user_status = 'approve'";
                        $all_post_query = mysqli_query($con,$query);
                        while($row = mysqli_fetch_array($all_post_query)){
                            $user_name = $row['user_name'];
                            $user_content = $row['user_content'];
                            $user_date = $row['user_date'];
                            $user_image = $row['user_picture'];
                            echo "<div class='chip cyan lighten-5'>";
                            echo "<img src='uploaded_image/{$user_image}'>";
                            echo "<div class=''>";
                            echo "<span class='light-blue-text accent-3' style='margin-right:5px'>{$user_date}</span>";
                            echo "<span class='light-blue-text accent-3'>{$user_name}</span>";
                            echo "</div>";
                            echo "<span class='cyan-text'>{$user_content}</span>";
                            echo "</div>";
                        }
                        ?>
                            <!-- <div class="chip cyan lighten-5">
                                <img src="peopleimg/girl1.jpeg">
                                <div class="">
                                    <span class="light-blue-text accent-3" style="margin-right:5px">2018-07-21</span>
                                    <span class="light-blue-text accent-3">0123456789</span>  
                                </div>
                                <span class="cyan-text" id="comment-text" style="line-height:90%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, odio!     
                            </div>
                            <div class="chip cyan lighten-5">
                                <img src="peopleimg/girl3.jpeg">
                                <span class="cyan-text">He has not idea how to talk to a girl, especially the girl he likes</span>
                            </div>
                            <div class="chip cyan lighten-5">
                                <img src="peopleimg/girl2.jpeg">
                                <span class="cyan-text">Troy is the guy I can count on, and a good work-out buddy</span>
                            </div>
                       
                            <div class="chip cyan lighten-5">
                                <img src="peopleimg/son.jpg">
                                <span class="cyan-text">Meow meow meow~~~Meow,meow meow meow meow!!Meow</span>
                            </div>
                            <div class="chip cyan lighten-5">
                                <img src="peopleimg/guy2.jpeg">
                                <span class="cyan-text">I will marry him if I am a girl. Sadly, I am a man, so all I wanna say is he is a good guy</span>
                            </div>
                            <div class="chip cyan lighten-5">
                                <img src="peopleimg/girl4.jpeg">
                                <span class="cyan-text"> Judging by the way he is so sweet and playful with kids, he's going to make a great dad one
                                    day.
                                </span>
                            </div> -->
                        </div>
                        <h5 class="center cyan-text">Pick what you think about Troy</h5>
                        <div class="row center">
                            <a id="toast1" class="btn blue accent-1">Handsome</a>
                            <a id="toast2" class="btn cyan">Smart</a>
                            <a id="toast3" class="btn blue accent-1">Stupid</a>
                            <a id="toast4" class="btn cyan lighten-3">Ugly</a>
                            <a id="toast5" class="btn cyan lighten-3">Like Me?</a>
                        </div>
                    </div>
                </section>
            </div>
            <!-- scroll button -->
            <div class="Gotop tooltipped" data-position="left" data-tooltip="Click to ScrollUp">
                <i class="fas fa-arrow-alt-circle-up"></i>
            </div>
            <div class="Godown tooltipped" data-position="left" data-tooltip="Click to ScrollDown">
                <i class="fas fa-arrow-circle-down"></i>
            </div>
        </div>
        <!-- tab3 gallery content -->
        <div class="col s12 " id="tab3" style="margin: 0;padding: 0;">
            <div class="row" style="margin-top: 40px" id="blog-frame">
                <div class="container">
                    <h3 class="gallery-header">Gallery</h3>
                    <p class="header summer center">
                        "
                        <span>Everything </span>will come to the end, but you, will forever fade in to my brain "
                    </p>
                    <div class="right-align sum-author">by- Troy Wu</div>
                </div>
                <!-- gallery image size: 800 * 600 -->
            </div>
            <div class="row left" style="margin: 0">
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUp">
                        <img class="lazyload" data-src="galleryimg/r7_2.jpg" />
                        <div class="mask">
                            <h2>Photoshop Effect</h2>
                            <p>Spent a few hours learning Photoshop, and this what I go.I do need some good selfie</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUp">
                        <img class="lazyload" data-src="galleryimg/r10_2.jpg" />
                        <div class="mask">
                            <h2>Phtoshop Effect</h2>
                            <p>Spent a few hours learning Photoshop, and this what I go.I do need some good selfie</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animated animatedParent">
                    <div class="view view-first materialboxed animated fadeInUp">
                        <img class="lazyload" data-src="galleryimg/HAHA.jpg" />
                        <div class="mask">
                            <h2>Photoshop Effect</h2>
                            <p>Spent a few hours learning Photoshop, and this what I go.I do need some good selfie</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animated animatedParent">
                    <div class="view view-first materialboxed animated fadeInUp">
                        <img class="lazyload" data-src="galleryimg/mercer.jpg" />
                        <div class="mask">
                            <h2>The first University I attended</h2>
                            <p>I still remembered that day wwhen I first time came to here, I had nowhere to go since dorm was
                                full. Luckly, a professor Cem picked me up, and let me live with his family for a week</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l6 animatedParent">
                    <div class="view view-tenth animated fadeInLeftShort" style="margin: 0;padding: 0">
                        <img class="lazyload" data-src="galleryimg/myson.jpg" />
                        <div class="mask">
                            <h2>My Sweeeeeet Little Angels</h2>
                            <p>I was't supposed to adopt cats as an international student. But once I took them home, I know
                                I just made a lifttime promise at the same time.I swear, I will take care of them forever.
                                I love them</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated growIn" style="margin: 0;padding: 0">
                        <img class="lazyload" data-src="galleryimg/house1.jpg" />
                        <div class="mask">
                            <h2>The first house I rent</h2>
                            <p>The first house I rent was from an Asian family.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated growIn" style="margin: 0;padding: 0">
                        <img class="lazyload" data-src="galleryimg/house2.jpg" />
                        <div class="mask">
                            <h2>The first house I bought</h2>
                            <p>The first house I bought. I have feeling I gonna buy the second one</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInLeftShort" style="margin: 0;padding: 0">
                        <img class="lazyload" data-src="galleryimg/keyw.jpg" />
                        <div class="mask">
                            <h2>Key West</h2>
                            <p>Key west is the most beautiful place I have ever gone. I wish I will visit it again, especially
                                with a girl I like</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInLeftShort" style="margin: 0;padding: 0">
                        <img class="lazyload" data-src="galleryimg/BBF.jpg" />
                        <div class="mask">
                            <h2>BBF</h2>
                            <p>Best Buddies Forever. We were three musketeers. Together we will conquer the whole god damn universe.
                                hahahaha
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUpShort" style="margin: 0;padding: 0">
                        <img class="lazyload" data-src="galleryimg/littleme.jpg" />
                        <div class="mask">
                            <h2>Me and My dad</h2>
                            <p>What should I say? I was cute. I am still cute now
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUpShort" style="margin: 0;padding: 0">
                        <img class="lazyload" data-src="galleryimg/keyw1.jpg" />
                        <div class="mask">
                            <h2>Road Trip to Key West</h2>
                            <p>This is a bridge connect the mainland all the way to key west. When we drove on it, all you can
                                see is an endless ocean, all you can hear is a song through the wind
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUpShort" style="margin: 0;padding: 0">
                        <img class="lazyload" data-src="galleryimg/guys.jpg" />
                        <div class="mask">
                            <h2>A movie day with two cute girls</h2>
                            <p>TIME is a bit.ch. Why caouldn't it pass slower, so that I could enjoy the moment while we were
                                Together a little bit longer.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUpShort" style="margin: 0;padding: 0">
                        <img class="lazyload" data-src="galleryimg/20180526211601.png" />
                        <div class="mask">
                            <h2>Hiking so fun</h2>
                            <p>Let's go hiking
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row left animatedParent animateOnce">
                <div class="col s6 m6 l2 animated lightSpeedInLeft">
                    <div class="view view-first materialboxed" style="margin: 0;padding: 0">
                        <img src="galleryimg/philParty1.jpg" />
                        <div class="mask">
                            <h2>In Tennessee?</h2>
                            <p>Philip brought me there to his bachelor party, I totally forget where it is
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m6 l2 animatedParent animateOnce">
                    <div class="view view-first materialboxed animated lightSpeedInLeft" style="margin: 0;padding: 0">
                        <img src="galleryimg/philParty2.jpg" />
                        <div class="mask">
                            <h2>In Tennessee?</h2>
                            <p>Philip brought me there to his bachelor party, I totally forget where it is
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m6 l2 animatedParent animateOnce">
                    <div class="view view-first materialboxed animated lightSpeedInLeft" style="margin: 0;padding: 0">
                        <img src="galleryimg/philiParty3.jpg" />
                        <div class="mask">
                            <h2>Philip's Bachelor Party</h2>
                            <p>Philip brought me there to his bachelor party, I totally forget where it is
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m6 l2 left animatedParent animateOnce">
                    <div class="view view-first materialboxed animated lightSpeedInRight" style="margin: 0;padding: 0">
                        <img src="galleryimg/rubyfall.jpg" />
                        <div class="mask">
                            <h2>Ruby Fall</h2>
                            <p>Ruby Fall. U know, Ruby, fall...A women whose name is Ruby falls
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m6 l2 left animatedParent animateOnce">
                    <div class="view view-first materialboxed animated lightSpeedInRight" style="margin: 0;padding: 0">
                        <img src="galleryimg/sM1.jpg" />
                        <div class="mask">
                            <h2>Stone Mountain</h2>
                            <p>First time watching sunrise at the top of stone mountain
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m6 l2 animatedParent animateOnce">
                    <div class="view view-first materialboxed animated lightSpeedInRight" style="margin: 0;padding: 0">
                        <img src="galleryimg/stoneM.jpg" />
                        <div class="mask">
                            <h2>Stone Mountain</h2>
                            <p>First time watching sunrise at the top of stone mountain
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row js--wp-1">
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUpShort" style="margin: 0;padding: 0">
                        <img src="galleryimg/parent.jpg" />
                        <div class="mask">
                            <h2>My Parent</h2>
                            <p>There are some people when the whole world turns to against you, but they won't. Their love to
                                us will never expire, and this is family
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUpShort" style="margin: 0;padding: 0">
                        <img src="galleryimg/mom.jpg" />
                        <div class="mask">
                            <h2>My Hot MoM</h2>
                            <p>The hottest mom in the world
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUpShort" style="margin: 0;padding: 0">
                        <img src="galleryimg/brother.jpg" />
                        <div class="mask">
                            <h2>My Brother</h2>
                            <p>I wish I was there, in his childhood. I wish I would always right by his side when he needs me.
                                Although you have better name then mine, I still miss you, brother
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUpShort" style="margin: 0;padding: 0">
                        <img src="galleryimg/me1.jpg" />
                        <div class="mask">
                            <h2>Me</h2>
                            <p>Seriously, When will I have 8 packs?
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUpShort" style="margin: 0;padding: 0">
                        <img src="galleryimg/reaper.jpg" />
                        <div class="mask">
                            <h2>Reaper OW</h2>
                            <p>My favourite character from overwatch is Reaper. DIEDIEDIE.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUpShort" style="margin: 0;padding: 0">
                        <img src="galleryimg/TOTALW.jpg" />
                        <div class="mask">
                            <h2>First Lose in Battlefield</h2>
                            <p>Dman it. I got defeated by AI. My whole army are dead. Sobbing.....
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUpShort" style="margin: 0;padding: 0">
                        <img src="galleryimg/lol.jpg" />
                        <div class="mask">
                            <h2>League of Legend</h2>
                            <p>Ha! Beaten by a little girl. I meant, boy. Uh, big boy.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUpShort" style="margin: 0;padding: 0">
                        <img src="galleryimg/cf.jpg" />
                        <div class="mask">
                            <h2>CrossFire</h2>
                            <p>i was good. Really Good
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUpShort" style="margin: 0;padding: 0">
                        <img src="galleryimg/GPCgroup.jpg" />
                        <div class="mask">
                            <h2>Reaper OW</h2>
                            <p>First time kayaking was with these awesome people while I was in GPC
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUpShort" style="margin: 0;padding: 0">
                        <img src="galleryimg/firstdance.jpg" />
                        <div class="mask">
                            <h2>First Time dancing with American Girls</h2>
                            <p>Dancing is not my thing but when I got invited by girls, I became crazy. I meant I dance like
                                a cripple
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUpShort" style="margin: 0;padding: 0">
                        <img src="galleryimg/DAD'SFARM.jpg" />
                        <div class="mask">
                            <h2>Dad's Farm with My classmates</h2>
                            <p>We threw a BBQ party at my Dad's farm. It was awesome.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 animatedParent">
                    <div class="view view-first materialboxed animated fadeInUpShort" style="margin: 0;padding: 0">
                        <img src="galleryimg/friend'sparty.jpg" />
                        <div class="mask">
                            <h2>A friend's party</h2>
                            <p>I was in a friend's party in highschool. I looks freaking good when i wasm't fat
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- scroll button -->
            <div class="Gotop tooltipped" data-position="left" data-tooltip="Click to ScrollUp">
                <i class="fas fa-arrow-alt-circle-up"></i>
            </div>
            <div class="Godown tooltipped" data-position="left" data-tooltip="Click to ScrollDown">
                <i class="fas fa-arrow-circle-down"></i>
            </div>
        </div>

        <!-- Tab4  -->
        <div class="col s12" id="tab4">
            <div class="row" style="margin-top: 0px" id="project_header">
                <div class="container project_tt" style="text-align: center">
                    <h5 class="project_title" id="project_title">Project Showcases</h5>
                </div>
                <!-- gallery image size: 800 * 600 -->
            </div>
            <div class="container">
                <div class="row row-1">
                    <div class="col m12 l10">
                        <div class="row">
                            <div class="col m7 scrollspy animatedParent" id="project1">
                                <div class="card animated fadeInDown">
                                    <div class="card-image">
                                        <img src="img/project1_cover.png" alt="">
                                        <span class="card-title hide-on-med-and-up card_project_title">Materialize Framework Demos</span>
                                        <a href="#abstract1" class="btn-floating halfway-fab waves-effect waves-light cyan modal-trigger">
                                            <i class="material-icons">add</i>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <p class="project_starts">
                                            <i class="material-icons">start</i>
                                            <i class="material-icons">start</i>
                                            <i class="material-icons">start</i>
                                            <i class="material-icons">start</i>
                                            <i class="material-icons">start</i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col m5 hide-on-small-only">
                                <div class="img-content">
                                    <h3 class="prjoect_headingcolor">Materialize Framework Demos</h3>
                                    <ul>
                                        <li>Fully responsive on mobile devides or desktop</li>
                                        <li>Implemented by Using Materialize CSS framework</li>
                                        <li>Built by HTML, CSS, Javascript, jQuery, SASS</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m5 hide-on-small-only">
                                <div class="img-content">
                                    <h3 class="prjoect_headingcolor">Bootstrap 4 Demos</h3>
                                    <ul>
                                        <li>Fully responsive on mobile devides or desktop</li>
                                        <li>Implemented by Using Bootstrap 4 CSS framework</li>
                                        <li>Built by HTML, CSS, Javascript, jQuery</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col m7 scrollspy animatedParent" id="project4">
                                <div class="card animated fadeInUpShort">
                                    <div class="card-image">
                                        <img src="projectimg/bootstrap.jpg" alt="">
                                        <span class="card-title hide-on-med-and-up card_project_title">Bootstrap 4 Demos</span>
                                        <a href="#abstract4" class="btn-floating halfway-fab waves-effect waves-light cyan modal-trigger">
                                            <i class="material-icons">add</i>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <p class="project_starts">
                                            <i class="material-icons">start</i>
                                            <i class="material-icons">start</i>
                                            <i class="material-icons">start</i>
                                            <i class="material-icons">start</i>
                                            <i class="material-icons">start</i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m7 scrollspy animatedParent" id="project2">
                                <div class="card animated fadeInUpShort">
                                    <div class="card-image">
                                        <img src="projectimg/cms3.png" alt="">
                                        <span class="card-title hide-on-med-and-up card_project_title">Hello World</span>
                                        <a href="#abstract2" class="btn-floating halfway-fab waves-effect waves-light cyan modal-trigger">
                                            <i class="material-icons">add</i>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <p class="project_starts">
                                            <i class="material-icons">start</i>
                                            <i class="material-icons">start</i>
                                            <i class="material-icons">start</i>
                                            <i class="material-icons">start</i>
                                            <i class="material-icons">start</i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col m5 hide-on-small-only">
                                <div class="img-content">
                                    <h3 class="prjoect_headingcolor">Custom Content Management System</h3>
                                    <ul>                   
                                        <li>Be able to manage posts and comments</li>
                                        <li>Be able to login to system as an admin or a qulify user</li>
                                        <li>Built by HTML, CSS, Javascript, jQuery, PHP</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m5 hide-on-small-only">
                                <div class="img-content">
                                    <h3 class="prjoect_headingcolor">Pig Dice Game</h3>
                                    <ul>
                                        <li>Pig is what’s known as a jeopardy game</li>
                                        <li>Custom winning condition</li>
                                        <li>Built by HTML, CSS, Javascript, jQuery</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col m7 scrollspy animatedParent" id="project3">
                                <div class="card animated fadeInUpShort">
                                    <div class="card-image">
                                        <img src="projectimg/piggame.png" alt="">
                                        <span class="card-title hide-on-med-and-up card_project_title">Pig Dice Game</span>
                                        <a href="#abstract3" class="btn-floating halfway-fab waves-effect waves-light cyan modal-trigger">
                                            <i class="material-icons">add</i>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <p class="project_starts">
                                            <i class="material-icons">start</i>
                                            <i class="material-icons">start</i>
                                            <i class="material-icons">start</i>
                                            <i class="material-icons">start</i>
                                            <i class="material-icons">start</i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l2">
                        <div class="col show-on-medium-and-down m3 l2 s12">
                            <ul class="pinned section table-of-contents">
                                <li>
                                    <a href="#project1" class="scrllspy_label">Materilize CSS Framework Demos</a>
                                </li>
                                <li>
                                    <a href="#project4" class="scrllspy_label">Bootstrap 4 Demos</a>
                                </li>
                                <li>
                                    <a href="#project2" class="scrllspy_label">Custome Content Management System</a>
                                </li>
                                <li>
                                    <a href="#project3" class="scrllspy_label">Javascipt Game</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top:500px;"></div>

        </div>

        <!-- Modal 1 -->
        <div id="abstract1" class="modal project_model">
            <div class="modal-content">
                <h4 class="prjoect_headingcolor">Materilize Projects</h4>
                <div class="materialboxed">
                    <img src="projectimg/bizland.png" alt="" class="responsive-img">
                </div>
                <p>Link:
                    <a href="web_projects/bizland/index.html" target="_blank">Bizland</a>
                </p>
                <br>
                <div class="materialboxed">
                    <img src="projectimg/oniminfood.png" alt="" class="responsive-img">
                </div>
                <p>Link:
                    <a href="web_projects/Omnifood - After Section 7/index.html" target="_blank">Omnifood</a>
                </p>
                <br>
                <div class="materialboxed">
                    <img src="projectimg/quazzu.png" alt="" class="responsive-img">
                </div>
                <p>Link:
                    <a href="web_projects/qauzzu/index.html" target="_blank">Qauzzu</a>
                </p>
                <br>
                <div class="materialboxed">
                    <img src="projectimg/travallieve.png" alt="" class="responsive-img">
                </div>
                <p>Link:
                    <a href="web_projects/travelville/index.html" target="_blank">Travelville</a>
                </p>
                <br>
                <div class="materialboxed">
                    <img src="projectimg/madmin.png" alt="" class="responsive-img">
                </div>
                <p>Link:
                    <a href="web_projects/Madmin/index.html" target="_blank">Madmin</a>
                </p>
                <br>
            </div>
        </div>
                        
        <!-- modal 2 -->
         <div id="abstract2" class="modal project_model">
            <div class="modal-content">
                <h4 class="prjoect_headingcolor">Custom Content Management System</h4>
                <div class="materialboxed">
                    <img src="projectimg/cms1.png" alt="" class="responsive-img">
                </div>
                <br>
                <div class="materialboxed">
                    <img src="projectimg/cms2.png" alt="" class="responsive-img">
                </div>
                <br>
                <div class="materialboxed">
                    <img src="projectimg/cms3.png" alt="" class="responsive-img">
                </div>
                <br>
                <div class="materialboxed">
                    <img src="projectimg/cms4.png" alt="" class="responsive-img">
                </div>
                <br>
                <div class="materialboxed">
                    <img src="projectimg/cms5.png" alt="" class="responsive-img">
                </div>
                <br>
            </div>
        </div>
         <!-- modal 3 -->
         <div id="abstract3" class="modal project_model">
            <div class="modal-content">
                <h4 class="prjoect_headingcolor">Pig Dice Game</h4>
                <div class="materialboxed">
                    <img src="projectimg/piggame.png" alt="" class="responsive-img">
                </div>
                <br>
                <div class="materialboxed">
                    <img src="projectimg/pg.png" alt="" class="responsive-img">
                </div>
                <p>Link:
                    <a href="web_projects/Pig-Game/index.html" target="_blank">Let's play</a>
                </p>
            </div>
        </div>
                <!-- Modal 4 -->
        <div id="abstract4" class="modal project_model">
            <div class="modal-content">
                <h4 class="prjoect_headingcolor">Bootstrap 4 Projects</h4>
                <div class="materialboxed">
                    <img src="projectimg/bproject2.png" alt="" class="responsive-img">
                </div>
                <p>Link:
                    <a href="web_projects/bProjects/bProject1/index.html" target="_blank">BusinessMen</a>
                </p>
                <br>
                <div class="materialboxed">
                    <img src="projectimg/bProject1.png" alt="" class="responsive-img">
                </div>
                <p>Link:
                    <a href="web_projects/bProjects/bProject3/index.html" target="_blank">SmartTisanLOL</a>
                </p>
                <br>
            </div>
        </div>


        <!-- Preloader -->
        <div class="loader">
            <h1 class="center">Coming Soon</h1>
            <div class="progress">
                <div class="indeterminate" style="color: cyan"></div>
            </div>
        </div>
                        



        <!--Import jQuery before materialize.js-->
        <?php include 'php_includes/index_script.php' ?>
        <script>
        //check submitted data
function checkSub() {
  var name = document.getElementById('name').value;
  var content = document.getElementById('content').value;
  var nameL = name.length;
  var contentL = content.length;
  if(name === ""){
      alert("Please Enter Your Name");
  }else if(nameL > 10){
      alert("Name Too Long");
  }else if(content === ""){
      alert("Please Say Something");
  }else if(contentL > 60){
      alert("You say too much");
  }else{
      document.getElementById("comment_form").submit();
  }
}

function checkAdmin() {
  var name = document.getElementById('admin_name').value;
  var key = document.getElementById('admin_key').value;

  var default_name = "<?php echo $user_acc ?>";
  var default_key = "<?php echo $user_key ?>";

  if (name === default_name && key === default_key) {
    document.getElementById("admin_login").submit();
  }else{
      alert("Please check your account and password");
  }
}

var count = <?php echo $unapprove_count; ?>;
function noticf_icon(x) {
      if (x <= 0) {
          document.getElementById("notif_icon").style.display = "none";
      }
  }
  
noticf_icon(count);

        </script>
</body>

</html>